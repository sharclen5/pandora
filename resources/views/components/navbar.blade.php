@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="fixed top-0 z-50 flex flex-wrap place-items-center overflow-visible">
    <section class="relative mx-auto">

        <!-- navbar_belum-log-in -->
        @guest
            <nav id="guest" class="flex justify-between bg-gray-900 text-white w-screen">
                <div class="px-4 xl:px-12 py-2 flex w-full items-center">
                    <a class="text-2xl font-bold font-heading flex items-center" href="/">
                        <img class="h-10" src="logo.png" alt="logo"> Pandora
                    </a>
                </div>

                <!-- Login/Register button -->
                <div class="ml-2">
                    <button type="button"
                        class="mt-2 mr-8 text-white hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                        onclick="window.location='{{ route('login') }}'">
                        Login/Register</button>
                </div>
            </nav>
        @endguest


        <!-- navbar_logged-in -->
        @auth
            <nav id="user" class="flex justify-between bg-gray-900 text-white w-screen">
                <div class="px-4 xl:px-12 py-2 flex w-full items-center">
                    <a class="text-2xl font-bold font-heading flex items-center" href="/">
                        <img class="h-10" src="{{ asset('logo.png') }}" alt="logo"> Pandora
                    </a>

                    <!-- Nav Links -->
                    <div class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                        <div class="flex space-x-4">
                            <a href="{{ route('home') }}"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium">Home</a>
                            <a href="{{ route('chatshow') }}"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium">Chat</a>
                            <a href="{{ route('community') }}"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium">Community</a>
                        </div>
                    </div>

                    <!-- Header Icons -->
                    <div class="hidden xl:flex items-center space-x-5">

                        <!-- USER PROFILE -->



                        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                            data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer"
                            src="
                                @if (auth()->user()->img == 'default.jpg')
                                https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGZhY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60
                              @else
                                {{ asset('storage/' . auth()->user()->img) }}
                              @endif
                            " alt="User dropdown">

                        <!-- Dropdown menu -->
                        <div id="userDropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                <div>{{ Auth::user()->name }}</div>
                            </div>
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                                <li>
                                    <a href="{{ route('profile') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                @livewire('logout-component')
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Responsive navbar -->
                <a class="xl:hidden flex mr-6 items-center" href="#">
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.292-.538 1.292H5.538C5 18 5 17.301 5 16.708c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365ZM8.733 18c.094.852.306 1.54.944 2.112a3.48 3.48 0 0 0 4.646 0c.638-.572 1.236-1.26 1.33-2.112h-6.92Z" />
                    </svg>
                    <span class="flex absolute -mt-5 ml-4">
                        <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-red-600 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-red-600"></span>
                    </span>
                    </span>
                </a>
                <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            </nav>
        @endauth

    </section>
</div>
