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

Route::get('/',"Beranda@home");

Route::get('/logout',"Logout@logout");





/*############################### SISTEM PENGAJUAN BARANG ################################*/

Route::get('/sistem-pengajuan-barang/login',"LoginPengajuanBarang@login");

Route::post('/sistem-pengajuan-barang/login-proses', "LoginPengajuanBarang@bacadatabase");

Route::get('/sistem-pengajuan-barang/logout',"LoginPengajuanBarang@logout");






/*---------------------------- TATA USAHA -----------------------------*/



//-----surat perintah------//
Route::get('/sistem-pengajuan-barang/tu/dashboard',"PengajuanBarang@dashboard_tu");


Route::get('/sistem-pengajuan-barang/tu/input-surat-perintah',"PengajuanBarang@input_surat_perintah_tu");
Route::post('/sistem-pengajuan-barang/tu/input-surat-perintah-tu-proses', "PengajuanBarang@input_surat_perintah_tu_proses");



Route::get('/sistem-pengajuan-barang/tu/input-surat-perintah/lihat-surat-perintah',"PengajuanBarang@lihat_surat_perintah");
Route::post('/sistem-pengajuan-barang/tu/edit-surat-perintah-tu-proses', "PengajuanBarang@edit_surat_perintah_tu_proses");
Route::post('/sistem-pengajuan-barang/tu/hapus-surat-perintah-tu-proses', "PengajuanBarang@hapus_surat_perintah_tu_proses");
Route::post('/sistem-pengajuan-barang/tu/lihat-detail-surat-perintah-tu-proses', "PengajuanBarang@lihat_detail_surat_perintah_tu_proses");



Route::get('/sistem-pengajuan-barang/tu/input-surat-perintah/lihat-surat-perintah/lihat-detail-surat-perintah',"PengajuanBarang@lihat_detail_surat_perintah");





//-----printlog-----//
Route::get('/sistem-pengajuan-barang/tu/input-print-log',"PengajuanBarang@input_printlog_tu");
Route::post('/sistem-pengajuan-barang/tu/input-printlog-tu-proses', "PengajuanBarang@input_printlog_tu_proses");

Route::get('/sistem-pengajuan-barang/tu/input-print-log/lihat-printlog',"PengajuanBarang@lihat_printlog");
Route::post('/sistem-pengajuan-barang/tu/edit-printlog-tu-proses', "PengajuanBarang@edit_printlog_tu_proses");
Route::post('/sistem-pengajuan-barang/tu/hapus-printlog-tu-proses', "PengajuanBarang@hapus_printlog_tu_proses");
Route::post('/sistem-pengajuan-barang/tu/lihat-detail-printlog-tu-proses',"PengajuanBarang@lihat_detail_printlog_tu_proses");



//-----bast---------//
Route::get('/sistem-pengajuan-barang/tu/input-bast',"PengajuanBarang@input_bast_tu");
Route::post('/sistem-pengajuan-barang/tu/input-bast-tu-proses', "PengajuanBarang@input_bast_tu_proses");

Route::get('/sistem-pengajuan-barang/tu/input-bast/lihat-bast',"PengajuanBarang@lihat_bast");
Route::post('/sistem-pengajuan-barang/tu/edit-bast-tu-proses', "PengajuanBarang@edit_bast_tu_proses");
Route::post('/sistem-pengajuan-barang/tu/hapus-bast-tu-proses', "PengajuanBarang@hapus_bast_tu_proses");
Route::post('/sistem-pengajuan-barang/tu/lihat-detail-bast-tu-proses',"PengajuanBarang@lihat_detail_bast_tu_proses");





//-----profile-----//
Route::get('/sistem-pengajuan-barang/tu/profile',"PengajuanBarang@profile_tu");

Route::get('/sistem-pengajuan-barang/tu/setelan',"PengajuanBarang@setelan_tu");
Route::post('/sistem-pengajuan-barang/tu/setelan-tu-proses', "PengajuanBarang@setelan_tu_proses");

/*-------------------------------------------------------------------------*/







/*---------------------------- Kepala Cabang -----------------------------*/


Route::get('/sistem-pengajuan-barang/kepala-cabang/dashboard',"PengajuanBarang@dashboard_kepala_cabang");

//-----surat perintah------//
Route::get('/sistem-pengajuan-barang/kepala-cabang/lihat-surat-perintah',"PengajuanBarang@lihat_surat_perintah_kepala_cabang");

Route::post('/sistem-pengajuan-barang/kepala-cabang/lihat-detail-surat-perintah-kepala-cabang-proses', "PengajuanBarang@lihat_detail_surat_perintah_kepala_cabang_proses");


