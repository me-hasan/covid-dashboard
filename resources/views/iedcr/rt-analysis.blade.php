@extends('iedcr.default')
@section('bread_crumb_active','Rt Analysis')
@section('search_view')
    <div class="d-flex order-lg-2 ml-auto">
        <form action="{{ route('iedcr.rt_analysis') }}" class="d-flex order-lg-12 ml-auto">
            @include('iedcr.search_view')
        </form>
    </div>
@endsection
@section('content')

    {{--<iframe id="rtIframeData" width="100%" height="2500" src="http://dev.pipilika.com:9899/" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>--}}


    <div class="card">


        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card-header">
                    <div class="col-sm-12">
                        <h3 class="card-title b1">{!! $des_2->component_name_beng ?? '' !!}</h3>
                    </div>

                </div>
                <div class="card-body">
                    <form action="">
                        <div class="d-flex flex-row justify-content-end">
                            <div class="col-md-2 pl-0">
                                <input class="form-control from_date_division_chng" placeholder="From Date" type="date" name="from_date" value="{{ request()->get('from_date') }}">
                            </div>
                            <div class="col-md-2 pl-0">
                                <input class="form-control to_date_division_chng" placeholder="To Date" type="date" name="to_date" value="{{ request()->get('to_date') }}">
                            </div>
                            <div class="form-label pt-2 mr-1 b1">বিভাগ</div>
                            <div>
                                <select name="division[]"  class="select2 form-control btn-outline-primary division_select" multiple="true">
                                    {{--<option value="All">সব বিভাগ</option>--}}
                                    @foreach($division_list as $division)
                                        <option value="{!! $division !!}" class="b1">{!! en2bnTranslation($division) !!} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-label pl-2 pt-2 mr-1 b1">জেলা</div>
                            <div>
                                <select name="district[]" class="select2 form-control btn-outline-primary select_district" multiple="true">
                                    <!-- <option value="DHAKA" class="b1">সব জেলা </option> -->
                                    @foreach($district_list as $district)
                                        <option value="{!! $district->district !!}" class="b1">{!! en2bnTranslation($district->district) !!} </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- <div class="form-label pl-2 pt-2 mr-1">Upazila</div>
                            <div>
                                <select name="upazila[]" class="select2 form-control btn-outline-primary select_upazilla" multiple="true">
                                    <option value="DHAKA">সব উপজিলা</option>
                                </select>
                            </div> -->
                            <button class="btn btn-sm district_cms_search b1" type="submit" >
                                <svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"
                                     height="100%" width="100%" preserveAspectRatio="xMidYMid meet"
                                     focusable="false">
                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                    <path
                                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                                </svg>
                            </button>
                        </div>

                    </form>

                </div>
                <div class="card-body">
                    <div id="district_comparision"></div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card-body text-justify">
                            <h5 class="card-title b1">বর্ণনা</h5>
                            <p class="card-text b1">
                                {!! $des_2->description_beng ?? '' !!}
                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection

@push('custom_script')
    <script>
       /* $('#rtIframeData').load(function(){
            $('#rtIframeData').contents().find('nav').hide();
            $('#rtIframeData').contents().find('#toppanel').hide();
        });*/
       function englishToBangla(num) {
           var num = new Number(num).toLocaleString("bn-BD");
           return num;
       }
        Highcharts.chart('district_comparision', {
            chart: {
                style: {
                    fontFamily: 'SolaimanLipi'
                }
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
                verticalAlign: 'bottom',
                itemStyle: {
                    fontSize: "16px",
                    fontWeight: "normal"
                }
            },

            credits:{
                enabled:false
            },

            xAxis: {
                categories: {!! $categories !!},
                endOnTick: true,
                showLastLabel: true,
                labels: {
                    formatter: function() {
                        return this.axis.categories[Math.min(this.pos,this.axis.categories.length-1)];
                    }
                }
            },
            tooltip: {
                formatter: function() {
                    return `${this.series.name}( ${this.x} ) : <b>${englishToBangla(this.y)}</b>`;
                }
            },

            yAxis: {
                title: {
                    text: 'দৈনিক আক্রান্তের সংখ্যা',
                    style: {
                        fontSize: 18,
                        fontFamily: 'SolaimanLipi'
                    }
                },
                labels: {
                    formatter: function() {
                        return englishToBangla(this.value);
                    }
                }
            },

            plotOptions: {
                series: {
                    fillOpacity:0
                }
            },

            colors: ['#c94b7d', '#7d5f9d', '#ef4b4b','#b25b3f','#5c687b','#60b5d1','#3acc76','#817376'],
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



            if($('.select_district').val() && $('.select_district').val()!='') {
                console.log($('.selected_area_comparision').val());
                if(($('.division_select').val() != '') && ($('.selected_area_comparision').val()=='district')) {
                    $('.select_district').val(null).trigger("change");
                } else {
                    if($('.division_select').val() && $('.division_select').val()!='') {
                        $('.division_select').val(null).trigger("change");
                    }
                    $('.selected_area_comparision').val('district');
                }

            }
            if($('.division_select').val() && $('.division_select').val()!='') {
                $('.select_upazilla').val(null).trigger("change");
                if($('.selected_area_comparision').val()=='district') {
                    $('.selected_area_comparision').val('division');
                }

            }
            if($('.select_upazilla').val() && $('.select_upazilla').val()!='') {
                $('.select_district').val(null).trigger("change");
            }
            var form_date = '{!! request()->get('from_date') !!}';
            var to_date = '{!! request()->get('to_date') !!}'
            if($('.from_date_division_chng').val() && $('.from_date_division_chng').val() !=''){
                form_date =   $('.from_date_division_chng').val();
            }
            if($('.to_date_division_chng').val() && $('.to_date_division_chng').val() !=''){
                to_date =   $('.to_date_division_chng').val();
            }
            $.ajax({

                type:"GET",
                url:url.toString(),
                data: {
                    'division': $('.division_select').val(),
                    'district' : $('.select_district').val(),
                    'upazilla' : $('.select_upazilla').val(),
                    'from_date': form_date,
                    'to_date': to_date
                },
                timeout: 30000,
                success: function(data) {
                    console.log(data);
                    if(data.status == 'success'){

                        directComparisionCall(data);

                        /*if(data.district_data) {

                            formatdistrictData(data.district_data);
                        }*/
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
                    verticalAlign: 'bottom',
                    itemStyle: {
                        fontSize: "16px",
                        fontWeight: "normal"
                    }
                },

                credits:{
                    enabled:false
                },

                xAxis: {
                    categories: JSON.parse(data.categories),
                    endOnTick: true,
                    showLastLabel: true,
                    labels: {
                        formatter: function() {
                            return this.axis.categories[Math.min(this.pos,this.axis.categories.length-1)];
                        }
                    }
                },

                tooltip: {
                    formatter: function() {
                        return `${this.series.name} ( ${this.x} ): <b>${englishToBangla(this.y)}</b>`;
                    }
                },
                yAxis: {
                    title: {
                        text: ''
                    },
                    labels: {
                        formatter: function() {
                            return englishToBangla(this.value);
                        }
                    }
                },

                plotOptions: {
                    series: {
                        fillOpacity:0
                    }
                },

                colors: ['#c94b7d', '#7d5f9d', '#ef4b4b','#b25b3f','#5c687b','#60b5d1','#3acc76','#817376'],
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
