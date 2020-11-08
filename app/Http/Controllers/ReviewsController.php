<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\User;
use App\Post;

class ReviewsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request, [
            'rating' => 'required',
            'message' => 'required',
            'post_id' => 'required'
        ]); 
        
        //create review
        $review = new Review;
        $review->rating = $request->input('rating');
        $review->message = $request->input('message');
        $review->post_id = $request->input('post_id');
        $review->user_id = auth()->user()->id;
        $review ->save();

        $post = Post::find($request->input('post_id'));
        $review = Review::where('post_id',$request->input('post_id'))->orderby('created_at','desc')->get();
        return view('posts.show')->with('post',$post)->with('reviews',$review);
    }
}
