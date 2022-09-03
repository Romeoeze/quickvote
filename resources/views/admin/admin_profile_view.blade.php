
@extends('admin.admin-master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img class="img-thumbnail " src="{{(!empty($profile_data->profileimage)) ? url('/uploads/admin_images/'.$profile_data->profileimage) : 
                url('/backend/assets/images/no_image.jpg') }}" alt="Card image cap" width="500px">
                    
                </div>
            </div>

            

            <div class="col-lg-4 justify-content-center align-self-center">


                <div class="card " >
                <div class="card-body">
                    <h4 class="card-title">{{ $profile_data->name }}</h4>
                    <hr>
                    <p class="card-text">Email: {{ $profile_data->email }}</p>
                   <hr>
                    <p class="card-text">
                        <small class="text-muted">Phone Number: {{ $profile_data->phonenumber}}</small>
                    </p>
                    {{-- <a href="#" class="btn btn-primary waves-effect waves-light"> --}}
                        <a href="{{ route('admin.profile.edit') }}"><button type="button" class="btn btn-primary waves-effect waves-light">
                        Edit Profile<i class="ri-arrow-right-line align-middle ms-2"></i> 
                    </button></a>
                </div>
            </div>


              
                
            </div>

        </div>
    </div>  
    
@endsection



