<div>
    <span class="text-gray-800">
        @switch($userCommunity)
            @case('user')
                @if ($lastMessage)
                    {{ $lastMessage->message }}
                @else
                    No message available.
                @endif
                @break

            @default
                @if ($lastMessage)
                    {{ $lastMessage->fromUser->name }}: {{ $lastMessage->message }}
                @else
                    No message available.
                @endif
        @endswitch
    </span>
</div>
