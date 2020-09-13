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
                                        <h1 class="font-weight-bold mb-1">{!! isset($last_14_days['getLast14DaysTestData'][0]) ? $last_14_days['getLast14DaysTestData'][0]->curr_fourtten_days_test : ' ' !!}</h1>
                                        <span class="text-primary"><i class="fa fa-arrow-up mr-1"></i> পূর্ববর্তী ১৪ দিনে পরীক্ষার চেয়ে {!! isset($last_14_days['getLast14DaysTestData'][0]) ? $last_14_days['getLast14DaysTestData'][0]->Difference : ' ' !!} জন বেশি </span>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col">
                                        <div class="mb-2 fs-18 text-muted">
                                            গত ১৪ দিনে আক্রান্ত
                                        </div>
                                        <h1 class="font-weight-bold mb-1">{!! isset($last_14_days['getLast14DaysinfectedData'][0]) ? $last_14_days['getLast14DaysinfectedData'][0]->curr_fourtten_days_infected_person : ' ' !!} </h1>
                                        <span class="text-primary"><i class="fa fa-arrow-up mr-1"></i> পূর্ববর্তী ১৪ দিনে আক্রান্তের চেয়ে {!! isset($last_14_days['getLast14DaysinfectedData'][0]) ? $last_14_days['getLast14DaysinfectedData'][0]->Difference : ' ' !!} জন বেশি</span>
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
