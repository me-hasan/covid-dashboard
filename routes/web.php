<?php

use Illuminate\Support\Facades\Route;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('hellow', function () {
    return en2bnTranslation('CHITTAGONG');
});
Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('login_admin');

Route::get('/home', 'HomeController@index')->name('home');

//Route for cabinet
Route::get('/dashboard', 'cabinet\DashboardController@covid24Hours')->name('dashboard')->middleware(['auth', 'permission:cabinet-dashboard']);
Route::get('/dataframe', 'cabinet\DashboardController@dataFrameData')->name('cabinet.dataframe');

// iedcr route
/*get test positivity data*/
Route::get('test-positivity-data', 'iedcr\IedcrDashboardController@getTestPositivityData')->name('iedcr.test_positivity_data')->middleware(['auth', 'permission:iedcr-dashboard']);
Route::get('get-nationwide-infected-cases-data', 'iedcr\IedcrDashboardController@nationalInfectedCaseData')->name('iedcr.nationalInfectedCaseData')->middleware(['auth', 'permission:iedcr-dashboard']);
Route::get('/iedcr/dashboard', 'iedcr\IedcrDashboardController@index')->name('iedcr.dashboard')->middleware(['auth', 'permission:iedcr-dashboard']);

Route::get('/iedcr/generate-gender-excel', 'iedcr\IedcrDashboardController@generateInfectedGenderExcel')->name('iedcr.generate-gender-excel');
Route::get('/iedcr/generate-series-excel', 'iedcr\IedcrDashboardController@generateInfectedSeriesExcel')->name('iedcr.generate-series-excel');
Route::get('/iedcr/per-lac-infect', 'iedcr\IedcrDashboardController@generateInfectedPerLacExcel')->name('iedcr.per-lac-infect');
Route::get('/iedcr/generate-agegroup-excel', 'iedcr\IedcrDashboardController@generateInfectedAgeGroupExcel')->name('iedcr.generate-agegroup-excel');

// row 5 pdf
Route::get('/iedcr/generate-tw-weeks-excel', 'iedcr\IedcrDashboardController@generateTwoWeeksExcel')->name('iedcr.generate-twoweeks-excel');
Route::get('/iedcr/generate-division-death-excel', 'iedcr\IedcrDashboardController@generateDivisionDeathExcel')->name('iedcr.generate-division-death-excel');
Route::get('/iedcr/generate-death-by-age-group-excel', 'iedcr\IedcrDashboardController@generateDeathByAgeGroupExcel')->name('iedcr.generate-death-by-age-group-excel');
Route::get('/iedcr/generate-death-by-gender-excel', 'iedcr\IedcrDashboardController@generateDeathByGenderExcel')->name('iedcr.generate-death-by-gender-excel');

//risk-zone analysis excel
Route::get('/iedcr/zone-info-excel', 'iedcr\IedcrDashboardController@generateZoneInfoExcel')->name('iedcr.generate-zone-info-excel');
Route::get('/iedcr/weekly-change-excel', 'iedcr\IedcrDashboardController@generateWeeklyChangeExcel')->name('iedcr.generate-weekly-change-excel');
Route::get('/iedcr/weekly-last-zone', 'iedcr\IedcrDashboardController@generateLastZoneExcel')->name('iedcr.generate-last-zone-excel');
Route::get('/iedcr/weekly-change-status', 'iedcr\IedcrDashboardController@generateChangeStatusExcel')->name('iedcr.generate-change-status-excel');
Route::get('/iedcr/weekly-current-zone', 'iedcr\IedcrDashboardController@generateCurrentZoneExcel')->name('iedcr.generate-current-zone-excel');

