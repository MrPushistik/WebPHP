<?php

namespace App\Livewire\Leads;

use App\Models\Lead;
use Livewire\Component;
use Livewire\Attributes\On;

class Leads extends Component
{
    public $isClosedEditor;
    public $leads;


    public function mount(){
        $this->isClosedEditor = true;
        $this->leads = Lead::all();
    }

    public function editLead($id){
        $this->isClosedEditor = false;
        $this->dispatch('edit-lead', id: $id);
    }

    public function createLead(){
        $this->isClosedEditor = false;
        $this->dispatch('create-lead');
    }

    #[On('lead-editor-closed')]
    public function closeEditor(){
        $this->isClosedEditor = true;
        $this->leads = Lead::all();
    }

    public function render()
    {
        return view('livewire.leads.leads');
    }
}
