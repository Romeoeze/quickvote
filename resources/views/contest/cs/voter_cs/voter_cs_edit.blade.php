@extends('admin.admin-master')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="container-fluid">

        <div class="col-md-11">
            <a href="{{ url()->previous() }}" style="float: right;" class="btn btn-rounded btn-success"><i
                    class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back
            </a>
        </div><br><br>

        <div class="container rounded bg-white mt-5 mb-5">

            <div class="row">


                <div class="col-md-5 border-right">
                    <form action="{{ route('corporatesinglevoter.update', $voter->id) }}" method="POST">
                        @csrf
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Edit Voter</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6"><label class="labels">Voter's Name</label><input
                                        type="text" class="form-control" placeholder="Enter Voters Name"
                                        value="{{ $voter->name }}" name="name"></div>
                                <div class="col-md-6"><label class="labels">Voter's Email</label><input
                                        type="email" class="form-control" value="{{ $voter->email }}"
                                        placeholder="Enter Voter's Email" name="email"></div>
                            </div>


                            <div class="col-md-12">
                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                        type="submit">Update Voter's Information</button></div>
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
