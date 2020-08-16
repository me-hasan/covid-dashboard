@extends('iedcr.default')

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
			data: [{"name":"Barisal","y":7.17},{"name":"Chittagong","y":12.23},{"name":"Dhaka","y":22.64},{"name":"Mymensingh","y":4.12},{"name":"Khulna","y":8.17},{"name":"Rajshahi","y":8.66},{"name":"Rangpur","y":4.07},{"name":"Sylhet","y":8.35}]				}]
	});
	
	// Age Wise Infected Distribution
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
			categories: ["0-10","11-20","21-30","31-40","41-50","51-60","60+"]				},
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
		series: [{"name":"Infected","data":[2.9,7.3,27.6,27.1,17.3,11.2,6.7]}]			});

	// Age Wise Death Distribution
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
			categories: ["0-10","11--20","21-30","31-40","41-50","51-60","60+"]				},
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
		series: [{"name":"Death","data":[0.53,0.98,2.62,6.36,13.85,28.68,46.98]}]			});
	
	// Infected by Gender Group
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
			data: [{"name":"Male","y":71},{"name":"Female","y":29}]				}]
	});
	
	// Death by Gender Group
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
			data: [{"name":"Male","y":78.9},{"name":"Female","y":21.1}]				}]
	});
	
	/* Time Seris Graph */
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
			categories: ["30\/05\/2020","31\/05\/2020","01\/06\/2020","02\/06\/2020","03\/06\/2020","04\/06\/2020","05\/06\/2020","06\/06\/2020","07\/06\/2020","08\/06\/2020","09\/06\/2020","10\/06\/2020","11\/06\/2020","12\/06\/2020","13\/06\/2020","14\/06\/2020","15\/06\/2020","16\/06\/2020","17\/06\/2020","18\/06\/2020","19\/06\/2020","20\/06\/2020","21\/06\/2020","22\/06\/2020","23\/06\/2020","24\/06\/2020","25\/06\/2020","26\/06\/2020","27\/06\/2020","28\/06\/2020","29\/06\/2020","30\/06\/2020","01\/07\/2020","02\/07\/2020","03\/07\/2020","04\/07\/2020","05\/07\/2020","06\/07\/2020","07\/07\/2020","08\/07\/2020","09\/07\/2020","10\/07\/2020","11\/07\/2020","12\/07\/2020","13\/07\/2020","14\/07\/2020","15\/07\/2020","16\/07\/2020","17\/07\/2020","18\/07\/2020","19\/07\/2020","20\/07\/2020","21\/07\/2020","22\/07\/2020","23\/07\/2020","24\/07\/2020","25\/07\/2020","26\/07\/2020","27\/07\/2020","28\/07\/2020","29\/07\/2020","30\/07\/2020","31\/07\/2020","01\/08\/2020","02\/08\/2020","03\/08\/2020","04\/08\/2020","05\/08\/2020"]				},
		
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
		
		series: [{"type":"area","name":"INFECTED","data":[1764,2545,2381,2911,2695,2423,2828,2635,2743,2735,3171,3190,3187,3471,2856,3141,3099,3862,4008,3803,3243,3240,3531,3480,3412,3462,3946,3868,3504,3809,4014,3682,3775,4019,3114,3288,2738,3201,3027,3489,3360,2949,2686,2666,3099,3163,3533,2733,3034,2709,2459,2928,3057,2744,2856,2548,2520,2275,2772,2960,3009,2695,2772,2199,886,1356,1918,2654],"marker":{"symbol":"circle"}},{"type":"area","name":"RECOVERED","data":[360,406,816,523,470,571,643,521,578,657,777,563,848,502,578,903,3099,2237,1925,1975,2781,1048,1084,1678,880,2031,1829,1638,1185,1409,2053,1844,2484,4334,1606,2673,1904,3524,1953,2736,3706,1862,1628,5580,4703,4910,1796,1940,1762,1373,1546,1914,1841,1850,2006,1768,1114,1792,1801,1731,2878,2668,2176,1117,586,1066,1955,1890],"marker":{"symbol":"circle"}},{"type":"area","name":"DEATH","data":[28,40,22,37,37,35,30,35,42,42,45,37,37,46,44,32,38,53,43,38,45,37,39,38,43,37,39,40,34,43,45,64,41,38,42,29,55,44,55,46,41,37,30,47,39,33,33,39,51,34,37,50,41,42,50,35,38,54,37,35,35,48,28,21,22,30,50,33],"marker":{"symbol":"circle"}},{"type":"area","name":"TEST","data":[9987,11876,11439,12704,12510,12698,14088,12486,13136,12988,14664,15965,15772,15990,16638,14505,15038,17214,17527,16259,15045,14031,15585,15555,16292,16433,17999,18498,15157,18099,17837,18426,17875,18362,14650,14727,13988,14245,13173,15672,15632,13488,11193,11059,12423,13453,14002,12889,13460,10923,10625,13362,12898,12050,12398,12027,10446,10078,12859,12714,14127,12937,12614,8802,3684,4249,7712,11160],"marker":{"symbol":"circle"}}]			});
</script>

@endsection