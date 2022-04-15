

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Course Allocation System</title>
   
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{ asset('css/slicknav.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
        <link rel="stylesheet" href="{{ asset('css/homepage.css')}}">
        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <section class="intro"  id="home">
            <div class="menu-bar menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div id="logo">     
                                <a href=""><img src="{{asset('assets/img/logo.png')}}" alt="" title=""  height="23px" style="float: left;"/></a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ul class="list-unstyled" id="main-menu">
                                <li><a class="active" href="#home">Home</a></li>
                                
                                <li><a href="#contact">Contact</a></li>
                                @if (Route::has('login'))
                                    @auth
                                    <li>
                                        <a href="{{ url('/home') }}" class="">Dashboard</a>
                                    </li>
                                    @else
                                    <li>
                                        <a href="{{ route('login') }}" class="">Log in</a>
                                    </li>
                                        @if (Route::has('register'))
                                    <li>
                                            <a href="{{ route('register') }}" class="">Register</a>
                                    </li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu Ends here -->
            <div class="intro-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 intro-image">
                            <img src="{{ asset('assets/img/hand.png')}}" alt="" />
                        </div>
                        <div class="col-md-8 col-sm-6 col-xs-12 intro-texts">
                            <h1>Welcome to Our Course Allocation System</h1>
                            <span>This system provides a well structured and designed interface to help departments allocate courses smoothly</span>
                            <ul class="list-unstyled">
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">About App</a></li>
                                <li><a href="#">Subscribe</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Intro Section Ends -->
            
        </div>
    </body>
    <script src=" {{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
     <script>window.jQuery || document.write('<script src=" asset("js/vendor/jquery-1.11.3.min.js")"><\/script>')</script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</html>
