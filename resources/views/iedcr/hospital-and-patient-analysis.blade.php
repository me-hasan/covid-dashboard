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
    ?>
    <!-- Top Row -->
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Hospital Wise Capacity Data</h3>
                    <div class="card-options">
                        <i class="fa fa-download text-danger"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="case_analysis_dtable" class="table table-striped table-bordered text-nowrap">
                            <thead>
                            <tr>
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
                            @if(count($_hospitalCapacityDataSet))
                                @foreach($_hospitalCapacityDataSet as $key=>$_hospitalData)
                                    <tr>
                                        <td>{!! $_hospitalData->facility_name ?? ' ' !!}</td>
                                        <td>{!! $_hospitalData->general_bed ?? ' ' !!}</td>
                                        <td>{!! $_hospitalData->usable_ICU_bed ?? ' ' !!}</td>
                                        <td>{!! $_hospitalData->ventilator ?? ' ' !!}</td>
                                        <td>{!! $_hospitalData->general_bed_2 ?? ' ' !!}</td>
                                        <td>{!! $_hospitalData->ICU_bed ?? ' ' !!}</td>
                                        <td>{!! $_hospitalData->admitted_patient_last_24 ?? ' ' !!}</td>
                                        <td>{!! $_hospitalData->released_patient_last_24 ?? ' ' !!}</td>
                                        <td>{!! $_hospitalData->oxygen_cylinder ?? ' ' !!}</td>
                                        <td>{!! $_hospitalData->high_flow_nasal_cannula ?? ' ' !!}</td>
                                        <td>{!! $_hospitalData->oxygen_concentrator ?? ' ' !!}</td>
                                        <td>{!! $_hospitalData->central_oxygen_line ?? ' ' !!}</td>
                                    </tr>
                                @endforeach
                            @endif
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
                    <div class="card-options">
                        <i class="fa fa-table mr-2 text-success"></i>
                        <i class="fa fa-download text-danger"></i>
                    </div>
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

                    <div class="card-options">

                        <i class="fa fa-table mr-2"></i>

                        <i class="fa fa-download"></i>

                    </div>

                </div>

                <div class="card-body">

                    <img src="{!! asset('assets/images/chart/hospital-and-patient-analysis-1.jpg') !!}" alt="Patient Comorbidity Analysis" />

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

        <div class="col-xl-7 col-lg-7 col-md-12">

            <div class="card">

                <div class="card-header">

                    <h3 class="card-title">Patient Risk Level</h3>

                    <div class="card-options">

                        <i class="fa fa-table mr-2"></i>

                        <i class="fa fa-download"></i>

                    </div>

                </div>

                <div class="card-body">

                    <img src="{!! asset('assets/images/chart/hospital-and-patient-analysis-3.jpg') !!}" alt="Patient Risk Level" />

                </div>

            </div>

        </div>

        <div class="col-xl-5 col-lg-5 col-md-12">

            <div class="card">

                <div class="card-header">

                    <h3 class="card-title">Patient Risk Level</h3>

                    <div class="card-options">

                        <i class="fa fa-download"></i>

                    </div>

                </div>

                <div class="card-body">

                    <img src="{!! asset('assets/images/chart/hospital-and-patient-analysis-2.jpg') !!}" alt="Death % Hospital Vs Home" />

                </div>

            </div>



        </div>

    </div>

    <!-- End Row-3 -->





    <!-- Row-4 -->

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
