<x-layout>


    <x-layout>
        <div id="main">
    
            <div id="community" class="grid grid-cols-12 gap-4">
        
                {{-- Sisi kiri --}}
                <div id="kiri" class="col-span-7 mt-24 px-5">
                    @foreach ($users as $user)
                    <a href="{{ route('chat', $user) }}"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 mb-5">
                    <img class="object-cover w-full rounded-t-lg md:h-[135px] md:w-auto md:rounded-none md:rounded-s-lg"
                      src="
                        @if ($user->img == 'default.jpg')
                          https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGZhY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60
                        @else
                          {{ asset('storage/' . auth()->user()->img) }}
                        @endif
                      " alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $user->name }}</h5>
                    </div>
                    </a>
                    @endforeach
                </div>
        
                {{-- Sisi kanan --}}
                <div id="kanan" class="col-span-5 mt-24 px-7 ml-8 mb-2  bg-white border border-gray-200"> 
                  Begin your chat with someone!!
                </div>
        
        </div>
        
    </x-layout>


</x-layout>
