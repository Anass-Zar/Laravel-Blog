<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
  function login() {
    if(Auth::check()){
      return redirect(route('home'));
    }
    return view('login');
  }

  function register() {
    if(Auth::check()){
      return redirect(route('home'));
    }
    return view('register');
  }

  function loginPost(Request $request) {
    $request->validate([
      'email' => 'required',
      'password' => 'required'
    ]);
    $credentials = $request->only('email', 'password');
    if(Auth::attempt($credentials)){
      return redirect()->intended(route('home'));
    }
    return redirect(route('login'))->with('error', 'Login details are not valid');
  }

  function registerPost(Request $request){

    $request->validate([
      'photo' => 'image',
      'name' => 'required',
      'email' => 'required|email|unique:users',
      'password' => 'required'
    ]);
    if ($request->hasFile('photo')) {
      $photoPath = $request->file('photo');
      $photoName = time().'.'.$photoPath->getClientOriginalExtension();
      $photoPath->move(public_path('images'), $photoName);
      $validatedData['photo'] = $photoName;
    } else {
        $photoPath = 'images/default.jpg';
    }
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['password'] = Hash::make($request->password);
    $data['photo'] = $photoName;
    $user = User::create($data);

    if(!$user){
      return redirect(route('register'))->with('error', 'Register failed, try again');
    }
    return redirect(route('login'))->with('success', 'Register successfull');
  }

  function logout(){
    Session::flush();
    Auth::logout();
    return redirect(route('login'));
  }

}
