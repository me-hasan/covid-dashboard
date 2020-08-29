@extends('iedcr.default')
@section('bread_crumb_active','Conformance Analysis')
@section('search_view')
    <div class="d-flex order-lg-2 ml-auto">
        <form action="{{ route('iedcr.conformance_analysis') }}" class="d-flex order-lg-12 ml-auto">
            @include('iedcr.search_view')
        </form>
    </div>
@endsection
@section('content')
<?php
  $sd_1='';
  $ss_1='';
  $data_source_description = \Illuminate\Support\Facades\DB::table('data_source_description')->where('page_name','iedcr-conformance-analysis')->get();
  foreach ($data_source_description as  $row) {
    if($row->component_name=='Conformance Summary'){
        $sd_1=$row->description;
        $ss_1=$row->source;
    }
  }
?>
    <!-- Row-3 -->

    <div class="row">

        <div class="col-xl-6 col-lg-6 col-md-12">

            <div class="card">

                <div class="card-header">

                    <h3 class="card-title">Conformance</h3>

                    <div class="card-options">

                        <i class="fa fa-table mr-2"></i>

                        <i class="fa fa-download"></i>

                    </div>

                </div>

                <div class="card-body">

                    <img src="{!! asset('assets/images/chart/conformance.jpg') !!}" alt="Conformance" />

                </div>

            </div>

        </div>

        <div class="col-xl-6 col-lg-6 col-md-12">

            <div class="card">

                <div class="card-header">

                    <h3 class="card-title">Trend Analysis</h3>

                    <div class="card-options">

                        <i class="fa fa-download"></i>

                    </div>

                </div>

                <div class="card-body">

                    <img src="{!! asset('assets/images/chart/trend-analysis.jpg') !!}" alt="Trend Analysis" />

                </div>

            </div>



        </div>

    </div>

    <!-- End Row-3 -->





    <!-- Row-2 -->

    <div class="row">

        <div class="col-xl-12 col-md-12">

            <div class="card">

                <div class="card-body-syndromic">

                    <div class="table-responsive">

                        <table class="table table-striped card-table table-vcenter text-nowrap">

                            <thead>

                            <tr class="custom-tabil-title-text">

                                <th>DATE</th>

                                <th>CAMERA LOCATION</th>

                                <th>% OF PEOPLE WEARING MAKS</th>

                                <th>% OF PEOPLE MAINTAINING SOCIAL DISTANCING</th>

                            </tr>

                            </thead>

                            <tbody>

                            <tr>

                                <th scope="row" class="custom-tabil-in-text">Dhaka</th>

                                <td class="custom-tabil-in-text">Dhaka</td>

                                <td class="custom-tabil-in-text">Dhamrai</td>

                                <td class="custom-tabil-in-text">120</td>

                            </tr>

                            <tr>

                                <th scope="row" class="custom-tabil-in-text">Dhaka</th>

                                <td class="custom-tabil-in-text">Dhaka</td>

                                <td class="custom-tabil-in-text">Dhamrai</td>

                                <td class="custom-tabil-in-text">120</td>

                            </tr>

                            <tr>

                                <th scope="row" class="custom-tabil-in-text">Dhaka</th>

                                <td class="custom-tabil-in-text">Dhaka</td>

                                <td class="custom-tabil-in-text">Dhamrai</td>

                                <td class="custom-tabil-in-text">120</td>

                            </tr>

                            <tr>

                                <th scope="row" class="custom-tabil-in-text" >Dhaka</th>

                                <td class="custom-tabil-in-text">Dhaka</td>

                                <td class="custom-tabil-in-text">Dhamrai</td>

                                <td class="custom-tabil-in-text">120</td>

                            </tr>

                            <tr>

                                <th scope="row" class="custom-tabil-in-text">Dhaka</th>

                                <td class="custom-tabil-in-text">Dhaka</td>

                                <td class="custom-tabil-in-text">Dhamrai</td>

                                <td class="custom-tabil-in-text">120</td>

                            </tr>

                            <tr>

                                <th scope="row" class="custom-tabil-in-text">Dhaka</th>

                                <td class="custom-tabil-in-text">Dhaka</td>

                                <td class="custom-tabil-in-text">Dhamrai</td>

                                <td class="custom-tabil-in-text">120</td>

                            </tr>

                            <tr>

                                <th scope="row" class="custom-tabil-in-text">Dhaka</th>

                                <td class="custom-tabil-in-text">Dhaka</td>

                                <td class="custom-tabil-in-text">Dhamrai</td>

                                <td class="custom-tabil-in-text">120</td>

                            </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- End Row-2 -->

@endsection

@section('scripts')



@endsection
