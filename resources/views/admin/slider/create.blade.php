@extends('layouts.admin')

@section('title', 'Tambah Banner Slider')

@section('content')

    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Tambah Slide
                        <a href="{{ url('admin/sliders') }}"
                            class="btn btn-sm text-white btn-danger float-end">Kembali</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/sliders') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label>Judul</label>
                            <input type="text" name="title" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Deskripsi</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label>Foto</label>
                            <input type="file" name="image" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Status</label> <br/>
                            <input type="checkbox" name="status" /> 
                            Checked=Hidden, UnChecked=Visible
                        </div>
                        <div class="mb-3 float-end">
                            <button type="submit" class="btn btn-success text-white">Tambah</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
