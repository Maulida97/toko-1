 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('template')}}" class="nav-link">Beranda</a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Kontak</a>
      </li> --}}
    </ul>

{{-- menu pada dashboard admin --}}
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            Maulida Nandar Saputra
           <img src="{{url('public')}}/dist/img/user1-128x128.jpg" alt="User Avatar" style="height: 100%" class="img-circle">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <div class="profile">
            <i class="fa fa-user"></i>   Profile
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <div class="profile">
            <i class="fa fa-cog"></i>   Seting
            </div>

          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="profile">
            <i class="fa fa-sign-out"></i>   Logout
            </div>

             <div class="dropdown-divider"></div>
          </a>
      </li>
    </ul>
  </nav>
