<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Registrasi extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $confirm_password;

    protected $rules = [
        'first_name' => ['required', 'string', 'min:3', 'max:50'],
        'last_name' => ['required', 'string', 'min:3', 'max:50'],
        'email' => ['required', 'string', 'max:255', 'email', 'unique:users'],
        'password' => ['required', 'min:8'],
        'confirm_password' => ['required', 'same:password'],
    ];

    protected $message = [
        'first_name.required' => 'Nama Harus di isi'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function registrasi()
    {
        $this->validate();
        dd('berhasil');
    }

    public function render()
    {
        return view('livewire.registrasi');
    }
}
