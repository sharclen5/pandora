<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Community;

class DeleteCommunity extends Component
{
    public $community;
    public function mount($id){
        $this->community = Community::find($id);
    }

    public function deleteCommunity(){
        $this->community->delete();
        return redirect()->to('/profile');
    }

    public function render()
    {
        return view('livewire.delete-community',[
            'commun' => $this->community,
        ]);
    }
}
