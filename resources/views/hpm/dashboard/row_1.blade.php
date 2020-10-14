<!-- Start :: Disease Progression -->
<?php
    $class_1='fa fa-arrow-up mr-1 text-danger';
    if(isset($last_14_days['getLast14DaysTestData'][0]->Difference) && $last_14_days['getLast14DaysTestData'][0]->Difference < 1){
        $class_1='fa fa-arrow-down mr-1 text-success';
    }

    $class_2='fa fa-arrow-up mr-1 text-danger';
    if(isset($last_14_days['getLast14DaysinfectedData'][0]->Difference) && $last_14_days['getLast14DaysinfectedData'][0]->Difference < 1){
        $class_2='fa fa-arrow-down mr-1 text-success';
    }

    $class_3='fa fa-arrow-up mr-1 text-danger';
    if(isset($last_14_days['getLast14DaysDeathData'][0]->Difference) && $last_14_days['getLast14DaysDeathData'][0]->Difference < 1){
        $class_3='fa fa-arrow-down mr-1 text-success';
    }
?>
<div class="card">

    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="card-header pb-0">
                <h5 class="card-title b1">গত ১৪ দিনে পরীক্ষা</h5>
            </div>
            <div class="card-body pt-0">
                <h1 class="font-weight-bold mb-1 b1 fs-40">{!! isset($last_14_days['getLast14DaysTestData'][0]) ? thousandSeparator($last_14_days['getLast14DaysTestData'][0]->curr_fourtten_days_test) : ' ' !!}</h1>
                <span class="text-muted b1 fs-16"><i class="{{$class_1}}"></i> পূর্ববর্তী ১৪ দিনে পরীক্ষার চেয়ে {!! isset($last_14_days['getLast14DaysTestData'][0]) ? thousandSeparator(floor($last_14_days['getLast14DaysTestData'][0]->Difference)) : ' ' !!} টি @if(isset($last_14_days['getLast14DaysTestData'][0]->Difference) && $last_14_days['getLast14DaysTestData'][0]->Difference < 1) কম  @else বেশি @endif </span>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="card-header pb-0">
                <h5 class="card-title b1">গত ১৪ দিনে আক্রান্ত</h5>
            </div>
            <div class="card-body pt-0">
                <h1 class="font-weight-bold mb-1 b1 fs-40">{!! isset($last_14_days['getLast14DaysinfectedData'][0]) ? thousandSeparator($last_14_days['getLast14DaysinfectedData'][0]->curr_fourtten_days_infected_person) : ' ' !!} </h1>
                <span class="text-muted b1 fs-16"><i class="{{$class_2}}"></i> পূর্ববর্তী ১৪ দিনে আক্রান্তের চেয়ে {!! isset($last_14_days['getLast14DaysinfectedData'][0]) ? thousandSeparator(floor($last_14_days['getLast14DaysinfectedData'][0]->Difference)) : ' ' !!} জন @if(isset($last_14_days['getLast14DaysinfectedData'][0]->Difference) && $last_14_days['getLast14DaysinfectedData'][0]->Difference < 1) কম  @else বেশি @endif </span>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="card-header pb-0">
                <h5 class="card-title b1">গত ১৪ দিনে মৃত্যু</h5>
            </div>

            <div class="card-body pt-0">
                <h1 class="font-weight-bold mb-1 b1 fs-40">{!! isset($last_14_days['getLast14DaysDeathData'][0]) ? thousandSeparator($last_14_days['getLast14DaysDeathData'][0]->curr_fourtten_days_death) : ' ' !!}</h1>

                <span class="text-muted b1 fs-16"><i class="{{$class_3}}"></i> পূর্ববর্তী ১৪ দিনে মৃত্যুর চেয়ে {!! isset($last_14_days['getLast14DaysDeathData'][0]) ? thousandSeparator(floor($last_14_days['getLast14DaysDeathData'][0]->Difference)) : ' ' !!} জন @if(isset($last_14_days['getLast14DaysDeathData'][0]->Difference) && $last_14_days['getLast14DaysDeathData'][0]->Difference < 1) কম  @else বেশি @endif</span>
            </div>
        </div>

    </div>
</div>

<div class="card">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card-header">
                <h3 class="card-title b1">{!! $des_1->component_name_beng ?? '' !!}</h3>
            </div>
            <div class="card-body">
                <div id="national_dialy_infected_trend"></div>
            </div>
            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card-body pt-0">

                        <h5 class="card-title b1">বর্ণনা</h5>
                        <p class="card-text b1">
                            {{ $des_1->description_beng ?? '' }}
                        </p>
                    </div>
                 </div>

                 <!-- <div class="col-xl-4 col-lg-4 col-md-6 d-none">

                    <div class="card-body">
                        <h5 class="card-title b1">বিশ্লেষণ</h5>
                        <p class="card-text b1">
                            {{ $des_1->insight_beng ?? '' }}
                        </p>
                    </div>
                 </div> -->
        	</div>
        </div>
    </div>
