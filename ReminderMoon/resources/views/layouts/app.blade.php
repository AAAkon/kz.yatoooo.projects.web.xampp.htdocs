<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
    <title>{{ config('app.name') }}</title>
     <script src="{{ asset('js/app.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="{{ asset('js/fabric.min.js') }}"></script>
  <script src="{{ asset('js/sprite.class.js') }}"></script>
  <script src="{{ asset('js/canvas-toBlob.js') }}"></script>
  <script src="{{ asset('js/FileSaver.min.js') }}"></script>
  <script src="{{ asset('js/angular.min.js') }}"></script>
{{--   <script src="{{ asset('js/ckeditor.js') }}"></script> --}}
{{--    <script src="{{ asset('js/jHtmlArea-0.8.js') }}"></script> --}}
   <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>

{{--    <link rel="Stylesheet" type="text/css" href="{{ asset('css/jHtmlArea.css') }}" /> --}}
    <!-- Scripts -->
    @include('layouts.nicedit')
   
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="height: 70px;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                     @guest
                      <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('images/g.png') }} " width="70" height="70" style="margin-top: -15px;" alt="Render moon">
                      </a>
                      @else
                      <a class="navbar-brand" href="{{ url('/home') }}">
                        <img src="{{ asset('images/g.png') }} " width="70" height="70" style="margin-top: -15px;" alt="Render moon">
                      </a>
                      @endguest
                   
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" style=" list-style-type: none;  margin: 0; padding: 10px;   overflow: hidden;">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            <li> <a href="{{ url('/api/reklama/another/HuQu') }}"> Our partners</a>    </li>
                        @else
                          
                            <li style="float: right;">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  class="effect-5">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            <li style="float: right;">
                                <a href="/user" role="button" aria-expanded="false" class="effect-5" >
                                    {{ Auth::user()->name }}
                                </a>
                            </li>      
                       
                                
                           
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

<style type="text/css">
a, a > span {
  position: relative;
  color: inherit;
  text-decoration: none;
  line-height: 24px;
}
a:before, a > span:before, a:after, a > span:after {
  content: '';
  position: absolute;
  transition: transform 0.5s ease;
}
    .effect-5 {
  display: inline-block;
  overflow: hidden;
}
.effect-5:before, .effect-5:after {
  right: 0;
  bottom: 0;
  background: #0883a4;
}
.effect-5:before {
  width: 100%;
  height: 2px;
  transform: translateX(-100%);
}
.effect-5:after {
  width: 2px;
  height: 100%;
  transform: translateY(100%);
}
.effect-5 > span {
  display: block;
  padding: 10px;
}
.effect-5 > span:before, .effect-5 > span:after {
  left: 0;
  top: 0;
  background: #0883a4;
}
.effect-5 > span:before {
  width: 100%;
  height: 2px;
  transform: translateX(100%);
}
.effect-5 > span:after {
  width: 2px;
  height: 100%;
  transform: translateY(-100%);
}
.effect-5:hover:before, .effect-5:hover:after, .effect-5:hover > span:before, .effect-5:hover > span:after {
  transform: translate(0, 0);
}

</style>

</body>
</html>
