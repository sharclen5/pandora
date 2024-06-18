<div>
    <form wire:submit.prevent="saveImage" class="p-4 md:p-5">
        <label  class="block mb-2 text-sm font-medium text-gray-900" for="user_avatar">
            Upload Image
        </label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
            aria-describedby="user_avatar_help" id="user_avatar" type="file" wire:model="img">
            @error('img') <span class="error text-red-500">{{ $message }}</span> @enderror
        <button type="submit" 
            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-5">
                Save
        </button>
    </form>
</div>
