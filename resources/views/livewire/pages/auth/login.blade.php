<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>


<div class="flex h-screen items-center justify-center">
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
                        <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium" />
                        <x-text-input wire:model="form.email" id="email" class="mt-1 p-2 w-full border-blue-800 rounded-md bg-blue-900 focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300" type="email" name="email" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium" />

                        <x-text-input wire:model="form.password" id="password" class="mt-1 p-2 w-full border-blue-800 rounded-md bg-blue-900 focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <a href="{{ route('register') }}" class="mt-20 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm sm:text-base md:text-xl px-4 sm:px-6 md:px-10 py-2 sm:py-2.5 md:py-3.5 text-center me-2 mb-2">
                            Does not have account?
                        </a>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
