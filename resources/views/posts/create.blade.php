@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card border border-dark">
            <div class="card-header">
                    <h3>Create Post</h3>
            </div>            
            
            {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="card-body row">    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xm-12">    
                        <div class="form-group">
                                {{ Form::label('category', 'Category : ') }}
                                {{ Form::select('category', [null=>'Please Select'] + $categories ,'',['class' => 'form-control'])}}
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xm-12">
                        <div class="form-group">
                            {{Form::label('title','Title : ')}}
                            {{Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            {{Form::label('description','Description : ')}}
                            {{Form::text('description','', ['class' => 'form-control', 'placeholder' => 'Description'])}}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            {{Form::label('body','Body : ')}}
                            {{Form::textarea('body','', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text'])}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                        <div class="form-group">
                            {{Form::label('price','Price USD : ')}}
                            {{Form::text('price','', ['class' => 'form-control', 'placeholder' => 'Price USD'])}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                        <div class="form-group">
                            {{Form::label('puom','Price UOM : ')}}
                            {{Form::text('puom','', ['class' => 'form-control', 'placeholder' => 'Job / Project / Month / Day'])}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                        <div class="form-group">
                            {{Form::label('quantity','Quantity : ')}}
                            {{Form::text('quantity','', ['class' => 'form-control', 'placeholder' => 'number of person / job / project'])}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                        <div class="form-group">
                            {{Form::label('quom','Quantity UOM : ')}}
                            {{Form::text('quom','', ['class' => 'form-control', 'placeholder' => 'Person / Job / Project/ Vacancy'])}}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            {{Form::label('cover_image','Cover Image : ')}}
                            {{Form::file('cover_image')}}
                        </div>
                    </div>
                        {{Form::submit('Submit',['class' =>'btn btn-primary' ])}}
                </div> 
            {!! Form::close() !!}
                       
        </div>
    </div>  

@endsection