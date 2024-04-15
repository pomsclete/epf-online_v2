<?php

namespace App\Livewire\Admin;

use App\Models\Document;
use App\Models\DocumentClasse;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class AddDocClasseComponent extends Component
{
    use WithPagination;
    use WithoutUrlPagination;
    use LivewireAlert;

    public $classe,$document,$statut,$rId;
    public $documents = [];

    public function mount(){
        $this->documents =  Document::orderBy('libelle','ASC')->get();
        $this->classe = 1;
    }

    public function confirmed($id)
    {
        try {
            $year = DocumentClasse::find($id);
            if ($year) {
                $year->delete();
            }
            $this->alert('success', 'Document supprimée avec succès!!');
            $this->resetPage();
        } catch (\Exception $ex) {
            $this->alert('success', 'Something goes wrong!!');
        }
    }

    public function store()
    {
        $ruleFields = [
            'document' => 'required',
            'statut' => 'required'
        ];
        $validatedData = $this->validate($ruleFields);
        try {
            if (!empty($this->rId)) {
                $classe = DocumentClasse::find($this->rId);
                if ($classe) {
                    $classe->update([
                        'document_id' => $this->document,
                        'niveau_formation_id' => $this->classe,
                        'obligation' => $this->statut
                    ]);
                }
            } else {
                DocumentClasse::create([
                    'document_id' => $this->document,
                    'niveau_formation_id' => $this->classe,
                    'obligation' => $this->statut
                ]);
            }
            $this->document="";
            $this->statut="";
            $this->alert('success', 'Enregistrement éffectué avec succés');
        } catch (\Exception $ex) {
            dd($ex);
           // $this->alert('warning', 'Something goes wrong!!');
        }
    }

    public function actived($id){
        try {
            if (!empty($id)) {
                $classe = DocumentClasse::find($id);
                if ($classe->etat == 0) {
                    $classe->update([
                        'etat' => 1
                    ]);
                }
                else {
                    $classe->update([
                        'etat' => 0
                    ]);
                }
            }
        } catch (\Exception $ex) {
            dd($ex);
            // $this->alert('warning', 'Something goes wrong!!');
        }
    }

    public function render()
    {
        return view('livewire.admin.add-doc-classe-component',[
            'docus' => DocumentClasse::select('libelle','document_classes.id','obligation','document_classes.etat')
                                        ->join('documents','documents.id','=','document_classes.document_id')
                                        ->where('niveau_formation_id',3)->get()
        ]);
    }
}
