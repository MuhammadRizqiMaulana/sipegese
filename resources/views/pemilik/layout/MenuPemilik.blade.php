<!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <div class="sidebar-brand d-flex align-items-center justify-content-center bg-gradient-warning">
        <div class="sidebar-brand-text">
          <img src="img/logo/logo.png" width="70">
        </div>
        <div class="sidebar-brand-text">Gedung Serbaguna</div>
      </div>
      <hr class="sidebar-divider my-0">

      <li class="nav-item {{ Request::is('DashboardPemilik')? "active":""}}">
        <a class="nav-link" href="{{url ('DashboardPemilik')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      <li class="nav-item {{ Request::is('CrudAkunAdmin')? "active":""}}">
        <a class="nav-link" href="{{url ('CrudAkunAdmin')}}">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Akun Admin</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('LaporanPenyewaan')? "active":""}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-user"></i>
          <span>Laporan</span>
        </a>
        <div id="collapseBootstrap" class="collapse {{ Request::is('LaporanPenyewaan')? "show":""}}" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Laporan</h6>
            <a class="collapse-item {{ Request::is('LaporanPenyewaan')? "active":""}}" href="{{url ('LaporanPenyewaan')}}">Laporan Penyewaan</a>
            <a class="collapse-item" href="#">Laporan lain-lain</a>
          </div>
        </div>
      </li>
       <li class="nav-item {{ Request::is('LihatKalenderAcara')? "active":""}}">
        <a class="nav-link" href="{{url ('LihatKalenderAcara')}}">
          <i class="far fa-fw fa-calendar"></i>
          <span>Kalender Acara</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('LihatGaleri')? "active":""}}">
        <a class="nav-link" href="{{url ('LihatGaleri')}}">
          <i class="far fa-fw fa-image"></i>
          <span>Galeri</span>
        </a>
      </li>
      <hr class="sidebar-divider">
            
    </ul>
    <!-- Sidebar -->