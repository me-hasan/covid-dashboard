<div class="card">
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card-header cart-height-customize">
                <h3 class="card-title">Nationwide Mobility</h3>
                <div class="card-options">
                    <div class="btn-list"> <a href="{!! route('iedcr.mobility_and_predictive_importation') !!}" class="btn btn-primary btn-sm">Details</a> </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-lg-8 col-md-12 mr-0">
            <div class="card-body">
                <div id="mobility_time_seris_graph"></div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 ml-0 mr-0">
            <div class="card-header">
                <h3 class="card-title">Calendar highlighting important dates</h3>
            </div>
            <div class="card-body">
                <div id="datepicker">

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-12 ml-0">
            <div class="card-header">
                <h3 class="card-title">Events</h3>
            </div>
            <div class="card-body">
                <table class="table" border="1">
                    <thead class="event-table" style="background-color: #705ec8;">
                    <tr>
                        <th class="text-white" scope="col" width="50%">Dates</th>
                        <th class="text-white" scope="col" width="50%">Events</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>01 Aug, 2020</td>
                        <td>Eid-ul-Azha</td>
                    </tr>
                    <tr>
                        <td>11 Aug, 2020</td>
                        <td>Janmashtami</td>
                    </tr>
                    <tr>
                        <td>15 Aug, 2020</td>
                        <td>National Mourning Day</td>
                    </tr>
                    <tr>
                        <td>30 Aug, 2020</td>
                        <td>Ashura</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8 col-lg-6 col-md-6 col-xm-12">
            <div class="card-body">
                <h5 class="card-title">Short Description</h5>
                <p class="card-text">
                    Grameenphone CDR data averaged over the last 14 days:
                    <ol>
                        <li>The number of subscribers in each upazila</li>
                        <li>The number of subscribers moving in to each upazila</li>
                        <li>The number of subscribers moving out of each upazila</li>
                        <li>The number of subscribers not moving </li>
                    </ol>
                    The timeseries plot below shows the change in these measures over time for each upazila within the district.

                </p>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
            <div class="card-body">
                <h5 class="card-title">Data Source & Last Update Date</h5>
                <p class="card-text">Grameenphone CDR</p>
            </div>
        </div>
    </div>
</div>
@push('custom_script')
    <!-- include jQuery -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        var dates = ['08/01/2020', '08/11/2020', '08/15/2020', '08/30/2020'];
        // $(function() {
            $("#datepicker").datepicker({
                numberOfMonths: 1,
                todayHighlight: false,

                dateFormat: 'mm/dd/yy',
                beforeShowDay: highlightDays
                // beforeShowDay: function(d) {
                //     var a = new Date(2020, 7, 1);
                //     a.setDate(a.getDate() + 1);
                //     // b.setDate(b.getDate() + 5);
                //     return [true, a <= d ? "" : "calender-highlight"];
                // }
            });
        // });

        function highlightDays(date) {
            for (var i = 0; i < dates.length; i++) {
                if (new Date(dates[i]).toString() == date.toString()) {
                    return [true, 'calender-highlight'];
                }
            }
            return [true, ''];
        }

        // mobility_time_seris_graph
        Highcharts.chart('mobility_time_seris_graph', {
            chart: {
                height: 300
            },
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
                    categories: <?php echo json_encode($mobilityDate);?>
                    // categories: ["30\/05\/2020","31\/05\/2020","01\/06\/2020","02\/06\/2020","03\/06\/2020","04\/06\/2020","05\/06\/2020","06\/06\/2020","07\/06\/2020","08\/06\/2020","09\/06\/2020","10\/06\/2020","11\/06\/2020","12\/06\/2020","13\/06\/2020","14\/06\/2020","15\/06\/2020","16\/06\/2020","17\/06\/2020","18\/06\/2020","19\/06\/2020","20\/06\/2020","21\/06\/2020","22\/06\/2020","23\/06\/2020","24\/06\/2020","25\/06\/2020","26\/06\/2020","27\/06\/2020","28\/06\/2020","29\/06\/2020","30\/06\/2020","01\/07\/2020","02\/07\/2020","03\/07\/2020","04\/07\/2020","05\/07\/2020","06\/07\/2020","07\/07\/2020","08\/07\/2020","09\/07\/2020","10\/07\/2020","11\/07\/2020","12\/07\/2020","13\/07\/2020","14\/07\/2020","15\/07\/2020","16\/07\/2020","17\/07\/2020","18\/07\/2020","19\/07\/2020","20\/07\/2020","21\/07\/2020","22\/07\/2020","23\/07\/2020","24\/07\/2020","25\/07\/2020","26\/07\/2020","27\/07\/2020","28\/07\/2020","29\/07\/2020","30\/07\/2020","31\/07\/2020","01\/08\/2020","02\/08\/2020","03\/08\/2020","04\/08\/2020","05\/08\/2020yyy"]
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

            colors: ['#ef4b4b', '#38cb89'],
            {{--series: <?php echo json_encode($mobilityInData);?>--}}
            series: [
                {
                    "type":"area",
                    "name":"MOBILITY IN",
                    "data":[<?php echo $mobilityInData;?>],
                    "marker":{"symbol":"circle"}
                },
                {
                    "type":"area",
                    "name":"MOBILITY OUT",
                    "data":[<?php echo $mobilityOutData;?>],
                    "marker":{"symbol":"circle"}
                }
                    ]
        });
    </script>
@endpush
