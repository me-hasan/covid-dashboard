<!-- Start :: Disease Progression -->
<div class="card">
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card-header cart-height-customize">
                <h3 class="card-title">রোগের অগ্রগতি</h3>
                <div class="card-options">
                    <div class="btn-list">
                        <a href="#" class="btn btn-primary btn-sm">Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card-header">
                <h3 class="card-title">সংক্রমণের পরিবর্তন ও পূর্বাভাস</h3>
            </div>
            <div class="card-body">
                <div id="national_infected_trend"></div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Insight</h5>
                <p class="card-text">
                    Content will place here.
                </p>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card-header">
                <h3 class="card-title">অঞ্চল তুলনা</h3>
            </div>
            <div class="card-body">
                <div class="d-flex flex-row justify-content-end">
                    <div class="form-label pt-2 mr-1">Division</div>
                    <div>
                        <select class="form-control btn-outline-primary">
                            <option value="DHAKA">ঢাকা </option>
                            <option value="RAJSHAHI">রাজশাহী </option>
                            <option value="MYMENSINGH">ময়মনসিংহ </option>
                            <option value="KHULNA">খুলনা </option>
                            <option value="CHATTOGRAM">চট্রগ্রাম </option>
                            <option value="BARISAL">বরিশাল </option>
                            <option value="RANGPUR">রংপুর </option>
                            <option value="SYLHET">সিলেট </option>
                        </select>
                    </div>
                    <div class="form-label pl-2 pt-2 mr-1">District</div>
                    <div>
                        <select class="form-control btn-outline-primary">
                            <option value="DHAKA">ঢাকা </option>
                            <option value="RAJSHAHI">রাজশাহী </option>
                            <option value="MYMENSINGH">ময়মনসিংহ </option>
                            <option value="KHULNA">খুলনা </option>
                            <option value="CHATTOGRAM">চট্রগ্রাম </option>
                            <option value="BARISAL">বরিশাল </option>
                            <option value="RANGPUR">রংপুর </option>
                            <option value="SYLHET">সিলেট </option>
                        </select>
                    </div>
                    <div class="form-label pl-2 pt-2 mr-1">Upazila</div>
                    <div>
                        <select class="form-control btn-outline-primary">
                            <option value="DHAKA">ঢাকা </option>
                            <option value="RAJSHAHI">রাজশাহী </option>
                            <option value="MYMENSINGH">ময়মনসিংহ </option>
                            <option value="KHULNA">খুলনা </option>
                            <option value="CHATTOGRAM">চট্রগ্রাম </option>
                            <option value="BARISAL">বরিশাল </option>
                            <option value="RANGPUR">রংপুর </option>
                            <option value="SYLHET">সিলেট </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="district_comparision"></div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Insight</h5>
                <p class="card-text">
                    Content will place here.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- End :: Disease Progression -->
@push('custom_script')
    <script>
        // Highcharts Infected and Forcast Chart
        Highcharts.chart('national_infected_trend', {
            chart: {
                height: 500
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
                verticalAlign: 'bottom'
            },

            credits:{
                enabled:false
            },

            xAxis: {
                categories: ["\u09e6\u09ea\u09ae\u09be\u09b0","\u09e7\u09e7\u09ae\u09be\u09b0","\u09e7\u09ee\u09ae\u09be\u09b0","\u09e8\u09eb\u09ae\u09be\u09b0","\u09e6\u09e7\u098f\u09aa\u09cd\u09b0\u09bf","\u09e6\u09ee\u098f\u09aa\u09cd\u09b0\u09bf","\u09e7\u09eb\u098f\u09aa\u09cd\u09b0\u09bf","\u09e8\u09e8\u098f\u09aa\u09cd\u09b0\u09bf","\u09e8\u09ef\u098f\u09aa\u09cd\u09b0\u09bf","\u09e6\u09ec\u09ae\u09c7","\u09e7\u09e9\u09ae\u09c7","\u09e8\u09e6\u09ae\u09c7","\u09e8\u09ed\u09ae\u09c7","\u09e6\u09e9\u099c\u09c1\u09a8","\u09e7\u09e6\u099c\u09c1\u09a8","\u09e7\u09ed\u099c\u09c1\u09a8","\u09e8\u09ea\u099c\u09c1\u09a8","\u09e6\u09e7\u099c\u09c1\u09b2","\u09e6\u09ee\u099c\u09c1\u09b2","\u09e7\u09eb\u099c\u09c1\u09b2","\u09e7\u09ed\u099c\u09c1\u09b2","\u09e8\u09ea\u099c\u09c1\u09b2","\u09e9\u09e7\u099c\u09c1\u09b2"]    },

            yAxis: {
                title: {
                    text: ''
                }
            },

            plotOptions: {
                series: {
                    fillOpacity:0
                }
            },

            colors: ["#00008b", "#e08658"],
            series: [{
                name: 'সংক্রামিত',
                data: [0,3,8,39,54,218,1231,3772,7103,11719,17822,26738,38292,55140,74865,98489,122660,149258,172134,196323,null,null,null],
                type : 'area',
                marker:{symbol:'circle'}

            }, {
                name: 'ফোরকাস্ট',
                data: [null,null,null,null,null,null,null,null,null,16353,24383,32471,40660,48850,70373,107342,146700,186059,225417,264775,276020,315378,354737],
                type: 'area',
                marker : {symbol : 'circle'},
                dashStyle: 'shortdot'
            }],
        });

        // District Comparision
        Highcharts.chart('district_comparision', {
            title: {
                text: ''
            },

            subtitle: {
                text: ''
            },

            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            },

            credits:{
                enabled:false
            },

            xAxis: {
                categories: ["07\/11\/2020","08\/11\/2020","09\/11\/2020","10\/11\/2020","11\/11\/2020","12\/11\/2020","13\/11\/2020","14\/11\/2020","15\/11\/2020","16\/11\/2020","17\/11\/2020","18\/11\/2020"]
            },

            yAxis: {
                title: {
                    text: ''
                }/*,
					labels: {
						formatter: function() {
						   return this.value+"%";
						}
					},
					max: 15*/
            },

            plotOptions: {
                series: {
                    fillOpacity:0
                }
            },

            colors: ["#ff0000", "#bfbfbf", "#bfbfbf"],
            series: [{"type":"spline","name":"Division","data":[300,320,450,250,450,200,280,400,620,452,505,637],"marker":{"enabled": false, "symbol":"circle"}},
                {"type":"spline","name":"Dhaka","data":[360,406,816,523,470,571,643,521,578,657,777,563],"marker":{"enabled": false, "symbol":"circle"},dashStyle: 'shortdot'},
                {"type":"spline","name":"Gopalgonj","data":[250,120,150,350,250,100,180,350,420,402,445,537],"marker":{"enabled": false, "symbol":"circle"},dashStyle: 'shortdot'}]
        });
    </script>
@endpush
