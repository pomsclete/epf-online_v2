<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class AdmissionComponent extends Component
{
    #[Layout('components.layouts.app')]
    #[Title('Admission')]
    public function render()
    {
        return view('livewire.admin.admission-component');
    }
}
