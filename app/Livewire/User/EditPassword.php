<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class EditPassword extends Component
{

    #[Layout('components.layouts.app')]
    #[Title('Paramétrage')]
    public function render()
    {
        return view('livewire.user.edit-password');
    }
}
