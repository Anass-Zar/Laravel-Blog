<div class="fixed top-0 left-0 w-full z-50 bg-white border-b backdrop-blur-lg bg-opacity-80">
  <div class="mx-auto max-w-7xl px-6 sm:px-6 lg:px-8">
    <div class="relative flex h-[63px] justify-between">
      <div class="flex flex-1 items-stretch justify-start">
        <a class="flex flex-shrink-0 items-center" href="{{ route('home') }}">
          <img class="block h-12 w-auto" src="https://www.svgrepo.com/show/501888/donut.svg" >
        </a>
      </div>
      <div class="flex-shrink-0 flex px-2 py-3 items-center space-x-8">
        <!-- Search Bar -->
        {{-- <div class="relative">
          <input type="text" placeholder="Search..." class="w-80 pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M14.071 11.657a6.5 6.5 0 1 1-1.414-1.414l-3.35-3.35a1 1 0 1 1 1.414-1.414l3.35 3.35a1 1 0 0 1 0 1.414zM6.5 11.5a5 5 0 1 1 10 0 5 5 0 0 1-10 0z" clip-rule="evenodd" />
            </svg>
          </div>
        </div> --}}
        <!-- End of Search Bar -->
        @auth
            <a class="text-gray-700 hover:text-indigo-700 text-sm font-medium cursor-pointer" href="{{ route('home') }}">Home</a>
            <a class="text-gray-700 hover:text-indigo-700 text-sm font-medium cursor-pointer" href="{{ route('post.create') }}">Create post</a>
            <a class="text-gray-700 hover:text-indigo-700 text-sm font-medium cursor-pointer" href="{{ route('profile.profile', auth()->user()->id) }}">Profile</a>
            <a class="text-gray-800 bg-indigo-100 hover:bg-indigo-200 inline-flex items-center justify-center px-3 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm" href="{{ route('logout') }}">Logout</a>
        @else
            <a class="text-gray-700 hover:text-indigo-700 text-sm font-medium cursor-pointer" href="{{ route('home') }}">Home</a>
            <a class="text-gray-700 hover:text-indigo-700 text-sm font-medium" href="{{ route('login') }}">Login</a>
            <a class="text-gray-800 bg-indigo-100 hover:bg-indigo-200 inline-flex items-center justify-center px-3 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm" href="{{ route('register') }}">Register</a>
        @endauth  
      </div>    
    </div>
  </div>
</div>
