@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
                    
        <div class="card border-primary mb-3" >
            <div class="card-header"><h1>{{$post->category}} : {{$post->title}}</h1></div>
            <div class="card-body">
                <h4 class="card-title mb-4">{{$post->description}}</h4>
                <p class="card-text">{!!$post->body!!}</p>
                <small>posted on {{$post->created_at}} by {{$post->user->name}}</small>
                <h4>USD {{$post->price}}   / <small>{{$post->puom}}</small></h4>
                <h4>Quantity : {{$post->quantity}} <small>{{$post->quom}}</small></h4>
                @if (auth()->user()->id == $post->user_id)
                    <a href="/posts/{{$post -> id}}/edit" class="btn btn-outline-primary"> Edit </a>
                    {!!Form::open(['action' =>['PostsController@destroy', $post->id], 'method' =>'POST', 'class'=>'text-right'])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete',['class'=>'btn btn-outline-danger'])}}
                    {!!Form::close()!!}
                @endif                
            </div>
            <div class="card-footer">
                <a href="/posts" class="btn btn-primary"> Go to Posts </a>
            </div>

            {{-- <div class="card-footer text-right">
                <button type="button" class="btn btn-success">Apply</button>
            </div> --}}
        </div>
    </div>
@endsection