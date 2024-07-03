<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;
use App\Models\GroupMessage;

class LastMessageCommunity extends Component
{
    public $id;
    public $lastMessage;
    public $userCommunity;
    public function mount($id, $userCommunity){
        $this->id = $id;
        $this->userCommunity = $userCommunity;
        $this->fetchLastMessage();
    }    
        
    public function fetchLastMessage()
        {
            if ($this->userCommunity == 'user') {
                $this->lastMessage = Message::where('to_user_id', $this->id)->latest()->first();
            } else {
                $this->lastMessage = GroupMessage::where('community_id', $this->id)->latest()->first();
            }
    }
       
    public function render()
    {
        return view('livewire.last-message-community', [
            'lastMessage' => $this->lastMessage,
            'userCommunity' => $this->userCommunity,
        ]);
    }
}
