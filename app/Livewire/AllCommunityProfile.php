<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Community;

class AllCommunityProfile extends Component
{
    public $community=[];
    public $user;
    protected $layout = 'components.layout';
    
    public function mount(Community $community)
    {
        $this->community = Community::with('categories')->get();
    }

    public function render()
    {
        return view('livewire.all-community-profile');
    }
}
