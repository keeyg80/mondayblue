@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card border border-primary">
            <div class="card-header">
                    <h3>Create Category</h3>
            </div>            
            
            {!! Form::open(['action' => 'CategoriesController@categorystore', 'method' => 'POST', 'enctype' => 'multipart/form-data','onsubmit' => 'return confirm("Are You Sure ?")']) !!}
                <div class="card-body row">    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xm-12">
                        <div class="form-group">
                            {{Form::label('name','Category Name : ')}}
                            {{Form::text('name','', ['class' => 'form-control', 'placeholder' => 'Give an attractive Category name'])}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            {{Form::label('imagewidth','Image Width :')}}
                            {{Form::select('imagewidth',  ['3' => '3', '4' => '4', '6' => '6', '12' => '12'], '4',['class' => 'form-control'])}}
                        </div>
                    </div>                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            {{Form::label('sequence','Sequence :')}}
                            {{Form::text('sequence', '', ['class' => 'form-control','placeholder'=>'Sequence Numbers 01 02 .... 10'])}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            {{Form::label('activestatus','Active : ')}}
                            {{Form::select('activestatus',  ['yes' => 'yes', 'no' => 'no'], 'yes',['class' => 'form-control'])}}
                        </div>
                    </div>
                    <div class="col-lg-12">
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