<!-- Start :: TESTING SCENARIO -->
{{--<div class="row">
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
                                        <span class="text-primary"><i class="fa fa-arrow-up mr-1"></i> পূর্ববর্তী ১৪ দিনে পরীক্ষার চেয়ে ২৫ জন বেশি </span>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col">
                                        <div class="mb-2 fs-18 text-muted">
                                            গত ১৪ দিনে আক্রান্ত
                                        </div>
                                        <h1 class="font-weight-bold mb-1">১০,৪৮৭</h1>
                                        <span class="text-primary"><i class="fa fa-arrow-up mr-1"></i> পূর্ববর্তী ১৪ দিনে আক্রান্তের চেয়ে ২৫ জন বেশি</span>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col">
                                        <div class="mb-2 fs-18 text-muted">
                                            গত ১৪ দিনে মৃত্যু
                                        </div>
                                        <h1 class="font-weight-bold mb-1">২০৬</h1>
                                        <span class="text-primary"><i class="fa fa-arrow-up mr-1"></i> পূর্ববর্তী ১৪ দিনে মৃত্যুর চেয়ে ২৫ জন বেশি</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="card-header">
                            <h5 class="card-title">বিগত ১৪ দিনের পরীক্ষা - সংক্রমণ - মৃত্যু</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-end">
                                <div class="form-label pl-2 pt-2 mr-1">District</div>
                                <div>
                                    <select class="form-control btn-outline-primary">
                                        <option value="DHAKA">সব জেলা </option>
                                        <option value="DHAKA">ঢাকা </option>
                                        <option value="RAJSHAHI">রাজশাহী </option>
                                        <option value="MYMENSINGH">ময়মনসিংহ </option>
                                        <option value="KHULNA">খুলনা </option>
                                        <option value="CHATTOGRAM">চট্রগ্রাম </option>
                                        <option value="BARISAL">বরিশাল </option>
                                        <option value="RANGPUR">রংপুর </option>
                                        <option value="SYLHET">সিলেট </option>
                                    </select>
                                </div>
                            </div>
                        </div>
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
</div>--}}
<!-- End :: TESTING SCENARIO -->

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
                                <h3 class="card-title"></h3>
                                <div class="card-body">
                                    <div id="test_positivity_per_million"></div>
                                </div>
                                <div class="card-body">
                                    <!-- <h5 class="card-title">দক্ষিণ এশিয়ার দেশগুলাতো আক্রন্ত</h5> -->
                                    <h5 class="card-title">Test Per Cases for South Asian Countries</h5>
                                    <div id="country_wise_infected"></div>
                                </div>
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
                    <div class="col-xl-4">
                        <div class="overflow-hidden">
                            <div class="card-body">

                <?php 
                    $class_1='fa fa-arrow-up mr-1';                      
                    if(isset($last_14_days['getLast14DaysTestData'][0]->Difference) && $last_14_days['getLast14DaysTestData'][0]->Difference < 1){ 
                        $class_1='fa fa-arrow-down mr-1'; 
                    }  

                    $class_2='fa fa-arrow-up mr-1';                      
                    if(isset($last_14_days['getLast14DaysinfectedData'][0]->Difference) && $last_14_days['getLast14DaysinfectedData'][0]->Difference < 1){ 
                        $class_2='fa fa-arrow-down mr-1'; 
                    } 

                    $class_3='fa fa-arrow-up mr-1';                      
                    if(isset($last_14_days['getLast14DaysDeathData'][0]->Difference) && $last_14_days['getLast14DaysDeathData'][0]->Difference < 1){ 
                        $class_3='fa fa-arrow-down mr-1'; 
                    } 
                ?>    
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-2 fs-18 text-muted">
                                            গত ১৪ দিনে পরীক্ষা
                                        </div>

                                        <h1 class="font-weight-bold mb-1">{!! isset($last_14_days['getLast14DaysTestData'][0]) ? convertEnglishDigitToBangla($last_14_days['getLast14DaysTestData'][0]->curr_fourtten_days_test) : ' ' !!}</h1>
                                        <span class="text-primary"><i class="{{$class_1}}"></i> পূর্ববর্তী ১৪ দিনে পরীক্ষার চেয়ে {!! isset($last_14_days['getLast14DaysTestData'][0]) ? convertEnglishDigitToBangla(floor($last_14_days['getLast14DaysTestData'][0]->Difference)) : ' ' !!} জন  @if(isset($last_14_days['getLast14DaysTestData'][0]->Difference) && $last_14_days['getLast14DaysTestData'][0]->Difference < 1) কম  @else বেশি @endif </span>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col">
                                        <div class="mb-2 fs-18 text-muted">
                                            গত ১৪ দিনে আক্রান্ত
                                        </div>
                                        <h1 class="font-weight-bold mb-1">{!! isset($last_14_days['getLast14DaysinfectedData'][0]) ? convertEnglishDigitToBangla($last_14_days['getLast14DaysinfectedData'][0]->curr_fourtten_days_infected_person) : ' ' !!} </h1>
                                        <span class="text-primary"><i class="{{$class_2}}"></i> পূর্ববর্তী ১৪ দিনে আক্রান্তের চেয়ে {!! isset($last_14_days['getLast14DaysinfectedData'][0]) ? convertEnglishDigitToBangla(floor($last_14_days['getLast14DaysinfectedData'][0]->Difference)) : ' ' !!} জন @if(isset($last_14_days['getLast14DaysinfectedData'][0]->Difference) && $last_14_days['getLast14DaysinfectedData'][0]->Difference < 1) কম  @else বেশি @endif </span>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col">
                                        <div class="mb-2 fs-18 text-muted">
                                            গত ১৪ দিনে মৃত্যু
                                        </div>
                                        <h1 class="font-weight-bold mb-1">{!! isset($last_14_days['getLast14DaysDeathData'][0]) ? convertEnglishDigitToBangla($last_14_days['getLast14DaysDeathData'][0]->last_fourtten_days_infected_death) : ' ' !!}</h1>
                                        <span class="text-primary"><i class="{{$class_3}}"></i> পূর্ববর্তী ১৪ দিনে মৃত্যুর চেয়ে {!! isset($last_14_days['getLast14DaysDeathData'][0]) ? convertEnglishDigitToBangla(floor($last_14_days['getLast14DaysDeathData'][0]->Difference)) : ' ' !!} জন  @if(isset($last_14_days['getLast14DaysDeathData'][0]->Difference) && $last_14_days['getLast14DaysDeathData'][0]->Difference < 1) কম  @else বেশি @endif</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card-header">
                            <h5 class="card-title">বিগত ১৪ দিনের পরীক্ষা - সংক্রমণ - মৃত্যু</h5>
                            <div class="card-options">
                                <div class="d-flex flex-row justify-content-end">
                                    <div class="form-label pl-2 pt-2 mr-1">District</div>
                                    <div>
                                        <select class="form-control btn-outline-primary">
                                            <option value="DHAKA">সব জেলা </option>
                                            <option value="DHAKA">ঢাকা </option>
                                            <option value="RAJSHAHI">রাজশাহী </option>
                                            <option value="MYMENSINGH">ময়মনসিংহ </option>
                                            <option value="KHULNA">খুলনা </option>
                                            <option value="CHATTOGRAM">চট্রগ্রাম </option>
                                            <option value="BARISAL">বরিশাল </option>
                                            <option value="RANGPUR">রংপুর </option>
                                            <option value="SYLHET">সিলেট </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="weekly_comparision_infected_death"></div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card-body">
                                    <h5 class="card-title">Insight</h5>
                                    <p class="card-text">
                                        Content will place here.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6">
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
    // Weekly Comparision Infected Death
    Highcharts.chart('weekly_comparision_infected_death', {
        chart: {
            zoomType: 'xy'
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
            categories: <?php echo json_encode($date_arr);?>
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y}</b>'
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        colors: ['#38cb89', '#ef4b4b', '#ffa600'],
        series: [{
            name: 'আক্রান্ত',
            type: 'column',
            data: [<?php echo $infected;?>]

        }, {
            name: 'মৃত্যু',
            type: 'column',
            data: [<?php echo $death_info;?>]

        }, {
            name: 'সংক্রমণ',
            type: 'spline',
            data: [<?php echo $test_positivity;?>],
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
            if((int)$_mobInDistrictVal->Test_Positivity <= $_colorRange){
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