Route::prefix('admin')->group(function () {
    Route::get('division/districts', 'UserController@getDistrictFromDivision')->name('get-district-from-division');
    Route::get('division/district/upazilla', 'UserController@getUpazillaFromDistrict')->name('get-upazilla-from-district');

    Route::get('5EGSRBXAY9ZP', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', 'HomeController@index')->name('admin-dashboard');

        Route::get('roles/create', function () {
            $role = Role::create(['name' => 'writer']);
            $permission = Permission::create(['name' => 'edit-articles']);

            $role->givePermissionTo($permission);
            $permission->assignRole($role);

        });

        Route::get('assign-role', function () {
            $user = App\User::find(1);
            $user->assignRole('writer');

            dd('assigned role writer to user: ' . $user->name);
        });

        Route::get('check-permission', function () {
            $user = App\User::find(1);

            if ($user->can('edit-articles')) {
                dd('yap, working!');
            } else {
                dd('not working');
            }
        });


        // user management routes for admin
        Route::get('users', 'UserController@index')->name('all-user');
        Route::get('user/create', 'UserController@createForm');

        Route::post('user/create', 'UserController@store')->name('create-user');

        Route::get('user/edit/{user}', 'UserController@editForm');
        Route::post('user/edit/{user}', 'UserController@update')->name('edit-user');
        Route::delete('user/{id}', 'UserController@destroy');
        // user management routes ending

        // role management routes for admin
        Route::get('roles', 'RoleController@index')->name('all-roles');
        Route::post('role/create', 'RoleController@store')->name('create-role');

        Route::put('role/edit/{role_id}', 'RoleController@update')->name('edit-role');
        Route::delete('role/{role_id}', 'RoleController@destroy');
        // role management routes ending

        // component management routes for admin
        Route::get('components', 'ComponentController@index')->name('all-components');
        Route::post('component/create', 'ComponentController@store')->name('create-component');

        Route::put('component/edit/{component_id}', 'ComponentController@update')->name('edit-component');
        // component management routes ending
    });


        /* Mail Management */
        Route::get('mail/pdf', 'MailController@mailPdf')->name('mail-pdf');
        Route::post('mail/pdf/upoload', 'MailController@mailPdfUpload')->name('mail-pdf-upload');
        Route::get('mail', 'MailController@index')->name('all-mail');
        Route::get('mail/create', 'MailController@createForm');
        Route::post('mail/create', 'MailController@store')->name('create-mail');
        Route::get('mail/edit/{user}', 'MailController@editForm');
        Route::post('mail/edit/{user}', 'MailController@update')->name('edit-mail');
        Route::delete('mail/{id}', 'MailController@destroy');
        Route::get('sending/email', 'MailController@sendingEmail')->name('sending-mail');   
        Route::post('sending/email/trigger', 'MailController@sendingEmailTriggered')->name('sending-mail-trigger');  
        
        /**New  bulletin*/
        Route::get('news/bulletin/history', 'NewsBulletinController@newsBulletinHistory')->name('news-bulletin-history');
        Route::get('news/bulletin/create', 'NewsBulletinController@newsBulletinCreate')->name('create-bolletin');
        Route::post('news/bulletin/genearate', 'NewsBulletinController@newsBulletinGenerate')->name('bulletin-generate');
        Route::get('news/bulletin/pdf/view/{date_id}/{district}', 'NewsBulletinController@newsBulletinPdfView')->name('bolletin-pdf-view');
        Route::get('news/bulletin/pdf/email/{date_id}/{district}', 'NewsBulletinController@newsBulletinPdfSendEMail')->name('bolletin-pdf-send-email');
        Route::get('news/bulletin/pdf/download/{date_id}/{district}', 'NewsBulletinController@newsBulletinPdfDownload')->name('bolletin-pdf-download');
        
        /*bulletin map upload*/
        Route::get('chart/history', 'NewsBulletinController@chartHistory')->name('chart-history');
        Route::get('chart/history/view/edit/{id}', 'NewsBulletinController@bulletinChartViewAndEdit')->name('chart-history-view-edit');
        Route::get('bulletin/chart', 'NewsBulletinController@bulletinChart')->name('bulletin-chart');
        Route::post('bulletin/chart/upoload', 'NewsBulletinController@bulletinChartUpload')->name('bulletin-chart-upload');
        Route::post('check/bulletin/chart/upload', 'NewsBulletinController@checkBulletinChartUpload')->name('check.bulletin.chart.upload');
        Route::post('check/bulletin/district/list', 'NewsBulletinController@checkBulletinDistrictList')->name('check.bulletin.district.list');

        /*email mapping*/
        Route::get('email/mapping/history', 'NewsBulletinController@emailMappingHistory')->name('email-mapping-history');
        Route::get('add/email/mapping', 'NewsBulletinController@addEmailMapping')->name('add-email-mapping');
        Route::post('save/email/mapping', 'NewsBulletinController@saveEmailMapping')->name('email-mapping-save');
        Route::get('edit/email/mapping/{id}', 'NewsBulletinController@editEmailMapping')->name('email-mapping-edit');
        Route::post('update/email/mapping/{id}', 'NewsBulletinController@updateEmailMapping')->name('email-mapping-update');
});


