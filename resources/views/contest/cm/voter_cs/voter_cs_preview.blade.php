
@extends('admin.admin-master')


@section('content')
{{-- <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
       

      

      <!-- Main content -->
      <section class="content">
        <div class="row">
            
           

                    <div class="col-8">

                            <h3 class="widget-user-username"></h3>

                            
                            
                            

            
                            
                                
                        </div>
                        <div class="col-4">
                            
                                    <h5 class="description-header">Mobile No</h5>
                                    <span class="description-text">{{ $user->phonenumber }}</span>
                        </div>



        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="d bg-orange">
                    <div class="d-body">
                        <img class="img-thumbnail rounded-circle"
                                src="{{ (!empty($user->profileimage))? url('/uploads/admin_images/'.$user->profileimage):url('uploads/no_image.jpg') }} " alt="User Avatar" width="300px">
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card bg-success text-white-50">
                    <div class="card-body">
                        <h6 class="widget-user-desc">User Type : {{ $user->phonenumber }}</h6>
                            <h6 class="widget-user-desc">User Email : {{ $user->email }}</h6>
                            <p class="card-text">{{ $user->name }}</p>
                            <p class="card-text">{{ $user->name }}</p> <p class="card-text">{{ $user->name }}</p> <p class="card-text">{{ $user->name }}</p>
                            <p class="card-text">{{ $user->name }}</p>
                            <p class="card-text">{{ $user->name }}</p> <p class="card-text">{{ $user->name }}</p> <p class="card-text">{{ $user->name }}</p> <p class="card-text">{{ $user->name }}</p>
                            <p class="card-text">{{ $user->name }}</p> <p class="card-text">{{ $user->name }}</p> <p class="card-text">{{ $user->name }}</p>
                    </div>
                </div>
            </div>

        
        </div>


</section>   
                      --}}
                      

                      <div class="container">
                        <div class="main-body">
                        
                         
                        
                              <div class="row gutters-sm">
                                <div class="col-md-4 mb-3">
                                  <div class="card">
                                    <div class="card-body">
                                      <div class="d-flex flex-column align-items-center text-center">
                                        <img class="img-thumbnail rounded-circle"
                                        src="{{ (!empty($user->profileimage))? url('/uploads/admin_images/'.$user->profileimage):url('uploads/no_image.jpg') }} " alt="User Avatar" width="200px">
                                        <div class="mt-3">
                                          <h4>{{ $user->name  }}</h4>
                                          <p class="text-secondary mb-1">{{ $user->Role }}</p>
                                          {{-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                          <button class="btn btn-primary">Follow</button>
                                          <button class="btn btn-outline-primary">Message</button> --}}
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card mt-3">
                                    
                                  </div>
                                </div>
                                <div class="col-md-8">
                                  <div class="card mb-3">
                                    <div class="card-body">
                    
                            
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->email  }}
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Phone</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->phonenumber  }}
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Email Address</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                          {{ $user->email }}
                                        </div>
                                      </div>
                                      <hr>

                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Join Date</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{  \Carbon\Carbon::parse($user->created_at)->diffForHumans()  }}

                                          
                                        </div>
                                      </div>
                                      <hr>
                                      
                                      <div class="row">
                                        <div class="col-sm-12">
                                          <a class="btn btn-info " href="{{ route('admin.users.edit', $user->id) }}">Edit User </a>
                                        </div>
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

@endsection
