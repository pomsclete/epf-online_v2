<?php
namespace App\Livewire\User;

use App\Models\Annee;
use App\Models\Demande;
use App\Models\DocAFournirDemande;
use App\Models\Document;
use App\Models\NiveauFormation;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

class DossierComponent extends Component
{
    public $numero , $idNiv;
    public $form,$file,$libelle,$doc;
    public $intitule,$designation,$num,$duree,$date;
    public $editModalOpen = false;
    public $isFormOpen = false;
    use WithFileUploads;
    use LivewireAlert;

    public function openModal($id){
        $this->isFormOpen = true;
        $this->idNiv = $id;
    }

    public function editModal($id){
        $this->isFormOpen = true;
        $this->editModalOpen = true;
        $this->idNiv = $id;
        $donne = DocAFournirDemande::select('doc_a_fournir_demandes.updated_at','fichier','documents.libelle')
                                    ->join('documents','documents.id','=','doc_a_fournir_demandes.document_id')
                                    ->where('doc_a_fournir_demandes.id',$id)
                                    ->get()->first();
        $this->libelle = $donne->libelle;
        $this->doc = $donne->fichier;
    }

    public function closeModal(){
        $this->isFormOpen = false;
        $this->editModalOpen = false;
        $this->resetValidation();
        $this->idNiv = "";
    }

    public function download($id)
    {
        $donne = DocAFournirDemande::select('fichier')
            ->where('doc_a_fournir_demandes.id',$id)
            ->get()->first();
        return response()->download(public_path('storage/candidat/'.$donne->fichier));
    }

    public function addNotif()
    {
        try {
            Notification::create([
                'titre' => 'Validation document',
                'content' => "Un étudiant est en attente de validation de dossier",
                'contentEtu' => "Envoi pour demande de validation de documents",
                'user_id' => Auth::user()->id
            ]);
            $this->alert('success', 'Votre demande de validation a été envoyé avec succés',[
                'position' => 'center',
                'timer' => 2000,
                'toast' => false,
                'timerProgressBar' => true,
            ]);
        } catch (\Exception $ex) {
            $this->alert('warning', 'Something goes wrong!!');
        }
    }

    public function store()
    {
        $this->validate([
            'file' => 'required|mimes:pdf|max:2048'
        ]);
        try {
            $anneeQuery = DocAFournirDemande::query();
            if (!empty($this->idNiv)) {
                $year = $anneeQuery->find($this->idNiv);
                if ($year) {
                    $fichier = $this->file->hashName();
                    $this->file->store('candidat','public');
                    $year->update([
                        'fichier' => $fichier,
                        'etat' => 1
                    ]);

                    Demande::where('id',$year->demande_id)->get()->first()->update([
                        'avance' => 1
                    ]);
                }
                $this->closeModal();
                $this->alert('success', 'Enregistrement éffectué avec succés');
            } else {
                $this->alert('success', 'Oups merci de réessayer');
            }

        } catch (\Exception $ex) {
            dd($ex);
            $this->alert('warning', 'Something goes wrong!!');
        }
    }

    public function mount(){
        $niv = NiveauFormation::select('intitule','designation','niveau_formations.id as idNiv','numero','demandes.created_at','formations.duree')
            ->join('formations', 'formations.id','=','niveau_formations.formation_id')
            ->join('niveaux','niveaux.id','=','niveau_formations.niveau_id')
            ->join('demandes', 'demandes.niveau_formation_id','=','niveau_formations.id')
            ->where('demandes.numero',$this->numero)
            ->first();

        $this->intitule = $niv->intitule;
        $this->designation = $niv->designation;
        $this->num = $niv->numero;
        $this->duree = $niv->duree;
        $this->date = $niv->created_at;
        $this->idNiv = $niv->idNiv;
    }

    public function verif(){
        $res = Demande::select('id')->where('niveau_formation_id',$this->idNiv)
            ->where('user_id', Auth::user()->id)->orderBy('id','DESC')->first();
        if($res) {
            return $res->id;
        } else { return 0;}
    }

    public function avancement(){
        $res = Demande::select('avance')->where('niveau_formation_id',$this->idNiv)
            ->where('user_id', Auth::user()->id)->orderBy('id','DESC')->first();
        if($res){
            if($res->avance == 0) {
                return 25;
            } elseif($res->avance == 1){
                return 50;
            } elseif($res->avance == 2) {
                return 75;
            } elseif($res->avance == 3) {
                return 95;
            }
            elseif($res->avance == 4) {
                return 100;
            }
            else {
                return 100;
            }
        }
        else { return 0;}
    }

    public function avancementTxt(){
        $res = Demande::select('avance')->where('niveau_formation_id',$this->idNiv)
            ->where('user_id', Auth::user()->id)->orderBy('id','DESC')->first();
        if($res){
            if($res->avance == 0) {
                return 'Création du dossier';
            } elseif($res->avance == 1){
                return 'Documents déposés';
            } elseif($res->avance == 2) {
                return "Validation Documents en cours";
            }  elseif($res->avance == 3) {
                return "En attente délibération";
            }
            elseif($res->avance == 4) {
                return "Dossier refusé";
            }
            else {
                return "Dossier accepté et lettre d'admission disponible";
            }
        }
        else { return "En attente candidature";}
    }

    #[Layout('components.layouts.app')]
    #[Title('Suivi de dossier')]
    public function render()
    {
        return view('livewire.user.dossier-component',[
            'documents' => Document::select('libelle','avance','obligation','fichier','doc_a_fournir_demandes.etat','doc_a_fournir_demandes.id','doc_a_fournir_demandes.updated_at')
                        ->join('doc_a_fournir_demandes','doc_a_fournir_demandes.document_id','=','documents.id')
                        ->join('demandes','demandes.id','=','doc_a_fournir_demandes.demande_id')
                        ->where('numero',$this->numero)
                        ->get(),
            'demande' => Demande::select('avance')->where('numero',$this->numero)->get()->first(),

            'notifications' => Notification::where('user_id', Auth::user()->id)->orderBy('id','DESC')->get()
        ]);
    }
}
