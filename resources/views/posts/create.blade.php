@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card border border-dark">
            <div class="card-header">
                    <h3>Create Post</h3>
            </div>            
            
            {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data','onsubmit' => 'return confirm("Are You Sure ?")']) !!}
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
                            {{Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Specify Job or service'])}}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            {{Form::label('description','Description : ')}}
                            {{Form::text('description','', ['class' => 'form-control', 'placeholder' => 'I will do ......'])}}
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
                            {{Form::label('price','USD : ')}}
                            {{Form::text('price','', ['class' => 'form-control', 'placeholder' => 'Price'])}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                        <div class="form-group">
                            {{Form::label('priceunit','Price UOM : ')}}
                            {{Form::text('priceunit','', ['class' => 'form-control', 'placeholder' => 'Job / Project / Campaign / App'])}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                        <div class="form-group">
                            {{Form::label('delivery','Delivery : ')}}
                            {{Form::text('delivery','', ['class' => 'form-control', 'placeholder' => 'number of Delivery by day'])}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                        <div class="form-group">
                            {{Form::label('deliveryunit','Delivery Unit : ')}}
                            {{Form::text('deliveryunit','', ['class' => 'form-control', 'placeholder' => 'Day / Days'])}}
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            {{Form::label('activestatus','Active : ')}}
                            {{Form::select('activestatus',  ['yes' => 'yes', 'no' => 'no'], 'yes',['class' => 'form-control'])}}
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