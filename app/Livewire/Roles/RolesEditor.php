<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use Livewire\Attributes\On;
use Spatie\Permission\Models\Role;
use App\Livewire\Forms\Roles\RoleForm;

class RolesEditor extends Component
{
    public $tryDelete;
    public $tryEditOrCreate;
    public RoleForm $form;
    public $id;


    #[On('edit-role')]
    public function launchEditor($id){
        $this->id = $id;
        $this->form->setForm(Role::find($id));
        $this->tryEditOrCreate = true;
    }

    #[On('create-role')]
    public function launchCreator(){
        $this->form->setDefaultForm();
        $this->tryEditOrCreate = true;      
    }

    private function setPermisstionToRole($role){
        $permissions = $this->form->permissions;
        $roles = [];
        foreach($permissions as $key => $permission){
            if($permission){
                array_push($roles, $key);
            }
        }

        if(count($roles) != 0){
            $role->syncPermissions($roles);
        }
    }

    public function editOrCreate(){
        $this->form->validate();
        $role = null;

        if ($this->id != null){
            $role = Role::find($this->id);
            $role->update(['name' => $this->form->name]);
        }
        else{
            $role = Role::create(['name' => $this->form->name]);
        }

        $this->setPermisstionToRole($role);
        $this->closeEditor();
    }

    public function closeEditor(){
        $this->id = null;
        $this->tryEditOrCreate = false;
        $this->form->reset();
        $this->dispatch('role-editor-closed');
    }

    public function try2Delete(){
        $this->tryDelete = true;
    }

    public function discardDelete(){
        $this->tryDelete = false;
    }

    public function acceptDelete(){
        Role::find($this->id)->delete();
        $this->discardDelete();
        $this->closeEditor();
    }
    public function render()
    {
        return view('livewire.roles.roles-editor');
    }
}
