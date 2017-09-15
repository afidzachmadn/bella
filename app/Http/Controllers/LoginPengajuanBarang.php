<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class LoginPengajuanBarang extends Controller
{
    //

public function login(Request $request) {
    
        return view('sistem-pengajuan-barang.login');
 
}

public function logout(Request $request) {
    $request->session()->flush();
    return redirect()->action('LoginPengajuanBarang@login');
}

public function bacadatabase(Request $request) {
    $email = $request->input('email');
    $password=$request->input('password');
    // login ke db
    $usersTable = DB::table('users_pengajuan_barang');
    //cek username dan pass di database
    $usercheck= $usersTable->where('email', $email)->first();
   
    //dd($usercheck);
    //dd($get_jabatan);


    
        if($usercheck != null){
            $get_jabatan = $usercheck -> jabatan;
            if($get_jabatan == 'tata usaha' || $get_jabatan == 'Tata Usaha'){

    
                $decrypt = decrypt($usercheck->password);
        
                if($password == $decrypt) {
                    $request->session()->put('login', true);
                    //$request->session()->put('role', 'karyawan');
                    $request->session()->put('name', $usercheck->nama);
                    $request->session()->put('id', $usercheck->id);
                    $request->session()->put('img_url', $usercheck->img_url);
            
                    return redirect()->action('PengajuanBarang@dashboard_tu');
                }

                else {
                return redirect()->action('LoginPengajuanBarang@login');
                }
            }
            
            elseif($get_jabatan == 'kepala cabang' || $get_jabatan == 'Kepala Cabang'){
                if($usercheck != null){
        
            
                    $decrypt = decrypt($usercheck->password);
                
                    if($password == $decrypt) {
                        $request->session()->put('login', true);
                        //$request->session()->put('role', 'karyawan');
                        $request->session()->put('name', $usercheck->nama);
                        $request->session()->put('id', $usercheck->id);
                        $request->session()->put('img_url', $usercheck->img_url);
                    
                        return redirect()->action('PengajuanBarang@dashboard_kepala_cabang');
                    }
        
                    else {
                        return redirect()->action('LoginPengajuanBarang@login');
                    }
                }
                
                else{
                    return redirect()->action('LoginPengajuanBarang@login');
                }
            }

            elseif($get_jabatan == 'koordinasi lapangan' || $get_jabatan == 'Koordinasi Lapangan'){
                if($usercheck != null){
        
            
                    $decrypt = decrypt($usercheck->password);
                
                    if($password == $decrypt) {
                        $request->session()->put('login', true);
                        //$request->session()->put('role', 'karyawan');
                        $request->session()->put('name', $usercheck->nama);
                        $request->session()->put('id', $usercheck->id);
                        $request->session()->put('img_url', $usercheck->img_url);
                    
                        return redirect()->action('PengajuanBarang@dashboard_korlap');
                    }
        
                    else {
                        return redirect()->action('LoginPengajuanBarang@login');
                    }
                }
                
                else{
                    return redirect()->action('LoginPengajuanBarang@login');
                }
            }
        
            elseif($get_jabatan == 'gudang' || $get_jabatan == 'Gudang'){
                if($usercheck != null){
        
            
                    $decrypt = decrypt($usercheck->password);
                
                    if($password == $decrypt) {
                        $request->session()->put('login', true);
                        //$request->session()->put('role', 'karyawan');
                        $request->session()->put('name', $usercheck->nama);
                        $request->session()->put('id', $usercheck->id);
                        $request->session()->put('img_url', $usercheck->img_url);
                    
                        return redirect()->action('PengajuanBarang@dashboard_gudang');
                    }
        
                    else {
                        return redirect()->action('LoginPengajuanBarang@login');
                    }
                }
                
                else{
                    return redirect()->action('LoginPengajuanBarang@login');
                }
            }

        }
        
        else{
            return redirect()->action('LoginPengajuanBarang@login');
        }
    }

    

    
    

    
}
