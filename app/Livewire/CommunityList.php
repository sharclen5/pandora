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
    public $communities=[];

    public function mount()
    {
        $this->selectedCategory = request()->query('category', $this->selectedCategory);
    }

    public function updatingSelectedCategory()
    {
        $this->resetPage();
    }

    public function render()
    {
        $communities = Community::when($this->selectedCategory, function ($query) {
            $query->whereHas('category', function ($query) {
                $query->where('category_id', $this->selectedCategory);
            });
        })->paginate(100);

        $categories = Category::all();

        return view('livewire.community-list', [
            'community' => $communities,
            'categories' => $categories
        ]);
    }

    public function setCategory($categoryId)
    {
        $this->selectedCategory = $categoryId;
        $this->resetPage();
    }
}
