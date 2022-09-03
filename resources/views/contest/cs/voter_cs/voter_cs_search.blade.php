@extends('admin.admin-master')


@section('content')
    <div class="container-full">
        <div class="row">
            <div class="col-4">
                <h3>My voters</h3>
            </div>
            <div class="col-4"></div>
            <div class="col-4">
                <div class="box mb-8 mr-6 col-md-8">

                    <a href="{{ route('corporatesinglevoter.add') }}" style="float: right;"
                        class="btn btn-rounded btn-success"> Add
                        voter <i class="ri-add-circle-fill"></i></a>

                </div>
            </div>
        </div>

    </div>


    @if (count($voters))
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Content Header (Page header) -->


                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <form method="GET" action="{{ route('csvoters.loadsearch') }}">
                            <div class="col-10">
                                <input type="text" class="form-control" name="searchVoters"
                                    placeholder="Search Voters by Name or Email..."
                                    value="{{ request()->query('searchVoters') }}">
                            </div>
                            <div class="col-4"><br>
                                <input class="btn btn-primary" type="submit" value="Search Voters">
                            </div>

                        </form>

                        <div class="col-12 pt-4">


                            <!-- /.box-header -->
                            <div class="box-body">

                                <div class="table-responsive datatable">
                                    <table id="datatable" class="table table-bordered table-striped">

                                        <thead>
                                            <tr>
                                                <th width="2%">SL</th>

                                                <th>Voter's Name</th>

                                                <th>Voter's Email</th>
                                                <th>Contest Name</th>
                                                <th>Activation Status</th>
                                                <th width="25%">

                                                </th>


                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach ($voters as $key => $voter)
                                                <tr>
                                                    <td>{{ ($voters->currentPage() - 1) * $voters->perPage() + $loop->iteration }}
                                                    </td>

                                                    <td><a href=""
                                                            style="color:rgb(15, 14, 14); font-weight:900 !important;">
                                                            {{ $voter->name }}</a></td>

                                                    <td>{{ $voter->email }}</td>
                                                    <td>{{ $voter->contest->contest_name }}</td>

                                                    <td>
                                                        @switch($voter->status)
                                                            @case('1')
                                                                <p><span class="badge rounded-pill bg-success text-white">Voter
                                                                        Verified & Active</span></p>
                                                            @break

                                                            @case('2')
                                                                <p><span class="badge rounded-pill bg-warning text-black">Voter
                                                                        Pending Activation by QuickVote</span></p>
                                                            @break

                                                            @default
                                                                <p><span class="badge rounded-pill bg-danger text-black">Voter
                                                                        Rejected</span></p>
                                                        @endswitch
                                                    </td>
                                                    <td>
                                                        {{-- <a href="{{ route('corporatesinglevoter.edit', $voter->id) }}"
                                                            class="btn btn-info"><i class="ri-edit-box-line"></i>
                                                            Edit</a> --}}

                                                        <a id="delete"
                                                            href="{{ route('corporatesinglevoter.delete', $voter->id) }}"
                                                            class="btn btn-danger"><i class="ri-delete-bin-line"></i>
                                                            Delete</a>




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
                    <div class="col-10 mt-11">
                        {{ $voters->links('vendor.pagination.custom') }}

                    </div>
                    <!-- /.col -->
            </div>
            <!-- /.row -->


            </section>
            <!-- /.content -->

        </div>
        </div>
    @else
        <br><br><br><br>
        <h2>....no record found.</h2>
    @endif






    <!-- init js -->
    <script src="{{ asset('backend/assets/js/pages/form-editor.init.js') }} "></script>

    <!-- Required datatable js -->
    <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.datatable').DataTable();
        });
    </script>
@endsection
