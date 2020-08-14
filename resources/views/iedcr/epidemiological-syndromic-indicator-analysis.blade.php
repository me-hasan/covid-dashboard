@extends('iedcr.default')
@section('bread_crumb_active','Epidemiological Syndromic Indicator Analysis')
@section('content')

    <!-- Row-1 -->

    <div class="row">

        <div class="col-xl-12 col-md-12">

            <div class="btn-group mt-2 mb-2">

                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">

                    Epidemiological Indicators <span class="caret"></span>

                </button>

                <ul class="dropdown-menu" role="menu">

                    <li class="dropdown-plus-title">

                        Dropdown

                        <b class="fa fa-angle-up" aria-hidden="true"></b>

                    </li>

                    <li><a href="#">Action</a></li>

                    <li><a href="#">Another action</a></li>

                    <li><a href="#">Something else here</a></li>

                    <li class="divider"></li>

                    <li><a href="#">Separated link</a></li>

                </ul>

            </div>

            <div class="btn-group mt-2 mb-2">

                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">

                    Action <span class="caret"></span>

                </button>

                <ul class="dropdown-menu" role="menu">

                    <li class="dropdown-plus-title">

                        Dropdown

                        <b class="fa fa-angle-up" aria-hidden="true"></b>

                    </li>

                    <li><a href="#">Action</a></li>

                    <li><a href="#">Another action</a></li>

                    <li><a href="#">Something else here</a></li>

                    <li class="divider"></li>

                    <li><a href="#">Separated link</a></li>

                </ul>

            </div>

        </div>

    </div>

    <!-- End Row-1 -->





    <!-- Row-2 -->

    <div class="row">

        <div class="col-xl-12 col-md-12">

            <div class="card">

                <div class="card-header">

                    <h3 class="card-title">Zone Information</h3>

                    <div class="card-options">

                        <i class="fa fa-download"></i>

                    </div>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table id="case_analysis_dtable" class="table table-striped table-bordered text-nowrap">

                            <thead>

                            <tr >

                                <th class="border-bottom-0" >DIVISION</th>

                                <th class="border-bottom-0" >DISTRICT</th>

                                <th class="border-bottom-0" >UPAZILA</th>

                                <th class="border-bottom-0" >CASES</th>

                                <th class="border-bottom-0" >RT VALUES</th>

                                <th class="border-bottom-0" >DOUBLING RATE</th>

                                <th class="border-bottom-0" >GROWTH RATE</th>

                                <th class="border-bottom-0" >TEST POSITIVITY</th>

                                <th class="border-bottom-0" >MOBILITY IN</th>

                                <th class="border-bottom-0" >MOBILITY OUT</th>

                                <th class="border-bottom-0" >PRE CAPTIA REPORTED CONSISTENT SYMPTOMS</th>

                                <th class="border-bottom-0" >PRE CAPTIA REPORTED HIGH RISK</th>

                            </tr>

                            </thead>

                            <tbody>

                            <tr>

                                <td >Dhaka</td>

                                <td >Dhaka</td>

                                <td >Dhamrai</td>

                                <td >120</td>

                                <td >80</td>

                                <td >40</td>

                                <td >40</td>

                                <td >40</td>

                                <td >40</td>

                                <td >40</td>

                                <td >40</td>

                                <td >40</td>

                            </tr>

                            <tr>

                                <td>Dhaka</td>

                                <td>Dhaka</td>

                                <td>Dhamrai</td>

                                <td>120</td>

                                <td>80</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                            </tr>

                            <tr>

                                <td>Dhaka</td>

                                <td>Dhaka</td>

                                <td>Dhamrai</td>

                                <td>120</td>

                                <td>80</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                            </tr>

                            <tr>

                                <td>Dhaka</td>

                                <td>Dhaka</td>

                                <td>Dhamrai</td>

                                <td>120</td>

                                <td>80</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                            </tr>

                            <tr>

                                <td>Dhaka</td>

                                <td>Dhaka</td>

                                <td>Dhamrai</td>

                                <td>120</td>

                                <td>80</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                            </tr>

                            <tr>

                                <td>Dhaka</td>

                                <td>Dhaka</td>

                                <td>Dhamrai</td>

                                <td>120</td>

                                <td>80</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                            </tr>

                            <tr>

                                <td>Dhaka</td>

                                <td>Dhaka</td>

                                <td>Dhamrai</td>

                                <td>120</td>

                                <td>80</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                            </tr>

                            <tr>

                                <td>Dhaka</td>

                                <td>Dhaka</td>

                                <td>Dhamrai</td>

                                <td>120</td>

                                <td>80</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                            </tr>

                            <tr>

                                <td>Dhaka</td>

                                <td>Dhaka</td>

                                <td>Dhamrai</td>

                                <td>120</td>

                                <td>80</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                            </tr>

                            <tr>

                                <td>Dhaka</td>

                                <td>Dhaka</td>

                                <td>Dhamrai</td>

                                <td>120</td>

                                <td>80</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                            </tr>

                            <tr>

                                <td>Dhaka</td>

                                <td>Dhaka</td>

                                <td>Dhamrai</td>

                                <td>120</td>

                                <td>80</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                            </tr>

                            <tr>

                                <td>Dhaka</td>

                                <td>Dhaka</td>

                                <td>Dhamrai</td>

                                <td>120</td>

                                <td>80</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                            </tr>

                            <tr>

                                <td>Dhaka</td>

                                <td>Dhaka</td>

                                <td>Dhamrai</td>

                                <td>120</td>

                                <td>80</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                                <td>40</td>

                            </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- End Row-2 -->





    <!-- Row-3 -->

    <div class="row">

        <div class="col-xl-12 col-md-12">

            <a href="#" class="btn btn-orange">Comparison</a>

        </div>

    </div>

    <!-- End Row-3 -->



    <div class="pb-1 p-3"> </div>



    <!-- Row-4 -->

    <div class="row">

        <div class="col-xl-12 col-md-12">

            <div class="card">

                <div class="card-body">

                    <div class="row mt-4">

                        <div class="col-xl-9 col-lg-6 col-md-6 col-xm-12">

                            <div class="card-body">

                                <h5 class="card-title">Short Description</h5>

                                <p class="card-text">Short Description text will place here.</p>

                            </div>

                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">

                            <div class="card-body">

                                <h5 class="card-title">Data Source</h5>

                                <p class="card-text">Data Source text will place here.</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- End Row-4 -->

@endsection

@section('scripts')



@endsection
