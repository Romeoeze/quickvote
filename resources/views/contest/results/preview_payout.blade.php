@extends('admin.admin-master')


@section('content')
    <div class="col-md-10">
        <a href="{{ route('payout.all') }}" style="float: right;" class="btn btn-rounded btn-success"><i
                class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back
        </a>
    </div><br><br><br>
    <div class="container">

        <div class="main-body">



            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <h3>Payout Status</h3>
                                <img class="img-fluid" src="{{ asset($payout->proof_of_payment) }}" alt="User Avatar"
                                    width="200px">
                                <div class="mt-3">
                                    @switch($payout->approval_status)
                                        @case(1)
                                            <p><span class="badge rounded-pill bg-success text-white">Payout
                                                    Completed </span></p>
                                        @break

                                        @case(2)
                                            <p><span class="badge rounded-pill bg-warning text-black">Payout
                                                    Pending Verification by QuickVote</span></p>
                                        @break

                                        @default
                                            <p><span class="badge rounded-pill bg-danger text-black">Payout
                                                    Rejected</span></p>
                                    @endswitch


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">


                            <div class="row">
                                <div class="col-sm-12">
                                    <h4><span style="color:orangered;">Contest Name:</span> {{ $payout->contest_name }}</h4>
                                    </h6>
                                    <hr>
                                    <h6><span style="color:rgb(15, 15, 15);">Payout Amount</span></h6>
                                    <p></p>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    ₦ {{ number_format($payout->payout_amount, '2') }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ Auth::user()->phonenumber }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Account Number</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $payout->account_name }}
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Account Number</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $payout->account_number }}


                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Bank Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $payout->bank_name }}


                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Request Date</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ \Carbon\Carbon::parse($payout->created_at)->diffForHumans() }}


                                </div>
                            </div>
                            <hr>




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
@endsection
