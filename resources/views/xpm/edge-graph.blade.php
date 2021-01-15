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

        #ageChart {
            width: 100%;
            height: 500px;
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

                                    </h4>

                                    <div class="row" style="width: 100%;">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div id="ageChart"></div>

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

            </div>
        </div>
    </div>

{{--    mchart --}}
<!-- Resources -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all"/>


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

{{----}}
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
                    <div class="offset-md-4 col-md-5 text-center">
                        <h3>উপদেষ্টা</h3>
                        <img src="pm/images/collaborator/dr_shams.l_arefin.jpg" class="associator-img" alt="">
                        <p> ড. শামস্ এল আরেফিন</p>
                        <p> ঊর্ধ্বতন পরিচালক,</p>
                        <p> মাতৃ ও শিশু স্বাস্থ্য বিভাগ, আইসিডিডিআরবি</p>
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

</div>
</footer>
<!-- footer area end-->
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
<script>
    var chartData = generateChartData();
    var chart = AmCharts.makeChart("ageChart", {
        "type": "serial",
        "theme": "none",
        "marginRight": 80,
        "autoMarginOffset": 20,
        "marginTop": 7,
        "dataProvider": chartData,
        "valueAxes": [{
            "axisAlpha": 0.2,
            "dashLength": 1,
            "position": "left"
        }],
        "mouseWheelZoomEnabled": true,
        "graphs": [{
            "id": "g1",
            "balloonText": "[[value]]",
            "bullet": "round",
            "bulletBorderAlpha": 1,
            "bulletColor": "#FFFFFF",
            "hideBulletsCount": 50,
            "title": "red line",
            "valueField": "visits",
            "useLineColorForBulletBorder": true,
            "balloon":{
                "drop":true
            }
        }],

        "chartCursor": {
            "limitToGraph":"g1"
        },
        "categoryField": "date",
        "categoryAxis": {
            "parseDates": true,
            "axisColor": "#DADADA",
            "dashLength": 1,
            "minorGridEnabled": true
        },

    });

    chart.addListener("rendered", zoomChart);
    zoomChart();

    // this method is called when chart is first inited as we listen for "rendered" event
    function zoomChart() {
        // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
        chart.zoomToIndexes(chartData.length - 40, chartData.length - 1);
    }


    // generate some random data, quite different range

    // generate some random data, quite different range
    function generateChartData() {
        var chartData = [];
        var firstDate = new Date();
        firstDate.setDate(firstDate.getDate() - 5);
        var visits = 1200;
        for (var i = 0; i < 7; i++) {
            // we create date objects here. In your data, you can have date strings
            // and then set format of your dates using chart.dataDateFormat property,
            // however when possible, use date objects, as this will speed up chart rendering.
            var newDate = new Date(firstDate);
            newDate.setDate(newDate.getDate() + i);

            visits += Math.round((Math.random()<0.5?1:-1)*Math.random()*10);

            chartData.push({
                date: newDate,
                visits: visits
            });
        }
        return chartData;
    }
</script>


</body>

</html>
