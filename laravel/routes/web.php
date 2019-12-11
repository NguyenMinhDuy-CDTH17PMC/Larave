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


Route::get('test','QuanTriVienController@layThongTin');
Route::get('dang-nhap','QuanTriVienController@dangNhap')->name('dang-nhap');
Route::post('dang-nhap','QuanTriVienController@xuLyDangNhap')->name('xu-ly-dang-nhap');
Route::get('dang-xuat','QuanTriVienController@dangXuat')->name('dang-xuat');

Route::middleware('auth')->group(function(){
	Route::get('/', function(){
		return view('home');
	})->name('trang-chu');

	Route::prefix('cauhoi')->group(function(){
		Route::name('cauhoi.')->group(function(){
			Route::get('/', 'CauhoiController@index')->name('danhsach');
			Route::get('/themmoi', 'CauhoiController@create')->name('themmoi');
			Route::post('/themmoi', 'CauhoiController@store')->name('xulythemmoi');
			Route::get('/capnhat/{id}', 'CauhoiController@edit')->name('capnhat');
			Route::post('/capnhat/{id}', 'CauhoiController@update')->name('xulycapnhat');
			Route::get('/xoa/{id}', 'CauhoiController@destroy')->name('xoa');
		});
	});

	Route::prefix('linhvuc')->group(function(){
		Route::name('linhvuc.')->group(function(){
			Route::get('/', 'LinhvucController@index')->name('danhsach');
			Route::get('/themmoi', 'LinhvucController@create')->name('themmoi');
			Route::post('/themmoi', 'LinhvucController@store')->name('xulythemmoi');
			Route::get('/capnhat/{id}', 'LinhvucController@edit')->name('capnhat');
			Route::post('/capnhat/{id}', 'LinhvucController@update')->name('xulycapnhat');
			Route::get('/xoa/{id}', 'LinhvucController@destroy')->name('xoa');
		});
	});

	Route::prefix('goicredit')->group(function(){
		Route::name('goicredit.')->group(function(){
			Route::get('/', 'GoiCreditController@index')->name('danhsach');
			Route::get('/themmoi', 'GoiCreditController@create')->name('themmoi');
			Route::post('/themmoi', 'GoiCreditController@store')->name('xulythemmoi');
			Route::get('/capnhat/{id}', 'GoiCreditController@edit')->name('capnhat');
			Route::post('/capnhat/{id}', 'GoiCreditController@update')->name('xulycapnhat');
			Route::get('/xoa/{id}', 'GoiCreditController@destroy')->name('xoa');
		});
	});

	Route::prefix('nguoichoi')->group(function(){
		Route::name('nguoichoi.')->group(function(){
			Route::get('/', 'NguoiChoiController@index')->name('danhsach');
			Route::get('/themmoi', 'NguoiChoiController@create')->name('themmoi');
			Route::post('/themmoi', 'NguoiChoiController@store')->name('xulythemmoi');
			Route::get('/capnhat/{id}', 'NguoiChoiController@edit')->name('capnhat');
			Route::post('/capnhat/{id}', 'NguoiChoiController@update')->name('xulycapnhat');
			Route::get('/xoa/{id}', 'NguoiChoiController@destroy')->name('xoa');
		});
	});
});

