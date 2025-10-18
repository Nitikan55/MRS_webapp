<?php

namespace App\Livewire;
use App\Models\machine;
use Livewire\Component;

class Editmachine extends Component
{  
    public $machine_id, $machine_name, $machine_type, $status, $maintenance_cycle;
      public function mount($machine_id)
    {
        // dd($id);
        $machine = machine::find($machine_id,);
    $this->machine_id = $machine->machine_id;
    $this->machine_name = $machine->machine_name;
    $this->machine_type = $machine->machine_type;
    $this->status = $machine->status;
    $this->maintenance_cycle = $machine->maintenance_cycle;
        
    }

    public function edit()
    {
        machine::where('machine_id', $this->machine_id)->update([
            'machine_name' => $this->machine_name,
            'machine_type' => $this->machine_type,
            'status' => $this->status,
            'maintenance_cycle' => $this->maintenance_cycle,
        ]);
    return redirect()->to(route('editmachine', ['id' => $this->machine_id]));
    }
    public function render()
    {
        return view('livewire.editmachine');
    }
}
