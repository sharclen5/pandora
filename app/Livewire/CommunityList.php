<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Community;

class CommunityList extends Component
{

    public $community;

    public function mount()
    {
        $this->community = Community::all();
    }

    public function render()
    {
        return view('livewire.community-list');
    }
}
