<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
  public function affiche()
  {
    $listecategories = Category::all();
    $titre = "Liste all categories";
    return view("categories", compact('listecategories', 'titre'));
  }

  public function filter($id)
  {
      $listecategories = Category::all();
      $category = Category::find($id);
      $listeposts = Post::where('category', $id)->with('user')->paginate(6);
  
      return view('posts', compact('listeposts', 'listecategories', 'category'));
  }
  
}
