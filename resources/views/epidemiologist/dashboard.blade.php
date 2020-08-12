@extends('epidemiologist.default')

@section('content')

<!-- Row-1 -->
<div class="row top-cards">
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
              <div class="card-body">
                <p class=" mb-1 ">Infected (24 hours)</p>
                <h4 class="mb-1 number-font">2,977</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-warning">11%</span> </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
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
          <div class="col-xl-8 col-lg-8 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nationwide Summary Data</h3>
                <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
              </div>
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
              <div class="row mt-4">
                <div class="col-xl-8 col-lg-6 col-md-6 col-xm-12">
                  <div class="card-body">
                    <h5 class="card-title">Short Description: </h5>
                    <p class="card-text">Recover, Active Case and Death are not available. </p>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                  <div class="card-body">
                    <h5 class="card-title">Data Source</h5>
                    <p class="card-text">DGHS</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Population Wise Infection rate</h3>
                <div class="card-options"> <i class="fa fa-table mr-2 text-success"></i> <i class="fa fa-download text-danger"></i> </div>
              </div>
              <div class="card-body">
                <div id="population-wise-infection"></div>
                <div class="row">
                  <div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
                    <div class="card-body">
                      <h5 class="card-title">Short Description: </h5>
                      <p class="card-text">2011 Population census is used. </p>
                    </div>
                  </div>
                  <div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
                    <div class="card-body">
                      <h5 class="card-title">Data Source</h5>
                      <p class="card-text">DGHS</p>
                    </div>
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
            <div class="row">
              <div class="col-xl-6 col-md-12">
                <div class="card">
                  <div class="card-header cart-height-customize">
                    <h3 class="card-title">Confirmed Cases % by Age Group </h3>
                    <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                  </div>
                  <div class="card-body">
                    <div id="case_by_age"></div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header cart-height-customize">
                    <h3 class="card-title">Confirmed +ve Death % by Age Group</h3>
                    <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                  </div>
                  <div class="card-body">
                    <div id="death_by_age"></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-md-12">
                <div class="card">
                  <div class="card-header cart-height-customize">
                    <h3 class="card-title">Cases by Gender</h3>
                    <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                  </div>
                  <div class="card-body">
                    <div id="case_by_gender"></div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header cart-height-customize">
                    <h3 class="card-title">Death by Gender</h3>
                    <div class="card-options"> <i class="fa fa-download text-danger"></i> </div>
                  </div>
                  <div class="card-body">
                    <div id="death_by_gender"></div>
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
                    <h5 class="card-title">Data Source</h5>
                    <p class="card-text">a2i database</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Row-3 --> 
        
        <!-- Row-4 -->
        <div class="row">
          <div class="col-xl-12 col-md-12">
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
        <!-- End Row-4 --> 

@endsection