
@extends('admin.admin-master')

@section('content')

                 
<div class="page">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h1 class="mb-sm-0"></h1>



                </div>
            </div>
        </div>
        <!-- end page title -->

<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">


    <div class="row">
        <div class="col-6"><h1>Brands</h1></div>
        <div class="col-4"><a href="{{ route('brands.create') }}" style="float:right;" class="btn btn-primary waves-effect waves-light ">
            Add Brand <i class="ri-arrow-right-line align-middle ms-2 mr-5"></i> </a></div>
    </div>
   

    <table id="datatable" class="mt-4 table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th>Sl</th>
            <th>Brand Name</th>
            <th>Brand Logo</th>
            <th>Action</th>

        </thead>


        <tbody>
           
            @foreach($allData as $key => $item)
        <tr>
            <td> {{ 1 + $key++ }} </td>
            <td> {{ $item->brand_name }} </td>

            
            <td> <img src="{{ asset($item->logos) }}" style="width: 70px; height: 40px;"> </td>

            <td>
<a href="{{ route('brands.edit', $item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

<a href="{{ route('brands.delete', $item->id)}}" id="delete" class="btn btn-danger sm" title="Delete Data">  <i class="fas fa-trash-alt"></i> </a>

            </td>

        </tr>
       
        @endforeach

        </tbody>
    </table>
    

    
   
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->



    </div> <!-- container-fluid -->
</div>
    




<!-- init js -->
<script src="{{ asset('backend/assets/js/pages/form-editor.init.js') }} "></script>

<!-- Required datatable js -->
<script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

   <!-- Datatable init js -->
<script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>



@endsection
