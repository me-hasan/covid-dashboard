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
                            <h5 class="card-title">বিগত ৪২ দিনের পরীক্ষা - সংক্রমণ - মৃত্যু</h5>
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
                    <div class="col-xl-4">
                        <div class="overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-2 fs-18 text-muted">
                                            গত ১৪ দিনে পরীক্ষা
                                        </div>
                                        <h1 class="font-weight-bold mb-1">{!! isset($last_14_days['getLast14DaysTestData'][0]) ? convertEnglishDigitToBangla($last_14_days['getLast14DaysTestData'][0]->curr_fourtten_days_test) : ' ' !!}</h1>
                                        <span class="text-primary"><i class="fa fa-arrow-up mr-1"></i> পূর্ববর্তী ১৪ দিনে পরীক্ষার চেয়ে {!! isset($last_14_days['getLast14DaysTestData'][0]) ? convertEnglishDigitToBangla(floor($last_14_days['getLast14DaysTestData'][0]->Difference)) : ' ' !!} জন  @if(isset($last_14_days['getLast14DaysTestData'][0]->Difference) && $last_14_days['getLast14DaysTestData'][0]->Difference < 1) কম  @else বেশি @endif </span>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col">
                                        <div class="mb-2 fs-18 text-muted">
                                            গত ১৪ দিনে আক্রান্ত
                                        </div>
                                        <h1 class="font-weight-bold mb-1">{!! isset($last_14_days['getLast14DaysinfectedData'][0]) ? convertEnglishDigitToBangla($last_14_days['getLast14DaysinfectedData'][0]->curr_fourtten_days_infected_person) : ' ' !!} </h1>
                                        <span class="text-primary"><i class="fa fa-arrow-up mr-1"></i> পূর্ববর্তী ১৪ দিনে আক্রান্তের চেয়ে {!! isset($last_14_days['getLast14DaysinfectedData'][0]) ? convertEnglishDigitToBangla(floor($last_14_days['getLast14DaysinfectedData'][0]->Difference)) : ' ' !!} জন @if(isset($last_14_days['getLast14DaysinfectedData'][0]->Difference) && $last_14_days['getLast14DaysinfectedData'][0]->Difference < 1) কম  @else বেশি @endif </span>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col">
                                        <div class="mb-2 fs-18 text-muted">
                                            গত ১৪ দিনে মৃত্যু
                                        </div>
                                        <h1 class="font-weight-bold mb-1">{!! isset($last_14_days['getLast14DaysDeathData'][0]) ? convertEnglishDigitToBangla($last_14_days['getLast14DaysDeathData'][0]->last_fourtten_days_infected_death) : ' ' !!}</h1>
                                        <span class="text-primary"><i class="fa fa-arrow-up mr-1"></i> পূর্ববর্তী ১৪ দিনে মৃত্যুর চেয়ে {!! isset($last_14_days['getLast14DaysDeathData'][0]) ? convertEnglishDigitToBangla(floor($last_14_days['getLast14DaysDeathData'][0]->Difference)) : ' ' !!} জন  @if(isset($last_14_days['getLast14DaysDeathData'][0]->Difference) && $last_14_days['getLast14DaysDeathData'][0]->Difference < 1) কম  @else বেশি @endif</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card-header">
                            <h5 class="card-title">বিগত ৪২ দিনের পরীক্ষা - সংক্রমণ - মৃত্যু</h5>
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
   // Set up the chart
        var chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'test_positivity_per_million',
                    margin: 100,
                    type: 'scatter3d',
                    animation: false,
                    options3d: {
                        enabled: true,
                        alpha: 10,
                        beta: 30,
                        depth: 250,
                        viewDistance: 5,
                        fitToPlot: false,
                        frame: {
                            bottom: { size: 1, color: 'rgba(0,0,0,0.02)' },
                            back: { size: 1, color: 'rgba(0,0,0,0.04)' },
                            side: { size: 1, color: 'rgba(0,0,0,0.06)' }
                        }
                    }
                },
                title: {
                    text: ''
                },
                subtitle: {
                    text: ''
                },
                plotOptions: {
                    scatter: {
                        width: 10,
                        height: 10,
                        depth: 10
                    }
                },
                yAxis: {
                    min: 0,
                    max: 10,
                    title: null
                },
                xAxis: {
                    min: 0,
                    max: 10,
                    gridLineWidth: 1
                },
                zAxis: {
                    min: 0,
                    max: 10,
                    showFirstLabel: false
                },
                legend: {
                    enabled: false
                },
                credits:{
                    enabled:false
                },
                series: [{
                    name: 'Data',
                    colorByPoint: true,
                    accessibility: {
                        exposeAsGroupOnly: true
                    },
                    data: [[1, 6, 5], [8, 7, 9], [1, 3, 4], [4, 6, 8], [5, 7, 7], [6, 9, 6],
                            [7, 0, 5], [2, 3, 3], [3, 9, 8], [3, 6, 5], [4, 9, 4], [2, 3, 3],
                            [6, 9, 9], [0, 7, 0], [7, 7, 9], [7, 2, 9], [0, 6, 2], [4, 6, 7],
                            [3, 7, 7], [0, 1, 7], [2, 8, 6], [2, 3, 7], [6, 4, 8], [3, 5, 9],
                            [7, 9, 5], [3, 1, 7], [4, 4, 2], [3, 6, 2], [3, 1, 6], [6, 8, 5],
                            [6, 6, 7], [4, 1, 1], [7, 2, 7], [7, 7, 0], [8, 8, 9], [9, 4, 1],
                            [8, 3, 4], [9, 8, 9], [3, 5, 3], [0, 2, 4], [6, 0, 2], [2, 1, 3],
                            [5, 8, 9], [2, 1, 1], [9, 7, 6], [3, 0, 2], [9, 9, 0], [3, 4, 8],
                            [2, 6, 1], [8, 9, 2], [7, 6, 5], [6, 3, 1], [9, 3, 1], [8, 9, 3],
                            [9, 1, 0], [3, 8, 7], [8, 0, 0], [4, 9, 7], [8, 6, 2], [4, 3, 0],
                            [2, 3, 5], [9, 1, 4], [1, 1, 4], [6, 0, 2], [6, 1, 6], [3, 8, 8],
                            [8, 8, 7], [5, 5, 0], [3, 9, 6], [5, 4, 3], [6, 8, 3], [0, 1, 5],
                            [6, 7, 3], [8, 3, 2], [3, 8, 3], [2, 1, 6], [4, 6, 7], [8, 9, 9],
                            [5, 4, 2], [6, 1, 3], [6, 9, 5], [4, 8, 2], [9, 7, 4], [5, 4, 2],
                            [9, 6, 1], [2, 7, 3], [4, 5, 4], [6, 8, 1], [3, 4, 0], [2, 2, 6],
                            [5, 1, 2], [9, 9, 7], [6, 9, 9], [8, 4, 3], [4, 1, 7], [6, 2, 5],
                            [0, 4, 9], [3, 5, 9], [6, 9, 1], [1, 9, 2]]
                }]
    });

    // Weekly Comparision Infected Death
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
            categories: ["07\/11\/2020","08\/11\/2020","09\/11\/2020","10\/11\/2020","11\/11\/2020","12\/11\/2020","13\/11\/2020","14\/11\/2020","15\/11\/2020","16\/11\/2020","17\/11\/2020","18\/11\/2020"]
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
        colors: ['#38cb89', '#ffa600', '#ef4b4b'],
        series: [{
            name: 'আক্রান্ত',
            type: 'column',
            data: [300,320,450,250,450,200,280,400,620,452,505,637]

        }, {
            name: 'সংক্রমণ',
            type: 'column',
            data: [360,406,816,523,470,571,643,521,578,657,777,563]

        }, {
            name: 'মৃত্যু',
            type: 'spline',
            data: [160,206,316,423,270,371,543,421,378,557,377,463],
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
