<?php

namespace App\Livewire\User;


use App\Models\InfoUsuer;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class DashboardComponent extends Component
{



    #[Layout('components.layouts.app')]
    #[Title('Tableau de bord')]
    public function render()
    {
        $data = InfoUsuer::where('user_id', Auth::user()->id)->get();
        if(sizeof($data) == 0){
            $profile = "user.info-sup-component";
        } else {
            $profile = "user.list-classe-component";
        }
        return view('livewire.user.dashboard-component',[
            'profile' => $profile
        ]);
    }
}
