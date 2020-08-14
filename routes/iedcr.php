<?php
Route::group(['namespace' => 'Iedcr'],function (){
    Route::get('doubling-time-growth-rate-analysis', 'ManageIframeController@doubling_time_growth_rate_analysis')->name('iedcr.doubling_time_growth_rate_analysis');
    Route::get('rt-analysis', 'ManageIframeController@rt_analysis')->name('iedcr.rt_analysis');
    Route::get('risk-zone-analysis', 'ManageIframeController@risk_zone_analysis')->name('iedcr.risk_zone_analysis');
    Route::get('test-positivity-analysis', 'ManageIframeController@test_positivity_analysis')->name('iedcr.test_positivity_analysis');
    Route::get('case-distribution-and-forecasting', 'ManageIframeController@case_distribution_and_forecasting')->name('iedcr.case_distribution_and_forecasting');
    Route::get('syndromic-surveillance', 'ManageIframeController@syndromic_surveillance')->name('iedcr.syndromic_surveillance');
    Route::get('epidemiological-syndromic-indicator-analysis', 'ManageIframeController@epidemiological_syndromic_indicator_analysis')->name('iedcr.epidemiological_syndromic_indicator_analysis');
    Route::get('corona-tracing-analysis', 'ManageIframeController@corona_tracing_analysis')->name('iedcr.corona_tracing_analysis');
    Route::get('conformance-analysis', 'ManageIframeController@conformance_analysis')->name('iedcr.conformance_analysis');
    Route::get('hospital-and-patient-analysis', 'ManageIframeController@hospital_and_patient_analysis')->name('iedcr.hospital_and_patient_analysis');
    Route::get('mobility-and-predictive-importation', 'ManageIframeController@mobility_and_predictive_importation')->name('iedcr.mobility_and_predictive_importation');
});

