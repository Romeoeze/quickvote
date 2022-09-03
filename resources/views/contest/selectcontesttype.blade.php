@extends('admin.admin-master')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="container-fluid">


        <div class="container rounded bg-white mt-5 mb-5" style="padding: 30px;">

            <div class="container">


                <h1>Select Contest Type</h1><br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{ asset('uploads/pageant.jpeg') }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title" style="font-weight:900; font-size:26px;color:rgb(173, 108, 24);">
                                    Single
                                    Category Contest
                                </h2>
                                <p class="card-text">Contest has just One (1)
                                    Category. All listed contestants are competing for the same prize.
                                </p>
                                <p class="card-text"><span
                                        style="font-weight:900; color:rgb(100, 93, 91); margin-top:-10px;">Example:
                                        Beauty
                                        Pagents.</span>
                                </p>
                                <a href="{{ route('monocontest.add') }}"><button type="button"
                                        class="btn btn-success btn-lg waves-effect waves-light">Create Now <i
                                            class="ri-arrow-right-line align-middle ms-2"></i></button></a>
                            </div>
                        </div>



                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{ asset('uploads/awards.jpg') }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title" style="font-weight:900; font-size:26px; color:rgb(8, 8, 8)">
                                    Multi Category Contest
                                </h2>
                                <p class="card-text">Contest has different
                                    Categories. All listed contestants are competing for different prizes depending on each
                                    category.
                                </p>
                                <p class="card-text"><span style="font-weight:900; color:rgb(100, 93, 91)">Example:
                                        Award
                                        Shows</span>
                                </p> <a href="{{ route('multicontest.create') }}"><button type="button"
                                        class="btn btn-primary btn-lg waves-effect waves-light">Create Now <i
                                            class="ri-arrow-right-line align-middle ms-2"></i></button></a>
                            </div>

                        </div><br><br>


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
