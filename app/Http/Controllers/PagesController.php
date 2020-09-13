<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PagesController extends Controller
{
    public function home(){
        $posts = Post::all();
        return view('pages.home')->with('posts',$posts);
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
