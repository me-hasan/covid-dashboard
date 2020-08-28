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
    <!-- Row -->
    <div class="card">
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card-header cart-height-customize">
                    <h3 class="card-title">Nationwide Hospital Capacity and Occupancy</h3>
                    <div class="card-options">
                        <div class="btn-list"> <a href="#" class="btn btn-primary btn-sm" style="visibility: hidden;">Details</a> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-md-6">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="card-body1">
                            <div id="hospital_general_beds"></div>
                        </div>
                        <div class="card-body1">
                            <div id="hospital_icu_beds"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-md-6">
                <div class="row pt-2 pr-3">
                    <div class="col-xl-12 col-md-12">
                        <div class="card-header cart-height-customize bg-before-none">
                            <div class="card-options">
                                <div class="btn-list"> <a href="#" class="btn btn-primary btn-sm">Details</a> </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-vcenter text-nowrap">
                                <thead >
                                <tr>
                                    <td></td>
                                    <td colspan="2" class="text-center fs-18">General Beds</td>
                                    <td colspan="2" class="text-center fs-18">ICU Beds</td>
                                </tr>
                                </thead>
                                <tbody class="fs-16">
                                <tr>
                                    <td></td>
                                    <td>Empty</td>
                                    <td>Occupancy</td>
                                    <td>Empty</td>
                                    <td>Occupancy</td>
                                </tr>
                                <tr>
                                    <td>Overall Country</td>
                                    <th>15255</th>
                                    <td>10963</td>
                                    <th>545</th>
                                    <td>213</td>
                                </tr>
                                <tr>
                                    <td>Dhaka City</td>
                                    <th>7037</th>
                                    <td>4794</td>
                                    <th>307</th>
                                    <td>97</td>
                                </tr>
                                <tr>
                                    <td>Chittagong City</td>
                                    <th>782</th>
                                    <td>562</td>
                                    <th>39</th>
                                    <td>18</td>
                                </tr>
                                <tr>
                                    <td>Others</td>
                                    <th>7436</th>
                                    <td>5607</td>
                                    <th>199</th>
                                    <td>98</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-6 col-md-6 col-xm-12">
                <div class="card-body">
                    <h5 class="card-title">Short Description</h5>
                    <p class="card-text">Content here.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                <div class="card-body">
                    <h5 class="card-title">Data Source & Last Update Date</h5>
                    <p class="card-text">a2i database.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

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
                            <tr>
                                <td>Kuwait Matry Hospital, Uttora, Dhaka</td>
                                <td>200</td>
                                <td>16</td>
                                <td>26</td>
                                <td>119</td>
                                <td>16</td>
                                <td>13</td>
                                <td>11</td>
                                <td>123</td>
                                <td>8</td>
                                <td>1</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>500 beded Kurmitola General Hospital</td>
                                <td>275</td>
                                <td>10</td>
                                <td>9</td>
                                <td>235</td>
                                <td>10</td>
                                <td>29</td>
                                <td>29</td>
                                <td>439</td>
                                <td>17</td>
                                <td>-</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>Dhaka Medical College Hospital and Burn Unit</td>
                                <td>883</td>
                                <td>24</td>
                                <td>14</td>
                                <td>608</td>
                                <td>17</td>
                                <td>59</td>
                                <td>50</td>
                                <td>628</td>
                                <td>3</td>
                                <td>30</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>500 beded Mugda Medidcal College Hospital, Dhaka</td>
                                <td>306</td>
                                <td>14</td>
                                <td>10</td>
                                <td>129</td>
                                <td>14</td>
                                <td>15</td>
                                <td>24</td>
                                <td>245</td>
                                <td>2</td>
                                <td>-</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>Rajarbag Police Hospital, Dhaka</td>
                                <td>1012</td>
                                <td>15</td>
                                <td>15</td>
                                <td>276</td>
                                <td>11</td>
                                <td>15</td>
                                <td>32</td>
                                <td>60</td>
                                <td>15</td>
                                <td>7</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>BSMMU, Dhaka</td>
                                <td>370</td>
                                <td>15</td>
                                <td>30</td>
                                <td>130</td>
                                <td>15</td>
                                <td>21</td>
                                <td>7</td>
                                <td>30</td>
                                <td>50</td>
                                <td>7</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Dhaka Metropolitan Hospital, Babu Bazar, Dhaka</td>
                                <td>105</td>
                                <td>-</td>
                                <td>5</td>
                                <td>21</td>
                                <td>-</td>
                                <td>7</td>
                                <td>1</td>
                                <td>48</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Infection Deasease Hospital, Mohakhali, Dhaka</td>
                                <td>10</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>72</td>
                                <td>-</td>
                                <td>-</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>Lalkuthi Hospital, Mirpur, Dhaka</td>
                                <td>121</td>
                                <td>5</td>
                                <td>5</td>
                                <td>38</td>
                                <td>2</td>
                                <td>4</td>
                                <td>5</td>
                                <td>20</td>
                                <td>5</td>
                                <td>-</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>Railway Hosptial, Kamlapur, Dhaka</td>
                                <td>30</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>30</td>
                                <td>-</td>
                                <td>-</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>250 beded sheikh rasel gastroliver hospital, Mohakhali, Dhaka</td>
                                <td>140</td>
                                <td>13</td>
                                <td>14</td>
                                <td>29</td>
                                <td>6</td>
                                <td>3</td>
                                <td>2</td>
                                <td>150</td>
                                <td>-</td>
                                <td>-</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>Holy Family red cresent medical college hospital</td>
                                <td>420</td>
                                <td>10</td>
                                <td>6</td>
                                <td>133</td>
                                <td>10</td>
                                <td>6</td>
                                <td>8</td>
                                <td>120</td>
                                <td>4</td>
                                <td>-</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Anwar Khan Modern Medical College Hospital, Dhanmondi, Dhaka</td>
                                <td>200</td>
                                <td>10</td>
                                <td>-</td>
                                <td>78</td>
                                <td>7</td>
                                <td>22</td>
                                <td>8</td>
                                <td>300</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Basundhara Covid Hospital, Kuril, Dhaka</td>
                                <td>2013</td>
                                <td>-</td>
                                <td>10</td>
                                <td>28</td>
                                <td>-</td>
                                <td>5</td>
                                <td>7</td>
                                <td>400</td>
                                <td>-</td>
                                <td>7</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Sarkari Kormochari Hospital, Fulbaria, Dhaka</td>
                                <td>46</td>
                                <td>6</td>
                                <td>6</td>
                                <td>5</td>
                                <td>2</td>
                                <td>1</td>
                                <td>-</td>
                                <td>-</td>
                                <td>4</td>
                                <td>3</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>Shaheed Sharawardy Medical College Hospital</td>
                                <td>174</td>
                                <td>8</td>
                                <td>-</td>
                                <td>121</td>
                                <td>-</td>
                                <td>11</td>
                                <td>9</td>
                                <td>280</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Tanjira 20 beded hospital, Keraniganj, Dhaka</td>
                                <td>27</td>
                                <td>-</td>
                                <td>-</td>
                                <td>5</td>
                                <td>-</td>
                                <td>1</td>
                                <td>9</td>
                                <td>18</td>
                                <td>-</td>
                                <td>-</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>Khanpur 300 beded hospital, Narawanganj</td>
                                <td>100</td>
                                <td>10</td>
                                <td>10</td>
                                <td>19</td>
                                <td>-</td>
                                <td>8</td>
                                <td>4</td>
                                <td>140</td>
                                <td>5</td>
                                <td>-</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>Sajeda Foundation, Kachpur, Narawanganj</td>
                                <td>44</td>
                                <td>4</td>
                                <td>4</td>
                                <td>36</td>
                                <td>4</td>
                                <td>1</td>
                                <td>1</td>
                                <td>81</td>
                                <td>1</td>
                                <td>20</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Shaheed Tajuddin Medical College Hospital, Gazipur</td>
                                <td>100</td>
                                <td>10</td>
                                <td>4</td>
                                <td>12</td>
                                <td>-</td>
                                <td>1</td>
                                <td>3</td>
                                <td>408</td>
                                <td>-</td>
                                <td>-</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>Chittagonj Medical College Hospital</td>
                                <td>160</td>
                                <td>10</td>
                                <td>16</td>
                                <td>156</td>
                                <td>6</td>
                                <td>20</td>
                                <td>28</td>
                                <td>27</td>
                                <td>10</td>
                                <td>10</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>BITIT, Fouzder Hat, Chittagong</td>
                                <td>32</td>
                                <td>-</td>
                                <td>-</td>
                                <td>18</td>
                                <td>-</td>
                                <td>1</td>
                                <td>1</td>
                                <td>32</td>
                                <td>-</td>
                                <td>1</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>250 Beded Specialized General Hospital, Chittagong</td>
                                <td>150</td>
                                <td>10</td>
                                <td>10</td>
                                <td>83</td>
                                <td>6</td>
                                <td>4</td>
                                <td>7</td>
                                <td>245</td>
                                <td>2</td>
                                <td>9</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>Holy Cresent Hospital, Chittagong</td>
                                <td>100</td>
                                <td>10</td>
                                <td>10</td>
                                <td>6</td>
                                <td>2</td>
                                <td>1</td>
                                <td>1</td>
                                <td>65</td>
                                <td>-</td>
                                <td>1</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>Chittagonj Railway Hospital, Chittagong</td>
                                <td>100</td>
                                <td>-</td>
                                <td>-</td>
                                <td>3</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>6</td>
                                <td>-</td>
                                <td>-</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>Chittagong Mother and Child Hospital, Agrabad, Chittagong</td>
                                <td>28</td>
                                <td>6</td>
                                <td>8</td>
                                <td>21</td>
                                <td>6</td>
                                <td>5</td>
                                <td>6</td>
                                <td>65</td>
                                <td>7</td>
                                <td>-</td>
                                <td>No</td>
                            </tr>
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
                <div class="card-body"> <img src="assets/images/chart/hospital-and-patient-analysis-1.jpg" alt="Patient Comorbidity Analysis" /> </div>
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
                <div class="card-body"> <img src="assets/images/chart/hospital-and-patient-analysis-2.jpg" alt="Patient Risk Level" /> </div>
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
@endsection

