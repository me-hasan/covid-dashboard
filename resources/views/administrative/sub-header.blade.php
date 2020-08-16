  <!-- partial:partials/_navbar.html -->
  <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"> <a class="navbar-brand brand-logo text-primary" href="dashboard.php">
      <h4>জাতীয় ড্যাশবোর্ড</h4>
      </a> <a class="navbar-brand brand-logo-mini text-primary" href="dashboard.php">
      <h3>ND</h3>
      </a> </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize"> <span class="mdi mdi-menu"></span> </button>
      <ul class="navbar-nav navbar-nav-left">
        <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center"> <a class="nav-link d-flex align-items-center dropdown-toggle pl-0" id="LanguageDropdown" href="#" data-toggle="dropdown"  aria-expanded="false">
          <div class="d-inline-flex mr-3"></div>
          <span class="profile-text font-weight-normal">বাংলা</span> </a>
          <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown"> <a class="dropdown-item"> English </a> <a class="dropdown-item"> বাংলা </a> </div>
        </li>
      </ul>
      <div class="search-field d-none d-md-block">
        <form class="d-flex align-items-center h-100" action="#">
          <div class="input-group">
            <div class="input-group-prepend bg-transparent"> <i class="input-group-text border-0 mdi mdi-magnify"></i> </div>
            <input type="text" class="form-control bg-transparent border-0" placeholder="Search..."/>
          </div>
        </form>
      </div>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown"> <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <div class="nav-profile-img"> <img src="{{ asset('assets/images/faces/avatar.jpg') }}" alt="image"/> <span class="availability-status online"></span> </div>
          <div class="nav-profile-text">
              @if(auth()->user())
                <p class="mb-1 text-black">{!! auth()->user()->name; !!}</p>
              @else
                  <p class="mb-1 text-black">eGen Admin</p>
              @endif
          </div>
          </a>
          <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
            <!-- <a class="dropdown-item" href="logout.php">
              <i class="mdi mdi-logout mr-2 text-primary"></i>Signout</a> -->
              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  <i class="mdi mdi-logout mr-2 text-primary"></i>Signout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
        </li>
        <li class="nav-item nav-logout d-none d-lg-block">
          <!-- <a class="nav-link" href="logout.php"> <i class="mdi mdi-power"></i></a> -->
          <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
              <i class="mdi mdi-power"></i>
          </a>
        </li>
        <li class="nav-item d-none d-lg-block full-screen-link"> <a class="nav-link"> <i class="mdi mdi-fullscreen" id="fullscreen-button"></i> </a> </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas"> <span class="mdi mdi-menu"></span> </button>
    </div>
  </nav>
  <!-- partial -->
