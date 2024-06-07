<x-layout>

    <div id="welcome" class="mt-36 flex inset-x-0 flex-col items-center justify-center px-4 sm:px-6 lg:px-8">

        <h1
            class="mt-24 mb-4 text-4xl sm:text-5xl md:text-6xl font-semibold bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-500 dark:from-gray-900 dark:to-gray-400">
            Discover Your Community</h1>
        <h1
            class="mb-8 text-4xl sm:text-5xl md:text-6xl font-semibold bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-500 dark:from-gray-900 dark:to-gray-400">
            Connect Like Never Before</h1>

        <p class="mt-4 mb-2 text-lg sm:text-xl md:text-2xl text-white">Explore vibrant <span
                class="text-blue-400">communities</span> and join conversations that matter to you.</p>
        <p class="text-lg sm:text-xl md:text-2xl text-white">Experience real-time interactions, engaging events, and
            seamless <span class="text-blue-400">connections</span> – all in one place.</p>

        <button type="button"
            class="mt-20 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm sm:text-base md:text-xl px-4 sm:px-6 md:px-10 py-2 sm:py-2.5 md:py-3.5 text-center me-2 mb-2"
            onclick="window.location='{{ route('login') }}'">
            Get Started</button>
        <p class="mb-48"></p>

    </div>

    <div id="target" class="mt-20 flex inset-x-0 flex-col items-center justify-center px-4 sm:px-6 lg:px-8">

        <img src="{{ asset('target.png') }}" alt="Target" class="w-1/12">

        <h1 class="mt-4 mb-4 text-2xl sm:text-3xl md:text-4xl font-semibold bg-clip-text text-white">Our Mission</h1>

        <p class="mt-4 mb-2 text-sm sm:text-base md:text-xl text-white">to foster meaningful connections and empower
            communities by providing a dynamic platform where</p>
        <p class="text-sm sm:text-base md:text-xl text-white">individuals can discover, engage, and thrive in shared
            interests, passions, and experiences.</p>

        <div class="flex justify-center space-x-8 mt-24">

            <div class="bg-transparent hover:bg-blue-500 border-4 border-white rounded-lg flex items-center justify-center h-44 w-72">
                <div class="flex flex-col items-center">
                    <svg class="w-16 h-16 text-white aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z"
                            clip-rule="evenodd" />
                    </svg>
                    <p class="mt-2 text-white">Discover Vibrant Communities</p>
                </div>
            </div>

            <div class="bg-transparent hover:bg-blue-500 border-4 border-white rounded-lg flex items-center justify-center h-44 w-72">
                <div class="flex flex-col items-center">
                    <svg class="w-16 h-16 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M3.559 4.544c.355-.35.834-.544 1.33-.544H19.11c.496 0 .975.194 1.33.544.356.35.559.829.559 1.331v9.25c0 .502-.203.981-.559 1.331-.355.35-.834.544-1.33.544H15.5l-2.7 3.6a1 1 0 0 1-1.6 0L8.5 17H4.889c-.496 0-.975-.194-1.33-.544A1.868 1.868 0 0 1 3 15.125v-9.25c0-.502.203-.981.559-1.331ZM7.556 7.5a1 1 0 1 0 0 2h8a1 1 0 0 0 0-2h-8Zm0 3.5a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2H7.556Z"
                            clip-rule="evenodd" />
                    </svg>

                    <p class="mt-2 text-white">Real-Time Interaction</p>
                </div>
            </div>

            <div class="bg-transparent hover:bg-blue-500 border-4 border-white rounded-lg flex items-center justify-center h-44 w-72">
                <div class="flex flex-col items-center">
                    <svg class="w-16 h-16 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z"
                            clip-rule="evenodd" />
                    </svg>


                    <p class="mt-2 text-white">Personalized Experience</p>
                </div>
            </div>

        </div>

        <p class="mb-24"></p>

    </div>

    <div id="faq" class="mt-20 flex inset-x-0 flex-col items-center justify-center px-4 sm:px-6 lg:px-8">
        <h1 class="mt-4 mb-20 text-3xl sm:text-4xl md:text-5xl font-semibold bg-clip-text text-white">FAQ</h1>
        <div id="target" class="flex inset-x-0 flex-col items-center justify-center px-4 sm:px-6 lg:px-8">

            <button id="dropdownbutton1" class="w-2/3 text-white bg-blue-500 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center flex justify-between items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                What is Pandora ?
                <svg id="arrow1" class="w-5 h-5 ms-3 ml-auto transform transition-transform duration-500" id="arrow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <div id="dropdownText1" class="mt-2 w-2/3 text-white text-xl text-justify opacity-0 transition-opacity duration-500 invisible">
                Pandora is a web-based community information system and instant messaging service that helps users discover and join communities, interact in real-time, and stay updated on events and activities. Pandora aims to create a vibrant online ecosystem where users can connect with like-minded individuals, explore new interests, and actively engage in meaningful interactions within their communities.
            </div>

            <button id="dropdownbutton2" class="w-2/3 text-white bg-blue-500 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center flex justify-between items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                How do I join a community on Pandora ?
                <svg id="arrow2" class="w-5 h-5 ms-3 ml-auto transform transition-transform duration-500" id="arrow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <div id="dropdownText2" class="mt-2 w-2/3 text-white text-xl text-justify opacity-0 transition-opacity duration-500 invisible">
                Pandora is a web-based community information system and instant messaging service that helps users discover and join communities, interact in real-time, and stay updated on events and activities. Pandora aims to create a vibrant online ecosystem where users can connect with like-minded individuals, explore new interests, and actively engage in meaningful interactions within their communities.
            </div>

            <button id="dropdownbutton3" class="w-2/3 text-white bg-blue-500 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center flex justify-between items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Is there a cost to use Pandora ?
                <svg id="arrow3" class="w-5 h-5 ms-3 ml-auto transform transition-transform duration-500" id="arrow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <div id="dropdownText3" class="mt-2 w-2/3 text-white text-xl text-justify opacity-0 transition-opacity duration-500 invisible">
                Pandora is a web-based community information system and instant messaging service that helps users discover and join communities, interact in real-time, and stay updated on events and activities. Pandora aims to create a vibrant online ecosystem where users can connect with like-minded individuals, explore new interests, and actively engage in meaningful interactions within their communities.
            </div>

            <button id="dropdownbutton4" class="w-2/3 text-white bg-blue-500 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center flex justify-between items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                How can i create my own community on Pandora ?
                <svg id="arrow4" class="w-5 h-5 ms-3 ml-auto transform transition-transform duration-500" id="arrow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <div id="dropdownText4" class="mt-2 w-2/3 text-white text-xl text-justify opacity-0 transition-opacity duration-500 invisible">
                Pandora is a web-based community information system and instant messaging service that helps users discover and join communities, interact in real-time, and stay updated on events and activities. Pandora aims to create a vibrant online ecosystem where users can connect with like-minded individuals, explore new interests, and actively engage in meaningful interactions within their communities.
            </div>

            <button id="dropdownbutton5" class="w-2/3 text-white bg-blue-500 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center flex justify-between items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                What features does Pandora offer for communication ?
                <svg id="arrow5" class="w-5 h-5 ms-3 ml-auto transform transition-transform duration-500" id="arrow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <div id="dropdownText5" class="mt-2 w-2/3 text-white text-xl text-justify opacity-0 transition-opacity duration-500 invisible">
                Pandora is a web-based community information system and instant messaging service that helps users discover and join communities, interact in real-time, and stay updated on events and activities. Pandora aims to create a vibrant online ecosystem where users can connect with like-minded individuals, explore new interests, and actively engage in meaningful interactions within their communities.
            </div>
            

        </div>


        <p class="mb-48"></p>

    </div>

    <div id="about" class="mt-20 flex inset-x-0 flex-col items-center justify-center px-4 sm:px-6 lg:px-8">

        <h1 class="mt-4 mb-28 text-3xl sm:text-4xl md:text-5xl font-semibold bg-clip-text text-white">About Pandora</h1>

        <div class="flex">
            <div class="flex-1">
                
                <div class="text-white justify-center text-lg text-justify pl-36">
                Pandora is a web-based community information system and instant messaging service that helps users discover and join communities, interact in real-time, and stay updated on events and activities. Pandora aims to create a vibrant online ecosystem where users can connect with like-minded individuals, explore new interests, and actively engage in meaningful interactions within their communities.
                </div>

                <div class="text-white justify-center text-3xl text-justify pl-36 mt-12">
                    Contact Us
                </div>

                <div class="flex items-center">
                <svg class="ml-32 w-14 h-14 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z"/>
                </svg>
                <p class="ml-6 text-white text-lg">+62858123456789</p>
                </div>

                <div class="flex items-center">
                <svg class="ml-32 w-14 h-14 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z"/>
                    <path d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z"/>
                </svg>
                <p class="ml-6 text-white text-lg">pandora@gmail.com</p>
                </div>
                  

            </div>

            <div class="flex-1">
                <img src="{{ asset('sui.jpg') }}" alt="" class="w-3/5 mt-2 ml-28">
            </div>

        </div>

        <p class="mb-24"></p>

    </div>

    <footer class="border-t mt-auto p-4 text-center">
        <p class="text-white">Copyright &copy; 2024 by Pandora Team</p>
    </footer>

</x-layout>
