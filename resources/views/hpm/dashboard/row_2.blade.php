

<!-- Start :: TESTING SCENARIO -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">পরীক্ষা পরিস্থিতি</h3>
            </div>
            <div class="card-body">

                <div class="row pt-5">
                    <div class="col-xl-6">
                        <div class="card-header">
                            <h3 class="card-title">পরীক্ষা বনাম আক্রান্ত</h3>
                        </div>
                        <div class="card-body">
                            <div id="national_test_vs_infected_trend"></div>
                        </div>
                        <div class="row">        
                            <div class="col-xl-8 col-lg-8 col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Description</h5>
                                    <p class="card-text">
                                        {{ $des_4->description_eng }}
                                    </p>
                                </div>
                             </div>
                             <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Insight</h5>
                                    <p class="card-text">
                                        Content will place here.
                                    </p>
                                </div>
                             </div>
                        </div>                       
                    </div>
                    <div class="col-xl-6">
                        <div class="card-header">
                            <h3 class="card-title">বিগত ১৪ দিনের সংক্রমণ ও সংক্রমণের হার</h3>
                        </div>
                        <div class="card-body">
                            <div id="weekly_comparision_infected_death"></div>
                        </div>
                        <div class="row">        
                            <div class="col-xl-8 col-lg-8 col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Description</h5>
                                    <p class="card-text">
                                        {{ $des_5->description_eng }}
                                    </p>
                                </div>
                             </div>
                             <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Insight</h5>
                                    <p class="card-text">
                                        Content will place here.
                                    </p>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12" id="infected_district_map">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                            
                                <h3 class="card-title">পরীক্ষা ভিত্তিক ঝুঁকি</h3>
                                @include('hpm.dashboard.row_2_map')
                                <div class="row">        
                                    <div class="col-xl-7 col-lg-7 col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">Description</h5>
                                            <p class="card-text">
                                               {{ $des_6->description_eng }}
                                            </p>
                                        </div>
                                     </div>
                                     <div class="col-xl-5 col-lg-5 col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">Insight</h5>
                                            <p class="card-text">
                                                Place here.
                                            </p>
                                        </div>
                                     </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <h3 class="card-title"></h3>
                                <div class="card-body">
                                    <div id="test_positivity_per_million"></div>
                                </div>
                                <div class="card-body">
                                    <!-- <h5 class="card-title">দক্ষিণ এশিয়ার দেশগুলাতো আক্রন্ত</h5> -->
                                    <h5 class="card-title">Test Per Cases for South Asian Countries</h5>
                                    <div id="country_wise_infected"></div>
                                </div>
                                <div class="row">        
                                    <div class="col-xl-8 col-lg-8 col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">Description</h5>
                                            <p class="card-text">
                                                {{ $des_7->description_eng }}
                                            </p>
                                        </div>
                                     </div>
                                     <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">Insight</h5>
                                            <p class="card-text">
                                                Content will place here.
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
<!-- End :: TESTING SCENARIO -->
@push('custom_script')

