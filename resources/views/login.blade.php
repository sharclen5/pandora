@vite('resources/css/app.css')
<link href="{{ asset('css/register.css') }}" rel="stylesheet">

{{-- Container Utama --}}
<div id="main" class="flex h-screen items-center justify-center">

    <div class="w-full lg:w-1/2 text-white flex items-center justify-center">

     <div class="highlight-box border-2 border-blue-500 rounded-md px-10 py-6 max-w-lg w-full mx-auto box">
      <div class="max-w-md w-full p-6">
        <img src="{{ asset('logo.png') }}" alt="" class="w-24 h-24 mx-auto mb-2">
        <h1 class="text-3xl font-semibold mb-3 text-center">Join Now</h1>
        <h1 class="text-sm font-semibold mb-3 text-center">Explore and grasp the possibility right now </h1>
        <div class="mt-8 flex flex-col lg:flex-row items-center justify-between">
        </div>


        <form action="#" method="POST" class="space-y-8">
          <div>
            <label for="username" class="block text-sm font-medium">Username</label>
            <input type="text" id="username" name="username" class="mt-1 p-2 w-full border-blue-800 rounded-md bg-blue-900 focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
          </div>
          <div>
            <label for="password" class="block text-sm font-medium">Password</label>
            <input type="password" id="password" name="password" class="mt-1 p-2 w-full border-blue-800 rounded-md bg-blue-900 focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
          </div>
          <div id="button">
            <button type="submit" class="w-full text-white p-2 rounded-md hover:bg-gray-800 -none  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-colors duration-300">Login</button>
          </div>
        </form>
        <div class="mt-4 text-sm text-center">
          <p class="text-lg">Didn't have an account yet ? <a href="{{ route('register') }}" class=" hover:underline text-blue-500">Sign up here</a>
          </p>
        </div>

      </div>

     </div>

    </div>
    
  </div>