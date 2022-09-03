@extends('admin.admin-master')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

    <div class="container-fluid">


        <div class="container rounded bg-white mt-5 mb-5">

            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"></div>
                </div>
                <div class="col-md-5 border-right"> <br>
                    {{-- @if ($errors->any())
                        {!! implode(
                            '',
                            $errors->all('<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                                                :message
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                 </div>'),
                        ) !!}
                    @endif --}}


                    @if (count($all_contests))
                        <form id="requestPayout" data-parsley-validate action="{{ route('admin.contest.search') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right">Check Contest</h4><br>
                                    <img width="130" src="{{ asset('images/contest.png') }}" alt="">
                                </div>
                                <div class="row mt-2">


                                    <div class="col-md-12 mt-2 mb-2"><label class="labels">Contest Category</label>
                                        @error('contest_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror


                                        <select class="form-select" name="category_id" required="">
                                            <option value="" selected="" disabled="">Select
                                                Contest Category
                                            </option>

                                            <option value="1">PAID CONTEST --- SINGLE CATEGORY</option>
                                            <option value="2">PAID CONTEST --- MULTI CATEGORY</option>
                                            <option value="3">FREE CONTEST --- SINGLE CATEGORY</option>
                                            <option value="4">FREE CONTEST --- MULTI CATEGORY</option>




                                        </select>

                                        {{-- <div class="col-md-12 mt-2 mb-2"><label class="labels">Contest Name</label>
                                            @error('contest_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror


                                            <select class="form-select" name="contest_id" required="">
                                                <option value="" selected="" disabled="">Select
                                                    Contest Name
                                                </option>





                                            </select> --}}







                                        <div class="col-md-12">
                                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                                    type="submit">Check Contest Details <i
                                                        class="fas fa-arrow-right"></i></button>
                                            </div><br>


                                        </div>
                                    @else
                                        <img style="margin:0px;" width="330" src="{{ asset('images/noitems.png') }}"
                                            style="padding:30px;"><br><br>
                                        <p>Kindly create a contest</p>
                                        <a href="{{ route('contest.create') }}"><button
                                                class="btn btn-primary profile-button" type="submit">CREATE CONTEST <i
                                                    class="fas fa-arrow-right"></i></button></a><br><br>
                    @endif







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





    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function() {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: "{{ url('/admin/contests/ajax') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            var d = $('select[name="contest_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="contest_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .contest_name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script> --}}









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
