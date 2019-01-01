@extends('study.master')
@section('content')
<div class="row">
<!-- sidebar -->
  <div class="col-2 bg-light pt-3" style="height:75vh">
    <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <!-- Mydetails -->
        <a class="nav-link active profile-nav-link" id="v-pills-details-tab" 
            data-toggle="pill" href="#v-pills-details" role="tab" 
            aria-controls="v-pills-details" aria-selected="true">
                <i class="fa fa-user" aria-hidden="true"></i> My details
        </a>
        <!-- MyCourses -->
        <a class="nav-link profile-nav-link" id="v-pills-profile-tab" 
            data-toggle="pill" href="#v-pills-courses" role="tab" 
            aria-controls="v-pills-profile" aria-selected="false">
                <i class="fa fa-book"></i> My Courses
        </a>
        <!-- MyOrders -->
        <a class="nav-link profile-nav-link" id="v-pills-messages-tab" 
            data-toggle="pill" href="#v-pills-orders" role="tab" 
            aria-controls="v-pills-orders" aria-selected="false">
                <i class="fa fa-list" aria-hidden="true"></i> My Orders
        </a>
        <!-- Settings -->
        <a class="nav-link profile-nav-link" id="v-pills-settings-tab" 
            data-toggle="pill" href="#v-pills-settings" role="tab" 
            aria-controls="v-pills-settings" aria-selected="false">
                <i class="fa fa-gear"></i> Settings
        </a>
    </div>
  </div>
  <div class="col-10">
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-details" role="tabpanel" aria-labelledby="v-pills-details-tab">
            {{-- @include('profile.details') --}}
            <user-details user-id="{{ auth()->user()->id }}"></user-details>
        </div>
        <div class="tab-pane fade" id="v-pills-courses" role="tabpanel" aria-labelledby="v-pills-courses-tab">
            @include('profile.courses')
        </div>
        <div class="tab-pane fade" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab">
            @include('profile.orders')
        </div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
            @include('profile.settings')
        </div>
    </div>
  </div>
</div>  
@endsection