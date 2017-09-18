@extends('sistem-pelaporan-barang.master.master-korlap')




@section ('konten')
<!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">Input Laporan Kegiatan</div>
                <!-- nabar right -->
                <ul class="nav navbar-nav pull-right">

                  <li class="nav-item dropdown pos-stc-xs">
                    <a class="nav-link" data-toggle="dropdown">
                      <i class="ion-android-search w-24"></i>
                    </a>
                    <div class="dropdown-menu text-color w-md animated fadeInUp pull-right">
                      <!-- search form -->
                      <form class="navbar-form form-inline navbar-item m-a-0 p-x v-m" role="search">
                        <div class="form-group l-h m-a-0">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search projects...">
                            <span class="input-group-btn">
                              <button type="submit" class="btn white b-a no-shadow"><i class="fa fa-search"></i></button>
                            </span>
                          </div>
                        </div>
                      </form>
                      <!-- / search form -->
                    </div>
                  </li>
                  
                 <li class="nav-item dropdown">
                    <a class="nav-link clear" data-toggle="dropdown">
                      <span class="avatar w-32">
                        <img src="{{env('APP_URL')}}/storage/foto/{{Session::get('img_url')}}" class="w-full rounded" alt="...">
                      </span>
                    </a>
                    <div class="dropdown-menu w dropdown-menu-scale pull-right">
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-pelaporan-barang/korlap/profile">
                        <span>Profile</span>
                      </a>
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-pelaporan-barang/korlap/setelan">
                        <span>Setelan</span>
                      </a>
                      
                      <a class="dropdown-item" href="{{env('APP_URL')}}/logout">Keluar</a>
                    </div>
                  </li>
                </ul>
                <!-- / navbar right -->
          </div>
    </div>
    <div class="app-footer white bg p-a b-t">
      <div class="pull-right text-sm text-muted">Version 1.0</div>
      <span class="text-sm text-muted">All of Copyrights belong to PT. Jasa Prima Logistics, a company of BULOG.</span>
    </div>
    <div class="app-body">

<!-- ############ PAGE START #################-->

<!-- ------------------------ BREADCRUMB --------------------------- -->
<div class="m-b">
		
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active">Input Laporan Kegiatan</li>
		</ol>
		
</div>
<!-- ------------------------------------------------------------- -->

<div class="box">
        <div class="box-header">
          <h2>Input Laporan Kegiatan</h2>
          <small>Silahkan isi form laporan kegiatan yang ada dibawah ini</small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
          <form role="form" class="form-horizontal form-material" id="loginform" action="http://bella.dev/sistem-pelaporan-barang/korlap/input-laporan-kegiatan-korlap-proses" method="post">
          {{ csrf_field() }}
            

            <div class="form-group">
                    <p>Tanggal Laporan Kegiatan:</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="datepicker-autoclose" placeholder="tahun/bulan/hari" name="tanggal_surat_jalan" required> <span class="input-group-addon"><i class="icon-calender"></i></span> 
                    </div>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Pihak Pertama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nama pihak pertama" required="" name="kepada">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Pihak Kedua</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nama pihak kedua" required="" name="no_kendaraan">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Printlog</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nomor printlog" required="" name="guna_keperluan">
            </div>

            <div class="form-group">
                    <p>Tanggal Printlog:</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="datepicker-autoclose2" placeholder="tahun/bulan/hari" name="tanggal_surat_jalan" required> <span class="input-group-addon"><i class="icon-calender"></i></span> 
                    </div>
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Kontrak Jasa Angkut</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nomor kontrak jasa angkut" required="" name="nama_barang">
            </div>
            
            <div class="form-group">
                    <p>Tanggal Kontak Jasa Angkut:</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="datepicker-autoclose3" placeholder="tahun/bulan/hari" name="tanggal_surat_jalan" required> <span class="input-group-addon"><i class="icon-calender"></i></span> 
                    </div>
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Intruksi Angkutan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nomor intruksi angkutan" required="" name="jumlah_barang">
            </div>

            <div class="form-group">
                    <p>Tanggal Intruksi Angkutan:</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="datepicker-autoclose4" placeholder="tahun/bulan/hari" name="tanggal_surat_jalan" required> <span class="input-group-addon"><i class="icon-calender"></i></span> 
                    </div>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Laklog</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nomor laglog" required="" name="jumlah_barang">
            </div>

            <div class="form-group">
                    <p>Tanggal Laklog:</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="datepicker-autoclose5" placeholder="tahun/bulan/hari" name="tanggal_surat_jalan" required> <span class="input-group-addon"><i class="icon-calender"></i></span> 
                    </div>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Delivery Order</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nomor delivery order" required="" name="jumlah_barang">
            </div>

            <div class="form-group">
                    <p>Tanggal Delivery Order:</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="datepicker-autoclose6" placeholder="tahun/bulan/hari" name="tanggal_surat_jalan" required> <span class="input-group-addon"><i class="icon-calender"></i></span> 
                    </div>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Jenis Barang</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="jenis barang" required="" name="jumlah_barang">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Jumlah Kuantum</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="jumlah kuantum" required="" name="jumlah_barang">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Kualitas Barang</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="kualitas barang" required="" name="jumlah_barang">
            </div>

            <div class="form-group">
                    <p>Tanggal Penyerahan:</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="datepicker-autoclose6" placeholder="tahun/bulan/hari" name="tanggal_surat_jalan" required> <span class="input-group-addon"><i class="icon-calender"></i></span> 
                    </div>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Alat Angkut</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="alat angkut" required="" name="jumlah_barang">
            </div>
            
            
            
            

           
            <button type="submit" class="btn white m-b">Kirim</button>
           
          </form>
        </div>
        
      </div>
      <div class="col-sm-12">
         <a href="http://bella.dev/sistem-pelaporan-barang/korlap/input-laporan-kegiatan/lihat-laporan-kegiatan"><button class="btn btn-block danger">Lihat laporan kegiatan</button></a>
      </div>
     
        </br>
        </br>
        </br>
    </div>
    
    </div>









<!-- ############ PAGE END ###################-->

    </div>
  </div>
	<!-- / -->
@endsection