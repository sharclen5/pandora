<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GroupMessage;

class DeleteUser extends Component
{
    public $user;

    public function mount($user)
    {
        $this->user = $user;
    }

    public function deleteUser()
    {
        GroupMessage::where('from_user_id', $this->user->id)->delete();
        tap($this->user, $logout(...))->delete();
        return redirect()->route('profile');
    }

    public function render()
    {
        return view('livewire.delete-user');
    }
}
