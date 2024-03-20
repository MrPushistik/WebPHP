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

    public function viewBuilding($id){
        $this->isClosedEditor = false;
        $this->dispatch('building-view', id: $id);
    }

    #[On('building-editor-closed')]
    public function closeEditor(){
        $this->isClosedEditor = true;
    }

    public function render()
    {
        return view('livewire.buildings.buildings');
    }
}
