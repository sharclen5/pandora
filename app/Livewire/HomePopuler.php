<?php

namespace App\Livewire;

use App\Models\Members;
use Livewire\Component;
use App\Models\Community;
use Illuminate\Support\Facades\Auth;

class HomePopuler extends Component
{
    public function mount(){
        if (!Auth::check()) {
            return redirect()->route('login');
        }
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
