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

Route::group(['prefix' => 'admin'],function(){
	Route::get('/',function(){
		return 'ini adalah menu Utama';
	});
	Route::get('admin1',function(){
		return 'ini adalah admin1';
	});
	Route::get('admin2',function(){
		return 'ini adalah admin2';
	});
	Route::get('admin3',function(){
		return 'ini adalah admin3';
	});
});

Route::group(['prefix' => 'manager'],function(){
	Route::get('/',function(){
		return 'ini adalah menu Utama';
	});
	Route::get('perusahaan',function(){
		return 'ini adalah perusahaan';
	});
	Route::get('bank',function(){
		return 'ini adalah bank';
	});
	Route::get('kantor',function(){
		return 'ini adalah kantor';
	});
});

Route::group(['prefix' => 'karyawan'],function(){
	Route::get('/',function(){
		return 'ini adalah menu Utama';
	});
	Route::get('ob',function(){
		return 'ini adalah ob';
	});
	Route::get('toolman',function(){
		return 'ini adalah toolman';
	});
	Route::get('boss',function(){
		return 'ini adalah boss';
	});
});
