<div class="relative">
    <!-- Carousel wrapper -->
    <div class="relative w-full h-96 overflow-hidden rounded-lg">
        @foreach ( $recomendation as $recomend )
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <a href="{{ route('community') }}">
                <img src="{{ asset('storage/' . $recomend->img) }}"
                    class="absolute block w-full h-full  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
                </a>
            </div>    
        @endforeach
    </div>
</div>