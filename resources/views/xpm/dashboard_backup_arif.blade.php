<!doctype html>
<html class="no-js" lang="bn-BD">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="pm/images/icon/favicon.ico" type="image/x-icon"/>
    <title>বাংলাদেশ (Bangladesh) জাতীয় ড্যাশবোর্ড | গণপ্রজাতন্ত্রী বাংলাদেশ সরকার | People's Republic of
        Bangladesh</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="pm/images/icon/favicon.ico">
    <link rel="stylesheet" href="pm/css/bootstrap.min.css">
    <link rel="stylesheet" href="pm/css/font-awesome.min.css">
    <link rel="stylesheet" href="pm/css/themify-icons.css">
    <link rel="stylesheet" href="pm/css/metisMenu.css">
    <link rel="stylesheet" href="pm/css/owl.carousel.min.css">
    <link rel="stylesheet" href="pm/css/slicknav.min.css">
    <!-- amchart css -->

    <link rel="stylesheet" href="pm/css/typography.css">
    <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
    <link rel="stylesheet" href="pm/css/default-css.css">
    <link rel="stylesheet" href="pm/css/styles.css">
    <link rel="stylesheet" href="pm/css/responsive.css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet"/>
    <!-- modernizr css -->
    <script src="pm/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.min.css"
          integrity="sha512-3q8fi8M0VS+X/3n64Ndpp6Bit7oXSiyCnzmlx6IDBLGlY5euFySyJ46RUlqIVs0DPCGOypqP8IRk/EyPvU28mQ=="
          crossorigin="anonymous"/>
    <!-- INTERNAL Select2 css -->
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet"/>
    <style>
        .header-area {
            padding: 15px 30px;
            border-top: 3px solid #Ec2227;
            border-bottom: 4px solid #Ec2227;
            background: #04984A;
        }

        .info-style .the-number {
            font-size: 40px;
            line-height: 1.2;
            margin: 10px 0;
            letter-spacing: 0;
        }

        .menu-item {
            background: rebeccapurple;
        }

        .metismenu li a span {
            color: white;
        }

        #mamlinechart2, #national_dialy_infected_trend, #amlinechart5, #dhaka_rate, #amlinechart1, #ambarchart4, #ambarchart1 {
            width: 100%;
            height: 500px;
        }


        #iframeData {
            padding-left: -380px;
        }

        .my-custom-scrollbar {
            position: relative;

            overflow: auto;
        }

        .table-wrapper-scroll-y {
            display: block;
        }

        .my-custom-scrollbar thead th {
            position: sticky;
            top: 0;
        }

        .my-custom-scrollbar td {
            white-space: pre-wrap;
            word-wrap: break-word
        }


        .slidecontainer {
            width: 100%;
        }

        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 25px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .slider:hover {
            opacity: 1;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            background: #4CAF50;
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 25px;
            height: 25px;
            background: #4CAF50;
            cursor: pointer;
        }

        #slider12a .slider-track-high, #slider12c .slider-track-high {
            background: red;
        }

        #slider12b .slider-track-low, #slider12c .slider-track-low {
            background: green;
        }

        #slider12c .slider-selection {
            background: white;
        }

        .table-responsive {
            display: block;
            width: 100%;
            font-size: 20px;
            overflow-x: hidden;
        }

        .amcharts-chart-div a {
            display: none !important;
        }

        .page-container {
            padding-left: 220px;
        }

        .sidebar-menu {
            width: 220px;
        }

        .head-title {
            color: white;
        }

        p {
            font-size: 20px;
            line-height: 1.2;
        }

        xtspan {
            font-family: 'Bangla', Arial, sans-serif !important;
            line-height: 26px;
            color: #444;
            margin-bottom: 0;
            font-size: 15px;
        }


        label {
            font-family: 'Bangla', Arial, sans-serif !important;
            font-size: 20px;
            line-height: 26px;
            color: #444;
        }

        .info-style .the-number {
            font-size: 30px;
            line-height: 1.2;
            margin: 10px 0;
            letter-spacing: 0;
        }

        .card-body {
            background: white;
        }

        .nav-btn {
            margin-top: 15px;
        }

        .header-icon {
            color: #5c678f;
            fill: #5c678f;
            width: 20px;
            height: 20px;
        }

        .footer-note {
            font-family: 'Bangla', Arial, sans-serif !important;
        }

        .card-body {
            padding: 1.25rem;
        }

        #risk_table_popup, .modal-title {
            font-family: 'Bangla', Arial, sans-serif !important;
            font-size: 20px;
            line-height: 26px;
            color: #444;
        }

        .card-header {
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            background-color: lightslategrey;
            border-bottom: none;
            color: white;
        }


    </style>
</head>

<!-- Start :: Disease Progression -->
<?php
$class_1 = 'fa fa-arrow-up mr-1 text-danger';
if (isset($last_14_days['getLast14DaysTestData'][0]->Difference) && $last_14_days['getLast14DaysTestData'][0]->Difference < 1) {
    $class_1 = 'fa fa-arrow-down mr-1 text-success';
}

$class_2 = 'fa fa-arrow-up mr-1 text-danger';
if (isset($last_14_days['getLast14DaysinfectedData'][0]->Difference) && $last_14_days['getLast14DaysinfectedData'][0]->Difference < 1) {
    $class_2 = 'fa fa-arrow-down mr-1 text-success';
}

$class_3 = 'fa fa-arrow-up mr-1 text-danger';
if (isset($last_14_days['getLast14DaysDeathData'][0]->Difference) && $last_14_days['getLast14DaysDeathData'][0]->Difference < 1) {
    $class_3 = 'fa fa-arrow-down mr-1 text-success';
}
?>

