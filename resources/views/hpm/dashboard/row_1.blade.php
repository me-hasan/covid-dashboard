<!-- Start :: Disease Progression -->

<div class="card">
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card-header cart-height-customize">
                <h3 class="card-title">রোগের অগ্রগতি</h3>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card-header">
                <h3 class="card-title">সংক্রমণের ক্রমবর্ধমান পরিবর্তন</h3>
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
                <form action="">
                    <div class="d-flex flex-row justify-content-end">
                        <div class="form-label pt-2 mr-1">Division</div>
                        <div>
                            <select name="division[]"  class="selcet2 form-control btn-outline-primary">
                                <option value="All">সব বিভাগ</option>
                                @foreach($division_list as $division)
                                <option value="{!! $division !!}">{!! en2bnTranslation($division) !!} </option>
                                @endforeach
                                {{--<option value="RAJSHAHI">রাজশাহী </option>
                                <option value="MYMENSINGH">ময়মনসিংহ </option>
                                <option value="KHULNA">খুলনা </option>
                                <option value="CHATTOGRAM">চট্রগ্রাম </option>
                                <option value="BARISAL">বরিশাল </option>
                                <option value="RANGPUR">রংপুর </option>
                                <option value="SYLHET">সিলেট </option>--}}
                            </select>
                        </div>
                        <div class="form-label pl-2 pt-2 mr-1">District</div>
                        <div>
                            <select name="district[]" class="form-control btn-outline-primary">
                                <option value="DHAKA">সব জেলা </option>
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
                            <select name="upazila[]" class="form-control btn-outline-primary">
                                <option value="DHAKA">সব উপজিলা</option>
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
                        <button class="btn btn-sm district_cms_search" type="submit" >Search </button>
                    </div>

                </form>

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
                categories: @JSON($row1_left_trend_date)  
            },

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

            colors: ["#00008b"],
            series: [{
                name: 'সংক্রামিত',
                data: [<?= implode(",",$row1_left_trend_infected_data)?>],
                type : 'area',
                marker:{symbol:'circle'}

            }],
        });

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
                //categories: ["07\/11\/2020","08\/11\/2020","09\/11\/2020","10\/11\/2020","11\/11\/2020","12\/11\/2020","13\/11\/2020","14\/11\/2020","15\/11\/2020","16\/11\/2020","17\/11\/2020","18\/11\/2020"]
                categories: {!! $categories !!}

            },

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

            colors: ['#38cb89', '#ffa600', '#ef4b4b'],
            series:  {!! $series_data !!}
        });

        // District Comparision
      //  directComparisionCall();

        function ajax_call(){
            let result;
            let url = new URL('{!! route('hpm.get_district_comparision') !!}');
            let search_params = url.searchParams;
            //search_params.append('district',district);
            search_params.append('hierarchy_level','divisional');
            $.ajax({

                type:"GET",
                url:url.toString(),
                timeout: 3000,
                success: function(data) {
                    console.log(data);
                    if(data.status == 'success'){

                        //directComparisionCall(data);
                    } else {
                        alert("Something Went Wrong");
                    }
                }
            });
        }

        function directComparisionCall(data) {
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
                    //categories: ["07\/11\/2020","08\/11\/2020","09\/11\/2020","10\/11\/2020","11\/11\/2020","12\/11\/2020","13\/11\/2020","14\/11\/2020","15\/11\/2020","16\/11\/2020","17\/11\/2020","18\/11\/2020"]
                    categories: data.categories

                },

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

                colors: ['#38cb89', '#ffa600', '#ef4b4b'],
                series:  data.se
            });
        }
        $('.district_cms_search').on('click', function (e){
            e.preventDefault();

        });
    </script>
@endpush
