@extends('iedcr.default')
@section('bread_crumb_active','Risk Zone Analysis')
@section('content')
    <?php
    ini_set('error_reporting', 0);
    $_currentStatusData = $_zoneInformationDataSet = $_dataTableLabels = $_changeStatusDataSet = $_genderWiseDeathDataSet = $_timeSeriesDataSet = $_genderWiseInfectDataSet = $_averageDelayTimeDataSet = NULL;
    $_currentStatusData = \Illuminate\Support\Facades\DB::table('rza_current_status')->orderBy('id', 'DESC')->first();
    $_lastZoneStatusData = \Illuminate\Support\Facades\DB::table('rza_current_status')->orderBy('id', 'ASC')->first();
    $_changeStatusDataSet = \Illuminate\Support\Facades\DB::table('rza_change_status')->orderBy('id','DESC')->first();
    $_zoneInformationDataSet = \Illuminate\Support\Facades\DB::table('rza_zone_information')->get();
    $_nationalLevelDataLabels = array('Date','Green Zone','Yellow Zone','Red Zone');
    $_nationalInfoData = \Illuminate\Support\Facades\DB::table('rza_weekly_change')->get();
    $_nationalLevelDataSet = array();
    if(count($_nationalInfoData)) {
        foreach ($_nationalInfoData as $key=>$_nationalInfo){
            $_nationalLevelDataSet[$key+1][0] = $_nationalInfo->date;
            $_nationalLevelDataSet[$key+1][1] = $_nationalInfo->green_zone;
            $_nationalLevelDataSet[$key+1][2] = $_nationalInfo->yellow_zone;
            $_nationalLevelDataSet[$key+1][3] = $_nationalInfo->red_zone;

        }
    }


    ?>
    <!-- Row-1 -->
<div class="row">
    <div class="col-xl-10 col-lg-6 col-md-6 col-xm-12">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Current Zone Status</h3>
                    <div class="card-options">
                        <i class="fa fa-table mr-2 text-success"></i>
                        <i class="fa fa-download text-danger"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row top-zone">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                            <!--<div class="card overflow-hidden dash1-card border-0">
                                <div class="card-body">
                                    <h4 class=" mb-1 ">Red Zone</h4>
                                    <h2 class="mb-1 number-font">10,500</h2>
                                    <small class="fs-12 text-muted">Compared to Week Day</small>
                                    <span class="ratio bg-danger">76%</span>
                                </div>
                            </div>-->
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                            <div class="card overflow-hidden dash1-card border-0">
                                <div class="card-body">
                                    <h5 class="mb-1">Red Zone</h5>
                                    <h2 class="mb-1 number-font">{!! $_currentStatusData->red_zone ?? '' !!}</h2>
                                    <small class="fs-12 text-muted">Compared to Week Day</small>
                                    <span class="ratio bg-danger"><?php echo number_format($_currentStatusData->red_zone_change, 0);?>%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                            <div class="card overflow-hidden dash1-card border-0">
                                <div class="card-body">
                                    <h5 class=" mb-1">Yellow Zone</h5>
                                    <h2 class="mb-1 number-font">{!! $_currentStatusData->yellow_zone ?? '' !!}</h2>
                                    <small class="fs-12 text-muted">Compared to Week Day</small>
                                    <span class="ratio bg-warning">{!! number_format($_currentStatusData->yellow_zone_change, 0) !!}%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                            <div class="card overflow-hidden dash1-card border-0">
                                <div class="card-body">
                                    <h5 class=" mb-1">Green Zone</h5>
                                    <h2 class="mb-1 number-font">{!! $_currentStatusData->green_zone ?? '' !!}</h2>
                                    <small class="fs-12 text-muted">Compared to Week Day</small>
                                    <span class="ratio bg-success">{!! number_format($_currentStatusData->green_zone_change)  !!}%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Row -->
        <div class="row">
            <div class="col-xl-3 col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Last Zone Status</h3>
                        <div class="card-options">
                            <i class="fa fa-download text-danger"></i>
                        </div>
                    </div>
                    <div class="card-body last-zone-status">
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-danger text-center">Red Zone</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Red Zone</h5>
                                        <h2 class="mb-1 number-font">{!! $_lastZoneStatusData->red_zone ?? '' !!} </h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-danger d-none">{!! number_format($_lastZoneStatusData->red_zone_change)  !!}%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
                            <h6 class="text-warning text-center">Yellow Zone</h6>
                            <div class="card overflow-hidden dash1-card border-0">
                                <div class="card-body">
                                    <h5 class=" mb-1">Yellow Zone</h5>
                                    <h2 class="mb-1 number-font">{!! $_lastZoneStatusData->yellow_zone ?? '' !!}</h2>
                                    <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                    <span class="ratio bg-warning d-none">{!! number_format($_lastZoneStatusData->yellow_zone_change)  !!}%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
                            <h6 class="text-success text-center">Green Zone</h6>
                            <div class="card overflow-hidden dash1-card border-0">
                                <div class="card-body">
                                    <h5 class=" mb-1">Green Zone</h5>
                                    <h2 class="mb-1 number-font">{!! $_lastZoneStatusData->green_zone ?? '' !!}</h2>
                                    <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                    <span class="ratio bg-success d-none">{!! number_format($_lastZoneStatusData->green_zone_change)  !!}%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Change Status</h3>
                        <div class="card-options">
                            <i class="fa fa-table mr-2 text-success"></i>
                            <i class="fa fa-download text-danger"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row top-zone">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-danger text-center">Remain in Red zone</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Red Zone</h5>
                                        <h2 class="mb-1 number-font">{!! $_changeStatusDataSet->red_zone_to_red_zone ?? '' !!}</h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-danger d-none">76%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-warning text-center">Converted into Yellow</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Yellow Zone</h5>
                                        <h2 class="mb-1 number-font">{!! $_changeStatusDataSet->yellow_zone_to_red_zone ?? '' !!}</h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-warning d-none">35%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-success text-center">Converted into Green</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Green Zone</h5>
                                        <h2 class="mb-1 number-font">{!! $_changeStatusDataSet->green_zone_to_red_zone ?? '' !!}</h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-success d-none">62%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row top-zone">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-danger text-center">Converted into Red</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Red Zone</h5>
                                        <h2 class="mb-1 number-font">{!! $_changeStatusDataSet->red_zone_to_yellow_zone ?? '' !!}</h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-danger d-none d-none">76%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-warning text-center">Converted into Yellow</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Yellow Zone</h5>
                                        <h2 class="mb-1 number-font">{!! $_changeStatusDataSet->yellow_zone_to_yellow_zone ?? '' !!}</h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-warning d-none">35%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-success text-center">Remain in Green zone</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Green Zone</h5>
                                        <h2 class="mb-1 number-font">{!! $_changeStatusDataSet->green_zone_to_yellow_zone ?? '' !!}</h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-success d-none">62%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row top-zone">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-danger text-center">Converted into Red</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Red Zone</h5>
                                        <h2 class="mb-1 number-font">{!! $_changeStatusDataSet->red_zone_to_green_zone ?? '' !!}</h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-danger d-none">76%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-warning text-center">Converted into Yellow</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Yellow Zone</h5>
                                        <h2 class="mb-1 number-font">{!! $_changeStatusDataSet->yellow_zone_to_green_zone ?? '' !!}</h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-warning d-none">35%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-success text-center">Remain in Green zone</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Green Zone</h5>
                                        <h2 class="mb-1 number-font">{!! $_changeStatusDataSet->green_zone_to_green_zone ?? '' !!}</h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-success d-none">62%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Row -->
    </div>
    <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Source</h3>
            </div>
            <div class="card-body">
                <div class="mb-9 mt-9 pb-5 pt-5">Content is comming soon</div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Short Description</h3>
            </div>
            <div class="card-body">
                <div class="mb-9 mt-9 pb-6 pt-8">Content is comming soon</div>
            </div>
        </div>
    </div>