Route::prefix('iedcr')->group(function () {
    require(__DIR__ . '/iedcr.php');
});


Route::get('hpm-dashboard', 'Hpm\DashboardController@index')->name('hpm.dashboard');
Route::get('hpm-get-district-comparision-data', 'Hpm\DashboardController@getCumulativeInfectedData')->name('hpm.get_district_comparision');
Route::get('hpm-get-national-daily-infected-trend', 'Hpm\DashboardController@getNationalDailyInfectedData')->name('hpm.get_national_daily_infected_trend');
Route::get('hpm-get-national-infected-trend', 'Hpm\DashboardController@getNationalInfectedData')->name('hpm.get_national_infected_trend');
Route::get('hpm-get-national-test-vs-infected-trend', 'Hpm\DashboardController@getNationalTestVsInfectedTrend')->name('hpm.get_national_test_vs_infected_trend');
Route::get('hpm-get-test-positivity-rate-trend', 'Hpm\DashboardController@getTestPositivityRateTrend')->name('hpm.get_hpm_get_test_positivity_rate_trend');
Route::get('hpm-get-weekly-comparision-infected-death', 'Hpm\DashboardController@getWeeklyDifferenceData')->name('hpm.get_weekly_comparision_infected_death');

Route::get('hpm-risk-matrix-data', 'Hpm\DashboardController@getRiskMatricData')->name('hpm.getRiskMatricData');
Route::get('xpm-risk-matrix-date-change', 'xpm\DashboardController@getRiskMatrixDateChange')->name('weekly.date.change.for.matrix');

Route::get('hpm-second-risk-matrix-data', 'Hpm\DashboardController@getSecondRiskMatricData')->name('hpm.getSecondRiskMatricData');
Route::get('xpm-second-risk-matrix-date-change', 'xpm\DashboardController@getSecondRiskMatrixDateChange')->name('weekly.date.change.for.second.matrix');

Route::get('hpm-third-risk-matrix-data', 'Hpm\DashboardController@getThirdRiskMatricData')->name('hpm.getThirdRiskMatricData');
Route::get('xpm-third-risk-matrix-date-change', 'xpm\DashboardController@getThirdRiskMatrixDateChange')->name('weekly.date.change.for.third.matrix');

Route::get('hpm-get-hospital-beds-trend', 'Hpm\DashboardController@getHospitalBedsTrend')->name('hpm.get_hospital_beds_trend');
Route::get('/admin/f5', function () {

    // auth()->user()->roles()->attach(1);

    //dd(auth()->user()->roles->toArray());

    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('clear-compiled');
    Artisan::call('route:clear');
    Artisan::call('storage:link');

    echo "ok";

});
//================New Route For Dashboard Developed By SoftBD Ltd.====//
Route::redirect('xpm-dashboard', 'national-dashboard');
Route::redirect('hpm-dashboard', 'national-dashboard');
Route::get('national-dashboard', 'xpm\DashboardController@index')->name('xpm.dashboard')->middleware('first_time_login');

Route::get('national-dashboard/testdata', 'xpm\DashboardController@testData')->middleware('first_time_login');
Route::get('force-first-time-password-reset', 'xpm\DashboardController@forceFirstTimeResetPassword')->name('force.reset.password');
Route::post('force-first-time-password-submit', 'xpm\DashboardController@submitforceFirstTimePassword')->name('submit.force.password');

