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
                                                <h3 class="card-title"><span class="fs-12">Confirmed Cases % Per LAC</span></h3>
                                                <div class="card-options"> <a href="{{route('iedcr.per-lac-infect',request()->input())}}"><i class="fa fa-download text-danger"></i></a> </div>
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
                                                <div class="card-options"> <a href="{{route('iedcr.generate-agegroup-excel',request()->input())}}"><i class="fa fa-download text-danger"></i></a> </div>
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
                                        <div class="card-options"> <a href="{{route('iedcr.generate-series-excel',request()->input())}}"><i class="fa fa-download text-danger"></i></a> </div>
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
                            <div class="col-auto"><span class="colorinput-color" style="background-color:#F69475"></span><span class="group-color-label text-ash p-1">0-5</span></div>
                            <div class="col-auto"><span class="colorinput-color" style="background-color:#F37366"></span><span class="group-color-label text-ash p-1">6-10</span></div>
                            <div class="col-auto"><span class="colorinput-color" style="background-color:#E5515D"></span><span class="group-color-label text-ash p-1">11-50</span></div>
                            <div class="col-auto"><span class="colorinput-color" style="background-color:#CD3E52"></span><span class="group-color-label text-ash p-1">51-100</span></div>
                            <div class="col-auto"><span class="colorinput-color" style="background-color:#BC2B4C"></span><span class="group-color-label text-ash p-1">101-500</span></div>
                            <div class="col-auto"><span class="colorinput-color" style="background-color:#ed2355"></span><span class="group-color-label text-ash p-1">501-1000</span></div>
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

        <?php 
        $div_name = $div_data = array();
        
        foreach($ininfectedPopulation as $row){
          
              $div_name[] = $row->Division;
              $div_data[] = (float)$row->Cases_Per_Lac;
          
        }
        
        $div_data = array('name' => 'Infected', 'data' => $div_data);
        
      ?>
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
               categories: <?php echo json_encode($div_name); ?>					},
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
            series: <?php echo json_encode(array($div_data)); ?>			

           });

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

        <?php 

	      $date_arr = $infected_arr =  array();

	      foreach($ininfectedTrend as $row){
	        
	          $date_arr[] = date('d\/m\/Y', strtotime($row->Date));
	          $infected_arr[] = $row->infected_count;
	      }
	        $infected = implode(",", $infected_arr);
	       

	    ?>
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
                categories: <?php echo json_encode($date_arr);?>

            },

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

            series: [{"type":"area","name":"INFECTED","data":[<?php echo $infected;?>],"marker":{"symbol":"circle"}}]			});
    </script>
    <script type="text/javascript">
    // Map JS Data
        $(document).ready(function(){
            
            <?php
            $_colorCodes = array( '5' => '#FCAA94', '10' => '#F69475', '50' => '#F37366', '100' => '#E5515D', '500' => '#CD3E52', '1000' => '#ed2355');
            $_existDataGroups = array();
            foreach($ininfectedMap as $_mobInDistrictVal){

        	$str=$_mobInDistrictVal->ExtractString;
            if(substr($_mobInDistrictVal->ExtractString,0,3)=='Cox'){
            	$str='Cox';
            }elseif ($_mobInDistrictVal->District=='Narail') {
            	$str='Narail';
            }elseif ($_mobInDistrictVal->District=='Rangamati') {
            	$str='Rangamati';
            }	
            
            $_groupColorCode = NULL;
            foreach($_colorCodes as $_colorRange => $_colorCode){
                if((int)$_mobInDistrictVal->Infected <= $_colorRange){
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
