@extends('layouts.app')

@section('content')
    <style>
        
        .inner {
            overflow: hidden;

        }

        .inner img {
            transition: all 1.5s ease;
        }

        .inner:hover img {
            transform: scale(1.5);
        }

        .image-resize {
            height: 500px;
            object-fit: cover;
            object-position: center center;
        }
        .cover-image-thumbnail{
            height: 100px;
            width: 100px;
        }
        .reviewer-image-thumbnail{
            height: 40px;
            width: 40px;
        }
    </style>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="card border-primary">
                    <div class="inner text-center">
                        <img class="image-resize" src="/storage/cover_images/{{ $post->cover_image }}" alt="cover image">
                    </div>
                    <div class="card-header">
                        <h1 class="text-primary">{{ $post->title }}</h1><small>posted on {{ $post->created_at }} </small> 
                        @if (count($post->reviews) > 0)
                            <small class="float-right"><span style="color: yellow; text-shadow: 0px 0px 2px #000000;">★</span> {{number_format((float)(($reviews->sum('rating'))/(count($reviews))), 1, '.', '')}} / 5</small>
                        @endif
                    </div>
                    <div class="card-body">
                        <h2 class="card-title mb-4">{{ $post->description }}</h2>
                        <p class="card-text">{!! $post->body !!}</p>
                                               
                        @if (!Auth::guest())
                            @if (Auth::user()->id == $post->user_id)
                                <div class="dflex">
                                    <div class="row float-right m-3">
                                        <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-primary mr-2"> Edit </a>
                                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST',
                                        'class' => 'text-right','onsubmit' => 'return confirm("Are You Sure You Want To DELETE ?")']) !!}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger']) }}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
                @if (count($reviews) > 0)
                <div class="card border-primary mt-3">
                    <div class="card-header">
                        <h4>Ratings and Reviews     <span class="badge badge-pill badge-primary">{{(count($reviews))}}</span></h4>
                    </div>
                    <div class="card-body">
                        @foreach ($reviews as $review)                        
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">                                                                                    
                                            <p class="bg-light p-3 rounded">{{ $review->message }}</p> 
                                            <img src="/storage/cover_images/{{ $review->user->cover_image }} " class="card-img-top rounded-circle reviewer-image-thumbnail mr-3" alt="...">
                                            <font class="h3">
                                                @for ($i=1; $i<=($review->rating); $i++)
                                                    <span style="color: yellow; text-shadow: 0px 0px 3px #000000;">★</span>
                                                @endfor 
                                            </font>
                                            <p> 
                                                <small>Reviewed by {{ $review->user->name }}  on {{ $review->created_at }}</small>                                                 
                                            </p>
                                        </div>
                                    </div>        
                                </div>
                            </div>
                        @endforeach                        
                    </div>
                </div>
                @endif
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card border-primary">
                    <div class="card-header">
                        <h4>USD {{ $post->price }} / <small>{{ $post->priceunit }}</small></h4>
                    </div>
                    <div class="card-body text-center">
                        <img src="/storage/cover_images/{{ $post->user->cover_image }} " class="card-img-top rounded-circle cover-image-thumbnail" alt="...">
                        <p class="h4">
                            Hi, I am {{ $post->user->name }}
                            <div class="h6 text-left text-mute">Contact me thru {{ $post->user->email }}</div>
                            <h6 class="text-left">I will complete in {{ $post->delivery }} {{ $post->deliveryunit }}</h6>
                        </p>
                    </div>
                   
                    <div class="card-footer" >
                        @if (!Auth::guest())
                            @if(($post->user->bankaccount) != '')
                                <a href="#" class="btn btn-success btn-block"> Order Now </a>
                            @else
                                <a href="#" class="btn btn-primary btn-block"> Order will be available soon </a>
                            @endif 
                        @endif                                                
                    </div>                                    
                </div>
                @if (!Auth::guest())
                @if (Auth::user()->id != $post->user_id)
                <div id="accordion">
                    <div class="card border-primary mt-3" id="contactForm">
                            <div class="card-header" id="headingcontact">
                                <h5 class="mb-0">
                                <button class="btn btn-light btn-block collapsed" data-toggle="collapse" data-target="#collapsecontact" aria-expanded="false" aria-controls="collapsecontact">
                                    Email {{ $post->user->name }}
                                </button>
                                </h5>
                            </div>
                            <div id="collapsecontact" class="collapse" aria-labelledby="headingcontact" data-parent="#accordion">
                                {{-- {!! Form::open(['action' => ['ReviewsController@store'], 'method' => 'POST', 'enctype' => 'multipart/form-data','onsubmit' => 'return confirm("Are You Sure post review ? no change or delete after this.")']) !!} --}}
                                <div class="card-body">
                                    <div class="form-group">
                                        {{Form::label('sender','Sender :')}}  
                                        {{Form::text('sender',Auth::user()->name, ['class' => 'form-control', 'readonly' => 'true'])}}
                                    </div>   
                                    <div class="form-group">
                                        {{Form::label('sender_email','Sender email :')}}  
                                        {{Form::text('sender_email',Auth::user()->email, ['class' => 'form-control', 'readonly' => 'true'])}}
                                    </div>     
                                    <div class="form-group">
                                        {{Form::label('subject','Mail Subject :')}}  
                                        {{Form::text('subject','', ['class' => 'form-control'])}}
                                    </div>                   
                                    <div class="form-group">
                                        {{Form::label('message','Message : ')}}
                                        {{Form::textarea('message','', ['class' => 'form-control', 'placeholder' => ''])}}
                                    </div>                      
                                    <div class="form-group">
                                        {{Form::hidden('post_id',$post->id)}}
                                    </div>                               
                                </div>
                                <div class="card-footer">
                                    {{Form::submit('Submit',['class' =>'btn btn-success btn-block' ])}}
                                </div>
                                {{-- {!! Form::close() !!}   --}}
                            </div> 
                        </div>
                    </div>
                    <div class="card border-primary mt-3" id="reviewForm">
                        <div class="card-header" id="headingreview">
                            <h5 class="mb-0">
                              <button class="btn btn-light btn-block collapsed" data-toggle="collapse" data-target="#collapsereview" aria-expanded="false" aria-controls="collapsereview">
                                Review
                              </button>
                            </h5>
                        </div>
                        <div id="collapsereview" class="collapse" aria-labelledby="headingreview" data-parent="#accordion">
                            {!! Form::open(['action' => ['ReviewsController@store'], 'method' => 'POST', 'enctype' => 'multipart/form-data','onsubmit' => 'return confirm("Are You Sure post review ? no change or delete after this.")']) !!}
                            <div class="card-body">
                                <div class="form-group">
                                    {{Form::label('rating','Rating :')}}  
                                    <div class="row">                    
                                        @for ($i=1; $i<=5; $i++)
                                            <div class="col-8">
                                                {{ Form::radio('rating', $i , false) }}
                                                @for ($j=1; $j<=$i; $j++)
                                                    <span style="color: yellow; text-shadow: 0px 0px 2px #000000;">★</span>
                                                @endfor
                                            </div>
                                        @endfor
                                    </div>
                                </div>                     
                                <div class="form-group">
                                    {{Form::label('message','Review : ')}}
                                    {{Form::textarea('message','', ['class' => 'form-control', 'placeholder' => ''])}}
                                </div>                      
                                <div class="form-group">
                                    {{Form::hidden('post_id',$post->id)}}
                                </div>                             
                            </div>
                            <div class="card-footer">
                                {{Form::submit('Submit',['class' =>'btn btn-primary btn-block' ])}}
                            </div>
                            {!! Form::close() !!}  
                        </div> 
                    </div>
                </div>
                @endif
                @endif
            </div>
        </div>
    </div>

@endsection
