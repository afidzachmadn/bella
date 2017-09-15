@extends('sistem-pengiriman-barang.master.master-gudang')





@section ('konten')
<!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">Lihat Delivery Order</div>
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
			<li class="breadcrumb-item"><a href="{{env('APP_URL')}}/sistem-pengiriman-barang/gudang/input-delivery-order">Input delivery order</a></li>
      <li class="breadcrumb-item active">Lihat delivery order</li>
		</ol>
		
</div>
<!-- ------------------------------------------------------------- -->
<div class="padding">
<div class="col-sm-12">
      <div class="box">
        <div class="box-header">
          <h2>List Delivery Order</h2>
          <small>
            Berikut adalah list delivery order yang telah anda inputkan, untuk mengeditnya silahkan klik tombol edit yang ada di bawah tabel.
          </small>
        </div>
        <table class="table table-striped b-t">
          <thead>
            <tr>
              <th class="text-center">Nomor Delivery order</th>
              <th class="text-center">Lihat</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              

              <form role="form" class="form-horizontal form-material" id="loginform" action="{{url('/sistem-pengiriman-barang/gudang/lihat-detail-delivery-order-gudang-proses')}}" method="post">
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
  <button class="btn btn-block success" data-toggle="modal" data-target="#m-a-a" data-ui-toggle-class="bounce" data-ui-target="#animate">Edit</button>
  <button class="btn btn-block warning" data-toggle="modal" data-target="#m-a-b" data-ui-toggle-class="bounce" data-ui-target="#animate">Hapus</button>
  </br>
</div>







<!-- .modal -->
<div id="m-a-a" class="modal fade animate" data-backdrop="true">
  <div class="modal-dialog" id="animate">
    <div class="modal-content">
      <div class="modal-header">
      	<h5 class="modal-title">Edit Delivery Order</h5>
      </div>
      <div class="modal-body text-center p-lg">
       <form role="form" class="form-horizontal form-material" id="loginform" action="{{url('/sistem-pengiriman-barang/gudang/edit-printlog-gudang-proses')}}" method="post">
        {{ csrf_field() }}

            <div class="form-group">
              <label for="exampleInputEmail1">No </label>
              <input type="text"  name="nomor_delivery_order_yang_akan_diedit" class="form-control" id="exampleInputEmail1" placeholder="masukan nomor delivery order yang akan di edit"  required="">
            </div>
            <hr>
            <hr>
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
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn warning m-b" data-dismiss="modal" style="color:white;">No</button>
        <button type="submit" class="btn success m-b">Kirim</button>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div>
</div>
<!-- / .modal -->

<div id="m-a-b" class="modal fade animate" data-backdrop="true">
  <div class="modal-dialog" id="animate">
    <div class="modal-content">
      <div class="modal-header">
      	<h5 class="modal-title">Hapus Delivery Order</h5>
      </div>
      <div class="modal-body text-center p-lg">
       <form role="form" class="form-horizontal form-material" id="loginform" action="{{url('/sistem-pengiriman-barang/gudang/hapus-delivery-order-gudang-proses')}}" method="post">
        {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputEmail1">Masukan nomor</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nomor delivery order yang akan dihapus" required="" name="no_delivery_order">
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn warning m-b" data-dismiss="modal" style="color:white;">No</button>
        <button type="submit" class="btn success m-b">Hapus</button>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div>
</div>
<!-- / .modal -->












<!-- ############ PAGE END ###################-->

    </div>
  </div>
	<!-- / -->

@endsection