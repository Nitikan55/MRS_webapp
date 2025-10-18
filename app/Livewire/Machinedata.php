<?php

namespace App\Livewire;
use App\Models\machine;
use Livewire\WithPagination;
use Livewire\Component;

class Machinedata extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

public function delete($machine_id)
{
       machine::find($machine_id)->delete();
}
    

    public function render()
    {
        $model = machine::paginate(10);
        return view('livewire.machinedata', compact('model'));
    }
}
