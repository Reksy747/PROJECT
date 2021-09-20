<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-green navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="{{asset('/lte3/dist/img/default.png') }}" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline">{{Session::get('ID_User')}}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-green">
            <img src="{{asset('/lte3/dist/img/default.png') }}" class="img-circle elevation-2" alt="User Image">

            <p>
              {{Session::get('ID_User')}}
              <small>Member since Nov. 2012</small>
            </p>
          </li>
          
          </li>
          <!-- Menu Footer-->
          <li class="user-footer text-center">
            <!-- <a href="{{url('pengajar/profile')}}" class="btn btn-default btn-flat">Profile</a> -->
            <a href="{{url('/logout')}}" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->