@php

$row_data = array();
if(count($testPositivityByAge)) {
    foreach ($testPositivityByAge as $testPositiveAge) {
        $row_data[] = (double)$testPositiveAge->_0_10 ?? '';
        $row_data[] = (double)$testPositiveAge->_11_20 ?? '';
        $row_data[] = (double)$testPositiveAge->_21_30 ?? '';
        $row_data[] = (double)$testPositiveAge->_31_40 ?? '';
        $row_data[] = (double)$testPositiveAge->_41_50 ?? '';
        $row_data[] = (double)$testPositiveAge->_51_60 ?? '';
        $row_data[] = (double)$testPositiveAge->_60_Plus ?? '';
         break;
    }

}
//dd(json_encode($row_data));
$genderWiseData = array();
$maleData = 0;
$femaleData = 0;
if(count($testPositivityByGender)) {
    foreach ($testPositivityByGender as $testPositiveGender) {
        $maleData = (double)$testPositiveGender->M ?? '';
        $femaleData = (double)$testPositiveGender->F ?? '';
         break;
    }

}
$genderWiseData = array();
$avg_sample_to_test_lag_time = 0;
$avg_test_to_report_lag_time = 0;
if(count($avgDelayTimeData)) {
    foreach ($avgDelayTimeData as $avgDelay) {
        $avg_sample_to_test_lag_time = $avgDelay->avg_sample_to_test_lag_time ?? '';
        $avg_test_to_report_lag_time = $avgDelay->avg_test_to_report_lag_time ?? '';
         break;
    }

}
$inputData = request()->all();
//dd($inputData);
@endphp
<div class="row">
    <div class="col-xl-8 col-md-12">
        <div class="card">
            <div class="card-header cart-height-customize">
                <h3 class="card-title">Nation wide Test Positivity Rate</h3>
                <div class="card-options">
                    <div class="btn-list"> <a href="{!! route('iedcr.test_positivity_analysis') !!}" class="btn btn-primary btn-sm">Details</a> </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                            @include('iedcr.dashboard.bd-map-html-row-3')
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="card">
                            <div class="card-header cart-height-customize">
                                <h3 class="card-title">Test Positivity Rate</h3>
                                @php
                                    $inputData['excel_download'] = 'test_posititvity_age';
                                @endphp

                                <div class="card-options">
                                    <a href="{!! route('iedcr.dashboard',$inputData) !!}">  <i class="fa fa-download text-danger"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="test_positivity_rate"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header cart-height-customize">
                                <h3 class="card-title">Test Positivity by Gender</h3>
                                @php
                                    $inputData['excel_download'] = 'test_posititvity_gender';
                                @endphp
                                <div class="card-options">
                                    <a href="{!! route('iedcr.dashboard',$inputData) !!}">    <i class="fa fa-download text-danger"></i> </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="death_by_gender"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-12 ml-4">
                        <div id="color-group">
                            <div class="row gutters-xs">
                                <div class="col-auto"><span class="colorinput-color" style="background-color:#F69475"></span><span class="group-color-label text-ash p-1">0-10</span></div>
                                <div class="col-auto"><span class="colorinput-color" style="background-color:#F37366"></span><span class="group-color-label text-ash p-1">11-20</span></div>
                                <div class="col-auto"><span class="colorinput-color" style="background-color:#E5515D"></span><span class="group-color-label text-ash p-1">21-30</span></div>
                                <div class="col-auto"><span class="colorinput-color" style="background-color:#CD3E52"></span><span class="group-color-label text-ash p-1">31-40</span></div>
                                <div class="col-auto"><span class="colorinput-color" style="background-color:#BC2B4C"></span><span class="group-color-label text-ash p-1">51-100</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Avarage Delay Time<br/>
                    <span class="text-ash" style="font-size: 10px;">26th July, 2020 to 7th August, 2020</span></h3>
                <div class="card-options">
                @php
                    $inputData['excel_download'] = 'avgDelayTime';
                @endphp
                    <!--<i class="fa fa-table mr-2 text-success"></i>-->
                    <a href="{!! route('iedcr.dashboard',$inputData) !!}">    <i class="fa fa-download text-danger"></i> </a>
                </div>
            </div>
            <div class="card-body">
                <div class="card-body mt-3 text-center">
                    <h4 class="gray-600">Sample Collection to Test</h4>
                    <h3 class="text-success "><span class="avg_sample_test_lag">{!! round($avg_sample_to_test_lag_time,2) !!}</span> Days</h3>
                </div>
                <hr />
                <div class="card-body mb-4 text-center">
                    <h4>Test to Result</h4>
                    <h3 class="text-success"><span class="avg_sample_report_lag">{!! round($avg_test_to_report_lag_time,2) !!}</span> Days</h3>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <h5 class="card-title">Short Description</h5>
                        <p class="card-text">Content here.</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <h5 class="card-title">Data Source & Last Update Date</h5>
                        <p class="card-text">a2i database</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('custom_script')
    <script>
        // Test Positivity Rate
        Highcharts.chart('test_positivity_rate', {
            chart: {
                type: 'column',
                height: 180
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
                        return this.value+"%";
                    }
                }
            },
            xAxis: {
                categories: ["0-10","11--20","21-30","31-40","41-50","51-60","60+"]				},
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y}%</b>',
                /*valueSuffix: ' cm',
                shared: true*/
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            colors: ['#ef4b4b'],
            series: [{"name":"Death","data":<?php echo json_encode($row_data); ?>}]
        });

        // Death by Gender Group
        Highcharts.chart('death_by_gender', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie',
                height: 180
            },
            title: {
                text: ''
            },
            credits:{
                enabled:false
            },
            legend:{
                enabled:true,
                labelFormatter: function () {
                    return this.name+': <b> '+this.y + '%</b>';
                }
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            colors: ['#ffa600', '#00ffcb'],
            series: [{
                name: 'Infected',
                colorByPoint: true,
                data:  [{"name":"Male","y":{!! $maleData !!}},{"name":"Female","y":{!! $femaleData !!}}]
            }]
        });

    </script>

    <script type="text/javascript">
        // Map JS Data
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

            $(".map_click_3").on('click', function (){
                var districtId = $(this).attr('id');
                if (typeof(Storage) !== "undefined") {
                    if(sessionStorage.row_3_districtId) {
                        $("#"+sessionStorage.row_3_districtId).find('path').css({fill:sessionStorage.row_3_districtColor});
                    }
                    sessionStorage.row_3_districtId = districtId;
                    sessionStorage.row_3_districtColor = $(this).find('path').attr('fill');
                } else {
                    $('.fill_color').css({fill:"#FCAA94"});
                }
                var district = districtId.replace("three_", "");
                test_positivity_ajax_call(district);
                $(this).find('path').addClass('fill_color');
                $(this).find('path').css({fill:"#705ec8"});
            })

            function test_positivity_ajax_call(district) {
                var result;
                var maleData;
                var femaleData;
                var test_positivity_age_data;
                var url = new URL('{!! route('iedcr.test_positivity_data') !!}');
                var search_params = url.searchParams;
                search_params.append('district',district);
                search_params.append('hierarchy_level','divisional');
                $.ajax({

                    type:"GET",
                    url:url.toString(),
                    success: function(data) {
                        if(data.status == 'success'){
                            maleData = data.maleData;
                            femaleData = data.femaleData;
                            test_positivity_age_data = data.test_positivity_age_data;
                            testPositivityGenderData(maleData,femaleData);
                            testPositivityAgeData(test_positivity_age_data);
                            $('.avg_sample_test_lag').text(data.avg_sample_to_test_lag_time);
                            $('.avg_sample_report_lag').text(data.avg_test_to_report_lag_time);
                        } else {
                            alert("Something Went Wrong");
                        }
                        result = data;
                    }
                });
            }

            function testPositivityGenderData(maleData,femaleData) {
                Highcharts.chart('death_by_gender', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie',
                        height: 180
                    },
                    title: {
                        text: ''
                    },
                    credits:{
                        enabled:false
                    },
                    legend:{
                        enabled:true,
                        labelFormatter: function () {
                            return this.name+': <b> '+this.y + '%</b>';
                        }
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
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
                            dataLabels: {
                                enabled: false
                            },
                            showInLegend: true
                        }
                    },
                    colors: ['#ffa600', '#00ffcb'],
                    series: [{
                        name: 'Infected',
                        colorByPoint: true,
                        data:  [{"name":"Male","y":maleData},{"name":"Female","y":femaleData}]
                    }]
                });
            }

            function testPositivityAgeData(test_positivity_age_data){

                Highcharts.chart('test_positivity_rate', {
                    chart: {
                        type: 'column',
                        height: 180
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
                                return this.value+"%";
                            }
                        }
                    },
                    xAxis: {
                        categories: ["0-10","11--20","21-30","31-40","41-50","51-60","60+"]				},
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.y}%</b>',
                        /*valueSuffix: ' cm',
                        shared: true*/
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    colors: ['#ef4b4b'],
                    series: [{"name":"Death","data":test_positivity_age_data}]
                });
            }


        });
    </script>
@endpush
