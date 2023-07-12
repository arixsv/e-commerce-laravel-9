@extends('layouts.admin')

@section('title', 'Daftar Banner Slider')

@section('content')

    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Daftar Slide
                        <a href="{{ url('admin/sliders/create') }}"
                            class="btn btn-sm text-white btn-primary float-end">Tambah Slider</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="text-center">
                            <th>ID Slider</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                                <tr>
                                    <td class="text-center">{{ $slider->id }}</td>
                                    <td style="max-width: 200px;">{{ $slider->title }}</td>
                                    <td style="max-width: 5%;">{{ $slider->description }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset("$slider->image") }}" style="width: 70px; height: 70px;" alt="Slider">
                                    </td>
                                    <td class="text-center">{{ $slider->status == '0' ? 'Visible':'Hidden' }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('admin/sliders/'.$slider->id.'/edit') }}" class="btn btn-success text-white">Edit</a>
                                        <a href="{{ url('admin/sliders/'.$slider->id.'/delete') }}" onclick="return confirm('Apakah yakin akan menghapus data ini ?')" class="btn btn-danger text-white">Hapus</a>
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
