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


Route::get('/','homecontroller@gethome')->name('home');
Route::get('theloai/{id}','homecontroller@gettheloai')->name('theloai');
Route::get('nganh/{id}','homecontroller@getnganh')->name('nganh');
Route::get('sanpham/{id}','homecontroller@chitietsanpham')->name('chitietsanpham');
Route::get('open-pdf/{id}', 'homecontroller@pdf');

Route::post('/timkiem/',[
    'as'=>'timkiem',
    'uses'=>'homecontroller@timkiem'
]);
Route::get('/searching/',[
    'as'=>'timkiem_key',
    'uses'=>'homecontroller@timkiem_key'
]);


    //Hachi Tu
    Route::get('/get-nganh-by-khoa/{khoa_id}', 'admincontroller@getNganhByKhoa');


    // Route::get('/pdf/{id}', 'homecontroller@openPDFFile')->name('pdf');
    Route::get('/kh_login','admincontroller@getlogin')->name('kh_login');
    Route::get('/kh_logout','admincontroller@kh_logout')->name('kh_logout');

    Route::group(['prefix' => 'admin','as'=>'admins'], function() {

    Route::get('/login','LoginController@getlogin')->name('getlogin');
    Route::post('/login','LoginController@postlogin')->name('login');
    Route::get('/logout','LoginController@logout')->name('logout');
    Route::get('/qlkhachhang','admincontroller@qlkhachhang')->name('qlkhachhang');
    Route::get('/qlkhachhang/addusers','admincontroller@getkhachhang')->name('qlkhachhang/addusers');
    Route::get('/qlkhachhang/create', 'admincontroller@create')->name('qlkhachhang/create'); 
    Route::post('qlkhachhang/postkh','admincontroller@postkhachhang')->name('qlkhachhang/postkh');



      // Màn hình giao diện chính
      Route::get('/dashboard', 'Backend\PageController@dashboard')->name('backend.page.dashboard');
      
      // Quản lý thể loại sách
      Route::get('/theloaisach', 'Backend\TheloaiController@index')->name('backend.theloai.index');
      Route::get('/theloai/create', 'Backend\TheloaiController@create')->name('backend.theloai.create'); 
      Route::post('/theloai/store', 'Backend\TheloaiController@store')->name('backend.theloai.store'); 
      Route::get('/theloai/edit/{id}', 'Backend\TheloaiController@edit')->name('backend.theloai.edit');
      Route::post('/theloai/update/{id}', 'Backend\TheloaiController@update')->name('backend.theloai.update');
      Route::delete('/theloai/{id}', 'Backend\TheloaiController@destroy')->name('backend.theloai.destroy');
      Route::get('/theloai/print', 'Backend\TheloaiController@print')->name('backend.theloai.print');
     
      // Quản lý chuyên ngành
      Route::get('/nhaxuatban', 'Backend\NxbController@index')->name('backend.nxb.index');
      Route::get('/nxb/create', 'Backend\NxbController@create')->name('backend.nxb.create'); 
      Route::post('/nxb/store', 'Backend\NxbController@store')->name('backend.nxb.store'); 
      Route::get('/nxb/edit/{id}', 'Backend\NxbController@edit')->name('backend.nxb.edit');
      Route::post('/nxb/update/{id}', 'Backend\NxbController@update')->name('backend.nxb.update');
      Route::delete('/nxb/{id}', 'Backend\NxbController@destroy')->name('backend.nxb.destroy');
      Route::get('/nxb/print', 'Backend\NxbController@print')->name('backend.nxb.print');
      
      // Quản lý khoa
      Route::get('/khoa', 'Backend\KhoaController@index')->name('backend.khoa.index');
      Route::get('/khoa/create', 'Backend\KhoaController@create')->name('backend.khoa.create'); 
      Route::post('/khoa/store', 'Backend\KhoaController@store')->name('backend.khoa.store'); 
      Route::get('/khoa/edit/{id}', 'Backend\KhoaController@edit')->name('backend.khoa.edit');
      Route::post('/khoa/update/{id}', 'Backend\KhoaController@update')->name('backend.khoa.update');
      Route::delete('/khoa/{id}', 'Backend\KhoaController@destroy')->name('backend.khoa.destroy');
      Route::get('/khoa/print', 'Backend\KhoaController@print')->name('backend.khoa.print');
      
      // Quản lý ngành
      Route::get('/nganh', 'Backend\NganhController@index')->name('backend.nganh.index');
      Route::get('/nganh/create', 'Backend\NganhController@create')->name('backend.nganh.create'); 
      Route::post('/nganh/store', 'Backend\NganhController@store')->name('backend.nganh.store'); 
      Route::get('/nganh/edit/{id}', 'Backend\NganhController@edit')->name('backend.nganh.edit');
      Route::post('/nganh/update/{id}', 'Backend\NganhController@update')->name('backend.nganh.update');
      Route::delete('/nganh/{id}', 'Backend\NganhController@destroy')->name('backend.nganh.destroy');
      Route::get('/nganh/print', 'Backend\NganhController@print')->name('backend.nganh.print');
      
      
      // Quản lý sách
      Route::get('/sach', 'Backend\SachController@index')->name('backend.sach.index');
      Route::get('/sach/create', 'Backend\SachController@create')->name('backend.sach.create'); 
      Route::post('/sach/store', 'Backend\SachController@store')->name('backend.sach.store'); 
      Route::get('/sach/edit/{id}', 'Backend\SachController@edit')->name('backend.sach.edit');
      Route::post('/sach/update/{id}', 'Backend\SachController@update')->name('backend.sach.update');
      Route::delete('/sach/{id}', 'Backend\SachController@destroy')->name('backend.sach.destroy');
      Route::get('/sach/print', 'Backend\SachController@print')->name('backend.sach.print');
     
      // Quản lý Đọc giả
      Route::get('/docgia', 'Backend\DocgiaController@index')->name('backend.docgia.index');
      Route::get('/docgia/create', 'Backend\DocgiaController@create')->name('backend.docgia.create'); 
      Route::post('/docgia/store', 'Backend\DocgiaController@store')->name('backend.docgia.store'); 
      Route::get('/docgia/edit/{id}', 'Backend\DocgiaController@edit')->name('backend.docgia.edit');
      Route::post('/docgia/update/{id}', 'Backend\DocgiaController@update')->name('backend.docgia.update');
      Route::delete('/docgia/{id}', 'Backend\DocgiaController@destroy')->name('backend.docgia.destroy');
      Route::get('/docgia/print', 'Backend\DocgiaController@print')->name('backend.docgia.print');
    
      // Quản lý Thủ thư
      Route::get('/thuthu', 'Backend\ThuthuController@index')->name('backend.thuthu.index');
      Route::get('/thuthu/create', 'Backend\ThuthuController@create')->name('backend.thuthu.create'); 
      Route::post('/thuthu/store', 'Backend\ThuthuController@store')->name('backend.thuthu.store'); 
      Route::get('/thuthu/edit/{id}', 'Backend\ThuthuController@edit')->name('backend.thuthu.edit');
      Route::post('/thuthu/update/{id}', 'Backend\ThuthuController@update')->name('backend.thuthu.update');
      Route::delete('/thuthu/{id}', 'Backend\ThuthuController@destroy')->name('backend.thuthu.destroy');
      Route::get('/thuthu/print', 'Backend\ThuthuController@print')->name('backend.thuthu.print');
    
      // Quản lý Mượn sách
      Route::get('/muonsach', 'Backend\MuonsachController@index')->name('backend.muonsach.index');
      Route::get('/docgiamuonsach', 'Backend\MuonsachController@show')->name('backend.muonsach.show');
      Route::get('/muonsach/create', 'Backend\MuonsachController@create')->name('backend.muonsach.create'); 
      Route::post('/muonsach/store', 'Backend\MuonsachController@store')->name('backend.muonsach.store'); 
      Route::get('/muonsach/edit/{id}', 'Backend\MuonsachController@edit')->name('backend.muonsach.edit');
      Route::post('/muonsach/update/{id}', 'Backend\MuonsachController@update')->name('backend.muonsach.update');
      Route::delete('/muonsach/{id}', 'Backend\MuonsachController@destroy')->name('backend.muonsach.destroy');
      Route::get('/muonsach/print', 'Backend\MuonsachController@print')->name('backend.muonsach.print');
      Route::get('/muonsach/printdg', 'Backend\MuonsachController@printdg')->name('backend.muonsach.printdg');
   
      // API
      Route::get('api/getProductCount', 'Backend\Api\ApiController@getProductCount')->name('backend.api.getProductCount');
      Route::get('api/getDocgiaCount', 'Backend\Api\ApiController@getDocgiaCount')->name('backend.api.getDocgiaCount');
      Route::get('api/getMuonsachCount', 'Backend\Api\ApiController@getMuonsachCount')->name('backend.api.getMuonsachCount');
      Route::get('api/getThuthuCount', 'Backend\Api\ApiController@getThuthuCount')->name('backend.api.getThuthuCount');
      Route::get('api/getStatiticsCategoryProductCount', 'Backend\Api\ApiController@getStatiticsCategoryProductCount')->name('backend.api.getStatiticsCategoryProductCount');
});
