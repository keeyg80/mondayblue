@extends('layouts.app')

@section('content')
<style>
    .cover-image-thumbnail{
        height: 120px;
        width: 120px;
    }
    
</style>
<div class="container mt-2">
    <div class="card">
        <div class="card-header">Users</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            
            @if (count($users) > 0)
            <div class="row">
            @foreach ($users as $user)
                <div class="col-lg-4 col-sm-12 mb-3">
                  <div class="card h-100 text-white @if(($user->role) == 'user') bg-primary @else bg-success @endif">
                    <div class="card-header text-center">
                      <img src="/storage/cover_images/{{ $user->cover_image }} " class="card-img-top rounded-circle cover-image-thumbnail text-center" alt="...">
                    </div>
                    <div class="card-body bg-light text-dark">
                      <h4 class="card-title text-center">{{$user->name}}</h4>
                      <p class="card-text">
                        <small class="text-muted">Joined {{$user->created_at}}</small>
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6ZM20 6L12 11L4 6H20ZM12 13L4 8V18H20V8L12 13Z" fill="#2F80ED"/>
                                </svg>
                                {{$user->email}}
                        </div>
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4 3H7.5C8.05 3 8.5 3.45 8.5 4C8.5 5.25 8.7 6.45 9.07 7.57C9.18 7.92 9.1 8.31 8.82 8.59L6.62 10.79C8.06 13.62 10.38 15.93 13.21 17.38L15.41 15.18C15.61 14.99 15.86 14.89 16.12 14.89C16.22 14.89 16.33 14.9 16.43 14.94C17.55 15.31 18.76 15.51 20 15.51C20.55 15.51 21 15.96 21 16.51V20C21 20.55 20.55 21 20 21C10.61 21 3 13.39 3 4C3 3.45 3.45 3 4 3ZM6.54 5C6.6 5.89 6.75 6.76 6.99 7.59L5.79 8.79C5.38 7.59 5.12 6.32 5.03 5H6.54ZM16.4 17.02C17.25 17.26 18.12 17.41 19 17.47V18.96C17.68 18.87 16.41 18.61 15.2 18.21L16.4 17.02Z" fill="#2F80ED"/>
                                </svg>
                                {{$user->contactno}}
                        </div>
                        <div>
                          Posts : 
                          <span class="badge badge-pill badge-primary">
                            {{(count($user->posts))}}
                          </span> 
                            <br>
                          Active : 
                            @if(($user->activestatus)=='yes') ✔ @else <strong class="text-danger h4">✘</strong> @endif     
                            <br>
                            <div>
                              <span>{{$user->bankname}}</span>
                              <br>
                              <span>
                                  {{$user->bankaccount}}<br>
                                  {{$user->bankswiftcode}}<br>
                                  {{$user->bankaddress}}
                              </span>
                            </div> 
                            <div>
                              <span>
                                  {{$user->address1}}<br>
                                  {{$user->address2}}<br>
                                  {{$user->postcode}}<br>
                              </span>
                              <span>{{$user->city}} {{$user->country}}</span>
                            </div>         
                        </div>
                      </p>
                    </div>
                    <div class="card-footer text-center">
                      <a href="/useredit/{{$user->id}}"> 
                        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M25.7523 4.375C25.3877 4.375 25.0085 4.52083 24.7315 4.79792L22.0627 7.46667L27.5315 12.9354L30.2002 10.2667C30.769 9.69792 30.769 8.77917 30.2002 8.21042L26.7877 4.79792C26.496 4.50625 26.1315 4.375 25.7523 4.375ZM20.5024 13.1542L21.844 14.4958L8.63152 27.7083H7.28986V26.3667L20.5024 13.1542ZM4.37317 25.1562L20.5023 9.02707L25.9711 14.4958L9.84192 30.625H4.37317V25.1562Z" fill="#F2F2F2"/>
                        </svg>                                
                      </a>
                    </div>
                  </div>
                </div>
            @endforeach
            </div>
            @else
            <div class="alert alert-dismissible alert-primary">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4 class="alert-heading">No User found!</h4>
                <strong>Welcome to MondayBlue!</strong> Cannot be. How did you access to here?
            </div>       
            @endif            
        </div>        
        <div>
          {{$users->links()}}
        </div>
    </div>
</div>
@endsection
