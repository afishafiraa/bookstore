<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('adminlte/img/AdminLTELogo.png') }}" alt="Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Bookstore Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('adminlte/img/avatar.png') }}" class="img-circle elevation-2" alt="User">
            </div>
            <div class="info">
                <a href="{{ route('profile.edit') }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Buku</p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('book.index') }}">
                               <i class="fas fa-list nav-icon"></i>
                               <p>Daftar Buku</p> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('category.index') }}">
                               <i class="fas fa-th-large nav-icon"></i>
                               <p>Kategori</p> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('author.index') }}">
                               <i class="fas fa-pen nav-icon"></i>
                               <p>Penulis</p> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route(name: 'publisher.index') }}">
                               <i class="fas fa-house-user nav-icon"></i>
                               <p>Penerbit</p> 
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>Pesanan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Lain-lain
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Active Page</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Inactive Page</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <!-- Add more menu items here -->
            </ul>
        </nav>
    </div>
</aside>
