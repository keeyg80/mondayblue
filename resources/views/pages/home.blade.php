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

    <div class="jumbotron jumbotronbackground">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-lg-5 mx-auto my-5">
                    <div class="card border-primary text-left">
                        <div class="card-header">Search Category</div>
                        <div class="card-body">
                            {!! Form::open(['action' => 'PostsController@index', 'method' => 'POST']) !!}
                            <div class="form-group">
                                {{ Form::label('category', 'Category : ') }}
                                {{ Form::select('category', [null => 'Please Select'] + $categories, '', ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('created_at', 'Posting Date') }}
                                {{ Form::text('created_at', '', ['class' => 'form-control', 'placeholder' => 'posting date']) }}
                            </div>
                            {{ Form::submit('Search', ['class' => 'btn btn-primary']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-lg-5 mx-auto my-5">
                    <h1 class="display-4 font-weight-normal">MondayBlue</h1>
                    <p class="lead font-weight-normal">Hiring professional and freelancer portal</p>
                    <a class="btn btn-outline-secondary" href="#">Coming soon</a>
                </div>
            </div>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/640/360/animals/sepia" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Graphic Designer</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/640/360/animals" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Video Editing</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/640/360/arch/grayscale" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Social Media Advertising</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/640/360/arch/sepia" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Website Development</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/640/360/nature/sepia" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Copywriting</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/640/360/people/sepia" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Translator</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/640/360/tech/sepia" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">2D/3D Animator</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/640/360/nature/grayscale" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Storyboard Artist</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/640/360/people/grayscale" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">etc</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}

    <hr>
    <style>
        /* .mycards > div > div.card {
                        height: calc(100% - 15px);
                        margin-bottom: 15px;
                    } */

    </style>
    <div class="container  ">
        <div class="row mycards">
            <div class="col-lg-3 col-md-3 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/320/370/animals/sepia" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Graphic Designer</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/320/370/nature" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Video Editing</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/640/360/arch/grayscale" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Social Media Advertising</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/640/360/arch/sepia" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Website Development</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/320/370/nature/sepia" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Copywriting</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/320/370/people/sepia" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Translator</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/320/370/tech/sepia" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">2D/3D Animator</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://placeimg.com/640/360/animals/grayscale" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">Storyboard Artist</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 p-2">
                <div class="card shadow bg-white rounded">
                    <a href="#" class="position-relative">
                        <img src="https://picsum.photos/320/370" class="card-img-top" alt="...">
                        <div class="card-img-overlay text-center d-flex">
                            <h2 class="w-100 align-self-center text-white mx-auto "
                                style="text-shadow: 2px 2px 4px #000000;">etc</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="container">
        <h1 class="title m-b-md">
            Our Posts
        </h1>
        <div class="row mb-2">
            @if (count($posts) >= 1)
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-3">
                        <div class="card h-100">
                            <div class="inner">
                                <img src="/storage/cover_images/{{ $post->cover_image }}" class="card-img-top image-resize" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->description }}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">USD {{ $post->price }} / <small
                                        class="text-muted">{{ $post->puom }}</small></li>
                                <li class="list-group-item">{{ $post->quantity }} <small>{{ $post->quom }}</small></li>
                            </ul>
                            <div class="card-body">
                                <a href="/posts/{{ $post->id }}" class="btn btn-primary"> Read More </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No posts found</p>
            @endif

            {{-- <div class="col-md-6">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Freelancer</strong>
                        <h3 class="mb-0">Logo Designing</h3>
                        <div class="mb-1 text-muted">Posted on : Sept 3 2020</div>
                        <p class="card-text mb-auto">I need someone to design my company's logo.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                            aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Thumbnail</text>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Hiring</strong>
                        <h3 class="mb-0">Web Designer</h3>
                        <div class="mb-1 text-muted">Posted on Sept 5 2020</div>
                        <p class="mb-auto">We are hiring web designer.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                            aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Thumbnail</text>
                        </svg>
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
                @if (count($posts) >= 1)
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-3">
                            <div
                                class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-100 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-success">{{ $post->category }}</strong>
                                    <h3 class="mb-0">{{ $post->title }}</h3>
                                    <div class="mb-1 text-muted">Posted on : {{ $post->created_at }}</div>
                                    <p class="mb-2">{{ $post->description }}</p>
                                    <small class="text-secondary mb-auto">{!! $post->body !!}</small>
                                    <a href="/posts/{{ $post->id }}" class="stretched-link">Continue reading</a>
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
