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
/*#######################################################################################################################*/













/*########################################## SISTEM PELAPORAN #################################################*/




//---------------------------------------------------TU--------------------------------------------------------------//

Route::get('/sistem-pelaporan-barang/tu/dashboard',"PelaporanBarang@dashboard_tu");

//-----profile-----//
Route::get('/sistem-pelaporan-barang/tu/profile',"PelaporanBarang@profile_tu");

Route::get('/sistem-pelaporan-barang/tu/setelan',"PelaporanBarang@setelan_tu");
Route::post('/sistem-pelaporan-barang/tu/setelan-tu-proses', "PelaporanBarang@setelan_tu_proses");

//-----lihat only laporan kegiatan----------//

Route::get('/sistem-pelaporan-barang/tu/lihat-laporan-kegiatan',"PelaporanBarang@lihat_laporan_kegiatan_tu");

Route::post('/sistem-pelaporan-barang/tu/lihat-detail-laporan-kegiatan-tu-proses', "PelaporanBarang@lihat_detail_laporan_kegiatan_tu_proses");


//-----lihat only bast----------//

Route::get('/sistem-pelaporan-barang/tu/lihat-bast',"PelaporanBarang@lihat_bast_tu");

Route::post('/sistem-pelaporan-barang/tu/lihat-detail-bast-tu-proses', "PelaporanBarang@lihat_detail_bast_tu_proses");

//---------------------------------------------------------------------------------------------------------------------//






//---------------------------------------------------Kepala Cabang----------------------------------------------------//

Route::get('/sistem-pelaporan-barang/kepala-cabang/dashboard',"PelaporanBarang@dashboard_kepala_cabang");

//-----profile-----//
Route::get('/sistem-pelaporan-barang/kepala-cabang/profile',"PelaporanBarang@profile_kepala_cabang");

Route::get('/sistem-pelaporan-barang/kepala-cabang/setelan',"PelaporanBarang@setelan_kepala_cabang");
Route::post('/sistem-pelaporan-barang/kepala-cabang/setelan-kepala-cabang-proses', "PelaporanBarang@setelan_kepala_cabang_proses");


//-----lihat only laporan kegiatan----------//

Route::get('/sistem-pelaporan-barang/kepala-cabang/lihat-laporan-kegiatan',"PelaporanBarang@lihat_laporan_kegiatan_kepala_cabang");

Route::post('/sistem-pelaporan-barang/kepala-cabang/lihat-detail-laporan-kegiatan-kepala-cabang-proses', "PelaporanBarang@lihat_detail_laporan_kegiatan_kepala_cabang_proses");


//-----lihat only bast----------//

Route::get('/sistem-pelaporan-barang/kepala-cabang/lihat-bast',"PelaporanBarang@lihat_bast_kepala_cabang");

Route::post('/sistem-pelaporan-barang/kepala-cabang/lihat-detail-bast-kepala-cabang-proses', "PelaporanBarang@lihat_detail_bast_kepala_cabang_proses");

//---------------------------------------------------------------------------------------------------------------------//




//---------------------------------------------------Korlap--------------------------------------------------------------//

Route::get('/sistem-pelaporan-barang/korlap/dashboard',"PelaporanBarang@dashboard_korlap");

//-----profile-----//
Route::get('/sistem-pelaporan-barang/korlap/profile',"PelaporanBarang@profile_korlap");

Route::get('/sistem-pelaporan-barang/korlap/setelan',"PelaporanBarang@setelan_korlap");
Route::post('/sistem-pelaporan-barang/korlap/setelan-korlap-proses', "PelaporanBarang@setelan_korlap_proses");

//-----laporan kegiatan----------//

Route::get('/sistem-pelaporan-barang/korlap/input-laporan-kegiatan',"PelaporanBarang@input_laporan_kegiatan_korlap");
Route::get('/sistem-pelaporan-barang/korlap/input-laporan-kegiatan/lihat-laporan-kegiatan',"PelaporanBarang@lihat_laporan_kegiatan_korlap");

Route::post('/sistem-pelaporan-barang/korlap/edit-laporan-kegiatan-korlap-proses', "PelaporanBarang@edit_laporan_kegiatan_korlap_proses");
Route::post('/sistem-pelaporan-barang/korlap/hapus-laporan-kegiatan-korlap-proses', "PelaporanBarang@hapus_laporan_kegiatan_korlap_proses");

Route::post('/sistem-pelaporan-barang/korlap/lihat-detail-laporan-kegiatan-korlap-proses', "PelaporanBarang@lihat_detail_laporan_kegiatan_korlap_proses");


//-----lihat only bast----------//

Route::get('/sistem-pelaporan-barang/korlap/lihat-bast',"PelaporanBarang@lihat_bast_korlap");

