<!-- Start :: TESTING SCENARIO -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="col-sm-6">
                    <h5 class="card-title b1">পরীক্ষা পরিস্থিতি</h5>
                </div>

            </div>
            <div class="card-body">

                <div class="row pt-5">
                    <div class="col-xl-6">
                        <div class="card-header">
                            <h5 class="card-title b1">{!! $des_4->component_name_beng ?? '' !!}</h5>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="col-xl-4 col-md-4 col-sm-4">

                                </div>
                                <div class="col-xl-8 col-md-8 col-sm-8" style="float:right">
                                    <div class="btn-group" style="float:right">
                                        <div class="col-md-5 pl-0">
                                            <input class="form-control national_test_vs_infected_trend_from_date" placeholder="From Date" type="date" name="from_date" value="{{ request()->get('from_date') }}">
                                        </div>
                                        <div class="col-md-5 pl-0">
                                            <input class="form-control national_test_vs_infected_trend_to_date" placeholder="To Date" type="date" name="to_date" value="{{ request()->get('to_date') }}">
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-primary-color pl-0 national_test_vs_infected_trend_click" type="submit">
                                                <svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"
                                                     height="100%" width="100%" preserveAspectRatio="xMidYMid meet"
                                                     focusable="false">
                                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                                    <path
                                                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                                                </svg>
                                                </button>
                                            </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                        <div class="card-body">
                            <div id="national_test_vs_infected_trend"></div>
                        </div>
                        <div class="row">


                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card-body pl-0 pr-0 text-justify">

                                    <h5 class="card-title b1">বর্ণনা</h5>
                                    <p class="card-text b1">
                                      
                                        {!! $des_4->description_beng ?? '' !!}
                                    </p>
                                </div>
                            </div>


                            <!-- <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card-body">

                                    <h5 class="card-title b1">বিশ্লেষণ</h5>
                                    <p class="card-text b1">
                                        {{ $des_4->insight_beng ?? ''}}
                                    </p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card-header">
                            <h5 class="card-title b1">{!! $des_5->component_name_beng ?? '' !!}</h5>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="col-xl-4 col-md-4 col-sm-4">

                                </div>
                                <div class="col-xl-4 col-md-4 col-sm-8" style="float:right">
                                    <div class="btn-group" style="float:right">
                                        <div class="col-md-12 pl-0">
                                            <input class="form-control weekly_comparision_infected_from_date" placeholder="From Date" type="date" name="from_date" value="{{ request()->get('from_date') }}">
                                        </div>

                                        <div class="btn-group">
                                            <button class="btn btn-primary-color pl-0 weekly_comparision_infected_death_click" type="submit">
                                                <svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"
                                                     height="100%" width="100%" preserveAspectRatio="xMidYMid meet"
                                                     focusable="false">
                                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                                    <path
                                                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                                                </svg>
                                                </button>
                                            </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                        <div class="card-body">
                            <div id="weekly_comparision_infected_death"></div>
                        </div>
                        <div class="row">


                             <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card-body pl-0 pr-0 text-justify">

                                    <h5 class="card-title b1">বর্ণনা</h5>
                                    <p class="card-text b1">
                                        {!! $des_5->description_beng ?? '' !!}
                                    </p>
                                </div>
                            </div>


                            <!-- <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card-body">

                                    <h5 class="card-title b1">বিশ্লেষণ</h5>
                                    <p class="card-text b1">
                                        {{ $des_5->insight_beng ?? ''}}
                                    </p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="row pt-5 border-top border-primary">
                    <div class="col-xl-6 col-lg-6 col-md-12" id="infected_district_map">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">

								<div class="card-header">
                                	<h5 class="card-title b1">{!! $des_6->component_name_beng ?? '' !!}</h5>
                                </div>

                                <div class="card-body pl-0 pr-0">
                                    <div id="iframeData"></div>
                                </div>
                                <div class="row">
                                     <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="card-body text-justify">
                                            <h5 class="card-title b1">বর্ণনা</h5>
                                            <p class="card-text b1">
                                                {!! $des_6->description_beng ?? '' !!}
                                            </p>
                                        </div>
                                    </div>

                                    <!-- <div class="col-xl-6 col-lg-6 col-md-6">

                                        <div class="card-body pr-0 text-justify">
                                            <h5 class="card-title b1">বিশ্লেষণ</h5>
                                            <p class="card-text b1">
                                                {{ $des_6->insight_beng ?? ''}}
                                            </p>
                                        </div>

                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="card-header">
                            <div class="col-sm-12">
                                <h3 class="card-title b1"> {!! $des_11->component_name_beng ?? '' !!}</h3>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">

                                <div class="col-xl-2 col-md-2 col-sm-2">

                                </div>
                                <div class="col-xl-10 col-md-10 col-sm-10" style="float:right">
                                   
                                        <div class="btn-group">
                                            <div class="col-md-6 pl-0 offset-md-6">
                                                <input class="form-control test_positivity_rate_trend_from_date" placeholder="From Date" type="date" name="from_date" value="{{ request()->get('from_date') }}">
                                            </div>
                                            <div class="col-md-6 pl-0">
                                                <input class="form-control test_positivity_rate_trend_to_date" placeholder="To Date" type="date" name="to_date" value="{{ request()->get('to_date') }}">
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-primary-color pl-0 test_positivity_rate_trend_click" type="submit">
                                                    <svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"
                                                         height="100%" width="100%" preserveAspectRatio="xMidYMid meet"
                                                         focusable="false">
                                                        <path d="M0 0h24v24H0V0z" fill="none"/>
                                                        <path
                                                            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    
                                	
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-body">

                            <div id="test_positivity_rate_trend"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card-body text-justify">
                                    <h5 class="card-title b1">বর্ণনা</h5>
                                    <p class="card-text b1">
                                    {!! $des_11->description_beng ?? '' !!}
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
<!-- End :: TESTING SCENARIO https://arcg.is/1Xb0yP0 -->

