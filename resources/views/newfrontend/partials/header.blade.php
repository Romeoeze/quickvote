<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>QuickVote| Online Voting Platform for Paid & Free Contests</title>

    <meta name="author" content="toastnigeria.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('quickvote/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('quickvote/assets/css/custommainpage.css') }}">
    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('quickvote/assets/css/responsive.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous"></script>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('quickvote/assets/icon/Favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('quickvote/assets/icon/Favicon.png') }}">
    <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    @yield('css')


</head>

<body class="body header-fixed is_light">
    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <div id="page" class="clearfix">

            <div class="topbar">
                <div class="container">
                    <div class="topbar-inner flex">
                        <div class="menu-options flex">

                        </div>
                        <div class="topbar-right flex">
                            {{-- <span>New Product Coming Soon</span> --}}

                            <ul class="socical-icon flex">
                                <li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <header id="header_main" class="header_1 js-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
                            <div id="site-header-inner" class="flex">
                                <div id="site-logo" class="clearfix">
                                    <div id="site-logo-inner" class="customLogo">
                                        <a href="{{ route('homepage.show') }}" class="main-logo">
                                            <img src="{{ asset('uploads/images/logo.png') }}" width="200px"
                                                alt="Quickvote">

                                        </a>


                                    </div>
                                </div>


                                <form class="form-search" method="GET" action="{{ route('contest.loadsearch') }}">
                                    <input type="text" name="search" placeholder="Search Contests"
                                        value="{{ request()->query('search') }}">
                                    <button><i class="far fa-search"></i></button>
                                </form>

                                @include('newfrontend.partials.menu')
                                <div class="button-connect-wallet">
                                    <a href="{{ route('contest.create') }}" class="sc-button wallet  style-2">
                                        <img src="{{ URL::asset('quickvote/assets/images/icon/login.png') }}"
                                            alt="icon">
                                        <span>Create Contest</span>
                                    </a>
                                </div>

                                {{-- <div class="mode_switcher">
                                <h6><span>Dark Mode</span> <strong>Activate</strong></h6>
                                <a href="#" class="light d-flex align-items-center">
                                    <img src="{{ asset('quickvote/assets/images/icon/sun.png')}}" alt="">
                                </a>
                                <a href="#" class="dark d-flex align-items-center is_active">
                                    <img id="moon_dark" src="{{ asset('quickvote/assets/images/icon/moon.png')}}" alt="">
                                </a>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </header>
