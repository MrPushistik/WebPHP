<?php

namespace App\Livewire\Forms\Building;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Building;

class BuildingForm extends Form
{ 
    public ?Building $building;
    public $address;
    public $size;
    public $type;
    public $heat;
    public $power;
    public $price;
    public $desc;
    public $status;

    public function setForm($building){    
        $this->building = $building;
        $this->address = $building->address;
        $this->size = $building->size;
        $this->type = $building->type;
        $this->heat = $building->heat;
        $this->power = $building->power;
        $this->price =  $building->price;
        $this->desc = $building->desc;
        $this->status = $building->status;
    } 
}

