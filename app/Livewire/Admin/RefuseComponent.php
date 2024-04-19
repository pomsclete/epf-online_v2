<?php

namespace App\Livewire\Admin;

use App\Models\Annee;
use App\Models\Demande;
use Livewire\Component;
use App\Models\Document;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\WithoutUrlPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class RefuseComponent extends Component
{

    use WithPagination;
    use WithoutUrlPagination;

    public $perPage = 10;
    public $sortField = 'demandes.id';
    public $sortDirection = 'desc';

    protected $queryString = ['sortField', 'sortDirection'];

    public $search = '';

    #[Layout('components.layouts.app')]
    #[Title('Demandes Finalisées')]
    public function render()
    {
        $year = Annee::orderBy('id','DESC')->get()->first();
        return view('livewire.admin.refuse-component',[
            "demandes" => Demande::select('intitule','designation','name','email','telephone','niveau','serie','demandes.id','demandes.numero')
            ->join('users','users.id','=','demandes.user_id')
            ->join('info_usuers','info_usuers.user_id','=','users.id')
            ->join('niveau_formations', 'demandes.niveau_formation_id','=','niveau_formations.id')
            ->join('niveaux','niveaux.id','=','niveau_formations.niveau_id')
            ->join('formations', 'formations.id','=','niveau_formations.formation_id')
            ->where('status',4) ->where('annee_id',$year->id)
            ->where('name','like','%'.$this->search.'%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage),
            "year" => $year
        ]);
    }
}
