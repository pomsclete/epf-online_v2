<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Profile extends Component
{
    #[Layout('components.layouts.app')]
    #[Title('Mon profil')]
    public function render()
    {
        return view('livewire.admin.profile');
    }
}
