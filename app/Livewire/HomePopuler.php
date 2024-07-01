<?php

namespace App\Livewire;

use App\Models\Members;
use Livewire\Component;
use App\Models\Community;

class HomePopuler extends Component
{
    public function mount(){
        $this->countMember = Members::select('community_id')
            ->groupBy('community_id')
            ->orderByRaw('COUNT(*) DESC')
            ->take(2)
            ->pluck('community_id');
        
        $this->recomendation = Community::whereIn('id', $this->countMember)->get();
    }

    public function render()
    {
        return view('livewire.home-populer', ['recomendation' => $this->recomendation]);
    }
}
