<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
      <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Dashboard</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
      <a class="nav-link" href="/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
  </li>


  <!-- Garis -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
      Master Data
  </div>

  <!-- Data Peta -->
  <li class="nav-item {{ Request::is('dashboard/kecamatan*') || Request::is('dashboard/kesesuaianlahan*') ? 'active' : '' }}">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
          aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-map"></i>
          <span>Data Peta</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
          data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Kelola Data Peta:</h6>
              <a class="collapse-item" href="/dashboard/kecamatan">Kecamatan</a>
              <a class="collapse-item" href="/dashboard/kesesuaianlahan">Peta Kesesuaian Lahan</a>
          </div>
      </div>
  </li>

  <!-- Users -->
  <li class="nav-item {{ Request::is('dashboard/artikel*')|| Request::is('dashboard/kategori*') ? 'active' : '' }}">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
          aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Artikel</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Kelola Data:</h6>
              <a class="collapse-item" href="/dashboard/kategori">Kategori</a>
              <a class="collapse-item" href="/dashboard/artikel">Artikel</a>
          </div>
      </div>
  </li>

  {{-- <li class="nav-item {{ Request::is('dashboard/artikel*') ? 'active' : '' }}">
      <a class="nav-link" href="/dashboard/artikel">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Artikel</span></a>
  </li> --}}

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <li class="nav-item {{ Request::is('dashboard/admin*') ? 'active' : '' }}">
      <a class="nav-link" href="/dashboard/admin">
          <i class="fas fa-fw fa-users"></i>
          <span>Tabel Admin</span></a>
  </li>

  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>