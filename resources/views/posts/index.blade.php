@extends('layouts.app')

@section('content')
    <style>
        .inner {
            overflow: hidden;

        }

        .inner img {
            transition: all 1.75s ease;
        }

        .inner:hover img {
            transform: scale(1.2);
        }
        .image-resize{
            height: 200px;
            object-fit: cover;
            object-position: center center;
        }
    </style>
    <div class="container ">
        <div class="row mt-3">
            @if(count($posts)>0)
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-3">
                        <div class="card border-primary mb-3 h-100" >
                            <div class="card-header bg-primary text-light">{{$post->category->name}}</div>
                            <div class="inner">
                                <img src="/storage/cover_images/{{ $post->cover_image }}" class="card-img-top image-resize" alt="...">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">{{$post->title}}</h4>
                                @if (count($post->reviews) > 0)
                                <small>Review  </small> <span class="badge badge-pill badge-primary">{{(count($post->reviews))}}</span>                                 
                                <small class="float-right"><span style="color: yellow; text-shadow: 0px 0px 2px #000000;">★</span> {{number_format((float)(($post->reviews->sum('rating'))/(count($post->reviews))), 1, '.', '')}} / 5</small>
                                @endif
                                <p class="card-text mb-auto">{{$post->description}}</p>
                                <small>posted on {{$post->created_at}} by {{$post->user->name}}</small>
                                <h5>USD {{$post->price}} / {{$post->priceunit}}</h5>
                                <h5>Delivery in {{$post->delivery}} {{$post->deliveryunit}}</h5>
                            </div>
                            <div class="card-footer bg-transparent">
                                <a class="btn btn-lg btn-block btn-outline-primary" href="/posts/{{$post->id}}" >More</a>
                            </div>
                        </div>
                    </div>                    
                @endforeach
                
            @else 
                <div class="alert alert-dismissible alert-primary">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4 class="alert-heading">No posts found!</h4>
                    <strong>Welcome to MondayBlue!</strong> 
                </div>
            @endif
        </div>
        {{$posts->links()}}
    </div>
    
@endsection