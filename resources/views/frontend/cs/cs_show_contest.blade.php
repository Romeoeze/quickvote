@extends('newfrontend.master')

@section('page_content')
    <div class="tf-section item-details-page" style="padding: 20px; margin-top:-10px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="item-media">
                        <div class="media">
                            <img src="{{ asset($contests->contest_image) }}">
                        </div>
                        <div class="countdown style-2">
                            <h5>Contest Ending In...</h5><br>
                            <span class="js-countdown" data-timer="{{ $expiry }}"
                                data-labels=" Days  , Hour , Min ,Sec"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="content-item"><br><br>
                        <h3> {{ $contests->contest_name }}</h3>
                        <p>{!! $contests->contest_description !!}</p><br>





                        <div class="author-item">
                            <div class="">
                                <img src="{{ asset('uploads/vendors/' . $contests->vendor->company_logo) }}"
                                    width="80px" style="padding-right: 20px;">
                            </div>
                            <div class="infor">
                                <div class="create">Organized By</div>
                                <h6><a href="#">{{ $contests->vendor->company_name }}</a></h6>



                            </div>
                        </div><br><br>

                        <p style="color:rgb(0, 0, 0);">Start Date: <span
                                style="color:green; font-weight:900;">{{ \Carbon\Carbon::parse($contests->start_date)->format('D d-M-Y') }}</span>
                        </p>
                        <hr width="30%" style="margin-left: 0;border: 0.4px solid rgba(128, 128, 128, 0.349);">

                        <p style="color:rgb(12, 11, 11);">End Date: <span
                                style="color:rgb(187, 21, 21);font-weight:900;">{{ \Carbon\Carbon::parse($contests->end_date)->format('D d-M-Y') }}</span>
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>




    <section class="tf-section trendy-colection-page" style="margin-top: -48px;">
        <div class="container">

            <div class="container" style="background-color: rgb(255, 255, 255); padding: 20px; margin-top:-60px;">
                <h3 class="text-center mb-10">Contestants</h3><br><br>
                <div class="row">
                    <div class="col-md-9">



                    </div>



                </div>
                <div class="container">


                </div>

                @forelse($contests->contestants->chunk(220) as $contestants)
                    <div class="row">


                        <hr width="100%" style="margin-left: 0;border: 0.4px solid rgba(128, 128, 128, 0.349);">
                        <br><br>


                        @foreach ($contestants as $con)
                            <div class="col-lg-4 col-md-6">
                                <div class="sc-product-item style-2 badgee">
                                    <div class="product-img">
                                        <a href="{{ route('corporatesinglecontestcontestant.user.vote', $con->slug) }}">
                                            <img src="{{ asset($con->image) }}" alt="Image"></a>
                                        <a href="{{ route('corporatesinglecontestcontestant.user.vote', $con->slug) }}"
                                            class="sc-button style letter"><span>Vote Contestant</span></a>
                                        <label><i class="fa fa-bar-chart" style="color:yellow;" aria-hidden="true"></i>
                                            <span style="color:yellow;">Vote Count:
                                            </span>{{ number_format($con->vote_total) }}</label>
                                    </div>
                                    <div class="product-content">
                                        <h4 style="text-align: center; padding:30px; font-size:25px; "><a
                                                href="{{ route('corporatesinglecontestcontestant.user.vote', $con->slug) }}">{{ $con->name }}</a>
                                        </h4>


                                        <div class="product-price flex">
                                            {{-- <div class="newbutton2"><i class="fa fa-trophy" style="color:yellow;"
                                                aria-hidden="true"></i> &nbsp;&nbsp;RANK:
                                            {{ $loop->iteration }}&nbsp;&nbsp;&nbsp; <span style="color:black">
                                                OUT OF
                                                {{ count($contestants) }}</span>
                                        </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> <i style="color:red"
                                    class="fa fa-exclamation-circle" aria-hidden="true"></i> Contestants are sorted
                                alphabetically</strong>; not in
                            any way in their order of relevance
                        </p>
                    </div>

                @empty

                    <h6 class="text-center mb-10" style="color:red;"> ....no contestants found...</h6>
                    <br>
                    <h3 class="text-center mb-10"><a href="{{ route('contest.archive') }}"><button type="button"
                                class="btn btn-lg" style="font-size:19px;">
                                View All Contests <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                            </button></a></h3>
                    <br><br><br><br>
            </div>
            @endforelse
    </section>
@endsection
