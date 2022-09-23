@extends('layouts.ecommerce')
@section('content')
<main class="main home">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <!-- <div class="sidebar-overlay"></div> -->

            <div class="col-lg-12">
            <hr class="mt-3 mb-3">

                <section class="container">

                    <div class="row py-4">
                        <div class="col-12">
                            <h2 class="section-title ls-n-15 text-center pb-2 m-b-4">Our All Products</h2>
                        </div>
                        @foreach ($categories1 as $category)
                        <div class="col-md-2 appear-animate" data-animation-name="fadeIn" data-animation-delay="300" data-animation-duration="1000">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="{{ route('search-category-wise', ['id' => $category->id]) }}">
                                        <img style="height: 200px;" class="rounded" @if($category->image1)
                                        src="{{ asset('storage/photo/' . $category->image1) }}"
                                        @else
                                        src="{{ asset('image-not-available.jpg') }}"
                                        @endif
                                        alt="productr" />
                                    </a>
                                    <!-- <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
            View</a> -->
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title text-center">
                                        <center>
                                            <a href="{{ route('search-category-wise', ['id' => $category->id]) }}">{{$category->name}}</a>
                                        </center>
                                    </h3>
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        @endforeach
                    </div>


                </section>
            </div>
        </div>
    </div>
</main>
@endsection