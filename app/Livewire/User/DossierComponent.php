<?php

namespace App\Livewire\User;

use App\Models\NiveauFormation;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class DossierComponent extends Component
{
    public $numero;
    public $form;

    public function mount($numero){
        $this->form = NiveauFormation::select('intitule','designation','niveau_formations.id','numero','demandes.created_at')
            ->join('formations', 'formations.id','=','niveau_formations.formation_id')
            ->join('niveaux','niveaux.id','=','niveau_formations.niveau_id')
            ->join('demandes', 'demandes.niveau_formation_id','=','niveau_formations.id')
            ->where('demandes.id', decrypt($this->numero,"poms"))
            ->first();
    }

    #[Layout('components.layouts.app')]
    #[Title('Suivi de dossier')]
    public function render()
    {
        return view('livewire.user.dossier-component');
    }
}
