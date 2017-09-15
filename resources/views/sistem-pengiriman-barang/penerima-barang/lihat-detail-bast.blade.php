@extends('sistem-pengiriman-barang.master.master-penerima-barang')





@section ('konten')
<!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">Lihat Detail BAST</div>
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
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-pengiriman-barang/penerima-barang/profile">
                        <span>Profile</span>
                      </a>
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-pengiriman-barang/penerima-barang/setelan">
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
            <li class="breadcrumb-item"><a href="{{env('APP_URL')}}/sistem-pengiriman-barang/penerima-barang/lihat-bast">Lihat BAST</a></li>
            <li class="breadcrumb-item active">Lihat detail BAST</li>
		</ol>
		
</div>
<!-- ------------------------------------------------------------- -->

<div class="padding">
  <div class="col-sm-12">
    <div class="box">
      <div class="box-header">
        <h2>Detail BAST Barang</h2>
        <small>
          Berikut adalah detail BAST barang yang anda pilih.
        </small>
      </div>
    </div>
  </div>
</div>

<div class="padding printableArea">
  <div class="col-sm-12">
    <div class="box">
      <div class="text-center"><b><u><h5>BERITA ACARA SERAH TERIMA BARANG</h5></u></b><span><p><i>Nomor:xxxxx</i></p></span></div>
      
      <div class="box col-sm-12 padding">
      <p> Pada tanggal xxxxx, kami yang bertanda tangan dibawah ini:</p>

      <p>1. xxxxxx jabatan xxxxxxx bertindak dan atas nama PT. Jasa Prima Logistics BULOG cabang Jawa Tengah, selanjutnya disebut pihak pertama.</p>
      <p>2. xxxxxxx jabatan xxxxx bertindak dan atas nama Perum BULOG subdivre Wilayah I Semarang, selanjutnya disebut pihak kedua.</p>
      <p> Unpenerima-barangk selanjutnya PIHAK PERTAMA dan PIHAK KEDUA secara bersama sama disebut para pihak.</p>
      <p>Berdasarkan:</p>
      <p>Faximile BULOG Nomor:xxxxxx tanggal xxxxx perihal xxxxxx</p>
      <p>PIHAK PERTAMA dengan ini menyerahkan kepada PIHAK KEDUA xxxx dan PIHAK KEDUA telah menerima penyerahan dari PIHAK PERTAMA berupa:</p>
      <p>a. Jenis barang : xxxxx</br>
      b. Jumlah kuanpenerima-barangm : xxxx </br>
      c. Tanggal penyerahan : xxxx</br>
      d. Alat angkut : xxxx</br>
      </p>
      <p>Demikian berita acara serah terima ini dibuat, ditandatangani dalam rangkap 2 (dua) diatas kertas bermaterai cukup dan mempunyai kekuatan hukum yang sama bagi para pihak.</p>
      </div>

      <div class="box col-sm-12 padding">
        <div class="text-center pull-left">
            <p>PIHAK PERTAMA</p><span><p>Yang Menyerahkan</p></span>
        
        <p>( xxxxxxx )</p>
        </div>

        <div class="text-center pull-right">
            <p>PIHAK KEDUA</p><span><p>Yang menerima</p></span>
        </br>
        <p>( xxxxxx )</p>
        </div>

        
        <div class="text-center" style="position:center">
            <p>Mengetahui,</p><span><p>Subdivre Wilayah I Semarang</p></span>
        </br>
        <p>( xxxxx )</p>
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