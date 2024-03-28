<?php

namespace App\Livewire\User;

use App\Models\InfoUsuer;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class InfoSupComponent extends Component
{
    public $modalDoc = true;
    public $telephone,$serie,$niveau,$adresse;
    use LivewireAlert;

    public function store()
    {
        $ruleFields = [
            'telephone' => 'required',
            'niveau' => 'required',
            'adresse' => 'required',
            'serie' => 'required'
        ];
        $validatedData = $this->validate($ruleFields);
        try {
                InfoUsuer::create([
                    'telephone' => $this->telephone,
                    'niveau' => $this->niveau,
                    'adresse' => $this->adresse,
                    'serie' => $this->serie,
                    'user_id' => Auth::user()->id
                ]);

            $this->telephone="";
            $this->niveau="";
            $this->adresse="";
            $this->serie="";
            $this->alert('success', 'Enregistrement éffectué avec succés');
            $this->redirect('/home');
        } catch (\Exception $ex) {
           $this->alert('warning', 'Something goes wrong!!');
        }
    }


    public function render()
    {
        return view('livewire.user.info-sup-component');
    }
}
