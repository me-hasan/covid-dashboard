@extends('iedcr.default')

@section('content')
<!-- Row-1 -->
<?php
  $sd_1=$sd_2=$sd_3= $sd_4=$sd_5=$sd_6=$sd_7=$sd_8='';
  $ss_1=$ss_2=$ss_3= $ss_4=$ss_5=$ss_6=$ss_7=$ss_8='';

  foreach ($data_source_description as  $row) {
    if($row->component_name=='Nationwide Summary Data'){
        $sd_1=$row->description;
        $ss_1=$row->source;
    }elseif ($row->component_name=='Population Wise Infection rate'){
        $sd_2=$row->description;
        $ss_2=$row->source;
    }elseif ($row->component_name=='Confirmed Cases % by Age Group'){
        $sd_3=$row->description;
        $ss_3=$row->source;
    }elseif ($row->component_name=='Cases by Gender'){
        $sd_4=$row->description;
        $ss_4=$row->source;
    }elseif ($row->component_name=='Avarage Delay Time'){
        $sd_5=$row->description;
        $ss_5=$row->source;
    }elseif ($row->component_name=='Confirmed +ve Death % by Age Group'){
        $sd_6=$row->description;
        $ss_6=$row->source;
    }elseif ($row->component_name=='Death by Gender'){
        $sd_7=$row->description;
        $ss_7=$row->source;
    }elseif ($row->component_name=='Time Series'){
        $sd_8=$row->description;
        $ss_8=$row->source;
    }
  }
