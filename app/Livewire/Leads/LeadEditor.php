<?php

namespace App\Livewire\Leads;

use App\Models\Lead;
use Livewire\Component;
use App\Livewire\Forms\Lead\LeadForm;
use Livewire\Attributes\On;
use Illuminate\Support\Str;

class LeadEditor extends Component
{
    public $tryDelete;
    public $tryEditOrCreate;
    public LeadForm $form;
    public $id;


    #[On('edit-lead')]
    public function launchEditor($id){
        $this->id = $id;
        $this->form->setForm(Lead::find($id));
        $this->tryEditOrCreate = true;
    }

    #[On('create-lead')]
    public function launchCreator(){
        $this->tryEditOrCreate = true;
    }

    public function editOrCreate(){
        $this->form->validate();

        if ($this->id != null){
            $building = Lead::find($this->id);
            $building->update($this->form->all());
        }
        else{
            Lead::create($this->form->all());
        }
        $this->closeEditor();
    }

    public function closeEditor(){
        $this->id = null;
        $this->tryEditOrCreate = false;
        $this->form->reset();
        $this->dispatch('lead-editor-closed');
    }

    public function try2Delete(){
        $this->tryDelete = true;
    }

    public function discardDelete(){
        $this->tryDelete = false;
    }

    public function acceptDelete(){
        Lead::find($this->id)->delete();
        $this->discardDelete();
        $this->closeEditor();
    }
    public function render()
    {
        return view('livewire.leads.lead-editor');
    }
}
