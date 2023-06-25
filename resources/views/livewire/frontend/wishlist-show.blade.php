<div>

    <div class="py-3 py-md-5">
        <div class="container">
    
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Daftar Favorit</h4><hr>
                    <div class="shopping-cart">

                        <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <h4>Produk</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Harga</h4>
                                </div>
                                <div class="col-md-4">
                                    <h4>Hapus</h4>
                                </div>
                            </div>
                        </div>

                        @forelse ($wishlist as $wishlistItem)
                            @if ($wishlistItem->product)
                                <div class="cart-item">
                                    <div class="row">
                                        <div class="col-md-6 my-auto">
                                            <a href="{{ url('collections/'.$wishlistItem->product->category->slug.'/'.$wishlistItem->product->slug) }}">
                                                <label class="product-name">
                                                    <img src="{{ $wishlistItem->product->productImages[0]->image }}" 
                                                        style="width: 50px; height: 50px" alt="{{ $wishlistItem->product->name }}">

                                                    {{ $wishlistItem->product->name }}
                                                </label>
                                            </a>
                                        </div>
                                        <div class="col-md-2 my-auto text-center">
                                            <label class="price">Rp.{{ $wishlistItem->product->selling_price }} </label>
                                        </div>
                                        <div class="col-md-4 col-12 my-auto text-center">
                                            <div class="remove">
                                                <button type="button" wire:click="removeWishlistItem({{ $wishlistItem->id }})" class="btn btn-danger btn-sm">
                                                    <span wire:loading.remove wire:target="removeWishlistItem({{ $wishlistItem->id }})">
                                                        <i class="fa fa-trash"></i> Hapus
                                                    </span>
                                                    <span wire:loading wire:target="removeWishlistItem({{ $wishlistItem->id }})">
                                                        <i class="fa fa-trash"></i> Menghapus...
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @empty
                            <h4 class="text-center">Tidak Ada Wishlist Yang Ditambahkan</h4>
                        @endforelse
                                
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</div>
