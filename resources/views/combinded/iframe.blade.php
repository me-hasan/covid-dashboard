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
    <link href="pm/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <!-- modernizr css -->
    <script src="pm/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.min.css"
          integrity="sha512-3q8fi8M0VS+X/3n64Ndpp6Bit7oXSiyCnzmlx6IDBLGlY5euFySyJ46RUlqIVs0DPCGOypqP8IRk/EyPvU28mQ=="
          crossorigin="anonymous"/>
    <!-- INTERNAL Select2 css -->
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet"/>
    
    <style>

        .header_dashboard_part{background-color: #337AB7;height:52px;margin:0;padding:0;}
        .header_dashboard_part h1{text-align: center; width: calc(100% - 185px); float: left; color: #fff; font-size: 19px; font-weight: 700; font-family: 'Source Sans Pro'; margin: 0 auto; padding-top: 16px; letter-spacing: 0.49px;}
        .header_dashboard_part img{width:42px;height:42px;}
        ul.tab_nab_dashboard{margin:0;padding:0;background-color:lightgray;width:100%;margin-top:5px;height:44px;}
        ul.tab_nab_dashboard li{list-style:none;  width: 19.5%;	float:left;}
        ul.tab_nab_dashboard li a{background-color: gray; color: white; padding: 12px 25px; text-align: center; text-decoration: none; display: inline-block; border: 1px solid green; width: 100%; box-sizing: border-box; font-size: 14px; font-family: 'Source Sans Pro'; font-weight: bold;}
        ul.tab_nab_dashboard li a:hover{background-color: #006d2c}

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

        


        .slider2ndMap {
            -webkit-appearance: none;
            width: 100%;
            height: 25px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .slider2ndMap:hover {
            opacity: 1;
        }

        .slider2ndMap::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            background: #4CAF50;
            cursor: pointer;
        }

        .slider2ndMap::-moz-range-thumb {
            width: 25px;
            height: 25px;
            background: #4CAF50;
            cursor: pointer;
        }

        #slider12a2ndMap .slider-track-high, #slider12c2ndMatrix .slider-track-high {
            background: red;
        }

        #slider12b2ndMap .slider-track-low, #slider12c2ndMatrix .slider-track-low {
            background: green;
        }

        #slider12c2ndMatrix .slider-selection {
            background: white;
        }


        




        .slider3rdMap {
            -webkit-appearance: none;
            width: 100%;
            height: 25px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .slider3rdMap:hover {
            opacity: 1;
        }

        .slider3rdMap::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            background: #4CAF50;
            cursor: pointer;
        }

        .slider3rdMap::-moz-range-thumb {
            width: 25px;
            height: 25px;
            background: #4CAF50;
            cursor: pointer;
        }

        #slider12a3rdMap .slider-track-high, #slider12c3rdMatrix .slider-track-high {
            background: red;
        }

        #slider12b3rdMap .slider-track-low, #slider12c3rdMatrix .slider-track-low {
            background: green;
        }

        #slider12c3rdMatrix .slider-selection {
            background: white;
        }




        .sliderTableData {
            -webkit-appearance: none;
            width: 100%;
            height: 25px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .sliderTableData:hover {
            opacity: 1;
        }

        .sliderTableData::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            background: #4CAF50;
            cursor: pointer;
        }

        .sliderTableData::-moz-range-thumb {
            width: 25px;
            height: 25px;
            background: #4CAF50;
            cursor: pointer;
        }

        #slider12aTableData .slider-track-high, #slider12cTableData .slider-track-high {
            background: red;
        }

        #slider12bTableData .slider-track-low, #slider12cTableData .slider-track-low {
            background: green;
        }

        #slider12cTableData .slider-selection {
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
            padding-left: 0;
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

        .iconImageSize {
            width: 15px;
        }

        #matrixFullTableWithAllDistrict th, td {
            text-align: center;
        }
        #matrixFullTableWithAllDistrict th{
            font-size : 18px
        }



        /* Loader css end */
        .bold{font-weight: bold;}
        .tabLegendItemSwatchHolder {
            margin-left: 15px;
        }
        
        .modal-content {
            width: 115% !important;
        }

        #matrixFullTableWithAllDistrict {
		counter-reset: serial-number;  /* Set the serial number counter to 0 */
		}
		#matrixFullTableWithAllDistrict td:first-child:before {
		counter-increment: serial-number;  /* Increment the serial number counter */
		content: counter(serial-number);  /* Display the counter */
		}

        #travellerFullTableWithAllDistrict {
		counter-reset: serial-number;  /* Set the serial number counter to 0 */
		}
		#travellerFullTableWithAllDistrict td:first-child:before {
		counter-increment: serial-number;  /* Increment the serial number counter */
		content: counter(serial-number);  /* Display the counter */
		}


        .verticalLabel {
           width: 10%; vertical-align: middle !important;
        }

      table.dataTable > thead > tr > th:not(.sorting_disabled), table.dataTable > thead > tr > td:not(.sorting_disabled){
          font-size : 15px
      }

    </style>
</head>

<!-- Start :: Disease Progression -->
<?php

