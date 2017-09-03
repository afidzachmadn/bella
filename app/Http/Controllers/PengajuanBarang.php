<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PengajuanBarang extends Controller
{




/*--------------------------- TATA USAHA --------------------------------------*/

public function dashboard_tu(Request $request) {
        
        $id = $request->session()->get('id');
        $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
        $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    
            return view('sistem-pengajuan-barang.tata-usaha.dashboard');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
 
}








public function input_surat_perintah_tu(Request $request) {
    
        $id = $request->session()->get('id');
        $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
        $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    
            return view('sistem-pengajuan-barang.tata-usaha.input-surat-perintah');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }

}

public function lihat_surat_perintah(Request $request) {
        
        $id = $request->session()->get('id');
        $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
        $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    
            return view('sistem-pengajuan-barang.tata-usaha.lihat-surat-perintah');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    
}

public function lihat_detail_surat_perintah(Request $request) {
        
        $id = $request->session()->get('id');
        $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
        $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    
            return view('sistem-pengajuan-barang.tata-usaha.lihat-detail-surat-perintah');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    
}







public function input_printlog_tu(Request $request) {
    
        $id = $request->session()->get('id');
        $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
        $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    
            return view('sistem-pengajuan-barang.tata-usaha.input-printlog');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }

}
public function lihat_printlog(Request $request) {
        
        $id = $request->session()->get('id');
        $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
        $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    
            return view('sistem-pengajuan-barang.tata-usaha.lihat-printlog');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    
}

public function lihat_detail_printlog(Request $request) {
        
        $id = $request->session()->get('id');
        $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
        $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    
            return view('sistem-pengajuan-barang.tata-usaha.lihat-detail-printlog');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    
}









public function input_bast_tu(Request $request) {
    
        $id = $request->session()->get('id');
        $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
        $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    
            return view('sistem-pengajuan-barang.tata-usaha.input-bast');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }

}
public function lihat_bast(Request $request) {
        
        $id = $request->session()->get('id');
        $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
        $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    
            return view('sistem-pengajuan-barang.tata-usaha.lihat-bast');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    
}

public function lihat_detail_bast(Request $request) {
        
        $id = $request->session()->get('id');
        $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
        $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    
            return view('sistem-pengajuan-barang.tata-usaha.lihat-detail-bast');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    
}








public function profile_tu(Request $request) {
    
        $id = $request->session()->get('id');
        $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
        $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
                
                $id = $request->session()->get('id');
            
                $LihatProfile = DB::table('users_pengajuan_barang');
                        
                $LihatProfileNext = $LihatProfile->where('id', $id)->first();
    
                return view('sistem-pengajuan-barang.tata-usaha.profile', array('profile' => $LihatProfileNext));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }

}

public function setelan_tu(Request $request) {
    
        $id = $request->session()->get('id');
        $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
        $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    
            return view('sistem-pengajuan-barang.tata-usaha.setelan');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }

}
/*--------------------------------------------------------------------------------*/
























/*--------------------------- KEPALA CABANG --------------------------------------*/

public function dashboard_kepala_cabang(Request $request) {
    
        return view('sistem-pengajuan-barang.kepala-cabang.dashboard');

}


public function profile_kepala_cabang(Request $request) {

    return view('sistem-pengajuan-barang.kepala-cabang.profile');

}

public function setelan_kepala_cabang(Request $request) {

    return view('sistem-pengajuan-barang.kepala-cabang.setelan');

}






public function lihat_surat_perintah_kepala_cabang(Request $request) {
        
            return view('sistem-pengajuan-barang.kepala-cabang.lihat-surat-perintah');
    
}

public function lihat_detail_surat_perintah_kepala_cabang(Request $request) {
        
            return view('sistem-pengajuan-barang.kepala-cabang.lihat-detail-surat-perintah');
    
}






public function lihat_print_log_kepala_cabang(Request $request) {
        
            return view('sistem-pengajuan-barang.kepala-cabang.lihat-printlog');
    
}

public function lihat_detail_print_log_kepala_cabang(Request $request) {
        
            return view('sistem-pengajuan-barang.kepala-cabang.lihat-detail-printlog');
    
}








public function lihat_bast_kepala_cabang(Request $request) {
        
            return view('sistem-pengajuan-barang.kepala-cabang.lihat-bast');
    
}

public function lihat_detail_bast_kepala_cabang(Request $request) {
        
            return view('sistem-pengajuan-barang.kepala-cabang.lihat-detail-bast');
    
}


/*--------------------------------------------------------------------------------*/















/*--------------------------- KORLAP --------------------------------------*/

public function dashboard_korlap(Request $request) {
        
            return view('sistem-pengajuan-barang.korlap.dashboard');
    
    }
    
    
    public function profile_korlap(Request $request) {
    
        return view('sistem-pengajuan-barang.korlap.profile');
    
    }
    
    public function setelan_korlap(Request $request) {
    
        return view('sistem-pengajuan-barang.korlap.setelan');
    
    }
    
    
    
    
    
    
    public function lihat_surat_perintah_korlap(Request $request) {
            
                return view('sistem-pengajuan-barang.korlap.lihat-surat-perintah');
        
    }
    
    public function lihat_detail_surat_perintah_korlap(Request $request) {
            
                return view('sistem-pengajuan-barang.korlap.lihat-detail-surat-perintah');
        
    }
    
    
    
    
    
    
    public function lihat_print_log_korlap(Request $request) {
            
                return view('sistem-pengajuan-barang.korlap.lihat-printlog');
        
    }
    
    public function lihat_detail_print_log_korlap(Request $request) {
            
                return view('sistem-pengajuan-barang.korlap.lihat-detail-printlog');
        
    }
    
    
    
    
    
    
    
    
    public function lihat_bast_korlap(Request $request) {
            
                return view('sistem-pengajuan-barang.korlap.lihat-bast');
        
    }
    
    public function lihat_detail_bast_korlap(Request $request) {
            
                return view('sistem-pengajuan-barang.korlap.lihat-detail-bast');
        
    }
    
    
    /*--------------------------------------------------------------------------------*/
















    /*--------------------------- GUDANG --------------------------------------*/

public function dashboard_gudang(Request $request) {
        
            return view('sistem-pengajuan-barang.gudang.dashboard');
    
    }
    
    
    public function profile_gudang(Request $request) {
    
        return view('sistem-pengajuan-barang.gudang.profile');
    
    }
    
    public function setelan_gudang(Request $request) {
    
        return view('sistem-pengajuan-barang.gudang.setelan');
    
    }
    
    
    
    
    
    
    public function lihat_surat_perintah_gudang(Request $request) {
            
                return view('sistem-pengajuan-barang.gudang.lihat-surat-perintah');
        
    }
    
    public function lihat_detail_surat_perintah_gudang(Request $request) {
            
                return view('sistem-pengajuan-barang.gudang.lihat-detail-surat-perintah');
        
    }
    
    
    
    
    
    
    public function lihat_print_log_gudang(Request $request) {
            
                return view('sistem-pengajuan-barang.gudang.lihat-printlog');
        
    }
    
    public function lihat_detail_print_log_gudang(Request $request) {
            
                return view('sistem-pengajuan-barang.gudang.lihat-detail-printlog');
        
    }
    
    
    
    
    
    
    
    
    public function lihat_bast_gudang(Request $request) {
            
                return view('sistem-pengajuan-barang.gudang.lihat-bast');
        
    }
    
    public function lihat_detail_bast_gudang(Request $request) {
            
                return view('sistem-pengajuan-barang.gudang.lihat-detail-bast');
        
    }
    
    
    /*--------------------------------------------------------------------------------*/
































}
