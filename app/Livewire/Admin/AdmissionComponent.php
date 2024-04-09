<?php

namespace App\Livewire\Admin;

use App\Models\Annee;
use App\Models\Demande;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AdmissionComponent extends Component
{
    public $etat;


    public function getAnnee(){
        $year = Annee::orderBy('id','DESC')->get()->first();
        return $year->id;
    }

    public function getStatDemand($statut){
        return Demande::select('id')->where('status',$statut)->get()->count();
    }

    #[Layout('components.layouts.app')]
    #[Title('Admission')]
    public function render()
    {

        if($this->etat == "deliberation"){
            $profile = "admin.deliberation-component";
        } elseif($this->etat == "en-cours"){
            $profile = "admin.en-cours-component";
        }
        elseif($this->etat == "finalise"){
            $profile = "admin.finalise-component";
        }
        else {
            $profile = "admin.nouveau-component";
        }
        return view('livewire.admin.admission-component',[
            'profile' => $profile,
        ]);
    }
}
