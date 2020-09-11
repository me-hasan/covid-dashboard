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

Route::get('/', function () {
    return view('auth.login2');
});

Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('login_admin');

Route::get('/home', 'HomeController@index')->name('home');

//Route for cabinet
Route::get('/dashboard', 'cabinet\DashboardController@covid24Hours')->name('dashboard')->middleware(['auth', 'permission:cabinet-dashboard']);
Route::get('/dataframe', 'cabinet\DashboardController@dataFrameData')->name('cabinet.dataframe');

// iedcr route
/*get test positivity data*/
Route::get('test-positivity-data','iedcr\IedcrDashboardController@getTestPositivityData')->name('iedcr.test_positivity_data')->middleware(['auth', 'permission:iedcr-dashboard']);
Route::get('get-nationwide-infected-cases-data','iedcr\IedcrDashboardController@nationalInfectedCaseData')->name('iedcr.nationalInfectedCaseData')->middleware(['auth', 'permission:iedcr-dashboard']);
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
    Route::get('division/districts','UserController@getDistrictFromDivision')->name('get-district-from-division');
    Route::get('division/district/upazilla','UserController@getUpazillaFromDistrict')->name('get-upazilla-from-district');

    Route::get('5EGSRBXAY9', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

    Route::middleware('auth:admin')->group(function (){
        Route::get('dashboard','HomeController@index')->name('admin-dashboard');

        Route::get('roles/create', function () {
            $role = Role::create(['name' => 'writer']);
            $permission = Permission::create(['name' => 'edit-articles']);

            $role->givePermissionTo($permission);
            $permission->assignRole($role);

        });

        Route::get('assign-role', function() {
            $user = App\User::find(1);
            $user->assignRole('writer');

            dd('assigned role writer to user: ' . $user->name);
        });

        Route::get('check-permission', function() {
            $user = App\User::find(1);

            if ($user->can('edit-articles')) {
                dd('yap, working!');
            } else {
                dd('not working');
            }
        });


        // user management routes for admin
        Route::get('users','UserController@index')->name('all-user');
        Route::get('user/create','UserController@createForm');

        Route::post('user/create','UserController@store')->name('create-user');

        Route::get('user/edit/{user}','UserController@editForm');
        Route::post('user/edit/{user}','UserController@update')->name('edit-user');
        Route::delete('user/{id}','UserController@destroy');
        // user management routes ending

        // role management routes for admin
        Route::get('roles','RoleController@index')->name('all-roles');
        Route::post('role/create','RoleController@store')->name('create-role');

        Route::put('role/edit/{role_id}','RoleController@update')->name('edit-role');
        Route::delete('role/{role_id}','RoleController@destroy');
        // role management routes ending
    });


});


Route::prefix('iedcr')->group(function () {
    require(__DIR__ . '/iedcr.php');
});


Route::get('hpm-dashboard','Hpm\DashboardController@index')->name('hpm.dashboard');
