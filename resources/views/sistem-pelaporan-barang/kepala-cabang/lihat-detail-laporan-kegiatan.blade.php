@extends('sistem-pelaporan-barang.master.master-kepala-cabang')





@section ('konten')
<!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">Lihat Detail Laporan Kegiatan</div>
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
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-pelaporan-barang/kepala-cabang/profile">
                        <span>Profile</span>
                      </a>
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-pelaporan-barang/kepala-cabang/setelan">
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
            <li class="breadcrumb-item"><a href="{{env('APP_URL')}}/sistem-pelaporan-barang/kepala-cabang/lihat-laporan-kegiatan">Lihat laporan kegiatan</a></li>
            <li class="breadcrumb-item active">Lihat detail laporan kegiatan</li>
		</ol>
		
</div>
<!-- ------------------------------------------------------------- -->

<div class="padding">
  <div class="col-sm-12">
    <div class="box">
      <div class="box-header">
        <h2>Detail Laporan Kegiatan</h2>
        <small>
          Berikut adalah detail laporan kegiatan anda pilih.
        </small>
      </div>
    </div>
  </div>
</div>

<div class="padding printableArea">
  <div class="col-sm-12">
    <div class="box">
    
      <div class="box col-sm-12 padding">
      <p> Pada tanggal xxxxx</p>
      <p> 1. Pihak pertama : xxxxx</p>
      <p>2. Pihak kedua : xxxxxx</p>
      <br>
      <p>Untuk selanjutnya Pihak pertama dan Pihak kedua disebut Para pihak.</p>
      <br>
      <p>Berdasarkan :</p>
      <p>1. Kontrak jasa angkut nomor : xxxxxx tanggal : xxxxxx</p>
      <p>2. Printlog nomor : xxxxxxx tanggal : xxxxx</p>
      <p>3. Intruksi angkutan nomor : xxxxxx tanggal : xxxx</p>
      <p>4. Laklog nomor : xxxxx tanggal : xxxxx</p>
      <p>5. Delivery order nomor : xxxxx tanggal : xxxxx</p>
      <br>
      <p>Dengan ini menerangkan bahwa :</p>
      <p>1. Jenis barang : xxxxx</p>
      <p>2. Jumlah kuantum : xxxxx</p>
      <p>3. Kualitas barang : xxxxx</p>
      <p>4. Tanggal penyerahan : xxxx</p>
      <p>5. Alat angkut : xxxx</p>
      <br>
      <p>Demikian Laporan kegiatan ini dibuat, ditandatangani dalam rangkap 2 (dua), diatas kertas bermaterai.


      

      <div class="box col-sm-12 padding">
        

        <div class="text-center pull-right">
            <p>Kepala Cabang</p>
        </br>
        <p>( xxxxxx )</p>
        </div>

      </div>

     

      
    </div>

     
     
    
  </div>
  
</div>


<button id="print" class="btn btn-block success" type="button"> <span><i class="fa fa-print"></i> Print</span></button>



<!-- ############ PAGE END ###################-->

    </div>
  </div>
	<!-- / -->


@endsection