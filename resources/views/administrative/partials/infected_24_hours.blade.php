<div class="row cabinet-top-cards">
    <div class="col-xl-2 col-lg-4 col-md-4 col-xm-6">
        <div class="card overflow-hidden dash1-card border-0" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('আক্রান্তঃ দৈনিক পরিবর্তন', 'daily_infected', 'আক্রান্তের সংখ্যা', 'তারিখ');">
            <div class="card-body">
                <p class=" mb-1 ">আক্রান্ত (২৪ ঘন্টায়)</p>
                <h4 class="mb-1 number-font text-danger">{!! App\Http\Controllers\cabinet\DashboardController::en2bn($result_24_hours['INFECTED_24HR'])  !!}</h4>
                <span class="text-danger d-none"><i class="mdi mdi-arrow-{!! (isset($result_24_hours['INFECTED_24HR']) && isset($result_last_day['INFECTED_24HR']) && $result_24_hours['INFECTED_24HR'] > $result_last_day['INFECTED_24HR']) ? 'up': 'down' !!}-circle menu-icon"></i></span>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-4 col-xm-6">
        <div class="card overflow-hidden dash1-card border-0" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('সুস্থঃ দৈনিক পরিবর্তন', 'daily_recovered', 'সুস্থতার সংখ্যা', 'তারিখ');">
            <div class="card-body">
                <p class=" mb-1 ">সুস্থ (২৪ ঘন্টায়)</p>
                <h4 class="mb-1 number-font text-success">{!! App\Http\Controllers\cabinet\DashboardController::en2bn($result_24_hours['RECOVERED_24HR'])  !!}</h4>
                <span class="text-success d-none"><i class="mdi mdi-arrow-{!! (isset($result_24_hours['RECOVERED_24HR']) && isset($result_last_day['RECOVERED_24HR']) && $result_24_hours['RECOVERED_24HR'] > $result_last_day['RECOVERED_24HR']) ? 'up': 'down' !!}-circle menu-icon"></i></span>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-4 col-xm-6">
        <div class="card overflow-hidden dash1-card border-0" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('মৃত্যুঃ দৈনিক পরিবর্তন', 'daily_death', 'মৃত্যুর সংখ্যা', 'তারিখ');">
            <div class="card-body">
                <p class=" mb-1 ">মৃত্যু (২৪ ঘন্টায়)</p>
                <h4 class="mb-1 number-font text-danger">{!! App\Http\Controllers\cabinet\DashboardController::en2bn($result_24_hours['DEATH_24HR'])  !!}</h4>
         		<span class="text-danger d-none"><i class="mdi mdi-arrow-{!! (isset($result_24_hours['DEATH_24HR']) && isset($result_last_day['DEATH_24HR']) && $result_24_hours['DEATH_24HR'] > $result_last_day['DEATH_24HR']) ? 'up': 'down' !!}-circle menu-icon"></i></span>
          </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-4 col-xm-6">
        <div class="card overflow-hidden dash1-card border-0" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('পরীক্ষাঃ দৈনিক পরিবর্তন', 'daily_test', 'পরীক্ষার সংখ্যা', 'তারিখ');">
            <div class="card-body">
                <p class=" mb-1">পরীক্ষা (২৪ ঘন্টায়)</p>
                <h4 class="mb-1 number-font text-success">{!! App\Http\Controllers\cabinet\DashboardController::en2bn($result_24_hours['TEST_24HR'])  !!}</h4>
                <span class="text-success d-none"><i class="mdi mdi-arrow-{!! (isset($result_24_hours['TEST_24HR']) && isset($result_last_day['TEST_24HR']) && $result_24_hours['TEST_24HR'] > $result_last_day['TEST_24HR']) ? 'up': 'down' !!}-circle menu-icon"></i></span>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-4 col-xm-6">
        <div class="card overflow-hidden dash1-card border-0" style="position: relative;" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('মোট আক্রান্তঃ দৈনিক পরিবর্তন', 'total_infected', 'মোট আক্রান্তর সংখ্যা', 'তারিখ');">
            <div class="card-body">
                <p class=" mb-1">মোট আক্রান্ত</p>
                <h4 class="mb-1 number-font text-danger">{!! App\Http\Controllers\cabinet\DashboardController::en2bn($result_24_hours['INFECTED_TOTAL'])  !!}</h4>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-4 col-xm-6">
        <div class="card overflow-hidden dash1-card border-0" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('মোট সুস্থঃ দৈনিক পরিবর্তন', 'total_recovered', 'মোট আক্রান্তর সংখ্যা', 'তারিখ');">
            <div class="card-body">
                <p class=" mb-1">মোট সুস্থ</p>
                <h4 class="mb-1 number-font text-success">{!! App\Http\Controllers\cabinet\DashboardController::en2bn($result_24_hours['RECOVERED_TOTAL'])  !!}</h4></div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-4 col-xm-6">
        <div class="card overflow-hidden dash1-card border-0" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('মোট মৃত্যুঃ দৈনিক পরিবর্তন', 'total_dead', 'মোট মৃত্যুর সংখ্যা', 'তারিখ');">
            <div class="card-body">
                <p class=" mb-1 ">মোট মৃত্যু</p>
                <h4 class="mb-1 number-font text-danger">{!! App\Http\Controllers\cabinet\DashboardController::en2bn($result_24_hours['DEATH_TOTAL'])  !!}</h4>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-4 col-xm-6">
        <div class="card overflow-hidden dash1-card border-0" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('মোট পরীক্ষাঃ দৈনিক পরিবর্তন', 'total_test', 'মোট পরীক্ষার সংখ্যা', 'তারিখ');">
            <div class="card-body">
                <p class=" mb-1">মোট পরীক্ষা</p>
                <h4 class="mb-1 number-font text-warning">{!!App\Http\Controllers\cabinet\DashboardController::en2bn( $result_24_hours['TEST_TOTAL'])  !!}</h4>
            </div>
        </div>
    </div>
</div>