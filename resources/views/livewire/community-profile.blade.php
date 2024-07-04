<div id="detail-modal-{{ $commun->id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-7xl max-h-full">
        <div class="relative text-white bg-white rounded-lg shadow dark:bg-gray-700 flex">

            <!-- Left part -->
            <div class="w-1/4 bg-blue-400 dark:bg-gray-500">
                <img src="{{ asset('storage/' . $commun->img) }}" alt="Image Description"
                    class="w-full h-auto object-cover mb-4">
                <h1 class="text-4xl mb-3 text-center">{{ $commun->name }}</h1>
                <hr class="w-4/5 mx-auto mb-2">

                <div class="text-lg mb-1 ml-16">

                    <div class="flex items-center">
                        <svg class="mr-2 w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                clip-rule="evenodd" />
                        </svg> {{ $commun->members->count() }}
                    </div>

                    <div class="flex items-center">
                        <svg class="mr-2 w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H4Zm0 8v6h7v-6H4Zm16 6h-7v-6h7v6Z"
                                clip-rule="evenodd" />
                        </svg> 
                        @if ($commun->category->count() == 1)
                        {{ $commun->category->first()->name }}
                    @elseif($commun->category->count() > 1)
                        @foreach ($commun->category as $category)
                            {{ $category->name }}
                        @endforeach
                    @endif
                    </div>

                    <div class="flex items-center">
                        <svg class="mr-2 w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
                        </svg> {{ $commun->created_at->format('Y-m-d') }}
                    </div>

                </div>
                
                @php
                    $memberIds = $commun->members->pluck('id');
                @endphp
                
                @if ($memberIds->contains(auth()->user()->id))
                    <div class="flex justify-center items-center mt-48 mb-4">
                        <a href="{{ route('groupchat', $commun) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            chat
                        </a>
                    </div>
                @else
                    @livewire('join-community', ['communityId' => $commun->id])
                @endif            
            
            </div>


            <!-- Right part -->
            <div class="w-3/4 bg-blue-600">

                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="detail-modal-{{ $commun->id }}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-2">

                    <h1 class="text-3xl ">Tagline</h1>
                    <p class="text-base leading-relaxed ">
                        “{{ $commun->tagline }}”
                    </p>

                    <h1 class="text-3xl mt-8 ">Description</h1>
                    <p class="text-base leading-relaxed ">
                        {{ $commun->description }}
                    </p>

                    <h1 class="text-3xl ">Rules and Guidelines</h1>
                    <p class="text-base leading-relaxed ">
                        {{ $commun->guide }}
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
