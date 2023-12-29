@extends('layouts.app')

@section('content')

<section class="section text-center">
    <h3 class="pt-3">
        Our Product
    </h3>
    <div>
        <img src="{{ asset('/images/2022102410184329134e.png') }}" alt="icon">
    </div>
</section>

<section class="pt-2">
    <img class="img-fluid" src="{{ asset('/images/product/landing.jpg') }}" alt="detergent product image">
</section>

<section class="container pt-4">
    <div class="row">
        @foreach(\App\Models\Product::getDatas() as $key => $products)
        <div class="col-md-12 text-center pt-4 pb-2">
            <h5 class="lead">
                {{ \Str::of($key)->replace('_', ' ')->title(); }}
            </h5>
        </div>
        @foreach($products as $product)
        <div class="col-md-3 py-2">
            <img class="image" src="{{ asset('/images/product/'.$product['name'].'.jpg') }}" alt="{{ $product['name'] }}">
            <div class="py-2 very-small-text text-center">
                {{ $product['name'] }}
            </div>
        </div>
        @endforeach
        @endforeach
</section>



@endsection