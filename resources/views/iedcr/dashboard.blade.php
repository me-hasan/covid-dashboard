@extends('iedcr.default')

@section('content')
<style type="text/css">
  
.top-cards .col-xl-2{padding-right: 0.35rem; padding-left: 0.35rem; max-width: 12.5%;}
.top-cards .col-xl-2 p,
.top-cards .col-xl-2 small{ font-size: 10px;}
.side-menu__item{padding: 2.5px 10px 3px 5px;}
.card-body {padding: .75rem .75rem;}

.header .form-inline .form-control.header-search { width: 150px;}
.header .panel .dropdown-menu[x-placement^="bottom"]{ top: 0px !important;}
.header .panel .form-control[name^="from_date"],
.header .panel .form-control[name^="to_date"]{ width: 165px;}

.fa-download:before,
.fa-table:before{font-size: 22px; font-weight: normal;}

#case_analysis_dtable_wrapper .row:first-child {display: none;}
#case_analysis_dtable_paginate {float: right;}
.card-body .table-responsive{overflow-x: hidden;}

.risk-zone-analysis .top-zone .card,
.risk-zone-analysis .last-zone-status .card{ background-color: #e7e7e7;}

.text-ash{ color: #989898;}

.bg-before-none::before{ background-color: transparent;}

.cart-height-customize{ min-height: 1rem !important;}

#color-group .colorinput-color{ width: 1rem; height: 1rem;}

#color-group .group-color-label{position: relative; top: -3px; font-size: 12px;}

.dataTable thead th{ text-transform: capitalize !important;}


</style>
<!-- Row-1 -->
<?php
  $sd_1=$sd_2=$sd_3= $sd_4=$sd_5=$sd_6=$sd_7=$sd_8='';
  $ss_1=$ss_2=$ss_3= $ss_4=$ss_5=$ss_6=$ss_7=$ss_8='';

  foreach ($data_source_description as  $row) {
    if($row->component_name=='Nationwide Summary Data'){
        $sd_1=$row->description;
        $ss_1=$row->source;
    }elseif ($row->component_name=='Population Wise Infection rate'){
        $sd_2=$row->description;
        $ss_2=$row->source;
    }elseif ($row->component_name=='Confirmed Cases % by Age Group'){
        $sd_3=$row->description;
        $ss_3=$row->source;
    }elseif ($row->component_name=='Cases by Gender'){
        $sd_4=$row->description;
        $ss_4=$row->source;
    }elseif ($row->component_name=='Avarage Delay Time'){
        $sd_5=$row->description;
        $ss_5=$row->source;
    }elseif ($row->component_name=='Confirmed +ve Death % by Age Group'){
        $sd_6=$row->description;
        $ss_6=$row->source;
    }elseif ($row->component_name=='Death by Gender'){
        $sd_7=$row->description;
        $ss_7=$row->source;
    }elseif ($row->component_name=='Time Series'){
        $sd_8=$row->description;
        $ss_8=$row->source;
    }
  }
?>
<div class="row top-cards">
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
              <div class="card-body">
                <p class=" mb-1 ">Infected (24 hours)</p>
                <h4 class="mb-1 number-font">{{ number_format($hda_card->infected_24_hr) }}</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-warning">{{ round($hda_card->infected_24_hr_change) }}%</span> </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
              <div class="card-body">
                <p class=" mb-1 ">Total Infected</p>
                <h4 class="mb-1 number-font">{{ number_format($hda_card->intefted_total) }}</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-warning">{{ round($hda_card->infected_total_change) }}%</span> </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
              <div class="card-body">
                <p class=" mb-1 ">Recoverd (24 hours)</p>
                <h4 class="mb-1 number-font">{{ number_format($hda_card->recovered_24_hr) }}</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-success">{{ round($hda_card->recovered_24_hr_change) }}%</span> </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
              <div class="card-body">
                <p class=" mb-1">Total Recoverd</p>
                <h4 class="mb-1 number-font">{{ number_format($hda_card->recovered_total) }}</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-success">{{ round($hda_card->recovered_total_change) }}%</span> </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
              <div class="card-body">
                <p class=" mb-1 ">Death (24 hours)</p>
                <h4 class="mb-1 number-font">{{ number_format($hda_card->death_24_hr) }}</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-danger">{{ round($hda_card->death_24_hr_change) }}%</span> </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
              <div class="card-body">
                <p class=" mb-1">Total Death</p>
                <h4 class="mb-1 number-font">{{ number_format($hda_card->death_total) }}</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-danger">{{ round($hda_card->death_total_change) }}%</span> </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
              <div class="card-body">
                <p class=" mb-1 ">Test (24 hours)</p>
                <h4 class="mb-1 number-font">{{ number_format($hda_card->test_24_hr) }}</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-info">{{ round($hda_card->test_24_hr_change) }}%</span> </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
              <div class="card-body">
                <p class=" mb-1">Total Test</p>
                <h4 class="mb-1 number-font">{{ number_format($hda_card->test_total) }}</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-success">{{ round($hda_card->test_total_change) }}%</span> </div>
            </div>
          </div>
        </div>
        <!-- End Row-1 --> 
        
        <!-- Row-2 -->
        <div class="row">
          <div class="col-xl-8 col-lg-8 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nationwide Summary Data</h3>
                <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="case_analysis_dtable" class="table table-striped table-bordered text-nowrap">
                    <thead>
                      <tr>
                        <th class="border-bottom-0">Division</th>
                        <th class="border-bottom-0">District</th>
                        <th class="border-bottom-0">Total Infected</th>
                        <th class="border-bottom-0">Total Recovered</th>
                        <th class="border-bottom-0">Active Case</th>
                        <th class="border-bottom-0">Total Death</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($hda_nationwide_summary_data as $row)
                      <tr>
                        <td>{{ $row->division }}</td>
                        <td>{{ $row->district }}</td>
                        <td>{{ ($row->total_infected == NULL)?'-':$row->total_infected }}</td>
                        <td>{{ ($row->total_recovered == NULL)?'-':$row->total_recovered }}</td>
                        <td>{{ ($row->active_case == NULL)?'-':$row->active_case }}</td>
                        <td>{{ ($row->total_death == NULL)?'-':$row->total_death }}</td>
                      </tr>
                    @endforeach  
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-xl-8 col-lg-6 col-md-6 col-xm-12">
                  <div class="card-body">
                    <h5 class="card-title">Short Description: </h5>
                    <p class="card-text">{{$sd_1}} </p>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                  <div class="card-body">
                    <h5 class="card-title">Data Source</h5>
                    <p class="card-text">{{$ss_1}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Population Wise Infection rate</h3>
                <div class="card-options"> <i class="fa fa-table mr-2 text-success"></i> <i class="fa fa-download text-danger"></i> </div>
              </div>
              <div class="card-body">
                <div id="population-wise-infection"></div>
                <div class="row">
                  <div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
                    <div class="card-body">
                      <h5 class="card-title">Short Description: </h5>
                      <p class="card-text">{{$sd_2}} </p>
                    </div>
                  </div>
                  <div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
                    <div class="card-body">
                      <h5 class="card-title">Data Source</h5>
                      <p class="card-text">{{$ss_2}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Row-2 --> 
        
        <!-- Row-3 -->
        <div class="row">
          <div class="col-xl-8 col-md-12">
            <div class="row">
              <div class="col-xl-6 col-md-12">
                <div class="card">
                  <div class="card-header cart-height-customize">
                    <h3 class="card-title">Confirmed Cases % by Age Group </h3>
                    <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                  </div>
                  <div class="card-body">
                    <div id="case_by_age"></div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header cart-height-customize">
                    <h3 class="card-title">Confirmed +ve Death % by Age Group</h3>
                    <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                  </div>
                  <div class="card-body">
                    <div id="death_by_age"></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-md-12">
                <div class="card">
                  <div class="card-header cart-height-customize">
                    <h3 class="card-title">Cases by Gender</h3>
                    <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                  </div>
                  <div class="card-body">
                    <div id="case_by_gender"></div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header cart-height-customize">
                    <h3 class="card-title">Death by Gender</h3>
                    <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                  </div>
                  <div class="card-body">
                    <div id="death_by_gender"></div>
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
                  <!--<i class="fa fa-table mr-2 text-success"></i>--> 
                  <i class="fa fa-download text-danger"></i> </div>
              </div>
              <div class="card-body">
                <div class="card-body mt-6 text-center">
                  <h4 class="gray-600">Sample Collection to Test</h4>
                  <h3 class="text-success">{{$hda_average_delay_time->sample_collection_test}}</h3>
                </div>
                <hr />
                <div class="card-body mb-7 text-center">
                  <h4>Test to Result</h4>
                  <h3 class="text-success">{{$hda_average_delay_time->test_to_result}}</h3>
                </div>
                <div class="card-body">
                  <div class="card-body">
                    <h5 class="card-title">Data Source</h5>
                    <p class="card-text">{{$ss_5}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Row-3 --> 
        
        <!-- Row-4 -->
        <div class="row">
          <div class="col-xl-12 col-md-12">
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
        <!-- End Row-4 --> 

<?php 
        $_populationGenderData = array();
        foreach($hda_population_wise_infected as $_rowKey => $_rowData){
          //if($_rowKey == 0 || ((count($_populationWiseCaseDataSet)-1) == $_rowKey) || ((count($_populationWiseCaseDataSet)-2) == $_rowKey)) continue;
          $_populationGenderData[] = array('name' => $_rowData->division, 'y' => ($_rowData->percent_infected*1)  );
          
        }
//print_r($_populationGenderData);
      ?>
      
        
@endsection

@section('scripts')

<script type="text/javascript">
	/* Population Wise Infection */
				/*Highcharts.setOptions({
		colors: ['#01BAF2', '#71BF45', '#FAA74B']
	});*/


	Highcharts.chart('population-wise-infection', {
		chart: {
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie'
		},
		title: {
			text: '',
			y:0
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
		plotOptions: {
			pie: {
			allowPointSelect: true,
			cursor: 'pointer',
			dataLabels: {
				enabled: false,
				formatter:function(){
				return this.key+ ': ' + this.y + '%';
				}
			},
			showInLegend: true
			}
		},
		series: [{
			name: 'Infected',
			colorByPoint: true,
			innerSize: '70%',
			
	    data: <?php echo json_encode($_populationGenderData); ?>
      }]
  });
	
	// Age Wise Infected Distribution

  <?php 
      $_ageWiseInfectCategories = $_ageWiseInfectData = array();
      
      foreach($hda_age_wise_infected_distribution as $_rowKey => $_rowData){
        
            $_ageWiseInfectCategories[] = $_rowData->age_range;
            $_ageWiseInfectData[] = (float)$_rowData->infected_percent;
      }
      $_ageWiseInfectData = array('name' => 'Infected', 'data' => $_ageWiseInfectData);
    
  ?>    
  Highcharts.chart('case_by_age', {
		chart: {
			type: 'column',
			height: 200
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
			//categories: ["0-10","11-20","21-30","31-40","41-50","51-60","60+"]	
      categories: <?php echo json_encode($_ageWiseInfectCategories); ?>			
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
		colors: ['#ffab00'],
    series: <?php echo json_encode(array($_ageWiseInfectData)); ?>		

  });

	// Age Wise Death Distribution

      <?php 
        $_ageWiseDeathCategories = $_ageWiseDeathData = array();
        
        foreach($hda_age_wise_death_distribution as $_rowKey => $_rowData){
          // if($_rowKey == 0) continue;
          // foreach($_rowData as  $_key => $_columnData){
          //   if($_key == 1){
              $_ageWiseDeathCategories[] = $_rowData->age_range;
            //}elseif($_key == 3){
              $_ageWiseDeathData[] = (float)$_rowData->death_percent;
          //   }
          // }
        }
        
        $_ageWiseDeathData = array('name' => 'Death', 'data' => $_ageWiseDeathData);
        
      ?>

				Highcharts.chart('death_by_age', {
		chart: {
			type: 'column',
			height: 200
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
			categories: <?php echo json_encode($_ageWiseDeathCategories); ?>		
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
		series: <?php echo json_encode(array($_ageWiseDeathData)); ?>		
  });
	
  // Infected by Gender Group
      <?php 
        $_genderWiseInfectData = array();
        
        //foreach($hda_gender_wise_infect_distribution as $_rowKey => $_rowData){
          // if($_rowKey == 0) continue;
          // foreach($_rowData as  $_key => $_columnData){
          //   if($_key == 1){
              $_genderWiseInfectData[] = array('name' => 'Male', 'y' => (float)$hda_gender_wise_infect_distribution->male_percent);
            //}elseif($_key == 2){
              $_genderWiseInfectData[] = array('name' => 'Female', 'y' => (float)$hda_gender_wise_infect_distribution->female_percent);
          //   }
          // }
        //}
      ?>
		Highcharts.chart('case_by_gender', {
		chart: {
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie',
			height: 200
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
	
	// Death by Gender Group
    <?php 
      $_genderWiseDeathCategories = $_genderWiseDeathData = array();
      
      //foreach($_genderWiseDeathDataSet as $_rowKey => $_rowData){
        // if($_rowKey == 0) continue;
        // foreach($_rowData as  $_key => $_columnData){
        //   if($_key == 3){
            $_genderWiseDeathData[] = array('name' => 'Male', 'y' => (float)$hda_gender_wise_death_distribution->male_percent);
          //}elseif($_key == 5){
            $_genderWiseDeathData[] = array('name' => 'Female', 'y' => (float)$hda_gender_wise_death_distribution->female_percent);
        //   }
        // }
      //}
      
      ?>
				Highcharts.chart('death_by_gender', {
		chart: {
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie',
			height: 200
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
			data: <?php echo json_encode($_genderWiseDeathData); ?>	
    }]
	});
	
	/* Time Seris Graph */

    <?php 

      $date_arr = $infected_arr = $recovered_arr = $death_arr = $test_arr = array();

      foreach($hda_time_series as $row){
        
          $date_arr[] = date('d\/m\/Y', strtotime($row->date));
          $infected_arr[] = $row->infected;
          $recovered_arr[] = $row->recovered;
          $death_arr[] = $row->death;
          $test_arr[] = $row->test;
       
      }

        //$date = date('d\/m\/Y', strtotime($row->date));
        $infected = implode(",", $infected_arr);
        $recovered = implode(",", $recovered_arr);
        $death = implode(",", $death_arr);
        $test = implode(",", $test_arr);

    ?>

	Highcharts.chart('time-seris-graph', {
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
			//categories: ["30\/05\/2020","31\/05\/2020","01\/06\/2020","02\/06\/2020","03\/06\/2020","04\/06\/2020","05\/06\/2020","06\/06\/2020","07\/06\/2020","08\/06\/2020","09\/06\/2020","10\/06\/2020","11\/06\/2020","12\/06\/2020","13\/06\/2020","14\/06\/2020","15\/06\/2020","16\/06\/2020","17\/06\/2020","18\/06\/2020","19\/06\/2020","20\/06\/2020","21\/06\/2020","22\/06\/2020","23\/06\/2020","24\/06\/2020","25\/06\/2020","26\/06\/2020","27\/06\/2020","28\/06\/2020","29\/06\/2020","30\/06\/2020","01\/07\/2020","02\/07\/2020","03\/07\/2020","04\/07\/2020","05\/07\/2020","06\/07\/2020","07\/07\/2020","08\/07\/2020","09\/07\/2020","10\/07\/2020","11\/07\/2020","12\/07\/2020","13\/07\/2020","14\/07\/2020","15\/07\/2020","16\/07\/2020","17\/07\/2020","18\/07\/2020","19\/07\/2020","20\/07\/2020","21\/07\/2020","22\/07\/2020","23\/07\/2020","24\/07\/2020","25\/07\/2020","26\/07\/2020","27\/07\/2020","28\/07\/2020","29\/07\/2020","30\/07\/2020","31\/07\/2020","01\/08\/2020","02\/08\/2020","03\/08\/2020","04\/08\/2020","05\/08\/2020"]			
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
		
		series: [{"type":"area","name":"INFECTED","data":[<?php echo $infected;?>],"marker":{"symbol":"circle"}},{"type":"area","name":"RECOVERED","data":[<?php echo $recovered;?>],"marker":{"symbol":"circle"}},{"type":"area","name":"DEATH","data":[<?php echo $death;?>],"marker":{"symbol":"circle"}},{"type":"area","name":"TEST","data":[<?php echo $test;?>],"marker":{"symbol":"circle"}}]			});
</script>

@endsection