</div>

<div class="card">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card-header">
                <h3 class="card-title b1">
                    {!! $des_7->component_name_beng ?? '' !!}
                </h3>
            </div>

            <div class="card-body">
{{--                <div id="test_positivity_rate_trend"></div>--}}

                    <div id="iframe_country_wise_infected"></div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">

                    <div class="card-body text-justify">
                        <h5 class="card-title b1">বর্ণনা</h5>
                        <p class="card-text b1">
                            {{-- $des_2->description_beng ?? '' --}}
                            {{ $des_7->description_beng ?? ''}}
                        </p>
                    </div>
                 </div>

                 <!-- <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="card-body">

                        <h5 class="card-title b1">বিশ্লেষণ</h5>
                        <p class="card-text b1">
                            {{ $des_2->insight_beng ?? '' }}
                        </p>
                    </div>
                 </div> -->
        	</div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card-header">
                <h3 class="card-title b1">{!! $des_3->component_name_beng ?? '' !!}</h3>
            </div>
            <div class="card-body">
                <div id="national_infected_trend"></div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">

                    <div class="card-body text-justify">
                        <h5 class="card-title b1">বর্ণনা</h5>
                        <p class="card-text b1">
                           {{ $des_3->description_beng ?? '' }}
                        </p>
                    </div>
                 </div>

                 <!-- <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="card-body">

                        <h5 class="card-title b1">বিশ্লেষণ</h5>
                        <p class="card-text b1">
                            {{ $des_3->insight_beng ?? '' }}
                        </p>
                    </div>
                 </div> -->
        	</div>
        </div>

    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card-header">
                <h3 class="card-title b1">{!! $des_2->component_name_beng ?? '' !!}</h3>
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
                        <div class="form-label pl-2 pt-2 mr-1 b1">জেলা</div>
                        <div>
                            <select name="district[]" class="select2 form-control btn-outline-primary select_district" multiple="true">
                                <!-- <option value="DHAKA" class="b1">সব জেলা </option> -->
                                @foreach($district_list as $district)
                                <option value="{!! $district->district !!}" class="b1">{!! en2bnTranslation($district->district) !!} </option>
                                @endforeach
                            </select>
                        </div>
                        <!-- <div class="form-label pl-2 pt-2 mr-1">Upazila</div>
                        <div>
                            <select name="upazila[]" class="select2 form-control btn-outline-primary select_upazilla" multiple="true">
                                <option value="DHAKA">সব উপজিলা</option>
                            </select>
                        </div> -->
                        <button class="btn btn-sm district_cms_search b1" type="submit" >
                        	<svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"
                                 height="100%" width="100%" preserveAspectRatio="xMidYMid meet"
                                 focusable="false">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path
                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                            </svg>
                        </button>
                    </div>

                </form>

            </div>
            <div class="card-body">
                <div id="district_comparision"></div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card-body text-justify">
                        <h5 class="card-title b1">বর্ণনা</h5>
                        <p class="card-text b1">
                            {{ $des_2->description_beng ?? '' }}
                        </p>
                    </div>
                 </div>

                 <!-- <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="card-body">

                        <h5 class="card-title b1">বিশ্লেষণ</h5>
                        <p class="card-text b1">
                            {{ $des_2->insight_beng ?? '' }}
                        </p>
                    </div>
                 </div> -->
        	</div>
        </div>
    </div>
</div>
<input class="selected_area_comparision" type="hidden" name="selected_area_comparision" value="division"/>


