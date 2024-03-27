<?php

namespace App\Livewire\Forms\Building;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Building;
use Illuminate\Support\Facades\Validator;

class BuildingForm extends Form
// ([а-яА-ЯёЁ0-9\-]{1,})(\,\s\д\.\s)([0-9\/\-a-яёА-ЯЁ]{1,})
{ 
    #[Validate('required', message: 'Адрес не может быть пустым')] 
    #[Validate('regex:/^(\у\л\.\s)(.{1,})(\,\s\д\.\s)(.{1,})$/', message: 'Адрес должен соответсвовать формату \'ул. XXXX, д. XXX\'')] 
    #[Validate('max:500', message: 'Адрес должен составлять не более 500 символов')] 
    public $address;

    #[Validate('required', message: 'Размер помещения не может быть пустым')] 
    #[Validate('numeric', message: 'Размер помещения должен являться числом')] 
    #[Validate('between:1.0,9999.0', message: 'Размер помещения может принмать значения от 1 до 9999')] 
    public $size;

    public $type;

    public $heat;

    #[Validate('required', message: 'Цена помещения не может быть пустым')] 
    #[Validate('numeric', message: 'Цена помещения должен являться числом')] 
    #[Validate('between:1.0,99999999.0', message: 'Цена помещения может принмать значения от 1 до 99999999')] 
    public $price;

    #[Validate('required', message: 'Описание не может быть пустым')] 
    #[Validate('max:1000', message: 'Описание должено составлять не более 1000 символов')] 
    public $desc;

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

