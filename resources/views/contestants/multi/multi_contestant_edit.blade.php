@extends('admin.admin-master')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@section('content')
    <div class="container">
        <br><br><br>

        <div class="row">
            <div class="col-8">
                <h2> <span style="color:orangered;">Edit Contestant:</span> {{ $contestant->name }}
                </h2>
            </div>

            <div class="col-4">
                <div class="box mb-8 mr-6 col-md-8">

                    <a href="{{ route('multicontest.all') }}" style="float: right;" class="btn btn-rounded btn-success"><i
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


                                <form action="{{ route('multicontestant.update', $contestant->id) }}"
                                    id="ContestantEditForm" data-parsley-validate method="POST"
                                    enctype="multipart/form-data">

                                    @csrf
                                    <div class="p-3 py-5">
                                        <div class="row mt-2">



                                            <div class="col-md-12 mt-2 mb-2"><label class="labels">Contest
                                                    Name</label><input type="text" class="form-control"
                                                    value="{{ $contestant->name }}" placeholder="Enter Contestant Name"
                                                    name="name" required=""></div>



                                            <div class="col-md-12 mt-4">



                                                <label>Contestant's Bio</label>
                                                <div>
                                                    <textarea placeholder="...optional. If available, input the bio of the contestant. " required="" class="form-control"
                                                        rows="8" name="bio">
                                                        {{ $contestant->bio }}
                                                    </textarea>
                                                </div>

                                            </div>

                                            <div class="col-md-12 mt-4"> <label for="image">Contestant's
                                                    Image</label>
                                                <div class="col-sm-12">
                                                    <input id="image" class="form-control" type="file" name="image"
                                                        accept="image/*" />
                                                </div>


                                                <img class="img-thumbnail rounded-circle avatar-xl mt-3" id="showImage"
                                                    src="{{ asset($contestant->image) }}" alt="Card image cap" />
                                            </div>






                                            <div class="col-md-12">
                                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                                        type="submit">Update Contestant Data <i
                                                            class="fas fa-arrow-right"></i></button>
                                                </div>
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
