@extends('layouts.app')

@section('content')
    <style>
        .inner {
            overflow: hidden;

        }

        .inner img {
            transition: all 1.5s ease;
        }

        .inner:hover img {
            transform: scale(1.5);
        }

        .image-resize {
            height: 500px;
            object-fit: cover;
            object-position: center center;
        }

    </style>
    <div class="container mt-5 mb-5">

        <div class="card border-primary mb-3">
            <div class="card-header">
                <h1>{{ $post->category->name }} : {{ $post->title }}</h1>
            </div>
            <div class="inner text-center">
                <img class="image-resize" src="/storage/cover_images/{{ $post->cover_image }}" alt="cover image">
            </div>
            <div class="card-body">
                <h4 class="card-title mb-4">{{ $post->description }}</h4>
                <p class="card-text">{!! $post->body !!}</p>
                <small>posted on {{ $post->created_at }} by {{ $post->user->name }}</small>
                <h4>USD {{ $post->price }} / <small>{{ $post->priceunit }}</small></h4>
                <h4>Delivery : {{ $post->delivery }} <small>{{ $post->deliveryunit }}</small></h4>
                @if (!Auth::guest())
                    @if (Auth::user()->id == $post->user_id)
                        <div class="dflex">
                            <div class="row float-right m-3">
                                <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-primary mr-2"> Edit </a>
                                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST',
                                'class' => 'text-right']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger']) }}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    @endif
                @endif
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary float-right mr-3"> Order Now </a>
                <a href="#" class="btn btn-primary float-right mr-3"> Contact {{ $post->user->name }}</a>
                {{-- <a href="/posts" class="btn btn-primary"> Go to Posts </a> --}}
            </div>

            {{-- <div class="card-footer text-right">
                <button type="button" class="btn btn-success">Apply</button>
            </div> --}}
        </div>
    </div>
@endsection
