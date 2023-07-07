<div>
    
    <div class="py-3 py-md-4 checkout">
        <div class="container">
            <h4>Checkout</h4>
            <hr>

            @if ($this->totalProductAmount != '0')
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="shadow bg-white p-3">
                            <h4 class="text-primary">
                                Jumlah Keseluruhan Barang :
                                <span class="float-end">Rp. {{ $this->totalProductAmount }}</span>
                            </h4>
                            <hr>
                            <small>* Barang akan diantar dalam 3-5 hari.</small>
                            <br/>
                            <small>* Sudah termasuk PPN.</small>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="shadow bg-white p-3">
                            <h4 class="text-primary">
                                Informasi Pemesan
                            </h4>
                            <hr>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Nama Lengkap</label>
                                    <input type="text" wire:model.defer="fullname" class="form-control" placeholder="Nama Lengkap" />
                                    @error('fullname') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Nomor Telpon/HP</label>
                                    <input type="number" wire:model.defer="phone" class="form-control" placeholder="Nomor Telpon/HP" />
                                    @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Email</label>
                                    <input type="email" wire:model.defer="email" class="form-control" placeholder="Email" />
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Kode Pos</label>
                                    <input type="number" wire:model.defer="pincode" class="form-control" placeholder="Kode Pos" />
                                    @error('pincode') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Alamat Lengkap</label>
                                    <textarea wire:model.defer="address" class="form-control" rows="2"></textarea>
                                    @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Pilih Metode Pembayaran : </label>
                                    <div class="d-md-flex align-items-start">
                                        <div class="nav col-md-3 flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <button wire:loading.attr="disabled" class="nav-link active fw-bold" id="cashOnDeliveryTab-tab" data-bs-toggle="pill" data-bs-target="#cashOnDeliveryTab" type="button" role="tab" aria-controls="cashOnDeliveryTab" aria-selected="true">Cash on Delivery</button>
                                            <button wire:loading.attr="disabled" class="nav-link fw-bold" id="onlinePayment-tab" data-bs-toggle="pill" data-bs-target="#onlinePayment" type="button" role="tab" aria-controls="onlinePayment" aria-selected="false">Multipayment</button>
                                        </div>
                                        <div class="tab-content col-md-9" id="v-pills-tabContent">
                                            <div class="tab-pane active show fade" id="cashOnDeliveryTab" role="tabpanel" aria-labelledby="cashOnDeliveryTab-tab" tabindex="0">
                                                <h6>COD (Bayar di Tempat)</h6>
                                                <hr/>
                                                <button type="button" wire:loading.attr="disabled" wire:click="codOrder" class="btn btn-primary">
                                                    <span wire:loading.remove wire:target="codOrder">
                                                        Cash on Delivery
                                                    </span>
                                                    <span wire:loading wire:target="codOrder">
                                                        Membuat pesanan...
                                                    </span>
                                                </button>

                                            </div>
                                            <div class="tab-pane fade" id="onlinePayment" role="tabpanel" aria-labelledby="onlinePayment-tab" tabindex="0">
                                                <h6>Multipayment</h6>
                                                <hr/>
                                                <button type="button" wire:loading.attr="disabled" wire:click="checkout" class="btn btn-warning text-white" disabled>
                                                    <span wire:loading.remove wire:target="checkout">
                                                        Bayar Sekarang
                                                    </span>
                                                    <span wire:loading wire:target="checkout">
                                                        Membuat pesanan...
                                                    </span>
                                                </button>
                                                <small>* Sedang dalam perbaikan.</small>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            @else
                <div class="card card-body shadow text-center p-md-5">
                    <h4>Tidak ada item di keranjang</h4>
                    <a href="{{ url('collections') }}" class="btn btn-warning text-white">Belanja Sekarang</a>
                </div>
            @endif

        </div>
    </div>

</div>
