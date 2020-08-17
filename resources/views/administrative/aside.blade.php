<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="alert alert-primary small last-updated-date" role="alert"> <strong><strong>শেষ আপডেট: ১১/০৮/২০২০</strong></strong> </div>
    <ul class="nav">
    <li class="nav-item"> <a class="nav-link" href="dashboard.php"> <span class="menu-title">সামগ্রিক চিত্র</span> <i class="mdi mdi-home menu-icon"></i> </a> </li>
    @can('cabinet-risk-zone-report')
    <li class="nav-item"> <a class="nav-link" href="risk-zone-iframe.html"> <span class="menu-title">রিস্ক জোন রিপোর্ট</span> <i class="mdi mdi-chart-bar menu-icon"></i> </a> </li>
    @endcan

    @can('cabinet-obility-of-affected-people')
    <li class="nav-item"> <a class="nav-link" href="#"> <span class="menu-title">আক্রান্ত ব্যাক্তির চলাচল</span> <i class="mdi mdi-nature-people menu-icon"></i> </a> </li>
    @endcan

    @can('cabinet-mobility-of-citizen')
    <li class="nav-item"> <a class="nav-link" href="#"> <span class="menu-title">নাগরিক চলাচল</span> <i class="mdi mdi-pac-man menu-icon"></i> </a> </li>
    @endcan

    @can('cabinet-synoptic-surveillance-map')
    <li class="nav-item"> <a class="nav-link" href="#"> <span class="menu-title">সিনোপটিক সারভেইল্যান্স ম্যাপ</span> <i class="mdi mdi-map menu-icon"></i> </a> </li>
    @endcan

    @can('cabinet-civil-surgeon-report')
    <li class="nav-item"> <a class="nav-link" href="#"> <span class="menu-title">সিভিল সার্জন রিপোর্ট</span> <i class="mdi mdi-chart-bar menu-icon"></i> </a> </li>
    @endcan
    <!-- <li class="nav-item">
            <a class="nav-link" href="#">
                <span class="menu-title">এলার্ট সার্ভিস মনিটরিং</span>
                <i class="mdi mdi-information menu-icon"></i>
            </a>
        </li>-->

    @can('cabinet-social-distance-analysis')
    <li class="nav-item"> <a class="nav-link" href="dataframe.php?datatype=sdp_monitoring"> <span class="menu-title">সামাজিক দুরত্ব পর্যবেক্ষণ</span> <i class="mdi mdi-eye menu-icon"></i> </a> </li>
    @endcan
    
    @can('cabinet-deep-analysis')
    <li class="nav-item"> <a class="nav-link" href="dataframe.php?datatype=analytics"> <span class="menu-title">এনালিটিক্স (বিশ্লেষণ)</span> <i class="mdi mdi-chart-arc menu-icon"></i> </a> </li>
    @endcan

    @can('dashboard-switch')
    <li class="slide"> <a class="side-menu__item" href="{!! route('iedcr.dashboard') !!}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
      <path d="M0 0h24v24H0V0z" fill="none"/>
      <path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/>
      </svg> <span class="side-menu__label">IEDCR Dashboard</span></a> </li>
    @endcan
    </ul>
</nav>
<!-- partial -->