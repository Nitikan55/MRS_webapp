<?php

namespace App\Livewire;
use App\Models\machine;
use Livewire\Component;

class Addmachine extends Component
{
  public $machine_id, $machine_name, $machine_type, $status, $maintenance_cycle;
    public function add()
    {
        machine::create([
            'machine_name' => $this->machine_name,
            'machine_type' => $this->machine_type,
            'last_maintenance' => now(),
            'status' => $this->status,
            'maintenance_cycle' => $this->maintenance_cycle,
            
        ]);
        return redirect()->to(route('addmachine'));
    }
    public function render()
    {
        return view('livewire.addmachine');
    }
}
