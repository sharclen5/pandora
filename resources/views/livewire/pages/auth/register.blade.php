<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div id="main" class="flex h-screen items-center justify-center">
    <div class="w-full lg:w-1/2 text-white flex items-center justify-center">
        <div class="highlight-box border-2 border-blue-500 rounded-md px-10 py-6 max-w-lg w-full mx-auto box">
            <div class="max-w-md w-full p-6">
                <img src="{{ asset('logo.png') }}" alt="" class="w-24 h-24 mx-auto mb-2">
                <h1 class="text-3xl font-semibold mb-3 text-center">Join Now</h1>
                <h1 class="text-sm font-semibold mb-3 text-center">Explore and grasp the possibility right now </h1>
                <div class="mt-8 flex flex-col lg:flex-row items-center justify-between">
                </div>
                <form wire:submit="register" class="space-y-8">
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" class="block text-sm font-medium" />
                        <x-text-input wire:model="name" id="name" class="mt-1 p-2 w-full border-blue-800 rounded-md bg-blue-900 focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300" type="text" name="name" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium" />
                        <x-text-input wire:model="email" id="email" class="mt-1 p-2 w-full border-blue-800 rounded-md bg-blue-900 focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300" type="email" name="email" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium" />

                        <x-text-input wire:model="password" id="password" class="mt-1 p-2 w-full border-blue-800 rounded-md bg-blue-900 focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block text-sm font-medium" />

                        <x-text-input wire:model="password_confirmation" id="password_confirmation" class="mt-1 p-2 w-full border-blue-800 rounded-md bg-blue-900 focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                            {{ __('Already registered?') }}
                        </a>

                        <x-primary-button class="ms-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
