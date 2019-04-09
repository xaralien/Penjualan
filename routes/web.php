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

Route::get('/', 'DashboardController@index')->name('dashboard');

Route::prefix('barang')->group(function(){
	Route::get('/all', "BarangController@all")->name("semua_barang");
	Route::get("/add", "BarangController@add")->name("tambah_barang");
	Route::post("/save", "BarangController@save")->name("simpan_barang");
	Route::get("/edit/{id}", "BarangController@edit")->name("edit_barang");
	Route::post("/update", "BarangController@update")->name("update_barang");
	Route::get("/delete/{kodebarang}", "BarangController@delete")->name("hapus_barang");
});

Route::prefix('brgmasuk')->group(function(){
	Route::get('/all', "BarangMasukController@all")->name("semua_barang_masuk");
	Route::get("/add", "BarangMasukController@add")->name("tambah_barang_masuk");
	Route::post("/save", "BarangMasukController@save")->name("simpan_barang_masuk");
	Route::get("/edit/{id}", "BarangMasukController@edit")->name("edit_barang_masuk");
	Route::post("/update", "BarangMasukController@update")->name("update_barang_masuk");
	Route::get("/delete/{id}", "BarangMasukController@delete")->name("hapus_barang_masuk");
});

Route::prefix('detailbarang')->group(function(){
	Route::get('/all', "DetailBarangMasukController@all")->name("semua_detail_barang_masuk");
	Route::get("/add", "DetailBarangMasukController@add")->name("tambah_detail_barang_masuk");
	Route::post("/save", "DetailBarangMasukController@save")->name("simpan_detail_barang_masuk");
	Route::get("/edit/{id}", "DetailBarangMasukController@edit")->name("edit_detail_barang_masuk");
	Route::post("/update", "DetailBarangMasukController@update")->name("update_detail_barang_masuk");
	Route::get("/delete/{id}", "DetailBarangMasukController@delete")->name("hapus_detail_barang_masuk");
});

Route::prefix('detailpenjualan')->group(function(){
	Route::get('/all', "DetailPenjualanController@all")->name("semua_detail_penjualan");
	Route::get("/add", "DetailPenjualanController@add")->name("tambah_detail_penjualan");
	Route::post("/save", "DetailPenjualanController@save")->name("simpan_detail_penjualan");
	Route::get("/edit/{id}", "DetailPenjualanController@edit")->name("edit_detail_penjualan");
	Route::post("/update", "DetailPenjualanController@update")->name("update_detail_penjualan");
	Route::get("/delete/{id}", "DetailPenjualanController@delete")->name("hapus_detail_penjualan");
});

Route::prefix('penjualan')->group(function(){
	Route::get('/all', "PenjualanController@all")->name("semua_penjualan");
	Route::get("/add", "PenjualanController@add")->name("tambah_penjualan");
	Route::post("/save", "PenjualanController@save")->name("simpan_penjualan");
	Route::get("/edit/{id}", "PenjualanController@edit")->name("edit_penjualan");
	Route::post("/update", "PenjualanController@update")->name("update_penjualan");
	Route::get("/delete/{id}", "PenjualanController@delete")->name("hapus_penjualan");
});

Route::prefix('petugas')->group(function(){
	Route::get('/all', "PetugasController@all")->name("semua_petugas");
	Route::get("/add", "PetugasController@add")->name("tambah_petugas");
	Route::post("/save", "PetugasController@save")->name("simpan_petugas");
	Route::get("/edit/{id}", "PetugasController@edit")->name("edit_petugas");
	Route::post("/update", "PetugasController@update")->name("update_petugas");
	Route::get("/delete/{id}", "PetugasController@delete")->name("hapus_petugas");
});

Route::prefix('distributor')->group(function(){
	Route::get('/all', "DistributorController@all")->name("semua_distributor");
	Route::get("/add", "DistributorController@add")->name("tambah_distributor");
	Route::post("/save", "DistributorController@save")->name("simpan_distributor");
	Route::get("/edit/{id}", "DistributorController@edit")->name("edit_distributor");
	Route::post("/update", "DistributorController@update")->name("update_distributor");
	Route::get("/delete/{id}", "DistributorController@delete")->name("hapus_distributor");
});

Route::prefix('jenis')->group(function(){
	Route::get('/all', "JenisController@all")->name("semua_jenis");
	Route::get("/add", "JenisController@add")->name("tambah_jenis");
	Route::post("/save", "JenisController@save")->name("simpan_jenis");
	Route::get("/edit/{id}", "JenisController@edit")->name("edit_jenis");
	Route::post("/update", "JenisController@update")->name("update_jenis");
	Route::get("/delete/{id}", "JenisController@delete")->name("hapus_jenis");
});