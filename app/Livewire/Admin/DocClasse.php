<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class DocClasse extends Component
{
    public $classe;
    
    #[Layout('components.layouts.app')]
   #[Title('Ajouter des documents à la classe')]
    public function render()
    {
        return view('livewire.admin.doc-classe');
    }
}
