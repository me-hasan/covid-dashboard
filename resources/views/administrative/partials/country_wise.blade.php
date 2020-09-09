<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <h5 class="card-header">
                <div class="float-right d-none">
                    <div class="division-dd-wrapper">
                        <div class="d-flex">
                            <input type="text" name="from_date" value="03/08/2020" placeholder="তারিখ নির্বাচন করুন" />
                            -
                            <input type="text" name="to_date" value="08/11/2020" placeholder="তারিখ নির্বাচন করুন" />
                        </div>
                    </div>
                </div>
                সারা দেশ</h5>
            <div class="card-body p-0 daily-charge">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="py-1" style="text-align: center;">
                                    <a class="float-right btn btn-link" href="{!! route('dashboard', ['datatype' => 'detailsmap']) !!}">বিস্তারিত</a>
                                    @if($_divisionSelName && $_divisionSelName!='')
                                    <div id="map-container"></div>
                                    @else
                                    <img src="{!! asset('assets/images/covid-19-bangladesh-map.png') !!}" alt="Covid-19" width="250" />
                                    <img src="{!! asset('assets/images/bangladesh-map.png') !!}" alt="Covid-19" width="300" height="100" style="padding-bottom:20px;" />
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-8">
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div id="division_design"></div>
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
</div>
