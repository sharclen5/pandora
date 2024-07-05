<?php

namespace App\Livewire;

use Livewire\Component;

class DeleteChatMessage extends Component
{

    public $message;
    public $user;

    public function mount($message, $user)
    {
        $this->message = $message;
        $this->user = $user;
    }
    
    public function deleteMessage()
    {
        $this->message->delete();
        return redirect()->route('chat', $this->user->id);
    }

    public function render()
    {
        return view('livewire.delete-chat-message');
    }
}
