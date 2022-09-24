@extends('layouts.ecommerce')
@section('content')
<main class="main home">
    <div class="container-fluid p-0 m-0">
        <div class="row m-0">
            <!-- <div class="sidebar-overlay"></div> -->

            <div class="col-lg-12 mt-3">
                <div class="main-content p-0 m-0">
                    <section class="home-section home-section-slider pb-3 mb-1">
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
                    <br>
                    <section class="container">

                        <div class="row py-4">
                            <div class="col-12">
                                <div class="jumbotron jumbotron-fluid bg-info text-white text-center p-0 m-0">
                                    <div class="container">
                                        <h3 class="display-3">Welcome To {{ $companyInfo->name}}</h3>
                                        <p class="lead">
                                            <center>
                                                <a class="btn btn-danger rounded btn-sm mb-1" href="{{ route('contact') }}">Contact</a>
                                            </center>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <h2 class="section-title ls-n-15 text-center pb-2 m-b-4">Our Products</h2>
                            </div>
                            @foreach ($categories as $category)
                            <div class="col-md-2 appear-animate" data-animation-name="fadeIn" data-animation-delay="300" data-animation-duration="1000">
                                <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        <center>
                                            <a href="{{ route('search-category-wise', ['id' => $category->id]) }}">
                                                <img style="height: 200px; width: 100%;" class="rounded" @if($category->image1)
                                                src="{{ asset('storage/photo/' . $category->image1) }}"
                                                @else
                                                src="{{ asset('image-not-available.jpg') }}"
                                                @endif
                                                alt="productr" />
                                            </a>
                                        </center>
                                    </figure>

                                </div>
                                <div class="product-details">

                                    <div class="product-title text-center">
                                        <center> <a href="{{ route('search-category-wise', ['id' => $category->id]) }}">{{$category->name}}</a></center>
                                        </center>
                                    </div>
                                </div><!-- End .product-details -->
                            </div>
                            @endforeach
                            <div class="col-12">
                                <center>
                                    <a class="btn btn-danger text-light rounded" href="{{ route('category') }}">SEE ALL PRODUCTS</a>
                                </center>
                            </div>
                        </div>

                        <hr class="mt-1 mb-1">

                    </section>

                    <section class="container">
                        <div class="row py-4">
                            <div class="col-12">
                                <h2 class="section-title ls-n-15 text-center pb-2 m-b-4">Our News</h2>
                            </div>
                            @foreach ($BreakingNews as $breakingNews_value)
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" @if($breakingNews_value->image1)
                                    src="{{ asset('storage/photo/' . $breakingNews_value->image1) }}"
                                    @endif alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="{{ route('news_details', ['id' => $breakingNews_value->id]) }}">{{$breakingNews_value->title}}</a></h5>
                                        <p class="card-text">
                                            @if (strlen($breakingNews_value->news) > 100)
                                            {{ \Illuminate\Support\Str::limit($breakingNews_value->news, 50) . '...' }}
                                            @else
                                            {{ $breakingNews_value->news }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>
                    <section class="">
                        <div class="col-md-12 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="400" data-animation-duration="1000">
                            <div class="home-slider owl-carousel owl-theme" data-owl-options="{
							'dots': false,
							'nav': true
						}">
                                @foreach($testimonials as $testimonial)
                                <div class="home-slide home-slide{{$testimonial->id}} banner banner-md-vw banner-sm-vw d-flex align-items-center">
                                    <center>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$testimonial->name}}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">{{$testimonial->title}}</h6>
                                            <p class="card-text">{{$testimonial->description}}</p>
                                        </div>
                                    </div>
                                    </center>
                                    <!-- End .banner-layer -->
                                </div>
                                <!-- End .home-slide -->
                                @endforeach
                            </div>
                            <!-- End .home-slider -->
                        </div>
                        <!-- End .col-lg-9 -->
                    </section>
                    <!-- footer-area -->
                    @include('ecommerce.footer')
                    <!-- footer-area-end -->
                </div>
            </div>
        </div>
    </div>
</main>
@endsection