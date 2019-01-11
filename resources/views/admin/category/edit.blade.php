<!--Sachintha -->
@extends('admin.master')
@section('content')




<body class="hold-transition sidebar-mini">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Edit Category</li>
               
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="{{url('/admin/edit-category/'.$categoryDetails->id) }}" 
              name="edit_category" id="edit_category" >{{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="categoryName">Category Name</label>
                    <input type="text" class="form-control" name="category_name" id="category_name" 
                    placeholder="Enter Category Name " value="{{$categoryDetails->title}} " required> 
                  </div>
                  @if ($errors->has('category_name'))
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $errors->first('category_name') }}</strong>
                        </span>
                    @endif
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" value="Add Category" class="btn btn-block btn-primary" 
                  onclick="return confirm('Do you want to edit this category?')">Update
                  </button>
                </div>
              </form>
           
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   



@endsection