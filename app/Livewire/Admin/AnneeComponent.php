<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;

class AnneeComponent extends Component
{
    #[Layout('components.layouts.app')]
    #[Title('Anné scolaire')]
    public function render()
    {
        return view('livewire.admin.annee-component');
    }
}