<!-- End :: Disease Progression -->
@push('custom_script')
    <script>
    $(document).ready(function(){
                $('#iframe_country_wise_infected').html('<iframe id="rtIframeData_1" width="100%" height="600" src="http://dashboard.corona.gov.bd/SouthAsianCountriesTestsPer1000Caeses" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>');
    });

        <?php
			use Carbon\Carbon;
			$date_arr = $infected_arr = $avg_arr  = array();

			foreach($nation_wide_MovingAvgInfected as $row){
			  $date_arr[] = convertEnglishDateToBangla($row->report_date);
			  $infected_arr[] = $row->infected_24_hrs;
			  $avg_arr[] = $row->five_dayMovingAvgInfected;
			}
			$infected = implode(",", $infected_arr);
			$avg = implode(",", $avg_arr);

            ?>
            Highcharts.chart('national_dialy_infected_trend', {
                chart: {
                    zoomType: 'xy',
					style: {
						fontFamily: 'SolaimanLipi'
					}
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
                    enabled:true,
					itemStyle: {
						fontSize: "16px",
						fontWeight: "normal"
					}
                },
                yAxis: {
                    title: {
                        text: 'দৈনিক আক্রান্তের সংখ্যা',
						style: {
							fontSize: 18,
							fontFamily: 'SolaimanLipi'
						}
                    },
                    labels: {
                        formatter: function() {
                           return englishToBangla(this.value);
                        }
                    }
                },
                xAxis: {
                    categories: <?php echo json_encode($date_arr);?>
                },
                tooltip: {
                    formatter: function() {
                        return `${this.series.name} ( ${this.x} ): <b>${englishToBangla(this.y)}</b>`;
                    }
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

        function englishToBangla(num) {
            var num = new Number(num).toLocaleString("bn-BD");
            return num;
        }

        var finalEnlishToBanglaNumber={'0':'০','1':'১','2':'২','3':'৩','4':'৪','5':'৫','6':'৬','7':'৭','8':'৮','9':'৯'};

        String.prototype.getDigitBanglaFromEnglish = function() {
            var retStr = this;
            for (var x in finalEnlishToBanglaNumber) {
                retStr = retStr.replace(new RegExp(x, 'g'), finalEnlishToBanglaNumber[x]);
            }
            return retStr;
        };

        // National Infected Trend
        Highcharts.chart('national_infected_trend', {
            chart: {
                height: 460,
				style: {
					fontFamily: 'SolaimanLipi'
				}
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
                verticalAlign: 'bottom',
				itemStyle: {
					fontSize: "16px",
					fontWeight: "normal"
				}
            },

            credits:{
                enabled:false
            },

            xAxis: {
                categories: @JSON($row1_left_trend_date)
            },
            tooltip: {
            formatter: function() {
                return `${this.series.name} ( ${this.x} ): <b>${englishToBangla(this.y)}</b>`;
            }
        },
            yAxis: {
                title: {
                    text: 'দৈনিক আক্রান্তের সংখ্যা',
					style: {
						fontSize: 18,
						fontFamily: 'SolaimanLipi'
					}
                },
                labels: {
                    formatter: function() {
                        return englishToBangla(this.value);
                    }
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


        // District Comparision
		Highcharts.chart('district_comparision', {
            chart: {
				style: {
					fontFamily: 'SolaimanLipi'
				}
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
                verticalAlign: 'bottom',
				itemStyle: {
					fontSize: "16px",
					fontWeight: "normal"
				}
            },

            credits:{
                enabled:false
            },

            xAxis: {
                //categories: ["07\/11\/2020","08\/11\/2020","09\/11\/2020","10\/11\/2020","11\/11\/2020","12\/11\/2020","13\/11\/2020","14\/11\/2020","15\/11\/2020","16\/11\/2020","17\/11\/2020","18\/11\/2020"]
                categories: {!! $categories !!},

            },
            tooltip: {
            formatter: function() {
                return `${this.series.name}( ${this.x} ) : <b>${englishToBangla(this.y)}</b>`;
            }
        },

            yAxis: {
                title: {
                    text: 'দৈনিক আক্রান্তের সংখ্যা',
					style: {
						fontSize: 18,
						fontFamily: 'SolaimanLipi'
					}
                },
                labels: {
                    formatter: function() {
                        return englishToBangla(this.value);
                    }
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



            if($('.select_district').val() && $('.select_district').val()!='') {
                console.log($('.selected_area_comparision').val());
                if(($('.division_select').val() != '') && ($('.selected_area_comparision').val()=='district')) {
                    $('.select_district').val(null).trigger("change");
                } else {
                    if($('.division_select').val() && $('.division_select').val()!='') {
                        $('.division_select').val(null).trigger("change");
                    }
                    $('.selected_area_comparision').val('district');
                }

            }
            if($('.division_select').val() && $('.division_select').val()!='') {
                $('.select_upazilla').val(null).trigger("change");
                if($('.selected_area_comparision').val()=='district') {
                    $('.selected_area_comparision').val('division');
                }

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
                    'from_date':'{!! request()->get('from_date') !!}',
                    'to_date':'{!! request()->get('to_date') !!}'
                },
                timeout: 30000,
                success: function(data) {
                    console.log(data);
                    if(data.status == 'success'){

                        directComparisionCall(data);

                        /*if(data.district_data) {

                            formatdistrictData(data.district_data);
                        }*/
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
                    verticalAlign: 'bottom',
					itemStyle: {
						fontSize: "16px",
						fontWeight: "normal"
					}
                },

                credits:{
                    enabled:false
                },

                xAxis: {
                    //categories: ["07\/11\/2020","08\/11\/2020","09\/11\/2020","10\/11\/2020","11\/11\/2020","12\/11\/2020","13\/11\/2020","14\/11\/2020","15\/11\/2020","16\/11\/2020","17\/11\/2020","18\/11\/2020"]
                    categories: JSON.parse(data.categories),
                    labels:{
                        //type: 'datetime',
                        showLastLabel: true,
                        endOnTick: true
                    },


                },

                tooltip: {
                    formatter: function() {
                        return `${this.series.name} ( ${this.x} ): <b>${englishToBangla(this.y)}</b>`;
                    }
                },
                yAxis: {
                    title: {
                        text: ''
                    },
                    labels: {
                        formatter: function() {
                            return englishToBangla(this.value);
                        }
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
