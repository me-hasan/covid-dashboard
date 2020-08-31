@extends('iedcr.default')
@section('bread_crumb_active','Risk Zone Analysis')
@section('search_view')
    <div class="d-flex order-lg-2 ml-auto">
        <form action="{{ route('iedcr.risk_zone_analysis') }}" class="d-flex order-lg-12 ml-auto">
            @include('iedcr.search_view')
        </form>
    </div>
@endsection
@section('content')
    <?php
    use Carbon\Carbon;ini_set('error_reporting', 0);

    //Current zone sql start
    $_currentRedZoneStatusData    = \Illuminate\Support\Facades\DB::select("select count(zone_map_id) as total_id from zone_details where covid_zone='Red' and date_of_declaration=(select max(date_of_declaration) from zone_details)");
    $_currentYellowZoneStatusData = \Illuminate\Support\Facades\DB::select("select count(zone_map_id) as total_id from zone_details where covid_zone='Yellow' and date_of_declaration = (select max(date_of_declaration) from zone_details)");
    $_currentGreenZoneStatusData  = \Illuminate\Support\Facades\DB::select("select count(zone_map_id) as total_id from zone_details where covid_zone='Green' and date_of_declaration=(select max(date_of_declaration) from zone_details)");

    //Last zone sql start
    $_lastRedZoneStatusData    = \Illuminate\Support\Facades\DB::select("select count(zone_map_id) as total_id from zone_details where covid_zone='Red' and date_of_declaration=(SELECT date_of_declaration FROM (SELECT distinct(date_of_declaration) FROM zone_details ORDER BY date_of_declaration desc limit 2) AS date_of_declaration ORDER BY date_of_declaration limit 1)");
    $_lastYellowZoneStatusData = \Illuminate\Support\Facades\DB::select("select count(zone_map_id) as total_id from zone_details where covid_zone='Yellow' and date_of_declaration=(SELECT date_of_declaration FROM (SELECT distinct(date_of_declaration) FROM zone_details ORDER BY date_of_declaration desc limit 2) AS date_of_declaration ORDER BY date_of_declaration limit 1)");
    $_lastGreenZoneStatusData  = \Illuminate\Support\Facades\DB::select("select count(zone_map_id) as total_id from zone_details where covid_zone='Green' and date_of_declaration=(SELECT date_of_declaration FROM (SELECT distinct(date_of_declaration) FROM zone_details ORDER BY date_of_declaration desc limit 2) AS date_of_declaration ORDER BY date_of_declaration limit 1)");


    $_currentRedZoneChangeData = (($_currentRedZoneStatusData[0]->total_id - $_lastRedZoneStatusData[0]->total_id))*100/$_lastRedZoneStatusData[0]->total_id;
    $_currentYellowZoneChangeData    = (($_currentYellowZoneStatusData[0]->total_id - $_lastYellowZoneStatusData[0]->total_id))*100/$_lastYellowZoneStatusData[0]->total_id;
    $_currentGreenZoneChangeData  = (($_currentGreenZoneStatusData[0]->total_id - $_lastGreenZoneStatusData[0]->total_id))*100/$_lastGreenZoneStatusData[0]->total_id;

    //Change Status
     $_redToRedChange    = \Illuminate\Support\Facades\DB::select("select count(distinct(last_week_green.zone_map_id)) as total_id from (select zone_map_id from zone_details where covid_zone='Red' and date_of_declaration= (SELECT date_of_declaration FROM (SELECT distinct(date_of_declaration) FROM zone_details ORDER BY date_of_declaration desc limit 2) AS date_of_declaration ORDER BY date_of_declaration limit 1) ) as last_week_green inner join (select zone_map_id from zone_details where covid_zone='Red' and date_of_declaration= (select max(date_of_declaration) from zone_details)) as curr_week_red USING (zone_map_id) ORDER BY zone_map_id");
     $_redToYellowChange = \Illuminate\Support\Facades\DB::select("select count(distinct(last_week_green.zone_map_id)) as total_id from (select zone_map_id from zone_details where covid_zone='Red' and date_of_declaration= (SELECT date_of_declaration FROM (SELECT distinct(date_of_declaration) FROM zone_details ORDER BY date_of_declaration desc limit 2) AS date_of_declaration ORDER BY date_of_declaration limit 1) ) as last_week_green inner join (select zone_map_id from zone_details where covid_zone='Yellow' and date_of_declaration= (select max(date_of_declaration) from zone_details)) as curr_week_red USING (zone_map_id) ORDER BY zone_map_id");
     $_redToGreenChange  = \Illuminate\Support\Facades\DB::select("select count(distinct(last_week_green.zone_map_id)) as total_id from (select zone_map_id from zone_details where covid_zone='Red' and date_of_declaration= (SELECT date_of_declaration FROM (SELECT distinct(date_of_declaration) FROM zone_details ORDER BY date_of_declaration desc limit 2) AS date_of_declaration ORDER BY date_of_declaration limit 1) ) as last_week_green inner join (select zone_map_id from zone_details where covid_zone='Green' and date_of_declaration= (select max(date_of_declaration) from zone_details)) as curr_week_red USING (zone_map_id) ORDER BY zone_map_id");

    $_yellowToRedChange    = \Illuminate\Support\Facades\DB::select("select count(distinct(last_week_green.zone_map_id)) as total_id from (select zone_map_id from zone_details where covid_zone='Yellow' and date_of_declaration= (SELECT date_of_declaration FROM (SELECT distinct(date_of_declaration) FROM zone_details ORDER BY date_of_declaration desc limit 2) AS date_of_declaration ORDER BY date_of_declaration limit 1) ) as last_week_green inner join (select zone_map_id from zone_details where covid_zone='Red' and date_of_declaration= (select max(date_of_declaration) from zone_details)) as curr_week_red USING (zone_map_id) ORDER BY zone_map_id");
    $_yellowToYellowChange = \Illuminate\Support\Facades\DB::select("select count(distinct(last_week_green.zone_map_id)) as total_id from (select zone_map_id from zone_details where covid_zone='Yellow' and date_of_declaration= (SELECT date_of_declaration FROM (SELECT distinct(date_of_declaration) FROM zone_details ORDER BY date_of_declaration desc limit 2) AS date_of_declaration ORDER BY date_of_declaration limit 1) ) as last_week_green inner join (select zone_map_id from zone_details where covid_zone='Yellow' and date_of_declaration= (select max(date_of_declaration) from zone_details)) as curr_week_red USING (zone_map_id) ORDER BY zone_map_id");
    $_yellowToGreenChange  = \Illuminate\Support\Facades\DB::select("select count(distinct(last_week_green.zone_map_id)) as total_id from (select zone_map_id from zone_details where covid_zone='Yellow' and date_of_declaration= (SELECT date_of_declaration FROM (SELECT distinct(date_of_declaration) FROM zone_details ORDER BY date_of_declaration desc limit 2) AS date_of_declaration ORDER BY date_of_declaration limit 1) ) as last_week_green inner join (select zone_map_id from zone_details where covid_zone='Green' and date_of_declaration= (select max(date_of_declaration) from zone_details)) as curr_week_red USING (zone_map_id) ORDER BY zone_map_id");

    $_greenToRedChange    = \Illuminate\Support\Facades\DB::select("select count(distinct(last_week_green.zone_map_id)) as total_id from (select zone_map_id from zone_details where covid_zone='Green' and date_of_declaration= (SELECT date_of_declaration FROM (SELECT distinct(date_of_declaration) FROM zone_details ORDER BY date_of_declaration desc limit 2) AS date_of_declaration ORDER BY date_of_declaration limit 1) ) as last_week_green inner join (select zone_map_id from zone_details where covid_zone='Red' and date_of_declaration= (select max(date_of_declaration) from zone_details)) as curr_week_red USING (zone_map_id) ORDER BY zone_map_id");
    $_greenToYellowChange = \Illuminate\Support\Facades\DB::select("select count(distinct(last_week_green.zone_map_id)) as total_id from (select zone_map_id from zone_details where covid_zone='Green' and date_of_declaration= (SELECT date_of_declaration FROM (SELECT distinct(date_of_declaration) FROM zone_details ORDER BY date_of_declaration desc limit 2) AS date_of_declaration ORDER BY date_of_declaration limit 1) ) as last_week_green inner join (select zone_map_id from zone_details where covid_zone='Yellow' and date_of_declaration= (select max(date_of_declaration) from zone_details)) as curr_week_red USING (zone_map_id) ORDER BY zone_map_id");
    $_greenToGreenChange  = \Illuminate\Support\Facades\DB::select("select count(distinct(last_week_green.zone_map_id)) as total_id from (select zone_map_id from zone_details where covid_zone='Green' and date_of_declaration= (SELECT date_of_declaration FROM (SELECT distinct(date_of_declaration) FROM zone_details ORDER BY date_of_declaration desc limit 2) AS date_of_declaration ORDER BY date_of_declaration limit 1) ) as last_week_green inner join (select zone_map_id from zone_details where covid_zone='Green' and date_of_declaration= (select max(date_of_declaration) from zone_details)) as curr_week_red USING (zone_map_id) ORDER BY zone_map_id");

    //Weekly Change
    $_weeklyChangeForRed     = \Illuminate\Support\Facades\DB::select("select date_of_declaration as 'Week_day', count(zone_map_id) as 'Number_of_Red_Zone' from zone_details where covid_zone='Red' group by date_of_declaration");
    $_weeklyChangeForYellow  = \Illuminate\Support\Facades\DB::select("select date_of_declaration as 'Week_day', count(zone_map_id) as 'Number_of_Yellow_Zone' from zone_details where covid_zone='Yellow' group by date_of_declaration");
    $_weeklyChangeForGreen   = \Illuminate\Support\Facades\DB::select("select date_of_declaration as 'Week_day', count(zone_map_id) as 'Number_of_Green_Zone' from zone_details where covid_zone='Green' group by date_of_declaration");
