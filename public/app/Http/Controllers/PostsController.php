<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\Category;
use DB;
class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index' , 'show']]);
    }
    
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
       
        $posts = Post::orderby('created_at','desc')->paginate(9);    
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
        //$categories = Category::all(['id', 'name']);
        $categories = Category::get()->pluck('name', 'id')->toArray();
        return view('posts.create')->with('categories',$categories);
        //$categories = Category::all(['id', 'name']);
        //return view('posts.create', compact('id', 'name'));
        //$categories = Items::where('active', true)->orderBy('name')->lists('name', 'id');
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
            'priceunit' => 'required',
            'delivery' => 'required',
            'deliveryunit' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]); 
        
        //Handle File Upload
        if($request->hasFile('cover_image')){
            //Get filename with the extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            
            //Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just file extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to Store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        //create post
        $post = new Post;
        $post->category_id = $request->input('category');
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->body = $request->input('body');
        $post->price = $request->input('price');
        $post->priceunit = $request->input('priceunit');
        $post->delivery = $request->input('delivery');
        $post->deliveryunit = $request->input('deliveryunit');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post ->save();

        return redirect('/dashboard')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::get()->pluck('name', 'id')->toArray();      
        $post = Post::find($id);
        return view('posts.show')->with('post',$post)->with('categories',$categories);
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
        $categories = Category::get()->pluck('name', 'id')->toArray();
        //return view('posts.create')->with('categories',$categories);
        //check authorize post user
        if (auth()->user()->id !== $post->user_id){
            return redirect('/dashboard') ->with('error', 'Unauthorized Page');
        }

        return view('posts.edit')->with('post',$post)->with('categories',$categories);
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
            'priceunit' => 'required',
            'delivery' => 'required',
            'deliveryunit' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]); 
        
        

        //Handle File Upload
        if($request->hasFile('cover_image')){
            //Get filename with the extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            
            //Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just file extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to Store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

            
        }

        
        //update post
        $post = Post::find($id);
        $post->category_id = $request->input('category');
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->body = $request->input('body');
        $post->price = $request->input('price');
        $post->priceunit = $request->input('priceunit');
        $post->delivery = $request->input('delivery');
        $post->deliveryunit = $request->input('deliveryunit');
        $post->user_id = auth()->user()->id;
        if($request->hasFile('cover_image')){
            if($post->cover_image != 'noimage.jpg'){
                //Delete image
                Storage::delete('public/cover_images/'.$post->cover_image);
            }
            $post->cover_image = $fileNameToStore;
        }
        $post ->save();

        return redirect('/dashboard')->with('success','Post Updated');
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
        //check authorize post user
        if (auth()->user()->id !== $post->user_id){
            return redirect('/dashboard') ->with('error', 'Unauthorized Page');
        }
        if($post->cover_image != 'noimage.jpg'){
            //Delete image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }
        $post->delete();
        return redirect('/dashboard')->with('success','Post Removed');
    }
}
