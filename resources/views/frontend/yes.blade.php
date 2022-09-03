@extends('newfrontend.master')




@section('page_content')
    @include('newfrontend.partials.slider')


    <section class="new-letter">
        <div class="container">
            <div class="new-letter-inner style-2 flex">
                <div class="new-letter-content">
                    <h3 class="heading">Search Contests</h3>
                    <p class="sub-heading">Which Contest are you looking for?

                    </p>
                </div>
                <div class="new-letter-img ">
                    <div class="form-subcribe">
                        <form id="subscribe-form" method="GET" action="{{ route('contest.loadsearch') }}">

                            <input name="search" value="" class="email" type="text"
                                placeholder="Enter the name of the Contest " required=""
                                value="{{ request()->query('search') }}">
                            <button name="submit" type="submit" id="submit"
                                class="sc-button style letter style-2"><span>Search Contests</span> </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="text-center p-0" style="margin-top: 120px;">
        <div class="container"><br> <br>
            <h3 class="mt-10 mb-10">Why Quickvote?</h3><br> <br>
            <div class="row align-items-center">

                <div class="col-xl-4 col-lg-4 mb-8 mb-lg-0">
                    <div class="px-4 py-7 rounded hover-translate" data-bg-color="rgba(19, 96, 239, 0.01)">
                        <div>
                            <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#f94f15"
                                stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-grid">
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
                            <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="orange"
                                stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-check-square">
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
                            <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#f94f15"
                                stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-wifi">
                                <path d="M5 12.55a11 11 0 0 1 14.08 0"></path>
                                <path d="M1.42 9a16 16 0 0 1 21.16 0"></path>
                                <path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path>
                                <line x1="12" y1="20" x2="12" y2="20"></line>
                            </svg>
                        </div>
                        <h5 class="mt-4 mb-3">Accessibility</h5>
                        <p class="desc">All poll Contests can be easily accessed on any device, anywhere</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <br> <br> <br><br>
    <section id="about">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-6 mb-6 mb-lg-0 ann">
                    <img src="{{ asset('quickvote/assets/images/slider/img-slider-10.png') }}" alt="Image"
                        class="img-fluid">
                </div>
                <div class="col-12 col-lg-6 col-xl-5">
                    <div>
                        <!-- <span class="badge badge-primary-soft p-2">
                                                                                                                                                      <i class="la la-exclamation ic-3x rotation"></i>
                                                                                                                                                  </span> -->
                        <h6 style="color:rgb(214, 203, 203)">Trusted By</h6><br>
                        <div class="slider_r">
                            <div class="slide-track">
                                @if (count($brands))
                                    @foreach ($brands as $b)
                                        <div class="slide">
                                            <img src="{{ asset($b->logos) }}" height="50" width="70"
                                                alt="" />
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <h3 class="mt-3">We are dedicated to making your Contest a success</h3><br><br>
                        <p class="desc">We adopt latest technologies to make your Contest a success from start to
                            finish, you can use our platform for any type of poll Contests</p>
                    </div><br><br>
                    <div class="d-flex flex-wrap justify-content-start">
                        <div class="mb-3 mr-4 ml-lg-0 mr-lg-4">
                            <div class="d-flex align-items-center">
                                <div class="badge-primary-soft rounded p-1">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-check">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <p class="mb-0 ml-3 ">Pageants</p>
                            </div>
                        </div>
                        <div class="mb-3 mr-4 ml-lg-0 mr-lg-4">
                            <div class="d-flex align-items-center">
                                <div class="badge-primary-soft rounded p-1">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-check">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <p class="mb-0 ml-3">Awards</p>
                            </div>
                        </div>
                        <div class="mb-3 mr-4 ml-lg-0 mr-lg-4">
                            <div class="d-flex align-items-center">
                                <div class="badge-primary-soft rounded p-1">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-check">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <p class="mb-0 ml-3">Shows</p>
                            </div>
                        </div>
                        <div class="mb-3 mr-4 ml-lg-0 mr-lg-4">
                            <div class="d-flex align-items-center">
                                <div class="badge-primary-soft rounded p-1">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-check">
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
















    <section class="new-letter">
        <div class="container">
            <div class="new-letter-inner flex">
                <div class="new-letter-content">
                    <h3 class="heading">Newsletters</h3>
                    <p class="sub-heading">Subscribe to our newsletters and receive the latest news from QuickVote.</p>
                    <div class="form-subcribe">
                        <form id="subscribe-form" action="#" method="GET" accept-charset="utf-8"
                            class="form-submit">
                            <input name="email" value="" class="email" type="email"
                                placeholder="Enter Email Address" required="">
                            <button name="submit" type="submit" class="sc-button style letter style-2"><span>Browse
                                    More</span> </button>
                        </form>
                    </div>
                </div>
                <div class="new-letter-img">
                    <img src="{{ asset('quickvote/assets/images/slider/img-slider-9.png') }}" alt="Image">
                </div>
            </div>
        </div>
    </section><br><br><br><br><br>
@endsection
