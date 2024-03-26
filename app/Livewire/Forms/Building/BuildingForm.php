<?php

namespace App\Livewire\Forms\Building;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Building;

class BuildingForm extends Form
{ 
    #[Validate('require|max:500', message: 'Укажите адрес')] 
    public $address;

    #[Validate('required', message: 'Укажите площадь помещения')] 
    public $size;

    #[Validate('required', message: 'Укажите тип помещения')] 
    public $type;

    #[Validate('required', message: 'Укажите тип отопления')] 
    public $heat;

    #[Validate('required', message: 'Укажите цену аренды помещения')] 
    public $price;

    #[Validate('required|max:1000', message: 'Укажите описание помещения')] 
    public $desc;

    #[Validate('required', message: 'Укажите статус помещения')] 
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

