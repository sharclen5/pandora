<div>
    <!-- Chatbox -->
    <div class="chatbox">
        <div class="modal-dialog-scrollable">
            <div class="modal-content">
                <div class="msg-head">
                    <div class="row">
                        <div class="col-8">
                            <div class="d-flex align-items-center">
                                <span class="chat-icon"><img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/arroleftt.svg" alt="image title"></span>
                                <div class="flex-shrink-0">
                                    <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>{{ $receiver->name }}</h3>
                                    <p>front end developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <ul class="moreoption">
                                <li class="navbar nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Chat Header -->
                <div class="msg-head">
                    <!-- Chat header content -->
                </div>

                <div class="modal-body">
                    <div class="msg-body" 
                    id="pollingid" 
                    wire:poll>
                        <ul>
                            @foreach ($messages as $message)
                                @if ($message['sender'] == auth()->user()->name)
                                    <li class="repaly">
                                        <p>{{ $message['message'] }}</p>
                                        <span class="time">10:20 am</span>
                                    </li>
                                @else
                                    <li class="sender">
                                        <p> {{ $message['message'] }} </p>
                                        <span class="time">10:06 am</span>
                                    </li>
                                @endif
                                
                                @if ($message->from_user_id == auth()->id())
                                <button onclick="showDrop({{ $message->id }})"  id="dropdownMenuIconButton{{ $message->id }}"  data-dropdown-toggle="dropdown{{ $message->id }}" data-dropdown-placement="bottom-start" class="inline-flex self-center items-center p-2 text-sm font-medium text-center bg-transparent rounded-lg hover:bg-gray-600" type="button">
                                    <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                    <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                    </svg>
                                </button>
                                @livewire('delete-message', ['message' => $message, 'commun' => $commun])
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="send-box">
                    <form wire:submit.prevent="sendMesage()">
                        <input type="text" wire:model="message" class="form-control" aria-label="message…" placeholder="Write message…">

                        <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send</button>
                    </form>

                    <div class="send-btns">
                        <div class="attach">
                            <div class="button-wrapper">
                                <span class="label">
                                    <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/upload.svg" alt="image title"> attached file 
                                </span><input type="file" name="upload" id="upload" class="upload-box" placeholder="Upload File" aria-label="Upload File">
                            </div>

                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Select template</option>
                                <option>Template 1</option>
                                <option>Template 2</option>
                            </select>

                            <div class="add-apoint">
                                <a href="#" data-toggle="modal" data-target="#exampleModal4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none"><path d="M8 16C3.58862 16 0 12.4114 0 8C0 3.58862 3.58862 0 8 0C12.4114 0 16 3.58862 16 8C16 12.4114 12.4114 16 8 16ZM8 1C4.14001 1 1 4.14001 1 8C1 11.86 4.14001 15 8 15C11.86 15 15 11.86 15 8C15 4.14001 11.86 1 8 1Z" fill="#7D7D7D"/><path d="M11.5 8.5H4.5C4.224 8.5 4 8.276 4 8C4 7.724 4.224 7.5 4.5 7.5H11.5C11.776 7.5 12 7.724 12 8C12 8.276 11.776 8.5 11.5 8.5Z" fill="#7D7D7D"/><path d="M8 12C7.724 12 7.5 11.776 7.5 11.5V4.5C7.5 4.224 7.724 4 8 4C8.276 4 8.5 4.224 8.5 4.5V11.5C8.5 11.776 8.276 12 8 12Z" fill="#7D7D7D"/></svg> Appoinment</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Chatbox -->
</div>

<script>
</script>
