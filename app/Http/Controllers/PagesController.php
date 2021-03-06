<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
class PagesController extends Controller
{
    public function home(){
        // $posts = Post::all();
        $posts = Post::where('activestatus','yes')->orderby('created_at','desc')->get();
        $categories = Category::where('activestatus','yes')->orderBy('sequence')->get();
        return view('pages.home')->with('posts',$posts)->with('categories',$categories);
    }


    public function about(){
        return view ('pages.about');
    }

    public function contact(){
        return view ('pages.contact');
    }

    public function cards(){
        return view ('pages.cards');
    }

    public function carouselsitem(){
        return view ('pages.carouselsitem');
    }

}
