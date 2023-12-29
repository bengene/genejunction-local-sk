@extends('layouts.app')

@section('content')

<section class="section text-center">
    <h3 class="pt-3">
        Brand News
    </h3>
    <div>
        <img src="{{ asset('/images/2022102410184329134e.png') }}" alt="icon">
    </div>
</section>

<section class="bg-light py-10">
    <div class="container px-5">
        <div class="card post-preview post-preview-featured lift mb-5 overflow-hidden" href="#!">
            <div class="row g-0">
                <div class="col-lg-5">
                    <img class="img-fluid" src="{{ asset('/images/202305091800446311051.jpg') }}">
                </div>
                <div class="col-lg-7">
                    <div class="card-body">
                        <div class="py-1">
                            <h5 class="card-title">
                                Gu Ailing, Olympic Champion takes on the role of the global brand ambassador for Sukgarden
                            </h5>
                            <p class="card-text text-muted">
                                 Reviewing the brands previously endorsed by Gu Ailing, such as Red Bull, JD.com, Cadillac, Mengniu, Midea, Estée Lauder, Louis Vuitton, Tiffany, Victoria's Secret—each a top brand in its respective field. The unexpected collaboration with Sukgarden, a rising star in the home care industry, raises both surprise and curiosity about the synergy between Gu Ailing and Sukgarden.
                            </p>
                        </div>
                        <hr>
                        <div class="text-muted">
                            <i class="bi bi-calendar"></i>
                            <span class="ms-2">
                                August 12nd, 2023
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('pages.components.news')
    </div>
</section>
@endsection