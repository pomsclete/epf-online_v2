<?php

namespace App\Livewire\Admin;

use App\Models\Annee;
use App\Models\Demande;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class TableauBord extends Component
{

    public function getAnnee(){
        return Annee::orderBy('id','DESC')->get()->first();
    }

    public function getStatDemand($statut){
        return Demande::select('id')->where('status',$statut)->get()->count();
    }

    #[Layout('components.layouts.app')]
    #[Title('Tableau de bord')]
    public function render()
    {
        return view('livewire.admin.tableau-bord');
    }
}
