<?php

namespace App\Livewire;

use Auth;
use Livewire\Component;
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

    protected $rules = [
        'name' => 'required|string|max:255',
        'img' => 'required|image|max:1024',
        'tagline' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'description' => 'required|string',
        'guide' => 'required|string',
    ];

    public function submit()
    {
        
        $this->validate();
        
        $imgPath = $this->img->store('images', 'public');


        Community::create([
             'name' => $this->name,
             'img' => $imgPath,
             'tagline' => $this->tagline,
             'category' => $this->category,
             'description' => $this->description,
             'guide' => $this->guide,
             'members_id' => rand(),
        ]);
        
        session()->flash('message', 'Community created successfully.');

        return redirect()->to('/community');
    }

    public function render()
    {
        return view('livewire.community-create');
    }
}
