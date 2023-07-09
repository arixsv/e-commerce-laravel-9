  <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
          <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/dashboard') }}">
                  <i class="mdi mdi-speedometer menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/orders') }}">
                  <i class="mdi mdi-sale menu-icon"></i>
                  <span class="menu-title">Pembelian</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#category" aria-expanded="false"
                  aria-controls="category">
                  <i class="mdi mdi-view-list menu-icon"></i>
                  <span class="menu-title">Kategori</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="category">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category/create') }}">Tambah
                              Kategori</a></li>
                      <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category') }}">Daftar Kategori</a>
                      </li>
                  </ul>
              </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#products" aria-expanded="false"
                  aria-controls="products">
                  <i class="mdi mdi-plus-circle menu-icon"></i>
                  <span class="menu-title">Produk</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="products">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="{{ url('admin/products/create') }}">Tambah
                              Produk</a></li>
                      <li class="nav-item"> <a class="nav-link" href="{{ url('admin/products') }}">Daftar Produk</a>
                      </li>
                  </ul>
              </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/brands') }}">
                  <i class="mdi mdi-view-headline menu-icon"></i>
                  <span class="menu-title">Brands</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/colors') }}">
                  <i class="mdi mdi-palette menu-icon"></i>
                  <span class="menu-title">Pilihan Warna</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                  <i class="mdi mdi-account-multiple-plus menu-icon"></i>
                  <span class="menu-title">Users</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a>
                      </li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a>
                      </li>
                  </ul>
              </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/sliders') }}">
                  <i class="mdi mdi-view-carousel menu-icon"></i>
                  <span class="menu-title">Home Slider</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="documentation/documentation.html">
                  <i class="mdi mdi-settings menu-icon"></i>
                  <span class="menu-title">Pengaturan Halaman</span>
              </a>
          </li>
      </ul>
  </nav>
