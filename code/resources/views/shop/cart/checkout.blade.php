@extends('shop.master')
@section('content')
<div class="container p-3">
    <checkout-cart initial-user-details="{{ auth()->user() }}"></checkout-cart>
</div>
@endsection