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
    <link href="{{ asset('assets/main.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
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
