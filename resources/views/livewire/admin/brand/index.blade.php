@section('title', 'Admin Aullya Olshop')

<div>

    <!-- Memanggil modal-form.blade.php -->
    @include('livewire.admin.brand.modal-form')
    
    <div class="row">
        <div class="col-md-12">
            @if(session('message'))
              <h6 class="alert alert-success">{{ session('message') }}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>
                        Brands List
                        <a href="#" data-bs-toggle="modal" data-bs-target="#addBrandModal" class="btn btn-primary btn-sm float-end text-white">Tambah Brands</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered  table-striped">
                        <thead class="text-center">
                            <tr>
                                <th>ID Brands</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($brands as $brand)
                                <tr>
                                    <td class="text-center">{{ $brand->id }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td>
                                        @if ($brand->category)
                                            {{ $brand->category->name }}
                                        @else
                                            Tidak Ada Kategori
                                        @endif
                                    </td>
                                    <td>{{ $brand->slug }}</td>
                                    <td class="text-center">{{ $brand->status == '1' ? 'Hidden':'Visible' }}</td>
                                    <td class="text-center">
                                        <a href="#" wire:click="editBrand({{ $brand->id }})" data-bs-toggle="modal" data-bs-target="#updateBrandModal" class="btn btn-success text-white">Edit</a>
                                        <a href="#" wire:click="deleteBrand({{ $brand->id }})" data-bs-toggle="modal" data-bs-target="#deleteBrandModal" class="btn btn-danger text-white">Hapus</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">Brands Tidak Ditemukan</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                        {{ $brands->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
