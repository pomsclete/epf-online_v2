<?php

namespace App\Livewire\User;

use App\Models\Annee;
use App\Models\Demande;
use App\Models\NiveauFormation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class ListClasseComponent extends Component
{
    public $perPage = 10;
    public $search = '';
    public $intitule,$designation,$description,$condition,$duree,$raison;
    public $modalDoc = false;

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
        $an = Annee::orderBy('id','DESC')->get()->first();
         try {
             $idD = Demande::insertGetId([
                        'niveau_formation_id' => $id,
                        'annee_id' => $an->id,
                        'user_id' => Auth::user()->id,
                        'created_at' => Carbon::now()
                    ]);
             if($idD){
                 
             }
            $this->alert('success', 'Enregistrement éffectué avec succés');
            $this->redirect('/home');
        } catch (\Exception $ex) {
            $this->alert('success', 'Something goes wrong!!');
        }
    }

    public function verif($id){

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
