<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryList extends Component
{
    public $category;
    
    public function mount()
    {
        $this->category = Category::all();
    }

    public function render()
    {
        return view('livewire.category-list');
    }
}
