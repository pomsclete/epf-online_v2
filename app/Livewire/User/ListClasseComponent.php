<?php

namespace App\Livewire\User;

use App\Models\Annee;
use App\Models\Demande;
use App\Models\DocAFournirDemande;
use App\Models\DocumentClasse;
use App\Models\NiveauFormation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;

class ListClasseComponent extends Component
{
    public $perPage = 10;
    public $search = '';
    public $intitule,$designation,$description,$condition,$duree,$raison;
    public $modalDoc = false;
    use LivewireAlert;

    public function openModalAdd($id)
    {
        $this->modalDoc = true;
        $niv =  NiveauFormation::select('intitule','designation','niveau_formations.id','description','condition','duree','raison','niveau_formations.created_at')
            ->join('formations', 'formations.id','=','niveau_formations.formation_id')
            ->join('niveaux','niveaux.id','=','niveau_formations.niveau_id')
            ->where('niveau_formations.id',$id)->first();
        $this->intitule = $niv->intitule;
        $this->designation = $niv->designation;
        $this->description = $niv->description;
        $this->condition = $niv->condition;
        $this->duree = $niv->duree;
        $this->raison = $niv->raison;
    }



    public function confirmed($id)
    {
        sleep(2);
        DB::beginTransaction();
        $an = Annee::orderBy('id','DESC')->get()->first();
        $dem = Demande::orderBy('id','DESC')->get()->first();
        ($dem) ? $idDem = $dem->id+1 : $idDem = 1;

         try {
             $num = 'epf-'.$an->annee_scolaire.'-ca-'.Auth::user()->id.'-de-'.$idDem;
             $idD = Demande::insertGetId([
                        'niveau_formation_id' => $id,
                        'numero' => $num,
                        'annee_id' => $an->id,
                        'user_id' => Auth::user()->id,
                        'created_at' => Carbon::now()
                    ]);
             if($idD){
                 $data = DocumentClasse::select('document_id','obligation')->where('niveau_formation_id',$id)->where('etat',0)->get();
                 foreach ($data as $da){
                     DocAFournirDemande::create([
                         'demande_id' => $idD,
                         'document_id' => $da->document_id,
                         'obligation' => $da->obligation
                     ]);
                 }
             }
             DB::commit();
            $this->alert('success', 'Enregistrement éffectué avec succés');
            $this->redirect('/dossier/'.$num);
        } catch (\Exception $ex) {
            $this->alert('warning', 'Something goes wrong!!');
             DB::rollback();
        }
    }

    public function verif($id){
        $res = Demande::select('numero')->where('niveau_formation_id',$id)
                        ->where('user_id', Auth::user()->id)->orderBy('id','DESC')->first();
       if($res) {
           return $res->numero;
       } else { return 0;}
    }

    public function avancement($id){
        $res = Demande::select('avance')->where('niveau_formation_id',$id)
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
           else {
               return 100;
           }
       }
        else { return 0;}
    }

    public function avancementTxt($id){
        $res = Demande::select('avance')->where('niveau_formation_id',$id)
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
            else {
                return "Dossier accepté et lettre d'admission disponible";
            }
        }
        else { return "En attente candidature";}
    }

    public function render()
    {
        return view('livewire.user.list-classe-component',[
            'records' => NiveauFormation::select('intitule','designation','niveau_formations.id')
                ->join('formations', 'formations.id','=','niveau_formations.formation_id')
                ->join('niveaux','niveaux.id','=','niveau_formations.niveau_id')
                ->where('niveau_formations.etat',0)
                ->where('intitule','like','%'.$this->search.'%')
                //->orderBy($this->sortField, $this->sortDirection)
                ->paginate($this->perPage),
            'annee' => Annee::orderBy('id','DESC')->get()->first()
        ]);
    }
}
