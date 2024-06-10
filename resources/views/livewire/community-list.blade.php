<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-8 mt-8">
    @foreach($community as $commun)
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
        <a wire:navigate href="community/{{ $commun->id }}" data-modal-target="static-modal" data-modal-toggle="static-modal">
            <img class="rounded-t-lg" src="{{ asset('storage/' .$commun->img) }}" alt="" style="width: 100%; height: 165px;" />
        </a>
        <div class="p-5">
            <a href="#" data-modal-target="static-modal" data-modal-toggle="static-modal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                    {{ $commun->name }}
                </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">
                {{ $commun->description }}
            </p>
        </div>
    </div>
    @endforeach
</div>