//------printlog-------//
Route::get('/sistem-pengajuan-barang/kepala-cabang/lihat-printlog',"PengajuanBarang@lihat_printlog_kepala_cabang");

Route::post('/sistem-pengajuan-barang/kepala-cabang/lihat-detail-printlog-kepala-cabang-proses', "PengajuanBarang@lihat_detail_printlog_kepala_cabang_proses");


//------bast---------//
Route::get('/sistem-pengajuan-barang/kepala-cabang/lihat-bast',"PengajuanBarang@lihat_bast_kepala_cabang");

Route::post('/sistem-pengajuan-barang/kepala-cabang/lihat-detail-bast-kepala-cabang-proses', "PengajuanBarang@lihat_detail_bast_kepala_cabang_proses");

//-----profile-----//
Route::get('/sistem-pengajuan-barang/kepala-cabang/profile',"PengajuanBarang@profile_kepala_cabang");

Route::get('/sistem-pengajuan-barang/kepala-cabang/setelan',"PengajuanBarang@setelan_kepala_cabang");
Route::post('/sistem-pengajuan-barang/kepala-cabang/setelan-kepala-cabang-proses', "PengajuanBarang@setelan_kepala_cabang_proses");




/*-------------------------------------------------------------------------*/












/*--------------------------------- KORLAP ------------------------------------------*/

Route::get('/sistem-pengajuan-barang/korlap/dashboard',"PengajuanBarang@dashboard_korlap");

//-----surat perintah------//
Route::get('/sistem-pengajuan-barang/korlap/lihat-surat-perintah',"PengajuanBarang@lihat_surat_perintah_korlap");

Route::post('/sistem-pengajuan-barang/korlap/lihat-detail-surat-perintah-korlap-proses', "PengajuanBarang@lihat_detail_surat_perintah_korlap_proses");


//------printlog-------//
Route::get('/sistem-pengajuan-barang/korlap/lihat-printlog',"PengajuanBarang@lihat_printlog_korlap");

Route::post('/sistem-pengajuan-barang/korlap/lihat-detail-printlog-korlap-proses', "PengajuanBarang@lihat_detail_printlog_korlap_proses");


//------bast---------//
Route::get('/sistem-pengajuan-barang/korlap/lihat-bast',"PengajuanBarang@lihat_bast_korlap");

Route::post('/sistem-pengajuan-barang/korlap/lihat-detail-bast-korlap-proses', "PengajuanBarang@lihat_detail_bast_korlap_proses");

//-----profile-----//
Route::get('/sistem-pengajuan-barang/korlap/profile',"PengajuanBarang@profile_korlap");

Route::get('/sistem-pengajuan-barang/korlap/setelan',"PengajuanBarang@setelan_korlap");
Route::post('/sistem-pengajuan-barang/korlap/setelan-korlap-proses', "PengajuanBarang@setelan_korlap_proses");
/*------------------------------------------------------------------------------------*/














/*--------------------------------- GUDANG ------------------------------------------*/

Route::get('/sistem-pengajuan-barang/gudang/dashboard',"PengajuanBarang@dashboard_gudang");

//-----surat perintah------//
Route::get('/sistem-pengajuan-barang/gudang/lihat-surat-perintah',"PengajuanBarang@lihat_surat_perintah_gudang");

Route::post('/sistem-pengajuan-barang/gudang/lihat-detail-surat-perintah-gudang-proses', "PengajuanBarang@lihat_detail_surat_perintah_gudang_proses");


//------printlog-------//
Route::get('/sistem-pengajuan-barang/gudang/lihat-printlog',"PengajuanBarang@lihat_printlog_gudang");

Route::post('/sistem-pengajuan-barang/gudang/lihat-detail-printlog-gudang-proses', "PengajuanBarang@lihat_detail_printlog_gudang_proses");


//------bast---------//
Route::get('/sistem-pengajuan-barang/gudang/lihat-bast',"PengajuanBarang@lihat_bast_gudang");

Route::post('/sistem-pengajuan-barang/gudang/lihat-detail-bast-korlap-proses', "PengajuanBarang@lihat_detail_bast_gudang_proses");


//-----profile-----//
Route::get('/sistem-pengajuan-barang/gudang/profile',"PengajuanBarang@profile_gudang");

Route::get('/sistem-pengajuan-barang/gudang/setelan',"PengajuanBarang@setelan_gudang");
Route::post('/sistem-pengajuan-barang/gudang/setelan-gudang-proses', "PengajuanBarang@setelan_gudang_proses");
/*------------------------------------------------------------------------------------*/













