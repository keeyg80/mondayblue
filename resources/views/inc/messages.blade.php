
    <div class="row align-content-center"> 
        @if(count($errors) > 0)
            @foreach ($errors -> all() as $error)
                <div class="col-12 alert alert-danger alert-dismissible">
                    {{$error}}
                </div>
            @endforeach
        @endif

        @if(session('success'))
                <div class="col-12 alert alert-success">
                    {{session('success')}}
                </div>
        @endif

        @if(session('error'))
                <div class="col-12 alert alert-danger">
                    {{session('error')}}
                </div>
        @endif
    </div>


