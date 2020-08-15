<div class="col-lg-12">
    <div class="d-flex flex-row mb-3 box-wrapper">
        <div class="info-box mt-2 mr-2 mb-2" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('আক্রান্তঃ দৈনিক পরিবর্তন', 'daily_infected', 'আক্রান্তের সংখ্যা', 'তারিখ');">
            <h4 class="card-title">আক্রান্ত (২৪ ঘন্টায়)</h4>
            <div class="num-style">
                <spam id="last_infected">{!! App\Http\Controllers\cabinet\DashboardController::en2bn($result_24_hours['INFECTED_24HR'])  !!}</spam>
                <span class="text-danger"><i class="mdi mdi-arrow-{!! ($result_24_hours['INFECTED_24HR'] > $result_last_day['INFECTED_24HR']) ? 'up': 'down' !!}-circle menu-icon"></i></span> </div>
        </div>
        <div class="info-box m-2" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('সুস্থঃ দৈনিক পরিবর্তন', 'daily_recovered', 'সুস্থতার সংখ্যা', 'তারিখ');">
            <h4 class="card-title">
                <!--গত ২৪ ঘন্টায় --><!--নতুন -->সুস্থ (২৪ ঘন্টায়) </h4>
            <div class="num-style">
                <span id="last_recovered"> {!! App\Http\Controllers\cabinet\DashboardController::en2bn($result_24_hours['RECOVERED_24HR'])  !!}</span>
                <span class="text-success"><i class="mdi mdi-arrow-{!! ($result_24_hours['RECOVERED_24HR'] > $result_last_day['RECOVERED_24HR']) ? 'up': 'down' !!}-circle menu-icon"></i></span>
            </div>
        </div>
        <div class="info-box m-2" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('মৃত্যুঃ দৈনিক পরিবর্তন', 'daily_death', 'মৃত্যুর সংখ্যা', 'তারিখ');">
            <h4 class="card-title">
                <!--গত ২৪ ঘন্টায় --><!--নতুন-->মৃত্যু (২৪ ঘন্টায়) </h4>
            <div class="num-style">
                <span id="last_dead">{!! App\Http\Controllers\cabinet\DashboardController::en2bn($result_24_hours['DEATH_24HR'])  !!}</span>
                <span class="text-danger"><i class="mdi mdi-arrow-{!! ($result_24_hours['DEATH_24HR'] > $result_last_day['DEATH_24HR']) ? 'up': 'down' !!}-circle menu-icon"></i></span>
            </div>
        </div>
        <div class="info-box m-2" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('পরীক্ষাঃ দৈনিক পরিবর্তন', 'daily_test', 'পরীক্ষার সংখ্যা', 'তারিখ');">
            <h4 class="card-title">
                <!--গত ২৪ ঘন্টায় --><!--নতুন -->পরীক্ষা<!--কৃত নমুনা সংখ্যা-->
                <!--সংখ্যা-->(২৪ ঘন্টায়) </h4>
            <div class="num-style">
                <span id="last_test">{!! App\Http\Controllers\cabinet\DashboardController::en2bn($result_24_hours['TEST_24HR'])  !!}</span>
                <span class="text-success"><i class="mdi mdi-arrow-{!! ($result_24_hours['TEST_24HR'] > $result_last_day['TEST_24HR']) ? 'up': 'down' !!}-circle menu-icon"></i></span>
            </div>
        </div>
        <div class="info-box line-chart-1 m-2" style="position: relative;" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('মোট আক্রান্তঃ দৈনিক পরিবর্তন', 'total_infected', 'মোট আক্রান্তর সংখ্যা', 'তারিখ');">
            <h4 class="card-title">মোট আক্রান্ত</h4>
            <div class="num-style" id="total_infected">{!! App\Http\Controllers\cabinet\DashboardController::en2bn($result_24_hours['INFECTED_TOTAL'])  !!}</div>
        </div>
        <div class="info-box line-chart-2 m-2" style="position: relative;" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('মোট সুস্থঃ দৈনিক পরিবর্তন', 'total_recovered', 'মোট আক্রান্তর সংখ্যা', 'তারিখ');">
            <h4 class="card-title">মোট সুস্থ</h4>
            <div class="num-style text-success" id="total_recovered">{!! App\Http\Controllers\cabinet\DashboardController::en2bn($result_24_hours['RECOVERED_TOTAL'])  !!}</div>
        </div>
        <div class="info-box line-chart-3 m-2" style="position: relative;" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('মোট মৃত্যুঃ দৈনিক পরিবর্তন', 'total_dead', 'মোট মৃত্যুর সংখ্যা', 'তারিখ');">
            <h4 class="card-title">মোট মৃত্যু</h4>
            <div class="num-style text-danger" id="total_dead">{!! App\Http\Controllers\cabinet\DashboardController::en2bn($result_24_hours['DEATH_TOTAL'])  !!}</div>
        </div>
        <div class="info-box line-chart-4 mt-2 ml-2 mb-2" style="position: relative;" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('মোট পরীক্ষাঃ দৈনিক পরিবর্তন', 'total_test', 'মোট পরীক্ষার সংখ্যা', 'তারিখ');">
            <h4 class="card-title">মোট পরীক্ষা<!--কৃত নমুনা সংখ্যা--></h4>
            <div class="num-style" id="total_test">{!!App\Http\Controllers\cabinet\DashboardController::en2bn( $result_24_hours['TEST_TOTAL'])  !!}</div>
        </div>
    </div>
</div>
