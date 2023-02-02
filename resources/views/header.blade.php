<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{url('/')}}" class="logo">
                        <img src="assets/images/klassy-logo.png" align="klassy cafe html template">

                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#about">About</a></li>
                        <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                        <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                        <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>

                        @auth
                            <li class="scroll-to-section"><a
                                    href="{{url('/showCart',\Illuminate\Support\Facades\Auth::user()->id)}}">Cart[{{$count}}]</a>
                            </li>
                        @endauth

                        <li>
                            @if (Route::has('login'))
                                <div class="hidden ">
                        @auth
                            <li class="submenu">
                                <a href="javascript:;">{{ Auth::user()->name }}</a>
                                <ul>
                                    <li>
                                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                            {{ __('Profile') }}
                                        </x-jet-dropdown-link>
                                    </li>
                                    <li>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}" >
                                            @csrf

                                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                                 @click.prevent="$root.submit();">
                                                {{ __('Log Out') }}
                                            </x-jet-dropdown-link>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            {{--                            <li>--}}
                            {{--                                <x-app-layout>--}}
                            {{--                                </x-app-layout>--}}
                            {{--                            </li>--}}
                        @else
                            <li>
                                <a href="{{ route('login') }}"
                                   class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}"
                                       class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                </li>
                @endif
                @endauth
            </div>
            @endif
            </li>
            </ul>
            <!-- ***** Menu End ***** -->
            </nav>
        </div>
    </div>
    </div>
</header>
