@extends('iedcr.default')
@section('bread_crumb_active','Mobility And Predictive Importation')
@section('content')

    <!-- Row-1 -->
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Predicted Importation</h3>
                    <div class="card-options">
                        <i class="fa fa-table mr-2 text-success"></i>
                        <i class="fa fa-download text-danger"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mt-4">
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-xl-12 col-md-12">
                                    @include('iedcr.bd-map-html')
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div id="mobility-predictive-importation"></div>
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
                <div class="card-body">
                    <div class="row mt-4">
                        <div class="col-xl-9 col-lg-6 col-md-6 col-xm-12">
                            <div class="card-body">
                                <h5 class="card-title">Short Description</h5>
                                <p class="card-text">Data udpated from 11th July, 2020 to 22nd July, 2020</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                            <div class="card-body">
                                <h5 class="card-title">Data Source</h5>
                                <p class="card-text">a2i database</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-2 -->

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <iframe id="rtIframeData" width="100%" height="800" src="https://arcg.is/0OXj4S" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>
        </div>
    </div>

@endsection

@section('scripts')

   {{-- <script type="text/javascript">
        <?php
        #print_r($_mobilityTypeData); exit;
        $_mobilityTypekSeriesData = array();
        foreach($_mobilityTypeData as $_mobilityTypeLabel => $_mobilityTypeValue){
            #echo $$_mobilityTypeLabel; exit;

            $_mobilityTypekSeriesData[] = array('type' => 'area', 'name' => strtoupper($_mobilityTypeLabel), 'data' => array_values($_mobilityTypeValue), 'marker' => array('symbol' => 'circle'));
        }
        #print_r($_seriesSetData);
        #exit;
        ?>
        Highcharts.chart('mobility-predictive-importation', {
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
                categories: <?php echo json_encode(array_values($_rawDataLabels));?>
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

            colors: ['#ffab00', '#BC2B4C'],

            series: <?php echo json_encode($_mobilityTypekSeriesData);?>
        });

        // Map JS Data
        $(document).ready(function(){
            /* <?php print_r($_districtWiseData); ?> */
            <?php
            $_colorCodes = array( '10' => '#FCAA94', '25000' => '#F69475', '50000' => '#F37366', '70000' => '#E5515D', '100000' => '#CD3E52', '200000' => '#BC2B4C');
            $_existDataGroups = array();
            foreach($_districtWiseData as $_mobInDistrictName => $_mobInDistrictVal){
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
    </script>--}}

@endsection
