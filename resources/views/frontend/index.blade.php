@extends('layouts.app')

@section('title', 'Aullya Olshop | Situs Jual Beli Online Terlengkap, Aman & Terpercaya')

@section('content')
    <div class="container py-4">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-inner" style="border-radius: 20px">

                @foreach ($sliders as $key => $sliderItem)
                    <div class="carousel-item {{ $key == '0' ? 'active' : '' }}">
                        @if ($sliderItem->image)
                            <img src="{{ asset("$sliderItem->image") }}" class="d-block w-100" alt="..."
                                style="height:400px;">
                        @endif

                        <div class="carousel-caption d-none d-md-block">
                            <div class="custom-carousel-content">
                                <h1>
                                    {!! $sliderItem->title !!}
                                </h1>
                                <p>
                                    {!! $sliderItem->description !!}
                                </p>
                                <div>
                                    <a href="#" class="btn btn-slider">
                                        Dapatkan Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Trending Produk</h4>
                    <div class="underline mb-4"></div>
                </div>

                @if ($trendingProducts)
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme for-carousel">
                            @foreach ($trendingProducts as $productItem)
                                <div class="item">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <label class="stock bg-danger">Baru</label>

                                            @if ($productItem->productImages->count() > 0)
                                                <a
                                                    href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                    <img src="{{ asset($productItem->productImages[0]->image) }}"
                                                        alt="{{ $productItem->name }}">
                                                </a>
                                            @endif

                                        </div>
                                        <div class="product-card-body">
                                            <p class="product-brand">{{ $productItem->brand }}</p>
                                            <h5 class="product-name">
                                                <a
                                                    href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                    {{ $productItem->name }}
                                                </a>
                                            </h5>
                                            <div>
                                                <span class="selling-price">Rp. {{ $productItem->selling_price }}</span>
                                                <span class="original-price">Rp. {{ $productItem->original_price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="col-md-12">
                        <div class="p-2">
                            <h4>Tidak Ada Produk Yang Ditemukan</h4>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Produk Terbaru
                        <a href="{{ url('new-arrivals') }}" class="btn btn-primary float-end text-white">Lihat Semua</a>
                    </h4>
                    <div class="underline mb-4"></div>
                </div>

                @if ($newArrivalsProducts)
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme for-carousel">
                            @foreach ($newArrivalsProducts as $productItem)
                                <div class="item">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <label class="stock bg-danger">Baru</label>

                                            @if ($productItem->productImages->count() > 0)
                                                <a
                                                    href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                    <img src="{{ asset($productItem->productImages[0]->image) }}"
                                                        alt="{{ $productItem->name }}">
                                                </a>
                                            @endif

                                        </div>
                                        <div class="product-card-body">
                                            <p class="product-brand">{{ $productItem->brand }}</p>
                                            <h5 class="product-name">
                                                <a
                                                    href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                    {{ $productItem->name }}
                                                </a>
                                            </h5>
                                            <div>
                                                <span class="selling-price">Rp. {{ $productItem->selling_price }}</span>
                                                <span class="original-price">Rp. {{ $productItem->original_price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="col-md-12">
                        <div class="p-2">
                            <h4>Tidak Ada Produk Yang Ditemukan</h4>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Produk Terpopuler
                        <a href="{{ url('featured-products') }}" class="btn btn-primary float-end text-white">Lihat Semua</a>
                    </h4>
                    <div class="underline mb-4"></div>
                </div>

                @if ($featuredProducts)
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme for-carousel">
                            @foreach ($featuredProducts as $productItem)
                                <div class="item">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <label class="stock bg-danger">Baru</label>

                                            @if ($productItem->productImages->count() > 0)
                                                <a
                                                    href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                    <img src="{{ asset($productItem->productImages[0]->image) }}"
                                                        alt="{{ $productItem->name }}">
                                                </a>
                                            @endif

                                        </div>
                                        <div class="product-card-body">
                                            <p class="product-brand">{{ $productItem->brand }}</p>
                                            <h5 class="product-name">
                                                <a
                                                    href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                                    {{ $productItem->name }}
                                                </a>
                                            </h5>
                                            <div>
                                                <span class="selling-price">Rp. {{ $productItem->selling_price }}</span>
                                                <span class="original-price">Rp. {{ $productItem->original_price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="col-md-12">
                        <div class="p-2">
                            <h4>Tidak Ada Produk Yang Ditemukan</h4>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script>
        $('.for-carousel').owlCarousel({
            loop:true,
            margin:10,
            dot:true,
            nav:false,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4,
                    loop:false
                }
            }
        })
    </script>

@endsection
