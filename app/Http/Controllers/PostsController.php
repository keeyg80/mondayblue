<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = DB::select('SELECT * FROM posts');
        //$posts = DB::table('posts')->paginate(3);

       /*  $posts = Post::where('category', Input::get('categoryselect'))
    ->orWhere('body', 'like', '%' . Input::get('bodysearch') . '%')->get(); */
        
        $posts = Post::orderby('created_at','desc')->paginate(3);    
        //$posts = Post::where('category','freelancer')->get();
        //$posts = Post::orderby('created_at','desc')->take(3)->get();
        //$posts = Post::orderby('created_at','desc')->get();
        //$posts = Post::all();
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request, [
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'body' => 'required',
            'price' => 'required',
            'puom' => 'required',
            'quantity' => 'required',
            'quom' => 'required'
        ]); 
        
        //create post
        $post = new Post;
        $post->category = $request->input('category');
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->body = $request->input('body');
        $post->price = $request->input('price');
        $post->puom = $request->input('puom');
        $post->quantity = $request->input('quantity');
        $post->quom = $request->input('quom');
        $post->createdby = auth()->user()->id;
        $post ->save();

        return redirect('/posts')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this ->validate($request, [
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'body' => 'required',
            'price' => 'required',
            'puom' => 'required',
            'quantity' => 'required',
            'quom' => 'required'
        ]); 
        
        //update post
        $post = Post::find($id);
        $post->category = $request->input('category');
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->body = $request->input('body');
        $post->price = $request->input('price');
        $post->puom = $request->input('puom');
        $post->quantity = $request->input('quantity');
        $post->quom = $request->input('quom');
        $post->createdby = auth()->user()->id;
        $post ->save();

        return redirect('/posts')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::Find($id);
        $post->delete();
        return redirect('/posts')->with('success','Post Removed');
    }
}
