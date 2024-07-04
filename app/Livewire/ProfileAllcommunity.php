<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Community;

class ProfileAllcommunity extends Component
{
    public $user;
    public $community;

    public function mount()
    {
        $this->community = Community::all();
    }

    public function render()
    {
        return view('livewire.profile-allcommunity',[
            'community' => $this->community
        ]);
    }
}
