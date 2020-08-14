<?php

namespace App\Http\Controllers\Iedcr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageIframeController extends Controller
{
    public function doubling_time_growth_rate_analysis() {
        return view('iedcr.doubling-time-growth-rate-analysis');
    }

    public function rt_analysis() {
        return view('iedcr.rt-analysis');
    }

    public function case_distribution_and_forecasting() {
        return view('iedcr.case-distribution-and-forecasting');
    }
    public function epidemiological_syndromic_indicator_analysis() {
        return view('iedcr.epidemiological-syndromic-indicator-analysis');
    }

    public function corona_tracing_analysis() {
        return view('iedcr.corona-tracing-analysis');
    }
    public function conformance_analysis() {
        return view('iedcr.conformance-analysis');
    }
    public function hospital_and_patient_analysis() {
        return view('iedcr.hospital-and-patient-analysis');
    }
    public function mobility_and_predictive_importation() {
        return view('iedcr.mobility-and-predictive-importation');
    }
    public function risk_zone_analysis() {
        return view('iedcr.risk-zone-analysis');
    }
    public function syndromic_surveillance() {
        return view('iedcr.syndromic-surveillance');
    }
}
