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
    public $search='';

    public function mount()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function getCommunities()
    {
        return Community::where('name', 'like', '%'.$this->search.'%')->paginate(8);
    }

    public function render()
    {
        $communities = $this->getCommunities();
        $commun = Community::all();
        $categories = Category::all();
    
        return view('livewire.community-list', [
            'community' => $communities,
            'categories' => $categories,
            'search' => $this->search,
            'com' => $commun
        ]);
    }       

}
