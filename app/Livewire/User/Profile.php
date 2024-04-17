<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use App\Models\InfoUsuer;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Profile extends Component
{
   
    public $telephone = '';
    public $serie = '';
    public $niveau = '';
    public $adresse = '';
    public $civilite = '';
    public $nom_complet = '';
    public $email = '';
    use LivewireAlert;


    public function saveInfo(){
       
        $ruleFields = [
            'adresse' => 'required|min:10',
            'serie' => 'required',
            'telephone' => 'required|min:9',
            'niveau' => 'required',
            'civilite' => 'required',
            'nom_complet' => 'required|min:5',
            'email' => 'required|email'
        ];
        $validatedData = $this->validate($ruleFields);

        try {
           
            $inf = InfoUsuer::where('user_id',Auth::user()->id)->get()->first();
            if ($inf) {
                $inf->update([
                    'telephone' => $this->telephone,
                    'civilite' => $this->civilite,
                    'niveau' => $this->niveau,
                    'adresse' => $this->adresse,
                    'serie' => $this->serie,
                ]);
                
            } else {
                InfoUsuer::create([
                    'telephone' => $this->telephone,
                    'civilite' => $this->civilite,
                    'niveau' => $this->niveau,
                    'adresse' => $this->adresse,
                    'serie' => $this->serie,
                ]);
            }
            User::find(Auth::user()->id)->update([
                'email'=>$this->email,
                'name'=>$this->nom_complet
            ]);
            $this->alert('success', 'Enregistrement éffectué avec succés');
        } catch (\Exception $ex) {
            $this->alert('warning', 'Something goes wrong!!');
        }
    }

    #[Layout('components.layouts.app')]
    #[Title('Mon profil')]
    public function render()
    {
        $userAu =  User::select('name','email','users.created_at','telephone','civilite','niveau','serie','adresse')
                        ->leftJoin('info_usuers','info_usuers.user_id','=','users.id')
                        ->where('users.id',Auth::user()->id)->get()->first();
                        $this->telephone = $userAu->telephone;
                        $this->serie = $userAu->serie;
                        $this->niveau = $userAu->niveau;
                        $this->adresse = $userAu->adresse;
                        $this->civilite = $userAu->civilite;
                        $this->nom_complet = $userAu->name;
                        $this->email = $userAu->email;
        return view('livewire.user.profile',[
            'userAuth' => $userAu,
        ]);
    }
}
