<!DOCTYPE html>
<html lang="en">
<head>
    <title>SukGarden - {{ $pageTitle }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/images/timeline/2015.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <link href="{{ url('assets/main.css') }}" rel="stylesheet"> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <style>
        :root {
            --bs-body-font-family: 'Poppins'
        }
        
        .header-logo {
            width : 130px
        }
        
        .nav-link {
            font-weight: 300;
        }
        
        .section { padding-top: 80px }
        
        .navbar-fixed-top {
            position: fixed;
            right: 0;
            left: 0;
            z-index: 1030;
        }
        
        .icon-80 { font-size: 80px; }
        
        .timeline {
            position: relative;
            /* background: #272e48; */
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            padding: 2rem;
            margin: 0 auto 1rem auto;
            overflow: hidden;
        }
        .timeline:after {
            content: "";
            position: absolute;
            top: 0;
            left: 50%;
            margin-left: -2px;
            border-right: 2px dashed #D9DBDF;
            height: 100%;
            display: block;
        }
        
        .timeline-row {
            padding-left: 50%;
            position: relative;
            margin-bottom: 30px;
        }
        .timeline-row .timeline-time {
            position: absolute;
            right: 50%;
            top: 15px;
            text-align: right;
            margin-right: 20px;
            color: #4caf50;
            font-size: 1.5rem;
        }
        .timeline-row .timeline-time small {
            display: block;
            font-size: 0.8rem;
        }
        .timeline-row .timeline-content {
            position: relative;
            padding: 20px 30px;
            background: #EBEBEB;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }
        .timeline-row .timeline-content:after {
            content: "";
            position: absolute;
            top: 20px;
            height: 16px;
            width: 16px;
            background: #EBEBEB;
        }
        .timeline-row .timeline-content:before {
            content: "";
            position: absolute;
            top: 20px;
            right: -49px;
            width: 20px;
            height: 20px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            z-index: 10;
            /* background: #272e48; */
            border: 2px dashed #D9DBDF;
        }
        .timeline-row .timeline-content h4 {
            margin: 0 0 20px 0;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            line-height: 150%;
        }
        .timeline-row .timeline-content p {
            margin-bottom: 30px;
            line-height: 150%;
        }
        .timeline-row .timeline-content i {
            font-size: 1.2rem;
            line-height: 100%;
            padding: 15px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            /* background: #272e48; */
            margin-bottom: 10px;
            display: inline-block;
        }
        .timeline-row .timeline-content .thumbs {
            margin-bottom: 20px;
            display: flex;
        }
        .timeline-row .timeline-content .thumbs img {
            margin: 5px;
            max-width: 60px;
        }
        .timeline-row .timeline-content .badge {
            color: #ffffff;
            background: linear-gradient(120deg, #00b5fd 0%, #0047b1 100%);
        }
        .timeline-row:nth-child(even) .timeline-content {
            margin-left: 40px;
            text-align: left;
        }
        .timeline-row:nth-child(even) .timeline-content:after {
            left: -8px;
            right: initial;
            border-bottom: 0;
            border-left: 0;
            transform: rotate(-135deg);
        }
        .timeline-row:nth-child(even) .timeline-content:before {
            left: -52px;
            right: initial;
        }
        .timeline-row:nth-child(odd) {
            padding-left: 0;
            padding-right: 50%;
        }
        .timeline-row:nth-child(odd) .timeline-time {
            right: auto;
            left: 50%;
            text-align: left;
            margin-right: 0;
            margin-left: 20px;
        }
        .timeline-row:nth-child(odd) .timeline-content {
            margin-right: 40px;
        }
        .timeline-row:nth-child(odd) .timeline-content:after {
            right: -8px;
            border-left: 0;
            border-bottom: 0;
            transform: rotate(45deg);
        }
        
        @media (max-width: 992px) {
            .timeline {
                padding: 15px;
            }
            .timeline:after {
                border: 0;
            }
            .timeline .timeline-row:nth-child(odd) {
                padding: 0;
            }
            .timeline .timeline-row:nth-child(odd) .timeline-time {
                position: relative;
                top: 0;
                left: 0;
                margin: 0 0 10px 0;
            }
            .timeline .timeline-row:nth-child(odd) .timeline-content {
                margin: 0;
            }
            .timeline .timeline-row:nth-child(odd) .timeline-content:before {
                display: none;
            }
            .timeline .timeline-row:nth-child(odd) .timeline-content:after {
                display: none;
            }
            .timeline .timeline-row:nth-child(even) {
                padding: 0;
            }
            .timeline .timeline-row:nth-child(even) .timeline-time {
                position: relative;
                top: 0;
                left: 0;
                margin: 0 0 10px 0;
                text-align: left;
            }
            .timeline .timeline-row:nth-child(even) .timeline-content {
                margin: 0;
            }
            .timeline .timeline-row:nth-child(even) .timeline-content:before {
                display: none;
            }
            .timeline .timeline-row:nth-child(even) .timeline-content:after {
                display: none;
            }
        }
        
        .overlay-container {
            position: relative;
        }
        
        .image {
            display: block;
            width: 100%;
            height: auto;
        }
        
        .overlay {
            position: absolute;
            top: 85%;
            bottom: 0;
            left: 0;
            right: 0;
            height: 15%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background: rgba(0, 0, 0, 0.7);
        }
        
        .overlay-container:hover .overlay {
            opacity: 1;
        }
        
        .text {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }
        
        .text-justify {
            text-align: justify;
            text-justify: inter-word;
        }
        
        .very-small-text {
            font-size: 12px;
        }
    </style>
    <div id="main-nav" class="navbar-fixed-top">
        <nav class="container d-flex flex-wrap justify-content-center py-3">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img class="header-logo" src="//cdn.img-sys.com/comdata/101528/202212/202212261023139b266e.png">
            </a>
            @if(!preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]))
            <ul class="nav">
                <li><a href="/" class="nav-link px-2 ms-3 link-dark">Home</a></li>
                <li><a href="{{ route('landing-page.our-story') }}" class="nav-link px-2 ms-3 link-dark">Our Story</a></li>
                <li><a href="{{ route('landing-page.our-product') }}" class="nav-link px-2 ms-3 link-dark">Product</a></li>
                <li><a href="{{ route('landing-page.news') }}" class="nav-link px-2 ms-3 link-dark">Brand News</a></li>
                <li><a href="{{ route('landing-page.contact-us') }}" class="nav-link px-2 ms-3 link-dark">Contact Us</a></li>
            </ul>
            @endif
        </nav>
    </div>
    @yield('content')
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-6 d-flex align-items-center">
                <span class="mb-3 mb-md-0 text-muted">
                    © {{ date('Y') }} Sukgarden Biotechnology Co., Ltd.
                </span>
            </div>
            <ul class="nav col-md-6 justify-content-end list-unstyled d-flex">
                <li class="ms-3">
                    <a class="text-muted" href="#">
                        <svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg>
                    </a>
                </li>
            </ul>
        </footer>
    </div>
    <script>
        $(document).ready(function () {
            $(window).on("scroll", function () {
                if ($(document).scrollTop() > 1) {
                    $("#main-nav").addClass('bg-white').removeClass('bg-transparent');
                }
                else {
                    $("#main-nav").addClass('bg-transparent').removeClass('bg-dark');
                }
            })
        });
    </script>
    @yield('script')
</body>
</html>
