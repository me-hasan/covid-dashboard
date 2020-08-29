
<!--app header-->
<div class="app-header header">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="{!! route('iedcr.dashboard') !!}">
                <img src="{{ asset('assets/images/brand/corona-logo.webp') }}" class="header-brand-img desktop-lgo"
                     alt="Logo">
                <img src="{{ asset('assets/images/brand/logo1.png') }}" class="header-brand-img dark-logo" alt="Logo">
                <img src="{{ asset('assets/images/brand/favicon.png') }}" class="header-brand-img mobile-logo"
                     alt="Logo">
                <img src="{{ asset('assets/images/brand/favicon1.png') }}" class="header-brand-img darkmobile-logo"
                     alt="Logo">
            </a>
            <div class="app-sidebar__toggle" data-toggle="sidebar">
                <a class="open-toggle" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-align-left header-icon mt-1">
                        <line x1="17" y1="10" x2="3" y2="10"></line>
                        <line x1="21" y1="6" x2="3" y2="6"></line>
                        <line x1="21" y1="14" x2="3" y2="14"></line>
                        <line x1="17" y1="18" x2="3" y2="18"></line>
                    </svg>
                </a>
            </div>

           @yield('search_view')
            <div class="form-group mb-0 mt-3">
                <div class="custom-controls-stacked d-flex">
                    <label class="custom-control custom-radio mr-2">
                        <input type="radio" class="custom-control-input" name="lang" value="en" checked>
                        <span class="custom-control-label">EN</span> </label>
                    <label class="custom-control custom-radio mr-2">
                        <input type="radio" class="custom-control-input" name="lang" value="bn" disabled>
                        <span class="custom-control-label">BN</span> </label>
                </div>
            </div>

            <div class="dropdown">
                <a class="nav-link icon p-0" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="mdi mdi-power"></i>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

<!--/app header-->

