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
                    <h3>Edit Slide
                        <a href="{{ url('admin/sliders') }}"
                            class="btn btn-sm text-white btn-danger float-end">Kembali</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/sliders/'.$slider->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label>Judul</label>
                            <input type="text" name="title" value="{{ $slider->title }}" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Deskripsi</label>
                            <textarea name="description" class="form-control" rows="3">{{ $slider->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label>Foto</label>
                            <input type="file" name="image" class="form-control" />
                            <img src="{{ asset("$slider->image") }}" style="width:50px;height:50px;" alt="Slider">
                        </div>
                        <div class="mb-3">
                            <label>Status</label> <br/>
                            <input type="checkbox" name="status" {{ $slider->status == '1' ? 'checked':'' }} /> 
                            Checked=Hidden, UnChecked=Visible
                        </div>
                        <div class="mb-3 float-end">
                            <button type="submit" class="btn btn-success text-white">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
