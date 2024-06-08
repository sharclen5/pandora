<?php

use Illuminate\Support\Facades\Route;

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
    
    Route::get('/event', function () {
        return view('event', ['title' => 'Event']);
    })->name('event');
    
    Route::get('/profile', function () {
        return view('profile', ['title' => 'Profile']);
    })->name('profile');

require __DIR__.'/auth.php';
