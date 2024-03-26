<?php

namespace App\Livewire\Admin;

use App\Models\Formation;
use App\Models\Niveau;
use App\Models\NiveauFormation;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class ClasseComponent extends Component
{
    use WithPagination;
    use WithoutUrlPagination;
    use LivewireAlert;

    public $perPage = 10;
    public $sortField = 'intitule';
    public $sortDirection = 'asc';
    public $isFormOpen = false;

    protected $queryString = ['sortField', 'sortDirection'];

    //Form Field
    //Form Field
    public $rId = null;
    public $formation,$niveau;
    public $formations = [];
    public $niveaux = [];
    #[Url]
    public $search = '';
    //Action
    public $dId = '';
    public $editModalOpen = false;

    public function sortBy($field)
    {
        $this->sortDirection = $this->sortField === $field ?
            $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc'
            : 'asc';
        $this->sortField = $field;
    }

    public function openModal()
    {
        $this->formations = Formation::orderBy('intitule','asc')->get();
        $this->niveaux = Niveau::orderBy('id','asc')->get();
        $this->isFormOpen = true;
    }

    public function closeModal()
    {
        $this->isFormOpen = false;
        $this->id = null;
        $this->niveaux = [];
        $this->formations = [];
    }

    public function resetData(){
        $this->rId = null;
        $this->formation= null;
        $this->niveau= null;
        $this->resetValidation();
    }

    public function edit($id = null)
    {
        try {
            $this->rId = $id;
            if (!empty($this->rId)) {
                $classe = NiveauFormation::find($this->rId);
                if ($classe) {
                    $this->formation = $classe->formation_id;
                    $this->niveau = $classe->niveau_id;
                }
            }
            $this->isFormOpen = true;
            $this->openModal();
            $this->resetPage();

        } catch (\Exception $ex) {
            $this->alert('warning', 'Something goes wrong!!');
        }
    }

    public function store()
    {
        $ruleFields = [
            'formation' => 'required',
            'niveau' => 'required'
        ];
        $validatedData = $this->validate($ruleFields);
        try {
            if (!empty($this->rId)) {
                $classe = NiveauFormation::find($this->rId);
                if ($classe) {
                    $classe->update([
                        'formation_id' => $this->formation,
                        'niveau_id' => $this->niveau
                    ]);
                }
            } else {
                NiveauFormation::create([
                    'formation_id' => $this->formation,
                    'niveau_id' => $this->niveau
                ]);
            }
            $this->closeModal();
            $this->resetPage();
            $this->alert('success', 'Enregistrement éffectué avec succés');
        } catch (\Exception $ex) {
            $this->alert('warning', 'Something goes wrong!!');
        }
    }

    #[Layout('components.layouts.app')]
    #[Title('Nos classes')]
    public function render()
    {
        return view('livewire.admin.classe-component',[
            'records' => NiveauFormation::select('intitule','designation','niveau_formations.id','niveau_formations.created_at')
                        ->join('formations', 'formations.id','=','niveau_formations.formation_id')
                        ->join('niveaux','niveaux.id','=','niveau_formations.niveau_id')
                        ->where('intitule','like','%'.$this->search.'%')
                        ->orderBy($this->sortField, $this->sortDirection)
                        ->paginate($this->perPage)
        ]);
    }
}
