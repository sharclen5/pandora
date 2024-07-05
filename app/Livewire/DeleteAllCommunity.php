<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Community;

class DeleteAllCommunity extends Component
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
        return view('livewire.delete-all-community',[
            'commun' => $this->community,
        ]);
    }

}
