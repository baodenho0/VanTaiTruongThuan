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
use App\bocuc;



Route::group(['prefix' => 'admin','middleware'=>'adminLogin'], function() {
    Route::group(['prefix' => 'bocuc'], function() {
        Route::get('bocuc','bocucController@getbocuc');
        Route::post('header','bocucController@postheader');
        Route::post('main2','bocucController@postmain2');
        Route::post('main3', 'bocucController@postmain3');
        Route::post('bando','bocucController@postbando');
        Route::post('footer','bocucController@postfooter');
        Route::post('slide','bocucController@postslide');
    });

    Route::group(['prefix' => 'dichvu'], function() {
        Route::get('danhsach','dichvuController@getdanhsach');
        Route::get('them', 'dichvuController@getthem');
        Route::post('them', 'dichvuController@postthem');
        Route::get('sua/{id}', 'dichvuController@getsua');
        Route::post('sua/{id}', 'dichvuController@postsua');
        Route::get('xoa/{id}', 'dichvuController@getxoa');
    });

    Route::group(['prefix' => 'gioithieu'], function() {
        Route::get('danhsach','gioithieuController@getdanhsach');
        Route::get('them', 'gioithieuController@getthem');
        Route::post('them', 'gioithieuController@postthem');
        Route::get('sua/{id}', 'gioithieuController@getsua');
        Route::post('sua/{id}', 'gioithieuController@postsua');
        Route::get('xoa/{id}', 'gioithieuController@getxoa');
    });

    Route::group(['prefix' => 'lienhe'], function() {
        Route::get('danhsach','lienheController@getdanhsach');
        Route::get('them', 'lienheController@getthem');
        Route::post('them', 'lienheController@postthem');
        Route::get('sua/{id}', 'lienheController@getsua');
        Route::post('sua/{id}', 'lienheController@postsua');
        Route::get('xoa/{id}', 'lienheController@getxoa');
    });

    Route::group(['prefix' => 'khachhang'], function() {
        Route::get('danhsach', 'khachhangController@getdanhsach');
        Route::get('uudai', 'khachhangController@getuudai');
        Route::get('xoadanhsach/{id}', 'khachhangController@getxoadanhsach');
        Route::get('xoauudai/{id}', 'khachhangController@getxoauudai');
    });

    Route::group(['prefix' => 'quantri'], function() {
        Route::get('sua', 'seoController@getsua');
        Route::post('sua', 'seoController@postsua');
    });

    Route::get('doimatkhau','doimatkhauController@getdoimatkhau')->name('doimatkhau');
    Route::post('doimatkhau','doimatkhauController@postdoimatkhau')->name('doimatkhau');

    Route::get('admin', function() {
        return view('admin.admin');
        
    });


});

Route::get('/', 'nguoidungController@getindex')->name('index');
Route::get('/gioi-thieu', 'nguoidungController@getgioithieu')->name('gioithieu');
Route::get('/dich-vu', 'nguoidungController@getdichvu')->name('dichvu');
Route::get('/lien-he', 'nguoidungController@getlienhe')->name('lienhe');
Route::post('/uu-dai','nguoidungController@postuudai')->name('uudai');
Route::post('/lien-he', 'nguoidungController@postyeucaulienhe')->name('yeucaulienhe');

Route::get('admin/dangnhap','dangnhapController@getdangnhapadmin');
Route::post('admin/dangnhap','dangnhapController@postdangnhapadmin')->name('dangnhapadmin');
Route::get('admin/dangxuat', 'dangnhapController@getdangxuat')->name('logout');

Route::get('test', function() {
     return view('nguoidung.trangchu');
});

