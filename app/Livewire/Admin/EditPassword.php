<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class EditPassword extends Component
{
    #[Layout('components.layouts.app')]
    #[Title('Paramétrage')]
    public function render()
    {
        return view('livewire.admin.edit-password');
    }
}
