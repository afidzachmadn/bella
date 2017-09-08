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
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    else{
        
        $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
            $get_nama = $cek_role -> nama;
            $get_nik = $cek_role -> nik;

            $hitung_printlog = DB::table('printlog_pengajuan_barang')->where('nik_penginput',$get_nik)->count();
            $hitung_surat_perintah = DB::table('surat_perintah_pengajuan_barang')->where('nik_penginput',$get_nik)->count();
            $hitung_bast = DB::table('bast_pengajuan_barang')->where('nik_penginput',$get_nik)->count();
            
            return view('sistem-pengajuan-barang.tata-usaha.dashboard', array('nama' => $get_nama,'jum_printlog' => $hitung_printlog, 'jum_surat_perintah' => $hitung_surat_perintah, 'jum_bast' => $hitung_bast));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }
 
}







//----surat perintah------//
public function input_surat_perintah_tu(Request $request) {
    
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    
            return view('sistem-pengajuan-barang.tata-usaha.input-surat-perintah');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }

}

public function input_surat_perintah_tu_proses(Request $request) {
    
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    

            $nomor_surat = $request->get('nomor_surat');
            $nomor_peraturan_direksi = $request->get('nomor_peraturan_direksi');
            $nomor_printlog = $request->get('nomor_printlog');
            $kode_printlog = $request->get('kode_printlog');
            $nomor_surat_keputusan = $request->get('nomor_surat_keputusan');
            $nomor_kja = $request->get('no_kja');
            $kepada = $request->get('kepada');
            $untuk_mengangkut = $request->get('untuk_mengangkut');
            $dari = $request->get('dari');
            $tujuan = $request->get('tujuan');
            $alat_angkut = $request->get('alat_angkut');
            
            $nama_penginput = $cek_role -> nama;
            $nik_penginput = $cek_role -> nik;
            $keterangan = $request->get('keterangan');
        
    
            $userDb = DB::table('surat_perintah_pengajuan_barang')->where('id', $id)
            
                                        ->insert(['nomor_surat' => $nomor_surat, 'nomor_peraturan_direksi' => $nomor_peraturan_direksi, 'nomor_printlog' => $nomor_printlog, 'kode_printlog' => $kode_printlog, 'nomor_surat_keputusan' => $nomor_surat_keputusan, 'no_kja' => $nomor_kja, 'kepada' => $kepada, 'untuk_mengangkut' => $untuk_mengangkut, 'dari' => $dari, 'tujuan' => $tujuan, 'alat_angkut' => $alat_angkut, 'nama_penginput' => $nama_penginput, 'nik_penginput' => $nik_penginput, 'keterangan' => $keterangan]);


            return redirect()->action('PengajuanBarang@input_surat_perintah_tu');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }

}

public function lihat_surat_perintah(Request $request) {
        
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
            $nik = $cek_role -> nik;
            $cek_list = DB::table('surat_perintah_pengajuan_barang')->where('nik_penginput',$nik) -> get();

            //dd($cek_list);
    
            return view('sistem-pengajuan-barang.tata-usaha.lihat-surat-perintah', array('cek_list' => $cek_list));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }
    
}