Route::post('/sistem-pelaporan-barang/korlap/lihat-detail-bast-korlap-proses', "PelaporanBarang@lihat_detail_bast_korlap_proses");

//---------------------------------------------------------------------------------------------------------------------//




//---------------------------------------------------Penerima Barang---------------------------------------------------//

Route::get('/sistem-pelaporan-barang/penerima-barang/dashboard',"PelaporanBarang@dashboard_penerima_barang");

//-----profile-----//
Route::get('/sistem-pelaporan-barang/penerima-barang/profile',"PelaporanBarang@profile_penerima_barang");

Route::get('/sistem-pelaporan-barang/penerima-barang/setelan',"PelaporanBarang@setelan_penerima_barang");
Route::post('/sistem-pelaporan-barang/penerima-barang/setelan-penerima-barang-proses', "PelaporanBarang@setelan_penerima_barang_proses");





//-----lihat bast----------//

Route::get('/sistem-pelaporan-barang/penerima-barang/input-bast',"PelaporanBarang@input_bast_penerima_barang");
Route::get('/sistem-pelaporan-barang/penerima-barang/input-bast/lihat-bast',"PelaporanBarang@lihat_bast_penerima_barang");

Route::post('/sistem-pelaporan-barang/penerima-barang/edit-bast-penerima-barang-proses', "PelaporanBarang@edit_bast_penerima_barang_proses");
Route::post('/sistem-pelaporan-barang/penerima-barang/hapus-bast-penerima-barang-proses', "PelaporanBarang@hapus_bast_penerima_barang_proses");

Route::post('/sistem-pelaporan-barang/penerima-barang/lihat-detail-bast-penerima-barang-proses', "PelaporanBarang@lihat_detail_bast_penerima_barang_proses");


//---------------------------------------------------------------------------------------------------------------------//

/*#######################################################################################################################*/








/*###################################################SISTEM KEUANGAN############################################*/



//---------------------------------------------keuangan--------------------------------------------------------------//

Route::get('/sistem-keuangan-barang/keuangan/dashboard',"KeuanganBarang@dashboard_keuangan");

//-----profile-----//
Route::get('/sistem-keuangan-barang/keuangan/profile',"KeuanganBarang@profile_keuangan");

Route::get('/sistem-keuangan-barang/keuangan/setelan',"KeuanganBarang@setelan_keuangan");
Route::post('/sistem-keuangan-barang/keuangan/setelan-keuangan-proses', "KeuanganBarang@setelan_keuangan_proses");


//-----surat penagihan--------//
Route::get('/sistem-keuangan-barang/keuangan/input-surat-penagihan',"KeuanganBarang@input_surat_penagihan_keuangan");

Route::get('/sistem-keuangan-barang/keuangan/input-surat-penagihan/lihat-surat-penagihan',"KeuanganBarang@lihat_surat_penagihan_keuangan");
Route::post('/sistem-keuangan-barang/keuangan/lihat-detail-surat-penagihan-keuangan-proses', "KeuanganBarang@lihat_detail_surat_penagihan_keuangan_proses");

//-----------------lihat only bast-----------------------------//
Route::get('/sistem-keuangan-barang/keuangan/lihat-bast',"KeuanganBarang@lihat_bast_keuangan");

Route::post('/sistem-keuangan-barang/keuangan/lihat-detail-bast-keuangan-proses', "KeuanganBarang@lihat_detail_bast_keuangan_proses");
//-------------------------------------------------------------------------------------------------------------//





//--------------------------------------------kepala cabang-------------------------------------------------------//

Route::get('/sistem-keuangan-barang/kepala-cabang/dashboard',"KeuanganBarang@dashboard_kepala_cabang");

//-----profile-----//
Route::get('/sistem-keuangan-barang/kepala-cabang/profile',"KeuanganBarang@profile_kepala_cabang");

Route::get('/sistem-keuangan-barang/kepala-cabang/setelan',"KeuanganBarang@setelan_kepala_cabang");
Route::post('/sistem-keuangan-barang/kepala-cabang/setelan-kepala-cabang-proses', "KeuanganBarang@setelan_kepala_cabang_proses");


//-----surat penagihan--------//

Route::get('/sistem-keuangan-barang/kepala-cabang/lihat-surat-penagihan',"KeuanganBarang@lihat_surat_penagihan_kepala_cabang");
Route::post('/sistem-keuangan-barang/kepala-cabang/lihat-detail-surat-penagihan-kepala-cabang-proses', "KeuanganBarang@lihat_detail_surat_penagihan_kepala_cabang_proses");


//----------------------------------------------------------------------------------------------------------------//


/*################################################################################################################*/





