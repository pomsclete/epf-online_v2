<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class Profile extends Component
{
   
    
    #[Layout('components.layouts.app')]
    #[Title('Mon profil')]
    public function render()
    {
       
        return view('livewire.user.profile');
    }
}
