<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\Category;

class CategoriesController extends Controller
{
    

    public function show($Category_id)
    {
    $category = Category::findOrFail($Category_id);
        if($category){
        $posts = Post::where('category_id',$Category_id)->orderby('created_at','desc')->paginate(9);
        return view('posts.index')->with('posts',$posts);
        }
        return view('errors.404');
    }
}
