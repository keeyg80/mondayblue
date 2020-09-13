@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="text-left m-3">
                <h3>Edit Post</h3>
            </div>
            <div class="col-12">
                {!! Form::open(['action' => ['PostsController@update', $post -> id], 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('category','Category')}}
                        {{Form::text('category',$post->category, ['class' => 'form-control', 'placeholder' => 'Category'])}}
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
                        {{Form::label('puom','Price UOM')}}
                        {{Form::text('puom',$post->puom, ['class' => 'form-control', 'placeholder' => 'Job / Project / Month / Day'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('quantity','Quantity')}}
                        {{Form::text('quantity',$post->quantity, ['class' => 'form-control', 'placeholder' => 'number of person / job / project'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('quom','Quantity UOM')}}
                        {{Form::text('quom',$post->quom, ['class' => 'form-control', 'placeholder' => 'Person / Job / Project/ Vacancy'])}}
                    </div>
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>            
        </div>
    </div>  

@endsection