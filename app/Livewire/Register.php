<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterForm extends Component
{
    public $username;
    public $email;
    public $password;

    public function register()
    {
        $validatedData = $this->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        session()->flash('message', 'Registration successful.');

        return redirect()->to('/login');
    }

    public function render()
    {
        return view('livewire.register');
    }
}