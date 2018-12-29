@extends('study.master')
@section('content')

<div class="row"> 
   <div class="col-2 bg-light pt-1" style="height:75vh">
    <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active profile-nav-link" id="v-pills-details-tab" 
            data-toggle="pill" href="#v-pills-details" role="tab" 
            aria-controls="v-pills-details" aria-selected="true">
                <i class="fa fa-user" aria-hidden="true"></i> My details
        </a>
        <a class="nav-link profile-nav-link" id="v-pills-profile-tab" 
            data-toggle="pill" href="#v-pills-courses" role="tab" 
            aria-controls="v-pills-profile" aria-selected="false">
                <i class="fa fa-book"></i> My Courses
        </a>
        <a class="nav-link profile-nav-link" id="v-pills-messages-tab" 
            data-toggle="pill" href="#v-pills-cart" role="tab" 
            aria-controls="v-pills-cart" aria-selected="false">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> My Cart
        </a>
        <a class="nav-link profile-nav-link" id="v-pills-settings-tab" 
            data-toggle="pill" href="#v-pills-settings" role="tab" 
            aria-controls="v-pills-settings" aria-selected="false">
                <i class="fa fa-gear"></i> Settings
        </a>
    </div>
  </div>
</div>

@endsection