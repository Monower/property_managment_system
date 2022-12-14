<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('dashboard') }}" class="text-sm font-semibold text-indigo-600 bg-white p-2 rounded-sm hover:shadow-lg mr-2">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('property.index') }}" class="text-sm font-semibold text-indigo-600 bg-white p-2 rounded-sm hover:shadow-lg mr-2">Properties List</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('property.create') }}" class="text-sm font-semibold text-indigo-600 bg-white p-2 rounded-sm hover:shadow-lg mr-2">Sell Property</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="{{ route('profile.show') }}" class="d-block">{{ Auth::user()->name ?? ''}}</a>
        </div>
      </div>
    </ul>  
  </nav>
  <!-- /.navbar -->