@extends('sistem-pengiriman-barang.master.master-tu')





@section ('konten')
<!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">Dashboard</div>
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
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-pengiriman-barang/tu/profile">
                        <span>Profile</span>
                      </a>
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-pengiriman-barang/tu/setelan">
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
			<li class="breadcrumb-item active">Dashboard</li>
		</ol>
		
</div>
<!-- ------------------------------------------------------------- -->




<div class="padding">
  <div class="p-y-lg clearfix">
    <div class="text-center">
      <h2 class="_700 m-b">Howdy, nana</h2>
      <h5 class="m-b-md">Berikut adalah ringkasan kerjamu</h5>
    </div>
  </div>
  <div class="p-x-lg">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="row no-gutter">
          <div class="col-sm-6 push-sm-6">
            <div class="box m-t-n">
              <div class="box-body text-center r-t primary">
                <h6 class="text-u-c p-v-sm m-a-0 m-t">Delivery order</h6>
                <h3 class="m-a-0 m-l m-v">
                  <span class="text-2x">1</span>
                </h3>
              </div>
              <ul class="list b-t b-b m-a-0 no-radius">
                
                <li class="list-item">
                  <div class="list-body">
                    <i class="text-danger m-r-xs"></i> Jumlah dilevery order yang kamu kirimkan
                  </div>
                </li>
              </ul>
              <div class="text-center p-a-md">
                <a href="{{env('APP_URL')}}/sistem-pengiriman-barang/tu/input-delivery-order/lihat-delivery-order" class="btn btn-block btn-lg primary">Lihat</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 pull-sm-6">
            <div class="box">
              <div class="box-body text-center r-t success">
                <h6 class="text-u-c m-a-0 m-t">BAST</h6>
                <h3 class="m-a-0 m-l m-v">
                  <span class="text-2x">2</span>
                </h3>
              </div>
              <ul class="list b-t b-b m-a-0 no-radius">
                
                <li class="list-item">
                  <div class="list-body">
                    <i class="text-danger m-r-xs"></i> Jumlah berita acara serah terima yang kamu kirimkan
                  </div>
                </li>
              </ul>
              <div class="text-center p-a-md">
                <a href="{{env('APP_URL')}}/sistem-pengajuan-barang/tu/input-print-log/lihat-printlog" class="btn btn-block btn-lg success">Lihat</a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>







<!-- ############ PAGE END ###################-->

    </div>
  </div>
	<!-- / -->
@endsection