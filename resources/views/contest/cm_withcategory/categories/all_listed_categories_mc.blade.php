@extends('admin.admin-master')


@section('content')
    <div class="container-full">
        <div class="row">
            <div class="col-4">
                <h3>MultiContest Categories | Free</h3>
            </div>
            <div class="col-4"></div>
            <div class="col-4">
                <div class="box mb-8 mr-6 col-md-8">

                    <a href="{{ route('corporatemulticontestcategory.create') }}" style="float: right;"
                        class="btn btn-rounded btn-success"> Add New
                        Category <i class="ri-add-circle-fill"></i></a>

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

                                @if ($categories)
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="2%">SL</th>
                                                <th>Category Name</th>

                                                <th>Contest Name</th>


                                                <th width="25%">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)
                                                <tr>

                                                    <td>{{ $category->id }}</td>
                                                    <td>{{ $category->category_name }}</td>

                                                    <td>{{ $category->contest->contest_name }}</td>



                                                    <td>
                                                        <a href="{{ route('corporatemulticontestcategory.edit', $category->id) }}"
                                                            class="btn btn-info"><i class="ri-edit-box-line"></i>
                                                            Edit</a>
                                                        <a id="delete"
                                                            href="{{ route('corporatemulticontestcategory.delete', $category->id) }}"
                                                            class="btn btn-danger">Delete <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                        {{-- <a href="{{ route('category.delete', $category->id) }}"
                                                    class="btn btn-danger" id="delete">Delete</a> --}}



                                                    </td>

                                                </tr>
                                            @endforeach


                                        </tbody>
                                        <tfoot>
                                        @else
                                            <h3>...No Data Found</h3>
                                @endif
                                </tfoot>
                                </table>

                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                </div><br><br><br>
                <hr>
                <div class="col-11 mt-12">

                    {{-- {{ $categorys->links('vendor.pagination.custom') }} --}}

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
        $(document).ready(function() {
            $('#datatable_wrapper').DataTable();
        });
    </script>
@endsection
