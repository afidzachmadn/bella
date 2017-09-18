<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganBarang extends Controller
{
    //


    
//---------------------- KEUANGAN ------------------------------------//

public function dashboard_keuangan(Request $request) {
    

        
return view('sistem-keuangan-barang.keuangan.dashboard');
        
   
}

//---surat penagihan----//

public function input_surat_penagihan_keuangan(Request $request) {

return view('sistem-keuangan-barang.keuangan.input-surat-penagihan');

}

public function input_surat_penagihan_keuangan_proses(Request $request) {

return view('sistem-keuangan-barang.keuangan.input-surat-penagihan');

}


public function lihat_surat_penagihan_keuangan(Request $request) {

return view('sistem-keuangan-barang.keuangan.lihat-surat-penagihan');
    


}

public function edit_surat_penagihan_keuangan_proses(Request $request) {

return view('sistem-keuangan-barang.keuangan.lihat-surat-penagihan');

}



public function hapus_surat_penagihan_keuangan_proses(Request $request) {


}



public function lihat_detail_surat_penagihan_keuangan_proses(Request $request) {
    
return view('sistem-keuangan-barang.keuangan.lihat-detail-surat-penagihan');

}









//----bast----//
public function input_bast_keuangan(Request $request) {

return view('sistem-keuangan-barang.keuangan.input-bast');

}

public function input_bast_keuangan_proses(Request $request) {



}

public function lihat_bast_keuangan(Request $request) {

return view('sistem-keuangan-barang.keuangan.lihat-bast');

}

public function edit_bast_keuangan_proses(Request $request) {



}


public function hapus_bast_keuangan_proses(Request $request) {



}


public function lihat_detail_bast_keuangan_proses(Request $request) {
    


}

//-----profile------//
public function profile_keuangan(Request $request) {

return view('sistem-keuangan-barang.keuangan.profile');

}

public function setelan_keuangan(Request $request) {

return view('sistem-keuangan-barang.keuangan.setelan');
}




public function setelan_keuangan_proses(Request $request) {



}
/*--------------------------------------------------------------------------------*/








//---------------------- KEPALA CABANG ------------------------------------//

public function dashboard_kepala_cabang(Request $request) {
    

        
return view('sistem-keuangan-barang.kepala-cabang.dashboard');
        
   
}

//---lihat only surat penagihan----//




public function lihat_surat_penagihan_kepala_cabang(Request $request) {

return view('sistem-keuangan-barang.kepala-cabang.lihat-surat-penagihan');
    


}



public function lihat_detail_surat_penagihan_kepala_cabang_proses(Request $request) {
    
return view('sistem-keuangan-barang.kepala-cabang.lihat-detail-surat-penagihan');

}









//----lihat only bast----//

public function lihat_bast_kepala_cabang(Request $request) {

return view('sistem-keuangan-barang.kepala-cabang.lihat-bast');

}



public function lihat_detail_bast_kepala_cabang_proses(Request $request) {
    
    return view('sistem-keuangan-barang.kepala-cabang.lihat-detail-bast');
    

}

//-----profile------//
public function profile_kepala_cabang(Request $request) {

return view('sistem-keuangan-barang.kepala-cabang.profile');

}

public function setelan_kepala_cabang(Request $request) {

return view('sistem-keuangan-barang.kepala-cabang.setelan');
}




public function setelan_kepala_cabang_proses(Request $request) {



}
/*--------------------------------------------------------------------------------*/


}
