<?php

namespace App\Livewire;

use Auth;
use App\Models\Members;
use Livewire\Component;
use App\Models\Category;
use App\Models\Community;
use Livewire\WithFileUploads;

class CommunityCreate extends Component
{

    use WithFileUploads;

    public $name;
    public $img;
    public $tagline;
    public $category;
    public $description;
    public $guide;
    public $members_id;
    public $categoryList = [];
    public $community;

    protected $rules = [
        'name' => 'required|string|max:255',
        'img' => 'required|image|max:1024',
        'tagline' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'description' => 'required|string|max:1000',
        'guide' => 'required|string|max:1000',
    ];

    public function mount()
    {
        $this->categoryList = Category::all();
    }

    public function submit()
    {
        
        $this->validate();
        
        $imgPath = $this->img->store('images', 'public');


        $this->community = Community::create([
             'name' => $this->name,
             'img' => $imgPath,
             'tagline' => $this->tagline,
             'category' => $this->category,
             'description' => $this->description,
             'guide' => $this->guide,
             'members_id' => Auth::id(),
        ]);

        $community_id = $this->community->id;

        Members::create([
            'user_id' => Auth::id(),
            'community_id' => $community_id,
            'role' => 'admin',
        ]);
        
        unlink($this->img->getRealPath());
        session()->flash('message', 'Community created successfully.');

        return redirect()->to('/community');
    }

    public function render()
    {
        return view('livewire.community-create');
    }
}
