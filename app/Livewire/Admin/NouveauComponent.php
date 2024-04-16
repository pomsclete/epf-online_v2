<?php

namespace App\Livewire\Admin;

use App\Models\Annee;
use App\Models\Demande;
use App\Models\Document;
use Livewire\Component;

class NouveauComponent extends Component
{
    public function render()
    {
        $year = Annee::orderBy('id','DESC')->get()->first();
        return view('livewire.admin.nouveau-component',[
            "demandes" => Demande::select('name','email','telephone','niveau','serie','demandes.id','demandes.numero')
                ->join('users','users.id','=','demandes.user_id')
                ->join('info_usuers','info_usuers.user_id','=','users.id')
                ->where('status',0) ->where('annee_id',$year->id)
                ->get(),
                'year' => $year
        ]);
    }
}
