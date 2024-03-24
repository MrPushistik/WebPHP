<?php

namespace App\Livewire\Buildings;

use Livewire\Component;
use App\Models\Building;
use Livewire\Attributes\On; 

class Buildings extends Component
{
    public $isClosedEditor;
    public $buildings;

    public function mount(){
        $this->isClosedEditor = true;
        $this->buildings = Building::all();
    }

    public function editBuilding($id){
        $this->isClosedEditor = false;
        $this->dispatch('edit-building', id: $id);
    }

    public function createBuilding(){
        $this->isClosedEditor = false;
        $this->dispatch('create-building');
    }

    #[On('building-editor-closed')]
    public function closeEditor(){
        $this->isClosedEditor = true;
        $this->buildings = Building::all();
    }

    public function render()
    {
        return view('livewire.buildings.buildings');
    }
}
