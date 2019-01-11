@extends('shop.master')
@section('content')
<div class="container p-3">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <h2 class="text-center m-3 p-3">
                <i class="fa fa-check" style="color: #2fdab8;" aria-hidden="true"></i>
                Your purchase has been Successful!
            </h2>
            <ul class="list-group list-group-flush bg-light">
                @foreach ($order->products as $product)
                    <li class="minicart-item row m-3 bg-white"> 
                        <div class="col-md-8 my-auto"> 
                            <img src="/storage/{{ $product->img1 }}" class="pull-left col-md-4 img-fluid">
                            <a class="minicart-name m-3" href="/products/{{$product->id}}">{{ $product->name }}</a>
                        </div>
                        <div class="minicart-details-quantity col-md-2 my-auto">
                            &times;
                        <label>{{ $product->pivot->amount }}</label>
                        </div>
                        <div class="minicart-details-price col-md-2 my-auto">
                            <span class="minicart-price">LKR {{ $product->pivot->price }} </span>
                        </div>
                    </li>
                @endforeach
            </ul>
            <p class="text-center">Items mey be shipped to you as soon as possible.</p>

        </div>
    </div>
</div>
<div class="container p-3">
    <div class="text-center">
        {{-- <div class="snipcart-details top_brand_home_details item_add single-item p-3 minicart-showing">
            <a class="hvr-outline-out button2 p-3" href="{{ route('shop') }}" style="color:black;"><h3>Shop More</h3></a>
        </div> --}}
    </div>
    @include('shop.partials.newarrivals')
</div>
@endsection