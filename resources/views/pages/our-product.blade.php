@extends('layouts.app')

@section('content')

<section class="section text-center">
    <h3 class="pt-3">
        Our Product
    </h3>
    <div>
        <img src="{{ asset('2022102410184329134e.png') }}">
    </div>
</section>
<section class="pt-2">
    <img class="img-fluid" src="{{ asset('/images/product/landing.jpg') }}">
    {{-- <div class="container">
        <div class="row g-0">
            <div class="col-md-4">
                <div class="overlay-container">
                    <img class="image" src="{{ asset('/images/product/detergent.jpg') }}">
                    <div class="overlay">
                        <div class="text">Laundry Detergent</div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</section>
{{-- <section class="container pt-4">
    <div class="d-flex">
        <div class="pt-1 pe-4">
            Filter 
        </div>
        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown button
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
</section> --}}

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
            <img class="image" src="{{ asset('/images/product/'.$product['name'].'.jpg') }}">
            <div class="py-2 very-small-text text-center">
                {{ $product['name'] }}
            </div>
        </div>
        @endforeach
        @endforeach
</section>



@endsection