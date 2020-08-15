@extends('iedcr.default')
@section('bread_crumb_active','Syndromic Surveillance')
@section('content')
<?php
ini_set('error_reporting', 0);
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
                                <?php foreach($_rawDataLabels as $_indexKey => $_tableHead):?>
                                <?php if($_indexKey == 0 || $_indexKey == 3|| $_indexKey == 4 || $_indexKey == 5) continue; ?>
                                <th class="border-bottom-0"><?php echo $_tableHead; ?></th>
                                <?php endforeach;?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($_rawDataSet as $_rowKey => $_rowData): #print_r($_rowData); exit;?>
                            <?php if($_rowKey == 0 || ($_rowData[8] == NULL)) continue; ?>
                            <tr>
                                <?php foreach($_rowData as $_colKey => $_columnData):?>
                                <?php
                                if($_colKey == 0 || $_colKey == 3|| $_colKey == 4 || $_colKey == 5) continue;
                                if($_colKey == 5){
                                    $_columnData = '-';#date('d/m/Y', strtotime($_columnData));
                                }
                                if($_colKey == 8){
                                    #echo (float)$_columnData; exit;
                                    $_columnData = round($_columnData, 2);
                                }
                                $_colParts = explode("[", $_columnData);
                                if(count($_colParts) > 1){
                                    $_columnData = $_colParts[0];
                                }else{
                                    $_colParts = explode("(", $_columnData);
                                    if(count($_colParts) > 1){
                                        $_columnData = $_colParts[0];
                                    }
                                }
                                ?>
                                <td><?php echo ($_columnData == NULL)?"-":trim($_columnData); ?></td>
                                <?php endforeach;?>
                            </tr>
                            <?php endforeach;?>
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
                                    <ul>
                                        <li>PCNPRS = Per Capita No of People Reporting Symptoms</li>
                                        <li>PCNPRHR = Per Capita No of People Reported High Risk</li>
                                        <ul>
                                </div>

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

    <!-- End Row-3 -->

@endsection

@section('scripts')

    <script type="text/javascript">
        /* Time Seris Graph */
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

            series: <?php echo json_encode($_testPositvityTrendyData);?>
        });

        // Map JS Data
        $(document).ready(function(){
            /* <?php print_r($_districtWiseData); ?> */
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
    </script>

@endsection
