<div class="card">
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card-header cart-height-customize">
                <h3 class="card-title">Nationwide Hospital Capacity and Occupancy</h3>
                <div class="card-options">
                    <div class="btn-list"> 
@can('iedcr-hospital-and-patient-analysis')
                    <a href="{!! route('iedcr.hospital_and_patient_analysis') !!}" class="btn btn-primary btn-sm">Details</a> 
@endcan
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="card-header">
                <h3 class="card-title">Dhaka City</h3>
                <div class="card-options">
                    <div class="btn-list"> <a href="#" class="btn btn-primary btn-sm" id="dhk_hospital_popup_content" data-target="#modaldemo1" data-toggle="modal">Details</a> </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row pl-4 pr-4">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-xm-12">
                        <h5>Total Number of Hospitals</h5>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-xm-12">
                        <h3 class="text-success text-center">{{$dhaka_hospital->tot_Hospital}}</h3>
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
                        <h3 class="text-success text-center">{{$dhaka_hospital->General_Beds}}</h3>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6col-xm-12">
                        <h3 class="text-success text-center">{{$dhaka_hospital->ICU_Beds}}</h3>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
                        <h5 class="text-center">Occupied</h5>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6col-xm-12">
                        <h5 class="text-center">Occupied</h5>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
                        <h3 class="text-success text-center">{{number_format($dhaka_hospital->percent_General_Beds_Occupied,2)}}%</h3>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6col-xm-12">
                        <h3 class="text-success text-center">{{number_format($dhaka_hospital->percent_ICU_Beds_Occupied,2)}}%</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="card-header">
                <h3 class="card-title">Chittagong City</h3>
                <div class="card-options">
                    <div class="btn-list"> <a href="#" class="btn btn-primary btn-sm" id="ctg_hospital_popup_content" data-target="#modaldemo1" data-toggle="modal">Details</a> </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row pl-4 pr-4">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-xm-12">
                        <h5>Total Number of Hospitals</h5>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-xm-12">
                        <h3 class="text-success text-center">{{$ctg_hospital->tot_Hospital}}</h3>
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
                        <h3 class="text-success text-center">{{$ctg_hospital->General_Beds}}</h3>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6col-xm-12">
                        <h3 class="text-success text-center">{{$ctg_hospital->ICU_Beds}}</h3>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
                        <h5 class="text-center">Occupied</h5>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6col-xm-12">
                        <h5 class="text-center">Occupied</h5>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
                        <h3 class="text-success text-center">{{number_format($ctg_hospital->percent_General_Beds_Occupied,2)}}%</h3>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6col-xm-12">
                        <h3 class="text-success text-center">{{number_format($ctg_hospital->percent_General_Beds_Occupied,2)}}%</h3>
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

<div class="modal" id="modaldemo2">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title"></h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" id="modalContent2"> </div>
        </div>
    </div>
</div>

<div class="modal" id="modaldemo1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title"></h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" id="modalContent"> </div>
        </div>
    </div>
</div>
<div class="d-none">
    <div id="dhk_hospital_popup_table_content" class="table-responsive">
        <table id="dtable_popup_dhk" class="table table-striped table-bordered text-nowrap">
            <thead>
            <tr>
                <th class="border-bottom-0">Hospital Name</th>
                <th class="border-bottom-0">Gen. Bed</th>
                <th class="border-bottom-0">Admitted Gen. Bed</th>
                <th class="border-bottom-0">ICU Bed</th>
                <th class="border-bottom-0">Admitted ICU</th>
            </tr>
            </thead>
            <tbody>
            @foreach($dhaka_hospital_details as $row)   
            <tr>
                <td>{{$row->hospitalName}}</td>
                <td>{{$row->alocatedGeneralBed}}</td>
                <td>{{$row->AdmittedGeneralBed}}</td>
                <td>{{$row->alocatedICUBed}}</td>
                <td>{{$row->AdmittedICUBed}}</td>
            </tr>
            @endforeach
            
            </tbody>
        </table>
    </div>
</div>

<div class="d-none">
    <div id="ctg_hospital_popup_table_content" class="table-responsive">
        <table id="dtable_popup" class="table table-striped table-bordered text-nowrap">
            <thead>
            <tr>
                <th class="border-bottom-0">Hospital Name</th>
                <th class="border-bottom-0">Gen. Bed</th>
                <th class="border-bottom-0">Admitted Gen. Bed</th>
                <th class="border-bottom-0">ICU Bed</th>
                <th class="border-bottom-0">Admitted ICU</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ctg_hospital_details as $row)   
            <tr>
                <td>{{$row->hospitalName}}</td>
                <td>{{$row->alocatedGeneralBed}}</td>
                <td>{{$row->AdmittedGeneralBed}}</td>
                <td>{{$row->alocatedICUBed}}</td>
                <td>{{$row->AdmittedICUBed}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
