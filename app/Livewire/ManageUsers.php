<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Foundation\Auth\User;

class ManageUsers extends Component
{
    public $users;
    public function mount()
    {
        $this->users = User::where('id', '!=', auth()->id())->get();
    }
    public function render()
    {
        return view('livewire.manage-users',[
            'users' => $this->users
        ]);
    }
}
