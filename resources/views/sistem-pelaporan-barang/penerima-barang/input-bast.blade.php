@extends('sistem-pelaporan-barang.master.master-penerima-barang')




@section ('konten')
<!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">Upload BAST</div>
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
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-pelaporan-barang/penerima-barang/profile">
                        <span>Profile</span>
                      </a>
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-pelaporan-barang/penerima-barang/setelan">
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
			<li class="breadcrumb-item active">Input BAST</li>
		</ol>
		
</div>
<!-- ------------------------------------------------------------- -->




<div class="padding">
  <p class="m-b-md"><strong>Upload BAST</strong> <a href="http://www.dropzonejs.com/" target="blank"><i class="fa fa-link text-muted"></i></a></p>
  <p class="text-muted">Silahkan upload berkas BAST yang telah bertanda tangan lengkap dengan format (.pdf)</p>
  <p class="text-muted"><b>Jika file upload berhenti atau gagal, silahkan klik tombol refresh</b></p>
  <form action="api/dropzone" class="dropzone">
    <div class="dz-message" data-ui-jp="dropzone" data-ui-options="{ url: 'api/dropzone' }">
        <h4 class="m-t-lg m-b-md">Seret file disini atau klik untuk mengupload.</h4>
    </div>
  </form>
  <br>
   <a href="{{env('APP_URL')}}/sistem-pelaporan-barang/penerima-barang/input-bast"><button class="btn btn-block success">Refresh</button></a>
   <br>
   <br>
   <a href="{{env('APP_URL')}}/sistem-pelaporan-barang/penerima-barang/input-bast/lihat-bast"><button class="btn btn-block danger">Lihat BAST</button></a>
</div>






<!-- ############ PAGE END ###################-->

    </div>
  </div>
	<!-- / -->
@endsection