<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <h5 class="card-header">
                <div class="float-right">
                    <div class="division-dd-wrapper">
                        <div class="d-flex">
                            <input type="text" name="from_date" value="03/08/2020" placeholder="তারিখ নির্বাচন করুন" />
                            -
                            <input type="text" name="to_date" value="08/11/2020" placeholder="তারিখ নির্বাচন করুন" />
                            <!--<label for="divisionList" class="p-0 mr-2 mt-1">বিভাগ</label>
                                                <select class="form-control form-control-sm" id="divisionList" onchange="districtAjaxCall(this.value);">
                                                    <option value="all">সব বিভাগ</option>
                                                    <option value="DHAKA">ঢাকা </option>
                                                    <option value="CHATTOGRAM">চট্রগ্রাম </option>
                                                    <option value="RAJSHAHI">রাজশাহী </option>
                                                    <option value="SYLHET">সিলেট</option>
                                                    <option value="MYMENSINGH">ময়মনসিংহ</option>
                                                    <option value="BARISAL">বরিশাল</option>
                                                    <option value="KHULNA">খুলনা </option>
                                                    <option value="RANGPUR">রংপুর </option>
                                                </select>-->
                        </div>
                    </div>
                </div>
                সারা দেশ</h5>
            <div class="card-body p-0 daily-charge">
                <!--<ul class="nav nav-tabs justify-content-end mtm" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> বিভাগ</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">জেলা</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"> উপজেলা</a>
                                    </li>
                                </ul>-->
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="py-1" style="text-align: center;">
{{--                                    <a class="float-right btn btn-link" href="{!! route('dataframe', ['datatype' => 'detailsmap']) !!}">বিস্তারিত</a>--}}
                                    <a class="float-right btn btn-link" href="{!! route('dashboard', ['datatype' => 'detailsmap']) !!}">বিস্তারিত</a>
                                    @if($_divisionSelName && $_divisionSelName!='')
                                    <div id="map-container"></div>
                                    @else
                                    <img src="{!! asset('assets/images/covid-19-bangladesh-map.png') !!}" alt="Covid-19" width="250" />
                                    <img src="{!! asset('assets/images/bangladesh-map.png') !!}" alt="Covid-19" width="300" height="100" style="padding-bottom:20px;" />
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <table class="table  mt-4 mb-3 table-bordered table-striped small table-sm" id="district-infecteed">
                                    <thead>
                                    <tr>
                                        <th scope="col"><strong>বিভাগ</strong></th>
                                        <th scope="col"><strong>জেলা</strong></th>
                                        <th scope="col"><strong>আক্রান্ত</strong></th>
                                        <th scope="col"><strong>Rt সংখ্যা</strong></th>
                                        <th scope="col"><strong>ডাবলিং টাইম</strong></th>
                                        <th scope="col"><strong>দৈনিক পরিবর্তন (১৪ দিন)</strong></th>
                                    </tr>
                                    </thead>
                                </table>
                                <!--<table class="table  mt-1 mb-3 table-bordered table-striped small table-sm" id="ajaxres-infecteed"></table>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <!--<div class="progress mb-2">
                                                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>-->
                                <div id="division"></div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div id="district"></div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div id="upozilla"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <h5 class="card-header">সার্বিক পরিস্থিতির মানচিত্র  <a style="float:right;" href="map-details.php" target="_blank">বিস্তারিত</a></h5>
                    <div class="card-body">

                    </div>
                </div>
            </div>-->
</div>
