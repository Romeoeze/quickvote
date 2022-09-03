


@extends('admin.admin-master')

@section('content')

    


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="container-fluid">
   
    <div class="row">
        <div class="col-lg-8 justify-content-center align-self-center">


            <div class="card " >

              
                
            <div class="card-body"> 

                <div class="row">
                    <div class="col-6"><h3>Create Brand Logos</h3></div>
                    <div class="col-6"><a href="{{ route('brands.show') }}" style="float:right;" class="btn btn-primary waves-effect waves-light "><i class="ri-arrow-left-line align-middle ms-2 mr-5"></i> 
                        Back </a></div>
                </div>
                
                <form class="form-horizontal mt-3" method="POST" action="{{ route('brands.store') }}" enctype="multipart/form-data">
                    
                @csrf
                    <div class="row mb-3">
                        
                        <label for="name" class="col-sm-2 col-form-label">Brand Name</label>
                        <div class="col-sm-10">
                            <input id="brand_name" class="form-control" type="text" name="brand_name" v />
                        </div>
                    </div>

                    
                    <div class="row mb-3">
                        <label for="logos" class="col-sm-2 col-form-label">Slider Image</label>
                        <div class="col-sm-10"> 
                            <input id="image" class="form-control" type="file" name="logos[]" multiple="" />
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                       <div class="col-sm-10">
         <img id="showImage" class="rounded avatar-lg" src="{{ url('/backend/assets/images/no_image.jpg') }}" alt="Card image cap">
                       </div>
                   </div>
                   <!-- end row -->
                   

                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                        Create Brand<i class="ri-arrow-right-line align-middle ms-2"></i> 
                    </button>

                      
                    
                </form>

                
                   </div>
                
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



