@extends('admin.master')

@section('content')

<body class="hold-transition sidebar-mini">
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Edit Post</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>
<div class="contact">
  <div class="container-wide">
	<h3 class="w3l_header w3_agileits_header">Add new <span>post</span></h3>
        <div class="inner_w3l_agile_grids-gal">
            <div class="agileits_mail_grid_right agileits_w3layouts_mail_grid_right">
                <div class="agile_mail_grid_right1">
                    <post-editor initial-post="{{ $post }}"></post-editor>
                </div>
            </div>
        </div>
    </div>
</div>
</diV>


@endsection
