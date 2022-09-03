@extends('newfrontend.master')

@section('page_content')
    <div class="tf-section item-details-page" style="margin-top:-70px;">
        <div class="container voterow">
            <div class="row">

                <div class="col-md-12">
                    <div class="content-item"><br><br>


                        <div class="row voteee">
                            <div class="col-md-12">

                                <div class="form-create-item-content">
                                    <div class="form-create-item">

                                        <div class="card-avatar">
                                            <img src="{{ asset($contestant->image) }}" alt="" width="400px"
                                                style="border-radius: 20px;">

                                        </div>
                                        <div class="sc-heading" style="padding-right: 40px;"><br><br>
                                            <h3> {{ $contestant->name }}</h3>
                                            <h6>{{ $contestant->category->contest->contest_name }} ID: <span
                                                    style="color:rgb(216, 71, 19)">{{ $contestant->passcode }}</span>
                                            </h6><br><br>
                                            <p class="desc" style="margin-top:-20px;">
                                                {{ Str::limit($contestant->bio, 200) }}</p><br><br>





                                            <div class="new">


                                                <h4><a href="#"><i class="fa fa-bar-chart"
                                                            style="color:rgb(240, 89, 2);" aria-hidden="true"></i>
                                                        Vote Count</a> </h4><br><br>

                                                <a href="#" style="margin-right:30px;" class="newbutton"><span>
                                                        <span style="color:rgb(0, 0, 0);">
                                                        </span> {{ number_format($contestant->vote_total) }}
                                                    </span></a><br><br><br>
                                                <em>Check Live Rankings</em>
                                                <p><a href="{{ route('corporatemulticontest.user.view', $contestant->category->contest->slug) }}"
                                                        style="font-weight:900;">
                                                        Click Here to Visit Contest Homepage <i
                                                            class="fa fa-long-arrow-right" aria-hidden="true"
                                                            style="color:rgb(240, 89, 2);"></i></a></p>
                                                <br>


                                            </div>









                                        </div>
                                        <br> <br>
                                        <br>


                                        <form id="create-item-1"
                                            action="{{ route('corporatemulticontestant.user.addvote') }}" method="POST">
                                            <h5> <i class="fa fa-plus" style="color:rgb(216, 71, 19)"
                                                    aria-hidden="true"></i> Add Vote Point to this Contestant</h5><br> <br>

                                            @csrf



                                            <input name="email" type="email"
                                                placeholder="Enter Your Accredited Email Address" required=""
                                                value="{{ old('email') }}" id="email">

                                            <br> <br> <br>


                                            <div class="input-group">
                                                <input name="passcode" value="{{ old('passcode') }}" type="text"
                                                    placeholder="Enter 12-DIGIT VOTER'S PIN " required="" id="passcode">


                                            </div><br>

                                            <input type="hidden" name="contestant_id" value="{{ $contestant->id }}"><br>

                                            <input type="hidden" name="contest_id" value="{{ $contestant->id }}"><br>
                                            <input type="hidden" name="contestant_category_id"
                                                value="{{ $contestant->category->id }}"><br>

                                            <div id="voteSubmit" class="float-left">
                                                <a id="submitButton" name="submit" type="submit"
                                                    class="sc-button style letter style-2"><span
                                                        style="font-size:20px; !important">CAST
                                                        VOTE</span>
                                                </a>




                                            </div>
                                        </form>
                                        <br><br>

                                        <div class="other-login"><br><br><br>
                                            <hr>
                                            <div class="text">Share On</div><br>
                                            <div class="widget-social">
                                                <ul>
                                                    <li><a href="#" class="active"><i
                                                                class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-8" style="padding:30px;">




                                                <h6 style="font-weight:500; line-height:20px; font-style:italic;"
                                                    class="highlighter-rouge">
                                                    <i style="color:red" class="fa fa-exclamation-circle"
                                                        aria-hidden="true"></i>
                                                    Ensure the contestant is who you actually want to vote. There
                                                    would be no refund or
                                                    reversal of vote if you choose a wrong contestant.
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-background">
                                        <img src="{{ asset($contestant->image) }}" alt="">
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                </div><br><br> <br><br> <br><br> <br><br>


            </div>


        </div>
    </div>
    </div>
    </div>
    </div>




    <script>
        $(function() {
            $(document).on('click', '#submitButton', function(e) {

                if ($.trim($("#email").val()) === "" || $.trim($("#passcode").val()) === "") {
                    Swal.fire('You did not fill out one of the required fields. Try again');
                    return false;
                }


                e.preventDefault();

                var form = $(this).parents('#create-item-1');



                Swal.fire({
                    title: 'Kindly Re-Confirm',
                    text: "Are you sure you want to vote this contestant? Once your vote is cast..it is irreversible and you cannot vote with this credential again",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#2f9e19',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Vote this candidate'
                }).then((result) => {
                    if (result.isConfirmed) {

                        form.submit();

                    }
                })


            });

        });
    </script>
@endsection
