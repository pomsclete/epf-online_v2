<?php

namespace App\Livewire\Admin;

use App\Models\Demande;
use App\Models\DocAFournirDemande;
use App\Models\Document;
use App\Models\NiveauFormation;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

class DossierComponent extends Component
{
    public $numero , $idNiv;
    public $form,$file,$libelle,$docum,$etat,$statusDem,$demandId,$motif;
    public $intitule,$designation,$num,$duree,$date,$name,$telephone,$email,$niveau,$serie,$adresse;
    public $editModalOpen ,$isFormOpenD = false;
    public $isFormOpen,$isFormOpenMotif = false;
    use WithFileUploads;
    use LivewireAlert;

    public function openModal($id){
        $this->isFormOpen = true;
        $this->idNiv = $id;
    }


    public function sendDelib(){
        try {
            Demande::where('numero',$this->numero)->get()->first()->update([
                'avance' => 3,
                'status' => 3
            ]);
            $this->alert('success', 'Votre demande de validation a été envoyé avec succés',[
                'position' => 'center',
                'timer' => 2000,
                'toast' => false,
                'timerProgressBar' => true,
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
        
    }

    public function valide(){
        try {
            Demande::where('numero',$this->numero)->get()->first()->update([
                'avance' => 4,
                'status' => 5
            ]);
            $this->alert('success', 'La demande a été validé avec succés',[
                'position' => 'center',
                'timer' => 2000,
                'toast' => false,
                'timerProgressBar' => true,
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }

    public function refus(){
        $this->isFormOpenMotif = true;
        $this->resetData();
    }

    public function resetData(){
        $this->motif= null;
        $this->resetValidation();
    }

    public function submitRefus(){
        $ruleFields = [
            'motif' => 'required|string|min:30',
        ];
        $validatedData = $this->validate($ruleFields);
        try {
            Demande::where('numero',$this->numero)->get()->first()->update([
                'avance' => 4,
                'status' => 4,
                'motif' => $this->motif
            ]);
            $this->alert('success', 'La demande a été refusé avec succés',[
                'position' => 'center',
                'timer' => 2000,
                'toast' => false,
                'timerProgressBar' => true,
            ]);
            $this->resetData();
            $this->isFormOpenMotif = true;
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }

    public function editModal($id){
        $this->isFormOpen = true;
        $this->editModalOpen = true;
        $this->idNiv = $id;
        $donne = DocAFournirDemande::select('doc_a_fournir_demandes.updated_at','fichier','documents.libelle','doc_a_fournir_demandes.etat')
            ->join('documents','documents.id','=','doc_a_fournir_demandes.document_id')
            ->where('doc_a_fournir_demandes.id',$id)
            ->get()->first();
        $this->libelle = $donne->libelle;
        $this->docum = $donne->fichier;
        $this->etat = $donne->etat;
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

    public function store($etat)
    {
        try {
            $anneeQuery = DocAFournirDemande::query();
            if (!empty($this->idNiv)) {
                $year = $anneeQuery->find($this->idNiv);
                if ($year) {
                    $year->update([
                        'etat' => $etat
                    ]);
                    if($etat == 3) {
                        Demande::where('id',$year->demande_id)->get()->first()->update([
                            'avance' => 2
                        ]);
                    }

                }
                $this->closeModal();
                $this->alert('success', 'Décision enregistré avec succés');
            } else {
                $this->alert('success', 'Oups merci de réessayer');
            }

        } catch (\Exception $ex) {
            dd($ex);
            $this->alert('warning', 'Something goes wrong!!');
        }
    }

    public function mount(){
        $niv = NiveauFormation::select('intitule','designation','niveau_formations.id as idNiv','numero','demandes.created_at','formations.duree',
                                        'name','telephone','email','niveau','serie','users.id as userId','demandes.id as demandeId','adresse','demandes.status as statusDem')
            ->join('formations', 'formations.id','=','niveau_formations.formation_id')
            ->join('niveaux','niveaux.id','=','niveau_formations.niveau_id')
            ->join('demandes', 'demandes.niveau_formation_id','=','niveau_formations.id')
            ->join('users','users.id','=','demandes.user_id')
            ->join('info_usuers','info_usuers.user_id','=','users.id')
            ->where('demandes.numero',$this->numero)
            ->first();
        $this->intitule = $niv->intitule;
        $this->designation = $niv->designation;
        $this->num = $niv->numero;
        $this->duree = $niv->duree;
        $this->date = $niv->created_at;
        $this->idNiv = $niv->idNiv;
        $this->name = $niv->name;
        $this->telephone = $niv->telephone;
        $this->email = $niv->email;
        $this->niveau = $niv->niveau;
        $this->serie = $niv->serie;
        $this->adresse = $niv->adresse;
        $this->statusDem = $niv->statusDem;
        $this->demandId = $niv->demandId;
    }

    public function verif(){
        $res = Demande::select('id')->where('niveau_formation_id',$this->idNiv)
            ->where('numero', $this->numero)->orderBy('id','DESC')->first();
        if($res) {
            return $res->id;
        } else { return 0;}
    }

    public function avancement(){
        $res = Demande::select('avance')->where('niveau_formation_id',$this->idNiv)
            ->where('numero', $this->numero)->orderBy('id','DESC')->first();
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
            else {
                return 100;
            }
        }
        else { return 0;}
    }

    public function avancementTxt(){
        $res = Demande::select('avance')->where('niveau_formation_id',$this->idNiv)
            ->where('numero', $this->numero)->orderBy('id','DESC')->first();
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
           
            else {
                return "Dossier finalisé";
            }
        }
        else { return "En attente candidature";}
    }



    #[Layout('components.layouts.app')]
    #[Title('Traitements')]
    public function render()
    {
        $year = Demande::where('numero',$this->numero)->get()->first();
        if ($year->avance != 0 && $year->status == 0) {
            $year->update([
                'status' => 1
            ]);
        }
        return view('livewire.admin.dossier-component',[
            'documents' => Document::select('libelle','avance','obligation','fichier','doc_a_fournir_demandes.etat','doc_a_fournir_demandes.id','doc_a_fournir_demandes.updated_at','demandes.status as statusDem')
                ->join('doc_a_fournir_demandes','doc_a_fournir_demandes.document_id','=','documents.id')
                ->join('demandes','demandes.id','=','doc_a_fournir_demandes.demande_id')
                ->where('numero',$this->numero)
                ->get(),
                'status' => $year->status
        ]);
    }


}
