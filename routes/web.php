<?php

use App\Models\User;
use App\Livewire\Chat;
use App\Models\Community;
use App\Livewire\GroupChat;
use App\Livewire\CommunityList;
use App\Livewire\CommunCategory;
use App\Livewire\CommunityCreate;
use App\Livewire\CommunityProfile;
use App\Livewire\CommunityCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunityController;

Route::get('/', function () {
    return view('welcome', ['title' => 'Pandora']);
});

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
            'users' => User::where('id', '!=', auth()->id())
                ->whereIn('id', function ($query) {
                    $query->select('user_id')
                        ->from('members')
                        ->whereIn('community_id', function ($subQuery) {
                            $subQuery->select('community_id')
                                ->from('members')
                                ->where('user_id', auth()->id());
                        });
                })
                ->get(),
            'communities' => Community::whereHas('members', function ($query) {
                $query->where('user_id', auth()->id());
            })->get(),
        ]);
    })->name('chatshow');

    Route::get('/communityprofile', function () {
        return view('communityprofile');
    })->name('communityprofile');
    
    Route::get('/profile', function () {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        return view('profile', ['title' => 'Profile']);
    })->name('profile');

    Route::get('/community/create', CommunityCreate::class);
    Route::get('/community/{categoryId}', CommunityCategory::class)->name('communitypage');

    Route::get('chat/{user}', Chat::class)->name('chat');

    Route::get('groupchat/{communityId}', GroupChat::class)->name('groupchat');
    
require __DIR__.'/auth.php';
