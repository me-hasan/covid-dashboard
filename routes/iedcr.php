<?php
Route::group(['namespace' => 'Iedcr','middleware' => 'auth'],function (){

    Route::get('doubling-time-growth-rate-analysis', 'ManageIframeController@doubling_time_growth_rate_analysis')->name('iedcr.doubling_time_growth_rate_analysis')->middleware(['permission:iedcr-doubling-time-and-growth-rate-analysis']);

    Route::get('rt-analysis', 'ManageIframeController@rt_analysis')->name('iedcr.rt_analysis')->middleware(['permission:iedcr-rt-analysis']);

    Route::get('risk-zone-analysis', 'ManageIframeController@risk_zone_analysis')->name('iedcr.risk_zone_analysis')->middleware(['permission:risk-zone-analysis']);

    Route::get('test-positivity-analysis', 'TestPositiveController@test_positivity_analysis')->name('iedcr.test_positivity_analysis')->middleware(['permission:iedcr-test-positivity-analysis']);

    Route::get('case-distribution-and-forecasting', 'ManageIframeController@case_distribution_and_forecasting')->name('iedcr.case_distribution_and_forecasting')->middleware(['permission:iedcr-case-distribution-forecasting']);

    Route::get('syndromic-surveillance', 'ManageIframeController@syndromic_surveillance')->name('iedcr.syndromic_surveillance')->middleware(['permission:iedcr-syndromic-surveillance']);

    Route::get('epidemiological-syndromic-indicator-analysis', 'ManageIframeController@epidemiological_syndromic_indicator_analysis')->name('iedcr.epidemiological_syndromic_indicator_analysis')->middleware(['permission:iedcr-epidemiological-and-syndromic-indicator-analysis']);

    Route::get('corona-tracing-analysis', 'ManageIframeController@corona_tracing_analysis')->name('iedcr.corona_tracing_analysis')->middleware(['permission:iedcr-corona-tracking-analysis']);

    Route::get('conformance-analysis', 'ManageIframeController@conformance_analysis')->name('iedcr.conformance_analysis')->middleware(['permission:iedcr-conformance-analysis']);

    Route::get('hospital-and-patient-analysis', 'ManageIframeController@hospital_and_patient_analysis')->name('iedcr.hospital_and_patient_analysis')->middleware(['permission:iedcr-hospital-and-patient-analysis']);

    Route::get('mobility-and-predictive-importation', 'ManageIframeController@mobility_and_predictive_importation')->name('iedcr.mobility_and_predictive_importation')->middleware(['permission:iedcr-mobility-and-predictive-information']);

    // test positivity pdf
    Route::get('generate-test-positive-rate-excel', 'TestPositiveController@generateTestPositiveRateExcel')->name('iedcr.generate-test-positive-rate-excel');

    Route::get('generate-today-test-positive-excel', 'TestPositiveController@generateTodayTestPositiveExcel')->name('iedcr.generate-today-test-positive-excel');
});

