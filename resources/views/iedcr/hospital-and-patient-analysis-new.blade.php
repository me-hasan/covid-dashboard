@extends('iedcr.default')
@section('bread_crumb_active','Hospital and Patient Analysis')
@section('content')
    <?php
    ini_set('error_reporting', 0);
    $_hospitalCapacityDataSet = $_deathLocationPercentageDataSet = NULL;
    $_hospitalCapacityDataSet = \Illuminate\Support\Facades\DB::table('hpa_hospital_capacity')->get();
    $_deathLocationPercentageDataLabels = array('Location','Percentage(%)');
    $_deathLocationPercentageDataSet = array();
    $_deathLocInfoData = \Illuminate\Support\Facades\DB::table('hpa_death_location_percent')->get();
    if(count($_deathLocInfoData)) {
        foreach ($_deathLocInfoData as $key=>$_deathInfo){
            $_deathLocationPercentageDataSet[$key+1][0] = $_deathInfo->location;
            $_deathLocationPercentageDataSet[$key+1][1] = $_deathInfo->percentage;
        }
    }

      $sd_1=$sd_2=$sd_3= $sd_4='';
      $ss_1=$ss_2=$ss_3= $ss_4='';
      $data_source_description = \Illuminate\Support\Facades\DB::table('data_source_description')->where('page_name','iedcr-hospital-and-patient-analysis')->get();
      foreach ($data_source_description as  $row) {
        if($row->component_name=='Hospital Wise Capacity Data'){
            $sd_1=$row->description;
            $ss_1=$row->source;
        }elseif ($row->component_name=='Death Location Percentage'){
            $sd_2=$row->description;
            $ss_2=$row->source;
        }elseif ($row->component_name=='Patient Comorbidity Analysis'){
            $sd_3=$row->description;
            $ss_3=$row->source;
        }elseif ($row->component_name=='Patient Risk Level'){
            $sd_4=$row->description;
            $ss_4=$row->source;
        }
      }

    ?>
        <!-- Top Row -->
        <div class="row">
          <div class="col-xl-8 col-lg-8 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Hospital Wise Capacity Data</h3>
                <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="case_analysis_dtable" class="table table-striped table-bordered text-nowrap">
                    <thead>
                      <tr>
                        <th class="border-bottom-0">Facility Name</th>
                        <th class="border-bottom-0">General Bed</th>
                        <th class="border-bottom-0">Usable ICU Bed</th>
                        <th class="border-bottom-0">Ventilator</th>
                        <th class="border-bottom-0">General Bed</th>
                        <th class="border-bottom-0">ICU Bed</th>
                        <th class="border-bottom-0">Admitted Patient Last 24 Hours</th>
                        <th class="border-bottom-0">Released Patient Last 24 Hours</th>
                        <th class="border-bottom-0">Oxygen Cylinder #</th>
                        <th class="border-bottom-0">High flow nasal cannula #</th>
                        <th class="border-bottom-0">Oxygen Concentrator #</th>
                        <th class="border-bottom-0">Central Oxygen Line</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($_hospitalCapacityDataSet as $_hospitalCapacityData)
                      <tr>
                        <td>{!! $_hospitalCapacityData->facility_name !!}</td>
                        <td>{!! $_hospitalCapacityData->general_bed !!}</td>
                        <td>{!! $_hospitalCapacityData->usable_ICU_bed !!}</td>
                        <td>{!! $_hospitalCapacityData->ventilator !!}</td>
                        <td>{!! $_hospitalCapacityData->general_bed_2 !!}</td>
                        <td>{!! $_hospitalCapacityData->ICU_bed !!}</td>
                        <td>{!! $_hospitalCapacityData->admitted_patient_last_24 !!}</td>
                        <td>{!! $_hospitalCapacityData->released_patient_last_24 !!}</td>
                        <td>{!! $_hospitalCapacityData->oxygen_cylinder !!}</td>
                        <td>{!! $_hospitalCapacityData->high_flow_nasal_cannula !!}</td>
                        <td>{!! $_hospitalCapacityData->oxygen_concentrator !!}</td>
                        <td>{!! $_hospitalCapacityData->central_oxygen_line !!}</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-xl-8 col-lg-6 col-md-6 col-xm-12">
                  <div class="card-body">
                    <h5 class="card-title">Short Description</h5>
                    <p class="card-text">Due to many data columns you need click on the data row to see all data.</p>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                  <div class="card-body">
                    <h5 class="card-title">Data Source</h5>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Death Location Percentage</h3>
                <div class="card-options"> <i class="fa fa-table mr-2 text-success"></i> <i class="fa fa-download text-danger"></i> </div>
              </div>
              <div class="card-body">
                <div id="death-location-percentage"></div>
                <div class="row">
                  <div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
                    <div class="card-body">
                      <h5 class="card-title">Short Description</h5>
                      <p class="card-text"></p>
                    </div>
                  </div>
                  <div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
                    <div class="card-body">
                      <h5 class="card-title">Data Source</h5>
                      <p class="card-text">DGHS</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Top Row -->

        <!-- Row-1 -->

        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Patient Comorbidity Analysis</h3>
                <div class="card-options"> <i class="fa fa-table mr-2 text-success"></i> <i class="fa fa-download text-danger"></i> </div>
              </div>
              <div class="card-body"> <img src="{!! asset('assets/images/chart/hospital-and-patient-analysis-1.jpg') !!}" alt="Patient Comorbidity Analysis" /> </div>
            </div>
          </div>
        </div>

        <!-- End Row-1 -->

        <!-- Row-2 -->

        <div class="row">
          <div class="col-xl-12 col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="row mt-4">
                  <div class="col-xl-9 col-lg-6 col-md-6 col-xm-12">
                    <div class="card-body">
                      <h5 class="card-title">Short Description</h5>
                      <p class="card-text">Short Description text will place here.</p>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                    <div class="card-body">
                      <h5 class="card-title">Data Source</h5>
                      <p class="card-text">Data Source text will place here.</p>
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
          <div class="col-xl-7 col-lg-5 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Patient Risk Level</h3>
                <div class="card-options"> <i class="fa fa-table mr-2 text-success"></i> <i class="fa fa-download text-danger"></i> </div>
              </div>
              <div class="card-body"> <img src="{!! asset('assets/images/chart/hospital-and-patient-analysis-2.jpg') !!}" alt="Patient Risk Level" /> </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-7 col-md-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Short Description</h5>
                <p class="card-text">Short Description text will place here.</p>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Data Source</h5>
                <p class="card-text">Data Source text will place here.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- End Row-3 -->

    <!-- End Row-4 -->

@endsection

@section('scripts')

    <script type="text/javascript">
        /* Death Location Percentage */
        <?php
        $_deathLocationPercentageData = array();
        foreach($_deathLocationPercentageDataSet as $_rowKey => $_rowData){
            if($_rowKey == 0) continue;
            $_deathLocationPercentageData[] = array('name' => $_rowData[0], 'y' => (float)number_format($_rowData[1],2));
        }
        ?>
        Highcharts.chart('death-location-percentage', {
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
                name: 'Death Percentage',
                colorByPoint: true,
                innerSize: '70%',
                data: <?php echo json_encode($_deathLocationPercentageData); ?>
            }]
        });
    </script>

@endsection
