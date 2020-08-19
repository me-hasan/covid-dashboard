@extends('iedcr.default')
@section('bread_crumb_active','Test Positivity Analysis')
@section('content')

  <?php
    ini_set('error_reporting', 0);
    $sd_1=$sd_2=$sd_3='';
    $ss_1=$ss_2=$ss_3='';
    $_currentStatusData = $_zoneInformationDataSet = $_dataTableLabels = $_changeStatusDataSet = $_genderWiseDeathDataSet = $_timeSeriesDataSet = $_genderWiseInfectDataSet = $_averageDelayTimeDataSet = NULL;
    $tpr_national_testpositivity_trend = \Illuminate\Support\Facades\DB::table('tpr_national_testpositivity_trend')->get();
    $tpr_today = \Illuminate\Support\Facades\DB::table('tpr_today')->orderBy('id', 'DESC')->first();
    $tpr_average = \Illuminate\Support\Facades\DB::table('tpr_average')->orderBy('id', 'DESC')->first();
    $tpr_data = \Illuminate\Support\Facades\DB::table('tpr_data')
                ->where('date', DB::raw("(select max(date) from tpr_data)"))
                ->orderBy('id', 'ASC')->get();
    

    $data_source_description = \Illuminate\Support\Facades\DB::table('data_source_description')->where('page_name','iedcr-test-positivity-analysis')->get();
    foreach ($data_source_description as $row) {
        if($row->component_name=='Test Positivity Rate'){
            $sd_1=$row->description;
            $ss_1=$row->source;
        }elseif ($row->component_name=='Geo Location Wise Test Positivity Rate​'){
            $sd_2=$row->description;
            $ss_2=$row->source;
        }elseif ($row->component_name=='Test Positivity for Asymptomatic Patients'){
            $sd_3=$row->description;
            $ss_3=$row->source;
        }
    }


