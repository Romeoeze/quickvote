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




                    <form action="{{ route('corporatesinglecontest.update', $contest->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Edit Contest</h4>
                            </div>
                            <div class="row mt-2">



                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Contest Name</label><input
                                        type="text" class="form-control" value="{{ $contest->contest_name }}"
                                        placeholder="Enter Contest Name" name="contest_name"></div>

                                @error('contest_name')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror

                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Start Date &
                                        Time</label><input type="datetime-local" class="form-control"
                                        value="{{ \Carbon\Carbon::parse($contest->start_date)->format('Y-m-d\TH:i') }}"
                                        name="start_date"></div>

                                @error('start_date')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror

                                <div class="col-md-12 mt-2 mb-2"><label class="labels">End Date & Time</label><input
                                        type="datetime-local" class="form-control"
                                        value="{{ \Carbon\Carbon::parse($contest->end_date)->format('Y-m-d\TH:i') }}"
                                        name="end_date"></div>

                                @error('end_date')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror







                                <div class="col-md-12 mt-4"> <label for="contest_image">Contest Preview Image <span
                                            style="font-size:10px; color:red;">(Recommeded Size: 1350X1350)</span></label>
                                    <div class="col-sm-12">
                                        <input id="image" class="form-control" type="file" name="contest_image" />
                                    </div>
                                    @error('contest_image')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror

                                    <img class="img-thumbnail rounded-circle avatar-xl mt-3" id="showImage"
                                        src="{{ !empty($contest->contest_image) ? asset($contest->contest_image) : url('/backend/assets/images/no_image.jpg') }}"
                                        alt="Card image cap" />
                                </div>












                                <div class="col-md-12 mt-4">

                                    <label for="company_description" class="form-label">Contest Description</label>

                                    <textarea id="elm1" name="contest_description" placeholder="Short Description about the contest">

                                        {{ $contest->contest_description }}
                                     
                                    </textarea>

                                    @error('contest_description')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror

                                </div>




                                <div class="col-md-12">
                                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                            type="submit">Update Contest <i class="fas fa-arrow-right"></i></button></div>
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
