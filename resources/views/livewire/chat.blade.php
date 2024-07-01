<div id="main">

    <!-- Chatting -->
    <div class="flex flex-row justify-between h-screen">

        <!-- Chat List -->
        <div class="flex flex-col w-1/5 border-r-2 border-gray-800 bg-gray-500 opacity-90">
            <!-- Search Component -->
            <div class="px-2">
                <h1 class="text-gray-800 text-2xl mt-6 ml-2">Messages</h1>
            </div>
            <div class="border-b-2 border-gray-800 py-4 px-2">
                <input type="text" placeholder="search chatting"
                    class="py-2 px-2 border-2 border-gray-200 bg-gray-800 rounded-2xl w-full">
            </div>

            <!-- Dynamic User List from Chat.pdf -->
            <div class="flex flex-col w-full overflow-y-auto">
                @foreach ($communities as $community)
                    <a href="{{ route('groupchat', $community) }}"
                        class="flex flex-row py-4 px-2 justify-center items-center border-b-2 text-white hover:text-black border-gray-800 hover:bg-gray-100">
                        <div class="w-1/5">
                            <img class="object-cover h-12 w-12 rounded-full"
                                src="{{ $community->img == 'default.jpg' ? asset('minisuibg.png') : asset('storage/' . $community->img) }}"
                                alt="">
                        </div>
                        <div class="w-full">
                            <div class="text-lg font-semibold">{{ $community->name }}</div>
                            <span class="text-gray-800">Last message preview...</span>
                        </div>
                    </a>
                @endforeach
                @foreach ($users as $user)
                    <a href="{{ route('chat', $user) }}"
                        class="flex flex-row py-4 px-2 justify-center items-center border-b-2 text-white hover:text-black border-gray-800 hover:bg-gray-100">
                        <div class="w-1/5">
                            <img class="object-cover h-12 w-12 rounded-full"
                                src="{{ $user->img == 'default.jpg' ? asset('minisuibg.png') : asset('storage/' . $user->img) }}"
                                alt="">
                        </div>
                        <div class="w-full">
                            <div class="text-lg font-semibold">{{ $user->name }}</div>
                            <span class="text-gray-800">Last message preview...</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Chat Container -->
        <div id="chatContainer" class="w-4/5 flex flex-col">
            <!-- Chat Header -->
            <div id="chatHeader" class="hover:cursor-pointer flex bg-gray-600 border-b-2 border-gray-800 px-4 py-3 
                                        fixed w-full z-10" onclick="showRightSide()">
                <img class="rounded-full w-14 h-14 mt-2"
                src="{{ $to_user->img == 'default.jpg' ? asset('minisuibg.png') : asset('storage/' . $to_user->img) }}"
                alt="">                      
                <h2 class="text-gray-800 text-lg font-semibold ml-3 mt-5">{{ $to_user->name }}</h2>
            </div>

            <!-- Message Section -->
            <div id="chatBox" class="w-full mt-24 px-3 flex-1 overflow-y-hidden transition-all bg-gray-800">
                <div wire:poll.500ms>         
                    @foreach ($messages as $message)
                        <div class="chat @if ($message->from_user_id == auth()->id()) chat-end @else chat-start @endif">
                            <div class="chat-image avatar">
                                <div class="w-10 h-10 rounded-full mb-8">
                                    <img alt="Tailwind CSS chat bubble component"
                                        src="@if ($message->from_user_id == auth()->id()) @if (auth()->user()->img == 'default.jpg') {{ asset('minisuibg.png') }} @else {{ asset('storage/' . auth()->user()->img) }} @endif
                                            @else
                                            @if ($to_user->img == 'default.jpg') {{ asset('minisuibg.png') }} @else {{ asset('storage/' . auth()->user()->img) }} @endif @endif" />
                                </div>
                            </div>
                            <div class="chat-header">
                                {{ $message->fromUser->name }}
                                <time class="text-xs opacity-50">{{ $message->created_at->diffForHumans() }}</time>
                            </div>
                            
                            <div class="flex flex-col leading-1.5 p-4 border-gray-200 @if ($message->from_user_id == auth()->id()) rounded-xl rounded-tr-none bg-blue-500 @else rounded-e-xl rounded-es-xl bg-gray-500 @endif">
                                <p class="text-sm font-normal text-white">{{ $message->message }}</p>
                            </div>

                            <div class="chat-footer opacity-50 @if ($message->from_user_id == auth()->id()) @else mt-3 @endif">
                                Delivered
                            </div>

                            <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdown{{ $message->message }}" data-dropdown-placement="bottom-start" class="inline-flex self-center items-center p-2 text-sm font-medium text-center bg-transparent rounded-lg hover:bg-gray-600" type="button">
                                <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                   <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                </svg>
                            </button>
                            <div id="dropdown{{ $message->message }}" class="z-20 hidden divide-y divide-gray-100 rounded-lg shadow w-40 @if ($message->from_user_id == auth()->id()) bg-blue-400 @else bg-gray-400 @endif">
                                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownMenuIconButton">
                                   <li>
                                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Copy</a>
                                   </li>
                                   <li>
                                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                                   </li>
                                </ul>
                            </div>
                           
                        </div>
                    @endforeach
                    
                </div>

            </div>
            
            <!-- Chat Input -->
            <div id="chatInput" class="bg-gray-600 form-control p-4 border-t-2 border-gray-800 fixed bottom-0 w-4/5 z-10">
                <form action="" wire:submit.prevent="sendMessage" class="flex">


                    <label for="fileInput" class="mr-4 mt-2 hover:cursor-pointer">
                        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 12L12 12M12 12L9 12M12 12L12 9M12 12L12 15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </label>
                    <input id="fileInput" type="file" class="hidden">

                    <textarea class="textarea textarea-bordered w-full mr-2 h-8" wire:model="message" placeholder="send your message"></textarea>
                    
                    <button type="submit">
                    <svg fill="#000000" class="h-8 w-8" version="1.1" id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 495.003 495.003" xml:space="preserve">
                        <g id="XMLID_51_">
                            <path id="XMLID_53_" d="M164.711,456.687c0,2.966,1.647,5.686,4.266,7.072c2.617,1.385,5.799,1.207,8.245-0.468l55.09-37.616
                            l-67.6-32.22V456.687z" />
                            <path id="XMLID_52_" d="M492.431,32.443c-1.513-1.395-3.466-2.125-5.44-2.125c-1.19,0-2.377,0.264-3.5,0.816L7.905,264.422
                            c-4.861,2.389-7.937,7.353-7.904,12.783c0.033,5.423,3.161,10.353,8.057,12.689l125.342,59.724l250.62-205.99L164.455,364.414
                            l156.145,74.4c1.918,0.919,4.012,1.376,6.084,1.376c1.768,0,3.519-0.322,5.186-0.977c3.637-1.438,6.527-4.318,7.97-7.956
                            L494.436,41.257C495.66,38.188,494.862,34.679,492.431,32.443z" />
                        </g>
                    </svg>
                    </button>
                </form>
            </div>

        </div>

        <!-- Right Item -->
        <div id="rightItem" class="hidden flex-col w-1/5 border-l-2 border-gray-800">
            <img class="object-cover rounded-full w-52 h-52 mx-auto mt-8"
                src="{{ $user->img == 'default.jpg' ? asset('minisuibg.png') : asset('storage/' . $user->img) }}"
                alt="">

            <div class="text-center mt-4">
                <h1 class="text-2xl font-semibold">{{ $user->name }}</h1>
        </div>

    </div>
</div>

<script>
    function showRightSide() {
        const chatContainer = document.getElementById('chatContainer');
        const chatHeader = document.getElementById('chatHeader');
        const chatInput = document.getElementById('chatInput');
        const rightItem = document.getElementById('rightItem');
    
        if (rightItem.classList.contains('hidden')) {
            // Show the right-side chat list and adjust the chat container width
            rightItem.classList.remove('hidden');
            rightItem.classList.add('flex');
            chatHeader.classList.remove('w-full');
            chatHeader.classList.add('w-3/5');
            chatContainer.classList.remove('w-4/5');
            chatContainer.classList.add('w-3/5');
            chatInput.classList.remove('w-4/5');
            chatInput.classList.add('w-3/5');
        } else {
            // Hide the right-side chat list and adjust the chat container width
            rightItem.classList.remove('flex');
            rightItem.classList.add('hidden');
            chatHeader.classList.remove('w-3/5');
            chatHeader.classList.add('w-full');
            chatContainer.classList.remove('w-3/5');
            chatContainer.classList.add('w-4/5');
            chatInput.classList.remove('w-3/5');
            chatInput.classList.add('w-4/5');
        }
    }
</script>
