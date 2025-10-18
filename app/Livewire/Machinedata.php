<?php

namespace App\Livewire;
use App\Models\Machin;
use Livewire\WithPagination;
use Livewire\Component;

class Machinedata extends Component
{
   use withPagination;
    protected $paginationTheme = 'bootstrap';

    public function delete($id)
    {
    //    dd($id);
        Machin::find($id)->delete();
    }
    public function render()
    {
        $model = Machin::Paginate(2);
        return view('livewire.machinedata', compact('model'));
    }
}
