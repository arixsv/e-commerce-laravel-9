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
                    <h3>Edit Warna
                        <a href="{{ url('admin/colors') }}"
                            class="btn btn-sm text-white btn-danger float-end">Kembali</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/colors/'.$color->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label>Nama Warna</label>
                            <input type="text" name="name" value="{{ $color->name }}" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Kode Warna</label>
                            <input type="text" name="code" value="{{ $color->code }}" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Status</label> <br/>
                            <input type="checkbox" name="status" {{ $color->status == '1' ? 'checked' : '' }}" /> Checked=Hidden, UnChecked=Visible
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
