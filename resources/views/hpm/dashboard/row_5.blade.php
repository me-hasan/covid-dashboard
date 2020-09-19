<!-- <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Patient Care</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div id="divition_wise_two_weeks_change"></div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

@push('custom_script')
    <script>
        // Divition Wise Two Weeks Change
        Highcharts.chart('divition_wise_two_weeks_change', {
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
                    text: 'Percentage'
                },
                labels: {
                    formatter: function() {
                        return this.value+"%";
                    }
                },
                max: 100
            },
            xAxis: {
                categories: ["Dhaka","Khulna","Barisal","Sylhet","Mymensingh","Rajshahi","Rangpur","Chittagong"]
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y}%</b>'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            colors: ['#ef4b4b', '#38cb89'],
            series: [{
                name: 'COVID',
                data: [49, 71, 76, 29, 44, 76, 35, 48]

            }, {
                name: 'Non-Covid',
                data: [83, 78, 98, 93, 56, 84, 55]

            }]
        });
    </script>
@endpush
