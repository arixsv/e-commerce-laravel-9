@extends('layouts.app')

@section('title', 'Daftar Kategori | Aullya Olshop')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Semua Kategori</h4>
                </div>

                @forelse ($categories as $categoryItem)
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="{{ url('/collections/'.$categoryItem->slug) }}">
                            <div class="category-card-img">
                                <img src="{{ asset("$categoryItem->image") }}" class="w-100" alt="{{ $categoryItem->slug }}">
                            </div>
                            <div class="category-card-body">
                                <h5>{{ $categoryItem->name }}</h5>
                            </div>
                        </a>
                    </div>
                </div>    
                @empty
                <div class="col-md-12">
                    <h5>Kategori Tidak Ditemukan</h5>
                </div>    
                @endforelse
                
            </div>
        </div>

@endsection
