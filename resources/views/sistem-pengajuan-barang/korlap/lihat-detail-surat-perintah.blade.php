<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Sistem Pengajuan Barang - PT. Jasa Prima Logistics</title>
  <meta name="description" content="Responsive, Bootstrap, BS4" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="{{env('APP_URL')}}/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="{{env('APP_URL')}}/images/logo.png">
  
  <!-- style -->
  <link rel="stylesheet" href="{{env('APP_URL')}}/css/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="{{env('APP_URL')}}/css/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="{{env('APP_URL')}}/css/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="{{env('APP_URL')}}/css/material-design-icons/material-design-icons.css" type="text/css" />
  <link rel="stylesheet" href="{{env('APP_URL')}}/css/ionicons/css/ionicons.min.css" type="text/css" />
  <link rel="stylesheet" href="{{env('APP_URL')}}/css/simple-line-icons/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="{{env('APP_URL')}}/css/bootstrap/dist/css/bootstrap.min.css" type="text/css" />

  <!-- build:css css/styles/app.min.css -->
  <link rel="stylesheet" href="{{env('APP_URL')}}/css/styles/app.css" type="text/css" />
  <link rel="stylesheet" href="{{env('APP_URL')}}/css/styles/style.css" type="text/css" />
  <!-- endbuild -->
	<link rel="stylesheet" href="{{env('APP_URL')}}/css/styles/font.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/theme/accent.css">
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside fade nav-dropdown grey-700">
    <!-- fluid app aside -->
    <div class="navside dk" data-layout="column">
      <div class="navbar no-radius">
        <!-- brand -->
        <a href="index.html" class="navbar-brand">
        	<div data-ui-include="'images/logo.svg'"></div>
        	<img src="images/logo.png" alt="." class="hide">
        	<span class="hidden-folded inline">SPB</span>
        </a>
        <!-- / brand -->
      </div>
      <div data-flex class="hide-scroll">
          <nav class="scroll nav-stacked nav-stacked-rounded nav-color">
            
            <ul class="nav" data-ui-nav>
              <li class="nav-header hidden-folded">
                <span class="text-xs">Menu Utama</span>
              </li>
              <li>
                <a href="{{env('APP_URL')}}/sistem-pengajuan-barang/korlap/dashboard" class="b-danger">
                  <span class="nav-icon text-white no-fade">
                    <i class="ion-filing"></i>
                  </span>
                  <span class="nav-text">Dashboard</span>
                </a>
              </li>
              
        
              
              <li class="nav-header hidden-folded m-t">
                <span class="text-xs">Menu Pilihan</span>
              </li>
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-icon">
                    <i class="ion-plus-circled"></i>
                  </span>
                  <span class="nav-text">Lihat data yang masuk</span>
                </a>
                <ul class="nav-sub nav-mega nav-mega-3">
                  <li>
                    <a href="{{env('APP_URL')}}/sistem-pengajuan-barang/korlap/lihat-surat-perintah" >
                      <span class="nav-text">Lihat surat perintah </span>
                    </a>
                  </li>
                  <li>
                    <a href="{{env('APP_URL')}}/sistem-pengajuan-barang/korlap/lihat-printlog" >
                      <span class="nav-text">Lihat print-log</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{env('APP_URL')}}/sistem-pengajuan-barang/korlap/lihat-bast" >
                      <span class="nav-text">Lihat BAST</span>
                    </a>
                  </li>
                  
                </ul>
              </li>

            </ul>
          </nav>
      </div>
      
    </div>
  </div>
  <!-- / -->
  
  <!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">Lihat Detail Surat Perintah</div>
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
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-pengajuan-barang/korlap/profile">
                        <span>Profile</span>
                      </a>
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-pengajuan-barang/korlap/setelan">
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
			<li class="breadcrumb-item"><a href="{{env('APP_URL')}}/sistem-pengajuan-barang/korlap/lihat-surat-perintah">Lihat surat perintah</a></li>
            <li class="breadcrumb-item active">Lihat detail surat perintah</li>

		</ol>
		
</div>
<!-- ------------------------------------------------------------- -->



<div class="padding">
  <div class="col-sm-12">
    <div class="box">
      <div class="box-header">
        <h2>Detail Surat Pengadaan Barang</h2>
        <small>
          Berikut adalah detail surat pengadaan barang yang telah anda input, detail ini juga yang akan di tampilkan kepada department lain dalam sistem ini.
        </small>
      </div>
    </div>
  </div>
</div>

