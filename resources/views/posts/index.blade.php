@extends('layouts.app')

@section('content')
    
    <div class="container">
        <h1>Post</h1>
        <div class="row mt-3">
            @if(count($posts)>0)
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-3">
                        <div class="card border-primary mb-3 h-100" >
                            <div class="card-header">{{$post->category}}</div>
                            <div class="card-body">
                                <h4 class="card-title">{{$post->title}}</h4>
                                <p class="card-text mb-auto">{{$post->description}}</p>
                                <small>posted on {{$post->created_at}} by {{$post->user->name}}</small>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-lg btn-block btn-outline-success" href="/posts/{{$post->id}}" >More</a>
                            </div>
                        </div>
                    </div>                    
                @endforeach
                
            @else 
                <p>No posts found</p>
            @endif
        </div>
        {{$posts->links()}}
    </div>
    
@endsection