?>

   <!-- Row-1 -->
        <div class="row">
          <div class="col-xl-8 col-lg-8 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Test Positivity Rate</h3>
                <div class="card-options"> <i class="fa fa-table mr-2 text-success"></i> <i class="fa fa-download text-danger"></i> </div>
              </div>
              <div class="card-body">
                <div id="test-positivity-trend"></div>
              </div>
              <div class="row mt-4">
                <div class="col-xl-8 col-lg-6 col-md-6 col-xm-12">
                  <div class="card-body">
                    <h5 class="card-title">Short Description</h5>
                    <p class="card-text">{{ $sd_1 }}</p>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                  <div class="card-body">
                    <h5 class="card-title">Data Source</h5>
                    <p class="card-text">{{ $ss_1 }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="card">
              <div class="card-header border-0 pb-0 pt-0 bg-before-none">
                <div class="card-options"> <i class="fa fa-table mr-2 text-success"></i> <i class="fa fa-download text-danger"></i> </div>
              </div>
              <div class="card-body">
                <div class="card-body text-center">
                  <h4 class="text-ash">Today’s Test Positivity Rate</h4>
                  <h2 class="text-success">{{ number_format($tpr_today->test_positivity_rate, 2, '.', '')  }}%</h2>
                </div>
                <div class="card-body text-center border-0">
                  <h4 class="text-ash">Number of Performed Tests</h4>
                  <h2 class="text-success">{{ $tpr_today->total_tests }}</h2>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header border-0 pb-0 pt-0 bg-before-none">
                <div class="card-options"> <i class="fa fa-table mr-2 text-success"></i> <i class="fa fa-download text-danger"></i> </div>
              </div>
              <div class="card-body">
                <div class="card-body text-center">
                  <h4 class="text-ash">Average Test Positivity Rate</h4>
                  <h2 class="text-success">{{ number_format($tpr_average->avg_positivity_rate, 2, '.', '')  }}%</h2>
                </div>
                <div class="card-body text-center border-0">
                  <h4 class="text-ash">Average # of Performed Tests</h4>
                  <h2 class="text-success">{{ $tpr_average->avg_total_test }}</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Row-1 --> 
        
        <!-- Row-2 -->
        <div class="row">
          <div class="col-xl-12 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Geo Location Wise Test Positivity Rate​</h3>
                <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
              </div>
              <div class="card-body">
                <div class="row mt-4">
                  <div class="col-lg-4"> 
                       @include('iedcr.bd-map-html')
                  </div>
                  <div class="col-lg-8">
                    <div class="expanel expanel-default">
                      <div class="card-body p-0">
                        <div class="table-responsive">
                          <table id="case_analysis_dtable" class="table table-striped table-bordered text-nowrap">
                            <thead>
                              <tr>
                                <th class="border-bottom-0">District</th>
                                <th class="border-bottom-0">Date</th>
                                <th class="border-bottom-0">Total</th>
                                <th class="border-bottom-0">Positive</th>
                                <th class="border-bottom-0">Test Positivity</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach($tpr_data as $row){  ?>
                                            
                                  <tr>
                                      <td>{{$row->district}}</td>
                                      <td>-</td>
                                      <td>{{$row->total}}</td>
                                      <td>{{$row->positive}}</td>
                                      <td>{{ number_format($row->test_positivity,2) }}</td>
                                  </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-4 mb-2">
                  <div class="col-xl-12 col-md-12 ml-4">
                    <div id="color-group"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Row-2 --> 
        
        <!-- Row-3 -->
        <div class="row">
          <div class="col-xl-12 col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="row mt-4">
                  <div class="col-xl-9 col-lg-6 col-md-6 col-xm-12">
                    <div class="card-body">
                      <h5 class="card-title">Short Description</h5>
                      <p class="card-text">{{ $sd_2 }}</p>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                    <div class="card-body">
                      <h5 class="card-title">Data Source</h5>
                      <p class="card-text">{{ $ss_2 }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Row-3 --> 
        
        <!-- Row-4 -->
        <div class="row">
          <div class="col-xl-8 col-lg-8 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Test Positivity for Asymptomatic Patients</h3>
                <div class="card-options"> <i class="fa fa-table mr-2 text-success"></i> <i class="fa fa-download text-danger"></i> </div>
              </div>
              <div class="card-body">
                <div id="time-series-trend"></div>
              </div>
              <div class="row mt-4">
                <div class="col-xl-8 col-lg-6 col-md-6 col-xm-12">
                  <div class="card-body">
                    <h5 class="card-title">Short Description</h5>
                    <p class="card-text">{{ $sd_3 }}</p>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                  <div class="card-body">
                    <h5 class="card-title">Data Source</h5>
                    <p class="card-text">{{ $ss_3 }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="card">
              <div class="card-header border-0 pb-0 pt-0 bg-before-none">
                <h3 class="card-title text-ash" style="font-size: 12px;">Data Date: {{ \Carbon\Carbon::parse($tpr_today->date)->format('d/m/Y')}} </h3>
                <div class="card-options"> <i class="fa fa-table mr-2 text-success"></i> <i class="fa fa-download text-danger"></i> </div>
              </div>
              <div class="card-body">
                <div class="card-body text-center">
                  <h4 class="text-ash">Today’s Test Positivity Rate</h4>
                  <h2 class="text-success">{{$tpr_today->test_positivity_rate}}%</h2>
                </div>
                <div class="card-body text-center border-0">
                  <h4 class="text-ash">Number of Performed Tests</h4>
                  <h2 class="text-success">{{$tpr_today->total_tests}}</h2>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header border-0 pb-0 pt-0 bg-before-none">
                <h3 class="card-title text-ash" style="font-size: 12px;">Data Date: {{ \Carbon\Carbon::parse($tpr_average->from_date)->format('d/m/Y')}} - {{ \Carbon\Carbon::parse($tpr_average->till_date)->format('d/m/Y')}} </h3>
                <div class="card-options"> <i class="fa fa-table mr-2 text-success"></i> <i class="fa fa-download text-danger"></i> </div>
              </div>
              <div class="card-body">
                <div class="card-body text-center">
                  <h4 class="text-ash">Average Test Positivity Rate</h4>
                  <h2 class="text-success">{{ number_format($tpr_average->avg_positivity_rate, 2, '.', '')  }}%</h2>
                </div>
                <div class="card-body text-center border-0">
                  <h4 class="text-ash">Average # of Performed Tests</h4>
                  <h2 class="text-success">{{ $tpr_average->avg_total_test }}</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Row-4 --> 
    <!-- End Row-3 -->
@endsection

@section('scripts')

    <script type="text/javascript">
        /* Time Seris Graph */
        <?php 

            $date_arr = $tp_arr = array();

            foreach($tpr_national_testpositivity_trend as $row){
                
              $date_arr[] = date('d\/m\/Y', strtotime($row->date));
              $tp_arr[] = number_format($row->test_positivity_rate, 2, '.', '');
            }

            $tp_rate = implode(",", $tp_arr);

        ?>
        Highcharts.chart('test-positivity-trend', {
            chart: {
                height: 330
            },
            title: {
                text: ''
            },

            subtitle: {
                text: ''
            },

            legend: {
                enabled:false,
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
                        return this.value+'%';
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

            colors: ['#ef4b4b'],

            series: [{"type":"area","name":"TEST POSITIVITY RATE","data":[<?php echo $tp_rate;?>],"marker":{"symbol":"circle"}}]
        });

        // Map JS Data
        $(document).ready(function(){
            /* <?php print_r($_districtWiseData); ?> */
            <?php
            $_colorCodes = array( '5' => '#FCAA94', '10' => '#F69475', '30' => '#F37366', '50' => '#E5515D', '75' => '#CD3E52', '100' => '#ed2355');
            $_existDataGroups = array();
            foreach($tpr_data as $row){

                foreach($_colorCodes as $_colorRange => $_colorCode){
                            if($row->test_positivity <= $_colorRange){
                                $_groupColorCode = $_colorCode;
                                $_existDataGroups[$_colorRange] = $_colorCode;
                                break;
                            }
                        }
            
            
            ?>
            $('#<?php echo $row->district; ?> path').attr('fill', '<?php echo $_groupColorCode;?>');
            <?php
            }
            ?>

            /* <?php print_r($_existDataGroups); ?> */
            <?php
            $_groupColorData = NULL;
            $_startData = 0;
            ksort($_existDataGroups);
            foreach($_existDataGroups as $_colorRange => $_colorCode){
                $_groupData.= '<div class="col-auto"><span class="colorinput-color" style="background-color:'.$_colorCode.'"></span><span class="group-color-label text-ash p-1">'.$_startData.'-'.$_colorRange.'</span></div>';
                $_startData = $_colorRange+1;
            }
            ?>
            $('#color-group').append('<div class="row gutters-xs"><?php echo $_groupData; ?></div>');
        });


      Highcharts.chart('time-series-trend', {
        chart: {
          height: 330
        },
        title: {
          text: ''
        },

        subtitle: {
          text: ''
        },
        
        legend: {
          enabled:false,
          layout: 'horizontal',
          align: 'center',
          verticalAlign: 'top'
        },
        
        credits:{
          enabled:false
        },
        
        xAxis: {
          categories: ["21\/07\/2020","22\/07\/2020","23\/07\/2020","24\/07\/2020","25\/07\/2020","26\/07\/2020","27\/07\/2020","28\/07\/2020","29\/07\/2020","30\/07\/2020","31\/07\/2020","01\/08\/2020","02\/08\/2020","03\/08\/2020","04\/08\/2020","05\/08\/2020","06\/08\/2020","07\/08\/2020","08\/08\/2020","09\/08\/2020"]       },
        
        yAxis: {
          title: {
            text: ''
          },
          labels: {
            //enabled: false,
            formatter: function() {
               return this.value+'%';
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
        
        colors: ['#ef4b4b'],
        
        series: [{"type":"area","name":"Test Positivity Rate","data":[5.6,4.3,12.21,7.83,5.36,4.65,5.17,4.58,3.66,4.9,4.88,3.7,5.03,4.22,2.49,2.77,2.18,2,2.33,1.8],"marker":{"symbol":"circle"}}]    

    });
    </script>
@endsection
