@extends('sistem-pengiriman-barang.master.master-tu')





@section ('konten')
<!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">Setelan</div>
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
			<li class="breadcrumb-item active">Setelan</li>
		</ol>
		
</div>
<!-- ------------------------------------------------------------- -->


<div class="row-col">
  
  <div class="col-sm-9 col-lg-10 light bg">
    <div class="tab-content pos-rlt">
      <div class="tab-pane active" id="tab-1">
        <div class="p-a-md b-b _600">Setelan Profile</div>
        <form role="form" class="p-a-md col-md-6" action="{{url('/sistem-pengiriman-barang/tu/setelan-tu-proses')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
              <label>File</label>
              
                <input type="file" class="form-control" name="img" required="">
            </div>
          <div class="form-group">
            <label>Nama</label>
            <input name="nama" type="text" class="form-control" value="" required="">
          </div>
          <div class="form-group">
            <label>NIK</label>
            <input name="nik" type="text" class="form-control" value="" required="">
          </div>
          <div class="form-group">
            <label>E-mail</label>
            <input type="text" class="form-control" name="email" value="" required="">
          </div>
          <div class="form-group">
            <label>No-HP</label>
            <input type="text" class="form-control" name="no_hp" value="" required="">
          </div>
          <div class="form-group">
            <label>Bagian</label>
            <input type="text" class="form-control" name="bagian" value="" required="">
          </div>
          <div class="form-group">
            <label>Jabatan</label>
            <input type="text" class="form-control" name="jabatan" value="" required="">
          </div>
          <button type="submit" class="btn btn-info m-t">Update</button>
        </form>
      </div>
     











<!-- ############ PAGE END ###################-->

    </div>
  </div>
	<!-- / -->
@endsection