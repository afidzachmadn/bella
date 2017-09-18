<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelaporanBarang extends Controller
{
    //

//----------------------------------------tu-----------------------------------------------//

public function dashboard_tu(Request $request) {
    

        
return view('sistem-pelaporan-barang.tu.dashboard');
        
   
}

//-----profile------//
public function profile_tu(Request $request) {
    
    return view('sistem-pelaporan-barang.tu.profile');

}

public function setelan_tu(Request $request) {
    
    return view('sistem-pelaporan-barang.tu.setelan');
}




public function setelan_tu_proses(Request $request) {
    
  

}


//----lihat-only-laporan-kegiatan----//

public function lihat_laporan_kegiatan_tu(Request $request) {
    
    return view('sistem-pelaporan-barang.tu.lihat-laporan-kegiatan');
   
}

public function lihat_detail_laporan_kegiatan_tu_proses(Request $request) {
        
    return view('sistem-pelaporan-barang.tu.lihat-detail-laporan-kegiatan');
    
}



//-----lihat only bast--------//

public function lihat_bast_tu(Request $request) {
    
    return view('sistem-pelaporan-barang.tu.lihat-bast');
   
}

public function lihat_detail_bast_tu_proses(Request $request) {
    
return view('sistem-pelaporan-barang.tu.lihat-detail-bast');

}


//------------------------------------------------------------------------------------------//






//---------------------------------------kepala-cabang--------------------------------------------//
public function dashboard_kepala_cabang(Request $request) {
    

        
return view('sistem-pelaporan-barang.kepala-cabang.dashboard');
        
   
}

//-----profile------//
public function profile_kepala_cabang(Request $request) {
    
    return view('sistem-pelaporan-barang.kepala-cabang.profile');

}

public function setelan_kepala_cabang(Request $request) {
    
    return view('sistem-pelaporan-barang.kepala-cabang.setelan');
}




public function setelan_kepala_cabang_proses(Request $request) {
    
  

}


//----lihat-only-laporan-kegiatan----//

public function lihat_laporan_kegiatan_kepala_cabang(Request $request) {
    
    return view('sistem-pelaporan-barang.kepala-cabang.lihat-laporan-kegiatan');
   
}

public function lihat_detail_laporan_kegiatan_kepala_cabang_proses(Request $request) {
        
    return view('sistem-pelaporan-barang.kepala-cabang.lihat-detail-laporan-kegiatan');
    
}



//-----lihat only bast--------//

public function lihat_bast_kepala_cabang(Request $request) {
    
    return view('sistem-pelaporan-barang.kepala-cabang.lihat-bast');
   
}

public function lihat_detail_bast_kepala_cabang_proses(Request $request) {
    
return view('sistem-pelaporan-barang.kepala-cabang.lihat-detail-bast');

}




//-------------------------------------------------------------------------------------------------//







//--------------------------------------korlap-----------------------------------------------------//

public function dashboard_korlap(Request $request) {
    

        
return view('sistem-pelaporan-barang.korlap.dashboard');
        
   
}

//-----profile------//
public function profile_korlap(Request $request) {
    
    return view('sistem-pelaporan-barang.korlap.profile');

}

public function setelan_korlap(Request $request) {
    
    return view('sistem-pelaporan-barang.korlap.setelan');
}




public function setelan_korlap_proses(Request $request) {
    
  

}

//-----lihat only bast--------//

public function lihat_bast_korlap(Request $request) {
    
    return view('sistem-pelaporan-barang.korlap.lihat-bast');
   
}

public function lihat_detail_bast_korlap_proses(Request $request) {
    
return view('sistem-pelaporan-barang.korlap.lihat-detail-bast');

}

//-------lihat laporan kegiatan----------//

public function input_laporan_kegiatan_korlap(Request $request) {
    
    return view('sistem-pelaporan-barang.korlap.input-laporan-kegiatan');

}

public function input_laporan_kegiatan_korlap_proses(Request $request) {
    
    

}

public function lihat_laporan_kegiatan_korlap(Request $request) {
    
    return view('sistem-pelaporan-barang.korlap.lihat-laporan-kegiatan');
   
}

public function edit_laporan_kegiatan_korlap_proses(Request $request) {
    


}


public function hapus_laporan_kegiatan_korlap_proses(Request $request) {
    


}


public function lihat_detail_laporan_kegiatan_korlap_proses(Request $request) {
        
    return view('sistem-pelaporan-barang.korlap.lihat-detail-laporan-kegiatan');
    
}


//---------------------------------------------------------------------------------------------------//




//---------------------------------------penerima-barang---------------------------------------------------//

public function dashboard_penerima_barang(Request $request) {
    

        
return view('sistem-pelaporan-barang.penerima-barang.dashboard');
        
   
}

//-----profile------//
public function profile_penerima_barang(Request $request) {
    
    return view('sistem-pelaporan-barang.penerima-barang.profile');

}

public function setelan_penerima_barang(Request $request) {
    
    return view('sistem-pelaporan-barang.penerima-barang.setelan');
}




public function setelan_penerima_barang_proses(Request $request) {
    
  

}

//----bast----//
public function input_bast_penerima_barang(Request $request) {
    
    return view('sistem-pelaporan-barang.penerima-barang.input-bast');

}

public function input_bast_penerima_barang_proses(Request $request) {
    
    

}

public function lihat_bast_penerima_barang(Request $request) {
    
    return view('sistem-pelaporan-barang.penerima-barang.lihat-bast');
   
}

public function edit_bast_penerima_barang_proses(Request $request) {
    


}


public function hapus_bast_penerima_barang_proses(Request $request) {
    


}


public function lihat_detail_bast_penerima_barang_proses(Request $request) {
        
    return view('sistem-pelaporan-barang.penerima-barang.lihat-detail-bast');
  
    
}
}