?>
 <!-- Row-1 -->
        <div class="row top-cards">
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0" onClick="modalContent('Infected (24 hours)', 'bar', 'Infected Number', 'Date');" data-target="#modaldemo1" data-toggle="modal">
              <div class="card-body">
                <p class=" mb-1 ">Infected (24 hours)</p>
                <h4 class="mb-1 number-font">2,977</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-warning">11%</span> </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0" onClick="modalContent('Total Infected', 'line', 'Total Infected Number', 'Date');" data-target="#modaldemo1" data-toggle="modal">
              <div class="card-body">
                <p class=" mb-1 ">Total Infected</p>
                <h4 class="mb-1 number-font">249,651</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-warning">1%</span> </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
              <div class="card-body">
                <p class=" mb-1 ">Recoverd (24 hours)</p>
                <h4 class="mb-1 number-font">2,074</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-success">9%</span> </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
              <div class="card-body">
                <p class=" mb-1">Total Recoverd</p>
                <h4 class="mb-1 number-font">143,824</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-success">1%</span> </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
              <div class="card-body">
                <p class=" mb-1 ">Active Cases (last 24 Hours)</p>
                <h4 class="mb-1 number-font">2,977</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-warning">15%</span> </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
              <div class="card-body">
                <p class=" mb-1">Total Active Cases</p>
                <h4 class="mb-1 number-font">105,827</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-warning">1%</span> </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
              <div class="card-body">
                <p class=" mb-1 ">Death (24 hours)</p>
                <h4 class="mb-1 number-font">39</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-danger">15%</span> </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
              <div class="card-body">
                <p class=" mb-1">Total Death</p>
                <h4 class="mb-1 number-font">3,306</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-danger">1%</span> </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
              <div class="card-body">
                <p class=" mb-1 ">Test (24 hours)</p>
                <h4 class="mb-1 number-font">12,708</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-info">12%</span> </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
              <div class="card-body">
                <p class=" mb-1">Total Test</p>
                <h4 class="mb-1 number-font">1,225,124</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-success">1%</span> </div>
            </div>
          </div>
        </div>
        <!-- End Row-1 --> 
        
        <!-- Row-2 -->
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nationwide Infected Cases</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-12"> <img src="assets/images/map/bd-map.svg" /> </div>
                  <div class="col-xl-9 col-lg-9 col-md-12">
                    <div class="row">
                      <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="row">
                          <div class="col-xl-4 col-md-12">
                            <div class="card">
                              <div class="card-header cart-height-customize">
                                <h3 class="card-title"><span class="fs-12">Confirmed Cases % by Age Group</span></h3>
                                <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                              </div>
                              <div class="card-body">
                                <div id="case_by_age"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-12">
                            <div class="card">
                              <div class="card-header cart-height-customize">
                                <h3 class="card-title"><span class="fs-12">Confirmed Cases % by Age Group</span></h3>
                                <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                              </div>
                              <div class="card-body">
                                <div id="death_by_age"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-4 col-md-12">
                            <div class="card">
                              <div class="card-header cart-height-customize">
                                <h3 class="card-title"><span class="fs-12">Cases by Gender</span></h3>
                                <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                              </div>
                              <div class="card-body">
                                <div id="case_by_gender"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Time Series</h3>
                            <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                          </div>
                          <div class="card-body">
                            <div id="time-seris-graph"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-12 col-md-12 ml-4">
                  <div id="color-group">
                    <div class="row gutters-xs">
                      <div class="col-auto"><span class="colorinput-color" style="background-color:#F69475"></span><span class="group-color-label text-ash p-1">0-10</span></div>
                      <div class="col-auto"><span class="colorinput-color" style="background-color:#F37366"></span><span class="group-color-label text-ash p-1">11-20</span></div>
                      <div class="col-auto"><span class="colorinput-color" style="background-color:#E5515D"></span><span class="group-color-label text-ash p-1">21-30</span></div>
                      <div class="col-auto"><span class="colorinput-color" style="background-color:#CD3E52"></span><span class="group-color-label text-ash p-1">31-40</span></div>
                      <div class="col-auto"><span class="colorinput-color" style="background-color:#BC2B4C"></span><span class="group-color-label text-ash p-1">51-100</span></div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-8 col-lg-6 col-md-6 col-xm-12">
                  <div class="card-body">
                    <h5 class="card-title">Short Description</h5>
                    <p class="card-text">Content here.</p>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                  <div class="card-body">
                    <h5 class="card-title">Data Source & Last Update Date</h5>
                    <p class="card-text">DGHS</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Row-2 --> 
        
        <!-- Row-3 -->
        <div class="row">
          <div class="col-xl-8 col-md-12">
            <div class="card">
              <div class="card-header cart-height-customize">
                <h3 class="card-title">Nation wide Test Positivity Rate</h3>
                <div class="card-options">
                  <div class="btn-list"> <a href="#" class="btn btn-primary btn-sm">Details</a> </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xl-6 col-md-12">
                    <div class="card">
                      <div class="card-body"> <img src="assets/images/map/bd-map.svg" /> </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-12">
                    <div class="card">
                      <div class="card-header cart-height-customize">
                        <h3 class="card-title">Test Positivity Rate</h3>
                        <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                      </div>
                      <div class="card-body">
                        <div id="test_positivity_rate"></div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header cart-height-customize">
                        <h3 class="card-title">Test Positivity by Gender</h3>
                        <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                      </div>
                      <div class="card-body">
                        <div id="death_by_gender"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-12 ml-4">
                    <div id="color-group">
                      <div class="row gutters-xs">
                        <div class="col-auto"><span class="colorinput-color" style="background-color:#F69475"></span><span class="group-color-label text-ash p-1">0-10</span></div>
                        <div class="col-auto"><span class="colorinput-color" style="background-color:#F37366"></span><span class="group-color-label text-ash p-1">11-20</span></div>
                        <div class="col-auto"><span class="colorinput-color" style="background-color:#E5515D"></span><span class="group-color-label text-ash p-1">21-30</span></div>
                        <div class="col-auto"><span class="colorinput-color" style="background-color:#CD3E52"></span><span class="group-color-label text-ash p-1">31-40</span></div>
                        <div class="col-auto"><span class="colorinput-color" style="background-color:#BC2B4C"></span><span class="group-color-label text-ash p-1">51-100</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Avarage Delay Time<br/>
                  <span class="text-ash" style="font-size: 10px;">26th July, 2020 to 7th August, 2020</span></h3>
                <div class="card-options"> 
                  <!--<i class="fa fa-table mr-2 text-success"></i>--> 
                  <i class="fa fa-download text-danger"></i> </div>
              </div>
              <div class="card-body">
                <div class="card-body mt-6 text-center">
                  <h4 class="gray-600">Sample Collection to Test</h4>
                  <h3 class="text-success">1.48 Days</h3>
                </div>
                <hr />
                <div class="card-body mb-7 text-center">
                  <h4>Test to Result</h4>
                  <h3 class="text-success">2.10 Days</h3>
                </div>
                <div class="card-body">
                  <div class="card-body">
                    <h5 class="card-title">Short Description</h5>
                    <p class="card-text">Content here.</p>
                  </div>
                </div>
                <div class="card-body">
                  <div class="card-body">
                    <h5 class="card-title">Data Source & Last Update Date</h5>
                    <p class="card-text">a2i database</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Row-3 --> 
        
        <!-- Row-4 -->
        <div class="card">
          <div class="row">
            <div class="col-xl-12 col-md-12">
              <div class="card-header cart-height-customize">
                <h3 class="card-title">Nationwide Hospital Capacity and Occupancy</h3>
                <div class="card-options">
                  <div class="btn-list"> <a href="#" class="btn btn-primary btn-sm">Details</a> </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-md-6">
              <div class="card-header">
                <h3 class="card-title">Dhaka City</h3>
              </div>
              <div class="card-body">
                <div class="row pl-4 pr-4">
                  <div class="col-xl-7 col-lg-7 col-md-7 col-xm-12">
                    <h5>Total Number of Hospitals</h5>
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-5 col-xm-12">
                    <h3 class="text-success text-center">36</h3>
                  </div>
                </div>
                <div class="row pl-4 pr-4">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
                    <h5 class="text-center"># General Beds</h5>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6col-xm-12">
                    <h5 class="text-center"># Isolation Beds</h5>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
                    <h3 class="text-success text-center">36</h3>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6col-xm-12">
                    <h3 class="text-success text-center">36</h3>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
                    <h5 class="text-center">Occupied</h5>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6col-xm-12">
                    <h5 class="text-center">Occupied</h5>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
                    <h3 class="text-success text-center">3%</h3>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6col-xm-12">
                    <h3 class="text-success text-center">3%</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-md-6">
              <div class="card-header">
                <h3 class="card-title">Chittagong City</h3>
              </div>
              <div class="card-body">
                <div class="row pl-4 pr-4">
                  <div class="col-xl-7 col-lg-7 col-md-7 col-xm-12">
                    <h5>Total Number of Hospitals</h5>
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-5 col-xm-12">
                    <h3 class="text-success text-center">36</h3>
                  </div>
                </div>
                <div class="row pl-4 pr-4">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
                    <h5 class="text-center"># General Beds</h5>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6col-xm-12">
                    <h5 class="text-center"># Isolation Beds</h5>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
                    <h3 class="text-success text-center">36</h3>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6col-xm-12">
                    <h3 class="text-success text-center">36</h3>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
                    <h5 class="text-center">Occupied</h5>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6col-xm-12">
                    <h5 class="text-center">Occupied</h5>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
                    <h3 class="text-success text-center">3%</h3>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6col-xm-12">
                    <h3 class="text-success text-center">3%</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-8 col-lg-6 col-md-6 col-xm-12">
              <div class="card-body">
                <h5 class="card-title">Short Description</h5>
                <p class="card-text">Content here.</p>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
              <div class="card-body">
                <h5 class="card-title">Data Source & Last Update Date</h5>
                <p class="card-text">DGHS</p>
              </div>
            </div>
          </div>
        </div>
        <!-- End Row-4 --> 
        
        <!-- Row-2 -->
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nationwide Death Cases</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-12"> <img src="assets/images/map/bd-map.svg" /> </div>
                  <div class="col-xl-9 col-lg-9 col-md-12">
                    <div class="row">
                      <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="row">
                          <div class="col-xl-6 col-md-12">
                            <div class="card">
                              <div class="card-header cart-height-customize">
                                <h3 class="card-title"><span class="fs-12">Confirmed Cases % by Death Group</span></h3>
                                <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                              </div>
                              <div class="card-body">
                                <div id="nw_death_by_age"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-6 col-md-12">
                            <div class="card">
                              <div class="card-header cart-height-customize">
                                <h3 class="card-title"><span class="fs-12">Confirmed Cases % by Death Group</span></h3>
                                <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                              </div>
                              <div class="card-body">
                                <div id="nw_death_by_age_v2"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="row">
                          <div class="col-xl-6 col-md-12">
                            <div class="card">
                              <div class="card-header cart-height-customize">
                                <h3 class="card-title"><span class="fs-12">Confirmed Cases % by Death Group</span></h3>
                                <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                              </div>
                              <div class="card-body">
                                <div id="divisional_total"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-6 col-md-12">
                            <div class="card">
                              <div class="card-header cart-height-customize">
                                <h3 class="card-title"><span class="fs-12">Death by Gender</span></h3>
                                <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                              </div>
                              <div class="card-body">
                                <div id="nw_death_by_gender"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-12 ml-4">
                    <div id="color-group">
                      <div class="row gutters-xs">
                        <div class="col-auto"><span class="colorinput-color" style="background-color:#F69475"></span><span class="group-color-label text-ash p-1">0-10</span></div>
                        <div class="col-auto"><span class="colorinput-color" style="background-color:#F37366"></span><span class="group-color-label text-ash p-1">11-20</span></div>
                        <div class="col-auto"><span class="colorinput-color" style="background-color:#E5515D"></span><span class="group-color-label text-ash p-1">21-30</span></div>
                        <div class="col-auto"><span class="colorinput-color" style="background-color:#CD3E52"></span><span class="group-color-label text-ash p-1">31-40</span></div>
                        <div class="col-auto"><span class="colorinput-color" style="background-color:#BC2B4C"></span><span class="group-color-label text-ash p-1">51-100</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-8 col-lg-6 col-md-6 col-xm-12">
                  <div class="card-body">
                    <h5 class="card-title">Short Description</h5>
                    <p class="card-text">Content here.</p>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                  <div class="card-body">
                    <h5 class="card-title">Data Source & Last Update Date</h5>
                    <p class="card-text">DGHS</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Row-2 --> 
        
        <!-- Row-4 -->
        <div class="card">
          <div class="row">
            <div class="col-xl-12 col-md-12">
              <div class="card-header cart-height-customize">
                <h3 class="card-title">Nationwide Syndromic Prediction</h3>
                <div class="card-options">
                  <div class="btn-list"> <a href="#" class="btn btn-primary btn-sm">Details</a> </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card-body"> <img src="assets/images/map/bd-map.svg" /> </div>
            </div>
            <div class="col-xl-2 col-md-6">
              <div class="card-body">
                <div class="form-group ">
                  <div class="form-label">Short Description</div>
                  <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
                      <span class="custom-control-label">Priority 1</span> </label>
                    <label class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" name="example-radios" value="option2">
                      <span class="custom-control-label">Priority 2</span> </label>
                    <label class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" name="example-radios" value="option2">
                      <span class="custom-control-label">Priority 3</span> </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-md-12">
              <div class="card-body">
                <div class="table-responsive">
                  <table id="case_analysis_dtable" class="table table-striped table-bordered text-nowrap">
                    <thead>
                      <tr>
                        <th class="border-bottom-0">Division</th>
                        <th class="border-bottom-0">District</th>
                        <th class="border-bottom-0">Total Infected</th>
                        <th class="border-bottom-0">Total Recovered</th>
                        <th class="border-bottom-0">Active Case</th>
                        <th class="border-bottom-0">Total Death</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Chittagong</td>
                        <td>Chittagong</td>
                        <td>14874</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Rajshahi</td>
                        <td>Natore</td>
                        <td>6019</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Chittagong</td>
                        <td>Comilla</td>
                        <td>5727</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Rajshahi</td>
                        <td>Bogra</td>
                        <td>5180</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Chittagong</td>
                        <td>Feni</td>
                        <td>5149</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Khulna</td>
                        <td>Khulna</td>
                        <td>4646</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Sylhet</td>
                        <td>Sylhet</td>
                        <td>4583</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Dhaka</td>
                        <td>Gazipur</td>
                        <td>4338</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Dhaka</td>
                        <td>Dhaka</td>
                        <td>4028</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Rajshahi</td>
                        <td>Rajshahi</td>
                        <td>3532</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Chittagong</td>
                        <td>Cox's Bazar</td>
                        <td>3530</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Chittagong</td>
                        <td>Noakhali</td>
                        <td>3409</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Dhaka</td>
                        <td>Manikganj</td>
                        <td>3193</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Mymensingh</td>
                        <td>Mymensingh</td>
                        <td>2828</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Barisal</td>
                        <td>Barisal</td>
                        <td>2581</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Khulna</td>
                        <td>Jessore</td>
                        <td>2159</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Dhaka</td>
                        <td>Kishoreganj</td>
                        <td>2133</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Khulna</td>
                        <td>Kushtia</td>
                        <td>1970</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Chittagong</td>
                        <td>Brahmanbaria</td>
                        <td>1961</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Chittagong</td>
                        <td>Chandpur</td>
                        <td>1890</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Dhaka</td>
                        <td>Tangail</td>
                        <td>1835</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Dhaka</td>
                        <td>Gopalganj</td>
                        <td>1793</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Rangpur</td>
                        <td>Dinajpur</td>
                        <td>1787</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Mymensingh</td>
                        <td>Netrakona (Netrokona)</td>
                        <td>1772</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Rangpur</td>
                        <td>Rangpur</td>
                        <td>1736</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Sylhet</td>
                        <td>Sunamganj</td>
                        <td>1596</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Khulna</td>
                        <td>Satkhira</td>
                        <td>1569</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Chittagong</td>
                        <td>Lakshmipur</td>
                        <td>1501</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Dhaka</td>
                        <td>Rajbari</td>
                        <td>1438</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Dhaka</td>
                        <td>Faridpur</td>
                        <td>1384</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Sylhet</td>
                        <td>Habiganj</td>
                        <td>1249</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Khulna</td>
                        <td>Magura</td>
                        <td>1224</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Dhaka</td>
                        <td>Shariatpur</td>
                        <td>1139</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Barisal</td>
                        <td>Patuakhali</td>
                        <td>1081</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Barisal</td>
                        <td>Jhalakati (Jhalokati)</td>
                        <td>1075</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Sylhet</td>
                        <td>Maulvi Bazar (Moulvibazar)</td>
                        <td>1069</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Rajshahi</td>
                        <td>Naogaon</td>
                        <td>990</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Mymensingh</td>
                        <td>Jamalpur</td>
                        <td>982</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Dhaka</td>
                        <td>Madaripur</td>
                        <td>919</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Khulna</td>
                        <td>Narail</td>
                        <td>898</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Barisal</td>
                        <td>Pirojpur</td>
                        <td>871</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Khulna</td>
                        <td>Chuadanga</td>
                        <td>816</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Rajshahi</td>
                        <td>Jaipurhat (Joypurhat)</td>
                        <td>780</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Rajshahi</td>
                        <td>Sirajganj</td>
                        <td>780</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Rajshahi</td>
                        <td>Pabna</td>
                        <td>765</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Khulna</td>
                        <td>Bagerhat</td>
                        <td>694</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Dhaka</td>
                        <td>Narayanganj</td>
                        <td>693</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Barisal</td>
                        <td>Barguna</td>
                        <td>684</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Chittagong</td>
                        <td>Rangamati</td>
                        <td>677</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Rangpur</td>
                        <td>Gaibandha</td>
                        <td>671</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Rangpur</td>
                        <td>Nilphamari</td>
                        <td>647</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Dhaka</td>
                        <td>Narsingdi</td>
                        <td>628</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Chittagong</td>
                        <td>Bandarban</td>
                        <td>586</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Barisal</td>
                        <td>Bhola</td>
                        <td>564</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Khulna</td>
                        <td>Meherpur</td>
                        <td>562</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Chittagong</td>
                        <td>Khagrachhari</td>
                        <td>550</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Rangpur</td>
                        <td>Kurigram</td>
                        <td>529</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Rajshahi</td>
                        <td>Chapai Nawabganj</td>
                        <td>519</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Khulna</td>
                        <td>Jhenaidah (Jhenida)</td>
                        <td>509</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Rangpur</td>
                        <td>Thakurgaon</td>
                        <td>427</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Rangpur</td>
                        <td>Lalmonirhat</td>
                        <td>419</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Rangpur</td>
                        <td>Panchagarh</td>
                        <td>345</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Mymensingh</td>
                        <td>Sherpur</td>
                        <td>326</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>Dhaka</td>
                        <td>Munshiganj</td>
                        <td>243</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-xl-12 col-md-12 ml-4">
              <div id="color-group">
                <div class="row gutters-xs">
                  <div class="col-auto"><span class="colorinput-color" style="background-color:#F69475"></span><span class="group-color-label text-ash p-1">0-10</span></div>
                  <div class="col-auto"><span class="colorinput-color" style="background-color:#F37366"></span><span class="group-color-label text-ash p-1">11-20</span></div>
                  <div class="col-auto"><span class="colorinput-color" style="background-color:#E5515D"></span><span class="group-color-label text-ash p-1">21-30</span></div>
                  <div class="col-auto"><span class="colorinput-color" style="background-color:#CD3E52"></span><span class="group-color-label text-ash p-1">31-40</span></div>
                  <div class="col-auto"><span class="colorinput-color" style="background-color:#BC2B4C"></span><span class="group-color-label text-ash p-1">51-100</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-8 col-lg-6 col-md-6 col-xm-12">
              <div class="card-body">
                <h5 class="card-title">Short Description</h5>
                <p class="card-text">Content here.</p>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
              <div class="card-body">
                <h5 class="card-title">Data Source & Last Update Date</h5>
                <p class="card-text">DGHS</p>
              </div>
            </div>
          </div>
        </div>
        <!-- End Row-4 --> 
        
        <!-- Row-4 -->
        <div class="card">
          <div class="row">
            <div class="col-xl-12 col-md-12">
              <div class="card-header cart-height-customize">
                <h3 class="card-title">Nationwide Mobility</h3>
                <div class="card-options">
                  <div class="btn-list"> <a href="#" class="btn btn-primary btn-sm">Details</a> </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12">
              <div class="card-body">
                <div id="mobility_time_seris_graph"></div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
              <div class="card-header">
                <h3 class="card-title">Calendar highlighting important dates</h3>
              </div>
              <div class="card-body"> </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-8 col-lg-6 col-md-6 col-xm-12">
              <div class="card-body">
                <h5 class="card-title">Short Description</h5>
                <p class="card-text">Content here.</p>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
              <div class="card-body">
                <h5 class="card-title">Data Source & Last Update Date</h5>
                <p class="card-text">DGHS</p>
              </div>
            </div>
          </div>
        </div>
        <!-- End Row --> 
        
      </div>
    </div>
    <!-- End app-content--> 
  </div>


  
  <div class="modal" id="modaldemo1">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-content-demo">
        <div class="modal-header">
          <h6 class="modal-title"></h6>
          <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body" id="modalContent"> </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal" type="button">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
        $_populationGenderData = array();
        foreach($hda_population_wise_infected as $_rowKey => $_rowData){
          //if($_rowKey == 0 || ((count($_populationWiseCaseDataSet)-1) == $_rowKey) || ((count($_populationWiseCaseDataSet)-2) == $_rowKey)) continue;
          $_populationGenderData[] = array('name' => $_rowData->division, 'y' => ($_rowData->percent_infected*1)  );
          
        }
