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
                        src="{{ asset('suisei2.jpg') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $user->name }}</h5>
                    </div>
                    </a>
                    @endforeach
                </div>
        
                {{-- Sisi kanan --}}
                <div id="kanan" class="col-span-5 mt-24 px-7 ml-8 mb-2  bg-white border border-gray-200">
                    <div class="chat chat-start">
                        <div class="chat-image avatar">
                          <div class="w-10 rounded-full">
                            <img alt="Tailwind CSS chat bubble component" src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                          </div>
                        </div>
                        <div class="chat-header">
                          Obi-Wan Kenobi
                          <time class="text-xs opacity-50">12:45</time>
                        </div>
                        <div class="chat-bubble">You were the Chosen One!</div>
                        <div class="chat-footer opacity-50">
                          Delivered
                        </div>
                      </div>
                      <div class="chat chat-end">
                        <div class="chat-image avatar">
                          <div class="w-10 rounded-full">
                            <img alt="Tailwind CSS chat bubble component" src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                          </div>
                        </div>
                        <div class="chat-header">
                          Anakin
                          <time class="text-xs opacity-50">12:46</time>
                        </div>
                        <div class="chat-bubble">I hate you!</div>
                        <div class="chat-footer opacity-50">
                          Seen at 12:46
                        </div>
                      </div>
        
                </div>
        
        </div>
        
    </x-layout>


</x-layout>
