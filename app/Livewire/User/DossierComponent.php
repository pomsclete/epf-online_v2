<?php

namespace App\Livewire\User;

use App\Models\Demande;
use App\Models\NiveauFormation;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class DossierComponent extends Component
{
    public $numero , $idNiv;
    public $form;
    public $intitule,$designation,$num,$duree,$date;

    public function mount(){
        $niv = NiveauFormation::select('intitule','designation','niveau_formations.id as idNiv','numero','demandes.created_at','formations.duree')
            ->join('formations', 'formations.id','=','niveau_formations.formation_id')
            ->join('niveaux','niveaux.id','=','niveau_formations.niveau_id')
            ->join('demandes', 'demandes.niveau_formation_id','=','niveau_formations.id')
            ->where('demandes.numero',$this->numero)
            ->first();

        $this->intitule = $niv->intitule;
        $this->designation = $niv->designation;
        $this->num = $niv->numero;
        $this->duree = $niv->duree;
        $this->date = $niv->created_at;
        $this->idNiv = $niv->idNiv;
    }

    public function verif(){
        $res = Demande::select('id')->where('niveau_formation_id',$this->idNiv)
            ->where('user_id', Auth::user()->id)->orderBy('id','DESC')->first();
        if($res) {
            return $res->id;
        } else { return 0;}
    }

    public function avancement(){
        $res = Demande::select('avance')->where('niveau_formation_id',$this->idNiv)
            ->where('user_id', Auth::user()->id)->orderBy('id','DESC')->first();
        if($res){
            if($res->avance == 0) {
                return 25;
            } elseif($res->avance == 1){
                return 50;
            } elseif($res->avance == 2) {
                return 75;
            } elseif($res->avance == 3) {
                return 95;
            }
            else {
                return 100;
            }
        }
        else { return 0;}
    }

    public function avancementTxt(){
        $res = Demande::select('avance')->where('niveau_formation_id',$this->idNiv)
            ->where('user_id', Auth::user()->id)->orderBy('id','DESC')->first();
        if($res){
            if($res->avance == 0) {
                return 'Création du dossier';
            } elseif($res->avance == 1){
                return 'Documents déposés';
            } elseif($res->avance == 2) {
                return "Documents validés";
            }  elseif($res->avance == 3) {
                return "En attente délibération";
            }
            else {
                return "Dossier accepté et lettre d'admission disponible";
            }
        }
        else { return "En attente candidature";}
    }

    #[Layout('components.layouts.app')]
    #[Title('Suivi de dossier')]
    public function render()
    {
        return view('livewire.user.dossier-component');
    }
}
