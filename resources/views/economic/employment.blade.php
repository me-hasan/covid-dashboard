@extends('economic.master')

@section('content')
      <!-- Statistics area start -->
      <div class="col-lg-12 mt-4" id="scroll_daily_affected">
          <div class="card shadow-sm">
              <div class="card-body">
                  <div class="invoice-head title-bg-style">
                      <div class="row">
                          <div class="iv-left col-12">
                              <h2>Overseas employment and remittance</h2>
                          </div>
                          <div class="iv-right offset-md-4 col-2 " style="display: none">
                              <select name="" id="daily-infected-total-select" class="form-control">
                                  <option value="">তথ্যসূত্র বাছাই করুন</option>
                                  <option value="MIS-DGHS">MIS-DGHS</option>
                                  <option value="IEDCR">IEDCR</option>
                              </select>
                          </div>
                      </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-lg-3 mt-2">
                          <div class="card">
                              <div class="card-body info-style">
                                  <h4 id="special_word_1" class="header-title">
                                      শিরোনাম
                                      {{-- {!! $des_1->component_name_beng ?? '' !!} --}}
                                  </h4>
                                  <div class="the-number">
                                  </div>
                                  <h4 class="header-title"></h4>
                                  <div class="alert mt-3 p-0 text-justify" role="alert">
                                      <strong>বর্ণনা:</strong>
                                      {{-- নীতি বিবৃতি --}}
                                      {{-- {!! $des_1->description_beng ?? '' !!} --}}
                                  </div>
                                  {{-- <p class="footer-note">
                                      <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                      <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_1"></span>
                                  </p> --}}
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-9 mt-2">
                          {{--  end  --}}
                          <div class="card">
                              <div id="national_dialy_infected_trend"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Statistics area end -->
    
    
    
    
      <!-- Statistics area start -->
    
      <!-- normalized per 100 people start -->
      <div class="col-lg-12 mt-4" id="scroll_daily_affected_area_wise">
          <div class="card shadow-sm">
              <div class="card-body">
                  <div class="invoice-head title-bg-style">
                      <div class="row">
                          <div class="iv-left col-12 ">
                              <h3>
                                  GDP at Current Market Prices
                              </h3>
                          </div>
                          <div class="iv-right offset-md-4 col-2 " style="display: none">
                              <select name="" id="area-wise-infected-total" class="form-control">
                                  <option value="">তথ্যসূত্র বাছাই করুন</option>
                                  <option value="MIS-DGHS">MIS-DGHS</option>
                                  <option value="IEDCR">IEDCR</option>
                              </select>

                          </div>

                      </div>
                  </div>

                  <div class="col-lg-12 mt-2">
                      <div class="card">
                          <div class="card-body info-style">

                              <h4 id="special_word_4" class="header-title">
                                  শিরোনাম
                                  {{-- {!! $des_2->component_name_beng ?? '' !!} --}}
                              </h4>

                              
                              
                              

                              <div id="normalizedPerHundredPeople" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>

                              <div class="alert mt-3 p-0 text-justify" role="alert">
                                  <strong>বর্ণনা:</strong>
                                  {{-- নীতি বিবৃতি  --}}
                                  {{-- {!! $des_2->description_beng ?? '' !!} --}}
                              </div>
                              {{-- <p class="footer-note">
                                  <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                  <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_4"></span>
                              </p> --}}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
        <!-- normalized per 100 people end -->




        <!-- normalized per 100 people start -->
      <div class="col-lg-12 mt-4" id="scroll_daily_affected_area_wise">
          <div class="card shadow-sm">
              <div class="card-body">
                  <div class="invoice-head title-bg-style">
                      <div class="row">
                          <div class="iv-left col-12 ">
                              <h3>
                                  Categories wise overseas employment
                              </h3>
                          </div>
                          <div class="iv-right offset-md-4 col-2 " style="display: none">
                              <select name="" id="area-wise-infected-total" class="form-control">
                                  <option value="">তথ্যসূত্র বাছাই করুন</option>
                                  <option value="MIS-DGHS">MIS-DGHS</option>
                                  <option value="IEDCR">IEDCR</option>
                              </select>

                          </div>

                      </div>
                  </div>

                  <div class="col-lg-12 mt-2">
                      <div class="card">
                          <div class="card-body info-style">

                              <h4 id="special_word_4" class="header-title">
                                  শিরোনাম
                                  {{-- {!! $des_2->component_name_beng ?? '' !!} --}}
                              </h4>

                              
                              
                              

                              <div id="categoryWiseOverseasEmployement" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>

                              <div class="alert mt-3 p-0 text-justify" role="alert">
                                  <strong>বর্ণনা:</strong>
                                  {{-- নীতি বিবৃতি  --}}
                                  {{-- {!! $des_2->description_beng ?? '' !!} --}}
                              </div>
                              {{-- <p class="footer-note">
                                  <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                  <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_4"></span>
                              </p> --}}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- normalized per 100 people end -->





      <!-- Statistics area start -->
      <div class="col-lg-12 mt-4" id="scroll_daily_affected">
          <div class="card shadow-sm">
              <div class="card-body">
                  <div class="invoice-head title-bg-style">
                      <div class="row">
                          <div class="iv-left col-12">
                              <h2>District wise overseas employment 2005 to 2019</h2>
                          </div>
                          <div class="iv-right offset-md-4 col-2 " style="display: none">
                              <select name="" id="daily-infected-total-select" class="form-control">
                                  <option value="">তথ্যসূত্র বাছাই করুন</option>
                                  <option value="MIS-DGHS">MIS-DGHS</option>
                                  <option value="IEDCR">IEDCR</option>
                              </select>
                          </div>
                      </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-lg-3 mt-2">
                          <div class="card">
                              <div class="card-body info-style">
                                  <h4 id="special_word_1" class="header-title">
                                      শিরোনাম
                                      {{-- {!! $des_1->component_name_beng ?? '' !!} --}}
                                  </h4>
                                  <div class="the-number">
                                  </div>
                                  <h4 class="header-title"></h4>
                                  <div class="alert mt-3 p-0 text-justify" role="alert">
                                      <strong>বর্ণনা:</strong>
                                      {{-- নীতি বিবৃতি --}}
                                      {{-- {!! $des_1->description_beng ?? '' !!} --}}
                                  </div>
                                  {{-- <p class="footer-note">
                                      <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                      <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_1"></span>
                                  </p> --}}
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-9 mt-2">
                          {{--  end  --}}
                          <div class="card">
                              <div id="districtWiseOverseasEmployment" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Statistics area end -->





        <!-- Cumulative comparison of Registered vs Vaccinated start -->
      <div class="col-lg-12 mt-4" id="scroll_daily_affected_area_wise">
          <div class="card shadow-sm">
              <div class="card-body">
                  <div class="invoice-head title-bg-style">
                      <div class="row">
                          <div class="iv-left col-12 ">
                              <h3>
                                  Female Overseas Workers
                              </h3>
                          </div>
                          <div class="iv-right offset-md-4 col-2 " style="display: none">
                              <select name="" id="area-wise-infected-total" class="form-control">
                                  <option value="">তথ্যসূত্র বাছাই করুন</option>
                                  <option value="MIS-DGHS">MIS-DGHS</option>
                                  <option value="IEDCR">IEDCR</option>
                              </select>

                          </div>

                      </div>
                  </div>

                  <div class="col-lg-12 mt-2">
                      <div class="card">
                          <div class="card-body info-style">

                              <h4 id="special_word_4" class="header-title">
                                  শিরোনাম
                                  {{-- {!! $des_2->component_name_beng ?? '' !!} --}}
                              </h4>

                              <div id="cumulativeComparisonOfRegisteredVsVaccinated" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>

                              <div class="alert mt-3 p-0 text-justify" role="alert">
                                  <strong>বর্ণনা:</strong>
                                  {{-- নীতি বিবৃতি  --}}
                                  {{-- {!! $des_2->description_beng ?? '' !!} --}}
                              </div>
                              {{-- <p class="footer-note">
                                  <br>তথ্য সূত্র: MIS-DGHS, IEDCR
                                  <br>সর্বশেষ তথ্য হালনাগাদের তারিখঃ<span id="last_date_4"></span>
                              </p> --}}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
        <!-- Cumulative comparison of Registered vs Vaccinated end -->



        <!-- Demand supply analysis start -->
      <div class="col-lg-12 mt-4" id="scroll_daily_affected_area_wise">
          <div class="card shadow-sm">
              <div class="card-body">
                  <div class="invoice-head title-bg-style">
                      <div class="row">
                          <div class="iv-left col-12 ">
                              <h3>IPA Income</h3>
                          </div>
                          <div class="iv-right offset-md-4 col-2 " style="display: none">
                              <select name="" id="area-wise-infected-total" class="form-control">
                                  <option value="">তথ্যসূত্র বাছাই করুন</option>
                                  <option value="MIS-DGHS">MIS-DGHS</option>
                                  <option value="IEDCR">IEDCR</option>
                              </select>

                          </div>

                      </div>
                  </div>

                  <div class="col-lg-12 mt-2">
                      <div class="card">
                          <div class="card-body info-style">
                              <h4 id="special_word_4" class="header-title">
                                  শিরোনাম
                              </h4>
                              <div id="demandSupplyAnalysis" style="width: 100%; height: 550px; background-color: #FFFFFF;" ></div>
                              <div class="alert mt-3 p-0 text-justify" role="alert">
                                  <strong>বর্ণনা:</strong>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
               
@stop