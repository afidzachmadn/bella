@extends('sistem-keuangan-barang.master.master-kepala-cabang')





@section ('konten')
<!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">Lihat Detail Surat Tagihan </div>
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
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-keuangan-barang/kepala-cabang/profile">
                        <span>Profile</span>
                      </a>
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-keuangan-barang/kepala-cabang/setelan">
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
            <li class="breadcrumb-item"><a href="{{env('APP_URL')}}/sistem-keuangan-barang/kepala-cabang/input-surat-penagihan/lihat-surat-penagihan">Lihat surat penagihan</a></li>
            <li class="breadcrumb-item active">Lihat detail surat penagihan</li>
		</ol>
		
</div>
<!-- ------------------------------------------------------------- -->

<div class="padding">
  <div class="col-sm-12">
    <div class="box">
      <div class="box-header">
        <h2>Detail Surat Penagihan</h2>
        <small>
          Berikut adalah detail surat penagihan barang yang anda pilih.
        </small>
      </div>
    </div>
  </div>
</div>

<div class="padding printableArea">
  <div class="col-sm-12">
    <div class="box">
      
      
      <div class="box col-sm-12 padding">
      <p>Semarang, xxxxxx</p>
      <br>
      <br>
      <p>Nomor surat : xxxxx</p>
      <p>Perihal : xxxxx</p>
      <p>lampiran : xxxxx</p>
      <br>
      <br>

      <p> Kepada yang terhormat, xxxxxx:</p>
      <p> Menunjuk :</p>
      <p>1. Nomor Printlog BULOG : xxxxxxx tanggal xxxx</p>
      <p>2. Nomor Intruksi Angkutan (Inang) : xxxxxx tanggal xxxxx</p>
      <p>3. Nomor Pelaksanaan Logistik (Laklog) : xxxx tanggal xxxx</p>
      <p>4. Kontrak jasa angkut antara Perum BULOG dengan PT. Jasa Prima Logistics No KJL-13/11010-03/2017 tanggal xxxxx</p>
      <br>
      <p>Bersama ini disampaikan hal-hal sebagai berikut :</p>
      <p>A. Pekerjaan angkutan xxxxxx tujuan xxxx nomor-inang:xxxxxx tanggal xxxxx sebanyak xxxxx biaya pelaksanaan xxxxx.</p>
      <p>B. Sehubungan dengan hal tersebut diatas, dimohon biaya pekerjaaan tersebut dapat di transfer ke Bank BRI a/n PT.JPLB dengan nomor rekening 0206.01.00464430.7.
      <br>
      <p><b>Demikian disampaikan untuk menjadi periksa dan atas perhatiannya diucapkan terimakasih.
      </b></p>
      <div class="box col-sm-12 padding">
        

        <div class="text-center pull-right">
            <p>Kepala Cabang</p>
        </div>
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
