<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function profile($id)
  {
      $profile = User::findOrFail($id);
      $userposts = $profile->posts()->paginate(5);
      return view('profile', compact('profile', 'userposts'));
  }

  public function delete($id)
  {
      $user = User::findOrFail($id);
      $user->delete();
      return redirect()->route('profile')->with('success', 'User deleted successfully.');
  }
}
