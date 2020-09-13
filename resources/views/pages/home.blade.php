@extends('layouts.app')

@section('content')
 
        
        
        <div class="jumbotron jumbotronbackground text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">MondayBlue</h1>
            <p class="lead font-weight-normal">Hiring professional and freelancer portal</p>
            <a class="btn btn-outline-secondary" href="#">Coming soon</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>

        

<div class="container">  
        <h1 class="title m-b-md">
            Featured Jobs
        </h1>
            <div class="row mb-2">
                @if(count($posts)>=1)
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-3">
                            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-100 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-primary">{{$post->category}}</strong>
                                    <h3 class="mb-auto">{{$post->title}}</h3>
                                    <a href="/posts/{{$post->id}}" class="stretched-link">Continue reading</a>
                                </div>                        
                            </div>
                        </div>
                    @endforeach
                @else 
                    <p>No posts found</p>
                @endif

                {{-- <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Freelancer</strong>
                        <h3 class="mb-0">Logo Designing</h3>
                        <div class="mb-1 text-muted">Posted on : Sept 3 2020</div>
                        <p class="card-text mb-auto">I need someone to design my company's logo.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Hiring</strong>
                        <h3 class="mb-0">Web Designer</h3>
                        <div class="mb-1 text-muted">Posted on Sept 5 2020</div>
                        <p class="mb-auto">We are hiring web designer.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        </div>
                    </div>
                </div> --}}
            </div>
</div>

<div class="container">
    <h3 class="title m-b-md">
        Uploaded Posts
    </h1>
    <div class="row">
        @if(count($posts)>=1)
            @foreach ($posts as $post)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-3">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-100 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">{{$post->category}}</strong>
                            <h3 class="mb-0">{{$post->title}}</h3>
                            <div class="mb-1 text-muted">Posted on : {{$post->created_at}}</div>
                            <p class="mb-2">{{$post->description}}</p>
                            <small class="text-secondary mb-auto">{{$post->body}}</small>
                            <a href="/posts/{{$post->id}}" class="stretched-link">Continue reading</a>
                        </div>                        
                    </div>
                </div>
            @endforeach
        @else 
            <p>No posts found</p>
        @endif
    </div>
</div>

       




@endsection
