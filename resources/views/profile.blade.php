<x-layout>

    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="w-full flex flex-col gap-5 px-3 md:px-16 lg:px-28 md:flex-row text-white mx-auto">
        <aside class="hidden py-4 md:w-1/3 lg:w-1/4 md:block">
            <div class="sticky flex flex-col gap-2 p-4 text-sm border-r border-indigo-100 top-12 h-screen">

                <h2 class="pl-3 mb-4 text-2xl font-semibold">Profile Settings</h2>

                <a href="#" id="profileLink" onclick="showProfile()"
                    class="flex items-center px-3 py-2.5 font-semibold bg-blue-700 border rounded-full hover:border hover:rounded-full">
                    Public Profile
                </a>
                <a href="#" id="communityLink" onclick="showCommunity()"
                    class="flex items-center px-3 py-2.5 font-semibold hover:border hover:rounded-full">
                    Community
                </a>
                <a href="#" id="securityLink" onclick="showSecurity()"
                    class="flex items-center mb-12 px-3 py-2.5 font-semibold hover:border hover:rounded-full  ">
                    Security
                </a>
                @if (auth()->user()->isAdmin == '1')
                    <h2 class="pl-3 text-2xl font-semibold">Admin Control</h2>

                    <a href="#" id="usersLink" onclick="showUsers()"
                        class="flex items-center px-3 py-2.5 font-semibold hover:border hover:rounded-full">
                        Users
                    </a>
                    <a href="#" id="allcommunityLink" onclick="showallCommunity()"
                    class="flex items-center px-3 py-2.5 font-semibold hover:border hover:rounded-full">
                    All Community
                </a>
                @endif
                

            </div>
        </aside>


        <div id="profile"
            class="highlight-box border-2 bg-blue-500 border-blue-500 rounded-md mt-8 mb-12 px-10 py-6 max-w-3xl w-full mx-auto box">

            <div class="w-full px-6 pb-8 mt-8 sm:max-w-xl sm:rounded-lg">
                <h2 class="pl-6 text-2xl font-bold sm:text-xl">Public Profile</h2>

                <div class="grid max-w-2xl mx-auto mt-8">
                    <div class="flex flex-col items-center space-y-5 sm:flex-row sm:space-y-0">

                        <img class="object-cover w-40 h-40 p-1 rounded-full ring-2 ring-indigo-300"
                            src=" {{ auth()->user()->img == 'default.jpg' ? asset('minisuibg.png') : asset('storage/' . auth()->user()->img) }}"
                            alt="Bordered avatar">

                        <div class="flex flex-col space-y-5 sm:ml-8">
                            <!-- You can open the modal using ID.showModal() method -->
                            <button
                                class="py-3.5 px-7 text-base font-medium text-indigo-100 focus:outline-none bg-[#202142] rounded-lg border border-indigo-200 hover:bg-indigo-900 focus:z-10 focus:ring-4 focus:ring-indigo-200 "
                                onclick="my_modal_3.showModal()">
                                Change Pictures
                            </button>
                            <dialog id="my_modal_3" class="modal">
                                <div class="modal-box">
                                    <form method="dialog">
                                        <button
                                            class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2 text-black ">✕</button>
                                    </form>
                                    <h3 class="font-bold text-black">Add your image!!!</h3>
                                    @livewire('add-img')
                                </div>
                            </dialog>
                            @livewire('delete-img')
                        </div>
                    </div>

                    <div class="items-center mt-8 sm:mt-14 text-[#202142]">

                        <div class="bg-transparent">
                            <div class="max-w-xl">
                                <livewire:profile.update-profile-information-form />
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div id="community" class="hidden justify-center items-center w-full h-full mt-8">

            <!-- Start block -->
            @livewire('profile-community')
        </div>

        <div id="security" class="hidden">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <livewire:profile.update-password-form />
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <livewire:profile.delete-user-form />
                    </div>
                </div>
            </div>
        </div>
        @livewire('manage-users')

        <div id="allcommunity" class="hidden justify-center items-center w-full h-full mt-8">

            <!-- Start block -->
            @livewire('profile-allcommunity')
        </div>



</x-layout>
