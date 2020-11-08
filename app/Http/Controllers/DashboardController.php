<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//use App\Post;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard')->with('posts', $user->posts)->with('user', $user);

        //$posts = Post::all(); 
        //return view('dashboard')->with('posts', $user->posts()->where('createdby',$user_id)->get());
        //return view('posts.edit')->with('posts',$post);
        //return view('dashboard')->with('posts',$posts);
        //$posts = Post::where('createdby',$user_id)->orderby('user_id','desc')->get();
        //return view('dashboard')->with('posts',$posts);
    }
}
