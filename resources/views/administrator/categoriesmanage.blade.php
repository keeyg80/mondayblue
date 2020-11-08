@extends('layouts.app')

@section('content')
<style>
    .cover-image-thumbnail{
        height: 100px;
        width: 150px;
    }
</style>
<div class="container mt-2">
    <div class="card">
        <div class="card-header">Categories
            <a href="/categorycreate" class="btn btn-primary float-right"> New Category </a>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{-- {{ __('You are logged in!') }} --}}
                                
            <div class="card-body">
                @if (count($categories) > 0)
                    @foreach ($categories as $category)
                        <div class="card border-primary mb-2">
                            <div class="row">
                                <div class="col-2">
                                    <div class="card-body">
                                        <img src="/storage/cover_images/{{ $category->cover_image }} " class="mb-1 card-img-top cover-image-thumbnail" alt="...">                                        
                                    </div>    
                                </div>
                                <div class="col-6">
                                    <div class="card-body">
                                        <h4 class="card-title mb-2">{{$category->name}} </h4>
                                        
                                        <h6 class="card-subtitle mb-2 text-muted">Updated on {{$category->updated_at}}</h6>
                                        <p class="card-text">image width : <span class="badge badge-dark">{{$category->imagewidth}}</span> , 
                                            Active : @if(($category->activestatus)=='yes') ✔ @else <strong class="text-danger h4">✘</strong> @endif  ,
                                            <small>Sequence</small> <span class="badge badge-danger">{{$category->sequence}}</span>       ,
                                            <small>posts</small> <span class="badge badge-pill badge-primary">{{(count($category->posts))}}</span>                                  
                                        </p>                                                     
                                    </div>
                                </div>
                                <div class="col-4 flex-center">
                                    <div class="card-body">
                                        <a href="/categoryedit/{{$category->id}}" class="btn btn-success float-right mr-2"> Edit </a>
                                        @if(count($category->posts) < 1)   
                                        {!!Form::open(['action'=>['CategoriesController@categorydestroy', $category->id], 'method' =>'POST', 'class'=>'text-right','onsubmit' => 'return confirm("Are You Sure To DELETE ? this cannot be recovered")'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class'=>'btn btn-danger float-right mr-2'])}}
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
                        <strong>No Category Yet!</strong> Create your first money making category here!!!
                    </div>       
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
