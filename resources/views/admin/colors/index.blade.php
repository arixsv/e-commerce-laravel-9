@extends('layouts.admin')

@section('title', 'Daftar Warna')

@section('content')

    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Daftar Warna
                        <a href="{{ url('admin/colors/create') }}"
                            class="btn btn-sm text-white btn-primary float-end">Tambah Warna</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="text-center">
                            <th>ID Warna</th>
                            <th>Nama Warna</th>
                            <th>Kode Warna</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($colors as $item)
                                
                            <tr>
                                <td class="text-center">{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->code }}</td>
                                <td class="text-center">{{ $item->status ? 'Hidden':'Visible' }}</td>
                                <td class="text-center">
                                    <a href="{{ url('admin/colors/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm text-white">Edit</a>
                                    <a href="{{ url('admin/colors/'.$item->id.'/delete') }}" onclick="return confirm('Apakah yakin akan menghapus data ini ?')" class="btn btn-danger btn-sm text-white">Hapus</a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
