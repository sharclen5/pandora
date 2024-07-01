<?php

namespace App\Livewire;

use App\Models\Members;
use Livewire\Component;
use App\Models\Community;

class Recomendation extends Component
{
    public function mount(){
        $this->countMember = Members::select('community_id')
            ->groupBy('community_id')
            ->orderByRaw('COUNT(*) DESC')
            ->take(5)
            ->pluck('community_id');
        
        $this->recomendation = Community::whereIn('id', $this->countMember)->get();
    }

    public function render()
    {
        return view('livewire.recomendation', ['recomendation' => $this->recomendation]);
    }
}
