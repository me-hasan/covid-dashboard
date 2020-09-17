<!-- Start :: Disease Progression -->

<div class="card">
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card-header cart-height-customize">
                <h3 class="card-title">রোগের অগ্রগতি</h3>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card-header">
                <h3 class="card-title">সংক্রমণের ক্রমবর্ধমান দৈনিক পরিবর্তন</h3>
            </div>
            <div class="card-body">
                <div id="national_dialy_infected_trend"></div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Insight</h5>
                <p class="card-text">
                    Content will place here.
                </p>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card-header">
                <h3 class="card-title">অঞ্চল তুলনা</h3>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="d-flex flex-row justify-content-end">
                        <div class="form-label pt-2 mr-1">Division</div>
                        <div>
                            <select name="division[]"  class="select2 form-control btn-outline-primary division_select" multiple="true">
                                {{--<option value="All">সব বিভাগ</option>--}}
                                @foreach($division_list as $division)
                                <option value="{!! $division !!}">{!! en2bnTranslation($division) !!} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-label pl-2 pt-2 mr-1">District</div>
                        <div>
                            <select name="district[]" class="select2 form-control btn-outline-primary select_district" multiple="true">
                                <option value="DHAKA">সব জেলা </option>
                            </select>
                        </div>
                        <div class="form-label pl-2 pt-2 mr-1">Upazila</div>
                        <div>
                            <select name="upazila[]" class="select2 form-control btn-outline-primary select_upazilla" multiple="true">
                                <option value="DHAKA">সব উপজিলা</option>
                            </select>
                        </div>
                        <button class="btn btn-sm district_cms_search" type="submit" >Search </button>
                    </div>

                </form>

            </div>
            <div class="card-body">
                <div id="district_comparision"></div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Insight</h5>
                <p class="card-text">
                    Content will place here.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card-header cart-height-customize">
                <h3 class="card-title">রোগের অগ্রগতি</h3>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card-header">
                <h3 class="card-title">সংক্রমণের ক্রমবর্ধমান পরিবর্তন</h3>
            </div>
            <div class="card-body">
                <div id="national_infected_trend"></div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Insight</h5>
                <p class="card-text">
                    Content will place here.
                </p>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card-header">
                <h3 class="card-title">পরীক্ষা বনাম আক্রান্ত</h3>
            </div>
            <div class="card-body">
                <div id="national_test_vs_infected_trend"></div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Insight</h5>
                <p class="card-text">
                    Content will place here.
                </p>
            </div>
        </div>
    </div>
</div>



