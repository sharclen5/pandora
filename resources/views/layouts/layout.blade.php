<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/event.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body class="h-screen">

    <x-navbar></x-navbar>

    <main class="mt-12 h-screen">{{ $slot }}</main>
    
    @livewireScripts
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="{{ asset('js/welcome.js') }}"></script>  
    <script src="{{ asset('js/profile.js') }}"></script> 
</body>



</html>
