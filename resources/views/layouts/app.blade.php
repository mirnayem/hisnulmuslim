<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'DuaZikr-Homepage')</title>
  
    <!-- Scripts -->
   
    
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('css/style.css')}} ">

    @yield('css')
</head>
<body id="duazikr">
    <div id="app">
    
        <nav class="navbar navbar-expand-sm navbar-light" id="duazikrnavbar">
            <div class="container">
                <a  class="navbar-brand" href="{{ url('/') }}">
                    <i class="fa fa-home fa-2x " aria-hidden="true"></i> 
                </a>
                <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link navtext" href="{{ route('allduas') }}">সব দো‘আ</a>
                        </li>
                        @if(Auth::check())
                        @if(Auth::user()->role_id == 1)
                        <li class="nav-item">
                            <a class="nav-link navtext" href="{{ route('admin') }}">Admin</a>
                        </li>
                        @endif

                        @endif
                    </ul>

                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <form  method="GET" action=" {{url('/search')}} ">
                                @csrf
                                <div id="searchbox">
                                    <input  type="text" class="form-control" id="add" name="search"
                                    placeholder="এখানে খুঁজুন . . . .">
                                </div>
                        
                            </form>
                        </li>
                    </ul>
                   
                    
                   
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                       
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link navtext" href="{{ route('login') }}">{{ __('লগইন') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link navtext" href="{{ route('register') }}">{{ __('রেজিস্টার') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-secondary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                        <li class="nav-item">
                            <form  method="GET" action=" {{url('/search')}} ">
                                @csrf
                                <div id="searchboxsmall">
                                    <input  type="text"  class="form-control" name="search"
                                    placeholder="এখানে খুঁজুন">
                                </div>
                        
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <div id="duazikrcontent">
              @yield('content') 
            </div>
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @yield('js')
   

</body>
<script>
   jQuery(function($) {
     var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
     $('#tagsidebar a').each(function() {
      if (this.href === path) {
       $(this).children('.tagbox').addClass('active');
      }
     });
    

  
    });


    AOS.init();
</script>

</html>
