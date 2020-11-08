@extends('layouts.app')

@section('content')
<style>
    .cover-image-thumbnail{
        height: 250px;
        width: 250px;
    }
</style>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 text-center">
                <h3>Edit User</h3>
            </div>
            <div class="col-lg-4 col-xm-12 text-center">                    
                {!! Form::open(['action' => ['CategoriesController@userupdate', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data','onsubmit' => 'return confirm("Are You Sure ?")']) !!}
                <img src="/storage/cover_images/{{ $user->cover_image }} " class="card-img-top rounded-circle cover-image-thumbnail" alt="...">                                                    
            </div>
            <div class="col-lg-8 col-xm-12">
                <div class="form-group">
                    {{Form::label('name','Name')}}
                    {{Form::text('name',$user->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                </div>                     
                <div class="form-group">
                    {{Form::label('role','Role : ')}}
                    {{Form::select('role', [$user->role] + ['user' => 'user', 'admin' => 'admin'], $user->role,['class' => 'form-control'])}}
                </div>                
                <div class="form-group">
                    {{Form::label('activestatus','Active : ')}}
                    {{Form::select('activestatus', [$user->activestatus] + ['yes' => 'yes', 'no' => 'no'], $user->activestatus,['class' => 'form-control'])}}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
                {!! Form::close() !!}   
            </div>                                 
        </div>
    </div>  

@endsection