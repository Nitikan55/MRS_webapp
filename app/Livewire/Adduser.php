<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Component;

class Adduser extends Component
{
    public $name, $email, $password;

    public function add()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);
        return redirect()->to(route('userdata'));
    }
    public function render()
    {
        return view('livewire.adduser');
    }
}
