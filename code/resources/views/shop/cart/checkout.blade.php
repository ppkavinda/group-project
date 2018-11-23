@extends('shop.master')
@section('content')
<div class="container p-3">
    <checkout-cart initial-user-details="{{ auth()->user() }}"
        initial-cart="{{ Cart::content() }}" successfull="{{ $successful }}"></checkout-cart>
</div>
@endsection

@push('scripts')
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
@endpush