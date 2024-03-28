<?php

namespace App\Livewire\User;

use App\Models\Annee;
use App\Models\Demande;
use App\Models\NiveauFormation;
use Livewire\Component;

class ListClasseComponent extends Component
{
    public $perPage = 10;
    public $search = '';

    public function confirmed($id)
    {
         try {
             $id = Demande::insertGetId([
                        'niveau_formation_id' => $this->telephone,
                        'annee_id' => $this->niveau,
                        'user_id' => Auth::user()->id,
                        'created_at' => now()
                    ]);
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
