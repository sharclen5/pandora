<div>
    @foreach ($recomendation as $commun)
        <a href="#"data-modal-target="detail-modal-{{ $commun->id }}" data-modal-toggle="detail-modal-{{ $commun->id }}"
            class="flex flex-col items-center bg-gradient-to-tr from-blue-400 to-blue-700 border hover:bg-blue-400 border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl mb-5">
            <img class="object-cover w-full rounded-t-lg md:h-[135px] md:w-auto md:rounded-none md:rounded-s-lg"
                src="{{ asset('storage/' . $commun->img) }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">{{ $commun->name }}</h5>
                <p class="mb-3 font-normal text-gray-300">{{ $commun->tagline }}</p>
            </div>
        </a>
        @include('livewire.community-profile', ['id' => $commun->id])    
    @endforeach
</div>
