<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Userdata extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';

    public function delete($id)
    {
    //    dd($id);
        User::find($id)->delete();
    }
    public function render()
    {
        $model = User::Paginate(2);
        return view('livewire.userdata', compact('model'));
    }
}
