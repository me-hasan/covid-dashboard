<!-- Row -->
<div class="card">
  <div class="row">
    <div class="col-xl-12 col-md-12">
      <div class="card-header cart-height-customize">
        <h3 class="card-title">দেশব্যাপী হাসপাতালের সক্ষমতা এবং ভর্তি</h3>
        <div class="card-options">
          <div class="btn-list"> <a href="#" class="btn btn-primary btn-sm" style="visibility: hidden;">বিস্তারিত</a> </div>
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
              <div class="btn-list"> <a href="#" class="btn btn-primary btn-sm">বিস্তারিত</a> </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered table-vcenter text-nowrap">
              <thead >
                <tr>
                  <td></td>
                  <td colspan="2" class="text-center fs-18">জেনারেল বেড</td>
                  <td colspan="2" class="text-center fs-18">আইসিইউ বেড</td>
                </tr>
              </thead>
              <tbody class="fs-16">
                <tr>
                  <td></td>
                  <td>ফাঁকা</td>
                  <td>ভর্তি</td>
                  <td>ফাঁকা</td>
                  <td>ভর্তি</td>
                </tr>
                <tr>
                  <td>সারা দেশ</td>
                  <th>15255</th>
                  <td>10963</td>
                  <th>545</th>
                  <td>213</td>
                </tr>
                <tr>
                  <td>ঢাকা শহর</td>
                  <th>7037</th>
                  <td>4794</td>
                  <th>307</th>
                  <td>97</td>
                </tr>
                <tr>
                  <td>চট্টগ্রাম শহর</td>
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
</div>
<!-- End Row -->
@push('custom_script')
<script type="text/javascript">
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
            text: 'হাসপাতাল জেনারেল বেড',
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
                ['ফাঁকা', 72.0],
                ['ভর্তি', 28.0]
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
            text: 'হাসপাতাল আইসিইউ বেড'
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
                ['ফাঁকা', 39.0],
                ['ভর্তি', 61.0]
            ]
        }]
    });
</script>
@endpush