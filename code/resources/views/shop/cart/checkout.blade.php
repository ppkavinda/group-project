@extends('shop.master')
@section('content')
<div class="container p-3">
    <checkout-cart initial-user-details="{{ auth()->user() }}"
        initial-cart="{{ Cart::content() }}"></checkout-cart>
</div>
@endsection

@push('scripts')
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
@endpush