//print_r($_populationGenderData);
      ?>
      
        
@endsection

@section('scripts')

<script type="text/javascript">
	/* Population Wise Infection */
				/*Highcharts.setOptions({
		colors: ['#01BAF2', '#71BF45', '#FAA74B']
	});*/


	Highcharts.chart('population-wise-infection', {
		chart: {
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie'
		},
		title: {
			text: '',
			y:0
		},
		credits:{
			enabled:false
		},
		legend:{
			enabled:true,
			labelFormatter: function () {
				return this.name+': <b> '+this.y + '%</b>';
			}
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		},
		plotOptions: {
			pie: {
			allowPointSelect: true,
			cursor: 'pointer',
			dataLabels: {
				enabled: false,
				formatter:function(){
				return this.key+ ': ' + this.y + '%';
				}
			},
			showInLegend: true
			}
		},
		series: [{
			name: 'Infected',
			colorByPoint: true,
			innerSize: '70%',
			
	    data: <?php echo json_encode($_populationGenderData); ?>
      }]
  });
	
	// Age Wise Infected Distribution

  <?php 
      $_ageWiseInfectCategories = $_ageWiseInfectData = array();
      
      foreach($hda_age_wise_infected_distribution as $_rowKey => $_rowData){
        
            $_ageWiseInfectCategories[] = $_rowData->age_range;
            $_ageWiseInfectData[] = (float)$_rowData->infected_percent;
      }
      $_ageWiseInfectData = array('name' => 'Infected', 'data' => $_ageWiseInfectData);
    
  ?>    
  Highcharts.chart('case_by_age', {
		chart: {
			type: 'column',
			height: 200
		},
		title: {
			text: ''
		},
		subtitle: {
			text: ''
		},
		credits:{
			enabled:false
		},
		legend:{
			enabled:false
		},
		yAxis: {
			title: {
				text: ''
			},
			labels: {
				formatter: function() {
					return this.value+"%";
				}
			}
		},
		xAxis: {
			//categories: ["0-10","11-20","21-30","31-40","41-50","51-60","60+"]	
      categories: <?php echo json_encode($_ageWiseInfectCategories); ?>			
    },
		tooltip: {
			pointFormat: '{series.name}: <b>{point.y}%</b>',
			/*valueSuffix: ' cm',
			shared: true*/
		},
		plotOptions: {
			column: {
				pointPadding: 0.2,
				borderWidth: 0
			}
		},
		colors: ['#ffab00'],
    series: <?php echo json_encode(array($_ageWiseInfectData)); ?>		

  });

	// Age Wise Death Distribution

      <?php 
        $_ageWiseDeathCategories = $_ageWiseDeathData = array();
        
        foreach($hda_age_wise_death_distribution as $_rowKey => $_rowData){
          // if($_rowKey == 0) continue;
          // foreach($_rowData as  $_key => $_columnData){
          //   if($_key == 1){
              $_ageWiseDeathCategories[] = $_rowData->age_range;
            //}elseif($_key == 3){
              $_ageWiseDeathData[] = (float)$_rowData->death_percent;
          //   }
          // }
        }
        
        $_ageWiseDeathData = array('name' => 'Death', 'data' => $_ageWiseDeathData);
        
      ?>

				Highcharts.chart('death_by_age', {
		chart: {
			type: 'column',
			height: 200
		},
		title: {
			text: ''
		},
		subtitle: {
			text: ''
		},
		credits:{
			enabled:false
		},
		legend:{
			enabled:false
		},
		yAxis: {
			title: {
				text: ''
			},
			labels: {
				formatter: function() {
					return this.value+"%";
				}
			}
		},
		xAxis: {
			categories: <?php echo json_encode($_ageWiseDeathCategories); ?>		
    },
		tooltip: {
			pointFormat: '{series.name}: <b>{point.y}%</b>',
			/*valueSuffix: ' cm',
			shared: true*/
		},
		plotOptions: {
			column: {
				pointPadding: 0.2,
				borderWidth: 0
			}
		},
		colors: ['#ef4b4b'],
		series: <?php echo json_encode(array($_ageWiseDeathData)); ?>		
  });
	
  // Infected by Gender Group
      <?php 
        $_genderWiseInfectData = array();
        
        //foreach($hda_gender_wise_infect_distribution as $_rowKey => $_rowData){
          // if($_rowKey == 0) continue;
          // foreach($_rowData as  $_key => $_columnData){
          //   if($_key == 1){
              $_genderWiseInfectData[] = array('name' => 'Male', 'y' => (float)$hda_gender_wise_infect_distribution->male_percent);
            //}elseif($_key == 2){
              $_genderWiseInfectData[] = array('name' => 'Female', 'y' => (float)$hda_gender_wise_infect_distribution->female_percent);
          //   }
          // }
        //}
      ?>
		Highcharts.chart('case_by_gender', {
		chart: {
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie',
			height: 200
		},
		title: {
			text: ''
		},
		credits:{
			enabled:false
		},
		legend:{
			enabled:true,
			labelFormatter: function () {
				return this.name+': <b> '+this.y + '%</b>';
			}
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		},
		accessibility: {
			point: {
				valueSuffix: '%'
			}
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled: false
				},
				showInLegend: true
			}
		},
		colors: ['#705fc9', '#fb1c52'],
		series: [{
			name: 'Infected',
			colorByPoint: true,
			data: <?php echo json_encode($_genderWiseInfectData); ?>
      }]
	});
	
	// Death by Gender Group
    <?php 
      $_genderWiseDeathCategories = $_genderWiseDeathData = array();
      
      //foreach($_genderWiseDeathDataSet as $_rowKey => $_rowData){
        // if($_rowKey == 0) continue;
        // foreach($_rowData as  $_key => $_columnData){
        //   if($_key == 3){
            $_genderWiseDeathData[] = array('name' => 'Male', 'y' => (float)$hda_gender_wise_death_distribution->male_percent);
          //}elseif($_key == 5){
            $_genderWiseDeathData[] = array('name' => 'Female', 'y' => (float)$hda_gender_wise_death_distribution->female_percent);
        //   }
        // }
      //}
      
      ?>
				Highcharts.chart('death_by_gender', {
		chart: {
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie',
			height: 200
		},
		title: {
			text: ''
		},
		credits:{
			enabled:false
		},
		legend:{
			enabled:true,
			labelFormatter: function () {
				return this.name+': <b> '+this.y + '%</b>';
			}
		},
		tooltip: {
			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		},
		accessibility: {
			point: {
				valueSuffix: '%'
			}
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled: false
				},
				showInLegend: true
			}
		},
		colors: ['#ffa600', '#00ffcb'],
		series: [{
			name: 'Infected',
			colorByPoint: true,
			data: <?php echo json_encode($_genderWiseDeathData); ?>	
    }]
	});
	
	/* Time Seris Graph */

    <?php 

      $date_arr = $infected_arr = $recovered_arr = $death_arr = $test_arr = array();

      foreach($hda_time_series as $row){
        
          $date_arr[] = date('d\/m\/Y', strtotime($row->date));
          $infected_arr[] = $row->infected;
          $recovered_arr[] = $row->recovered;
          $death_arr[] = $row->death;
          $test_arr[] = $row->test;
       
      }

        //$date = date('d\/m\/Y', strtotime($row->date));
        $infected = implode(",", $infected_arr);
        $recovered = implode(",", $recovered_arr);
        $death = implode(",", $death_arr);
        $test = implode(",", $test_arr);

    ?>

	Highcharts.chart('time-seris-graph', {
		title: {
			text: ''
		},

		subtitle: {
			text: ''
		},
		
		legend: {
			layout: 'horizontal',
			align: 'center',
			verticalAlign: 'top'
		},
		
		credits:{
			enabled:false
		},
		
		xAxis: {
			//categories: ["30\/05\/2020","31\/05\/2020","01\/06\/2020","02\/06\/2020","03\/06\/2020","04\/06\/2020","05\/06\/2020","06\/06\/2020","07\/06\/2020","08\/06\/2020","09\/06\/2020","10\/06\/2020","11\/06\/2020","12\/06\/2020","13\/06\/2020","14\/06\/2020","15\/06\/2020","16\/06\/2020","17\/06\/2020","18\/06\/2020","19\/06\/2020","20\/06\/2020","21\/06\/2020","22\/06\/2020","23\/06\/2020","24\/06\/2020","25\/06\/2020","26\/06\/2020","27\/06\/2020","28\/06\/2020","29\/06\/2020","30\/06\/2020","01\/07\/2020","02\/07\/2020","03\/07\/2020","04\/07\/2020","05\/07\/2020","06\/07\/2020","07\/07\/2020","08\/07\/2020","09\/07\/2020","10\/07\/2020","11\/07\/2020","12\/07\/2020","13\/07\/2020","14\/07\/2020","15\/07\/2020","16\/07\/2020","17\/07\/2020","18\/07\/2020","19\/07\/2020","20\/07\/2020","21\/07\/2020","22\/07\/2020","23\/07\/2020","24\/07\/2020","25\/07\/2020","26\/07\/2020","27\/07\/2020","28\/07\/2020","29\/07\/2020","30\/07\/2020","31\/07\/2020","01\/08\/2020","02\/08\/2020","03\/08\/2020","04\/08\/2020","05\/08\/2020"]			
      categories: <?php echo json_encode($date_arr);?>
    },
		
		yAxis: {
			title: {
				text: ''
			},
			labels: {
				//enabled: false,
				formatter: function() {
					return this.value;
				}
			}
		},
		
		plotOptions: {
			series: {
				fillOpacity:0,
				dataLabels:{
					enabled:false,
					color: 'black',
					formatter:function() {
						//var pcnt = (this.y / dataSum) * 100;
						return Highcharts.numberFormat(this.y);
					}
				}
			}
		},
		
		colors: ['#ffab00', '#38cb89', '#ef4b4b', '#5323a7'],
		
		series: [{"type":"area","name":"INFECTED","data":[<?php echo $infected;?>],"marker":{"symbol":"circle"}},{"type":"area","name":"RECOVERED","data":[<?php echo $recovered;?>],"marker":{"symbol":"circle"}},{"type":"area","name":"DEATH","data":[<?php echo $death;?>],"marker":{"symbol":"circle"}},{"type":"area","name":"TEST","data":[<?php echo $test;?>],"marker":{"symbol":"circle"}}]			});
</script>

@endsection