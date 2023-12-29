@extends('layouts.app')

@section('content')

<header>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <h1 class="d-none">
                    SukGarden
                </h1>
                <h1 class="d-none">
                    SukGarden
                </h1>
                <img src="{{ asset('images/2023091815305860bfc6.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item"  data-bs-interval="5000">
                <img src="{{ asset('images/20230809114317019dc7.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item"  data-bs-interval="5000">
                <img src="{{ asset('images/20230918140837d49d44.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</header>

<section class="section text-center mb-4">
    <h3>Brand Introduction</h3>
    <div>
        <img src="//cdn.img-sys.com/comdata/101528/202210/2022102410184329134e.png" data-src="//cdn.img-sys.com/comdata/101528/202210/2022102410184329134e.png">
    </div>
    @include('pages.components.about-us')
</section>

<script async src="https://www.tiktok.com/embed.js"></script>

<section class="section container">
    <div class="text-center">
        <h3>Top Sales Product of SukGarden</h3>
        <img src="//cdn.img-sys.com/comdata/101528/202210/2022102410184329134e.png" data-src="//cdn.img-sys.com/comdata/101528/202210/2022102410184329134e.png">
    </div>
    <div class="d-flex">
        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@sukgarden077/video/7304505887941463314" data-video-id="7304505887941463314" style="max-width: 605px;min-width: 325px;" > 
            <section> </section> 
        </blockquote> 
        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@sukgarden077/video/7314603256070638849" data-video-id="7314603256070638849" style="max-width: 605px;min-width: 325px;" > 
            <section></section> 
        </blockquote> 
        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@sukgarden077/video/7314948695496215809" data-video-id="7314948695496215809" style="max-width: 605px;min-width: 325px;" > 
            <section></section> 
        </blockquote>
    </div>
    <div class="text-center">
        <a href="{{ route('landing-page.our-product') }}" class="btn btn-light btn-lg">View More</a>
    </div>
</section>

<section class="section container">
    <div class="text-center">
        <h3>Brand News</h3>
        <img src="//cdn.img-sys.com/comdata/101528/202210/2022102410184329134e.png" data-src="//cdn.img-sys.com/comdata/101528/202210/2022102410184329134e.png">
    </div>
    @include('pages.components.news')
</section>
@endsection