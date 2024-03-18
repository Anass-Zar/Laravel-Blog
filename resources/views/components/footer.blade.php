<footer class="bg-gray-100 mt-28">
  <div class="relative mx-auto max-w-screen-xl px-4 py-10 sm:px-6 lg:px-8 lg:pt-24">

    <div class="lg:flex lg:items-end lg:justify-between">
      <div>
        <div class="flex flex-1 items-stretch justify-start">
          <a class="flex flex-shrink-0 items-center" href="{{ route('home') }}">
            <img class="block h-12 w-auto" src="https://www.svgrepo.com/show/501888/donut.svg" >
          </a>
        </div>

        <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-500 lg:text-left">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt consequuntur amet culpa
          cum itaque neque.
        </p>
      </div>

      <ul class="mt-12 flex flex-wrap justify-center gap-6 md:gap-8 lg:mt-0 lg:justify-end lg:gap-12" >
        @auth
        <li>
          <a class="text-gray-700 transition hover:text-indigo-700" href="{{ route('home') }}">Home</a>
        </li>
        <li>
          <a class="text-gray-700 transition hover:text-indigo-700" href="{{ route('post.create') }}">Create post</a>
        </li>
        <li>
          <a class="text-gray-700 transition hover:text-indigo-700" href="{{ route('profile.profile', auth()->user()->id) }}">Profile</a>
        </li>
        <li>
          <a class="text-gray-700 transition hover:text-indigo-700" href="{{ route('logout') }}">Logout</a>
        </li>
        @else
        <li>
          <a class="text-gray-700 transition hover:text-indigo-700" href="{{ route('home') }}">Home</a>
        </li>
        <li>
          <a class="text-gray-700 transition hover:text-indigo-700" href="{{ route('login') }}">Login</a>
        </li>
        <li>
          <a class="text-gray-700 transition hover:text-indigo-700" href="{{ route('register') }}">Register</a>
        </li>
        @endauth
      </ul>

    </div>

    <p class="mt-12 text-center text-sm text-gray-500 lg:text-right">
      Copyright &copy; 2024. All rights reserved.
    </p>
  </div>
</footer>