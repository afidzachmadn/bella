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





/*-------------------------------------------TU-----------------------------------------------*/

public function dashboard_tu(Request $request) {
    

        
return view('sistem-pengiriman-barang.tu.dashboard');
        
   
}

//-----profile------//
public function profile_tu(Request $request) {
    
    return view('sistem-pengiriman-barang.tu.profile');

}

public function setelan_tu(Request $request) {
    
    return view('sistem-pengiriman-barang.tu.setelan');
}




public function setelan_tu_proses(Request $request) {
    
  

}


//----surat jalan----//
public function input_surat_jalan_tu(Request $request) {
    
    return view('sistem-pengiriman-barang.tu.input-surat-jalan');

}

public function input_surat_jalan_tu_proses(Request $request) {
    
    

}

public function lihat_surat_jalan_tu(Request $request) {
    
    return view('sistem-pengiriman-barang.tu.lihat-surat-jalan');
   
}

public function edit_surat_jalan_tu_proses(Request $request) {
    


}


public function hapus_surat_jalan_tu_proses(Request $request) {
    


}


public function lihat_detail_surat_jalan_tu_proses(Request $request) {
        
    return view('sistem-pengiriman-barang.tu.lihat-detail-surat-jalan');
    
}




//-----lihat only delivery order--------//

public function lihat_delivery_order_tu(Request $request) {
    
    return view('sistem-pengiriman-barang.tu.lihat-delivery-order');
   
}

public function lihat_detail_delivery_order_tu_proses(Request $request) {
    
return view('sistem-pengiriman-barang.tu.lihat-detail-delivery-order');

}



//-----lihat only bast--------//

public function lihat_bast_tu(Request $request) {
    
    return view('sistem-pengiriman-barang.tu.lihat-bast');
   
}

public function lihat_detail_bast_tu_proses(Request $request) {
    
return view('sistem-pengiriman-barang.tu.lihat-detail-bast');

}



/*--------------------------------------------------------------------------------------------*/








/*-------------------------------------------KEPALA GUDANG-----------------------------------------------*/

public function dashboard_kepala_gudang(Request $request) {
    

        
return view('sistem-pengiriman-barang.kepala-gudang.dashboard');
        
   
}

//-----profile------//
public function profile_kepala_gudang(Request $request) {
    
    return view('sistem-pengiriman-barang.kepala-gudang.profile');

}

public function setelan_kepala_gudang(Request $request) {
    
    return view('sistem-pengiriman-barang.kepala-gudang.setelan');
}




public function setelan_kepala_gudang_proses(Request $request) {
    
  

}





//-----lihat only delivery order--------//

public function lihat_delivery_order_kepala_gudang(Request $request) {
    
    return view('sistem-pengiriman-barang.kepala-gudang.lihat-delivery-order');
   
}

public function lihat_detail_delivery_order_kepala_gudang_proses(Request $request) {
    
return view('sistem-pengiriman-barang.kepala-gudang.lihat-detail-delivery-order');

}



//-----lihat only bast--------//

public function lihat_bast_kepala_gudang(Request $request) {
    
    return view('sistem-pengiriman-barang.kepala-gudang.lihat-bast');
   
}

public function lihat_detail_bast_kepala_gudang_proses(Request $request) {
    
return view('sistem-pengiriman-barang.kepala-gudang.lihat-detail-bast');

}



/*--------------------------------------------------------------------------------------------*/






/*-------------------------------------------transportasi-----------------------------------------------*/

public function dashboard_transportasi(Request $request) {
    

        
return view('sistem-pengiriman-barang.transportasi.dashboard');
        
   
}

//-----profile------//
public function profile_transportasi(Request $request) {
    
    return view('sistem-pengiriman-barang.transportasi.profile');

}

public function setelan_transportasi(Request $request) {
    
    return view('sistem-pengiriman-barang.transportasi.setelan');
}




public function setelan_transportasi_proses(Request $request) {
    
  

}





//-----lihat only surat jalan--------//

public function lihat_surat_jalan_transportasi(Request $request) {
    
    return view('sistem-pengiriman-barang.transportasi.lihat-surat-jalan');
   
}

public function lihat_detail_surat_jalan_transportasi_proses(Request $request) {
    
return view('sistem-pengiriman-barang.transportasi.lihat-detail-surat-jalan');

}



//-----lihat only bast--------//

public function lihat_bast_transportasi(Request $request) {
    
    return view('sistem-pengiriman-barang.transportasi.lihat-bast');
   
}

public function lihat_detail_bast_transportasi_proses(Request $request) {
    
return view('sistem-pengiriman-barang.transportasi.lihat-detail-bast');

}



/*--------------------------------------------------------------------------------------------*/








/*-------------------------------------------penerima barang-----------------------------------------------*/

public function dashboard_penerima_barang(Request $request) {
    

        
return view('sistem-pengiriman-barang.penerima-barang.dashboard');
        
   
}

//-----profile------//
public function profile_penerima_barang(Request $request) {
    
    return view('sistem-pengiriman-barang.penerima-barang.profile');

}

public function setelan_penerima_barang(Request $request) {
    
    return view('sistem-pengiriman-barang.penerima-barang.setelan');
}




public function setelan_penerima_barang_proses(Request $request) {
    
  

}



//-----lihat only bast--------//

public function lihat_bast_penerima_barang(Request $request) {
    
    return view('sistem-pengiriman-barang.penerima-barang.lihat-bast');
   
}

public function lihat_detail_bast_penerima_barang_proses(Request $request) {
    
return view('sistem-pengiriman-barang.penerima-barang.lihat-detail-bast');

}



/*--------------------------------------------------------------------------------------------*/





    





















































}
