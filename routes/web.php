<?php

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
    return view('welcome');
});

Auth::routes();

// Route::get('/admin', function(){
//     return view('admin.dashboard.index');
// });

Route::group(['middleware'=>'admin'], function(){
    Route::get('/admin/dashboard', function(){
        return view('admin.dashboard.index');
    });
    Route::resource('/admin/users', 'AdminUsersController');
    Route::resource('/admin/klanten', 'AdminKlantenController');
    Route::resource('/admin/facturen', 'AdminFacturenController');
    Route::resource('/admin/appartementen', 'AdminAppartementenController');
});

