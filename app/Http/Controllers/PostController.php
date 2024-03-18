<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post; // Import the Post model
use App\Models\User;

class PostController extends Controller
{
    public function create()
    {
        $listecategories = Category::all();
        return view('create-post', compact('listecategories'));
    }
    
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post', compact('post'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image',
            'category' => 'string|max:255',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }
        $validatedData['user_id']=auth()->user()->id;
        $post = new Post;
        $post->fill($validatedData);
        $post->save();

        return redirect()->back()->with('success', 'Post created successfully!');
    }

    public function affiche()
    {
      $listecategories = Category::all();
      $listeposts = Post::with('user')->paginate(6);
      $titre = "Liste all posts";
      return view("posts", compact('listecategories' , 'listeposts', 'titre'));
    }

    public function search(Request $request) {
      $listecategories = Category::all();
      $search = $request->search;
      $listeposts = Post::where('title', 'LIKE', "%$search%")->paginate(6);
      return view("posts", compact("search", 'listecategories', 'listeposts'));
  }
  
  
}