Route::get('national-dashboard', 'xpm\DashboardController@index')->name('xpm.dashboard');
Route::get('age-graph', 'xpm\DashboardController@edgeGraph')->name('xpm.edge-graph');
Route::get('xpm-get-district-comparision-data', 'xpm\DashboardController@getCumulativeInfectedData')->name('xpm.get_district_comparision');
Route::get('xpm-get-national-daily-infected-trend', 'xpm\DashboardController@getNationalDailyInfectedData')->name('xpm.get_national_daily_infected_trend');
Route::get('xpm-get-national-infected-trend', 'xpm\DashboardController@getNationalInfectedData')->name('xpm.get_national_infected_trend');
Route::get('xpm-get-national-test-vs-infected-trend', 'xpm\DashboardController@getNationalTestVsInfectedTrend')->name('xpm.get_national_test_vs_infected_trend');
Route::get('xpm-get-test-positivity-rate-trend', 'xpm\DashboardController@getTestPositivityRateTrend')->name('xpm.get_hpm_get_test_positivity_rate_trend');
Route::get('xpm-get-weekly-comparision-infected-death', 'xpm\DashboardController@getWeeklyDifferenceData')->name('xpm.get_weekly_comparision_infected_death');
Route::get('xpm-risk-matrix-data', 'xpm\DashboardController@getRiskMatricData')->name('xpm.getRiskMatricData');


Route::get('login_old', function () {
    return view('xpm.login');
});
Route::get('get-asia-tested-data', 'xpm\DashboardController@getAsiaTestedData')->name('get-asia-tested-data');
Route::get('get-dhaka-positive-rate-data', 'xpm\DashboardController@getDhakaPositiveRateData')->name('get-dhaka-positive-rate-data');
Route::get('get-national-level-test-positivity-data', 'xpm\DashboardController@getNationLevelTestPositivityData')->name('get-national-level-test-positivity-data');
Route::get('get-division-data', 'xpm\DashboardController@divisionCompare')->name('get-division-data');
Route::get('get-division-data-filter', 'xpm\DashboardController@divisionCompareFilter')->name('get-division-data-filter');
Route::get('upload-south-asia-data', 'xpm\DashboardController@upoladSouthAsiaData')->name('upload-south-asia-data');
Route::post('upload-data', 'xpm\DashboardController@uploadData')->name('upload-data');
Route::get('get-south-asia-data', 'xpm\DashboardController@getSouthAsiaData')->name('get-south-asia-data');
Route::get('get-hospital-name','xpm\DashboardController@getHospitalNames')->name('get=hospital-name');
Route::get('get-hospital-data','xpm\DashboardController@getHospitalData')->name('get=hospital-data');

/* Age wise death  */
Route::get('get-age-wise-death-data','xpm\DashboardController@getAgeWiseDeathlData');
Route::get('get-age-wise-death-data-filter','xpm\DashboardController@getAgeWiseDeathlDataFilter');


Route::get('storage-link', function () {
    Artisan::call('storage:link');
    return 'linked';
});
//==================Data Update Script For Corn Job==================
Route::get('update-risk-matrix-data', function () {
    Schema::dropIfExists('recent_14_days_test_positivity_district');
    Schema::dropIfExists('last_14_days_test_positivity_district');

    try {
        $sql = "create table recent_14_days_test_positivity_district
                select a.district, a.total_tests, a.positive_tests, round((a.positive_tests/a.total_tests)*100, 2)
                as 'test_positivity' from
                (select district, count(*) as total_tests,
                sum(test_result LIKE 'positive') as positive_tests FROM lab_clean_data
                WHERE date_of_test<=date_sub(curdate(), interval 7 day)
                and date_of_test>=DATE_SUB(date_sub(curdate(), interval 7 day), INTERVAL 13 DAY)
                and district is not null and district not like 'Missing Form' group by district)
                as a order by a.district;";

        DB::statement($sql);

        $sql = "create table last_14_days_test_positivity_district
                select a.district, a.total_tests, a.positive_tests, round((a.positive_tests/a.total_tests), 2)*100
                as 'test_positivity' from
                (select district, count(*) as total_tests,
                sum(test_result LIKE 'positive') as positive_tests FROM lab_clean_data
                WHERE date_of_test<=DATE_SUB(DATE_SUB(curdate(), interval 7 day), INTERVAL 14 DAY)
                and date_of_test>=DATE_SUB(DATE_SUB(DATE_SUB(curdate(), interval 7 day), INTERVAL 14 DAY), INTERVAL 13 DAY)
                and district is not null and district not like 'Missing Form' group by district) as a
                order by a.district;";

        DB::statement($sql);
        return 'Risk Matrix Data Updated Successfully!';
    } catch (\Exception $e) {
        return $e;
    }
});

