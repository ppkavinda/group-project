@extends('admin.master')
@section('content')

<div class="content-wrapper">
<div class="row">

  <div class="col-sm-6">
    <div class="tab-content" id="v-pills-tabContent">
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
    </div>
  </div>
</div>  
</div>
@endsection