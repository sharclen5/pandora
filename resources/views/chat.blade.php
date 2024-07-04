<x-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
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

            <!-- Dynamic User List  -->
            <div class="flex flex-col w-full overflow-y-auto">
                @foreach ($communities as $community)
                    <a href="{{ route('groupchat', $community) }}"
                        class="flex flex-row py-4 px-2 justify-center items-center border-b-2 text-white hover:text-black border-gray-800 hover:bg-gray-100">
                        <div class="w-1/5 mr-3">
                            <img class="object-cover h-12 w-12 rounded-full"
                                src="{{ $community->img == 'default.jpg' ? asset('minisuibg.png') : asset('storage/' . $community->img) }}"
                                alt="">
                        </div>
                        <div class="w-full">
                            <div class="text-lg font-semibold">{{ $community->name }}</div>
                            <span class="text-gray-800"><span class="text-gray-800">
                                @if (optional($community->latestGroupMessage()->first())->message)
                                    @php
                                    $latestGroupMessageWithUser = $community->latestGroupMessage()->with('fromUser')->first();
                                    @endphp
                                
                                {{ optional($latestGroupMessageWithUser->fromUser)->name }}: {{ optional($community->latestGroupMessage()->first())->message }}    
                                @else
                                    No message available.
                                @endif
                                
                            </span></span>
                        </div>
                    </a>
                @endforeach
                @foreach ($users as $user)
                    <a href="{{ route('chat', $user) }}"
                        class="flex flex-row py-4 px-2 justify-center items-center border-b-2 text-white hover:text-black border-gray-800 hover:bg-gray-100">
                        <div class="w-1/5 mr-3">
                            <img class="object-cover h-12 w-12 rounded-full"
                                src="{{ $user->img == 'default.jpg' ? asset('minisuibg.png') : asset('storage/' . $user->img) }}"
                                alt="">
                        </div>
                        <div class="w-full">
                            <div class="text-lg font-semibold">{{ $user->name }}</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>


        <!-- Message Section -->
        <div class="w-4/5 flex justify-center items-center text-center bg-gray-700"> 
          Begin your chat with someone!!
        </div>
    </div>

</x-layout>
