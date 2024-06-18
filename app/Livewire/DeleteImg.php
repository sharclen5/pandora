<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DeleteImg extends Component
{   
    public $img;

    public function deleteImg(){
       $this->img = User::find(Auth::id())->img;

       Storage::disk('public')->delete($this->img);

       User::where('id', Auth::id())->update([
        'img' => 'default.jpg',
        ]);

        return redirect()->to('/profile');
    }
    
    public function render()
    {
        return view('livewire.delete-img');
    }
}
