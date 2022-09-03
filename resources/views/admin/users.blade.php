
@extends('admin.admin-master')


@section('content')

 


<div class="container-full">
    <div class="row">
        <div class="col-4"><h3>User List</h3></div>
        <div class="col-4"></div>
        <div class="col-4"><div class="box mb-8 mr-6 col-md-8">
      
            <a href="{{ route('admin.users.create') }}" style="float: right;" class="btn btn-rounded btn-success"> Add User <i class="ri-add-circle-fill"></i></a>	
            
            </div>
            </div>
        </div>

</div>


                 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
          
		  <div class="row">
			  
            

			<div class="col-12">

			 
				<!-- /.box-header -->
				<div class="box-body">
                    
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
			<tr>
				<th width="2%">SL</th>
			
				<th>Name</th>
				<th>Email</th>
				<th>Phone Number</th>
                <th>Role</th>
                <th>Code</th>
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
			@foreach($users as $key => $user )
			<tr>
				<td>{{ $key+ $users->firstItem() }}</td>
		        <td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->phonenumber }}</td>
                <td> {{ $user->Role }}</td>
                <td>{{ $user->code }}</td>
                
				<td>
 <a href="{{ route('admin.users.view', $user->id) }}" class="btn btn-warning" >View</a>
<a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('admin.users.delete', $user->id) }}" class="btn btn-danger" id="delete">Delete</a>

				</td>
				 
			</tr>
			@endforeach
           
						</tbody>
						<tfoot>
                            
						</tfoot>
					  </table>
                    
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			       
			</div><br><br><br><hr>
           <div class="col-11 mt-12">
            {{ $users->links('vendor.pagination.custom') }}
           </div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->

          
		</section>
		<!-- /.content -->
	  
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