public function edit_surat_perintah_tu_proses(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
if($cek_role == null){
    return redirect()->action('LoginPengajuanBarang@login');
}

else{
$CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
        $no_surat_pilihan = $request->get('no_surat_pilihan');

        $nomor_surat = $request->get('nomor_surat');
        $nomor_peraturan_direksi = $request->get('nomor_peraturan_direksi');
        $nomor_printlog = $request->get('nomor_printlog');
        $kode_printlog = $request->get('kode_printlog');
        $nomor_surat_keputusan = $request->get('nomor_surat_keputusan');
        $nomor_kja = $request->get('no_kja');
        $kepada = $request->get('kepada');
        $untuk_mengangkut = $request->get('untuk_mengangkut');
        $dari = $request->get('dari');
        $tujuan = $request->get('tujuan');
        $alat_angkut = $request->get('alat_angkut');
        
        $nama_penginput = $cek_role -> nama;
        $nik_penginput = $cek_role -> nik;
        $keterangan = $request->get('keterangan');
    

        $userDb = DB::table('surat_perintah_pengajuan_barang')->where('nomor_surat', $no_surat_pilihan)
        
                                    ->update(['nomor_surat' => $nomor_surat, 'nomor_peraturan_direksi' => $nomor_peraturan_direksi, 'nomor_printlog' => $nomor_printlog, 'kode_printlog' => $kode_printlog, 'nomor_surat_keputusan' => $nomor_surat_keputusan, 'no_kja' => $nomor_kja, 'kepada' => $kepada, 'untuk_mengangkut' => $untuk_mengangkut, 'dari' => $dari, 'tujuan' => $tujuan, 'alat_angkut' => $alat_angkut, 'nama_penginput' => $nama_penginput, 'nik_penginput' => $nik_penginput, 'keterangan' => $keterangan]);

        return redirect()->action('PengajuanBarang@lihat_surat_perintah');
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}



public function hapus_surat_perintah_tu_proses(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
if($cek_role == null){
    return redirect()->action('LoginPengajuanBarang@login');
}

else{
$CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
        
        $nomor_surat = $request->get('nomor_surat');

        $get_nik = $cek_role -> nik;
        //dd($get_nik);
     
                
        
        $userDb = DB::table('surat_perintah_pengajuan_barang')->where([['nomor_surat','=', $nomor_surat],['nik_penginput','=',$get_nik],])->delete();
        

      
        
        

        return redirect()->action('PengajuanBarang@lihat_surat_perintah');
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}


public function lihat_detail_surat_perintah_tu_proses(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
}

else{
    $CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {

        $nomor_surat = $request->get('nomor_surat');

        $userDb = DB::table('surat_perintah_pengajuan_barang')->where('nomor_surat', $nomor_surat)->get();

        $isi = $userDb[0];


        return view('sistem-pengajuan-barang.tata-usaha.lihat-detail-surat-perintah',array('isi' => $isi));
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}







//---printlog----//

public function input_printlog_tu(Request $request) {
    
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){


        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    
            return view('sistem-pengajuan-barang.tata-usaha.input-printlog');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }

}

public function input_printlog_tu_proses(Request $request) {
    
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    

            $dari_tanggal = $request->get('dari_tanggal');
            
            $nomor_printlog = $request->get('nomor_printlog');
            $untuk = $request->get('untuk');
            $asal_berita = $request->get('asal_berita');
            $hal = $request->get('hal');
            $jumlah_lembar = $request->get('jumlah_lembar');
            $tembusan = $request->get('tembusan');
            $kode_printlog = $request->get('kode_printlog');
            $keterangan_1 = $request->get('keterangan_1');
            $pengirim = $request->get('pengirim');
            $penerima = $request->get('penerima');
            $kuantum = $request->get('kuantum');
            $barang = $request->get('barang');
            $jenis_barang = $request->get('jenis_barang');
            $jumlah = $request->get('jumlah_barang');
            $keterangan_2 = $request->get('keterangan_2');
            $berlaku_sampai_tanggal = $request->get('sampai_tanggal');
            
            $nama_penginput = $cek_role -> nama;
            $nik_penginput = $cek_role -> nik;
        
    
            $userDb = DB::table('printlog_pengajuan_barang')->where('id', $id)
            
                                        ->insert(['tanggal' => $dari_tanggal, 'nomor' => $nomor_printlog, 'untuk' => $untuk, 'asal_berita' => $asal_berita, 'hal' => $hal, 'jumlah_lembar' => $jumlah_lembar, 'tembusan' => $tembusan, 'kode_printlog' => $kode_printlog, 'keterangan_1' => $keterangan_1, 'pengirim' => $pengirim, 'penerima' => $penerima, 'kuantum' => $kuantum, 'barang' => $barang, 'jumlah' => $jumlah, 'keterangan_2' => $keterangan_2, 'barang' => $barang, 'jenis_barang' => $jenis_barang, 'berlaku_sampai_tanggal' => $berlaku_sampai_tanggal, 'nama_penginput' => $nama_penginput, 'nik_penginput' => $nik_penginput]);


            return redirect()->action('PengajuanBarang@input_printlog_tu');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }

}


public function lihat_printlog(Request $request) {
        
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
            $nik = $cek_role -> nik;
            $cek_list = DB::table('printlog_pengajuan_barang')->where('nik_penginput',$nik) -> get();

            return view('sistem-pengajuan-barang.tata-usaha.lihat-printlog', array('cek_list' => $cek_list));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }
    
}

