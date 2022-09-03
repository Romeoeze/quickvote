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

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('quickvote/assets/css/style.css')}}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('quickvote/assets/css/responsive.css')}}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('quickvote/assets/icon/Favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('quickvote/assets/icon/Favicon.png')}}">
    

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
                           
                                <a href=""><button class="btn btn-success mr-5">Log In</button></a>
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
                                    <div id="site-logo-inner">
                                        <a href="index.html" rel="home" class="main-logo">
                                            <img id="logo_footer" src="{{ asset('quickvote/assets/images/logo/logo_dark.png')}}" alt="Quickvote"
                                            width="151" height="45" data-retina="{{ asset('quickvote/assets/images/logo/logo.png')}}"
                                            data-width="151" data-height="45">
                                            
                                        </a>
                                    </div>
                                </div>
                                <form class="form-search">
                                    <input type="text" placeholder="Search Contests">
                                    <button><i class="far fa-search"></i></button>
                                </form>

                                <div id="site-menu">
                                    <nav id="main-nav" class="main-nav">
                                        <ul id="menu-primary-menu" class="menu">
                                            <li class="menu-item menu-item-has-children  current-item">
                                                <a href="#">Home</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item current-item"><a href="index.html">Home 1</a>
                                                    </li>
                                                    <li class="menu-item"><a href="home2.html">Home 2</a></li>
                                                    <li class="menu-item"><a href="home-animation.html">Home Animation</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#">Explore</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="explore-1.html">Explore 1</a></li>
                                                    <li class="menu-item"><a href="explore-2.html">Explore 2</a></li>
                                                    <li class="menu-item"><a href="creator.html">Creator</a></li>
                                                    <li class="menu-item"><a href="item.html">Item </a></li>
                                                    <li class="menu-item"><a href="item-details.html">Item Details</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="menu-item menu-item-has-children ">
                                                <a href="#">Community</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item "><a href="blog.html">Blog</a></li>
                                                    <li class="menu-item"><a href="blog-details.html">Blog Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#">Pages</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="author.html">Authors</a></li>
                                                    <li class="menu-item"><a href="connect-wallet.html">Wallet
                                                            Connect</a></li>
                                                    <li class="menu-item"><a href="create-item.html">Create Item</a>
                                                    </li>
                                                    <li class="menu-item"><a href="login.html">Login</a></li>
                                                    <li class="menu-item"><a href="register.html">Register</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </nav><!-- /#main-nav -->
                                </div>
                                <div class="button-connect-wallet">
                                    <a href="connect-wallet.html" class="sc-button wallet  style-2">
                                        <img src="{{ asset('quickvote/assets/images/icon/login.png')}}" alt="icon">
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

            <section class="tf-slider">
                <div class="swiper-container slider ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slider-item">
                                <div class="overlay"></div>
                                <div class="slider-inner flex home-1">
                                    <div class="slider-content">
                                        <h1 class="heading"><span style="color:black; !important">Create & Vote</span> Your Favorite Contestants</h1>
                                        <p class="sub-heading">We help brands lanuch Paid or Free Voting Contests that drives growth 
                                         </p>
                                        <div class="button-slider">
                                            <a href="explore-1.html"
                                                class="sc-button btn-bordered-white style letter "><span>Explore
                                                    Live Contests</span></a>
                                            <a href="create-item.html"
                                                class="sc-button btn-bordered-white style file"><span>Create
                                                    Contest</span></a>
                                        </div>
                                    </div>
                                    <div class="slider-img">
                                        <div class="img-home-1"><img src="{{ asset('quickvote/assets/images/slider/img-slider-6.png')}}"
                                                alt="Image"></div>
                                    </div>
                                </div>
                            </div><!-- item-->
                        </div>
                        <div class="swiper-slide">
                            <div class="slider-item ">
                                <div class="overlay "></div>
                                <div class="container">
                                    <div class="slider-inner style-2 home-1 flex">
                                        <div class="slider-content">
                                            <h1 class="heading"><span style="color:black !important; font-size:26px !important; ">Ever Wished For</span>
                                                Transparent DigitalPolls?
                                                </h1>
                                            <p class="sub-heading">Create a poll Contest in minutes. Your voters can vote from any location on any device.</p>
                                            <div class="button-slider">
                                                <a href="#"
                                                    class="sc-button btn-bordered-white style letter "><span>Explore
                                                        More</span></a>
                                                <a href="create-item.html"
                                                    class="sc-button btn-bordered-white style file"><span>Create
                                                        Now</span></a>
                                            </div>
                                        </div>
                                        <div class="slider-img flex">
                                            <div class="img-left">
                                                <div class="img-1"><img src="{{ asset('quickvote/assets/images/slider/img-slider-5.jpg')}}"
                                                        alt="Image" width="200px"></div>
                                                

                                            </div>
                                            <div class="img-right">
                                                <img src="{{ asset('quickvote/assets/images/slider/img-slider-1.png')}}" alt="Image">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- item-->
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next btn-slide-next "></div>
                    <div class="swiper-button-prev btn-slide-prev"></div>
                </div>
            </section>

                
            
            
            
            <section class="tf-trendy-collections tf-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sc-heading style-2">
                                <div class="content-left">
                                    <div class="inner">
                                        <h3>Trendy Contests</h3>
                                        <p class="desc">Most popular contests on QucikVote </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="swiper-container trendy">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-2">
                                                <div class="product-img">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/contests/item-1.jpg')}}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>PANDA</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price flex">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-2">
                                                <div class="product-img">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/contests/item-2.jpg')}}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>PANDA</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price flex">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-2">
                                                <div class="product-img">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/contests/item-3.jpg')}}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>PANDA</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price flex">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-2">
                                                <div class="product-img">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/contests/item-4.jpg')}}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>PANDA</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price flex">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-2">
                                                <div class="product-img">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/contests/item-1.jpg')}}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>PANDA</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price flex">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-2">
                                                <div class="product-img">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/contests/item-2.jpg')}}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>PANDA</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price flex">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-2">
                                                <div class="product-img">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/contests/item-3.jpg')}}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>PANDA</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price flex">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-2">
                                                <div class="product-img">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/contests/item-4.jpg')}}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>PANDA</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price flex">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-2">
                                                <div class="product-img">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/contests/item-1.jpg')}}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>PANDA</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price flex">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-2">
                                                <div class="product-img">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/contests/item-2.jpg')}}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>PANDA</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price flex">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                </div>
                                <div class="swiper-button-next btn-slide-next "></div>
                                <div class="swiper-button-prev btn-slide-prev"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>






            <section class="tf-live-auctions tf-section bg-color-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sc-heading style-2 has-icon">
                                <div class="content-left">

                                    <div class="inner">
                                        <div class="group">
                                            <div class="icon"><i class="ripple"></i></div>
                                            <h3>Latest Contests</h3>
                                        </div>
                                        <p class="desc">Explore Latest contest by. brands all over nigeria. Win Exciting Prices</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="swiper-container live-auc">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item">
                                                <div class="product-img active">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/contests/item-1.jpg')}}" alt="Image">
                                                    <div class="countdown">
                                                        <span class="js-countdown" data-timer="516400"
                                                            data-labels=" :  ,  : , : , "></span>
                                                    </div>
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item">
                                                <div class="product-img ">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/contests/item-2.jpg')}}" alt="Image">
                                                    <div class="countdown">
                                                        <span class="js-countdown" data-timer="516400"
                                                            data-labels=" :  ,  : , : , "></span>
                                                    </div>
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item">
                                                <div class="product-img ">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/contests/item-3.jpg')}}" alt="Image">
                                                    <div class="countdown">
                                                        <span class="js-countdown" data-timer="516400"
                                                            data-labels=" :  ,  : , : , "></span>
                                                    </div>
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item">
                                                <div class="product-img ">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/contests/item-4.jpg')}}" alt="Image">
                                                    <div class="countdown">
                                                        <span class="js-countdown" data-timer="516400"
                                                            data-labels=" :  ,  : , : , "></span>
                                                    </div>
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item">
                                                <div class="product-img ">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/item-1.jpg')}}" alt="Image">
                                                    <div class="countdown">
                                                        <span class="js-countdown" data-timer="516400"
                                                            data-labels=" :  ,  : , : , "></span>
                                                    </div>
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item">
                                                <div class="product-img ">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/item-2.jpg')}}" alt="Image">
                                                    <div class="countdown">
                                                        <span class="js-countdown" data-timer="516400"
                                                            data-labels=" :  ,  : , : , "></span>
                                                    </div>
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item">
                                            <div class="sc-product-item">
                                                <div class="product-img ">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/item-3.jpg')}}" alt="Image">
                                                    <div class="countdown">
                                                        <span class="js-countdown" data-timer="516400"
                                                            data-labels=" :  ,  : , : , "></span>
                                                    </div>
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="title">Current Bid</div>
                                                        <div class="price">
                                                            <span>5.23 ETH</span>
                                                            <span>= $32.420</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next btn-slide-next "></div>
                                <div class="swiper-button-prev btn-slide-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="new-letter">
                <div class="container">
                    <div class="new-letter-inner style-2 flex">
                        <div class="new-letter-content">
                            <h3 class="heading">Search Contests</h3>
                            <p class="sub-heading">Which Contest are you looking for?

                            </p>
                        </div>
                        <div class="new-letter-img">
                            <div class="form-subcribe">
                                <form id="subscribe-form" action="#" method="GET" accept-charset="utf-8"
                                    class="form-submit">
                                    <input name="email" value="" class="email" type="text"
                                        placeholder="Enter the name of the Contest " required="">
                                    <button name="submit" type="submit" id="submit"
                                        class="sc-button style letter style-2"><span>Search Contests</span> </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>





            <section class="text-center p-0" style="margin-top: 120px;">
                <div class="container"><br> <br><h3 class="mt-10 mb-10">Why Quickvote?</h3><br> <br>
                  <div class="row align-items-center">
                      
                    <div class="col-xl-4 col-lg-4 mb-8 mb-lg-0">
                      <div class="px-4 py-7 rounded hover-translate" data-bg-color="rgba(19, 96, 239, 0.01)">
                        <div>
                          <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#f94f15" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                          </svg>
                        </div>
                        <h5 class="mt-4 mb-3">Transparency</h5>
                        <p class="desc">You get real time statistics and analytics of all poll Contests.</p>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6">
                      <div class="px-4 py-7 rounded hover-translate">
                        <div>
                          <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="orange" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                          </svg>
                        </div>
                        <h5 class="mt-4 mb-3">Easy To Use</h5>
                        <p class="desc">Creating a poll Contest is so easy, you will only take a few minutes</p>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 mt-6 mt-sm-0">
                      <div class="px-4 py-7 rounded hover-translate">
                        <div>
                          <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#f94f15" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-wifi">
                            <path d="M5 12.55a11 11 0 0 1 14.08 0"></path>
                            <path d="M1.42 9a16 16 0 0 1 21.16 0"></path>
                            <path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path>
                            <line x1="12" y1="20" x2="12" y2="20"></line>
                          </svg>
                        </div>
                        <h5 class="mt-4 mb-3">Accessibility</h5>
                        <p class="desc" >All poll Contests can be easily accessed on any device, anywhere</p>
                      </div>
                    </div>
                  </div>
                </div>
            </section>


            <br> <br> <br><br> 
            <section id="about">
                <div class="container">
                  <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-6 mb-6 mb-lg-0">
                      <img src="{{asset('test/img/02.png')}}" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5">
                      <div> <!-- <span class="badge badge-primary-soft p-2">
                                <i class="la la-exclamation ic-3x rotation"></i>
                            </span> -->
                        <h3 class="mt-3">We are dedicated to making your Contest a success</h3><br><br>
                        <p class="desc">We adopt latest technologies to make your Contest a success from start to finish, you can use our platform for any type of poll Contests</p>
                      </div><br><br> 
                      <div class="d-flex flex-wrap justify-content-start">
                        <div class="mb-3 mr-4 ml-lg-0 mr-lg-4">
                          <div class="d-flex align-items-center">
                            <div class="badge-primary-soft rounded p-1">
                              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                <polyline points="20 6 9 17 4 12"></polyline>
                              </svg>
                            </div>
                            <p class="mb-0 ml-3">Pagaents</p>
                          </div>
                        </div>
                        <div class="mb-3 mr-4 ml-lg-0 mr-lg-4">
                          <div class="d-flex align-items-center">
                            <div class="badge-primary-soft rounded p-1">
                              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                <polyline points="20 6 9 17 4 12"></polyline>
                              </svg>
                            </div>
                            <p class="mb-0 ml-3">Awards</p>
                          </div>
                        </div>
                        <div class="mb-3 mr-4 ml-lg-0 mr-lg-4">
                          <div class="d-flex align-items-center">
                            <div class="badge-primary-soft rounded p-1">
                              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                <polyline points="20 6 9 17 4 12"></polyline>
                              </svg>
                            </div>
                            <p class="mb-0 ml-3">Shows</p>
                          </div>
                        </div>
                        <div class="mb-3 mr-4 ml-lg-0 mr-lg-4">
                          <div class="d-flex align-items-center">
                            <div class="badge-primary-soft rounded p-1">
                              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                <polyline points="20 6 9 17 4 12"></polyline>
                              </svg>
                            </div>
                            <p class="mb-0 ml-3">Elections</p>
                          </div>
                        </div>
                        <div class="mb-3 mr-4 ml-lg-0 mr-lg-4">
                          
                        </div>    
                      </div> <br> <br> 
                      
                                    <a href="#"><button class="sc-button style letter style-2"><span>Create Contest</span> </button>
                                    </a>
                      </a><br><br> <br> 
                    </div>
                  </div>
                </div>
              </section>
            
            
            <br> <br> <br> <br> <br>
            
            
            
            





            <section class="tf-latest-collections tf-section bg-color-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sc-heading style-2">
                                <div class="content-left">
                                    <div class="inner">
                                        <h3>Latest Collections</h3>
                                        <p class="desc">Most popular gaming digital nft market place </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="swiper-container latest-coll style-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide tf-col-item">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-3 bg-color-dark">
                                                <div class="product-img ">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/item-5.jpg')}}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex mg-bt-0">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide tf-col-itemx2">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-4 bg-color-dark">
                                                <div class="product-img flex">
                                                    <div class="img-left">
                                                        <img src="{{ asset('quickvote/assets/images/product-item/item-6.jpg')}}" alt="Image">
                                                        <label>BSC</label>
                                                    </div>
                                                    <div class="img-right">
                                                        <div class="top-img flex">
                                                            <img src="{{ asset('quickvote/assets/images/product-item/item-7.jpg')}}"
                                                                alt="Image">
                                                            <img src="{{ asset('quickvote/assets/images/product-item/item-8.jpg')}}"
                                                                alt="Image">
                                                        </div>
                                                        <div class="bottom-img">
                                                            <img src="{{ asset('quickvote/assets/images/product-item/item-9.jpg')}}"
                                                                alt="Image">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’Multi-purpose 3D
                                                            Space Rocket With Animate Real Special Smoke Premium Quality
                                                            Gaming’’</a> </h5>
                                                    <div class="product-author flex mg-bt-0">
                                                        <div class="left flex">
                                                            <div class="avatar">
                                                                <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                            </div>
                                                            <div class="infor">
                                                                <div class="author-name"><a href="author.html">Daniel M.
                                                                        Bivens</a></div>
                                                                <span>Creator</span>
                                                            </div>
                                                        </div>
                                                        <div class="button-wishlish">
                                                            <a href="#" class=" wishlish"><i
                                                                    class="fas fa-heart"></i></a>
                                                            <span>152k</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide tf-col-item">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-3 bg-color-dark">
                                                <div class="product-img ">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/item-10.jpg')}}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex mg-bt-0">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide tf-col-item">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-3 bg-color-dark">
                                                <div class="product-img ">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/item-11.jpg')}}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex mg-bt-0">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>

                                    <div class="swiper-slide tf-col-itemx2">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-4 bg-color-dark">
                                                <div class="product-img flex">
                                                    <div class="img-left">
                                                        <img src="{{ asset('quickvote/assets/images/product-item/item-6.jpg')}}" alt="Image">
                                                        <label>BSC</label>
                                                    </div>
                                                    <div class="img-right">
                                                        <div class="top-img flex">
                                                            <img src="{{ asset('quickvote/assets/images/product-item/item-7.jpg')}}"
                                                                alt="Image">
                                                            <img src="{{ asset('quickvote/assets/images/product-item/item-8.jpg')}}"
                                                                alt="Image">
                                                        </div>
                                                        <div class="bottom-img">
                                                            <img src="{{ asset('quickvote/assets/images/product-item/item-9.jpg')}}"
                                                                alt="Image">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’Multi-purpose 3D
                                                            Space Rocket With Animate Real Special Smoke Premium Quality
                                                            Gaming’’</a> </h5>
                                                    <div class="product-author flex mg-bt-0">
                                                        <div class="left flex">
                                                            <div class="avatar">
                                                                <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                            </div>
                                                            <div class="infor">
                                                                <div class="author-name"><a href="author.html">Daniel M.
                                                                        Bivens</a></div>
                                                                <span>Creator</span>
                                                            </div>
                                                        </div>
                                                        <div class="button-wishlish">
                                                            <a href="#" class=" wishlish"><i
                                                                    class="fas fa-heart"></i></a>
                                                            <span>152k</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                    <div class="swiper-slide tf-col-item">
                                        <div class="slider-item">
                                            <div class="sc-product-item style-3 bg-color-dark">
                                                <div class="product-img ">
                                                    <img src="{{ asset('quickvote/assets/images/product-item/item-10.jpg')}}" alt="Image">
                                                    <a href="#" data-toggle="modal" data-target="#popup_bid"
                                                        class="sc-button style letter"><span>Vote Now</span></a>
                                                    <label>BSC</label>
                                                </div>
                                                <div class="product-content">
                                                    <h5 class="title"><a href="item-details.html">‘’3D Space Rocket With
                                                            Smoke Premium’’</a> </h5>
                                                    <div class="product-author flex mg-bt-0">
                                                        <div class="avatar">
                                                            <img src="{{ asset('quickvote/assets/images/avatar/avt-7.jpg')}}" alt="Image">
                                                        </div>
                                                        <div class="infor">
                                                            <div class="author-name"><a href="author.html">Daniel M.
                                                                    Bivens</a></div>
                                                            <span>Creator</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item-->
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next btn-slide-next "></div>
                                <div class="swiper-button-prev btn-slide-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="tf-best-seller">
                <div class="best-seller-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sc-heading style-2">
                                <div class="content-left">
                                    <div class="inner">
                                        <h3>Best Sellers</h3>
                                        <p class="desc">Most popular gaming digital nft market place </p>
                                    </div>
                                </div>
                                <div class="content-right">
                                    <button class="sc-button style letter style-2"><span>Explore More</span> </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="sc-author">
                                <div class="card-avatar">
                                    <img src="{{ asset('quickvote/assets/images/avatar/avt-1.jpg')}}" alt="">
                                </div>
                                <div class="infor">
                                    <h6> <a href="author.html">Jason M. Stalls</a> </h6>
                                    <div class="details">523.7 ETH</div>
                                </div>
                                <a href="#" class="sc-button btn-bordered-white"><span>Follow</span></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="sc-author">
                                <div class="card-avatar">
                                    <img src="{{ asset('quickvote/assets/images/avatar/avt-2.jpg')}}" alt="">
                                </div>
                                <div class="infor">
                                    <h6> <a href="author.html">Frank F. Chan</a> </h6>
                                    <div class="details">523.7 ETH</div>
                                </div>
                                <a href="#" class="sc-button btn-bordered-white"><span>Follow</span></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="sc-author">
                                <div class="card-avatar">
                                    <img src="{{ asset('quickvote/assets/images/avatar/avt-3.jpg')}}" alt="">
                                </div>
                                <div class="infor">
                                    <h6> <a href="author.html">Robert George</a> </h6>
                                    <div class="details">523.7 ETH</div>
                                </div>
                                <a href="#" class="sc-button btn-bordered-white"><span>Follow</span></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="sc-author">
                                <div class="card-avatar">
                                    <img src="{{ asset('quickvote/assets/images/avatar/avt-4.jpg')}}" alt="">
                                </div>
                                <div class="infor">
                                    <h6> <a href="author.html">Frank N. Glisson</a> </h6>
                                    <div class="details">523.7 ETH</div>
                                </div>
                                <a href="#" class="sc-button btn-bordered-white"><span>Follow</span></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="sc-author end">
                                <div class="card-avatar">
                                    <img src="{{ asset('quickvote/assets/images/avatar/avt-5.jpg')}}" alt="">
                                </div>
                                <div class="infor">
                                    <h6> <a href="author.html">Michel ZonaS</a> </h6>
                                    <div class="details">523.7 ETH</div>
                                </div>
                                <a href="#" class="sc-button btn-bordered-white"><span>Follow</span></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="sc-author end">
                                <div class="card-avatar">
                                    <img src="{{ asset('quickvote/assets/images/avatar/avt-6.jpg')}}" alt="">
                                </div>
                                <div class="infor">
                                    <h6> <a href="author.html">Mizanur Mango</a> </h6>
                                    <div class="details">523.7 ETH</div>
                                </div>
                                <a href="#" class="sc-button btn-bordered-white"><span>Follow</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

          

            <section class="tf-category tf-section">
                <div class="category-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sc-heading style-2">
                                <div class="content-left">
                                    <div class="inner">
                                        <h3>Poplar Categories</h3>
                                        <p class="desc">Most popular gaming digital nft market place </p>
                                    </div>
                                </div>
                                <div class="content-right">
                                    <button class="sc-button style letter style-2"><span>Browse More</span> </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="sc-category">
                                <div class="card-media">
                                    <img src="{{ asset('quickvote/assets/images/category/category-1.jpg')}}" alt="">
                                </div>
                                <div class="card-content">
                                    <h5><a href="#"> Browse By Template</a></h5>
                                    <p>Sed ut perspiciatis unde omnis natus error sit voluptatem</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="sc-category pl-19">
                                <div class="card-media">
                                    <img src="{{ asset('quickvote/assets/images/category/category-2.jpg')}}" alt="">
                                </div>
                                <div class="card-content">
                                    <h5><a href="#">UI Template</a></h5>
                                    <p>Sed ut perspiciatis unde omnis natus error sit voluptatem</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="sc-category pl-40">
                                <div class="card-media">
                                    <img src="{{ asset('quickvote/assets/images/category/category-3.jpg')}}" alt="">
                                </div>
                                <div class="card-content">
                                    <h5><a href="#">Graphics Design</a></h5>
                                    <p>Sed ut perspiciatis unde omnis natus error sit voluptatem</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="sc-category mg-bt-0">
                                <div class="card-media">
                                    <img src="{{ asset('quickvote/assets/images/category/category-4.jpg')}}" alt="">
                                </div>
                                <div class="card-content">
                                    <h5><a href="#">Social Network</a></h5>
                                    <p>Sed ut perspiciatis unde omnis natus error sit voluptatem</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="sc-category mg-bt-0 pl-19">
                                <div class="card-media">
                                    <img src="{{ asset('quickvote/assets/images/category/category-5.jpg')}}" alt="">
                                </div>
                                <div class="card-content">
                                    <h5><a href="#">Browse By Template</a></h5>
                                    <p>Sed ut perspiciatis unde omnis natus error sit voluptatem</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="sc-category mg-bt-0 pl-40 end">
                                <div class="card-media">
                                    <img src="{{ asset('quickvote/assets/images/category/category-6.jpg')}}" alt="">
                                </div>
                                <div class="card-content">
                                    <h5><a href="#">Browse By Template</a></h5>
                                    <p>Sed ut perspiciatis unde omnis natus error sit voluptatem</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="new-letter">
                <div class="container">
                    <div class="new-letter-inner style-2 flex">
                        <div class="new-letter-content">
                            <h3 class="heading">Newsletters</h3>
                            <p class="sub-heading">Most popular gaming digital nft market place </p>
                        </div>
                        <div class="new-letter-img">
                            <div class="form-subcribe">
                                <form id="subscribe-form" action="#" method="GET" accept-charset="utf-8"
                                    class="form-submit">
                                    <input name="email" value="" class="email" type="email"
                                        placeholder="Enter Email Address" required="">
                                    <button name="submit" type="submit" id="submit"
                                        class="sc-button style letter style-2"><span>Browse More</span> </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer id="footer" class="clearfix bg-style ft-home-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="widget widget-logo">
                                <div class="logo-footer" id="logo-footer">
                                    <a href="index.html">
                                        <img id="logo_footer" src="{{ asset('quickvote/assets/images/logo/logo_dark.png')}}" alt="Quickvote"
                                            width="151" height="45" data-retina="{{ asset('quickvote/assets/images/logo/logo.png')}}"
                                            data-width="151" data-height="45">
                                    </a>
                                </div>
                                <p class="sub-widget-logo">QuickVote is an efficient voting system that allows event organizers 
                                    to set-up their PAID OR FREE contests for their events. Our product gives a wide range of local 
                                    and global users the opportunity to participate and cast their votes effortlessly from any part of the world.</p>
                                <div class="widget-social">
                                    <ul>
                                        <li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                            <div class="widget widget-menu menu-marketplace">
                                <h5 class="title-widget">Marketplace</h5>
                                <ul>
                                    <li><a href="item.html">Gaming </a></li>
                                    <li><a href="item.html">Product </a></li>
                                    <li><a href="item.html">All NFTs</a></li>
                                    <li><a href="item.html">Social Network</a></li>
                                    <li><a href="item.html">Domain Names</a></li>
                                    <li><a href="item.html">Collectibles</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="widget widget-menu menu-supports">
                                <h5 class="title-widget">Supports</h5>
                                <ul>
                                    <li><a href="contact.html">Setting & Privacy </a></li>
                                    <li><a href="contact.html">Help & Support </a></li>
                                    <li><a href="item.html">Live Auctions</a></li>
                                    <li><a href="item-details.html"> Item Details</a></li>
                                    <li><a href="contact.html"> 24/7 Supports</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget widget-post">
                                <h5 class="title-widget">News & Post</h5>
                                <ul class="post-new">
                                    <li>
                                        <div class="post-img">
                                            <img src="{{ asset('quickvote/assets/images/post/post-recent-new-4.jpg')}}" alt="Post New">
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="blog-details.html">Roll Out New Features Without
                                                    Hurting Loyal Users</a></h6>
                                            <a href="blog-details.html" class="post-date"><i
                                                    class="far fa-calendar-week"></i> 25 JAN 2022</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-img">
                                            <img src="{{ asset('quickvote/assets/images/post/post-recent-new-5.jpg')}}" alt="Post New">
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="blog-details.html">An Overview The Most Comon UX
                                                    Design Deliverables</a></h6>
                                            <a href="blog-details.html" class="post-date"><i
                                                    class="far fa-calendar-week"></i> 25 JAN 2022</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer><!-- /#footer -->

            <!-- Bottom -->
            <div class="bottom">
                <div class="container">
                    <div class="bottom-inner">
                        Copyright © 2022 Bidzen | NFT Marketplace HTML Template. Designed by <a
                            href="https://themeforest.net/user/themesflat/portfolio"> Themesflat</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <a id="scroll-top"></a>

    <!-- Modal Popup Bid -->
    <div class="modal fade popup" id="popup_bid_success" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body space-y-20 pd-40">
                    <h3 class="text-center">Your Bidding
                        Successfuly Added</h3>
                    <p class="text-center">your bid <span class="price color-popup">(5.23ETH) </span> has been listing
                        to our database</p>
                    <a href="#" class="btn btn-primary"> Watch the listings</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body space-y-20 pd-40">
                    <h3>Place a Bid</h3>
                    <p class="text-center">You must bid at least <span class="price color-popup">5.23 ETH</span>
                    </p>
                    <input type="text" class="form-control" placeholder="00.00 ETH">
                    <p>Enter quantity. <span class="color-popup">1 available</span>
                    </p>
                    <input type="text" class="form-control quantity" value="1">
                    <div class="hr"></div>
                    
                    <div class="d-flex justify-content-between">
                        <p> Current Bid</p>
                        <p class="text-right price color-popup"> 5.23 ETH </p>
                    </div>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#popup_bid_success"
                        data-dismiss="modal" aria-label="Close"> Place a bid</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="{{ asset('quickvote/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('quickvote/assets/js/jquery.easing.js')}}"></script>
    <script src="{{ asset('quickvote/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('quickvote/assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('quickvote/assets/js/swiper.js')}}"></script>

    <script src="{{ asset('quickvote/assets/js/plugin.js')}}"></script>
    <script src="{{ asset('quickvote/assets/js/count-down.js')}}"></script>
    <script src="{{ asset('quickvote/assets/js/shortcodes.js')}}"></script>
    <script src="{{ asset('quickvote/assets/js/main.js')}}"></script>
</body>

</html>