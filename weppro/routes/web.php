<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('site.index');
});
Route::get('/musteri_kayit', function () {
    return view('site.musteri_kayit');
});

Route::get('/sepetim', function () {
    return view('musteri.sepetim');
});







Route::get('/admin', function () {
    return view('admin.index');
});




Route::group(['prefix'=>'admin'], function (){

	Route::get('/','AdminController@get_index');
	Route::get('/admin_firmalar','AdminController@get_admin_firmalar');
	Route::post('/firma_ekle','AdminController@post_firma_ekle');
	Route::get('/admin_bakim','AdminController@get_admin_bakim');
	Route::get('/admin_siparisler','AdminController@get_admin_siparisler');
	Route::get('/admin_musteriler','AdminController@get_admin_musteriler');
	Route::get('/admin_stok','AdminController@get_admin_stok');
	Route::get('/admin_urunler','AdminController@get_admin_urunler');
	Route::get('/firma_ekle','AdminController@get_firma_ekle');
	Route::get('/firma_duzenle','AdminController@get_firma_duzenle');


}



);




































