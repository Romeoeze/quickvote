@extends('admin.admin-master')


@section('content')
    <div class="container">
        <br><br><br>

        <div class="row">
            <div class="col-8">
                <h1> <span style="color:orangered;">Contestant Preview:</span> {{ $contestant->contest->contest_name }}
                </h1>
            </div>

            <div class="col-4">
                <div class="box mb-8 mr-6 col-md-8">

                    <a href="{{ url()->previous() }}" style="float: right;" class="btn btn-rounded btn-success"><i
                            class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back
                    </a>

                </div><br><br>
            </div>
        </div>
        <div class="main-body">
            <br><br><br><br>


            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img class="img-fluid" src="{{ asset($contestant->image) }} " alt="User Avatar"
                                    width="400px">
                                <br>
                                <h6 class="mb-0">Unique ID:
                                    <span style="color:orangered;">{{ $contestant->passcode }}</span>
                                </h6>



                                <div class="mt-3">

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
                                    <h4><span style="color:orangered;">Name:</span> {{ $contestant->name }}
                                    </h4>
                                    </h6>
                                    <hr>
                                    <h6><span style="color:rgb(15, 15, 15);">Bio</span></h6>
                                    <p></p>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $contestant->bio }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">vote Count</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $contestant->vote_total }}
                                </div>
                            </div>

                            <hr>

                            <a href="{{ route('contestant.edit', $contestant->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('contestant.delete', $contestant->id) }}" class="btn btn-danger"
                                id="delete">Delete</a>




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
@endsection
