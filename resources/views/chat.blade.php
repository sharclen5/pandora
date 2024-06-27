<x-layout>
    <!-- Chatting -->
    <div class="flex flex-row justify-between bg-white h-screen">

        <!-- Chat List -->
        <div class="flex flex-col w-1/4 border-r-2 border-gray-800">
            <!-- Search Component -->
            <div class="px-2">
                <h1 class="text-gray-800 text-2xl mt-6 ml-2">Messages</h1>
            </div>
            <div class="border-b-2 border-gray-800 py-4 px-2">
              <input type="text" placeholder="search chatting" class="py-2 px-2 border-2 border-gray-800 rounded-2xl w-full">
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
                    <a href="{{ route('chat', $user) }}" class="flex flex-row py-4 px-2 justify-center items-center border-b-2 border-gray-800 hover:bg-gray-100">
                        <div class="w-1/5">
                            <img class="object-cover h-12 w-12 rounded-full" src="{{ $user->img == 'default.jpg' ? 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGZhY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60' : asset('storage/' . $user->img) }}" alt="">
                        </div>
                        <div class="w-full">
                            <div class="text-lg font-semibold">{{ $user->name }}</div>
                            <span class="text-gray-500">Last message preview...</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Message Section -->
        <div class="w-full flex justify-center items-center text-center"> 
          Begin your chat with someone!!
        </div>
    </div>

</x-layout>
