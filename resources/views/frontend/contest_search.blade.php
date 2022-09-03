@extends('newfrontend.master')



@section('page_content')
    <div class="container">
        <div class="card-header mb-20" style="background-color: rgb(250, 250, 250); padding: 20px; margin-bottom:25px;">
            <h4>Search Results for Contest:<span
                    style="color:rgb(252, 52, 17); font-style:italic !important; font weight:100 !important;">
                    {{ request()->query('search') }}</span> </h4>
        </div>






        <div class="row">


            <div class="col-md-8">



                @forelse ($contests as $contest)
                    <img src="
                                    {{ asset($contest->contest_image) }}" alt="Image" width="300px">

                    <br><br><br>
                    <a href="">
                        <h5 class="heading">{{ $contest->contest_name }}</h5>
                    </a>
                    <p class="sub-heading">{!! $contest->contest_description !!} </p>
                    <br>
                    @if ($contest->contest_type == 1)
                        <h3> <a href="{{ route('contest.user.view', $contest->slug) }}"><button type="button"
                                    class="btn btn-lg" style="font-size:19px;">
                                    View Contest <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                </button></a> </h3>
                        <br><br><br><br>
                    @elseif ($contest->contest_type == 2)
                        <h3> <a href="{{ route('multicontest.user.view', $contest->slug) }}"><button type="button"
                                    class="btn btn-lg" style="font-size:19px;">
                                    View Contest <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                </button></a> </h3>
                        <br><br><br><br>
                    @endif

                @empty

                    <p class="text-red">... No Record Found</p>
                @endforelse
            </div>


        </div>

        <br><br>



        <a href="{{ route('contest.archive') }}"><button class="sc-button style letter style-2 mt-10"><span>Browse More
                    Contests</span> </button> </a><br> <br> <br>


    </div>
@endsection
