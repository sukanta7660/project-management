<nav class="main-header navbar navbar-expand navbar-white navbar-light" >
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>


  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
       <h3 class="dropdown-item-title text-sm">{{ Auth::user()->name}}<i class="far fa-user-circle ml-2"></i></h3>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-item">
          <i class="fas fa-user-edit mr-2"></i>
          <a href="#">Profile</a>
        </div>
        <a href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item nav-link text-danger">
          <h3 class="text-sm text-center"><i class="fa fa-power-off mr-2"></i>Logout</h3>
        </a>

      </div>
    </li>
  </ul>
</nav>
<!-- /.navbar -->
</nav>
