<header class="header">
    <!-- Navbar -->

    <nav id="navbar1" class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container">

            <span class="navbar-brand">
                <a href="{{ route('home') }}" class="logo">
                    <img src="@if ($companyInfo) {{ asset('storage/photo/' . $companyInfo->logo) }} @endif" class="w-100" width="111" height="44" alt="Porto Logo" style="height: 40px; margin-right: 6px;">
                </a>
            </span>

            <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text">
                    <i class="fa fa-bars fa-1x"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" id="active1" href="{{ route('product-search') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" id="active2" href="{{ route('product-search') }}">Products</a></li>
                    <li class="nav-item"><a class="nav-link" id="active3" href="{{ route('about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" id="active3" href="#Contact">News</a></li>
                    <li class="nav-item"><a class="nav-link" id="active3" href="{{ route('contact') }}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" id="active3" href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                </ul>
            </div>

        </div>
    </nav>

</header>
<!-- End .header -->