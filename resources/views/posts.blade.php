@extends('home')
@section('title', 'Posts')
@section('content')
    <div class="mt-24 px-4 sm:px-6 lg:px-8">
        <div class="w-full md:w-5/6 mx-auto flex h-screen flex-col justify-between font-sans">
            <div class="flex md:space-x-8">
                <div>
                    <form method="GET" action="{{ route('post.search') }}" class="flex items-center justify-center w-full h-10 mb-2">
                      <div class="flex items-center border rounded-md overflow-hidden">
                          <input name="search" placeholder="Search..." value="{{ isset($search) ? $search : '' }}" class="py-1 px-2 focus:outline-none" style="width: 200px;">
                          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2">
                              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="22" height="24" viewBox="0 0 50 50">
                                <path d="M 21 3 C 11.621094 3 4 10.621094 4 20 C 4 29.378906 11.621094 37 21 37 C 24.710938 37 28.140625 35.804688 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460938 28.085938 38 24.222656 38 20 C 38 10.621094 30.378906 3 21 3 Z M 21 5 C 29.296875 5 36 11.703125 36 20 C 36 28.296875 29.296875 35 21 35 C 12.703125 35 6 28.296875 6 20 C 6 11.703125 12.703125 5 21 5 Z"></path>
                              </svg>
                          </button>
                      </div>
                    </form>
                    <div class="hidden  max-h-screen min-w-[240px] max-w-[240px] flex-wrap overflow-auto rounded bg-gray-50 shadow-md md:flex border border-gray-300">
                        <div class="px-6 py-4">
                            <a class="font-bold uppercase text-gray-700 hover:text-primary-500" href="/posts">All Posts</a>
                            <ul>
                              @foreach ( $listecategories as $category )
                                <li class="my-3">
                                  <a class="px-3 py-2 text-sm font-medium uppercase text-gray-500 hover:text-indigo-700 hover:text-primary-500" href="/posts/category/{{ $category->id }}">{{ $category->title }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                  <div class="grid gap-6 md:grid-cols-1 lg:grid-cols-2">
                      @foreach ( $listeposts as $post )
                      <div class="bg-white overflow-hidden shadow rounded-lg">
                          <img class="w-full h-48 object-cover" src="{{ asset('images/' . $post->image) }}" alt="Blog Post Image">
                          <div class="p-6">
                            <div class="flex items-center justify-between">
                              <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ $post->title }}</h2>
                              <p class=" text-gray-900 mb-2">by, {{ $post->user->name }}</p>
                            </div>
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
                  <div class="my-5">    
                      {{ $listeposts->links() }} 
                  </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @include('components.footer') --}}
@endsection
