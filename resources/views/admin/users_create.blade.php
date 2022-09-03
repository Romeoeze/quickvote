


@extends('admin.admin-master')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="container-fluid">


        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"></div>
                </div>
                <div class="col-md-5 border-right">
                    <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">New User Details</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="Enter Full Name" value="{{ old('name')}}" name="name"></div>
                            <div class="col-md-6"><label class="labels">Email ID</label><input type="text" class="form-control" value="{{ old('email') }}" placeholder="enter email address" name="email"></div>



                            <div class="col-md-12"><label class="labels">Phone number</label><input type="text" class="form-control" value="{{ old('phonenumber') }}" placeholder="enter phone number" name="phonenumber"></div>
                        </div>
                        <div class="row mt-3">
                           
                        
                            <div class="col-md-12"><label class="labels mt-2">User Role</label><select name ="role" class="form-select" aria-label="Default select example">
                                    <option selected="">Select User Type</option>
                                    <option value="Voter" >Voter</option>
                                    <option value="Vendor">Vendor</option>
                                    <option value="Admin">Admin</option>
                                      
                                    </select>
                                  
                                    
                                </select>
                                
                                </div>
                         
                        </div>

                        <div class="form-group mb-3 row">
                            <div class="col-12">
                               
                                <label for="password">Password</label>
                                <input id="password" class="form-control"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <label for="password_confirmation">Confirm Password</label>

                                <input id="password_confirmation" 
                                type="password"
                                name="password_confirmation" class="form-control" required />
                            </div>
                        </div>

                       
        
        
                        <div class="col-md-12 mt-4"> <label for="image">Profile Image</label>
                            <div class="col-sm-12"> 
                                <input id="image" class="form-control" type="file" name="image"  /></div>
        
                        <div class="col-md-12">
                            <label for="profileimage" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10"> 
                        
                        <img class="img-thumbnail rounded-circle avatar-xl" id="showImage" src="{{ url('/backend/assets/images/no_image.jpg') }}" alt="Card image cap" />
                        </div>
        
                        
        
                        <div class="col-md-12">
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Add User <i class="ri-user-add-line"></i></button></div>
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
            $(document).ready(function () {
                $('#datatable_wrapper').DataTable();
        });
        </script>

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









