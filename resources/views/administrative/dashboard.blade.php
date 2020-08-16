@extends('administrative.default')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-filter-area mb-3">
                        <div class="d-flex">
                            <form action="{!! route('dashboard') !!}" method="get" class="row">
                                <div class="dropdown mr-1">
                                    <select class="btn btn-sm btn-custom dropdown-toggle" name="division" id="division_list">
                                        <option value="all">সব বিভাগ</option>
                                        @foreach($_allDivisionList as $_divisionName => $_infByDivision)
                                            <option class="division-option" value="<?php echo $_divisionName; ?>"<?php if($_divisionSelName == $_divisionName){?> selected="selected"<?php }?>><?php echo en2bnTranslation($_divisionName); ?></option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="dropdown mr-1">
                                    <select class="btn btn-sm btn-custom dropdown-toggle" name="district" id="district_list">
                                        <option value="all">জেলা</option>
                                        @foreach($_districtList as $_districtName => $_districtInfo)
                                            <option class="district-option" value="<?php echo $_districtName; ?>" rel="<?php echo $_districtInfo['division']; ?>"<?php if($_districtSelName == $_districtName){?> selected="selected"<?php }?>><?php echo en2bnTranslation($_districtName); ?></option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="dropdown mr-1">
                                    <select class="btn btn-sm btn-custom dropdown-toggle" name="upazilla" id="upazilla_list">
                                        <option value="all">উপজেলা</option>
                                        @foreach($_upazillaList as $_indexKey => $_upazillaInfo)
                                            <option class="upazilla-option" value="<?php echo $_upazillaInfo[0]; ?>" rel="<?php echo $_upazillaInfo[2]; ?>"<?php if($_upazillaSelName == $_upazillaInfo[0]){?> selected="selected"<?php }?>><?php echo $_upazillaInfo[1]; ?></option>
                                        @endforeach
                                    </select>
                                </div>
                                <button class="btn btn-primary btn-sm" type="submit"><i class="mdi mdi-map-search menu-icon"></i> অনুসন্ধান</button>
                            </form>
                        </div>
                    </div>
                </div>
{{--                {!! dd($_xAxisData) !!}--}}
               @include('administrative.partials.infected_24_hours')
            </div>
            @include('administrative.partials.country_wise')
            <div class="row">
                @include('administrative.partials.hospital_beds')
                @include('administrative.partials.zone_wise')
            </div>
            <div class="row">
                @include('administrative.partials.important_index')
            </div>
            <div class="row">
                @include('administrative.partials.immigration')
                @include('administrative.partials.top_infected_city')
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between"> <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 </span> </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->

@endsection
