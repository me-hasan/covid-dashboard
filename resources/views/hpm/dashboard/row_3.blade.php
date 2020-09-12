<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">IMPACT IN POPULATION</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div id="death_impact_bar"></div>
                        <div class="card-body">
                            <h5 class="card-title">Insight</h5>
                            <p class="card-text">
                                Content will place here.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div id="age_wise_death_distribution"></div>
                        <div class="card-body">
                            <h5 class="card-title">Insight</h5>
                            <p class="card-text">
                                Content will place here.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@push('custom_script')
    <script>
        // Death Impact Bar
        Highcharts.chart('death_impact_bar', {
            chart: {
                type: 'column'
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
                enabled:true
            },
            yAxis: {
                title: {
                    text: ''
                },
                labels: {
                    formatter: function() {
                        return this.value;
                    }
                }
            },
            xAxis: {
                categories: ["Death:","Death:","Death:", "Death:"],
                labels: {
                    enabled: false
                }
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b>'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                },
                series: {
                    pointWidth: 30
                }
            },
            colors: ['#38cb89', '#ffa600', '#ef4b4b'],
            series: [{
                name: 'Doctor',
                data: [5000, null, null, null]

            }, {
                name: 'Police',
                data: [null, 4084, null]

            }, {
                name: 'Banker',
                data: [null, null, 2098, null]

            }, {
                name: 'Nurse',
                data: [null, null, null, 3500]

            }]
        });

        // Age Wise Death Distribution
        Highcharts.chart('age_wise_death_distribution', {
            chart: {
                type: 'bar'
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
                        return this.value;
                    }
                }
            },
            xAxis: {
                categories: ["0-10","11-20","21-30","31-40","41-50","51-60","61+"]
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b>',
                /*valueSuffix: ' cm',
                shared: true*/
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            colors: ['#38cb89', '#ef4b4b'],
            series: [{
                name: 'Male',
                data: [49, 71, 106, 129, 144, 176, 135]

            }, {
                name: 'Female',
                data: [83, 78, 98, 93, 106, 84, 105]

            }]
        });
    </script>
@endpush