<!-- End :: Disease Progression -->
@push('custom_script')
    <script>

        <?php
        use Carbon\Carbon;
        $date_arr = $infected_arr = $avg_arr  = array();
        //Daily test query
        $dailyTests = DB::select("select * from (
SELECT
       a.report_date,
       a.test_24_hrs,
       Round( ( SELECT SUM(b.test_24_hrs) / COUNT(b.test_24_hrs)
               FROM daily_data AS b
	WHERE DATEDIFF(a.report_date, b.report_date) BETWEEN 0 AND 4
              ), 2 ) AS 'fiveDayMovingAvgTest'
     FROM daily_data AS a
     ORDER BY a.report_date) T order by report_date");

        //Daily cases query
        $dailyCases = DB::select("select * from (
SELECT
       a.report_date,
       a.infected_24_hrs,
       Round( ( SELECT SUM(b.infected_24_hrs) / COUNT(b.infected_24_hrs)
               FROM daily_data AS b
	WHERE DATEDIFF(a.report_date, b.report_date) BETWEEN 0 AND 4
              ), 2 ) AS 'fiveDayMovingAvgInfected'
     FROM daily_data AS a
     ORDER BY a.report_date) T order by report_date");

        foreach ($dailyTests as $dailyTest) {
            $dateRange[] =  "'" .Carbon::parse($dailyTest->report_date)->format('d-M-Y'). "'" ;
            $totalTest[] = $dailyTest->fiveDayMovingAvgTest;
        }

        foreach ($dailyCases as $dailyCase) {
            $totalCase[] = $dailyCase->fiveDayMovingAvgInfected;
        }

        $dateRange  = implode(",", $dateRange);
        $totalTest  = implode(",", $totalTest);
        $totalCase  = implode(",", $totalCase);

  


                foreach($nation_wide_MovingAvgInfected as $row){
                      $date_arr[] = date('d\/m\/Y', strtotime($row->report_date));
                      $infected_arr[] = $row->infected_24_hrs;
                      $avg_arr[] = $row->five_dayMovingAvgInfected;
                }
                $infected = implode(",", $infected_arr);
                $avg = implode(",", $avg_arr);

            ?>

            Highcharts.chart('national_dialy_infected_trend', {
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
                        text: 'দৈনিক আক্রান্তের সংখ্যা'
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
                colors: ['#5a99d3', '#e97c30'],
                series: [{
                    name: 'দৈনিক আক্রান্ত',
                    type: 'column',
                    data: [<?php echo $infected;?>],

                }, {
                    name: 'দৈনিক আক্রান্ত (৫ দিনের  চলমান গড়)',
                    type: 'spline',
                    data: [<?php echo $avg;?>],
                }]
            });

        // National Test Vs Infected Trend
            Highcharts.chart('national_test_vs_infected_trend', {
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
                    categories: [<?php echo $dateRange;?>],
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
                    data: [<?php echo $totalCase;?>],
                    type: 'spline',
                    marker:{"enabled": false, "symbol":"circle"}
                }, {
                    name: 'Daily Tests (5-day moving agerage)',
                    data: [<?php echo $totalTest;?>],
                    yAxis: 1,
                    type: 'spline',
                    marker:{"enabled": false, "symbol":"circle"}
                }]
            });

        // Highcharts Infected and Forcast Chart
        Highcharts.chart('national_infected_trend', {
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
                categories: @JSON($row1_left_trend_date)
            },

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

            colors: ["#00008b"],
            series: [{
                name: 'সংক্রামিত',
                data: [<?= implode(",",$row1_left_trend_infected_data)?>],
                type : 'area',
                marker:{symbol:'circle'}

            }],
        });

        Highcharts.chart('district_comparision', {
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
                //categories: ["07\/11\/2020","08\/11\/2020","09\/11\/2020","10\/11\/2020","11\/11\/2020","12\/11\/2020","13\/11\/2020","14\/11\/2020","15\/11\/2020","16\/11\/2020","17\/11\/2020","18\/11\/2020"]
                categories: {!! $categories !!}

            },

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

            colors: ['#38cb89', '#ffa600', '#ef4b4b'],
            series:  {!! $series_data !!}
        });

        // District Comparision
      //  directComparisionCall();

        function ajax_call(){

            let result;
            let url = new URL('{!! route('hpm.get_district_comparision') !!}');
            //let search_params = url.searchParams;
            //search_params.append('district',district);
           // search_params.append('hierarchy_level','divisional');
            if($('.division_select').val() && $('.division_select').val()!='') {
                $('.select_upazilla').val(null).trigger("change");
            }

            if($('.select_district').val() && $('.select_district').val()!='') {
                $('.division_select').val(null).trigger("change");
            }
            if($('.select_upazilla').val() && $('.select_upazilla').val()!='') {
                $('.select_district').val(null).trigger("change");
            }
            $.ajax({

                type:"GET",
                url:url.toString(),
                data: {
                    'division': $('.division_select').val(),
                    'district' : $('.select_district').val(),
                    'upazilla' : $('.select_upazilla').val(),
                },
                timeout: 30000,
                success: function(data) {
                    console.log(data);
                    if(data.status == 'success'){

                        directComparisionCall(data);

                        if(data.district_data) {

                            formatdistrictData(data.district_data);
                        }
                        if(data.upazillaData){
                            formatUpazilladata(data.upazillaData);
                        }
                    } else {
                        alert("Something Went Wrong");
                    }
                },
                error: function (request, status, error) {
                    console.log("Request Param");
                    console.log(request.responseText);
                    console.log("Status Param");
                    console.log(status);
                    console.log(error);
                }
            });
            return false;
        }

        function directComparisionCall(data) {
            console.log(data.series_data);
            Highcharts.chart('district_comparision', {
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
                    //categories: ["07\/11\/2020","08\/11\/2020","09\/11\/2020","10\/11\/2020","11\/11\/2020","12\/11\/2020","13\/11\/2020","14\/11\/2020","15\/11\/2020","16\/11\/2020","17\/11\/2020","18\/11\/2020"]
                    categories: JSON.parse(data.categories)

                },

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

                colors: ['#38cb89', '#ffa600', '#ef4b4b'],
                series:  JSON.parse(data.series_data)
            });
        }

        function formatdistrictData(districtdata) {
            var districtDataInfo  = districtdata;
            var html = '';
            console.log(districtDataInfo);
            $.each(districtDataInfo, function(key, value) {
                html += "<option value="+key+">"+value.bn+"</option>";
            });
            $('.select_district').html(html);
        }

        function formatUpazilladata(upazillaData) {
            var upazillaDataInfo  = upazillaData;
            var html = '';
            //console.log(districtDataInfo);
            $.each(upazillaDataInfo, function(key, value) {
                html += "<option value="+key+">"+value.bn+"</option>";
            });
            $('.select_upazilla').html(html);
        }

        $('.district_cms_search').on('click', function (e){
            e.preventDefault();

            ajax_call();

        });
    </script>
@endpush
