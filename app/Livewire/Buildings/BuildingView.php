<?php

namespace App\Livewire\Buildings;

use Livewire\Component;
use App\Models\Building;
use Livewire\Attributes\On; 

class BuildingView extends Component
{
    public $building;

    #[On('building-view')]
    public function setBuilding($id){
        $this->building = Building::find($id);
    }

    public function render()
    {
        return view('livewire.buildings.building-view');
    }
}
