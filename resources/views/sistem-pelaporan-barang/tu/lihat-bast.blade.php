@extends('sistem-pelaporan-barang.master.master-tu')





@section ('konten')
<!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">Lihat BAST</div>
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
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-pelaporan-barang/tu/profile">
                        <span>Profile</span>
                      </a>
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-pelaporan-barang/tu/setelan">
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
      <li class="breadcrumb-item active">Lihat BAST</li>
		</ol>
		
</div>
<!-- ------------------------------------------------------------- -->
<div class="padding">
<div class="col-sm-12">
      <div class="box">
        <div class="box-header">
          <h2>List BAST</h2>
          <small>
            Berikut adalah list BAST yang masuk.
          </small>
          </small>
          <small><b>Jika tombol Lihat tidak dapat di klik, silahkan klik tombol refresh terlebih dahulu</b></small>
        </div>
        <table class="table table-striped b-t">
          <thead>
            <tr>
              <th class="text-center">Nomor</th>
              <th class="text-center">Lihat PDF</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              

              <form role="form" class="form-horizontal form-material" id="loginform" action="{{url('/sistem-pelaporan-barang/tu/lihat-detail-bast-tu-proses')}}" method="post">
              {{ csrf_field() }}
              <td>
              <p class="text-center">1</p>
              <input style="visibility:hidden" type="text" class="form-control text-center" id="exampleInputEmail1" required="" name="no" value="1"></td>
              <td class="text-center"><button type="submit" class="btn btn-block danger">Lihat</button></td>
              </form>
             
            </tr>
           
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <a href="{{env('APP_URL')}}/sistem-pelaporan-barang/tu/lihat-bast"><button class="btn btn-block success">Refresh</button></a>
  </br>
</div>




















<!-- ############ PAGE END ###################-->

    </div>
  </div>
	<!-- / -->

@endsection