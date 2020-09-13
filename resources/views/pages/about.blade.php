
@extends('layouts.app')

@section('content')
    
    <!-- <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Find & Hire Expert Freelancers</h1>
        <p class="lead my-3">Work with the best freelance talent from around the world on our secure,
            flexible and cost-effective platform.</p>
        <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
    </div> -->
    <div id="carouselExampleIndicators" class="mt-5 carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
        <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                        <div class="img" style="height:300px;background-color:#7F8C8D"><img class="d-block img-fluid"  >
                                <div class="container mt-5">
                                        <h1>Example 1.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                </div>
                        </div>
                </div>

                <div class="carousel-item">
                        <div class="img" style="height:300px;background-color:#F5B041"><img class="d-block img-fluid"  >
                                <div class="container mt-5">
                                        <h1>Example 2.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                </div>
                        </div>
                </div>

                <div class="carousel-item">
                        <div class="img" style="height:300px;background-color:#5DADE2"><img class="d-block img-fluid"  >
                                <div class="container mt-5">
                                        <h1>Example 3.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                </div>
                        </div>
                </div>
        </div>

        
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
        </div>
        
        <div class="content">
                
                <div class="container flex-top position-ref full-height">
                        <div class="row">
                                <div class="col-xl-4 d-flex justify-content-left text-left mt-5">
                                        <div class="img"><img src="img/Company_logo.png" ></div>
                                </div>
                                <div class="col-xl-8 d-flex justify-content-left text-left mt-5">    
                                        <div class="row ">
                                                <h1>Company Overview</h1>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolore maiores adipisci cum quidem. Corrupti error impedit, quo pariatur hic in excepturi, enim voluptate commodi eligendi doloremque animi dolores libero?</p>               
                                        </div>
                                </div>   
                        </div>
                </div>
        </div>
    
@endsection