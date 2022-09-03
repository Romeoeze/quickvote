
@extends('admin.admin-master')


@section('content')


                      <div class="container">
                        <div class="main-body">
                        
                         
                        
                              <div class="row gutters-sm">
                                <div class="col-md-4 mb-3">
                                  <div class="card">
                                    <div class="card-body">
                                      <div class="d-flex flex-column align-items-center text-center">
                                        <img class="img-fluid"
                                        src="{{ (!empty($vendor->company_logo))? url('uploads/vendors/'.$vendor->company_logo):url('uploads/no_image.jpg') }} " alt="User Avatar" width="200px">
                                        <div class="mt-3">
                                          @if ($vendor->status == '1')
                                            <p><span class="badge rounded-pill bg-success text-white">Account Verified & Active</span></p>
                                         
                                        

                                         @elseif($vendor->status == '2')
                                            <p><span class="badge rounded-pill bg-warning text-black">Account Pending Verification by QuickVote</span></p>
                                         

                                

                                         @else ($vendor->status =='3')
                                            <p><span class="badge rounded-pill bg-danger text-black">Account Deactivated</span></p>
                                         
                                       
                                       
                                        @endif 

                                            {{-- @switch($vendor->status)
                                            @case('1')
                                            <p><span class="badge rounded-pill bg-success text-white">Account Verified & Active</span></p>
                                                @break

                                            @case('2')
                                            <p><span class="badge rounded-pill bg-warning text-black">Account Pending Verification</span></p>
                                         
                                                @break

                                            @default
                                            <p><span class="badge rounded-pill bg-danger text-black">Account Deactivated</span></p>
                                        @endswitch  --}}

                                          
                                       
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
                                        <div class="col-sm-12">
                                          <h4><span style="color:orangered;">Company Name:</span> {{ $vendor->company_name  }}</h4></h6>
                                          <hr>
                                          <h6><span style="color:rgb(15, 15, 15);">Company Bio</span></h6>
                                            <p>{!! $vendor->company_description !!}</p>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $vendor->company_email  }}
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Phone</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $vendor->company_phonenumber  }}
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Account Number</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                          {{ $vendor->account_name }}
                                        </div>
                                      </div>
                                      <hr>

                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Account Number</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $vendor->account_number }}

                                          
                                        </div>
                                      </div>
                                      <hr>

                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Bank Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $vendor->bank_name }}

                                          
                                        </div>
                                      </div>
                                      <hr>

                                      <div class="row">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Join Date</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{  \Carbon\Carbon::parse($vendor->created_at)->diffForHumans()  }}

                                          
                                        </div>
                                      </div>
                                      <hr>

                                      
                                      
                                      <div class="row">
                                        <div class="col-sm-12">
                                          <a class="btn btn-warning " href="{{ route('vendor.edit', $vendor->user_id) }}">Edit Vendor Account <i class="ri-edit-box-fill"></i> </a>

                                          <a class="btn btn-success" href="{{ route('contest.create', $vendor->user_id) }}">Create Contest  <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> </a>

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
