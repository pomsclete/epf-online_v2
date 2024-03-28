<?php

namespace App\Livewire\User;


use App\Models\InfoUsuer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardComponent extends Component
{



    public function mount(){

    }
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
