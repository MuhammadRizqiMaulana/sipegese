<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <div class="sidebar-brand d-flex align-items-center justify-content-center bg-gradient-warning">
        <div class="sidebar-brand-text">
          <img src="img/logo/logo.png" width="70">
        </div>
        <div class="sidebar-brand-text">Gedung Serbaguna</div>
      </div>
      <hr class="sidebar-divider my-0">

      <li class="nav-item {{ Request::is('DashboardAdmin')? "active":""}}">
        <a class="nav-link" href="{{url ('DashboardAdmin')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      <li class="nav-item {{ Request::is('CrudAkunUser')? "active":""}}">
        <a class="nav-link" href="{{url ('CrudAkunUser')}}">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Akun User</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('CrudFasilitas')? "active":""}}  {{ Request::is('CrudGedung')? "active":""}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-user"></i>
          <span>Master</span>
        </a>
        <div id="collapseBootstrap" class="collapse {{ Request::is('CrudFasilitas')? "show":""}} {{ Request::is('CrudGedung')? "show":""}} " aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Master</h6>
            <a class="collapse-item {{ Request::is('CrudGedung')? "active":""}}" href="{{url ('CrudGedung')}}">Gedung</a>
            <a class="collapse-item {{ Request::is('CrudFasilitas')? "active":""}}" href="{{url ('CrudFasilitas')}}">Fasilitas</a>
          </div>
        </div>
      </li>
      <li class="nav-item {{ Request::is('CrudKalenderAcara')? "active":""}}">
        <a class="nav-link" href="{{url ('CrudKalenderAcara')}}">
          <i class="far fa-fw fa-calendar"></i>
          <span>Kalender Acara</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('CrudGaleri')? "active":""}}">
        <a class="nav-link" href="{{url ('CrudGaleri')}}">
          <i class="far fa-fw fa-image"></i>
          <span>Galeri</span>
        </a>
      </li>
      <hr class="sidebar-divider">
            
    </ul>