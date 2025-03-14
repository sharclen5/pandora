<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Community;
use Illuminate\Support\Facades\Auth;

class CommunityCategory extends Component
{
    public $communities;
    public $categoryId;
    public $search='';

    public function mount($categoryId)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $this->categoryId = $categoryId;
        // You can also perform any actions here, like fetching data related to the categoryId
    }

    public function render()
    {
        $communities = Community::whereHas('category', function ($query) {
            $query->whereIn('category_id', [$this->categoryId]);
        })->paginate(8);
        $categories = Category::all();
        return view('livewire.community-category',[
            'community' => $communities,
            'categories' => $categories
        ]);
    }
}
