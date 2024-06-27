<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Community;

class CommunityProfile extends Component
{
    public $community=[];
    protected $layout = 'components.layout';
    
    public function mount(Community $community)
    {
        $this->community = $community;
    }

    public function render()
    {
        return view('livewire.community-profile');
    }
}
