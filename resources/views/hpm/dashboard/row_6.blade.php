<!-- Start :: Risk Matrix -->
<div class="card">
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card-header cart-height-customize">
                <h3 class="card-title">Risk Matrix</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-1 col-md-1">
                    <div style="transform: rotate(-90deg);width: 219px;margin-left: -70px;margin-top: 100px;" class="fs-20">
                        <br>Last 2 weeks (Sep 1- 14)</div>
                </div>
                <div class="col-xl-9 col-md-9">
                    <div class="table-responsive">
                        <table class="table table-bordered table-vcenter text-nowrap">
                            <thead >
                            <tr>
                                <td colspan="4" class="text-center fs-18"><span class="text-danger">On {{date("M")}} {{date("d")}}th</span>, 3rd and 4th week in the past: (Aug 17 - 31) </td>
                            </tr>
                            </thead>
                            <tbody class="fs-20 text-center">
                            <tr>
                                <td></td>
                                <td>High</td>
                                <td>Medium</td>
                                <td>Low</td>
                            </tr>
                            <tr>
                                <td>High</td>
                                <td class="bg-danger">{{$rm_7->high_to_high}}</td>
                                <td style="background: #fa9a29">{{$rm_8->high_to_medium}} </td>
                                <td style="background: #fa9a29">{{$rm_9->high_to_low}}</td>
                            </tr>
                            <tr>
                                <td>Medium</td>
                                <td style="background: #fa9a29">{{$rm_4->medium_to_high}}</td>
                                <td style="background: #feea1f">{{$rm_5->medium_to_medium}}</td>
                                <td style="background: #94f925">{{$rm_6->medium_to_low}}</td>
                            </tr>
                            <tr>
                                <td>Low</td>
                                <td style="background: #feea1f">{{$rm_1->low_to_high}}</td>
                                <td style="background: #94f925">{{$rm_2->low_to_medium}}</td>
                                <td style="background: #00ff2e">{{$rm_3->low_to_low}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-xl-2 col-md-2">
                    <div class="row">
                        <div class="col-xl-4 text-right">
                            <div class="pt-4">High Risk</div>
                            <div class="pt-9 mt-8">Low Risk</div>
                        </div>
                        <div class="col-xl-8">
                            <div>Gradient</div>
                            <div style="width: 50px; height: 250px;background: rgb(244,55,53);
background: linear-gradient(#f43735 0%, #fff51e 50%, #00ff2e 100%);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End :: Risk Matrix -->
