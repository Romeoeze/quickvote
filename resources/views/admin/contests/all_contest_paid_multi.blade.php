@extends('admin.admin-master')


@section('content')
    <div class="container-full">
        <div class="row">
            <div class="col-4">
                <hr>
                <h3>All Multi Category Paid Contests</h3>
                <hr>
            </div>
            <div class="col-4"></div>

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
                                            <th>Image</th>

                                            <th>Contest Name</th>

                                            <th>Vendor</th>
                                            <th>Status</th>
                                            <th width="25%">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contests as $key => $contest)
                                            <tr>
                                                <td>{{ $key + $contests->firstItem() }}</td>
                                                <td><img src="{{ asset($contest->contest_image) }}" alt=""
                                                        width="100px">
                                                </td>
                                                <td><a href="{{ route('admin.contest.show.multipaid', $contest->slug) }}"
                                                        style="color:rgb(15, 14, 14); font-weight:900 !important;">
                                                        {{ $contest->contest_name }}</a></td>

                                                <td>{{ $contest->vendor->company_name }}</td>

                                                <td>
                                                    @switch($contest->status)
                                                        @case('1')
                                                            <p><span class="badge rounded-pill bg-success text-white">Contest
                                                                    Verified & Active</span></p>
                                                        @break

                                                        @case('2')
                                                            <p><span class="badge rounded-pill bg-warning text-black">Contest
                                                                    Pending Verification by QuickVote</span></p>
                                                        @break

                                                        @default
                                                            <p><span class="badge rounded-pill bg-danger text-black">Contest
                                                                    Rejected</span></p>
                                                    @endswitch
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.contest.show.multipaid', $contest->slug) }}"
                                                        class="btn btn-warning">View</a>
                                                    {{-- <a href="{{ route('contest.edit', $contest->id) }}"
                                                        class="btn btn-info">Edit</a> --}}
                                                    {{-- <a href="{{ route('contestant.add') }}" class="btn btn-success">Add
                                                        Contestants <i class="ri-arrow-right-line align-middle ms-2"></i>
                                                    </a> --}}
                                                    {{-- <a href="{{ route('contest.delete', $contest->id) }}"
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

                    {{ $contests->links('vendor.pagination.custom') }}

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
