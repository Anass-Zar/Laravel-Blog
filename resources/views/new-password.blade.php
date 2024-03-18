@extends('home')
@section('content')
    <main>
      <div class="relative mx-auto w-full max-w-md bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:rounded-xl sm:px-10 mt-32">
          <div class="w-full">
              <div class="text-center">
                  <h1 class="text-3xl font-semibold text-gray-900">New Password</h1>
                  <p class="mt-2 text-gray-500">Make a new password.</p>
              </div>
              <div class="mt-5">
                @if($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
                @endif
            
                @if(session()->has('error'))
                  <div class="alert alert-danger">{{session('error')}}</div>
                @endif
            
                @if(session()->has('success'))
                  <div class="alert alert-danger">{{session('success')}}</div>
                @endif
            </div>  
              <div class="mt-5">
                  <form action="{{route('reset.password.post')}}" method="POST">
                      @csrf
                      <input type="text" name="token" hidden value="{{$token}}">
                      <div class="relative mt-6">
                        <input type="email" name="email" id="email" placeholder="Email Address"
                            class="peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none"
                            autocomplete="NA" />
                        <label for="email"
                            class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Email
                            Address</label>
                      </div>
                      <div class="relative mt-6">
                        <input type="password" name="password" id="password" placeholder="Password" class="peer peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none" />
                        <label for="password" class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Password</label>
                      </div>
                      <div class="relative mt-6">
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password Confirmation" class="peer peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none" />
                        <label for="password_confirmation" class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Password Confirmation</label>
                      </div>
                      <div class="my-6">
                          <button type="submit"
                              class="w-full rounded-md bg-black px-3 py-4 text-white focus:bg-gray-600 focus:outline-none">Reset Password</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </main>
@endsection