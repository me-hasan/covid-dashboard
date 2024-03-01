@extends('economic.master')

@section('content')
      <div class="col-lg-12 mt-4" id="scroll_daily_affected_area_wise">
          <div class="card shadow-sm">
              <div class="card-body">
                  <div class="invoice-head title-bg-style">
                      <div class="row">
                          <div class="iv-left col-12 ">
                              <h3>
                                  Overview
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

                                <p>Dummy paragraph</p>
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
               
@stop