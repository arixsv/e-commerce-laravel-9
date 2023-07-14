@extends('layouts.admin')

@section('title', 'Daftar User')

@section('content')

    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Users
                        <a href="{{ url('admin/users/create') }}"
                            class="btn btn-sm text-white btn-primary float-end">Tambah User</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>ID User</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td class="text-center">{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="text-center">
                                        @if ($user->role_as == '0')
                                            <label class="badge btn-primary text-white">User</label>
                                        @elseif ($user->role_as == '1')
                                            <label class="badge btn-success text-white">Admin</label>
                                        @else
                                            <label class="badge btn-light">None</label>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url('admin/users/'.$user->id.'/edit') }}" class="btn btn-success text-white">Edit</a>
                                        <a href="{{ url('admin/users/'.$user->id.'/delete') }}" onclick="return confirm('Apakah yakin akan menghapus data ini ?')" class="btn btn-danger text-white">Hapus</a>
                                    </td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="5">Tidak Ada User</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
