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
Route::get('/hello', function () {
    return 'hello';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    return view('administrative.dashboard');
})->middleware('auth');

Route::get('/iedcr/dashboard', function () {
    return view('iedcr.dashboard');
})->name('iedcr.dashboard')->middleware('auth');


Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('superadmin.dashboard');
    })->middleware('auth')->name('admin-dashboard');

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

    
    Route::group(['middleware' => 'auth'], function () {
        // user management routes for admin
        Route::get('users','UserController@index')->name('all-user');
        Route::get('user/create','UserController@createForm');
        Route::get('division/districts','UserController@getDistrictFromDivision')->name('get-district-from-division');
        Route::get('division/district/upazilla','UserController@getUpazillaFromDistrict')->name('get-upazilla-from-district');
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

