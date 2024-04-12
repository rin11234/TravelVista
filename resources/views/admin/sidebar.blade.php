<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset(('dist/img/user2-160x160.jpg')) }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        @if (Auth::check())
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        @endif

      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Category
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('category.create') }}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Add cetegory</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('category.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Index</p>
              </a>
            </li>

          </ul>
        </li>
        <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Destinations
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('destinations.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add destinations </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('destinations.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tours
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('tours.create') }}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>thêm Tour</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tours.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Booking
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('booking.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Blog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('post-blog.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add blog </p>
                </a>
                <a href="{{ route('post-blog.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>A= </p>
                  </a>
              </li>
            </ul>
          </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
