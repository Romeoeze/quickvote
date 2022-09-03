@extends('newfrontend.master')


@section('page_content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                                            <h6>{{ $contestant->contest->contest_name }} ID: <span
                                                    style="color:rgb(216, 71, 19)">{{ $contestant->passcode }}</span>
                                            </h6><br><br>
                                            <p class="desc" style="margin-top:-20px;">
                                                {{ Str::limit($contestant->bio, 200) }}</p><br><br>





                                            <div class="new">


                                                <h4><a href="#"><i class="fa fa-bar-chart" style="color:rgb(240, 89, 2);"
                                                            aria-hidden="true"></i>
                                                        Vote Count</a> </h4><br><br>

                                                <a href="#" style="margin-right:30px;" class="newbutton"><span>
                                                        <span style="color:rgb(0, 0, 0);">
                                                        </span> {{ number_format($contestant->vote_total) }}
                                                    </span></a><br><br><br>
                                                <em>Check Live Rankings</em>
                                                <p><a href="{{ route('contest.user.view', $contestant->contest->slug) }}"
                                                        style="font-weight:900;">
                                                        Click Here to Visit Contest Homepage <i
                                                            class="fa fa-long-arrow-right" aria-hidden="true"
                                                            style="color:rgb(240, 89, 2);"></i></a></p>
                                                <br>


                                            </div>









                                        </div>
                                        <br> <br>
                                        <br>


                                        <form id="create-item-1" action="{{ route('pay') }}" method="POST">
                                            <h5> <i class="fa fa-cart-plus" style="color:rgb(216, 71, 19)"
                                                    aria-hidden="true"></i> Add Vote Points to this Contestant</h5><br> <br>

                                            @csrf
                                            <div class="input-group">
                                                <input name="first_name" value="" type="text" placeholder="Enter Your Name"
                                                    required>

                                            </div>
                                            <div class="input-group">
                                                <input class="num1" name="phone" value="" type="number"
                                                    placeholder="Total number of votes you want" required="">
                                                <label for="num2"
                                                    style="font-size:10px; padding:10px;line-height:12px; font-weight:900; color:red;"><span
                                                        style="color:black;">Price per Vote</span>
                                                    (₦)</label>
                                                <input class="num2" name="num2"
                                                    value="{{ $contestant->contest->vote_price }}" type="number"
                                                    placeholder="Price per Vote: ₦{{ $contestant->contest->vote_price }}"
                                                    readonly>
                                            </div>

                                            <div class="input-group">
                                                <label for="total"
                                                    style="font-size:12px; padding:10px;line-height:12px; font-weight:900; color:red;"><span
                                                        style="color:black;">Amount Due</span>
                                                    (₦)</label>
                                                <input class="sum" name="total" value="" type="number">
                                            </div>

                                            <input type="hidden" name="currency" value="NGN">
                                            <input class="kobo" name="num3" value="100" type="hidden">



                                            <input class="amount" type="hidden" name="amount" value="">
                                            <input class="contestant_id" type="hidden" name="contestant_id"
                                                value="{{ $contestant->id }}">
                                            <input class="pricepervote" type="hidden" name="pricepervote"
                                                value="{{ $contestant->contest->vote_price }}">

                                            <input type="hidden" name="metadata"
                                                value="{{ json_encode(
                                                    $array = [
                                                        'contestant_id' => $contestant->id,
                                                        'slug' => $contestant->slug,
                                                        'contest_id' => $contestant->contest_id,
                                                        'pricepervote' => $contestant->contest->vote_price,
                                                        'contest_type' => 'single',
                                                    ],
                                                ) }}">
                                            {{-- For other necessary things you want to add to your payload. it is optional though --}}







                                            <input name="email" value="" type="email"
                                                placeholder="Enter a valid Email for your receipt" required="">

                                            <br> <br> <br>
                                            <button name="submit" type="submit"
                                                class="sc-button style letter style-2"><span>PROCEED TO MAKE PAYMENT</span>
                                            </button>
                                        </form>
                                        <br><br>
                                        <img src=" {{ asset('uploads/images/paystack.png') }}" width="300px">
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


    <script type="text/javascript">
        $('.num1, .num2').on('input', function() {
            $('.sum').val(parseInt($('.num1').val()) * parseInt($('.num2').val()));
        });


        $('.num1, .num2').on('input', function() {
            $('.amount').val(parseInt($('.sum').val()) * parseInt($('.kobo').val()));
        });

        $("input.sum").each((i, ele) => {
            let clone = $(ele).clone(false)
            clone.attr("type", "text")
            let ele1 = $(ele)
            clone.val(Number(ele1.val()).toLocaleString("en"))
            $(ele).after(clone)
            $(ele).hide()
            clone.mouseenter(() => {

                ele1.show()
                clone.hide()
            })
            setInterval(() => {
                let newv = Number(ele1.val()).toLocaleString("en")
                if (clone.val() != newv) {
                    clone.val(newv)
                }
            }, 10)

            $(ele).mouseleave(() => {
                $(clone).show()
                $(ele1).hide()
            })


        })
    </script>
@endsection
