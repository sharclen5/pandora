<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

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

require __DIR__.'/auth.php';
