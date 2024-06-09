@vite('resources/css/app.css')
<link href="{{ asset('css/register.css') }}" rel="stylesheet">

{{-- Container Utama --}}
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

                    <div class="mt-1 p-2 w-full border-blue-800 rounded-md bg-blue-900 focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">>
                      <x-input-label for="email" :value="__('Email')" />
                      <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email" name="email"
                          required autofocus autocomplete="username" />
                      <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                    </div>

                    <div class="mt-1 p-2 w-full border-blue-800 rounded-md bg-blue-900 focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">>
                      <x-input-label for="password" :value="__('Password')" />
                      <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full" type="password"
                          name="password" required autocomplete="current-password" />
                      <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                            
                    </div>

                    <div id="button">
                      <x-primary-button class="w-full text-white p-2 rounded-md hover:bg-gray-800 -none  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-colors duration-300">
                        {{ __('Log in') }}
                      </x-primary-button>
                    </div>

                </form>
                
                <div class="mt-4 text-sm text-center">
                    <p class="text-lg">Didn't have an account yet ? <a href="{{ route('register') }}"
                            class=" hover:underline text-blue-500">Sign up here</a>
                    </p>
                </div>

            </div>

        </div>

    </div>

</div>
