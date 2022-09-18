@extends('layouts.ecommerce')
@section('content')
<main class="main home">
    <style>
        .product-quantity {
            margin-top: 17px;
            width: 90px;
            padding: 8px 8px;
            border-radius: 10px;
            font-size: 12px;
            display: flex;
            justify-content: space-between;
        }

    </style>
    <div class="container-fluid p-0">
        <div class="row m-0">
            <!-- <div class="sidebar-overlay"></div> -->

            <div class="col-lg-12">
                <div class="main-content">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav font2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('search-category-wise') }}">Product</a></li>
                        </ol>
                    </nav>

                    <div class="product-single-container product-single-default">
                        <div class="cart-message d-none">
                            @if($productDetails->name)
                                <strong class="single-cart-notice">{{$productDetails->name}}</strong>
                                <span>has been added to your cart.</span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-xl-5 col-md-6 product-single-gallery">
                                <div class="product-slider-container">
                                    <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                                        @foreach ($productDetails->ProductImages as $productImage)
                                        <div class="product-item">
                                            <img class="product-single-image"
                                                src="{{ asset('storage/photo/'.$productImage->image) }}"
                                                data-zoom-image="{{ asset('storage/photo/'.$productImage->image) }}"
                                                width="468" height="468" alt="product" />
                                        </div>
                                        @endforeach
                                    </div>
                                    <!-- End .product-single-carousel -->
                                    <span class="prod-full-screen">
                                        <i class="icon-plus"></i>
                                    </span>
                                </div>

                                <div class="prod-thumbnail owl-dots">
                                    @foreach ($productDetails->ProductImages as $productImage)
                                    <div class="owl-dot">
                                        <img src="{{ asset('storage/photo/'.$productImage->image) }}" width="110"
                                            height="110" alt="product-thumbnail" />
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- End .product-single-gallery -->

                            <div class="col-xl-7 col-md-6 product-single-details">
                                <h1 class="product-title">
                                    @if(strlen($productDetails->name)>50)
                                    {{\Illuminate\Support\Str::limit($productDetails->name, 50).'...'}}
                                    @else
                                    {{ $productDetails->name }}
                                    @endif
                                </h1>

                                <div class="product-nav">
                                    <div class="product-prev">
                                        <a href="#">
                                            <span class="product-link"></span>

                                            <span class="product-popup">
                                                <span class="box-content">
                                                    <img alt="product" width="150" height="150"
                                                        src="assets/images/products/product-3.jpg"
                                                        style="padding-top: 0px;">

                                                    <span>Circled Ultimate 3D Speaker</span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="product-next">
                                        <a href="#">
                                            <span class="product-link"></span>

                                            <span class="product-popup">
                                                <span class="box-content">
                                                    <img alt="product" width="150" height="150"
                                                        src="assets/images/products/product-4.jpg"
                                                        style="padding-top: 0px;">

                                                    <span>Blue Backpack for the Young</span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                                <hr class="short-divider">

                                <div class="price-box">
                                    @if($productDetails->special_price)
                                    <span class="h3">
                                        {{ intval((($productDetails->regular_price - $productDetails->special_price) * 100)/$productDetails->regular_price) }}%
                                    </span>
                                    <br>
                                    <span class="old-price">
                                        @if (isset($currencySymbol->symbol))
                                        <span style="font-size: 14px;">{{ $currencySymbol->symbol }}</span>
                                        @endif
                                        {{ $productDetails->regular_price }}
                                    </span>
                                    <span class="product-price">
                                        @if (isset($currencySymbol->symbol))
                                        <span style="font-size: 14px;">{{ $currencySymbol->symbol }}</span>
                                        @endif
                                        {{ $productDetails->special_price }}
                                    </span>
                                    @else
                                    <span class="product-price">
                                        @if (isset($currencySymbol->symbol))
                                        <span style="font-size: 14px;">{{ $currencySymbol->symbol }}</span>
                                        @endif
                                        {{ $productDetails->regular_price }}
                                    </span>
                                    @endif
                                    <br>
                                    <span class="product-price">
                                        <span style="font-size: 14px;">
                                          Total:
                                        </span>
                                        @if (isset($currencySymbol->symbol))
                                        <span style="font-size: 14px;">{{ $currencySymbol->symbol }}</span>
                                        @endif
                                        <span id="product_subtotal_{{ $productDetails->id }}" class="product-subtotal" style="font-size: 14px;">
                                           {{ $productDetails->regular_price }}
                                        </span>
                                    </span>
                                </div>
                                <!-- End .price-box -->

                                <div class="product-desc ls-0 font2">
                                    <p>
                                        @if($productDetails->ProductInfo)
                                        {!! $productDetails->ProductInfo->long_description !!}
                                        @endif
                                    </p>
                                </div>
                                <!-- End .product-desc -->

                                <ul class="single-info-list font2">
                                    <li>
                                    
                                    </li>
                                </ul>

                           

                                <div class="product-single-share icon-with-color mb-2 mt-2">
                                    <label class="sr-only"></label>

                                    <div class="social-icons">

                                    </div>
                                    <!-- End .social-icons -->
                                </div>
                                <!-- End .product single-share -->
                            </div>
                            <!-- End .product-single-details -->
                        </div>
                        <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->

                    <div class="product-single-tabs font2">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="product-tab-desc" data-toggle="tab"
                                    href="#product-desc-content" role="tab" aria-controls="product-desc-content"
                                    aria-selected="true">Description</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel"
                                aria-labelledby="product-tab-desc">
                                <div class="product-desc-content">
                                    @if(isset($productDetails->ProductInfo->short_description))
                                    <p>{!! $productDetails->ProductInfo->short_description !!}</p>
                                    @endif
                                    @if(isset($productDetails->ProductInfo->long_description))
                                    <p>{!! $productDetails->ProductInfo->long_description !!}</p>
                                    @endif
                                </div>
                                <!-- End .product-desc-content -->
                            </div>
                            <!-- End .tab-pane -->

                        </div>
                        <!-- End .tab-content -->
                    </div>
                    <!-- End .product-single-tabs -->

                    <br>
                    <br>
                    <br>
                    <br>
                    <!-- footer-area -->
                    @include('ecommerce.footer')
                    <!-- footer-area-end -->
                    <!-- End .footer -->
                </div>
            </div>
        </div>
    </div>
    <script>
        $(".inc.qtybutton").click(function() {
            var productId = $(this).attr('data-product-id');
            var quantity = $('#product_quantity_'+productId).val();
            quantity++;
            $('#product_quantity_'+productId).val(quantity);
        });

        $(".dec.qtybutton").click(function() {
            var productId = $(this).attr('data-product-id');
            var quantity = $('#product_quantity_'+productId).val();
            quantity--;
            $('#product_quantity_'+productId).val(quantity);
        });

    </script>
</main>
@endsection
