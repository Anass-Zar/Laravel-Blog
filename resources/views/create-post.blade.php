@extends('home')
@section('title', 'Create Post')
@section('content')
  <div class="mt-24">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                  <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-4">
                          <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                              Title:
                          </label>
                          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" placeholder="Title">
                      </div>
                      <div class="mb-4">
                          <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                              Description:
                          </label>
                          <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" placeholder="Description"></textarea>
                      </div>
                      <div class="mb-4">
                          <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                              Image:
                          </label>
                          <input type="file" name="image" id="image">
                      </div>
                      <div class="mb-4">
                          <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
                              Category:
                          </label>
                          <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="category" name="category">
                            @foreach ( $listecategories as $category )
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="flex items-center justify-between">
                          <button class="bg-black  text-white py-2 px-4 rounded focus:bg-gray-600 focus:outline-none" type="submit">
                              Create Post
                          </button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
@endsection