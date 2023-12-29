@extends('layouts.app')

@section('content')
<section class="section">
    <img class="img-fluid" src="/images/20221010154351da3a7e.jpg">
</section>
<section class="section container  text-center">
    <h3>
        Get in touch with us
    </h3>
    <div>
        <img src="{{ asset('/images/2022102410184329134e.png') }}" alt="icon">
    </div>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2">
                <i class="bi bi-facebook icon-80"></i>
            </div>
            <p>
                Official Facebook Page
            </p>
            <h6>
                <a href="https://www.facebook.com/profile.php?id=61551257454796" class="icon-link" target="_blank">
                    Click Here for Facebook
                </a>
            </h6>
        </div>
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2">
                <i class="bi bi-whatsapp icon-80"></i>
            </div>
            <p>
                Abby Chan (Business Manager)
                <br>
                +601136070593
            </p>
            <h6>
                <a href="https://api.whatsapp.com/send?phone=%2B601136070593" class="icon-link" target="_blank">
                    Click Here for Whatapps
                </a>
            </h6>
        </div>
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2">
                <i class="bi bi-envelope-at icon-80"></i>
            </div>
            <p>
                Business Enquiry
            </p>
            <h6>
                <a href="mailto:sukgardenofficial@gmail.com" class="icon-link">
                    sukgardenofficial@gmail.com
                </a>
            </h6>
        </div>
    </div>
</section>
@endsection