@extends('sistem-pengiriman-barang.master.master-gudang')





@section ('konten')
<!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">Input Delivery Order</div>
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
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-pengiriman-barang/gudang/profile">
                        <span>Profile</span>
                      </a>
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-pengiriman-barang/gudang/setelan">
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
			<li class="breadcrumb-item active">Input delivery order</li>
		</ol>
		
</div>
<!-- ------------------------------------------------------------- -->




<div class="box">
        <div class="box-header">
          <h2>Input Delivery Order</h2>
          <small>Silahkan isi form delivery order yang ada dibawah ini</small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
          <form role="form" class="form-horizontal form-material" id="loginform" action="http://bella.dev/sistem-pengiriman-barang/gudang/input-delivery-order-gudang-proses" method="post">
          {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputEmail1">Kepada</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan nama kepada" required="" name="kepada">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">No SPPB</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan no SPPB"  required="" name="no_sppb">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">No Printlog</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan dasar nomor printlog" required="" name="nomor_printlog">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Penyaluran Tahun Anggaran</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="tahun anggaran" required="" name="tahun_anggaran">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">No Dasar Permohonan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan no dasar permohonan" required="" name="no_dasar_permohonan">
            </div>

            <div class="form-group">
                    <p>Tanggal Dasar Permohonan:</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="datepicker-autoclose" placeholder="tahun/bulan/hari" name="tanggal_dasar_permohonan" required> <span class="input-group-addon"><i class="icon-calender"></i></span> 
                    </div>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">No Dasar Laklog</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan no laklog" required="" name="no_dasar_laklog">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Dari Persediaan Kepada</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="dari persediaan kepada" required="" name="dari_persediaan_kepada">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Guna Keperluan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan guna keperluan" required="" name="guna_keperluan">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Barang</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan nama barang" required="" name="nama_barang">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Jenis Kualitas</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="jenis kualitas" required="" name="jenis_kualitas">
            </div>
            
            <div class="form-group">
               <label for="exampleInputEmail1">Jumlah (Kg)</label>
               <textarea class="form-control" rows="2" name="jumlah" placeholder="jumlah berat barang"></textarea>
            </div>
            
            <div class="form-group">
               <label for="exampleInputEmail1">Harga Satuan (Rp)</label>
               <textarea class="form-control" rows="2" name="harga_satuan" placeholder="harga satuan"></textarea>
            </div>

            <div class="form-group">
               <label for="exampleInputEmail1">Jumlah Harga (Rp)</label>
               <textarea class="form-control" rows="2" name="jumlah_harga" placeholder="jumlah harga barang"></textarea>
            </div>

            <div class="form-group">
                    <p>Berlaku Sampai Tanggal:</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="datepicker-autoclose2" placeholder="tahun/bulan/hari" name="berlaku_sampai_tanggal" required> <span class="input-group-addon"><i class="icon-calender"></i></span> 
                    </div>
            </div>

            <div class="form-group">
               <label for="exampleInputEmail1">Ketentuan</label>
               <textarea class="form-control" rows="2" name="ketentuan" placeholder="ketentuan"></textarea>
            </div>

           
            <button type="submit" class="btn white m-b">Kirim</button>
           
          </form>
        </div>
        
      </div>
      <div class="col-sm-12">
         <a href="http://bella.dev/sistem-pengiriman-barang/gudang/input-delivery-order/lihat-delivery-order"><button class="btn btn-block danger">Lihat delivery order</button></a>
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