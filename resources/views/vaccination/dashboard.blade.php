<!doctype html>
<html class="no-js" lang="bn-BD">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="pm/images/icon/favicon.ico" type="image/x-icon"/>
    <title>বাংলাদেশ (Bangladesh) টিকাদান কর্মসূচি | গণপ্রজাতন্ত্রী বাংলাদেশ সরকার | People's Republic of
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
            margin: 14px 0;
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
            margin: 14px 0;
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
            padding: 14px;
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
        .tabLegendItemSwatchHolder {
            margin-left: 15px;
        }
        .modal-content {
            width: 108% !important;
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
                                    class="ti-dashboard"></i><span>জাতীয় কোভিড-১৯</span></a>
                        </li>

                        <li class="active">
                            <a href="{{route('xpm.dashboard')}}"><i
                                    class=""></i><span>পরিস্থিতি</span></a>
                        </li>
                        <li class="active">
                            <a href="{{route('xpm.vaccination')}}"><i
                                    class=""></i><span>টিকাদান কর্মসূচি</span></a>
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
                                                        alt="logo"> কোভিড-১৯ জাতীয় টিকাদান কর্মসূচি</h1>
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
                                <li><span class="bullet-point"></span> <span>দৈনিক নিবন্ধনের সংখ্যা </span></li>
                            </a>
                            <a href="#scroll_daily_affected_area_wise">
                                <li><span class="bullet-point"></span>
                                    <span>অঞ্চল-ভিত্তিক দৈনিক ১ম ডোজ বিতরণের সংখ্যা</span>
                                </li>
                            </a>
                            <a href="#scroll_daily_affected_comparison">
                                <li><span class="bullet-point"></span>
                                    <span>দৈনিক  নিবন্ধকরণ ও বিতরণের সংখ্যার তুলনা</span>
                                </li>
                            </a>
                            <a href="#scroll_daily_affected_comparison_rate">
                                <li><span class="bullet-point"></span>
                                    <span>নিবন্ধকরণ এর বিবেচনায় বিতরণের হারের সাপ্তাহিক গড়</span>
                                </li>
                            </a>
                            {{-- <a href="#scroll_test_status">
                                <li><span class="bullet-point"></span> <span>পরীক্ষা পরিস্থিতি</span></li>
                            </a> --}}
                            <a href="#scroll_daily_risk_dist_wise_test_positive">
                                <li><span class="bullet-point"></span> <span>বিতরণের ভিত্তিতে জেলা পর্যায়ে টিকাদান বিশ্লেষণ </span>
                                </li>
                            </a>

                            <a href="#scroll_daily_test_dhaka_district">
                                <li><span class="bullet-point"></span>
                                    <span>জেলা ভিত্তিক দৈনিক নিবন্ধনের বিবেচনায় বিতরণের সংখ্যা</span>
                                </li>
                            </a>

                            {{-- <a href="#scroll_daily_last_4weeks_risk">
                                <li><span class="bullet-point"></span> <span>গত ৪ সপ্তাহের বিতরণের বিবেচনায় দেশের ৬৪টি জেলার তুলনামূলক অবস্থান </span>
                                </li>
                            </a> --}}
                            <a href="#scroll_daily_age_wise_affect_death">
                                <li><span class="bullet-point"></span>
                                    <span>বিভিন্ন শ্রেনী ভিত্তিক টিকা বিতরণের সংখ্যার তুলনা (লিঙ্গ, বয়স, পেশা, হাসপাতাল)</span></li>
                            </a>
                            {{-- <a href="#scroll_daily_covid_hospital_storage_and_usage">
                                <li><span class="bullet-point"></span>
                                    <span>কোভিড হাসপাতালসমূহের ধারণ ক্ষমতা ও ব্যবহার </span></li>
                            </a> --}}
                            <a href="#scroll_daily_south_asian_countries_differentiation">
                                <li><span class="bullet-point"></span>
                                    <span>দক্ষিণ এশিয়ার দেশগুলোতে টিকা বিতরণের তুলনা </span>
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
                                <h4 class="header-title pb-1">সর্বমোট নিবন্ধকরণ </h4>
                                <div style="font-size: 35px; font-weight:bolder; color: #ff198c; margin-top: -15px">
                                    {!! isset($total_tested) ? formatInBanglaStyle($total_tested) : ' ' !!}
                                </div>
                            </div>
                            <h4 class="header-title pb-1">গত ১৪ দিনে নিবন্ধকরণ </h4>
                            <div style="font-size: 55px;" class="the-number">
                                {!! isset($last_14_days['getLast14DaysTestData'][0]) ? formatInBanglaStyle($last_14_days['getLast14DaysTestData'][0]->curr_fourtten_days_test) : ' ' !!}
                            </div>
                            <div class="summary"><i class="{{$class_1}}"></i> পূর্ববর্তী ১৪ দিনে
                                নিবন্ধকরণ এর
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
                                <h4 class="header-title pb-1">সর্বমোট ১ম ডোজ</h4>
                                <div style="font-size: 35px; font-weight:bolder; color: #ff198c; margin-top: -15px">
                                    {!! isset($total_infected) ? formatInBanglaStyle($total_infected) : ' ' !!}
                                </div>
                            </div>
                            <h4 class="header-title pb-1">গত ১৪ দিনে ১ম ডোজ</h4>
                            <div style="font-size: 55px;" class="the-number">
                                {!! isset($last_14_days['getLast14DaysinfectedData'][0]) ? formatInBanglaStyle($last_14_days['getLast14DaysinfectedData'][0]->curr_fourtten_days_infected_person) : ' ' !!}
                            </div>
                            <div class="summary"><i class="{{$class_2}}"></i>
                                পূর্ববর্তী ১৪ দিনে ১ম ডোজ এর
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
                                <h4 class="header-title pb-1">সর্বমোট ২য় ডোজ</h4>
                                <div style="font-size: 35px; font-weight:bolder; color: #ff198c; margin-top: -15px">
                                    {!! isset($total_death) ? formatInBanglaStyle($total_death) : ' ' !!}
                                </div>
                            </div>
                            <h4 class="header-title pb-1">গত ১৪ দিনে ২য় ডোজ</h4>
                            <div style="font-size: 55px;" class="the-number">
                                {!! isset($last_14_days['getLast14DaysDeathData'][0]) ? formatInBanglaStyle($last_14_days['getLast14DaysDeathData'][0]->curr_fourtten_days_death) : ' ' !!}
                            </div>
                            <div class="summary"><i class="{{$class_3}}"></i> পূর্ববর্তী ১৪ দিনে
                                ২য় ডোজ এর
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
                                        <h2>দৈনিক নিবন্ধনের সংখ্যা</h2>
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
                                                শিরোনাম
                                                {{-- {!! $des_1->component_name_beng ?? '' !!} --}}
                                            </h4>
                                            <div class="the-number">
                                            </div>
                                            <h4 class="header-title"></h4>
                                            <div class="alert mt-3 p-0 text-justify" role="alert">
                                                <strong>বর্ণনা:</strong>
                                                {{-- নীতি বিবৃতি --}}
                                                {{-- {!! $des_1->description_beng ?? '' !!} --}}
                                            </div>
                                            {{-- <p class="footer-note">
                                                <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                                <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_1"></span>
                                            </p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 mt-2">

                                    {{--  Filter   --}}
                                    <div class="row flex-row-reverse">
                                        {{--  <div class="col-md-3">
                                            <label>বিভাগ</label>
                                            <select name="division[]" id="division" multiple
                                                    class="select2 form-control btn-outline-primary division_select">

                                                @foreach($division_list as $division)
                                                    <option value="{!! $division !!}"
                                                            class="b1">{!! en2bnTranslation($division) !!} </option>
                                                @endforeach
                                            </select>
                                        </div>  --}}
                                        <div class="col-md-2">
                                            <button id="filter-daily-infected-search"
                                                    class="btn btn-sm district_cms_search b1" style="position: relative; top:24px">
                                                <svg class="header-icon search-icon" x="1008" y="1248"
                                                     viewBox="0 0 24 24" height="50%" width="50%"
                                                     preserveAspectRatio="xMidYMid meet" focusable="false">
                                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                    <path
                                                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="col-md-3">
                                            <label>জেলা</label>
                                            <select name="district[]" id="daily-infected-district"
                                                    class="select2 form-control btn-outline-primary select_district">
                                                    <option value="all">সারাদেশ</option>
                                                    {{-- <option value="all">সারাদেশ -- নির্বাচন করুন</option> --}}

                                                @foreach($district_list as $district)
                                                    <option value="{!! $district->district !!}"
                                                            class="b1">{!! en2bnTranslation($district->district) !!} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        
                                    </div>
                                    {{--  end  --}}


                                    <div class="card">
                                        <div id="national_dialy_infected_trend"></div>
                                    </div>

                                </div>
                            </div>

                            {{-- map start here --}}
                            <div class="invoice-head title-bg-style" id="scroll_daily_risk_dist_wise_test_positive">
                                <div class="row">
                                    <div class="iv-left col-8 ">
                                        <h2>
                                            বিতরণের ভিত্তিতে জেলা পর্যায়ে টিকাদান বিশ্লেষণ
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
                                                শিরোনাম
                                                {{-- {!! $des_6->component_name_beng ?? '' !!} --}}
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-8"></div>
                                    <div class="col-lg-4">
                                        <div class="tab-zone tab-widget tabSuppressVizTooltipsAndOverlays tabZone-color" id="tabZoneId8" style="z-index: 16; width: 350px; height: 130px; top: 78px; left: 383px;">
                                            <div class="tab-zone-margin" style="inset: 4px; position: absolute; background-color: rgb(245, 237, 220); border-width: 1px; border-style: dashed; border-color: rgb(0, 0, 0);"><div class="tab-zone-padding" style="inset: 0px; position: absolute; border-width: 1px; border-color: rgb(172, 168, 153); border-style: none; padding: 0px;">
                                            <div class="tabLegendPanel tab-widget" style="position: relative; user-select: none; -webkit-tap-highlight-color: transparent; cursor: default; width: 306px; height: 85px;" aria-label="Legend: " id="tableau_base_legend_color_q_Sheet%201" tabindex="-1" role="listbox" aria-multiselectable="true">
                                            <div class="tabLegendBox"><h3 class="tabLegendTitle" style="height: 0px;"></h3>
                                            <div class="tabLegendContentHolder" style="overflow: hidden auto; width: 450px; height: 200px;">
                                                <div class="tabLegendColumnHolder" style="white-space:nowrap">
                                                    <span class="tabLegendItemColumn" style="width: 450px;">
                                                        <div class="tabLegendItem" tabindex="0" role="option" aria-selected="false" style="width: 450px; height: 25px;">
                                                            <span class="tabLegendItemSwatchHolder" style="width: 20px; height: 20px; display: inline-grid;">
                                                                <span class="tabLegendItemSwatch" id="rgb(255,51,51)" style="border-width: 1px; border-style: solid; width: 12px; height: 12px; top: 3px; left: 3px; background-color: rgb(255, 51, 51); border-color: rgb(104, 104, 104);"></span>
                                                            </span>
                                                            <span class="tabLegendItemLabelHolder" style="left: 22px; top: 2px; width: 303px; bottom: 0px; text-align: left;">
                                                               <span class="tabLegendItemLabel" style="font-size: 12px; color: rgb(0, 0, 0); font-family: &quot;Siyam Rupali&quot;; white-space: nowrap;">লাল (বিতরণের সংখ্যা ০ - ১০০০)</span>
                                                            </span>
                                                        </div>
                                                        <div class="tabLegendItem" tabindex="-1" role="option" aria-selected="false" style="width: 450px; height: 25px;"><span class="tabLegendItemSwatchHolder" style="width: 20px; height: 20px; display: inline-grid;">
                                                            <span class="tabLegendItemSwatch" id="rgb(255,187,51)" style="border-width: 1px; border-style: solid; width: 12px; height: 12px; top: 3px; left: 3px; background-color: rgb(255, 187, 51); border-color: rgb(104, 104, 104);"></span></span><span class="tabLegendItemLabelHolder" style="left: 22px; top: 2px; width: 303px; bottom: 0px; text-align: left;"><span class="tabLegendItemLabel" style="font-size: 13px; color: rgb(0, 0, 0); font-family: &quot;Siyam Rupali&quot;; white-space: nowrap;"> কমলা (বিতরণের সংখ্যা ১০০১ - ২০০০)</span></span>
                                                        </div>
                                                        <div class="tabLegendItem" tabindex="-1" role="option" aria-selected="false" style="width: 450px; height: 25px;">
                                                            <span class="tabLegendItemSwatchHolder" style="width: 20px; height: 20px; display: inline-grid;"><span class="tabLegendItemSwatch" id="rgb(255,255,51)" style="border-width: 1px; border-style: solid; width: 12px; height: 12px; top: 3px; left: 3px; background-color: rgb(224, 221, 10); border-color: rgb(104, 104, 104);"></span></span>
                                                            <span class="tabLegendItemLabelHolder" style="left: 22px; top: 2px; width: 303px; bottom: 0px; text-align: left;"><span class="tabLegendItemLabel" style="font-size: 12px; color: rgb(0, 0, 0); font-family: &quot;Siyam Rupali&quot;; white-space: nowrap;">হলুদ (বিতরণের সংখ্যা ২০০১ - ৩০০০) </span></span>
                                                        </div>
                                                        <div class="tabLegendItem" tabindex="-1" role="option" aria-selected="false" style="width: 450px; height: 25px;"><span class="tabLegendItemSwatchHolder" style="width: 20px; height: 20px; display: inline-grid;">
                                                            <span class="tabLegendItemSwatch" id="rgb(200,192,189)" style="border-width: 1px; border-style: solid; width: 12px; height: 12px; top: 3px; left: 3px; background-color: rgb(6, 27, 216); border-color: rgb(9, 12, 226);"></span></span>
                                                            <span class="tabLegendItemLabelHolder" style="left: 22px; top: 2px; width: 303px; bottom: 0px; text-align: left;"><span class="tabLegendItemLabel" style="font-size: 13px; color: rgb(0, 0, 0); font-family: &quot;Siyam Rupali&quot;; white-space: nowrap;">নীল (বিতরণের সংখ্যা ৩০০০ - ৫০০০)</span></span>
                                                        </div>
                                                        <div class="tabLegendItem" tabindex="-1" role="option" aria-selected="false" style="width: 450px; height: 25px;"><span class="tabLegendItemSwatchHolder" style="width: 20px; height: 20px; display: inline-grid;">
                                                            <span class="tabLegendItemSwatch" id="rgb(200,192,189)" style="border-width: 1px; border-style: solid; width: 12px; height: 12px; top: 3px; left: 3px; background-color: rgb(122, 214, 16); border-color: rgb(4, 133, 32);"></span></span>
                                                            <span class="tabLegendItemLabelHolder" style="left: 22px; top: 2px; width: 303px; bottom: 0px; text-align: left;"><span class="tabLegendItemLabel" style="font-size: 13px; color: rgb(0, 0, 0); font-family: &quot;Siyam Rupali&quot;; white-space: nowrap;">সবুজ (বিতরণের সংখ্যা ৫০০০+)</span></span>
                                                        </div>
                                                        <div class="tabLegendItem" tabindex="-1" role="option" aria-selected="false" style="width: 450px; height: 25px; padding-top:2px; padding-left:2px">
                                                            {{--  <span class="tabLegendItemSwatchHolder" style="width: 20px; height: 20px; display: inline-grid;">
                                                
                                                                    <span class="tabLegendItemSwatch" id="rgb(200,192,189)" style="border-width: 1px; border-style: solid; width: 12px; height: 12px; border-radius:12px; top: 3px; left: 3px; background-color: rgb(226, 5, 5); border-color: rgb(197, 7, 7);"></span>
                                                                    <span class="tabLegendItemSwatch" id="rgb(200,192,189)" style="border-width: 1px; border-style: solid; width: 12px; height: 12px; border-radius:12px; top: 3px; left: 3px; background-color: rgb(196, 151, 6); border-color: rgb(223, 134, 2);"></span>
                                                                    <span class="tabLegendItemSwatch" id="rgb(200,192,189)" style="border-width: 1px; border-style: solid; width: 12px; height: 12px; border-radius:12px; top: 3px; left: 3px; background-color: rgb(19, 167, 0); border-color: rgb(21, 156, 3);"></span>
                                                            </span>  --}}
                                                            {{-- <span style="border-width: 1px; display:block; float: left; clear: right; border-style: solid; width: 12px; height: 12px; border-radius:12px; top: 3px; left: 3px; background-color: rgb(226, 5, 5); border-color: rgb(197, 7, 7);"></span> &nbsp;&nbsp;
                                                            <span  style="border-width: 1px; display:block; float: left; clear: right; border-style: solid; width: 12px; height: 12px; border-radius:12px; top: 3px; left: 3px; background-color: rgb(196, 151, 6); border-color: rgb(223, 134, 2);"></span> &nbsp;&nbsp;
                                                            <span  style="border-width: 1px; display:block; float: left; clear: right; border-style: solid; width: 12px; height: 12px; border-radius:12px; top: 3px; left: 3px; background-color: rgb(19, 167, 0); border-color: rgb(21, 156, 3);"> &nbsp;&nbsp; <span style="position: relative; top: -3px; font-size:17px">&nbsp;ডট গুলোর রং উপরের শর্ত সাপেক্ষে চিহ্নিত</span></span>  --}}
                                                    </span>
                                                </div>
                                            </span>
                                    </div>
                                </div>
                                <div class="tabCatLegendScroll" style="display: none;"><div class="tabCatLegendScrollButtonHolder"><span class="tabCatLegendScrollPrev tabCatLegendScrollLeft tabIterButtonDisabled" style="width: 12px; height: 12px; line-height: 12px;"></span><span class="tabCatLegendScrollNext tabCatLegendScrollRight tabIterButtonDisabled" style="width: 12px; height: 12px; line-height: 12px;"></span></div>
                            </div>
                            </div>
                            <div class="tabLegendTitleControls" style="background-color: white; top: 0px; right: 0px;"><div class="tabLegendHighlighterButton tabLegendTitleControlsButtons tab-widget tabHighlightEnabled" title="Highlight Selected Items" style="user-select: none; -webkit-tap-highlight-color: transparent; display: none;"><div class="tabLegendHighlighterButtonIcon"></div></div><div class="tabLegendContextMenuButton tabLegendTitleControlsButtons" style="display: none;"><div class="tabLegendContextMenuButtonIcon"></div></div>
                            </div></div></div>
                                        </div>
                                    </div>
                            </div>
                            </div>
                            <div class="row"  style="height: 300px !important; overflow:hidden;">  
                                <div class="col-lg-3" style="margin:0px !important; padding: 0px !important; min-width: 25% !important;">
                                    <div id="iframeData_1">
                                    </div>
                                </div>
                                <div class="col-lg-3" style="margin:0px !important; padding: 0px !important; min-width: 25% !important;">
                                    <div id="iframeData_2"></div>
                                </div>
                                <div class="col-lg-3" style="margin:0px !important; padding: 0px !important; min-width: 25% !important;">
                                    <div id="iframeData_3"></div>
                                </div>
                                <div class="col-lg-3" style="margin:0px !important; padding: 0px !important; min-width: 25% !important;">
                                    <div id="iframeData_4"></div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body info-style">
                                            <div class="alert mt-3 p-0 text-justify" role="alert">
                                                <strong>বর্ণনা:</strong>
                                                {{-- নীতি বিবৃতি  --}}
                                                {{-- {!!  $des_6->description_beng ?? '' !!} --}}
                                            </div>
                                            {{-- <p class="footer-note">
                                                <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                            </p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- map end here --}}


                            {{-- matix start here --}}
                            
                            
                            {{-- matix end here --}}


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
                                            অঞ্চল-ভিত্তিক দৈনিক ১ম ডোজ বিতরণের সংখ্যা
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
                                            শিরোনাম
                                            {{-- {!! $des_2->component_name_beng ?? '' !!} --}}
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
                                            {{-- নীতি বিবৃতি  --}}
                                            {{-- {!! $des_2->description_beng ?? '' !!} --}}
                                        </div>
                                        {{-- <p class="footer-note">
                                            <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                            <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_4"></span>
                                        </p> --}}
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
                            

                            <div class="row">
                                <div class="col-lg-6 mt-2">
                                    <div class="card">
                                        <div class="invoice-head title-bg-style" id="scroll_daily_affected_comparison">
                                            <div class="row">
                                                <div class="iv-left col-12">
                                                    <h2>দৈনিক  নিবন্ধকরণ ও বিতরণের সংখ্যার তুলনা</h2>
                                                </div>
            
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <h4 style="height: 150px; margin-bottom: -85px;" id="special_word_5" class="header-title ">
                                                শিরোনাম 
                                                {{-- {!! $des_4->component_name_beng ?? '' !!} --}}
                                            </h4>
                                        </div>
                                        <div class="card-body purple-style info-style">

                                            {{--<h4 style="height: 150px;" id="special_word_5" class="header-title ">--}}
                                                {{--{!! $des_4->component_name_beng ?? '' !!}--}}
                                            {{--</h4>--}}

                                            <div id="ambarchart4"></div>
                                            <div class="alert mt-3 p-0 text-justify" role="alert">
                                                <strong>বর্ণনা:</strong>
                                                {{-- নীতি বিবৃতি  --}}
                                                {{-- {!! $des_4->description_beng ?? '' !!} --}}
                                            </div>
                                            {{-- <p class="footer-note">
                                                <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                                <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_5"></span>
                                            </p> --}}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-lg-6 mt-2">
                                    <div class="card">
                                        <div class="invoice-head title-bg-style" id="scroll_daily_affected_comparison_rate">
                                            <div class="row">
                                                <div class="iv-left col-12">
                                                    <h2>নিবন্ধকরণ এর বিবেচনায় বিতরণের হারের সাপ্তাহিক গড়</h2>
                                                </div>
            
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <h4 style="height: 150px; margin-bottom: -85px;" id="special_word_5" class="header-title ">
                                                শিরোনাম
                                                {{-- {!! $des_5->component_name_beng ?? '' !!} --}}
                                            </h4>
                                        </div>
                                        <div class="card-body purple-style info-style">

                                            {{--<h4 style="height: 150px;" id="special_word_6" class="header-title ">--}}
                                                {{--{!! $des_5->component_name_beng ?? '' !!}--}}
                                            {{--</h4>--}}

                                            <div id="ambarchart1"></div>
                                            <div class="alert mt-3 p-0 text-justify" role="alert">
                                                <strong>বর্ণনা:</strong>
                                                {{-- নীতি বিবৃতি  --}}
                                                {{-- {!! $des_5->description_beng ?? '' !!} --}}
                                            </div>
                                            {{-- <p class="footer-note">
                                                <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                                <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_6"></span>
                                            </p> --}}
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
                                                    জেলা ভিত্তিক দৈনিক নিবন্ধনের বিবেচনায় বিতরণের সংখ্যা
                                                </h2>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body info-style">
                                            <div class="row">

                                                <h4 id="special_word_8" class="header-title ">
                                                    শিরোনাম
                                                    {{-- {!! $des_11->component_name_beng ?? '' !!} --}}


                                                </h4>

                                                    {{-- <div class="col-md-3">
                                                        <label>বিভাগ </label>
                                                        <select name="division[]" id="division_dhaka_rate" multiple
                                                                class="select2 form-control btn-outline-primary">

                                                            @foreach($division_list as $division)
                                                                <option value="{!! $division !!}"
                                                                        class="b1">{!! en2bnTranslation($division) !!} </option>
                                                            @endforeach
                                                        </select>
                                                    </div > --}}
                                                    <div class="col-md-2 ml-4 mb-2" >
                                                        <label>নির্বাচন করুন </label>
                                                        <div class="row">
                                                            <label class="radio-inline" for="radios-1" style="cursor:pointer">
                                                            <input type="radio" name="weeklyOrDaily" id="radios-1" value="2" checked="checked">
                                                            সাপ্তাহিক
                                                            </label> 
                                                            &nbsp;&nbsp;&nbsp;
                                                            <label class="radio-inline" for="radios-0" style="cursor:pointer">
                                                            <input type="radio" name="weeklyOrDaily" id="radios-0" value="1">
                                                                দৈনিক
                                                            </label> 
                                                        
                                                            <label class="radio-inline" for="radios-2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 ml-4 mb-3" >
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
                                                    {{-- নীতি বিবৃতি  --}}
                                                    {{-- {!!  $des_11->description_beng ?? '' !!} --}}

                                                </div>
                                                {{-- <p class="footer-note">
                                                    <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                                    <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_8"></span>
                                                </p> --}}
                                            </div>
                                        </div>
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
                                            বিভিন্ন শ্রেনী ভিত্তিক টিকা বিতরণের সংখ্যার তুলনা (লিঙ্গ, বয়স, পেশা, হাসপাতাল)
                                        </h2>
                                    </div>

                                </div>
                            </div>

                            <div class="card-body info-style">
                                <div class="row">

                                    <h4 id="special_word_10" class="header-title ">
                                        শিরোনাম
                                        {{-- {!! $des_9->component_name_beng ?? '' !!} --}}

                                    </h4>

                                    <?php $abc = 'das'; ?>
                                    <div class="row" style="width: 100%;">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label for="">লিঙ্গ </label>
                                                            <select name="age_wise_death_by_gender" id="age_wise_death_by_gender"
                                                                    class="select2 form-control btn-outline-primary">
                                                                <option value="A">সকল</option>
                                                                <option value="M">পুরুষ</option>
                                                                <option value="F">মহিলা</option>
                                                            
                                                            </select>
                                                        </div>
                                                        {{-- <div class="col-md-3">
                                                            <label for="">জেলা</label>
                                                            <select name="ageWiseDeathDistrict[]" id="ageWiseDeathDistrict" multiple
                                                                    class="select2 form-control btn-outline-primary select_district">
                                                                @foreach($district_list as $district)
                                                                    <option value="{!! $district->district !!}"
                                                                            class="b1">{!! en2bnTranslation($district->district) !!} </option>
                                                                @endforeach
                                                            </select>
                                                        </div> --}}
                                                        {{--  <div class="col-md-3">
                                                            <label for="">হাসপাতাল</label>
                                                            <select name="age_wise_hospital_hospital_filter" id="age_wise_hospital_hospital_filter"
                                                                    class="select2 form-control btn-outline-primary">
                                                                <option>সারাদেশ</option>
                                                        
                                                            </select>
                                                        </div>  --}}
                                                        <div class="col-sm mt-4 mx-auto">
                                                            <button id="filter-age-wise-death"
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
                                                    
						    <div class="row">
							<div id="age_wise_death_distribution" style="width: 100%; height: 470px"></div>
						    </div>


                                                    <div class="row">
                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="card-body">
                                                                <div class="alert mt-3 p-0 text-justify" role="alert">
                                                                    <strong>বর্ণনা:</strong>
                                                                    {{-- {!! $des_9->description_beng ?? '' !!} --}}

                                                                </div>
                                                                {{-- <p class="footer-note">
                                                                    <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                                                    <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span
                                                                        id="last_date_10"> {!! convertEnglishMonthDateToBangla(Carbon\Carbon::now()->day)!!}
                                                                        {!! convertEnglishMonthDateToBangla(Carbon\Carbon::now()->format('F')) !!}</span>
                                                                </p> --}}
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
                {{-- <div class="col-lg-12 mt-2" id="scroll_daily_covid_hospital_storage_and_usage">


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
                                        
                                        <div class="row pt-2 pr-3">
                                            <div class="col-xl-6 col-md-6">
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="card-body1">
                                                            <div id="hospital_general_beds"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6">
                                                        <div class="card-body1">
                                                            <div id="hospital_icu_beds"></div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
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
                                                    <div class="col-xl-12 col-md-12">
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
                                                    <h5 class="card-title b1">
                                                        <i class="fa fa-hand-o-right" aria-hidden="true"></i> সাধারণ শয্যা সংখ্যা
                                                    </h5>
                                                    <div id="hospital_general_bed_stacked_chart" style="width: 100%; min-height: 320px !important; max-height: 320px !important; background-color: #FFFFFF;"></div>
                                                </div>

                                                <div class="card-body">
                                                    <h5 class="card-title b1">
                                                        <i class="fa fa-hand-o-right" aria-hidden="true"></i> আইসিইউ শয্যা সংখ্যা
                                                    </h5>
                                                    <div id="hospital_icu_bed_stacked_chart" style="width: 100%; min-height: 320px !important; max-height: 320px !important; background-color: #FFFFFF;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div> --}}
                <!--Section 3(Last) end here-->
                <!-- Statistics area start -->
                <div class="col-lg-12 mt-4" id="scroll_daily_south_asian_countries_differentiation">

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="invoice-head title-bg-style">
                                <div class="row">
                                    <div class="iv-left col-6 ">
                                        <h2>
                                            দক্ষিণ এশিয়ার দেশগুলোতে টিকা বিতরণের তুলনা
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
                                                শিরোনাম
                                                {{-- {!! $des_7->component_name_beng ?? '' !!} --}}
                                            </h4>
                                            <div class="alert mt-3 p-0 text-justify" role="alert">
                                                <strong>বর্ণনা:</strong>
                                                {{-- {!! $des_7->description_beng ?? '' !!} --}}
                                            </div>
                                            {{-- <p class="footer-note">
                                                <br>তথ্য সূত্র: Worldometer
                                                <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_2"></span>
                                            </p> --}}
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
<div class="p-8" style="margin-right: 414px"><img src="pm/images/icon/footer-logo.png" class="footer-logo" alt="logo"
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
        <div class="modal-content modal-content">
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
                                <p style="font-size: 16px; float:right">ই-জেনারেশন পাবলিক লিমিটেড কোম্পানি</p>
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

<script>

    var options = {year: 'numeric', month: 'long', day: 'numeric'};

    var mdata = <?php echo json_encode($mdata)?>;
    // console.log(mdata);
    {{--var xdata = <?php echo json_encode($xdata)?>;--}}
    var msize = Object.keys(mdata).length;
    // var xsize = Object.keys(xdata).length;

    var m_last_date = new Date(mdata[msize - 1].date).toLocaleDateString('bn', options);
    // var x_last_date = new Date(xdata[xsize - 1].date).toLocaleDateString('bn', options);


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


    function dailyInfectedChart(data, dist='') {
	// console.log(data);
        let zoneName = (dist !== '') ? dist : 'সারাদেশ';
        if ($('#national_dialy_infected_trend').length) {
            $('#last_date_1').html(" " + m_last_date);
            var chart = AmCharts.makeChart("national_dialy_infected_trend", {
                "type": "serial",
                "theme": "none",
                "marginRight": 80,
                "dataProvider": [
  {
    "date": "2021-05-20",
    "infected": "1617",
    "avg": "1617.00",
    "total_infected": 26738,
    "tested": "10207",
    "tested_data": 10207,
    "case": "1617"
  },
  {
    "date": "2021-05-21",
    "infected": "1773",
    "avg": "1695.00",
    "total_infected": 28511,
    "tested": "10234.5",
    "tested_data": 10234.5,
    "case": "1695"
  },
  {
    "date": "2021-05-22",
    "infected": "1694",
    "avg": "1694.67",
    "total_infected": 30205,
    "tested": "10065.33",
    "tested_data": 10065.33,
    "case": "1694.67"
  },
  {
    "date": "2021-05-23",
    "infected": "1873",
    "avg": "1739.25",
    "total_infected": 32078,
    "tested": "10257.5",
    "tested_data": 10257.5,
    "case": "1739.25"
  },
  {
    "date": "2021-05-24",
    "infected": "1532",
    "avg": "1697.80",
    "total_infected": 33610,
    "tested": "9987.6",
    "tested_data": 9987.6,
    "case": "1697.8"
  },
  {
    "date": "2021-05-25",
    "infected": "1975",
    "avg": "1744.00",
    "total_infected": 35585,
    "tested": "9898.17",
    "tested_data": 9898.17,
    "case": "1744"
  },
  {
    "date": "2021-05-26",
    "infected": "1166",
    "avg": "1661.43",
    "total_infected": 36751,
    "tested": "9256.57",
    "tested_data": 9256.57,
    "case": "1661.43"
  },
  {
    "date": "2021-05-27",
    "infected": "1541",
    "avg": "1650.57",
    "total_infected": 38292,
    "tested": "8943.43",
    "tested_data": 8943.43,
    "case": "1650.57"
  },
  {
    "date": "2021-05-28",
    "infected": "2029",
    "avg": "1687.14",
    "total_infected": 40321,
    "tested": "8807.43",
    "tested_data": 8807.43,
    "case": "1687.14"
  },
  {
    "date": "2021-05-29",
    "infected": "2523",
    "avg": "1805.57",
    "total_infected": 42844,
    "tested": "9032.29",
    "tested_data": 9032.29,
    "case": "1805.57"
  },
  {
    "date": "2021-05-30",
    "infected": "1764",
    "avg": "1790.00",
    "total_infected": 44608,
    "tested": "8911.29",
    "tested_data": 8911.29,
    "case": "1790"
  },
  {
    "date": "2021-05-31",
    "infected": "2545",
    "avg": "1934.71",
    "total_infected": 47153,
    "tested": "9335.29",
    "tested_data": 9335.29,
    "case": "1934.71"
  },
  {
    "date": "2021-06-01",
    "infected": "2381",
    "avg": "1992.71",
    "total_infected": 49534,
    "tested": "9619.29",
    "tested_data": 9619.29,
    "case": "1992.71"
  },
  {
    "date": "2021-06-02",
    "infected": "2911",
    "avg": "2242.00",
    "total_infected": 52445,
    "tested": "10661.71",
    "tested_data": 10661.71,
    "case": "2242"
  },
  {
    "date": "2021-06-03",
    "infected": "2695",
    "avg": "2406.86",
    "total_infected": 55140,
    "tested": "11303.86",
    "tested_data": 11303.86,
    "case": "2406.86"
  },
  {
    "date": "2021-06-04",
    "infected": "2423",
    "avg": "2463.14",
    "total_infected": 57563,
    "tested": "11787.86",
    "tested_data": 11787.86,
    "case": "2463.14"
  },
  {
    "date": "2021-06-05",
    "infected": "2828",
    "avg": "2506.71",
    "total_infected": 60391,
    "tested": "12186",
    "tested_data": 12186,
    "case": "2506.71"
  },
  {
    "date": "2021-06-06",
    "infected": "2635",
    "avg": "2631.14",
    "total_infected": 63026,
    "tested": "12543",
    "tested_data": 12543,
    "case": "2631.14"
  },
  {
    "date": "2021-06-07",
    "infected": "2743",
    "avg": "2659.43",
    "total_infected": 65769,
    "tested": "12723",
    "tested_data": 12723,
    "case": "2659.43"
  },
  {
    "date": "2021-06-08",
    "infected": "2735",
    "avg": "2710.00",
    "total_infected": 68504,
    "tested": "12944.29",
    "tested_data": 12944.29,
    "case": "2710"
  },
  {
    "date": "2021-06-09",
    "infected": "3171",
    "avg": "2747.14",
    "total_infected": 71675,
    "tested": "13224.29",
    "tested_data": 13224.29,
    "case": "2747.14"
  },
  {
    "date": "2021-06-10",
    "infected": "3190",
    "avg": "2817.86",
    "total_infected": 74865,
    "tested": "13717.86",
    "tested_data": 13717.86,
    "case": "2817.86"
  },
  {
    "date": "2021-06-11",
    "infected": "3187",
    "avg": "2927.00",
    "total_infected": 78052,
    "tested": "14157",
    "tested_data": 14157,
    "case": "2927"
  },
  {
    "date": "2021-06-12",
    "infected": "3471",
    "avg": "3018.86",
    "total_infected": 81523,
    "tested": "14428.71",
    "tested_data": 14428.71,
    "case": "3018.86"
  },
  {
    "date": "2021-06-13",
    "infected": "2856",
    "avg": "3050.43",
    "total_infected": 84379,
    "tested": "15021.86",
    "tested_data": 15021.86,
    "case": "3050.43"
  },
  {
    "date": "2021-06-14",
    "infected": "3141",
    "avg": "3107.29",
    "total_infected": 87520,
    "tested": "15217.43",
    "tested_data": 15217.43,
    "case": "3107.29"
  },
  {
    "date": "2021-06-15",
    "infected": "3099",
    "avg": "3159.29",
    "total_infected": 90619,
    "tested": "15510.29",
    "tested_data": 15510.29,
    "case": "3159.29"
  },
  {
    "date": "2021-06-16",
    "infected": "3862",
    "avg": "3258.00",
    "total_infected": 94481,
    "tested": "15874.57",
    "tested_data": 15874.57,
    "case": "3258"
  },
  {
    "date": "2021-06-17",
    "infected": "4008",
    "avg": "3374.86",
    "total_infected": 98489,
    "tested": "16097.71",
    "tested_data": 16097.71,
    "case": "3374.86"
  },
  {
    "date": "2021-06-18",
    "infected": "3803",
    "avg": "3462.86",
    "total_infected": 102292,
    "tested": "16167.29",
    "tested_data": 16167.29,
    "case": "3462.86"
  },
  {
    "date": "2021-06-19",
    "infected": "3243",
    "avg": "3430.29",
    "total_infected": 105535,
    "tested": "16032.29",
    "tested_data": 16032.29,
    "case": "3430.29"
  },
  {
    "date": "2021-06-20",
    "infected": "3240",
    "avg": "3485.14",
    "total_infected": 108775,
    "tested": "15659.86",
    "tested_data": 15659.86,
    "case": "3485.14"
  },
  {
    "date": "2021-06-21",
    "infected": "3532",
    "avg": "3541.00",
    "total_infected": 112306,
    "tested": "15814.14",
    "tested_data": 15814.14,
    "case": "3541"
  },
  {
    "date": "2021-06-22",
    "infected": "3480",
    "avg": "3595.43",
    "total_infected": 115786,
    "tested": "15888",
    "tested_data": 15888,
    "case": "3595.43"
  },
  {
    "date": "2021-06-23",
    "infected": "3412",
    "avg": "3531.14",
    "total_infected": 119198,
    "tested": "15756.29",
    "tested_data": 15756.29,
    "case": "3531.14"
  },
  {
    "date": "2021-06-24",
    "infected": "3462",
    "avg": "3453.14",
    "total_infected": 122660,
    "tested": "15600",
    "tested_data": 15600,
    "case": "3453.14"
  },
  {
    "date": "2021-06-25",
    "infected": "3946",
    "avg": "3473.57",
    "total_infected": 126606,
    "tested": "15848.57",
    "tested_data": 15848.57,
    "case": "3473.57"
  },
  {
    "date": "2021-06-26",
    "infected": "3868",
    "avg": "3562.86",
    "total_infected": 130474,
    "tested": "16341.86",
    "tested_data": 16341.86,
    "case": "3562.86"
  },
  {
    "date": "2021-06-27",
    "infected": "3504",
    "avg": "3600.57",
    "total_infected": 133978,
    "tested": "16502.71",
    "tested_data": 16502.71,
    "case": "3600.57"
  },
  {
    "date": "2021-06-28",
    "infected": "3809",
    "avg": "3640.14",
    "total_infected": 137787,
    "tested": "16861.86",
    "tested_data": 16861.86,
    "case": "3640.14"
  },
  {
    "date": "2021-06-29",
    "infected": "4014",
    "avg": "3716.43",
    "total_infected": 141801,
    "tested": "17187.86",
    "tested_data": 17187.86,
    "case": "3716.43"
  },
  {
    "date": "2021-06-30",
    "infected": "3682",
    "avg": "3755.00",
    "total_infected": 145483,
    "tested": "17492.71",
    "tested_data": 17492.71,
    "case": "3755"
  },
  {
    "date": "2021-07-01",
    "infected": "3775",
    "avg": "3799.71",
    "total_infected": 149258,
    "tested": "17698.71",
    "tested_data": 17698.71,
    "case": "3799.71"
  },
  {
    "date": "2021-07-02",
    "infected": "4019",
    "avg": "3810.14",
    "total_infected": 153277,
    "tested": "17750.57",
    "tested_data": 17750.57,
    "case": "3810.14"
  },
  {
    "date": "2021-07-03",
    "infected": "3114",
    "avg": "3702.43",
    "total_infected": 156391,
    "tested": "17200.86",
    "tested_data": 17200.86,
    "case": "3702.43"
  },
  {
    "date": "2021-07-04",
    "infected": "3288",
    "avg": "3671.57",
    "total_infected": 159679,
    "tested": "17139.43",
    "tested_data": 17139.43,
    "case": "3671.57"
  },
  {
    "date": "2021-07-05",
    "infected": "2738",
    "avg": "3518.57",
    "total_infected": 162417,
    "tested": "16552.14",
    "tested_data": 16552.14,
    "case": "3518.57"
  },
  {
    "date": "2021-07-06",
    "infected": "3201",
    "avg": "3402.43",
    "total_infected": 165618,
    "tested": "16039",
    "tested_data": 16039,
    "case": "3402.43"
  },
  {
    "date": "2021-07-07",
    "infected": "3027",
    "avg": "3308.86",
    "total_infected": 168645,
    "tested": "15288.57",
    "tested_data": 15288.57,
    "case": "3308.86"
  },
  {
    "date": "2021-07-08",
    "infected": "3489",
    "avg": "3268.00",
    "total_infected": 172134,
    "tested": "14973.86",
    "tested_data": 14973.86,
    "case": "3268"
  },
  {
    "date": "2021-07-09",
    "infected": "3360",
    "avg": "3173.86",
    "total_infected": 175494,
    "tested": "14583.86",
    "tested_data": 14583.86,
    "case": "3173.86"
  },
  {
    "date": "2021-07-10",
    "infected": "2949",
    "avg": "3150.29",
    "total_infected": 178443,
    "tested": "14417.86",
    "tested_data": 14417.86,
    "case": "3150.29"
  },
  {
    "date": "2021-07-11",
    "infected": "2686",
    "avg": "3064.29",
    "total_infected": 181129,
    "tested": "13913",
    "tested_data": 13913,
    "case": "3064.29"
  },
  {
    "date": "2021-07-12",
    "infected": "2666",
    "avg": "3054.00",
    "total_infected": 183795,
    "tested": "13494.57",
    "tested_data": 13494.57,
    "case": "3054"
  },
  {
    "date": "2021-07-13",
    "infected": "3099",
    "avg": "3039.43",
    "total_infected": 186894,
    "tested": "13234.29",
    "tested_data": 13234.29,
    "case": "3039.43"
  },
  {
    "date": "2021-07-14",
    "infected": "3163",
    "avg": "3058.86",
    "total_infected": 190057,
    "tested": "13274.29",
    "tested_data": 13274.29,
    "case": "3058.86"
  },
  {
    "date": "2021-07-15",
    "infected": "3533",
    "avg": "3065.14",
    "total_infected": 193590,
    "tested": "13035.71",
    "tested_data": 13035.71,
    "case": "3065.14"
  },
  {
    "date": "2021-07-16",
    "infected": "2733",
    "avg": "2975.57",
    "total_infected": 196323,
    "tested": "12643.86",
    "tested_data": 12643.86,
    "case": "2975.57"
  },
  {
    "date": "2021-07-17",
    "infected": "3034",
    "avg": "2987.71",
    "total_infected": 199357,
    "tested": "12639.86",
    "tested_data": 12639.86,
    "case": "2987.71"
  },
  {
    "date": "2021-07-18",
    "infected": "2709",
    "avg": "2991.00",
    "total_infected": 202166,
    "tested": "12601.29",
    "tested_data": 12601.29,
    "case": "2991"
  },
  {
    "date": "2021-07-19",
    "infected": "2459",
    "avg": "2961.43",
    "total_infected": 204525,
    "tested": "12539.29",
    "tested_data": 12539.29,
    "case": "2961.43"
  },
  {
    "date": "2021-07-20",
    "infected": "2928",
    "avg": "2937.00",
    "total_infected": 207453,
    "tested": "12673.43",
    "tested_data": 12673.43,
    "case": "2937"
  },
  {
    "date": "2021-07-21",
    "infected": "3057",
    "avg": "2921.86",
    "total_infected": 210510,
    "tested": "12594.14",
    "tested_data": 12594.14,
    "case": "2921.86"
  },
  {
    "date": "2021-07-22",
    "infected": "2744",
    "avg": "2809.14",
    "total_infected": 213254,
    "tested": "12315.29",
    "tested_data": 12315.29,
    "case": "2809.14"
  },
  {
    "date": "2021-07-23",
    "infected": "2856",
    "avg": "2826.71",
    "total_infected": 216110,
    "tested": "12245.14",
    "tested_data": 12245.14,
    "case": "2826.71"
  },
  {
    "date": "2021-07-24",
    "infected": "2548",
    "avg": "2757.29",
    "total_infected": 218658,
    "tested": "12040.43",
    "tested_data": 12040.43,
    "case": "2757.29"
  },
  {
    "date": "2021-07-25",
    "infected": "2520",
    "avg": "2730.29",
    "total_infected": 221178,
    "tested": "11972.29",
    "tested_data": 11972.29,
    "case": "2730.29"
  },
  {
    "date": "2021-07-26",
    "infected": "2275",
    "avg": "2704.00",
    "total_infected": 223453,
    "tested": "11894.14",
    "tested_data": 11894.14,
    "case": "2704"
  },
  {
    "date": "2021-07-27",
    "infected": "2772",
    "avg": "2681.71",
    "total_infected": 226225,
    "tested": "11822.29",
    "tested_data": 11822.29,
    "case": "2681.71"
  },
  {
    "date": "2021-07-28",
    "infected": "2960",
    "avg": "2667.86",
    "total_infected": 229185,
    "tested": "11796",
    "tested_data": 11796,
    "case": "2667.86"
  },
  {
    "date": "2021-07-29",
    "infected": "3009",
    "avg": "2705.71",
    "total_infected": 232194,
    "tested": "12092.71",
    "tested_data": 12092.71,
    "case": "2705.71"
  },
  {
    "date": "2021-07-30",
    "infected": "2695",
    "avg": "2682.71",
    "total_infected": 234889,
    "tested": "12169.71",
    "tested_data": 12169.71,
    "case": "2682.71"
  },
  {
    "date": "2021-07-31",
    "infected": "2772",
    "avg": "2714.71",
    "total_infected": 237661,
    "tested": "12253.57",
    "tested_data": 12253.57,
    "case": "2714.71"
  },
  {
    "date": "2021-08-01",
    "infected": "2199",
    "avg": "2668.86",
    "total_infected": 239860,
    "tested": "12018.71",
    "tested_data": 12018.71,
    "case": "2668.86"
  },
  {
    "date": "2021-08-02",
    "infected": "886",
    "avg": "2470.43",
    "total_infected": 240746,
    "tested": "11105.29",
    "tested_data": 11105.29,
    "case": "2470.43"
  },
  {
    "date": "2021-08-03",
    "infected": "1066",
    "avg": "2226.71",
    "total_infected": 242102,
    "tested": "9875.29",
    "tested_data": 9875.29,
    "case": "2226.71"
  },
  {
    "date": "2021-08-04",
    "infected": "1918",
    "avg": "2077.86",
    "total_infected": 244020,
    "tested": "9160.71",
    "tested_data": 9160.71,
    "case": "2077.86"
  },
  {
    "date": "2021-08-05",
    "infected": "2654",
    "avg": "2027.14",
    "total_infected": 246674,
    "tested": "8736.86",
    "tested_data": 8736.86,
    "case": "2027.14"
  },
  {
    "date": "2021-08-06",
    "infected": "2977",
    "avg": "2067.43",
    "total_infected": 249651,
    "tested": "8704.14",
    "tested_data": 8704.14,
    "case": "2067.43"
  },
  {
    "date": "2021-08-07",
    "infected": "2851",
    "avg": "2078.71",
    "total_infected": 252502,
    "tested": "8716.29",
    "tested_data": 8716.29,
    "case": "2078.71"
  },
  {
    "date": "2021-08-08",
    "infected": "2611",
    "avg": "2137.57",
    "total_infected": 255113,
    "tested": "9135.57",
    "tested_data": 9135.57,
    "case": "2137.57"
  },
  {
    "date": "2021-08-09",
    "infected": "2487",
    "avg": "2366.29",
    "total_infected": 257600,
    "tested": "10146.29",
    "tested_data": 10146.29,
    "case": "2366.29"
  },
  {
    "date": "2021-08-10",
    "infected": "2907",
    "avg": "2629.29",
    "total_infected": 260507,
    "tested": "11374.86",
    "tested_data": 11374.86,
    "case": "2629.29"
  },
  {
    "date": "2021-08-11",
    "infected": "2996",
    "avg": "2783.29",
    "total_infected": 263503,
    "tested": "12390.29",
    "tested_data": 12390.29,
    "case": "2783.29"
  },
  {
    "date": "2021-08-12",
    "infected": "2995",
    "avg": "2832.00",
    "total_infected": 266498,
    "tested": "12903.29",
    "tested_data": 12903.29,
    "case": "2832"
  },
  {
    "date": "2021-08-13",
    "infected": "2617",
    "avg": "2780.57",
    "total_infected": 269115,
    "tested": "12968.14",
    "tested_data": 12968.14,
    "case": "2780.57"
  },
  {
    "date": "2021-08-14",
    "infected": "2766",
    "avg": "2768.43",
    "total_infected": 271881,
    "tested": "12990.57",
    "tested_data": 12990.57,
    "case": "2768.43"
  },
  {
    "date": "2021-08-15",
    "infected": "2644",
    "avg": "2773.14",
    "total_infected": 274525,
    "tested": "13155.43",
    "tested_data": 13155.43,
    "case": "2773.14"
  },
  {
    "date": "2021-08-16",
    "infected": "2024",
    "avg": "2707.00",
    "total_infected": 276549,
    "tested": "13049.57",
    "tested_data": 13049.57,
    "case": "2707"
  },
  {
    "date": "2021-08-17",
    "infected": "2595",
    "avg": "2662.43",
    "total_infected": 279144,
    "tested": "13003",
    "tested_data": 13003,
    "case": "2662.43"
  },
  {
    "date": "2021-08-18",
    "infected": "3200",
    "avg": "2691.57",
    "total_infected": 282344,
    "tested": "12975.86",
    "tested_data": 12975.86,
    "case": "2691.57"
  },
  {
    "date": "2021-08-19",
    "infected": "2747",
    "avg": "2656.14",
    "total_infected": 285091,
    "tested": "12965.43",
    "tested_data": 12965.43,
    "case": "2656.14"
  },
  {
    "date": "2021-08-20",
    "infected": "2868",
    "avg": "2692.00",
    "total_infected": 287959,
    "tested": "13093.57",
    "tested_data": 13093.57,
    "case": "2692"
  },
  {
    "date": "2021-08-21",
    "infected": "2401",
    "avg": "2639.86",
    "total_infected": 290360,
    "tested": "13106",
    "tested_data": 13106,
    "case": "2639.86"
  },
  {
    "date": "2021-08-22",
    "infected": "2265",
    "avg": "2585.71",
    "total_infected": 292625,
    "tested": "12886.71",
    "tested_data": 12886.71,
    "case": "2585.71"
  },
  {
    "date": "2021-08-23",
    "infected": "1973",
    "avg": "2578.43",
    "total_infected": 294598,
    "tested": "12998.57",
    "tested_data": 12998.57,
    "case": "2578.43"
  },
  {
    "date": "2021-08-24",
    "infected": "2485",
    "avg": "2562.71",
    "total_infected": 297083,
    "tested": "13121.29",
    "tested_data": 13121.29,
    "case": "2562.71"
  },
  {
    "date": "2021-08-25",
    "infected": "2545",
    "avg": "2469.14",
    "total_infected": 299628,
    "tested": "13053.14",
    "tested_data": 13053.14,
    "case": "2469.14"
  },
  {
    "date": "2021-08-26",
    "infected": "2519",
    "avg": "2436.57",
    "total_infected": 302147,
    "tested": "13109.14",
    "tested_data": 13109.14,
    "case": "2436.57"
  },
  {
    "date": "2021-08-27",
    "infected": "2436",
    "avg": "2374.86",
    "total_infected": 304583,
    "tested": "13261.29",
    "tested_data": 13261.29,
    "case": "2374.86"
  },
  {
    "date": "2021-08-28",
    "infected": "2211",
    "avg": "2347.71",
    "total_infected": 306798,
    "tested": "13375.29",
    "tested_data": 13375.29,
    "case": "2347.71"
  },
  {
    "date": "2021-08-29",
    "infected": "2131",
    "avg": "2328.57",
    "total_infected": 308925,
    "tested": "13422.86",
    "tested_data": 13422.86,
    "case": "2328.57"
  },
  {
    "date": "2021-08-30",
    "infected": "1897",
    "avg": "2317.71",
    "total_infected": 310822,
    "tested": "13584.71",
    "tested_data": 13584.71,
    "case": "2317.71"
  },
  {
    "date": "2021-08-31",
    "infected": "2174",
    "avg": "2273.29",
    "total_infected": 312996,
    "tested": "13452.14",
    "tested_data": 13452.14,
    "case": "2273.29"
  },
  {
    "date": "2021-09-01",
    "infected": "1950",
    "avg": "2188.29",
    "total_infected": 314946,
    "tested": "13174.43",
    "tested_data": 13174.43,
    "case": "2188.29"
  },
  {
    "date": "2021-09-02",
    "infected": "2582",
    "avg": "2197.29",
    "total_infected": 317528,
    "tested": "13193.57",
    "tested_data": 13193.57,
    "case": "2197.29"
  },
  {
    "date": "2021-09-03",
    "infected": "2158",
    "avg": "2157.57",
    "total_infected": 319686,
    "tested": "13093.29",
    "tested_data": 13093.29,
    "case": "2157.57"
  },
  {
    "date": "2021-09-04",
    "infected": "1929",
    "avg": "2117.29",
    "total_infected": 321651,
    "tested": "12997.86",
    "tested_data": 12997.86,
    "case": "2117.29"
  },
  {
    "date": "2021-09-05",
    "infected": "1950",
    "avg": "2091.43",
    "total_infected": 323565,
    "tested": "13163.29",
    "tested_data": 13163.29,
    "case": "2091.43"
  },
  {
    "date": "2021-09-06",
    "infected": "1592",
    "avg": "2047.86",
    "total_infected": 325157,
    "tested": "13080.43",
    "tested_data": 13080.43,
    "case": "2047.86"
  },
  {
    "date": "2021-09-07",
    "infected": "2202",
    "avg": "2051.86",
    "total_infected": 327359,
    "tested": "13503",
    "tested_data": 13503,
    "case": "2051.86"
  },
  {
    "date": "2021-09-08",
    "infected": "1892",
    "avg": "2043.57",
    "total_infected": 329251,
    "tested": "13897.86",
    "tested_data": 13897.86,
    "case": "2043.57"
  },
  {
    "date": "2021-09-09",
    "infected": "1827",
    "avg": "1935.71",
    "total_infected": 331078,
    "tested": "13833.71",
    "tested_data": 13833.71,
    "case": "1935.71"
  },
  {
    "date": "2021-09-10",
    "infected": "1892",
    "avg": "1897.71",
    "total_infected": 332970,
    "tested": "13996.14",
    "tested_data": 13996.14,
    "case": "1897.71"
  },
  {
    "date": "2021-09-11",
    "infected": "1792",
    "avg": "1878.14",
    "total_infected": 334762,
    "tested": "14235.29",
    "tested_data": 14235.29,
    "case": "1878.14"
  },
  {
    "date": "2021-09-12",
    "infected": "1282",
    "avg": "1782.71",
    "total_infected": 336044,
    "tested": "13931.86",
    "tested_data": 13931.86,
    "case": "1782.71"
  },
  {
    "date": "2021-09-13",
    "infected": "1476",
    "avg": "1766.14",
    "total_infected": 337520,
    "tested": "14166.86",
    "tested_data": 14166.86,
    "case": "1766.14"
  },
  {
    "date": "2021-09-14",
    "infected": "1812",
    "avg": "1710.43",
    "total_infected": 339332,
    "tested": "13996",
    "tested_data": 13996,
    "case": "1710.43"
  },
  {
    "date": "2021-09-15",
    "infected": "1724",
    "avg": "1686.43",
    "total_infected": 341056,
    "tested": "13864.14",
    "tested_data": 13864.14,
    "case": "1686.43"
  },
  {
    "date": "2021-09-16",
    "infected": "1615",
    "avg": "1656.14",
    "total_infected": 342671,
    "tested": "13664.86",
    "tested_data": 13664.86,
    "case": "1656.14"
  },
  {
    "date": "2021-09-17",
    "infected": "1593",
    "avg": "1613.43",
    "total_infected": 344264,
    "tested": "13395.43",
    "tested_data": 13395.43,
    "case": "1613.43"
  },
  {
    "date": "2021-09-18",
    "infected": "1541",
    "avg": "1577.57",
    "total_infected": 345805,
    "tested": "13107.29",
    "tested_data": 13107.29,
    "case": "1577.57"
  },
  {
    "date": "2021-09-19",
    "infected": "1567",
    "avg": "1618.29",
    "total_infected": 347372,
    "tested": "13456.86",
    "tested_data": 13456.86,
    "case": "1618.29"
  },
  {
    "date": "2021-09-20",
    "infected": "1544",
    "avg": "1628.00",
    "total_infected": 348916,
    "tested": "13255.71",
    "tested_data": 13255.71,
    "case": "1628"
  },
  {
    "date": "2021-09-21",
    "infected": "1705",
    "avg": "1612.71",
    "total_infected": 350621,
    "tested": "13089.57",
    "tested_data": 13089.57,
    "case": "1612.71"
  },
  {
    "date": "2021-09-22",
    "infected": "1557",
    "avg": "1588.86",
    "total_infected": 352178,
    "tested": "13105.86",
    "tested_data": 13105.86,
    "case": "1588.86"
  },
  {
    "date": "2021-09-23",
    "infected": "1666",
    "avg": "1596.14",
    "total_infected": 353844,
    "tested": "13218.71",
    "tested_data": 13218.71,
    "case": "1596.14"
  },
  {
    "date": "2021-09-24",
    "infected": "1540",
    "avg": "1588.57",
    "total_infected": 355384,
    "tested": "13108.29",
    "tested_data": 13108.29,
    "case": "1588.57"
  },
  {
    "date": "2021-09-25",
    "infected": "1383",
    "avg": "1566.00",
    "total_infected": 356767,
    "tested": "13071.57",
    "tested_data": 13071.57,
    "case": "1566"
  },
  {
    "date": "2021-09-26",
    "infected": "1106",
    "avg": "1500.14",
    "total_infected": 357873,
    "tested": "12728",
    "tested_data": 12728,
    "case": "1500.14"
  },
  {
    "date": "2021-09-27",
    "infected": "1275",
    "avg": "1461.71",
    "total_infected": 359148,
    "tested": "12598.57",
    "tested_data": 12598.57,
    "case": "1461.71"
  },
  {
    "date": "2021-09-28",
    "infected": "1407",
    "avg": "1419.14",
    "total_infected": 360555,
    "tested": "12437",
    "tested_data": 12437,
    "case": "1419.14"
  },
  {
    "date": "2021-09-29",
    "infected": "1488",
    "avg": "1409.29",
    "total_infected": 362043,
    "tested": "12252",
    "tested_data": 12252,
    "case": "1409.29"
  },
  {
    "date": "2021-09-30",
    "infected": "1436",
    "avg": "1376.43",
    "total_infected": 363479,
    "tested": "12145.43",
    "tested_data": 12145.43,
    "case": "1376.43"
  },
  {
    "date": "2021-10-01",
    "infected": "1508",
    "avg": "1371.86",
    "total_infected": 364987,
    "tested": "11934",
    "tested_data": 11934,
    "case": "1371.86"
  },
  {
    "date": "2021-10-02",
    "infected": "1396",
    "avg": "1373.71",
    "total_infected": 366383,
    "tested": "11748.71",
    "tested_data": 11748.71,
    "case": "1373.71"
  },
  {
    "date": "2021-10-03",
    "infected": "1182",
    "avg": "1384.57",
    "total_infected": 367565,
    "tested": "11575.71",
    "tested_data": 11575.71,
    "case": "1384.57"
  },
  {
    "date": "2021-10-04",
    "infected": "1125",
    "avg": "1363.14",
    "total_infected": 368690,
    "tested": "11457.71",
    "tested_data": 11457.71,
    "case": "1363.14"
  },
  {
    "date": "2021-10-05",
    "infected": "1442",
    "avg": "1368.14",
    "total_infected": 370132,
    "tested": "11435.57",
    "tested_data": 11435.57,
    "case": "1368.14"
  },
  {
    "date": "2021-10-06",
    "infected": "1499",
    "avg": "1369.71",
    "total_infected": 371631,
    "tested": "11360.71",
    "tested_data": 11360.71,
    "case": "1369.71"
  },
  {
    "date": "2021-10-07",
    "infected": "1520",
    "avg": "1381.71",
    "total_infected": 373151,
    "tested": "11307.57",
    "tested_data": 11307.57,
    "case": "1381.71"
  },
  {
    "date": "2021-10-08",
    "infected": "1441",
    "avg": "1372.14",
    "total_infected": 374592,
    "tested": "11476.86",
    "tested_data": 11476.86,
    "case": "1372.14"
  },
  {
    "date": "2021-10-09",
    "infected": "1278",
    "avg": "1355.29",
    "total_infected": 375870,
    "tested": "11488.29",
    "tested_data": 11488.29,
    "case": "1355.29"
  },
  {
    "date": "2021-10-10",
    "infected": "1203",
    "avg": "1358.29",
    "total_infected": 377073,
    "tested": "11674.71",
    "tested_data": 11674.71,
    "case": "1358.29"
  },
  {
    "date": "2021-10-11",
    "infected": "1193",
    "avg": "1368.00",
    "total_infected": 378266,
    "tested": "11618.71",
    "tested_data": 11618.71,
    "case": "1368"
  },
  {
    "date": "2021-10-12",
    "infected": "1472",
    "avg": "1372.29",
    "total_infected": 379738,
    "tested": "11827.29",
    "tested_data": 11827.29,
    "case": "1372.29"
  },
  {
    "date": "2021-10-13",
    "infected": "1537",
    "avg": "1377.71",
    "total_infected": 381275,
    "tested": "12037.29",
    "tested_data": 12037.29,
    "case": "1377.71"
  },
  {
    "date": "2021-10-14",
    "infected": "1684",
    "avg": "1401.14",
    "total_infected": 382959,
    "tested": "12234.29",
    "tested_data": 12234.29,
    "case": "1401.14"
  },
  {
    "date": "2021-10-15",
    "infected": "1600",
    "avg": "1423.86",
    "total_infected": 384559,
    "tested": "12448.43",
    "tested_data": 12448.43,
    "case": "1423.86"
  },
  {
    "date": "2021-10-16",
    "infected": "1527",
    "avg": "1459.43",
    "total_infected": 386086,
    "tested": "12780",
    "tested_data": 12780,
    "case": "1459.43"
  },
  {
    "date": "2021-10-17",
    "infected": "1209",
    "avg": "1460.29",
    "total_infected": 387295,
    "tested": "12882",
    "tested_data": 12882,
    "case": "1460.29"
  },
  {
    "date": "2021-10-18",
    "infected": "1274",
    "avg": "1471.86",
    "total_infected": 388569,
    "tested": "13224.71",
    "tested_data": 13224.71,
    "case": "1471.86"
  },
  {
    "date": "2021-10-19",
    "infected": "1637",
    "avg": "1495.43",
    "total_infected": 390206,
    "tested": "13498.86",
    "tested_data": 13498.86,
    "case": "1495.43"
  },
  {
    "date": "2021-10-20",
    "infected": "1380",
    "avg": "1473.00",
    "total_infected": 391586,
    "tested": "13469.71",
    "tested_data": 13469.71,
    "case": "1473"
  },
  {
    "date": "2021-10-21",
    "infected": "1545",
    "avg": "1453.14",
    "total_infected": 393131,
    "tested": "13423.29",
    "tested_data": 13423.29,
    "case": "1453.14"
  },
  {
    "date": "2021-10-22",
    "infected": "1696",
    "avg": "1466.86",
    "total_infected": 394827,
    "tested": "13545.29",
    "tested_data": 13545.29,
    "case": "1466.86"
  },
  {
    "date": "2021-10-23",
    "infected": "1586",
    "avg": "1475.29",
    "total_infected": 396413,
    "tested": "13622.71",
    "tested_data": 13622.71,
    "case": "1475.29"
  },
  {
    "date": "2021-10-24",
    "infected": "1094",
    "avg": "1458.86",
    "total_infected": 397507,
    "tested": "13540.57",
    "tested_data": 13540.57,
    "case": "1458.86"
  },
  {
    "date": "2021-10-25",
    "infected": "1308",
    "avg": "1463.71",
    "total_infected": 398815,
    "tested": "13431.57",
    "tested_data": 13431.57,
    "case": "1463.71"
  },
  {
    "date": "2021-10-26",
    "infected": "1436",
    "avg": "1435.00",
    "total_infected": 400251,
    "tested": "13233.29",
    "tested_data": 13233.29,
    "case": "1435"
  },
  {
    "date": "2021-10-27",
    "infected": "1335",
    "avg": "1428.57",
    "total_infected": 400251,
    "tested": "13091.29",
    "tested_data": 13091.29,
    "case": "1428.57"
  },
  {
    "date": "2021-10-28",
    "infected": "1493",
    "avg": "1421.14",
    "total_infected": 401586,
    "tested": "12844.29",
    "tested_data": 12844.29,
    "case": "1421.14"
  },
  {
    "date": "2021-10-29",
    "infected": "1681",
    "avg": "1419.00",
    "total_infected": 403079,
    "tested": "12745.71",
    "tested_data": 12745.71,
    "case": "1419"
  },
  {
    "date": "2021-10-30",
    "infected": "1604",
    "avg": "1421.57",
    "total_infected": 404760,
    "tested": "12748.86",
    "tested_data": 12748.86,
    "case": "1421.57"
  },
  {
    "date": "2021-10-31",
    "infected": "1320",
    "avg": "1453.86",
    "total_infected": 406364,
    "tested": "12825.14",
    "tested_data": 12825.14,
    "case": "1453.86"
  },
  {
    "date": "2021-11-01",
    "infected": "1568",
    "avg": "1491.00",
    "total_infected": 407684,
    "tested": "13031.71",
    "tested_data": 13031.71,
    "case": "1491"
  },
  {
    "date": "2021-11-02",
    "infected": "1736",
    "avg": "1533.86",
    "total_infected": 409252,
    "tested": "12907.86",
    "tested_data": 12907.86,
    "case": "1533.86"
  },
  {
    "date": "2021-11-03",
    "infected": "1659",
    "avg": "1580.14",
    "total_infected": 410988,
    "tested": "13114.14",
    "tested_data": 13114.14,
    "case": "1580.14"
  },
  {
    "date": "2021-11-04",
    "infected": "1517",
    "avg": "1583.57",
    "total_infected": 412647,
    "tested": "13336.57",
    "tested_data": 13336.57,
    "case": "1583.57"
  },
  {
    "date": "2021-11-05",
    "infected": "1842",
    "avg": "1606.57",
    "total_infected": 414164,
    "tested": "13473.29",
    "tested_data": 13473.29,
    "case": "1606.57"
  },
  {
    "date": "2021-11-06",
    "infected": "1469",
    "avg": "1587.29",
    "total_infected": 416006,
    "tested": "13384.71",
    "tested_data": 13384.71,
    "case": "1587.29"
  },
  {
    "date": "2021-11-07",
    "infected": "1289",
    "avg": "1582.86",
    "total_infected": 417475,
    "tested": "13368.57",
    "tested_data": 13368.57,
    "case": "1582.86"
  },
  {
    "date": "2021-11-08",
    "infected": "1474",
    "avg": "1569.43",
    "total_infected": 418764,
    "tested": "13398.71",
    "tested_data": 13398.71,
    "case": "1569.43"
  },
  {
    "date": "2021-11-09",
    "infected": "1683",
    "avg": "1561.86",
    "total_infected": 420238,
    "tested": "13563.14",
    "tested_data": 13563.14,
    "case": "1561.86"
  },
  {
    "date": "2021-11-10",
    "infected": "1699",
    "avg": "1567.57",
    "total_infected": 421921,
    "tested": "13485.86",
    "tested_data": 13485.86,
    "case": "1567.57"
  },
  {
    "date": "2021-11-11",
    "infected": "1733",
    "avg": "1598.43",
    "total_infected": 423620,
    "tested": "13573",
    "tested_data": 13573,
    "case": "1598.43"
  },
  {
    "date": "2021-11-12",
    "infected": "1845",
    "avg": "1598.86",
    "total_infected": 427198,
    "tested": "13842.57",
    "tested_data": 13842.57,
    "case": "1598.86"
  },
  {
    "date": "2021-11-13",
    "infected": "1767",
    "avg": "1641.43",
    "total_infected": 428965,
    "tested": "13845.14",
    "tested_data": 13845.14,
    "case": "1641.43"
  },
  {
    "date": "2021-11-14",
    "infected": "1531",
    "avg": "1676.00",
    "total_infected": 430496,
    "tested": "13898.86",
    "tested_data": 13898.86,
    "case": "1676"
  },
  {
    "date": "2021-11-15",
    "infected": "1837",
    "avg": "1727.86",
    "total_infected": 430496,
    "tested": "14084.57",
    "tested_data": 14084.57,
    "case": "1727.86"
  },
  {
    "date": "2021-11-16",
    "infected": "2139",
    "avg": "1793.00",
    "total_infected": 432333,
    "tested": "14331.14",
    "tested_data": 14331.14,
    "case": "1793"
  },
  {
    "date": "2021-11-17",
    "infected": "2212",
    "avg": "1866.29",
    "total_infected": 434472,
    "tested": "14684",
    "tested_data": 14684,
    "case": "1866.29"
  },
  {
    "date": "2021-11-18",
    "infected": "2111",
    "avg": "1920.29",
    "total_infected": 436684,
    "tested": "14961.86",
    "tested_data": 14961.86,
    "case": "1920.29"
  },
  {
    "date": "2021-11-19",
    "infected": "2364",
    "avg": "1994.43",
    "total_infected": 438795,
    "tested": "15021.71",
    "tested_data": 15021.71,
    "case": "1994.43"
  },
  {
    "date": "2021-11-20",
    "infected": "2275",
    "avg": "2067.00",
    "total_infected": 441159,
    "tested": "15317.14",
    "tested_data": 15317.14,
    "case": "2067"
  },
  {
    "date": "2021-11-21",
    "infected": "1847",
    "avg": "2112.14",
    "total_infected": 443434,
    "tested": "15438.29",
    "tested_data": 15438.29,
    "case": "2112.14"
  },
  {
    "date": "2021-11-22",
    "infected": "2060",
    "avg": "2144.00",
    "total_infected": 445281,
    "tested": "15411.14",
    "tested_data": 15411.14,
    "case": "2144"
  },
  {
    "date": "2021-11-23",
    "infected": "2419",
    "avg": "2184.00",
    "total_infected": 447341,
    "tested": "15452.71",
    "tested_data": 15452.71,
    "case": "2184"
  },
  {
    "date": "2021-11-24",
    "infected": "2230",
    "avg": "2186.57",
    "total_infected": 449760,
    "tested": "15313.86",
    "tested_data": 15313.86,
    "case": "2186.57"
  },
  {
    "date": "2021-11-25",
    "infected": "2156",
    "avg": "2193.00",
    "total_infected": 451990,
    "tested": "15247",
    "tested_data": 15247,
    "case": "2193"
  },
  {
    "date": "2021-11-26",
    "infected": "2292",
    "avg": "2182.71",
    "total_infected": 454146,
    "tested": "15178.57",
    "tested_data": 15178.57,
    "case": "2182.71"
  },
  {
    "date": "2021-11-27",
    "infected": "2273",
    "avg": "2182.43",
    "total_infected": 456438,
    "tested": "15288.71",
    "tested_data": 15288.71,
    "case": "2182.43"
  },
  {
    "date": "2021-11-28",
    "infected": "1908",
    "avg": "2191.14",
    "total_infected": 458711,
    "tested": "15484.29",
    "tested_data": 15484.29,
    "case": "2191.14"
  },
  {
    "date": "2021-11-29",
    "infected": "1788",
    "avg": "2152.29",
    "total_infected": 460619,
    "tested": "15465.29",
    "tested_data": 15465.29,
    "case": "2152.29"
  },
  {
    "date": "2021-11-30",
    "infected": "2525",
    "avg": "2167.43",
    "total_infected": 462407,
    "tested": "15367.14",
    "tested_data": 15367.14,
    "case": "2167.43"
  },
  {
    "date": "2021-12-01",
    "infected": "2293",
    "avg": "2176.43",
    "total_infected": 464932,
    "tested": "15436.14",
    "tested_data": 15436.14,
    "case": "2176.43"
  },
  {
    "date": "2021-12-02",
    "infected": "2198",
    "avg": "2182.43",
    "total_infected": 467225,
    "tested": "15432",
    "tested_data": 15432,
    "case": "2182.43"
  },
  {
    "date": "2021-12-03",
    "infected": "2316",
    "avg": "2185.86",
    "total_infected": 469423,
    "tested": "15397",
    "tested_data": 15397,
    "case": "2185.86"
  },
  {
    "date": "2021-12-04",
    "infected": "2252",
    "avg": "2182.86",
    "total_infected": 471739,
    "tested": "15261.57",
    "tested_data": 15261.57,
    "case": "2182.86"
  }
],
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
                    "title": zoneName+" এর দৈনিক নিবন্ধনের সংখ্যা",
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
                    "title": zoneName+" এর দৈনিক নিবন্ধকরণ",
                    "type": "column",
                    "valueField": "infected",
                    "balloonFunction": function (graphDataItem, graph) {
                        var value = graphDataItem.values.value;
                        var title = zoneName+" এর দৈনিক নিবন্ধকরণ";
                        return "<b>" + title + "</b><br><span style='font-size:14px' class='g-v'> <b>" + value.toLocaleString('bn-BD') + "</b></span>";
                    }
                }, {
                    "id": "g2",
                    "balloonText": "[[title]]: [[value]]",
                    "lineThickness": 2,
                    "lineColor": "orange",
                    "type": "smoothedLine",
                    "title": zoneName+" এর দৈনিক নিবন্ধকরণ (৭ দিনের  চলমান গড়)", //5 days running average
                    "valueField": "avg",
                    "bullet": "round",
                    "bulletSize": 7,
                    "bulletBorderAlpha": 10,
                    "bullegit addtColor": "#FFFFFF",
                    "useLineColorForBulletBorder": true,
                    "bulletBorderThickness": 3,
                    "balloonFunction": function (graphDataItem, graph) {
                        var value = graphDataItem.values.value;
                        var title = zoneName+"- দৈনিক নিবন্ধকরণ (৭ দিনের  চলমান গড়)";
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
		    
		    "equalSpacing": false,
                    "parseDates": true,
	            "minPeriod": "hh",
		  //  "showLastLabel": true,	
                    "labelFunction": function (value, date, categoryAxis) {
                        var options = new Array();
                        options["MMM DD"] = {year: 'numeric', month: 'long', day: 'numeric'};
                        options["MMM"] = {year: 'numeric', month: 'long'};
                        options["YY"] = {year: 'numeric', month: 'long'};
                        return date.toLocaleDateString("bn-BD", options[categoryAxis.currentDateFormat]);
		    },
		    //"equalSpacing": true,
		    "showFirstLabel": true,
                    "showLastLabel": true,

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
                        var title = "প্রতি হাজারে টিকাদান(" + graphDataItem.dataContext.date + "):";
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
                    "title": "প্রতি হাজারে টিকাদান(" + date + ")",
                    "minimum": 0,
                    "maximum": 150,
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

    /* comment for not found data */
    $.ajax({
        url: '{{url("/")}}/pm/south-asia-data.json',
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
        // console.log(chartData);
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
                "dataProvider": [
  {
    "date": "2021-05-20",
    "dhk": "262.00",
    "ctg": "96.00",
    "khu": "7.00",
    "mym": "64.00",
    "raj": "45.00",
    "ran": "21.00",
    "bar": "3.00",
    "syl": "32.00"
  },
  {
    "date": "2021-05-21",
    "dhk": "370.50",
    "ctg": "87.00",
    "khu": "8.00",
    "mym": "50.50",
    "raj": "23.00",
    "ran": "11.00",
    "bar": "13.50",
    "syl": "22.00"
  },
  {
    "date": "2021-05-22",
    "dhk": "334.33",
    "ctg": "84.33",
    "khu": "9.00",
    "mym": "44.33",
    "raj": "29.33",
    "ran": "7.33",
    "bar": "13.67",
    "syl": "28.33"
  },
  {
    "date": "2021-05-23",
    "dhk": "342.25",
    "ctg": "91.50",
    "khu": "10.00",
    "mym": "39.00",
    "raj": "30.50",
    "ran": "9.75",
    "bar": "12.75",
    "syl": "25.50"
  },
  {
    "date": "2021-05-24",
    "dhk": "395.40",
    "ctg": "94.80",
    "khu": "9.40",
    "mym": "38.00",
    "raj": "26.80",
    "ran": "13.00",
    "bar": "17.00",
    "syl": "27.40"
  },
  {
    "date": "2021-05-25",
    "dhk": "368.00",
    "ctg": "87.83",
    "khu": "8.00",
    "mym": "32.17",
    "raj": "23.83",
    "ran": "13.50",
    "bar": "17.67",
    "syl": "26.33"
  },
  {
    "date": "2021-05-26",
    "dhk": "355.71",
    "ctg": "90.14",
    "khu": "8.14",
    "mym": "30.00",
    "raj": "23.00",
    "ran": "16.29",
    "bar": "17.57",
    "syl": "25.14"
  },
  {
    "date": "2021-05-27",
    "dhk": "363.86",
    "ctg": "99.14",
    "khu": "9.43",
    "mym": "23.29",
    "raj": "23.43",
    "ran": "19.00",
    "bar": "20.14",
    "syl": "27.00"
  },
  {
    "date": "2021-05-28",
    "dhk": "390.29",
    "ctg": "106.14",
    "khu": "12.29",
    "mym": "23.86",
    "raj": "28.43",
    "ran": "22.71",
    "bar": "18.29",
    "syl": "32.14"
  },
  {
    "date": "2021-05-29",
    "dhk": "424.00",
    "ctg": "122.71",
    "khu": "14.14",
    "mym": "23.00",
    "raj": "29.00",
    "ran": "30.14",
    "bar": "24.00",
    "syl": "30.00"
  },
  {
    "date": "2021-05-30",
    "dhk": "444.14",
    "ctg": "117.14",
    "khu": "15.29",
    "mym": "26.86",
    "raj": "33.71",
    "ran": "39.00",
    "bar": "30.43",
    "syl": "41.86"
  },
  {
    "date": "2021-05-31",
    "dhk": "432.14",
    "ctg": "118.00",
    "khu": "19.43",
    "mym": "29.29",
    "raj": "36.29",
    "ran": "39.43",
    "bar": "35.29",
    "syl": "39.71"
  },
  {
    "date": "2021-06-01",
    "dhk": "464.57",
    "ctg": "136.14",
    "khu": "22.43",
    "mym": "42.14",
    "raj": "41.00",
    "ran": "44.00",
    "bar": "41.29",
    "syl": "43.57"
  },
  {
    "date": "2021-06-02",
    "dhk": "522.86",
    "ctg": "176.14",
    "khu": "27.14",
    "mym": "45.86",
    "raj": "50.43",
    "ran": "45.14",
    "bar": "47.29",
    "syl": "46.71"
  },
  {
    "date": "2021-06-03",
    "dhk": "557.71",
    "ctg": "185.86",
    "khu": "30.29",
    "mym": "43.43",
    "raj": "49.57",
    "ran": "45.43",
    "bar": "53.43",
    "syl": "50.14"
  },
  {
    "date": "2021-06-04",
    "dhk": "568.29",
    "ctg": "215.71",
    "khu": "32.00",
    "mym": "44.43",
    "raj": "51.71",
    "ran": "45.86",
    "bar": "65.29",
    "syl": "55.00"
  },
  {
    "date": "2021-06-05",
    "dhk": "595.57",
    "ctg": "240.14",
    "khu": "33.14",
    "mym": "50.86",
    "raj": "57.43",
    "ran": "42.43",
    "bar": "66.14",
    "syl": "57.71"
  },
  {
    "date": "2021-06-06",
    "dhk": "596.86",
    "ctg": "273.86",
    "khu": "37.14",
    "mym": "53.86",
    "raj": "61.29",
    "ran": "37.71",
    "bar": "70.00",
    "syl": "52.86"
  },
  {
    "date": "2021-06-07",
    "dhk": "606.86",
    "ctg": "284.29",
    "khu": "42.43",
    "mym": "56.00",
    "raj": "66.86",
    "ran": "38.71",
    "bar": "60.43",
    "syl": "55.14"
  },
  {
    "date": "2021-06-08",
    "dhk": "639.71",
    "ctg": "319.00",
    "khu": "53.43",
    "mym": "46.71",
    "raj": "75.14",
    "ran": "38.86",
    "bar": "65.00",
    "syl": "57.00"
  },
  {
    "date": "2021-06-09",
    "dhk": "608.86",
    "ctg": "319.00",
    "khu": "56.00",
    "mym": "54.71",
    "raj": "74.86",
    "ran": "46.57",
    "bar": "63.29",
    "syl": "58.43"
  },
  {
    "date": "2021-06-10",
    "dhk": "558.25",
    "ctg": "337.57",
    "khu": "66.00",
    "mym": "61.14",
    "raj": "87.00",
    "ran": "47.29",
    "bar": "65.86",
    "syl": "54.71"
  },
  {
    "date": "2021-06-10",
    "dhk": "558.25",
    "ctg": "337.57",
    "khu": "66.00",
    "mym": "61.14",
    "raj": "87.00",
    "ran": "47.29",
    "bar": "65.86",
    "syl": "54.71"
  },
  {
    "date": "2021-06-11",
    "dhk": "565.38",
    "ctg": "349.57",
    "khu": "73.14",
    "mym": "63.00",
    "raj": "95.14",
    "ran": "52.43",
    "bar": "63.00",
    "syl": "59.29"
  },
  {
    "date": "2021-06-12",
    "dhk": "602.38",
    "ctg": "333.86",
    "khu": "84.86",
    "mym": "65.00",
    "raj": "99.14",
    "ran": "57.00",
    "bar": "72.00",
    "syl": "66.43"
  },
  {
    "date": "2021-06-13",
    "dhk": "658.63",
    "ctg": "349.57",
    "khu": "96.00",
    "mym": "59.71",
    "raj": "91.25",
    "ran": "59.29",
    "bar": "73.43",
    "syl": "57.14"
  },
  {
    "date": "2021-06-13",
    "dhk": "658.63",
    "ctg": "349.57",
    "khu": "96.00",
    "mym": "59.71",
    "raj": "91.25",
    "ran": "59.29",
    "bar": "73.43",
    "syl": "57.14"
  },
  {
    "date": "2021-06-14",
    "dhk": "668.50",
    "ctg": "374.71",
    "khu": "96.71",
    "mym": "58.00",
    "raj": "112.75",
    "ran": "61.86",
    "bar": "86.57",
    "syl": "53.14"
  },
  {
    "date": "2021-06-15",
    "dhk": "680.00",
    "ctg": "375.57",
    "khu": "101.71",
    "mym": "56.86",
    "raj": "116.88",
    "ran": "63.57",
    "bar": "93.29",
    "syl": "56.71"
  },
  {
    "date": "2021-06-16",
    "dhk": "778.75",
    "ctg": "399.71",
    "khu": "110.00",
    "mym": "44.14",
    "raj": "120.00",
    "ran": "56.86",
    "bar": "100.14",
    "syl": "56.43"
  },
  {
    "date": "2021-06-17",
    "dhk": "946.14",
    "ctg": "445.57",
    "khu": "121.29",
    "mym": "38.29",
    "raj": "127.75",
    "ran": "59.14",
    "bar": "102.29",
    "syl": "61.86"
  },
  {
    "date": "2021-06-18",
    "dhk": "990.14",
    "ctg": "437.57",
    "khu": "133.00",
    "mym": "30.43",
    "raj": "119.00",
    "ran": "57.14",
    "bar": "102.29",
    "syl": "52.57"
  },
  {
    "date": "2021-06-18",
    "dhk": "990.14",
    "ctg": "437.57",
    "khu": "133.00",
    "mym": "30.43",
    "raj": "119.00",
    "ran": "57.14",
    "bar": "102.29",
    "syl": "52.57"
  },
  {
    "date": "2021-06-19",
    "dhk": "1004.43",
    "ctg": "471.29",
    "khu": "149.29",
    "mym": "18.71",
    "raj": "117.11",
    "ran": "56.86",
    "bar": "95.71",
    "syl": "54.14"
  },
  {
    "date": "2021-06-20",
    "dhk": "1048.43",
    "ctg": "482.29",
    "khu": "170.00",
    "mym": "35.00",
    "raj": "143.13",
    "ran": "54.14",
    "bar": "84.63",
    "syl": "57.86"
  },
  {
    "date": "2021-06-20",
    "dhk": "1048.43",
    "ctg": "482.29",
    "khu": "170.00",
    "mym": "35.00",
    "raj": "143.13",
    "ran": "54.14",
    "bar": "84.63",
    "syl": "57.86"
  },
  {
    "date": "2021-06-21",
    "dhk": "1136.00",
    "ctg": "507.43",
    "khu": "189.00",
    "mym": "39.63",
    "raj": "136.75",
    "ran": "55.00",
    "bar": "83.25",
    "syl": "78.29"
  },
  {
    "date": "2021-06-21",
    "dhk": "1136.00",
    "ctg": "507.43",
    "khu": "189.00",
    "mym": "39.63",
    "raj": "136.75",
    "ran": "55.00",
    "bar": "83.25",
    "syl": "78.29"
  },
  {
    "date": "2021-06-22",
    "dhk": "1214.86",
    "ctg": "544.00",
    "khu": "194.86",
    "mym": "55.88",
    "raj": "147.13",
    "ran": "52.57",
    "bar": "78.50",
    "syl": "85.14"
  },
  {
    "date": "2021-06-23",
    "dhk": "1062.00",
    "ctg": "564.57",
    "khu": "204.57",
    "mym": "70.38",
    "raj": "157.88",
    "ran": "50.00",
    "bar": "74.38",
    "syl": "92.29"
  },
  {
    "date": "2021-06-23",
    "dhk": "1062.00",
    "ctg": "564.57",
    "khu": "204.57",
    "mym": "70.38",
    "raj": "157.88",
    "ran": "50.00",
    "bar": "74.38",
    "syl": "92.29"
  },
  {
    "date": "2021-06-24",
    "dhk": "1068.38",
    "ctg": "554.00",
    "khu": "228.14",
    "mym": "87.63",
    "raj": "156.75",
    "ran": "47.43",
    "bar": "74.63",
    "syl": "92.71"
  },
  {
    "date": "2021-06-25",
    "dhk": "1130.75",
    "ctg": "600.57",
    "khu": "231.86",
    "mym": "91.88",
    "raj": "216.14",
    "ran": "49.57",
    "bar": "75.00",
    "syl": "98.29"
  },
  {
    "date": "2021-06-26",
    "dhk": "1123.13",
    "ctg": "608.57",
    "khu": "235.57",
    "mym": "96.38",
    "raj": "230.86",
    "ran": "48.29",
    "bar": "81.25",
    "syl": "100.86"
  },
  {
    "date": "2021-06-27",
    "dhk": "1165.50",
    "ctg": "587.71",
    "khu": "235.14",
    "mym": "86.75",
    "raj": "223.57",
    "ran": "51.00",
    "bar": "97.00",
    "syl": "128.57"
  },
  {
    "date": "2021-06-28",
    "dhk": "1180.63",
    "ctg": "584.00",
    "khu": "229.43",
    "mym": "111.29",
    "raj": "233.00",
    "ran": "53.43",
    "bar": "102.29",
    "syl": "122.43"
  },
  {
    "date": "2021-06-29",
    "dhk": "1076.00",
    "ctg": "482.50",
    "khu": "201.50",
    "mym": "102.43",
    "raj": "232.71",
    "ran": "57.00",
    "bar": "102.29",
    "syl": "129.43"
  },
  {
    "date": "2021-06-29",
    "dhk": "1076.00",
    "ctg": "482.50",
    "khu": "201.50",
    "mym": "102.43",
    "raj": "232.71",
    "ran": "57.00",
    "bar": "102.29",
    "syl": "129.43"
  },
  {
    "date": "2021-06-29",
    "dhk": "1076.00",
    "ctg": "482.50",
    "khu": "201.50",
    "mym": "102.43",
    "raj": "232.71",
    "ran": "57.00",
    "bar": "102.29",
    "syl": "129.43"
  },
  {
    "date": "2021-06-29",
    "dhk": "1076.00",
    "ctg": "482.50",
    "khu": "201.50",
    "mym": "102.43",
    "raj": "232.71",
    "ran": "57.00",
    "bar": "102.29",
    "syl": "129.43"
  },
  {
    "date": "2021-06-29",
    "dhk": "1076.00",
    "ctg": "482.50",
    "khu": "201.50",
    "mym": "102.43",
    "raj": "232.71",
    "ran": "57.00",
    "bar": "102.29",
    "syl": "129.43"
  },
  {
    "date": "2021-06-29",
    "dhk": "1076.00",
    "ctg": "482.50",
    "khu": "201.50",
    "mym": "102.43",
    "raj": "232.71",
    "ran": "57.00",
    "bar": "102.29",
    "syl": "129.43"
  },
  {
    "date": "2021-06-29",
    "dhk": "1076.00",
    "ctg": "482.50",
    "khu": "201.50",
    "mym": "102.43",
    "raj": "232.71",
    "ran": "57.00",
    "bar": "102.29",
    "syl": "129.43"
  },
  {
    "date": "2021-06-29",
    "dhk": "1076.00",
    "ctg": "482.50",
    "khu": "201.50",
    "mym": "102.43",
    "raj": "232.71",
    "ran": "57.00",
    "bar": "102.29",
    "syl": "129.43"
  },
  {
    "date": "2021-06-30",
    "dhk": "1225.88",
    "ctg": "458.25",
    "khu": "214.25",
    "mym": "90.71",
    "raj": "266.29",
    "ran": "61.86",
    "bar": "107.86",
    "syl": "151.00"
  },
  {
    "date": "2021-07-01",
    "dhk": "1241.88",
    "ctg": "464.38",
    "khu": "206.50",
    "mym": "87.43",
    "raj": "287.29",
    "ran": "97.29",
    "bar": "104.29",
    "syl": "163.14"
  },
  {
    "date": "2021-07-02",
    "dhk": "1178.75",
    "ctg": "433.25",
    "khu": "248.25",
    "mym": "88.43",
    "raj": "262.43",
    "ran": "107.14",
    "bar": "105.71",
    "syl": "165.43"
  },
  {
    "date": "2021-07-03",
    "dhk": "1177.75",
    "ctg": "416.25",
    "khu": "248.63",
    "mym": "99.43",
    "raj": "259.43",
    "ran": "120.86",
    "bar": "104.57",
    "syl": "176.71"
  },
  {
    "date": "2021-07-04",
    "dhk": "1093.25",
    "ctg": "414.75",
    "khu": "237.13",
    "mym": "96.00",
    "raj": "265.86",
    "ran": "124.29",
    "bar": "105.00",
    "syl": "149.71"
  },
  {
    "date": "2021-07-05",
    "dhk": "1047.88",
    "ctg": "414.63",
    "khu": "238.50",
    "mym": "72.57",
    "raj": "264.29",
    "ran": "127.86",
    "bar": "103.29",
    "syl": "152.71"
  },
  {
    "date": "2021-07-06",
    "dhk": "983.00",
    "ctg": "476.00",
    "khu": "279.14",
    "mym": "60.13",
    "raj": "259.14",
    "ran": "129.14",
    "bar": "107.29",
    "syl": "140.00"
  },
  {
    "date": "2021-07-06",
    "dhk": "983.00",
    "ctg": "476.00",
    "khu": "279.14",
    "mym": "60.13",
    "raj": "259.14",
    "ran": "129.14",
    "bar": "107.29",
    "syl": "140.00"
  },
  {
    "date": "2021-07-06",
    "dhk": "983.00",
    "ctg": "476.00",
    "khu": "279.14",
    "mym": "60.13",
    "raj": "259.14",
    "ran": "129.14",
    "bar": "107.29",
    "syl": "140.00"
  },
  {
    "date": "2021-07-06",
    "dhk": "983.00",
    "ctg": "476.00",
    "khu": "279.14",
    "mym": "60.13",
    "raj": "259.14",
    "ran": "129.14",
    "bar": "107.29",
    "syl": "140.00"
  },
  {
    "date": "2021-07-07",
    "dhk": "954.50",
    "ctg": "476.14",
    "khu": "304.71",
    "mym": "61.88",
    "raj": "218.14",
    "ran": "131.57",
    "bar": "104.29",
    "syl": "123.43"
  },
  {
    "date": "2021-07-08",
    "dhk": "693.27",
    "ctg": "443.86",
    "khu": "313.00",
    "mym": "52.38",
    "raj": "197.86",
    "ran": "109.00",
    "bar": "112.71",
    "syl": "109.29"
  },
  {
    "date": "2021-07-08",
    "dhk": "693.27",
    "ctg": "443.86",
    "khu": "313.00",
    "mym": "52.38",
    "raj": "197.86",
    "ran": "109.00",
    "bar": "112.71",
    "syl": "109.29"
  },
  {
    "date": "2021-07-08",
    "dhk": "693.27",
    "ctg": "443.86",
    "khu": "313.00",
    "mym": "52.38",
    "raj": "197.86",
    "ran": "109.00",
    "bar": "112.71",
    "syl": "109.29"
  },
  {
    "date": "2021-07-08",
    "dhk": "693.27",
    "ctg": "443.86",
    "khu": "313.00",
    "mym": "52.38",
    "raj": "197.86",
    "ran": "109.00",
    "bar": "112.71",
    "syl": "109.29"
  },
  {
    "date": "2021-07-09",
    "dhk": "675.45",
    "ctg": "440.29",
    "khu": "274.86",
    "mym": "55.00",
    "raj": "201.43",
    "ran": "106.14",
    "bar": "114.29",
    "syl": "114.57"
  },
  {
    "date": "2021-07-10",
    "dhk": "570.69",
    "ctg": "432.00",
    "khu": "271.71",
    "mym": "47.88",
    "raj": "199.00",
    "ran": "98.57",
    "bar": "108.71",
    "syl": "93.86"
  },
  {
    "date": "2021-07-10",
    "dhk": "570.69",
    "ctg": "432.00",
    "khu": "271.71",
    "mym": "47.88",
    "raj": "199.00",
    "ran": "98.57",
    "bar": "108.71",
    "syl": "93.86"
  },
  {
    "date": "2021-07-10",
    "dhk": "570.69",
    "ctg": "432.00",
    "khu": "271.71",
    "mym": "47.88",
    "raj": "199.00",
    "ran": "98.57",
    "bar": "108.71",
    "syl": "93.86"
  },
  {
    "date": "2021-07-11",
    "dhk": "568.15",
    "ctg": "422.86",
    "khu": "281.57",
    "mym": "46.63",
    "raj": "199.43",
    "ran": "102.43",
    "bar": "106.57",
    "syl": "100.57"
  },
  {
    "date": "2021-07-12",
    "dhk": "592.85",
    "ctg": "413.43",
    "khu": "297.86",
    "mym": "45.25",
    "raj": "197.71",
    "ran": "101.43",
    "bar": "103.57",
    "syl": "91.00"
  },
  {
    "date": "2021-07-13",
    "dhk": "664.58",
    "ctg": "404.86",
    "khu": "313.43",
    "mym": "53.43",
    "raj": "215.57",
    "ran": "102.86",
    "bar": "94.86",
    "syl": "92.29"
  },
  {
    "date": "2021-07-14",
    "dhk": "678.67",
    "ctg": "412.43",
    "khu": "291.43",
    "mym": "54.71",
    "raj": "234.14",
    "ran": "110.14",
    "bar": "101.57",
    "syl": "98.29"
  },
  {
    "date": "2021-07-15",
    "dhk": "887.33",
    "ctg": "400.71",
    "khu": "278.57",
    "mym": "56.71",
    "raj": "236.43",
    "ran": "109.14",
    "bar": "94.71",
    "syl": "109.14"
  },
  {
    "date": "2021-07-16",
    "dhk": "814.40",
    "ctg": "403.57",
    "khu": "274.00",
    "mym": "55.29",
    "raj": "250.29",
    "ran": "112.86",
    "bar": "100.29",
    "syl": "105.14"
  },
  {
    "date": "2021-07-16",
    "dhk": "814.40",
    "ctg": "403.57",
    "khu": "274.00",
    "mym": "55.29",
    "raj": "250.29",
    "ran": "112.86",
    "bar": "100.29",
    "syl": "105.14"
  },
  {
    "date": "2021-07-17",
    "dhk": "983.13",
    "ctg": "401.71",
    "khu": "282.57",
    "mym": "58.57",
    "raj": "258.14",
    "ran": "115.57",
    "bar": "102.71",
    "syl": "102.29"
  },
  {
    "date": "2021-07-18",
    "dhk": "1016.00",
    "ctg": "406.14",
    "khu": "274.57",
    "mym": "57.29",
    "raj": "256.14",
    "ran": "117.86",
    "bar": "107.57",
    "syl": "93.29"
  },
  {
    "date": "2021-07-19",
    "dhk": "895.89",
    "ctg": "396.00",
    "khu": "269.86",
    "mym": "62.71",
    "raj": "270.29",
    "ran": "121.00",
    "bar": "108.14",
    "syl": "94.57"
  },
  {
    "date": "2021-07-19",
    "dhk": "895.89",
    "ctg": "396.00",
    "khu": "269.86",
    "mym": "62.71",
    "raj": "270.29",
    "ran": "121.00",
    "bar": "108.14",
    "syl": "94.57"
  },
  {
    "date": "2021-07-20",
    "dhk": "903.78",
    "ctg": "397.00",
    "khu": "260.57",
    "mym": "61.86",
    "raj": "271.86",
    "ran": "121.29",
    "bar": "113.00",
    "syl": "97.43"
  },
  {
    "date": "2021-07-21",
    "dhk": "890.67",
    "ctg": "359.43",
    "khu": "255.86",
    "mym": "61.14",
    "raj": "272.29",
    "ran": "120.29",
    "bar": "108.14",
    "syl": "72.00"
  },
  {
    "date": "2021-07-21",
    "dhk": "890.67",
    "ctg": "359.43",
    "khu": "255.86",
    "mym": "61.14",
    "raj": "272.29",
    "ran": "120.29",
    "bar": "108.14",
    "syl": "72.00"
  },
  {
    "date": "2021-07-22",
    "dhk": "913.00",
    "ctg": "363.57",
    "khu": "257.86",
    "mym": "57.29",
    "raj": "282.00",
    "ran": "119.43",
    "bar": "114.57",
    "syl": "61.63"
  },
  {
    "date": "2021-07-23",
    "dhk": "1012.63",
    "ctg": "356.00",
    "khu": "254.29",
    "mym": "57.43",
    "raj": "282.29",
    "ran": "116.57",
    "bar": "107.14",
    "syl": "61.38"
  },
  {
    "date": "2021-07-24",
    "dhk": "1043.50",
    "ctg": "362.86",
    "khu": "243.43",
    "mym": "52.57",
    "raj": "292.00",
    "ran": "116.86",
    "bar": "106.00",
    "syl": "66.63"
  },
  {
    "date": "2021-07-25",
    "dhk": "1063.50",
    "ctg": "379.57",
    "khu": "259.86",
    "mym": "52.86",
    "raj": "297.57",
    "ran": "115.29",
    "bar": "91.71",
    "syl": "73.50"
  },
  {
    "date": "2021-07-26",
    "dhk": "1187.29",
    "ctg": "362.00",
    "khu": "244.86",
    "mym": "45.86",
    "raj": "286.29",
    "ran": "121.14",
    "bar": "90.14",
    "syl": "83.00"
  },
  {
    "date": "2021-07-27",
    "dhk": "1144.29",
    "ctg": "348.86",
    "khu": "237.00",
    "mym": "41.57",
    "raj": "287.43",
    "ran": "126.29",
    "bar": "90.86",
    "syl": "73.25"
  },
  {
    "date": "2021-07-28",
    "dhk": "1162.57",
    "ctg": "365.00",
    "khu": "212.63",
    "mym": "39.43",
    "raj": "297.86",
    "ran": "127.43",
    "bar": "89.43",
    "syl": "84.71"
  },
  {
    "date": "2021-07-28",
    "dhk": "1162.57",
    "ctg": "365.00",
    "khu": "212.63",
    "mym": "39.43",
    "raj": "297.86",
    "ran": "127.43",
    "bar": "89.43",
    "syl": "84.71"
  },
  {
    "date": "2021-07-29",
    "dhk": "1165.43",
    "ctg": "368.57",
    "khu": "206.75",
    "mym": "38.29",
    "raj": "285.14",
    "ran": "123.71",
    "bar": "86.57",
    "syl": "85.29"
  },
  {
    "date": "2021-07-30",
    "dhk": "1215.00",
    "ctg": "365.86",
    "khu": "210.13",
    "mym": "39.14",
    "raj": "271.57",
    "ran": "121.14",
    "bar": "86.00",
    "syl": "81.00"
  },
  {
    "date": "2021-07-31",
    "dhk": "1196.57",
    "ctg": "351.86",
    "khu": "223.88",
    "mym": "37.14",
    "raj": "269.43",
    "ran": "103.38",
    "bar": "84.86",
    "syl": "82.43"
  },
  {
    "date": "2021-07-31",
    "dhk": "1196.57",
    "ctg": "351.86",
    "khu": "223.88",
    "mym": "37.14",
    "raj": "269.43",
    "ran": "103.38",
    "bar": "84.86",
    "syl": "82.43"
  },
  {
    "date": "2021-08-01",
    "dhk": "1041.00",
    "ctg": "300.86",
    "khu": "197.50",
    "mym": "36.57",
    "raj": "250.71",
    "ran": "95.00",
    "bar": "81.00",
    "syl": "83.14"
  },
  {
    "date": "2021-08-02",
    "dhk": "862.13",
    "ctg": "277.57",
    "khu": "196.13",
    "mym": "36.14",
    "raj": "236.86",
    "ran": "88.25",
    "bar": "71.29",
    "syl": "72.14"
  },
  {
    "date": "2021-08-02",
    "dhk": "862.13",
    "ctg": "277.57",
    "khu": "196.13",
    "mym": "36.14",
    "raj": "236.86",
    "ran": "88.25",
    "bar": "71.29",
    "syl": "72.14"
  },
  {
    "date": "2021-08-03",
    "dhk": "831.88",
    "ctg": "264.57",
    "khu": "179.25",
    "mym": "34.57",
    "raj": "206.57",
    "ran": "83.13",
    "bar": "63.00",
    "syl": "74.29"
  },
  {
    "date": "2021-08-04",
    "dhk": "817.88",
    "ctg": "255.43",
    "khu": "198.14",
    "mym": "36.57",
    "raj": "180.43",
    "ran": "85.13",
    "bar": "63.29",
    "syl": "74.57"
  },
  {
    "date": "2021-08-05",
    "dhk": "805.38",
    "ctg": "264.43",
    "khu": "218.00",
    "mym": "39.14",
    "raj": "181.29",
    "ran": "89.88",
    "bar": "54.00",
    "syl": "76.43"
  },
  {
    "date": "2021-08-06",
    "dhk": "803.50",
    "ctg": "260.14",
    "khu": "230.00",
    "mym": "41.43",
    "raj": "191.57",
    "ran": "91.88",
    "bar": "55.29",
    "syl": "80.71"
  },
  {
    "date": "2021-08-07",
    "dhk": "822.50",
    "ctg": "264.29",
    "khu": "227.14",
    "mym": "47.00",
    "raj": "184.00",
    "ran": "114.43",
    "bar": "55.00",
    "syl": "81.29"
  },
  {
    "date": "2021-08-08",
    "dhk": "947.38",
    "ctg": "301.14",
    "khu": "246.00",
    "mym": "49.00",
    "raj": "190.86",
    "ran": "129.71",
    "bar": "58.00",
    "syl": "82.71"
  },
  {
    "date": "2021-08-09",
    "dhk": "1186.86",
    "ctg": "361.14",
    "khu": "267.71",
    "mym": "55.86",
    "raj": "196.43",
    "ran": "135.14",
    "bar": "70.71",
    "syl": "76.43"
  },
  {
    "date": "2021-08-10",
    "dhk": "1273.14",
    "ctg": "380.57",
    "khu": "299.43",
    "mym": "67.14",
    "raj": "215.00",
    "ran": "144.14",
    "bar": "76.29",
    "syl": "92.14"
  },
  {
    "date": "2021-08-11",
    "dhk": "1286.00",
    "ctg": "391.29",
    "khu": "302.43",
    "mym": "68.57",
    "raj": "232.43",
    "ran": "136.86",
    "bar": "75.14",
    "syl": "102.29"
  },
  {
    "date": "2021-08-12",
    "dhk": "1273.00",
    "ctg": "367.86",
    "khu": "275.57",
    "mym": "72.71",
    "raj": "233.43",
    "ran": "140.14",
    "bar": "79.86",
    "syl": "110.86"
  },
  {
    "date": "2021-08-13",
    "dhk": "1272.00",
    "ctg": "379.71",
    "khu": "256.14",
    "mym": "72.71",
    "raj": "219.29",
    "ran": "144.57",
    "bar": "77.71",
    "syl": "112.14"
  },
  {
    "date": "2021-08-14",
    "dhk": "1272.14",
    "ctg": "373.14",
    "khu": "248.00",
    "mym": "71.71",
    "raj": "223.86",
    "ran": "143.86",
    "bar": "78.57",
    "syl": "106.71"
  },
  {
    "date": "2021-08-15",
    "dhk": "1228.43",
    "ctg": "359.86",
    "khu": "242.86",
    "mym": "69.29",
    "raj": "230.14",
    "ran": "166.29",
    "bar": "78.71",
    "syl": "104.86"
  },
  {
    "date": "2021-08-16",
    "dhk": "1183.43",
    "ctg": "330.29",
    "khu": "229.86",
    "mym": "68.14",
    "raj": "246.43",
    "ran": "162.00",
    "bar": "71.57",
    "syl": "111.86"
  },
  {
    "date": "2021-08-17",
    "dhk": "1160.43",
    "ctg": "333.00",
    "khu": "222.43",
    "mym": "61.57",
    "raj": "243.29",
    "ran": "162.29",
    "bar": "69.00",
    "syl": "100.71"
  },
  {
    "date": "2021-08-18",
    "dhk": "1170.29",
    "ctg": "320.14",
    "khu": "216.71",
    "mym": "56.71",
    "raj": "232.57",
    "ran": "168.71",
    "bar": "67.57",
    "syl": "102.29"
  },
  {
    "date": "2021-08-19",
    "dhk": "1194.43",
    "ctg": "324.29",
    "khu": "230.29",
    "mym": "54.86",
    "raj": "236.86",
    "ran": "167.43",
    "bar": "69.14",
    "syl": "96.71"
  },
  {
    "date": "2021-08-20",
    "dhk": "1182.86",
    "ctg": "307.71",
    "khu": "227.14",
    "mym": "51.57",
    "raj": "232.29",
    "ran": "164.00",
    "bar": "66.71",
    "syl": "98.29"
  },
  {
    "date": "2021-08-21",
    "dhk": "1166.86",
    "ctg": "302.86",
    "khu": "244.43",
    "mym": "49.86",
    "raj": "223.43",
    "ran": "160.29",
    "bar": "65.00",
    "syl": "108.00"
  },
  {
    "date": "2021-08-22",
    "dhk": "1188.29",
    "ctg": "300.71",
    "khu": "248.86",
    "mym": "53.14",
    "raj": "219.71",
    "ran": "135.86",
    "bar": "63.14",
    "syl": "105.71"
  },
  {
    "date": "2021-08-23",
    "dhk": "1193.57",
    "ctg": "309.14",
    "khu": "261.86",
    "mym": "49.43",
    "raj": "202.57",
    "ran": "136.86",
    "bar": "61.57",
    "syl": "111.00"
  },
  {
    "date": "2021-08-24",
    "dhk": "1182.29",
    "ctg": "292.43",
    "khu": "250.86",
    "mym": "47.29",
    "raj": "199.14",
    "ran": "133.43",
    "bar": "64.57",
    "syl": "111.71"
  },
  {
    "date": "2021-08-25",
    "dhk": "1155.71",
    "ctg": "281.29",
    "khu": "242.29",
    "mym": "46.43",
    "raj": "200.57",
    "ran": "133.14",
    "bar": "63.43",
    "syl": "108.29"
  },
  {
    "date": "2021-08-26",
    "dhk": "1123.57",
    "ctg": "274.71",
    "khu": "235.43",
    "mym": "41.86",
    "raj": "191.86",
    "ran": "131.86",
    "bar": "62.71",
    "syl": "109.43"
  },
  {
    "date": "2021-08-27",
    "dhk": "1117.00",
    "ctg": "269.29",
    "khu": "244.43",
    "mym": "39.43",
    "raj": "187.00",
    "ran": "128.00",
    "bar": "63.29",
    "syl": "105.14"
  },
  {
    "date": "2021-08-28",
    "dhk": "1099.71",
    "ctg": "262.29",
    "khu": "223.86",
    "mym": "39.86",
    "raj": "187.29",
    "ran": "128.86",
    "bar": "63.00",
    "syl": "101.29"
  },
  {
    "date": "2021-08-29",
    "dhk": "1115.00",
    "ctg": "259.29",
    "khu": "216.57",
    "mym": "39.86",
    "raj": "179.29",
    "ran": "122.14",
    "bar": "60.71",
    "syl": "100.86"
  },
  {
    "date": "2021-08-30",
    "dhk": "1091.00",
    "ctg": "237.86",
    "khu": "196.14",
    "mym": "40.43",
    "raj": "169.43",
    "ran": "132.14",
    "bar": "65.71",
    "syl": "102.14"
  },
  {
    "date": "2021-08-31",
    "dhk": "1052.71",
    "ctg": "228.00",
    "khu": "194.29",
    "mym": "41.29",
    "raj": "161.86",
    "ran": "150.29",
    "bar": "58.43",
    "syl": "100.14"
  },
  {
    "date": "2021-09-01",
    "dhk": "1058.43",
    "ctg": "231.57",
    "khu": "194.43",
    "mym": "42.86",
    "raj": "149.57",
    "ran": "142.86",
    "bar": "59.43",
    "syl": "91.14"
  },
  {
    "date": "2021-09-02",
    "dhk": "1059.86",
    "ctg": "236.00",
    "khu": "187.14",
    "mym": "43.57",
    "raj": "141.29",
    "ran": "140.14",
    "bar": "53.86",
    "syl": "89.86"
  },
  {
    "date": "2021-09-03",
    "dhk": "1067.43",
    "ctg": "223.43",
    "khu": "176.29",
    "mym": "43.43",
    "raj": "143.57",
    "ran": "132.29",
    "bar": "52.57",
    "syl": "89.43"
  },
  {
    "date": "2021-09-04",
    "dhk": "1079.00",
    "ctg": "220.57",
    "khu": "163.86",
    "mym": "40.14",
    "raj": "131.14",
    "ran": "122.00",
    "bar": "48.86",
    "syl": "89.00"
  },
  {
    "date": "2021-09-05",
    "dhk": "1044.00",
    "ctg": "213.29",
    "khu": "160.00",
    "mym": "37.29",
    "raj": "126.71",
    "ran": "115.43",
    "bar": "50.86",
    "syl": "93.57"
  },
  {
    "date": "2021-09-06",
    "dhk": "1060.43",
    "ctg": "212.43",
    "khu": "159.00",
    "mym": "38.57",
    "raj": "124.00",
    "ran": "95.14",
    "bar": "48.29",
    "syl": "91.14"
  },
  {
    "date": "2021-09-07",
    "dhk": "1068.14",
    "ctg": "214.00",
    "khu": "155.00",
    "mym": "35.14",
    "raj": "123.86",
    "ran": "72.57",
    "bar": "46.00",
    "syl": "91.00"
  },
  {
    "date": "2021-09-08",
    "dhk": "1026.00",
    "ctg": "205.57",
    "khu": "142.00",
    "mym": "33.29",
    "raj": "119.29",
    "ran": "66.00",
    "bar": "41.71",
    "syl": "89.00"
  },
  {
    "date": "2021-09-09",
    "dhk": "1017.43",
    "ctg": "189.14",
    "khu": "136.43",
    "mym": "36.86",
    "raj": "116.86",
    "ran": "58.14",
    "bar": "39.57",
    "syl": "91.86"
  },
  {
    "date": "2021-09-10",
    "dhk": "993.00",
    "ctg": "184.14",
    "khu": "134.14",
    "mym": "37.57",
    "raj": "109.71",
    "ran": "55.57",
    "bar": "36.57",
    "syl": "91.43"
  },
  {
    "date": "2021-09-11",
    "dhk": "961.71",
    "ctg": "180.29",
    "khu": "126.43",
    "mym": "36.00",
    "raj": "108.00",
    "ran": "52.14",
    "bar": "35.29",
    "syl": "94.43"
  },
  {
    "date": "2021-09-12",
    "dhk": "943.43",
    "ctg": "186.29",
    "khu": "115.00",
    "mym": "35.29",
    "raj": "113.14",
    "ran": "56.14",
    "bar": "33.57",
    "syl": "88.00"
  },
  {
    "date": "2021-09-13",
    "dhk": "922.71",
    "ctg": "186.14",
    "khu": "109.43",
    "mym": "32.71",
    "raj": "115.29",
    "ran": "54.14",
    "bar": "28.14",
    "syl": "86.86"
  },
  {
    "date": "2021-09-14",
    "dhk": "915.86",
    "ctg": "185.86",
    "khu": "104.00",
    "mym": "33.00",
    "raj": "109.86",
    "ran": "45.57",
    "bar": "30.43",
    "syl": "81.86"
  },
  {
    "date": "2021-09-15",
    "dhk": "924.71",
    "ctg": "179.71",
    "khu": "86.75",
    "mym": "32.71",
    "raj": "111.14",
    "ran": "43.57",
    "bar": "29.86",
    "syl": "83.00"
  },
  {
    "date": "2021-09-15",
    "dhk": "924.71",
    "ctg": "179.71",
    "khu": "86.75",
    "mym": "32.71",
    "raj": "111.14",
    "ran": "43.57",
    "bar": "29.86",
    "syl": "83.00"
  },
  {
    "date": "2021-09-16",
    "dhk": "902.43",
    "ctg": "170.57",
    "khu": "83.25",
    "mym": "29.29",
    "raj": "112.71",
    "ran": "39.86",
    "bar": "29.29",
    "syl": "78.29"
  },
  {
    "date": "2021-09-17",
    "dhk": "887.86",
    "ctg": "168.14",
    "khu": "76.25",
    "mym": "26.86",
    "raj": "110.14",
    "ran": "53.71",
    "bar": "29.14",
    "syl": "71.86"
  },
  {
    "date": "2021-09-18",
    "dhk": "897.43",
    "ctg": "168.71",
    "khu": "75.88",
    "mym": "26.14",
    "raj": "112.14",
    "ran": "56.00",
    "bar": "27.29",
    "syl": "63.00"
  },
  {
    "date": "2021-09-19",
    "dhk": "914.43",
    "ctg": "158.43",
    "khu": "74.25",
    "mym": "27.14",
    "raj": "116.86",
    "ran": "53.29",
    "bar": "27.57",
    "syl": "59.00"
  },
  {
    "date": "2021-09-20",
    "dhk": "911.43",
    "ctg": "150.43",
    "khu": "70.13",
    "mym": "25.86",
    "raj": "111.86",
    "ran": "61.00",
    "bar": "29.29",
    "syl": "53.29"
  },
  {
    "date": "2021-09-21",
    "dhk": "889.14",
    "ctg": "140.00",
    "khu": "68.25",
    "mym": "25.86",
    "raj": "111.29",
    "ran": "63.29",
    "bar": "27.71",
    "syl": "53.57"
  },
  {
    "date": "2021-09-22",
    "dhk": "871.14",
    "ctg": "142.29",
    "khu": "78.57",
    "mym": "26.71",
    "raj": "115.57",
    "ran": "66.29",
    "bar": "26.14",
    "syl": "50.29"
  },
  {
    "date": "2021-09-23",
    "dhk": "761.63",
    "ctg": "148.29",
    "khu": "70.57",
    "mym": "24.86",
    "raj": "120.00",
    "ran": "66.43",
    "bar": "27.00",
    "syl": "42.00"
  },
  {
    "date": "2021-09-23",
    "dhk": "761.63",
    "ctg": "148.29",
    "khu": "70.57",
    "mym": "24.86",
    "raj": "120.00",
    "ran": "66.43",
    "bar": "27.00",
    "syl": "42.00"
  },
  {
    "date": "2021-09-24",
    "dhk": "772.13",
    "ctg": "147.57",
    "khu": "67.43",
    "mym": "23.71",
    "raj": "109.43",
    "ran": "53.86",
    "bar": "25.29",
    "syl": "40.43"
  },
  {
    "date": "2021-09-25",
    "dhk": "759.88",
    "ctg": "141.29",
    "khu": "64.14",
    "mym": "24.43",
    "raj": "109.71",
    "ran": "50.57",
    "bar": "25.57",
    "syl": "35.86"
  },
  {
    "date": "2021-09-26",
    "dhk": "739.50",
    "ctg": "136.29",
    "khu": "60.71",
    "mym": "22.57",
    "raj": "101.43",
    "ran": "50.14",
    "bar": "23.71",
    "syl": "39.00"
  },
  {
    "date": "2021-09-27",
    "dhk": "724.63",
    "ctg": "133.29",
    "khu": "58.57",
    "mym": "23.14",
    "raj": "96.57",
    "ran": "43.00",
    "bar": "23.00",
    "syl": "35.00"
  },
  {
    "date": "2021-09-28",
    "dhk": "735.00",
    "ctg": "126.29",
    "khu": "56.57",
    "mym": "23.57",
    "raj": "92.57",
    "ran": "41.43",
    "bar": "22.86",
    "syl": "37.57"
  },
  {
    "date": "2021-09-29",
    "dhk": "718.75",
    "ctg": "114.14",
    "khu": "52.14",
    "mym": "22.57",
    "raj": "79.86",
    "ran": "40.29",
    "bar": "24.14",
    "syl": "36.57"
  },
  {
    "date": "2021-09-30",
    "dhk": "816.71",
    "ctg": "111.29",
    "khu": "52.00",
    "mym": "24.14",
    "raj": "71.86",
    "ran": "40.57",
    "bar": "22.14",
    "syl": "36.43"
  },
  {
    "date": "2021-10-01",
    "dhk": "812.57",
    "ctg": "112.00",
    "khu": "49.43",
    "mym": "23.57",
    "raj": "71.71",
    "ran": "40.14",
    "bar": "22.86",
    "syl": "34.29"
  },
  {
    "date": "2021-10-02",
    "dhk": "812.29",
    "ctg": "113.43",
    "khu": "47.00",
    "mym": "21.86",
    "raj": "64.29",
    "ran": "40.57",
    "bar": "22.57",
    "syl": "35.43"
  },
  {
    "date": "2021-10-03",
    "dhk": "824.71",
    "ctg": "115.43",
    "khu": "46.00",
    "mym": "22.43",
    "raj": "57.14",
    "ran": "38.14",
    "bar": "23.00",
    "syl": "33.43"
  },
  {
    "date": "2021-10-04",
    "dhk": "842.29",
    "ctg": "117.71",
    "khu": "46.29",
    "mym": "20.57",
    "raj": "59.00",
    "ran": "35.71",
    "bar": "24.29",
    "syl": "35.43"
  },
  {
    "date": "2021-10-05",
    "dhk": "852.86",
    "ctg": "125.43",
    "khu": "45.14",
    "mym": "18.86",
    "raj": "59.43",
    "ran": "38.29",
    "bar": "24.00",
    "syl": "31.29"
  },
  {
    "date": "2021-10-06",
    "dhk": "874.71",
    "ctg": "129.86",
    "khu": "48.86",
    "mym": "17.86",
    "raj": "70.43",
    "ran": "36.86",
    "bar": "22.00",
    "syl": "30.71"
  },
  {
    "date": "2021-10-07",
    "dhk": "871.57",
    "ctg": "131.57",
    "khu": "48.71",
    "mym": "16.43",
    "raj": "66.43",
    "ran": "34.86",
    "bar": "23.14",
    "syl": "32.43"
  },
  {
    "date": "2021-10-08",
    "dhk": "855.86",
    "ctg": "134.86",
    "khu": "52.14",
    "mym": "15.14",
    "raj": "63.86",
    "ran": "35.57",
    "bar": "24.57",
    "syl": "36.29"
  },
  {
    "date": "2021-10-09",
    "dhk": "867.57",
    "ctg": "136.00",
    "khu": "51.29",
    "mym": "15.57",
    "raj": "61.71",
    "ran": "32.71",
    "bar": "24.57",
    "syl": "36.43"
  },
  {
    "date": "2021-10-10",
    "dhk": "854.71",
    "ctg": "137.00",
    "khu": "51.71",
    "mym": "16.14",
    "raj": "61.57",
    "ran": "30.71",
    "bar": "24.29",
    "syl": "37.29"
  },
  {
    "date": "2021-10-11",
    "dhk": "842.43",
    "ctg": "140.14",
    "khu": "48.71",
    "mym": "15.86",
    "raj": "57.71",
    "ran": "31.14",
    "bar": "23.29",
    "syl": "35.14"
  },
  {
    "date": "2021-10-12",
    "dhk": "845.71",
    "ctg": "136.00",
    "khu": "47.00",
    "mym": "15.57",
    "raj": "52.29",
    "ran": "28.00",
    "bar": "23.86",
    "syl": "33.43"
  },
  {
    "date": "2021-10-13",
    "dhk": "860.86",
    "ctg": "141.29",
    "khu": "44.71",
    "mym": "15.57",
    "raj": "42.14",
    "ran": "27.14",
    "bar": "24.57",
    "syl": "34.43"
  },
  {
    "date": "2021-10-14",
    "dhk": "876.14",
    "ctg": "136.00",
    "khu": "43.00",
    "mym": "14.57",
    "raj": "45.00",
    "ran": "30.14",
    "bar": "24.57",
    "syl": "36.43"
  },
  {
    "date": "2021-10-15",
    "dhk": "920.43",
    "ctg": "136.71",
    "khu": "40.57",
    "mym": "16.43",
    "raj": "45.43",
    "ran": "29.57",
    "bar": "23.29",
    "syl": "35.29"
  },
  {
    "date": "2021-10-16",
    "dhk": "916.71",
    "ctg": "138.43",
    "khu": "43.14",
    "mym": "15.71",
    "raj": "45.57",
    "ran": "32.29",
    "bar": "23.86",
    "syl": "35.14"
  },
  {
    "date": "2021-10-17",
    "dhk": "824.50",
    "ctg": "136.43",
    "khu": "41.86",
    "mym": "14.00",
    "raj": "45.43",
    "ran": "31.57",
    "bar": "24.14",
    "syl": "33.00"
  },
  {
    "date": "2021-10-17",
    "dhk": "824.50",
    "ctg": "136.43",
    "khu": "41.86",
    "mym": "14.00",
    "raj": "45.43",
    "ran": "31.57",
    "bar": "24.14",
    "syl": "33.00"
  },
  {
    "date": "2021-10-18",
    "dhk": "845.75",
    "ctg": "140.29",
    "khu": "43.00",
    "mym": "13.14",
    "raj": "48.86",
    "ran": "33.43",
    "bar": "25.71",
    "syl": "33.29"
  },
  {
    "date": "2021-10-19",
    "dhk": "835.50",
    "ctg": "146.29",
    "khu": "42.29",
    "mym": "13.14",
    "raj": "49.71",
    "ran": "31.43",
    "bar": "22.71",
    "syl": "37.29"
  },
  {
    "date": "2021-10-20",
    "dhk": "835.63",
    "ctg": "142.43",
    "khu": "38.14",
    "mym": "12.86",
    "raj": "50.71",
    "ran": "32.86",
    "bar": "24.29",
    "syl": "34.71"
  },
  {
    "date": "2021-10-21",
    "dhk": "846.00",
    "ctg": "147.43",
    "khu": "41.00",
    "mym": "12.86",
    "raj": "50.14",
    "ran": "32.00",
    "bar": "27.00",
    "syl": "29.86"
  },
  {
    "date": "2021-10-22",
    "dhk": "798.50",
    "ctg": "152.57",
    "khu": "41.29",
    "mym": "12.43",
    "raj": "52.57",
    "ran": "31.71",
    "bar": "26.86",
    "syl": "30.14"
  },
  {
    "date": "2021-10-23",
    "dhk": "785.13",
    "ctg": "150.86",
    "khu": "37.14",
    "mym": "13.43",
    "raj": "58.57",
    "ran": "32.43",
    "bar": "24.71",
    "syl": "30.57"
  },
  {
    "date": "2021-10-24",
    "dhk": "881.29",
    "ctg": "153.14",
    "khu": "38.43",
    "mym": "13.57",
    "raj": "56.00",
    "ran": "33.14",
    "bar": "24.43",
    "syl": "32.57"
  },
  {
    "date": "2021-10-25",
    "dhk": "858.86",
    "ctg": "146.86",
    "khu": "36.71",
    "mym": "14.71",
    "raj": "56.00",
    "ran": "31.71",
    "bar": "24.57",
    "syl": "33.43"
  },
  {
    "date": "2021-10-26",
    "dhk": "848.00",
    "ctg": "145.71",
    "khu": "34.86",
    "mym": "13.57",
    "raj": "58.29",
    "ran": "36.29",
    "bar": "26.00",
    "syl": "32.57"
  },
  {
    "date": "2021-10-27",
    "dhk": "725.50",
    "ctg": "143.71",
    "khu": "33.71",
    "mym": "13.14",
    "raj": "56.29",
    "ran": "33.71",
    "bar": "23.43",
    "syl": "33.86"
  },
  {
    "date": "2021-10-27",
    "dhk": "725.50",
    "ctg": "143.71",
    "khu": "33.71",
    "mym": "13.14",
    "raj": "56.29",
    "ran": "33.71",
    "bar": "23.43",
    "syl": "33.86"
  },
  {
    "date": "2021-10-28",
    "dhk": "735.25",
    "ctg": "144.57",
    "khu": "29.29",
    "mym": "15.29",
    "raj": "60.57",
    "ran": "32.29",
    "bar": "24.00",
    "syl": "36.29"
  },
  {
    "date": "2021-10-29",
    "dhk": "775.13",
    "ctg": "143.29",
    "khu": "26.57",
    "mym": "18.14",
    "raj": "60.57",
    "ran": "34.29",
    "bar": "24.86",
    "syl": "37.71"
  },
  {
    "date": "2021-10-30",
    "dhk": "793.38",
    "ctg": "145.71",
    "khu": "27.86",
    "mym": "18.00",
    "raj": "56.14",
    "ran": "33.14",
    "bar": "28.14",
    "syl": "38.00"
  },
  {
    "date": "2021-10-31",
    "dhk": "812.88",
    "ctg": "147.14",
    "khu": "31.57",
    "mym": "17.43",
    "raj": "59.71",
    "ran": "33.43",
    "bar": "29.29",
    "syl": "39.00"
  },
  {
    "date": "2021-11-01",
    "dhk": "836.25",
    "ctg": "148.86",
    "khu": "31.00",
    "mym": "17.86",
    "raj": "58.14",
    "ran": "34.29",
    "bar": "30.43",
    "syl": "42.29"
  },
  {
    "date": "2021-11-02",
    "dhk": "864.75",
    "ctg": "151.29",
    "khu": "31.57",
    "mym": "18.57",
    "raj": "58.29",
    "ran": "32.71",
    "bar": "32.43",
    "syl": "39.71"
  },
  {
    "date": "2021-11-03",
    "dhk": "992.43",
    "ctg": "157.14",
    "khu": "34.86",
    "mym": "19.43",
    "raj": "62.57",
    "ran": "35.29",
    "bar": "35.57",
    "syl": "38.43"
  },
  {
    "date": "2021-11-04",
    "dhk": "1001.71",
    "ctg": "156.57",
    "khu": "38.43",
    "mym": "19.29",
    "raj": "64.29",
    "ran": "36.00",
    "bar": "37.86",
    "syl": "37.29"
  },
  {
    "date": "2021-11-05",
    "dhk": "977.14",
    "ctg": "154.43",
    "khu": "41.00",
    "mym": "16.71",
    "raj": "65.00",
    "ran": "38.14",
    "bar": "38.14",
    "syl": "34.14"
  },
  {
    "date": "2021-11-06",
    "dhk": "994.86",
    "ctg": "157.43",
    "khu": "41.00",
    "mym": "17.43",
    "raj": "67.00",
    "ran": "38.00",
    "bar": "40.57",
    "syl": "33.14"
  },
  {
    "date": "2021-11-07",
    "dhk": "992.71",
    "ctg": "158.71",
    "khu": "37.29",
    "mym": "19.29",
    "raj": "64.71",
    "ran": "36.86",
    "bar": "40.86",
    "syl": "33.43"
  },
  {
    "date": "2021-11-08",
    "dhk": "996.86",
    "ctg": "156.86",
    "khu": "39.29",
    "mym": "19.14",
    "raj": "73.71",
    "ran": "35.14",
    "bar": "42.14",
    "syl": "29.00"
  },
  {
    "date": "2021-11-09",
    "dhk": "1008.14",
    "ctg": "168.00",
    "khu": "39.00",
    "mym": "20.29",
    "raj": "73.71",
    "ran": "35.14",
    "bar": "42.29",
    "syl": "34.71"
  },
  {
    "date": "2021-11-10",
    "dhk": "1043.29",
    "ctg": "168.57",
    "khu": "37.86",
    "mym": "21.57",
    "raj": "74.86",
    "ran": "37.71",
    "bar": "43.71",
    "syl": "35.57"
  },
  {
    "date": "2021-11-11",
    "dhk": "1029.43",
    "ctg": "175.57",
    "khu": "35.43",
    "mym": "19.71",
    "raj": "69.57",
    "ran": "38.57",
    "bar": "40.86",
    "syl": "39.14"
  },
  {
    "date": "2021-11-12",
    "dhk": "1064.14",
    "ctg": "180.43",
    "khu": "37.14",
    "mym": "18.29",
    "raj": "67.57",
    "ran": "37.71",
    "bar": "42.71",
    "syl": "40.29"
  },
  {
    "date": "2021-11-13",
    "dhk": "1066.71",
    "ctg": "178.14",
    "khu": "36.00",
    "mym": "18.00",
    "raj": "67.00",
    "ran": "38.71",
    "bar": "42.57",
    "syl": "41.86"
  },
  {
    "date": "2021-11-14",
    "dhk": "971.38",
    "ctg": "180.57",
    "khu": "35.71",
    "mym": "16.57",
    "raj": "72.14",
    "ran": "39.71",
    "bar": "42.00",
    "syl": "40.14"
  },
  {
    "date": "2021-11-14",
    "dhk": "971.38",
    "ctg": "180.57",
    "khu": "35.71",
    "mym": "16.57",
    "raj": "72.14",
    "ran": "39.71",
    "bar": "42.00",
    "syl": "40.14"
  },
  {
    "date": "2021-11-15",
    "dhk": "974.88",
    "ctg": "195.29",
    "khu": "36.57",
    "mym": "15.57",
    "raj": "66.43",
    "ran": "43.43",
    "bar": "41.57",
    "syl": "40.43"
  },
  {
    "date": "2021-11-16",
    "dhk": "1001.38",
    "ctg": "183.86",
    "khu": "36.86",
    "mym": "14.43",
    "raj": "66.29",
    "ran": "41.43",
    "bar": "42.00",
    "syl": "37.00"
  },
  {
    "date": "2021-11-17",
    "dhk": "892.00",
    "ctg": "195.43",
    "khu": "39.29",
    "mym": "16.00",
    "raj": "65.14",
    "ran": "41.43",
    "bar": "40.57",
    "syl": "37.00"
  },
  {
    "date": "2021-11-17",
    "dhk": "892.00",
    "ctg": "195.43",
    "khu": "39.29",
    "mym": "16.00",
    "raj": "65.14",
    "ran": "41.43",
    "bar": "40.57",
    "syl": "37.00"
  },
  {
    "date": "2021-11-18",
    "dhk": "929.00",
    "ctg": "201.71",
    "khu": "41.71",
    "mym": "17.86",
    "raj": "66.00",
    "ran": "43.29",
    "bar": "38.57",
    "syl": "33.00"
  },
  {
    "date": "2021-11-19",
    "dhk": "964.00",
    "ctg": "211.29",
    "khu": "41.00",
    "mym": "19.14",
    "raj": "69.71",
    "ran": "43.86",
    "bar": "37.71",
    "syl": "31.14"
  },
  {
    "date": "2021-11-20",
    "dhk": "998.33",
    "ctg": "216.00",
    "khu": "42.43",
    "mym": "18.57",
    "raj": "71.86",
    "ran": "46.57",
    "bar": "35.71",
    "syl": "29.14"
  },
  {
    "date": "2021-11-21",
    "dhk": "1147.38",
    "ctg": "228.00",
    "khu": "37.63",
    "mym": "20.00",
    "raj": "76.29",
    "ran": "48.14",
    "bar": "35.86",
    "syl": "29.14"
  },
  {
    "date": "2021-11-21",
    "dhk": "1147.38",
    "ctg": "228.00",
    "khu": "37.63",
    "mym": "20.00",
    "raj": "76.29",
    "ran": "48.14",
    "bar": "35.86",
    "syl": "29.14"
  },
  {
    "date": "2021-11-22",
    "dhk": "1184.88",
    "ctg": "239.43",
    "khu": "37.25",
    "mym": "20.71",
    "raj": "77.29",
    "ran": "49.14",
    "bar": "35.43",
    "syl": "31.00"
  },
  {
    "date": "2021-11-23",
    "dhk": "1186.88",
    "ctg": "260.57",
    "khu": "40.75",
    "mym": "23.43",
    "raj": "79.00",
    "ran": "53.71",
    "bar": "35.57",
    "syl": "30.71"
  },
  {
    "date": "2021-11-24",
    "dhk": "1211.50",
    "ctg": "249.14",
    "khu": "40.75",
    "mym": "24.86",
    "raj": "81.29",
    "ran": "53.86",
    "bar": "35.57",
    "syl": "32.29"
  },
  {
    "date": "2021-11-24",
    "dhk": "1211.50",
    "ctg": "249.14",
    "khu": "40.75",
    "mym": "24.86",
    "raj": "81.29",
    "ran": "53.86",
    "bar": "35.57",
    "syl": "32.29"
  },
  {
    "date": "2021-11-25",
    "dhk": "1186.50",
    "ctg": "257.57",
    "khu": "43.13",
    "mym": "24.43",
    "raj": "86.14",
    "ran": "55.71",
    "bar": "37.43",
    "syl": "34.43"
  },
  {
    "date": "2021-11-26",
    "dhk": "1178.50",
    "ctg": "265.29",
    "khu": "42.75",
    "mym": "24.57",
    "raj": "84.43",
    "ran": "57.00",
    "bar": "39.29",
    "syl": "36.43"
  },
  {
    "date": "2021-11-27",
    "dhk": "1151.88",
    "ctg": "283.29",
    "khu": "42.88",
    "mym": "27.71",
    "raj": "88.00",
    "ran": "55.86",
    "bar": "39.71",
    "syl": "38.29"
  },
  {
    "date": "2021-11-28",
    "dhk": "1121.38",
    "ctg": "273.14",
    "khu": "47.86",
    "mym": "28.00",
    "raj": "87.00",
    "ran": "55.86",
    "bar": "41.14",
    "syl": "38.71"
  },
  {
    "date": "2021-11-29",
    "dhk": "1124.75",
    "ctg": "285.14",
    "khu": "48.71",
    "mym": "30.00",
    "raj": "83.86",
    "ran": "60.43",
    "bar": "39.71",
    "syl": "37.14"
  },
  {
    "date": "2021-11-30",
    "dhk": "999.11",
    "ctg": "277.86",
    "khu": "46.29",
    "mym": "28.57",
    "raj": "87.57",
    "ran": "63.86",
    "bar": "41.14",
    "syl": "36.71"
  },
  {
    "date": "2021-11-30",
    "dhk": "999.11",
    "ctg": "277.86",
    "khu": "46.29",
    "mym": "28.57",
    "raj": "87.57",
    "ran": "63.86",
    "bar": "41.14",
    "syl": "36.71"
  },
  {
    "date": "2021-12-01",
    "dhk": "1122.13",
    "ctg": "298.57",
    "khu": "44.71",
    "mym": "24.57",
    "raj": "86.00",
    "ran": "64.86",
    "bar": "42.29",
    "syl": "36.71"
  },
  {
    "date": "2021-12-02",
    "dhk": "1005.56",
    "ctg": "288.71",
    "khu": "41.29",
    "mym": "27.00",
    "raj": "90.43",
    "ran": "65.29",
    "bar": "41.86",
    "syl": "35.71"
  },
  {
    "date": "2021-12-02",
    "dhk": "1005.56",
    "ctg": "288.71",
    "khu": "41.29",
    "mym": "27.00",
    "raj": "90.43",
    "ran": "65.29",
    "bar": "41.86",
    "syl": "35.71"
  }
],
                "synchronizeGrid": true,
                "valueAxes": [
                    {
                        "title": "বিতরণের সংখ্যা",
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
            "dataProvider": [
  {
    "date": "2021-05-20",
    "infected": "1617",
    "avg": "1617.00",
    "total_infected": 26738,
    "tested": "10207",
    "tested_data": 10207,
    "case": "1617"
  },
  {
    "date": "2021-05-21",
    "infected": "1773",
    "avg": "1695.00",
    "total_infected": 28511,
    "tested": "10234.5",
    "tested_data": 10234.5,
    "case": "1695"
  },
  {
    "date": "2021-05-22",
    "infected": "1694",
    "avg": "1694.67",
    "total_infected": 30205,
    "tested": "10065.33",
    "tested_data": 10065.33,
    "case": "1694.67"
  },
  {
    "date": "2021-05-23",
    "infected": "1873",
    "avg": "1739.25",
    "total_infected": 32078,
    "tested": "10257.5",
    "tested_data": 10257.5,
    "case": "1739.25"
  },
  {
    "date": "2021-05-24",
    "infected": "1532",
    "avg": "1697.80",
    "total_infected": 33610,
    "tested": "9987.6",
    "tested_data": 9987.6,
    "case": "1697.8"
  },
  {
    "date": "2021-05-25",
    "infected": "1975",
    "avg": "1744.00",
    "total_infected": 35585,
    "tested": "9898.17",
    "tested_data": 9898.17,
    "case": "1744"
  },
  {
    "date": "2021-05-26",
    "infected": "1166",
    "avg": "1661.43",
    "total_infected": 36751,
    "tested": "9256.57",
    "tested_data": 9256.57,
    "case": "1661.43"
  },
  {
    "date": "2021-05-27",
    "infected": "1541",
    "avg": "1650.57",
    "total_infected": 38292,
    "tested": "8943.43",
    "tested_data": 8943.43,
    "case": "1650.57"
  },
  {
    "date": "2021-05-28",
    "infected": "2029",
    "avg": "1687.14",
    "total_infected": 40321,
    "tested": "8807.43",
    "tested_data": 8807.43,
    "case": "1687.14"
  },
  {
    "date": "2021-05-29",
    "infected": "2523",
    "avg": "1805.57",
    "total_infected": 42844,
    "tested": "9032.29",
    "tested_data": 9032.29,
    "case": "1805.57"
  },
  {
    "date": "2021-05-30",
    "infected": "1764",
    "avg": "1790.00",
    "total_infected": 44608,
    "tested": "8911.29",
    "tested_data": 8911.29,
    "case": "1790"
  },
  {
    "date": "2021-05-31",
    "infected": "2545",
    "avg": "1934.71",
    "total_infected": 47153,
    "tested": "9335.29",
    "tested_data": 9335.29,
    "case": "1934.71"
  },
  {
    "date": "2021-06-01",
    "infected": "2381",
    "avg": "1992.71",
    "total_infected": 49534,
    "tested": "9619.29",
    "tested_data": 9619.29,
    "case": "1992.71"
  },
  {
    "date": "2021-06-02",
    "infected": "2911",
    "avg": "2242.00",
    "total_infected": 52445,
    "tested": "10661.71",
    "tested_data": 10661.71,
    "case": "2242"
  },
  {
    "date": "2021-06-03",
    "infected": "2695",
    "avg": "2406.86",
    "total_infected": 55140,
    "tested": "11303.86",
    "tested_data": 11303.86,
    "case": "2406.86"
  },
  {
    "date": "2021-06-04",
    "infected": "2423",
    "avg": "2463.14",
    "total_infected": 57563,
    "tested": "11787.86",
    "tested_data": 11787.86,
    "case": "2463.14"
  },
  {
    "date": "2021-06-05",
    "infected": "2828",
    "avg": "2506.71",
    "total_infected": 60391,
    "tested": "12186",
    "tested_data": 12186,
    "case": "2506.71"
  },
  {
    "date": "2021-06-06",
    "infected": "2635",
    "avg": "2631.14",
    "total_infected": 63026,
    "tested": "12543",
    "tested_data": 12543,
    "case": "2631.14"
  },
  {
    "date": "2021-06-07",
    "infected": "2743",
    "avg": "2659.43",
    "total_infected": 65769,
    "tested": "12723",
    "tested_data": 12723,
    "case": "2659.43"
  },
  {
    "date": "2021-06-08",
    "infected": "2735",
    "avg": "2710.00",
    "total_infected": 68504,
    "tested": "12944.29",
    "tested_data": 12944.29,
    "case": "2710"
  },
  {
    "date": "2021-06-09",
    "infected": "3171",
    "avg": "2747.14",
    "total_infected": 71675,
    "tested": "13224.29",
    "tested_data": 13224.29,
    "case": "2747.14"
  },
  {
    "date": "2021-06-10",
    "infected": "3190",
    "avg": "2817.86",
    "total_infected": 74865,
    "tested": "13717.86",
    "tested_data": 13717.86,
    "case": "2817.86"
  },
  {
    "date": "2021-06-11",
    "infected": "3187",
    "avg": "2927.00",
    "total_infected": 78052,
    "tested": "14157",
    "tested_data": 14157,
    "case": "2927"
  },
  {
    "date": "2021-06-12",
    "infected": "3471",
    "avg": "3018.86",
    "total_infected": 81523,
    "tested": "14428.71",
    "tested_data": 14428.71,
    "case": "3018.86"
  },
  {
    "date": "2021-06-13",
    "infected": "2856",
    "avg": "3050.43",
    "total_infected": 84379,
    "tested": "15021.86",
    "tested_data": 15021.86,
    "case": "3050.43"
  },
  {
    "date": "2021-06-14",
    "infected": "3141",
    "avg": "3107.29",
    "total_infected": 87520,
    "tested": "15217.43",
    "tested_data": 15217.43,
    "case": "3107.29"
  },
  {
    "date": "2021-06-15",
    "infected": "3099",
    "avg": "3159.29",
    "total_infected": 90619,
    "tested": "15510.29",
    "tested_data": 15510.29,
    "case": "3159.29"
  },
  {
    "date": "2021-06-16",
    "infected": "3862",
    "avg": "3258.00",
    "total_infected": 94481,
    "tested": "15874.57",
    "tested_data": 15874.57,
    "case": "3258"
  },
  {
    "date": "2021-06-17",
    "infected": "4008",
    "avg": "3374.86",
    "total_infected": 98489,
    "tested": "16097.71",
    "tested_data": 16097.71,
    "case": "3374.86"
  },
  {
    "date": "2021-06-18",
    "infected": "3803",
    "avg": "3462.86",
    "total_infected": 102292,
    "tested": "16167.29",
    "tested_data": 16167.29,
    "case": "3462.86"
  },
  {
    "date": "2021-06-19",
    "infected": "3243",
    "avg": "3430.29",
    "total_infected": 105535,
    "tested": "16032.29",
    "tested_data": 16032.29,
    "case": "3430.29"
  },
  {
    "date": "2021-06-20",
    "infected": "3240",
    "avg": "3485.14",
    "total_infected": 108775,
    "tested": "15659.86",
    "tested_data": 15659.86,
    "case": "3485.14"
  },
  {
    "date": "2021-06-21",
    "infected": "3532",
    "avg": "3541.00",
    "total_infected": 112306,
    "tested": "15814.14",
    "tested_data": 15814.14,
    "case": "3541"
  },
  {
    "date": "2021-06-22",
    "infected": "3480",
    "avg": "3595.43",
    "total_infected": 115786,
    "tested": "15888",
    "tested_data": 15888,
    "case": "3595.43"
  },
  {
    "date": "2021-06-23",
    "infected": "3412",
    "avg": "3531.14",
    "total_infected": 119198,
    "tested": "15756.29",
    "tested_data": 15756.29,
    "case": "3531.14"
  },
  {
    "date": "2021-06-24",
    "infected": "3462",
    "avg": "3453.14",
    "total_infected": 122660,
    "tested": "15600",
    "tested_data": 15600,
    "case": "3453.14"
  },
  {
    "date": "2021-06-25",
    "infected": "3946",
    "avg": "3473.57",
    "total_infected": 126606,
    "tested": "15848.57",
    "tested_data": 15848.57,
    "case": "3473.57"
  },
  {
    "date": "2021-06-26",
    "infected": "3868",
    "avg": "3562.86",
    "total_infected": 130474,
    "tested": "16341.86",
    "tested_data": 16341.86,
    "case": "3562.86"
  },
  {
    "date": "2021-06-27",
    "infected": "3504",
    "avg": "3600.57",
    "total_infected": 133978,
    "tested": "16502.71",
    "tested_data": 16502.71,
    "case": "3600.57"
  },
  {
    "date": "2021-06-28",
    "infected": "3809",
    "avg": "3640.14",
    "total_infected": 137787,
    "tested": "16861.86",
    "tested_data": 16861.86,
    "case": "3640.14"
  },
  {
    "date": "2021-06-29",
    "infected": "4014",
    "avg": "3716.43",
    "total_infected": 141801,
    "tested": "17187.86",
    "tested_data": 17187.86,
    "case": "3716.43"
  },
  {
    "date": "2021-06-30",
    "infected": "3682",
    "avg": "3755.00",
    "total_infected": 145483,
    "tested": "17492.71",
    "tested_data": 17492.71,
    "case": "3755"
  },
  {
    "date": "2021-07-01",
    "infected": "3775",
    "avg": "3799.71",
    "total_infected": 149258,
    "tested": "17698.71",
    "tested_data": 17698.71,
    "case": "3799.71"
  },
  {
    "date": "2021-07-02",
    "infected": "4019",
    "avg": "3810.14",
    "total_infected": 153277,
    "tested": "17750.57",
    "tested_data": 17750.57,
    "case": "3810.14"
  },
  {
    "date": "2021-07-03",
    "infected": "3114",
    "avg": "3702.43",
    "total_infected": 156391,
    "tested": "17200.86",
    "tested_data": 17200.86,
    "case": "3702.43"
  },
  {
    "date": "2021-07-04",
    "infected": "3288",
    "avg": "3671.57",
    "total_infected": 159679,
    "tested": "17139.43",
    "tested_data": 17139.43,
    "case": "3671.57"
  },
  {
    "date": "2021-07-05",
    "infected": "2738",
    "avg": "3518.57",
    "total_infected": 162417,
    "tested": "16552.14",
    "tested_data": 16552.14,
    "case": "3518.57"
  },
  {
    "date": "2021-07-06",
    "infected": "3201",
    "avg": "3402.43",
    "total_infected": 165618,
    "tested": "16039",
    "tested_data": 16039,
    "case": "3402.43"
  },
  {
    "date": "2021-07-07",
    "infected": "3027",
    "avg": "3308.86",
    "total_infected": 168645,
    "tested": "15288.57",
    "tested_data": 15288.57,
    "case": "3308.86"
  },
  {
    "date": "2021-07-08",
    "infected": "3489",
    "avg": "3268.00",
    "total_infected": 172134,
    "tested": "14973.86",
    "tested_data": 14973.86,
    "case": "3268"
  },
  {
    "date": "2021-07-09",
    "infected": "3360",
    "avg": "3173.86",
    "total_infected": 175494,
    "tested": "14583.86",
    "tested_data": 14583.86,
    "case": "3173.86"
  },
  {
    "date": "2021-07-10",
    "infected": "2949",
    "avg": "3150.29",
    "total_infected": 178443,
    "tested": "14417.86",
    "tested_data": 14417.86,
    "case": "3150.29"
  },
  {
    "date": "2021-07-11",
    "infected": "2686",
    "avg": "3064.29",
    "total_infected": 181129,
    "tested": "13913",
    "tested_data": 13913,
    "case": "3064.29"
  },
  {
    "date": "2021-07-12",
    "infected": "2666",
    "avg": "3054.00",
    "total_infected": 183795,
    "tested": "13494.57",
    "tested_data": 13494.57,
    "case": "3054"
  },
  {
    "date": "2021-07-13",
    "infected": "3099",
    "avg": "3039.43",
    "total_infected": 186894,
    "tested": "13234.29",
    "tested_data": 13234.29,
    "case": "3039.43"
  },
  {
    "date": "2021-07-14",
    "infected": "3163",
    "avg": "3058.86",
    "total_infected": 190057,
    "tested": "13274.29",
    "tested_data": 13274.29,
    "case": "3058.86"
  },
  {
    "date": "2021-07-15",
    "infected": "3533",
    "avg": "3065.14",
    "total_infected": 193590,
    "tested": "13035.71",
    "tested_data": 13035.71,
    "case": "3065.14"
  },
  {
    "date": "2021-07-16",
    "infected": "2733",
    "avg": "2975.57",
    "total_infected": 196323,
    "tested": "12643.86",
    "tested_data": 12643.86,
    "case": "2975.57"
  },
  {
    "date": "2021-07-17",
    "infected": "3034",
    "avg": "2987.71",
    "total_infected": 199357,
    "tested": "12639.86",
    "tested_data": 12639.86,
    "case": "2987.71"
  },
  {
    "date": "2021-07-18",
    "infected": "2709",
    "avg": "2991.00",
    "total_infected": 202166,
    "tested": "12601.29",
    "tested_data": 12601.29,
    "case": "2991"
  },
  {
    "date": "2021-07-19",
    "infected": "2459",
    "avg": "2961.43",
    "total_infected": 204525,
    "tested": "12539.29",
    "tested_data": 12539.29,
    "case": "2961.43"
  },
  {
    "date": "2021-07-20",
    "infected": "2928",
    "avg": "2937.00",
    "total_infected": 207453,
    "tested": "12673.43",
    "tested_data": 12673.43,
    "case": "2937"
  },
  {
    "date": "2021-07-21",
    "infected": "3057",
    "avg": "2921.86",
    "total_infected": 210510,
    "tested": "12594.14",
    "tested_data": 12594.14,
    "case": "2921.86"
  },
  {
    "date": "2021-07-22",
    "infected": "2744",
    "avg": "2809.14",
    "total_infected": 213254,
    "tested": "12315.29",
    "tested_data": 12315.29,
    "case": "2809.14"
  },
  {
    "date": "2021-07-23",
    "infected": "2856",
    "avg": "2826.71",
    "total_infected": 216110,
    "tested": "12245.14",
    "tested_data": 12245.14,
    "case": "2826.71"
  },
  {
    "date": "2021-07-24",
    "infected": "2548",
    "avg": "2757.29",
    "total_infected": 218658,
    "tested": "12040.43",
    "tested_data": 12040.43,
    "case": "2757.29"
  },
  {
    "date": "2021-07-25",
    "infected": "2520",
    "avg": "2730.29",
    "total_infected": 221178,
    "tested": "11972.29",
    "tested_data": 11972.29,
    "case": "2730.29"
  },
  {
    "date": "2021-07-26",
    "infected": "2275",
    "avg": "2704.00",
    "total_infected": 223453,
    "tested": "11894.14",
    "tested_data": 11894.14,
    "case": "2704"
  },
  {
    "date": "2021-07-27",
    "infected": "2772",
    "avg": "2681.71",
    "total_infected": 226225,
    "tested": "11822.29",
    "tested_data": 11822.29,
    "case": "2681.71"
  },
  {
    "date": "2021-07-28",
    "infected": "2960",
    "avg": "2667.86",
    "total_infected": 229185,
    "tested": "11796",
    "tested_data": 11796,
    "case": "2667.86"
  },
  {
    "date": "2021-07-29",
    "infected": "3009",
    "avg": "2705.71",
    "total_infected": 232194,
    "tested": "12092.71",
    "tested_data": 12092.71,
    "case": "2705.71"
  },
  {
    "date": "2021-07-30",
    "infected": "2695",
    "avg": "2682.71",
    "total_infected": 234889,
    "tested": "12169.71",
    "tested_data": 12169.71,
    "case": "2682.71"
  },
  {
    "date": "2021-07-31",
    "infected": "2772",
    "avg": "2714.71",
    "total_infected": 237661,
    "tested": "12253.57",
    "tested_data": 12253.57,
    "case": "2714.71"
  },
  {
    "date": "2021-08-01",
    "infected": "2199",
    "avg": "2668.86",
    "total_infected": 239860,
    "tested": "12018.71",
    "tested_data": 12018.71,
    "case": "2668.86"
  },
  {
    "date": "2021-08-02",
    "infected": "886",
    "avg": "2470.43",
    "total_infected": 240746,
    "tested": "11105.29",
    "tested_data": 11105.29,
    "case": "2470.43"
  },
  {
    "date": "2021-08-03",
    "infected": "1066",
    "avg": "2226.71",
    "total_infected": 242102,
    "tested": "9875.29",
    "tested_data": 9875.29,
    "case": "2226.71"
  },
  {
    "date": "2021-08-04",
    "infected": "1918",
    "avg": "2077.86",
    "total_infected": 244020,
    "tested": "9160.71",
    "tested_data": 9160.71,
    "case": "2077.86"
  },
  {
    "date": "2021-08-05",
    "infected": "2654",
    "avg": "2027.14",
    "total_infected": 246674,
    "tested": "8736.86",
    "tested_data": 8736.86,
    "case": "2027.14"
  },
  {
    "date": "2021-08-06",
    "infected": "2977",
    "avg": "2067.43",
    "total_infected": 249651,
    "tested": "8704.14",
    "tested_data": 8704.14,
    "case": "2067.43"
  },
  {
    "date": "2021-08-07",
    "infected": "2851",
    "avg": "2078.71",
    "total_infected": 252502,
    "tested": "8716.29",
    "tested_data": 8716.29,
    "case": "2078.71"
  },
  {
    "date": "2021-08-08",
    "infected": "2611",
    "avg": "2137.57",
    "total_infected": 255113,
    "tested": "9135.57",
    "tested_data": 9135.57,
    "case": "2137.57"
  },
  {
    "date": "2021-08-09",
    "infected": "2487",
    "avg": "2366.29",
    "total_infected": 257600,
    "tested": "10146.29",
    "tested_data": 10146.29,
    "case": "2366.29"
  },
  {
    "date": "2021-08-10",
    "infected": "2907",
    "avg": "2629.29",
    "total_infected": 260507,
    "tested": "11374.86",
    "tested_data": 11374.86,
    "case": "2629.29"
  },
  {
    "date": "2021-08-11",
    "infected": "2996",
    "avg": "2783.29",
    "total_infected": 263503,
    "tested": "12390.29",
    "tested_data": 12390.29,
    "case": "2783.29"
  },
  {
    "date": "2021-08-12",
    "infected": "2995",
    "avg": "2832.00",
    "total_infected": 266498,
    "tested": "12903.29",
    "tested_data": 12903.29,
    "case": "2832"
  },
  {
    "date": "2021-08-13",
    "infected": "2617",
    "avg": "2780.57",
    "total_infected": 269115,
    "tested": "12968.14",
    "tested_data": 12968.14,
    "case": "2780.57"
  },
  {
    "date": "2021-08-14",
    "infected": "2766",
    "avg": "2768.43",
    "total_infected": 271881,
    "tested": "12990.57",
    "tested_data": 12990.57,
    "case": "2768.43"
  },
  {
    "date": "2021-08-15",
    "infected": "2644",
    "avg": "2773.14",
    "total_infected": 274525,
    "tested": "13155.43",
    "tested_data": 13155.43,
    "case": "2773.14"
  },
  {
    "date": "2021-08-16",
    "infected": "2024",
    "avg": "2707.00",
    "total_infected": 276549,
    "tested": "13049.57",
    "tested_data": 13049.57,
    "case": "2707"
  },
  {
    "date": "2021-08-17",
    "infected": "2595",
    "avg": "2662.43",
    "total_infected": 279144,
    "tested": "13003",
    "tested_data": 13003,
    "case": "2662.43"
  },
  {
    "date": "2021-08-18",
    "infected": "3200",
    "avg": "2691.57",
    "total_infected": 282344,
    "tested": "12975.86",
    "tested_data": 12975.86,
    "case": "2691.57"
  },
  {
    "date": "2021-08-19",
    "infected": "2747",
    "avg": "2656.14",
    "total_infected": 285091,
    "tested": "12965.43",
    "tested_data": 12965.43,
    "case": "2656.14"
  },
  {
    "date": "2021-08-20",
    "infected": "2868",
    "avg": "2692.00",
    "total_infected": 287959,
    "tested": "13093.57",
    "tested_data": 13093.57,
    "case": "2692"
  },
  {
    "date": "2021-08-21",
    "infected": "2401",
    "avg": "2639.86",
    "total_infected": 290360,
    "tested": "13106",
    "tested_data": 13106,
    "case": "2639.86"
  },
  {
    "date": "2021-08-22",
    "infected": "2265",
    "avg": "2585.71",
    "total_infected": 292625,
    "tested": "12886.71",
    "tested_data": 12886.71,
    "case": "2585.71"
  },
  {
    "date": "2021-08-23",
    "infected": "1973",
    "avg": "2578.43",
    "total_infected": 294598,
    "tested": "12998.57",
    "tested_data": 12998.57,
    "case": "2578.43"
  },
  {
    "date": "2021-08-24",
    "infected": "2485",
    "avg": "2562.71",
    "total_infected": 297083,
    "tested": "13121.29",
    "tested_data": 13121.29,
    "case": "2562.71"
  },
  {
    "date": "2021-08-25",
    "infected": "2545",
    "avg": "2469.14",
    "total_infected": 299628,
    "tested": "13053.14",
    "tested_data": 13053.14,
    "case": "2469.14"
  },
  {
    "date": "2021-08-26",
    "infected": "2519",
    "avg": "2436.57",
    "total_infected": 302147,
    "tested": "13109.14",
    "tested_data": 13109.14,
    "case": "2436.57"
  },
  {
    "date": "2021-08-27",
    "infected": "2436",
    "avg": "2374.86",
    "total_infected": 304583,
    "tested": "13261.29",
    "tested_data": 13261.29,
    "case": "2374.86"
  },
  {
    "date": "2021-08-28",
    "infected": "2211",
    "avg": "2347.71",
    "total_infected": 306798,
    "tested": "13375.29",
    "tested_data": 13375.29,
    "case": "2347.71"
  },
  {
    "date": "2021-08-29",
    "infected": "2131",
    "avg": "2328.57",
    "total_infected": 308925,
    "tested": "13422.86",
    "tested_data": 13422.86,
    "case": "2328.57"
  },
  {
    "date": "2021-08-30",
    "infected": "1897",
    "avg": "2317.71",
    "total_infected": 310822,
    "tested": "13584.71",
    "tested_data": 13584.71,
    "case": "2317.71"
  },
  {
    "date": "2021-08-31",
    "infected": "2174",
    "avg": "2273.29",
    "total_infected": 312996,
    "tested": "13452.14",
    "tested_data": 13452.14,
    "case": "2273.29"
  },
  {
    "date": "2021-09-01",
    "infected": "1950",
    "avg": "2188.29",
    "total_infected": 314946,
    "tested": "13174.43",
    "tested_data": 13174.43,
    "case": "2188.29"
  },
  {
    "date": "2021-09-02",
    "infected": "2582",
    "avg": "2197.29",
    "total_infected": 317528,
    "tested": "13193.57",
    "tested_data": 13193.57,
    "case": "2197.29"
  },
  {
    "date": "2021-09-03",
    "infected": "2158",
    "avg": "2157.57",
    "total_infected": 319686,
    "tested": "13093.29",
    "tested_data": 13093.29,
    "case": "2157.57"
  },
  {
    "date": "2021-09-04",
    "infected": "1929",
    "avg": "2117.29",
    "total_infected": 321651,
    "tested": "12997.86",
    "tested_data": 12997.86,
    "case": "2117.29"
  },
  {
    "date": "2021-09-05",
    "infected": "1950",
    "avg": "2091.43",
    "total_infected": 323565,
    "tested": "13163.29",
    "tested_data": 13163.29,
    "case": "2091.43"
  },
  {
    "date": "2021-09-06",
    "infected": "1592",
    "avg": "2047.86",
    "total_infected": 325157,
    "tested": "13080.43",
    "tested_data": 13080.43,
    "case": "2047.86"
  },
  {
    "date": "2021-09-07",
    "infected": "2202",
    "avg": "2051.86",
    "total_infected": 327359,
    "tested": "13503",
    "tested_data": 13503,
    "case": "2051.86"
  },
  {
    "date": "2021-09-08",
    "infected": "1892",
    "avg": "2043.57",
    "total_infected": 329251,
    "tested": "13897.86",
    "tested_data": 13897.86,
    "case": "2043.57"
  },
  {
    "date": "2021-09-09",
    "infected": "1827",
    "avg": "1935.71",
    "total_infected": 331078,
    "tested": "13833.71",
    "tested_data": 13833.71,
    "case": "1935.71"
  },
  {
    "date": "2021-09-10",
    "infected": "1892",
    "avg": "1897.71",
    "total_infected": 332970,
    "tested": "13996.14",
    "tested_data": 13996.14,
    "case": "1897.71"
  },
  {
    "date": "2021-09-11",
    "infected": "1792",
    "avg": "1878.14",
    "total_infected": 334762,
    "tested": "14235.29",
    "tested_data": 14235.29,
    "case": "1878.14"
  },
  {
    "date": "2021-09-12",
    "infected": "1282",
    "avg": "1782.71",
    "total_infected": 336044,
    "tested": "13931.86",
    "tested_data": 13931.86,
    "case": "1782.71"
  },
  {
    "date": "2021-09-13",
    "infected": "1476",
    "avg": "1766.14",
    "total_infected": 337520,
    "tested": "14166.86",
    "tested_data": 14166.86,
    "case": "1766.14"
  },
  {
    "date": "2021-09-14",
    "infected": "1812",
    "avg": "1710.43",
    "total_infected": 339332,
    "tested": "13996",
    "tested_data": 13996,
    "case": "1710.43"
  },
  {
    "date": "2021-09-15",
    "infected": "1724",
    "avg": "1686.43",
    "total_infected": 341056,
    "tested": "13864.14",
    "tested_data": 13864.14,
    "case": "1686.43"
  },
  {
    "date": "2021-09-16",
    "infected": "1615",
    "avg": "1656.14",
    "total_infected": 342671,
    "tested": "13664.86",
    "tested_data": 13664.86,
    "case": "1656.14"
  },
  {
    "date": "2021-09-17",
    "infected": "1593",
    "avg": "1613.43",
    "total_infected": 344264,
    "tested": "13395.43",
    "tested_data": 13395.43,
    "case": "1613.43"
  },
  {
    "date": "2021-09-18",
    "infected": "1541",
    "avg": "1577.57",
    "total_infected": 345805,
    "tested": "13107.29",
    "tested_data": 13107.29,
    "case": "1577.57"
  },
  {
    "date": "2021-09-19",
    "infected": "1567",
    "avg": "1618.29",
    "total_infected": 347372,
    "tested": "13456.86",
    "tested_data": 13456.86,
    "case": "1618.29"
  },
  {
    "date": "2021-09-20",
    "infected": "1544",
    "avg": "1628.00",
    "total_infected": 348916,
    "tested": "13255.71",
    "tested_data": 13255.71,
    "case": "1628"
  },
  {
    "date": "2021-09-21",
    "infected": "1705",
    "avg": "1612.71",
    "total_infected": 350621,
    "tested": "13089.57",
    "tested_data": 13089.57,
    "case": "1612.71"
  },
  {
    "date": "2021-09-22",
    "infected": "1557",
    "avg": "1588.86",
    "total_infected": 352178,
    "tested": "13105.86",
    "tested_data": 13105.86,
    "case": "1588.86"
  },
  {
    "date": "2021-09-23",
    "infected": "1666",
    "avg": "1596.14",
    "total_infected": 353844,
    "tested": "13218.71",
    "tested_data": 13218.71,
    "case": "1596.14"
  },
  {
    "date": "2021-09-24",
    "infected": "1540",
    "avg": "1588.57",
    "total_infected": 355384,
    "tested": "13108.29",
    "tested_data": 13108.29,
    "case": "1588.57"
  },
  {
    "date": "2021-09-25",
    "infected": "1383",
    "avg": "1566.00",
    "total_infected": 356767,
    "tested": "13071.57",
    "tested_data": 13071.57,
    "case": "1566"
  },
  {
    "date": "2021-09-26",
    "infected": "1106",
    "avg": "1500.14",
    "total_infected": 357873,
    "tested": "12728",
    "tested_data": 12728,
    "case": "1500.14"
  },
  {
    "date": "2021-09-27",
    "infected": "1275",
    "avg": "1461.71",
    "total_infected": 359148,
    "tested": "12598.57",
    "tested_data": 12598.57,
    "case": "1461.71"
  },
  {
    "date": "2021-09-28",
    "infected": "1407",
    "avg": "1419.14",
    "total_infected": 360555,
    "tested": "12437",
    "tested_data": 12437,
    "case": "1419.14"
  },
  {
    "date": "2021-09-29",
    "infected": "1488",
    "avg": "1409.29",
    "total_infected": 362043,
    "tested": "12252",
    "tested_data": 12252,
    "case": "1409.29"
  },
  {
    "date": "2021-09-30",
    "infected": "1436",
    "avg": "1376.43",
    "total_infected": 363479,
    "tested": "12145.43",
    "tested_data": 12145.43,
    "case": "1376.43"
  },
  {
    "date": "2021-10-01",
    "infected": "1508",
    "avg": "1371.86",
    "total_infected": 364987,
    "tested": "11934",
    "tested_data": 11934,
    "case": "1371.86"
  },
  {
    "date": "2021-10-02",
    "infected": "1396",
    "avg": "1373.71",
    "total_infected": 366383,
    "tested": "11748.71",
    "tested_data": 11748.71,
    "case": "1373.71"
  },
  {
    "date": "2021-10-03",
    "infected": "1182",
    "avg": "1384.57",
    "total_infected": 367565,
    "tested": "11575.71",
    "tested_data": 11575.71,
    "case": "1384.57"
  },
  {
    "date": "2021-10-04",
    "infected": "1125",
    "avg": "1363.14",
    "total_infected": 368690,
    "tested": "11457.71",
    "tested_data": 11457.71,
    "case": "1363.14"
  },
  {
    "date": "2021-10-05",
    "infected": "1442",
    "avg": "1368.14",
    "total_infected": 370132,
    "tested": "11435.57",
    "tested_data": 11435.57,
    "case": "1368.14"
  },
  {
    "date": "2021-10-06",
    "infected": "1499",
    "avg": "1369.71",
    "total_infected": 371631,
    "tested": "11360.71",
    "tested_data": 11360.71,
    "case": "1369.71"
  },
  {
    "date": "2021-10-07",
    "infected": "1520",
    "avg": "1381.71",
    "total_infected": 373151,
    "tested": "11307.57",
    "tested_data": 11307.57,
    "case": "1381.71"
  },
  {
    "date": "2021-10-08",
    "infected": "1441",
    "avg": "1372.14",
    "total_infected": 374592,
    "tested": "11476.86",
    "tested_data": 11476.86,
    "case": "1372.14"
  },
  {
    "date": "2021-10-09",
    "infected": "1278",
    "avg": "1355.29",
    "total_infected": 375870,
    "tested": "11488.29",
    "tested_data": 11488.29,
    "case": "1355.29"
  },
  {
    "date": "2021-10-10",
    "infected": "1203",
    "avg": "1358.29",
    "total_infected": 377073,
    "tested": "11674.71",
    "tested_data": 11674.71,
    "case": "1358.29"
  },
  {
    "date": "2021-10-11",
    "infected": "1193",
    "avg": "1368.00",
    "total_infected": 378266,
    "tested": "11618.71",
    "tested_data": 11618.71,
    "case": "1368"
  },
  {
    "date": "2021-10-12",
    "infected": "1472",
    "avg": "1372.29",
    "total_infected": 379738,
    "tested": "11827.29",
    "tested_data": 11827.29,
    "case": "1372.29"
  },
  {
    "date": "2021-10-13",
    "infected": "1537",
    "avg": "1377.71",
    "total_infected": 381275,
    "tested": "12037.29",
    "tested_data": 12037.29,
    "case": "1377.71"
  },
  {
    "date": "2021-10-14",
    "infected": "1684",
    "avg": "1401.14",
    "total_infected": 382959,
    "tested": "12234.29",
    "tested_data": 12234.29,
    "case": "1401.14"
  },
  {
    "date": "2021-10-15",
    "infected": "1600",
    "avg": "1423.86",
    "total_infected": 384559,
    "tested": "12448.43",
    "tested_data": 12448.43,
    "case": "1423.86"
  },
  {
    "date": "2021-10-16",
    "infected": "1527",
    "avg": "1459.43",
    "total_infected": 386086,
    "tested": "12780",
    "tested_data": 12780,
    "case": "1459.43"
  },
  {
    "date": "2021-10-17",
    "infected": "1209",
    "avg": "1460.29",
    "total_infected": 387295,
    "tested": "12882",
    "tested_data": 12882,
    "case": "1460.29"
  },
  {
    "date": "2021-10-18",
    "infected": "1274",
    "avg": "1471.86",
    "total_infected": 388569,
    "tested": "13224.71",
    "tested_data": 13224.71,
    "case": "1471.86"
  },
  {
    "date": "2021-10-19",
    "infected": "1637",
    "avg": "1495.43",
    "total_infected": 390206,
    "tested": "13498.86",
    "tested_data": 13498.86,
    "case": "1495.43"
  },
  {
    "date": "2021-10-20",
    "infected": "1380",
    "avg": "1473.00",
    "total_infected": 391586,
    "tested": "13469.71",
    "tested_data": 13469.71,
    "case": "1473"
  },
  {
    "date": "2021-10-21",
    "infected": "1545",
    "avg": "1453.14",
    "total_infected": 393131,
    "tested": "13423.29",
    "tested_data": 13423.29,
    "case": "1453.14"
  },
  {
    "date": "2021-10-22",
    "infected": "1696",
    "avg": "1466.86",
    "total_infected": 394827,
    "tested": "13545.29",
    "tested_data": 13545.29,
    "case": "1466.86"
  },
  {
    "date": "2021-10-23",
    "infected": "1586",
    "avg": "1475.29",
    "total_infected": 396413,
    "tested": "13622.71",
    "tested_data": 13622.71,
    "case": "1475.29"
  },
  {
    "date": "2021-10-24",
    "infected": "1094",
    "avg": "1458.86",
    "total_infected": 397507,
    "tested": "13540.57",
    "tested_data": 13540.57,
    "case": "1458.86"
  },
  {
    "date": "2021-10-25",
    "infected": "1308",
    "avg": "1463.71",
    "total_infected": 398815,
    "tested": "13431.57",
    "tested_data": 13431.57,
    "case": "1463.71"
  },
  {
    "date": "2021-10-26",
    "infected": "1436",
    "avg": "1435.00",
    "total_infected": 400251,
    "tested": "13233.29",
    "tested_data": 13233.29,
    "case": "1435"
  },
  {
    "date": "2021-10-27",
    "infected": "1335",
    "avg": "1428.57",
    "total_infected": 400251,
    "tested": "13091.29",
    "tested_data": 13091.29,
    "case": "1428.57"
  },
  {
    "date": "2021-10-28",
    "infected": "1493",
    "avg": "1421.14",
    "total_infected": 401586,
    "tested": "12844.29",
    "tested_data": 12844.29,
    "case": "1421.14"
  },
  {
    "date": "2021-10-29",
    "infected": "1681",
    "avg": "1419.00",
    "total_infected": 403079,
    "tested": "12745.71",
    "tested_data": 12745.71,
    "case": "1419"
  },
  {
    "date": "2021-10-30",
    "infected": "1604",
    "avg": "1421.57",
    "total_infected": 404760,
    "tested": "12748.86",
    "tested_data": 12748.86,
    "case": "1421.57"
  },
  {
    "date": "2021-10-31",
    "infected": "1320",
    "avg": "1453.86",
    "total_infected": 406364,
    "tested": "12825.14",
    "tested_data": 12825.14,
    "case": "1453.86"
  },
  {
    "date": "2021-11-01",
    "infected": "1568",
    "avg": "1491.00",
    "total_infected": 407684,
    "tested": "13031.71",
    "tested_data": 13031.71,
    "case": "1491"
  },
  {
    "date": "2021-11-02",
    "infected": "1736",
    "avg": "1533.86",
    "total_infected": 409252,
    "tested": "12907.86",
    "tested_data": 12907.86,
    "case": "1533.86"
  },
  {
    "date": "2021-11-03",
    "infected": "1659",
    "avg": "1580.14",
    "total_infected": 410988,
    "tested": "13114.14",
    "tested_data": 13114.14,
    "case": "1580.14"
  },
  {
    "date": "2021-11-04",
    "infected": "1517",
    "avg": "1583.57",
    "total_infected": 412647,
    "tested": "13336.57",
    "tested_data": 13336.57,
    "case": "1583.57"
  },
  {
    "date": "2021-11-05",
    "infected": "1842",
    "avg": "1606.57",
    "total_infected": 414164,
    "tested": "13473.29",
    "tested_data": 13473.29,
    "case": "1606.57"
  },
  {
    "date": "2021-11-06",
    "infected": "1469",
    "avg": "1587.29",
    "total_infected": 416006,
    "tested": "13384.71",
    "tested_data": 13384.71,
    "case": "1587.29"
  },
  {
    "date": "2021-11-07",
    "infected": "1289",
    "avg": "1582.86",
    "total_infected": 417475,
    "tested": "13368.57",
    "tested_data": 13368.57,
    "case": "1582.86"
  },
  {
    "date": "2021-11-08",
    "infected": "1474",
    "avg": "1569.43",
    "total_infected": 418764,
    "tested": "13398.71",
    "tested_data": 13398.71,
    "case": "1569.43"
  },
  {
    "date": "2021-11-09",
    "infected": "1683",
    "avg": "1561.86",
    "total_infected": 420238,
    "tested": "13563.14",
    "tested_data": 13563.14,
    "case": "1561.86"
  },
  {
    "date": "2021-11-10",
    "infected": "1699",
    "avg": "1567.57",
    "total_infected": 421921,
    "tested": "13485.86",
    "tested_data": 13485.86,
    "case": "1567.57"
  },
  {
    "date": "2021-11-11",
    "infected": "1733",
    "avg": "1598.43",
    "total_infected": 423620,
    "tested": "13573",
    "tested_data": 13573,
    "case": "1598.43"
  },
  {
    "date": "2021-11-12",
    "infected": "1845",
    "avg": "1598.86",
    "total_infected": 427198,
    "tested": "13842.57",
    "tested_data": 13842.57,
    "case": "1598.86"
  },
  {
    "date": "2021-11-13",
    "infected": "1767",
    "avg": "1641.43",
    "total_infected": 428965,
    "tested": "13845.14",
    "tested_data": 13845.14,
    "case": "1641.43"
  },
  {
    "date": "2021-11-14",
    "infected": "1531",
    "avg": "1676.00",
    "total_infected": 430496,
    "tested": "13898.86",
    "tested_data": 13898.86,
    "case": "1676"
  },
  {
    "date": "2021-11-15",
    "infected": "1837",
    "avg": "1727.86",
    "total_infected": 430496,
    "tested": "14084.57",
    "tested_data": 14084.57,
    "case": "1727.86"
  },
  {
    "date": "2021-11-16",
    "infected": "2139",
    "avg": "1793.00",
    "total_infected": 432333,
    "tested": "14331.14",
    "tested_data": 14331.14,
    "case": "1793"
  },
  {
    "date": "2021-11-17",
    "infected": "2212",
    "avg": "1866.29",
    "total_infected": 434472,
    "tested": "14684",
    "tested_data": 14684,
    "case": "1866.29"
  },
  {
    "date": "2021-11-18",
    "infected": "2111",
    "avg": "1920.29",
    "total_infected": 436684,
    "tested": "14961.86",
    "tested_data": 14961.86,
    "case": "1920.29"
  },
  {
    "date": "2021-11-19",
    "infected": "2364",
    "avg": "1994.43",
    "total_infected": 438795,
    "tested": "15021.71",
    "tested_data": 15021.71,
    "case": "1994.43"
  },
  {
    "date": "2021-11-20",
    "infected": "2275",
    "avg": "2067.00",
    "total_infected": 441159,
    "tested": "15317.14",
    "tested_data": 15317.14,
    "case": "2067"
  },
  {
    "date": "2021-11-21",
    "infected": "1847",
    "avg": "2112.14",
    "total_infected": 443434,
    "tested": "15438.29",
    "tested_data": 15438.29,
    "case": "2112.14"
  },
  {
    "date": "2021-11-22",
    "infected": "2060",
    "avg": "2144.00",
    "total_infected": 445281,
    "tested": "15411.14",
    "tested_data": 15411.14,
    "case": "2144"
  },
  {
    "date": "2021-11-23",
    "infected": "2419",
    "avg": "2184.00",
    "total_infected": 447341,
    "tested": "15452.71",
    "tested_data": 15452.71,
    "case": "2184"
  },
  {
    "date": "2021-11-24",
    "infected": "2230",
    "avg": "2186.57",
    "total_infected": 449760,
    "tested": "15313.86",
    "tested_data": 15313.86,
    "case": "2186.57"
  },
  {
    "date": "2021-11-25",
    "infected": "2156",
    "avg": "2193.00",
    "total_infected": 451990,
    "tested": "15247",
    "tested_data": 15247,
    "case": "2193"
  },
  {
    "date": "2021-11-26",
    "infected": "2292",
    "avg": "2182.71",
    "total_infected": 454146,
    "tested": "15178.57",
    "tested_data": 15178.57,
    "case": "2182.71"
  },
  {
    "date": "2021-11-27",
    "infected": "2273",
    "avg": "2182.43",
    "total_infected": 456438,
    "tested": "15288.71",
    "tested_data": 15288.71,
    "case": "2182.43"
  },
  {
    "date": "2021-11-28",
    "infected": "1908",
    "avg": "2191.14",
    "total_infected": 458711,
    "tested": "15484.29",
    "tested_data": 15484.29,
    "case": "2191.14"
  },
  {
    "date": "2021-11-29",
    "infected": "1788",
    "avg": "2152.29",
    "total_infected": 460619,
    "tested": "15465.29",
    "tested_data": 15465.29,
    "case": "2152.29"
  },
  {
    "date": "2021-11-30",
    "infected": "2525",
    "avg": "2167.43",
    "total_infected": 462407,
    "tested": "15367.14",
    "tested_data": 15367.14,
    "case": "2167.43"
  },
  {
    "date": "2021-12-01",
    "infected": "2293",
    "avg": "2176.43",
    "total_infected": 464932,
    "tested": "15436.14",
    "tested_data": 15436.14,
    "case": "2176.43"
  },
  {
    "date": "2021-12-02",
    "infected": "2198",
    "avg": "2182.43",
    "total_infected": 467225,
    "tested": "15432",
    "tested_data": 15432,
    "case": "2182.43"
  },
  {
    "date": "2021-12-03",
    "infected": "2316",
    "avg": "2185.86",
    "total_infected": 469423,
    "tested": "15397",
    "tested_data": 15397,
    "case": "2185.86"
  },
  {
    "date": "2021-12-04",
    "infected": "2252",
    "avg": "2182.86",
    "total_infected": 471739,
    "tested": "15261.57",
    "tested_data": 15261.57,
    "case": "2182.86"
  }
],
            "valueAxes": [
                {
                    "id": "v1",
                    "axisAlpha": 0,
                    "position": "left",
                    "title": "দৈনিক বিতরণের সংখ্যা",
                    "minimum": 0,
                    "labelFunction": function (value, valueText, valueAxis) {
                        //return '';
                        return value.toLocaleString("bn-BD");
                    },
                },
                {
                    "id": "v2",
                    "axisAlpha": 0,
                    "position": "right",
                    "title": "দৈনিক নিবন্ধকরণ এর সংখ্যা",
                    "minimum": 0,
                    "labelFunction": function (value, valueText, valueAxis) {
                        return value.toLocaleString("bn-BD");
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
                    "bullet": "দৈনিক বিতরণের (৭-দিনের চলমান গড়)",
                    "id": "g1",
                    "bulletBorderAlpha": 1,
                    "bulletColor": "#FFFFFF",
                    "bulletSize": 7,
                    "lineThickness": 2,
                    "title": "দৈনিক বিতরণের (৭-দিনের চলমান গড়)",
                    "type": "smoothedLine",
                    "useLineColorForBulletBorder": true,
                    "valueField": "avg",
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
                    "bullet": "দৈনিক নিবন্ধকরণ(৭-দিনের চলমান গড়)",
                    "id": "g2",
                    "bulletBorderAlpha": 1,
                    "bulletColor": "#FFFFFF",
                    "bulletSize": 7,
                    "lineThickness": 2,
                    "title": "দৈনিক নিবন্ধকরণ(৭-দিনের চলমান গড়)",
                    "type": "smoothedLine",
                    "useLineColorForBulletBorder": true,
                    "valueField": "tested_data",
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
	        "minPeriod": "DD",
                "parseDates": true,
                "labelFunction": function (value, date, categoryAxis) {
                    var options = new Array();
                    options["MMM DD"] = {year: 'numeric', month: 'long', day: 'numeric'};
                    options["MMM"] = {year: 'numeric', month: 'long'};
                    options["YY"] = {year: 'numeric', month: 'long'};
                    return date.toLocaleDateString("bn-BD", options[categoryAxis.currentDateFormat]);
		},
		"showFirstLabel": true,
                "showLastLabel": true,
		"equalSpacing": true,
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

        let xdata = [];

        $.ajax({
            url: "{{ route('infected.percentage') }}",
            type: 'GET',
            success: function (response) {
                if (response) {
                    response = JSON.parse(response);
                    xdata = response;
                    var xsize = Object.keys(xdata).length;
                    var x_last_date = new Date(xdata[xsize - 1].date).toLocaleDateString('bn', options);

                    var chart = AmCharts.makeChart("ambarchart1", {
                        "type": "serial",
                        "addClassNames": true,
                        "theme": "light",
                        "balloon": {
                            "adjustBorderColor": false,
                            "color": "#050606"
                        },
                        "valueAxes": [
                            {
                                "position": "left",
                                "title": "নিবন্ধনের বিবেচনায় বিতরণের হার",
                                "id": "v1",
                                "minimum": 0,
                                "labelFunction": function (value, valueText, valueAxis) {
                                    //get from
                                    return value.toLocaleString("bn-BD");
                                },

                            },
                            {
                                "position": "right",
                                "title": "বিতরণের সংখ্যা",
                                "id": "v2",
                                "minimum": 0,
                                "labelFunction": function (value, valueText, valueAxis) {
                                    return value.toLocaleString("bn-BD");
                                },
                            },

                        ],


                        "dataProvider": xdata,

                        "startDuration": 1,
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
                        "graphs": [{
                            "valueAxis": "v2",
                            "id": "g1",
                            "alphaField": "alpha",
                            "balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
                            "fillAlphas": 1,
                            "fillColorsField": "color",
                            "title": "বিতরণের সাপ্তাহিক গড়",
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
                                //let previusSevenDate = new Date(graphDataItem.category.setDate(graphDataItem.category.getDate())- 518400000).getDate();
                                let previusSeven = new Date(graphDataItem.category.setDate(graphDataItem.category.getDate())- 518400000);
                                let previusSevenDay= previusSeven.getDate();
                                let getMonth= month_name(previusSeven.getMonth());
                                return "<span style='font-size:12px;'>" + graph.title + "(" + previusSevenDay.toLocaleString('bn', options) + ' ' + getMonth + " - " + graphDataItem.category.toLocaleString('bn', options) + ")<br><span style='font-size:20px;'>" + v.toLocaleString('bn') + "</span></span>";
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
                            "title": "বিতরণের বিবেচনায় নিবন্ধনের সাপ্তাহিক গড়",
                            "valueField": "test_positive",
                            "dashLengthField": "dashLengthLine",
                            "type": "smoothedLine",
                            "balloonFunction": function (graphDataItem, graph) {
                                var v = 0;

                                if (graphDataItem.values) {
                                    v = graphDataItem.values.value;
                                }
                                var options = {month: 'long', day: 'numeric'};
                                let previusSeven = new Date(graphDataItem.category.setDate(graphDataItem.category.getDate())- 518400000);
                                let previusSevenDay= previusSeven.getDate();
                                let getMonth= month_name(previusSeven.getMonth());
                                return "<span style='font-size:12px;'>" + graph.title + "<br>(" +  previusSevenDay.toLocaleString('bn', options) + ' ' + getMonth + " - " + graphDataItem.category.toLocaleString('bn', options) + ")<br><span style='font-size:20px;'>" + v.toLocaleString('bn') + "</span></span>";
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

                        }


                    });
                }
            }
        });
    }

    var month_name = function(dt){
        mlist = ["জানুয়ারী", "ফেব্রুয়ারী", "মার্চ", "এপ্রিল", "মে", "জুন", "জুলাই", "অগাস্ট", "সেপ্টেম্বর", "অক্টোবর", "নভেম্বর", "ডিসেম্বর"];
        return mlist[dt];
    };


    /**
     * =======================Start Dhaka rate Chart=========================================
     * */ 

    function showDhakaPisitiveRateChart(chartData, axis, title) {
        var colorList = ['#04B907', '#FB0F04', '#045FEA', '#05D5D5', '#8305D5', '#D50560', '#130101', '#AD9B03'];
        var colorSelect = 0;
        $.each( axis, function( key, value ) {
            colorSelect = colorSelect + 1;
            $.each( value, function( ky, val ) {
                axis[key].lineColor = (colorList[colorSelect] !== 'undefined')?colorList[colorSelect]:'#003210';
            });    
        });

        
       
        var size = Object.keys(chartData).length;
        var div_date = new Date(chartData[size - 1].date).toLocaleDateString('bn', options);
        $('#positive-dhaka-rate-heading').html(" " + div_date);

        if ($('#dhaka_rate').length) {

            var chart = AmCharts.makeChart("dhaka_rate", {
                "type": "serial",
                "theme": "light",
                "legend": {
                    "useGraphSettings": true,
                    "valueFunction": function (a, value) {
                        return '';
                    },
                    "align": "center"
                },
                "valueAxes": [
                {
                    "id": "g1",
                    "axisAlpha": 0,
                    "position": "left",
                    "title": title+" নিবন্ধনের বিবেচনায় বিতরণের হার ",
                    "minimum": 0,
                    "labelFunction": function (value, valueText, valueAxis) {
                            return value.toLocaleString("bn-BD");
                    },
                }],
                "dataProvider": chartData,
                "synchronizeGrid": true,

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
                        // console.log(categoryAxis.currentDateFormat)
                        var options = new Array();
                        options["MMM DD"] = {year: 'numeric', month: 'long', day: 'numeric'};
                        options["MMM"] = {year: 'numeric', month: 'long'};
                        options["YY"] = {year: 'numeric', month: 'long'};
                        return date.toLocaleDateString("bn-BD", options[categoryAxis.currentDateFormat]);
		    },
		    "equalSpacing": true,

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

           // chart.addListener("dataUpdated", zoomChart);

           // function zoomChart() {
                // chart.zoomToDates(new Date(2020, 5, 20), new Date(2020, 10, 17));
           // }
        }
    }

    function showNationalLevelTestPosivityChart(chartData) {
        // console.log(chartData);
        var size = Object.keys(chartData).length;
        var div_date = new Date(chartData[size - 1].date).toLocaleDateString('bn', options);
        $('#last_date_4').html(" " + div_date);

        if ($('#dhaka_rate').length) {
            var chart = AmCharts.makeChart("dhaka_rate", {
                "type": "serial",
                "theme": "none",
                "marginTop": 0,
                "marginRight": 80,
                "dataProvider": chartData,
                "valueAxes": [{
                    "axisAlpha": 0,
                    "position": "left",
                    "minimum": 0,
                    "labelFunction": function (value, valueText, valueAxis) {
                        return value.toLocaleString("bn-BD");
                    },
                }],

                "valueAxes": [
                {
                    "id": "g1",
                    "axisAlpha": 0,
                    "position": "left",
                    "title": "সাপ্তাহিক নিবন্ধনের বিবেচনায় বিতরণের সংখ্যা ",
                    "minimum": 0,
                    "labelFunction": function (value, valueText, valueAxis) {
                        //return '';
                        return value.toLocaleString("bn-BD");
                    },
                }],
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
                
                
                "graphs": [{
                    "valueAxis": "v1",
                    "lineColor": "#FB0F04",
                    "lineThickness": 2,
                    "bullet": "জাতীয় পর্যায়ে নিবন্ধনের বিবেচনায় বিতরণের সংখ্যা",
                    "id": "g1",
                    "bulletBorderAlpha": 1,
                    "bulletColor": "#637bb6",
                    "bulletSize": 7,
                    "lineThickness": 2,
                    "title": "জাতীয় পর্যায়ে নিবন্ধনের বিবেচনায় বিতরণের সংখ্যা",
                    "type": "smoothedLine",
                    "useLineColorForBulletBorder": true,
                    "valueField": "National",
                    "balloonFunction": function (graphDataItem, graph) {
                        var v = 0;
                        if (graphDataItem.values) {
                            v = graphDataItem.values.value;
                        }
                        
                        var options = {month: 'long', day: 'numeric'};
                        let previusSeven = new Date(graphDataItem.category.setDate(graphDataItem.category.getDate())- 518400000);
                        let previusSevenDay= previusSeven.getDate();
                        let getMonth= month_name(previusSeven.getMonth());

                        return "<span style='font-size:12px;'>" + graph.title + "<br>(" +  previusSevenDay.toLocaleString('bn', options) + ' ' + getMonth + " - " + graphDataItem.category.toLocaleString('bn', options) + ")<br><span style='font-size:20px;'>" + v.toLocaleString('bn') + "</span></span>";
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
                    "graphLineColor": "#FB0F04",
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
                "categoryField": "date",
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
		    "equalSpacing": true,
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
        url: '{{url("/")}}/get-national-level-test-positivity-data',
        type: 'GET',
        data: {},
        success: function (data) {
            showNationalLevelTestPosivityChart(data);
            hideLoader();
        },
        error: function (error) {
            console.log(error);
        }
    });

    
    $('#filter-dhaka-rate').click(function () {
        var weeklyOrDaily = $('input[name="weeklyOrDaily"]:checked').val();

        var weeklyOrDailyTitle = (weeklyOrDaily == 1) ? 'দৈনিক' : 'সাপ্তাহিক';


        var distArray = $('#district_dhaka_rate').val();
        // var districts = [];
        
        if (distArray) {
            showLoader();
            $.ajax({
                url: '{{url("/")}}/get-dhaka-positive-rate-data',
                type: 'GET',
                data: {districts: distArray, weeklyOrDaily: weeklyOrDaily},
                success: function (data) {
                    // console.log(data);
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
                                var options = {month: 'long', day: 'numeric'};
                                var v = 0;
                                var d = '';
                                let previusSeven = new Date(graphDataItem.category.setDate(graphDataItem.category.getDate())- 518400000);
                                let previusSevenDay= previusSeven.getDate();
                                let getMonth= month_name(previusSeven.getMonth());

                               
                                if (graphDataItem.values.hasOwnProperty('value')) {
                                    v = graphDataItem.values.value.toLocaleString('bn');
                                }
                                if (graphDataItem.hasOwnProperty('category')) {
                                    d = graphDataItem.category.toLocaleDateString('bn', options);
                                }
                                
                                if(weeklyOrDaily == 1){
                                    return "<b>" + graph.title + "(" + d + ")</b><span style='font-size:14px'> :<b>" + v + "</b></span>";
                                }else{
                                    return "<b>" + graph.title + "(" + previusSevenDay.toLocaleString('bn', options) + " "+getMonth+" - " + d + ")</b><span style='font-size:14px'> :<b>" + v + "</b></span>";
                                }
                            },

                        };
                        axis.push(obj);
                    })
                    showDhakaPisitiveRateChart(data.data, axis, weeklyOrDailyTitle);
                    
                    hideLoader();

                },
                error: function (error) {
                    console.log(error);
                }
            });
        } 
        
        
    });

    

    /*==============================End=============================================
    * Dhaka Chart Filter
    * */
    
    

    /*==============================Start============================================
    * age wise death deault
    * */

    

    function showNationalLevelAgeWiseDeathChart(chartData) {
        // console.log(chartData);
        var size = Object.keys(chartData).length;
        var div_date = new Date(chartData[size - 1].date).toLocaleDateString('bn', options);
        // $('#last_date_4').html(" " + div_date);

        if ($('#age_wise_death_distribution').length) {
            var chart = AmCharts.makeChart("age_wise_death_distribution", {
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
                        "title": "সাপ্তাহিক বিতরণের সংখ্যা",
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
                    "title": "৬০+",
                    "valueField": "sixtyone_plus",
                    "fillAlphas": 0,
                    "type": "smoothedLine",
                    "balloonFunction": function (graphDataItem, graph) {
                        var v = 0;
                        if (graphDataItem.values) {
                            v = graphDataItem.values.value;
                        }
                        
                        var options = {month: 'long', day: 'numeric'};
                        let previusSeven = new Date(graphDataItem.category.setDate(graphDataItem.category.getDate())- 518400000);
                        let previusSevenDay= previusSeven.getDate();
                        let getMonth= month_name(previusSeven.getMonth());

                        return "<span style='font-size:12px;'>" + graph.title + " (" +  previusSevenDay.toLocaleString('bn', options) + ' ' + getMonth + " - " + graphDataItem.category.toLocaleString('bn', options) + ") <span style='font-size:14px;'>" + v.toLocaleString('bn') + "</span></span>";
                    },

                }, {
                    "valueAxis": "v2",
                    "lineColor": "#54E780",
                    "lineThickness": 2,
                    "bullet": "",
                    "bulletBorderThickness": 2,
                    "hideBulletsCount": 30,
                    "title": "৫১ থেকে ৬০",
                    "valueField": "fiftyone_to_sixty",
                    "fillAlphas": 0,
                    "type": "smoothedLine",
                    "balloonFunction": function (graphDataItem, graph) {
                        var v = 0;
                        if (graphDataItem.values) {
                            v = graphDataItem.values.value;
                        }
                        
                        var options = {month: 'long', day: 'numeric'};
                        let previusSeven = new Date(graphDataItem.category.setDate(graphDataItem.category.getDate())- 518400000);
                        let previusSevenDay= previusSeven.getDate();
                        let getMonth= month_name(previusSeven.getMonth());

                        return "<span style='font-size:12px;'>" + graph.title + " (" +  previusSevenDay.toLocaleString('bn', options) + ' ' + getMonth + " - " + graphDataItem.category.toLocaleString('bn', options) + ") <span style='font-size:14px;'>" + v.toLocaleString('bn') + "</span></span>";
                    },

                },
                    {
                        "valueAxis": "v3",
                        "lineColor": "orange",
                        "lineThickness": 2,
                        "bullet": "",
                        "bulletBorderThickness": 2,
                        "hideBulletsCount": 30,
                        "title": "৪১ থেকে ৫০",
                        "valueField": "fortyone_to_fifty",
                        "fillAlphas": 0,
                        "type": "smoothedLine",
                        "balloonFunction": function (graphDataItem, graph) {
                            var v = 0;
                            if (graphDataItem.values) {
                                v = graphDataItem.values.value;
                            }
                            
                            var options = {month: 'long', day: 'numeric'};
                            let previusSeven = new Date(graphDataItem.category.setDate(graphDataItem.category.getDate())- 518400000);
                            let previusSevenDay= previusSeven.getDate();
                            let getMonth= month_name(previusSeven.getMonth());

                            return "<span style='font-size:12px;'>" + graph.title + " (" +  previusSevenDay.toLocaleString('bn', options) + ' ' + getMonth + " - " + graphDataItem.category.toLocaleString('bn', options) + ") <span style='font-size:14px;'>" + v.toLocaleString('bn') + "</span></span>";
                        },
                    },
                    {
                        "valueAxis": "v4",
                        "lineColor": "maroon",
                        "lineThickness": 2,
                        "bullet": "",
                        "bulletBorderThickness": 3,
                        "hideBulletsCount": 30,
                        "title": "৩১ থেকে ৪০",
                        "valueField": "thirtyone_to_forty",
                        "fillAlphas": 0,
                        "type": "smoothedLine",
                        "balloonFunction": function (graphDataItem, graph) {
                            var v = 0;
                            if (graphDataItem.values) {
                                v = graphDataItem.values.value;
                            }
                            
                            var options = {month: 'long', day: 'numeric'};
                            let previusSeven = new Date(graphDataItem.category.setDate(graphDataItem.category.getDate())- 518400000);
                            let previusSevenDay= previusSeven.getDate();
                            let getMonth= month_name(previusSeven.getMonth());

                            return "<span style='font-size:12px;'>" + graph.title + " (" +  previusSevenDay.toLocaleString('bn', options) + ' ' + getMonth + " - " + graphDataItem.category.toLocaleString('bn', options) + ") <span style='font-size:14px;'>" + v.toLocaleString('bn') + "</span></span>";
                        },

                    },
                    {
                        "valueAxis": "v5",
                        "lineColor": "#E75480",
                        "lineThickness": 2,
                        "bullet": "",
                        "bulletBorderThickness": 3,
                        "hideBulletsCount": 30,
                        "title": "২১ থেকে ৩০",
                        "valueField": "twentyone_to_thirty",
                        "fillAlphas": 0,
                        "type": "smoothedLine",
                        "balloonFunction": function (graphDataItem, graph) {
                            var v = 0;
                            if (graphDataItem.values) {
                                v = graphDataItem.values.value;
                            }
                            
                            var options = {month: 'long', day: 'numeric'};
                            let previusSeven = new Date(graphDataItem.category.setDate(graphDataItem.category.getDate())- 518400000);
                            let previusSevenDay= previusSeven.getDate();
                            let getMonth= month_name(previusSeven.getMonth());

                            return "<span style='font-size:12px;'>" + graph.title + " (" +  previusSevenDay.toLocaleString('bn', options) + ' ' + getMonth + " - " + graphDataItem.category.toLocaleString('bn', options) + ") <span style='font-size:14px;'>" + v.toLocaleString('bn') + "</span></span>";
                        },

                    },
                    {
                        "valueAxis": "v6",
                        "lineColor": "black",
                        "lineThickness": 2,
                        "bullet": "",
                        "bulletBorderThickness": 3,
                        "hideBulletsCount": 30,
                        "title": "১১ থেকে ২০",
                        "valueField": "elv_to_twenty",
                        "fillAlphas": 0,
                        "type": "smoothedLine",
                        "balloonFunction": function (graphDataItem, graph) {
                            var v = 0;
                            if (graphDataItem.values) {
                                v = graphDataItem.values.value;
                            }
                            
                            var options = {month: 'long', day: 'numeric'};
                            let previusSeven = new Date(graphDataItem.category.setDate(graphDataItem.category.getDate())- 518400000);
                            let previusSevenDay= previusSeven.getDate();
                            let getMonth= month_name(previusSeven.getMonth());

                            return "<span style='font-size:12px;'>" + graph.title + " (" +  previusSevenDay.toLocaleString('bn', options) + ' ' + getMonth + " - " + graphDataItem.category.toLocaleString('bn', options) + ") <span style='font-size:14px;'>" + v.toLocaleString('bn') + "</span></span>";
                        },

                    },
                    {
                        "valueAxis": "v7",
                        "lineColor": "blue",
                        "lineThickness": 2,
                        "bullet": "",
                        "bulletBorderThickness": 3,
                        "hideBulletsCount": 30,
                        "title": "০ থেকে ১০",
                        "valueField": "zero_to_ten",
                        "fillAlphas": 0,
                        "type": "smoothedLine",
                        "balloonFunction": function (graphDataItem, graph) {
                            var v = 0;
                            if (graphDataItem.values) {
                                v = graphDataItem.values.value;
                            }
                            
                            var options = {month: 'long', day: 'numeric'};
                            let previusSeven = new Date(graphDataItem.category.setDate(graphDataItem.category.getDate())- 518400000);
                            let previusSevenDay= previusSeven.getDate();
                            let getMonth= month_name(previusSeven.getMonth());

                            return "<span style='font-size:12px;'>" + graph.title + " (" +  previusSevenDay.toLocaleString('bn', options) + ' ' + getMonth + " - " + graphDataItem.category.toLocaleString('bn', options) + ") <span style='font-size:14px;'>" + v.toLocaleString('bn') + "</span></span>";
                        },
                    }
                    
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
		    "equalSpacing": true,

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





    $.ajax({
    url: '{{url("/")}}/get-age-wise-death-data',
    type: 'GET',
    data: {},
        success: function (data) {
            showNationalLevelAgeWiseDeathChart(data);
            hideLoader();
        },
        error: function (error) {
            console.log(error);
        }
    });

    $('#filter-age-wise-death').click(function () {
        var genderTitle = '';
        var gender = $('#age_wise_death_by_gender').val();
        
        
        switch(gender) {
            case 'M':
                genderTitle = 'পুরুষ';
                break;
            case 'F':
                genderTitle = 'মহিলা';
                break;
            case 'O':
                genderTitle = 'অন্যান্য';
                break;
            default:
                genderTitle = 'সকল';
                break;
        } 
        //console.log(genderTitle);
       
        var distArray = $('#ageWiseDeathDistrict').val();
        // var districts = [];
        
        if (gender != 'A') {
            $.ajax({
	    url:  '{{url("/")}}/get-age-wise-death-data-filter',
            type: 'GET',
            data: { gender: gender, district: distArray },
                success: function (data) {
                    showNationalLevelAgeWiseDeathChart(data);
                    hideLoader();
                },
                error: function (error) {
                    console.log(error);
                }
            });
	}else{
	     $.ajax({
    url: '{{url("/")}}/get-age-wise-death-data',
    type: 'GET',
    data: {},
        success: function (data) {
            showNationalLevelAgeWiseDeathChart(data);
            hideLoader();
        },
        error: function (error) {
            console.log(error);
        }
    });


	}
    });
    
    
    
    /*==============================End==============================================
    * age wise death default
    * */



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

    



     /*==============================Start============================================
    * টেস্ট পজিটিভিটি রেটের ভিত্তিতে জেলা পর্যায়ে ঝুঁকি বিশ্লেষণs
    * */
    $('#iframeData_1').html('<iframe id="rtIframeData" scrolling="no" width="100%" style="margin:0px !important; padding:0px !important" height="870px" src="https://public.tableau.com/views/COVIDtestpositivityratedistrictmonth1_16088038408650/Dashboard1?%3Aembed=y&amp;%3AshowVizHome=no" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>');
    $('#iframeData_2').html('<iframe id="rtIframeData" scrolling="no" width="100%"  style="margin:0px !important; padding:0px !important" height="870px" src="https://public.tableau.com/views/COVIDtestpositivityratedistrictmonth2_16088070260020/Dashboard1?%3Aembed=y&amp;%3AshowVizHome=no" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>');
    $('#iframeData_3').html('<iframe id="rtIframeData" scrolling="no" width="100%" style="margin:0px !important; padding:0px !important" height="870px" src="https://public.tableau.com/views/COVIDtestpositivityratedistrictmonth3_16088073716630/Dashboard1?%3Aembed=y&amp;%3AshowVizHome=no" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>');
    $('#iframeData_4').html('<iframe id="rtIframeData" scrolling="no" width="100%" style="margin:0px !important; padding:0px !important" height="870px" src="https://public.tableau.com/views/COVIDtestpositivityratedistrictmonth4_16088075184360/Dashboard1?%3Aembed=y&amp;%3AshowVizHome=no" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>');

    $(document).ready(function ($) {
        var slider = document.getElementById("myRange");
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        //  output.innerHTML = englishToBangla(slider.value);

        slider.oninput = function () {
            output.innerHTML = englishToBangla(this.value);
        }

        //$("#ex16b").slider({ min: 10, max: 100, value: [10, 100], labelledby: ['ex18-label-2a', 'ex18-label-2b'], focus: true });
        $("#ex12c").slider({id: "slider12c", min: 0, max: 30, range: true, value: [5, 10]});

        $("#ex12c").on("slide", function (slideEvt) {
            $("#ex6SliderVal").text(englishToBangla(slideEvt.value[0]) + ',' + englishToBangla(slideEvt.value[1]));
            myrange_ajax_call();
        });
        myrange_ajax_call();


        $('#myRange').on('click', function () {
            myrange_ajax_call();
        });


        $('#weekly_date_submit').on('click', function () {
            myrange_ajax_call();
            weekly_date_change();
        });

        function weekly_date_change(){
            let url = new URL('{!! route('weekly.date.change.for.matrix') !!}');
            $.ajax({

                type: "GET",
                url: url.toString(),
                data: {
                    'weekly_date': $('#weekly_date').val(),
                },
                timeout: 30000,
                success: function (data) {
                    if (data.status == 'success') {
                        $('#recent_weekly_date').html(data.recent_weekly_date)
                        $('#last_weekly_date').html(data.last_weekly_date)
                    } else {
                        alert("Something Went Wrong");
                    }
                },
                error: function (request, status, error) {
                    console.log("Request Param");
                    // console.log(request.responseText);
                    console.log("Status Param");
                    console.log(status);
                    console.log(error);
                }
            });
            return false;
        }


        function myrange_ajax_call() {
            // console.log(hpm.getRiskMatricData);
            let result;
            let url = new URL('{!! route('hpm.getRiskMatricData') !!}');
            $.ajax({

                type: "GET",
                url: url.toString(),
                data: {
                    'test_count': $('#myRange').val(),
                    'test_positive_data_rate': $('#ex12c').val(),
                    'weekly_date': $('#weekly_date').val(),
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
                    // console.log(request.responseText);
                    console.log("Status Param");
                    console.log(status);
                    console.log(error);
                }
            });
            return false;
        }

        function rangeChange(data, risk_matrix_data) {
            // console.log(risk_matrix_data);

            $('.high_to_high_modal_click').html('<strong>অপরিবর্তিত উচ্চ ঝুঁকি</strong> <br><u>'+englishToBangla(data.high_to_high) + ' টি জেলা</u> <br>' + risk_matrix_data.high_to_high_district_name);
            $('.high_to_low_modal_click').html('<strong>উচ্চ ঝুঁকি থেকে কম ঝুঁকি</strong> <br><u>'+englishToBangla(data.high_to_low) + ' টি জেলা</u> <br>' + risk_matrix_data.high_to_low_district_name);
            $('.high_to_medium_modal_click').html('<strong>উচ্চ ঝুঁকি থেকে মধ্যম ঝুঁকি</strong> <br><u>'+englishToBangla(data.high_to_medium) + ' টি জেলা</u> <br>' + risk_matrix_data.high_to_medium_district_name);
            $('.low_to_high_modal_click').html('<strong>কম ঝুঁকি থেকে উচ্চ ঝুঁকি</strong> <br><u>'+englishToBangla(data.low_to_high) + ' টি জেলা</u> <br>' + risk_matrix_data.low_to_high_district_name);
            $('.low_to_low_modal_click').html('<strong>অপরিবর্তিত কম ঝুঁকি</strong> <br> <u>'+englishToBangla(data.low_to_low) + ' টি জেলা</u> <br>' + risk_matrix_data.low_to_low_district_name);
            $('.medium_to_high_modal_click').html('<strong>মধ্যম ঝুঁকি থেকে উচ্চ ঝুঁকি</strong><br><u>'+englishToBangla(data.medium_to_high) + ' টি জেলা</u> <br>' + risk_matrix_data.medium_to_high_district_name);
            $('.medium_to_low_modal_click').html('<strong>মধ্যম ঝুঁকি থেকে কম ঝুঁকি</strong> <br><u>'+englishToBangla(data.medium_to_low) + ' টি জেলা</u> <br>' + risk_matrix_data.medium_to_low_district_name);
            $('.medium_to_medium_modal_click').html('<strong>অপরিবর্তিত মধ্যম ঝুঁকি</strong> <br> <u>'+englishToBangla(data.medium_to_medium) + ' টি জেলা</u> <br>' + risk_matrix_data.medium_to_medium_district_name);
            $('.low_to_medium_modal_click').html('<strong>কম ঝুঁকি থেকে মধ্যম ঝুঁকি</strong> <br> <u>'+englishToBangla(data.low_to_medium) + ' টি জেলা</u> <br>' + risk_matrix_data.low_to_medium_district_name);
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

     /*==============================End============================================
    * টেস্ট পজিটিভিটি রেটের ভিত্তিতে জেলা পর্যায়ে ঝুঁকি বিশ্লেষণs
    * */


    <?php
    $getNationalInfectedAge = DB::select("select A.zero_to_ten/5 as '_0_10',
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
                        "title": "আক্রান্তের সংখ্যা",
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
            showLoader();
            $.ajax({
                url: '{{url("/")}}/get-division-data-filter',
                type: 'GET',
                data: {divisions: divisions, districts: districts},
                success: function (data) {
                    // console.log(data);
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
                        axis.push(obj);
                    })
                    // console.log(data)
                    showDivisionChartFilter(data.data, axis);
                    
                    hideLoader();

                },
                error: function (error) {
                    console.log(error);
                }
            });
        } else {
            showLoader();
            $.ajax({
                url: '{{url("/")}}/get-division-data',
                type: 'GET',
                data: {},
                success: function (data) {
                    showDivisionChart(data);
                    hideLoader();
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


    /*Haspatal beds ===================== Start ===========================  */
    /* general beds==== */
    function hospitalGeneralFilter(design, hospitalData) { 
       var generalData = hospitalData.general;
      
       var hospitalGeneralBedchart = AmCharts.makeChart("hospital_general_bed_stacked_chart",{
           "dataProvider": generalData,
           "type": "serial",
           "theme": "none",
           "categoryField": "date",
            
            "graphs": design.graphs,
            "valueAxes": design.valueAxes,
            "chartCursor": design.chartCursor,
            "categoryAxis": design.categoryAxis,
            "legend": design.legend,
            "chartScrollbar": design.chartScrollbar,  
        });

        hospitalGeneralBedchart.addListener("dataUpdated", zoomChart);
        zoomChart();

    }

    /* icu beds==== */
    function hospitalIcuFilter(design, hospitalData) { 
       var icuData = hospitalData.icu;

       var hospitalGeneralBedchart = AmCharts.makeChart("hospital_icu_bed_stacked_chart",{
           "dataProvider": icuData,
           "type": "serial",
           "theme": "none",
           "categoryField": "date",
            
            // "colors": [
            //     "#32BA32",
            //     "#FF0000",
            //     "#32BA80"
            // ],
            
            "graphs": design.graphs,
            "valueAxes": design.valueAxes,
            "chartCursor": design.chartCursor,
            "categoryAxis": design.categoryAxis,
            "legend": design.legend,
            "chartScrollbar": design.chartScrollbar,  
        });

        hospitalGeneralBedchart.addListener("dataUpdated", zoomChart);
        zoomChart();

    }


    $.ajax({
        url: '{{url("/")}}/get-hospital-name',
        type: 'GET',
        data: {},
        success: function (data) {
            var option = '<option value="All">সারা দেশ</option>';
            option += '<option value="Dhaka">ঢাকা শহর</option>';
            option += '<option value="Chittagong">চট্টগ্রাম শহর</option>';
            option += '<option value="Others">অন্যান্য</option>';

            $.each(data, function (a, b) {
                option = option + '<option value="' + b.name + '">' + b.name_bn + '</option>';
            });

            /* age wise death */
            $('#age_wise_hospital_hospital_filter').empty();
            $('#age_wise_hospital_hospital_filter').append(option);
            /* age wise death */

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
            data: {hospital: this.value, text: text},
            success: function (data) {
                
                
                    hospitalGeneralFilter(stackedChartedDesign(text), data);
                    hospitalIcuFilter(stackedChartedDesign(text), data);
               
            },
            error: function (err) {
                console.log(err);
            }
        });
    });

  
    
   
    
    /* ========================= end hospital general data=========================== */


    /* ======================Stack Chart Common Desin start================================= */
    function stackedChartedDesign(text){
        return {
            "graphs": [
                {
                    "balloonText": "[[title]] of [[category]]:[[value]]",
                    "markerType": "circle",
                    "fillAlphas": 1,
                    "valueAxis": "v1",
                    "lineColor": "#32BA32",
                    "id": "g1",
                    "title": text+" এর মোট শয্যা সংখ্যা",
                    "type": "column",
                    "valueField": "total_bed",
                    "balloonFunction": function (graphDataItem, graph) {
                        let total =   graphDataItem.values.total;
                        let blank =   graphDataItem.values.value;
                        var title = "দৈনিক";
                        return "<b>" + title + "</b> <span style='font-size:14px' class='g-v'> মোট শয্যা সংখ্যা : <b>" + blank.toLocaleString('bn-BD') + "</b></span>";
                    }
                },
                {
                    "balloonText": "[[title]] of [[category]]:[[value]]",
                    "markerType": "circle",
                    "fillAlphas": 1,
                    "lineColor": "#FF0000",
                    "valueAxis": "v2",
                    "id": "g2",
                    "title": text+" এর ভর্তি শয্যা সংখ্যা / খালি শয্যা সংখ্যা",
                    "type": "column",
                    "valueField": "occupied_bed",
                    "balloonFunction": function (graphDataItem, graph) {
                        var total = graphDataItem.values.total - graphDataItem.values.value;
                        var blank = total - graphDataItem.values.value;
                        var admited = graphDataItem.values.value;
                        var title = "দৈনিক শয্যা সংখ্যা";
                        return "<b>" + title + "</b><br><span style='font-size:14px' class='g-v'> ভর্তি : <b>" + admited.toLocaleString('bn-BD') + "</b></span><span style='font-size:14px' class='g-v'> || খালি : <b>" + blank.toLocaleString('bn-BD') + "</b></span>";
                    }
                },
                {
                    "bulletBorderColor": "#FF0000",
                    "bulletBorderThickness": 3,
                    "bulletColor": "#9400D3",
                    "valueAxis": "v3",
                    "id": "g3",
                    "lineColor": "#9400D3",
                    "markerType": "circle",
                    "showBulletsAt": "open",
                    "showHandOnHover": true,
                    "title": text+" এর ভর্তি শয্যা সংখ্যার হার",
                    "type": "smoothedLine",
                    "valueField": "occupency_rate",
                    "balloonFunction": function (graphDataItem, graph) {
                        var value = graphDataItem.values.value;
                        var title = "দৈনিক ভর্তি শয্যা সংখ্যার হার";
                        return "<b>" + title + " : </b><span style='font-size:14px' class='g-v'> <b>" + value.toLocaleString('bn-BD') + "%</b></span>";
                    }
                }
            ],
                "valueAxes": [{
                    "position": "left",
                    "title": " শয্যা সংখ্যা",
                    "id": "v2",
                    "minimum": 0,
                    "labelFunction": function (value, valueText, valueAxis) {
                        return value.toLocaleString("bn-BD");
                    },

                },{
                    "position": "right",
                    "title": " ভর্তি শয্যা সংখ্যার হার",
                    "id": "v3",
                    "minimum": 0,
                    "labelFunction": function (value, valueText, valueAxis) {
                        return value.toLocaleString("bn-BD");
                    },

                }],
                "chartCursor": {
                    "cursorPosition": "mouse",
                    "showNextAvailable": false,
                    "categoryBalloonFunction": function (date) {
                        var options = {year: 'numeric', month: 'long', day: 'numeric'};
                        return date.toLocaleDateString('bn-BD', options);
                    },
                },
                "categoryAxis": {
                    "parseDates": true,
                    "seriesStacked" : true,
                    "minPeriod": "DD",
                    "labelFunction": function (value, date, categoryAxis) {
                        var options = new Array();
                        options["MMM DD"] = {year: 'numeric', month: 'long', day: 'numeric'};
                        options["MMM"] = {year: 'numeric', month: 'long'};
                        options["YY"] = {year: 'numeric', month: 'long'};
                        return date.toLocaleDateString("bn-BD", options[categoryAxis.currentDateFormat]);
                    },

                },

                "legend": {
                //"horizontalGap": 50,
                    "maxColumns": 5,
                    "position": "bottom",
                    "useGraphSettings": true,
                    "markerSize": 10,
                    "valueFunction": function (a, value) {
                        return '';
                    },
                    "align": "left"

                },

                "chartScrollbar": {
                        "graph": "g3",
                        "gridAlpha": 0,
                        "color": "#888888",
                        "scrollbarHeight": 30,
                        "backgroundAlpha": 1,
                        "selectedBackgroundAlpha": 0.1,
                        "selectedBackgroundColor": "#888888",
                        "graphFillAlpha": 0,
                        "autoGridCount": false,
                        "selectedGraphFillAlpha": 0,
                        "graphLineAlpha": 0.2,
                        "graphLineColor": "#c2c2c2",
                        "selectedGraphLineColor": "#888888",
                        "selectedGraphLineAlpha": 1

                }   
            
        }
    }
    /* ======================Stack Chart Common Desin start================================= */


</script>



// smooth scroll to several section of the page
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
        padding: 14px;
        border-radius: 3px;
        display: none;
        margin-right: 14px;
    }

    #scrolltopBtn:hover {
        background-color: #555;
    }
    div#iframeData_1,
    div#iframeData_2,
    div#iframeData_3,
    div#iframeData_4{
        height: 500px;
    }
</style>
<a href="#root" id="scrolltopBtn">উপরে</a>
<script>

    //Get the button
    var mybutton = document.getElementById("scrolltopBtn");

    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // Get daily infected total result
    $(document).on('change', '#daily-infected-total-select', function () {
        showLoader();
        let selectedOrg = $('#daily-infected-total-select option:selected').val();
        if (selectedOrg) {
            if (selectedOrg == 'MIS-DGHS') {

                dailyInfectedChart(mdata);
                hideLoader();
            }
            if (selectedOrg == 'IEDCR') {
                $.ajax({
                    url: "{{ route('daily.infected.chart', '[]') }}",
                    type: 'GET',
                    success: function (response) {
                        if (response) {

                            response = JSON.parse(response);
                            dailyInfectedChart(response);
                        } else {
                            dailyInfectedChart([]);
                        }
                        hideLoader();
                    }
                });
            }
        }
    });
    dailyInfectedChart(mdata);
    // console.log(mdata);


    // Filter daily infected by district

    $('#filter-daily-infected-search').click(function () {
    var districts = $('#daily-infected-district').val().replace(/'/g, "''");
    var dis =  $('#daily-infected-district').find(":selected").text();
    // console.log(districts);
    
    
    if (districts != 'all') {
            showLoader();
            $.ajax({
                url: '{{url("/")}}/filter-daily-infected-chart',
                type: 'GET',
                data: {districts: [districts]},
                success: function (response) {
                    // console.log(response);
                    if (response) {
                    response = JSON.parse(response);
                    dailyInfectedChart(response,dis);
                    } else {
                    dailyInfectedChart([]);
                    }
                    hideLoader();
                },
                error: function (error) {
                    console.log(error);
                }
            });
            }else{
                dailyInfectedChart(mdata);
            }

    });


    //End Here =========================================


    function showLoader() {
        $('#loading-sniper').show();
        $('body').css('overflow', 'hidden');
    }

    function hideLoader() {
        $('#loading-sniper').hide();
        $('body').css('overflow', 'auto');
    }

    /*$(function () {
        $.ajax({
            url: "{{ route('infected.percentage') }}",
            type: 'GET',
            success: function (response) {
                response = JSON.parse(response);
                if (response) {

                }
            }
        });
    });*/

</script>



</body>
</html>
