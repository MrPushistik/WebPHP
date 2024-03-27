<?php

namespace App\Livewire\Buildings;

use Livewire\Component;
use App\Livewire\Forms\Building\BuildingForm;
use App\Models\Building;
use Livewire\Attributes\On; 
use Illuminate\Support\Str;

class BuildingEditor extends Component
{
    public $tryDelete;
    public $tryEditOrCreate;
    public BuildingForm $form;
    public $id;


    #[On('edit-building')]
    public function launchEditor($id){
        $this->id = $id;
        $this->form->setForm(Building::find($id));
        $this->tryEditOrCreate = true;   
    }

    #[On('create-building')]
    public function launchCreator(){
        $this->form->setFormDefault();
        $this->tryEditOrCreate = true;   
    }

    public function editOrCreate(){
        $this->form->validate();

        if ($this->id != null){
            $building = Building::find($this->id);
            $building->update($this->form->all());
        }
        else{
            Building::create($this->form->all());
        }
        $this->closeEditor();
    }

    public function closeEditor(){
        $this->id = null;
        $this->tryEditOrCreate = false;
        $this->form->reset();
        $this->dispatch('building-editor-closed');
    }

    public function try2Delete(){
        $this->tryDelete = true;
    }

    public function discardDelete(){
        $this->tryDelete = false;
    }

    public function acceptDelete(){
        Building::find($this->id)->delete();
        $this->discardDelete();
        $this->closeEditor();
    }

    public function render()
    {
        return view('livewire.buildings.building-editor');
    }
}
