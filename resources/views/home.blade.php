<x-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
        <div id="community" class="grid grid-cols-12 gap-4 mt-24">
    
            {{-- Sisi kiri --}}
            <div id="kiri" class="col-span-7 mt-24 mb-40 px-5">
    
                <h1 class="mb-10 mt-[-30px] text-4xl text-white">What might pique your interest</h1>
    
                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    @livewire('recomendation')
                    
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-[-25px] left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                            data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                            data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                            <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                            <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
    
    
            </div>
    
            {{-- Sisi kanan --}}
            <div id="kanan" class="col-span-5 mt-32 px-7 ml-8">
    
                <h1 class="mb-8 mt-[-45px] text-4xl text-white text-right mr-10">Popular right now</h1>
    
                @livewire('home-populer')
    
                <a href="{{ route('community') }}">
                <p class="text-right mr-20 underline text-blue-400">See more</p>
                </a>
    
    
            </div>
        </div>
    
</x-layout>