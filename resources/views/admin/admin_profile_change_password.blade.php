@extends('admin.admin-master')

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-8 justify-content-center align-self-center">


                <div class="card ">

                    <div class="card-body">
                        <h3>Change passowrd</h3>


                        @if (count($errors))
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger alert-dismissible fade show">{{ $error }}</p>
                            @endforeach
                        @endif





                        <form class="form-horizontal mt-3" method="POST" action="{{ route('newpassword.update') }}">

                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Old Password</label>
                                <div class="col-sm-10">
                                    <input id="oldpassword" class="form-control" type="password" name="oldpassword" />
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">New Password</label>
                                <div class="col-sm-10">
                                    <input id="newpassword" class="form-control" type="password" name="newpassword" />
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input id="confirmpassword" class="form-control" type="password"
                                        name="confirmpassword" />
                                </div>
                            </div>







                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Change Password<i class="ri-arrow-right-line align-middle ms-2"></i>
                            </button>



                        </form>

                    </div>
                </div>




            </div>

        </div>


    </div>



@endsection