@section('scripts')

    {{--<script type="text/javascript">
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
    </script>--}}
    <script type="text/javascript">
        // Hospital General Beds
        Highcharts.chart('hospital_general_beds', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 60,
                    beta: 0
                },
                height: 250,
                margin: [0, 0, 30, 0]
            },
            title: {
                text: 'Hospital General Beds',
                y: 20
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
                    depth: 35,
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            colors: ['#5a99d3', '#e97c30'],
            series: [{
                type: 'pie',
                name: 'Beds',
                data: [
                    ['Empty', 72.0],
                    ['Occupancy', 28.0]
                ]
            }]
        });
        // Hospital ICU Beds
        Highcharts.chart('hospital_icu_beds', {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 60,
                    beta: 0
                },
                height: 250,
                margin: [0, 0, 30, 0]
            },
            title: {
                text: 'Hospital ICU Beds'
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
                    depth: 35,
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            colors: ['#5a99d3', '#e97c30'],
            series: [{
                type: 'pie',
                name: 'Beds',
                data: [
                    ['Empty', 39.0],
                    ['Occupancy', 61.0]
                ]
            }]
        });

        /* Death Location Percentage */
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
                data: [{"name":"Hospital","y":87.53},{"name":"Home","y":12.47}]				}]
        });
    </script>

@endsection
