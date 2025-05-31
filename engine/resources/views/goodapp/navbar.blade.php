<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('home')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('form')}}" class="nav-link">Form</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('table')}}" class="nav-link">Table</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('auth.logout') }}"><i class="fas fa-sign-out-alt"></i> Log Out</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->