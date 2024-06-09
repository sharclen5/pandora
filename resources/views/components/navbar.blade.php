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
                        <img class="h-10" src="logo.png" alt="logo"> Pandora
                    </a>

                    <!-- Nav Links -->
                    <div class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                        <div class="flex space-x-4">
                            <a href="{{ route('home') }}"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium">Home</a>
                            <a href="{{ route('chat') }}"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium">Chat</a>
                            <a href="{{ route('community') }}"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium">Community</a>
                            <a href="{{ route('event') }}"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-lg font-medium">Event</a>
                        </div>
                    </div>

                    <!-- Header Icons -->
                    <div class="hidden xl:flex items-center space-x-5">




                        <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
                            class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none"
                            type="button">
                            <svg class="text-white w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 14 20">
                                <path
                                    d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
                            </svg>

                            <div
                                class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 animate-pulse">
                            </div>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownNotification"
                            class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow"
                            aria-labelledby="dropdownNotificationButton">
                            <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50">
                                Notifications
                            </div>
                            <div class="divide-y divide-gray-100">
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-1.jpg"
                                            alt="Jese image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full">
                                            <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                                <path
                                                    d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                <path
                                                    d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full ps-3">
                                        <div class="text-gray-500 text-sm mb-1.5">New message from <span
                                                class="font-semibold text-gray-900">Jese Leos</span>: "Hey,
                                            what's up? All set for the presentation?"</div>
                                        <div class="text-xs text-blue-600">a few moments ago</div>
                                    </div>
                                </a>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-2.jpg"
                                            alt="Joseph image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-gray-900 border border-white rounded-full">
                                            <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                                <path
                                                    d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full ps-3">
                                        <div class="text-gray-500 text-sm mb-1.5"><span
                                                class="font-semibold text-gray-900">Joseph Mcfall</span>
                                            and
                                            <span class="font-medium text-gray-900">5 others</span> started
                                            following you.
                                        </div>
                                        <div class="text-xs text-blue-600">10 minutes ago</div>
                                    </div>
                                </a>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-3.jpg"
                                            alt="Bonnie image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-red-600 border border-white rounded-full">
                                            <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                                <path
                                                    d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full ps-3">
                                        <div class="text-gray-500 text-sm mb-1.5"><span
                                                class="font-semibold text-gray-900">Bonnie Green</span> and
                                            <span class="font-medium text-gray-900">141 others</span> love
                                            your story. See it and view more stories.
                                        </div>
                                        <div class="text-xs text-blue-600">44 minutes ago</div>
                                    </div>
                                </a>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11"
                                            src="/docs/images/people/profile-picture-4.jpg" alt="Leslie image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-green-400 border border-white rounded-full">
                                            <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 18">
                                                <path
                                                    d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full ps-3">
                                        <div class="text-gray-500 text-sm mb-1.5"><span
                                                class="font-semibold text-gray-900">Leslie
                                                Livingston</span>
                                            mentioned you in a comment: <span class="font-medium text-blue-500"
                                                href="#">@bonnie.green</span> what do you say?</div>
                                        <div class="text-xs text-blue-600">1 hour ago</div>
                                    </div>
                                </a>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11"
                                            src="/docs/images/people/profile-picture-5.jpg" alt="Robert image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-purple-500 border border-white rounded-full">
                                            <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 14">
                                                <path
                                                    d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full ps-3">
                                        <div class="text-gray-500 text-sm mb-1.5"><span
                                                class="font-semibold text-gray-900">Robert Brown</span>
                                            posted a new video: Glassmorphism - learn how to implement the new design trend.
                                        </div>
                                        <div class="text-xs text-blue-600">3 hours ago</div>
                                    </div>
                                </a>
                            </div>
                            <a href="#"
                                class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100">
                                <div class="inline-flex items-center ">
                                    <svg class="w-4 h-4 me-2 text-gray-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                        <path
                                            d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                    </svg>
                                    View all
                                </div>
                            </a>
                        </div>



                        <!-- USER PROFILE -->



                        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                            data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer"
                            src="{{ asset('minisui.png') }}" alt="User dropdown">

                        <!-- Dropdown menu -->
                        <div id="userDropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                <div>Hoshimachi Suisei</div>
                            </div>
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                                <li>
                                    <a href="#"
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
                <div class="ml-2">
                    Name Here
                </div>
            </nav>
        @endauth

    </section>
</div>
