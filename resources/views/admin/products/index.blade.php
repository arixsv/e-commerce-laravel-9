@extends('layouts.admin')

@section('title', 'Admin Aullya Olshop')

@section('content')

    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Daftar Produk
                        <a href="{{ url('admin/products/create') }}"
                            class="btn btn-sm text-white btn-primary float-end">Tambah Produk</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>ID Produk</th>
                                <th>Kategori</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td class="text-center">{{ $product->id }}</td>
                                    <td class="text-center">
                                        @if ($product->category)
                                            {{ $product->category->name }}
                                        @else
                                            Tidak Ada Kategori
                                        @endif
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>Rp. {{ $product->selling_price }}</td>
                                    <td class="text-center">{{ $product->quantity }}</td>
                                    <td class="text-center">{{ $product->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('admin/products/'.$product->id.'/edit') }}" class="btn btn-success text-white">Edit</a>
                                        <a href="{{ url('admin/products/'.$product->id.'/delete') }}" onclick="return confirm('Apakah yakin akan menghapus data ini ?')" class="btn btn-danger text-white">Hapus</a>
                                    </td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="7">Produk Tidak Tersedia</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection
