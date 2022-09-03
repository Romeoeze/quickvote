@php
$user = Auth::user()->id;
$profile_data = App\Models\User::find($user);

if (Auth::user()->Role == 'Vendor') {
    $user = Auth::user()->id;
    $vendor = App\Models\Vendor::where('user_id', $user)->first();
}

@endphp


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
                <div class="col-md-5 border-right"><br>
                    <img class="img-fluid mt-6" src="{{ url('uploads/vendors/' . $vendor->company_logo) }}" alt="">
                    <form action="{{ route('vendor.update', $vendor->id) }}" method="POST" enctype="multipart/form-data"
                        id="VendorEditForm" data-parsley-validate>
                        @csrf
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Vendor Update</h4>
                            </div>
                            <div class="row mt-2">

                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Company Name</label><input
                                        type="text" class="form-control" value="{{ $vendor->company_name }}"
                                        name="company_name" required=""></div>


                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Company Address</label><input
                                        type="text" class="form-control" value="{{ $vendor->company_address }}"
                                        name="company_address" required=""></div>


                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Account Name</label><input
                                        type="text" class="form-control" value="{{ $vendor->account_name }}"
                                        name="account_name" required=""></div>



                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Account Number</label><input
                                        type="text" class="form-control" value="{{ $vendor->account_number }}"
                                        name="account_number" required=""></div>


                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Bank Name</label><input
                                        type="text" class="form-control" value="{{ $vendor->bank_name }}"
                                        name="bank_name" required=""></div>
                            </div>


                            <div class="col-md-12 mt-4"> <label for="company_logo">Company Logo</label>
                                <div class="col-sm-12">
                                    <input id="image" class="form-control" type="file" name="company_logo"
                                        accept="image/*" />
                                </div>


                                <img class="img-thumbnail rounded-circle avatar-xl mt-3" id="showImage"
                                    src="{{ url('/backend/assets/images/no_image.jpg') }}" alt="Card image cap" />
                            </div>


                            <div class="col-md-12 mt-4">

                                <label for="company_description" class="form-label">Company Description</label>

                                <textarea id="elm1" name="company_description" maxlength="500" required="">
                                        {!! $vendor->company_description !!}
                                     
                                           </textarea>

                            </div>




                            <div class="col-md-12">
                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                        type="submit">Update Vendor Account <i class="ri-user-add-line"></i></button></div>
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
