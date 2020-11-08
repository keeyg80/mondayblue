<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\Category;
use App\User;

class CategoriesController extends Controller
{
    

    public function show($Category_id)
    {
    $category = Category::findOrFail($Category_id);
        if($category){
        $posts = Post::where('activestatus','yes')->where('category_id',$Category_id)->orderby('created_at','desc')->paginate(9);
        return view('posts.index')->with('posts',$posts);
        }
        return view('errors.404');
    }

    //Category Manage
    public function categoriesmanage()
    {
        $categories = Category::orderBy('sequence','asc')->get();
        $posts = Post::all();
        return view('administrator.categoriesmanage')->with('categories',$categories)->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categorycreate()
    {        
        return view('administrator.categorycreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function categorystore(Request $request)
    {
        $this ->validate($request, [
            'name' => 'required',
            'imagewidth' => 'required',
            'sequence' => 'required',
            'activestatus' => 'required',
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
        //create category
        $category = new Category;
        $category->name = $request->input('name');
        $category->imagewidth = $request->input('imagewidth');
        $category->sequence = $request->input('sequence');
        $category->activestatus = $request->input('activestatus');
        $category->cover_image = $fileNameToStore;
        $category ->save();

        return redirect('/administrator/categories')->with('success','Category Created');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function categoryedit($id)
    {
        $category = Category::find($id);
        return view('administrator.categoryedit')->with('category',$category);
               
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function categoryupdate(Request $request, $id)
    {
        $this ->validate($request, [
            'name' => 'required',
            'imagewidth' => 'required',
            'sequence' => 'required',
            'activestatus' => 'required',
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

        
        //update category
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->imagewidth = $request->input('imagewidth');
        $category->sequence = $request->input('sequence');
        $category->activestatus = $request->input('activestatus');
        if($request->hasFile('cover_image')){
            if($category->cover_image != 'noimage.jpg'){
                //Delete image
                Storage::delete('public/cover_images/'.$category->cover_image);
            }
            $category->cover_image = $fileNameToStore;
        }
        $category ->save();

        return redirect('/administrator/categories')->with('success','category Updated');
    }

    
    //User manage
    public function usersmanage()
    {
        $users = User::orderBy('role','ASC')->orderBy('created_at','DESC')->paginate(15);
        // $posts = Post::where('activestatus','yes')->get();
        $posts = Post::all();
        return view('administrator.usersmanage')->with('users',$users)->with('posts',$posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function useredit($id)
    {
        $user = User::find($id);
        return view('administrator.useredit')->with('user',$user);               
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userupdate(Request $request, $id)
    {
        $this ->validate($request, [
            'name' => 'required',
            'role' => 'required',
            'activestatus' => 'required'
        ]); 
        
        //update category
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->role = $request->input('role');
        $user->activestatus = $request->input('activestatus');        
        $user ->save();

        return redirect('/administrator/users')->with('success','User Updated');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function categorydestroy($id)
    {
        $category = Category::Find($id);
        //check authorize category user        
        if($category->cover_image != 'noimage.jpg'){
            //Delete image
            Storage::delete('public/cover_images/'.$category->cover_image);
        }
        $category->delete();
        return redirect('/administrator/categories')->with('success','Category Removed');
    }
}
