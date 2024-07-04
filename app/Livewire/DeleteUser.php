<?php

namespace App\Livewire;

use Livewire\Component;

class DeleteUser extends Component
{
    public $user;

    public function mount($user)
    {
        $this->user = $user;
    }

    public function deleteUser()
    {
        $this->user->delete();
        $this->dispatch('userDeleted');
        return redirect()->route('profile');
    }

    public function render()
    {
        return view('livewire.delete-user');
    }
}
