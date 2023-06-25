    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">Tambah Brand</h5>
                    <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="storeBrand">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Pilih Kategori</label>
                            <select wire:model.defer="category_id" required class="form-control">
                                <option value="">-- Pilih Kategori --</option>
                                @foreach ($categories as $cateItem)
                                    <option value="{{ $cateItem->id }}">{{ $cateItem->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Nama Brand</label>
                            <input type="text" wire:model.defer="name" class="form-control">
                            @error('name')
                                <small class="text-danger">{{ message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Brand Slug</label>
                            <input type="text" wire:model.defer="slug" class="form-control">
                            @error('slug')
                                <small class="text-danger">{{ message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Status</label>
                            <input type="checkbox" wire:model.defer="status" /> Checked=Hidden, Un-Checked=Visible
                            @error('status')
                                <small class="text-danger">{{ message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="closeModal" class="btn btn-secondary"
                            data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" data-bs-dismiss="modal"
                            class="btn btn-primary text-white">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Brand Update Modal -->
    <div wire:ignore.self class="modal fade" id="updateBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">Edit Brand</h5>
                    <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div wire:loading class="p-2">
                    <div class="d-flex align-items-center">
                        <strong>Loading...</strong>
                        <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
                    </div>
                </div>
                <div wire:loading.remove>

                    <form wire:submit.prevent="updateBrand">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label>Pilih Kategori</label>
                                <select wire:model.defer="category_id" required class="form-control">
                                    <option value="">-- Pilih Kategori --</option>
                                    @foreach ($categories as $cateItem)
                                        <option value="{{ $cateItem->id }}">{{ $cateItem->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Nama Brand</label>
                                <input type="text" wire:model.defer="name" class="form-control">
                                @error('name')
                                    <small class="text-danger">{{ message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Brand Slug</label>
                                <input type="text" wire:model.defer="slug" class="form-control">
                                @error('slug')
                                    <small class="text-danger">{{ message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Status</label>
                                <input type="checkbox" wire:model.defer="status" /> Checked=Hidden, Un-Checked=Visible
                                @error('status')
                                    <small class="text-danger">{{ message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" wire:click="closeModal" class="btn btn-secondary"
                                data-bs-dismiss="modal">Kembali</button>
                            <button type="submit" data-bs-dismiss="modal"
                                class="btn btn-primary text-white">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Brand Delete Modal -->
    <div wire:ignore.self class="modal fade" id="deleteBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">Hapus Brand</h5>
                    <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div wire:loading class="p-2">
                    <div class="d-flex align-items-center">
                        <strong>Loading...</strong>
                        <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
                    </div>
                </div>
                <div wire:loading.remove>

                    <form wire:submit.prevent="destroyBrand">
                        <div class="modal-body">
                            <h4>Apakah anda yakin ingin menghapus data ini ?</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" wire:click="closeModal" class="btn btn-secondary"
                                data-bs-dismiss="modal">Kembali</button>
                            <button type="submit" data-bs-dismiss="modal" class="btn btn-primary text-white">Ya,
                                Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
