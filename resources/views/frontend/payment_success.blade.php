@extends('newfrontend.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('quickvote/assets/css/aboutpage.css') }}">
@endsection

{{-- <h3>Your Vote for: {{ $contestant->name }} is well recieved</h3>

 Click here to return to page. your --}}



@section('page_content')
    <br><br>
    <!--feature start-->
    <section>
        <div class="container withpad">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5 col-xl-5 mb-8 mb-lg-0 order-lg-1 ann">
                    <img src="{{ asset('uploads/payment.png') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-12 col-lg-7 col-xl-6">
                    <div class="mb-8 withpad">
                        <h3 class="font-w-9 mb-4" style="color:rgb(25, 26, 25)">
                            Thank You</h3>
                        <h4 class="font-w-9 mb-4" style="color:rgb(45, 165, 45)">
                            Payment done Successfully.</h4><br>

                        <div class="card-avatar">
                            <img src="{{ asset($contestant->image) }}" alt="" width="400px" style="border-radius: 20px;">
                        </div><br>

                        <p>Your <b>{{ $totalvotetoadd }}</b> Vote points purchase for: <b>{{ $contestant->name }}</b> is
                            well recieved
                        </p><br>


                        <!-- Section description -->
                        <p class="text-muted w-responsive mx-auto mb-5">Our system has automatically added the
                            <b>{{ $totalvotetoadd }}</b> points to the intial
                            vote count for the above mentioned contenstant. Thank You.
                        </p>

                        <h3><a href="{{ route('contestant.user.vote', [$slug]) }}"><button type="button"
                                    class="btn btn-lg" style="font-size:19px;">
                                    Click Here to Confirm <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                </button></a></h3>
                        <br><br><br><br>
                        <h6 style="font-weight:500; line-height:20px; font-style:italic;" class="highlighter-rouge">
                            <i style="color:red" class="fa fa-exclamation-circle" aria-hidden="true"></i>
                            A payment reciept with transaction details has been sent to your designated email:
                            <b>{{ $voter_email }}</b>
                        </h6>

                    </div>

                </div>


            </div>
        </div>
    </section>
    <!--feature end-->


    <br><br>
@endsection
