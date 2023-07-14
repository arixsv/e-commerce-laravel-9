    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="footer-heading">{{ $appSetting->website_name ?? 'website name' }}</h4>
                    <div class="footer-underline"></div>
                    <p>
                        Belanja kebutuhanmu disini
                    </p>
                </div>
                <div class="col-md-3">
                    <h4 class="footer-heading">Links</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2"><a href="{{ url('/') }}" class="text-white">Beranda</a></div>
                    <div class="mb-2"><a href="{{ url('/about-us') }}" class="text-white">Tentang Kami</a></div>
                    <div class="mb-2"><a href="{{ url('/contact-us') }}" class="text-white">Kontak Kami</a></div>
                    <div class="mb-2"><a href="{{ url('/sitemap') }}" class="text-white">Sitemaps</a></div>
                </div>
                <div class="col-md-3">
                    <h4 class="footer-heading">Belanja Sekarang</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2"><a href="{{ url('/collections') }}" class="text-white">Kategori</a></div>
                    <div class="mb-2"><a href="{{ url('/') }}" class="text-white">Trending Produk</a></div>
                    <div class="mb-2"><a href="{{ url('/new-arrivals') }}" class="text-white">Produk Terbaru</a></div>
                    <div class="mb-2"><a href="{{ url('/featured-products') }}" class="text-white">Produk Terpopuler</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4 class="footer-heading">Temukan Kami</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2">
                        <p>
                            <i class="fa fa-map-marker"></i> {{ $appSetting->address ?? 'address' }}
                        </p>
                    </div>
                    <div class="mb-2">
                            <i class="fa fa-phone"></i> {{ $appSetting->phone1 ?? 'phone1' }}
                    </div>
                    <div class="mb-2">
                        <a href="" class="text-white">
                            <i class="fa fa-envelope"></i> {{ $appSetting->email1 ?? 'email1' }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class=""> &copy; 2023 - Aullya Olshop. All rights reserved.</p>
                </div>
                <div class="col-md-4">
                    <div class="social-media">
                        Get Connected:
                        {{ $appSetting->phone1 ?? 'phone1' }}
                        @if ($appSetting->facebook)
                            <a href="{{ $appSetting->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                        @endif
                        @if ($appSetting->twitter)
                            <a href="{{ $appSetting->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>
                        @endif
                        @if ($appSetting->instagram)
                            <a href="{{ $appSetting->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a>
                        @endif
                        @if ($appSetting->youtube)
                            <a href="{{ $appSetting->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
