<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nationwide Infected Cases</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12"> 
                    @include('iedcr.bd-map-html-row-1')
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="row">
                                    <div class="col-xl-4 col-md-12">
                                        <div class="card">
                                            <div class="card-header cart-height-customize">
                                                <h3 class="card-title"><span class="fs-12">Confirmed Cases % by Age Group</span></h3>
                                                <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="case_by_age"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-12">
                                        <div class="card">
                                            <div class="card-header cart-height-customize">
                                                <h3 class="card-title"><span class="fs-12">Confirmed Cases % by Age Group</span></h3>
                                                <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="death_by_age"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-12">
                                        <div class="card">
                                            <div class="card-header cart-height-customize">
                                                <h3 class="card-title"><span class="fs-12">Cases by Gender</span></h3>
                                                <div class="card-options"> <a href="{{route('iedcr.generate-gender-excel',request()->input())}}"><i class="fa fa-download text-danger"></i></a> </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="case_by_gender"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Time Series</h3>
                                        <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="time-seris-graph"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
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
                <div class="col-xl-8 col-lg-6 col-md-6 col-xm-12">
                    <div class="card-body">
                        <h5 class="card-title">Short Description</h5>
                        <p class="card-text">Content here.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                    <div class="card-body">
                        <h5 class="card-title">Data Source & Last Update Date</h5>
                        <p class="card-text">DGHS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('custom_script')
    <script>
        // Age Wise Infected Distribution
        Highcharts.chart('case_by_age', {
            chart: {
                type: 'column',
                height: 150
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
                categories: ["Dhaka","Khulna","Barisal","Sylhet","Mymensingh","Rajshahi","Rangpur","Chittagong"]				},
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
            colors: ['#ffab00'],
            series: [{"name":"Infected","data":[2.9,7.3,27.6,27.1,17.3,11.2,6.7]}]			});

        // Age Wise infected Distribution
        <?php 
		      $_ageWiseInfectData = array();
		      
		      $_ageWiseInfectData[] = (float)$infectedAge->_0_10;
		      $_ageWiseInfectData[] = (float)$infectedAge->_11_20;
		      $_ageWiseInfectData[] = (float)$infectedAge->_21_30;
		      $_ageWiseInfectData[] = (float)$infectedAge->_31_40;
		      $_ageWiseInfectData[] = (float)$infectedAge->_41_50;
		      $_ageWiseInfectData[] = (float)$infectedAge->_51_60;
		      $_ageWiseInfectData[] = (float)$infectedAge->_60_Plus;
		    
		      $_ageWiseInfectData = array('name' => 'Infected', 'data' => $_ageWiseInfectData);
		    
		  ?> 

        Highcharts.chart('death_by_age', {
            chart: {
                type: 'column',
                height: 150
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
                categories: ["0-10","11-20","21-30","31-40","41-50","51-60","60+"]		
            },
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
            series: <?php echo json_encode(array($_ageWiseInfectData)); ?>	

        });


        // Infected by Gender Group
        <?php 
        $_genderWiseInfectData = array();
       
          $_genderWiseInfectData[] = array('name' => 'Male', 'y' => (float)$infectedGender->M);
          $_genderWiseInfectData[] = array('name' => 'Female', 'y' => (float)$infectedGender->F);
     
      ?>
        Highcharts.chart('case_by_gender', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie',
                height: 150
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
            colors: ['#705fc9', '#fb1c52'],
            series: [{
                name: 'Infected',
                colorByPoint: true,
                data: <?php echo json_encode($_genderWiseInfectData); ?>				
            }]
        });

        /* Time Seris Graph */
        Highcharts.chart('time-seris-graph', {
            chart: {
                height: 200
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
                verticalAlign: 'top'
            },

            credits:{
                enabled:false
            },

            xAxis: {
                categories: ["30\/05\/2020","31\/05\/2020","01\/06\/2020","02\/06\/2020","03\/06\/2020","04\/06\/2020","05\/06\/2020","06\/06\/2020","07\/06\/2020","08\/06\/2020","09\/06\/2020","10\/06\/2020","11\/06\/2020","12\/06\/2020","13\/06\/2020","14\/06\/2020","15\/06\/2020","16\/06\/2020","17\/06\/2020","18\/06\/2020","19\/06\/2020","20\/06\/2020","21\/06\/2020","22\/06\/2020","23\/06\/2020","24\/06\/2020","25\/06\/2020","26\/06\/2020","27\/06\/2020","28\/06\/2020","29\/06\/2020","30\/06\/2020","01\/07\/2020","02\/07\/2020","03\/07\/2020","04\/07\/2020","05\/07\/2020","06\/07\/2020","07\/07\/2020","08\/07\/2020","09\/07\/2020","10\/07\/2020","11\/07\/2020","12\/07\/2020","13\/07\/2020","14\/07\/2020","15\/07\/2020","16\/07\/2020","17\/07\/2020","18\/07\/2020","19\/07\/2020","20\/07\/2020","21\/07\/2020","22\/07\/2020","23\/07\/2020","24\/07\/2020","25\/07\/2020","26\/07\/2020","27\/07\/2020","28\/07\/2020","29\/07\/2020","30\/07\/2020","31\/07\/2020","01\/08\/2020","02\/08\/2020","03\/08\/2020","04\/08\/2020","05\/08\/2020"]				},

            yAxis: {
                title: {
                    text: ''
                },
                labels: {
                    //enabled: false,
                    formatter: function() {
                        return this.value;
                    }
                }
            },

            plotOptions: {
                series: {
                    fillOpacity:0,
                    dataLabels:{
                        enabled:false,
                        color: 'black',
                        formatter:function() {
                            //var pcnt = (this.y / dataSum) * 100;
                            return Highcharts.numberFormat(this.y);
                        }
                    }
                }
            },

            colors: ['#ffab00', '#38cb89', '#ef4b4b', '#5323a7'],

            series: [{"type":"area","name":"INFECTED","data":[1764,2545,2381,2911,2695,2423,2828,2635,2743,2735,3171,3190,3187,3471,2856,3141,3099,3862,4008,3803,3243,3240,3531,3480,3412,3462,3946,3868,3504,3809,4014,3682,3775,4019,3114,3288,2738,3201,3027,3489,3360,2949,2686,2666,3099,3163,3533,2733,3034,2709,2459,2928,3057,2744,2856,2548,2520,2275,2772,2960,3009,2695,2772,2199,886,1356,1918,2654],"marker":{"symbol":"circle"}},{"type":"area","name":"RECOVERED","data":[360,406,816,523,470,571,643,521,578,657,777,563,848,502,578,903,3099,2237,1925,1975,2781,1048,1084,1678,880,2031,1829,1638,1185,1409,2053,1844,2484,4334,1606,2673,1904,3524,1953,2736,3706,1862,1628,5580,4703,4910,1796,1940,1762,1373,1546,1914,1841,1850,2006,1768,1114,1792,1801,1731,2878,2668,2176,1117,586,1066,1955,1890],"marker":{"symbol":"circle"}},{"type":"area","name":"DEATH","data":[28,40,22,37,37,35,30,35,42,42,45,37,37,46,44,32,38,53,43,38,45,37,39,38,43,37,39,40,34,43,45,64,41,38,42,29,55,44,55,46,41,37,30,47,39,33,33,39,51,34,37,50,41,42,50,35,38,54,37,35,35,48,28,21,22,30,50,33],"marker":{"symbol":"circle"}},{"type":"area","name":"TEST","data":[9987,11876,11439,12704,12510,12698,14088,12486,13136,12988,14664,15965,15772,15990,16638,14505,15038,17214,17527,16259,15045,14031,15585,15555,16292,16433,17999,18498,15157,18099,17837,18426,17875,18362,14650,14727,13988,14245,13173,15672,15632,13488,11193,11059,12423,13453,14002,12889,13460,10923,10625,13362,12898,12050,12398,12027,10446,10078,12859,12714,14127,12937,12614,8802,3684,4249,7712,11160],"marker":{"symbol":"circle"}}]			});
    </script>
@endpush