Route::get('update-daily-data', function () {
    try {

        $url = 'http://dashboard.dghs.gov.bd/webportal/api/get_corona_data.php';

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: multipart/form-data"));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($result, true);
        $a = $result["report_date"];
        $b = $result["infected_24_hrs"];
        $c = $result["infected_total"];
        $d = $result["recovered_24_hrs"];
        $e = $result["recovered_total"];
        $f = $result["death_24_hrs"];
        $g = $result["death_total"];
        $h = $result["test_24_hrs"];
        $i = $result["test_total"];

        $sql = "INSERT INTO daily_data (report_date,infected_24_hrs,infected_total,recovered_24_hrs,recovered_total,death_24_hrs,death_total,test_24_hrs,test_total)
            VALUES ('$a','$b', '$c', '$d', '$e','$f', '$g','$h','$i')";

        DB::connection('mysql2')->statement($sql);
        return 'New Daily Data Updated Successfully!';
    } catch (\Exception $e) {
        return $e;
    }
});
//=======================================================================//


Route::get('/daily-infected-chart', 'xpm\DashboardController@dailyInfectedChart')->name('daily.infected.chart');
Route::get('/infected-percentage', 'xpm\DashboardController@infectedPercentage')->name('infected.percentage');
Route::get('/filter-daily-infected-chart', 'xpm\DashboardController@filterdailyInfectedChart')->name('filter.daily.infected.chart');



/**
 * ====================================================
 * start vaccinatio====================================
 * ====================================================
 */


Route::get('vaccination', 'vaccination\DashboardController@index')->name('xpm.vaccination');


Route::get('socio-economic', 'socioEconomic\DashboardController@index')->name('socio.economic');
Route::get('socio-economic/education', 'socioEconomic\DashboardController@education')->name('socio.economic.education');
Route::get('socio-economic/employment', 'socioEconomic\DashboardController@employment')->name('socio.economic.employment');
// URL::forceScheme('https');



/**
 * ====================================================
 * start public path====================================
 * ====================================================
 */


Route::get('webportal', 'combinded\DashboardController@index')->name('combinded.card');
Route::get('get-national-level-test-positivity-data-public', 'combinded\DashboardController@getNationLevelTestPositivityData')->name('get-national-level-test-positivity-data-public');
Route::get('get-dhaka-positive-rate-data-public', 'combinded\DashboardController@getDhakaPositiveRateData')->name('get-dhaka-positive-rate-data-public');
Route::get('/infected-percentage-public', 'combinded\DashboardController@infectedPercentage')->name('infected.percentage-public');
Route::get('hpm-risk-matrix-data-public', 'combinded\DashboardController@getRiskMatricData')->name('hpm.getRiskMatricData.public');
Route::get('hpm-third-risk-matrix-data-public', 'combinded\DashboardController@getRiskMatrixModalDataPublic')->name('hpm.getThirdRiskMatricData.public');
Route::get('xpm-third-risk-matrix-date-change-public', 'combinded\DashboardController@getThirdRiskMatrixDateChange')->name('weekly.date.change.for.third.matrix.public');

Route::get('all-table-data-public', 'combinded\DashboardController@getAllTableData')->name('get.table.data.public');
Route::get('table-date-change', 'combinded\DashboardController@getRiskMatrixDateChange')->name('weekly.date.change.for.table');