public function edit_printlog_tu_proses(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
if($cek_role == null){
    return redirect()->action('LoginPengajuanBarang@login');
}

else{
$CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {

        $nomor_printlog_yang_akan_diedit = $request->get('nomor_printlog_yang_akan_diedit');

        $dari_tanggal = $request->get('dari_tanggal');
        
        $nomor_printlog = $request->get('nomor_printlog');
        $untuk = $request->get('untuk');
        $asal_berita = $request->get('asal_berita');
        $hal = $request->get('hal');
        $jumlah_lembar = $request->get('jumlah_lembar');
        $tembusan = $request->get('tembusan');
        $kode_printlog = $request->get('kode_printlog');
        $keterangan_1 = $request->get('keterangan_1');
        $pengirim = $request->get('pengirim');
        $penerima = $request->get('penerima');
        $kuantum = $request->get('kuantum');
        $barang = $request->get('barang');
        $jenis_barang = $request->get('jenis_barang');
        $jumlah = $request->get('jumlah_barang');
        $keterangan_2 = $request->get('keterangan_2');
        $berlaku_sampai_tanggal = $request->get('sampai_tanggal');
        
        $nama_penginput = $cek_role -> nama;
        $nik_penginput = $cek_role -> nik;
    

        $userDb = DB::table('printlog_pengajuan_barang')->where('nomor', $nomor_printlog_yang_akan_diedit)
        
                                    ->update(['tanggal' => $dari_tanggal, 'nomor' => $nomor_printlog, 'untuk' => $untuk, 'asal_berita' => $asal_berita, 'hal' => $hal, 'jumlah_lembar' => $jumlah_lembar, 'tembusan' => $tembusan, 'kode_printlog' => $kode_printlog, 'keterangan_1' => $keterangan_1, 'pengirim' => $pengirim, 'penerima' => $penerima, 'kuantum' => $kuantum, 'barang' => $barang, 'jumlah' => $jumlah, 'keterangan_2' => $keterangan_2, 'barang' => $barang, 'jenis_barang' => $jenis_barang, 'berlaku_sampai_tanggal' => $berlaku_sampai_tanggal, 'nama_penginput' => $nama_penginput, 'nik_penginput' => $nik_penginput]);

        return redirect()->action('PengajuanBarang@lihat_printlog');
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}



public function hapus_printlog_tu_proses(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
if($cek_role == null){
    return redirect()->action('LoginPengajuanBarang@login');
}

else{
$CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
        
        $nomor_surat = $request->get('nomor_surat');
        
        $get_nik = $cek_role -> nik;
        //dd($get_nik);
     
                
        
        $userDb = DB::table('printlog_pengajuan_barang')->where([['nomor','=', $nomor_surat],['nik_penginput','=',$get_nik],])->delete();

        

        
        
        

        return redirect()->action('PengajuanBarang@lihat_printlog');
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}


public function lihat_detail_printlog_tu_proses(Request $request) {
        
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {

            $nomor = $request->get('nomor');
            
            $userDb = DB::table('printlog_pengajuan_barang')->where('nomor', $nomor)->get();
            
            $isi = $userDb[0];
            
            
           
    
            return view('sistem-pengajuan-barang.tata-usaha.lihat-detail-printlog',array('isi' => $isi));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }
    
}









//----bast----//
public function input_bast_tu(Request $request) {
    
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();

    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }

    else{
        
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    
            return view('sistem-pengajuan-barang.tata-usaha.input-bast');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }

}

public function input_bast_tu_proses(Request $request) {
    
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    

            $nomor_bast = $request->get('nomor');
            $hari_tanggal = $request->get('hari_tanggal');
            $pihak_pertama = $request->get('pihak_pertama');
            $jabatan_pihak_pertama = $request->get('jabatan_pihak_pertama');
            $pihak_kedua = $request->get('pihak_kedua');
            $jabatan_pihak_kedua = $request->get('jabatan_pihak_kedua');
            $faximile_bulog = $request->get('faximile_bulog');
            $tanggal_faximile_bulog = $request->get('tanggal_faximile_bulog');
            $perihal = $request->get('perihal');
            $keterangan_1 = $request->get('keterangan_1');
            $jenis_barang = $request->get('jenis_barang');
            $jumlah_kuantum = $request->get('jumlah_kuantum');
            $tanggal_penyerahan = $request->get('tanggal_penyerahan');
            $alat_angkut = $request->get('alat_angkut');
            $keterangan_2 = $request->get('keterangan_2');
            $nama_wakil = $request->get('nama_wakil');
            
            $nama_penginput = $cek_role -> nama;
            $nik_penginput = $cek_role -> nik;
        
    
            $userDb = DB::table('bast_pengajuan_barang')->where('id', $id)
            
                                        ->insert(['nomor' => $nomor_bast, 'hari_tanggal' => $hari_tanggal, 'pihak_pertama' => $pihak_pertama, 'jabatan_pihak_pertama' => $jabatan_pihak_pertama, 'pihak_kedua' => $pihak_kedua, 'jabatan_pihak_kedua' => $jabatan_pihak_kedua, 'faximile_bulog' => $faximile_bulog, 'tanggal_faximile_bulog' => $tanggal_faximile_bulog, 'perihal' => $perihal, 'keterangan_1' => $keterangan_1, 'jenis_barang' => $jenis_barang, 'jumlah_kuantum' => $jumlah_kuantum, 'tanggal_penyerahan' => $tanggal_penyerahan, 'alat_angkut' => $alat_angkut, 'keterangan_2' => $keterangan_2, 'nama_penginput' => $nama_penginput, 'nik_penginput' => $nik_penginput, 'nama_wakil' => $nama_wakil]);


            return redirect()->action('PengajuanBarang@input_bast_tu');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }

}

public function lihat_bast(Request $request) {
        
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        
        return redirect()->action('LoginPengajuanBarang@login');
    }

    else{
    $CekRole = $cek_role -> jabatan;
       
    
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    
            $nik = $cek_role -> nik;
            $cek_list = DB::table('bast_pengajuan_barang')->where('nik_penginput',$nik) -> get();

            return view('sistem-pengajuan-barang.tata-usaha.lihat-bast', array('cek_list' => $cek_list));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }
    
}

