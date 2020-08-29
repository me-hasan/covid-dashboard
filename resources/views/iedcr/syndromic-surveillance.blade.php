@extends('iedcr.default')
@section('bread_crumb_active','Syndromic Surveillance')
@section('search_view')
    <div class="d-flex order-lg-2 ml-auto">
        <form action="{{ route('iedcr.syndromic_surveillance') }}" class="d-flex order-lg-12 ml-auto">
            @include('iedcr.search_view')
        </form>
    </div>
@endsection
@section('content')
<?php
ini_set('error_reporting', 0);
$_rawDataSet = $_nationalLevelDataSet = $_mobilityTypeData = array();
$_ss_infoData = \Illuminate\Support\Facades\DB::table('ss_data')->get();
$_nationalLevelDataLabels = array('Date','PCNPRS','Consisten to Covide-19','PCNPRHR');
$_nationalInfoData = \Illuminate\Support\Facades\DB::table('ss_national_level')->get();
$_nationalLevelDataSet = array();
if(count($_nationalInfoData)) {
    foreach ($_nationalInfoData as $key=>$_nationalInfo){
        $_nationalLevelDataSet[$key+1][0] = $_nationalInfo->date;
        $_nationalLevelDataSet[$key+1][1] = (double)$_nationalInfo->PCNPRS;
        $_nationalLevelDataSet[$key+1][2] = (double)$_nationalInfo->consisten_to_covide_19;
        $_nationalLevelDataSet[$key+1][3] = (double)$_nationalInfo->PCNPRHR;

    }
}
if(count($_ss_infoData)) {
    foreach ($_ss_infoData as $key=>$ss_infoData){
        $_rawDataSet[$key+1][0] = $ss_infoData->sl;
        $_rawDataSet[$key+1][1] = $ss_infoData->division;
        $_rawDataSet[$key+1][2] = $ss_infoData->district;
        $_rawDataSet[$key+1][3] = $ss_infoData->upazila;
        $_rawDataSet[$key+1][4] = $ss_infoData->week;
        $_rawDataSet[$key+1][5] = $ss_infoData->date;
        $_rawDataSet[$key+1][6] = $ss_infoData->PCNPRS;
        $_rawDataSet[$key+1][7] = $ss_infoData->consisten_to_covide_19;
        $_rawDataSet[$key+1][8] = $ss_infoData->PCNPRHR;
        $_rawDataSet[$key+1][9] = $ss_infoData->status;

    }
}
$_columnSkipKey = array(0, 1, 3, 4, 5, 6, 7);
foreach($_rawDataSet as $_rowDataKey => $_rawDataRow){
    foreach($_rawDataRow as $_columnKey => $_columnData){
        if(in_array($_columnKey, $_columnSkipKey)) continue;
        //$_mblityType = $_rawDataRow[16];
        $_districtName = str_replace(array("'", " "),array("","_"),$_rawDataRow[2]);
        #echo $_columnData; exit;
        //if($_mblityType == "Mobility_In"){
        if($_districtWiseData[$_districtName]){
            //echo $_districtWiseData[$_districtName]; exit;
            $_districtWiseData[$_districtName] = $_districtWiseData[$_districtName]+$_columnData;
        }else{
            $_districtWiseData[$_districtName] = $_columnData;
        }
        //}
    }
}

    $sd_1=$sd_2='';
    $ss_1=$ss_2='';
  $data_source_description = \Illuminate\Support\Facades\DB::table('data_source_description')->where('page_name','iedcr-syndromic-surveillance')->get();
  foreach ($data_source_description as  $row) {
    if($row->component_name=='District Level Change'){
        $sd_1=$row->description;
        $ss_1=$row->source;
    }elseif ($row->component_name=='Syndromic Summary Information'){
        $sd_2=$row->description;
        $ss_2=$row->source;
    }
  }

?>
    <!-- Row-1 -->

    <div class="row">

        <div class="col-xl-12 col-md-12">

            <div class="card">

                <div class="card-header">

                    <h3 class="card-title">District Level Change</h3>

                    <div class="card-options">

                        <i class="fa fa-download text-danger"></i>

                    </div>

                </div>

                <div class="card-body">

                    <div class="row mt-4">

                        <div class="col-lg-4">

                            @include('iedcr.bd-map-html')

                        </div>

                        <div class="col-lg-8">

                            <div id="district-level-trend"></div>

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

    <!-- End Row-1 -->





    <!-- Row-2 -->

    <div class="row">

        <div class="col-xl-12 col-md-12">

            <div class="card">

                <div class="card-header">

                    <h3 class="card-title">Syndromic Summary Information</h3>

                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="case_analysis_dtable" class="table table-striped table-bordered text-nowrap">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">Division</th>
                                <th class="border-bottom-0">District</th>
                                <th class="border-bottom-0">PCNPRS</th>
                                <th class="border-bottom-0">Consisten to Covide-19</th>
                                <th class="border-bottom-0">PCNPRHR</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($_ss_infoData as $ssData)
                                <tr>
                                    <td>{!! $ssData->division  ?? ' ' !!}</td>
                                    <td>{!! $ssData->district  ?? ' ' !!}</td>
                                    <td>{!! $ssData->PCNPRS  ?? ' ' !!}</td>
                                    <td>{!! $ssData->consisten_to_covide_19  ?? ' ' !!}</td>
                                    <td>{!! $ssData->PCNPRHR  ?? ' ' !!}</td>
                                </tr>
                            @endforeach
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

                <div class="card-body">

                    <div class="row mt-4">

                        <div class="col-xl-9 col-lg-6 col-md-6 col-xm-12">

                            <div class="card-body">

                                <h5 class="card-title">Short Description</h5>

                                <div class="card-text">
                                    <!-- <ul>
                                        <li>PCNPRS = Per Capita No of People Reporting Symptoms</li>
                                        <li>PCNPRHR = Per Capita No of People Reported High Risk</li>
                                    <ul> -->
                                    {{$sd_2}}
                                </div>

                            </div>

                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">

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
        #print_r($_testPositvityTrendyData);
        #exit;
        ?>
        /* Time Seris Graph */


        Highcharts.chart('district-level-trend', {
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
                categories: <?php echo json_encode($_testPositvityTrendyDataTemp['Date']);?>/*,
					labels: {
						formatter: function() {
						   return 'Test Positivity Rate: ' +this.value+'%';
						}
					}*/
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

            colors: ['#3b8ac2', '#d1e1f0', '#ed2355'],

            series:<?php echo json_encode($_testPositvityTrendyData);?>
        });

        // Map JS Data
        $(document).ready(function(){

            <?php
            $_colorCodes = array( '50' => '#FCAA94', '150' => '#F69475', '200' => '#F37366', '300' => '#E5515D', '500' => '#CD3E52', '1000' => '#ed2355');
            $_existDataGroups = array();
            foreach($_districtWiseData as $_mobInDistrictName => $_mobInDistrictVal){
            //echo $_mobInDistrictVal = (int) $_mobInDistrictVal;
            $_groupColorCode = NULL;
            foreach($_colorCodes as $_colorRange => $_colorCode){
                if($_mobInDistrictVal <= $_colorRange){
                    $_groupColorCode = $_colorCode;
                    $_existDataGroups[$_colorRange] = $_colorCode;
                    break;
                }
            }
            ?>
            $('#<?php echo $_mobInDistrictName; ?> path').attr('fill', '<?php echo $_groupColorCode;?>');
            <?php
            }
            ?>


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
    </script>
@endsection
