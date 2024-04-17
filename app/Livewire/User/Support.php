<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class Support extends Component
{

    #[Layout('components.layouts.app')]
    #[Title('Support')]
    public function render()
    {
        return view('livewire.user.support');
    }
}
