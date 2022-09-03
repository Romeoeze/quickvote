@extends('admin.admin-master')


@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <br><br><br>

            <div class="row">
                <div class="col-8">
                    <h1>Edit Category</h1>
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

                                <form method="post"
                                    action="{{ route('corporatemulticontestcategory.update', $category->id) }}"
                                    enctype="multipart/form-data" id="CatgoryEditForm" data-parsley-validate>
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="add_item">



                                                <div class="form-group">

                                                </div>

                                            </div> <!-- // end form group -->



                                            <div class="row">

                                                <div class="row"
                                                    style="background-color: rgb(255, 255, 255); margin-top:20px;padding:40px; border-radius:40px;">



                                                    <div class="col-md-6" style="padding-top: 25px;">
                                                        <label class="labels mt-4">Category Name</label><input
                                                            type="text" class="form-control"
                                                            value="{{ $category->category_name }}"
                                                            placeholder="enter category name" name="category_name"
                                                            required="" /><br>

                                                        <div class="text-xs-right">
                                                            <center> <br>


                                                                <button style="text-align:center; margin: 0 auto;"
                                                                    class="text-center btn btn-primary profile-button"
                                                                    type="submit">Update
                                                                    Category <i
                                                                        class="ri-arrow-right-line mt-6"></i></button>
                                                            </center>
                                                        </div><br>






                                                    </div>



                                                    <div class="col-md-6" style="padding-top: 25px;">


                                                    </div>










                                                </div>






                                            </div>



                                            <br><br><br>
                                            <!-- end Row -->

                                        </div> <!-- // End add_item -->




                                        {{-- <hr>
                                        <em>For best performance...add <span style="color:red; font-weight:900;">a
                                                maximum of 6 contestants in one batch <i
                                                    class="ri-error-warning-line"></i></span></em>
                                        <hr> --}}
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