$class_1 = 'fa fa-arrow-up mr-1 text-success';
if (isset($last_14_days['getLast14DaysTestData'][0]->Difference) && $last_14_days['getLast14DaysTestData'][0]->Difference < 1) {
    $class_1 = 'fa fa-arrow-down mr-1 text-danger';
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
{{-- <div id="preloader">
    <div class="loader"></div>
</div> --}}
<!-- preloader area end -->
<!-- page container area start -->
<div class="page-container">
        {{-- <div class="header_dashboard_part" style="">
          <img style="float:left;margin: 3px 19px;" src="pm/images/icon/GoB.png"/>
          <h1>COVID-19 Dynamic Dashboard for Bangladesh</h1>
          <img style="float:right;margin-right:36px;margin-top:3px;"  src="pm/images/icon/dghs.png"/>
        </div> --}}

        {{-- <div class="main-menu" style="padding: 2px 0 0 0;">
            <div class="menu-inner">
                <nav>
                    
                    <ul class="tab_nab_dashboard">
                        <li style="margin-left:1px;"><a class="navbar-brand" href="http://103.247.238.92/webportal/pages/covid19.php">National Statistics</a> </li>
                        <li><a href="https://dashboard.corona.gov.bd/webportal" style="background-color:#006d2c">Weekly Dashboard</a></li>
                        <li><a href="http://103.247.238.92/webportal/pages/covid19-bedstatus-display.php">Hospital Information</a></li>
                        <li><a href="http://103.247.238.92/webportal/pages/covid19-vaccination-update.php">Vaccination</a></li>
                    </ul>
                </nav>
            </div>
        </div> --}}
    
    <!-- main content area start -->
    <div class="main-content">

      

        <div class="main-content-inner login-bg">
        
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div style="height: 245px" class="card purple-card">
                        <div class="card-body">
                            <div style="float: right">
                                <h4 class="header-title pb-1">সর্বমোট পরীক্ষা</h4>
                                <div style="font-size: 35px; font-weight:bolder; color: #ff198c; margin-top: -15px; ">
                                    {!! isset($total_tested) ? formatInBanglaStyle($total_tested) : ' ' !!}
                                </div>
                            </div>
                            <?php
                            $testPercentages = 0;
                            if(isset($last_14_days['getLast14DaysTestData'][0])){
                                $testPercentages = number_format((($last_14_days['getLast14DaysTestData'][0]->Difference)*100)/$last_14_days['getLast14DaysTestData'][0]->last_fourtten_days__test, 2);
                            }
                            ?>
                            <h4 class="header-title pb-1">গত ৭ দিনে পরীক্ষা</h4>
                            <div style="font-size: 55px;" class="the-number">
                                {!! isset($last_14_days['getLast14DaysTestData'][0]) ? formatInBanglaStyle($last_14_days['getLast14DaysTestData'][0]->curr_fourtten_days_test) : ' ' !!}
                            </div>
                            <div class="summary"><i class="{{$class_1}}"></i> পূর্ববর্তী ৭ দিনে
                                পরীক্ষার
                                চেয়ে <span style="border-bottom: 3px solid purple;">{!! isset($last_14_days['getLast14DaysTestData'][0]) ? formatInBanglaStyle(abs(floor($last_14_days['getLast14DaysTestData'][0]->Difference))) : ' ' !!}</span>
                                টি বা <span style="border-bottom: 3px solid purple;">{!! bfn($testPercentages) !!}%</span>
                                @if(isset($last_14_days['getLast14DaysTestData'][0]->Difference) && $last_14_days['getLast14DaysTestData'][0]->Difference < 1)
                                    কম  @else বেশি @endif
                            </div>
                            <p class="footer-note" style="font-size: 12px">
                                <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                || সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span class="last_date_update"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div style="height: 245px" class="card purple-card">
                        <div class="card-body">
                            <div style="float: right">
                                <h4 class="header-title pb-1">সর্বমোট সনাক্ত</h4>
                                <div style="font-size: 35px; font-weight:bolder; color: #ff198c; margin-top: -15px">
                                    {!! isset($total_infected) ? formatInBanglaStyle($total_infected) : ' ' !!}
                                </div>
                            </div>
                            <?php
                            $infectedPercentages = 0;
                            if(isset($last_14_days['getLast14DaysTestData'][0])){
                                $infectedPercentages = number_format((($last_14_days['getLast14DaysinfectedData'][0]->Difference)*100)/$last_14_days['getLast14DaysinfectedData'][0]->last_fourtten_days_infected_person, 2);
                            }
                            ?>
                            <h4 class="header-title pb-1">গত ৭ দিনে সনাক্ত</h4>
                            <div style="font-size: 55px;" class="the-number">
                                {!! isset($last_14_days['getLast14DaysinfectedData'][0]) ? formatInBanglaStyle($last_14_days['getLast14DaysinfectedData'][0]->curr_fourtten_days_infected_person) : ' ' !!}
                            </div>
                            <div class="summary"><i class="{{$class_2}}"></i>
                                পূর্ববর্তী ৭ দিনে সনাক্তের
                                চেয়ে <span style="border-bottom: 3px solid purple;">{!! isset($last_14_days['getLast14DaysinfectedData'][0]) ? formatInBanglaStyle(abs(floor($last_14_days['getLast14DaysinfectedData'][0]->Difference))) : ' ' !!}</span>
                                জন বা <span style="border-bottom: 3px solid purple;">{!! bfn($infectedPercentages) !!}%</span>
                                @if(isset($last_14_days['getLast14DaysinfectedData'][0]->Difference) && $last_14_days['getLast14DaysinfectedData'][0]->Difference < 1)
                                    কম  @else বেশি @endif
                            </div>
                            <p class="footer-note" style="font-size: 12px">
                                <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                || সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span class="last_date_update"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div style="height: 245px" class="card purple-card">
                        <div class="card-body">
                            <div style="float: right">
                                <h4 class="header-title pb-1">সর্বমোট মৃত্যু</h4>
                                <div style="font-size: 35px; font-weight:bolder; color: #ff198c; margin-top: -15px">
                                    {!! isset($total_death) ? formatInBanglaStyle($total_death) : ' ' !!}
                                </div>
                            </div>
                            
                            <?php
                            $deathPercentages = 0;
                            if(isset($last_14_days['getLast14DaysTestData'][0])){
                                $deathPercentages = number_format((($last_14_days['getLast14DaysDeathData'][0]->Difference)*100)/$last_14_days['getLast14DaysDeathData'][0]->last_fourtten_days_infected_death, 2);
                            }
                            ?>
                            <h4 class="header-title pb-1">গত ৭ দিনে মৃত্যু</h4>
                            <div style="font-size: 55px;" class="the-number">
                                {!! isset($last_14_days['getLast14DaysDeathData'][0]) ? formatInBanglaStyle($last_14_days['getLast14DaysDeathData'][0]->curr_fourtten_days_death) : ' ' !!}
                            </div>
                            <div class="summary"><i class="{{$class_3}}"></i> পূর্ববর্তী ৭ দিনে
                                মৃত্যুর
                                চেয়ে
                                <span style="border-bottom: 3px solid purple;">{!! isset($last_14_days['getLast14DaysDeathData'][0]) ? formatInBanglaStyle(abs(floor($last_14_days['getLast14DaysDeathData'][0]->Difference))) : ' ' !!}</span>

                                জন বা <span style="border-bottom: 3px solid purple;">{!! bfn($deathPercentages) !!}%</span>
                                @if(isset($last_14_days['getLast14DaysDeathData'][0]->Difference) && $last_14_days['getLast14DaysDeathData'][0]->Difference < 1)
                                    কম  @else বেশি @endif
                            </div>
                            <p class="footer-note" style="font-size: 12px">
                                <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                || সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span class="last_date_update"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Social Campain area end -->
                <!-- Statistics area start -->
                <div class="col-lg-12 mt-4" id="scroll_daily_affected">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            
                           
                           

                            {{-- map start here --}}
                            <div class="invoice-head title-bg-style" id="scroll_daily_risk_dist_wise_test_positive" id="accordion">
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
                                <div class="col-lg-4"></div>
                                    <div class="col-lg-4">
                                        
                                        <div style="background-color: #F5EDDC;
                                            width: 420px;
                                            height: 125px;
                                            border: 1px dotted black;" class="row background">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-1 pt-2 pb-1">
                                                            <div style="width: 12px; height:12px;background-color: #330000;border: 1px solid #330000;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 pt-1">
                                                            <p style="font-size:16px;margin-bottom: 0px;"> অধিকতর গাঢ় লাল (পরীক্ষা বিবেচনায় সনাক্তের হার ৩০% - ৩৯%)</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1 pt-2 pb-1">
                                                            <div style="width: 12px; height:12px;background-color: #911d07;border: 1px solid #911d07;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 pt-1">
                                                            <p style="font-size:16px;margin-bottom: 0px;"> গাঢ় লাল (পরীক্ষা বিবেচনায় সনাক্তের হার  ২০% - ২৯%)</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1 pt-2 pb-1">
                                                            <div style="width: 12px; height:12px;background-color: #D30D0D;border: 1px solid #D30D0D;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 pt-1">
                                                            <p style="font-size:16px;margin-bottom: 0px;"> লাল (পরীক্ষা বিবেচনায় সনাক্তের হার ১০% - ১৯%)</p>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="row">
                                                        <div class="col-md-1 pt-2 pb-1">
                                                            <div style="width: 12px; height:12px;background-color: #FF6347;border: 1px solid #FD8065;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 pt-1">
                                                            <p style="font-size:16px;margin-bottom: 0px;"> হালকা লাল (পরীক্ষা বিবেচনায় সনাক্তের হার ১০% - ১৯% )</p>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="row">
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
                                                    </div> --}}
                                                    <div class="row ">
                                                        {{-- <div class="col-md-1 pt-2 pb-1">
                                                            <div style="width: 12px; height:12px;background-color: #C8C0BD;border: 1px solid #686868;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 pt-1">
                                                            <p style="font-size:16px;margin-bottom: 0px;"> ধূসর (টেস্টের সংখ্যা < ১০০) </p>

                                                        </div>
                                                        <br>
                                                        <div class="d-flex justify-content-start pt-2">
                                                            <span style="border-width: 1px; display:block; float: left; clear: right; border-style: solid; width: 12px; height: 12px; border-radius:12px; top: 3px; left: 3px; background-color: rgb(226, 5, 5); border-color: rgb(226, 5, 5);"></span>
                                                            <span style="border-width: 1px; display:block; float: left; clear: right; border-style: solid; width: 12px; height: 12px; border-radius:12px; top: 3px; left: 3px; background-color: rgb(196, 151, 6); border-color: rgb(196, 151, 6);"></span>
                                                            <span style="border-width: 1px; display:block; float: left; clear: right; border-style: solid; width: 12px; height: 12px; border-radius:12px; top: 3px; left: 3px; background-color: rgb(19, 167, 0); border-color: rgb(19, 167, 0);"></span>
                                                            <span style="border-width: 1px; display:block; float: left; clear: right; border-style: solid; width: 12px; height: 12px; border-radius:12px; top: 3px; left: 3px; background-color: rgb(255, 255, 255); border-color: rgb(255, 255, 255);"></span>
                                                            <p style="font-size:16px;margin-bottom: 0px; margin-left: 3px;"> ডট গুলোর রং উপরের শর্ত সাপেক্ষে চিহ্নিত</p>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </div>
                                    <div class="col-lg-4">
                                        
                                        <div style="background-color: #F5EDDC;
                                            width: 420px;
                                            height: 125px;
                                            border: 1px dotted black;" class="row background">
                                                <div class="col-md-12">
                                                    {{-- <div class="row">
                                                        <div class="col-md-1 pt-2 pb-1">
                                                            <div style="width: 12px; height:12px;background-color: #DC143C;border: 1px solid #686868;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 pt-1">
                                                            <p style="font-size:16px;margin-bottom: 0px;"> গাঢ় লাল (পরীক্ষা বিবেচনায় সনাক্তের হার ৩১% থেকে ৪০%)</p>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="row">
                                                        <div class="col-md-1 pt-2 pb-1">
                                                            <div style="width: 12px; height:12px;background-color: #F90606;border: 1px solid #686868;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 pt-1">
                                                            <p style="font-size:16px;margin-bottom: 0px;"> লাল (পরীক্ষা বিবেচনায় সনাক্তের হার >১০%)</p>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="row">
                                                        <div class="col-md-1 pt-2 pb-1">
                                                            <div style="width: 12px; height:12px;background-color: #FF6347;border: 1px solid #686868;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 pt-1">
                                                            <p style="font-size:16px;margin-bottom: 0px;"> হালকা লাল (পরীক্ষা বিবেচনায় সনাক্তের হার ১০% থেকে ২০% )</p>
                                                        </div>
                                                    </div> --}}
                                                    <div class="row">
                                                        <br>
                                                        <div class="col-md-1 pt-2 pb-1">
                                                            <div style="width: 12px; height:12px;background-color: #FFBB33; border: 1px solid #686868;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 pt-1">
                                                            <p style="font-size:16px;margin-bottom: 0px;"> কমলা (পরীক্ষা বিবেচনায় সনাক্তের হার ৫% - <১০%)</p>


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
                                                            <p style="font-size:16px;margin-bottom: 0px;"> ধূসর (টেস্টের সংখ্যা < ১০০) </p>

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
                            {{-- <div class="row"  style="height: 420px !important; overflow:hidden;">  
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
                            </div> --}}
                            

                            <div class="row">  
                                <div class="col-lg-12 preview_wrap" style="margin:0px !important; padding: 8px 8px 0px 0px !important; min-width: 25% !important;">
                                    <div style="margin:0px auto !important;" id="iframeData">
                                    </div>
                                </div>
                            </div>

                            <br/>
                            <br/>
                            <div class="row" style="display:none">
                                <div class="col-lg-12">
                                    <div class="card-body">

                                        <div class="col-md-3 ml-4 mb-3">
                                            <p>নির্বাচন করুন</p>
                                            <label class="radio-inline"><input type="radio" value="0" class="cases_all_none_travelers" name="cases_all_none_travelers" checked="">&nbsp;সকল &nbsp;</label>
                                            <label class="radio-inline"><input type="radio" value="1" class="cases_all_none_travelers" name="cases_all_none_travelers">&nbsp;নন ট্রাভেলার্স</label>
                                        </div>

                                        
                                        
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>০% থেকে ৪%</th>
                                                    <th>৫% থেকে ৯%</th>
                                                    <th>১০% থেকে ১৯%</th>
                                                    <th>২০% +</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="first_slot_district_name" style="background: #00aa00; color: white; width: 25%">{{ $first_slot_district_name }}</td>
                                                    <td class="second_slot_district_name" style="background: #ffaa00; color: white; width: 25%">{{ $second_slot_district_name }}</td>
                                                    <td class="third_slot_district_name" style="background: #fd8065; color: white; width: 25%">{{ $third_slot_district_name }}</td>
                                                    <td class="fourth_slot_district_name" style="background: #e13531; color: white; width: 25%">{{ $fourth_slot_district_name }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{-- map end here --}}
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card-body">
                                        <p class="footer-note">
                                            <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                            <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span> {{ convertEnglishDateToBangla($matrix_date_selected->date_eng) }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
















                              {{-- 1st matix start here --}}
                                    <div class="col-lg-12 mt-2" id="scroll_daily_last_4weeks_risk" style="display:none">
                                       <div class="invoice-head title-bg-style">
                                            <div class="row">
                                                <div class="iv-left col-12 ">
                                                    <h2>
                                                        গত ২ সপ্তাহের ঝুঁকি বিবেচনায় দেশের ৬৪টি জেলার তুলনামূলক অবস্থান
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
                                                
                                                
                                                $high_to_high_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity>=12) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity>=12 and total_tests>100) as r using(district) ORDER BY r.test_positivity DESC");
                                                $medium_to_high_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity<5) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity>=12 and total_tests>100) as r using(district) ORDER BY r.test_positivity DESC");
                                                $low_to_high_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity<5) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity>=12 and total_tests>100) as r using(district) ORDER BY r.test_positivity DESC");
                                                $high_to_medium_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity>=12) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity>=5 and test_positivity<12 and total_tests>100) as r using(district) ORDER BY r.test_positivity DESC");
                                                $medium_to_medium_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity>=5 and test_positivity<12) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity>=5 and test_positivity<12 and total_tests>100) as r using(district) ORDER BY r.test_positivity DESC");
                                                $low_to_medium_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity<5) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity>=5 and test_positivity<12 and total_tests>100) as r using(district) ORDER BY r.test_positivity DESC");
                                                $high_to_low_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity>=12) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity<5 AND total_tests>100) as r using(district) ORDER BY r.test_positivity DESC");
                                                $medium_to_low_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity>=5 and test_positivity<12) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity<5 and total_tests>100) as r using(district) ORDER BY r.test_positivity DESC");
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
                                                                <div id=""
                                                                    style="transform: rotate(-90deg);width: 396px;margin-left: -144px;margin-top: 380px;font-size: 23px;"
                                                                    class="fs-20 b1">
                                                                    <br><span class="last_weekly_date"> গত সপ্তাহ ( {{$matrix_date_selected->last_weekly_date}} )</span>
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
                                                                            <p>গত ৭ দিনে পরীক্ষার সংখ্যা: <span
                                                                                    id="demo">{!! convertEnglishDigitToBangla('100') !!}</span>
                                                                                এর কম জেলাসমূহ বাদ দেওয়া হয়েছে।
                                                                            </p>
                                                                            <input type="range" min="50" max="300" value="100"
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
                                                                            <td colspan="4" class="text-center fs-18 recent_weekly_date" style="font-size: 26px" id=""><span
                                                                                    class="text-danger">আজ {{ $today }}</span>, বর্তমান সপ্তাহ ( {{$matrix_date_selected->recent_weekly_date}} )
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
                            
                                                            
                                                            
                                                            

                            
                                                        <div class="row">
                                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                                <div class="card-body">
                            
                                                                    <div class="alert mt-3 p-0 text-justify" role="alert">
                                                                        {!!$des_8->description_beng ?? '' !!}
                                                                    </div>
                                                                    <p class="footer-note">
                                                                        <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                                                        <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span
                                                                            id="last_date_9"> {{convertEnglishDateToBangla($matrix_date_selected->date_eng)}}</span>
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
                                                           class="table table-striped table-bordered text-nowrap b1 dataTable">
                                                        <thead>
                                                        <tr>
                                                            <th class="border-bottom-0">জেলা</th>
                                                            <th class="border-bottom-0">বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            <th class="border-bottom-0"> গত সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
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
                                                            <th class="border-bottom-0"> বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            <th class="border-bottom-0"> গত সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
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
                                                            <th class="border-bottom-0"> বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            <th class="border-bottom-0"> গত সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
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
                                                            <th class="border-bottom-0"> বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            <th class="border-bottom-0"> গত সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
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
                                                            <th class="border-bottom-0"> বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            <th class="border-bottom-0"> গত সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            
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
                                                            <th class="border-bottom-0"> বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            <th class="border-bottom-0"> গত সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
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
                                                            <th class="border-bottom-0"> বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            <th class="border-bottom-0"> গত সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
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
                                                            <th class="border-bottom-0"> বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            <th class="border-bottom-0"> গত সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
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
                                                            <th class="border-bottom-0"> বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
                                                            <th class="border-bottom-0"> গত সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>)</th>
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
                                {{-- 1st matix end here --}}












                            <br>
                            <br>
                            {{-- map start here --}}
                            <div class="invoice-head title-bg-style">
                                <div class="row">
                                    <div class="iv-left col-12 ">
                                        <h2>
                                            সাপ্তাহিক সিটি কর্পোরেশন সংক্রামক ম্যাপ
                                        </h2>
                                    </div>

                                </div>
                            </div>

                            <div class="card-body info-style">
                                <div class="row">

                                    {{-- <h4 id="special_word_11" class="header-title ">
                                        {!! $des_10->component_name_beng ?? '' !!}

                                    </h4> --}}

                                    <div class="col-xl-12 col-md-12">
                                        <div class="row pt-2 pr-3">
                                            <div class="col-xl-12 col-md-12">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="card-body">
                                                            <button type="button" class="btn btn-sm btn-primary pull-right" id="showCorporationBtn" style="font-size:20px; border-radius: 4px 4px 4px 4px;  min-width: 225px">সিটি কর্পোরেশন ম্যাপ বন্ধ করুন</button>
                                                            <button type="button" class="btn btn-sm btn-primary pull-right" id="hideCorporationBtn" style="font-size:20px; border-radius: 4px 4px 4px 4px;  min-width: 225px">সিটি কর্পোরেশন ম্যাপ এক নজরে দেখুন</button>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <div id="cityCorporationShowHideTable">
                                                    <div class="row">  
                                                        <div class="col-lg-12 preview_wrap" style="margin:0px !important; padding: 8px 8px 0px 0px !important; min-width: 25% !important;">
                                                            <div style="margin:0px auto !important;" id="iframeMapOneData">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br/>
                                                    <br/>
                                                    <div class="row">  
                                                        <div class="col-lg-12 preview_wrap" style="margin:0px !important; padding: 8px 8px 0px 0px !important; min-width: 25% !important;">
                                                            <div style="margin:0px auto !important;" id="iframeMapTwoData">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            {{-- map end here --}}
                            <bbr>
                            <br>
                            <br>
                            


                                        {{--3rd matix start here --}}
                                        <div class="col-lg-12 mt-2" id="scroll_location_of_the_3rd_matrix">
                                        <div class="invoice-head title-bg-style">
                                            <div class="row">
                                                <div class="iv-left col-12 ">
                                                    <h2>
                                                        গত ১ সপ্তাহের সনাক্ত এবং ঝুঁকি বিবেচনায় দেশের ৬৪টি জেলার তুলনামূলক অবস্থান 
                                                    </h2>
                                                </div>
                            
                                            </div>
                                        </div>
                                        
                            
                                            <div class="row">
                                                {{--  <h4 id="special_word_9" class="header-title ">
                                                    {!! $des_13->component_name_beng ?? '' !!}
                                                </h4>  --}}
                                                <hr>
                                                <!-- Start :: ঝুঁকি পর্যালোচনা -->
                                                <?php
                                                
                            
                                                $today = convertEnglishDateToBangla(date('Y-m-d'));
                                                
                                                
                                                $high_to_high_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity>=12) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity>=12 and total_tests>100) as r using(district) ORDER BY r.test_positivity DESC");
                                                $medium_to_high_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity<5) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity>=12 and total_tests>100) as r using(district) ORDER BY r.test_positivity DESC");
                                                $low_to_high_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity<5) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity>=12 and total_tests>100) as r using(district) ORDER BY r.test_positivity DESC");
                                                $high_to_medium_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity>=12) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity>=5 and test_positivity<12 and total_tests>100) as r using(district) ORDER BY r.test_positivity DESC");
                                                $medium_to_medium_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity>=5 and test_positivity<12) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity>=5 and test_positivity<12 and total_tests>100) as r using(district) ORDER BY r.test_positivity DESC");
                                                $low_to_medium_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity<5) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity>=5 and test_positivity<12 and total_tests>100) as r using(district) ORDER BY r.test_positivity DESC");
                                                $high_to_low_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity>=12) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity<5 AND total_tests>100) as r using(district) ORDER BY r.test_positivity DESC");
                                                $medium_to_low_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from (select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district_7_day where test_positivity>=5 and test_positivity<12) as l inner join (select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district_7_day where test_positivity<5 and total_tests>100) as r using(district) ORDER BY r.test_positivity DESC");
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
                            
                                                $lessThen = sprintf("iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAABmJLR0QA/wD/AP+gvaeTAAAAlklEQVRIie2VQQqDMBBFH+0NvEl3bVHcZNsju5LepbtiLqCbTAmBWjEzqaAPZhWYl/kMCRys5KzcrwUq4KXc94MDemAEvIWgBrogiEuNeIK0VCaaE4zh7JYj+BaR1BN4bFpw53dELkcgeGuBoB7RSeFSWRSLrtgyCObr/XfhkifoWkr41hQJ5t9ESjzhYCkSGuBSQrQjJotwcmptsFf4AAAAAElFTkSuQmCC");
                                                $greaterThen = sprintf("iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAABmJLR0QA/wD/AP+gvaeTAAAAhElEQVRIie3VOwqAMBCE4R/PY2Xls7P1yFbiecR4AG1Mo/EBZrZyIG0+MoRd+BM5KVBZQAuwAgPQKqH1cEagU0AugEleWO6XhjAJWAP9DRi9UnOw5bnS3AqcYkI+V5Wekij0mLmrzqkB/xmKL4D8e8sBsxFkNlTN1sSM0eLLgEYJ/HmdDa55cbAPKfeyAAAAAElFTkSuQmCC");
                                                //echo implode(",",$resultstr);
                            
                                                ?>
                            
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-xl-1 col-md-1">
                                                                <div id="" style="transform: rotate(-90deg);width: 396px;margin-left: -144px;margin-top: 380px;font-size: 23px;" class="fs-20 b1">
                                                                    প্রতি লাখে সনাক্ত
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-11 col-md-11">
                                                                <div class="row">
                                                                    <div class="col-xl-3">
                                                                        <p>তারিখ নির্বাচন করুন: </p>
                                                                        <select name="weekly_date_3rd_matrix" id="weekly_date_3rd_matrix" style="width: 100%" class="form-control">
                                                                            @foreach ($weekly_date as $value)
                                                                                <option value="{{ $value->date_id }}">{{ $value->date_ban }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3 ml-4 mb-3">
                                                                        <p>নির্বাচন করুন: <span style="font-weight:bold">(প্রতি লাখে সনাক্ত)</span></p>
                                                                        <label class="radio-inline"><input type="radio" value="0" class="cases_travelers_3rd_matrix" name="cases_travelers_3rd_matrix" checked>&nbsp;সকল &nbsp;</label>
                                                                        <label class="radio-inline"><input type="radio" value="1" class="cases_travelers_3rd_matrix" name="cases_travelers_3rd_matrix">&nbsp;নন ট্রাভেলার্স</label>
                                                                    </div>
                                                                    <div class="col-md-3 ml-4 mb-3">
                                                                        <p>নির্বাচন করুন: <span style="font-weight:bold">(টেস্ট পজিটিভিটি)</span></p>
                                                                        <label class="radio-inline"><input type="radio" value="0" class="test_travelers_3rd_matrix" name="test_travelers_3rd_matrix" checked>&nbsp;সকল &nbsp;</label>
                                                                        <label class="radio-inline"><input type="radio" value="1" class="test_travelers_3rd_matrix" name="test_travelers_3rd_matrix">&nbsp;নন ট্রাভেলার্স</label>
                                                                    </div>
                                                                    <div class="col-xl-1">
                                                                        <br>
                                                                        <button type="button" class="btn btn-sm btn-primary" id="weekly_date__3rd_matrix_submit">পরিবর্তন করুন</button>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="slidecontainer">
                                                                            <p>গত ৭ দিনে পরীক্ষার সংখ্যা:  <span
                                                                                    id="demo3rdMatrix">{!! convertEnglishDigitToBangla('100') !!}</span>
                                                                            এর কম জেলাসমূহ বাদ দেওয়া হয়েছে।</p>
                                                                            <input style="display:none" type="range" min="50" max="1000" value="100"
                                                                                   class="slider3rdMap" id="myRange3rdMatrix">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6" style="display:none">
                            
                                                                        <p> সর্বোচ্চ ও সর্বনিম্ন সনাক্তের পরিসীমা:
                                                                            <span
                                                                                id="ex6SliderVal3rdMatrix">{!! convertEnglishDigitToBangla('5:10') !!}</span>
                                                                        </p>
                                                                        <input style="width: 100%;" id="ex12c3rdMatrix" type="text"><br/>
                            
                                                                    </div>
                                                                </div>
                                                                <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar mt-4">
                                                                    <table
                                                                        class="table table-bordered table-vcenter text-nowrap  b1"
                                                                        style="width: 100%; min-width: 400px;">
                                                                        <thead>
                                                                        <tr>
                                                                            <td colspan="4" class="text-center fs-18" style="font-size: 26px" id=""><span class="recent_weekly_date_third_matrix"><span
                                                                                    class="text-danger">আজ {{ $today }}</span>, বর্তমান সপ্তাহ ( {{$matrix_date_selected->recent_weekly_date}} ) <br></span>
                                                                                    <span style="position: relative; top: 40px; right:40%; font-size: 23px">টেস্ট পজিটিভিটি</span>
                                                                            </td>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody class="fs-20 text-center risk_matrix">
                                                                        <tr>
                                                                            <td></td>
                                                                            <td class="bold"> <img class="iconImageSize" src="data:image/png;base64,{{ $greaterThen }}">= ১০% </td>
                                                                            <td class="bold"> ৫ - <img class="iconImageSize" src="data:image/png;base64,{{ $lessThen }}"> ১০% </td>
                                                                            <td class="bold"> <img class="iconImageSize" src="data:image/png;base64,{{ $lessThen }}"> ৫% </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="bold verticalLabel"> <img class="iconImageSize" src="data:image/png;base64,{{ $greaterThen }}">= ১০</td>
                                                                            <td style="cursor: pointer;background: #800000; color: white; width: 35%"
                                                                                class="high_to_high_third_matrix_modal_click"
                                                                                data-target="#modaldemo1"
                                                                                data-toggle="modal">অপরিবর্তিত উচ্চ ঝুঁকি <br> {{ convertEnglishDigitToBangla($rm_7->high_to_high)}} টি জেলা</span>
                                                                            </td>
                                                                            <td style="background: #FF0000; cursor: pointer;text-decoration: none; color: white; width: 35%"
                                                                                class="high_to_medium_third_matrix_modal_click"
                                                                                data-target="#modaldemo1"
                                                                                data-toggle="modal">{{ convertEnglishDigitToBangla($rm_8->high_to_medium) }} টি জেলা
                                                                            </td>
                                                                            <td style="cursor: pointer;background: #FF0000; color: white; width:  30%;"
                                                                                class="high_to_low_third_matrix_modal_click"
                                                                                data-target="#modaldemo1"
                                                                                data-toggle="modal">   {{ convertEnglishDigitToBangla($rm_9->high_to_low)}} টি জেলা
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="bold verticalLabel">৫ - <img class="iconImageSize" src="data:image/png;base64,{{ $lessThen }}">১০</td>
                                                                            <td style="background: #800000; cursor: pointer; color: white"
                                                                                class="medium_to_high_third_matrix_modal_click"
                                                                                data-target="#modaldemo1"
                                                                                data-toggle="modal">{{ convertEnglishDigitToBangla($rm_4->medium_to_high) }} টি জেলা
                                                                            </td>
                                                                            <td style="background: #FF0000; cursor: pointer; color: white"
                                                                                class="medium_to_medium_third_matrix_modal_click"
                                                                                data-target="#modaldemo1"
                                                                                data-toggle="modal">{{ convertEnglishDigitToBangla($rm_5->medium_to_medium) }} টি জেলা
                                                                            </td>
                                                                            <td style="cursor: pointer;background: #FC6E00; color: white"
                                                                                class="medium_to_low_third_matrix_modal_click"
                                                                                data-target="#modaldemo1"
                                                                                data-toggle="modal"> {{ convertEnglishDigitToBangla($rm_6->medium_to_low) }} টি জেলা
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="bold verticalLabel">০.০১ - <img class="iconImageSize" src="data:image/png;base64,{{ $lessThen }}">৫</td>
                                                                            <td style="background: #FF0000; cursor: pointer; color: white"
                                                                                class="low_to_high_third_matrix_modal_click"
                                                                                data-target="#modaldemo1"
                                                                                data-toggle="modal">{{ convertEnglishDigitToBangla($rm_1->low_to_high) }} টি জেলা
                                                                            </td>
                                                                            <td style="background: #FC6E00; cursor: pointer; color: white"
                                                                                class="low_to_medium_third_matrix_modal_click"
                                                                                data-target="#modaldemo1"
                                                                                data-toggle="modal">{{ convertEnglishDigitToBangla($rm_2->low_to_medium)}} টি জেলা
                                                                            </td>
                                                                            <td style="background: #37761D; cursor: pointer; color: white"
                                                                                class="low_to_low_third_matrix_modal_click"
                                                                                data-target="#modaldemo1"
                                                                                data-toggle="modal">{{ convertEnglishDigitToBangla($rm_3->low_to_low) }} টি জেলা
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="bold verticalLabel">০</td>
                                                                            <td style="background: #FC6E00; cursor: pointer; color: white"
                                                                                class="zero_to_high_third_matrix_modal_click"
                                                                                data-target="#modaldemo1"
                                                                                data-toggle="modal">{{ convertEnglishDigitToBangla($rm_1->low_to_high) }} টি জেলা
                                                                            </td>
                                                                            <td style="background: #FC6E00; cursor: pointer; color: white"
                                                                                class="zero_to_medium_third_matrix_modal_click"
                                                                                data-target="#modaldemo1"
                                                                                data-toggle="modal">{{ convertEnglishDigitToBangla($rm_2->low_to_medium)}} টি জেলা
                                                                            </td>
                                                                            <td style="background: #37761D; cursor: pointer; color: white"
                                                                                class="zero_to_low_third_matrix_modal_click"
                                                                                data-target="#modaldemo1"
                                                                                data-toggle="modal">{{ convertEnglishDigitToBangla($rm_3->low_to_low) }} টি জেলা
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="card-body">
                                                        <p class="footer-note">
                                                            <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                                            <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span> {{ convertEnglishDateToBangla($matrix_date_selected->date_eng) }}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>



                                                <br>
                                                <br>
                                                <br>

                                            {{--  table start here   --}}
                                            <div class="row">
                                                <div class="col-xl-3">
                                                    <p>তারিখ নির্বাচন করুন: </p>
                                                    <select name="weekly_date_table_data" id="weekly_date_table_data" style="width: 100%" class="form-control">
                                                        @foreach ($weekly_date as $value)
                                                            <option value="{{ $value->date_id }}">{{ $value->date_ban }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-3 ml-4 mb-3">
                                                    <p>নির্বাচন করুন:</p>
                                                    <label class="radio-inline"><input type="radio" value="0" class="test_travelers_table_data" name="test_travelers_table_data" checked>&nbsp;সকল &nbsp;</label>
                                                    <label class="radio-inline"><input type="radio" value="1" class="test_travelers_table_data" name="test_travelers_table_data">&nbsp;নন ট্রাভেলার্স</label>
                                                </div>
                                                <div class="col-xl-1">
                                                    <br>
                                                    <button type="button" class="btn btn-sm btn-primary" id="weekly_date_table_data_submit">পরিবর্তন করুন</button>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="slidecontainer">
                                                        {{-- <p>গত ৭ দিনে পরীক্ষার সংখ্যা:  <span
                                                                id="demoTableData">{!! convertEnglishDigitToBangla('100') !!}</span>
                                                        এর কম জেলাসমূহ বাদ দেওয়া হয়েছে।</p> --}}
                                                        <input style="display:none" type="range" min="50" max="1000" value="1"
                                                                class="sliderTableData" id="myRangeTableData">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6" style="display:none">
        
                                                    <p> সর্বোচ্চ ও সর্বনিম্ন সনাক্তের পরিসীমা:
                                                        <span
                                                            id="ex6SliderValTableData">{!! convertEnglishDigitToBangla('5:10') !!}</span>
                                                    </p>
                                                    <input style="width: 100%;" id="ex12cTableData" type="text"><br/>
        
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="card-body">
                                                        <button type="button" class="btn btn-sm btn-primary pull-right" id="showRiskMatrixBtn" style="font-size:20px; border-radius: 4px 4px 4px 4px; min-width: 225px">সকল জেলা বন্ধ করুন</button>
                                                        <button type="button" class="btn btn-sm btn-primary pull-right" id="hideRiskMatrixBtn" style="font-size:20px; border-radius: 4px 4px 4px 4px;  min-width: 225px">সকল জেলা এক নজরে দেখুন</button>
                                                    </div>
                                                </div>
                                            </div>  

                                            <div class="row" id="riskMatrixAllDistrictShowHideTable">
                                                <div class="col-xl-1 col-lg-1">&nbsp;</div>
                                                <div class="col-xl-10 col-lg-10">
                                                    <div class="card-body">
                                                        <div id="matrix-data-table">&nbsp;</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-1 col-lg-1">&nbsp;</div>
                                            </div>
                                            {{--  table end here   --}}


                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="card-body">
                                                        <p class="footer-note">
                                                            <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                                            <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span> {{convertEnglishDateToBangla($matrix_date_selected->date_eng)}}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                           


                                            <!-- End :: Risk Matrix -->
                            
                                            <!-- Strat :: Modal Content -->

                                            
                            
                                            <div class="d-none">

                                                <div id="high_to_high_third_matrix_table_content" class="table-responsive b1">
                                                    <table id="risk_table_popup"
                                                           class="table table-striped table-bordered text-nowrap b1 dataTable">
                                                        <thead>
                                                        <tr>
                                                            <th class="border-bottom-0">ক্রমিক নং</th>
                                                            <th class="border-bottom-0">জেলা</th>
                                                            <th class="border-bottom-0">জনসংখ্যা</th>
                                                            <th class="border-bottom-0">বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>) <span class="badge badge-primary perPositivityHeader"></span></th>
                                                            <th class="border-bottom-0">প্রতি লাখে সনাক্ত <span class="badge badge-primary perLakHeader"></span></th>
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
                                                <div id="medium_to_high_third_matrix_table_content" class="table-responsive b1">
                                                    <table id="risk_table_popup"
                                                           class="table table-striped table-bordered text-nowrap b1 dataTable">
                                                        <thead>
                                                        <tr>
                                                            <th class="border-bottom-0">ক্রমিক নং</th>
                                                            <th class="border-bottom-0">জেলা</th>
                                                            <th class="border-bottom-0">জনসংখ্যা</th>
                                                            <th class="border-bottom-0">বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>) <span class="badge badge-primary perPositivityHeader"></span></th>
                                                            <th class="border-bottom-0">প্রতি লাখে সনাক্ত <span class="badge badge-primary perLakHeader"></span></th>
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
                                                <div id="low_to_high_third_matrix_table_content" class="table-responsive b1">
                                                    <table id="risk_table_popup"
                                                           class="table table-striped table-bordered text-nowrap b1 dataTable">
                                                        <thead>
                                                        <tr>
                                                            <th class="border-bottom-0">ক্রমিক নং</th>
                                                            <th class="border-bottom-0">জেলা</th>
                                                            <th class="border-bottom-0">জনসংখ্যা</th>
                                                            <th class="border-bottom-0">বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>) <span class="badge badge-primary perPositivityHeader"></span></th>
                                                            <th class="border-bottom-0">প্রতি লাখে সনাক্ত <span class="badge badge-primary perLakHeader"></span></th>                                                        
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
                                                <div id="high_to_medium_third_matrix_table_content" class="table-responsive b1">
                                                    <table id="risk_table_popup"
                                                           class="table table-striped table-bordered text-nowrap b1 dataTable">
                                                        <thead>
                                                        <tr>
                                                            <th class="border-bottom-0">ক্রমিক নং</th>
                                                            <th class="border-bottom-0">জেলা</th>
                                                            <th class="border-bottom-0">জনসংখ্যা</th>
                                                            <th class="border-bottom-0">বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>) <span class="badge badge-primary perPositivityHeader"></span></th>
                                                            <th class="border-bottom-0">প্রতি লাখে সনাক্ত <span class="badge badge-primary perLakHeader"></span></th>
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
                                                <div id="medium_to_medium_third_matrix_table_content" class="table-responsive b1">
                                                    <table id="risk_table_popup"
                                                           class="table table-striped table-bordered text-nowrap b1 dataTable">
                                                        <thead>
                                                        <tr>
                                                            <th class="border-bottom-0">ক্রমিক নং</th>
                                                            <th class="border-bottom-0">জেলা</th>
                                                            <th class="border-bottom-0">জনসংখ্যা</th>
                                                            <th class="border-bottom-0">বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>) <span class="badge badge-primary perPositivityHeader"></span></th>
                                                            <th class="border-bottom-0">প্রতি লাখে সনাক্ত <span class="badge badge-primary perLakHeader"></span></th>
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
                                                <div id="low_to_medium_third_matrix_table_content" class="table-responsive b1">
                                                    <table id="risk_table_popup"
                                                           class="table table-striped table-bordered text-nowrap b1 dataTable">
                                                        <thead>
                                                        <tr>
                                                            <th class="border-bottom-0">ক্রমিক নং</th>
                                                            <th class="border-bottom-0">জেলা</th>
                                                            <th class="border-bottom-0">জনসংখ্যা</th>
                                                            <th class="border-bottom-0">বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>) <span class="badge badge-primary perPositivityHeader"></span></th>
                                                            <th class="border-bottom-0">প্রতি লাখে সনাক্ত <span class="badge badge-primary perLakHeader"></span></th>
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
                                                <div id="high_to_low_third_matrix_table_content" class="table-responsive b1">
                                                    <table id="risk_table_popup"
                                                           class="table table-striped table-bordered text-nowrap b1 dataTable">
                                                        <thead>
                                                        <tr>
                                                            <th class="border-bottom-0">ক্রমিক নং</th>
                                                            <th class="border-bottom-0">জেলা</th>
                                                            <th class="border-bottom-0">জনসংখ্যা</th>
                                                            <th class="border-bottom-0">বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>) <span class="badge badge-primary perPositivityHeader"></span></th>
                                                            <th class="border-bottom-0">প্রতি লাখে সনাক্ত <span class="badge badge-primary perLakHeader"></span></th>
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
                                                <div id="medium_to_low_third_matrix_table_content" class="table-responsive b1">
                                                    <table id="risk_table_popup"
                                                           class="table table-striped table-bordered text-nowrap b1 dataTable">
                                                        <thead>
                                                        <tr>
                                                            <th class="border-bottom-0">ক্রমিক নং</th>
                                                            <th class="border-bottom-0">জেলা</th>
                                                            <th class="border-bottom-0">জনসংখ্যা</th>
                                                            <th class="border-bottom-0">বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>) <span class="badge badge-primary perPositivityHeader"></span></th>
                                                            <th class="border-bottom-0">প্রতি লাখে সনাক্ত <span class="badge badge-primary perLakHeader"></span></th>
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
                                                <div id="low_to_low_third_matrix_table_content" class="table-responsive b1">
                                                    <table id="risk_table_popup"
                                                           class="table table-striped table-bordered text-nowrap b1 dataTable">
                                                        <thead>
                                                        <tr>
                                                            <th class="border-bottom-0">ক্রমিক নং</th>
                                                            <th class="border-bottom-0">জেলা</th>
                                                            <th class="border-bottom-0">জনসংখ্যা</th>
                                                            <th class="border-bottom-0">বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>) <span class="badge badge-primary perPositivityHeader"></span></th>
                                                            <th class="border-bottom-0">প্রতি লাখে সনাক্ত <span class="badge badge-primary perLakHeader"></span></th>
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
                                                <div id="zero_to_high_third_matrix_table_content" class="table-responsive b1">
                                                    <table id="risk_table_popup"
                                                           class="table table-striped table-bordered text-nowrap b1 dataTable">
                                                        <thead>
                                                        <tr>
                                                            <th class="border-bottom-0">ক্রমিক নং</th>
                                                            <th class="border-bottom-0">জেলা</th>
                                                            <th class="border-bottom-0">জনসংখ্যা</th>
                                                            <th class="border-bottom-0">বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>) <span class="badge badge-primary perPositivityHeader"></span></th>
                                                            <th class="border-bottom-0">প্রতি লাখে সনাক্ত <span class="badge badge-primary perLakHeader"></span></th>
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

                                                <div id="zero_to_medium_third_matrix_table_content" class="table-responsive b1">
                                                    <table id="risk_table_popup"
                                                           class="table table-striped table-bordered text-nowrap b1 dataTable">
                                                        <thead>
                                                        <tr>
                                                            <th class="border-bottom-0">ক্রমিক নং</th>
                                                            <th class="border-bottom-0">জেলা</th>
                                                            <th class="border-bottom-0">জনসংখ্যা</th>
                                                            <th class="border-bottom-0">বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>) <span class="badge badge-primary perPositivityHeader"></span></th>
                                                            <th class="border-bottom-0">প্রতি লাখে সনাক্ত <span class="badge badge-primary perLakHeader"></span></th>
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


                                                <div id="zero_to_low_third_matrix_table_content" class="table-responsive b1">
                                                    <table id="risk_table_popup"
                                                           class="table table-striped table-bordered text-nowrap b1 dataTable">
                                                        <thead>
                                                        <tr>
                                                            <th class="border-bottom-0">ক্রমিক নং</th>
                                                            <th class="border-bottom-0">জেলা</th>
                                                            <th class="border-bottom-0">জনসংখ্যা</th>
                                                            <th class="border-bottom-0">বর্তমান সপ্তাহের টেস্ট পজিটিভিটি (<span style='color:#0636c1d4;'>টেস্ট</span>, <span style='color:#b50514d4;'>পজিটিভ</span>) <span class="badge badge-primary perPositivityHeader"></span></th>
                                                            <th class="border-bottom-0">প্রতি লাখে সনাক্ত <span class="badge badge-primary perLakHeader"></span></th>
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
                            {{--3rd matix end here --}}
                            

                        </div>
                    </div>
                </div>
                <!-- Statistics area end -->

               
               
                <!-- Statistics area start -->
                <div class="col-lg-12 mt-4" id="scroll_test_status">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            

                            <div class="row">
                                <div class="col-lg-12 mt-2">
                                    <div class="card">
                                        <div class="invoice-head title-bg-style" id="scroll_daily_affected_comparison_rate">
                                            <div class="row">
                                                <div class="iv-left col-12">
                                                    <h2> পরীক্ষা বিবেচনায় সনাক্তের হারের সাপ্তাহিক গড়</h2>
                                                </div>
            
                                            </div>
                                        </div>
                                          <div class="row">
                                            <div class="col-lg-12 mt-2">
                                              
                                                <div id="ambarchart1"></div>
                                                <p class="footer-note">
                                                    <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                                    <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span class="last_date_update"></span>
                                                </p>
                                            
                                            </div>
                                          </div>
                                    </div>
                                </div>
                             </div>

                             <br>
                             <br>
                             <br>

                            

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
                                                {{--  <h4 id="special_word_8" class="header-title ">
                                                    {!! $des_11->component_name_beng ?? '' !!}
                                                </h4>  --}}
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
                                                            <input type="radio" name="weeklyOrDaily" id="radios-1" value="2">
                                                            সাপ্তাহিক
                                                            </label> 
                                                            &nbsp;&nbsp;&nbsp;
                                                            <label class="radio-inline" for="radios-0" style="cursor:pointer">
                                                            <input type="radio" name="weeklyOrDaily" id="radios-0" value="1" checked="checked">
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
                                                                <option value="2">ট্রাভেলার্স</option>
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

                                                {{--  <div class="alert mt-3 p-0 text-justify" role="alert">
                                                    <strong>বর্ণনা:</strong>
                                                    {!!  $des_11->description_beng ?? '' !!}

                                                </div>  --}}
                                                <p class="footer-note">
                                                    <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                                    <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_update"> {{ convertEnglishDateToBangla($top_banner_date) }}</span>
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
    </div>

    <!-- main content area end -->
    <!-- footer area start-->
    <footer>
       
       
