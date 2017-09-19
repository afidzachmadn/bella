@extends('sistem-pengiriman-barang.master.master-tu')





@section ('konten')
<!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">Input Surat Jalan</div>
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
			<li class="breadcrumb-item active">Input surat jalan</li>
		</ol>
		
</div>
<!-- ------------------------------------------------------------- -->




<div class="box">
        <div class="box-header">
          <h2>Input Surat Jalan</h2>
          <small>Silahkan isi form surat jalan yang ada dibawah ini</small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
          <form role="form" class="form-horizontal form-material" id="loginform" action="{{env('APP_URL')}}/sistem-pengiriman-barang/tu/input-surat-jalan-tu-proses" method="post">
          {{ csrf_field() }}
            

            <div class="form-group">
                    <p>Tanggal Surat Jalan:</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="datepicker-autoclose" placeholder="tahun/bulan/hari" name="tanggal_surat_jalan" required> <span class="input-group-addon"><i class="icon-calender"></i></span> 
                    </div>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Kepada</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kepada" required="" name="kepada">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">No Kendaraan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="no kendaraan" required="" name="no_kendaraan">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Nomor</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nomor surat jalan" required="" name="guna_keperluan">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Barang</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan nama barang" required="" name="nama_barang">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Jumlah</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="jumlah barang" required="" name="jumlah_barang">
            </div>
            
            <div class="form-group">
               <label for="exampleInputEmail1">Keterangan</label>
               <textarea class="form-control" rows="2" name="keterangan" placeholder="keterangan"></textarea>
            </div>
            
            

           
            <button type="submit" class="btn white m-b">Kirim</button>
           
          </form>
        </div>
        
      </div>
      <div class="col-sm-12">
         <a href="{{env('APP_URL')}}/sistem-pengiriman-barang/tu/input-surat-jalan/lihat-surat-jalan"><button class="btn btn-block danger">Lihat surat jalan</button></a>
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