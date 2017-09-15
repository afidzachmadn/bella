@extends('sistem-pengiriman-barang.master.master-gudang')





@section ('konten')
<!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">Lihat Detail Delivery Order</div>
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
      <li class="breadcrumb-item"><a href="{{env('APP_URL')}}/sistem-pengiriman-barang/gudang/input-delivery-order/lihat-delivery-order">Lihat delivery order</a></li>
      <li class="breadcrumb-item active">Lihat detail delivery order</li>
		</ol>
		
</div>
<!-- ------------------------------------------------------------- -->

<div class="padding">
  <div class="col-sm-12">
    <div class="box">
      <div class="box-header">
        <h2>Detail Delivery Order</h2>
        <small>
          Berikut adalah detail delivery order yang telah anda input, detail ini juga yang akan di tampilkan kepada department lain dalam sistem ini.
        </small>
      </div>
    </div>

    <div class="box padding printableArea">
      <div class="text-center"><b><u><h4>Delivery Order</h4></u></b><span><p><i>Nomor: 1</i></p></span></div>
      <div>
      <p>Kepada YTH. xxxxx</p>
      <p>1. Nomor SPPB  : xxxxxx</p>
      <p>2. Penyaluran tahun anggaran : xxxxxx</p>
      <p>3. SUB DIVRE Wilayah 1 Semarang memerintahkan : </p>
      <p style="margin-left:5px;">A. Dasar permohonan nomor : xxxxx</p>
      <p style="margin-left:5px;">B. Tanggal : xxxxxx</p>
      <p style="margin-left:5px;">C. Nomor laklog : xxxxxx</p>
      <p style="margin-left:5px;">D. Untuk menyerahkan dari persediaan kepada : xxxxx</p>
      <p style="margin-left:5px;">E. Guna keperluan : xxxxx</p>
      <p>4. Barang seperti tersebut dibawah ini :</p>
      <p style="margin-left:5px;">A. Nama barang : xxxxxx</p>
      <p style="margin-left:5px;">B. Jenis/kualitas : xxxxxx</p>
      <p style="margin-left:5px;">C. Jumlah (Kg) : xxxx</p>
      <p style="margin-left:5px;">D. Harga satuan (Rp) : xxxxx</p>
      <p style="margin-left:5px;">E. Jumlah satuan (Rp) : xxxxxx</p>
      <p style="margin-left:5px;">F. Keterangan : xxxxxxxx</p>
      <p>5. SPPB ini berlaku sampai tanggal : xxxxxx</p>
      <p>6. Dengan ketentuan :</p>
      <p style="margin-left:5px;">A. Penyerahan xxxxx dengan netto untuk netto diatas alat angkut dimuka pintu gudang.</p>
      <p style="margin-left:5px;">B. Hanya SPPB asli yang berlaku untuk pengeluaran barang tersebut.</p>
      <p style="margin-left:5px;">C. Jika terdapat perubahaan/tambahan dari ketentuan yang tertera di dalam SPPB ini, maka SPPB ini dinyatakan batal/tidak sah.</p>
      </div>

    </div>
  </div>
</div>


<button id="print" class="btn btn-block success" type="button"> <span><i class="fa fa-print"></i> Print</span></button>


@endsection