<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AdmissionComponent extends Component
{
    public $etat;

    public function changeView($stat){
        return $this->redirect('/admin/admission/'.$stat);
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
            'profile' => $profile
        ]);
    }
}
