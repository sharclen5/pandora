<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;
use Illuminate\Foundation\Auth\User;

class Chat extends Component
{   
    public User $user;
    public $message = '';

    public function render()
    {
        $users = User::where('id', '!=', auth()->id())->get();

        return view('livewire.chat', [
            'users' => $users,
            'messages'=> Message::where(function ($query) {
                $query->where('from_user_id', auth()->id())
                    ->where('to_user_id', $this->user->id);
            })->orWhere(function ($query) {
                $query->where('to_user_id', auth()->id())
                    ->where('from_user_id', $this->user->id);
            })->orderBy('created_at', 'asc')->get(),
            'to_user' => $this->user,
        ]);
    }

    public function sendMessage()
    {
        Message::create([
            'from_user_id' => auth()->id(),
            'to_user_id' => $this->user->id,
            'message' => $this->message,
        ]);

        $this->message ='';
    }
}
