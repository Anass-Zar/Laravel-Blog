@vite('resources/css/app.css')
<div class="w-full">
  <div class="text-center">
      <h1 class="text-3xl font-semibold text-gray-900">Reset password</h1>
      <p class="mt-2 text-gray-500">Click the button reset for make a new password for you account.</p>
  </div>
  <div class="mt-5">
    <div class="my-6">
      <button type="submit" class="w-full rounded-md bg-black px-3 py-4 text-white focus:bg-gray-600 focus:outline-none">
          <a href="{{route("reset.password", "token")}}" >Reset Password</a>
      </button>
    </div>
  </div>
</div>
