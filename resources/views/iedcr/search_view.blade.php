@php
    $divisions = DB::table('upazila')->distinct()->get('division');
@endphp


        <div class="form-group mb-0 mt-3">
            <div class="custom-controls-stacked d-flex">
                <label class="custom-control custom-radio mr-2">
                    <input type="radio" class="custom-control-input hierarchy_level natioanl_level" name="hierarchy_level"
                           value="national" @php if (request()->get('hierarchy_level') != 'divisional') { echo "checked"; } @endphp>
                    <span class="custom-control-label">জাতীয় পর্যায়</span> </label>
                <label class="custom-control custom-radio mr-2">
                    <input type="radio" class="custom-control-input hierarchy_level divisional_level" name="hierarchy_level"
                           value="divisional" @php if (request()->get('hierarchy_level') == 'divisional') { echo "checked"; } @endphp>
                    <span class="custom-control-label">বিভাগীয় পর্যায়</span> </label>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body p-0">
                <div class="btn-group mt-2 mb-2 mr-1">
                    <select class="btn btn-outline-primary dropdown-toggle division" name="division" id="">
                        <option value="">সকল বিভাগ</option>
                        @foreach($divisions as $division)
                            <option @if(request()->get('division') == $division->division) selected @endif value="{{$division->division}}">{{$division->division}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="btn-group mt-2 mb-2 mr-1">
                    <select class="btn btn-outline-primary dropdown-toggle district" name="district" id="">

                        @if(request()->has('district') && request()->get('district') != '')
                            <option value="{{ request()->get('district') }}">{{ request()->get('district') }}</option>
                        @endif
                        <option value="">সকল জেলা</option>



                    </select>
                </div>
                <div class="btn-group mt-2 mb-2 mr-1 d-none">
                    <select class="btn btn-outline-primary dropdown-toggle upazilla" name="upazila" id="">
                        <option value="">
                            All Upazilla
                        </option>
                    </select>
                </div>
                <div class="btn-group">
                    <div class="col-md-6 pl-0">
                        <input class="form-control" placeholder="From Date" type="date" name="from_date" value="{{ request()->get('from_date') }}">
                    </div>
                    <div class="col-md-6 pl-0">
                        <input class="form-control" placeholder="To Date" type="date" name="to_date" value="{{ request()->get('to_date') }}">
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-primary-color pl-0" type="submit">
                            <svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"
                                 height="100%" width="100%" preserveAspectRatio="xMidYMid meet"
                                 focusable="false">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path
                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>



@push('custom_script')
    <script>
        function htmlEntities(str) {
            return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
        }

        $('.division').change(function (e) {
            var division = $(".division").val();
            // console.log(division);
            $.ajax({
                type: 'GET',
                url: '{{route('get-district-from-division')}}',
                dataType: 'json',
                data: {division: division},
                success: function (data) {
                    console.log(data);
                    if (data.status == 1) {
                        $('.district').empty();
                        html = '<option value="">Select District</option>';
                        for (var i = 0; i < data.data.length; i++) {
                            var selectedDistrict = "{{ htmlentities(request()->get('district')) }}";
                            var selectedValue = '';
                            if (selectedDistrict == htmlEntities(data.data[i].district)) {
                                selectedValue = 'selected';
                            }
                            html += '<option ' + selectedValue +' value="' + htmlEntities(data.data[i].district) + '">' + data.data[i].district + '</option>';
                        }
                        $('.district').append(html);
                    }
                },
                error: function (data) {

                }
            });

        });

        $('.district').change(function (e) {
            var district = $(".district").val();
            // console.log(district);
            $.ajax({
                type: 'GET',
                url: '{{route('get-upazilla-from-district')}}',
                dataType: 'json',
                data: {district: district},
                success: function (data) {
                    console.log(data);

                    if (data.status == 1) {
                        $('.upazilla').empty();
                        html = '<option value="">Select Upazilla</option>';
                        for (var i = 0; i < data.data.length; i++) {
                            var selectedUpazilla = '{{ htmlentities(request()->get('upazila')) }}';
                            var selectedValue = '';
                            if (selectedUpazilla == htmlEntities(data.data[i].upazila_en)) {
                                selectedValue = 'selected';
                            }
                            html += '<option ' + selectedValue + ' value="' + htmlEntities(data.data[i].upazila_en) + '">' + data.data[i].upazila_en + '</option>';
                        }
                        $('.upazilla').append(html);
                    }
                },
                error: function (data) {

                }
            });

        });
        $('.natioanl_level').on('click', function () {
            $('.division').prop('selectedIndex',0);
            $('.district').prop('selectedIndex',0);
            $('.upazilla').prop('selectedIndex',0);
            $('.division').prop('disabled', 'disabled');
            $('.district').prop('disabled', 'disabled');
            $('.upazilla').prop('disabled', 'disabled');
        });

        $('.divisional_level').on('click', function () {
            $('.division').prop('disabled', false);
            $('.district').prop('disabled', false);
            $('.upazilla').prop('disabled', false);
        });

        if($('.divisional_level').is(':checked')) {
            $('.division').prop('disabled', false);
            $('.district').prop('disabled', false);
            $('.upazilla').prop('disabled', false);
        } else {
            $('.division').prop('selectedIndex',0);
            $('.district').prop('selectedIndex',0);
            $('.upazilla').prop('selectedIndex',0);
            $('.division').prop('disabled', 'disabled');
            $('.district').prop('disabled', 'disabled');
            $('.upazilla').prop('disabled', 'disabled');
        }
    </script>
@endpush
