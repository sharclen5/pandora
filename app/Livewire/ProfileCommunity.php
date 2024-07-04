<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Community;

class ProfileCommunity extends Component
{

    public $community;
    public $member;

    public function mount()
    {;
        $this->community = Community::where('members_id', auth()->user()->id)->get();
        $this->categoryList = Category::all();
    }

    public function render()
    {
        return view('livewire.profile-community',[
            'community' => $this->community,
            'categoryList' => $this->categoryList,
        ]);
    }
}
