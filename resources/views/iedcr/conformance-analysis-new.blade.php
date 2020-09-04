@extends('iedcr.default')
@section('bread_crumb_active','Conformance Analysis')
@section('search_view')
    <div class="d-flex order-lg-2 ml-auto">
        <form action="{{ route('iedcr.conformance_analysis') }}" class="d-flex order-lg-12 ml-auto">
            @include('iedcr.search_view')
        </form>
    </div>
@endsection
@section('content')
<?php
  $sd_1='';
  $ss_1='';
  $data_source_description = \Illuminate\Support\Facades\DB::table('data_source_description')->where('page_name','iedcr-conformance-analysis')->get();
  $con_carddata = \Illuminate\Support\Facades\DB::table('con_carddata')->orderBy('id', 'DESC')->first();
  $con_barchart_data = \Illuminate\Support\Facades\DB::table('con_barchart_data')->get();
  foreach ($data_source_description as  $row) {
    if($row->component_name=='Conformance Analysis'){
        $sd_1=$row->description;
        $ss_1=$row->source;
    }
  }
?>
    <!-- Row-3 -->
<!-- Row-1 -->
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Conformance Summary</h3>
                <div class="card-options"> 
                  <!-- <i class="fa fa-table mr-2 text-success"></i>  -->
                  <a href="{{route('iedcr.generate-conformance-summary-excel',request()->input())}}"><i class="fa fa-download text-danger"></i></a> 
                </div>
              </div>
              <div class="card-body">
                <div class="row mt-4">
                  <div class="col-xl-12 col-lg-12 col-xm-12">
                    <div class="card-body text-center">
                      <h1 class="text-success">{{ $getConformanceData['masked_percentage'] }}%</h1>
                      <h4 class="text-ash">of People are wearing mask.</h4>
                    </div>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                    <div class="card-body">
                      <h2 class="text-success">{{ $getConformanceData['total_detection'] }}</h2>
                      <h4 class="text-ash">Total faced detected.</h4>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                    <div class="card-body">
                      <h2 class="text-success">{{ $getConformanceData['total_masked_face'] }}</h2>
                      <h4 class="text-ash">Number of Masked Faces.</h4>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                    <div class="card-body">
                      <h2 class="text-success">{{ $getConformanceData['total_non_masked_face'] }}</h2>
                      <h4 class="text-ash">Number of Non-Masked Faces.</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card">
              <div class="card-header border-0 pb-0 pt-0 bg-before-none">
                <div class="card-options"> 
                  <a href="{{route('iedcr.generate-camera-wise-data-excel',request()->input())}}"><i class="fa fa-download text-danger"></i></a> 
                </div>
              </div>
              <div class="card-body">
                <div class="card-body text-center">
                  <div id="camera-wise-barchart"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Row-1 -->

        <div class="row">
          <div class="col-xl-12 col-md-12">
            <div id="iframeData" class="text-center"></div>
          </div>
        </div>

        <!-- Row-3 -->

        <div class="row d-none">
          <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Conformance</h3>
                <div class="card-options"> <i class="fa fa-table mr-2 text-success"></i> <i class="fa fa-download text-danger"></i> </div>
              </div>
              <div class="card-body"> <img src="assets/images/chart/conformance.jpg" alt="Conformance" /> </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Trend Analysis</h3>
                <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
              </div>
              <div class="card-body"> <img src="assets/images/chart/trend-analysis.jpg" alt="Trend Analysis" /> </div>
            </div>
          </div>
        </div>

        <!-- End Row-3 -->

        <!-- Row-2 -->

        <div class="row d-none">
          <div class="col-xl-12 col-md-12">
            <div class="card">
              <div class="card-body-syndromic">
                <div class="table-responsive">
                  <table class="table table-striped card-table table-vcenter text-nowrap">
                    <thead>
                      <tr class="custom-tabil-title-text">
                        <th>DATE</th>
                        <th>CAMERA LOCATION</th>
                        <th>% OF PEOPLE WEARING MAKS</th>
                        <th>% OF PEOPLE MAINTAINING SOCIAL DISTANCING</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" class="custom-tabil-in-text">Dhaka</th>
                        <td class="custom-tabil-in-text">Dhaka</td>
                        <td class="custom-tabil-in-text">Dhamrai</td>
                        <td class="custom-tabil-in-text">120</td>
                      </tr>
                      <tr>
                        <th scope="row" class="custom-tabil-in-text">Dhaka</th>
                        <td class="custom-tabil-in-text">Dhaka</td>
                        <td class="custom-tabil-in-text">Dhamrai</td>
                        <td class="custom-tabil-in-text">120</td>
                      </tr>
                      <tr>
                        <th scope="row" class="custom-tabil-in-text">Dhaka</th>
                        <td class="custom-tabil-in-text">Dhaka</td>
                        <td class="custom-tabil-in-text">Dhamrai</td>
                        <td class="custom-tabil-in-text">120</td>
                      </tr>
                      <tr>
                        <th scope="row" class="custom-tabil-in-text" >Dhaka</th>
                        <td class="custom-tabil-in-text">Dhaka</td>
                        <td class="custom-tabil-in-text">Dhamrai</td>
                        <td class="custom-tabil-in-text">120</td>
                      </tr>
                      <tr>
                        <th scope="row" class="custom-tabil-in-text">Dhaka</th>
                        <td class="custom-tabil-in-text">Dhaka</td>
                        <td class="custom-tabil-in-text">Dhamrai</td>
                        <td class="custom-tabil-in-text">120</td>
                      </tr>
                      <tr>
                        <th scope="row" class="custom-tabil-in-text">Dhaka</th>
                        <td class="custom-tabil-in-text">Dhaka</td>
                        <td class="custom-tabil-in-text">Dhamrai</td>
                        <td class="custom-tabil-in-text">120</td>
                      </tr>
                      <tr>
                        <th scope="row" class="custom-tabil-in-text">Dhaka</th>
                        <td class="custom-tabil-in-text">Dhaka</td>
                        <td class="custom-tabil-in-text">Dhamrai</td>
                        <td class="custom-tabil-in-text">120</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('scripts')

<script type="text/javascript">
      // Age Wise Death Distribution
      Highcharts.chart('camera-wise-barchart', {
        chart: {
          type: 'column',
          height: 240
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
          categories: [<?php echo implode(",",$getConformanceData['camera_ids']); ?>]       },
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
        series: [{"name":"Camera","data":[<?php echo implode(",",$getConformanceData['camera_mask_data']); ?>]}]     });
    </script>
    <!-- End Row-2 -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#iframeData').html('<iframe width="560" height="315" src="https://www.youtube.com/embed/86WspkDtXrU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
    });
</script>

@endsection
