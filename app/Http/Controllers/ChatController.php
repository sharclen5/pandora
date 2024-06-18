<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ChatController extends Controller
{
    public function dashboard()
    {
        $users = User::where('id', '!=', auth()->user()->id)->get();
        return view('dashboard', compact('users'));
    }

    public function chatbox()
    {
        $users = User::where('id', '!=', auth()->user()->id)->get();
        $receiver = '';
        $id = '';
        return view('chat', compact('id', 'users', 'receiver'));
    }

    public function chat($id)
    {
        $receiver = User::find($id);;
        $users = User::where('id', '!=', auth()->user()->id)->get();
        return view('chat', compact('id', 'receiver', 'users'));
    }
}
