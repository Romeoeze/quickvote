
@extends('admin.admin-master')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="container-fluid">
       
        <div class="row">
            <div class="col-lg-8 justify-content-center align-self-center">


                <div class="card " >
                
                <div class="card-body"> <h3>Edit Profile</h3>
                    <form class="form-horizontal mt-3" method="POST" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
                        
                    @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input id="name" class="form-control" type="text" name="name" value="{{  $profile_data->name }}" />
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input id="email" class="form-control" type="text" name="email" value="{{  $profile_data->email }}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phonenumber" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                                <input id="phonenumber" class="form-control" type="text" name="phonenumber" value="{{  $profile_data->phonenumber}}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">Profile Image</label>
                            <div class="col-sm-10"> 
                                <input id="image" class="form-control" type="file" name="image"  />
                            </div>
                        </div>


                        
                        <div class="row mb-3">
                            <label for="profileimage" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10"> 
                                <img class="img-thumbnail rounded-circle avatar-xl" id="showImage" src="{{(!empty($profile_data->profileimage)) ? url('/uploads/admin_images/'.$profile_data->profileimage) : 
                                url('/backend/assets/images/no_image.jpg') }}" alt="Card image cap" />
                            </div>
                        </div>
                       

                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Update Profile<i class="ri-arrow-right-line align-middle ms-2"></i> 
                        </button>

                          
                        
                    </form>
                    
                </div>
            </div>


              
                
            </div>

        </div>

    
    </div>  

    <script type="text/javascript">
    
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    
@endsection



