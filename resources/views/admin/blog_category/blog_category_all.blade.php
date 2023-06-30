@extends('admin.admin_master')
@section('admin')

<div class="page-content">
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Blog Category Table</h4>

            </div>
        </div>
    </div>
    <!-- end page title -->
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Blog Category</h4>
                    <p class="card-title-desc">This is a All Blog Categories data table. 
                        This table store a list of data about the Category for blog which has been inserted into the system.
                    </p>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th style="width: 140px;">Serial Number</th>
                            <th>Blog Category Name</th>
                            <th style="width: 200px;">Action</th>
                        </tr>
                        </thead>


                        <tbody>
                            @php($i = 1)
                            @foreach($blogcategory as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->blog_category}}</td>
                            <td>
                                <a href="{{ route('edit.blog.category', $item->id) }}" class="btn btn-info sm" title="Edit Data"><i
                                    class="fas fa-edit"></i> </a>
                                <a href="{{ route('delete.blog.category', $item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete"><i
                                    class="fas fa-trash-alt"></i> </a>
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

@endsection