@extends('home')
@section('title', $profile->name)
@section('content')
<div class="w-4/5 flex items-start justify-center mx-auto mt-24 gap-12">
    <div class="w-1/2 mx-auto mb-8 bg-gray-100 rounded-lg shadow-md p-5">
        @if($profile->photo)
          <img class="w-40 h-40 rounded-full mx-auto mb-3" src="{{ asset('images/' . $profile->photo) }}" alt="Profile picture">
        @else
          <img class="w-32 h-32 rounded-full mx-auto mb-3" src="{{ asset('images/default.webp') }}" alt="Default Profile Picture">
        @endif
        <h1 class="text-center text-2xl font-semibold">{{$profile->name}}</h1>
        <p class="text-center text-lg text-gray-600 mt-1">{{$profile->email}}</p>
        <div class="w-3/4 mx-auto flex items-center justify-between gap-8 mt-4">
          <button class="w-1/2 py-2 px-4 rounded-md tesxt-xl bg-green-500 hover:bg-green-700">Edit</button>
          <button class="w-1/2 py-2 px-4 rounded-md tesxt-xl bg-red-500 hover:bg-red-700">Delete Account</button>
        </div>
    </div>

    <div class="w-1/2 grid gap-6 grid-cols-1">
        @foreach ( $userposts as $post )
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <img class="w-full h-48 object-cover" src="{{ asset('images/' . $post->image) }}" alt="Blog Post Image">
            <div class="p-6">
              <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ $post->title }}</h2>
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
        <div class="my-5">    
          {{ $userposts->links() }} 
        </div>
    </div>
</div>
@endsection
