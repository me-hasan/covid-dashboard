<!-- Start :: TESTING SCENARIO -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">পরীক্ষা পরিস্থিতি</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12" id="infected_district_map">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <h3 class="card-title">পরীক্ষা ভিত্তিক ঝুঁকি</h3>
                                @include('hpm.dashboard.row_2_map')
                                <div class="card-body">
                                    <h5 class="card-title">Insight</h5>
                                    <p class="card-text">
                                        Content will place here.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <h3 class="card-title">প্রতি মিলিয়ন পরীক্ষা</h3>
                                <div id="test_positivity_per_million"></div>
                                <div class="card-body float-right">
                                    <h5 class="card-title">Insight</h5>
                                    <p class="card-text">
                                        Content will place here.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-xl-5">
                        <div class="overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-2 fs-18 text-muted">
                                            গত ১৪ দিনে পরীক্ষা
                                        </div>
                                        <h1 class="font-weight-bold mb-1">২৮,৭৬৬</h1>
                                        <span class="text-primary"><i class="fa fa-arrow-up mr-1"></i> পূর্ববর্তী ১৪ দিনে পরীক্ষার চেয়ে ২৫ জন বেশি </span>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col">
                                        <div class="mb-2 fs-18 text-muted">
                                            গত ১৪ দিনে আক্রান্ত
                                        </div>
                                        <h1 class="font-weight-bold mb-1">১০,৪৮৭</h1>
                                        <span class="text-primary"><i class="fa fa-arrow-up mr-1"></i> পূর্ববর্তী ১৪ দিনে আক্রান্তের চেয়ে ২৫ জন বেশি</span>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col">
                                        <div class="mb-2 fs-18 text-muted">
                                            গত ১৪ দিনে মৃত্যু
                                        </div>
                                        <h1 class="font-weight-bold mb-1">২০৬</h1>
                                        <span class="text-primary"><i class="fa fa-arrow-up mr-1"></i> পূর্ববর্তী ১৪ দিনে মৃত্যুর চেয়ে ২৫ জন বেশি</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div id="weekly_comparision_infected_death"></div>
                    </div>
                    <div class="col-xl-2">
                        <div class="card-body">
                            <h5 class="card-title">Insight</h5>
                            <p class="card-text">
                                Content will place here.
                            </p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Policy</h5>
                            <p class="card-text">
                                Recommendation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End :: TESTING SCENARIO -->
@push('custom_script')
<script>
    // Test Positivity Per Million
    Highcharts.chart('test_positivity_per_million', {
        chart: {
            height: 500
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
            verticalAlign: 'bottom'
        },

        credits:{
            enabled:false
        },

        xAxis: {
            categories: ["\u09e6\u09ea\u09ae\u09be\u09b0","\u09e7\u09e7\u09ae\u09be\u09b0","\u09e7\u09ee\u09ae\u09be\u09b0","\u09e8\u09eb\u09ae\u09be\u09b0","\u09e6\u09e7\u098f\u09aa\u09cd\u09b0\u09bf","\u09e6\u09ee\u098f\u09aa\u09cd\u09b0\u09bf","\u09e7\u09eb\u098f\u09aa\u09cd\u09b0\u09bf","\u09e8\u09e8\u098f\u09aa\u09cd\u09b0\u09bf","\u09e8\u09ef\u098f\u09aa\u09cd\u09b0\u09bf","\u09e6\u09ec\u09ae\u09c7","\u09e7\u09e9\u09ae\u09c7","\u09e8\u09e6\u09ae\u09c7","\u09e8\u09ed\u09ae\u09c7","\u09e6\u09e9\u099c\u09c1\u09a8","\u09e7\u09e6\u099c\u09c1\u09a8","\u09e7\u09ed\u099c\u09c1\u09a8","\u09e8\u09ea\u099c\u09c1\u09a8","\u09e6\u09e7\u099c\u09c1\u09b2","\u09e6\u09ee\u099c\u09c1\u09b2","\u09e7\u09eb\u099c\u09c1\u09b2","\u09e7\u09ed\u099c\u09c1\u09b2","\u09e8\u09ea\u099c\u09c1\u09b2","\u09e9\u09e7\u099c\u09c1\u09b2"]    },

        yAxis: {
            title: {
                text: ''
            }
        },

        plotOptions: {
            series: {
                fillOpacity:0
            }
        },

        colors: ["#00008b", "#e08658"],
        series: [{
            name: 'সংক্রামিত',
            data: [0,3,8,39,54,218,1231,3772,7103,11719,17822,26738,38292,55140,74865,98489,122660,149258,172134,196323,249258,372134,496323],
            type : 'area',
            marker:{symbol:'circle'}

        }]
    });

    // Weekly Comparision Infected Death
    Highcharts.chart('weekly_comparision_infected_death', {
        chart: {
            type: 'column'/*,
					height: 180*/
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        credits:{
            enabled:false
        },
        legend:{
            enabled:true
        },
        yAxis: {
            title: {
                text: ''
            },
            labels: {
                formatter: function() {
                    return this.value;
                }
            }
        },
        xAxis: {
            categories: ["১৬/০৮/২০২০ - ০১/০৮/২০২০","১৬/০৮/২০২০ - ০১/০৮/২০২০","১৬/০৮/২০২০ - ০১/০৮/২০২০"]
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y}</b>',
            /*valueSuffix: ' cm',
            shared: true*/
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        colors: ['#38cb89', '#ffa600', '#ef4b4b'],
        series: [{
            name: 'আক্রান্ত',
            data: [5000, 7064, 4038]

        }, {
            name: 'সংক্রমণ',
            data: [6827, 7084, 6098]

        }, {
            name: 'মৃত্যু',
            data: [1083, 3078, 2098]

        }]
    });

    $(document).ready(function(){

        <?php
        $_colorCodes = array( '5' => '#FCAA94', '10' => '#F69475', '50' => '#F37366', '100' => '#E5515D', '500' => '#CD3E52', '1000' => '#ed2355');
        $_existDataGroups = array();
        foreach($testPositivityMap as $_mobInDistrictVal){

        $str=$_mobInDistrictVal->District;
        $str='three_'.$_mobInDistrictVal->District;
        /*if(substr($_mobInDistrictVal->ExtractString,0,3)=='Cox'){
            $str='Cox';
        }elseif ($_mobInDistrictVal->District=='Narail') {
            $str='Narail';
        }elseif ($_mobInDistrictVal->District=='Rangamati') {
            $str='Rangamati';
        }*/

        $_groupColorCode = NULL;
        foreach($_colorCodes as $_colorRange => $_colorCode){
            if((int)$_mobInDistrictVal->Test_Positivity <= $_colorRange){
                $_groupColorCode = $_colorCode;
                $_existDataGroups[$_colorRange] = $_colorCode;
                break;
            }

        }

        ?>
        $('#<?php echo $str; ?> path').attr('fill', '<?php echo $_groupColorCode;?>');
        <?php
        }
        ?>


    });
</script>
@endpush
