<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Component;


class Edituser extends Component
{
    

    public $id, $name, $email, $password;
    // Life Cycle Hook 
    public function mount($id)
    {
        // dd($id);
        $user = User::find($id);
        $this->id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        
    }

    public function edit()
    {
        User::where('id', $this->id)->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);
        return redirect()->to(route('userdata'));
    }

    public function render()
    {
        return view('livewire.edituser');
    }
}
