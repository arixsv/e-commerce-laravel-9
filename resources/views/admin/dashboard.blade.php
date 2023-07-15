@extends('layouts.admin')

@section('title', 'Admin')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">

            @if (session('message'))
                <h6 class="alert alert-success">{{ session('message') }}</h6>
            @endif

            <div class="me-md-3 me-xl-5">
                <h2>Dashboard,</h2>
                <p class="mb-md-0">Dashboard Analisis</p>
                <hr>
            </div>

            <div class="row">
                <h4>Data Pembelian :</h4>
                <div class="col-md-3">
                    <div class="card card-body bg-primary text-white mb-3" style="border-radius: 12px;">
                        <label>Total Pembeli</label>
                        <h1>{{ $totalOrder }}</h1>
                        <a href="{{ url('admin/orders') }}" class="text-white text-end">Lihat</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body bg-warning text-white mb-3" style="border-radius: 12px;">
                        <label>Pembeli Hari Ini</label>
                        <h1>{{ $todayOrder }}</h1>
                        <a href="{{ url('admin/orders') }}" class="text-white text-end">Lihat</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body bg-danger text-white mb-3" style="border-radius: 12px;">
                        <label>Pembeli Bulan Ini</label>
                        <h1>{{ $thisMonthOrder }}</h1>
                        <a href="{{ url('admin/orders') }}" class="text-white text-end">Lihat</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body bg-success text-white mb-3" style="border-radius: 12px;">
                        <label>Pembeli Tahun Ini</label>
                        <h1>{{ $thisYearOrder }}</h1>
                        <a href="{{ url('admin/orders') }}" class="text-white text-end">Lihat</a>
                    </div>
                </div>
            </div>
            <br />
            <!-- <div class="row">
                <h4>Data Produk :</h4>
                <div class="col-md-3">
                    <div class="card card-body bg-warning text-white mb-3" style="border-radius: 12px;">
                        <label>Total Produk</label>
                        <h1>{{ $totalProducts }}</h1>
                        <a href="{{ url('admin/products') }}" class="text-white text-end">Lihat</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body bg-danger text-white mb-3" style="border-radius: 12px;">
                        <label>Total Kategori</label>
                        <h1>{{ $totalCategories }}</h1>
                        <a href="{{ url('admin/category') }}" class="text-white text-end">Lihat</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body bg-success text-white mb-3" style="border-radius: 12px;">
                        <label>Total Brands</label>
                        <h1>{{ $totalBrands }}</h1>
                        <a href="{{ url('admin/brands') }}" class="text-white text-end">Lihat</a>
                    </div>
                </div>
            </div>
            <br /> -->
            <!-- <div class="row">
                <h4>Data User :</h4>
                <div class="col-md-3">
                    <div class="card card-body bg-danger text-white mb-3" style="border-radius: 12px;">
                        <label>Total Semua User</label>
                        <h1>{{ $totalAllUsers }}</h1>
                        <a href="{{ url('admin/users') }}" class="text-white text-end">Lihat</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body bg-success text-white mb-3" style="border-radius: 12px;">
                        <label>Total User</label>
                        <h1>{{ $totalUser }}</h1>
                        <a href="{{ url('admin/users') }}" class="text-white text-end">Lihat</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body bg-primary text-white mb-3" style="border-radius: 12px;">
                        <label>Total Admin</label>
                        <h1>{{ $totalAdmin }}</h1>
                        <a href="{{ url('admin/users') }}" class="text-white text-end">Lihat</a>
                    </div>
                </div>
            </div> -->

        </div>
    </div>

@endsection
