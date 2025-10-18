<?php

namespace App\Livewire;

use Livewire\Component;

class Addmachine extends Component
{
  public $id, $machine_name, $machine_type, $status, $maintenance_cycle;
    public function add()
    {
        Machine::create([
            'machine_name' => $this->machine_name,
            'machine_type' => $this->machine_type,
            'status' => $this->status,
            'maintenance_cycle' => $this->maintenance_cycle,
            
        ]);
        return redirect()->to(route('dasboard'));
    }
    public function render()
    {
        return view('livewire.addmachine');
    }
}
