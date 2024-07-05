<div>
    <div  id="dropdown{{ $message->id }}" wire:click.prevent="deleteMessage" class="z-20 hidden divide-y divide-gray-100 rounded-lg shadow w-40 @if ($message->from_user_id == auth()->id()) bg-blue-400 @else bg-gray-400 @endif">
        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownMenuIconButton">
           <li>
              <a href="#"  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
           </li>
        </ul>
    </div>                                   
</div>