<div >
    <section>
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-blue-700 relative shadow-md sm:rounded-lg overflow-hidden">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-white">
                        <thead
                            class="text-xs text-white uppercase bg-blue-400">
                            <tr>
                                <th scope="col" class="px-4 py-4">Picture</th>
                                <th scope="col" class="px-4 py-4">Community Name</th>
                                <th scope="col" class="px-4 py-3">Members</th>
                                <th scope="col" class="px-4 py-3 flex justify-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($community as $commun)
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">
                                    <img class="rounded-t-lg" src="{{ asset('storage/' .$commun->img) }}" alt="" style="width: 50px; height: 50px;" />
                                </td>
                                <td class="px-4 py-3">
                                    {{ $commun->name }}
                                </td>
                                <td class="px-4 py-3">
                                    {{ $commun->members->count() }}
                                </td>
                                <td class="px-4 py-3 flex items-center justify-end">
                                    <button id="{{ $commun->id }}-button"
                                        data-dropdown-toggle="commun{{ $commun->id }}-dropdown"
                                        class="inline-flex items-center text-sm font-medium hover:bg-blue-400 p-1.5 text-center hover:text-gray-800 rounded-lg focus:outline-none"
                                        type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                    <div id="commun{{ $commun->id }}-dropdown"
                                        class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
                                        <ul class="py-1 text-sm bg-blue-500"
                                            aria-labelledby="{{ $commun->id }}-button">
                                            <li>
                                                <button type="button" data-modal-target="update{{ $commun->id }}Modal"
                                                    data-modal-toggle="update{{ $commun->id }}Modal"
                                                    class="flex w-full items-center py-2 px-4 hover:bg-blue-400 hover:text-gray-800">
                                                    <svg class="w-4 h-4 mr-2"
                                                        xmlns="http://www.w3.org/2000f/svg" viewbox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                    </svg>
                                                    Edit
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" data-modal-target="detail-modal-{{ $commun->id }}" data-modal-toggle="detail-modal-{{ $commun->id }}"
                                                    class="flex w-full items-center py-2 px-4 hover:bg-blue-400 hover:text-gray-800">
                                                    <svg class="w-4 h-4 mr-2"
                                                        xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" />
                                                    </svg>
                                                    Preview
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" data-modal-target="delete{{ $commun->id }}Modal"
                                                    data-modal-toggle="delete{{ $commun->id }}Modal"
                                                    class="flex w-full items-center py-2 px-4 hover:bg-blue-400 text-red-400 hover:text-red-600">
                                                    <svg class="w-4 h-4 mr-2" viewbox="0 0 14 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg"
                                                        aria-hidden="true">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            fill="currentColor"
                                                            d="M6.09922 0.300781C5.93212 0.30087 5.76835 0.347476 5.62625 0.435378C5.48414 0.523281 5.36931 0.649009 5.29462 0.798481L4.64302 2.10078H1.59922C1.36052 2.10078 1.13161 2.1956 0.962823 2.36439C0.79404 2.53317 0.699219 2.76209 0.699219 3.00078C0.699219 3.23948 0.79404 3.46839 0.962823 3.63718C1.13161 3.80596 1.36052 3.90078 1.59922 3.90078V12.9008C1.59922 13.3782 1.78886 13.836 2.12643 14.1736C2.46399 14.5111 2.92183 14.7008 3.39922 14.7008H10.5992C11.0766 14.7008 11.5344 14.5111 11.872 14.1736C12.2096 13.836 12.3992 13.3782 12.3992 12.9008V3.90078C12.6379 3.90078 12.8668 3.80596 13.0356 3.63718C13.2044 3.46839 13.2992 3.23948 13.2992 3.00078C13.2992 2.76209 13.2044 2.53317 13.0356 2.36439C12.8668 2.1956 12.6379 2.10078 12.3992 2.10078H9.35542L8.70382 0.798481C8.62913 0.649009 8.5143 0.523281 8.37219 0.435378C8.23009 0.347476 8.06631 0.30087 7.89922 0.300781H6.09922ZM4.29922 5.70078C4.29922 5.46209 4.39404 5.23317 4.56282 5.06439C4.73161 4.8956 4.96052 4.80078 5.19922 4.80078C5.43791 4.80078 5.66683 4.8956 5.83561 5.06439C6.0044 5.23317 6.09922 5.46209 6.09922 5.70078V11.1008C6.09922 11.3395 6.0044 11.5684 5.83561 11.7372C5.66683 11.906 5.43791 12.0008 5.19922 12.0008C4.96052 12.0008 4.73161 11.906 4.56282 11.7372C4.39404 11.5684 4.29922 11.3395 4.29922 11.1008V5.70078ZM8.79922 4.80078C8.56052 4.80078 8.33161 4.8956 8.16282 5.06439C7.99404 5.23317 7.89922 5.46209 7.89922 5.70078V11.1008C7.89922 11.3395 7.99404 11.5684 8.16282 11.7372C8.33161 11.906 8.56052 12.0008 8.79922 12.0008C9.03791 12.0008 9.26683 11.906 9.43561 11.7372C9.6044 11.5684 9.69922 11.3395 9.69922 11.1008V5.70078C9.69922 5.46209 9.6044 5.23317 9.43561 5.06439C9.26683 4.8956 9.03791 4.80078 8.79922 4.80078Z" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @include('livewire.community-profile', ['id' => $commun->id])
                            @livewire('update-community', ['id' => $commun->id])
                            @livewire('delete-community', ['id' => $commun->id])
                            @endforeach
                        </tbody>
                    </table>
                </div>
               
            </div>
        </div>
    </section>
    <!-- End block -->
    <!-- Update modal -->
    <!-- Delete modal -->
    
</div>