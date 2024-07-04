<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Community;
use Livewire\WithFileUploads;

class UpdateCommunity extends Component
{
    use WithFileUploads;
    public $community;
    public $categoryList;
    public $selectedCategories = [];

    public $name;
    public $img;
    public $tagline;
    public $category = [];
    public $description;
    public $guide;
    public $members_id;

    public function mount($id){
        $this->community = Community::find($id);
        $this->categoryList = Category::all(); // Fetch all categories
        $this->selectedCategories = $this->community->category->pluck('id')->toArray(); // Preselect categories
        $this->name = old('name', $this->community->name);
        $this->img = old('img', $this->community->img);
        $this->tagline = old('tagline', $this->community->tagline);
        $this->description = old('description', $this->community->description);
        $this->guide = old('guide', $this->community->guide);
    }

    public function render()
    {
        return view('livewire.update-community',[
            'commun' => $this->community,
            'categoryList' => $this->categoryList
        
        ]);
    }

    public function updatedSelectedCategories()
    {
        // Sync categories with the community
        $this->community->category()->sync($this->selectedCategories);
    }

    protected $rules = [
        'name' => 'required|string|max:255',
        'tagline' => 'required|string|max:255',
        'description' => 'required|string|max:1000',
        'guide' => 'required|string|max:1000',
    ];

    public function updateCommunity()
    {   
        $this->validate();
        
        if($this->img!=old('img', $this->community->img)){
            $this->validate([
                'img' => 'image|max:1024',
            ]);
            $imgPath = $this->img->store('images', 'public');
            unlink($this->img->getRealPath());
        }else{
            $imgPath = $this->community->img;
        }
        
        $this->community->update([
            'name' => $this->name,
            'img' => $imgPath,
            'tagline' => $this->tagline,
            'description' => $this->description,
            'guide' => $this->guide,
       ]);

        return redirect()->to('/profile');

        session()->flash('message', 'Community updated successfully.');
        
        
    }
}
