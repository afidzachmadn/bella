<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengirimanBarang extends Controller
{
    //


    //---------------------- GUDANG ------------------------------------//

public function dashboard_gudang(Request $request) {
        
    
            
    return view('sistem-pengiriman-barang.gudang.dashboard');
            
       
}

//---delivery_order----//

public function input_delivery_order_gudang(Request $request) {
    
    return view('sistem-pengiriman-barang.gudang.input-delivery-order');

}

public function input_delivery_order_gudang_proses(Request $request) {
    
    return view('sistem-pengiriman-barang.gudang.input-delivery-order');
    
}


public function lihat_delivery_order_gudang(Request $request) {

    return view('sistem-pengiriman-barang.gudang.lihat-delivery-order');
        
    
    
}

public function edit_delivery_order_gudang_proses(Request $request) {
    
    return view('sistem-pengiriman-barang.gudang.lihat-delivery-order');

}



public function hapus_delivery_order_gudang_proses(Request $request) {
    

}


public function lihat_detail_delivery_order_gudang_proses(Request $request) {
        
    return view('sistem-pengiriman-barang.gudang.lihat-detail-delivery-order');
    
}









//----bast----//
public function input_bast_gudang(Request $request) {
    
    return view('sistem-pengiriman-barang.gudang.input-bast');

}

public function input_bast_gudang_proses(Request $request) {
    
    

}

public function lihat_bast_gudang(Request $request) {
    
    return view('sistem-pengiriman-barang.gudang.lihat-bast');
   
}

public function edit_bast_gudang_proses(Request $request) {
    


}


public function hapus_bast_gudang_proses(Request $request) {
    


}


public function lihat_detail_bast_gudang_proses(Request $request) {
        
  
    
}









//-----profile------//
public function profile_gudang(Request $request) {
    
    return view('sistem-pengiriman-barang.gudang.profile');

}

public function setelan_gudang(Request $request) {
    
    return view('sistem-pengiriman-barang.gudang.setelan');
}




public function setelan_gudang_proses(Request $request) {
    
  

}
/*--------------------------------------------------------------------------------*/







    





















































}
