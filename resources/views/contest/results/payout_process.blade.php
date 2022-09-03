@extends('admin.admin-master')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="container-fluid"><br>
        <div class="col-md-10">
            <a href="{{ route('payout.add') }}" style="float: right;" class="btn btn-rounded btn-success"><i
                    class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back
            </a>
        </div>
        <br><br>
        <div class="container rounded bg-white mt-5 mb-5">

            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"></div>
                </div>
                <div class="col-md-5 border-right"> <br>
                    {{-- @if ($errors->any())
                        {!! implode(
                            '',
                            $errors->all('<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                                                :message
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                 </div>'),
                        ) !!}
                    @endif --}}



                    <form id="requestPayout" data-parsley-validate action="{{ route('payout.storerequest') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Payout Confirmation</h4><br>
                                <img width="130" src="{{ asset('images/confirm.png') }}" alt="">
                            </div>
                            <div class="row mt-2">
                                <input class="form-control" type="hidden" value="{{ $vendor->id }}" name="vendor_id">

                                <input class="form-control" type="hidden" value="{{ $contest_id }}" name="contest_id">



                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Contest Name</label><input
                                        type="text" class="form-control" value="{{ $contest->contest_name }}"
                                        name="contest_name" readonly></div>



                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Company Name</label><input
                                        type="text" class="form-control" value="{{ $vendor->company_name }}"
                                        name="vendor_company_name" readonly></div>
                                <hr>
                                <p class="mt-3 fw-bolder">Payment Information</p>
                                <hr>

                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Account Number</label><input
                                        type="text" class="form-control" value="{{ $vendor->account_number }}"
                                        name="vendor_account_number" readonly></div>

                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Account Name</label><input
                                        type="text" class="form-control" value="{{ $vendor->account_name }}"
                                        name="vendor_account_name" readonly></div>

                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Bank Name</label><input
                                        type="text" class="form-control" value="{{ $vendor->bank_name }}"
                                        name="vendor_bank_name" readonly></div>

                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Payout Amount</label><input
                                        type="text" class="form-control"
                                        value="{{ number_format($payout_amount, '2') }}" name="payout_amount" readonly>
                                </div>



                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Currency</label><input type="text"
                                        class="form-control" value="₦ (NGN)" name="contest_name" readonly></div>

                                <div class="col-md-12">
                                    <div class="mt-5 text-center"><button class="btn btn-success profile-button"
                                            type="submit">Confirm Payout Request <i
                                                class="fas fa-arrow-right"></i></button>
                                    </div><br>
                                    <p style="text-align: center;">Kindly note: <b>Payouts are made only when the
                                            selected contest is
                                            over.</b> Our team will credit
                                        your
                                        designated bank account 24-48 hours after the request is logged. 25%
                                        platform service charge applies. Thank you.
                                    </p>

                                </div>







                    </form>









                </div>






            </div>























        </div>
    </div>



    </div>



    </div>




    </div>

    <!-- init js -->
    <script src="{{ asset('backend/assets/js/pages/form-editor.init.js') }} "></script>

    <!-- Required datatable js -->
    <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable_wrapper').DataTable();
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
