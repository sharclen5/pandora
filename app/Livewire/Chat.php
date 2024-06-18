<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;
use Illuminate\Foundation\Auth\User;

class Chat extends Component
{   
    public $isPollingActive = true;
    public User $user;
    public $message = '';

    public function render()
    {
        $users = User::where('id', '!=', auth()->id())->get();

        return view('livewire.chat', [
            'users' => $users,
            'messages'=> Message::where('from_user_id', auth()->id())
            ->orWhere('from_user_id', $this->user->id)
            ->orWhere('to_user_id', auth()->id())
            ->orWhere('to_user_id', $this->user->id)
            ->get(),
            'to_user' => $this->user,
            'isPollingActive' => $this->isPollingActive
        ]);
    }

    public function sendMessage()
    {
        Message::create([
            'from_user_id' => auth()->id(),
            'to_user_id' => $this->user->id,
            'message' => $this->message,
        ]);

        $this->message = '';
    }
}
