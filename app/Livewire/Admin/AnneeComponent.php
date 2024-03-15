<?php

namespace App\Livewire\Admin;

use App\Models\Annee;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;



class AnneeComponent extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $perPage = 2;
    public $sortField = 'annee_scolaire';
    public $sortDirection = 'asc';

    protected $queryString = ['sortField', 'sortDirection'];

    //Form Field
    public $rId = null;
    public $isFormOpen = false;
    public $annee_scolaire;
    //Action
    public $dId = '';
    public $editModalOpen = false;
    protected $listeners = [
        'confirmed'
    ];

    public function openModal()
    {
        $this->isFormOpen = true;
        $this->editModalOpen = false;
        $this->resetData();
    }

    public function sortBy($field)
    {
        $this->sortDirection = $this->sortField === $field ?
            $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc'
            : 'asc';
        $this->sortField = $field;
    }

    // For Delete Feature Start

    public function resetData(){
        $this->rId = null;
        $this->annee_scolaire= null;
        $this->resetValidation();
    }

    public function closeModal()
    {
        $this->isFormOpen = false;
        $this->editModalOpen = false;
        $this->resetData();
    }

   public function deleteId($id){
       $this->dId = $id;
       $this->alert('warning', 'Confirmer pour supprimer', [
        'showConfirmButton' => true,
        'confirmButtonText' => 'Confirmer',
        'showCancelButton' => true,
        'cancelButtonText' => 'Annuler',
        'onConfirmed' => 'confirmed',  
        'allowOutsideClick' => false,
        'timer' => null
    ]);
   }

   public function confirmed()
    {
        try {
            $year = Annee::find($this->dId);
            if ($year) {
                $year->delete();
            }
            $this->alert('success', 'Année supprimée avec succès!!');
        } catch (\Exception $ex) {
            $this->alert('success', 'Something goes wrong!!');
        }
    }

    // Create and Update Feature Start
    public function edit($id = null)
    {
        try {
            $this->rId = $id;
            if (!empty($this->rId)) {
                $year = Annee::find($this->rId);
                if ($year) {
                    $this->annee_scolaire = $year->annee_scolaire;
                }
            }
            $this->isFormOpen = true;
            $this->editModalOpen = true;

        } catch (\Exception $ex) {
            $this->alert('warning', 'Something goes wrong!!');
        }
    }



    public function store()
    {
        $ruleFields = [
            'annee_scolaire' => 'required',
        ];
        $validatedData = $this->validate($ruleFields);
        try {
            $anneeQuery = Annee::query();
            if (!empty($this->rId)) {
                $year = $anneeQuery->find($this->rId);
                if ($year) {
                    $year->update($validatedData);
                }
            } else {
                $anneeQuery->create($validatedData);
            }
            $this->closeModal();
            $this->alert('success', 'Enregistrement éffectué avec succés');
        } catch (\Exception $ex) {
            $this->alert('warning', 'Something goes wrong!!');
        }
    }

    public function closeFormModal()
    {
        $this->isFormOpen = false;
        $this->reset();
    }


    #[Layout('components.layouts.app')]
    #[Title('Année scolaire')]
    public function render()
    {
        return view('livewire.admin.annee-component', [
            'records' => Annee::orderBy($this->sortField, $this->sortDirection)
                ->paginate($this->perPage)
        ]);
    }
}