//dd($_weeklyChangeForRed,$_weeklyChangeForYellow,$_weeklyChangeForGreen);

    $weeklyChangeDate = $weeklyRedData = $weeklyYellowData =  $weeklyGreenData = [];
    foreach ($_weeklyChangeForRed as $key => $weeklyChangeData){
        $weeklyChangeDate[] = Carbon::parse($weeklyChangeData->Week_day)->format('d/m/yy');
        $weeklyRedData[] = $weeklyChangeData->Number_of_Red_Zone;
    }
    foreach ($_weeklyChangeForYellow as $key => $weeklyChangeYellowData){
        $weeklyYellowData[] = $weeklyChangeYellowData->Number_of_Yellow_Zone;
    }
    foreach ($_weeklyChangeForGreen as $key => $weeklyChangeGreenData){
        $weeklyGreenData[] = $weeklyChangeGreenData->Number_of_Green_Zone;
    }

    $_weeklyChangeData['Date']        = $weeklyChangeDate;
    $_weeklyChangeData['Green Zone']  = $weeklyGreenData;
    $_weeklyChangeData['Yellow Zone'] = $weeklyYellowData;
    $_weeklyChangeData['Red Zone']    = $weeklyRedData;

    foreach($_weeklyChangeData as $_testPositvityTrendLabel => $_weeklyChangeTrendSet){
        if($_testPositvityTrendLabel == "Date") continue;
        $_weeklyChangeTrendyData[] = array('type' => 'area', 'name' => strtoupper($_testPositvityTrendLabel), 'data' => $_weeklyChangeTrendSet, 'marker' => array('symbol' => 'circle'));
    }

    //Zone info
    $_zoneInfo   = \Illuminate\Support\Facades\DB::select("select A.id, A.Zone_Name, A.Current_Status, A.Last_Status, A.Total_Cases_14_Days, A.Declaration_Date from
(select TABLE1.id as 'id', TABLE1.Zone_Name as 'Zone_Name', TABLE1.Current_Status as 'Current_Status',
TABLE1.Last_Status as 'Last_Status', TABLE1.Confirmed_case as 'Total_Cases_14_Days', TABLE2.date_of_declaration as 'Declaration_Date'
from (select t1.zone_map_id as 'id', t1.risk_zone_name_new as 'Zone_Name', t1.covid_zone as 'Current_Status', t2.covid_zone as 'Last_Status',
t1.total_case_in_risk_zone_14_days as 'Confirmed_case' from
(select zone_map_id, risk_zone_name_new, covid_zone, total_case_in_risk_zone_14_days from zone_details
where date_of_declaration=(select max(date_of_declaration) from zone_details)) as t1
inner join
(select zone_map_id,covid_zone from zone_details where date_of_declaration=
(SELECT date_of_declaration FROM
(SELECT distinct(date_of_declaration) FROM zone_details ORDER BY date_of_declaration desc limit 2)
AS date_of_declaration ORDER BY date_of_declaration limit 1)) as t2
using(zone_map_id)) as TABLE1 inner join
(select zone_map_id, covid_zone, date_of_declaration from zone_details)
as TABLE2 where TABLE2.zone_map_id = TABLE1.id
ORDER BY TABLE1.id) as A
where A.Declaration_Date=
(
SELECT Declaration_Date FROM
(select TABLE1.id as 'id', TABLE1.Zone_Name as 'Zone_Name', TABLE1.Current_Status as 'Current_Status', TABLE1.Last_Status as 'Last_Status', TABLE2.date_of_declaration as 'Declaration_Date' from (select t1.zone_map_id as 'id', t1.risk_zone_name_new as 'Zone_Name', t1.covid_zone as 'Current_Status', t2.covid_zone as 'Last_Status' from
(select zone_map_id, risk_zone_name_new, covid_zone from zone_details
where date_of_declaration=(select max(date_of_declaration) from zone_details)) as t1
inner join
(select zone_map_id,covid_zone from zone_details where date_of_declaration=
(SELECT date_of_declaration FROM
(SELECT distinct(date_of_declaration) FROM zone_details ORDER BY date_of_declaration desc limit 2)
AS date_of_declaration ORDER BY date_of_declaration limit 1)) as t2
using(zone_map_id)) as TABLE1 inner join
(select zone_map_id, covid_zone, date_of_declaration from zone_details)
as TABLE2 where TABLE2.zone_map_id = TABLE1.id
ORDER BY TABLE1.id) AS Declaration_Date group by Declaration_Date  limit 1
) order by id");

// dd($_zoneInfo);

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
                        <a href="{{route('iedcr.generate-current-zone-excel')}}"><i class="fa fa-download text-danger"></i></a>
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
                                    <h2 class="mb-1 number-font">{!! isset($_currentRedZoneStatusData[0]->total_id) ? $_currentRedZoneStatusData[0]->total_id : '' !!}</h2>
                                    <small class="fs-12 text-muted">Compared to Week Day</small>
                                    <span class="ratio bg-danger"><?php echo number_format($_currentRedZoneChangeData, 0);?>%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                            <div class="card overflow-hidden dash1-card border-0">
                                <div class="card-body">
                                    <h5 class=" mb-1">Yellow Zone</h5>
                                    <h2 class="mb-1 number-font">{!! isset($_currentYellowZoneStatusData[0]->total_id) ? $_currentYellowZoneStatusData[0]->total_id : '' !!}</h2>
                                    <small class="fs-12 text-muted">Compared to Week Day</small>
                                    <span class="ratio bg-warning">{!! number_format($_currentYellowZoneChangeData, 0) !!}%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                            <div class="card overflow-hidden dash1-card border-0">
                                <div class="card-body">
                                    <h5 class=" mb-1">Green Zone</h5>
                                    <h2 class="mb-1 number-font">{!! isset($_currentGreenZoneStatusData[0]->total_id) ? $_currentGreenZoneStatusData[0]->total_id : '' !!}</h2>
                                    <small class="fs-12 text-muted">Compared to Week Day</small>
                                    <span class="ratio bg-success">{!! number_format($_currentGreenZoneChangeData)  !!}%</span>
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
                            <a href="{{route('iedcr.generate-last-zone-excel')}}"><i class="fa fa-download text-danger"></i></a>
                        </div>
                    </div>
                    <div class="card-body last-zone-status">
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-danger text-center">Red Zone</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Red Zone</h5>
                                        <h2 class="mb-1 number-font">{!! isset($_lastRedZoneStatusData[0]->total_id) ? $_lastRedZoneStatusData[0]->total_id : '' !!} </h2>
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
                                    <h2 class="mb-1 number-font">{!! isset($_lastYellowZoneStatusData[0]->total_id) ? $_lastYellowZoneStatusData[0]->total_id : '' !!}</h2>
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
                                    <h2 class="mb-1 number-font">{!! isset($_lastGreenZoneStatusData[0]->total_id) ? $_lastGreenZoneStatusData[0]->total_id : '' !!}</h2>
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
                            <a href="{{route('iedcr.generate-change-status-excel')}}"><i class="fa fa-download text-danger"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row top-zone">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-danger text-center">Remain in Red zone</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Red Zone</h5>
                                        <h2 class="mb-1 number-font">{!! isset($_redToRedChange[0]->total_id) ? $_redToRedChange[0]->total_id : '' !!}</h2>
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
                                        <h2 class="mb-1 number-font">{!! isset($_redToYellowChange[0]->total_id) ? $_redToYellowChange[0]->total_id : '' !!}</h2>
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
                                        <h2 class="mb-1 number-font">{!! isset($_redToGreenChange[0]->total_id) ? $_redToGreenChange[0]->total_id : '' !!}</h2>
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
                                        <h2 class="mb-1 number-font">{!! isset($_yellowToRedChange[0]->total_id) ? $_yellowToRedChange[0]->total_id : '' !!}</h2>
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
                                        <h2 class="mb-1 number-font">{!! isset($_yellowToYellowChange[0]->total_id) ? $_yellowToYellowChange[0]->total_id : '' !!}</h2>
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
                                        <h2 class="mb-1 number-font">{!! isset($_yellowToGreenChange[0]->total_id) ? $_yellowToGreenChange[0]->total_id : '' !!}</h2>
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
                                        <h2 class="mb-1 number-font">{!! isset($_greenToRedChange[0]->total_id) ? $_greenToRedChange[0]->total_id : '' !!}</h2>
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
                                        <h2 class="mb-1 number-font">{!! isset($_greenToYellowChange[0]->total_id) ? $_greenToYellowChange[0]->total_id : '' !!}</h2>
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
                                        <h2 class="mb-1 number-font">{!! isset($_greenToGreenChange[0]->total_id) ? $_greenToGreenChange[0]->total_id : '' !!}</h2>
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
                <div class="mb-9 mt-9 pb-5 pt-5">{{$ss_1}}</div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Short Description</h3>
            </div>
            <div class="card-body">
                <div class="mb-9 mt-9 pb-6 pt-8">{{$sd_1}}</div>
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
                    <a href="{{route('iedcr.generate-weekly-change-excel')}}"><i class="fa fa-download text-danger"></i></a>
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
                    <a href="{{route('iedcr.generate-zone-info-excel')}}"><i class="fa fa-download text-danger"></i></a>
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
                        @if(count($_zoneInfo))
                        @foreach($_zoneInfo as $zoneData)
                            <tr>
                                <td>{!! $zoneData->Zone_Name  ?? ' ' !!}</td>
                                <td>{!! $zoneData->Current_Status  ?? ' ' !!}</td>
                                <td>{!! $zoneData->Last_Status  ?? ' ' !!}</td>
                                <td>{!! $zoneData->Total_Cases_14_Days  ?? ' ' !!}</td>
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

//      foreach($_testPositvityTrendyDataTemp as $_testPositvityTrendLabel => $_testPositvityTrendSet){
//          if($_testPositvityTrendLabel == "Date") continue;
//          $_testPositvityTrendyData[] = array('type' => 'area', 'name' => strtoupper($_testPositvityTrendLabel), 'data' => $_testPositvityTrendSet, 'marker' => array('symbol' => 'circle'));
//      }
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
              categories: <?php echo json_encode($weeklyChangeDate);?>
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

          {{--series: <?php echo json_encode($_testPositvityTrendyData);?>--}}
          series: <?php echo json_encode($_weeklyChangeTrendyData);?>
      });

        $(document).ready(function(){
            $('#iframe_riskdata').html('<iframe id="rtIframeData" width="100%" height="800" src="https://arcg.is/ryTjT0" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>');
        });
    </script>

@endsection
