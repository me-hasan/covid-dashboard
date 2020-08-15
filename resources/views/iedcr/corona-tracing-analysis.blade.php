@extends('iedcr.default')
@section('bread_crumb_active','Corona Tracing Analysis')
@section('content')

    <!-- Row-1 -->
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">District Wise No of Contacts with Infected Person</h3>
                </div>
                <div class="card-body">
                    <img src="{!! asset('assets/images/map/map-2.png') !!}" alt="District Wise No of Contacts with Infected Person Map" />
                </div>
            </div>
            <!-- Row-1.1 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mt-4">
                                <div class="col-xl-9 col-lg-6 col-md-6 col-xm-12">
                                    <div class="card-body">
                                        <h5 class="card-title">Short Note</h5>
                                        <p class="card-text">Short Description text will place here.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row-Row-1.1  -->
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-options">
                        <i class="fa fa-table mr-2 text-success"></i>
                        <i class="fa fa-download text-danger"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="test-rate-new">
                            <thead>
                            <tr>
                                <th></th>
                                <th height="15px"></th>
                                <th height="15px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row"><h1 class="text-success">4 Meter</h1></th>
                                <th rowspan="2" scope="row" class="border-left border-wd-2"></th>
                                <th scope="row"><h1 class="text-success">7 Minute</h1></th>
                            </tr>

                            <tr>
                                <th scope="row"><h4 class="text-success-new">Average Contact Distance</h4></th>
                                <th scope="row"><h4 class="text-success-new">Average Contact Distance</h4></th>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <th scope="row" height="15px"></th>
                                <th scope="row" height="15px"></th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Row-1.1 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mt-4">
                                <div class="col-xl-9 col-lg-6 col-md-6 col-xm-12">
                                    <div class="card-body">
                                        <h5 class="card-title">Short Note</h5>
                                        <p class="card-text">Short Description text will place here.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row-Row-1.1  -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Top 10 Districts with Highest Contacts with Infected Person</h3>
                    <div class="card-options">
                        <i class="fa fa-download text-danger"></i>
                    </div>
                </div>
                <div class="card-body">
                    <img src="{!! asset('assets/images/chart/corona-tracing-analysis-chart.jpg') !!}" alt="Top 10 Districts with Highest Contacts with Infected Person Chart" />
                </div>
            </div>
            <!-- Row-1.1 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mt-4">
                                <div class="col-xl-9 col-lg-6 col-md-6 col-xm-12">
                                    <div class="card-body">
                                        <h5 class="card-title">Short Note</h5>
                                        <p class="card-text">Short Description text will place here.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row-Row-1.1  -->
        </div>
    </div>
    <!-- End Row-1 -->

@endsection

@section('scripts')



@endsection
