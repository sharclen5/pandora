<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutComponent extends Component
{
    public function logout()
    {
        Auth::guard('web')->logout();
        
        Session::invalidate();
        Session::regenerateToken();
        return redirect()->route('login'); // Atur rute sesuai dengan rute login Anda
    }

    public function render()
    {
        return view('livewire.logout-component');
    }
}

