@extends('admin.admin-master')


@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <br><br><br>

            <div class="row">
                <div class="col-8">
                    <h1>Add Contestant</h1>
                </div>

                <div class="col-4">
                    <div class="box mb-8 mr-6 col-md-8">

                        <a href="{{ url()->previous() }}" style="float: right;" class="btn btn-rounded btn-success"><i
                                class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back
                        </a>

                    </div><br><br>
                </div>
            </div>

            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">


                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" id="contestantAddForm" data-parsley-validate
                                    action="{{ route('multicontestant.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="add_item">

                                                <div class="form-group">
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label">
                                                            <h6>Category & Contest Name</h6>
                                                        </label>

                                                        <div class="col-sm-12">
                                                            <select class="form-select" name="category_id" required="">
                                                                <option value="" selected="" disabled="">Select
                                                                    Category
                                                                    Name & Contest
                                                                </option>

                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}">
                                                                        {{ $category->category_name }} •••••••••••
                                                                        {{ $category->contest->contest_name }}
                                                                    </option>
                                                                @endforeach



                                                            </select>
                                                            <a href="{{ route('contest.create') }}">
                                                                <p
                                                                    style="font-size:12px; margin-top:9px; color:rgb(167, 97, 5)">
                                                                    &nbsp;&nbsp;&nbsp;Can't find contest? Add New Contest
                                                                    here +</p>
                                                            </a>
                                                            <a href="{{ route('multicontestcategory.create') }}">
                                                                <p
                                                                    style="font-size:12px; margin-top:9px; color:rgb(167, 97, 5)">
                                                                    &nbsp;&nbsp;&nbsp;Can't find contest category? Add New
                                                                    Category
                                                                    here +</p>
                                                            </a>


                                                        </div>
                                                    </div>
                                                </div> <!-- // end form group -->







                                                <div class="row">

                                                    <div class="row"
                                                        style="background-color: rgb(255, 255, 255); margin-top:20px;padding:40px; border-radius:40px;">



                                                        <div class="col-md-4" style="padding-top: 25px;">
                                                            <label class="labels mt-4">Contestant Name</label><input
                                                                type="text" class="form-control"
                                                                value="{{ old('contestant_name') }}"
                                                                placeholder="enter the name of contestant"
                                                                name="contestant_name[]" required=""
                                                                data-parsley-trigger="keyup" /><br>

                                                            <label for="company_logo">Upload Contestant Picture</label>
                                                            <input id="contestant_image" class="form-control" type="file"
                                                                name="contestant_image[]" required=""
                                                                accept="image/*" /><br>

                                                            {{-- <img class="img-thumbnail rounded-circle avatar-xl mt-3" id="showImage" src="{{ url('/backend/assets/images/no_image.jpg') }}" alt="Card image cap" /> --}}
                                                        </div>



                                                        <div class="col-md-6" style="padding-top: 25px;">

                                                            <div class="mb-3">
                                                                <label>Contestant's Bio</label>
                                                                <div>
                                                                    <textarea placeholder="...optional. If available, input the bio of the contestant. " required="" class="form-control"
                                                                        rows="8" name="bio[]" data-parsley-minlength="40" data-parsley-trigger="keyup"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>









                                                        <div class="col-md-2" style="padding-top: 25px;">
                                                            <span class="btn btn-success addeventmore"><i
                                                                    class="fa fa-plus-circle"></i> Add More
                                                                Contestants</span>
                                                        </div>

                                                    </div>






                                                </div>



                                                <br><br><br>
                                                <!-- end Row -->

                                            </div> <!-- // End add_item -->

                                            <div class="text-xs-right">
                                                <center> <br>


                                                    <button style="text-align:center; margin: 0 auto;"
                                                        class="text-center btn btn-primary profile-button"
                                                        type="submit">Upload Contestant(s) <i
                                                            class="ri-upload-cloud-fill"></i></button>
                                                </center>
                                            </div><br>


                                            <hr>
                                            <em>For best performance...add <span style="color:red; font-weight:900;">a
                                                    maximum of 6 contestants in one batch <i
                                                        class="ri-error-warning-line"></i></span></em>
                                            <hr>
                                </form>

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </section>





        </div>
    </div>


    <div style="visibility: hidden;">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">


                <div class="row">

                    <div class="row"
                        style="background-color: rgb(255, 255, 255); margin-top:20px;padding:40px; border-radius:40px;">



                        <div class="col-md-4" style="padding-top: 25px;">
                            <label class="labels mt-4">Contestant Name</label><input type="text" class="form-control"
                                value="{{ old('contestant_name') }}" placeholder="enter the name of contestant"
                                name="contestant_name[]" required="" data-parsley-trigger="keyup" /><br>

                            <label for="company_logo">Upload Contestant Picture</label>
                            <input id="contestant_image" class="form-control" type="file" name="contestant_image[]"
                                required="" accept="image/*" /><br>


                        </div>



                        <div class="col-md-6" style="padding-top: 25px;">

                            <div class="mb-3">
                                <label>Contestant's Bio</label>
                                <div>
                                    <textarea placeholder="...optional. If available, input the bio of the contestant. " required=""
                                        class="form-control" rows="8" name="bio[]" data-parsley-minlength="40" data-parsley-trigger="keyup"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2" style="padding-top: 25px;">
                            <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> Add More
                                Contestants</span>
                            <span style="margin-top:15px;" class="btn btn-danger removeeventmore"><i
                                    class="fa fa-minus-circle"></i> Remove Contestant </span>
                        </div>

                    </div>

                </div>
            </div>
        </div>


        <script type="text/javascript">
            $(document).ready(function() {
                var counter = 0;
                $(document).on("click", ".addeventmore", function() {
                    var whole_extra_item_add = $('#whole_extra_item_add').html();
                    $(this).closest(".add_item").append(whole_extra_item_add);
                    counter++;
                });
                $(document).on("click", '.removeeventmore', function(event) {
                    $(this).closest(".delete_whole_extra_item_add").remove();
                    counter -= 1
                });

            });
        </script>




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





        <script>
            $('#contestantAddForm').parsley();

            
        </script>
    @endsection
