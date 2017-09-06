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
                <a href="{{env('APP_URL')}}/sistem-pengajuan-barang/tu/dashboard" class="b-danger">
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
                  <span class="nav-text">Input data</span>
                </a>
                <ul class="nav-sub nav-mega nav-mega-3">
                  <li>
                    <a href="{{env('APP_URL')}}/sistem-pengajuan-barang/tu/input-surat-perintah" >
                      <span class="nav-text">Input surat perintah</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{env('APP_URL')}}/sistem-pengajuan-barang/tu/input-print-log" >
                      <span class="nav-text">Input print-log</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{env('APP_URL')}}/sistem-pengajuan-barang/tu/input-bast" >
                      <span class="nav-text">Input BAST</span>
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
                <div class="navbar-item pull-left h5" id="pageTitle">Input Surat Perintah</div>
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
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-pengajuan-barang/tu/profile">
                        <span>Profile</span>
                      </a>
                      <a class="dropdown-item" href="{{env('APP_URL')}}/sistem-pengajuan-barang/tu/setelan">
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
			<li class="breadcrumb-item">Input data</li>
            <li class="breadcrumb-item"><a href="{{env('APP_URL')}}/sistem-pengajuan-barang/tu/input-surat-perintah">Input surat perintah</a></li>
            <li class="breadcrumb-item active">Lihat surat perintah</li>
		</ol>
		
</div>
<!-- ------------------------------------------------------------- -->
<div class="padding">
<div class="col-sm-12">
      <div class="box">
        <div class="box-header">
          <h2>List Surat Perintah Pengadaan Barang</h2>
          <small>
            Berikut adalah list surat perintah pengadaan barang yang telah anda inputkan, untuk mengeditnya silahkan klik tombol edit yang ada di bawah tabel.
          </small>
        </div>
        <table class="table table-striped b-t">
          <thead>
            <tr>
              <th class="text-center">Nomor Surat</th>
              <th class="text-center">Lihat Surat</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach($cek_list as $CekList) 
            <tr>
              

              <form role="form" class="form-horizontal form-material" id="loginform" action="{{url('/sistem-pengajuan-barang/tu/lihat-detail-surat-perintah-tu-proses')}}" method="post">
              {{ csrf_field() }}
              <td>
              <p class="text-center">{{$CekList -> nomor_surat}}</p>
              <input style="visibility:hidden" type="text" class="form-control text-center" id="exampleInputEmail1" required="" name="nomor_surat" value="{{$CekList -> nomor_surat }}"></td>
              <td class="text-center"><button type="submit" class="btn btn-block danger">Lihat</button></td>
              </form>
             
            </tr>
            @endforeach
           
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
      	<h5 class="modal-title">Edit Surat Pengadaan Barang</h5>
      </div>
      <div class="modal-body text-center p-lg">
        <form role="form" class="form-horizontal form-material" id="loginform" action="{{url('/sistem-pengajuan-barang/tu/edit-surat-perintah-tu-proses')}}" method="post">
        {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputEmail1">Masukan nomor surat yang akan di edit</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nomor surat" required="" name="no_surat_pilihan">
            </div>
            <hr>
                <div><p><b>Masukan data baru:</b></p></div>
            <hr>
            
            <div class="form-group">
              <label for="exampleInputEmail1">No</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan nomor surat baru" required="" name="nomor_surat">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">No Peraturan Direksi</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan dasar nomor peraturan direksi"  required="" name="nomor_peraturan_direksi">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">No Printlog</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan dasar nomor printlog" required="" name="nomor_printlog">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Kode Printlog</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan dasar kode printlog" required="" name="kode_printlog">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">No Surat Keputusan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan nomor dasar surat keputusan" required="" name="nomor_surat_keputusan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">No KJA</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan nomor dasar KJA" required="" name="no_kja">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kepada</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan nama penerima surat ini" required="" name="kepada">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Untuk Mengangkut</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan nama/jenis barang yang akan di angkut" required="" name="untuk_mengangkut">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Dari</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan nama kota/daerah dimana barang berasal" required="" name="dari">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tujuan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan nama kota/daerah dimana barang dikirim" required="" name="tujuan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alat Angkit</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan nama alat angkut yang akan digunakan" required="" name="alat_angkut">
            </div>
            <div class="form-group">
               <label for="exampleInputEmail1">Keterangan (jika ada)</label>
               <textarea class="form-control" rows="2" name="keterangan"></textarea>
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


<!-- .modal -->
<div id="m-a-b" class="modal fade animate" data-backdrop="true">
  <div class="modal-dialog" id="animate">
    <div class="modal-content">
      <div class="modal-header">
      	<h5 class="modal-title">Hapus Surat Perintah</h5>
      </div>
      <div class="modal-body text-center p-lg">
       <form role="form" class="form-horizontal form-material" id="loginform" action="{{url('/sistem-pengajuan-barang/tu/hapus-surat-perintah-tu-proses')}}" method="post">
        {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputEmail1">Masukan nomor surat yang akan hapus</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nomor surat" required="" name="nomor_surat">
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
</body>
</html>
