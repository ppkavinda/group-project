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
            <h1>Courses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Edit Course</li>
              
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
              @if(Session::has('flash_message_success'))
                
                <div class="alert alert-success alert-block">
	              <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{!!session('flash_message_success')!!}</strong>
                </div>

              @endif
                <h3 class="card-title">Edit Course</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  enctype="multipart/form-data"  class="form-horizontal" method="post" 
              action="{{url('/admin/edit-course/'.$courseDetails->id) }}" name="add_course" id="add_course"  >{{ csrf_field() }}
                <div class="card-body">
                  
                  <div class="form-group">
                  <label for="categoryName">Category </label>
                    <select name="category_id" class="form-control" placeholder="Select Main Category">
                          <option value="0">Select Category</option>
                         
                          @foreach( $categories as $val)

                          <option value="{{$val->id}}">{{ $val->title }}</option>
                          @endforeach
                   </select>
                  </div>
                  <div class="form-group">
                    <label for="categoryName">Course Title</label>
                    <input type="text" class="form-control" name="course_title" id="course_title" placeholder="Enter Course title "
                     value="{{$courseDetails->title}}"required >
                  </div>

                  @if ($errors->has('course_title'))
                        <span class = "invalid-feedback d-block" role="alert">
                            <strong>{{ $errors->first('course_title') }}</strong>
                        </span>
                  @endif
                  <div class="form-group">
                    <label for="categoryName">Sub Title</label>
                    <input type="text" class="form-control" name="course_subtitle" id="course_subtitle" placeholder="Enter Course Sub title"
                     value="{{$courseDetails->subtitle}}" required>
                  </div>

                  @if ($errors->has('course_subtitle'))
                        <span class = "invalid-feedback d-block" role="alert">
                            <strong>{{ $errors->first('course_subtitle') }}</strong>
                        </span>
                  @endif

                  <div class="form-group">
                    <label for="categoryName">Description</label>
                    <textarea class="form-control" name="course_description" id="course_description" placeholder="Enter Course Description"
                    required>{{$courseDetails->description}}</textarea>
                  </div>

                  @if ($errors->has('course_description'))
                        <span class = "invalid-feedback d-block" role="alert">
                            <strong>{{ $errors->first('course_description') }}</strong>
                        </span>
                  @endif

                  <div class="form-group">
                    <label for="categoryName">Cover image</label>
                    <div>
                    <img id="show" src="#" alt="your image" class="img-rounded" />
                    </div>

                    <div class="input-default-wrapper mt-3">

                    <input type= "file" name="cover_img" id="cover_img" name=""class="form-control"  value=" "  
                    onchange ="readURL(this)" accept="image/gif, image/jpeg, image/png" required>

                    <label class="label-for-default-js rounded-right mb-3" for="file-with-current">

                    </label>

                    </div>
                    @if ($errors->has('cover_img'))
                        <span class = "invalid-feedback d-block" role="alert">
                            <strong>{{ $errors->first('cover_img') }}</strong>
                        </span>
                    @endif
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" value="Add Category" class="btn btn-block btn-primary"  onclick="return confirm('Do you want to update this Course?')">
                  Update
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
   

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script>
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#show')
                    .attr('src', e.target.result)
                    .width(200)
                   
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
 </script>


</body>
</html>

@endsection