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


        #iframeData_1 {
            padding-left: -380px;
        }
        #iframeData_2 {
            padding-left: -380px;
        }
        #iframeData_3 {
            padding-left: -380px;
        }
        #iframeData_4 {
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

        .footer-logo {
            max-width: 38%;
            height: auto;
        }

        .modal-area {
            background: #fefeff;
            border: 1px solid #4caf50;
            min-width: 180px;
            clear: both;
            margin-left: 10%;
            padding: 10px;
            cursor: pointer;
        }

        .associator-img {
            max-width: 100%;
            height: 130px;
            width: 130px;
        }

        .associator-modal-close-btn {
            position: absolute;
            left: 92%;
            bottom: 91%;
            color: #fff;
        }

        /* Loader css start */
        .lds-dual-ring {
            display: inline-block;
            width: 80px;
            height: 80px;
        }

        .lds-dual-ring:after {
            content: " ";
            display: block;
            width: 64px;
            height: 64px;
            margin: 8px;
            border-radius: 50%;
            border: 6px solid #fff;
            border-color: #fff transparent #fff transparent;
            animation: lds-dual-ring 1.2s linear infinite;
        }

        @keyframes lds-dual-ring {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        /* Loader css end */
        .bold{font-weight: bold;}
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
                                    class="ti-dashboard"></i><span>জাতীয় ড্যাশবোর্ড 1</span></a>
                        </li>

                        <li class="active">
                            <a href="{{route('xpm.dashboard')}}"><i
                                    class=""></i><span>এডুকেশন</span></a>
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
                <div class="col-md-12 col-sm-12">
                    <div class="breadcrumbs-area">
                        <ul class="breadcrumbs">
                            <a href="#scroll_daily_affected">
                                <li><span class="bullet-point"></span> <span>দৈনিক আক্রান্তের সংখ্যা </span></li>
                            </a>
                            <a href="#scroll_daily_affected_area_wise">
                                <li><span class="bullet-point"></span>
                                    <span>অঞ্চল-ভিত্তিক দৈনিক আক্রান্তের সংখ্যা</span>
                                </li>
                            </a>
                            <a href="#scroll_test_status">
                                <li><span class="bullet-point"></span> <span>পরীক্ষা পরিস্থিতি</span></li>
                            </a>
                            <a href="#scroll_daily_risk_dist_wise_test_positive">
                                <li><span class="bullet-point"></span> <span>টেস্ট পজিটিভিটি রেটের ভিত্তিতে জেলা পর্যায়ে ঝুঁকি বিশ্লেষণ </span>
                                </li>
                            </a>
                            <a href="#scroll_daily_test_dhaka_district">
                                <li><span class="bullet-point"></span>
                                    <span>ঢাকা জেলার দৈনিক টেস্ট পজিটিভিটি রেট </span>
                                </li>
                            </a>

                            <a href="#scroll_daily_last_4weeks_risk">
                                <li><span class="bullet-point"></span> <span>গত ৪ সপ্তাহের ঝুঁকি বিবেচনায় দেশের ৬৪টি জেলার তুলনামূলক অবস্থান </span>
                                </li>
                            </a>
                            <a href="#scroll_daily_age_wise_affect_death">
                                <li><span class="bullet-point"></span>
                                    <span>বয়স-ভিত্তিক আক্রান্ত ও মৃত্যু সংখ্যার তুলনা </span></li>
                            </a>
                            <a href="#scroll_daily_covid_hospital_storage_and_usage">
                                <li><span class="bullet-point"></span>
                                    <span>কোভিড হাসপাতালসমূহের ধারণ ক্ষমতা ও ব্যবহার </span></li>
                            </a>
                            <a href="#scroll_daily_south_asian_countries_differentiation">
                                <li><span class="bullet-point"></span>
                                    <span>দক্ষিণ এশিয়ার দেশগুলোতে পরীক্ষার তুলনা </span>
                                </li>
                            </a>
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
                            <div style="float: right">
                                <h4 class="header-title pb-1">সর্বমোট পরীক্ষা</h4>
                                <div style="font-size: 33px; color: #ff793c; margin-top: -15px">
                                    {!! isset($total_tested) ? formatInBanglaStyle($total_tested) : ' ' !!}
                                </div>
                            </div>
                            <h4 class="header-title pb-1">গত ১৪ দিনে পরীক্ষা</h4>
                            <div style="font-size: 55px;" class="the-number">
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
                            <div style="float: right">
                                <h4 class="header-title pb-1">সর্বমোট আক্রান্ত</h4>
                                <div style="font-size: 33px; color: #ff793c; margin-top: -15px">
                                    {!! isset($total_infected) ? formatInBanglaStyle($total_infected) : ' ' !!}
                                </div>
                            </div>
                            <h4 class="header-title pb-1">গত ১৪ দিনে আক্রান্ত</h4>
                            <div style="font-size: 55px;" class="the-number">
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
                            <div style="float: right">
                                <h4 class="header-title pb-1">সর্বমোট মৃত্যু</h4>
                                <div style="font-size: 33px; color: #ff793c; margin-top: -15px">
                                    {!! isset($total_death) ? formatInBanglaStyle($total_death) : ' ' !!}
                                </div>
                            </div>
                            <h4 class="header-title pb-1">গত ১৪ দিনে মৃত্যু</h4>
                            <div style="font-size: 55px;" class="the-number">
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
                <div class="col-lg-12 mt-4" id="scroll_daily_affected">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="invoice-head title-bg-style">
                                <div class="row">
                                    <div class="iv-left col-6 ">
                                        <h2>দৈনিক আক্রান্তের সংখ্যা</h2>
                                    </div>
                                    <div class="iv-right offset-md-4 col-2 " style="display: none">
                                        <select name="" id="daily-infected-total-select" class="form-control">
                                            <option value="">তথ্যসূত্র বাছাই করুন</option>
                                            <option value="MIS-DGHS">MIS-DGHS</option>
                                            <option value="IEDCR">IEDCR</option>
                                        </select>
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
                                                <br>তথ্য সূত্র: MIS-DGHS, IEDCR
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
                <div class="col-lg-12 mt-4" id="scroll_daily_affected_area_wise">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="invoice-head title-bg-style">
                                <div class="row">
                                    <div class="iv-left col-6 ">
                                        <h2>
                                            অঞ্চল-ভিত্তিক দৈনিক আক্রান্তের সংখ্যা
                                        </h2>
                                    </div>
                                    <div class="iv-right offset-md-4 col-2 " style="display: none">
                                        <select name="" id="area-wise-infected-total" class="form-control">
                                            <option value="">তথ্যসূত্র বাছাই করুন</option>
                                            <option value="MIS-DGHS">MIS-DGHS</option>
                                            <option value="IEDCR">IEDCR</option>
                                        </select>

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
                                            <br>তথ্য সূত্র: MIS-DGHS, IEDCR
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
                <div class="col-lg-12 mt-4" id="scroll_test_status">
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
                                <div class="col-lg-12 mt-2">
                                    <h4 style="height: 150px; margin-bottom: -85px;" id="special_word_5" class="header-title ">
                                        {!! $des_4->component_name_beng ?? '' !!}
                                    </h4>
                                </div>
                                <div class="col-lg-6 mt-2">
                                    <div class="card">
                                        <div class="card-body purple-style info-style">

                                            {{--<h4 style="height: 150px;" id="special_word_5" class="header-title ">--}}
                                            {{--{!! $des_4->component_name_beng ?? '' !!}--}}
                                            {{--</h4>--}}

                                            <div id="ambarchart4"></div>
                                            <div class="alert mt-3 p-0 text-justify" role="alert">
                                                <strong>বর্ণনা:</strong>
                                                {!! $des_4->description_beng ?? '' !!}
                                            </div>
                                            <p class="footer-note">
                                                <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                                <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_5"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-lg-6 mt-2">
                                    <div class="card">
                                        <div class="card-body purple-style info-style">

                                            {{--<h4 style="height: 150px;" id="special_word_6" class="header-title ">--}}
                                            {{--{!! $des_5->component_name_beng ?? '' !!}--}}
                                            {{--</h4>--}}

                                            <div id="ambarchart1"></div>
                                            <div class="alert mt-3 p-0 text-justify" role="alert">
                                                <strong>বর্ণনা:</strong>
                                                {!! $des_5->description_beng ?? '' !!}
                                            </div>
                                            <p class="footer-note">
                                                <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                                <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_6"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="invoice-head title-bg-style" id="scroll_daily_risk_dist_wise_test_positive">
                                <div class="row">
                                    <div class="iv-left col-6 ">
                                        <h2>
                                            টেস্ট পজিটিভিটি রেটের ভিত্তিতে জেলা পর্যায়ে ঝুঁকি বিশ্লেষণ
                                        </h2>
                                    </div>
                                    {{--<div class="iv-right offset-md-4 col-2 ">
                                        <select name="" id="daily-infected-total-select" class="form-control">
                                            <option value="">তথ্যসূত্র বাছাই করুন</option>
                                            <option value="MIS-DGHS">MIS-DGHS</option>
                                            <option value="IEDCR">IEDCR</option>
                                        </select>
                                    </div>--}}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body info-style">
                                            <h4 style="margin-top: 27px;" id="special_word_7" class="header-title ">
                                                {!! $des_6->component_name_beng ?? '' !!}
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-8"></div>
                                <div class="col-lg-4">
                                    <div class="tab-zone tab-widget tabSuppressVizTooltipsAndOverlays tabZone-color" id="tabZoneId8" style="z-index: 16; width: 316px; height: 95px; top: 78px; left: 383px;"><div class="tab-zone-margin" style="inset: 4px; position: absolute; background-color: rgb(245, 237, 220); border-width: 1px; border-style: dashed; border-color: rgb(0, 0, 0);"><div class="tab-zone-padding" style="inset: 0px; position: absolute; border-width: 1px; border-color: rgb(172, 168, 153); border-style: none; padding: 0px;"><div class="tabLegendPanel tab-widget" style="position: relative; user-select: none; -webkit-tap-highlight-color: transparent; cursor: default; width: 306px; height: 85px;" aria-label="Legend: " id="tableau_base_legend_color_q_Sheet%201" tabindex="-1" role="listbox" aria-multiselectable="true"><div class="tabLegendBox"><h3 class="tabLegendTitle" style="height: 0px;"></h3><div class="tabLegendContentHolder" style="overflow: hidden auto; width: 306px; height: 85px;"><div class="tabLegendColumnHolder" style="white-space:nowrap"><span class="tabLegendItemColumn" style="width: 306px;"><div class="tabLegendItem" tabindex="0" role="option" aria-selected="false" style="width: 306px; height: 20px;"><span class="tabLegendItemSwatchHolder" style="width: 20px; height: 20px; display: inline-grid;"><span class="tabLegendItemSwatch" id="rgb(255,51,51)" style="border-width: 1px; border-style: solid; width: 12px; height: 12px; top: 3px; left: 3px; background-color: rgb(255, 51, 51); border-color: rgb(104, 104, 104);"></span></span><span class="tabLegendItemLabelHolder" style="left: 22px; top: 2px; width: 283px; bottom: 0px; text-align: left;"><span class="tabLegendItemLabel" style="font-size: 10pt; color: rgb(0, 0, 0); font-family: &quot;Siyam Rupali&quot;; white-space: nowrap;">লাল (টেস্ট পজিটিভিটি রেট &gt; ১০%)</span></span></div><div class="tabLegendItem" tabindex="-1" role="option" aria-selected="false" style="width: 306px; height: 20px;"><span class="tabLegendItemSwatchHolder" style="width: 20px; height: 20px; display: inline-grid;"><span class="tabLegendItemSwatch" id="rgb(255,187,51)" style="border-width: 1px; border-style: solid; width: 12px; height: 12px; top: 3px; left: 3px; background-color: rgb(255, 187, 51); border-color: rgb(104, 104, 104);"></span></span><span class="tabLegendItemLabelHolder" style="left: 22px; top: 2px; width: 283px; bottom: 0px; text-align: left;"><span class="tabLegendItemLabel" style="font-size: 10pt; color: rgb(0, 0, 0); font-family: &quot;Siyam Rupali&quot;; white-space: nowrap;">কমলা (টেস্ট পজিটিভিটি রেট ৫% - ১০%)</span></span></div><div class="tabLegendItem" tabindex="-1" role="option" aria-selected="false" style="width: 306px; height: 20px;"><span class="tabLegendItemSwatchHolder" style="width: 20px; height: 20px; display: inline-grid;"><span class="tabLegendItemSwatch" id="rgb(255,255,51)" style="border-width: 1px; border-style: solid; width: 12px; height: 12px; top: 3px; left: 3px; background-color: rgb(255, 255, 51); border-color: rgb(104, 104, 104);"></span></span><span class="tabLegendItemLabelHolder" style="left: 22px; top: 2px; width: 283px; bottom: 0px; text-align: left;"><span class="tabLegendItemLabel" style="font-size: 10pt; color: rgb(0, 0, 0); font-family: &quot;Siyam Rupali&quot;; white-space: nowrap;">হলুদ (টেস্ট পজিটিভিটি রেট &lt; ৫%)</span></span></div><div class="tabLegendItem" tabindex="-1" role="option" aria-selected="false" style="width: 306px; height: 20px;"><span class="tabLegendItemSwatchHolder" style="width: 20px; height: 20px; display: inline-grid;"><span class="tabLegendItemSwatch" id="rgb(200,192,189)" style="border-width: 1px; border-style: solid; width: 12px; height: 12px; top: 3px; left: 3px; background-color: rgb(200, 192, 189); border-color: rgb(104, 104, 104);"></span></span><span class="tabLegendItemLabelHolder" style="left: 22px; top: 2px; width: 283px; bottom: 0px; text-align: left;"><span class="tabLegendItemLabel" style="font-size: 10pt; color: rgb(0, 0, 0); font-family: &quot;Siyam Rupali&quot;; white-space: nowrap;">ধূসর (টেস্টের সংখ্যা &lt; ২০০)</span></span></div></span></div></div><div class="tabCatLegendScroll" style="display: none;"><div class="tabCatLegendScrollButtonHolder"><span class="tabCatLegendScrollPrev tabCatLegendScrollLeft tabIterButtonDisabled" style="width: 12px; height: 12px; line-height: 12px;"></span><span class="tabCatLegendScrollNext tabCatLegendScrollRight tabIterButtonDisabled" style="width: 12px; height: 12px; line-height: 12px;"></span></div></div></div><div class="tabLegendTitleControls" style="background-color: white; top: 0px; right: 0px;"><div class="tabLegendHighlighterButton tabLegendTitleControlsButtons tab-widget tabHighlightEnabled" title="Highlight Selected Items" style="user-select: none; -webkit-tap-highlight-color: transparent; display: none;"><div class="tabLegendHighlighterButtonIcon"></div></div><div class="tabLegendContextMenuButton tabLegendTitleControlsButtons" style="display: none;"><div class="tabLegendContextMenuButtonIcon"></div></div></div></div></div></div></div>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="col-lg-3">
                                    <div id="iframeData_1">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div id="iframeData_2"></div>
                                </div>
                                <div class="col-lg-3">
                                    <div id="iframeData_3"></div>
                                </div>
                                <div class="col-lg-3">
                                    <div id="iframeData_4"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body info-style">
                                            <div class="alert mt-3 p-0 text-justify" role="alert">
                                                <strong>বর্ণনা:</strong>

                                                {!!  $des_6->description_beng ?? '' !!}
                                            </div>
                                            <p class="footer-note">
                                                <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 mt-2" id="scroll_daily_test_dhaka_district">
                                    <div class="invoice-head title-bg-style">
                                        <div class="row">
                                            <div class="iv-left col-12 ">
                                                <h2 class="positive-dhaka-rate-heading">
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

                                                <div class="col-md-3">
                                                    <label>বিভাগ </label>
                                                    <select name="division[]" id="division_dhaka_rate" multiple
                                                            class="select2 form-control btn-outline-primary">

                                                        @foreach($division_list as $division)
                                                            <option value="{!! $division !!}"
                                                                    class="b1">{!! en2bnTranslation($division) !!} </option>
                                                        @endforeach
                                                    </select>
                                                </div >
                                                <div class="col-md-3" >
                                                    <label>জেলা</label>
                                                    <select name="district[]" id="district_dhaka_rate" multiple
                                                            class="select2 form-control btn-outline-primary">
                                                        @foreach($district_list as $district)
                                                            <option value="{!! $district->district !!}"
                                                                    class="b1">{!! en2bnTranslation($district->district) !!} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-sm mt-4 mx-auto">
                                                    <button id="filter-dhaka-rate"
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
                                                <br>
                                                <br>
                                                <br>

                                                <hr>

                                                <div id="dhaka_rate">

                                                </div>

                                                <div class="alert mt-3 p-0 text-justify" role="alert">
                                                    <strong>বর্ণনা:</strong>
                                                    {!!  $des_11->description_beng ?? '' !!}

                                                </div>
                                                <p class="footer-note">
                                                    <br>তথ্য সূত্র: MIS-DGHS, IEDCR
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

                <div class="col-lg-12 mt-2" id="scroll_daily_last_4weeks_risk">
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
(select district,test_positivity from last_14_days_test_positivity_district_iedcr where test_positivity>=12) as l
inner join
(select district,test_positivity from recent_14_days_test_positivity_district_iedcr where test_positivity>=12 and total_tests>200) as r
using(district) ORDER BY r.test_positivity DESC");
                                    $medium_to_high_table_contentData = \Illuminate\Support\Facades\DB::select("select l.district as 'district',l.test_positivity as 'last_test_positivity',
r.test_positivity as 'recent_test_positivity' from
(select district,test_positivity from last_14_days_test_positivity_district_iedcr where test_positivity>=5 and test_positivity<12) as l
inner join
(select district,test_positivity from recent_14_days_test_positivity_district_iedcr where test_positivity>=12 and total_tests>200) as r
using(district) ORDER BY r.test_positivity DESC");

                                    $low_to_high_table_contentData = \Illuminate\Support\Facades\DB::select("select l.district as 'district',l.test_positivity as 'last_test_positivity',
r.test_positivity as 'recent_test_positivity' from
(select district,test_positivity from last_14_days_test_positivity_district_iedcr where test_positivity<5) as l
inner join
(select district,test_positivity from recent_14_days_test_positivity_district_iedcr where test_positivity>=12 and total_tests>200) as r
using(district) ORDER BY r.test_positivity DESC");
                                    $high_to_medium_table_contentData = \Illuminate\Support\Facades\DB::select("select l.district as 'district',l.test_positivity as 'last_test_positivity',
r.test_positivity as 'recent_test_positivity' from
(select district,test_positivity from last_14_days_test_positivity_district_iedcr where test_positivity>=12) as l
inner join
(select district,test_positivity from recent_14_days_test_positivity_district_iedcr where test_positivity>=5 and test_positivity<12 and total_tests>200) as r
using(district) ORDER BY r.test_positivity DESC");
                                    $medium_to_medium_table_contentData = \Illuminate\Support\Facades\DB::select("select l.district as 'district',l.test_positivity as 'last_test_positivity',
r.test_positivity as 'recent_test_positivity' from
(select district,test_positivity from last_14_days_test_positivity_district_iedcr where test_positivity>=5 and test_positivity<12) as l
inner join
(select district,test_positivity from recent_14_days_test_positivity_district_iedcr where test_positivity>=5 and test_positivity<12 and total_tests>200) as r
using(district) ORDER BY r.test_positivity DESC");
                                    $low_to_medium_table_contentData = \Illuminate\Support\Facades\DB::select("select l.district as 'district',l.test_positivity as 'last_test_positivity',
r.test_positivity as 'recent_test_positivity' from
(select district,test_positivity from last_14_days_test_positivity_district_iedcr where test_positivity<5) as l
inner join
(select district,test_positivity from recent_14_days_test_positivity_district_iedcr where test_positivity>=5 and test_positivity<12 and total_tests>200) as r
using(district) ORDER BY r.test_positivity DESC");
                                    $high_to_low_table_contentData = \Illuminate\Support\Facades\DB::select("select l.district as 'district',l.test_positivity as 'last_test_positivity',
r.test_positivity as 'recent_test_positivity' from
(select district,test_positivity from last_14_days_test_positivity_district_iedcr where test_positivity>=12) as l
inner join
(select district,test_positivity from recent_14_days_test_positivity_district_iedcr where test_positivity<5 AND total_tests>200) as r
using(district) ORDER BY r.test_positivity DESC");
                                    $medium_to_low_table_contentData = \Illuminate\Support\Facades\DB::select("select l.district as 'district',l.test_positivity as 'last_test_positivity',
r.test_positivity as 'recent_test_positivity' from
(select district,test_positivity from last_14_days_test_positivity_district_iedcr where test_positivity>=5 and test_positivity<12) as l
inner join
(select district,test_positivity from recent_14_days_test_positivity_district_iedcr where test_positivity<5 and total_tests>200) as r
using(district) ORDER BY r.test_positivity DESC");
                                    $low_to_low_table_contentData = \Illuminate\Support\Facades\DB::select(" select l.district as 'district',l.test_positivity as 'last_test_positivity',
    r.test_positivity as 'recent_test_positivity'  from
    (select district, test_positivity from last_14_days_test_positivity_district_iedcr where test_positivity<5) as l
    inner join
    (select district, test_positivity from recent_14_days_test_positivity_district_iedcr where test_positivity<5
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
                                                        style="transform: rotate(-90deg);
    width: 396px;
    margin-left: -144px;
    margin-top: 380px;
    font-size: 23px;"
                                                        class="fs-20 b1">
                                                        <br>বিগত ৩য় ও ৪র্থ সপ্তাহ: ( {{$last_week_end}} - {{$last_week_start}} )
                                                    </div>
                                                </div>
                                                <div class="col-xl-11 col-md-11">
                                                    <div class="row">

                                                        <div class="col-xl-6">
                                                            <div class="slidecontainer">
                                                                <p>গত ১৪ দিনে পরীক্ষার সংখ্যা: <span
                                                                        id="demo">{!! convertEnglishDigitToBangla('200') !!}</span>
                                                                    এর কম জেলাসমূহ বাদ দেওয়া হয়েছে।
                                                                </p>
                                                                <input type="range" min="50" max="300" value="200"
                                                                       class="slider" id="myRange">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">

                                                            <p> সর্বোচ্চ ও সর্বনিম্ন টেস্ট পসিটিভিটি রেটের পরিসীমা:
                                                                <span
                                                                    id="ex6SliderVal">{!! convertEnglishDigitToBangla('5:10') !!}</span>
                                                            </p>
                                                            <input style="width: 100%;" id="ex12c" type="text"><br/>

                                                        </div>
                                                    </div>
                                                    <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar mt-4">
                                                        <table
                                                            class="table table-bordered table-vcenter text-nowrap  b1"
                                                            style="width: 100%; min-width: 400px;">
                                                            <thead>
                                                            <tr>
                                                                <td colspan="4" class="text-center fs-18" style="font-size: 26px"><span
                                                                        class="text-danger">আজ {{ $today }}</span>, বিগত ২ সপ্তাহ ( {{$first_week_end}} - {{$first_week_start}} )
                                                                </td>
                                                            </tr>
                                                            </thead>
                                                            <tbody class="fs-20 text-center risk_matrix">
                                                            <tr>
                                                                <td></td>
                                                                <td class="bold">উচ্চ ঝুঁকিপূর্ণ</td>
                                                                <td class="bold">মধ্যম ঝুঁকিপূর্ণ</td>
                                                                <td class="bold">কম ঝুঁকিপূর্ণ</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold" width="10%">উচ্চ ঝুঁকিপূর্ণ</td>
                                                                <td style="cursor: pointer;background: #cc0033; color: white; width: 30%"
                                                                    class="high_to_high_modal_click"
                                                                    data-target="#modaldemo1"
                                                                    data-toggle="modal">অপরিবর্তিত উচ্চ ঝুঁকি <br> {{ convertEnglishDigitToBangla($rm_7->high_to_high)}} টি জেলা</span>
                                                                </td>
                                                                <td style="cursor: pointer;background: #FFAF74; color: white; width: 30%;"
                                                                    class="high_to_medium_modal_click"
                                                                    data-target="#modaldemo1"
                                                                    data-toggle="modal">{{ convertEnglishDigitToBangla($rm_8->high_to_medium)}} টি জেলা
                                                                </td>
                                                                <td style="cursor: pointer;background: #92C47D; color: white; width:  30%;"
                                                                    class="high_to_low_modal_click"
                                                                    data-target="#modaldemo1"
                                                                    data-toggle="modal">   {{ convertEnglishDigitToBangla($rm_9->high_to_low)}} টি জেলা
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold">মধ্যম ঝুঁকিপূর্ণ</td>
                                                                <td style="background: #E13531; cursor: pointer; color: white"
                                                                    class="medium_to_high_modal_click"
                                                                    data-target="#modaldemo1"
                                                                    data-toggle="modal">{{ convertEnglishDigitToBangla($rm_4->medium_to_high) }} টি জেলা
                                                                </td>
                                                                <td style="background: #FC842D; cursor: pointer; color: white"
                                                                    class="medium_to_medium_modal_click"
                                                                    data-target="#modaldemo1"
                                                                    data-toggle="modal">{{ convertEnglishDigitToBangla($rm_5->medium_to_medium) }} টি জেলা
                                                                </td>
                                                                <td style="cursor: pointer;background: #499227; color: white"
                                                                    class="medium_to_low_modal_click"
                                                                    data-target="#modaldemo1"
                                                                    data-toggle="modal"> {{ convertEnglishDigitToBangla($rm_6->medium_to_low) }} টি জেলা
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold">কম ঝুঁকিপূর্ণ</td>
                                                                <td style="background: #FD694D; cursor: pointer; color: white"
                                                                    class="low_to_high_modal_click"
                                                                    data-target="#modaldemo1"
                                                                    data-toggle="modal">{{ convertEnglishDigitToBangla($rm_1->low_to_high) }} টি জেলা
                                                                </td>
                                                                <td style="background: #FC6E00; cursor: pointer;text-decoration: none; color: white"
                                                                    class="low_to_medium_modal_click"
                                                                    data-target="#modaldemo1"
                                                                    data-toggle="modal">{{ convertEnglishDigitToBangla($rm_2->low_to_medium) }} টি জেলা

                                                                </td>
                                                                <td style="background: #37761D; cursor: pointer; color: white"
                                                                    class="low_to_low_modal_click"
                                                                    data-target="#modaldemo1"
                                                                    data-toggle="modal">{{ convertEnglishDigitToBangla($rm_3->low_to_low) }} টি জেলা
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
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
                                                            <br>তথ্য সূত্র: MIS-DGHS, IEDCR
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

                <div class="col-lg-12 mt-2" id="scroll_daily_age_wise_affect_death">
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
                                                                    <br>তথ্য সূত্র: MIS-DGHS, IEDCR
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
                <div class="col-lg-12 mt-2" id="scroll_daily_covid_hospital_storage_and_usage">


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
                                                    <br>তথ্য সূত্র: MIS-DGHS, IEDCR
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
                                                            <th>
                                                                {{ convertEnglishDigitToBangla(number_format((float)(100-$nation_hospital->percent_General_Beds_Occupied), 2, '.', '')) }}
                                                                %
                                                            </th>
                                                            <td>{{ convertEnglishDigitToBangla($nation_hospital->Admitted_ICU_Beds) }}</td>
                                                            <th>{{ convertEnglishDigitToBangla($nation_hospital->ICU_Beds - $nation_hospital->Admitted_ICU_Beds) }}</th>
                                                            <th>
                                                                {{ convertEnglishDigitToBangla(number_format((float)(100-$nation_hospital->percent_ICU_Beds_Occupied), 2, '.', '')) }}
                                                                %
                                                            </th>

                                                        </tr>
                                                        <tr>
                                                            <td>ঢাকা শহর</td>
                                                            <td>{{ convertEnglishDigitToBangla($dhaka_hospital->Admitted_General_Beds) }}</td>
                                                            <th>{{ convertEnglishDigitToBangla($dhaka_hospital->General_Beds - $dhaka_hospital->Admitted_General_Beds)}}</th>
                                                            <th>
                                                                {{ convertEnglishDigitToBangla(number_format((float)(100-$dhaka_hospital->percent_General_Beds_Occupied), 2, '.', '')) }}
                                                                %
                                                            </th>
                                                            <td>{{ convertEnglishDigitToBangla($dhaka_hospital->Admitted_ICU_Beds) }}</td>
                                                            <th>{{ convertEnglishDigitToBangla($dhaka_hospital->ICU_Beds - $dhaka_hospital->Admitted_ICU_Beds) }}</th>
                                                            <th>
                                                                {{ convertEnglishDigitToBangla(number_format((float)(100-$dhaka_hospital->percent_ICU_Beds_Occupied), 2, '.', '')) }}
                                                                %
                                                            </th>

                                                        </tr>
                                                        <tr>
                                                            <td>চট্টগ্রাম শহর</td>
                                                            <td>{{ convertEnglishDigitToBangla($ctg_hospital->Admitted_General_Beds) }}</td>
                                                            <th>{{ convertEnglishDigitToBangla($ctg_hospital->General_Beds - $ctg_hospital->Admitted_General_Beds) }}</th>
                                                            <th>

                                                                {{ convertEnglishDigitToBangla(number_format((float)(100-$ctg_hospital->percent_General_Beds_Occupied), 2, '.', '')) }}
                                                                %
                                                            </th>
                                                            <td>{{ convertEnglishDigitToBangla($ctg_hospital->Admitted_ICU_Beds) }}</td>
                                                            <th>{{ convertEnglishDigitToBangla($ctg_hospital->ICU_Beds - $ctg_hospital->Admitted_ICU_Beds) }}</th>
                                                            <th>

                                                                {{ convertEnglishDigitToBangla(number_format((float)(100-$ctg_hospital->percent_ICU_Beds_Occupied), 2, '.', '')) }}
                                                                %
                                                            </th>


                                                        </tr>

                                                        <tr>
                                                            <td>অন্যান্য</td>
                                                            <td>{{ convertEnglishDigitToBangla($others_admitted) }}</td>
                                                            <th>{{ convertEnglishDigitToBangla($others_empty) }}</th>
                                                            <th>{{ convertEnglishDigitToBangla(number_format((float)(100-$others_gen_rate), 2, '.', '')) }}
                                                                %
                                                            </th>
                                                            <td>{{ convertEnglishDigitToBangla($others_admitted_icu) }}</td>
                                                            <th>{{ convertEnglishDigitToBangla($others_empty_icu) }}</th>
                                                            <th>{{ convertEnglishDigitToBangla(number_format((float)(100-$others_icu_rate), 2, '.', '')) }}
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
                                                    <div id="hospital_beds_trend"></div>
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
                <!-- Statistics area start -->
                <div class="col-lg-12 mt-4" id="scroll_daily_south_asian_countries_differentiation">

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
            </div>
        </div>
    </div>

    <!-- main content area end -->
    <!-- footer area start-->
    <footer>
        <div class="footer-area" style="font-size: 16px">
            <p>
                <div class="d-flex justify-content-center bd-highlight mb-3">


                    <div class="p-3">
                        <div class="modal-area" title="দেখতে ক্লিক করুন" data-toggle="modal"
                             data-target=".associates-modal">
            <p style="
                            margin-top: 9px;
                            font-size: 20px;
                        ">সহযোগিতায়</p>


        </div>
</div>
<div class="p-8" style="margin-right: 410px"><img src="pm/images/icon/footer-logo.png" class="footer-logo" alt="logo"
                                                  style="margin-right: -22%">
</div>
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
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalContent">
            </div>
        </div>
    </div>
</div>

<!--------Associates Modal Start--------->
<div class="modal fade associates-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-white text-center"
                 style="background: #04984A; color: #fff; display: block; width: 100%;">
                <h3 class="text-center">কোভিড – ১৯ ন্যাশনাল ড্যাশবোর্ড</h3>
                <h5 class="modal-title text-center mt-2 mb-2 text-white">সহযোগিতায়</h5>
                <button type="button" class="close associator-modal-close-btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="overflow-y: scroll; height: 480px">

                <div class="row">
                    <div class="col-md-12 text-center mt-2">
                        <h3>উপদেষ্টা</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-4 text-center">

                            <img src="pm/images/collaborator/sebrina-final.png" class="" style="max-width: 100%;
    height: 130px;" alt="">
                            <p> ড. মীরজাদী সেব্রিনা ফ্লোরা
                            </p>
                            <p>অতিরিক্ত মহাপরিচালক (পরিকল্পনা ও উন্নয়ন),</p>
                            <p> স্বাস্থ্য অধিদপ্তর</p>
                        </div>
                        <div class="col-md-4 text-center">

                            <img src="pm/images/collaborator/dr_shams.l_arefin.jpg" class="associator-img" alt="">
                            <p> ড. শামস্ এল আরেফিন</p>
                            <p> ঊর্ধ্বতন পরিচালক,</p>
                            <p> মাতৃ ও শিশু স্বাস্থ্য বিভাগ, আইসিডিডিআরবি</p>
                        </div>
                        <div class="col-md-4 text-center">

                            <img src="pm/images/collaborator/anir-chowdhury.jpeg" class="associator-img" alt="">
                            <p>আনীর চৌধুরী
                            </p>
                            <p>পলিসি এডভাইজর ,</p>
                            <p>এটুআই প্রোগ্রাম</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center mt-5">
                        <h3>বিশেষজ্ঞ মতামত</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="pm/images/collaborator/dr_md_habibur_rahman.jpg" class="associator-img"
                                     alt="">
                                <p> ড. মো: হাবিবুর রহমান</p>
                                <p> পরিচালক</p>
                                <p>এমআইএস, ডিজিএইচএস</p>
                            </div>

                            <div class="col-md-4">
                                <img src="pm/images/collaborator/engr_sukhendra_shekhor_roy.jpg" class="associator-img"
                                     alt="">
                                <p> ইঞ্জি. সুখেন্দ্র শেখর রায়</p>
                                <p> সিনিয়র সিস্টেম অ্যনালিস্ট</p>
                                <p>এমআইএস, ডিজিএইচএস</p>
                            </div>
                            <div class="col-md-4">
                                <img src="pm/images/collaborator/dr_aysha_sania.jpg" class="associator-img" alt="">
                                <p>ড. আয়েশা সানিয়া</p>
                                <p> রিসার্চ সায়েন্টিস্ট</p>
                                <p>কলাম্বিয়া বিশ্ববিদ্যালয়,যুক্তরাষ্ট্র</p>
                            </div>
                            <div class="col-md-4">
                                <img src="pm/images/collaborator/dr_mahbubur_rahman.jpg" class="associator-img" alt="">
                                <p>ড. মাহবুবুর রহমান</p>
                                <p> সহকারী অধ্যাপক</p>
                                <p>আইইডিসিআর</p>
                            </div>
                            <div class="col-md-4">
                                <img src="pm/images/collaborator/dr_mallik_masum_billah.jpg" class="associator-img"
                                     alt="">
                                <p>ড. মল্লিক মাসুম বিল্লাহ</p>
                                <p>ঊর্ধ্বতন এফইটিপি উপদেষ্টা</p>
                                <p>আইইডিসিআর</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center mt-5">
                        <div class="row">
                            <div class="col-md-4">
                                <h3>ডাটা সায়েন্টিস্ট</h3>
                                <img src="pm/images/collaborator/tamanna_urmi.jpg" class="associator-img"
                                     alt="">
                                <p>তামান্না উর্মি</p>
                                <p>ন্যাশনাল ডাটা সায়েন্স কনসালটেন্ট</p>
                                <p>এটুআই</p>
                            </div>

                            <div class="col-md-4">
                                <h3 style="font-size: 32px"> পলিসি মতামত</h3>
                                <img src="pm/images/collaborator/dr_dewan_mohammad_humayon_kabir.jpg"
                                     class="associator-img"
                                     alt="" style="width: 200px;
    height: 200px;">
                                <p>ড. দেওয়ান মুহাম্মদ হুমায়ূন কবীর
                                </p>
                                <p> যুগ্মসচিব, ই-গভর্নেন্স অধিশাখা
                                    মন্ত্রিপরিষদ বিভাগ<br>
                                    এবং<br>
                                    যুগ্ম-প্রকল্প পরিচালক<br>
                                    এটুআই প্রোগ্রাম

                                </p>
                            </div>

                            <div class="col-md-4">
                                <h3>তথ্যচিত্র বিশেষজ্ঞ</h3>
                                <img src="pm/images/collaborator/mir_sakib.jpg" class="associator-img"
                                     alt="">
                                <p>মীর সাকিব </p>
                                <p> সিইও, ক্র্যামস্টেক</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center mt-5">

                        <div class="row">
                            <div class="offset-md-2 col-md-4">
                                <h3>বাস্তবায়নে</h3>
                                <img src="pm/images/collaborator/a2i_project.png" style="height: 80px; max-width: 100%;"
                                     alt="">
                                <p>এটুআই প্রকল্প</p>
                            </div>

                            <div class="col-md-4">
                                <h3>কারিগরী সহযোগীতায়</h3>
                                <img src="pm/images/collaborator/e-generation.png" class="" alt="">
                                <p>ই-জেনারেশন প্রাইভেট লিমিটেড</p>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<!-- Small modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1"
     role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            ...
        </div>
    </div>
</div>
<!--------Associates Modal End--------->

{{-- Loader --}}
<div id="loading-sniper"
     style="z-index: 99999; position: fixed; height: 100vh;width: 100%;top: 0px; left: 0; right: 0; bottom: 0px; background: rgba(0,0,0,.4); display: none; overflow: hidden;">
    <div class="holder" style="width: 200px;height: 200px;position: relative; margin: 10% auto;">
        <img src="assets/images/loading.gif" style="width: 75px;margin: 34%;">
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
use Carbon\Carbon;use Illuminate\Support\Facades\DB;
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
    $test_arr_data = $testsVsCases['totalTestData'];
    $case_arr = explode(",", $testsVsCases['totalCase']);
    $mdate = $row->report_date;

    $mdata [] = [
        "date" => $row->report_date,
        "infected" => $row->infected_24_hrs,
        "avg" => $row->five_dayMovingAvgInfected,
        "total_infected" => $row1_left_trend_infected_data[$k],
        "tested" => $test_arr[$k],
        "tested_data" => $test_arr_data[$k],
        "case" => $case_arr[$k],

    ];
}
//dd($mdata);
//$xdata = array();
//$last_dates = explode(",", $forteen_day_infected['dateRange']);
//$last_dates = $forteen_day_infected['mdates'];
//$x = explode(",", $forteen_day_infected['total_infected']);
//$y = explode(",", $forteen_day_infected['total_test_positivity']);
//
//
//foreach ($last_dates as $k => $d) {
//    $xdata [] = [
//        "date" => $d,
//        "infected" => $x[$k],
//        "test_positive" => $y[$k],
//    ];
//    $xdate = $d;
//}
$infected = implode(",", $infected_arr);
$avg = implode(",", $avg_arr);
$ydata = [];

?>

<!-- Chart code -->
<!-- smooth scroll to several section of the page-->
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script>
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 400
    });
</script>
<style>
    #scrolltopBtn {
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: #48984b;
        color: white;
        cursor: pointer;
        padding: 10px;
        border-radius: 3px;
        display: none;
        margin-right: 10px;
    }

    #scrolltopBtn:hover {
        background-color: #555;
    }
    div#iframeData_1,
    div#iframeData_2,
    div#iframeData_3,
    div#iframeData_4{
        height: 300px;
    }
</style>
<a href="#root" id="scrolltopBtn">উপরে</a>

</body>
</html>
