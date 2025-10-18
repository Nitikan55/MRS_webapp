<?php

namespace App\Livewire;
use App\Models\Machine;
use Livewire\Component;

class Editmachine extends Component
{  
    public $id, $machine_name, $machine_type, $status, $maintenance_cycle;
      public function mount($id)
    {
        // dd($id);
        $machine = Machine::find($id);
        $this->id = $machine->id;
        $this->$machine_name = $machine->$machine_name;
        $this->$machine_type = $machine->$machine_type;
        $this->$status = $machine->$status;
        $this->$maintenance_cycle = $machine->$maintenance_cycle;
        
    }

    public function edit()
    {
        User::where('id', $this->id)->update([
            '$machine_name' => $this->machine_name,
            '$machine_type' => $this->machine_type,
            '$status' => $this->status,
            '$maintenance_cycle' => $this->maintenance_cycle,
            
        ]);
        return redirect()->to(route('dasboard'));
    }
    public function render()
    {
        return view('livewire.editmachine');
    }
}
