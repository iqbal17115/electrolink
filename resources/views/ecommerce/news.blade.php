@extends('layouts.ecommerce')
@section('content')
<main class="main home">
    <div class="container-fluid p-0 m-0">
        <div class="row m-0">
            <!-- <div class="sidebar-overlay"></div> -->

            <div class="col-lg-12 mt-3">
                <div class="main-content p-0 m-0">
                    <br>
                    <br>
                    <br>
                    <br>
                    <section class="container">
                        <div class="row py-4">
                            <div class="col-12">
                                <h2 class="section-title ls-n-15 text-center pb-2 m-b-4">Our News</h2>
                            </div>
                            @foreach ($BreakingNews as $breakingNews_value)
                            <div class="col-md-12">
                                <div class="card">
                                    <img style="height: 250px;" class="card-img-top" @if($breakingNews_value->image1)
                                            src="{{ asset('storage/photo/' . $breakingNews_value->image1) }}"
                                            @endif alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="{{ route('news_details', ['id' => $breakingNews_value->id]) }}">{{$breakingNews_value->title}}</a></h5>
                                        <p class="card-text">
                                        
                                                        {{ $breakingNews_value->news }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>
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