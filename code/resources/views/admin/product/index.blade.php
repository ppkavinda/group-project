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
                                <input type="text" id="type" value="{{$products->type}}">
                            </div>
                        </div>
                    </fieldset>
                        <div class="form-group row">
                            <label for="amount" class="col-sm-4 col-form-label">&nbsp Amount</label>
                            <div class="col-sm-6">
                                <input  class="form-control" name="amount" type="text" id="size" value="{{$products->amount}}">
                                <i aria-hidden="true" class="fa fa-pencil edit-pencil"></i>
                            </div>
                        </div>
                    <div class="form-group row">
                        <label for="addDetails" class="col-sm-4 col-form-label">&nbsp Details</label>
                        <div class="col-sm-6">
                            <textarea name="addDetails" id="details" cols="44"rows="2" value="{{$products->description}}"></textarea>
                            
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
                    <a class="btn btn-danger" href="" onclick="return confirm('Delete this advertisement!!')">Delete</a>
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