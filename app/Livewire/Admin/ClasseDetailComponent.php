<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class ClasseDetailComponent extends Component
{

    public $classe;


    #[Layout('components.layouts.app')]
    #[Title('Nos classes')]
    public function render()
    {
        return view('livewire.admin.classe-detail-component');
    }
}
