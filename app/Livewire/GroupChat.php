<?php

namespace App\Livewire;

use App\Models\Members;
use Livewire\Component;
use App\Models\Community;
use App\Models\GroupMessage;
use Illuminate\Foundation\Auth\User;

class GroupChat extends Component
{   
    public $isPollingActive = true;
    public $commun;
    public $community;
    public $message = '';

    public function mount($communityId)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $this->commun = Community::find($communityId);
        $this->user = auth()->user();
    }

    public function render()
    {
        $users = User::where('id', '!=', auth()->id())->get();
        $community = Community::where('id', '=', $this->community)->first();
        $this->communities = Community::whereHas('members', function ($query) {
            $query->where('user_id', auth()->id());
        })->get();
        $members = Members::with('user')->where('community_id', $this->commun->id)->get(); 
        return view('livewire.group-chat', [
            'users' => $users,
            'communities' => $this->communities,
            'messages'=> GroupMessage::where(function ($query) {
                $query->where('community_id', $this->commun->id);
            })->orderBy('created_at', 'asc')->get(),
            'commun' => $this->commun,
            'isPollingActive' => $this->isPollingActive,
            'members' => $members,
        ]);
    }
    
    public function removePoll()
    {
        $this->isPollingActive = !$this->isPollingActive;
    }

    protected $rules = [
        'message' => 'required|string',
    ];

    public function sendMessage()
    {
        $this->validate();
        
        GroupMessage::create([
            'from_user_id' => auth()->id(),
            'community_id' => $this->commun->id,
            'message' => $this->message,
        ]);

        $this->message='';
    }
}
