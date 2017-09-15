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

Route::post('/sistem-pengajuan-barang/gudang/lihat-detail-bast-gudang-proses', "PengajuanBarang@lihat_detail_bast_gudang_proses");


//-----profile-----//
Route::get('/sistem-pengajuan-barang/gudang/profile',"PengajuanBarang@profile_gudang");

Route::get('/sistem-pengajuan-barang/gudang/setelan',"PengajuanBarang@setelan_gudang");
Route::post('/sistem-pengajuan-barang/gudang/setelan-gudang-proses', "PengajuanBarang@setelan_gudang_proses");
/*------------------------------------------------------------------------------------*/


/*##################################################################################################################*/





































/*########################################## SISTEM PENGIRIMAN BARANG #################################################*/




//-------------------------------------------------GUDANG-----------------------------------------------------------//

Route::get('/sistem-pengiriman-barang/gudang/dashboard',"PengirimanBarang@dashboard_gudang");

//------delivery order-------//
Route::get('/sistem-pengiriman-barang/gudang/input-delivery-order',"PengirimanBarang@input_delivery_order_gudang");
Route::get('/sistem-pengiriman-barang/gudang/input-delivery-order/lihat-delivery-order',"PengirimanBarang@lihat_delivery_order_gudang");

Route::post('/sistem-pengiriman-barang/gudang/edit-delivery-order-gudang-proses', "PengirimanBarang@edit_delivery_order_gudang_proses");
Route::post('/sistem-pengiriman-barang/gudang/hapus-delivery-order-gudang-proses', "PengirimanBarang@hapus_delivery_order_gudang_proses");

Route::post('/sistem-pengiriman-barang/gudang/lihat-detail-delivery-order-gudang-proses', "PengirimanBarang@lihat_detail_delivery_order_gudang_proses");


//------bast---------//
Route::get('/sistem-pengiriman-barang/gudang/input-bast',"PengirimanBarang@input_bast_gudang");
Route::get('/sistem-pengiriman-barang/gudang/input-bast/lihat-bast',"PengirimanBarang@lihat_bast_gudang");

Route::post('/sistem-pengiriman-barang/gudang/edit-bast-gudang-proses', "PengirimanBarang@edit_bast_gudang_proses");
Route::post('/sistem-pengiriman-barang/gudang/hapus-bast-gudang-proses', "PengirimanBarang@hapus_bast_gudang_proses");

Route::post('/sistem-pengiriman-barang/gudang/lihat-detail-bast-gudang-proses', "PengirimanBarang@lihat_detail_bast_gudang_proses");


//-----profile-----//
Route::get('/sistem-pengiriman-barang/gudang/profile',"PengirimanBarang@profile_gudang");

Route::get('/sistem-pengiriman-barang/gudang/setelan',"PengirimanBarang@setelan_gudang");
Route::post('/sistem-pengiriman-barang/gudang/setelan-gudang-proses', "PengirimanBarang@setelan_gudang_proses");
/*--------------------------------------------------------------------------------------------------------------------*/




//---------------------------------------------------TU--------------------------------------------------------------//

Route::get('/sistem-pengiriman-barang/tu/dashboard',"PengirimanBarang@dashboard_tu");

//-----profile-----//
Route::get('/sistem-pengiriman-barang/tu/profile',"PengirimanBarang@profile_tu");

Route::get('/sistem-pengiriman-barang/tu/setelan',"PengirimanBarang@setelan_tu");
Route::post('/sistem-pengiriman-barang/tu/setelan-tu-proses', "PengirimanBarang@setelan_tu_proses");

//------surat jalan---------//
Route::get('/sistem-pengiriman-barang/tu/input-surat-jalan',"PengirimanBarang@input_surat_jalan_tu");
Route::get('/sistem-pengiriman-barang/tu/input-surat-jalan/lihat-surat-jalan',"PengirimanBarang@lihat_surat_jalan_tu");

Route::post('/sistem-pengiriman-barang/tu/edit-surat-jalan-tu-proses', "PengirimanBarang@edit_surat_jalan_tu_proses");
Route::post('/sistem-pengiriman-barang/tu/hapus-surat-jalan-tu-proses', "PengirimanBarang@hapus_surat_jalan_tu_proses");

Route::post('/sistem-pengiriman-barang/tu/lihat-detail-surat-jalan-tu-proses', "PengirimanBarang@lihat_detail_surat_jalan_tu_proses");

//-----lihat only delivery order----------//

Route::get('/sistem-pengiriman-barang/tu/lihat-delivery-order',"PengirimanBarang@lihat_delivery_order_tu");

