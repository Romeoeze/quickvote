@extends('admin.admin-master')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@section('content')
    <div class="tf-section item-details-page" style="margin-top:-70px;">
        <div class="container voterow">
            <div class="col-md-11">
                <a href="{{ url()->previous() }}" style="float: right;" class="btn btn-rounded btn-success"><i
                        class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back
                </a>
            </div><br><br>
            <div class="row">

                <div class="col-md-12" style="background-color: white !important;padding:30px;">
                    <div class="content-item"><br><br><br><br><br><br>


                        <div class="row voteee">

                            @if (count($voters) > 0)
                                <div class="col-md-8">

                                    <div class="form-create-item-content">
                                        <div class="form-create-item">




                                            <form action="{{ route('pay') }}" method="POST">
                                                <h5> <i class="fa fa-cart-plus" style="color:rgb(216, 71, 19)"
                                                        aria-hidden="true"></i> Activate Voters</h5><br> <br>

                                                @csrf

                                                <div class="form-group">
                                                    <label for="num1"
                                                        style="font-size:16px; padding:10px;line-height:21px; font-weight:900; color:red;"><span
                                                            style="color:black;">Number of Registered Voters yet to be
                                                            activated</span>
                                                    </label>
                                                    <input class="num1 form-control" name="voters_count"
                                                        value="{{ count($voters) }}" type="number"
                                                        placeholder="Number of Registered Voters" readonly><br>
                                                    <label for="num2"
                                                        style="font-size:16px; padding:10px;line-height:21px; font-weight:900; color:red;"><span
                                                            style="color:black;">Price per Registered Voter</span>
                                                        (₦)</label>
                                                    <input class="num2 form-control" name="num2" value=""
                                                        type="number" placeholder="1000" readonly> <br>
                                                </div>

                                                <div class="form-group">
                                                    <label for="total"
                                                        style="font-size:16px; padding:10px;line-height:21px; font-weight:900; color:red;"><span
                                                            style="color:black;">Amount Due</span>
                                                        (₦)</label>
                                                    <input class="sum form-control" name="total"
                                                        value="{{ count($voters) * 1000 }}" type="number" readonly>
                                                </div>

                                                <input type="hidden" name="currency" value="NGN">
                                                <input class="kobo" name="amount" value="{{ count($voters) * 100000 }}"
                                                    type="hidden">




                                                <input type="hidden" name="metadata"
                                                    value="{{ json_encode(
                                                        $array = [
                                                            'contest_type' => 'voter_activate',
                                                            'contest_type' => 'corporatemulti',
                                                        ],
                                                    ) }}"
                                                    <br>
                                                <label for="total"
                                                    style="font-size:16px; padding:10px;line-height:21px; font-weight:900; color:red;"><span
                                                        style="color:black;">Vendor's Email Address (for Reciept)</label>
                                                <div class="form-group">
                                                    <input name="email" type="email" class="form-control"
                                                        value="{{ $vendor->vendor_email }}">
                                                </div>


                                                <br> <br> <br>
                                                <button name="submit" type="submit" class="btn btn-success"><span>PROCEED
                                                        TO
                                                        MAKE PAYMENT </span> <i class="ri-arrow-right-fill mt-4"></i>
                                                </button>
                                            </form>
                                            <br><br>
                                            <img src=" {{ asset('uploads/images/paystack.png') }}" width="300px">

                                        </div>

                                    </div>
                                </div>
                            @else
                                <h1>ALL ACREDITED VOTERS ACTIVATED</h1>
                            @endif


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
