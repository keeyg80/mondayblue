@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="text-left m-3">
                <h3>Edit Post</h3>
            </div>
            <div class="col-12">
                {!! Form::open(['action' => ['PostsController@update', $post -> id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    {{-- <div class="form-group">
                        {{Form::label('category','Category')}}
                        {{Form::text('category',$post->category, ['class' => 'form-control', 'placeholder' => 'Category'])}}
                    </div> --}}
                    <div class="form-group">
                        {{ Form::label('category', 'Category : ') }}
                        {{ Form::select('category', [$post->category->id => $post->category->name] + $categories , $post->category->name,['class' => 'form-control'])}}   
                        {{-- {{Form::select('gender',['male' => 'Male', 'female' => 'Female'], old('gender', $employee->gender),
                        ['class' => 'form-control', 'placeholder' => 'Select Gender...'])}}                      --}}
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Title')}}
                        {{Form::text('title',$post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('description','description')}}
                        {{Form::text('description',$post->description, ['class' => 'form-control', 'placeholder' => 'Description'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('body','Body')}}
                        {{Form::textarea('body',$post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('price','Price USD')}}
                        {{Form::text('price',$post->price, ['class' => 'form-control', 'placeholder' => 'Price USD'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('priceunit','Price Unit')}}
                        {{Form::text('priceunit',$post->priceunit, ['class' => 'form-control', 'placeholder' => 'Job / Project / Campaign / App'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('delivery','Delivery')}}
                        {{Form::text('delivery',$post->delivery, ['class' => 'form-control', 'placeholder' => 'number of Delivery by day'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('deliveryunit','Delivery Unit')}}
                        {{Form::text('deliveryunit',$post->deliveryunit, ['class' => 'form-control', 'placeholder' => 'Day / Days'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('cover_image','Cover Image : ')}}
                        {{Form::file('cover_image')}}
                    </div>
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>            
        </div>
    </div>  

@endsection