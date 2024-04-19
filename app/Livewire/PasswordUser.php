<?php

namespace App\Livewire;

use auth;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class PasswordUser extends Component
{
    public $telephone = '';
    public $serie = '';
    public $niveau = '';
    public $adresse = '';
    public $civilite = '';
    public $nom_complet = '';
    public $email = '';
    public $nouveau_mdp,$mdp_actuel,$confirmer_mdp;
    use LivewireAlert;

    public function updatePassword() 
{
        # Validation
        $ruleFields = [
            'mdp_actuel' => 'required',
            'nouveau_mdp' => 'required|min:8',
            'confirmer_mdp' => 'required|min:8'
        ];
        $validatedData = $this->validate($ruleFields);
        $admins = User::find(auth()->user()->id);
        if ($admins) {
            if(!Hash::check($this->mdp_actuel,$admins->password)){
                $this->alert('error', 'Le mot de passe actuel est incorrect',[
                    'position' => 'center',
                    'timer' => 1500,
                    'toast' => false,
                    'timerProgressBar' => true,
                ]);
            } elseif($this->nouveau_mdp != $this->confirmer_mdp){
                    $this->alert('error', 'Les mots de passe ne correspondent pas',[
                        'position' => 'center',
                        'timer' => 1500,
                        'toast' => false,
                        'timerProgressBar' => true,
                    ]);
            } else {
                $admins->update([
                    'password' => Hash::make($this->nouveau_mdp)
                ]);
                $this->alert('success', 'Mot de passe modifié avec succés');
                $this->resetValidation();
                $this->nouveau_mdp = "";
                $this->confirmer_mdp = "";
                $this->mdp_actuel = "";
            }
           
        } else {
            session()->flash('error', 'Invalid Username');
        }

       
}

    
    
    public function render()
    {
        $userAu =  User::select('name','email','users.created_at','telephone','civilite','niveau','serie','adresse')
        ->leftJoin('info_usuers','info_usuers.user_id','=','users.id')
        ->where('users.id',auth()->user()->id)->get()->first();
        $this->telephone = $userAu->telephone;
        $this->serie = $userAu->serie;
        $this->niveau = $userAu->niveau;
        $this->adresse = $userAu->adresse;
        $this->civilite = $userAu->civilite;
        $this->nom_complet = $userAu->name;
        $this->email = $userAu->email;
        return view('livewire.password-user',[
            'userAuth' => $userAu,
        ]);
    }
}
