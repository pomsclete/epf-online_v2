<?php

namespace App\Livewire\Admin;

use App\Models\Annee;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
Use Alert;


class AnneeComponent extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $sortField = 'titre';
    public $sortDirection = 'asc';

    protected $queryString = ['sortField', 'sortDirection'];

    //Form Field
    public $rId = null;
    public $isFormOpen = false;
    public $titre;
    //Action
    public $dId = '';
    public $editModalOpen = false;

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
        $this->titre= null;
        $this->resetValidation();
    }

    public function closeModal()
    {
        $this->isFormOpen = false;
        $this->editModalOpen = false;
        $this->resetData();
    }

    public function delete()
    {
        try {
            $year = Annee::find($this->dId);
            if ($year) {
                $year->delete();
            }
            $this->closeDelete();
            session()->flash('success', 'Record deleted successfully!!');
        } catch (\Exception $ex) {
            session()->flash('success', 'Something goes wrong!!');
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
                    $this->titre = $year->titre;
                }
            }
            $this->isFormOpen = true;
            $this->editModalOpen = true;
            Alert::success('Success', 'Année scolaire enregistrée avec succés');

        } catch (\Exception $ex) {
            Alert::warning('Warning', 'Something goes wrong!!');
        }
    }



    public function store()
    {
        $ruleFields = [
            'titre' => 'required',
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
           /* Annee::create([
                    'titre' => $this->titre
            ]);*/
            $this->closeModal();

            Alert::success('Success', 'Année scolaire enregistrée avec succés');
        } catch (\Exception $ex) {
            session()->flash('success', 'Something goes wrong!!');
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
