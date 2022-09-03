<section class="tf-slider">
    <div class="swiper-container slider ">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slider-item">
                    <div class="overlay"></div>
                    <div class="slider-inner flex home-1">
                        <div class="slider-content">
                            <h1 class="heading"><span style="color:black; !important">Create & Vote</span> Your
                                Favorite Contestants</h1>
                            <p class="sub-heading">We help brands lanuch Paid or Free Voting Contests that drives
                                growth
                            </p>
                            <div class="button-slider">

                                <a href="{{ route('contest.archive') }}"
                                    class="sc-button btn-bordered-white style letter "><span>Explore
                                        Live Contests</span></a>

                            </div>
                        </div>
                        <div class="slider-img">
                            <div class="img-home-1"><img
                                    src="{{ asset('quickvote/assets/images/slider/img-slider-6.png') }}" alt="Image">
                            </div>
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
                                <h1 class="heading"><span
                                        style="color:black !important; font-size:26px !important; ">Ever Wished
                                        For</span>
                                    Transparent DigitalPolls?
                                </h1>
                                <p class="sub-heading">Create a poll Contest in minutes. Your voters can vote from
                                    any location on any device.</p>
                                <div class="button-slider">
                                    <a href="{{ route('about.show') }}"
                                        class="sc-button btn-bordered-white style letter "><span>Explore
                                            More</span></a>
                                    <a href="{{ route('contest.create') }}"
                                        class="sc-button btn-bordered-white style file"><span>Create
                                            Now</span></a>
                                </div>
                            </div>
                            <div class="slider-img flex">
                                <div class="img-left">
                                    <div class="img-1"><img
                                            src="{{ asset('quickvote/assets/images/slider/img-slider-5.jpg') }}"
                                            alt="Image" width="200px"></div>


                                </div>
                                <div class="img-right">
                                    <img src="{{ asset('quickvote/assets/images/slider/img-slider-1.png') }}"
                                        alt="Image">

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
