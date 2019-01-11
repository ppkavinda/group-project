@extends('admin.master')
@section('content')
<body class="hold-transition sidebar-mini">
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3 class="w3l_header mt-4 mb-4">Product</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">View Product</li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="advertisementBorder">
        <br>
        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST">
                @csrf
                    <fieldset disabled>
                        <div class="form-group row">
                            <label for="kind" class="col-sm-4 col-form-label">&nbsp Name</label>
                            <div class="col-sm-6">
                                <input type="text" id="kind" value="{{$products->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-sm-4 col-form-label">&nbsp Category</label>
                            <div class="col-sm-6">
                                <input type="text" id="category" value="{{$products->category->title}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-sm-4 col-form-label">&nbsp Type</label>
                            <div class="col-sm-6">
                                {{$products->type}}
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <label for="addDetails" class="col-sm-4 col-form-label">&nbsp Details</label>
                        <div class="col-sm-6">
                            {{$products->description}}
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-sm-4 col-form-label">&nbsp Price(Rs.)</label>
                        <div class="col-sm-5">
                     <b> {{$products->price}}<b>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="discount" class="col-sm-4 col-form-label">&nbsp Discount(Rs.)</label>
                        <div class="col-sm-6">
                        {{$products->discount}}
                        </div>
                    </div>
                    </fieldset> 
                  
                </form> 
            </div>
            <div class="col-md-4">
                <div id=postsImage>
                    <div class="card mx-auto">
                        <center>
                        <img class="img-fluid" src="/storage/{{$products->img1}}"  height="200px" width="auto" alt="Computer Hope">
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <br><br>
    </div>
</div>
@endsection