@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="text-left m-3">
                <h3>Edit Profile</h3>
            </div>
            <div class="col-12">
                {!! Form::open(['action' => ['ProfileController@update', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    {{-- <div class="form-group">
                        {{Form::label('category','Category')}}
                        {{Form::text('category',$post->category, ['class' => 'form-control', 'placeholder' => 'Category'])}}
                    </div> --}}
                    <div class="form-group">
                        {{Form::label('name','Name')}}
                        {{Form::text('name',$user->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('contactno','Contact Number')}}
                        {{Form::text('contactno',$user->contactno, ['class' => 'form-control', 'placeholder' => 'Contact'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('address1','Address 1')}}
                        {{Form::textarea('address1',$user->address1, ['class' => 'form-control', 'placeholder' => 'Number, street name'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('address2','Address 2')}}
                        {{Form::textarea('address2',$user->address2, ['class' => 'form-control', 'placeholder' => 'Prestint'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('postcode','Post Code')}}
                        {{Form::text('postcode',$user->postcode, ['class' => 'form-control', 'placeholder' => 'Post Code'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('city','City')}}
                        {{Form::text('city',$user->city, ['class' => 'form-control', 'placeholder' => 'City Name'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('country','Country')}}
                        {{Form::text('country',$user->country, ['class' => 'form-control', 'placeholder' => 'Country Name'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('bankname','Bank Name')}}
                        {{Form::text('bankname',$user->bankname, ['class' => 'form-control', 'placeholder' => 'Bank Name'])}}
                    </div> 
                    <div class="form-group">
                        {{Form::label('bankaccount','Bank account number')}}
                        {{Form::text('bankaccount',$user->bankaccount, ['class' => 'form-control', 'placeholder' => 'Bank Account Number'])}}
                    </div>  
                    <div class="form-group">
                        {{Form::label('bankswiftcode','Bank Swift Code')}}
                        {{Form::text('bankswiftcode',$user->bankswiftcode, ['class' => 'form-control', 'placeholder' => 'Bank Swift Code'])}}
                    </div>  
                    <div class="form-group">
                        {{Form::label('bankaddress','Bank Address')}}
                        {{Form::text('bankaddress',$user->bankaddress, ['class' => 'form-control', 'placeholder' => 'Bank Address'])}}
                    </div>                     
                    <div class="form-group">
                        {{Form::label('cover_image','Change Profile Image : ')}}
                        {{Form::file('cover_image')}}
                    </div>
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>            
        </div>
    </div>  

@endsection