</div>


</div>


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






?>

<!-- Chart code -->

<script>

    var options = {year: 'numeric', month: 'long', day: 'numeric'};

    var mdata = <?php echo json_encode($mdata)?>;
    
    
    var msize = Object.keys(mdata).length;
    // var xsize = Object.keys(xdata).length;

    var m_last_date = {};
    // var x_last_date = new Date(xdata[xsize - 1].date).toLocaleDateString('bn', options);


 


    var tagDesign = function (id, tag) {

        $.each(tag, function (a, search) {
            var regex = new RegExp(search, 'g');
            var str = document.getElementById(id).innerHTML;
            var result = str.replace(regex, '<b class="the-number">' + search + '</b>');
            document.getElementById(id).innerHTML = result;
        });

    };

    

    function extractValue(arr, prop) {
        let extractedValue = arr.map(item => item[prop]);
        return extractedValue;
    }

    function dailyInfectedChart(data, dist='') {
	   
        let _maxArray = extractValue(data, 'infected');
        let _maxValue = Math.max.apply(Math, _maxArray);
	 
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
                                "title": "দৈনিক সনাক্তের (৭ দিনের  চলমান গড়)",
                                "id": "v1",
                                "minimum": 0,
                                "maximum": _maxValue,
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
                                "maximum": _maxValue,
                                "labelFunction": function (value, valueText, valueAxis) {
                                    return value.toLocaleString("bn-BD");
                                },
                            },

                        ],


                        "dataProvider": data,

                        "startDuration": 1,
                        "legend": {
                            "horizontalGap": 15,
                            "maxColumns": 15,
                            "position": "bottom",
                            "useGraphSettings": true,
                            "markerSize": 15,
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
                            "gapPeriod": 2,
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

        //$('.last_update_date').html(" " + m_last_date);

        let xdata = [];

        $.ajax({
            url: "{{ route('infected.percentage-public') }}",
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
        url: '{{url("/")}}/get-national-level-test-positivity-data-public',
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
                url: '{{url("/")}}/get-dhaka-positive-rate-data-public',
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




    



     /*==============================Start============================================
    * টেস্ট পজিটিভিটি রেটের ভিত্তিতে জেলা পর্যায়ে ঝুঁকি বিশ্লেষণ 1st map
    * */
    {{-- $('#iframeData_1').html('<iframe id="rtIframeData" scrolling="no" width="100%" style="margin:0px !important; padding:0px !important" height="870px" src="https://public.tableau.com/views/COVIDtestpositivityratedistrictmonth1_16088038408650/Dashboard1?%3Aembed=y&amp;%3AshowVizHome=no" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>');
    $('#iframeData_2').html('<iframe id="rtIframeData" scrolling="no" width="100%"  style="margin:0px !important; padding:0px !important" height="870px" src="https://public.tableau.com/views/COVIDtestpositivityratedistrictmonth2_16088070260020/Dashboard1?%3Aembed=y&amp;%3AshowVizHome=no" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>');
    $('#iframeData_3').html('<iframe id="rtIframeData" scrolling="no" width="100%" style="margin:0px !important; padding:0px !important" height="870px" src="https://public.tableau.com/views/COVIDtestpositivityratedistrictmonth3_16088073716630/Dashboard1?%3Aembed=y&amp;%3AshowVizHome=no" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>');
    $('#iframeData_4').html('<iframe id="rtIframeData" scrolling="no" width="100%" style="margin:0px !important; padding:0px !important" height="870px" src="https://public.tableau.com/views/COVIDtestpositivityratedistrictmonth4_16088075184360/Dashboard1?%3Aembed=y&amp;%3AshowVizHome=no" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>'); --}}
    $('#iframeData').html('<iframe src="https://public.tableau.com/views/COVIDtestpositivityratedistrictmonth_travelers_nontravelers3_16275499908960/Dashboard?%3Aembed=y&amp;&:device=desktop&:%3AshowVizHome=no" onload="javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));" style="height:500px;width:100%;border:none;overflow:hidden; margin-left:30px" frameborder="0" allowFullScreen="true"></iframe>');
    $('#iframeMapOneData').html('<iframe src="https://moru.maps.arcgis.com/apps/dashboards/7097cccb4e874d3db948661a9befeee6?%3Aembed=y&amp;&:device=desktop&:%3AshowVizHome=no" onload="javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));" style="height:500px;width:100%;border:none;overflow:hidden; margin-left:30px" frameborder="0" allowFullScreen="true"></iframe>');
    $('#iframeMapTwoData').html('<iframe src="https://moru.maps.arcgis.com/apps/dashboards/05cd4ef7880a45b5b07eea30a47b9e20?%3Aembed=y&amp;&:device=desktop&:%3AshowVizHome=no" onload="javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));" style="height:500px;width:100%;border:none;overflow:hidden; margin-left:30px" frameborder="0" allowFullScreen="true"></iframe>');
    
    
    





  
  





    /*==============================Start============================================
    * টেস্ট পজিটিভিটি রেটের ভিত্তিতে জেলা পর্যায়ে ঝুঁকি বিশ্লেষণ 3rd matrix
    * 
    */
    $(document).ready(function ($) {
        var slider = document.getElementById("myRange3rdMatrix");
       
        var output = document.getElementById("demo3rdMatrix");
        //  output.innerHTML = englishToBangla(slider.value);

        slider.oninput = function () {
            let sliderValue = englishToBangla(this.value);
            output.innerHTML = sliderValue;
            $('.slider3rdMatrix').text(sliderValue);
        }

        //$("#ex16b").slider({ min: 10, max: 100, value: [10, 100], labelledby: ['ex18-label-2a', 'ex18-label-2b'], focus: true });
        $("#ex12c3rdMatrix").slider({id: "slider12c3rdMatrix", min: 0, max: 100, range: true, value: [5, 10]});

        $("#ex12c3rdMatrix").on("slide", function (slideEvt) {
            $("#ex6SliderVal3rdMatrix").text(englishToBangla(slideEvt.value[0]) + ',' + englishToBangla(slideEvt.value[1]));
            $('.minRange3rd').text(englishToBangla(slideEvt.value[0]));
            $('.maxRange3rd').text(englishToBangla(slideEvt.value[1]));
            third_matrix_myrange_ajax_call();
        });
        
        third_matrix_myrange_ajax_call();


        $('#myRange3rdMatrix').on('click', function () {
            third_matrix_myrange_ajax_call();
        });


        $('#weekly_date__3rd_matrix_submit').on('click', function () {
            third_matrix_myrange_ajax_call();
            third_matrix_weekly_date_change();
        });



        function third_matrix_weekly_date_change(){
            let url = new URL('{!! route('weekly.date.change.for.third.matrix.public') !!}');
            $.ajax({

                type: "GET",
                url: url.toString(),
                data: {
                    'weekly_date': $('#weekly_date_3rd_matrix').val(),
                },
                timeout: 30000,
                success: function (data) {
                    if (data.status == 'success') {
                        $('.recent_weekly_date_third_matrix').html("বর্তমান সপ্তাহ ("+data.recent_weekly_date+")")
                        $('.last_weekly_date_third_matrix').html("গত সপ্তাহ ("+data.last_weekly_date+")") 
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


        function third_matrix_myrange_ajax_call() {
            // console.log(hpm.getThirdRiskMatricData);
            let result;
            let url = new URL('{!! route('hpm.getThirdRiskMatricData.public') !!}');
            $.ajax({

                type: "GET",
                url: url.toString(),
                data: {
                    'test_count': $('#myRange3rdMatrix').val(),
                    'test_positive_data_rate': $('#ex12c3rdMatrix').val(),
                    'weekly_date': $('#weekly_date_3rd_matrix').val(),
                    'case_travelers' : $('input[name="cases_travelers_3rd_matrix"]:checked').val(),
                    'test_travelers' : $('input[name="test_travelers_3rd_matrix"]:checked').val()
                },
                timeout: 30000,
                success: function (data) {
                    if (data.status == 'success') {
                        
                        thirdMatrixrangeChange(data.result_data, data.risk_matrix_data);
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

        function thirdMatrixrangeChange(data, risk_matrix_data) {
            //console.log(risk_matrix_data.high_to_high_table_contentData);
            $('.high_to_high_third_matrix_modal_click').html('<u>'+englishToBangla(data.high_to_high) + ' টি জেলা</u> <br>' + risk_matrix_data.high_to_high_district_name);
            $('.high_to_low_third_matrix_modal_click').html('<u>'+englishToBangla(data.high_to_low) + ' টি জেলা</u> <br>' + risk_matrix_data.high_to_low_district_name);
            $('.high_to_medium_third_matrix_modal_click').html('<u>'+englishToBangla(data.high_to_medium) + ' টি জেলা</u> <br>' + risk_matrix_data.high_to_medium_district_name);
            $('.low_to_high_third_matrix_modal_click').html('<u>'+englishToBangla(data.low_to_high) + ' টি জেলা</u> <br>' + risk_matrix_data.low_to_high_district_name);
            $('.low_to_low_third_matrix_modal_click').html('<u>'+englishToBangla(data.low_to_low) + ' টি জেলা</u> <br>' + risk_matrix_data.low_to_low_district_name);
            $('.medium_to_high_third_matrix_modal_click').html('<u>'+englishToBangla(data.medium_to_high) + ' টি জেলা</u> <br>' + risk_matrix_data.medium_to_high_district_name);
            $('.medium_to_low_third_matrix_modal_click').html('<u>'+englishToBangla(data.medium_to_low) + ' টি জেলা</u> <br>' + risk_matrix_data.medium_to_low_district_name);
            $('.medium_to_medium_third_matrix_modal_click').html('<u>'+englishToBangla(data.medium_to_medium) + ' টি জেলা</u> <br>' + risk_matrix_data.medium_to_medium_district_name);
            $('.low_to_medium_third_matrix_modal_click').html('<u>'+englishToBangla(data.low_to_medium) + ' টি জেলা</u> <br>' + risk_matrix_data.low_to_medium_district_name);
            $('.zero_to_high_third_matrix_modal_click').html('<u>'+englishToBangla(data.zero_to_high) + ' টি জেলা</u> <br>' + risk_matrix_data.zero_to_high_district_name);
            $('.zero_to_medium_third_matrix_modal_click').html('<u>'+englishToBangla(data.zero_to_medium) + ' টি জেলা</u> <br>' + risk_matrix_data.zero_to_medium_district_name);
            $('.zero_to_low_third_matrix_modal_click').html('<u>'+englishToBangla(data.zero_to_low) + ' টি জেলা</u> <br>' + risk_matrix_data.zero_to_low_district_name);
            /*modal data*/
            $('#high_to_high_third_matrix_table_content tbody').html(risk_matrix_data.high_to_high_table_contentData);
            $('#medium_to_high_third_matrix_table_content tbody').html(risk_matrix_data.medium_to_high_table_contentData);
            $('#low_to_high_third_matrix_table_content tbody').html(risk_matrix_data.low_to_high_table_contentData);
            $('#high_to_medium_third_matrix_table_content tbody').html(risk_matrix_data.high_to_medium_table_contentData);
            $('#medium_to_medium_third_matrix_table_content tbody').html(risk_matrix_data.medium_to_medium_table_contentData);
            $('#low_to_medium_third_matrix_table_content tbody').html(risk_matrix_data.low_to_medium_table_contentData);
            $('#high_to_low_third_matrix_table_content tbody').html(risk_matrix_data.high_to_low_table_contentData);
            $('#medium_to_low_third_matrix_table_content tbody').html(risk_matrix_data.medium_to_low_table_contentData);
            $('#low_to_low_third_matrix_table_content tbody').html(risk_matrix_data.low_to_low_table_contentData);
            $('#zero_to_high_third_matrix_table_content tbody').html(risk_matrix_data.zero_to_high_table_contentData);
            $('#zero_to_medium_third_matrix_table_content tbody').html(risk_matrix_data.zero_to_medium_table_contentData);
            $('#zero_to_low_third_matrix_table_content tbody').html(risk_matrix_data.zero_to_low_table_contentData);
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
            $('.zero_to_high_district').html(risk_matrix_data.zero_to_high_district_name);
            $('.zero_to_medium_district').html(risk_matrix_data.zero_to_medium_district_name);
            $('.zero_to_low_district').html(risk_matrix_data.zero_to_low_district_name);
       
        }

  
  
        $('.high_to_high_third_matrix_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#high_to_high_third_matrix_table_content').html());
            $('.perLakHeader').html($("input[name='cases_travelers_3rd_matrix']:checked").parent('label').text());
            $('.perPositivityHeader').html($("input[name='test_travelers_3rd_matrix']:checked").parent('label').text());
            //hospitalDataModal();

        });

        $('.medium_to_high_third_matrix_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#medium_to_high_third_matrix_table_content').html());
            $('.perLakHeader').html($("input[name='cases_travelers_3rd_matrix']:checked").parent('label').text());
            $('.perPositivityHeader').html($("input[name='test_travelers_3rd_matrix']:checked").parent('label').text());
            //hospitalDataModal();
        });

        $('.low_to_high_third_matrix_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#low_to_high_third_matrix_table_content').html());
            $('.perLakHeader').html($("input[name='cases_travelers_3rd_matrix']:checked").parent('label').text());
            $('.perPositivityHeader').html($("input[name='test_travelers_3rd_matrix']:checked").parent('label').text());
            //hospitalDataModal();
        });

        $('.high_to_medium_third_matrix_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#high_to_medium_third_matrix_table_content').html());
            $('.perLakHeader').html($("input[name='cases_travelers_3rd_matrix']:checked").parent('label').text());
            $('.perPositivityHeader').html($("input[name='test_travelers_3rd_matrix']:checked").parent('label').text());
            //hospitalDataModal();
        });

        $('.medium_to_medium_third_matrix_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#medium_to_medium_third_matrix_table_content').html());
            $('.perLakHeader').html($("input[name='cases_travelers_3rd_matrix']:checked").parent('label').text());
            $('.perPositivityHeader').html($("input[name='test_travelers_3rd_matrix']:checked").parent('label').text());
            //hospitalDataModal();
        });

        $('.low_to_medium_third_matrix_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#low_to_medium_third_matrix_table_content').html());
            $('.perLakHeader').html($("input[name='cases_travelers_3rd_matrix']:checked").parent('label').text());
            $('.perPositivityHeader').html($("input[name='test_travelers_3rd_matrix']:checked").parent('label').text());
            //hospitalDataModal();
        });

        $('.high_to_low_third_matrix_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#high_to_low_third_matrix_table_content').html());
            $('.perLakHeader').html($("input[name='cases_travelers_3rd_matrix']:checked").parent('label').text());
            $('.perPositivityHeader').html($("input[name='test_travelers_3rd_matrix']:checked").parent('label').text());
            //hospitalDataModal();
        });

        $('.medium_to_low_third_matrix_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#medium_to_low_third_matrix_table_content').html());
            $('.perLakHeader').html($("input[name='cases_travelers_3rd_matrix']:checked").parent('label').text());
            $('.perPositivityHeader').html($("input[name='test_travelers_3rd_matrix']:checked").parent('label').text());
            //hospitalDataModal();
        });

        $('.low_to_low_third_matrix_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#low_to_low_third_matrix_table_content').html());
            $('.perLakHeader').html($("input[name='cases_travelers_3rd_matrix']:checked").parent('label').text());
            $('.perPositivityHeader').html($("input[name='test_travelers_3rd_matrix']:checked").parent('label').text());
            //hospitalDataModal();
        });

        $('.zero_to_high_third_matrix_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#zero_to_high_third_matrix_table_content').html());
            $('.perLakHeader').html($("input[name='cases_travelers_3rd_matrix']:checked").parent('label').text());
            $('.perPositivityHeader').html($("input[name='test_travelers_3rd_matrix']:checked").parent('label').text());
            //hospitalDataModal();
        });

        $('.zero_to_medium_third_matrix_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#zero_to_medium_third_matrix_table_content').html());
            $('.perLakHeader').html($("input[name='cases_travelers_3rd_matrix']:checked").parent('label').text());
            $('.perPositivityHeader').html($("input[name='test_travelers_3rd_matrix']:checked").parent('label').text());
            //hospitalDataModal();
        });

        $('.zero_to_low_third_matrix_modal_click').click(function () {
            $('.modal-title').html('ঝুঁকি পর্যালোচনা');
            $('#modalContent').html($('#zero_to_low_third_matrix_table_content').html());
            $('.perLakHeader').html($("input[name='cases_travelers_3rd_matrix']:checked").parent('label').text());
            $('.perPositivityHeader').html($("input[name='test_travelers_3rd_matrix']:checked").parent('label').text());   
            //hospitalDataModal();
        });
    });


     /*==============================End============================================
    * টেস্ট পজিটিভিটি রেটের ভিত্তিতে জেলা পর্যায়ে ঝুঁকি বিশ্লেষণ 3rd map
    * */
    
    
    
    /*==============================Start============================================
    * matrix table data
    * */
    
    $(document).ready(function ($) {
        var slider = document.getElementById("myRangeTableData");
       
        var output = document.getElementById("demoTableData");
        //  output.innerHTML = englishToBangla(slider.value);

        slider.oninput = function () {
            let sliderValue = englishToBangla(this.value);
            output.innerHTML = sliderValue;
            $('.sliderTableData').text(sliderValue);
        }

        //$("#ex16b").slider({ min: 10, max: 100, value: [10, 100], labelledby: ['ex18-label-2a', 'ex18-label-2b'], focus: true });
        $("#ex12cTableData").slider({id: "slider12cTableData", min: 0, max: 100, range: true, value: [5, 10]});

        $("#ex12cTableData").on("slide", function (slideEvt) {
            $("#ex6SliderValTableData").text(englishToBangla(slideEvt.value[0]) + ',' + englishToBangla(slideEvt.value[1]));
            $('.minRangeTableData').text(englishToBangla(slideEvt.value[0]));
            $('.maxRangeTableData').text(englishToBangla(slideEvt.value[1]));
            table_data_myrange_ajax_call();
        });
        
        table_data_myrange_ajax_call();


        $('#myRangeTableData').on('click', function () {
            table_data_myrange_ajax_call();
        });


        $('#weekly_date_table_data_submit').on('click', function () {
            table_data_myrange_ajax_call();
        });


 

        function table_data_myrange_ajax_call() {
            // console.log(hpm.getThirdRiskMatricData);
            let result;
            let url = new URL('{!! route('get.table.data.public') !!}');
            $.ajax({

                type: "GET",
                url: url.toString(),
                data: {
                    'test_count': $('#myRangeTableData').val(),
                    'test_positive_data_rate': $('#ex12cTableData').val(),
                    'weekly_date': $('#weekly_date_table_data').val(),
                    'test_travelers' : $('input[name="test_travelers_table_data"]:checked').val()
                },
                timeout: 30000,
                success: function (data) {
                    if (data.status == 'success') {
                        tableDataChange(data.risk_matrix_all_data);
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

        function weekly_date_change(){
            let url = new URL('{!! route('weekly.date.change.for.table') !!}');
            $.ajax({

                type: "GET",
                url: url.toString(),
                data: {
                    'weekly_date': $('#weekly_date_table_data').val(),
                },
                timeout: 30000,
                success: function (data) {
                    if (data.status == 'success') {
                        $('.table_recent_weekly_date').html(data.recent_weekly_date)
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

        function tableDataChange(risk_matrix_data) {
            console.log(risk_matrix_data);
            /*risk matrix all data start here*/
            var riskMatrixTableHead = `<table id="matrixFullTableWithAllDistrict" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="border-bottom-0" rowspan="2">ক্রমিক নং</th>
                                                    <th class="border-bottom-0" rowspan="2">জেলা</th>
                                                    <th class="border-bottom-0" colspan="3"><span class="table_recent_weekly_date"> {{$matrix_date_selected->recent_weekly_date}} </span></th>
                                                    <th class="border-bottom-0" colspan="3"><span class="table_last_weekly_date"> {{$matrix_date_selected->last_weekly_date}} </span></th>
                                                    <th class="border-bottom-0" colspan="2">পরিবর্তন</th>
                                                </tr>
                                                    <tr>
                                                    <th class="border-bottom-0">টেস্ট পজিটিভিটি</th>
                                                    <th class="border-bottom-0"><span style='color:#0636c1d4;'>টেস্ট</span></th>
                                                    <th class="border-bottom-0"> <span style='color:#b50514d4;'>পজিটিভ</span></th>
                                                    <th class="border-bottom-0"> টেস্ট পজিটিভিটি</th>
                                                    <th class="border-bottom-0"> <span style='color:#0636c1d4;'>টেস্ট</span></th>
                                                    <th class="border-bottom-0"> <span style='color:#b50514d4;'>পজিটিভ</span></th>
                                                    <th class="border-bottom-0">পজিটিভ</th>
                                                    <th class="border-bottom-0">পজিটিভিটি</th>
                                                </tr>
                                            </thead>
                                                <tbody>`;
            var riskMatrixTableBody = risk_matrix_data; 
            var riskMatrixTableFooter = '</tbody></table>';
            
            setTimeout(riskMatrixAllDistrictForDataTable, 3000);
            
            $('#matrix-data-table').html(riskMatrixTableHead+riskMatrixTableBody+riskMatrixTableFooter);
            weekly_date_change();
        }


        
        
    });

    function riskMatrixAllDistrictForDataTable(){
        if ( $.fn.dataTable.isDataTable( '#matrixFullTableWithAllDistrict' ) ) {
            table = $('#matrixFullTableWithAllDistrict').DataTable();
        }
        else {
            table = $('#matrixFullTableWithAllDistrict').DataTable( {
                paging: false,
                searching: true,
                "oLanguage": {
                    "sSearch": "অনুসন্ধান করুন:"
                }
            } );
        }
        
        $('.table_recent_weekly_date').html($('.recent_weekly_date').html());
        $('.table_last_weekly_date').html($('.last_weekly_date').html());
    }
    /*==============================End============================================
    * টেস্ট পজিটিভিটি রেটের ভিত্তিতে জেলা পর্যায়ে ঝুঁকি বিশ্লেষণ 3rd map
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
    
    
        

    // Hospital আইসিইউ  শয্যা
    
    

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


    
    


    /* ======================Stack Chart Common Desin start================================= */
    /**...last update show...*/
    $(document).ready(function()
    {
        var date = $('#last_date_update').html();
        $('.last_date_update').html(date);
    });

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
           // $('#daily_effected_travelers').select2("val", "all");
        }
    });

    $('#filter-daily-infected-search').click(function () {
    var districts = $('#daily-infected-district').val().replace(/'/g, "''");
    var dis =  $('#daily-infected-district').find(":selected").text();
    var non_travelers = $('#daily_effected_travelers_id').val();
    // console.log(districts);
    
    
    if (districts != 'all' || non_travelers != 'all') {
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
</script>


<script src="{{asset('pm/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('pm/js/dataTables.bootstrap4.min.js')}}"></script>


<script>
     $(document).ready(function() {
        $('#hideRiskMatrixBtn').hide();
        $("#showRiskMatrixBtn").click(function() {
            $('#hideRiskMatrixBtn').show();
            $('#showRiskMatrixBtn').hide();
            $("#riskMatrixAllDistrictShowHideTable").hide();
        });
        
        $("#hideRiskMatrixBtn").click(function() {
            $('#hideRiskMatrixBtn').hide();
            $('#showRiskMatrixBtn').show();
            $("#riskMatrixAllDistrictShowHideTable").show();
        });

        // two

        $('#cityCorporationShowHideTable').hide();
        $('#showCorporationBtn').hide();
        $("#showCorporationBtn").click(function() {
            $('#hideCorporationBtn').show();
            $('#showCorporationBtn').hide();
            $("#cityCorporationShowHideTable").hide();
        });
        $("#hideCorporationBtn").click(function() {
            $('#hideCorporationBtn').hide();
            $('#showCorporationBtn').show();
            $("#cityCorporationShowHideTable").show();
        });
    });




    // 4 cards
    $('.cases_all_none_travelers').on('click', function(){
        var radioValue = $("input[name='cases_all_none_travelers']:checked").val();
        $.ajax({
            url: '{{url("/")}}/card-infected-data',
            type: 'GET',
            data: {selected: radioValue},
            success: function (response) {
                if (response) {
                    $('.first_slot_district_name').html(response.first_slot_district_name);
                    $('.second_slot_district_name').html(response.second_slot_district_name);
                    $('.third_slot_district_name').html(response.third_slot_district_name);
                    $('.fourth_slot_district_name').html(response.fourth_slot_district_name);
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    });




    /*==============================Start============================================
    * টেস্ট পজিটিভিটি রেটের ভিত্তিতে জেলা পর্যায়ে ঝুঁকি বিশ্লেষণ 1st map
    * */
   
   $(document).ready(function ($) {
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        //  output.innerHTML = englishToBangla(slider.value);

        slider.oninput = function () {
            output.innerHTML = englishToBangla(this.value);
        }

        //$("#ex16b").slider({ min: 10, max: 100, value: [10, 100], labelledby: ['ex18-label-2a', 'ex18-label-2b'], focus: true });
        $("#ex12c").slider({id: "slider12c", min: 0, max: 60, range: true, value: [5, 10]});

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
            let url = new URL('{!! route('weekly.date.change.for.table') !!}');
            $.ajax({

                type: "GET",
                url: url.toString(),
                data: {
                    'weekly_date': $('#weekly_date').val(),
                },
                timeout: 30000,
                success: function (data) {
                    if (data.status == 'success') {
                        $('.recent_weekly_date').html("বর্তমান সপ্তাহ ("+data.recent_weekly_date+")")
                        $('.last_weekly_date').html("গত সপ্তাহ ("+data.last_weekly_date+")")
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
            let url = new URL('{!! route('webportal.getRiskMatricData.public') !!}');
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
            //console.log(risk_matrix_data.high_to_high_table_contentData);

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
            $('.fourth_slot_district_name').html(risk_matrix_data.fourth_slot_district_name);




            /*risk matrix all data start here*/
             var riskMatrixTableHead = `<table id="matrixFullTableWithAllDistrict" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="border-bottom-0" rowspan="2">ক্রমিক নং</th>
                                                    <th class="border-bottom-0" rowspan="2">জেলা</th>
                                                    <th class="border-bottom-0" colspan="3"><span class="table_recent_weekly_date"> {{$matrix_date_selected->recent_weekly_date}} </span></th>
                                                    <th class="border-bottom-0" colspan="3"><span class="table_last_weekly_date"> {{$matrix_date_selected->last_weekly_date}} </span></th>
                                                    <th class="border-bottom-0" colspan="2">পরিবর্তন</th>
                                                </tr>
                                                    <tr>
                                                    <th class="border-bottom-0">টেস্ট পজিটিভিটি</th>
                                                    <th class="border-bottom-0"><span style='color:#0636c1d4;'>টেস্ট</span></th>
                                                    <th class="border-bottom-0"> <span style='color:#b50514d4;'>পজিটিভ</span></th>
                                                    <th class="border-bottom-0"> টেস্ট পজিটিভিটি</th>
                                                    <th class="border-bottom-0"> <span style='color:#0636c1d4;'>টেস্ট</span></th>
                                                    <th class="border-bottom-0"> <span style='color:#b50514d4;'>পজিটিভ</span></th>
                                                    <th class="border-bottom-0">পজিটিভ</th>
                                                    <th class="border-bottom-0">পজিটিভিটি</th>
                                                </tr>
                                            </thead>
                                                <tbody>`;
            var riskMatrixTableBody = risk_matrix_data.risk_matrix_all_data; 
            var riskMatrixTableFooter = '</tbody></table>';
            
            setTimeout(riskMatrixAllDistrictForDataTable, 3000);
            
            $('#matrix-data-table').html(riskMatrixTableHead+riskMatrixTableBody+riskMatrixTableFooter);


            /*traveller all data start here*/
             var travellerTableHead = `<table id="travellerFullTableWithAllDistrict" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="border-bottom-0" rowspan="2">ক্রমিক নং</th>
                                                    <th class="border-bottom-0" rowspan="2">জেলা</th>
                                                    <th class="border-bottom-0" colspan="3"><span class="table_recent_weekly_date"> {{$matrix_date_selected->recent_weekly_date}} </span></th>
                                                    <th class="border-bottom-0" colspan="3"><span class="table_last_weekly_date"> {{$matrix_date_selected->last_weekly_date}} </span></th>
                                                    <th class="border-bottom-0" colspan="2">পরিবর্তন</th>
                                                </tr>
                                                    <tr>
                                                    <th class="border-bottom-0">টেস্ট পজিটিভিটি</th>
                                                    <th class="border-bottom-0"><span style='color:#0636c1d4;'>টেস্ট</span></th>
                                                    <th class="border-bottom-0"> <span style='color:#b50514d4;'>পজিটিভ</span></th>
                                                    <th class="border-bottom-0"> টেস্ট পজিটিভিটি</th>
                                                    <th class="border-bottom-0"> <span style='color:#0636c1d4;'>টেস্ট</span></th>
                                                    <th class="border-bottom-0"> <span style='color:#b50514d4;'>পজিটিভ</span></th>
                                                    <th class="border-bottom-0">পজিটিভ</th>
                                                    <th class="border-bottom-0">পজিটিভিটি</th>
                                                </tr>
                                            </thead>
                                                <tbody>`;
            var travellerTableBody = risk_matrix_data.traveller_all_data; 
            var travellerTableFooter = '</tbody></table>';
            
            setTimeout(travellerAllDistrictForDataTable, 3000);
            
            $('#traveller-data-table').html(travellerTableHead+travellerTableBody+travellerTableFooter);
        
        }

        function riskMatrixAllDistrictForDataTable(){
            if ( $.fn.dataTable.isDataTable( '#matrixFullTableWithAllDistrict' ) ) {
                table = $('#matrixFullTableWithAllDistrict').DataTable();
            }
            else {
                table = $('#matrixFullTableWithAllDistrict').DataTable( {
                    paging: false,
                    searching: true,
                    "oLanguage": {
                        "sSearch": "অনুসন্ধান করুন:"
                    }
                } );
            }
            
            $('.table_recent_weekly_date').html($('.recent_weekly_date').html());
            $('.table_last_weekly_date').html($('.last_weekly_date').html());
        }


        function travellerAllDistrictForDataTable(){
            if ( $.fn.dataTable.isDataTable( '#travellerFullTableWithAllDistrict' ) ) {
                table = $('#travellerFullTableWithAllDistrict').DataTable();
            }
            else {
                table = $('#travellerFullTableWithAllDistrict').DataTable( {
                    paging: false,
                    searching: true,
                    "oLanguage": {
                        "sSearch": "অনুসন্ধান করুন:"
                    }
                } );
            }
            
            $('.table_recent_weekly_date').html($('.recent_weekly_date').html());
            $('.table_last_weekly_date').html($('.last_weekly_date').html());
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
    * 
    */
</script>


</body>
</html>
