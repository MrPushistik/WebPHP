<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Livewire\Attributes\On;

class Roles extends Component
{
    public $isClosedEditor;
    public $roles;

    public function mount(){
        $this->roles = Role::all();
        $this->isClosedEditor = true;
    }

    public function editRole($id){
        $this->isClosedEditor = false;
        $this->dispatch('edit-role', id: $id);
    }

    public function createRole(){
        $this->isClosedEditor = false;
        $this->dispatch('create-role');
    }

    #[On('role-editor-closed')]
    public function closeEditor(){
        $this->isClosedEditor = true;
        $this->roles = Role::all();
    }

    public function render()
    {
        return view('livewire.roles.roles');
    }
}
