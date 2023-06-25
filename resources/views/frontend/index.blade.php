@extends('layouts.app')

@section('title', 'Aullya Olshop | Situs Jual Beli Online Terlengkap, Aman & Terpercaya')

@section('content')
    <div class="container">
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

@endsection
