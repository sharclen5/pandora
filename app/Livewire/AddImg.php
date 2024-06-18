<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AddImg extends Component
{
    use WithFileUploads;

    public $img;

    protected $rules = [
        'img' => 'required|image|max:1024',
    ];

    public function saveImage()
    {
        
         // Get the current user
        $user = User::find(Auth::id());

        // Delete the old image if it exists
        Storage::disk('public')->delete($user->img);
       

        $this->validate();
        
        $imgPath = $this->img->store('images', 'public');

        // Storage::disk('livewire-tmp')->delete($this->img->getRealPath());
        unlink($this->img->getRealPath());
        User::where('id', Auth::id())->update([
            'img' => $imgPath,
        ]);

        session()->flash('message', 'Profile Image change successfully.');
        return redirect()->to('/profile');
    }

    public function render()
    {
        return view('livewire.add-img');
    }
}
