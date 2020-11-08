@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="text-left m-3">
                <h3>Edit Category</h3>
            </div>
            <div class="col-12">
                {!! Form::open(['action' => ['CategoriesController@categoryupdate', $category->id], 'method' => 'POST', 'enctype' => 'multipart/form-data','onsubmit' => 'return confirm("Are You Sure ?")']) !!}
                    
                    <img src="/storage/cover_images/{{ $category->cover_image }} " style="height:150px;width:200px;" class="card-img-top rounded cover-image-thumbnail" alt="...">    
                    <div class="form-group">
                        {{Form::label('name','Category Name')}}
                        {{Form::text('name',$category->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('imagewidth','Image Width :')}}
                        {{Form::select('imagewidth',  [$category->imagewidth] + ['3' => '3', '4' => '4', '6' => '6', '12' => '12'], $category->imagewidth,['class' => 'form-control'])}}
                    </div>  
                    <div class="form-group">
                        {{Form::label('sequence','Sequence :')}}
                        {{Form::text('sequence',  $category->sequence , ['class' => 'form-control','placeholder'=>'Sequence Numbers 01 02 .... 10'])}}
                    </div>                   
                    <div class="form-group">
                        {{Form::label('activestatus','Active : ')}}
                        {{Form::select('activestatus', [$category->activestatus] + ['yes' => 'yes', 'no' => 'no'], $category->activestatus,['class' => 'form-control'])}}
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