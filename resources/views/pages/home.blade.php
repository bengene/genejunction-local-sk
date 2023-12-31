@extends('layouts.app')

@section('content')

<header>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <h1 class="d-none">
                    SukGarden, a staggering one billion laundry beads were sold across 30 countries, adding a touch of cleanliness to households worldwide.
                </h1>
                <img src="{{ asset('images/2023091815305860bfc6.jpg') }}" class="d-block w-100" alt="design of laundry beads with flower">
            </div>
            <div class="carousel-item"  data-bs-interval="5000">
                <img class="pt-5 img-fluid" src="{{ asset('images/20230809114317019dc7.jpg') }}" class="d-block w-100" alt="Gu Ai Ling Endorse our brand">
            </div>
            <div class="carousel-item"  data-bs-interval="5000">
                <h2 class="d-none">
                    Master Fragrance Natural Cleanliness
                    Together with international fragrance giant Givaudan, every scentcomes from nature.
                </h2>
                <h2 class="d-none">
                    No harmful ingredients,safe for your family's health
                </h2>
                <img src="{{ asset('images/20230918140837d49d44.jpg') }}" class="d-block w-100" alt="essential oil detergent">
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
        <img src="{{ asset('/images/2022102410184329134e.png') }}" alt="icon">
    </div>
    @include('pages.components.about-us')
</section>

<script async src="https://www.tiktok.com/embed.js"></script>

<section class="section container">
    <div class="text-center">
        <h3>Top Sales Product of SukGarden</h3>
        <img src="{{ asset('/images/2022102410184329134e.png') }}" alt="icon">
    </div>
    <div class="row">
        <div class="col-sm-12 col-lg-4">
            <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@sukgarden077/video/7304505887941463314" data-video-id="7304505887941463314" style="max-width: 605px;min-width: 325px;" > 
                <section> </section> 
            </blockquote> 
        </div>
        <div class="col-sm-12 col-lg-4">
            <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@sukgarden077/video/7314603256070638849" data-video-id="7314603256070638849" style="max-width: 605px;min-width: 325px;" > 
                <section></section> 
            </blockquote> 
        </div>
        <div class="col-sm-12 col-lg-4">
            <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@sukgarden077/video/7314948695496215809" data-video-id="7314948695496215809" style="max-width: 605px;min-width: 325px;" > 
                <section></section> 
            </blockquote>
        </div>
    </div>
    <div class="text-center">
        <a href="{{ route('landing-page.our-product') }}" class="btn btn-light btn-lg">View More</a>
    </div>
</section>

<section class="section container">
    <div class="text-center">
        <h3>Brand News</h3>
        <img src="{{ asset('/images/2022102410184329134e.png') }}" alt="icon">
    </div>
    @include('pages.components.news')
</section>
@endsection