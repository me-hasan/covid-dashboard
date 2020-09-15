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
                            <select name="division[]"  class="select2 form-control btn-outline-primary division_select" multiple="true">
                                {{--<option value="All">সব বিভাগ</option>--}}
                                @foreach($division_list as $division)
                                <option value="{!! $division !!}">{!! en2bnTranslation($division) !!} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-label pl-2 pt-2 mr-1">District</div>
                        <div>
                            <select name="district[]" class="select2 form-control btn-outline-primary select_district" multiple="true">
                                <option value="DHAKA">সব জেলা </option>
                            </select>
                        </div>
                        <div class="form-label pl-2 pt-2 mr-1">Upazila</div>
                        <div>
                            <select name="upazila[]" class="select2 form-control btn-outline-primary select_upazilla" multiple="true">
                                <option value="DHAKA">সব উপজিলা</option>
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
            //let search_params = url.searchParams;
            //search_params.append('district',district);
           // search_params.append('hierarchy_level','divisional');
            if($('.division_select').val() && $('.division_select').val()!='') {
                $('.select_upazilla').val(null).trigger("change");
            }

            if($('.select_district').val() && $('.select_district').val()!='') {
                $('.division_select').val(null).trigger("change");
            }
            if($('.select_upazilla').val() && $('.select_upazilla').val()!='') {
                $('.select_district').val(null).trigger("change");
            }
            $.ajax({

                type:"GET",
                url:url.toString(),
                data: {
                    'division': $('.division_select').val(),
                    'district' : $('.select_district').val(),
                    'upazilla' : $('.select_upazilla').val(),
                },
                timeout: 3000,
                success: function(data) {
                    console.log(data);
                    if(data.status == 'success'){

                        directComparisionCall(data);

                        if(data.district_data) {

                            formatdistrictData(data.district_data);
                        }
                        if(data.upazillaData){
                            formatUpazilladata(data.upazillaData);
                        }
                    } else {
                        alert("Something Went Wrong");
                    }
                },
                error: function (request, status, error) {
                    console.log("Request Param");
                    console.log(request.responseText);
                    console.log("Status Param");
                    console.log(status);
                    console.log(error);
                }
            });
            return false;
        }

        function directComparisionCall(data) {
            console.log(data.series_data);
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
                    categories: JSON.parse(data.categories)

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
                series:  JSON.parse(data.series_data)
            });
        }

        function formatdistrictData(districtdata) {
            var districtDataInfo  = districtdata;
            var html = '';
            console.log(districtDataInfo);
            $.each(districtDataInfo, function(key, value) {
                html += "<option value="+key+">"+value.bn+"</option>";
            });
            $('.select_district').html(html);
        }

        function formatUpazilladata(upazillaData) {
            var upazillaDataInfo  = upazillaData;
            var html = '';
            //console.log(districtDataInfo);
            $.each(upazillaDataInfo, function(key, value) {
                html += "<option value="+key+">"+value.bn+"</option>";
            });
            $('.select_upazilla').html(html);
        }

        $('.district_cms_search').on('click', function (e){
            e.preventDefault();

            ajax_call();

        });
    </script>
@endpush
