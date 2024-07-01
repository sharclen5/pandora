<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Community;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\User;

class CommunityList extends Component
{
    use WithPagination;

    public $selectedCategory;
    public $communities;

    public function render()
    {
        $communities = Community::paginate(5);
        $categories = Category::all();

        return view('livewire.community-list', [
            'community' => $communities,
            'categories' => $categories
        ]);
    }

}
