@extends('layouts.ecommerce')
@section('content')
<main class="main home">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <!-- <div class="sidebar-overlay"></div> -->

            <div class="col-lg-12">
                <div class="main-content">
                    <section class="home-section home-section-slider">
                        <div class="row">

                            {{-- deleted --}}
                            {{-- col-xl-8--}}

                            <div class="col-md-12 col-xl-12 col-lg-12 mb-xl-0 mb-2">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        @php
                                        $i=0;
                                        @endphp
                                        @foreach ($sliderImages as $sliderImage)
                                        <div class="carousel-item @if($i==0) active @endif">
                                            @php
                                            $i=1;
                                            @endphp
                                            <img class="d-block w-100" src="{{ asset('storage/photo/'.$sliderImage->image) }}" id="SliderImage" alt="First slide">
                                        </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                                <!-- End .home-slider -->

                            </div>
                    </section>
<br>
<br>
<br>
                    <section class="products-container mt-5">
                        <div class="row">
                            @foreach ($data['products'] as $FeaturedProduct)
                            <div class="col-md-3">
                            <div class="product-default inner-quickview inner-icon">

                                <figure>
                                    <a href="{{ route('product-details', ['id' => $FeaturedProduct['id']]) }}">
                                        <img @if(isset($FeaturedProduct['product_image_first']['image']) && $FeaturedProduct['product_image_first']['image']) src="{{ asset('storage/photo/' . $FeaturedProduct['product_image_first']['image']) }}" @else src="{{ asset('image-not-available.jpg') }}" @endif width="205" height="205" id="ProductImage" style="position: relative;" alt="product">
                                    </a>

                                    <div class="btn-icon-group">
                                   
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                        </div>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="{{ route('product-details', ['id' => $FeaturedProduct['id']]) }}">
                                            @if (strlen($FeaturedProduct['name']) > 50)
                                            {{ \Illuminate\Support\Str::limit($FeaturedProduct['name'], 50) . '...' }}
                                            @else
                                            {{ $FeaturedProduct['name'] }}
                                            @endif
                                        </a>
                                    </h3>

                                    <div class="price-box">
                                        @if ($FeaturedProduct['special_price'])
                                        @if (isset($currencySymbol->symbol))
                                        <span style="font-size: 14px;">{{ $currencySymbol->symbol }}</span>
                                        @endif
                                        <span class="old-price">

                                            {{ intval($FeaturedProduct['regular_price']) }}
                                        </span>
                                        <span class="product-price">
                                            @if (isset($currencySymbol->symbol))
                                            <span style="font-size: 14px;">{{ $currencySymbol->symbol }}</span>
                                            @endif
                                            {{ intval($FeaturedProduct['special_price']) }}
                                        </span>
                                        @else
                                        <span class="product-price">
                                            @if (isset($currencySymbol->symbol))
                                            <span style="font-size: 14px;">{{ $currencySymbol->symbol }}</span>
                                            @endif
                                            {{ intval($FeaturedProduct['regular_price']) }}
                                        </span>
                                        @endif
                                    </div>

                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            </div>
                            @endforeach
                        </div>
                    </section>


                    <br>
                    <br>
                    <br>
                    <br>
                    <!-- footer-area -->
                    @include('ecommerce.footer')
                    <!-- footer-area-end -->
                </div>
            </div>
        </div>
    </div>
</main>
@endsection