<script>
    // Test Positivity Per Million
   // South Country Wise Infected
            Highcharts.chart('country_wise_infected', {
                chart: {
                    type: 'bar'
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
                    enabled:false
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
                    type: 'category'
                },
                tooltip: {
                  pointFormat: '{series.name}: <b>{point.y}</b>',
                  /*valueSuffix: ' cm',
                  shared: true*/
                },
                plotOptions: {
                    /*column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    },*/
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.1f}'
                        }
                    }
                },
                colors: ['#c94b7d', '#7d5f9d', '#817376', '#b25b3f', '#5c687b','#60b5d1','#3acc76'],
                series: [
                    {
                        name: "Test Per Case",
                        colorByPoint: true,
                        data: [
                            {
                                name: "Mayanmar",
                                y: <?=$tests_per_case_Mayanmar->cumulative_tests_per_case;?>
                            },
                            {
                                name: "Sri Lanka",
                                y: <?=$tests_per_case_Sri->cumulative_tests_per_case;?>
                            },
                            {
                                name: "Nepal",
                                y: <?=$tests_per_case_Nepal->cumulative_tests_per_case;?>
                            },
                            {
                                name: "Maldives",
                                y: <?=$tests_per_case_Maldives->cumulative_tests_per_case;?>
                            },
                            {
                                name: "India",
                                y: <?=$tests_per_case_India->cumulative_tests_per_case;?>
                            },
                            {
                                name: "Pakistan",
                                y: <?=$tests_per_case_Pakistan->cumulative_tests_per_case;?>
                            },
                            {
                                name: "Bangladesh",
                                y: <?=$tests_per_case_Bangladesh->cumulative_tests_per_case;?>
                            }
                        ]
                    }
                ]
            });

			// National Test Vs Infected Trend
            Highcharts.chart('national_test_vs_infected_trend', {
                chart: {
                    marginRight: 80, // like left
					height: 420
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
                xAxis: {
                    categories: [<?php echo $testsVsCases['dateRange'];?>],
                    tickInterval: 1
                },
                yAxis: [{
                    lineWidth: 1,
                    title: {
                        text: 'Daily Cases Numbers'
                    }
                }, {
                    lineWidth: 1,
                    opposite: true,
                    title: {
                        text: 'Daily Tests Numbers'
                    }
                }],
                colors: ['#9d4a2a', '#dfc825'],
                series: [{
                    name: 'Daily Cases (5-day moving agerage)',
                    data: [<?php echo $testsVsCases['totalCase'];?>],
                    type: 'spline',
                    marker:{"enabled": false, "symbol":"circle"}
                }, {
                    name: 'Daily Tests (5-day moving agerage)',
                    data: [<?php echo $testsVsCases['totalTest'];?>],
                    yAxis: 1,
                    type: 'spline',
                    marker:{"enabled": false, "symbol":"circle"}
                }]
            });

    <?php

        $date_arr = $infected_arr = $death_arr = $test_positivity_arr = array();

        foreach($days_infected as $row){
              $infected_arr[] = round($row->seven_dayMovingAvg);
        }
        $infected = implode(",", $infected_arr);

        foreach($days_death as $row){

          $date_arr[] = date('d\/m\/Y', strtotime($row->date));
          $death_arr[] = round($row->seven_dayMovingAvg);
        }
        $death_info = implode(",", $death_arr);

        foreach($days_test_positivity as $row){
              $test_positivity_arr[] = round($row->seven_dayMovingAvg);
        }
        $test_positivity = implode(",", $test_positivity_arr);

    ?>
    // Weekly Comparision Infected Death  weekly_comparision_infected_death
    Highcharts.chart('weekly_comparision_infected_death', {
                chart: {
                    marginRight: 80 // like left
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
                xAxis: {
                    categories: [<?php echo $forteen_day_infected['dateRange'];?>],
                    tickInterval: 1
                },
                yAxis: [{
                    lineWidth: 1,
                    title: {
                        text: 'সংক্রমণ '
                    }
                }, {
                    lineWidth: 1,
                    opposite: true,
                    title: {
                        text: 'সংক্রমণের হার '
                    }
                }],
                colors: ['#9d4a2a', '#dfc825'],
                series: [{
                    name: 'সংক্রমণের হার',
                    data: [<?php echo $forteen_day_infected['total_test_positivity'];?>],
                    type: 'spline',
                    marker:{"enabled": false, "symbol":"circle"}
                }, {
                    name: 'সংক্রমণ',
                    data: [<?php echo $forteen_day_infected['total_infected'];?>],
                    yAxis: 1,
                    type: 'column',
                    marker:{"enabled": false, "symbol":"circle"}
                }]
            });

    $(document).ready(function(){

        <?php
        //$_colorCodes = array( '5' => '#FCAA94', '10' => '#F69475', '50' => '#F37366', '100' => '#E5515D', '500' => '#CD3E52', '1000' => '#ed2355');
        $_colorCodes = array( '5' => '#fff51e', '15' => '#f87f2c', '500' => '#f43735');
        $_existDataGroups = array();
        foreach($testPositivityMap as $_mobInDistrictVal){

        $str=$_mobInDistrictVal->District;
        $str='three_'.$_mobInDistrictVal->District;
        if(substr($_mobInDistrictVal->District,0,3)=='Cox'){
            $str='three_CoxBazar';
        }
        if(substr($_mobInDistrictVal->District,0,4)=='Jhal'){
            $str = 'three_Jhalakathi';
        }
        if(substr($_mobInDistrictVal->District,0,5)=='Maulv'){
            $str = 'three_Moulvibazar';
        }
        if(substr($_mobInDistrictVal->District,0,5)=='Chapa'){
            $str = 'three_Chapainawabganj';
        }
        
        if(substr($_mobInDistrictVal->District,0,5)=='Jhena'){
            $str = 'three_Jhenaidah';
        }
        /*if(substr($_mobInDistrictVal->ExtractString,0,3)=='Cox'){
            $str='Cox';
        }elseif ($_mobInDistrictVal->District=='Narail') {
            $str='Narail';
        }elseif ($_mobInDistrictVal->District=='Rangamati') {
            $str='Rangamati';
        }*/

        $_groupColorCode = NULL;
        foreach($_colorCodes as $_colorRange => $_colorCode){
            if((int)$_mobInDistrictVal->Test_Positivity < $_colorRange){
                $_groupColorCode = $_colorCode;
                $_existDataGroups[$_colorRange] = $_colorCode;
                break;
            }

        }

        ?>
        $("#<?php echo $str; ?> path").attr('fill', '<?php echo $_groupColorCode;?>');
        <?php
        }
        ?>


    });
</script>
@endpush
