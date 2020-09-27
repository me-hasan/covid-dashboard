<!-- Start :: Risk Matrix -->
<?php 
$first_week_start = convertEnglishDateToBangla($first_week->first_2_weeks_start); 
$first_week_end = convertEnglishDateToBangla($first_week->first_2_weeks_end); 


$last_week_start = convertEnglishDateToBangla($last_week->last_2_weeks_start); 
$last_week_end = convertEnglishDateToBangla($last_week->last_2_weeks_ends); 
$today = convertEnglishDateToBangla(date('Y-m-d')); 
?>

<div class="card">
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card-header cart-height-customize">
                <h3 class="card-title b1">ঝুঁকি পর্যালোচনার ভিত্তিতে জেলাগুলির চলাচল বর্তমান ১৪ দিন এবং আগের ১৪ দিনের তুলনায়</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-1 col-md-1">
                    <div style="transform: rotate(-90deg);width: 219px;margin-left: -70px;margin-top: 100px;" class="fs-20 b1">
                        <br>বিগত ২ সপ্তাহ ( {{$first_week_end}} - {{$first_week_start}} )</div>
                </div>
                <div class="col-xl-9 col-md-9">
                    <div class="table-responsive">
                        <table class="table table-bordered table-vcenter text-nowrap b1">
                            <thead >
                            <tr>
                                <td colspan="4" class="text-center fs-18"><span class="text-danger">আজ {{ $today }}</span>, বিগত ৩য় ও ৪র্থ সপ্তাহ: ( {{$last_week_end}} - {{$last_week_start}} ) </td>
                            </tr>
                            </thead>
                            <tbody class="fs-20 text-center risk_matrix">
                            <tr>
                                <td></td>
                                <td>উচ্চ ঝুঁকিপূর্ণ</td>
                                <td>মধ্যম ঝুঁকিপূর্ণ</td>
                                <td>কম ঝুঁকিপূর্ণ</td>
                            </tr>
                            <tr>
                                <td>উচ্চ ঝুঁকিপূর্ণ</td>
                                <td class="bg-danger" data-target="#modaldemo1" data-toggle="modal">{{ convertEnglishDigitToBangla($rm_7->high_to_high)}}</td>
                                <td class="bg-danger" data-target="#modaldemo1" data-toggle="modal">{{ convertEnglishDigitToBangla($rm_4->medium_to_high) }} </td>
                                <td class="bg-danger" data-target="#modaldemo1" data-toggle="modal"> {{ convertEnglishDigitToBangla($rm_1->low_to_high) }}</td>
                            </tr>
                            <tr>
                                <td>মধ্যম ঝুঁকিপূর্ণ</td>
                                <td style="background: #00ff2e" data-target="#modaldemo1" data-toggle="modal">{{ convertEnglishDigitToBangla($rm_8->high_to_medium)}} </td>
                                <td style="background: #feea1f" data-target="#modaldemo1" data-toggle="modal">{{ convertEnglishDigitToBangla($rm_5->medium_to_medium) }}</td>
                                <td class="bg-danger" data-target="#modaldemo1" data-toggle="modal">{{ convertEnglishDigitToBangla($rm_2->low_to_medium) }}</td>
                            </tr>
                            <tr>
                                <td>কম ঝুঁকিপূর্ণ</td>
                                <td style="background: #00ff2e" data-target="#modaldemo1" data-toggle="modal">{{ convertEnglishDigitToBangla($rm_9->high_to_low)}}</td>
                                <td style="background: #00ff2e" data-target="#modaldemo1" data-toggle="modal">{{ convertEnglishDigitToBangla($rm_6->medium_to_low) }} </td>
                                <td style="background: #00ff2e" data-target="#modaldemo1" data-toggle="modal">{{ convertEnglishDigitToBangla($rm_3->low_to_low) }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-xl-2 col-md-2 b1">
                    <div class="row">
                        <div class="col-xl-4 text-right">
                            <div class="pt-4">অবস্থার অবনতি</div>
                            <div class="pt-9 mt-9">অবস্থার উন্নতি</div>
                        </div>
                        <div class="col-xl-8">
                            <div>গ্রাডিয়েন্ট</div>
                            <div style="width: 50px; height: 250px;background: rgb(244,55,53);
background: linear-gradient(#f43735 0%, #fff51e 50%, #00ff2e 100%);"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">        
                <div class="col-xl-8 col-lg-8 col-md-6">
                    <div class="card-body">
                        <h5 class="card-title b1">বর্ণনা</h5>
                        <p class="card-text b1">
                             {{ $des_8->description_beng }}
                        </p>
                    </div>
                 </div>
                 <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="card-body">
                        <h5 class="card-title b1">বিশ্লেষণ</h5>
                        <p class="card-text b1">{{ $des_8->insight_beng }}</p>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>
<!-- End :: Risk Matrix -->

<!-- Strat :: Modal Content -->

<div class="d-none">
    <div id="risk_popup_table_content" class="table-responsive b1">
        <table id="risk_table_popup" class="table table-striped table-bordered text-nowrap">
            <thead>
            <tr>
                <th class="border-bottom-0">জেলা</th>
                <th class="border-bottom-0">গত ২ সপ্তাহের টেস্ট পজিটিভিটি</th>
                <th class="border-bottom-0">গত ৩য় ও ৪র্থ সপ্তাহের টেস্ট পজিটিভিটি</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>ঢাকা</td>
                <td>০.৯৩</td>
                <td>০.৬৯</td>

            </tr>
            
            <tr>
                <td>ঢাকা</td>
                <td>০.৯৩</td>
                <td>০.৬৯</td>

            </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- End :: Modal Content -->

@push('custom_script')
	<script type="text/javascript">
		$(document).ready(function($) {
			
			//Details display datatable
			//function hospitalDataModal(){
				$('#risk_table_popup').DataTable( {
					responsive: true,
					"pageLength": 8,
					"order": [[ 2, "desc" ]],
					language: {
						searchPlaceholder: 'Search...',
						sSearch: '',
						lengthMenu: '_MENU_',
					},
					columnDefs: [{
						className: "text-center",
						targets: "_all"
					}],
					responsive: {
						details: {
							display: $.fn.dataTable.Responsive.display.modal( {
								header: function ( row ) {
									var data = row.data();
									return 'Details for '+data[0]+' '+data[1];
								}
							} ),
							renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
								tableClass: 'table border mb-0'
							} )
						}
					}
				});
			//}
					
			$('.risk_matrix tr td[data-toggle="modal"]').click(function(){
				$('.modal-title').html('Risk Matrix');
				$('#modalContent').html($('#risk_popup_table_content').html());
				//hospitalDataModal();
			});
		});
    </script>
@endpush