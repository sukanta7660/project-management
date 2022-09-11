<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <div class="brand-link">
    <h4 class="brand-text font-weight-light ml-4">
      Project Management
    </h4>
  </div>

  <!-- Sidebar -->
  <div class="sidebar" >
    <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
              <img src="{{ asset('asset/dist/img/avatar04.png') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
              <a href="#" class="d-block">{{ auth()->user()->name }}</a>
          </div>
      </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        @if(auth()->user()->role === 'staff')
          <li class="nav-item">
              <a href="{{ route('admin.dashboard.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-project-diagram"></i>
                  <p>
                      Assigned Projects
                  </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ route('admin.tasks.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-clipboard-check"></i>
                  <p>
                      Assigned Tasks
                  </p>
              </a>
          </li>
        @endif
        @if(auth()->user()->role === 'admin')
          <li class="nav-item">
              <a href="{{ route('admin.dashboard.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                      Dashboard
                  </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ route('admin.tasks.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-clipboard-check"></i>
                  <p>
                      Tasks
                  </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-project-diagram"></i>
                  <p>
                      Projects
                      <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('admin.projects.create') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Project</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('admin.projects.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>All Project</p>
                      </a>
                  </li>
              </ul>
          </li>
        @endif
        <li class="nav-item">
          <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="nav-link text-danger">
            <i class="nav-icon fa fa-power-off"></i>
            <p>
              Logout
            </p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
