@extends('home')
@section('title', 'Home Page')
@section('content')
<div class="mt-16 ">


  {{-- <div id="home" class="bg-slate-500 py-28 relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px]">
    <div class="container">
      <div class="-mx-4 flex flex-wrap items-center">
        <div class="w-full px-4">
          <div class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center" data-wow-delay=".2s" >
            <h1 class="mb-6 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-[1.2]" > 
              Open-Source Web Template for SaaS, Startup, Apps, and More 
            </h1>
            <p class="mx-auto mb-9 max-w-[600px] text-base font-medium text-white sm:text-lg sm:leading-[1.44]" >
              Multidisciplinary Web Template Built with Your Favourite
              Technology - HTML Bootstrap, Tailwind and React NextJS.
            </p>
            <ul class="mb-10 flex flex-wrap items-center justify-center gap-5" >
              <li>
                <a href="https://links.tailgrids.com/play-download" class="inline-flex items-center justify-center rounded-md bg-white px-7 py-[14px] text-center text-base font-medium text-dark shadow-1 transition duration-300 ease-in-out hover:bg-gray-2 hover:text-body-color" >
                  Login
                </a>
              </li>
              <li>
                <a href="https://github.com/tailgrids/play-tailwind" target="_blank" class="flex items-center gap-4 rounded-md bg-white/[0.12] px-6 py-[14px] text-base font-medium text-white transition duration-300 ease-in-out hover:bg-white hover:text-dark" >
                  Register
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> --}}


  <section class="overflow-hidden bg-gray-100 sm:grid sm:grid-cols-2 ">
    <div class="p-8 md:p-12 lg:px-16 lg:py-24">
      <div class="mx-auto max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
        <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit
        </h2>

        <p class="hidden text-gray-500 md:mt-4 md:block">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas tempus tellus etiam
          sed. Quam a scelerisque amet ullamcorper eu enim et fermentum, augue. Aliquet amet volutpat
          quisque ut interdum tincidunt duis.
        </p>
  
        <div class="mt-4 md:mt-8">
          <a
            href="{{ route('post.affiche') }}"
            class="inline-block rounded bg-black px-12 py-3 text-sm font-medium text-white transition focus:bg-gray-600 focus:outline-none"
          >
            Get Started Today
          </a>
        </div>
      </div>
    </div>
  
    <img
      alt=""
      src="https://images.unsplash.com/photo-1464582883107-8adf2dca8a9f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
      {{-- src="{{ asset('images/Donut.jpeg') }}" --}}
      class="h-56 w-full object-cover sm:h-full"
    />
  </section>


  <div class="mt-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full md:w-5/6 mx-auto">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Welcome to Our Blog</h1>

        {{-- <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x400" alt="Blog Post Image">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">Blog Post Title 3</h2>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentesque tortor, nec interdum est volutpat vel.</p>
                    <a href="#" class="text-blue-500 mt-2 inline-block">Read More</a>
                </div>
            </div>
            
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x400" alt="Blog Post Image">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">Blog Post Title 3</h2>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentesque tortor, nec interdum est volutpat vel.</p>
                    <a href="#" class="text-blue-500 mt-2 inline-block">Read More</a>
                </div>
            </div>
            
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x400" alt="Blog Post Image">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">Blog Post Title 3</h2>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentesque tortor, nec interdum est volutpat vel.</p>
                    <a href="#" class="text-blue-500 mt-2 inline-block">Read More</a>
                </div>
            </div>
            
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x400" alt="Blog Post Image">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">Blog Post Title 3</h2>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentesque tortor, nec interdum est volutpat vel.</p>
                    <a href="#" class="text-blue-500 mt-2 inline-block">Read More</a>
                </div>
            </div>
            
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x400" alt="Blog Post Image">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">Blog Post Title 3</h2>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentesque tortor, nec interdum est volutpat vel.</p>
                    <a href="#" class="text-blue-500 mt-2 inline-block">Read More</a>
                </div>
            </div>
            
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x400" alt="Blog Post Image">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">Blog Post Title 3</h2>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentesque tortor, nec interdum est volutpat vel.</p>
                    <a href="#" class="text-blue-500 mt-2 inline-block">Read More</a>
                </div>
            </div>

        </div> --}}

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
          @foreach ($posts as $post)
          <div class="bg-white overflow-hidden shadow rounded-lg">
              <img class="w-full h-48 object-cover" src="{{ asset('images/' . $post->image) }}" alt="Blog Post Image">
              <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ $post->title }}</h2>
                <p class="text-gray-600 overflow-hidden" style="max-height: 6.3em;">
                    {{ $post->description }}
                </p>
                <div class="mt-2 flex items-center justify-between text-gray-500">
                  <a href="{{ route('post.show', $post->id) }}" class="text-blue-500 mt-2 inline-block">Read More</a>
                  <span>{{ $post->created_at->format('M d, Y') }}</span>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="flex justify-center mt-10">
            <a href="{{ route('post.affiche') }}" class="text-blue-500 inline-block text-center hover:underline">All Posts →</a>
          </div>
    </div>
</div>
</div>
@include('components.footer')
@endsection