@extends('admin.admin-master')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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



                    <form action="{{ route('contest.store') }}" method="POST" enctype="multipart/form-data"
                        data-parsley-validate>
                        @csrf
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Add Contest</h4>
                            </div>
                            <div class="row mt-2">
                                <input type="hidden" value="{{ $contestvendor->id }}" name="vendor_id">

                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Contest Name</label><input
                                        type="text" class="form-control" value="{{ old('contest_name') }}"
                                        placeholder="Enter Contest Name" name="contest_name" required></div>
                                @error('contest_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror



                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Start Date</label><input
                                        type="date" class="form-control" placeholder="Enter Your Email"
                                        value="{{ old('start_date') }}" name="start_date" required></div>
                                @error('start_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-12 mt-2 mb-2"><label class="labels">End Date</label><input type="date"
                                        class="form-control" placeholder="Enter Contest End Date"
                                        value="{{ old('end_date') }}" name="end_date" required></div>
                                @error('end_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror



                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Price Per Vote</label><input
                                        type="number" class="form-control" value="{{ old('vote_price') }}"
                                        placeholder="eg: 100" name="vote_price" required></div>

                                @error('vote_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Currency</label><input type="text"
                                        class="form-control" value="Nigerian Naira (₦)" name="" readonly></div>





                                <div class="col-md-12 mt-4"> <label for="contest_image">Contest Preview Image <span
                                            style="font-size:10px; color:red;">(Recommeded Size: 1350X1350)</span></label>
                                    <div class="col-sm-12">
                                        <input id="image" class="form-control" type="file" name="contest_image"
                                            required />
                                    </div>


                                    <img class="img-thumbnail
                                            rounded-circle avatar-xl mt-3"
                                        id="showImage" src="{{ url('/backend/assets/images/no_image.jpg') }}"
                                        alt="Card image cap" />
                                </div>

                                @error('contest_image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="col-md-12 mt-4">

                                    <label for="company_description" class="form-label">Contest Description</label>

                                    <textarea id="elm1" required name="contest_description" placeholder="Short Description about the contest">
                                        {!! old('contest_description') !!}
                                           </textarea>

                                </div>

                                @error('contest_description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror




                                <div class="col-md-12">
                                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                            type="submit">Publish Contest <i class="fas fa-arrow-right"></i></button>
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
