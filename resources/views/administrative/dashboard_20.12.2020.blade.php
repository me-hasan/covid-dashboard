@extends('administrative.default')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            @include('administrative.partials.infected_24_hours')
            @include('administrative.partials.country_wise')
            <div class="row">
                @include('administrative.partials.hospital_beds')
            </div>
            <div class="row">
            	@include('administrative.partials.zone_wise')
            </div>
            <div class="row">
                @include('administrative.partials.important_index')
            </div>
            <div class="row">
                @include('administrative.partials.immigration')
                @include('administrative.partials.top_infected_city')
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- main-panel ends -->

@endsection

@section('scripts')
    <!-- Fututionchart Integration -->
    <!-- Step 1 - Include the fusioncharts core library -->
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <!-- Step 2 - Include the fusion theme -->
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
    <!-- Fututionchart Integration -->
    <script type="text/javascript">
        const dataSource = {
            chart: {
                caption: "",
                subcaption: "",
                legendposition: "BOTTOM",
                entitytooltext: "$lname: <b>$datavalue </b>আক্রান্ত",
                legendcaption: "সংক্রমনের সংখ্যা ভিত্তিক তথ্য",
                entityfillhovercolor: "#FFCDD2",
                theme: "fusion"
            },
            colorrange: {
                gradient: "0",
                color: <?php echo json_encode($_groupDataColor);?>
            },
            data: [
                {
                    data: <?php echo json_encode($_divisionWiseInfacted);?>
                }
            ]
        };

        FusionCharts.ready(function() {
            var myChart = new FusionCharts({
                type: <?php echo ($_divisionSelName)?"'".$_mapRegions[$_divisionSelName]."'":"'maps/bangladesh'"; ?>,
                renderAt: "map-container",
                width: "320",
                height: "400",
                dataFormat: "json",
                dataSource
            }).render();
        });
    </script>
    <style type="text/css">
        svg text[font-size="9px"]{display:none !important;} /* Remove Trail Version*/
        .dataTables_length{display: none;}
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#division_list').change(function(){
                /*if($('#district_list').val() != null){
                    $('#district_list').val("");
                }
                if($('#upazilla_list').val() != null){
                    $('#upazilla_list').val("");
                }*/
                if($(this).val() == 'all'){
                    $('.district-option').show();
                }else{
                    //console.log($(this).val());
                    $('.district-option').hide();
                    $('option[rel="'+$(this).val()+'"]').show();
                }
            });

            $('#district_list').change(function(){
                console.log($(this).val());
                /*if($('#division_list').val() != null){
                    $('#division_list').val("");
                }
                if($('#upazilla_list').val() != null){
                    $('#upazilla_list').val("");
                }*/

                if($(this).val() == 'all'){
                    $('.upazilla-option').show();
                }else{
                    //console.log($(this).val());
                    $('.upazilla-option').hide();
                    $('option[rel="'+$(this).val()+'"]').show();
                }
            });

            <?php $_imageLineChart = ['line-chart-1.png', 'line-chart-2.png', 'line-chart-3.png', 'line-chart-4.png'];
            ?>
            <?php
            $_dataTableDataSet = [];
            foreach($_distirctDetailsData as $_districtWiseInfo){
                $_districtWiseInfo = (array)$_districtWiseInfo;
//            $_dataTableDataSet[] = [en2bnbyXLSX($_districtWiseInfo['DIVISION']), en2bnbyXLSX($_districtWiseInfo['DISTRICT']), BanglaConverter::en2bn(number_format($_districtWiseInfo['INFECTED_PERSON'])), BanglaConverter::en2bn($_districtWiseInfo['Rt']), BanglaConverter::en2bn(number_format($_districtWiseInfo['DOUBLING_RATE'])), '<span class="line-chart-holder"><img src="assets/images/'.$_imageLineChart[rand(0, 3)].'"> </span>'];
                $_dataTableDataSet[] = [en2bnTranslation($_districtWiseInfo['DIVISION']), en2bnTranslation($_districtWiseInfo['DISTRICT']), App\Http\Controllers\cabinet\DashboardController::en2bn(number_format($_districtWiseInfo['INFECTED_PERSON'])), App\Http\Controllers\cabinet\DashboardController::en2bn($_districtWiseInfo['Rt']), App\Http\Controllers\cabinet\DashboardController::en2bn(number_format($_districtWiseInfo['DOUBLING_RATE'])), '<span class="line-chart-holder"><img src="assets/images/'.$_imageLineChart[rand(0, 3)].'"> </span>'];
            }
            ?>
            var districtDataTable = $('#district-infecteed').DataTable({
                data: <?php echo json_encode($_dataTableDataSet); ?>,
                columns: [
                    { title: "বিভাগ" },
                    { title: "জেলা" },
                    { title: "আক্রান্ত" },
                    { title: "Rt সংখ্যা" },
                    { title: "ডাবলিং টাইম" },
                    { title: "দৈনিক পরিবর্তন (১৪ দিন)" }
                ],
                //"ajax": "district-infected.php",
                //bPaginate: false,
                bFilter: false,
                bInfo: false,
                "ordering": false
                //pagingType: "simple_numbers"
            });
            //$.fn.DataTable.ext.pager.numbers_length = 3;

        });

        // Map Dropdown List
        function districtAjaxCall(division_name){

            var divisionObj = {
                'all': 'maps/bangladesh',
                'MYMENSINGH': 'maps/mymensingh',
                'BARISAL': 'maps/barisal',
                'RANGPUR': 'maps/rangpur',
                'SYLHET': 'maps/sylhet',
                'CHATTOGRAM': 'maps/chittagong',
                'RAJSHAHI': 'maps/rajshahi',
                'DHAKA': 'maps/dhaka',
                'KHULNA': 'maps/khulna'

            };

            console.log(divisionObj[division_name]);

            divisionMap = divisionObj[division_name];

            /*Object.keys(divisionObj).forEach(function eachKey(key) {

                console.log(key); // alerts key
                console.log(divisionObj[key]); // alerts value
            });*/

            //$('.submit-btn').html('LOADING...').attr('style','background-color:#3b3b3b');

            var formParams = "division_name="+division_name+"&map_date="+$('#map_date').val()+"&isAjax=true";

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var responseData = JSON.parse(this.responseText);
                    //alert(responseData.data);
                    if(responseData.data){

                        if(division_name == 'all'){
                            responseData.division_group_color_data = <?php echo json_encode($_groupDataColor);?>;
                            responseData.division_wise_inffacted_data = <?php echo json_encode($_divisionWiseInfacted);?>;
                        }

                        //$('#district-infecteed_wrapper').hide();
                        if ($.fn.dataTable.isDataTable( '#district-infecteed' ) ) {
                            districtDataTable = $('#district-infecteed').DataTable();
                            districtDataTable.destroy();
                        }
                        districtDataTable = $('#district-infecteed').DataTable( {
                            data: responseData.data,
                            //bPaginate: false,
                            bFilter: false,
                            bInfo: false,
                            "ordering": false,
                            columns: [
                                { title: "বিভাগ" },
                                { title: "জেলা" },
                                { title: "আক্রান্ত" },
                                { title: "Rt সংখ্যা" },
                                { title: "ডাবলিং টাইম" },
                                { title: "দৈনিক পরিবর্তন (১৪ দিন)" }
                            ]
                        });

                        //alert(responseData.division_group_color_data);
                        const dataSource = {
                            chart: {
                                caption: "",
                                subcaption: "",
                                legendposition: "BOTTOM",
                                entitytooltext: "$lname: <b>$datavalue </b>আক্রান্ত",
                                legendcaption: "সংক্রমনের সংখ্যা ভিত্তিক তথ্য",
                                entityfillhovercolor: "#FFCDD2",
                                theme: "fusion"
                            },
                            colorrange: {
                                gradient: "0",
                                color: responseData.division_group_color_data
                            },
                            data: [
                                {
                                    data: responseData.division_wise_inffacted_data
                                }
                            ]
                        };

                        FusionCharts.ready(function() {
                            var myChart = new FusionCharts({
                                type: divisionMap,
                                renderAt: "map-container",
                                width: "320",
                                height: "400",
                                dataFormat: "json",
                                dataSource
                            }).render();
                        });
                    }
                }
            };
            xhttp.open("POST", "district-infected.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(formParams);
        }
    </script>
    <!-- Daily Infected & Forcast Graph -->
    <script type="text/javascript">

        // Highcharts Infected and Forcast Chart
        Highcharts.chart('division', {
            title: {
                text: 'দৈনিক পরিবর্তন ও পূর্বাভাস'
            },

            subtitle: {
                text: ''
            },

            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            },

            credits:{
                enabled:false
            },

            xAxis: {
                categories: <?php echo json_encode($_xAxisData);?> },
            yAxis: {
                title: {
                    text: ''
                }/*,
		labels: {
			formatter: function() {
			   return this.value+"%";
			}
		},
		max: 15*/
            },

            plotOptions: {
                series: {
                    fillOpacity:0/*,
			dataLabels:{
                enabled:true,
                color: 'black',
                formatter:function() {
                    //var pcnt = (this.y / dataSum) * 100;
                    return Highcharts.numberFormat(this.y) + '%';
                }
            }*/
                }
            },

            colors: ["#00008b", "#e08658"],
            series: [{
                name: 'সংক্রামিত',
                data: <?php echo json_encode($_infectedWeeksData, true);?>,
                type : 'area',
                marker:{symbol:'circle'}

            }, {
                name: 'ফোরকাস্ট',
                data: <?php echo json_encode($_forcastDailyData, true);?>,
                type: 'area',
                marker : {symbol : 'circle'},
                dashStyle: 'shortdot'
            }],
        });

    </script>
    <script type="text/javascript">

        // Highcharts Infected and Forcast Chart
        Highcharts.chart('redzone', {
            title: {
                text: 'সাপ্তাহিক রেড জোন',
                align: 'left'
            },

            subtitle: {
                text: ''
            },

            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            },

            credits:{
                enabled:false
            },

            xAxis: {
                categories: <?php echo json_encode($_xAxisRedZoneData);?>    },

            yAxis: {
                title: {
                    text: ''
                }/*,
		labels: {
			formatter: function() {
			   return this.value+"%";
			}
		}*/
            },

            plotOptions: {
                series: {
                    //fillOpacity:0,
                    dataLabels:{
                        enabled:false
                    }
                }
            },
            colors: ['#ff0000'],
            series: [{
                name: 'রেড জোনের সংখ্যা',
                data: <?php echo json_encode($_redZoneData);?>,
                marker:{symbol:'circle'}
            }]
        });

    </script>
    <script type="text/javascript">
        // Mobility In Chart
        Highcharts.chart('division-in-continer', {
            title: {
                text: ''
            },

            subtitle: {
                text: ''
            },

            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'top'
            },

            credits:{
                enabled:false
            },

            xAxis: {
                categories: <?php echo json_encode($_mobilityWeeks);?>
            },

            yAxis: {
                title: {
                    text: ''
                },
                labels: {
                    formatter: function() {
                        return this.value+"%";
                    }
                },
                max: 15
            },

            plotOptions: {
                series: {
                    fillOpacity:0,
                    dataLabels:{
                        enabled:true,
                        color: 'black',
                        formatter:function() {
                            //var pcnt = (this.y / dataSum) * 100;
                            return Highcharts.numberFormat(this.y) + '%';
                        }
                    }
                }
            },

            colors: ['#444a9f', '#843984', '#399de9', '#e08658', '#cbc434', '#7c6faf', '#843984', '#ca5aa9'],
            series: <?php echo json_encode($_mobilityInWeeklyData);?>
        });
        // Mobility Out Chart
        Highcharts.chart('division-out-continer', {
            title: {
                text: ''
            },

            subtitle: {
                text: ''
            },

            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'top'
            },

            credits:{
                enabled:false
            },

            xAxis: {
                categories: <?php echo json_encode($_mobilityWeeks);?>
            },

            yAxis: {
                title: {
                    text: ''
                },
                labels: {
                    formatter: function() {
                        return this.value+"%";
                    }
                },
                max: 15
            },

            plotOptions: {
                series: {
                    fillOpacity:0,
                    dataLabels:{
                        enabled:true,
                        color: 'black',
                        formatter:function() {
                            //var pcnt = (this.y / dataSum) * 100;
                            return Highcharts.numberFormat(this.y) + '%';
                        }
                    }
                }
            },

            colors: ['#444a9f', '#843984', '#399de9', '#e08658', '#cbc434', '#7c6faf', '#843984', '#ca5aa9'],

            series: <?php echo json_encode($_mobilityOutWeeklyData);?>
        });
    </script>
    <script type="text/javascript">
        Highcharts.chart('bedvsaddmitted', {
            title: {
                text: ''
            },

            subtitle: {
                text: ''
            },

            credits:{
                enabled:false
            },

            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'top'
            },
            "chart": {
                "height": "450",
                "type": "bar"
            },
            "yAxis": {
                "title": {
                    "text": ""
                }
            },

            "xAxis": {
                categories: ["ঢাকা", "চট্টগ্রাম", "রাজশাহী", "খুলনা", "বরিশাল", "সিলেট", "রংপুর", "ময়মনসিংহ"]
            },

            //colors: ['#444a9f', '#843984', '#399de9', '#e08658', '#cbc434', '#7c6faf', '#843984', '#ca5aa9'],

            "series": [{
                "name": "সাধারণ বেড",
                "data": [2477, 1500,500,600, 650,800,900,1000],
                "stack": "0"
            }, {
                "name": "আইসোলেশন বেড",
                "data": [300, 200,500,600, 650,800,900,1000],
                "stack": "1"
            }, {
                "name": "আই সি ইউ বেড ",
                "data": [200, 20,50,60, 100,150,200,200],
                "stack": "2"
            }, {
                "name": "হাই ফ্লো অক্সিজেন বেড",
                "data": [100, 200,500,600, 650,800,900,1000],
                "stack": "3"
            }, {
                "name": "ভর্তি",
                "data": [1900, 250,100,150, 100,200,140,250],
                "stack": "0"
            }, {
                "name": "আইসোলেশন বেড ভর্তি",
                "data": [100, 250,100,150, 100,200,140,250],
                "stack": "1"
            }],
            "plotOptions": {
                "bar": {
                    "stacking": "normal"

                }
            }
        });
    </script>
    <script type="text/javascript">
        /*Highcharts.setOptions({
            colors: ['#01BAF2', '#71BF45', '#FAA74B']
        });*/
        Highcharts.chart('chartContainer', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'জনসংখ্যা সাপেক্ষে শতকরা আক্রান্ত',
                y:10
            },
            credits:{
                enabled:false
            },
            legend:{
                enabled:false
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        formatter:function(){
                            return this.key+ ': ' + this.y + '%';
                        }
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'আক্রান্ত',
                colorByPoint: true,
                innerSize: '70%',
                data: [
                    {name: 'ঢাকা', y: 30,},
                    { name: 'চট্টগ্রাম', y: 20 },
                    { name: 'রাজশাহী', y: 15 },
                    { name: "খুলনা", y: 13 },
                    { name: "বরিশাল ", y: 3 },
                    { name: "সিলেট ", y: 7},
                    { name: "রংপুর ", y: 17, },
                    { name: "ময়মনসিংহ ", y: 22 }
                ]
            }]
        });

        // Modal Content Function
        function modalContent(modalLabel, modalType, yAxisLabel, xAxisLabel){
            // Show Modal Lable
            $('#modalLabel').html(modalLabel);

            var width = 600;
            var height = 450;

            //AJAX
            var formParams = "modal_type="+modalType+"&isAjax=true";

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var responseData = JSON.parse(this.responseText);


                    if(responseData.chart_type == 'bar'){

                        var barChartDataSource = [{
                            name: 'আক্রান্ত',
                            data: responseData.bar_chart
                        }];
                        var barModalContainer = 'modalContent';

                    }else if(responseData.chart_type == 'line'){

                        var lineChartDataSource = responseData.line_chart_data;
                        var lineChartDataCategory = responseData.line_chart_label;
                        var lineModalContainer = 'modalContent';

                    }else if(responseData.chart_type == 'both'){

                        var barChartDataSource = [{
                            name: 'আক্রান্ত',
                            data: responseData.bar_chart
                        }];
                        var lineChartDataSource = responseData.line_chart_data;
                        var lineChartDataCategory = responseData.line_chart_label;

                        var barModalContainer = 'modalContentLeft';
                        var lineModalContainer = 'modalContentRight';

                        $('#modal-loading').remove();
                    }

                    //alert(responseData.bar_chart);
                    if(responseData.chart_type == 'bar' || responseData.chart_type == 'both'){
                        Highcharts.chart(barModalContainer, {
                            chart: {
                                type: 'column',
                                /*height: height,
                                width: width*/
                            },
                            title: {
                                text: ''
                            },
                            credits:{
                                enabled:false
                            },
                            subtitle: {
                                text: ''
                            },
                            xAxis: {
                                type: 'category',
                                labels: {
                                    rotation: -45,
                                    style: {
                                        fontSize: '13px',
                                        fontFamily: '"SolaimanLipi", Arial, sans-serif'
                                    }
                                },
                                title: {
                                    text: xAxisLabel
                                }
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: yAxisLabel
                                }
                            },
                            colors: ["#858796"],
                            legend: {
                                enabled: false
                            },
                            series: barChartDataSource
                        });
                    }
                    if(responseData.chart_type == 'line' || responseData.chart_type == 'both'){
                        Highcharts.chart(lineModalContainer, {
                            title: {
                                text: ''
                            },
                            credits:{
                                enabled:false
                            },
                            subtitle: {
                                text: ''
                            },
                            xAxis: {
                                type: 'category',
                                labels: {
                                    rotation: -45,
                                    style: {
                                        fontSize: '13px',
                                        fontFamily: '"SolaimanLipi", Arial, sans-serif'
                                    }
                                },
                                title: {
                                    text: xAxisLabel
                                },
                                categories: lineChartDataCategory
                            },
                            yAxis: {
                                //min: 0,
                                title: {
                                    text: yAxisLabel
                                }
                            },
                            colors: ["#A5479B"],
                            legend: {
                                enabled: false
                            },
                            series: [{
                                name: yAxisLabel,
                                data: lineChartDataSource
                            }]
                        });
                    }
                }
            };
            xhttp.open("POST", "modal-data.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(formParams);
        }

    </script>
    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <script type="text/javascript">
        $('input[name="from_date"]').datepicker({
            minDate: new Date('2020-03-08')
        });
        $('input[name="to_date"]').datepicker({
            maxDate: new Date('2020-08-12')
        });
    </script>
@endsection
