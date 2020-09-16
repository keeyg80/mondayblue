@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
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
                        <table class="table table-striped">
                            <tr>
                                <th>
                                    Title
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    Posted On
                                </th>
                                <th>
                                </th>
                                <th>
                                </th>
                            </tr>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>
                                            {{$post->title}}
                                        </td>
                                        <td>
                                            {{$post->description}}
                                        </td>
                                        <td>
                                            {{$post->created_at}}
                                        </td>
                                        <td>
                                            <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-primary"> Edit </a>
                                        </td>
                                        <td>        
                                            {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method' =>'POST', 'class'=>'text-right'])!!}
                                                {{Form::hidden('_method','DELETE')}}
                                                {{Form::submit('Delete',['class'=>'btn btn-outline-danger'])}}
                                            {!!Form::close()!!}                                                
                                        </td>
                                    </tr>
                                @endforeach 
                        </table>
                    @else
                        <p> You have no post yet.</p>        
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
