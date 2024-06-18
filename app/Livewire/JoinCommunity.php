<?php

namespace App\Livewire;

use App\Models\Members;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class JoinCommunity extends Component
{
    public $communityId;

    public function mount($communityId)
    {
        $this->communityId = $communityId;

    }


    public function join()
    {
        $user = Auth::user();
        
        Members::create([
            'user_id' => $user->id,
            'community_id' => $this->communityId,
       ]);

        session()->flash('message', 'You have joined the community!');
    }

    public function render()
    {
        return view('livewire.join-community');
    }
}