public function edit_bast_tu_proses(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
if($cek_role == null){
    return redirect()->action('LoginPengajuanBarang@login');
}

else{
$CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {

        $nomor_bast_yang_akan_diedit = $request->get('no_pilihan');

        $nomor_bast = $request->get('nomor');
        $hari_tanggal = $request->get('hari_tanggal');
        $pihak_pertama = $request->get('pihak_pertama');
        $jabatan_pihak_pertama = $request->get('jabatan_pihak_pertama');
        $pihak_kedua = $request->get('pihak_kedua');
        $jabatan_pihak_kedua = $request->get('jabatan_pihak_kedua');
        $faximile_bulog = $request->get('faximile_bulog');
        $tanggal_faximile_bulog = $request->get('tanggal_faximile_bulog');
        $perihal = $request->get('perihal');
        $keterangan_1 = $request->get('keterangan_1');
        $jenis_barang = $request->get('jenis_barang');
        $jumlah_kuantum = $request->get('jumlah_kuantum');
        $tanggal_penyerahan = $request->get('tanggal_penyerahan');
        $alat_angkut = $request->get('alat_angkut');
        $keterangan_2 = $request->get('keterangan_2');
        $nama_wakil = $request->get('nama_wakil');
        
        $nama_penginput = $cek_role -> nama;
        $nik_penginput = $cek_role -> nik;
    

        $userDb = DB::table('bast_pengajuan_barang')->where('nomor', $nomor_bast_yang_akan_diedit)
        
                                    ->update(['nomor' => $nomor_bast, 'hari_tanggal' => $hari_tanggal, 'pihak_pertama' => $pihak_pertama, 'jabatan_pihak_pertama' => $jabatan_pihak_pertama, 'pihak_kedua' => $pihak_kedua, 'jabatan_pihak_kedua' => $jabatan_pihak_kedua, 'faximile_bulog' => $faximile_bulog, 'tanggal_faximile_bulog' => $tanggal_faximile_bulog, 'perihal' => $perihal, 'keterangan_1' => $keterangan_1, 'jenis_barang' => $jenis_barang, 'jumlah_kuantum' => $jumlah_kuantum, 'tanggal_penyerahan' => $tanggal_penyerahan, 'alat_angkut' => $alat_angkut, 'keterangan_2' => $keterangan_2, 'nama_penginput' => $nama_penginput, 'nik_penginput' => $nik_penginput, 'nama_wakil' => $nama_wakil]);

        return redirect()->action('PengajuanBarang@lihat_bast');
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}


public function hapus_bast_tu_proses(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
if($cek_role == null){
    return redirect()->action('LoginPengajuanBarang@login');
}

else{
$CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
        
        $nomor_bast = $request->get('nomor_bast');
        $get_nik = $cek_role -> nik;
        //dd($get_nik);
     
                
        
        $userDb = DB::table('bast_pengajuan_barang')->where([['nomor','=', $nomor_bast],['nik_penginput','=',$get_nik],])->delete();
                
       
        

        return redirect()->action('PengajuanBarang@lihat_bast');
        
    } 
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}


public function lihat_detail_bast_tu_proses(Request $request) {
        
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {

            $nomor = $request->get('nomor');
            
            $userDb = DB::table('bast_pengajuan_barang')->where('nomor', $nomor)->get();
            
            $isi = $userDb[0];
            
            
           
    
            return view('sistem-pengajuan-barang.tata-usaha.lihat-detail-bast',array('isi' => $isi));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }
    
}









//-----profile------//
public function profile_tu(Request $request) {
    
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
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

}

public function setelan_tu(Request $request) {
    
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {

            $id = $request->session()->get('id');
            
            $LihatProfile = DB::table('users_pengajuan_barang');
                        
            $LihatProfileNext = $LihatProfile->where('id', $id)->first();
    
            return view('sistem-pengajuan-barang.tata-usaha.setelan', array('profile' => $LihatProfileNext));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }

}




public function setelan_tu_proses(Request $request) {
    
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'tata usaha' || $request->session()->get('login') && $CekRole == 'Tata Usaha' ) {
    

            $nama = $request->get('nama');
            $nik = $request->get('nik');
            $email = $request->get('email');
            $no_hp = $request->get('no_hp');
            $bagian = $request->get('bagian');
            $jabatan = $request->get('jabatan');
    
            $file = $request->file('img');
            //dd($file);
            $fileName = $file->hashName();
            $storeFile = $file->store('public/foto');
    
            $userDb = DB::table('users_pengajuan_barang')->where('id', $id)
            
                                        ->update(['nama' => $nama, 'nik' => $nik, 'email' => $email, 'no_hp' => $no_hp, 'bagian' => $bagian, 'jabatan' => $jabatan, 'img_url' => $fileName]);
            //dd($userDb);
            //dd($userDb);
            $request->session()->put('img_url', $fileName);


            return redirect()->action('PengajuanBarang@profile_tu');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }

}
/*--------------------------------------------------------------------------------*/
































/*--------------------------- KEPALA CABANG --------------------------------------*/
public function dashboard_kepala_cabang(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
if($cek_role == null){
    return redirect()->action('LoginPengajuanBarang@login');
}
else{
    
    $CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'kepala cabang' || $request->session()->get('login') && $CekRole == 'Kepala Cabang' ) {
        $get_nama = $cek_role -> nama;
        $get_nik = $cek_role -> nik;

        $hitung_printlog = DB::table('printlog_pengajuan_barang')->where([['nik_penginput','!=',null],])->count();
        $hitung_surat_perintah = DB::table('surat_perintah_pengajuan_barang')->where([['nik_penginput','!=',null],])->count();
        $hitung_bast = DB::table('bast_pengajuan_barang')->where([['nik_penginput','!=',null],])->count();
        
        return view('sistem-pengajuan-barang.kepala-cabang.dashboard', array('nama' => $get_nama,'jum_printlog' => $hitung_printlog, 'jum_surat_perintah' => $hitung_surat_perintah, 'jum_bast' => $hitung_bast));
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}

//------surat perintah------//
public function lihat_surat_perintah_kepala_cabang(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
if($cek_role == null){
    return redirect()->action('LoginPengajuanBarang@login');
}

else{
$CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'Kepala Cabang' || $request->session()->get('login') && $CekRole == 'kepala cabang' ) {
        $nik = $cek_role -> nik;
        $cek_list = DB::table('surat_perintah_pengajuan_barang')->where([['nik_penginput', '!=', null],]) -> get();

        //dd($cek_list);

        return view('sistem-pengajuan-barang.kepala-cabang.lihat-surat-perintah', array('cek_list' => $cek_list));
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}

public function lihat_detail_surat_perintah_kepala_cabang_proses(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
}

else{
    $CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'kepala cabang' || $request->session()->get('login') && $CekRole == 'Kepala Cabang' ) {

        $nomor_surat = $request->get('nomor_surat');

        $userDb = DB::table('surat_perintah_pengajuan_barang')->where('nomor_surat', $nomor_surat)->get();

        $isi = $userDb[0];


        return view('sistem-pengajuan-barang.kepala-cabang.lihat-detail-surat-perintah',array('isi' => $isi));
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}

//-------printlog---------//
public function lihat_printlog_kepala_cabang(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();

if($cek_role == null){
    return redirect()->action('LoginPengajuanBarang@login');
}

else{
$CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'Kepala Cabang' || $request->session()->get('login') && $CekRole == 'kepala cabang' ) {
        $nik = $cek_role -> nik;
        $cek_list = DB::table('printlog_pengajuan_barang')->where([['nik_penginput','!=',null],]) -> get();

        return view('sistem-pengajuan-barang.kepala-cabang.lihat-printlog', array('cek_list' => $cek_list));
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}

public function lihat_detail_printlog_kepala_cabang_proses(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();

if($cek_role == null){
    return redirect()->action('LoginPengajuanBarang@login');
}

else{
$CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'kepala cabang' || $request->session()->get('login') && $CekRole == 'Kepala Cabang' ) {

        $nomor = $request->get('nomor');
        
        $userDb = DB::table('printlog_pengajuan_barang')->where([['nomor','!=',null],])->get();
        
        $isi = $userDb[0];
        
        
       

        return view('sistem-pengajuan-barang.kepala-cabang.lihat-detail-printlog',array('isi' => $isi));
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}


//---------bast----------//
public function lihat_bast_kepala_cabang(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();

if($cek_role == null){
    
    return redirect()->action('LoginPengajuanBarang@login');
}

else{
$CekRole = $cek_role -> jabatan;
   

    
    

    if($request->session()->get('login') && $CekRole == 'kepala cabang' || $request->session()->get('login') && $CekRole == 'Kepala Cabang' ) {

        $nik = $cek_role -> nik;
        $cek_list = DB::table('bast_pengajuan_barang')->where([['nik_penginput','!=',null],]) -> get();

        return view('sistem-pengajuan-barang.kepala-cabang.lihat-bast', array('cek_list' => $cek_list));
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}
}

public function lihat_detail_bast_kepala_cabang_proses(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();

if($cek_role == null){
    return redirect()->action('LoginPengajuanBarang@login');
}

else{
$CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'kepala cabang' || $request->session()->get('login') && $CekRole == 'Kepala Cabang' ) {

        $nomor = $request->get('nomor');
        
        $userDb = DB::table('bast_pengajuan_barang')->where([['nomor', $nomor],])->get();
        
        $isi = $userDb[0];
        
        
       

        return view('sistem-pengajuan-barang.kepala-cabang.lihat-detail-bast',array('isi' => $isi));
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}

//-----profile------//
public function profile_kepala_cabang(Request $request) {
    
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'Kepala Cababf' || $request->session()->get('login') && $CekRole == 'kepala cabang' ) {
                
                $id = $request->session()->get('id');
            
                $LihatProfile = DB::table('users_pengajuan_barang');
                        
                $LihatProfileNext = $LihatProfile->where('id', $id)->first();
    
                return view('sistem-pengajuan-barang.kepala-cabang.profile', array('profile' => $LihatProfileNext));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }

}

public function setelan_kepala_cabang(Request $request) {
    
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'kepala cabang' || $request->session()->get('login') && $CekRole == 'Kepala Cabang' ) {

            $id = $request->session()->get('id');
            
            $LihatProfile = DB::table('users_pengajuan_barang');
                        
            $LihatProfileNext = $LihatProfile->where('id', $id)->first();
    
            return view('sistem-pengajuan-barang.kepala-cabang.setelan', array('profile' => $LihatProfileNext));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }

}




public function setelan_kepala_cabang_proses(Request $request) {
    
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'kepala cabang' || $request->session()->get('login') && $CekRole == 'Kepala Cabang' ) {
    

            $nama = $request->get('nama');
            $nik = $request->get('nik');
            $email = $request->get('email');
            $no_hp = $request->get('no_hp');
            $bagian = $request->get('bagian');
            $jabatan = $request->get('jabatan');
    
            $file = $request->file('img');
            //dd($file);
            $fileName = $file->hashName();
            $storeFile = $file->store('public/foto');
    
            $userDb = DB::table('users_pengajuan_barang')->where('id', $id)
            
                                        ->update(['nama' => $nama, 'nik' => $nik, 'email' => $email, 'no_hp' => $no_hp, 'bagian' => $bagian, 'jabatan' => $jabatan, 'img_url' => $fileName]);
            //dd($userDb);
            //dd($userDb);
            $request->session()->put('img_url', $fileName);


            return redirect()->action('PengajuanBarang@profile_kepala_cabang');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }

}



/*--------------------------------------------------------------------------------*/















/*--------------------------- KORLAP --------------------------------------*/

public function dashboard_korlap(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
if($cek_role == null){
    return redirect()->action('LoginPengajuanBarang@login');
}
else{
    
    $CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'koordinasi lapangan' || $request->session()->get('login') && $CekRole == 'Koordinasi Lapangan' ) {
        $get_nama = $cek_role -> nama;
        $get_nik = $cek_role -> nik;

        $hitung_printlog = DB::table('printlog_pengajuan_barang')->where([['nik_penginput','!=',null],])->count();
        $hitung_surat_perintah = DB::table('surat_perintah_pengajuan_barang')->where([['nik_penginput','!=',null],])->count();
        $hitung_bast = DB::table('bast_pengajuan_barang')->where([['nik_penginput','!=',null],])->count();
        
        return view('sistem-pengajuan-barang.korlap.dashboard', array('nama' => $get_nama,'jum_printlog' => $hitung_printlog, 'jum_surat_perintah' => $hitung_surat_perintah, 'jum_bast' => $hitung_bast));
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}

//------surat perintah------//
public function lihat_surat_perintah_korlap(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
if($cek_role == null){
    return redirect()->action('LoginPengajuanBarang@login');
}

else{
$CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'koordinasi lapangan' || $request->session()->get('login') && $CekRole == 'Koordinasi Lapangan' ) {
        $nik = $cek_role -> nik;
        $cek_list = DB::table('surat_perintah_pengajuan_barang')->where([['nik_penginput', '!=', null],]) -> get();

        //dd($cek_list);

        return view('sistem-pengajuan-barang.korlap.lihat-surat-perintah', array('cek_list' => $cek_list));
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}

public function lihat_detail_surat_perintah_korlap_proses(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
}

else{
    $CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'koordinasi lapangan' || $request->session()->get('login') && $CekRole == 'Koordinasi Lapangan' ) {

        $nomor_surat = $request->get('nomor_surat');

        $userDb = DB::table('surat_perintah_pengajuan_barang')->where('nomor_surat', $nomor_surat)->get();

        $isi = $userDb[0];


        return view('sistem-pengajuan-barang.korlap.lihat-detail-surat-perintah',array('isi' => $isi));
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}

//-------printlog---------//
public function lihat_printlog_korlap(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();

if($cek_role == null){
    return redirect()->action('LoginPengajuanBarang@login');
}

else{
$CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'Koordinasi Lapangan' || $request->session()->get('login') && $CekRole == 'koordinasi lapangan' ) {
        $nik = $cek_role -> nik;
        $cek_list = DB::table('printlog_pengajuan_barang')->where([['nik_penginput','!=',null],]) -> get();

        return view('sistem-pengajuan-barang.korlap.lihat-printlog', array('cek_list' => $cek_list));
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}

public function lihat_detail_printlog_korlap_proses(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();

if($cek_role == null){
    return redirect()->action('LoginPengajuanBarang@login');
}

else{
$CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'koordinasi lapangan' || $request->session()->get('login') && $CekRole == 'Koordinasi Lapangan' ) {

        $nomor = $request->get('nomor');
        
        $userDb = DB::table('printlog_pengajuan_barang')->where([['nomor','!=',null],])->get();
        
        $isi = $userDb[0];
        
        
       

        return view('sistem-pengajuan-barang.korlap.lihat-detail-printlog',array('isi' => $isi));
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}


//---------bast----------//
public function lihat_bast_korlap(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();

if($cek_role == null){
    
    return redirect()->action('LoginPengajuanBarang@login');
}

else{
$CekRole = $cek_role -> jabatan;
   

    
    

    if($request->session()->get('login') && $CekRole == 'koordinasi lapangan' || $request->session()->get('login') && $CekRole == 'Koordinasi Lapangan' ) {

        $nik = $cek_role -> nik;
        $cek_list = DB::table('bast_pengajuan_barang')->where([['nik_penginput','!=',null],]) -> get();

        return view('sistem-pengajuan-barang.korlap.lihat-bast', array('cek_list' => $cek_list));
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}
}

public function lihat_detail_bast_korlap_proses(Request $request) {
    
$id = $request->session()->get('id');
$cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();

if($cek_role == null){
    return redirect()->action('LoginPengajuanBarang@login');
}

else{
$CekRole = $cek_role -> jabatan;
   
    
    

    if($request->session()->get('login') && $CekRole == 'koordinasi lapangan' || $request->session()->get('login') && $CekRole == 'Koordinasi Lapangan' ) {

        $nomor = $request->get('nomor');
        
        $userDb = DB::table('bast_pengajuan_barang')->where([['nomor', $nomor],])->get();
        
        $isi = $userDb[0];
        
        
       

        return view('sistem-pengajuan-barang.korlap.lihat-detail-bast',array('isi' => $isi));
        
    } 
    
        else{
            return redirect()->action('LoginPengajuanBarang@login');
    }
}

}

//-----profile------//
public function profile_korlap(Request $request) {
    
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'Koordinasi Lapangan' || $request->session()->get('login') && $CekRole == 'koordinasi lapangan' ) {
                
                $id = $request->session()->get('id');
            
                $LihatProfile = DB::table('users_pengajuan_barang');
                        
                $LihatProfileNext = $LihatProfile->where('id', $id)->first();
    
                return view('sistem-pengajuan-barang.korlap.profile', array('profile' => $LihatProfileNext));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }

}

public function setelan_korlap(Request $request) {
    
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'koordinasi lapangan' || $request->session()->get('login') && $CekRole == 'Koordinasi Lapangan' ) {

            $id = $request->session()->get('id');
            
            $LihatProfile = DB::table('users_pengajuan_barang');
                        
            $LihatProfileNext = $LihatProfile->where('id', $id)->first();
    
            return view('sistem-pengajuan-barang.korlap.setelan', array('profile' => $LihatProfileNext));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }

}




public function setelan_korlap_proses(Request $request) {
    
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'koordinasi lapangan' || $request->session()->get('login') && $CekRole == 'Koordinasi Lapangan' ) {
    

            $nama = $request->get('nama');
            $nik = $request->get('nik');
            $email = $request->get('email');
            $no_hp = $request->get('no_hp');
            $bagian = $request->get('bagian');
            $jabatan = $request->get('jabatan');
    
            $file = $request->file('img');
            //dd($file);
            $fileName = $file->hashName();
            $storeFile = $file->store('public/foto');
    
            $userDb = DB::table('users_pengajuan_barang')->where('id', $id)
            
                                        ->update(['nama' => $nama, 'nik' => $nik, 'email' => $email, 'no_hp' => $no_hp, 'bagian' => $bagian, 'jabatan' => $jabatan, 'img_url' => $fileName]);
            //dd($userDb);
            //dd($userDb);
            $request->session()->put('img_url', $fileName);


            return redirect()->action('PengajuanBarang@profile_korlap');
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }

}
    
    
    /*--------------------------------------------------------------------------------*/
















    /*--------------------------- GUDANG --------------------------------------*/

    public function dashboard_gudang(Request $request) {
        
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    else{
        
        $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'gudang' || $request->session()->get('login') && $CekRole == 'Gudang' ) {
            $get_nama = $cek_role -> nama;
            $get_nik = $cek_role -> nik;
    
            $hitung_printlog = DB::table('printlog_pengajuan_barang')->where([['nik_penginput','!=',null],])->count();
            $hitung_surat_perintah = DB::table('surat_perintah_pengajuan_barang')->where([['nik_penginput','!=',null],])->count();
            $hitung_bast = DB::table('bast_pengajuan_barang')->where([['nik_penginput','!=',null],])->count();
            
            return view('sistem-pengajuan-barang.gudang.dashboard', array('nama' => $get_nama,'jum_printlog' => $hitung_printlog, 'jum_surat_perintah' => $hitung_surat_perintah, 'jum_bast' => $hitung_bast));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }
    
    }
    
    //------surat perintah------//
    public function lihat_surat_perintah_gudang(Request $request) {
        
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'Gudang' || $request->session()->get('login') && $CekRole == 'gudang' ) {
            $nik = $cek_role -> nik;
            $cek_list = DB::table('surat_perintah_pengajuan_barang')->where([['nik_penginput', '!=', null],]) -> get();
    
            //dd($cek_list);
    
            return view('sistem-pengajuan-barang.gudang.lihat-surat-perintah', array('cek_list' => $cek_list));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }
    
    }
    
    public function lihat_detail_surat_perintah_gudang_proses(Request $request) {
        
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
        
    if($cek_role == null){
            return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
        $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'gudang' || $request->session()->get('login') && $CekRole == 'Gudang' ) {
    
            $nomor_surat = $request->get('nomor_surat');
    
            $userDb = DB::table('surat_perintah_pengajuan_barang')->where('nomor_surat', $nomor_surat)->get();
    
            $isi = $userDb[0];
    
    
            return view('sistem-pengajuan-barang.gudang.lihat-detail-surat-perintah',array('isi' => $isi));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }
    
    }
    
    //-------printlog---------//
    public function lihat_printlog_gudang(Request $request) {
        
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'Gudang' || $request->session()->get('login') && $CekRole == 'gudang' ) {
            $nik = $cek_role -> nik;
            $cek_list = DB::table('printlog_pengajuan_barang')->where([['nik_penginput','!=',null],]) -> get();
    
            return view('sistem-pengajuan-barang.gudang.lihat-printlog', array('cek_list' => $cek_list));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }
    
    }
    
    public function lihat_detail_printlog_gudang_proses(Request $request) {
        
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'gudang' || $request->session()->get('login') && $CekRole == 'Gudang' ) {
    
            $nomor = $request->get('nomor');
            
            $userDb = DB::table('printlog_pengajuan_barang')->where([['nomor','!=',null],])->get();
            
            $isi = $userDb[0];
            
            
           
    
            return view('sistem-pengajuan-barang.gudang.lihat-detail-printlog',array('isi' => $isi));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }
    
    }
    
    
    //---------bast----------//
    public function lihat_bast_gudang(Request $request) {
        
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
    
        
        
    
        if($request->session()->get('login') && $CekRole == 'gudang' || $request->session()->get('login') && $CekRole == 'Gudang' ) {
    
            $nik = $cek_role -> nik;
            $cek_list = DB::table('bast_pengajuan_barang')->where([['nik_penginput','!=',null],]) -> get();
    
            return view('sistem-pengajuan-barang.gudang.lihat-bast', array('cek_list' => $cek_list));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }
    }
    
    public function lihat_detail_bast_gudang_proses(Request $request) {
        
    $id = $request->session()->get('id');
    $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
    
    if($cek_role == null){
        return redirect()->action('LoginPengajuanBarang@login');
    }
    
    else{
    $CekRole = $cek_role -> jabatan;
       
        
        
    
        if($request->session()->get('login') && $CekRole == 'Gudang' || $request->session()->get('login') && $CekRole == 'gudang' ) {
    
            $nomor = $request->get('nomor');
            
            $userDb = DB::table('bast_pengajuan_barang')->where([['nomor', $nomor],])->get();
            
            $isi = $userDb[0];
            
            
           
    
            return view('sistem-pengajuan-barang.gudang.lihat-detail-bast',array('isi' => $isi));
            
        } 
        
            else{
                return redirect()->action('LoginPengajuanBarang@login');
        }
    }
    
    }
    
    //-----profile------//
    public function profile_gudang(Request $request) {
        
        $id = $request->session()->get('id');
        $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
        
        if($cek_role == null){
            return redirect()->action('LoginPengajuanBarang@login');
        }
        
        else{
        $CekRole = $cek_role -> jabatan;
           
            
            
        
            if($request->session()->get('login') && $CekRole == 'gudang' || $request->session()->get('login') && $CekRole == 'Gudang' ) {
                    
                    $id = $request->session()->get('id');
                
                    $LihatProfile = DB::table('users_pengajuan_barang');
                            
                    $LihatProfileNext = $LihatProfile->where('id', $id)->first();
        
                    return view('sistem-pengajuan-barang.gudang.profile', array('profile' => $LihatProfileNext));
                
            } 
            
                else{
                    return redirect()->action('LoginPengajuanBarang@login');
            }
        }
    
    }
    
    public function setelan_gudang(Request $request) {
        
        $id = $request->session()->get('id');
        $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
        
        if($cek_role == null){
            return redirect()->action('LoginPengajuanBarang@login');
        }
        
        else{
        $CekRole = $cek_role -> jabatan;
           
            
            
        
            if($request->session()->get('login') && $CekRole == 'gudang' || $request->session()->get('login') && $CekRole == 'Gudang' ) {
    
                $id = $request->session()->get('id');
                
                $LihatProfile = DB::table('users_pengajuan_barang');
                            
                $LihatProfileNext = $LihatProfile->where('id', $id)->first();
        
                return view('sistem-pengajuan-barang.gudang.setelan', array('profile' => $LihatProfileNext));
                
            } 
            
                else{
                    return redirect()->action('LoginPengajuanBarang@login');
            }
        }
    
    }
    
    
    
    
    public function setelan_gudang_proses(Request $request) {
        
        $id = $request->session()->get('id');
        $cek_role = DB::table('users_pengajuan_barang')->where('id',$id)->first();
        
        if($cek_role == null){
            return redirect()->action('LoginPengajuanBarang@login');
        }
        
        else{
        $CekRole = $cek_role -> jabatan;
           
            
            
        
            if($request->session()->get('login') && $CekRole == 'gudang' || $request->session()->get('login') && $CekRole == 'Gudang' ) {
        
    
                $nama = $request->get('nama');
                $nik = $request->get('nik');
                $email = $request->get('email');
                $no_hp = $request->get('no_hp');
                $bagian = $request->get('bagian');
                $jabatan = $request->get('jabatan');
        
                $file = $request->file('img');
                //dd($file);
                $fileName = $file->hashName();
                $storeFile = $file->store('public/foto');
        
                $userDb = DB::table('users_pengajuan_barang')->where('id', $id)
                
                                            ->update(['nama' => $nama, 'nik' => $nik, 'email' => $email, 'no_hp' => $no_hp, 'bagian' => $bagian, 'jabatan' => $jabatan, 'img_url' => $fileName]);
                //dd($userDb);
                //dd($userDb);
                $request->session()->put('img_url', $fileName);
    
    
                return redirect()->action('PengajuanBarang@profile_gudang');
                
            } 
            
                else{
                    return redirect()->action('LoginPengajuanBarang@login');
            }
        }
    
    }
    
    
    /*--------------------------------------------------------------------------------*/
































}