Route::post('/sistem-pengiriman-barang/tu/lihat-detail-delivery-order-tu-proses', "PengirimanBarang@lihat_detail_delivery_order_tu_proses");


//-----lihat only bast----------//

Route::get('/sistem-pengiriman-barang/tu/lihat-bast',"PengirimanBarang@lihat_bast_tu");

Route::post('/sistem-pengiriman-barang/tu/lihat-detail-bast-tu-proses', "PengirimanBarang@lihat_detail_bast_tu_proses");

//---------------------------------------------------------------------------------------------------------------------//






//---------------------------------------------------Kepala Gudang-------------------------------------------------------//

Route::get('/sistem-pengiriman-barang/kepala-gudang/dashboard',"PengirimanBarang@dashboard_kepala_gudang");

//-----profile-----//
Route::get('/sistem-pengiriman-barang/kepala-gudang/profile',"PengirimanBarang@profile_kepala_gudang");

Route::get('/sistem-pengiriman-barang/kepala-gudang/setelan',"PengirimanBarang@setelan_kepala_gudang");
Route::post('/sistem-pengiriman-barang/kepala-gudang/setelan-kepala-gudang-proses', "PengirimanBarang@setelan_kepala_gudang_proses");



//-----lihat only delivery order----------//

Route::get('/sistem-pengiriman-barang/kepala-gudang/lihat-delivery-order',"PengirimanBarang@lihat_delivery_order_kepala_gudang");

Route::post('/sistem-pengiriman-barang/kepala-gudang/lihat-detail-delivery-order-kepala-gudang-proses', "PengirimanBarang@lihat_detail_delivery_order_kepala_gudang_proses");


//-----lihat only bast----------//

Route::get('/sistem-pengiriman-barang/kepala-gudang/lihat-bast',"PengirimanBarang@lihat_bast_kepala-gudang");

Route::post('/sistem-pengiriman-barang/kepala-gudang/lihat-detail-bast-kepala-gudang-proses', "PengirimanBarang@lihat_detail_bast_kepala_gudang_proses");

//---------------------------------------------------------------------------------------------------------------------//




//---------------------------------------------------transportasi-------------------------------------------------------//

Route::get('/sistem-pengiriman-barang/transportasi/dashboard',"PengirimanBarang@dashboard_transportasi");

//-----profile-----//
Route::get('/sistem-pengiriman-barang/transportasi/profile',"PengirimanBarang@profile_transportasi");

Route::get('/sistem-pengiriman-barang/transportasi/setelan',"PengirimanBarang@setelan_transportasi");
Route::post('/sistem-pengiriman-barang/transportasi/setelan-transportasi-proses', "PengirimanBarang@setelan_transportasi_proses");



//-----lihat only surat jalan----------//

Route::get('/sistem-pengiriman-barang/transportasi/lihat-surat-jalan',"PengirimanBarang@lihat_surat_jalan_transportasi");

Route::post('/sistem-pengiriman-barang/transportasi/lihat-detail-surat-jalan-transportasi-proses', "PengirimanBarang@lihat_detail_surat_jalan_transportasi_proses");


//-----lihat only bast----------//

Route::get('/sistem-pengiriman-barang/transportasi/lihat-bast',"PengirimanBarang@lihat_bast_transportasi");

Route::post('/sistem-pengiriman-barang/transportasi/lihat-detail-bast-transportasi-proses', "PengirimanBarang@lihat_detail_bast_transportasi_proses");

//---------------------------------------------------------------------------------------------------------------------//





//---------------------------------------------------penerima barang----------------------------------------------------//

Route::get('/sistem-pengiriman-barang/penerima-barang/dashboard',"PengirimanBarang@dashboard_penerima_barang");

//-----profile-----//
Route::get('/sistem-pengiriman-barang/penerima-barang/profile',"PengirimanBarang@profile_penerima_barang");

Route::get('/sistem-pengiriman-barang/penerima-barang/setelan',"PengirimanBarang@setelan_penerima_barang");
Route::post('/sistem-pengiriman-barang/penerima-barang/setelan-penerima-barang-proses', "PengirimanBarang@setelan_penerima_barang_proses");



//-----lihat only bast----------//

Route::get('/sistem-pengiriman-barang/penerima-barang/lihat-bast',"PengirimanBarang@lihat_bast_penerima_barang");

Route::post('/sistem-pengiriman-barang/penerima-barang/lihat-detail-bast-penerima-barang-proses', "PengirimanBarang@lihat_detail_bast_penerima_barang_proses");

//---------------------------------------------------------------------------------------------------------------------//












