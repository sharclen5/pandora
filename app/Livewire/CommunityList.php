<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Community;
use Illuminate\Foundation\Auth\User;

class CommunityList extends Component
{

    public $community;
    public $user;

    public function mount()
    {
        $this->community = Community::all();
    }

    public function render()
    {
        return view('livewire.community-list');
    }
}
