    <!--aside open-->
    <aside class="app-sidebar">
      <div class="app-sidebar__logo">
        <a class="header-brand" href="">
            <img src="{{ asset('assets/images/brand/corona-logo.webp') }}" class="header-brand-img desktop-lgo" alt="Logo">
            <img src="{{ asset('assets/images/brand/logo1.png') }}" class="header-brand-img dark-logo" alt="Logo">
            <img src="{{ asset('assets/images/brand/favicon.png') }}" class="header-brand-img mobile-logo" alt="Logo">
            <img src="{{ asset('assets/images/brand/favicon1.png') }}" class="header-brand-img darkmobile-logo" alt="Logo">
        </a>
      </div>
      <div class="app-sidebar__user">
        <div class="dropdown user-pro-body text-center">
          <div class="user-info">
            <span class="text-muted app-sidebar__user-name text-sm">জাতীয় ড্যাশবোর্ড</span>
          </div>
        </div>
      </div>
      <ul class="side-menu app-sidebar3">
        <li class="slide"> <a class="side-menu__item" href="{{route('dashboard')}}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/>
          </svg> <span class="side-menu__label">সামগ্রিক চিত্র</span></a> </li>

        @can('cabinet-risk-zone-report')
        <li class="slide"> <a class="side-menu__item"  href="{{route('cabinet.dataframe',['datatype'=>'riskzone'])}}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/>
          </svg> <span class="side-menu__label">রিস্ক জোন রিপোর্ট</span><i class="angle fa fa-angle-right"></i></a>
        </li>
        @endcan

        @can('iedcr-test-positivity-analysis')
        <li class="slide"> <a class="side-menu__item"  href="{{route('cabinet.dataframe',['datatype'=>'patientmobility'])}}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/>
          </svg> <span class="side-menu__label">আক্রান্ত ব্যাক্তির চলাচল</span><i class="angle fa fa-angle-right"></i></a>
        </li>
        @endcan
        
       @can('cabinet-mobility-of-citizen')
        <li class="slide"> <a class="side-menu__item"  href="{{route('cabinet.dataframe',['datatype'=>'citizenmobility'])}}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/>
          </svg> <span class="side-menu__label">নাগরিক চলাচল</span><i class="angle fa fa-angle-right"></i></a>
        </li>
        @endcan
        
        @can('cabinet-synoptic-surveillance-map')
        <li class="slide"> <a class="side-menu__item"  href="{{route('cabinet.dataframe',['datatype'=>'synnoptic_surveillance'])}}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/>
          </svg> <span class="side-menu__label">সিনন্ড্রোমিক <br>সারভেইল্যান্স ম্যাপ</span><i class="angle fa fa-angle-right"></i></a>
        </li>
        @endcan
        
        @can('cabinet-civil-surgeon-report')
        <li class="slide"> <a class="side-menu__item"  href="{{route('cabinet.dataframe',['datatype'=>'ss_report'])}}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/>
          </svg> <span class="side-menu__label">সিভিল সার্জন রিপোর্ট</span><i class="angle fa fa-angle-right"></i></a>
        </li>
        @endcan

        @can('cabinet-social-distance-analysis')
        <li class="slide"> <a class="side-menu__item"  href="{{route('cabinet.dataframe',['datatype'=>'sdp_monitoring'])}}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/>
          </svg> <span class="side-menu__label">সামাজিক দুরত্ব পর্যবেক্ষণ</span><i class="angle fa fa-angle-right"></i></a>
          </li>
        @endcan

        @can('cabinet-deep-analysis')
        <li class="slide"> <a class="side-menu__item"  href="{{route('cabinet.dataframe',['datatype'=>'analytics'])}}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/>
          </svg> <span class="side-menu__label">এনালিটিক্স (বিশ্লেষণ</span><i class="angle fa fa-angle-right"></i></a>
          
        </li>
        @endcan

        @can('dashboard-switch')
        <li class="slide"> <a class="side-menu__item" href="{!! route('iedcr.dashboard') !!}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/>
          </svg> <span class="side-menu__label">IEDCR Dashboard</span></a> </li>
        @endcan
        
      </ul>
    </aside>
    <!--aside closed-->