</div>
<!-- End Row-1 -->

<!-- Row-2 -->
<div class="row">
    <div class="col-xl-5 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Weekly Change</h3>
                <div class="card-options">
                    <i class="fa fa-download text-danger"></i>
                </div>
            </div>
            <div class="card-body">
                <div id="weekly_zone_change"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-7 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Zone Information​</h3>
                <div class="card-options">
                    <i class="fa fa-download text-danger"></i>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="case_analysis_dtable" class="table table-striped table-bordered text-nowrap">
                        <thead>
                        <tr>

                            <th class="border-bottom-0">Zone Name</th>
                            <th class="border-bottom-0">Current Status</th>
                            <th class="border-bottom-0">Last Status</th>
                            <th class="border-bottom-0">No. of Cases(14 Days)</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($_zoneInformationDataSet))
                        @foreach($_zoneInformationDataSet as $zoneData)
                            <tr>
                                <td>{!! $zoneData->zone_name  ?? ' ' !!}</td>
                                <td>{!! $zoneData->current_status  ?? ' ' !!}</td>
                                <td>{!! $zoneData->last_status  ?? ' ' !!}</td>
                                <td>{!! $zoneData->no_of_cases_14_days  ?? ' ' !!}</td>
                            </tr>
                        @endforeach
                            @endif
                        </tbody>
                    </table>
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
            <div class="card-body" id="iframe_riskdata"></div>
        </div>
    </div>
</div>
<!-- End Row-3 -->
@endsection

@section('scripts')

  <script type="text/javascript">

      <?php
      $_seriesLabels = $_testPositvityTrendyDataTemp = $_testPositvityTrendyData = array();

      #print_r($_timeSeriesDataSet);exit;
      /*foreach($_timeSeriesDataLabels as $_labelKey => $_labelText){
          if($_labelKey == 0) continue;
          $_seriesLabels[] = $_labelText;
      }*/

      foreach($_nationalLevelDataSet as $_rowKey => $_rowData){
          foreach($_rowData as  $_key => $_columnData){
              if($_key == 0){
                  $_columnData = date('d\/m\/Y', strtotime($_columnData));
              }
              $_testPositvityTrendyDataTemp[$_nationalLevelDataLabels[$_key]][] = $_columnData;
          }
      }

      foreach($_testPositvityTrendyDataTemp as $_testPositvityTrendLabel => $_testPositvityTrendSet){
          if($_testPositvityTrendLabel == "Date") continue;
          $_testPositvityTrendyData[] = array('type' => 'area', 'name' => strtoupper($_testPositvityTrendLabel), 'data' => $_testPositvityTrendSet, 'marker' => array('symbol' => 'circle'));
      }
      #print_r($_testPositvityTrendyDataTemp);
      #exit;
      ?>
      Highcharts.chart('weekly_zone_change', {
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
              enabled:true,
              layout: 'horizontal',
              align: 'center',
              verticalAlign: 'bottom'
          },

          credits:{
              enabled:false
          },

          xAxis: {
              categories: <?php echo json_encode($_testPositvityTrendyDataTemp['Date']);?>
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
          colors: ['#38cb89', '#ffab00', '#ef4b4b'],

          series: <?php echo json_encode($_testPositvityTrendyData);?>
      });

        $(document).ready(function(){
            $('#iframe_riskdata').html('<iframe id="rtIframeData" width="100%" height="800" src="https://arcg.is/ryTjT0" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>');
        });
    </script>

@endsection
