@extends('newfrontend.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('quickvote/assets/css/aboutpage.css') }}">
@endsection



@section('page_content')
    <!-- page title -->
    <section class="fl-page-title">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-inner flex">
                        <div class="page-title-heading">
                            <h2 class="heading">Live Contests</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="{{ route('contest.archive') }}">Contests</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>

    <div class="container">
        @forelse ($contests->chunk(3) as $contest)
            <div class="row">
                @foreach ($contest as $con)
                    <div class="col-md-4">
                        <div style="background-color: rgb(255, 255, 255); padding: 20px 30px;">
                            <a href="{{ route('contest.user.view', $con->slug) }}"><img
                                    src="{{ asset($con->contest_image) }}" alt="Image" width="400px"></a>

                            <br><br><br>
                            <a href="{{ route('contest.user.view', $con->slug) }}">
                                <h5 class="heading">{{ $con->contest_name }}</h5>
                            </a>
                            <br>
                            <div class="product-price flex">
                                <div class="title">
                                    <p style="color:green;">Contest Start Date: </p>
                                    <p style="color:rgb(187, 21, 21);">Contest End Date: </p>
                                </div>


                                <div class="price">
                                    <p><span style="color:green;">
                                            &nbsp;&nbsp;{{ \Carbon\Carbon::parse($con->start_date)->diffForHumans() }}</span>
                                    </p>

                                    <p><span
                                            style="color:rgb(187, 21, 21);">{{ \Carbon\Carbon::parse($con->end_date)->diffForHumans() }}</span>
                                    </p>

                                </div>
                            </div>
                            <br>

                            <h3><a href="{{ route('contest.user.view', $con->slug) }}"><button type="button"
                                        class="btn btn-lg" style="font-size:19px;">
                                        View Contest <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                    </button></a></h3>
                            <br><br><br><br>

                        </div>
                    </div>
                @endforeach

                <br>

            </div><br>
        @empty
            <br><br>
            <p class="text-red">... No Active Contest Found.</p><br><br>
        @endforelse

    </div>


    {{-- <div class="pagi" style="width: 50%;
        margin: 0 auto;">
        <h4 class="text-center">{{ $contests->links('pagination::custom') }}</h4><br><br><br>
    </div> --}}
@endsection
