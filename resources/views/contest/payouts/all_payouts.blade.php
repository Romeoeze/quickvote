@extends('admin.admin-master')


@section('content')
    <div class="container-full">

        <div class="col-md-10">
            <a href="{{ route('payout.add') }}" style="float: right;" class="btn btn-rounded btn-success"><i
                    class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back
            </a>
        </div>
        <div class="row">
            <div class="col-4">
                <h3>My Payouts</h3>
            </div>
            <div class="col-4"></div>
            <div class="col-4">

            </div>
        </div>

    </div>



    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <!-- Main content -->
            <section class="content">

                <div class="row">



                    <div class="col-12">


                        <!-- /.box-header -->
                        <div class="box-body">

                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="2%">SL</th>
                                            <th>Contest Name</th>
                                            <th>Payout Amount</th>
                                            <th>Vendor</th>
                                            <th>Status</th>
                                            <th>Payout Proof</th>
                                            <th width="25%">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($payouts as $key => $payout)
                                            <tr>
                                                <td>{{ $key + $payouts->firstItem() }}</td>

                                                <td><a href=""
                                                        style="color:rgb(15, 14, 14); font-weight:900 !important;">
                                                        {{ $payout->contest_name }}</a></td>
                                                <td>₦ {{ number_format($payout->payout_amount, '2') }}</td>
                                                <td>{{ $payout->account_name }}</td>

                                                <td>
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
                                                </td>
                                                <td><img src="{{ asset($payout->proof_of_payment) }}" alt=""
                                                        width="100px">
                                                </td>
                                                <td>
                                                    <a href="{{ route('payout.show', $payout->id) }}"
                                                        class="btn btn-info">View <i class="ri-eye-line"></i></a>
                                                    {{-- <a href="{{ route('contestant.add') }}" class="btn btn-success">Add
                                                        Contestants <i class="ri-arrow-right-line align-middle ms-2"></i>
                                                    </a> --}}
                                                    {{-- <a href="{{ route('contest.delete', $payout->id) }}"
                                                        class="btn btn-danger" id="delete">Delete</a> --}}



                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                                </table>

                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                </div><br><br><br>
                <hr>
                <div class="col-11 mt-12">

                    {{ $payouts->links('vendor.pagination.custom') }}

                </div>
                <!-- /.col -->
        </div>
        <!-- /.row -->


        </section>
        <!-- /.content -->

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
