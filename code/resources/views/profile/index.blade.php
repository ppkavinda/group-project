@extends('study.master')
@section('content')
<div class="row">
  <div class="col-2 bg-light pt-3" style="height:75vh">
    <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active profile-nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-user" aria-hidden="true"></i> My details</a>
      <a class="nav-link profile-nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa fa-book"></i> My Courses</a>
      <a class="nav-link profile-nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a>
      <a class="nav-link profile-nav-link" id="v-pills-publishAdd-tab" data-toggle="pill" href="#v-pills-publishAdd" role="tab" aria-controls="v-pills-publishAdd" aria-selected="false"><i class="fa fa-book"></i>Publish Your Add</a>
      <a class="nav-link profile-nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-gear"></i> Settings</a>    
    </div>
  </div>
  <div class="col-10">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <!-- @include('profile.details') -->
        <user-details user-id="{{ auth()->user()->id }}"></user-details>
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        @include('profile.courses')
      </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
        @include('profile.cart')
      </div>
      <div class="tab-pane fade" id="v-pills-publishAdd" role="tabpanel" aria-labelledby="v-pills-publishAdd-tab">
        @include('profile.addpost')
      </div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
        @include('profile.settings')
      </div>
    </div>
  </div>
</div>  
@endsection