<x-layout>

    <div id="main" class="antialiased">

        <div id="crud-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-blue-500 rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Create New Community
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5">
                        <div class="grid gap-4 mb-4 grid-cols-2">

                            <div class="col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Community
                                    Name</label>
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    placeholder="Type community name" required="">
                            </div>

                            <label class="block mb-2 text-sm font-medium text-gray-900" for="user_avatar">Upload
                                Image</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                aria-describedby="user_avatar_help" id="user_avatar" type="file">

                            <div class="col-span-2 sm:col-span-1">
                                <label for="tagline"
                                    class="block mb-2 text-sm font-medium text-gray-900">Tagline</label>
                                <input type="textr" name="tagline" id="tagline"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    placeholder="Cool stuff" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="category"
                                    class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                                <select id="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                    <option selected="">Select category</option>
                                    <option value="TV">TV/Monitors</option>
                                    <option value="PC">PC</option>
                                    <option value="GA">Gaming/Console</option>
                                    <option value="PH">Phones</option>
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                                <textarea id="description" rows="1"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Description"></textarea>
                            </div>
                            <div class="col-span-2">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Rules and
                                    Guidelines</label>
                                <textarea id="description" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Rules and Guidelines"></textarea>
                            </div>
                        </div>
                        <button type="submit"
                            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Start the new journey
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Sidebar -->

        <aside
            class="fixed left-0 z-40 w-60 h-full pt-10 transition-transform -translate-x-full bg-blue-300 md:translate-x-0"
            aria-label="Sidenav" id="drawer-navigation">
            <div class="overflow-y-auto px-3 h-full">
                <h1 class="font-bold text-2xl mb-8 text-center">Discover Your Community</h1>

                <a href="#"
                    class="mb-4 flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <svg class="w-6 h-6 text-gray-500" viewBox="0 0 30 30" id="_16_-_Compas" data-name="16 - Compas"
                        xmlns="http://www.w3.org/2000/svg">
                        <path id="Path_190" data-name="Path 190"
                            d="M16,1A15,15,0,1,0,31,16,15.007,15.007,0,0,0,16,1Zm0,2A13,13,0,1,1,3,16,13.006,13.006,0,0,1,16,3Z"
                            transform="translate(-1 -1)" fill-rule="evenodd" />
                        <path id="Path_191" data-name="Path 191" d="M15,2V4a1,1,0,0,0,2,0V2a1,1,0,0,0-2,0Z"
                            transform="translate(-1 -1)" fill-rule="evenodd" />
                        <path id="Path_192" data-name="Path 192" d="M17,30V28a1,1,0,0,0-2,0v2a1,1,0,0,0,2,0Z"
                            transform="translate(-1 -1)" fill-rule="evenodd" />
                        <path id="Path_193" data-name="Path 193" d="M30,15H28a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z"
                            transform="translate(-1 -1)" fill-rule="evenodd" />
                        <path id="Path_194" data-name="Path 194" d="M4,15H2a1,1,0,0,0,0,2H4a1,1,0,0,0,0-2Z"
                            transform="translate(-1 -1)" fill-rule="evenodd" />
                        <path id="Path_195" data-name="Path 195"
                            d="M23.633,9.686a1,1,0,0,0-1.32-1.32l-9.3,4.136a1,1,0,0,0-.508.507l-4.135,9.3a1,1,0,0,0,1.32,1.32l9.3-4.135a1,1,0,0,0,.508-.508l4.135-9.3ZM20.749,11.25l-2.923,6.577L11.25,20.75l2.923-6.577Z"
                            transform="translate(-1 -1)" fill-rule="evenodd" />
                        <circle id="Ellipse_1" data-name="Ellipse 1" cx="1.243" cy="1.243" r="1.243"
                            transform="translate(13.757 13.757)" />
                    </svg>
                    <span class="ml-3">For You</span>
                </a>

                <a href="#"
                    class="mb-4 flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-500" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.5 8.5H15.51M10.5 7.5H10.51M7.5 11.5H7.51M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 13.6569 19.6569 15 18 15H17.4C17.0284 15 16.8426 15 16.6871 15.0246C15.8313 15.1602 15.1602 15.8313 15.0246 16.6871C15 16.8426 15 17.0284 15 17.4V18C15 19.6569 13.6569 21 12 21ZM16 8.5C16 8.77614 15.7761 9 15.5 9C15.2239 9 15 8.77614 15 8.5C15 8.22386 15.2239 8 15.5 8C15.7761 8 16 8.22386 16 8.5ZM11 7.5C11 7.77614 10.7761 8 10.5 8C10.2239 8 10 7.77614 10 7.5C10 7.22386 10.2239 7 10.5 7C10.7761 7 11 7.22386 11 7.5ZM8 11.5C8 11.7761 7.77614 12 7.5 12C7.22386 12 7 11.7761 7 11.5C7 11.2239 7.22386 11 7.5 11C7.77614 11 8 11.2239 8 11.5Z"
                            stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="ml-3">Hobby</span>
                </a>

                <a href="#"
                    class="mb-4 flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-500" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
                        stroke-width="3" stroke="#000000" fill="none">
                        <ellipse cx="31.95" cy="32" rx="8.99" ry="24.73"
                            stroke-linecap="round" />
                        <ellipse cx="31.95" cy="32" rx="8.99" ry="24.73"
                            transform="translate(-11.74 43.67) rotate(-60)" stroke-linecap="round" />
                        <ellipse cx="32.05" cy="32.15" rx="24.73" ry="8.99"
                            transform="translate(-11.78 20.33) rotate(-30)" stroke-linecap="round" />
                        <circle cx="32.2" cy="32.15" r="2.88" stroke-linecap="round" />
                    </svg>
                    <span class="ml-3">Science</span>
                </a>

                <a href="#"
                    class="mb-4 flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-500" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9 19C9 20.1046 7.65685 21 6 21C4.34315 21 3 20.1046 3 19C3 17.8954 4.34315 17 6 17C7.65685 17 9 17.8954 9 19ZM9 19V5L21 3V17M21 17C21 18.1046 19.6569 19 18 19C16.3431 19 15 18.1046 15 17C15 15.8954 16.3431 15 18 15C19.6569 15 21 15.8954 21 17ZM9 9L21 7"
                            stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="ml-3">Music</span>
                </a>

                <a href="#"
                    class="mb-4 flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-500" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.99999 8.5C7.99999 7.94772 7.55227 7.5 6.99999 7.5C6.4477 7.5 5.99999 7.94772 5.99999 8.5V9H5.49999C4.9477 9 4.49999 9.44771 4.49999 10C4.49999 10.5523 4.9477 11 5.49999 11H5.99999V11.5C5.99999 12.0523 6.4477 12.5 6.99999 12.5C7.55227 12.5 7.99999 12.0523 7.99999 11.5V11H8.49999C9.05227 11 9.49999 10.5523 9.49999 10C9.49999 9.44771 9.05227 9 8.49999 9H7.99999V8.5Z"
                            fill="#0F1729" />
                        <path
                            d="M18 8C18 8.55229 17.5523 9 17 9C16.4477 9 16 8.55229 16 8C16 7.44772 16.4477 7 17 7C17.5523 7 18 7.44772 18 8Z"
                            fill="#0F1729" />
                        <path
                            d="M17 13C17.5523 13 18 12.5523 18 12C18 11.4477 17.5523 11 17 11C16.4477 11 16 11.4477 16 12C16 12.5523 16.4477 13 17 13Z"
                            fill="#0F1729" />
                        <path
                            d="M16 10C16 10.5523 15.5523 11 15 11C14.4477 11 14 10.5523 14 10C14 9.44771 14.4477 9 15 9C15.5523 9 16 9.44771 16 10Z"
                            fill="#0F1729" />
                        <path
                            d="M19 11C19.5523 11 20 10.5523 20 10C20 9.44771 19.5523 9 19 9C18.4477 9 18 9.44771 18 10C18 10.5523 18.4477 11 19 11Z"
                            fill="#0F1729" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 3C10.1879 3 7.96237 3.25817 6.21782 3.5093C3.94305 3.83676 2.09096 5.51696 1.60993 7.7883C1.34074 9.05935 1.07694 10.5622 1.01649 11.8204C0.973146 12.7225 0.877981 13.9831 0.777155 15.1923C0.672256 16.4504 1.09148 17.7464 1.86079 18.6681C2.64583 19.6087 3.88915 20.2427 5.32365 19.8413C6.24214 19.5842 6.97608 18.9387 7.5205 18.3026C8.07701 17.6525 8.51992 16.9124 8.83535 16.3103C9.07821 15.8467 9.50933 15.5855 9.91539 15.5855H14.0846C14.4906 15.5855 14.9218 15.8467 15.1646 16.3103C15.4801 16.9124 15.923 17.6525 16.4795 18.3026C17.0239 18.9387 17.7578 19.5842 18.6763 19.8413C20.1108 20.2427 21.3541 19.6087 22.1392 18.6681C22.9085 17.7464 23.3277 16.4504 23.2228 15.1923C23.122 13.9831 23.0268 12.7225 22.9835 11.8204C22.923 10.5622 22.6592 9.05935 22.39 7.7883C21.909 5.51696 20.0569 3.83676 17.7821 3.5093C16.0376 3.25817 13.8121 3 12 3ZM6.50279 5.48889C8.22744 5.24063 10.3368 5 12 5C13.6632 5 15.7725 5.24063 17.4972 5.4889C18.965 5.70019 20.1311 6.77489 20.4334 8.20267C20.6967 9.44565 20.9332 10.8223 20.9858 11.9164C21.0309 12.856 21.1287 14.1463 21.2297 15.3585C21.2912 16.0956 21.0342 16.8708 20.6037 17.3866C20.1889 17.8836 19.7089 18.0534 19.2153 17.9153C18.8497 17.8129 18.4327 17.509 17.9989 17.0021C17.5771 16.5094 17.2144 15.9131 16.9362 15.3822C16.4043 14.3667 15.3482 13.5855 14.0846 13.5855H9.91539C8.65178 13.5855 7.59571 14.3667 7.06374 15.3822C6.78558 15.9131 6.42285 16.5094 6.00109 17.0021C5.56723 17.509 5.15027 17.8129 4.78463 17.9153C4.29109 18.0534 3.81102 17.8836 3.39625 17.3866C2.96576 16.8708 2.70878 16.0956 2.77024 15.3585C2.87131 14.1463 2.96904 12.856 3.01418 11.9164C3.06675 10.8223 3.30329 9.44565 3.56653 8.20267C3.86891 6.77489 5.03497 5.70019 6.50279 5.48889Z"
                            fill="#0F1729" />
                    </svg>
                    <span class="ml-3">Game</span>
                </a>

                <a href="#"
                    class="mb-4 flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-6 h-6 text-gray-500" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
                        stroke-width="3" stroke="#000000" fill="none">
                        <circle cx="33.69" cy="32" r="24.99" stroke-linecap="round" />
                        <polygon points="33.43 20.18 22.84 27.88 26.89 40.32 39.98 40.32 44.02 27.88 33.43 20.18"
                            stroke-linecap="round" />
                        <polyline points="40.41 7.92 33.43 13.48 26.59 8.04" stroke-linecap="round" />
                        <line x1="33.43" y1="20.18" x2="33.43" y2="13.48" stroke-linecap="round" />
                        <polyline points="58.68 32 50.6 25.92 53.78 17.14" stroke-linecap="round" />
                        <polyline points="40.72 55.99 44.02 46.39 54.05 46.49" stroke-linecap="round" />
                        <polyline points="25.61 55.65 22.55 46.39 13.26 46.39" stroke-linecap="round" />
                        <polyline points="8.7 32 15.99 25.97 13.16 17.76" stroke-linecap="round" />
                        <line x1="22.84" y1="27.88" x2="15.99" y2="25.97" stroke-linecap="round" />
                        <line x1="26.89" y1="40.32" x2="22.55" y2="46.39" stroke-linecap="round" />
                        <line x1="39.98" y1="40.32" x2="44.02" y2="46.39" stroke-linecap="round" />
                        <line x1="44.02" y1="27.89" x2="50.6" y2="25.92" stroke-linecap="round" />
                    </svg>
                    <span class="ml-3">Sport</span>
                </a>

                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                    class="mt-60 text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Create Your Community
                </button>

            </div>
        </aside>

        <main class="p-4 md:ml-64 h-auto pt-2">

            <div class="relative mb-4">
                <img src="{{ asset('commu.png') }}" alt="commuSearch" class="h-64 w-full">

                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
                    <h1 class="text-4xl font-bold text-white mb-2">Discover Your Community on Pandora</h1>
                    <p class="text-lg font-normal text-white mb-4">There's always a place for you</p>

                    <form class="max-w mx-auto">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Go find it now !" required />
                            <button type="submit"
                                class="text-white absolute end-2.5 bottom-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1">Search</button>
                        </div>
                    </form>
                </div>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-8 mt-8">

                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#" data-modal-target="static-modal" data-modal-toggle="static-modal">
                        <img class="rounded-t-lg" src="{{ asset('sui2.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#" data-modal-target="static-modal" data-modal-toggle="static-modal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </div>

                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#" data-modal-target="static-modal" data-modal-toggle="static-modal">
                        <img class="rounded-t-lg" src="{{ asset('sui2.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#" data-modal-target="static-modal" data-modal-toggle="static-modal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </div>

                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#" data-modal-target="static-modal" data-modal-toggle="static-modal">
                        <img class="rounded-t-lg" src="{{ asset('sui2.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#" data-modal-target="static-modal" data-modal-toggle="static-modal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </div>

                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#" data-modal-target="static-modal" data-modal-toggle="static-modal">
                        <img class="rounded-t-lg" src="{{ asset('sui2.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#" data-modal-target="static-modal" data-modal-toggle="static-modal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </div>
            </div>


            {{-- DETAIL COMMUNITY --}}
            <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-7xl max-h-full">

                    <!-- Modal content -->
                    <div class="relative text-white bg-white rounded-lg shadow dark:bg-gray-700 flex">

                        <!-- Left part -->
                        <div class="w-1/4 bg-gray-200 dark:bg-gray-500">
                            <img src="{{ asset('cdetail.png') }}" alt="Image Description"
                                class="w-full h-auto object-cover mb-4">
                            <h1 class="text-4xl mb-3 text-center">Tech Inovator</h1>
                            <hr class="w-4/5 mx-auto mb-2">

                            <div class="text-lg mb-1 ml-16">

                                <div class="flex items-center">
                                    <svg class="mr-2 w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                            clip-rule="evenodd" />
                                    </svg> 11.135 Members
                                </div>

                                <div class="flex items-center">
                                    <svg class="mr-2 w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z"
                                            clip-rule="evenodd" />
                                    </svg> Top #1 Community
                                </div>

                                <div class="flex items-center">
                                    <svg class="mr-2 w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H4Zm0 8v6h7v-6H4Zm16 6h-7v-6h7v6Z"
                                            clip-rule="evenodd" />
                                    </svg> Hobby, Entertainment
                                </div>

                                <div class="flex items-center">
                                    <svg class="mr-2 w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
                                    </svg> Since 2020
                                </div>

                            </div>

                            <div class="flex justify-center items-center mt-72 mb-4">
                                <button data-modal-hide="static-modal" type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Join
                                </button>
                            </div>


                        </div>


                        <!-- Right part -->
                        <div class="w-3/4">

                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="static-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>

                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-2">

                                <h1 class="text-3xl">Tagline</h1>
                                <p class="text-base leading-relaxed text-white">
                                    “Innovate, Collaborate, Elevate”
                                </p>

                                <h1 class="text-3xl mt-8">Description</h1>
                                <p class="text-base leading-relaxed text-white">
                                    Tech Innovators is a vibrant community where tech enthusiasts from diverse
                                    backgrounds come
                                    together to share knowledge, collaborate on innovative projects, and explore the
                                    latest
                                    advancements in technology. Our mission is to foster a forward-thinking environment
                                    that
                                    inspires creativity, drives technological progress, and builds a network of
                                    like-minded
                                    individuals passionate about the future of technology.
                                </p>

                                <h1 class="text-3xl">Rules and Guidelines</h1>
                                <p class="text-base leading-relaxed text-white">

                                <ol class="space-y-4 text-gray-500 list-decimal list-inside dark:text-gray-400">
                                    <li>
                                        List item one
                                        <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
                                            <li>You might feel like you are being really "organized" o</li>
                                            <li>Nested navigation in UIs is a bad idea too, keep things as flat as
                                                possible.
                                            </li>
                                            <li>Nesting tons of folders in your source code is also not helpful.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        List item two
                                        <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
                                            <li>I'm not sure if we'll bother styling more than two levels deep.</li>
                                            <li>Two is already too much, three is guaranteed to be a bad idea.</li>
                                            <li>If you nest four levels deep you belong in prison.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        List item three
                                        <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
                                            <li>Again please don't nest lists if you want</li>
                                            <li>Nobody wants to look at this.</li>
                                            <li>I'm upset that we even have to bother styling this.</li>
                                        </ul>
                                    </li>
                                </ol>

                                </p>

                            </div>

                        </div>

                    </div>
                </div>
            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-8 mt-8">

                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#" data-modal-target="static-modal" data-modal-toggle="static-modal">
                        <img class="rounded-t-lg" src="{{ asset('sui2.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#" data-modal-target="static-modal" data-modal-toggle="static-modal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </div>

                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#" data-modal-target="static-modal" data-modal-toggle="static-modal">
                        <img class="rounded-t-lg" src="{{ asset('sui2.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#" data-modal-target="static-modal" data-modal-toggle="static-modal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </div>

                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#" data-modal-target="static-modal" data-modal-toggle="static-modal">
                        <img class="rounded-t-lg" src="{{ asset('sui2.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#" data-modal-target="static-modal" data-modal-toggle="static-modal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </div>

                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#" data-modal-target="static-modal" data-modal-toggle="static-modal">
                        <img class="rounded-t-lg" src="{{ asset('sui2.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#" data-modal-target="static-modal" data-modal-toggle="static-modal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </div>
            </div>

        </main>
    </div>


</x-layout>
