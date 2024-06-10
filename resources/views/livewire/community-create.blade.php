
<form wire:submit.prevent="submit" class="p-4 md:p-5" >
    <div class="grid gap-4 mb-4 grid-cols-2">
        <div class="col-span-2">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">
                Community Name
            </label>    
            <input type="text" name="name" id="name" wire:model="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Type community name" required="">
                @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
            
        </div>
            <label  class="block mb-2 text-sm font-medium text-gray-900" for="user_avatar">
                Upload Image
            </label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                aria-describedby="user_avatar_help" id="user_avatar" type="file" wire:model="img">
                @error('img') <span class="error text-red-500">{{ $message }}</span> @enderror

        <div class="col-span-2 sm:col-span-1">
            <label for="tagline" class="block mb-2 text-sm font-medium text-gray-900">
                Tagline
            </label>
            <input type="text" name="tagline" id="tagline" wire:model="tagline"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                placeholder="Cool stuff" required="">
                @error('tagline') <span class="error text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="col-span-2 sm:col-span-1">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900">
                Category
            </label>
            <select id="category" wire:model="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                <option selected="">Select category</option>
                <option value="TV">TV/Monitors</option>
                <option value="PC">PC</option>
                <option value="GA">Gaming/Console</option>
                <option value="PH">Phones</option>
            </select>
            @error('category') <span class="error text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="col-span-2">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">
                Description
            </label>
            <textarea id="description" rows="1" wire:model="description"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Description"></textarea>
            @error('description') <span class="error text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="col-span-2">
            <label for="guide" class="block mb-2 text-sm font-medium text-gray-900">Rules and
                Guidelines
            </label>
            <textarea id="guide" rows="4" wire:model="guide"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Rules and Guidelines"></textarea>
            @error('guide') <span class="error text-red-500">{{ $message }}</span> @enderror
        </div>
    </div>

    <button type="submit" 
        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                clip-rule="evenodd"></path>
        </svg>
            Start the new journey
    </button>
</form>