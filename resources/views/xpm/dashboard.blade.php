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
                                <li><span class="bullet-point"></span> <span>দৈনিক সনাক্তের সংখ্যা </span></li>
                            </a>
                             <a href="#scroll_daily_risk_dist_wise_test_positive">
                                <li><span class="bullet-point"></span> <span>পরীক্ষা বিবেচনায় সনাক্তের হারের ভিত্তিতে জেলা পর্যায়ে ঝুঁকি বিশ্লেষণ </span>
                                </li>
                            </a>
                            <a href="#scroll_daily_last_4weeks_risk">
                                <li><span class="bullet-point"></span> <span>গত ৪ সপ্তাহের ঝুঁকি বিবেচনায় দেশের ৬৪টি জেলার তুলনামূলক অবস্থান </span>
                                </li>
                            </a>
                            <a href="#scroll_daily_affected_area_wise">
                                <li><span class="bullet-point"></span>
                                    <span>অঞ্চল-ভিত্তিক দৈনিক সনাক্তের সংখ্যা</span>
                                </li>
                            </a>
                           
                            <a href="#scroll_daily_affected_comparison">
                                <li><span class="bullet-point"></span>
                                    <span>দৈনিক পরীক্ষা ও সনাক্তের সংখ্যার তুলনা</span>
                                </li>
                            </a>
                            <a href="#scroll_daily_affected_comparison_rate">
                                <li><span class="bullet-point"></span>
                                    <span> পরীক্ষা বিবেচনায় সনাক্তের হারের সাপ্তাহিক গড়</span>
                                </li>
                            </a>
                            {{-- <a href="#scroll_test_status">
                                <li><span class="bullet-point"></span> <span>পরীক্ষা পরিস্থিতি</span></li>
                            </a> --}}
                            

                            <a href="#scroll_daily_test_dhaka_district">
                                <li><span class="bullet-point"></span>
                                    <span>জেলা ভিত্তিক দৈনিক পরীক্ষা বিবেচনায় সনাক্তের হার</span>
                                </li>
                            </a>

                            
                            <a href="#scroll_daily_age_wise_affect_death">
                                <li><span class="bullet-point"></span>
                                    <span>বয়স-ভিত্তিক সাপ্তাহিক মৃত্যুর সংখ্যার তুলনা </span></li>
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
                                <div style="font-size: 35px; font-weight:bolder; color: #ff198c; margin-top: -15px">
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
                                <h4 class="header-title pb-1">সর্বমোট সনাক্তের</h4>
                                <div style="font-size: 35px; font-weight:bolder; color: #ff198c; margin-top: -15px">
                                    {!! isset($total_infected) ? formatInBanglaStyle($total_infected) : ' ' !!}
                                </div>
                            </div>
                            <h4 class="header-title pb-1">গত ১৪ দিনে সনাক্তের</h4>
                            <div style="font-size: 55px;" class="the-number">
                                {!! isset($last_14_days['getLast14DaysinfectedData'][0]) ? formatInBanglaStyle($last_14_days['getLast14DaysinfectedData'][0]->curr_fourtten_days_infected_person) : ' ' !!}
                            </div>
                            <div class="summary"><i class="{{$class_2}}"></i>
                                পূর্ববর্তী ১৪ দিনে সনাক্তের
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
                                <div style="font-size: 35px; font-weight:bolder; color: #ff198c; margin-top: -15px">
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
                                        <h2>দৈনিক সনাক্তের সংখ্যা</h2>
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

                                    {{--  Filter   --}}
                                    <div class="row flex-row-reverse">
                                        {{--  <div class="col-md-3">
                                            <label>বিভাগ</label>
                                            <select name="division[]" id="division" multiple
                                                    class="select2 form-control btn-outline-primary division_select daily_effected_division_select">

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
                                        <div class="col-md-3 ml-4 mb-3" id="daily_effected_travelers">
                                            <label>নির্বাচন করুন: </label>
                                            <select name="daily_effected_travelers" id="daily_effected_travelers_id"
                                                    class="select2 form-control btn-outline-primary select_district">
                                                    <option value="0">সকল</option>
                                                    <option value="1">নন ট্রাভেলার্স</option>
                                            </select>
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
                                            পরীক্ষা বিবেচনায় সনাক্তের হারের ভিত্তিতে জেলা পর্যায়ে ঝুঁকি বিশ্লেষণ
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
                                        
                                        <div style="background-color: #F5EDDC;
                                            width: 420px;
                                            height: 200px;
                                            border: 1px dotted black;" class="row background">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-1 pt-2 pb-1">
                                                            <div style="width: 12px; height:12px;background-color: #DC143C;border: 1px solid #686868;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 pt-1">
                                                            <p style="font-size:16px;margin-bottom: 0px;"> গাঢ় লাল (পরীক্ষা বিবেচনায় সনাক্তের হার ৩১% থেকে ৪০%)</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1 pt-2 pb-1">
                                                            <div style="width: 12px; height:12px;background-color: #F90606;border: 1px solid #686868;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 pt-1">
                                                            <p style="font-size:16px;margin-bottom: 0px;"> লাল (পরীক্ষা বিবেচনায় সনাক্তের হার ২১% থেকে ৩০%)</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1 pt-2 pb-1">
                                                            <div style="width: 12px; height:12px;background-color: #FF6347;border: 1px solid #686868;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 pt-1">
                                                            <p style="font-size:16px;margin-bottom: 0px;"> হালকা লাল (পরীক্ষা বিবেচনায় সনাক্তের হার ১০% থেকে ২০% )</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1 pt-2 pb-1">
                                                            <div style="width: 12px; height:12px;background-color: #FFBB33; border: 1px solid #686868;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 pt-1">
                                                            <p style="font-size:16px;margin-bottom: 0px;"> কমলা (পরীক্ষা বিবেচনায় সনাক্তের হার ৫% - ১০%)</p>


                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1 pt-2 pb-1">
                                                            <div style="width: 12px; height:12px;background-color: #1FAA0D;border: 1px solid #686868;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 pt-1">
                                                            <p style="font-size:16px;margin-bottom: 0px;"> সবুজ (পরীক্ষা বিবেচনায় সনাক্তের হার < ৫%) </p>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1 pt-2 pb-1">
                                                            <div style="width: 12px; height:12px;background-color: rgb(255, 255, 255);border: 1px solid #686868;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 pt-1">
                                                            <p style="font-size:16px;margin-bottom: 0px;"> সাদা (পরীক্ষা বিবেচনায় সনাক্তের হার o%) </p>

                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col-md-1 pt-2 pb-1">
                                                            <div style="width: 12px; height:12px;background-color: #C8C0BD;border: 1px solid #686868;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 pt-1">
                                                            <p style="font-size:16px;margin-bottom: 0px;"> ধূসর (টেস্টের সংখ্যা < ২০০) </p>

                                                        </div>
                                                        <br>
                                                        <div class="d-flex justify-content-start pt-2">
                                                            <span style="border-width: 1px; display:block; float: left; clear: right; border-style: solid; width: 12px; height: 12px; border-radius:12px; top: 3px; left: 3px; background-color: rgb(226, 5, 5); border-color: rgb(226, 5, 5);"></span>
                                                            <span style="border-width: 1px; display:block; float: left; clear: right; border-style: solid; width: 12px; height: 12px; border-radius:12px; top: 3px; left: 3px; background-color: rgb(196, 151, 6); border-color: rgb(196, 151, 6);"></span>
                                                            <span style="border-width: 1px; display:block; float: left; clear: right; border-style: solid; width: 12px; height: 12px; border-radius:12px; top: 3px; left: 3px; background-color: rgb(19, 167, 0); border-color: rgb(19, 167, 0);"></span>
                                                            <span style="border-width: 1px; display:block; float: left; clear: right; border-style: solid; width: 12px; height: 12px; border-radius:12px; top: 3px; left: 3px; background-color: rgb(255, 255, 255); border-color: rgb(255, 255, 255);"></span>
                                                            <p style="font-size:16px;margin-bottom: 0px; margin-left: 3px;"> ডট গুলোর রং উপরের শর্ত সাপেক্ষে চিহ্নিত</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </div>



                            </div>
                            <div class="row"  style="height: 420px !important; overflow:hidden;">  
                                <div class="col-lg-3" style="margin:0px !important; padding: 8px 8px 0px 0px !important; min-width: 25% !important;">
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
                            
                                                {!!  $des_6->description_beng ?? '' !!}
                                            </div>
                                            <p class="footer-note">
                                                <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                                <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_map_update"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- map end here --}}


                            {{-- matix start here --}}
                            <div class="col-lg-12 mt-2" id="scroll_daily_last_4weeks_risk">
                                
                                   
                                        <div class="invoice-head title-bg-style">
                                            <div class="row">
                                                <div class="iv-left col-12 ">
                                                    <h2>
                                                        গত ৪ সপ্তাহের ঝুঁকি বিবেচনায় দেশের ৬৪টি জেলার তুলনামূলক অবস্থান
                                                    </h2>
                                                </div>
                            
                                            </div>
                                        </div>
                                        
                            
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
                                                
                                                
                                                $high_to_high_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity>=12) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity>=12 and total_tests>200) as r using(district) ORDER BY r.test_positivity DESC");
                                                $medium_to_high_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity<5) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity>=12 and total_tests>200) as r using(district) ORDER BY r.test_positivity DESC");
                                                $low_to_high_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity<5) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity>=12 and total_tests>200) as r using(district) ORDER BY r.test_positivity DESC");
                                                $high_to_medium_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity>=12) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity>=5 and test_positivity<12 and total_tests>200) as r using(district) ORDER BY r.test_positivity DESC");
                                                $medium_to_medium_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity>=5 and test_positivity<12) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity>=5 and test_positivity<12 and total_tests>200) as r using(district) ORDER BY r.test_positivity DESC");
                                                $low_to_medium_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity<5) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity>=5 and test_positivity<12 and total_tests>200) as r using(district) ORDER BY r.test_positivity DESC");
                                                $high_to_low_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity>=12) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity<5 AND total_tests>200) as r using(district) ORDER BY r.test_positivity DESC");
                                                $medium_to_low_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity>=5 and test_positivity<12) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity<5 and total_tests>200) as r using(district) ORDER BY r.test_positivity DESC");
                                                $low_to_low_table_contentData = \Illuminate\Support\Facades\DB::select(" SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity<5) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity<5 and total_tests>100) as r using(district) ORDER BY r.test_positivity DESC");
                            
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
                                                                <div id="last_weekly_date"
                                                                    style="transform: rotate(-90deg);width: 396px;margin-left: -144px;margin-top: 380px;font-size: 23px;"
                                                                    class="fs-20 b1">
                                                                    <br>বিগত ৩য় ও ৪র্থ সপ্তাহ: ( {{$matrix_date_selected->last_weekly_date}} )
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-11 col-md-11">
                                                                <div class="row">
                                                                    <div class="col-xl-3">
                                                                        <p>তারিখ নির্বাচন করুন: </p>
                                                                        <select name="weekly_date" id="weekly_date" style="width: 100%" class="form-control">
                                                                            @foreach ($weekly_date as $value)
                                                                                <option value="{{ $value->date_id }}">{{ $value->date_ban }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3 ml-4 mb-3">
                                                                        <p>নির্বাচন করুন: </p>
                                                                        <label class="radio-inline"><input type="radio" value="0" class="travelers" name="travelers" checked>&nbsp;সকল &nbsp;</label>
                                                                        <label class="radio-inline"><input type="radio" value="1" class="travelers" name="travelers">&nbsp;নন ট্রাভেলার্স</label>
                                                                    </div>
                                                                    <div class="col-xl-3">
                                                                        <br>
                                                                        <button type="button" class="btn btn-sm btn-primary" id="weekly_date_submit">পরিবর্তন করুন</button>
                                                                    </div>
                                                                </div>
                                                                <br>
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
                            
                                                                        <p> সর্বোচ্চ ও সর্বনিম্ন পরীক্ষা বিবেচনায় সনাক্তের হারের পরিসীমা:
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
                                                                            <td colspan="4" class="text-center fs-18" style="font-size: 26px" id="recent_weekly_date"><span
                                                                                    class="text-danger">আজ {{ $today }}</span>, বিগত ২ সপ্তাহ ( {{$matrix_date_selected->recent_weekly_date}} )
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
                                                                            <td style="background: #FC6E00; cursor: pointer;text-decoration: none; color: white"
                                                                                class="high_to_medium_modal_click"
                                                                                data-target="#modaldemo1"
                                                                                data-toggle="modal">{{ convertEnglishDigitToBangla($rm_8->high_to_medium) }} টি জেলা
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
                                                                            <td style="cursor: pointer;background: #FFAF74; color: white; width: 30%;"
                                                                                class="low_to_medium_modal_click"
                                                                                data-target="#modaldemo1"
                                                                                data-toggle="modal">{{ convertEnglishDigitToBangla($rm_2->low_to_medium)}} টি জেলা
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
                            
                                                            
                                                            {{-- start table for red color distribution --}}
                                                            <div class="row">
                                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                                    <div class="card-body">
                                                                        <table class="table table-bordered table-striped">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>১০% থেকে ২০%</th>
                                                                                    <th>২১% থেকে ৩০%</th>
                                                                                    <th>৩১% থেকে <৪০%</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="first_slot_district_name" style="cursor: pointer;background: #FF6347; color: white; width: 30%"></td>
                                                                                    <td class="second_slot_district_name" style="cursor: pointer;background: #E13531; color: white; width: 30%"></td>
                                                                                    <td class="third_slot_district_name" style="cursor: pointer;background: #DC143C; color: white; width: 30%"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- start table for red color distribution --}}
                                                            

                            
                                                        <div class="row">
                                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                                <div class="card-body">
                            
                                                                    <div class="alert mt-3 p-0 text-justify" role="alert">
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
                                                            <th class="border-bottom-0">জেলা</th>
                                                            <th class="border-bottom-0">গত ২ সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            <th class="border-bottom-0">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
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
                                                            <th class="border-bottom-0">গত ২ সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            <th class="border-bottom-0">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
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
                                                            <th class="border-bottom-0">গত ২ সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            <th class="border-bottom-0">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
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
                                                            <th class="border-bottom-0">গত ২ সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            <th class="border-bottom-0">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
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
                                                            <th class="border-bottom-0">গত ২ সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            <th class="border-bottom-0">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            
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
                                                            <th class="border-bottom-0">গত ২ সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            <th class="border-bottom-0">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
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
                                                            <th class="border-bottom-0">গত ২ সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            <th class="border-bottom-0">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
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
                                                            <th class="border-bottom-0">গত ২ সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            <th class="border-bottom-0">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
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
                                                            <th class="border-bottom-0">গত ২ সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            <th class="border-bottom-0">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if(count($low_to_low_table_contentData))
                                                            @foreach($low_to_low_table_contentData as $item)
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
                                            </div>
                            
                                        
                                    
                            
                               
                            </div>
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
                                            অঞ্চল-ভিত্তিক দৈনিক সনাক্তের সংখ্যা
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
                            

                            <div class="row">
                                <div class="col-lg-6 mt-2">
                                    <div class="card">
                                        <div class="invoice-head title-bg-style" id="scroll_daily_affected_comparison">
                                            <div class="row">
                                                <div class="iv-left col-12">
                                                    <h2>দৈনিক পরীক্ষা ও সনাক্তের সংখ্যার তুলনা</h2>
                                                </div>
            
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <h4 style="height: 150px; margin-bottom: -85px;" id="special_word_5" class="header-title ">
                                                {!! $des_4->component_name_beng ?? '' !!}
                                            </h4>
                                        </div>
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
                                        <div class="invoice-head title-bg-style" id="scroll_daily_affected_comparison_rate">
                                            <div class="row">
                                                <div class="iv-left col-12">
                                                    <h2> পরীক্ষা বিবেচনায় সনাক্তের হারের সাপ্তাহিক গড়</h2>
                                                </div>
            
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <h4 style="height: 150px; margin-bottom: -85px;" id="special_word_5" class="header-title ">
                                                {!! $des_5->component_name_beng ?? '' !!}
                                            </h4>
                                        </div>
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

                            

                            <div class="row">
                                <div class="col-lg-12 mt-2" id="scroll_daily_test_dhaka_district">
                                    <div class="invoice-head title-bg-style">
                                        <div class="row">
                                            <div class="iv-left col-12 ">
                                                <h2 class="positive-dhaka-rate-heading">
                                                    জেলা ভিত্তিক দৈনিক পরীক্ষা বিবেচনায় সনাক্তের হার
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
                                                    <div class="col-md-3 ml-4 mb-3" id="district_wise_non_travelers">
                                                        <label>নির্বাচন করুন: </label>
                                                        <select name="daily_effected_travelers" id="district_wise_non_travelers_id"
                                                                class="select2 form-control btn-outline-primary select_district">
                                                                <option value="0">সকল</option>
                                                                <option value="1">নন ট্রাভেলার্স</option>
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

               


                <!-- section 2 start here -->

                <div class="col-lg-12 mt-2" id="scroll_daily_age_wise_affect_death">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="invoice-head title-bg-style">
                                <div class="row">
                                    <div class="iv-left col-12 ">
                                        <h2>
                                            বয়স-ভিত্তিক সাপ্তাহিক মৃত্যুর সংখ্যার তুলনা
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
                                                        <div class="col-md-3">
                                                            <label for="">লিঙ্গ </label>
                                                            <select name="age_wise_death_by_gender" id="age_wise_death_by_gender"
                                                                    class="select2 form-control btn-outline-primary">
                                                                <option value="-1">সকল</option>
                                                                <option value="M">পুরুষ</option>
                                                                <option value="F">মহিলা</option>
                                                            
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="">জেলা</label>
                                                            <select name="ageWiseDeathDistrict" id="age_wise_death_district_filter"
                                                                    class="select2 form-control btn-outline-primary">
                                                                    <option value="-1">সারাদেশ</option>
                                                                @foreach($district_list as $district)
                                                                    <option value="{!! $district->district !!}"
                                                                            class="b1">{!! en2bnTranslation($district->district) !!} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="">হাসপাতাল</label>
                                                            <select name="age_wise_hospital_hospital_filter" id="age_wise_hospital_hospital_filter"
                                                                    class="select2 form-control btn-outline-primary">
                                                                <option value="-1">সারাদেশ</option>
                                                                @foreach ($hospital_name as $value)
                                                                    <option value="{{ $value->hospital_id ?? '' }}">{{ $value->hospital_name_bng ?? '' }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
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
                <h5 class="modal-title text-center mt-2 mb-2 text-white">নীতি নির্ধারণী পর্ষদ</h5>
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
                        <div class="col-md-3 text-center">

                            <img src="pm/images/collaborator/sebrina-final.png" class="" style="max-width: 100%;
    height: 130px;" alt="">
                            <p> ড. মীরজাদী সেব্রিনা ফ্লোরা
                            </p>
                            <p>অতিরিক্ত মহাপরিচালক (পরিকল্পনা ও উন্নয়ন),</p>
                            <p> স্বাস্থ্য অধিদপ্তর</p>
                        </div>
                        <div class="col-md-3 text-center">

                            <img src="pm/images/collaborator/mahmudur.png" class="associator-img" alt="">
                            <p> অধ্যাপক ডাঃ মাহমুদুর রহমান </p>
                            <p> সাবেক পরিচালক,</p>
                            <p> আইইডিসিআর</p>
                        </div>
                        <div class="col-md-3 text-center">

                            <img src="pm/images/collaborator/dr_shams.l_arefin.jpg" class="associator-img" alt="">
                            <p> ড. শামস্ এল আরেফিন</p>
                            <p> ঊর্ধ্বতন পরিচালক,</p>
                            <p> মাতৃ ও শিশু স্বাস্থ্য বিভাগ, আইসিডিডিআরবি</p>
                        </div>
                        <div class="col-md-3 text-center">

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
                            <div class="col-md-3">
                                <img src="" styles="border:2 px solid green" class="associator-img"
                                     alt="">
                                <p> অধ্যাপক ডা. মিজানুর রাহমান</p>
                                <p> পরিচালক</p>
                                <p>এমআইএস, স্বাস্থ্য অধিদপ্তর</p>
                            </div>
                            <div class="col-md-3">
                                <img src="pm/images/collaborator/asrafi.jpg" class="associator-img"
                                     alt="">
                                <p> ডা. শাহ আলি আকবর আশরাফি</p>
                                <p> চিফ, হেলথ ইনফরমেশন ইউনিট (এইচ আই ইউ)</p>
                                <p>এমআইএস, স্বাস্থ্য অধিদপ্তর</p>
                            </div>
                            <div class="col-md-3">
                                <img src="pm/images/collaborator/engr_sukhendra_shekhor_roy.jpg" class="associator-img"
                                     alt="">
                                <p> ইঞ্জি. সুখেন্দ্র শেখর রায়</p>
                                <p> সিনিয়র সিস্টেম অ্যনালিস্ট</p>
                                <p>এমআইএস, স্বাস্থ্য অধিদপ্তর</p>
                            </div>
                            <div class="col-md-3">
                                <img src="pm/images/collaborator/dr_aysha_sania.jpg" class="associator-img" alt="">
                                <p>ড. আয়েশা সানিয়া</p>
                                <p> রিসার্চ সায়েন্টিস্ট</p>
                                <p>কলাম্বিয়া বিশ্ববিদ্যালয়,যুক্তরাষ্ট্র</p>
                            </div>
                            <div class="col-md-3">
                                <img src="pm/images/collaborator/dr_mahbubur_rahman.jpg" class="associator-img" alt="">
                                <p>ড. মাহবুবুর রহমান</p>
                                <p> সহকারী অধ্যাপক</p>
                                <p>আইইডিসিআর</p>
                            </div>
                            <div class="col-md-3">
                                <img src="pm/images/collaborator/dr_mallik_masum_billah.jpg" class="associator-img"
                                     alt="">
                                <p>ড. মল্লিক মাসুম বিল্লাহ</p>
                                <p>ঊর্ধ্বতন এফইটিপি উপদেষ্টা</p>
                                <p>আইইডিসিআর</p>
                            </div>
                            <div class="col-md-3">
                                <img src="pm/images/collaborator/taufiq.jpg" class="associator-img"
                                     alt="">
                                <p>ডাঃ মোঃ তৌফিক হাসান শাওন</p>
                                <p>মেডিকেল অফিসার, এমআইএস</p>
                                <p>স্বাস্থ্য অধিদপ্তর</p>
                            </div>
                            <div class="col-md-3">
                                <img src="pm/images/collaborator/maruf.jpg" class="associator-img"
                                     alt="">
                                <p>ডাঃ মোঃ মারুফুর রহমান</p>
                                <p>ডিপিএম, মেডিকেল বায়োটেকনোলজি, সিএমবিটি, এমআইএস</p>
                                <p>স্বাস্থ্য অধিদপ্তর</p>
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

                            {{-- <div class="col-md-4">
                                <h3>তথ্যচিত্র বিশেষজ্ঞ</h3>
                                <img src="pm/images/collaborator/mir_sakib.jpg" class="associator-img"
                                     alt="">
                                <p>মীর সাকিব </p>
                                <p> সিইও, ক্র্যামস্টেক</p>
                            </div> --}}

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
        "special_word_1": ["অক্টোবর মাসের শুরু থেকে সনাক্তের সংখ্যা দৈনিক ১৫০০", "মহামারীর অপরিবর্তিত অবস্থাকে"],
        "special_word_2": ["প্রতি হাজারে প্রায় ১৪ জনের", "প্রতিবেশী দেশগুলোর তুলনায় কম"],
        "special_word_3": ["করোনায় দৈনিক প্রায় একই সংখ্যক মানুষ সনাক্তের হচ্ছে"],
        "special_word_4": ["পরীক্ষার পরিমাণ ও তার গুণগতমানের দিকে নজর দেওয়া প্রয়োজন"],
        "special_word_5": ["মহামারীটি এর বর্তমান গতিতেই আগাচ্ছে - এর গতি এই মূহুর্তে কমছে না বা বাড়ছে না"],
        "special_word_6": ["মহামারীটির উন্নতি হচ্ছে না বরং স্থির অবস্থায় বিরাজমান আছে"],
        "special_word_7": ["লাল এলাকায় আরও বেশি করে পরীক্ষা করা দরকার"],
        "special_word_8": ["পরীক্ষাকৃত ব্যক্তিদের মধ্যে সনাক্তের্রের সংখ্যা কিছুটা কমে আসলেও এখনো বেশ উঁচু"],
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
                        "addClassNames": true,
                        "theme": "light",
                        "balloon": {
                            "adjustBorderColor": false,
                            "color": "#050606"
                        },
                        "valueAxes": [
                            {
                                "position": "left",
                                //"title": "পরীক্ষা বিবেচনায় সনাক্তের হার (টেস্ট পজিটিভিটি রেট)",
                                "title": "",
                                "id": "v1",
                                "minimum": 0,
                                "labelFunction": function (value, valueText, valueAxis) {
                                    //get from
                                    return value.toLocaleString("bn-BD");
                                },

                            },
                            {
                                "position": "right",
                                "title": "সনাক্তের সংখ্যা",
                                "id": "v2",
                                "minimum": 0,
                                "labelFunction": function (value, valueText, valueAxis) {
                                    return value.toLocaleString("bn-BD");
                                },
                            },

                        ],


                        "dataProvider": data,

                        "startDuration": 1,
                        "legend": {
                            "horizontalGap": 20,
                            "maxColumns": 10,
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
                            "fillColorsField": "color",
                            "title": zoneName+" এর দৈনিক সনাক্ত",
                            "type": "column",
                            "fillAlphas": 1,
                            "lineAlpha": 0,
                            "lineColor": "rgb(103, 183, 220)",
                            "valueField": "infected",
                            "dashLengthField": "dashLengthColumn",
                            "balloonFunction": function (graphDataItem, graph) {
                                var value = graphDataItem.values.value;
                                var title = zoneName+" এর দৈনিক সনাক্ত";
                                return "<b>" + title + "</b><br><span style='font-size:14px' class='g-v'> <b>" + value.toLocaleString('bn-BD') + "</b></span>";
                            }
                        }, {
                            "valueAxis": "v1",
                            "id": "graph2",
                            "lineThickness": 2,
                            "lineColor": "orange",
                            "type": "smoothedLine",
                            "title": zoneName+" এর দৈনিক সনাক্তের (৭ দিনের  চলমান গড়)", //5 days running average
                            "valueField": "avg",
                            "bullet": "round",
                            "bulletSize": 7,
                            "fillAlphas": 0,
                            "lineAlpha": 1,
                            "bulletBorderAlpha": 10,
                            "bullegit addtColor": "#FFFFFF",
                            "useLineColorForBulletBorder": true,
                            "bulletBorderThickness": 3,
                             "balloonFunction": function (graphDataItem, graph) {
                                var value = graphDataItem.values.value;
                                var title = zoneName+"- দৈনিক সনাক্তের (৭ দিনের  চলমান গড়)";
                                return "<b>" + title + "</b><br><span style='font-size:14px' class='g-v'> <b>" + value.toLocaleString('bn-BD') + "</b></span>";
                            }
                        }],
                        "chartCursor": {
                            "cursorPosition": "mouse",
                            "showNextAvailable": false,
                            "categoryBalloonFunction": function (date) {
                                var options = {year: 'numeric', month: 'long', day: 'numeric'};
                                return date.toLocaleDateString('bn-BD', options);
                            },
                        },
                        "categoryField": "date",
                        "categoryAxis": {
                            "parseDates": true,
                            "minPeriod": "hh",
                            "showLastLabel": true,
                            "labelFunction": function (value, date, categoryAxis) {
                                var options = new Array();
                                options["MMM DD"] = {year: 'numeric', month: 'long', day: 'numeric'};
                                options["MMM"] = {year: 'numeric', month: 'long'};
                                options["YY"] = {year: 'numeric', month: 'long'};
                                return date.toLocaleDateString("bn-BD", options[categoryAxis.currentDateFormat]);
                            },
                            "labelRotation": 30,
                            "autoGridCount": false,
                            "equalSpacing": true,
                            "gridCount": 10,
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
                        var title = "প্রতি হাজারে পরীক্ষা(" + graphDataItem.dataContext.date + "):";
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
                "title": "দৈনিক সনাক্তের সংখ্যা",
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
                        "title": "সনাক্তের সংখ্যা",
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
                    "showLastLabel": true,
                    "labelFunction": function (value, date, categoryAxis) {
                        var options = new Array();
                        options["MMM DD"] = {year: 'numeric', month: 'long', day: 'numeric'};
                        options["MMM"] = {year: 'numeric', month: 'long'};
                        options["YY"] = {year: 'numeric', month: 'long'};
                        return date.toLocaleDateString("bn-BD", options[categoryAxis.currentDateFormat]);
                    },
                    "autoGridCount": false,
                    "equalSpacing": true,
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
                    "title": "দৈনিক সনাক্তের সংখ্যা",
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
                    "title": "দৈনিক পরীক্ষার সংখ্যা",
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
                    "bullet": "দৈনিক সনাক্তের (৭-দিনের চলমান গড়)",
                    "id": "g1",
                    "bulletBorderAlpha": 1,
                    "bulletColor": "#FFFFFF",
                    "bulletSize": 7,
                    "lineThickness": 2,
                    "title": "দৈনিক সনাক্তের (৭-দিনের চলমান গড়)",
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
                    "bullet": "দৈনিক পরীক্ষা (৭-দিনের চলমান গড়)",
                    "id": "g2",
                    "bulletBorderAlpha": 1,
                    "bulletColor": "#FFFFFF",
                    "bulletSize": 7,
                    "lineThickness": 2,
                    "title": "দৈনিক পরীক্ষা (৭-দিনের চলমান গড়)",
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
                                "title": "পরীক্ষা বিবেচনায় সনাক্তের হার (টেস্ট পজিটিভিটি রেট)",
                                "id": "v1",
                                "minimum": 0,
                                "labelFunction": function (value, valueText, valueAxis) {
                                    //get from
                                    return value.toLocaleString("bn-BD");
                                },

                            },
                            {
                                "position": "right",
                                "title": "সনাক্তের সংখ্যা",
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
                            "title": "সনাক্তের সাপ্তাহিক গড়",
                            "type": "column",
                            "lineColor": "rgb(223, 200, 37)",
                            "valueField": "infected",
                            "dashLengthField": "dashLengthColumn",
                            "balloonFunction": function (graphDataItem, graph) {
                                options["MMM DD"] = {year: 'numeric', month: 'long', day: 'numeric'};
                                options["MMM"] = {year: 'numeric', month: 'long'};
                                options["YY"] = {year: 'numeric', month: 'long'};
                                var v = 0;
                                if (graphDataItem.values) {
                                    v = graphDataItem.values.value;
                                }
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
                            "title": "পরীক্ষা বিবেচনায় সনাক্তের হারের সাপ্তাহিক গড়",
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
                    "title": title+" পরীক্ষা বিবেচনায় সনাক্তের হার ",
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

    function showNationalLevelTestPosivityChart(chartData, weeklyOrDaily=2) {
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
                    "title": "সাপ্তাহিক পরীক্ষা বিবেচনায় সনাক্তের হার ",
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
                    "bullet": "জাতীয় পর্যায়ে পরীক্ষা বিবেচনায় সনাক্তের হার",
                    "id": "g1",
                    "bulletBorderAlpha": 1,
                    "bulletColor": "#637bb6",
                    "bulletSize": 7,
                    "lineThickness": 2,
                    "title": "জাতীয় পর্যায়ে পরীক্ষা বিবেচনায় সনাক্তের হার",
                    "type": "smoothedLine",
                    "useLineColorForBulletBorder": true,
                    "valueField": "National",
                    "balloonFunction": function (graphDataItem, graph) {
                        var v = 0;
                        var d = 0;
                        if (graphDataItem.values) {
                            v = graphDataItem.values.value;
                        }
                        if (graphDataItem.hasOwnProperty('category')) {
                            d = graphDataItem.category.toLocaleDateString('bn', options);
                        }
                        
                        var options = {month: 'long', day: 'numeric'};
                        let previusSeven = new Date(graphDataItem.category.setDate(graphDataItem.category.getDate())- 518400000);
                        let previusSevenDay= previusSeven.getDate();
                        let getMonth= month_name(previusSeven.getMonth());

                         if(weeklyOrDaily == 1){
                            return "<b>" + graph.title + "</b><span style='font-size:14px'> :<b>" + v.toLocaleString('bn')  + "</b></span>";
                        }else{
                            return "<span style='font-size:12px;'>" + graph.title + "<br>(" +  previusSevenDay.toLocaleString('bn', options) + ' ' + getMonth + " - " + graphDataItem.category.toLocaleString('bn', options) + ")<br><span style='font-size:20px;'>" + v.toLocaleString('bn') + "</span></span>";
                        }
                     
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
        
        var non_traveler = $('#district_wise_non_travelers_id').val();

        var distArray = $('#district_dhaka_rate').val();
        // var districts = [];
        
        if (true) {
            showLoader();
            $.ajax({
                url: '{{url("/")}}/get-dhaka-positive-rate-data',
                type: 'GET',
                data: {districts: distArray, weeklyOrDaily: weeklyOrDaily, non_traveler: non_traveler},
                success: function (data) {
                    console.log(data);
                    var axis = new Array();
                    if(typeof (data.axis) === 'object' && (data.axis) !== 'null'){
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
                                    var d = 0;
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
                        });
                        showDhakaPisitiveRateChart(data.data, axis, weeklyOrDailyTitle);
                        hideLoader();
                    }else{
                        showNationalLevelTestPosivityChart(data, weeklyOrDaily);
                        hideLoader();
                    }
                    

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
        //console.log('hello');
        //console.log(chartData);
        //var size = Object.keys(chartData).length;
        //var div_date = new Date(chartData[size - 1].date).toLocaleDateString('bn', options);
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
                        "title": "সাপ্তাহিক মৃত্যুর সংখ্যা",
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
                        if(typeof(v) != 'undefined')
                        return "<span style='font-size:12px;'>" + graph.title + " (" +  previusSevenDay.toLocaleString('bn', options) + ' ' + getMonth + " - " + graphDataItem.category.toLocaleString('bn', options) + ") <span style='font-size:14px;'>" + v.toLocaleString('bn') + "</span></span>";
                    },

                }, {
                    "valueAxis": "v2",
                    "id": "g2",
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
                        if(typeof(v) != 'undefined')
                        return "<span style='font-size:12px;'>" + graph.title + " (" +  previusSevenDay.toLocaleString('bn', options) + ' ' + getMonth + " - " + graphDataItem.category.toLocaleString('bn', options) + ") <span style='font-size:14px;'>" + v.toLocaleString('bn') + "</span></span>";
                    },

                },
                    {
                        "valueAxis": "v3",
                        "id": "g3",
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
                            if(typeof(v) != 'undefined')
                            return "<span style='font-size:12px;'>" + graph.title + " (" +  previusSevenDay.toLocaleString('bn', options) + ' ' + getMonth + " - " + graphDataItem.category.toLocaleString('bn', options) + ") <span style='font-size:14px;'>" + v.toLocaleString('bn') + "</span></span>";
                        },
                    },
                    {
                        "valueAxis": "v4",
                        "id": "g4",
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
                            if(typeof(v) != 'undefined')
                            return "<span style='font-size:12px;'>" + graph.title + " (" +  previusSevenDay.toLocaleString('bn', options) + ' ' + getMonth + " - " + graphDataItem.category.toLocaleString('bn', options) + ") <span style='font-size:14px;'>" + v.toLocaleString('bn') + "</span></span>";
                        },

                    },
                    {
                        "valueAxis": "v5",
                        "id": "g5",
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
                            if(typeof(v) != 'undefined')
                            return "<span style='font-size:12px;'>" + graph.title + " (" +  previusSevenDay.toLocaleString('bn', options) + ' ' + getMonth + " - " + graphDataItem.category.toLocaleString('bn', options) + ") <span style='font-size:14px;'>" + v.toLocaleString('bn') + "</span></span>";
                        },

                    },
                    {
                        "valueAxis": "v6",
                        "id": "g6",
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
                            if(typeof(v) != 'undefined')
                            return "<span style='font-size:12px;'>" + graph.title + " (" +  previusSevenDay.toLocaleString('bn', options) + ' ' + getMonth + " - " + graphDataItem.category.toLocaleString('bn', options) + ") <span style='font-size:14px;'>" + v.toLocaleString('bn') + "</span></span>";
                        },

                    },
                    {
                        "valueAxis": "v7",
                        "id": "g7",
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
                            if(typeof(v) != 'undefined')
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
            // hideLoader();
        },
        error: function (error) {
            console.log(error);
        }
    });

    $('#filter-age-wise-death').click(function () {
        var genderTitle = '';
        var gender = $('#age_wise_death_by_gender').val();
        var hospital = $('#age_wise_hospital_hospital_filter').val();
        var district = $('#age_wise_death_district_filter').val();
        
        
        // switch(gender) {
        //     case 'M':
        //         genderTitle = 'পুরুষ';
        //         break;
        //     case 'F':
        //         genderTitle = 'মহিলা';
        //         break;
        //     case 'O':
        //         genderTitle = 'অন্যান্য';
        //         break;
        //     default:
        //         genderTitle = 'সকল';
        //         break;
        // } 
        //console.log(genderTitle);
       
        
        
        if (gender != '-1' || hospital || '-1' && district || '-1') {
            showLoader();
            $.ajax({
	        url:  '{{url("/")}}/get-age-wise-death-data-filter',
            type: 'GET',
            data: { gender: gender, district: district, hospital: hospital },
                success: function (data) {
                    showNationalLevelAgeWiseDeathChart(data);
                    hideLoader();
                },
                error: function (error) {
                    console.log(error);
                }
            });
	    }else{
            showLoader();
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
                    'travelers' : $('input[name="travelers"]:checked').val()
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
            console.log(risk_matrix_data);

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

            /* extra slot*/
            $('.first_slot_district_name').html(risk_matrix_data.first_slot_district_name);
            $('.second_slot_district_name').html(risk_matrix_data.second_slot_district_name);
            $('.third_slot_district_name').html(risk_matrix_data.third_slot_district_name);
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
                        "title": "সনাক্তের সংখ্যা",
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
            // $('#age_wise_hospital_hospital_filter').empty();
            // $('#age_wise_hospital_hospital_filter').append(option);
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
            
        }
    }
    /* ======================Stack Chart Common Desin start================================= */


    /**...last update show...*/
    $(document).ready(function()
    {
        var date = $('#last_date_9').html();
        $('#last_date_map_update').html(date);
        $('#last_date_8').html(date);
        $('#last_date_10').html(' ২ জানুয়ারী');
    });

    var data = {
        id: "-1",
        text: 'সারাদেশ'
    };

    $('#age_wise_death_district_filter').on('change', function(e){
        var age_wise_death_district = $('#age_wise_death_district_filter').val();
        if('-1' !== age_wise_death_district){
            //var newOption = new Option(data.text, data.id, true, true);
            $('#age_wise_hospital_hospital_filter').val(data.id);
            $('#age_wise_hospital_hospital_filter').trigger('change');
        }
     });

     $('#age_wise_hospital_hospital_filter').on('change', function(e){
        var age_wise_death_hospital = $('#age_wise_hospital_hospital_filter').val();
        if('-1' !== age_wise_death_hospital){
            //var newOption = new Option(data.text, data.id, true, true);
            $('#age_wise_death_district_filter').val(data.id);
            $('#age_wise_death_district_filter').trigger('change');
        }
     });
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

     $('#daily_effected_travelers').hide();
    $('#daily-infected-district').on('select2:select', function (e) {
        var val = this.value;
        if(val != 'all'){
            $('#daily_effected_travelers').show();
        }else{
            $('#daily_effected_travelers').hide();
        }
    }); 

    $('#filter-daily-infected-search').click(function () {
    var districts = $('#daily-infected-district').val().replace(/'/g, "''");
    var dis =  $('#daily-infected-district').find(":selected").text();
    var non_travelers = $('#daily_effected_travelers_id').val();
    // console.log(districts);
    
    
    if (districts != 'all' || non_travelers == '1') {
            showLoader();
            $.ajax({
                url: '{{url("/")}}/filter-daily-infected-chart',
                type: 'GET',
                data: {districts: [districts], non_travelers: non_travelers},
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
