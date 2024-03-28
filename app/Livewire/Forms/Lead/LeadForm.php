<?php


namespace App\Livewire\Forms\Lead;
use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Lead;
use Illuminate\Support\Facades\Validator;

class LeadForm extends Form
// ([а-яА-ЯёЁ0-9\-]{1,})(\,\s\д\.\s)([0-9\/\-a-яёА-ЯЁ]{1,})
{
    #[Validate('required', message: 'Имя не может быть пустым')]
    #[Validate('max:80', message: 'Имя должено составлять не более 80 символов')]
    public $name;

    #[Validate('required', message: 'Поле фамилия не может быть пустым')]
    #[Validate('max:80', message: 'Фамилия должена составлять не более 80 символов')]
    public $surname;

    #[Validate('max:80', message: 'Отчество должено составлять не более 80 символов')]
    public $patronymic;

    #[Validate('regex:/^\S+@\S+\.\S+$/', message: 'Email должен соответсвовать формату \'x@x.x\'')]
    public $email;

    #[Validate('required', message: 'Телефон не может быть пустым')]
    #[Validate('regex:/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/', message: 'Телефон должен соответсвовать формату \'(8/+7)xxxxxxxxxx)\'')]
    public $phone;

    public function setForm($Lead){
        $this->name = $Lead->name;
        $this->surname = $Lead->surname;
        $this->patronymic = $Lead->patronymic;
        $this->email = $Lead->email;
        $this->phone = $Lead->phone;
    }

}
