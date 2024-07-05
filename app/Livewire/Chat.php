<?php

namespace App\Livewire;

use App\Models\Members;
use App\Models\Message;
use Livewire\Component;
use App\Models\Community;
use Illuminate\Foundation\Auth\User;

class Chat extends Component
{   
    public $isPollingActive = true;
    public User $user;
    public $community;
    public $message = '';

    public function render()
    {
        $users = User::where('id', '!=', auth()->id())
        ->whereIn('id', function ($query) {
            $query->select('user_id')
                ->from('members')
                ->whereIn('community_id', function ($subQuery) {
                    $subQuery->select('community_id')
                        ->from('members')
                        ->where('user_id', auth()->id());
                });
        })
        ->get();

        $this->community = Community::whereHas('members', function ($query) {
            $query->where('user_id', auth()->id());
        })->get();

        return view('livewire.chat', [
            'users' => $users,
            'communities' => $this->community,
            'messages'=> Message::where(function ($query) {
                $query->where('from_user_id', auth()->id())
                    ->where('to_user_id', $this->user->id);
            })->orWhere(function ($query) {
                $query->where('to_user_id', auth()->id())
                    ->where('from_user_id', $this->user->id);
            })->orderBy('created_at', 'asc')->get(),
            'to_user' => $this->user,
            'isPollingActive' => $this->isPollingActive
        ]);
    }

    protected $rules = [
        'message' => 'required|string',
    ];
    
    public function sendMessage()
    {
        $this->validate();
        
        Message::create([
            'from_user_id' => auth()->id(),
            'to_user_id' => $this->user->id,
            'message' => $this->message,
        ]);
    
        $this->message ='';
    }
}
