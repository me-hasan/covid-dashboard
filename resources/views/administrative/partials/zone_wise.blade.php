<div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
        <h5 class="card-header color-transparent">জোন ভিত্তিক তথ্য</h5>
        <div class="card-body">
            <ul class="nav nav-tabs mtm" id="myTab1" role="tablist">
                <li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true"><h5><span class="text-danger">রেড জোন</span></h5></a></li>
                <li class="nav-item" role="presentation"> <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false"><h5> <span class="text-warning">ইয়েলো জোন</span> </h5></a> </li>
                <li class="nav-item" role="presentation"> <a class="nav-link" id="contact-tab1" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact1" aria-selected="false"><h5> <span class="text-success">গ্রিন জোন</span> </h5></a> </li>
            </ul>
            <div class="tab-content" id="myTab1Content">
                <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <table class="table table-bordered table-sm">
                                <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">আক্রান্ত /<br/>
                                        ১০ লাখে</th>
                                    <th scope="col">ডাবলিং<br/>
                                        রেট</th>
                                    <th scope="col">Rt<br/>
                                        সংখ্যা</th>
                                    <th scope="col">টেস্ট <br/>
                                        পজিটিভিটি</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($red_zone_data as $red_zone)
                                    <tr>
                                        <th scope="row">{!! en2bnTranslation($red_zone->ZONE_AREA) !!}</th>
                                        <td>{!! App\Http\Controllers\cabinet\DashboardController::en2bn($red_zone->DOUBLING_RATE) !!}</td>
                                        <td>{!! App\Http\Controllers\cabinet\DashboardController::en2bn($red_zone->Rt) !!}</td>
                                        <td>{!! App\Http\Controllers\cabinet\DashboardController::en2bn($red_zone->TEST_POSITIVITY) !!}</td>
                                        <td>{!! App\Http\Controllers\cabinet\DashboardController::en2bn($red_zone->CASES_PER_1M_POPULATION) !!}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <div id="redzone"></div>
                            <div class="info-area">
                                <div class="py-2"> হোম আইসোলেশন মেনে চলছে <span class="px-2 text-success"><strong>৫০%</strong></span> </div>
                                <div class="py-2"> সামাজিক দূরত্ব বজায় রাখছে <span class="px-2 text-success"><strong>৪৬%</strong></span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
