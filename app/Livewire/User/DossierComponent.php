<?php

namespace App\Livewire\User;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class DossierComponent extends Component
{
    public $dossier;

    #[Layout('components.layouts.app')]
    #[Title('Suivi de dossier')]
    public function render()
    {
        return view('livewire.user.dossier-component');
    }
}
