<header class="header">
    <div class="header-top" style="background: #b4f3f9;">
        <div class="container-fluid">
            <div class="header-left top-notice d-none d-md-flex p-0 font2">
                <h5 class="d-inline-block text-dark mb-0 ls-0">
                    @if ($companyInfo)
                    {{ $companyInfo->name }}
                    @endif
                </h5>
                <a href="{{ route('home') }}" class="category text-white ls-0">START SHARING</a>
                <small>* Limited time only.</small>
            </div>
            <!-- End .header-left -->

            <div class="header-right header-dropdowns ml-auto w-sm-100 justify-content-end">
                <div class="info-box info-box-icon-left p-0">
                    <i class="icon-shipping"></i>
                    <div class="info-box-content">
                        <h4>FREE Express Shipping On Orders $99+</h4>
                    </div>
                    <!-- End .info-box-content -->
                </div>
                <!-- End .info-box -->

                <div class="separator"></div>

                <div class="header-dropdown font2">
                    <a href="#">USD</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">USD</a></li>
                        </ul>
                    </div>
                    <!-- End .header-menu -->
                </div>
                <!-- End .header-dropown -->

                <div class="header-dropdown mr-0 pl-2 font2">
                    <a href="#"><i class="flag-us flag"></i>ENG</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                            </li>
                            <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                        </ul>
                    </div>
                    <!-- End .header-menu -->
                </div>
                <!-- End .header-dropown -->

                <div class="separator"></div>

                <div class="info-box-container align-items-center">
                    <div class=" info-box info-box-icon-left">
                        <i class="icon-pin"></i>

                        <div class="info-box-content">
                            <h4>Our Stores</h4>
                        </div>
                        <!-- End .info-box-content -->
                    </div>
                    <!-- End .info-box -->

                    <div class="info-box info-box-icon-left">
                        <i class="icon-shipping-truck"></i>

                        <div class="info-box-content">
                            <h4 class="ls-0">Track Your Order</h4>
                        </div>
                        <!-- End .info-box-content -->
                    </div>
                    <!-- End .info-box -->

                    <div class="info-box info-box-icon-left">
                        <i class="icon-help-circle"></i>

                        <div class="info-box-content">
                            <h4>Help</h4>
                        </div>
                        <!-- End .info-box-content -->
                    </div>
                    <!-- End .info-box -->
                </div>
            </div>
            <!-- End .header-right -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-top -->

    <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
        <div class="container-fluid">
            <div class="header-left justify-content-lg-center">
                <button class="mobile-menu-toggler text-primary mr-2" type="button">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="{{ route('home') }}" class="logo">
                    <img src="@if ($companyInfo) {{ asset('storage/photo/' . $companyInfo->logo) }} @endif" class="w-100" width="111" height="44" alt="Porto Logo" style="height: 40px; margin-right: 6px;">
                </a>
            </div>
            <!-- End .header-left -->

            <div class="py-0 my-0 header-right w-lg-max">
                <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width:100%;background-color:#efeee9;">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link active" href="#" style="font-size: 20px;">Home</a>
                            <a class="nav-item nav-link" href="{{ route('product-search') }}" style="font-size: 20px;">Products</a>
                            <a class="nav-item nav-link" href="{{ route('about') }}" style="font-size: 20px;">About Us</a>
                            <a class="nav-item nav-link" href="#" style="font-size: 20px;">News</a>
                            <a class="nav-item nav-link" href="{{ route('contact') }}" style="font-size: 20px;">Contact</a>
                            <a class="nav-item nav-link" href="{{ route('privacy-policy') }}" style="font-size: 20px;">Privacy Policy</a>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- End .header-right -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-middle -->
</header>
<!-- End .header -->