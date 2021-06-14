 @php
     function checkRouteActive($Route){
         if (Route::current()->uri == $Route) return 'active';
     }
 @endphp


 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('toko')}}" class="brand-link">
      <img src="{{url('public')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Shopii</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('public')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block">ADMIN</a>
          <a href="" class="d-block">Maulida Nandar Saputra</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <li class="nav-item">
            <a href="{{url('beranda')}}" class="nav-link {{checkRouteActive('beranda')}}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('produk')}}" class="nav-link {{checkRouteActive('produk')}}">
              <i class="nav-icon fas fa-box-open"></i>
              <p>
               Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('pesanan')}}" class="nav-link {{checkRouteActive('pesanan')}}">
             <i class="nav-icon fas fa-shopping-bag"></i>
            <p>
                Pesanan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('user')}}" class="nav-link {{checkRouteActive('user')}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
