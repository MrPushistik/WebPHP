<?php

namespace App\Livewire\Forms\Roles;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Spatie\Permission\Models\Permission;

class RoleForm extends Form
{
    #[Validate('required', message: 'Название роли не может быть пустым')] 
    #[Validate('max:255', message: 'Адрес должен составлять не более 255 символов')] 
    public $name;

    public $permissions = [];

    public function setForm($role){
        $this->name = $role->name;
        $permissions = Permission::all();
        foreach ($permissions as $permission){
            $this->permissions[$permission->name] = $role->hasPermissionTo($permission->name);
        }
    }

    public function setDefaultForm(){
        $permissions = Permission::all();
        foreach ($permissions as $permission){
            $this->permissions[$permission->name] = false;
        }
    }
}
