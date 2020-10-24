
<!-- <nav class="navbar site-header sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#" aria-label="Product">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="/">Home</a>
        <a class="py-2 d-none d-md-inline-block" href="/about">About Us</a>
        <a class="py-2 d-none d-md-inline-block" href="/contact">Contact Us</a>
    </div>
</nav> -->

<!-- Navigation -->
<style>
    /* .bg-dark{
        background:#fff !important;
        transition: 0.75s ease;
    }
    .bg-dark.scrolledtrans{
        background:transparent !important;
    }
    .bg-dark.scrolledback{
        background:transparent !important;
    } */
</style>
<script>
    // $(window).scroll(function(){
    //     $('nav').toggleClass('scrolled',$(this).scrollTop() > 450);
    // });
    /* $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
        $('nav').toggleClass('scrolledtrans',
            //add 'light-mode' class when div position match or exceeds else remove the 'light-mode' class.
            scroll >= $('.jumbotronbackground').offset().top
        );
    });

    //trigger the scroll
    $(window).scroll();//ensure if you're in current position when page is refreshed */
</script>


<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm static-top sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'MondayBlue') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/posts">Posts</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/contact">Contact Us</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/carouselsitem">Carousels Item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/cards">Cards</a>
                </li>--}}
                
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/posts/create">Create Post</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>