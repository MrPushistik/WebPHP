<?php

namespace App\Livewire\Buildings;

use Livewire\Component;
use App\Livewire\Forms\Building\BuildingForm;
use App\Models\Building;
use Livewire\Attributes\On; 
use Illuminate\Support\Str;

class BuildingEditor extends Component
{
    public $isEditMode;
    public BuildingForm $form;
    public $id;


    #[On('building-view')]
    public function setBuilding($id){
        $this->id = $id;
        $this->form->setForm(Building::find($id));
    }

    public function render()
    {
        return view('livewire.buildings.building-editor');
    }
}
