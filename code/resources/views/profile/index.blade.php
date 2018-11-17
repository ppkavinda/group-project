@extends('study.master')
@section('content')
<div class="row">
  <div class="col-2 bg-light pt-3" style="height:75vh">
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
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart
            </a>
        <a class="nav-link profile-nav-link" id="v-pills-settings-tab" 
            data-toggle="pill" href="#v-pills-settings" role="tab" 
            aria-controls="v-pills-settings" aria-selected="false">
                <i class="fa fa-gear"></i> Settings
        </a>
    </div>
  </div>
  <div class="col-10">
    <div class="tab-content" id="v-pills-tabContent">
<<<<<<< HEAD
      <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        {{-- @include('profile.details') --}}
        <user-details user-id="{{ auth()->user()->id }}"/>
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        @include('profile.courses')
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        @include('profile.posts')
      </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
        @include('profile.cart')
      </div>
      <div class="tab-pane show active fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
        @include('profile.settings')
      </div>
=======
        <div class="tab-pane fade show active" id="v-pills-details" role="tabpanel" aria-labelledby="v-pills-details-tab">
            {{-- @include('profile.details') --}}
            <user-details user-id="{{ auth()->user()->id }}"></user-details>
        </div>
        <div class="tab-pane fade" id="v-pills-courses" role="tabpanel" aria-labelledby="v-pills-courses-tab">
            @include('profile.courses')
        </div>
        <div class="tab-pane fade" id="v-pills-cart" role="tabpanel" aria-labelledby="v-pills-cart-tab">
            @include('profile.cart')
        </div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
            @include('profile.settings')
        </div>
>>>>>>> fb8a9d10258c0c062da34c8d9b9b2dec5c7b8d41
    </div>
  </div>
</div>  
@endsection