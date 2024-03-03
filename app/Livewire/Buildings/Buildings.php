<?php

namespace App\Livewire\Buildings;

use Livewire\Component;
use App\Models\Building;

class Buildings extends Component
{
    public $buildings;

    public function mount(){
        $this->buildings = Building::all();
    }

    public function render()
    {
        return view('livewire.buildings.buildings');
    }
}
