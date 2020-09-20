<!-- Start :: Disease Progression -->
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
<div class="card">

    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="card-header">
                <h5 class="card-title b1">গত ১৪ দিনে পরীক্ষা</h5>
            </div>
            <div class="card-body">
                <h1 class="font-weight-bold mb-1">{!! isset($last_14_days['getLast14DaysTestData'][0]) ? convertEnglishDigitToBangla($last_14_days['getLast14DaysTestData'][0]->curr_fourtten_days_test) : ' ' !!}</h1>
                <span class="text-primary b1"><i class="{{$class_1}}"></i> পূর্ববর্তী ১৪ দিনে পরীক্ষার চেয়ে {!! isset($last_14_days['getLast14DaysTestData'][0]) ? convertEnglishDigitToBangla(floor($last_14_days['getLast14DaysTestData'][0]->Difference)) : ' ' !!} জন  @if(isset($last_14_days['getLast14DaysTestData'][0]->Difference) && $last_14_days['getLast14DaysTestData'][0]->Difference < 1) কম  @else বেশি @endif </span>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="card-header">
                <h5 class="card-title b1">গত ১৪ দিনে আক্রান্ত</h5>
            </div>
            <div class="card-body">
                <h1 class="font-weight-bold mb-1">{!! isset($last_14_days['getLast14DaysinfectedData'][0]) ? convertEnglishDigitToBangla($last_14_days['getLast14DaysinfectedData'][0]->curr_fourtten_days_infected_person) : ' ' !!} </h1>
                <span class="text-primary b1"><i class="{{$class_2}}"></i> পূর্ববর্তী ১৪ দিনে আক্রান্তের চেয়ে {!! isset($last_14_days['getLast14DaysinfectedData'][0]) ? convertEnglishDigitToBangla(floor($last_14_days['getLast14DaysinfectedData'][0]->Difference)) : ' ' !!} জন @if(isset($last_14_days['getLast14DaysinfectedData'][0]->Difference) && $last_14_days['getLast14DaysinfectedData'][0]->Difference < 1) কম  @else বেশি @endif </span>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="card-header">
                <h5 class="card-title b1">গত ১৪ দিনে মৃত্যু</h5>
            </div>
            <div class="card-body">
                <h1 class="font-weight-bold mb-1">{!! isset($last_14_days['getLast14DaysDeathData'][0]) ? convertEnglishDigitToBangla($last_14_days['getLast14DaysDeathData'][0]->last_fourtten_days_infected_death) : ' ' !!}</h1>
                <span class="text-primary b1"><i class="{{$class_3}}"></i> পূর্ববর্তী ১৪ দিনে মৃত্যুর চেয়ে {!! isset($last_14_days['getLast14DaysDeathData'][0]) ? convertEnglishDigitToBangla(floor($last_14_days['getLast14DaysDeathData'][0]->Difference)) : ' ' !!} জন  @if(isset($last_14_days['getLast14DaysDeathData'][0]->Difference) && $last_14_days['getLast14DaysDeathData'][0]->Difference < 1) কম  @else বেশি @endif</span>
            </div>
        </div>
        
    </div>

    <div class="row">
        
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card-header">
                <h3 class="card-title b1">সংক্রমণের ক্রমবর্ধমান দৈনিক পরিবর্তন</h3>
            </div>
            <div class="card-body">
                <div id="national_dialy_infected_trend"></div>
            </div>
            <div class="row">        
                <div class="col-xl-8 col-lg-8 col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">বর্ণনা</h5>
                        <p class="card-text">
                            {{ $des_1->description_eng }}
                        </p>
                    </div>
                 </div>
                 <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">বিশ্লেষণ</h5>
                        <p class="card-text">
                            Content will place here.
                        </p>
                    </div>
                 </div>
        	</div>
        </div>
        
    </div>

    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card-header">
                <h3 class="card-title b1">অঞ্চল তুলনা</h3>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="d-flex flex-row justify-content-end">
                        <div class="form-label pt-2 mr-1 b1">বিভাগ</div>
                        <div>
                            <select name="division[]"  class="select2 form-control btn-outline-primary division_select" multiple="true">
                                {{--<option value="All">সব বিভাগ</option>--}}
                                @foreach($division_list as $division)
                                <option value="{!! $division !!}" class="b1">{!! en2bnTranslation($division) !!} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-label pl-2 pt-2 mr-1">District</div>
                        <div>
                            <select name="district[]" class="select2 form-control btn-outline-primary select_district" multiple="true">
                                <option value="DHAKA" class="b1">সব জেলা </option>
                            </select>
                        </div>
                        <!-- <div class="form-label pl-2 pt-2 mr-1">Upazila</div>
                        <div>
                            <select name="upazila[]" class="select2 form-control btn-outline-primary select_upazilla" multiple="true">
                                <option value="DHAKA">সব উপজিলা</option>
                            </select>
                        </div> -->
                        <button class="btn btn-sm district_cms_search" type="submit" >অনুসন্ধান</button>
                    </div>

                </form>

            </div>
            <div class="card-body">
                <div id="district_comparision"></div>
            </div>
            <div class="row">        
                <div class="col-xl-8 col-lg-8 col-md-6">
                    <div class="card-body">
                        <h5 class="card-title b1">বর্ণনা</h5>
                        <p class="card-text">
                            {{ $des_2->description_eng }}
                        </p>
                    </div>
                 </div>
                 <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="card-body">
                        <h5 class="card-title b1">বিশ্লেষণ</h5>
                        <p class="card-text">
                            Content will place here.
                        </p>
                    </div>
                 </div>
        	</div>
        </div>
        
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card-header">
                <h3 class="card-title b1">সংক্রমণের ক্রমবর্ধমান পরিবর্তন</h3>
            </div>
            <div class="card-body">
                <div id="national_infected_trend"></div>
            </div>
            <div class="row">        
                <div class="col-xl-8 col-lg-8 col-md-6">
                    <div class="card-body">
                        <h5 class="card-title b1">বর্ণনা</h5>
                        <p class="card-text">
                           {{ $des_3->description_eng }}
                        </p>
                    </div>
                 </div>
                 <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="card-body">
                        <h5 class="card-title b1">বিশ্লেষণ</h5>
                        <p class="card-text">
                            Content will place here.
                        </p>
                    </div>
                 </div>
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
                    zoomType: 'xy',
					height: 470
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
                    name: 'দৈনিক আক্রান্ত (৫ দিনের  চলমান গড়)',
                    type: 'spline',
                    data: [<?php echo $avg;?>],
                }]
            });

        

        // National Infected Trend
        Highcharts.chart('national_infected_trend', {
            chart: {
                height: 460
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
                    text: 'দৈনিক আক্রান্তের সংখ্যা'
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
                    text: 'দৈনিক আক্রান্তের সংখ্যা'
                }
            },

            plotOptions: {
                series: {
                    fillOpacity:0
                }
            },

            colors: ['#c94b7d', '#7d5f9d', '#ef4b4b','#b25b3f','#5c687b','#60b5d1','#3acc76','#817376'],
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

               colors: ['#c94b7d', '#7d5f9d', '#ef4b4b','#b25b3f','#5c687b','#60b5d1','#3acc76','#817376'],
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