@push('custom_script')
    <script>
			$(document).ready(function(){
				$('#iframeData').html('<iframe id="rtIframeData" width="100%" height="550" src="https://public.tableau.com/shared/KCWJ6J7MR?%3Aembed=y&amp;%3AshowVizHome=no" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>');
			});

            // Test Positivity Trend
            Highcharts.chart('test_positivity_rate_trend', {
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
                    categories: {!! $categories_dhk !!},
                    endOnTick: true,
                    showLastLabel: true,
                    labels: {
                        formatter: function() {
                           return this.axis.categories[Math.min(this.pos,this.axis.categories.length-1)];
                        }
                    }
                },

                tooltip: {
                    formatter: function() {
                        return `${this.series.name} ( ${this.x} ): <b>${englishToBangla(this.y)}</b>`;
                    }
                },

                yAxis: {
                    title: {
                        text: 'দৈনিক টেস্ট পসিটিভিটি রেট',
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
                series:  {!! $series_data_dhk !!}
            });

            $('.test_positivity_rate_trend_click').on('click', function (e){
                e.preventDefault();
                var url = new URL('{!! route('hpm.get_hpm_get_test_positivity_rate_trend') !!}');
                var to_date = $('.test_positivity_rate_trend_to_date').val();
                var from_date = $('.test_positivity_rate_trend_from_date').val();
                var test_positivity_rate_trendData = ajaxCallWithUrl(url, from_date,to_date);

                if(test_positivity_rate_trendData) {
                    test_positivity_rate_trend(test_positivity_rate_trendData);
                }
            });

            function test_positivity_rate_trend(data) {
                Highcharts.chart('test_positivity_rate_trend', {
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
                        categories: JSON.parse(data.categories_dhk),
                        endOnTick: true,
                        showLastLabel: true,
                        labels: {
                            formatter: function() {
                                return this.axis.categories[Math.min(this.pos,this.axis.categories.length-1)];
                            }
                        }
                    },

                    tooltip: {
                        formatter: function() {
                            return `${this.series.name} ( ${this.x} ): <b>${englishToBangla(this.y)}</b>`;
                        }
                    },

                    yAxis: {
                        title: {
                            text: 'দৈনিক টেস্ট পসিটিভিটি রেট',
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
                    series:  JSON.parse(data.series_data_dhk)
                });
            }

        // National Test Vs Infected Trend
        Highcharts.chart('national_test_vs_infected_trend', {
            chart: {
                marginRight: 80, // like left
                height: 420,
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
            legend: {
                itemStyle: {
                    fontSize: "16px",
                    fontWeight: "normal"
                }
            },

            xAxis: {
                    categories: [<?php echo $testsVsCases['dateRange'];?>],
                    endOnTick: true,
                    showLastLabel: true,
                    labels: {
                        formatter: function() {
                           return this.axis.categories[Math.min(this.pos,this.axis.categories.length-1)];
                        }
                    }
                },
            tooltip: {

                formatter: function() {
                    return `${this.series.name}: <b>${englishToBangla(this.y)}</b>`;
                }

            },
            yAxis: [{
                lineWidth: 1,
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
                },
                min:0,
            }, {
                lineWidth: 1,
                opposite: true,
                title: {
                    text: 'দৈনিক পরীক্ষার সংখ্যা',
                    style: {
                        fontSize: 18,
                        fontFamily: 'SolaimanLipi'
                    }
                },
                labels: {
                    formatter: function() {
                        return englishToBangla(this.value);
                    }
                },
                min:0,
            }],
            colors: ['#9d4a2a', '#dfc825'],
            series: [{
                name: 'দৈনিক আক্রান্ত (৫-দিনের চলমান গড়)',
                data: [<?php echo $testsVsCases['totalCase'];?>],
                type: 'spline',
                marker:{"enabled": false, "symbol":"circle"}
            }, {
                name: 'দৈনিক পরীক্ষা (৫-দিনের চলমান গড়)',
                data: [<?php echo $testsVsCases['totalTest'];?>],
                yAxis: 1,
                type: 'spline',
                marker:{"enabled": false, "symbol":"circle"}
            }]
        });

            $('.national_test_vs_infected_trend_click').on('click', function (e){
                e.preventDefault();
                var url = new URL('{!! route('hpm.get_national_test_vs_infected_trend') !!}');
                var to_date = $('.national_test_vs_infected_trend_to_date').val();
                var from_date = $('.national_test_vs_infected_trend_from_date').val();
                var national_test_vs_infected_trendData= ajaxCallWithUrl(url, from_date,to_date);

                if(national_test_vs_infected_trendData) {
                    national_test_vs_infected_trend(national_test_vs_infected_trendData);
                }
            });

            function national_test_vs_infected_trend(data) {
                Highcharts.chart('national_test_vs_infected_trend', {
                    chart: {
                        marginRight: 80, // like left
                        height: 420,
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
                    legend: {
                        itemStyle: {
                            fontSize: "16px",
                            fontWeight: "normal"
                        }
                    },

                    xAxis: {
                        categories: JSON.parse(data.categories),
                        endOnTick: true,
                        showLastLabel: true,
                        labels: {
                            formatter: function() {
                                return this.axis.categories[Math.min(this.pos,this.axis.categories.length-1)];
                            }
                        }
                    },
                    tooltip: {

                        formatter: function() {
                            return `${this.series.name}: <b>${englishToBangla(this.y)}</b>`;
                        }

                    },
                    yAxis: [{
                        lineWidth: 1,
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
                        },
                        min:0,
                    }, {
                        lineWidth: 1,
                        opposite: true,
                        title: {
                            text: 'দৈনিক পরীক্ষার সংখ্যা',
                            style: {
                                fontSize: 18,
                                fontFamily: 'SolaimanLipi'
                            }
                        },
                        labels: {
                            formatter: function() {
                                return englishToBangla(this.value);
                            }
                        },
                        min:0,
                    }],
                    colors: ['#9d4a2a', '#dfc825'],
                    series: [{
                        name: 'দৈনিক আক্রান্ত (৫-দিনের চলমান গড়)',
                        data: JSON.parse(data.total_case),
                        type: 'spline',
                        marker:{"enabled": false, "symbol":"circle"}
                    }, {
                        name: 'দৈনিক পরীক্ষা (৫-দিনের চলমান গড়)',
                        data:   JSON.parse(data.total_test),
                        yAxis: 1,
                        type: 'spline',
                        marker:{"enabled": false, "symbol":"circle"}
                    }]
                });
            }

        <?php
/*
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

        */?>
        // Weekly Comparision Infected Death  weekly_comparision_infected_death
        Highcharts.chart('weekly_comparision_infected_death', {
            chart: {
                marginRight: 80, // like left
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
            legend: {
                enabled:true,
                itemStyle: {
                    fontSize: "16px",
                    fontWeight: "normal"
                }
            },

            xAxis: {
                    categories: [<?php echo $forteen_day_infected['dateRange'];?>],
                    endOnTick: true,
                    showLastLabel: true,
                    labels: {
                        formatter: function() {
                           return this.axis.categories[Math.min(this.pos,this.axis.categories.length-1)];
                        }
                    }
                },
            tooltip: {

                formatter: function() {
                    return `${this.series.name}: <b>${englishToBangla(this.y)}</b>`;
                }

            },
            yAxis: [{
                lineWidth: 1,
                title: {
                    text: 'শতকরা সংক্রমণের হার (টেস্ট পজিটিভিটি রেট)',
                    style: {
                        fontSize: 18,
                        fontFamily: 'SolaimanLipi'
                    }
                },
                labels: {
                    formatter: function() {
                        return englishToBangla(this.value);
                    }
                },
                min:0,
            }, {
                lineWidth: 1,
                opposite: true,
                title: {
                    text: 'সংক্রমণ',
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
            }],
            colors: ['#dfc825','#9d4a2a'],
            series: [{
                name: 'সংক্রমণ',
                data: [<?php echo $forteen_day_infected['total_infected'];?>],
                yAxis: 1,
                type: 'column',
                marker:{"enabled": false, "symbol":"circle"}
            },{
                name: 'শতকরা সংক্রমণের হার (টেস্ট পজিটিভিটি রেট)',
                data: [<?php echo $forteen_day_infected['total_test_positivity'];?>],
                type: 'spline',
                marker:{"enabled": false, "symbol":"circle"}
            } ]
        });

        $(".weekly_comparision_infected_death_click").on('click', function (e){
            e.preventDefault();
            var url = new URL('{!! route('hpm.get_weekly_comparision_infected_death') !!}');
            var from_date = $('.weekly_comparision_infected_from_date').val();
            var to_date = $('.weekly_comparision_infected_from_date').val();
            var weekly_comparision_infected_data= ajaxCallWithUrl(url, '', to_date);
            console.log(weekly_comparision_infected_data);
            if(weekly_comparision_infected_data) {
                weekly_comparision_infected(weekly_comparision_infected_data);
            }
        });
        function weekly_comparision_infected(data) {
            Highcharts.chart('weekly_comparision_infected_death', {
                chart: {
                    marginRight: 80, // like left
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
                legend: {
                    enabled:true,
                    itemStyle: {
                        fontSize: "16px",
                        fontWeight: "normal"
                    }
                },

                xAxis: {
                    categories: JSON.parse(data.categories),
                    endOnTick: true,
                    showLastLabel: true,
                    labels: {
                        formatter: function() {
                            return this.axis.categories[Math.min(this.pos,this.axis.categories.length-1)];
                        }
                    }
                },
                tooltip: {

                    formatter: function() {
                        return `${this.series.name}: <b>${englishToBangla(this.y)}</b>`;
                    }

                },
                yAxis: [{
                    lineWidth: 1,
                    title: {
                        text: 'শতকরা সংক্রমণের হার (টেস্ট পজিটিভিটি রেট)',
                        style: {
                            fontSize: 18,
                            fontFamily: 'SolaimanLipi'
                        }
                    },
                    labels: {
                        formatter: function() {
                            return englishToBangla(this.value);
                        }
                    },
                    min:0,
                }, {
                    lineWidth: 1,
                    opposite: true,
                    title: {
                        text: 'সংক্রমণ',
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
                }],
                colors: ['#dfc825','#9d4a2a'],
                series: [{
                    name: 'সংক্রমণ',
                    data: JSON.parse(data.total_infectedData),
                    yAxis: 1,
                    type: 'column',
                    marker:{"enabled": false, "symbol":"circle"}
                },{
                    name: 'শতকরা সংক্রমণের হার (টেস্ট পজিটিভিটি রেট)',
                    data: JSON.parse(data.total_test_positivityData),
                    type: 'spline',
                    marker:{"enabled": false, "symbol":"circle"}
                } ]
            });
        }

        $(document).ready(function(){

            <?php
            //$_colorCodes = array( '5' => '#FCAA94', '10' => '#F69475', '50' => '#F37366', '100' => '#E5515D', '500' => '#CD3E52', '1000' => '#ed2355');
            $_colorCodes = array( '5' => '#fff51e', '12' => '#f87f2c', '500' => '#f43735');
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
