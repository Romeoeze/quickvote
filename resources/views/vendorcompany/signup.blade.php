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

                    <img class="img-fluid mt-6" src="{{ asset('uploads/images/vendor_signup.png') }}" width="400px"
                        alt="">
                    <form action="{{ route('vendor.store') }}" method="POST" enctype="multipart/form-data"
                        id="VendorSignUpForm" data-parsley-validate>
                        @csrf
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Vendor Sign Up</h4>
                            </div>
                            <div class="row mt-2">
                                <input type="hidden" value="{{ $user->id }}" name="user_id">

                                <div class="col-md-6 mt-2 mb-2"><label class="labels">Vendor Name</label><input
                                        type="text" class="form-control" value="{{ $user->name }}"
                                        placeholder="Enter Your Name" name="vendor_name" readonly></div>


                                <div class="col-md-6 mt-2 mb-2"><label class="labels">Email ID</label><input type="text"
                                        class="form-control" placeholder="Enter Your Email" value="{{ $user->email }}"
                                        name="vendor_email" readonly></div>


                                {{-- $table->longText('company_description')->nullable();
                            $table->string('account_name')->nullable();
                            $table->string('account_number')->nullable();
                            $table->string('bank_name')->nullable(); --}}

                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Phone number</label><input
                                        type="text" class="form-control" value="{{ $user->phonenumber }}"
                                        placeholder="enter phone number" name="company_phonenumber" readonly></div>

                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Company Name</label><input
                                        type="text" class="form-control" value="{{ old('company_name') }}"
                                        placeholder="enter company name" name="company_name" required=""></div>


                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Company Address</label><input
                                        type="text" class="form-control" value="{{ old('company_address') }}"
                                        placeholder="enter company address" name="company_address" required=""></div>


                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Account Name</label><input
                                        type="text" class="form-control" value="{{ old('account_name') }}"
                                        placeholder="enter account name" name="account_name"></div>



                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Account Number</label><input
                                        type="text" class="form-control" value="{{ old('account_number') }}"
                                        placeholder="enter account number" name="account_number" required=""></div>


                                <div class="col-md-12 mt-2 mb-2"><label class="labels">Bank Name</label><input
                                        type="text" class="form-control" value="{{ old('bank_name') }}"
                                        placeholder="enter bank name" name="bank_name" required=""></div>
                            </div>


                            <div class="col-md-12 mt-4"> <label for="company_logo">Company Logo</label>
                                <div class="col-sm-12">
                                    <input id="image" class="form-control" type="file" name="company_logo"
                                        required="" accept="image/*" />
                                </div>


                                <img class="img-thumbnail rounded-circle avatar-xl mt-3" id="showImage"
                                    src="{{ url('/backend/assets/images/no_image.jpg') }}" alt="Card image cap" />
                            </div>


                            <div class="col-md-12 mt-4">

                                <label for="company_description" class="form-label">Company Description</label>

                                <textarea id="elm1" name="company_description" placeholder="Short Description about your company." required=""
                                    minlength="50">
                                     
                                           </textarea>

                            </div>




                            <div class="col-md-12">
                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                        type="submit">Create Vendor Account <i class="ri-user-add-line"></i></button>
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
