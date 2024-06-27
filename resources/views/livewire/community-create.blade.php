<form wire:submit.prevent="submit" class="p-4 md:p-5">
    <div class="grid gap-4 mb-4 grid-cols-2">
        <div class="col-span-2">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">
                Community Name
            </label>
            <input type="text" name="name" id="name" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Type community name" required="">
            @error('name')
                <span class="error text-red-500">{{ $message }}</span>
            @enderror

        </div>
        <label class="block mb-2 text-sm font-medium text-gray-900" for="user_avatar">
            Upload Image
        </label>
        <input
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
            aria-describedby="user_avatar_help" id="user_avatar" type="file" wire:model="img">
        @error('img')
            <span class="error text-red-500">{{ $message }}</span>
        @enderror

        <div class="col-span-2 sm:col-span-1">
            <label for="tagline" class="block mb-2 text-sm font-medium text-gray-900">
                Tagline
            </label>
            <input type="text" name="tagline" id="tagline" wire:model="tagline"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Cool stuff" required="">
            @error('tagline')
                <span class="error text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-span-2 sm:col-span-1">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900">
                Category
            </label>


            <button id="categoryButton" data-dropdown-toggle="category"
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Select Category<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg></button>

            <!-- Dropdown menu -->
            <div id="category" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gray-700">
                <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="categoryButton">
                    @foreach ($categoryList as $category)
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="checkbox-item-{{ $category->name }}" type="checkbox"
                                    value="{{ $category->id }}"
                                     wire:model="category"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="checkbox-item-{{ $category->name }}"
                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{ $category->name }}</label>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>

        <div class="col-span-2">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">
                Description
            </label>
            <textarea id="description" rows="1" wire:model="description"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Description"></textarea>
            @error('description')
                <span class="error text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-span-2">
            <label for="guide" class="block mb-2 text-sm font-medium text-gray-900">Rules and
                Guidelines
            </label>
            <textarea id="guide" rows="4" wire:model="guide"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Rules and Guidelines"></textarea>
            @error('guide')
                <span class="error text-red-500">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <button type="submit"
        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                clip-rule="evenodd"></path>
        </svg>
        Start the new journey
    </button>
</form>
