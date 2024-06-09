<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('home', absolute: false), navigate: true);
    }
}; ?>

<div id="main" class="flex h-screen items-center justify-center">

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="w-full lg:w-1/2 text-white flex items-center justify-center">

        <div class="highlight-box border-2 border-blue-500 rounded-md px-10 py-6 max-w-lg w-full mx-auto box">
            <div class="max-w-md w-full p-6">
                <img src="{{ asset('logo.png') }}" alt="" class="w-24 h-24 mx-auto mb-2">
                <h1 class="text-3xl font-semibold mb-3 text-center">Join Now</h1>
                <h1 class="text-sm font-semibold mb-3 text-center">Explore and grasp the possibility right now </h1>
                <div class="mt-8 flex flex-col lg:flex-row items-center justify-between">
                </div>

                <form wire:submit="login" class="space-y-8">
                    <!-- Email Address -->
                    <div>
                        <x-input-label class="text-white" for="email" :value="__('Email')" />
                        <x-text-input wire:model="form.email" id="email" class="mt-1 p-2 w-full border-blue-800 rounded-md bg-blue-900 focus:bg-white focus:text-black focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300" type="email"
                            name="email" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label class="text-white" for="password" :value="__('Password')" />

                        <x-text-input wire:model="form.password" id="password" class="mt-1 p-2 w-full border-blue-800 rounded-md bg-blue-900 focus:bg-white focus:text-black focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300"
                            type="password" name="password" required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button 
                        class="flex justify-center items-center text-white w-full bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-3 me-2 mb-2">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>

                </form>
                <div class="mt-4 text-sm text-center">
                    <p class="text-lg">Didn't have an account yet ? <a href="{{ route('register') }}" class=" hover:underline text-blue-500">Sign up here</a>
                    </p>
                  </div>
            </div>
        </div>
    </div>
