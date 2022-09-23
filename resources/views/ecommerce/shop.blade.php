@extends('layouts.ecommerce')
@section('content')
<main class="main home">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <!-- <div class="sidebar-overlay"></div> -->


            <div class="col-lg-12">
                <div class="main-content">
            
<hr>

                    <div class="row products-group">
                        @foreach ($data['products'] as $productId=>$product)
                        <div class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-2">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="{{route('product-details',['id'=>$product['id']])}}">
                                        <img
                                        @if(isset($product->ProductImageFirst))
                                          src="{{ asset('storage/photo/'.$product->ProductImageFirst->image)}}"
                                        @else
                                          src="{{ asset('image-not-available.jpg')}}"
                                        @endif width="205" height="205" id="ProductImage" alt="product">
                                    </a>
                                    {{-- Start Cart --}}
                                    <div class="btn-icon-group">
                                        @php
                                        $minimumQuantity = $product['min_order_qty'];
                                        $orderQuantity = 0;
                                        if(isset($cardBadge['data']['products'][$product['id']])) {
                                        $minimumQuantity =
                                        $cardBadge['data']['products'][$product['id']]['minimum_order_quantity'];
                                        $orderQuantity = $cardBadge['data']['products'][$product['id']]['quantity'];
                                        }
                                        @endphp
                                        <input type="hidden" class="product_quantity"
                                            id="product_quantity_{{ $product['id'] }}"
                                            data-minimum-quantity="{{ $minimumQuantity }}"
                                            value="{{ $orderQuantity ? $orderQuantity : $minimumQuantity }}">
                                        {{-- <a href="javascript:void(0)" data-product-id="{{ $product['id'] }}"
                                            class="btn-icon btn-add-cart product-type-simple add-to-card buy-now buy-now-button cartModal"><i
                                                class="icon-shopping-cart"></i></a> --}}
                                    </div>
                                    {{-- End Cart --}}
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                        </div>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo40-product.html">
                                            @if(strlen($product['name'])>50)
                                            {{\Illuminate\Support\Str::limit($product['name'], 50).'...'}}
                                            @else
                                            {{ $product['name'] }}
                                            @endif
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->
                        @endforeach
                    </div>
                    <!-- End .row -->

                    <!-- footer-area -->
                    @include('ecommerce.footer')
                    <!-- footer-area-end -->
                    <!-- End .footer -->
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
