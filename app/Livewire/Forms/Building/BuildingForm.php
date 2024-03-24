<?php

namespace App\Livewire\Forms\Building;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Building;

class BuildingForm extends Form
{ 
    #[Validate('required')] 
    public $address;

    #[Validate('required')] 
    public $size;

    #[Validate('required')] 
    public $type;

    #[Validate('required')] 
    public $heat;

    #[Validate('required')] 
    public $price;

    #[Validate('required')] 
    public $desc;

    #[Validate('required')] 
    public $status;

    public function setForm($building){    
        $this->address = $building->address;
        $this->size = $building->size;
        $this->type = $building->type;
        $this->heat = $building->heat;
        $this->price =  $building->price;
        $this->desc = $building->desc;
        $this->status = $building->status;
    } 

    public function setFormDefault(){    
        $this->type = "Торговое помещение";
        $this->heat = "Центральное отопление";
        $this->status = "Свободно";
    } 
}

