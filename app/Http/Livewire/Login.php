<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => ['required'],
        'password' => ['required'],
    ];

    public function render()
    {
        return view('livewire.login');
    }

    public function login()
    {
        $this->validate();

        dd('done');
    }
}
