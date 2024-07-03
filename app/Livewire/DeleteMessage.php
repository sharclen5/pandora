<?php

namespace App\Livewire;

use Livewire\Component;

class DeleteMessage extends Component
{
    public $message;
    public $commun;

    public function mount($message, $commun)
    {
        $this->message = $message;
        $this->commun = $commun;
    }
    
    public function deleteMessage()
    {
        $this->message->delete();
        return redirect()->route('groupchat', $this->commun->id);
    }

    public function render()
    {
        return view('livewire.delete-message');
    }
}