<body id="root" lang="bn-BD">
<!--[if lt IE 8]>
<![endif]-->
<!-- preloader area start -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- preloader area end -->
<!-- page container area start -->
<div class="page-container">
    <!-- sidebar menu area start -->
    <div class="sidebar-menu">
        <div class="sidebar-header">
            <div class="logo">
                <a href="https://corona.gov.bd/"><img src="pm/images/icon/corona-logo.png" alt="logo"></a>
            </div>

        </div>
        <div class="main-menu">
            <div class="menu-inner">
                <nav>
                    <ul class="metismenu" id="menu">
                        <li class="active">
                            <a href="{{route('xpm.dashboard')}}"><i
                                    class="ti-dashboard"></i><span>জাতীয় ড্যাশবোর্ড</span></a>
                        </li>


                    </ul>
                    <ul class="metismenu">
                        <li class="menu-item">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i style="color:white;" class="ti-power-off"></i><span>সাইন আউট</span></a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- sidebar menu area end -->
    <!-- main content area start -->
    <div class="main-content">

        <!-- header area start -->
        <div class="header-area">

            <div class="row align-items-center">

                <!-- nav and search button -->
                <div id="sidebtn" class="col-sm-0 clearfix">

                    <div class="nav-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>


                <!-- profile info & task notification -->
                <div class="col-md-11 clearfix">
                    <div class="row">


                        <div class="col-md-12">
                            <h1 class="head-title"><img style="height: 48px;" src="pm/images/icon/bd-logo.png"
                                                        alt="logo"> কোভিড-১৯ জাতীয় ড্যাশবোর্ড</h1>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- header area end -->
        <!-- page title area start -->
        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div style="display:none;" class="breadcrumbs-area clearfix">

                        <ul class="breadcrumbs pull-left">
                            <li><a href="{{route('xpm.dashboard')}}">হোম</a></li>
                            <li><span>ড্যাশবোর্ড</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 clearfix">

                </div>
            </div>
        </div>
        <!-- page title area end -->
        <div class="main-content-inner login-bg">
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div style="height: 220px" class="card purple-card">
                        <div class="card-body">
                            <h4 class="header-title pb-1">গত ১৪ দিনে পরীক্ষা</h4>
                            <div style="font-size: 70px;" class="the-number">
                                {!! isset($last_14_days['getLast14DaysTestData'][0]) ? formatInBanglaStyle($last_14_days['getLast14DaysTestData'][0]->curr_fourtten_days_test) : ' ' !!}
                            </div>
                            <div class="summary"><i class="{{$class_1}}"></i> পূর্ববর্তী ১৪ দিনে
                                পরীক্ষার
                                চেয়ে {!! isset($last_14_days['getLast14DaysTestData'][0]) ? formatInBanglaStyle(abs(floor($last_14_days['getLast14DaysTestData'][0]->Difference))) : ' ' !!}
                                টি
                                @if(isset($last_14_days['getLast14DaysTestData'][0]->Difference) && $last_14_days['getLast14DaysTestData'][0]->Difference < 1)
                                    কম  @else বেশি @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div style="height: 220px" class="card purple-card">
                        <div class="card-body">
                            <h4 class="header-title pb-1">গত ১৪ দিনে আক্রান্ত</h4>
                            <div style="font-size: 70px;" class="the-number">
                                {!! isset($last_14_days['getLast14DaysinfectedData'][0]) ? formatInBanglaStyle($last_14_days['getLast14DaysinfectedData'][0]->curr_fourtten_days_infected_person) : ' ' !!}
                            </div>
                            <div class="summary"><i class="{{$class_2}}"></i>
                                পূর্ববর্তী ১৪ দিনে আক্রান্তের
                                চেয়ে {!! isset($last_14_days['getLast14DaysinfectedData'][0]) ? formatInBanglaStyle(abs(floor($last_14_days['getLast14DaysinfectedData'][0]->Difference))) : ' ' !!}
                                জন @if(isset($last_14_days['getLast14DaysinfectedData'][0]->Difference) && $last_14_days['getLast14DaysinfectedData'][0]->Difference < 1)
                                    কম  @else বেশি @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div style="height: 220px" class="card purple-card">
                        <div class="card-body">
                            <h4 class="header-title pb-1">গত ১৪ দিনে মৃত্যু</h4>
                            <div style="font-size: 70px;" class="the-number">
                                {!! isset($last_14_days['getLast14DaysDeathData'][0]) ? formatInBanglaStyle($last_14_days['getLast14DaysDeathData'][0]->curr_fourtten_days_death) : ' ' !!}
                            </div>
                            <div class="summary"><i class="{{$class_3}}"></i> পূর্ববর্তী ১৪ দিনে
                                মৃত্যুর
                                চেয়ে
                                {!! isset($last_14_days['getLast14DaysDeathData'][0]) ? formatInBanglaStyle(abs(floor($last_14_days['getLast14DaysDeathData'][0]->Difference))) : ' ' !!}

                                জন @if(isset($last_14_days['getLast14DaysDeathData'][0]->Difference) && $last_14_days['getLast14DaysDeathData'][0]->Difference < 1)
                                    কম  @else বেশি @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Social Campain area end -->
                <!-- Statistics area start -->
                <div class="col-lg-12 mt-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="invoice-head title-bg-style">
                                <div class="row">
                                    <div class="iv-left col-6 ">
                                        <h2>দৈনিক আক্রান্তের সংখ্যা</h2>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 mt-2">
                                    <div class="card">
                                        <div class="card-body info-style">
                                            <h4 id="special_word_1" class="header-title">
                                                {!! $des_1->component_name_beng ?? '' !!}
                                            </h4>
                                            <div class="the-number">
                                            </div>
                                            <h4 class="header-title"></h4>
                                            <div class="alert mt-3 p-0 text-justify" role="alert">
                                                <strong>বর্ণনা:</strong>
                                                {!! $des_1->description_beng ?? '' !!}
                                            </div>
                                            <p class="footer-note">
                                                <br>তথ্য সূত্র: DGHS,MIS,IEDCR
                                                <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_1"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 mt-2">
                                    <div class="card">
                                        <div id="national_dialy_infected_trend"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Statistics area end -->
                <!-- Statistics area start -->
                <div class="col-lg-12 mt-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="invoice-head title-bg-style">
                                <div class="row">
                                    <div class="iv-left col-6 ">
                                        <h2>
                                            দক্ষিণ এশিয়ার দেশগুলোতে পরীক্ষার তুলনা
                                        </h2>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 mt-2">
                                    <div class="card">
                                        <div class="card-body purple-style">
                                            <div id="mamlinechart2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-2">
                                    <div class="card">
                                        <div class="card-body info-style">

                                            <h4 style="margin-top:48px;" id="special_word_2" class="header-title">
                                                {!! $des_7->component_name_beng ?? '' !!}
                                            </h4>
                                            <div class="alert mt-3 p-0 text-justify" role="alert">
                                                <strong>বর্ণনা:</strong>
                                                {!! $des_7->description_beng ?? '' !!}
                                            </div>
                                            <p class="footer-note">
                                                <br>তথ্য সূত্র: Worldometer
                                                <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_2"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Statistics area end -->
                <!-- Statistics area start -->
                <div class="col-lg-12 mt-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="invoice-head title-bg-style">
                                <div class="row">
                                    <div class="iv-left col-6 ">
                                        <h2>
                                            সংক্রমণের ক্রমবর্ধমান পরিবর্তন
                                        </h2>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 mt-2">
                                    <div class="card">
                                        <div class="card-body info-style">
                                            <h4 style="margin-top:20px;" id="special_word_3" class="header-title ">
                                                {!! $des_3->component_name_beng ?? '' !!}
                                            </h4>
                                            <div class="alert mt-3 p-0 text-justify" role="alert">
                                                <strong>বর্ণনা:</strong>
                                                {!!  $des_3->description_beng ?? '' !!}
                                            </div>
                                            <p class="footer-note">
                                                <br>তথ্য সূত্র: DGHS,MIS,IEDCR
                                                <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_3"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 mt-2">
                                    <div class="card">
                                        <div class="card-body purple-style">
                                            <div id="amlinechart5"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Statistics area end -->
                <!-- Statistics area start -->
                <div class="col-lg-12 mt-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="invoice-head title-bg-style">
                                <div class="row">
                                    <div class="iv-left col-6 ">
                                        <h2>
                                            অঞ্চল-ভিত্তিক দৈনিক আক্রান্তের সংখ্যা
                                        </h2>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-12 mt-2">
                                <div class="card">
                                    <div class="card-body info-style">

                                        <h4 id="special_word_4" class="header-title">
                                            {!! $des_2->component_name_beng ?? '' !!}
                                        </h4>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>বিভাগ</label>
                                                <select name="division[]" id="division" multiple
                                                        class="select2 form-control btn-outline-primary division_select">

                                                    @foreach($division_list as $division)
                                                        <option value="{!! $division !!}"
                                                                class="b1">{!! en2bnTranslation($division) !!} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label>জেলা</label>
                                                <select name="district[]" id="district" multiple
                                                        class="select2 form-control btn-outline-primary select_district">
                                                    @foreach($district_list as $district)
                                                        <option value="{!! $district->district !!}"
                                                                class="b1">{!! en2bnTranslation($district->district) !!} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm mt-4">
                                                <button id="filter-division"
                                                        class="btn btn-sm district_cms_search b1">
                                                    <svg class="header-icon search-icon" x="1008" y="1248"
                                                         viewBox="0 0 24 24" height="100%" width="100%"
                                                         preserveAspectRatio="xMidYMid meet" focusable="false">
                                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                        <path
                                                            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>

                                        <div id="amlinechart1"></div>

                                        <div class="alert mt-3 p-0 text-justify" role="alert">
                                            <strong>বর্ণনা:</strong>
                                            {!! $des_2->description_beng ?? '' !!}
                                        </div>
                                        <p class="footer-note">
                                            <br>তথ্য সূত্র: DGHS,MIS,IEDCR
                                            <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_4"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Statistics area end -->
                <!-- Statistics area start -->
                <div class="col-lg-12 mt-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="invoice-head title-bg-style">
                                <div class="row">
                                    <div class="iv-left col-6 ">
                                        <h2>পরীক্ষা পরিস্থিতি</h2>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mt-2">
                                    <div class="card">
                                        <div class="card-body purple-style info-style">

                                            <h4 style="height: 150px;" id="special_word_5" class="header-title ">
                                                {!! $des_4->component_name_beng ?? '' !!}
                                            </h4>

                                            <div id="ambarchart4"></div>
                                            <div class="alert mt-3 p-0 text-justify" role="alert">
                                                <strong>বর্ণনা:</strong>
                                                {!! $des_4->description_beng ?? '' !!}
                                            </div>
                                            <p class="footer-note">
                                                <br>তথ্য সূত্র: DGHS,MIS,IEDCR
                                                <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_5"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-lg-6 mt-2">
                                    <div class="card">
                                        <div class="card-body purple-style info-style">

                                            <h4 style="height: 150px;" id="special_word_6" class="header-title ">
                                                {!! $des_5->component_name_beng ?? '' !!}
                                            </h4>

                                            <div id="ambarchart1"></div>
                                            <div class="alert mt-3 p-0 text-justify" role="alert">
                                                <strong>বর্ণনা:</strong>
                                                {!! $des_5->description_beng ?? '' !!}
                                            </div>
                                            <p class="footer-note">
                                                <br>তথ্য সূত্র: DGHS,MIS,IEDCR
                                                <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_6"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="invoice-head title-bg-style">
                                <div class="row">
                                    <div class="iv-left col-12 ">
                                        <h2>
                                            টেস্ট পজিটিভিটি রেটের ভিত্তিতে জেলা পর্যায়ে ঝুঁকি বিশ্লেষণ
                                        </h2>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div id="iframeData"></div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body info-style">
                                            <h4 style="margin-top: 27px;" id="special_word_7" class="header-title ">
                                                {!! $des_6->component_name_beng ?? '' !!}
                                            </h4>

                                            <div class="alert mt-3 p-0 text-justify" role="alert">
                                                <strong>বর্ণনা:</strong>

                                                {!!  $des_6->description_beng ?? '' !!}
                                            </div>
                                            <p class="footer-note">
                                                <br>তথ্য সূত্র: DGHS,MIS,IEDCR
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-12 mt-2">
                                    <div class="invoice-head title-bg-style">
                                        <div class="row">
                                            <div class="iv-left col-12 ">
                                                <h2>
                                                    ঢাকা জেলার দৈনিক টেস্ট পজিটিভিটি রেট
                                                </h2>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body info-style">
                                            <div class="row">

                                                <h4 id="special_word_8" class="header-title ">
                                                    {!! $des_11->component_name_beng ?? '' !!}

                                                </h4>
                                                <hr>
                                                <div id="dhaka_rate"></div>

                                                <div class="alert mt-3 p-0 text-justify" role="alert">
                                                    <strong>বর্ণনা:</strong>
                                                    {!!  $des_11->description_beng ?? '' !!}

                                                </div>
                                                <p class="footer-note">
                                                    <br>তথ্য সূত্র: DGHS,MIS,IEDCR
                                                    <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_8"></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-2">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="invoice-head title-bg-style">
                                <div class="row">
                                    <div class="iv-left col-12 ">
                                        <h2>
                                            গত ৪ সপ্তাহের ঝুঁকি বিবেচনায় দেশের ৬৪টি জেলার তুলনামূলক অবস্থান
                                        </h2>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body info-style">

                                <div class="row">

                                    <h4 id="special_word_9" class="header-title ">
                                        {!! $des_8->component_name_beng ?? '' !!}

                                    </h4>
                                    <hr>
                                    <!-- Start :: ঝুঁকি পর্যালোচনা -->
                                    <?php
                                    $first_week_start = convertEnglishDateToBangla($first_week->first_2_weeks_start);
                                    $first_week_end = convertEnglishDateToBangla($first_week->first_2_weeks_end);


                                    $last_week_start = convertEnglishDateToBangla($last_week->last_2_weeks_start);
                                    $last_week_end = convertEnglishDateToBangla($last_week->last_2_weeks_ends);
                                    $today = convertEnglishDateToBangla(date('Y-m-d'));
                                    $high_to_high_table_contentData = \Illuminate\Support\Facades\DB::select("select l.district as 'district',l.test_positivity as 'last_test_positivity',
r.test_positivity as 'recent_test_positivity' from
(select district,test_positivity from last_14_days_test_positivity_district where test_positivity>=12) as l
inner join
(select district,test_positivity from recent_14_days_test_positivity_district where test_positivity>=12 and total_tests>200) as r
using(district) ORDER BY r.test_positivity DESC");
                                    $medium_to_high_table_contentData = \Illuminate\Support\Facades\DB::select("select l.district as 'district',l.test_positivity as 'last_test_positivity',
r.test_positivity as 'recent_test_positivity' from
(select district,test_positivity from last_14_days_test_positivity_district where test_positivity>=5 and test_positivity<12) as l
inner join
(select district,test_positivity from recent_14_days_test_positivity_district where test_positivity>=12 and total_tests>200) as r
using(district) ORDER BY r.test_positivity DESC");

                                    $low_to_high_table_contentData = \Illuminate\Support\Facades\DB::select("select l.district as 'district',l.test_positivity as 'last_test_positivity',
r.test_positivity as 'recent_test_positivity' from
(select district,test_positivity from last_14_days_test_positivity_district where test_positivity<5) as l
inner join
(select district,test_positivity from recent_14_days_test_positivity_district where test_positivity>=12 and total_tests>200) as r
using(district) ORDER BY r.test_positivity DESC");
                                    $high_to_medium_table_contentData = \Illuminate\Support\Facades\DB::select("select l.district as 'district',l.test_positivity as 'last_test_positivity',
r.test_positivity as 'recent_test_positivity' from
(select district,test_positivity from last_14_days_test_positivity_district where test_positivity>=12) as l
inner join
(select district,test_positivity from recent_14_days_test_positivity_district where test_positivity>=5 and test_positivity<12 and total_tests>200) as r
using(district) ORDER BY r.test_positivity DESC");
                                    $medium_to_medium_table_contentData = \Illuminate\Support\Facades\DB::select("select l.district as 'district',l.test_positivity as 'last_test_positivity',
r.test_positivity as 'recent_test_positivity' from
(select district,test_positivity from last_14_days_test_positivity_district where test_positivity>=5 and test_positivity<12) as l
inner join
(select district,test_positivity from recent_14_days_test_positivity_district where test_positivity>=5 and test_positivity<12 and total_tests>200) as r
using(district) ORDER BY r.test_positivity DESC");
                                    $low_to_medium_table_contentData = \Illuminate\Support\Facades\DB::select("select l.district as 'district',l.test_positivity as 'last_test_positivity',
r.test_positivity as 'recent_test_positivity' from
(select district,test_positivity from last_14_days_test_positivity_district where test_positivity<5) as l
inner join
(select district,test_positivity from recent_14_days_test_positivity_district where test_positivity>=5 and test_positivity<12 and total_tests>200) as r
using(district) ORDER BY r.test_positivity DESC");
                                    $high_to_low_table_contentData = \Illuminate\Support\Facades\DB::select("select l.district as 'district',l.test_positivity as 'last_test_positivity',
r.test_positivity as 'recent_test_positivity' from
(select district,test_positivity from last_14_days_test_positivity_district where test_positivity>=12) as l
inner join
(select district,test_positivity from recent_14_days_test_positivity_district where test_positivity<5 AND total_tests>200) as r
using(district) ORDER BY r.test_positivity DESC");
                                    $medium_to_low_table_contentData = \Illuminate\Support\Facades\DB::select("select l.district as 'district',l.test_positivity as 'last_test_positivity',
r.test_positivity as 'recent_test_positivity' from
(select district,test_positivity from last_14_days_test_positivity_district where test_positivity>=5 and test_positivity<12) as l
inner join
(select district,test_positivity from recent_14_days_test_positivity_district where test_positivity<5 and total_tests>200) as r
using(district) ORDER BY r.test_positivity DESC");
                                    $low_to_low_table_contentData = \Illuminate\Support\Facades\DB::select(" select l.district as 'district',l.test_positivity as 'last_test_positivity',
    r.test_positivity as 'recent_test_positivity'  from
    (select district, test_positivity from last_14_days_test_positivity_district where test_positivity<5) as l
    inner join
    (select district, test_positivity from recent_14_days_test_positivity_district where test_positivity<5
    and total_tests>100) as r
    using(district) ORDER BY r.test_positivity DESC");

                                    $high_to_high = array();
                                    foreach ($high_to_high_table_contentData as $result) {
                                        $high_to_high[] = rtrim(en2bnTranslation($result->district), " ");
                                    }
                                    $medium_to_high = array();
                                    foreach ($medium_to_high_table_contentData as $result) {
                                        $medium_to_high[] = rtrim(en2bnTranslation($result->district), " ");
                                    }
                                    $low_to_high = array();
                                    foreach ($low_to_high_table_contentData as $result) {
                                        $low_to_high[] = rtrim(en2bnTranslation($result->district), " ");
                                    }

                                    $high_to_medium = array();
                                    foreach ($high_to_medium_table_contentData as $result) {
                                        $high_to_medium[] = rtrim(en2bnTranslation($result->district), " ");
                                    }
                                    $medium_to_medium = array();
                                    foreach ($medium_to_medium_table_contentData as $result) {
                                        $medium_to_medium[] = rtrim(en2bnTranslation($result->district), " ");
                                    }
                                    $low_to_medium = array();
                                    foreach ($low_to_medium_table_contentData as $result) {
                                        $low_to_medium[] = rtrim(en2bnTranslation($result->district), " ");
                                    }

                                    $high_to_low = array();
                                    foreach ($high_to_low_table_contentData as $result) {
                                        $high_to_low[] = rtrim(en2bnTranslation($result->district), " ");
                                    }
                                    $medium_to_low = array();
                                    foreach ($medium_to_low_table_contentData as $result) {
                                        $medium_to_low[] = rtrim(en2bnTranslation($result->district), " ");
                                    }
                                    $low_to_low = array();
                                    foreach ($low_to_low_table_contentData as $result) {
                                        $low_to_low[] = rtrim(en2bnTranslation($result->district), " ");
                                    }


                                    //echo implode(",",$resultstr);

                                    ?>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">

                                                <div class="col-xl-1 col-md-1">
                                                    <div
                                                        style="transform: rotate(-90deg);width: 219px;margin-left: -70px;margin-top: 100px;"
                                                        class="fs-20 b1">
                                                        <br>বিগত ৩য় ও ৪র্থ সপ্তাহ: ( {{$last_week_end}}
                                                        - {{$last_week_start}} )
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-md-8">
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table table-bordered table-vcenter text-nowrap b1">
                                                            <thead>
                                                            <tr>
                                                                <td colspan="4" class="text-center fs-18"><span
                                                                        class="text-danger">আজ {{ $today }}</span>, বিগত
                                                                    ২ সপ্তাহ ( {{$first_week_end}}
                                                                    - {{$first_week_start}} )
                                                                </td>
                                                            </tr>
                                                            </thead>
                                                            <tbody class="fs-20 text-center risk_matrix">
                                                            <tr>
                                                                <td></td>
                                                                <td>উচ্চ ঝুঁকিপূর্ণ</td>
                                                                <td>মধ্যম ঝুঁকিপূর্ণ</td>
                                                                <td>কম ঝুঁকিপূর্ণ</td>
                                                            </tr>
                                                            <tr>
                                                                <td>উচ্চ ঝুঁকিপূর্ণ</td>
                                                                <td style="cursor: pointer;text-decoration: underline;background: #ff0000;"
                                                                    class="high_to_high_modal_click"
                                                                    data-target="#modaldemo1"
                                                                    data-toggle="modal">{{ convertEnglishDigitToBangla($rm_7->high_to_high)}}
                                                                    টি জেলা
                                                                </td>
                                                                <td style="cursor: pointer;text-decoration: underline;background: #a2f92c;"
                                                                    class="high_to_medium_modal_click"
                                                                    data-target="#modaldemo1"
                                                                    data-toggle="modal">{{ convertEnglishDigitToBangla($rm_8->high_to_medium)}}
                                                                    টি জেলা
                                                                </td>
                                                                <td style="cursor: pointer;text-decoration: underline;background: #1ad433;"
                                                                    class="high_to_low_modal_click"
                                                                    data-target="#modaldemo1"
                                                                    data-toggle="modal">   {{ convertEnglishDigitToBangla($rm_9->high_to_low)}}
                                                                    টি জেলা
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>মধ্যম ঝুঁকিপূর্ণ</td>
                                                                <td style="background: #ffa500; cursor: pointer;text-decoration: underline;"
                                                                    class="medium_to_high_modal_click"
                                                                    data-target="#modaldemo1"
                                                                    data-toggle="modal">{{ convertEnglishDigitToBangla($rm_4->medium_to_high) }}
                                                                    টি জেলা
                                                                </td>
                                                                <td style="background: #cbc5c5; cursor: pointer;text-decoration: underline;"
                                                                    class="medium_to_medium_modal_click"
                                                                    data-target="#modaldemo1"
                                                                    data-toggle="modal">{{ convertEnglishDigitToBangla($rm_5->medium_to_medium) }}
                                                                    টি জেলা
                                                                </td>
                                                                <td style="cursor: pointer;text-decoration: underline;background: #a2f92c;"
                                                                    class="medium_to_low_modal_click"
                                                                    data-target="#modaldemo1"
                                                                    data-toggle="modal"> {{ convertEnglishDigitToBangla($rm_6->medium_to_low) }}
                                                                    টি জেলা
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>কম ঝুঁকিপূর্ণ</td>
                                                                <td style="background: #ff0000; cursor: pointer;text-decoration: underline;"
                                                                    class="low_to_high_modal_click"
                                                                    data-target="#modaldemo1"
                                                                    data-toggle="modal">{{ convertEnglishDigitToBangla($rm_1->low_to_high) }}
                                                                    টি জেলা
                                                                </td>
                                                                <td style="background: #ffa500; cursor: pointer;text-decoration: underline;"
                                                                    class="low_to_medium_modal_click"
                                                                    data-target="#modaldemo1"
                                                                    data-toggle="modal">{{ convertEnglishDigitToBangla($rm_2->low_to_medium) }}
                                                                    টি জেলা
                                                                </td>
                                                                <td style="background: #1ad433; cursor: pointer;text-decoration: underline;"
                                                                    class="low_to_low_modal_click"
                                                                    data-target="#modaldemo1"
                                                                    data-toggle="modal">{{ convertEnglishDigitToBangla($rm_3->low_to_low) }}
                                                                    টি জেলা
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-3 b1">
                                                    <div class="row">

                                                        <div class="col-xl-12">
                                                            <div class="slidecontainer">
                                                                <p>গত ১৪ দিনে পরীক্ষার সংখ্যা: <span
                                                                        id="demo">{!! convertEnglishDigitToBangla('200') !!}</span>
                                                                    এর কম জেলাসমূহ বাদ দেওয়া হয়েছে।
                                                                </p>
                                                                <input type="range" min="50" max="300" value="200"
                                                                       class="slider" id="myRange">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12"><br/><br/>

                                                            <p> সর্বোচ্চ ও সর্বনিম্ন টেস্ট পসিটিভিটি রেটের পরিসীমা:
                                                                <span
                                                                    id="ex6SliderVal">{!! convertEnglishDigitToBangla('5:12') !!}</span>
                                                            </p>
                                                            <input style="width: 100%;" id="ex12c" type="text"><br/>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <!-- <div class="card-body"> -->
                                                    <div
                                                        class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                                                        <table
                                                            class="table table-bordered table-vcenter text-nowrap  b1"
                                                            style="table-layout: fixed; width: 100%; min-width: 400px;">
                                                            <thead style="border:2px solid black;">
                                                            <tr>
                                                                <th class="text-center fs-18"
                                                                    style="border:2px solid black; background: #ff0000;color: #FFF;">
                                                                    অবস্থার অবনতি ও অপরিবর্তিত উচ্চ ঝুঁকি
                                                                </th>
                                                                <th class="text-center fs-18"
                                                                    style="border:2px solid black; color: #FFF;background: #ffa500;">
                                                                    অবস্থার অবনতি
                                                                </th>

                                                                <th class="text-center fs-18"
                                                                    style="border:2px solid black; background: #cbc5c5;">অপরিবর্তিত মধ্যম ঝুঁকি
                                                                </th>
                                                                <th class="text-center fs-18"
                                                                    style="border:2px solid black; background: #a2f92c;">
                                                                    অবস্থার উন্নতি
                                                                </th>
                                                                <th class="text-center fs-18"
                                                                    style="border:2px solid black; background: #1ad433;">
                                                                    অবস্থার উন্নতি ও অপরিবর্তিত কম ঝুঁকি
                                                                </th>
                                                            </tr>

                                                            <tr>
                                                                <th class="text-center"
                                                                    style="border:2px solid black;background: white;color: black;">
                                                                    কম ঝুঁকি থেকে উচ্চ ঝুঁকি
                                                                </th>
                                                                <th class="text-center"
                                                                    style="border:2px solid black;background: white;color: black;">
                                                                    মধ্যম ঝুঁকি থেকে উচ্চ ঝুঁকি
                                                                </th>
                                                                <th class="text-center fs-18"
                                                                    style="border:2px solid black; background: white;">
                                                                </th>

                                                                <th class="text-center"
                                                                    style="border:2px solid black;background: white;color:black;">
                                                                    মধ্যম ঝুঁকি থেকে কম ঝুঁকি
                                                                </th>
                                                                <th class="text-center"
                                                                    style="border:2px solid black;background: white;color:black">
                                                                    উচ্চ ঝুঁকি থেকে কম ঝুঁকি
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody class="fs-16">


                                                            <tr>
                                                                <td class="text-center low_to_high_district"
                                                                    style="border:2px solid black;">{{ implode(", ",$low_to_high) }}</td>
                                                                <td class="text-center medium_to_high_district"
                                                                    style="border:2px solid black;">{{ implode(", ",$medium_to_high) }}</td>
                                                                <td class="text-center medium_to_medium_district"
                                                                    style="border:2px solid black;"
                                                                    rowspan="3">{{ implode(", ",$medium_to_medium) }}</td>
                                                                <td class="text-center medium_to_low_district"
                                                                    style="border:2px solid black;">{{ implode(", ",$medium_to_low) }}</td>
                                                                <td class="text-center high_to_low_district"
                                                                    style="border:2px solid black;">{{ implode(", ",$high_to_low) }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="text-center"
                                                                    style="border:2px solid black; background: white;color: black;">
                                                                    অপরিবর্তিত উচ্চ ঝুঁকি
                                                                </th>
                                                                <th class="text-center"
                                                                    style="border:2px solid black; background: white;color: black;">
                                                                    কম ঝুঁকি থেকে মধ্যম ঝুঁকি
                                                                </th>
                                                                <th class="text-center"
                                                                    style="border:2px solid black; background: white;color:black">
                                                                    উচ্চ ঝুঁকি থেকে মধ্যম ঝুঁকি
                                                                </th>
                                                                <th class="text-center"
                                                                    style="border:2px solid black; background: white;color:black;">
                                                                    অপরিবর্তিত কম ঝুঁকি
                                                                </th>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-center high_to_high_district"
                                                                    style="border:2px solid black;">{{ implode(", ",$high_to_high) }}</td>
                                                                <td class="text-center low_to_medium_district"
                                                                    style="border:2px solid black;">{{ implode(", ",$low_to_medium) }}</td>

                                                                <td class="text-center high_to_medium_district"
                                                                    style="border:2px solid black;">{{ implode(", ",$high_to_medium) }}</td>
                                                                <td class="text-center low_to_low_district"
                                                                    style="border:2px solid black;">{{ implode(", ",$low_to_low) }}</td>
                                                            </tr>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- </div> -->
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="card-body">

                                                        <div class="alert mt-3 p-0 text-justify" role="alert">
                                                            <strong>বর্ণনা:</strong>
                                                            {!!$des_8->description_beng ?? '' !!}
                                                        </div>
                                                        <p class="footer-note">
                                                            <br>তথ্য সূত্র: DGHS,MIS,IEDCR
                                                            <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span
                                                                id="last_date_9"> {{$first_week_start}}</span>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End :: Risk Matrix -->

                                <!-- Strat :: Modal Content -->

                                <div class="d-none">
                                    <div id="high_to_high_table_content" class="table-responsive b1">
                                        <table id="risk_table_popup"
                                               class="table table-striped table-bordered text-nowrap dataTable">
                                            <thead>
                                            <tr>
                                                <th class="border-bottom-0 b1">জেলা</th>
                                                <th class="border-bottom-0 b1">গত ২ সপ্তাহের টেস্ট পজিটিভিটি</th>
                                                <th class="border-bottom-0 b1">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($high_to_high_table_contentData))
                                                @foreach($high_to_high_table_contentData as $item)
                                                    <tr class="b1">
                                                        <td>{!! en2bnTranslation($item->district) !!}</td>
                                                        <td>{!! convertEnglishDigitToBangla($item->recent_test_positivity) !!}</td>
                                                        <td>{!! convertEnglishDigitToBangla($item->last_test_positivity) !!}</td>

                                                    </tr>
                                                @endforeach
                                            @endif

                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="medium_to_high_table_content" class="table-responsive b1">
                                        <table id="risk_table_popup"
                                               class="table table-striped table-bordered text-nowrap b1 dataTable">
                                            <thead>
                                            <tr>
                                                <th class="border-bottom-0">জেলা</th>
                                                <th class="border-bottom-0">গত ২ সপ্তাহের টেস্ট পজিটিভিটি</th>
                                                <th class="border-bottom-0">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($medium_to_high_table_contentData))
                                                @foreach($medium_to_high_table_contentData as $item)
                                                    <tr>
                                                        <td>{!! en2bnTranslation($item->district) !!}</td>
                                                        <td>{!! convertEnglishDigitToBangla($item->recent_test_positivity) !!}</td>
                                                        <td>{!! convertEnglishDigitToBangla($item->last_test_positivity) !!}</td>

                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="low_to_high_table_content" class="table-responsive b1">
                                        <table id="risk_table_popup"
                                               class="table table-striped table-bordered text-nowrap b1 dataTable">
                                            <thead>
                                            <tr>
                                                <th class="border-bottom-0">জেলা</th>
                                                <th class="border-bottom-0">গত ২ সপ্তাহের টেস্ট পজিটিভিটি</th>
                                                <th class="border-bottom-0">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($low_to_high_table_contentData))
                                                @foreach($low_to_high_table_contentData as $item)
                                                    <tr>
                                                        <td>{!! en2bnTranslation($item->district) !!}</td>
                                                        <td>{!! convertEnglishDigitToBangla($item->recent_test_positivity) !!}</td>
                                                        <td>{!! convertEnglishDigitToBangla($item->last_test_positivity) !!}</td>

                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="high_to_medium_table_content" class="table-responsive b1">
                                        <table id="risk_table_popup"
                                               class="table table-striped table-bordered text-nowrap b1 dataTable">
                                            <thead>
                                            <tr>
                                                <th class="border-bottom-0">জেলা</th>
                                                <th class="border-bottom-0">গত ২ সপ্তাহের টেস্ট পজিটিভিটি</th>
                                                <th class="border-bottom-0">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($high_to_medium_table_contentData))
                                                @foreach($high_to_medium_table_contentData as $item)
                                                    <tr>
                                                        <td>{!! en2bnTranslation($item->district) !!}</td>
                                                        <td>{!! convertEnglishDigitToBangla($item->recent_test_positivity) !!}</td>
                                                        <td>{!! convertEnglishDigitToBangla($item->last_test_positivity) !!}</td>

                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="medium_to_medium_table_content" class="table-responsive b1">
                                        <table id="risk_table_popup"
                                               class="table table-striped table-bordered text-nowrap b1 dataTable">
                                            <thead>
                                            <tr>
                                                <th class="border-bottom-0">জেলা</th>
                                                <th class="border-bottom-0">গত ২ সপ্তাহের টেস্ট পজিটিভিটি</th>
                                                <th class="border-bottom-0">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($medium_to_medium_table_contentData))
                                                @foreach($medium_to_medium_table_contentData as $item)
                                                    <tr>
                                                        <td>{!! en2bnTranslation($item->district) !!}</td>
                                                        <td>{!! convertEnglishDigitToBangla($item->recent_test_positivity) !!}</td>
                                                        <td>{!! convertEnglishDigitToBangla($item->last_test_positivity) !!}</td>

                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="low_to_medium_table_content" class="table-responsive b1">
                                        <table id="risk_table_popup"
                                               class="table table-striped table-bordered text-nowrap b1 dataTable">
                                            <thead>
                                            <tr>
                                                <th class="border-bottom-0">জেলা</th>
                                                <th class="border-bottom-0">গত ২ সপ্তাহের টেস্ট পজিটিভিটি</th>
                                                <th class="border-bottom-0">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($low_to_medium_table_contentData))
                                                @foreach($low_to_medium_table_contentData as $item)
                                                    <tr>
                                                        <td>{!! en2bnTranslation($item->district) !!}</td>
                                                        <td>{!! convertEnglishDigitToBangla($item->recent_test_positivity) !!}</td>
                                                        <td>{!! convertEnglishDigitToBangla($item->last_test_positivity) !!}</td>

                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="high_to_low_table_content" class="table-responsive b1">
                                        <table id="risk_table_popup"
                                               class="table table-striped table-bordered text-nowrap b1 dataTable">
                                            <thead>
                                            <tr>
                                                <th class="border-bottom-0">জেলা</th>
                                                <th class="border-bottom-0">গত ২ সপ্তাহের টেস্ট পজিটিভিটি</th>
                                                <th class="border-bottom-0">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($high_to_low_table_contentData))
                                                @foreach($high_to_low_table_contentData as $item)
                                                    <tr>
                                                        <td>{!! en2bnTranslation($item->district) !!}</td>
                                                        <td>{!! convertEnglishDigitToBangla($item->recent_test_positivity) !!}</td>
                                                        <td>{!! convertEnglishDigitToBangla($item->last_test_positivity) !!}</td>

                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="medium_to_low_table_content" class="table-responsive b1">
                                        <table id="risk_table_popup"
                                               class="table table-striped table-bordered text-nowrap b1 dataTable">
                                            <thead>
                                            <tr>
                                                <th class="border-bottom-0">জেলা</th>
                                                <th class="border-bottom-0">গত ২ সপ্তাহের টেস্ট পজিটিভিটি</th>
                                                <th class="border-bottom-0">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($medium_to_low_table_contentData))
                                                @foreach($medium_to_low_table_contentData as $item)
                                                    <tr>
                                                        <td>{!! en2bnTranslation($item->district) !!}</td>
                                                        <td>{!! convertEnglishDigitToBangla($item->recent_test_positivity) !!}</td>
                                                        <td>{!! convertEnglishDigitToBangla($item->last_test_positivity) !!}</td>

                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="low_to_low_table_content" class="table-responsive b1">
                                        <table id="risk_table_popup"
                                               class="table table-striped table-bordered text-nowrap b1 dataTable">
                                            <thead>
                                            <tr>
                                                <th class="border-bottom-0">জেলা</th>
                                                <th class="border-bottom-0">গত ২ সপ্তাহের টেস্ট পজিটিভিটি</th>
                                                <th class="border-bottom-0">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($low_to_low_table_contentData))
                                                @foreach($low_to_low_table_contentData as $item)
                                                    <tr>
                                                        <td>{!! en2bnTranslation($item->district) !!}</td>
                                                        <td>{!! convertEnglishDigitToBangla($item->recent_test_positivity ?? '') !!}</td>
                                                        <td>{!! convertEnglishDigitToBangla($item->last_test_positivity ?? '') !!}</td>

                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>

                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


                <!-- section 2 start here -->

                <div class="col-lg-12 mt-2">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="invoice-head title-bg-style">
                                <div class="row">
                                    <div class="iv-left col-12 ">
                                        <h2>
                                            বয়স-ভিত্তিক আক্রান্ত ও মৃত্যু সংখ্যার তুলনা
                                        </h2>
                                    </div>

                                </div>
                            </div>

                            <div class="card-body info-style">
                                <div class="row">

                                    <h4 id="special_word_10" class="header-title ">
                                        {!! $des_9->component_name_beng ?? '' !!}

                                    </h4>

                                    <?php $abc = 'das'; ?>
                                    <div class="row" style="width: 100%;">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">

                                                        <div class="col-xl-4 col-md-12">
                                                            <h5 class="card-title b1">৬ই মার্চ
                                                                - {!! convertEnglishMonthDateToBangla(Carbon\Carbon::now()->subMonths(2)->lastOfMonth()->day) !!}
                                                                শে {!! convertEnglishMonthDateToBangla(Carbon\Carbon::now()->subMonths(2)->format('F')) !!}</h5>
                                                            <div id="age_wise_death_distribution_2"></div>
                                                        </div>

                                                        <div class="col-xl-4 col-md-12">
                                                            <h5 class="card-title b1">
                                                                ১লা {!! convertEnglishMonthDateToBangla(Carbon\Carbon::now()->subMonth()->format('F')) !!}
                                                                - {!! convertEnglishMonthDateToBangla(Carbon\Carbon::now()->subMonth()->lastOfMonth()->day) !!}
                                                                শে {!! convertEnglishMonthDateToBangla(Carbon\Carbon::now()->subMonth()->format('F')) !!}</h5>
                                                            <div id="age_wise_death_distribution_1"></div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-12">
                                                            <h5 class="card-title b1">
                                                                ১লা {!! convertEnglishMonthDateToBangla(Carbon\Carbon::now()->format('F')) !!}
                                                                -{!! convertEnglishMonthDateToBangla(Carbon\Carbon::now()->day)!!}
                                                                ই {!! convertEnglishMonthDateToBangla(Carbon\Carbon::now()->format('F')) !!}</h5>
                                                            <div id="age_wise_death_distribution"></div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="card-body">
                                                                <div class="alert mt-3 p-0 text-justify" role="alert">
                                                                    <strong>বর্ণনা:</strong>
                                                                    {!! $des_9->description_beng ?? '' !!}

                                                                </div>
                                                                <p class="footer-note">
                                                                    <br>তথ্য সূত্র: DGHS,MIS,IEDCR
                                                                    <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span
                                                                        id="last_date_10"> {!! convertEnglishMonthDateToBangla(Carbon\Carbon::now()->day)!!}
                                                                        {!! convertEnglishMonthDateToBangla(Carbon\Carbon::now()->format('F')) !!}</span>
                                                                </p>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Section 2 end here-->
                    </div>
                </div>
                <!--Section 3(Last) strat here-->
                <div class="col-lg-12 mt-2">

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="invoice-head title-bg-style">
                                <div class="row">
                                    <div class="iv-left col-12 ">
                                        <h2>
                                            কোভিড হাসপাতালসমূহের ধারণ ক্ষমতা ও ব্যবহার
                                        </h2>
                                    </div>

                                </div>
                            </div>

                            <div class="card-body info-style">
                                <div class="row">

                                    <h4 id="special_word_11" class="header-title ">
                                        {!! $des_10->component_name_beng ?? '' !!}

                                    </h4>

                                    <div class="col-xl-12 col-md-12">
                                        <div class="row">
                                            <div class="col-xl-3 col-md-3">
                                                <div class="card-body1">
                                                    <div id="hospital_general_beds"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-3">
                                                <div class="card-body1">
                                                    <div id="hospital_icu_beds"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="alert mt-3 p-0 text-justify" role="alert">
                                                    <strong>বর্ণনা:</strong>
                                                    {!!  $des_10->description_beng ?? '' !!}

                                                </div>
                                                <p class="footer-note">
                                                    <br>তথ্য সূত্র: DGHS,MIS,IEDCR
                                                    <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_11"></span>
                                                </p>
                                            </div>

                                        </div>
                                        <div class="row pt-2 pr-3">
                                            <div class="col-xl-6 col-md-6">
                                                <div class="table-responsive">
                                                    @php
                                                        $others_admitted = 0;
                                                        $others_empty = 0;
                                                        $others_total = 0;
                                                        $others_gen_rate = 0;
                                                        $others_admitted_icu = 0;
                                                        $others_empty_icu = 0;
                                                        $others_total_icu = 0;
                                                        $others_icu_rate = 0;

                                                        $others_admitted = $nation_hospital->Admitted_General_Beds - ($dhaka_hospital->Admitted_General_Beds + $ctg_hospital->Admitted_General_Beds);
                                                        $others_empty = ($nation_hospital->General_Beds - $nation_hospital->Admitted_General_Beds) - ($dhaka_hospital->General_Beds - $dhaka_hospital->Admitted_General_Beds + $ctg_hospital->General_Beds - $ctg_hospital->Admitted_General_Beds );
                                                        $others_total = $others_admitted+$others_empty;
                                                        $others_gen_rate = ($others_admitted/$others_total)*100;

                                                        $others_admitted_icu = $nation_hospital->Admitted_ICU_Beds - ($dhaka_hospital->Admitted_ICU_Beds + $ctg_hospital->Admitted_ICU_Beds );
                                                        $others_empty_icu = ($nation_hospital->ICU_Beds - $nation_hospital->Admitted_ICU_Beds) - ($dhaka_hospital->ICU_Beds - $dhaka_hospital->Admitted_ICU_Beds + $ctg_hospital->ICU_Beds - $ctg_hospital->Admitted_ICU_Beds);
                                                        $others_total_icu = $others_admitted_icu+$others_empty_icu;
                                                        $others_icu_rate = ($others_admitted_icu/$others_total_icu)*100;



                                                    @endphp
                                                    <table
                                                        class="table table-bordered table-vcenter text-nowrap b1">
                                                        <thead
                                                            style="background: lightslategrey;color: white;">
                                                        <tr>
                                                            <td></td>
                                                            <td colspan="3" class="text-center fs-18">সাধারণ শয্যা
                                                            </td>
                                                            <td colspan="3" class="text-center fs-18">আইসিইউ শয্যা
                                                            </td>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="fs-16">
                                                        <tr>
                                                            <td></td>
                                                            <td>ভর্তি</td>
                                                            <td>খালি</td>
                                                            <td>খালির হার</td>
                                                            <td>ভর্তি</td>
                                                            <td>খালি</td>
                                                            <td>খালির হার</td>

                                                        </tr>
                                                        <tr>
                                                            <td>সারা দেশ</td>
                                                            <td>{{ convertEnglishDigitToBangla($nation_hospital->Admitted_General_Beds)}}</td>
                                                            <th>{{ convertEnglishDigitToBangla(($nation_hospital->General_Beds - $nation_hospital->Admitted_General_Beds)) }}</th>
                                                            <th>{{ convertEnglishDigitToBangla((100-$nation_hospital->percent_General_Beds_Occupied)) }}
                                                                %
                                                            </th>
                                                            <td>{{ convertEnglishDigitToBangla($nation_hospital->Admitted_ICU_Beds) }}</td>
                                                            <th>{{ convertEnglishDigitToBangla($nation_hospital->ICU_Beds - $nation_hospital->Admitted_ICU_Beds) }}</th>
                                                            <th>{{ convertEnglishDigitToBangla((100-$nation_hospital->percent_ICU_Beds_Occupied)) }}
                                                                %
                                                            </th>

                                                        </tr>
                                                        <tr>
                                                            <td>ঢাকা শহর</td>
                                                            <td>{{ convertEnglishDigitToBangla($dhaka_hospital->Admitted_General_Beds) }}</td>
                                                            <th>{{ convertEnglishDigitToBangla($dhaka_hospital->General_Beds - $dhaka_hospital->Admitted_General_Beds)}}</th>
                                                            <th>{{ convertEnglishDigitToBangla((100-$dhaka_hospital->percent_General_Beds_Occupied)) }}
                                                                %
                                                            </th>
                                                            <td>{{ convertEnglishDigitToBangla($dhaka_hospital->Admitted_ICU_Beds) }}</td>
                                                            <th>{{ convertEnglishDigitToBangla($dhaka_hospital->ICU_Beds - $dhaka_hospital->Admitted_ICU_Beds) }}</th>
                                                            <th>{{ convertEnglishDigitToBangla((100-$dhaka_hospital->percent_ICU_Beds_Occupied)) }}
                                                                %
                                                            </th>

                                                        </tr>
                                                        <tr>
                                                            <td>চট্টগ্রাম শহর</td>
                                                            <td>{{ convertEnglishDigitToBangla($ctg_hospital->Admitted_General_Beds) }}</td>
                                                            <th>{{ convertEnglishDigitToBangla($ctg_hospital->General_Beds - $ctg_hospital->Admitted_General_Beds) }}</th>
                                                            <th>{{ convertEnglishDigitToBangla((100-$ctg_hospital->percent_General_Beds_Occupied)) }}
                                                                %
                                                            </th>
                                                            <td>{{ convertEnglishDigitToBangla($ctg_hospital->Admitted_ICU_Beds) }}</td>
                                                            <th>{{ convertEnglishDigitToBangla($ctg_hospital->ICU_Beds - $ctg_hospital->Admitted_ICU_Beds) }}</th>
                                                            <th>{{ convertEnglishDigitToBangla((100-$ctg_hospital->percent_ICU_Beds_Occupied)) }}
                                                                %
                                                            </th>


                                                        </tr>

                                                        <tr>
                                                            <td>অন্যান্য</td>
                                                            <td>{{ convertEnglishDigitToBangla($others_admitted) }}</td>
                                                            <th>{{ convertEnglishDigitToBangla($others_empty) }}</th>
                                                            <th>{{ convertEnglishDigitToBangla(number_format((float)(100-$others_gen_rate), 4, '.', '')) }}
                                                                %
                                                            </th>
                                                            <td>{{ convertEnglishDigitToBangla($others_admitted_icu) }}</td>
                                                            <th>{{ convertEnglishDigitToBangla($others_empty_icu) }}</th>
                                                            <th>{{ convertEnglishDigitToBangla(number_format((float)(100-$others_icu_rate), 4, '.', '')) }}
                                                                %
                                                            </th>

                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h5 class="card-title b1">
                                                                হাসপাতালের খালি শয্যা সংখ্যার দৈনিক শতকরা হার
                                                            </h5>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <select name="hospital_filter" id="hospital_filter"
                                                                    class="select2 form-control btn-outline-primary division_select">
                                                                <option>সারাদেশ</option>

                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <div  id="hospital_beds_trend"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--Section 3(Last) end here-->
            </div>
        </div>
    </div>

    <!-- main content area end -->
    <!-- footer area start-->
    <footer>
        <div class="footer-area">
            <p>
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <div class="p-2"><img src="pm/images/icon/a2i.png" alt="logo"></div>
                <div class="p-2"><img src="pm/images/icon/cabinet-division.png" alt="logo"></div>
                <div class="p-2"><img src="pm/images/icon/ict-division.png" alt="logo"></div>
                <div class="p-2"><img src="pm/images/icon/undp-update.png" alt="logo"></div>
            </div>
            কপিরাইট © ২০২০ <a href="#">কাভিড-১৯, জাতীয় ড্যাশবোর্ড</a>। সকল অধিকার সংরক্ষিত।
            </p>


        </div>
    </footer>
    <!-- footer area end-->
</div>


<div class="modal" id="modaldemo1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title b1"></h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalContent">
            </div>
        </div>
    </div>
</div>

<!-- jquery latest version -->
<script src="pm/js/vendor/jquery-2.2.4.min.js"></script>
<!-- bootstrap 4 js -->
<script src="pm/js/popper.min.js"></script>
<script src="pm/js/bootstrap.min.js"></script>
<script src="pm/js/owl.carousel.min.js"></script>
<script src="pm/js/metisMenu.min.js"></script>
<script src="pm/js/jquery.slimscroll.min.js"></script>
<script src="pm/js/jquery.slicknav.min.js"></script>

<!-- start chart js -->

<!-- start amcharts -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/ammap.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>


<!-- others plugins -->
<script src="pm/js/plugins.js"></script>
<script src="pm/js/scripts.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js"
        integrity="sha512-f0VlzJbcEB6KiW8ZVtL+5HWPDyW1+nJEjguZ5IVnSQkvZbwBt2RfCBY0CBO1PsMAqxxrG4Di6TfsCPP3ZRwKpA=="
        crossorigin="anonymous"></script>
<!-- INTERNAL Highhcart -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="{{asset('pm/js/bn.js')}}"></script>
<!-- INTERNAL Select2 js -->

<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.js') }}"></script>


<?php
use Carbon\Carbon;
$date_arr = $infected_arr = $avg_arr = array();
$mdata = array();
$sum = 0;
$mdate = '';
$xdate = '';
foreach ($nation_wide_MovingAvgInfected as $k => $row) {
    $date_arr[] = convertEnglishDateToBangla($row->report_date);
    $infected_arr[] = $row->infected_24_hrs;
    $avg_arr[] = $row->five_dayMovingAvgInfected;
    $sum = $sum + $row->infected_24_hrs;
    $test_arr = explode(",", $testsVsCases['totalTest']);
    $case_arr = explode(",", $testsVsCases['totalCase']);
    $mdate = $row->report_date;

    $mdata [] = [
        "date" => $row->report_date,
        "infected" => $row->infected_24_hrs,
        "avg" => $row->five_dayMovingAvgInfected,
        "total_infected" => $row1_left_trend_infected_data[$k],
        "tested" => $test_arr[$k],
        "case" => $case_arr[$k],

    ];
}
$xdata = array();
$last_dates = explode(",", $forteen_day_infected['dateRange']);
$last_dates = $forteen_day_infected['mdates'];
$x = explode(",", $forteen_day_infected['total_infected']);
$y = explode(",", $forteen_day_infected['total_test_positivity']);


foreach ($last_dates as $k => $d) {
    $xdata [] = [
        "date" => $d,
        "infected" => $x[$k],
        "test_positive" => $y[$k],
    ];
    $xdate = $d;
}
$infected = implode(",", $infected_arr);
$avg = implode(",", $avg_arr);
$ydata = [];

?>

<!-- Chart code -->

<script>

    var options = {year: 'numeric', month: 'long', day: 'numeric'};

    var mdata = <?php echo json_encode($mdata)?>;
    var xdata = <?php echo json_encode($xdata)?>;
    var msize = Object.keys(mdata).length;
    var xsize = Object.keys(xdata).length;

    var m_last_date = new Date(mdata[msize - 1].date).toLocaleDateString('bn', options);
    var x_last_date = new Date(xdata[xsize - 1].date).toLocaleDateString('bn', options);


    var tags = {
        "special_word_1": ["অক্টোবর মাসের শুরু থেকে আক্রান্তের সংখ্যা দৈনিক ১৫০০", "মহামারীর অপরিবর্তিত অবস্থাকে"],
        "special_word_2": ["প্রতি হাজারে প্রায় ১৪ জনের", "প্রতিবেশী দেশগুলোর তুলনায় কম"],
        "special_word_3": ["করোনায় দৈনিক প্রায় একই সংখ্যক মানুষ আক্রান্ত হচ্ছে"],
        "special_word_4": ["পরীক্ষার পরিমাণ ও তার গুণগতমানের দিকে নজর দেওয়া প্রয়োজন"],
        "special_word_5": ["মহামারীটি এর বর্তমান গতিতেই আগাচ্ছে - এর গতি এই মূহুর্তে কমছে না বা বাড়ছে না"],
        "special_word_6": ["মহামারীটির উন্নতি হচ্ছে না বরং স্থির অবস্থায় বিরাজমান আছে"],
        "special_word_7": ["লাল এলাকায় আরও বেশি করে পরীক্ষা করা দরকার"],
        "special_word_8": ["পরীক্ষাকৃত ব্যক্তিদের মধ্যে আক্রান্ত্রের সংখ্যা কিছুটা কমে আসলেও এখনো বেশ উঁচু"],
        "special_word_9": ["লাল ঘরে কোন জেলাগুলো রয়েছে এবং তাদের অবস্থা উন্নতির দিকে কেন যাচ্ছে না"],
        "special_word_10": ["বেশিরভাগ মৃত্যু ঘটেছে ষাটোর্ধ্ব বয়সীদের ক্ষেত্রে", "সংক্রমণের মাত্রা মধ্যবয়স্ক এবং তরুণ-তরুণীদের মধ্যে বেশি"],
        "special_word_11": ["আইসিইউ শয্যার ব্যবহার এখনও অধিক"],

    }


    var tagDesign = function (id, tag) {

        $.each(tag, function (a, search) {
            var regex = new RegExp(search, 'g');
            var str = document.getElementById(id).innerHTML;
            var result = str.replace(regex, '<b class="the-number">' + search + '</b>');
            document.getElementById(id).innerHTML = result;
        });

    };

    $.each(tags, function (id, tag) {
        //tagDesign(id, tag);
    });


    if ($('#national_dialy_infected_trend').length) {


        $('#last_date_1').html(" " + m_last_date);


        var chart = AmCharts.makeChart("national_dialy_infected_trend", {
            "type": "serial",
            "theme": "none",
            "marginRight": 80,
            "dataProvider": mdata,
            "legend": {
                "horizontalGap": 10,
                "maxColumns": 2,
                "position": "bottom",
                "useGraphSettings": true,
                "markerSize": 20,
                "valueFunction": function (a, value) {
                    return '';
                },
                "align": "center"

            },
            "valueAxes": [{
                "position": "left",
                "title": "দৈনিক আক্রান্তের সংখ্যা",
                "id": "v1",
                "minimum": 0,
                "labelFunction": function (value, valueText, valueAxis) {
                    return value.toLocaleString("bn-BD");
                },

            },
            ],

            "graphs": [{
                "valueAxis": "v1",
                "id": "g1",
                "balloonText": "[[title]]: [[value]]",
                "columnWidth": 10,
                "fillAlphas": 1,
                "lineColor": "rgb(103, 183, 220)",
                "title": "দৈনিক আক্রান্ত",
                "type": "column",
                "valueField": "infected",
                "balloonFunction": function (graphDataItem, graph) {
                    var value = graphDataItem.values.value;
                    var title = "দৈনিক আক্রান্ত";
                    return "<b>" + title + "</b><br><span style='font-size:14px' class='g-v'> <b>" + value.toLocaleString('bn-BD') + "</b></span>";
                }
            }, {
                "id": "g2",
                "balloonText": "[[title]]: [[value]]",
                "lineThickness": 2,
                "lineColor": "orange",
                "type": "smoothedLine",
                "title": "দৈনিক আক্রান্ত (৫ দিনের  চলমান গড়)",
                "valueField": "avg",
                "bullet": "round",
                "bulletSize": 7,
                "bulletBorderAlpha": 10,
                "bulletColor": "#FFFFFF",
                "useLineColorForBulletBorder": true,
                "bulletBorderThickness": 3,
                "balloonFunction": function (graphDataItem, graph) {
                    var value = graphDataItem.values.value;
                    var title = "দৈনিক আক্রান্ত (৫ দিনের  চলমান গড়)";
                    return "<b>" + title + "</b><br><span style='font-size:14px' class='g-v'> <b>" + value.toLocaleString('bn-BD') + "</b></span>";
                }
            }],
            "chartCursor": {
                "cursorPosition": "mouse",
                "showNextAvailable": true,
                "categoryBalloonFunction": function (date) {
                    var options = {year: 'numeric', month: 'long', day: 'numeric'};
                    return date.toLocaleDateString('bn-BD', options);
                },
            },
            "autoMarginOffset": 5,
            "columnWidth": 1,
            "categoryField": "date",
            "categoryAxis": {
                "parseDates": true,
                "minPeriod": "hh",
                "labelFunction": function (value, date, categoryAxis) {
                    var options = new Array();
                    options["MMM DD"] = {year: 'numeric', month: 'long', day: 'numeric'};
                    options["MMM"] = {year: 'numeric', month: 'long'};
                    options["YY"] = {year: 'numeric', month: 'long'};
                    return date.toLocaleDateString("bn-BD", options[categoryAxis.currentDateFormat]);
                },
                
            },

            "chartScrollbar": {
                "graph": "g2",
                "gridAlpha": 0,
                "color": "#888888",
                "scrollbarHeight": 55,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "autoGridCount": true,
                "selectedGraphFillAlpha": 0,
                "graphLineAlpha": 0.2,
                "graphLineColor": "#c2c2c2",
                "selectedGraphLineColor": "#888888",
                "selectedGraphLineAlpha": 1

            },

        });

        chart.addListener("dataUpdated", zoomChart);
        zoomChart();


        function zoomChart() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            //chart.zoomToIndexes(data.length - 40, chartData.length - 1);
        }


    }

    function englishToBangla(num) {
        var num = new Number(num).toLocaleString("bn-BD");
        return num;
    }

    var finalEnlishToBanglaNumber = {
        '0': '০',
        '1': '১',
        '2': '২',
        '3': '৩',
        '4': '৪',
        '5': '৫',
        '6': '৬',
        '7': '৭',
        '8': '৮',
        '9': '৯'
    };

    String.prototype.getDigitBanglaFromEnglish = function () {
        var retStr = this;
        for (var x in finalEnlishToBanglaNumber) {
            retStr = retStr.replace(new RegExp(x, 'g'), finalEnlishToBanglaNumber[x]);
        }
        return retStr;
    };

    function asiaChart(data, date) {
        var chart = AmCharts.makeChart("mamlinechart2", {
            "type": "serial",
            "theme": "none",
            "categoryField": "country",
            "rotate": true,
            "startDuration": 1,
            "categoryAxis": {
                "gridPosition": "start",
                "position": "left",
                "fontSize": 15,
            },
            "trendLines": [],
            "graphs": [
                {
                    "balloonText": "Test:[[value]]",
                    "fillColorsField": "color",
                    "fillAlphas": 0.8,
                    "id": "AmGraph-1",
                    "lineAlpha": 0.2,
                    "title": "",
                    "type": "column",
                    "valueField": "count",
                    "balloonFunction": function (graphDataItem, graph) {
                        var value = graphDataItem.values.value;
                        var title = "প্রতি হাজারে পরীক্ষা(" + date + "):";
                        return "<b>" + title + "</b><br><span style='font-size:14px' class='g-v'> <b>" + value.toLocaleString('bn-BD') + "</b></span>";
                    },
                    "labelText": '[[balloonValue]]',
                },

            ],
            "guides": [],
            "valueAxes": [
                {
                    "id": "ValueAxis-1",
                    "position": "top",
                    "axisAlpha": 0,
                    "title": "প্রতি হাজারে পরীক্ষা(" + date + ")",
                    "minimum": 0,
                    "maximum": 100,
                    "labelFunction": function (value, valueText, valueAxis) {
                        return value.toLocaleString("bn-BD");
                    },
                }
            ],
            "allLabels": [],
            "balloon": {},
            "titles": [],
            "dataProvider": data,


        });

    }


    $.ajax({
        url: '{{url("/")}}/get-south-asia-data',
        type: 'GET',
        data: {},
        success: function (data) {

            var d = new Array();

            $.each(data.data, function (a, b) {

                if (b.count != 0) {
                    d.push(b);
                }
            });

            asiaChart(d, new Date(data.date).toLocaleDateString('bn-BD'));
            $('#last_date_2').html(" " + new Date(data.date).toLocaleDateString('bn', options));
        },
        error: function (error) {
            console.log(error);
        }
    });


    AmCharts.addInitHandler(function (chart) {

        // format test number to see how it comes out
        var num = ',';
        var format = num.toLocaleString("bn-BD");

        // parse the result to find out thousands and decimal separator
        chart.thousandsSeparator = format.replace();
        chart.decimalSeparator = format.replace();
        chart.locale = "bn-BD";

    });
    AmCharts.monthNames = ["জানুয়ারী", "ফেব্রুয়ারী", "মার্চ", "এপ্রিল", "মে", "জুন", "জুলাই", "অগাস্ট", "সেপ্টেম্বর", "অক্টোবর", "নভেম্বর", "ডিসেম্বর"];
    AmCharts.shortMonthNames = ["জানুয়ারী", "ফেব্রুয়ারী", "মার্চ", "এপ্রিল", "মে", "জুন", "জুলাই", "অগাস্ট", "সেপ্টেম্বর", "অক্টোবর", "নভেম্বর", "ডিসেম্বর"];
    AmCharts.locale = "bn-BD";


    if ($('#amlinechart5').length) {

        $('#last_date_3').html(" " + m_last_date);

        var chart = AmCharts.makeChart("amlinechart5", {
            "type": "serial",
            "theme": "none",
            "language": "bn",
            "marginRight": 20,
            "marginTop": 17,
            "tiitle": "সংক্রমণের ক্রমবর্ধমান পরিবর্তন",
            "autoMarginOffset": 20,
            "dataProvider": mdata,
            "valueAxes": [{
                "axisAlpha": 0,
                "position": "left",
                "title": "দৈনিক আক্রান্তের সংখ্যা",
                "minimum": 0,
                "labelFunction": function (value, valueText, valueAxis) {
                    return value.toLocaleString("bn-BD");
                },
                "balloonTextFunction": function (value, valueText, valueAxis) {
                    return value.toLocaleString("bn-BD");
                },
            }],
            "legend": {
                "horizontalGap": 10,
                "maxColumns": 1,
                "position": "bottom",
                "useGraphSettings": true,
                "markerSize": 40,
                "valueFunction": function (a, value) {
                    return '';
                },
                "align": "center"

            },

            "graphs": [{
                "bullet": "",
                "id": "g1",
                "bulletBorderAlpha": 1,
                "bulletColor": "#FFFFFF",
                "bulletSize": 7,
                "lineThickness": 3,
                "title": "সংক্রামিত",
                "type": "smoothedLine",
                "useLineColorForBulletBorder": true,
                "valueField": "total_infected",
                //"balloonText": "<b>[[title]]</b><br><span style='font-size:14px' class='g-v'> <b>[[value]]</b></span>",
                "balloonFunction": function (graphDataItem, graph) {
                    var value = graphDataItem.values.value;
                    var title = "সংক্রামিত";
                    return "<b>" + title + "</b><br><span style='font-size:14px' class='g-v'> <b>" + value.toLocaleString('bn-BD') + "</b></span>";
                }


            },
            ],

            "chartCursor": {
                "valueLineEnabled": false,
                "valueLineBalloonEnabled": true,
                "valueLineAlpha": 0.5,
                "fullWidth": true,
                "cursorAlpha": 0.05,
                "categoryBalloonFunction": function (date) {
                    var options = {year: 'numeric', month: 'long', day: 'numeric'};
                    return date.toLocaleDateString('bn-BD', options);
                },


            },
            "dataDateFormat": "YYYY-MM-DD",
            "categoryField": "date",
            "categoryAxis": {
                "parseDates": true,

                "labelFunction": function (value, date, categoryAxis) {
                    var options = new Array();
                    options["MMM DD"] = {year: 'numeric', month: 'long', day: 'numeric'};
                    options["MMM"] = {year: 'numeric', month: 'long'};
                    options["YY"] = {year: 'numeric', month: 'long'};
                    return date.toLocaleDateString("bn-BD", options[categoryAxis.currentDateFormat]);
                },


            },
            "chartScrollbar": {
                "graph": "g1",
                "gridAlpha": 0,
                "color": "#888888",
                "scrollbarHeight": 55,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "autoGridCount": true,
                "selectedGraphFillAlpha": 0,
                "graphLineAlpha": 0.2,
                "graphLineColor": "#c2c2c2",
                "selectedGraphLineColor": "#888888",
                "selectedGraphLineAlpha": 1

            },

        });

        chart.addListener("dataUpdated", zoomChart);


        function zoomChart() {
            //chart.zoomToDates(new Date(2020, 5, 20), new Date(2020, 7, 20));
        }
    }

    function showDivisionChart(chartData) {

        var size = Object.keys(chartData).length;
        var div_date = new Date(chartData[size - 1].date).toLocaleDateString('bn', options);
        $('#last_date_4').html(" " + div_date);

        if ($('#amlinechart1').length) {

            var chart = AmCharts.makeChart("amlinechart1", {
                "type": "serial",
                "theme": "light",
                "legend": {
                    "useGraphSettings": true,
                    "valueFunction": function (a, value) {
                        return '';
                    },
                    "align": "center"
                },
                "dataProvider": chartData,
                "synchronizeGrid": true,
                "valueAxes": [
                    {
                        "minimum": 0,
                        "labelFunction": function (value, valueText, valueAxis) {
                            return value.toLocaleString("bn-BD");
                        },
                    }
                ],

                "graphs": [{
                    "valueAxis": "v1",
                    "id": "g1",
                    "lineColor": "#FF6600",
                    "lineThickness": 2,
                    "bullet": "",
                    "bulletBorderThickness": 2,
                    "hideBulletsCount": 30,
                    "title": "ঢাকা",
                    "valueField": "dhk",
                    "fillAlphas": 0,
                    "type": "smoothedLine",
                    "balloonFunction": function (graphDataItem, graph) {
                        var v = 0;
                        if (graphDataItem.values) {
                            v = graphDataItem.values.value;
                        }
                        var options = {month: 'long', day: 'numeric'};
                        return "<b>" + graph.title + "(" + graphDataItem.category.toLocaleDateString('bn', options) + ")</b><span style='font-size:14px'> :<b>" + v.toLocaleString('bn') + "</b></span>";
                    },

                }, {
                    "valueAxis": "v2",
                    "lineColor": "#FCD202",
                    "lineThickness": 2,
                    "bullet": "",
                    "bulletBorderThickness": 2,
                    "hideBulletsCount": 30,
                    "title": "চট্টগ্রাম",
                    "valueField": "ctg",
                    "fillAlphas": 0,
                    "type": "smoothedLine",
                    "balloonFunction": function (graphDataItem, graph) {
                        var v = 0;
                        if (graphDataItem.values) {
                            v = graphDataItem.values.value;
                        }
                        var options = {month: 'long', day: 'numeric'};
                        return "<b>" + graph.title + "(" + graphDataItem.category.toLocaleDateString('bn', options) + ")</b><span style='font-size:14px'> :<b>" + v.toLocaleString('bn') + "</b></span>";
                    },

                },
                    {
                        "valueAxis": "v3",
                        "lineColor": "orange",
                        "lineThickness": 2,
                        "bullet": "",
                        "bulletBorderThickness": 2,
                        "hideBulletsCount": 30,
                        "title": "খুলনা",
                        "valueField": "khu",
                        "fillAlphas": 0,
                        "type": "smoothedLine",
                        "balloonFunction": function (graphDataItem, graph) {
                            var v = 0;
                            if (graphDataItem.values) {
                                v = graphDataItem.values.value;
                            }
                            var options = {month: 'long', day: 'numeric'};
                            return "<b>" + graph.title + "(" + graphDataItem.category.toLocaleDateString('bn', options) + ")</b><span style='font-size:14px'> :<b>" + v.toLocaleString('bn') + "</b></span>";
                        },
                    },
                    {
                        "valueAxis": "v4",
                        "lineColor": "maroon",
                        "lineThickness": 2,
                        "bullet": "",
                        "bulletBorderThickness": 3,
                        "hideBulletsCount": 30,
                        "title": "ময়মনসিংহ",
                        "valueField": "mym",
                        "fillAlphas": 0,
                        "type": "smoothedLine",
                        "balloonFunction": function (graphDataItem, graph) {
                            var v = 0;
                            if (graphDataItem.values) {
                                v = graphDataItem.values.value;
                            }
                            var options = {month: 'long', day: 'numeric'};
                            return "<b>" + graph.title + "(" + graphDataItem.category.toLocaleDateString('bn', options) + ")</b><span style='font-size:14px'> :<b>" + v.toLocaleString('bn') + "</b></span>";
                        },


                    },
                    {
                        "valueAxis": "v5",
                        "lineColor": "pink",
                        "lineThickness": 2,
                        "bullet": "",
                        "bulletBorderThickness": 3,
                        "hideBulletsCount": 30,
                        "title": "রাজশাহী",
                        "valueField": "raj",
                        "fillAlphas": 0,
                        "type": "smoothedLine",
                        "balloonFunction": function (graphDataItem, graph) {
                            var v = 0;
                            if (graphDataItem.values) {
                                v = graphDataItem.values.value;
                            }
                            var options = {month: 'long', day: 'numeric'};
                            return "<b>" + graph.title + "(" + graphDataItem.category.toLocaleDateString('bn', options) + ")</b><span style='font-size:14px'> :<b>" + v.toLocaleString('bn') + "</b></span>";
                        },

                    },
                    {
                        "valueAxis": "v6",
                        "lineColor": "black",
                        "lineThickness": 2,
                        "bullet": "",
                        "bulletBorderThickness": 3,
                        "hideBulletsCount": 30,
                        "title": "রংপুর",
                        "valueField": "ran",
                        "fillAlphas": 0,
                        "type": "smoothedLine",
                        "balloonFunction": function (graphDataItem, graph) {
                            var v = 0;
                            if (graphDataItem.values) {
                                v = graphDataItem.values.value;
                            }
                            var options = {month: 'long', day: 'numeric'};
                            return "<b>" + graph.title + "(" + graphDataItem.category.toLocaleDateString('bn', options) + ")</b><span style='font-size:14px'> :<b>" + v.toLocaleString('bn') + "</b></span>";
                        },

                    },
                    {
                        "valueAxis": "v7",
                        "lineColor": "blue",
                        "lineThickness": 2,
                        "bullet": "",
                        "bulletBorderThickness": 3,
                        "hideBulletsCount": 30,
                        "title": "বরিশাল",
                        "valueField": "bar",
                        "fillAlphas": 0,
                        "type": "smoothedLine",
                        "balloonFunction": function (graphDataItem, graph) {
                            var v = 0;
                            if (graphDataItem.values) {
                                v = graphDataItem.values.value;
                            }
                            var options = {month: 'long', day: 'numeric'};
                            return "<b>" + graph.title + "(" + graphDataItem.category.toLocaleDateString('bn', options) + ")</b><span style='font-size:14px'> :<b>" + v.toLocaleString('bn') + "</b></span>";
                        },
                    },
                    {
                        "valueAxis": "v8",
                        "lineColor": "green",
                        "lineThickness": 2,
                        "bullet": "",
                        "bulletBorderThickness": 3,
                        "hideBulletsCount": 30,
                        "title": "সিলেট",
                        "valueField": "syl",
                        "fillAlphas": 0,
                        "type": "smoothedLine",
                        "balloonFunction": function (graphDataItem, graph) {
                            var v = 0;
                            if (graphDataItem.values) {
                                v = graphDataItem.values.value;
                            }
                            var options = {month: 'long', day: 'numeric'};
                            return "<b>" + graph.title + "(" + graphDataItem.category.toLocaleDateString('bn', options) + ")</b><span style='font-size:14px'> :<b>" + v.toLocaleString('bn') + "</b></span>";
                        },

                    },
                ],
                "chartScrollbar": {},
                "chartCursor": {
                    "cursorPosition": "mouse",
                    "categoryBalloonFunction": function (date) {
                        var options = {year: 'numeric', month: 'long', day: 'numeric'};
                        return '';
                    },
                },
                "categoryField": "date",
                "categoryAxis": {
                    "parseDates": true,
                    "axisColor": "#DADADA",
                    "minPeriod": "DD",
                    "labelFunction": function (value, date, categoryAxis) {
                        var options = new Array();
                        options["MMM DD"] = {year: 'numeric', month: 'long', day: 'numeric'};
                        options["MMM"] = {year: 'numeric', month: 'long'};
                        options["YY"] = {year: 'numeric', month: 'long'};
                        return date.toLocaleDateString("bn-BD", options[categoryAxis.currentDateFormat]);
                    },

                },
                "chartScrollbar": {
                    "graph": "g1",
                    "gridAlpha": 0,
                    "color": "#888888",
                    "scrollbarHeight": 55,
                    "backgroundAlpha": 0,
                    "selectedBackgroundAlpha": 0.1,
                    "selectedBackgroundColor": "#888888",
                    "graphFillAlpha": 0,
                    "autoGridCount": true,
                    "selectedGraphFillAlpha": 0,
                    "graphLineAlpha": 0.2,
                    "graphLineColor": "#c2c2c2",
                    "selectedGraphLineColor": "#888888",
                    "selectedGraphLineAlpha": 1

                },

            });

            chart.addListener("dataUpdated", zoomChart);

            function zoomChart() {
                // chart.zoomToDates(new Date(2020, 5, 20), new Date(2020, 10, 17));
            }
        }
    }


    if ($('#ambarchart4').length) {

        $('#last_date_5').html(" " + m_last_date);

        var chart = AmCharts.makeChart("ambarchart4", {
            "type": "serial",
            "theme": "light",
            "marginRight": 20,
            "marginTop": 17,
            "autoMarginOffset": 20,
            "dataProvider": <?php echo json_encode($mdata)?>,
            "valueAxes": [
                {
                    "id": "v1",
                    "axisAlpha": 0,
                    "position": "left",
                    "title": "দৈনিক আক্রান্তের সংখ্যা",
                    "minimum": 0,
                    "labelFunction": function (value, valueText, valueAxis) {
                        return value.toLocaleString("bn");
                    },
                },
                {
                    "id": "v2",
                    "axisAlpha": 0,
                    "position": "right",
                    "title": "দৈনিক পরীক্ষার সংখ্যা",
                    "minimum": 0,
                    "labelFunction": function (value, valueText, valueAxis) {
                        return value.toLocaleString("bn");
                    },
                },
            ],
            "legend": {
                "horizontalGap": 10,
                "maxColumns": 1,
                "position": "bottom",
                "useGraphSettings": true,
                "markerSize": 10,
                "valueFunction": function (a, value) {
                    return '';
                },
                "align": "center"
            },

            "graphs": [
                {
                    "valueAxis": "v1",
                    "lineColor": "rgb(157, 74, 42)",
                    "lineThickness": 2,
                    "bullet": "দৈনিক আক্রান্ত (৫-দিনের চলমান গড়)",
                    "id": "g1",
                    "bulletBorderAlpha": 1,
                    "bulletColor": "#FFFFFF",
                    "bulletSize": 7,
                    "lineThickness": 2,
                    "title": "দৈনিক আক্রান্ত (৫-দিনের চলমান গড়)",
                    "type": "smoothedLine",
                    "useLineColorForBulletBorder": true,
                    "valueField": "case",
                    "balloonFunction": function (graphDataItem, graph) {
                        var v = 0;
                        if (graphDataItem.values) {
                            v = graphDataItem.values.value;
                        }
                        return "<b>" + graph.title + "</b><span style='font-size:14px'> <b>" + v.toLocaleString('bn') + "</b></span>";
                    },

                },
                {
                    "valueAxis": "v2",
                    "lineColor": "rgb(223, 200, 37)",
                    "lineThickness": 2,
                    "bullet": "দৈনিক পরীক্ষা (৫-দিনের চলমান গড়)",
                    "id": "g2",
                    "bulletBorderAlpha": 1,
                    "bulletColor": "#FFFFFF",
                    "bulletSize": 7,
                    "lineThickness": 2,
                    "title": "দৈনিক পরীক্ষা (৫-দিনের চলমান গড়)",
                    "type": "smoothedLine",
                    "useLineColorForBulletBorder": true,
                    "valueField": "tested",
                    "balloonFunction": function (graphDataItem, graph) {
                        var v = 0;
                        if (graphDataItem.values) {
                            v = graphDataItem.values.value;
                        }
                        return "<b>" + graph.title + "</b><span style='font-size:14px'> <b>" + v.toLocaleString('bn') + "</b></span>";
                    },
                },
            ],

            "chartCursor": {
                "valueLineEnabled": true,
                "valueLineBalloonEnabled": true,
                "valueLineAlpha": 0.5,
                "fullWidth": true,
                "cursorAlpha": 0.05,
                "categoryBalloonFunction": function (date) {
                    var options = {year: 'numeric', month: 'long', day: 'numeric'};
                    return date.toLocaleDateString('bn-BD', options);
                },
            },
            "dataDateFormat": "YYYY-MM-DD",
            "categoryField": "date",
            "categoryAxis": {
                "parseDates": true,
                "labelFunction": function (value, date, categoryAxis) {
                    var options = new Array();
                    options["MMM DD"] = {year: 'numeric', month: 'long', day: 'numeric'};
                    options["MMM"] = {year: 'numeric', month: 'long'};
                    options["YY"] = {year: 'numeric', month: 'long'};
                    return date.toLocaleDateString("bn-BD", options[categoryAxis.currentDateFormat]);
                },
            },
            "chartScrollbar": {
                "graph": "g1",
                "gridAlpha": 0,
                "color": "#888888",
                "scrollbarHeight": 55,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "autoGridCount": true,
                "selectedGraphFillAlpha": 0,
                "graphLineAlpha": 0.2,
                "graphLineColor": "#c2c2c2",
                "selectedGraphLineColor": "#888888",
                "selectedGraphLineAlpha": 1

            },

        });

        chart.addListener("dataUpdated", zoomChart);


        function zoomChart() {
            //chart.zoomToDates(new Date(2020, 5, 20), new Date(2020, 7, 20));
        }
    }


    if ($('#ambarchart1').length) {

        $('#last_date_6').html(" " + m_last_date);

        var chart = AmCharts.makeChart("ambarchart1", {
            "type": "serial",
            "addClassNames": true,
            "theme": "light",
            "balloon": {
                "adjustBorderColor": false,
                "color": "#ffffff"
            },
            "valueAxes": [
                {
                    "position": "left",
                    "title": "শতকরা সংক্রমণের হার (টেস্ট পজিটিভিটি রেট)",
                    "id": "v1",
                    "minimum": 0,
                    "labelFunction": function (value, valueText, valueAxis) {
                        return value.toLocaleString("bn-BD");
                    },

                },
                {
                    "position": "right",
                    "title": "সংক্রমণ",
                    "id": "v2",
                    "minimum": 0,
                    "labelFunction": function (value, valueText, valueAxis) {
                        return value.toLocaleString("bn-BD");
                    },
                },

            ],


            "dataProvider": xdata,

            "startDuration": 1,
            "graphs": [{
                "valueAxis": "v2",
                "id": "g1",
                "alphaField": "alpha",
                "balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
                "fillAlphas": 1,
                "fillColorsField": "color",
                "title": "সংক্রমণ",
                "type": "column",
                "lineColor": "rgb(223, 200, 37)",
                "valueField": "infected",
                "dashLengthField": "dashLengthColumn",
                "balloonFunction": function (graphDataItem, graph) {
                    var v = 0;
                    if (graphDataItem.values) {
                        v = graphDataItem.values.value;
                    }
                    var options = {month: 'long', day: 'numeric'};

                    return "<span style='font-size:12px;'>" + graph.title + "(" + graphDataItem.category.toLocaleString('bn', options) + ")<br><span style='font-size:20px;'>" + v.toLocaleString('bn') + "</span></span>";
                },
            }, {
                "valueAxis": "v1",
                "id": "graph2",
                "balloonText": "",
                "bullet": "round",
                "lineThickness": 3,
                "bulletSize": 7,
                "bulletBorderAlpha": 1,
                "bulletColor": "#FFFFFF",
                "lineColor": "rgb(157, 74, 42)",
                "useLineColorForBulletBorder": true,
                "bulletBorderThickness": 3,
                "fillAlphas": 0,
                "lineAlpha": 1,
                "title": "শতকরা সংক্রমণের হার-টেস্ট পজিটিভিটি রেট",
                "valueField": "test_positive",
                "dashLengthField": "dashLengthLine",
                "type": "smoothedLine",
                "balloonFunction": function (graphDataItem, graph) {
                    var v = 0;
                    if (graphDataItem.values) {
                        v = graphDataItem.values.value;
                    }
                    var options = {month: 'long', day: 'numeric'};
                    return "<span style='font-size:12px;'>" + graph.title + "(" + graphDataItem.category.toLocaleString('bn', options) + ")<br><span style='font-size:20px;'>" + v.toLocaleString('bn') + "</span></span>";
                },
            }],
            "categoryField": "date",
            "categoryAxis": {
                "parseDates": true,
                "minPeriod": "DD",
                "showLastLabel": true,
                "labelFunction": function (value, date, categoryAxis) {
                    var options = new Array();
                    options["MMM DD"] = {year: 'numeric', month: 'long', day: 'numeric'};
                    options["MMM"] = {year: 'numeric', month: 'long'};
                    options["YY"] = {year: 'numeric', month: 'long'};
                    return date.toLocaleDateString("bn-BD", options[categoryAxis.currentDateFormat]);
                },
                "labelRotation": 45,
                "autoGridCount": false,
                "equalSpacing": true,
                "gridCount": 14,
                "showFirstLabel": true,
                "showLastLabel": true,

            },
            






            








            

        });
    }

    function showDhakaChart(data) {

        var size = Object.keys(data).length;
        var div_date = new Date(data[size - 1].date_of_test).toLocaleDateString('bn', options);
        $('#last_date_8').html(" " + div_date);

        if ($('#dhaka_rate').length) {

            var chart = AmCharts.makeChart("dhaka_rate", {
                "type": "serial",
                "theme": "none",
                "marginTop": 0,
                "marginRight": 80,
                "dataProvider": data,
                "valueAxes": [{
                    "axisAlpha": 0,
                    "position": "left",
                    "minimum": 0,
                    "labelFunction": function (value, valueText, valueAxis) {
                        return value.toLocaleString("bn-BD");
                    },
                }],
                "graphs": [{
                    "id": "g1",
                    "balloonText": "",
                    "bullet": "",
                    "bulletSize": 8,
                    "lineColor": "#d1655d",
                    "lineThickness": 2,
                    "negativeLineColor": "#637bb6",
                    "type": "smoothedLine",
                    "valueField": "test_positivity",
                    "title": "দৈনিক সংক্রমনের হার বা টেস্ট পজিটিভিটি রেট",
                    "balloonFunction": function (graphDataItem, graph) {
                        var v = 0;
                        if (graphDataItem.values) {
                            v = graphDataItem.values.value;
                        }
                        //var d = graphDataItem.dataContext.date_of_test;

                        var options = {year: 'numeric', month: 'long', day: 'numeric'};
                        return "<span style='font-size:12px;'>" + graph.title + "<b style='color:red'><br><span style='font-size:20px;'>" + v.toLocaleString('bn') + "</span></span>";
                    },

                }],
                "chartScrollbar": {
                    "graph": "g1",
                    "gridAlpha": 0,
                    "color": "#888888",
                    "scrollbarHeight": 55,
                    "backgroundAlpha": 0,
                    "selectedBackgroundAlpha": 0.1,
                    "selectedBackgroundColor": "#888888",
                    "graphFillAlpha": 0,
                    "autoGridCount": true,
                    "selectedGraphFillAlpha": 0,
                    "graphLineAlpha": 0.2,
                    "graphLineColor": "#c2c2c2",
                    "selectedGraphLineColor": "#888888",
                    "selectedGraphLineAlpha": 1

                },
                "chartCursor": {
                    "cursorAlpha": 0,
                    "valueLineEnabled": true,
                    "valueLineBalloonEnabled": true,
                    "valueLineAlpha": 0.5,
                    "fullWidth": true,
                    "categoryBalloonFunction": function (date) {
                        var options = {year: 'numeric', month: 'long', day: 'numeric'};
                        return date.toLocaleDateString('bn-BD', options);
                    },
                },
                "categoryField": "date_of_test",
                "categoryAxis": {
                    "minPeriod": "DD",
                    "parseDates": true,
                    "minorGridAlpha": 0.1,
                    "minorGridEnabled": true,
                    "labelFunction": function (value, date, categoryAxis) {
                        var options = new Array();
                        options["MMM DD"] = {year: 'numeric', month: 'long', day: 'numeric'};
                        options["MMM"] = {year: 'numeric', month: 'long'};
                        options["YY"] = {year: 'numeric', month: 'long'};
                        return date.toLocaleDateString("bn-BD", options[categoryAxis.currentDateFormat]);
                    },
                },
            });

            chart.addListener("rendered", zoomChart);
            if (chart.zoomChart) {
                chart.zoomChart();
            }

            function zoomChart() {
                //chart.zoomToIndexes(Math.round(chart.dataProvider.length * 0.4), Math.round(chart.dataProvider.length * 0.55));
            }
        }
    }

    $.ajax({
        url: '{{url("/")}}/get-dhaka-positive-rate-data',
        type: 'GET',
        data: {},
        success: function (data) {
            showDhakaChart(data);
        },
        error: function (error) {
            console.log(error);
        }
    });

    $.ajax({
        url: '{{url("/")}}/get-division-data',
        type: 'GET',
        data: {},
        success: function (data) {
            showDivisionChart(data);
        },
        error: function (error) {
            console.log(error);
        }
    });


    $('#iframeData').html('<iframe id="rtIframeData" scrolling="no" width="100%" height="550" src="https://public.tableau.com/views/COVIDtestpositivityratedistrict_16043796001030/Dashboard1?%3Aembed=y&amp;%3AshowVizHome=no" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>');

    $(document).ready(function ($) {
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        //  output.innerHTML = englishToBangla(slider.value);

        slider.oninput = function () {
            output.innerHTML = englishToBangla(this.value);
        }

//$("#ex16b").slider({ min: 10, max: 100, value: [10, 100], labelledby: ['ex18-label-2a', 'ex18-label-2b'], focus: true });
        $("#ex12c").slider({id: "slider12c", min: 0, max: 30, range: true, value: [5, 12]});

        $("#ex12c").on("slide", function (slideEvt) {
            $("#ex6SliderVal").text(englishToBangla(slideEvt.value[0]) + ',' + englishToBangla(slideEvt.value[1]));
            myrange_ajax_call();
        });


        $('#myRange').on('click', function () {
            myrange_ajax_call();
        });


        function myrange_ajax_call() {

            let result;
            let url = new URL('{!! route('hpm.getRiskMatricData') !!}');
            $.ajax({

                type: "GET",
                url: url.toString(),
                data: {
                    'test_count': $('#myRange').val(),
                    'test_positive_data_rate': $('#ex12c').val(),
                },
                timeout: 30000,
                success: function (data) {
                    if (data.status == 'success') {

                        rangeChange(data.result_data, data.risk_matrix_data);
                    } else {
                        alert("Something Went Wrong");
                    }
                },
                error: function (request, status, error) {
                    console.log("Request Param");
                    console.log(request.responseText);
                    console.log("Status Param");
                    console.log(status);
                    console.log(error);
                }
            });
            return false;
        }

        function rangeChange(data, risk_matrix_data) {

            $('.high_to_high_modal_click').html(englishToBangla(data.high_to_high) + ' টি জেলা');
            $('.high_to_low_modal_click').html(englishToBangla(data.high_to_low) + ' টি জেলা');
            $('.high_to_medium_modal_click').html(englishToBangla(data.high_to_medium) + ' টি জেলা');
            $('.low_to_high_modal_click').html(englishToBangla(data.low_to_high) + ' টি জেলা');
            $('.low_to_low_modal_click').html(englishToBangla(data.low_to_low) + ' টি জেলা');
            $('.medium_to_high_modal_click').html(englishToBangla(data.medium_to_high) + ' টি জেলা');
            $('.medium_to_low_modal_click').html(englishToBangla(data.medium_to_low) + ' টি জেলা');
            $('.medium_to_medium_modal_click').html(englishToBangla(data.medium_to_medium) + ' টি জেলা');
            /*modal data*/
            $('#high_to_high_table_content tbody').html(risk_matrix_data.high_to_high_table_contentData);
            $('#medium_to_high_table_content tbody').html(risk_matrix_data.medium_to_high_table_contentData);
            $('#low_to_high_table_content tbody').html(risk_matrix_data.low_to_high_table_contentData);
            $('#high_to_medium_table_content tbody').html(risk_matrix_data.high_to_medium_table_contentData);
            $('#medium_to_medium_table_content tbody').html(risk_matrix_data.medium_to_medium_table_contentData);
            $('#low_to_medium_table_content tbody').html(risk_matrix_data.low_to_medium_table_contentData);
            $('#high_to_low_table_content tbody').html(risk_matrix_data.high_to_low_table_contentData);
            $('#medium_to_low_table_content tbody').html(risk_matrix_data.medium_to_low_table_contentData);
            $('#low_to_low_table_content tbody').html(risk_matrix_data.low_to_low_table_contentData);
            /*district data*/
            $('.high_to_high_district').html(risk_matrix_data.high_to_high_district_name);
            $('.high_to_low_district').html(risk_matrix_data.high_to_low_district_name);
            $('.high_to_medium_district').html(risk_matrix_data.high_to_medium_district_name);
            $('.low_to_high_district').html(risk_matrix_data.low_to_high_district_name);
            $('.low_to_medium_district').html(risk_matrix_data.low_to_medium_district_name);
            $('.low_to_low_district').html(risk_matrix_data.low_to_low_district_name);
            $('.medium_to_high_district').html(risk_matrix_data.medium_to_high_district_name);
            $('.medium_to_medium_district').html(risk_matrix_data.medium_to_medium_district_name);
            $('.medium_to_low_district').html(risk_matrix_data.medium_to_low_district_name);


        }

        $('.high_to_high_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#high_to_high_table_content').html());
            //hospitalDataModal();

        });

        $('.medium_to_high_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#medium_to_high_table_content').html());
            //hospitalDataModal();
        });

        $('.low_to_high_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#low_to_high_table_content').html());
            //hospitalDataModal();
        });

        $('.high_to_medium_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#high_to_medium_table_content').html());
            //hospitalDataModal();
        });

        $('.medium_to_medium_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#medium_to_medium_table_content').html());
            //hospitalDataModal();
        });

        $('.low_to_medium_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#low_to_medium_table_content').html());
            //hospitalDataModal();
        });

        $('.high_to_low_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#high_to_low_table_content').html());
            //hospitalDataModal();
        });

        $('.medium_to_low_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#medium_to_low_table_content').html());
            //hospitalDataModal();
        });

        $('.low_to_low_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#low_to_low_table_content').html());
            //hospitalDataModal();
        });

    });
    <?php
    use Illuminate\Support\Facades\DB;$getNationalInfectedAge = DB::select("select A.zero_to_ten/5 as '_0_10',
        A.elv_to_twenty/5 AS '_11_20',
        A.twentyone_to_thirty/5 as '_21_30',
        A.thirtyone_to_forty/5 as '_31_40',
        A.fortyone_to_fifty/5 as '_41_50',
        A.fiftyone_to_sixty/5 as '_51_60',
        A.sixtyone_to_hundred/5 as '_60_Plus', updt_date
    from
    (SELECT
        max(date_of_test) as 'updt_date',
        SUM(IF(age < 10,1,0)) as 'zero_to_ten',
        SUM(IF(age BETWEEN 11 and 20,1,0)) as 'elv_to_twenty',
        SUM(IF(age BETWEEN 21 and 30,1,0)) as 'twentyone_to_thirty',
        SUM(IF(age BETWEEN 31 and 40,1,0)) as 'thirtyone_to_forty',
        SUM(IF(age BETWEEN 41 and 50,1,0)) as 'fortyone_to_fifty',
        SUM(IF(age BETWEEN 51 and 60,1,0)) as 'fiftyone_to_sixty',
        SUM(IF(age BETWEEN 61 and 100,1,0)) as 'sixtyone_to_hundred',
        SUM(IF(age BETWEEN 0 and 100,1,0)) as 'Total'
        FROM infected_person)
    as A;");

    $_ageWiseInfectData = array();

    $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_0_10) ? (int)$getNationalInfectedAge[0]->_0_10 : 0;
    $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_11_20) ? (int)$getNationalInfectedAge[0]->_11_20 : 0;
    $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_21_30) ? (int)$getNationalInfectedAge[0]->_21_30 : 0;
    $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_31_40) ? (int)$getNationalInfectedAge[0]->_31_40 : 0;
    $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_41_50) ? (int)$getNationalInfectedAge[0]->_41_50 : 0;
    $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_51_60) ? (int)$getNationalInfectedAge[0]->_51_60 : 0;
    $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_60_Plus) ? (int)$getNationalInfectedAge[0]->_60_Plus : 0;
    $_ageWiseInfectData = implode(",", $_ageWiseInfectData);

    //Death section


    $getAgeDeath = DB::select("select date, ageRange, TotalDeath from deathnationalagedistribution where date = (select max(date) from deathnationalagedistribution )");
    //        dd($getAgeDeath);
    $deathAge = [];
    $i = 0;
    foreach ($getAgeDeath as $key => $d) {
        if ($i <= 6) {
            //$calcPercentage = ($d->TotalDeath / $totalDeath) * 100;
            array_push($deathAge, $d->TotalDeath);
            $i++;
        } else {
            break;
        }
    }

    $deathAge = implode(",", $deathAge);

    //Code by Robi
    $current_infecteds =
        DB::select("select A.zero_to_ten as 'infected_0_10',
            A.elv_to_twenty as 'infected_11_20',
            A.twentyone_to_thirty as 'infected_21_30',
            A.thirtyone_to_forty as 'infected_31_40',
            A.fortyone_to_fifty as 'infected_41_50',
            A.fiftyone_to_sixty as 'infected_51_60',
            A.sixtyone_to_hundred as 'infected_60_plus'
            from
            (SELECT
                max(test_date) as 'updt_date',
                SUM(IF(age < 10,1,0)) as 'zero_to_ten',
                SUM(IF(age BETWEEN 11 and 20,1,0)) as 'elv_to_twenty',
                SUM(IF(age BETWEEN 21 and 30,1,0)) as 'twentyone_to_thirty',
                SUM(IF(age BETWEEN 31 and 40,1,0)) as 'thirtyone_to_forty',
                SUM(IF(age BETWEEN 41 and 50,1,0)) as 'fortyone_to_fifty',
                SUM(IF(age BETWEEN 51 and 60,1,0)) as 'fiftyone_to_sixty',
                SUM(IF(age BETWEEN 61 and 100,1,0)) as 'sixtyone_to_hundred',
                SUM(IF(age BETWEEN 0 and 100,1,0)) as 'Total'
                FROM infected_person
                where month(date_of_test) = month(curdate())
                and year(date_of_test) = year(curdate()))
            as A;");


    $current_deaths = DB::select("select * from death_national_age_hpm where month(date) = month(curdate()) and year(date) = year(curdate())");

    $cur_infected = $cur_death = [];
    foreach ($current_infecteds as $key => $current_infected) {
        array_push($cur_infected, $current_infected->infected_0_10);
        array_push($cur_infected, $current_infected->infected_11_20);
        array_push($cur_infected, $current_infected->infected_21_30);
        array_push($cur_infected, $current_infected->infected_31_40);
        array_push($cur_infected, $current_infected->infected_41_50);
        array_push($cur_infected, $current_infected->infected_51_60);
        array_push($cur_infected, $current_infected->infected_60_plus);
    }
    $cur_infected = implode(",", $cur_infected);

    foreach ($current_deaths as $key => $current_death) {
        array_push($cur_death, $current_death->total_death);
    }
    $cur_death = implode(",", $cur_death);


    $pre_month_infecteds = DB::select("
            select A.zero_to_ten as 'infected_0_10',
            A.elv_to_twenty as 'infected_11_20',
            A.twentyone_to_thirty as 'infected_21_30',
            A.thirtyone_to_forty as 'infected_31_40',
            A.fortyone_to_fifty as 'infected_41_50',
            A.fiftyone_to_sixty as 'infected_51_60',
            A.sixtyone_to_hundred as 'infected_60_plus'
            from
            (SELECT
                max(test_date) as 'updt_date',
                SUM(IF(age < 10,1,0)) as 'zero_to_ten',
                SUM(IF(age BETWEEN 11 and 20,1,0)) as 'elv_to_twenty',
                SUM(IF(age BETWEEN 21 and 30,1,0)) as 'twentyone_to_thirty',
                SUM(IF(age BETWEEN 31 and 40,1,0)) as 'thirtyone_to_forty',
                SUM(IF(age BETWEEN 41 and 50,1,0)) as 'fortyone_to_fifty',
                SUM(IF(age BETWEEN 51 and 60,1,0)) as 'fiftyone_to_sixty',
                SUM(IF(age BETWEEN 61 and 100,1,0)) as 'sixtyone_to_hundred',
                SUM(IF(age BETWEEN 0 and 100,1,0)) as 'Total'
                FROM infected_person
                where month(date_of_test) = month(curdate()- INTERVAL 1 MONTH)
                and year(date_of_test) = year(curdate()- INTERVAL 1 MONTH))
            as A;");
    $pre_month_deaths = DB::select("select * from death_national_age_hpm where month(date) = month(curdate()- INTERVAL 1 MONTH) and year(date) = year(curdate()- INTERVAL 1 MONTH)");

    $previous_month__infected = $previous_month__death = [];
    foreach ($pre_month_infecteds as $key => $pre_month_infected) {
        array_push($previous_month__infected, $pre_month_infected->infected_0_10);
        array_push($previous_month__infected, $pre_month_infected->infected_11_20);
        array_push($previous_month__infected, $pre_month_infected->infected_21_30);
        array_push($previous_month__infected, $pre_month_infected->infected_31_40);
        array_push($previous_month__infected, $pre_month_infected->infected_41_50);
        array_push($previous_month__infected, $pre_month_infected->infected_51_60);
        array_push($previous_month__infected, $pre_month_infected->infected_60_plus);
    }
    $previous_month__infected = implode(",", $previous_month__infected);

    foreach ($pre_month_deaths as $key => $pre_month_death) {
        array_push($previous_month__death, $pre_month_death->total_death);
    }
    $previous_month__death = implode(",", $previous_month__death);

    $pre_pre_month_infecteds = DB::select("
            select A.zero_to_ten as 'infected_0_10',
            A.elv_to_twenty as 'infected_11_20',
            A.twentyone_to_thirty as 'infected_21_30',
            A.thirtyone_to_forty as 'infected_31_40',
            A.fortyone_to_fifty as 'infected_41_50',
            A.fiftyone_to_sixty as 'infected_51_60',
            A.sixtyone_to_hundred as 'infected_60_plus'
            from
            (SELECT
                max(test_date) as 'updt_date',
                SUM(IF(age < 10,1,0)) as 'zero_to_ten',
                SUM(IF(age BETWEEN 11 and 20,1,0)) as 'elv_to_twenty',
                SUM(IF(age BETWEEN 21 and 30,1,0)) as 'twentyone_to_thirty',
                SUM(IF(age BETWEEN 31 and 40,1,0)) as 'thirtyone_to_forty',
                SUM(IF(age BETWEEN 41 and 50,1,0)) as 'fortyone_to_fifty',
                SUM(IF(age BETWEEN 51 and 60,1,0)) as 'fiftyone_to_sixty',
                SUM(IF(age BETWEEN 61 and 100,1,0)) as 'sixtyone_to_hundred',
                SUM(IF(age BETWEEN 0 and 100,1,0)) as 'Total'
                FROM infected_person
                where month(date_of_test) = month(curdate()- INTERVAL 2 MONTH)
                and year(date_of_test) = year(curdate()- INTERVAL 2 MONTH))
            as A;");
    $pre_pre_month_deaths = DB::select("select * from death_national_age_hpm where month(date) = month(curdate()- INTERVAL 2 MONTH) and year(date) = year(curdate()- INTERVAL 2 MONTH)");

    $previous_previous_month__infected = $previous_previous_month__death = [];
    foreach ($pre_pre_month_infecteds as $key => $pre_pre_month_infected) {
        array_push($previous_previous_month__infected, $pre_pre_month_infected->infected_0_10);
        array_push($previous_previous_month__infected, $pre_pre_month_infected->infected_11_20);
        array_push($previous_previous_month__infected, $pre_pre_month_infected->infected_21_30);
        array_push($previous_previous_month__infected, $pre_pre_month_infected->infected_31_40);
        array_push($previous_previous_month__infected, $pre_pre_month_infected->infected_41_50);
        array_push($previous_previous_month__infected, $pre_pre_month_infected->infected_51_60);
        array_push($previous_previous_month__infected, $pre_pre_month_infected->infected_60_plus);
    }
    $previous_previous_month__infected = implode(",", $previous_previous_month__infected);

    foreach ($pre_pre_month_deaths as $key => $pre_pre_month_death) {
        array_push($previous_previous_month__death, $pre_pre_month_death->total_death);
    }
    $previous_previous_month__death = implode(",", $previous_previous_month__death);

    ?>


    // Age Wise Death Distribution
    Highcharts.chart('age_wise_death_distribution', {
        chart: {
            type: 'bar',
            style: {
                fontFamily: 'SolaimanLipi'
            }
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        credits: {
            enabled: false
        },
        legend: {
            enabled: true,
            itemStyle: {
                fontSize: "16px",
                fontWeight: "normal"
            }
        },
        yAxis: {
            title: {
                text: ''
            },
            labels: {
                formatter: function () {
                    return englishToBangla(this.value);
                }
            },
            max: 12000,
        },
        xAxis: {
            categories: ["০-১০", "১১-২০", "২১-৩০", "৩১-৪০", "৪১-৫০", "৫১-৬০", "৬১+"],
            title: {
                text: 'বয়স',
                style: {
                    fontSize: 18,
                    fontFamily: 'SolaimanLipi'
                }
            }
        },
        /*tooltip: {
            pointFormat: '{series.name}: <b>{point.y}</b>'

        },*/
        tooltip: {
            formatter: function () {
                return `${this.series.name}: <b>${englishToBangla(this.y)}</b>`;
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        colors: ['#ef4b4b', '#ff9800'],
        series: [{
            name: 'মৃত্যু',
            data: [<?php echo $cur_death;?>]

        }, {
            name: 'আক্রান্ত',
            data: [<?php echo $cur_infected;?>]


        }]
    });

    // Age Wise Death Distribution 1
    Highcharts.chart('age_wise_death_distribution_1', {
        chart: {
            type: 'bar',
            style: {
                fontFamily: 'SolaimanLipi'
            }
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        credits: {
            enabled: false
        },
        legend: {
            enabled: true,
            itemStyle: {
                fontSize: "16px",
                fontWeight: "normal"
            }
        },
        yAxis: {
            title: {
                text: ''
            },
            labels: {
                formatter: function () {
                    return englishToBangla(this.value);
                }
            },
            max: 12000,
        },
        xAxis: {
            categories: ["০-১০", "১১-২০", "২১-৩০", "৩১-৪০", "৪১-৫০", "৫১-৬০", "৬১+"],
            title: {
                text: 'বয়স',
                style: {
                    fontSize: 18,
                    fontFamily: 'SolaimanLipi'
                }
            },

        },
        /*tooltip: {
            pointFormat: '{series.name}: <b>{point.y}</b>'

        },*/
        tooltip: {
            formatter: function () {
                return `${this.series.name}: <b>${englishToBangla(this.y)}</b>`;
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        colors: ['#ef4b4b', '#ff9800'],
        series: [{
            name: 'মৃত্যু',

            data: [<?php echo $previous_month__death;?>]
            {{--data: [<?php echo $deathAge;?>]--}}

        }, {
            name: 'আক্রান্ত',

            {{--data: [<?php echo $_ageWiseInfectData;?>],--}}
            data: [<?php echo $previous_month__infected;?>]

        }]
    });
    // Age Wise Death Distribution 2
    Highcharts.chart('age_wise_death_distribution_2', {
        chart: {
            type: 'bar',
            style: {
                fontFamily: 'SolaimanLipi'
            }
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        credits: {
            enabled: false
        },
        legend: {
            enabled: true,
            itemStyle: {
                fontSize: "16px",
                fontWeight: "normal"
            }
        },
        yAxis: {
            title: {
                text: ''
            },
            labels: {
                formatter: function () {
                    return englishToBangla(this.value);
                }
            },
            max: 12000,
        },
        xAxis: {
            categories: ["০-১০", "১১-২০", "২১-৩০", "৩১-৪০", "৪১-৫০", "৫১-৬০", "৬১+"],
            title: {
                text: 'বয়স',
                style: {
                    fontSize: 18,
                    fontFamily: 'SolaimanLipi'
                }
            }

        },
        /*tooltip: {
            pointFormat: '{series.name}: <b>{point.y}</b>'

        },*/
        tooltip: {
            formatter: function () {
                return `${this.series.name}: <b>${englishToBangla(this.y)}</b>`;
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        colors: ['#ef4b4b', '#ff9800'],
        series: [{
            name: 'মৃত্যু',
            data: [<?php echo $previous_previous_month__death;?>]
            {{--data: [<?php echo $deathAge;?>]--}}

        }, {
            name: 'আক্রান্ত',
            {{--data: [<?php echo $_ageWiseInfectData;?>],--}}
            data: [<?php echo $previous_previous_month__infected;?>]

        }]
    });

    <?php

    $vacancy_beds = DB::select("select date, (((alocatedGeneralBed-AdmittedGeneralBed)/alocatedGeneralBed)*100)
as 'GeneralBedVacancyRate',
(((alocatedICUBed-AdmittedICUBed)/alocatedICUBed)*100) as 'ICUVacancyRate'
from hospitaltemporarydata
where city = 'Country'
group by date ORDER BY date ");

    $dates = $general_beds = $icu_beds = [];
    foreach ($vacancy_beds as $key => $vacancy_bed) {
        $dates[] = "'" . convertEnglishDateToBangla($vacancy_bed->date) . "'";;
        $general_beds[] = $vacancy_bed->GeneralBedVacancyRate;
        $icu_beds[] = $vacancy_bed->ICUVacancyRate;
    }

    $zdate = $dates;
    $hospital_vacancy_dates = implode(",", $dates);
    $hospital_vacancy_generals = implode(",", $general_beds);
    $hospital_vacancy_icus = implode(",", $icu_beds);
    ?>
    // Hospital সাধারণ শয্যা
    Highcharts.chart('hospital_general_beds', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 60,
                beta: 0
            },
            height: 250,
            margin: [0, 0, 30, 0],
            style: {
                fontFamily: 'SolaimanLipi'
            }
        },
        title: {
            text: 'সাধারণ শয্যা',
            y: 20,
            style: {
                fontSize: 18,
                fontFamily: 'SolaimanLipi'
            }
        },
        credits: {
            enabled: false
        },
        legend: {
            enabled: true,
            labelFormatter: function () {
                return this.name + ': <b> ' + englishToBangla(this.y) + '%</b>';
            },
            itemStyle: {
                fontSize: "16px",
                fontWeight: "normal"
            }
        },
        tooltip: {
            //pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            formatter: function () {
                return `${this.series.name}: <b>${englishToBangla(this.y)}</b>`;
            }
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },

        colors: ['#f44336', '#4caf50'],
        series: [{
            type: 'pie',
            name: 'শয্যা',
            data: [
                ['ভর্তি', <?= number_format($nation_hospital->percent_General_Beds_Occupied, 2);?>],
                ['খালি', <?= number_format((100 - $nation_hospital->percent_General_Beds_Occupied), 2);?>]
            ]
        }]
    });

    // Hospital আইসিইউ  শয্যা
    Highcharts.chart('hospital_icu_beds', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 60,
                beta: 0
            },
            height: 250,
            margin: [0, 0, 30, 0],
            style: {
                fontFamily: 'SolaimanLipi'
            }
        },
        title: {
            text: 'আইসিইউ শয্যা',
            style: {
                fontSize: 18,
                fontFamily: 'SolaimanLipi'
            }
        },
        credits: {
            enabled: false
        },
        legend: {
            enabled: true,
            labelFormatter: function () {
                return this.name + ': <b> ' + englishToBangla(this.y) + '%</b>';
            },
            itemStyle: {
                fontSize: "16px",
                fontWeight: "normal"
            }
        },
        tooltip: {
            //pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            formatter: function () {
                return `${this.series.name}: <b>${englishToBangla(this.y)}</b>`;
            }
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        colors: ['#f44336', '#4caf50'],
        series: [{
            type: 'pie',
            name: 'শয্যা',
            data: [
                ['ভর্তি', <?= number_format($nation_hospital->percent_ICU_Beds_Occupied, 2);?>],
                ['খালি', <?= number_format((100 - $nation_hospital->percent_ICU_Beds_Occupied), 2);?>]
            ]
        }]
    });

    $(document).ready(function (e) {
        $('input[name="availability"]').click(function () {
            if ($('input[name="ni_type"]').val() != null && $(this).val() == 'sufficient') {
                var color_code = '#38cb89';
                $("svg #Dhaka path").attr('fill', color_code);
                $("#Narail path").attr('fill', color_code);
                $("#Khulna path").attr('fill', color_code);
                $("#Barisal path").attr('fill', color_code);
                $("#Sylhet path").attr('fill', color_code);
                $("#Pirojpur path").attr('fill', color_code);
            } else if ($('input[name="ni_type"]').val() != null && $(this).val() == 'insufficient') {
                var color_code = '#ef4b4b';
                $("svg #Rajshahi path").attr('fill', color_code);
                $("#Rajbari path").attr('fill', color_code);
                $("#Kurigram path").attr('fill', color_code);
                $("#Bagerhat path").attr('fill', color_code);
                $("#Satkhira path").attr('fill', color_code);
                $("#Patuakhali path").attr('fill', color_code);
            } else if ($('input[name="ni_type"]').val() != null && $(this).val() == 'semisufficient') {
                var color_code = '#ffab00';
                $("svg #Dhaka path").attr('fill', color_code);
                $("#Gopalgonj path").attr('fill', color_code);
                $("#Naogaon path").attr('fill', color_code);
                $("#Tangail path").attr('fill', color_code);
                $("#Mymensingh path").attr('fill', color_code);
                $("#Khagrachari path").attr('fill', color_code);
                $("#Bandarban path").attr('fill', color_code);
                $("#Rangamati path").attr('fill', color_code);
            } else {
                $('#hospital_capacity_map').append('<div class="text-danger">You need to select both options.</div>');
            }
        });
    });
































































    $('.nav-btn').trigger('click');


    function showDivisionChartFilter(chartData, axis) {
        var size = Object.keys(chartData).length;
        var div_date = new Date(chartData[size - 1].date).toLocaleDateString('bn', options);
        $('#last_date_4').html(" " + div_date);

        if ($('#amlinechart1').length) {

            var chart = AmCharts.makeChart("amlinechart1", {
                "type": "serial",
                "theme": "light",
                "legend": {
                    "useGraphSettings": true,
                    "valueFunction": function (a, value) {
                        return '';
                    },
                    "align": "center"
                },
                "dataProvider": chartData,
                "synchronizeGrid": true,
                "valueAxes": [
                    {
                        "minimum": 0,
                        "labelFunction": function (value, valueText, valueAxis) {
                            return value.toLocaleString("bn-BD");
                        },
                    }
                ],

                "graphs": axis,
                "chartCursor": {
                    "cursorPosition": "mouse",
                    "categoryBalloonFunction": function (date) {
                        var options = {year: 'numeric', month: 'long', day: 'numeric'};
                        return '';
                    },
                },
                "categoryField": "date",
                "categoryAxis": {
                    "parseDates": true,
                    "axisColor": "#DADADA",
                    "minPeriod": "DD",
                    "labelFunction": function (value, date, categoryAxis) {
                        var options = new Array();
                        options["MMM DD"] = {year: 'numeric', month: 'long', day: 'numeric'};
                        options["MMM"] = {year: 'numeric', month: 'long'};
                        options["YY"] = {year: 'numeric', month: 'long'};
                        return date.toLocaleDateString("bn-BD", options[categoryAxis.currentDateFormat]);
                    },

                },
                "chartScrollbar": {
                    "graph": "g0",
                    "gridAlpha": 0,
                    "color": "#888888",
                    "scrollbarHeight": 55,
                    "backgroundAlpha": 0,
                    "selectedBackgroundAlpha": 0.1,
                    "selectedBackgroundColor": "#888888",
                    "graphFillAlpha": 0,
                    "autoGridCount": true,
                    "selectedGraphFillAlpha": 0,
                    "graphLineAlpha": 0.2,
                    "graphLineColor": "#c2c2c2",
                    "selectedGraphLineColor": "#888888",
                    "selectedGraphLineAlpha": 1

                },

            });

            chart.addListener("dataUpdated", zoomChart);

            function zoomChart() {
                // chart.zoomToDates(new Date(2020, 5, 20), new Date(2020, 10, 17));
            }
        }
    }

    function filterDivision() {
        var divisions = $('#division').val();
        var districts = $('#district').val();
        if (divisions || districts) {
            $.ajax({
                url: '{{url("/")}}/get-division-data-filter',
                type: 'GET',
                data: {divisions: divisions, districts: districts},
                success: function (data) {
                    var axis = new Array();
                    $.each(data.axis, function (a, b) {
                        var obj = {
                            "id": "g" + a,
                            "valueAxis": "v" + a,
                            "lineColor": getRandomColor(a),
                            "lineThickness": 2,
                            "bullet": "",
                            "bulletBorderThickness": 2,
                            "hideBulletsCount": 30,
                            "title": b.bn,
                            "valueField": b.en,
                            "fillAlphas": 0,
                            "type": "smoothedLine",
                            "balloonFunction": function (graphDataItem, graph) {
                                var v = 0;
                                if (graphDataItem.values) {
                                    v = graphDataItem.values.value;
                                }
                                var options = {month: 'long', day: 'numeric'};
                                return "<b>" + graph.title + "(" + graphDataItem.category.toLocaleDateString('bn', options) + ")</b><span style='font-size:14px'> :<b>" + v.toLocaleString('bn') + "</b></span>";
                            },

                        };
                        console.log();
                        axis.push(obj);
                    })
                    showDivisionChartFilter(data.data, axis);


                },
                error: function (error) {
                    console.log(error);
                }
            });
        } else {
            $.ajax({
                url: '{{url("/")}}/get-division-data',
                type: 'GET',
                data: {},
                success: function (data) {
                    showDivisionChart(data);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
    }


    $('#filter-division').on('click', function () {
        var divisions = $('#division').val();
        var districts = $('#district').val();
        if (flag == 0) {
            $('#district').val('').trigger('change');
        } else if (flag == 1) {
            $('#division').val('').trigger('change');
        }
        filterDivision();
    });


    function getRandomColor(a) {
        var letters = '0123456789ABCDEF'.split('');
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    var flag = 0;
    $('#division').on('change', function () {
        flag = 0;
    });
    $('#district').on('change', function () {
        flag = 1;
    });

    //last chart source date//
    var zdate = <?php echo json_encode($zdate);?>;
    var msize = Object.keys(zdate).length;
    zdate = zdate[msize - 1];
    zdate = zdate.replace(/'/g, ' ');
    $('#last_date_11').html(" " + zdate);


    function hospitalFilter(gen_data, icu_data,vacancy_dates) {
        // Hospital Beds Trend
        Highcharts.chart('hospital_beds_trend', {
            chart: {

                style: {
                    fontFamily: 'SolaimanLipi'
                }
            },
            title: {
                text: ''
            },

            subtitle: {
                text: ''
            },

            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                itemStyle: {
                    fontSize: "16px",
                    fontWeight: "normal"
                }
            },

            credits: {
                enabled: false
            },

            xAxis: {
                categories: vacancy_dates,
                endOnTick: true,
                showLastLabel: true,
                labels: {
                    formatter: function () {
                        return this.axis.categories[Math.min(this.pos, this.axis.categories.length - 1)];
                    }
                }
            },
            tooltip: {
                formatter: function () {
                    return `${this.series.name}: <b>${englishToBangla(this.y)}%</b>`;
                }
            },
            yAxis: {
                title: {
                    text: 'খালি শয্যা সংখ্যার শতকরা হার',
                    style: {
                        fontSize: 18,
                        fontFamily: 'SolaimanLipi'
                    }
                },
                labels: {
                    formatter: function () {
                        return englishToBangla(this.value) + '%';
                    }
                },
                max:100,
            },

            plotOptions: {
                series: {
                    fillOpacity: 0
                }
            },


            colors: ['black', '#f44336'],
            series: [{
                name: 'সাধারণ শয্যা',
                data: gen_data,
                type: 'area',
                marker: {symbol: 'circle'}

            },
                {
                    name: 'আইসিইউ শয্যা',
                    data: icu_data,
                    type: 'area',
                    marker: {symbol: 'circle'}

                }],
        });
    }

    $.ajax({
        url: '{{url("/")}}/get-hospital-name',
        type: 'GET',
        data: {},
        success: function (data) {
            var option = '<option value="All">সারা দেশ</option>';
            option+= '<option value="Dhaka">ঢাকা শহর</option>';
            option+= '<option value="Chittagong">চট্টগ্রাম শহর</option>';
            option+='<option value="Others">অন্যান্য</option>';

            $.each(data, function (a, b) {
             option = option + '<option value="' + b.name + '">' + b.name_bn + '</option>';
            });

            $('#hospital_filter').empty();
            $('#hospital_filter').append(option);
            $('#hospital_filter').select2();

            $('#hospital_filter').val('All').trigger('change');

        },
        error: function (err) {
            console.log(err);
        }
    });

    $("#hospital_filter").on('change', function () {

        var text = $("#hospital_filter option:selected").text();

        $.ajax({
            url: '{{url("/")}}/get-hospital-data',
            type: 'GET',
            data: {hospital: this.value,text:text},
            success: function (data) {

                var gen_data = new Array();
                var icu_data = new Array();
                var vecancy_dates = new Array();
                var options = {month: 'long', day: 'numeric'};
                $.each(data, function (a, b) {
                    gen_data.push(parseFloat(b.GeneralBedVacancyRate));
                    icu_data.push(parseFloat(b.ICUVacancyRate));
                    vecancy_dates.push(new Date(b.date).toLocaleDateString('bn',options));
                });
                hospitalFilter(gen_data, icu_data, vecancy_dates) ;
            },
            error: function (err) {
                console.log(err);
            }
        });
    });

   




</script>


</body>

</html>
