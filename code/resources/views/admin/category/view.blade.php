<!--Sachintha -->
@extends('admin.master')
@section('content')

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Categories Table</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
          
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             
             
           
              @if(Session::has('flash_message_success'))
                
                <div class="alert alert-success alert-block">
	              <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{!!session('flash_message_success')!!}</strong>
                </div>

              @endif
              <h3 class="card-title">Categories</h3>
             <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 40px" color="solid black">Category ID</th>
                    <th>Category Name</th>
                    <th>Create By</th>
                    <th>Update By</th>
                    <th class="center">Actions</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($categories as $category)
                  <tr>
                    <td><b>{{$category->id}}</b></td>
                    <td><b>{{$category->title}}</b></td>
                    <td><b>{{$category->created_at}} </b>   </td>
                    <td><b> {{$category->updated_at}} </b>  </td>
                    <td class="left">
                    <span>
                    <a href="{{ url('admin/edit-category/'.$category->id)}}" class="btn btn-primary btn mini"  
                    onclick="return confirm('Do you want to edit this details?')">Edit</a>
                    <a href="{{ url('admin/delete-category/'.$category->id)}}"class="btn btn-danger btn mini"
                    onclick="return confirm('Are you sure?')">Delete</a></span>
                      
                      </td> 
                      </tr>
                
                 @endforeach
                
                  </tbody>
        
                  
                
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
            
            
            
            
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
        
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<!-- FastClick -->



 @endsection