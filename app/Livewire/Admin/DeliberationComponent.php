<?php

namespace App\Livewire\Admin;

use App\Models\Annee;
use App\Models\Demande;
use Livewire\Component;
use App\Models\Document;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DeliberationComponent extends Component
{
    use LivewireAlert;
    
    public function notif(){
        $this->alert('success', 'Le dossier est en attente de délibération',[
            'position' => 'center',
            'timer' => 2000,
            'toast' => false,
            'timerProgressBar' => true,
        ]);
    }
    
    #[Layout('components.layouts.app')]
    #[Title('Demandes en délibération')]
    public function render()
    {
        $year = Annee::orderBy('id','DESC')->get()->first();
        return view('livewire.admin.deliberation-component',[
            "demandes" => Demande::select('intitule','designation','name','email','telephone','niveau','serie','demandes.id','demandes.numero')
                ->join('users','users.id','=','demandes.user_id')
                ->join('info_usuers','info_usuers.user_id','=','users.id')
                ->join('niveau_formations', 'demandes.niveau_formation_id','=','niveau_formations.id')
                ->join('niveaux','niveaux.id','=','niveau_formations.niveau_id')
                ->join('formations', 'formations.id','=','niveau_formations.formation_id')
                ->where('status',3) ->where('annee_id',$year->id)
                ->get(),
                'year' => $year
        ]);
    }
}
