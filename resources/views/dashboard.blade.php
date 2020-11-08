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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Dashboard') }}
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($user->activestatus != 'no')
                    {{-- {{ __('You are logged in!') }} --}}
                    <a href="/posts/create" class="btn btn-primary"> Create Post </a>
                    <a href="/myprofile/{{ Auth::user()->id }}" class="btn btn-primary"> My Profile</a>
                    <a class="btn btn-warning" href="{{ route('password.request') }}">
                        {{ __('Reset Password?') }}
                    </a>
                    @endif
                    @if($user->activestatus == 'no')
                    <div class="alert alert-dismissible alert-warning">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4 class="alert-heading">Warning!</h4>
                        <p class="mb-0">your account has been suspended, <a href="#" class="alert-link">please contact admin!</a>.</p>
                      </div>                    
                    @endif
                </div>
            </div>
        </div>
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header">Your Posts 
                    @if (count($posts)>0)
                    <span class="badge badge-primary">{{count($posts)}}</span>                        
                    @endif
                </div>
                <div class="card-body">
                    @if (count($posts) > 0)

                    @foreach ($posts as $post)
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-4 col-sm-12">
                                    <div class="inner rounded-left">
                                        <img src="/storage/cover_images/{{ $post->cover_image }}" class="card-img-top image-resize" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="card-body">
                                        <h4>{{$post->category->name}} : {{$post->title}}</h4>                                        
                                        <p>
                                            <small class="text-muted float-right">
                                                {{$post->created_at}}
                                            </small>
                                            {{$post->description}} <br>
                                            USD {{$post->price}} per {{$post->priceunit}}
                                        </p>
                                        <p>
                                            Active : @if(($post->activestatus)=='yes') ✔ @else <strong class="text-danger h4">✘</strong> @endif
                                        </p>                                                                               
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12">
                                    <div class="card-body flex-center h-100">                                        
                                        @if($user->activestatus != 'no') 
                                            <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-primary mr-2"> Edit </a>                                          
                                            {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method' =>'POST', 'class'=>'text-right','onsubmit' => 'return confirm("Are You Sure To DELETE ? this cannot be recovered")'])!!}
                                                {{Form::hidden('_method','DELETE')}}
                                                {{Form::submit('Delete',['class'=>'btn btn-outline-danger mr-3'])}}
                                            {!!Form::close()!!}   
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @else
                        <div class="alert alert-dismissible alert-light">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>You have no post yet!</strong> <a href="/posts/create" class="alert-link">Make your first money making post!!!</a>
                        </div>           
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
