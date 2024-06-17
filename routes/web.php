<?php

use App\Models\User;
use App\Livewire\Chat;
use App\Livewire\CommunityCreate;
use App\Livewire\CommunityProfile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunityController;

Route::get('/', function () {
    return view('welcome', ['title' => 'Pandora']);
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::get('/home', function () {
        return view('home', ['title' => 'Home']);
    })->name('home');
    
    Route::get('/chat', function () {
        return view('chat');
    })->name('chat');
    
    Route::get('/community', function () {
        return view('community');
    })->name('community');
    
    Route::get('/chat', function () {
        return view('chat', [
            'users' => User::where('id', '!=', auth()->id())->get(),
        ]);
    })->name('chatshow');

    Route::get('/communityprofile', function () {
        return view('communityprofile');
    })->name('communityprofile');
    
    Route::get('/event', function () {
        return view('event', ['title' => 'Event']);
    })->name('event');
    
    Route::get('/profile', function () {
        return view('profile', ['title' => 'Profile']);
    })->name('profile');

    Route::get('/community/create', CommunityCreate::class);

    // Route::get('/community/{community}', CommunityProfile::class);

    Route::get('chat/{user}', Chat::class)->name('chat');
require __DIR__.'/auth.php';
