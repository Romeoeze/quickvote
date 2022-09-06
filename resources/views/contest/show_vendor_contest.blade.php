@extends('admin.admin-master')


@section('content')
    <div class="container">
        <div class="main-body">



            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img class="img-fluid"
                                    src="{{ !empty($contest->contest_image) ? url($contest->contest_image) : url('uploads/no_image.jpg') }} "
                                    alt="User Avatar" width="400px">
                                <div class="mt-3">
                                    @if ($contest->status == '1')
                                        <p><span class="badge rounded-pill bg-success text-white">Contest Verified &
                                                Active</span></p>
                                    @elseif($contest->status == '2')
                                        <p><span class="badge rounded-pill bg-warning text-black">Contest Pending
                                                Verification</span></p>
                                    @else
                                        <p><span class="badge rounded-pill bg-danger text-black">Contest Deactivated</span>
                                        </p>
                                    @endif

                                    {{-- @switch($contest->status)
                        @case('1')
                        <p><span class="badge rounded-pill bg-success text-white">Account Verified & Active</span></p>
                            @break

                        @case('2')
                        <p><span class="badge rounded-pill bg-warning text-black">Account Pending Verification</span></p>
                     
                            @break

                        @default
                        <p><span class="badge rounded-pill bg-danger text-black">Account Deactivated</span></p>
                    @endswitch --}}



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
                                    <h4><span style="color:orangered;">Contest Name:</span> {{ $contest->contest_name }}
                                    </h4>
                                    </h6>
                                    <hr>
                                    <h6><span style="color:rgb(15, 15, 15);">Contest Description</span></h6>
                                    <p>{!! $contest->contest_description !!}</p>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <h6><span style="color:orangered;">Oraganized by:</span>
                                        {{ $contest->vendor->company_name }}</h6>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Contest Start Date</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $contest->start_date }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Contest End Date</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $contest->end_date }}
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Cost/Vote</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $contest->vote_price }}


                                </div>
                            </div>
                            <hr>


                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Created</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ \Carbon\Carbon::parse($contest->created_at)->diffForHumans() }}


                                </div>
                            </div>
                            <hr>



                            <div class="row">
                                <div class="col-sm-12">
                                    @if (Auth::user()->Role == 'Vendor')
                                        <a class="btn btn-info " href="{{ route('contest.edit', $contest->id) }}">Edit
                                            contest Account <i class="ri-edit-box-fill iconcss"></i>
                                        </a>


                                        <a class="btn btn-warning " href="{{ route('contestant.add') }}"> Add Contestants <i
                                                class="ri-file-add-fill iconcss"></i>
                                        </a>
                                    @endif

                                    @if (Auth::user()->Role == 'Admin')
                                        @if ($contest->status == '1')
                                            <a id="stop" class="btn btn-danger "
                                                href="{{ route('admin.contest.show.singlepaid.stop', $contest->slug) }}">
                                                Stop Contest <i class="ri-stop-circle-line iconcss"></i> </a>
                                        @elseif($contest->status == '2')
                                            <a id="approve" class="btn btn-success"
                                                href="{{ route('admin.contest.show.singlepaid.approve', $contest->slug) }}">Approve
                                                Contest <i class="ri-edit-box-fill iconcss"></i> </a>
                                        @else
                                            <a id="reactivate" class="btn btn-success"
                                                href="{{ route('admin.contest.show.singlepaid.reactivate', $contest->slug) }}">Reactivate
                                                Contest <i class="ri-edit-box-fill iconcss"></i> </a>
                                        @endif
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>





                </div>
            </div>

        </div>
    </div>




    <div class="container" style="background-color: rgb(255, 255, 255); padding:30px; text-align:center;"><br>
        <br>
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4"></div>
            <div class="col-4">
                <div class="box mb-8 mr-6 col-md-8">
                    @if (Auth::user()->Role == 'Vendor')
                        <a href="{{ route('contestant.add') }}" style="float: right;" class="btn btn-rounded btn-success">
                            Add
                            Contestants <i class="ri-add-circle-fill"></i></a>
                    @endif

                </div>
            </div>
        </div>
        <h1>CONTESTANTS</h1>

        <br>
        @forelse($contest->contestants->chunk(3) as $contestants)
            <div class="row">

                @foreach ($contestants as $con)
                    <div class="col-md-4">
                        <a href=""><img class="img-thumbnail rounded-circle avatar-xlsrc="
                                src="{{ asset($con->image) }}" alt="Image" width="340px"></a><br>
                        <h3 class="heading mt-4 mb-4">{{ $con->name }}</h3>
                        <h3><a href="{{ route('contestant.vendor.show', $con->id) }}"><button type="button"
                                    class="btn btn-primary waves-effect waves-light" style="font-size:12px;">
                                    View Contestant <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                </button></a></h3>
                        <br><br><br><br>

                    </div>
                @endforeach



            </div>

        @empty

            <h6> ....no contestant found...</h6>
            <br>
        @endforelse

        <br>













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
