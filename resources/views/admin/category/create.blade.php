@extends('layouts.admin')

@section('title', 'Admin Aullya Olshop')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Kategori
                    <a href="{{ url('admin/category') }}" class="btn btn-sm text-white btn-danger float-end">Kembali</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        
                        <div class="col-md-6 mb-3">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" />
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Slug</label>
                            <input type="text" name="slug" class="form-control" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Deskripsi</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Gambar</label>
                            <input type="file" name="image" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Status</label><br/>
                            <input type="checkbox" name="status" />
                        </div>
    
                        <div class="col-md-12">
                            <h4>SEO Tags</h4>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Meta Title</label>
                            <input type="text" name="meta_title" class="form-control" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Meta Keyword</label>
                            <textarea name="meta_keyword" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Meta Description</label>
                            <textarea name="meta_description" class="form-control" rows="3"></textarea>
                        </div>
    
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-success text-white float-end">Simpan</button>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection