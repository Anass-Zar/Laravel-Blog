@extends('home')
@section('title', $post->name)
@section('content')
<div class="container mx-auto mt-16">
    <div class="relative">
        <div class="h-[450px] w-full flex items-center overflow-hidden">
            <img src="{{ asset('images/' . $post->image) }}" alt="Post Image" class="w-full object-cover">
        </div>
        <div class="w-2/3 container mx-auto bg-white border p-6 rounded-lg mt-[-100px] relative z-10">
          <div class="flex items-center justify-between mt-2 ">
            <h1 class="text-3xl font-bold ">{{ $post->title }}</h1>
            <p class="text-gray-600 mt-2">Posted on {{ $post->created_at->format('M d, Y') }}</p>
          </div>

            <div class="flex items-center mt-2">
              <a href="{{ route('profile.profile', $post->user->id) }}" class="flex items-center">
                <img src="{{ asset('images/' . $post->user->photo) }}" alt="Post Image" class="w-8 h-8 rounded-full mr-1">
                <p class=" text-gray-900">{{ $post->user->name }}</p>
              </a>
            </div>
          <p class="mt-4">{{ $post->description }}</p>
        </div>
    </div>
</div>
@endsection
