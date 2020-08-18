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
            <span class="text-muted app-sidebar__user-name text-sm">National Dashboard</span>
          </div>
        </div>
      </div>
      <ul class="side-menu app-sidebar3">
        @can('iedcr-dashboard')
        <li class="slide"> <a class="side-menu__item" href="{!! route('iedcr.dashboard') !!}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/>
          </svg> <span class="side-menu__label">Dashboard</span></a> </li>
        @endcan

        @can('risk-zone-analysis')
        <li class="slide"> <a class="side-menu__item"  href="{!! route('iedcr.risk_zone_analysis') !!}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/>
          </svg> <span class="side-menu__label">Risk Zone <br>
          Analysis</span><i class="angle fa fa-angle-right"></i></a>
          <ul class="slide-menu ">
            <li><a href="#" class="slide-item">Lable 1</a></li>
            <li><a href="#" class="slide-item">Lable 2</a></li>
          </ul>
        </li>
        @endcan

        @can('iedcr-test-positivity-analysis')
        <li class="slide"> <a class="side-menu__item"  href="{!! route('iedcr.test_positivity_analysis') !!}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/>
          </svg> <span class="side-menu__label">Test Positivity <br>
          Analysis</span><i class="angle fa fa-angle-right"></i></a>
          <ul class="slide-menu ">
            <li><a href="#" class="slide-item">Lable 1</a></li>
            <li><a href="#" class="slide-item">Lable 2</a></li>
          </ul>
        </li>
        @endcan
        @can('iedcr-case-distribution-forecasting')
        <li class="slide"> <a class="side-menu__item"  href="{!! route('iedcr.case_distribution_and_forecasting') !!}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/>
          </svg> <span class="side-menu__label">Case Distribution and <br>
          Forecasting</span><i class="angle fa fa-angle-right"></i></a>
          <ul class="slide-menu">
            <li><a href="#" class="slide-item">Lable 1</a></li>
            <li><a href="#" class="slide-item">Lable 2</a></li>
            <li><a href="#" class="slide-item">Lable 3</a></li>
          </ul>
        </li>
        @endcan
        @can('iedcr-rt-analysis')
        <li class="slide"> <a class="side-menu__item"  href="{!! route('iedcr.rt_analysis') !!}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/>
          </svg> <span class="side-menu__label">Rt Analysis</span><i class="angle fa fa-angle-right"></i></a>
          <ul class="slide-menu">
            <li><a href="#" class="slide-item">Lable 1</a></li>
            <li><a href="#" class="slide-item">Lable 2</a></li>
            <li><a href="#" class="slide-item">Lable 3</a></li>
          </ul>
        </li>
        @endcan
        @can('iedcr-doubling-time-and-growth-rate-analysis')
        <li class="slide"> <a class="side-menu__item"  href="{!! route('iedcr.doubling_time_growth_rate_analysis') !!}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/>
          </svg> <span class="side-menu__label">Doubling Time & <br>
          Growth Rate Analysis</span><i class="angle fa fa-angle-right"></i></a>
          <ul class="slide-menu">
            <li><a href="#" class="slide-item">Lable 1</a></li>
            <li><a href="#" class="slide-item">Lable 2</a></li>
            <li><a href="#" class="slide-item">Lable 3</a></li>
          </ul>
        </li>
        @endcan

        @can('iedcr-syndromic-surveillance')
        <li class="slide"> <a class="side-menu__item"  href="{!! route('iedcr.syndromic_surveillance') !!}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/>
          </svg> <span class="side-menu__label">Syndromic Surveillance</span><i class="angle fa fa-angle-right"></i></a>
          <ul class="slide-menu">
            <li><a href="#" class="slide-item">Lable 1</a></li>
            <li><a href="#" class="slide-item">Lable 2</a></li>
            <li><a href="#" class="slide-item">Lable 3</a></li>
          </ul>
        </li>
        @endcan

        @can('iedcr-epidemiological-and-syndromic-indicator-analysis')
        <li class="slide"> <a class="side-menu__item"  href="{!! route('iedcr.epidemiological_syndromic_indicator_analysis') !!}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/>
          </svg> <span class="side-menu__label">Epidemiological & <br>
          Syndromic Indicator <br>
          Analysis</span><i class="angle fa fa-angle-right"></i></a>
          <ul class="slide-menu">
            <li><a href="#" class="slide-item">Lable 1</a></li>
            <li><a href="#" class="slide-item">Lable 2</a></li>
            <li><a href="#" class="slide-item">Lable 3</a></li>
          </ul>
        </li>
        @endcan

        @can('iedcr-corona-tracking-analysis')
        <li class="slide"> <a class="side-menu__item"  href="{!! route('iedcr.corona_tracing_analysis') !!}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/>
          </svg> <span class="side-menu__label">Corona Tracking <br>
          Analysis</span><i class="angle fa fa-angle-right"></i></a>
          <ul class="slide-menu">
            <li><a href="#" class="slide-item">Lable 1</a></li>
            <li><a href="#" class="slide-item">Lable 2</a></li>
            <li><a href="#" class="slide-item">Lable 3</a></li>
          </ul>
        </li>
        @endcan

        @can('iedcr-conformance-analysis')
        <li class="slide"> <a class="side-menu__item"  href="{!! route('iedcr.conformance_analysis') !!}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/>
          </svg> <span class="side-menu__label">Conformance Analysis</span><i class="angle fa fa-angle-right"></i></a>
          <ul class="slide-menu">
            <li><a href="#" class="slide-item">Lable 1</a></li>
            <li><a href="#" class="slide-item">Lable 2</a></li>
            <li><a href="#" class="slide-item">Lable 3</a></li>
          </ul>
        </li>
        @endcan

        @can('iedcr-hospital-and-patient-analysis')
        <li class="slide"> <a class="side-menu__item"  href="{!! route('iedcr.hospital_and_patient_analysis') !!}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/>
          </svg> <span class="side-menu__label">Hospital and Patient <br>
          Analysis</span><i class="angle fa fa-angle-right"></i></a>
          <ul class="slide-menu">
            <li><a href="#" class="slide-item">Lable 1</a></li>
            <li><a href="#" class="slide-item">Lable 2</a></li>
            <li><a href="#" class="slide-item">Lable 3</a></li>
          </ul>
        </li>
        @endcan

        @can('iedcr-mobility-and-predictive-information')
        <li class="slide"> <a class="side-menu__item" href="{!! route('iedcr.mobility_and_predictive_importation') !!}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/>
          </svg> <span class="side-menu__label">Mobility and Predictive <br>
          Importation</span><i class="angle fa fa-angle-right" data-toggle="slide"></i></a>
          <ul class="slide-menu">
            <li><a href="#" class="slide-item">Lable 1</a></li>
            <li><a href="#" class="slide-item">Lable 2</a></li>
            <li><a href="#" class="slide-item">Lable 3</a></li>
          </ul>
        </li>
        @endcan

        @can('dashboard-switch')
        <li class="slide"> <a class="side-menu__item" href="{!! route('dashboard') !!}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          <path d="M0 0h24v24H0V0z" fill="none"/>
          <path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/>
          </svg> <span class="side-menu__label">Cabinet Dashboard</span></a> </li>
        @endcan
        
      </ul>
    </aside>
    <!--aside closed-->