<div class="padding printableArea">
  <div class="col-sm-12">
    <div class="box">
      <div class="text-center"><b><u><h2>INTRUKSI ANGKUTAN</h2></u></b><span><p><i>Nomor: {{$isi -> nomor_surat}}</i></p></span></div>
      
      <div class="box col-sm-6 padding"><p><b>DASAR PERATURAN :</b></br>
      1. Peraturan Direksi Perum BULOG nomor:&nbsp&nbsp&nbsp{{$isi -> nomor_peraturan_direksi}}</br>
      2. Printlog Perum BULOG nomor:&nbsp&nbsp&nbsp{{$isi -> nomor_printlog}}</br>
      3. Kode Printlog:&nbsp&nbsp&nbsp{{$isi -> kode_printlog}}</br>
      4. Surat Penetapan Pemenang nomor:&nbsp&nbsp&nbsp{{$isi -> nomor_surat_keputusan}}</br>
      5. Kontrak Jasa Angkut nomor:&nbsp&nbsp&nbsp{{$isi -> no_kja}}</br>
      </p>
      </div>

      <div class="box col-sm-6 padding"><p><b>DETAIL PENGIRIMAN :</b></br>
      1. Ditunjukan Kepada:&nbsp&nbsp&nbsp{{$isi -> kepada}}</br>
      2. Untuk Mengangkut:&nbsp&nbsp&nbsp{{$isi -> untuk_mengangkut}}</br>
      3. Dari:&nbsp&nbsp&nbsp{{$isi -> dari}}</br>
      4. Tujuan:&nbsp&nbsp&nbsp{{$isi -> tujuan}}</br>
     
      </p>
      </div>

      <div class="box col-sm-12 padding"><p><b>KETENTUAN PENGIRIMAN :</b></p>
      <p>A. Alat angkut yang digunakan {{$isi -> alat_angkut}}.</p>
      <p>B. Pelaksanaan angkut dilakukan sesuai dengan ketentuan peraturan direksiperum BULOG No.{{$isi -> nomor_peraturan_direksi}} tentang pedoman Pengadaan Jasa Angkut Barang dalam Negeri di lingkungan perum BULOG.</p>
      <p>C. Menghubungi dan melaporkan rencana dan pelaksanaan angkutan ini kepada Drive/Sub-Drive pengirim dan penerima.</p>
      <p>D. Menghubungi perusahaan pelayaran untuk angkatan laut, DLLAJR untuk angkatan darat serta dokumen-dokumen yang diperlukan untuk pelaksanaan angkutan ini.</p>
      <p>E. Segala dokumen yang diperlukan untuk penylenggaraan angkutan, harus sudah diselesaikan selambat lambatnya dalam waktu 83 (delapan puluh tiga) hari kalender terhitung mulai tanggal intruksi angkutan ini.</p>
      <p>F. Khusus untuk angkutan laut, pengangkut diwajibkan mengusahakan sertifikasi kebersihan kapal yang dibuat oleh surveyer.</p>
      <p>G. Biaya dan jasa angkut akan dibayarkan sesuai jumlah barang yang diangkut.</p>
      <p>H. Pengangkut turut bertanggung jawab penuh atas kekurangan, kesusutan dan kerusakan barang yang terjadi selama pelaksanaan angkutan berlangsung.</p>
       <p class="text-center"><b>Intruksi ini supaya dilaksanakan sebaik-baiknya dengan penuh tanggung jawab.</b></p>
      </div>

     
      </div>

     
    
  </div>
  
</div>


<button id="print" class="btn btn-block success" type="button"> <span><i class="fa fa-print"></i> Print</span></button>









<!-- ############ PAGE END ###################-->

    </div>
  </div>
	<!-- / -->
	
	

  
  

<!-- ######################################### LAYOUT END ##############################-->
  </div>

<!-- build:js scripts/app.min.js -->
<!-- jQuery -->
  <script src="{{env('APP_URL')}}/libs/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="{{env('APP_URL')}}/libs/tether/dist/js/tether.min.js"></script>
  <script src="{{env('APP_URL')}}/libs/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
  <script src="{{env('APP_URL')}}/libs/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="{{env('APP_URL')}}/libs/PACE/pace.min.js"></script>
  <script src="{{env('APP_URL')}}/libs/jquery-pjax/jquery.pjax.js"></script>
  <script src="{{env('APP_URL')}}/libs/blockUI/jquery.blockUI.js"></script>
  <script src="{{env('APP_URL')}}/libs/jscroll/jquery.jscroll.min.js"></script>

  <script src="{{env('APP_URL')}}/scripts/config.lazyload.js"></script>
  <script src="{{env('APP_URL')}}/scripts/ui-load.js"></script>
  <script src="{{env('APP_URL')}}/scripts/ui-jp.js"></script>
  <script src="{{env('APP_URL')}}/scripts/ui-include.js"></script>
  <script src="{{env('APP_URL')}}/scripts/ui-device.js"></script>
  <script src="{{env('APP_URL')}}/scripts/ui-form.js"></script>
  <script src="{{env('APP_URL')}}/scripts/ui-modal.js"></script>
  <script src="{{env('APP_URL')}}/scripts/ui-nav.js"></script>
  <script src="{{env('APP_URL')}}/scripts/ui-list.js"></script>
  <script src="{{env('APP_URL')}}/scripts/ui-screenfull.js"></script>
  <script src="{{env('APP_URL')}}/scripts/ui-scroll-to.js"></script>
  <script src="{{env('APP_URL')}}/scripts/ui-toggle-class.js"></script>
  <script src="{{env('APP_URL')}}/scripts/ui-taburl.js"></script>
 <!-- <script src="scripts/app.js"></script> -->
  <script src="{{env('APP_URL')}}/scripts/ajax.js"></script>
<!-- endbuild -->
<script src="{{env('APP_URL')}}/scripts/jquery.PrintArea.js"></script>
  <script>
        $(document).ready(function () {
            $("#print").click(function () {
                var mode = 'iframe'; //popup
                var close = mode == "popup";
                var options = {
                    mode: mode
                    , popClose: close
                };
                $("div.printableArea").printArea(options);
            });
        });
    </script>
</body>
</html>
