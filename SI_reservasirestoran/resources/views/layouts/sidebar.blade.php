    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('AdminLTE/dist/img/Raddish.jpeg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Raddish</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @guest

            @else
            {{ Auth::user()->name }}

            @endguest
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @guest
                @if (Route::has('login'))
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                @endif
                @if (Route::has('register'))
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
                @endif

               @else
               <li class="nav-item">
                <a href="/" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/Restoran/restoran" class="nav-link">
                  <i class="nav-icon fas fa-utensils"></i>
                  <p>Restoran [Penjual]</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/RestoranPelanggan/restoran-pelanggan" class="nav-link">
                  <i class="nav-icon fas fa-utensils"></i>
                  <p>Restoran [Pelanggan]</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/Reservasi" class="nav-link">
                  <i class="nav-icon fas fa-clipboard-list"></i>
                  <p>Ongoing Reservasi</p>
                </a>
              </li>                     
              <li class="nav-item">
                <a href="/History" class="nav-link">
                  <i class="nav-icon fas fa-clock"></i>
                  <p>History</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/Report" class="nav-link">
                  <i class="nav-icon fas fa-light fa-folder-open"></i>
                  <p>History Report</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="/mahasiswa" class="nav-link">
                  <i class="nav-icon fas fa-folder-open"></i>
                  <p>Promotion</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/mahasiswa" class="nav-link">
                  <i class="nav-icon fas fa-folder-open"></i>
                  <p>Top Picks</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/mahasiswa" class="nav-link">
                  <i class="nav-icon fas fa-arrow-right"></i>
                  <p>Rad Picks</p>
                </a>
              </li> --}}
              
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-door-open"></i>
                        {{ __('Logout') }}
                </a>
                
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </li>
              @endguest
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  