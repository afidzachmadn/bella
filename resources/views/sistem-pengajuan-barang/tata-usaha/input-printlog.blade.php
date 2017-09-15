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
  <!-- Page plugins css -->
  <link href="{{env('APP_URL')}}/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">

  <!-- Color picker plugins css -->
  <link href="{{env('APP_URL')}}/plugins/bower_components/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">

  <!-- Date picker plugins css -->
  <link href="{{env('APP_URL')}}/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

  <!-- Daterange picker plugins css -->
  <link href="{{env('APP_URL')}}/plugins/bower_components/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
  <link href="{{env('APP_URL')}}/plugins/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
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
                <div class="navbar-item pull-left h5" id="pageTitle">Input Print Log</div>
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
      <li class="breadcrumb-item active">Input print-log</li>
		</ol>
		
</div>
<!-- ------------------------------------------------------------- -->



<div class="box">
        <div class="box-header">
          <h2>Input Printlog</h2>
          <small>Isi form dibawah ini sesuai dengan instruksi yang ada</small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
          <form role="form" class="form-horizontal form-material" id="loginform" action="{{url('/sistem-pengajuan-barang/tu/input-printlog-tu-proses')}}" method="post">
          {{ csrf_field() }}

            <div class="form-group">
                    <p>Tanggal Printlog:</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="datepicker-autoclose" placeholder="tahun/bulan/hari" name="dari_tanggal" required> <span class="input-group-addon"><i class="icon-calender"></i></span> 
                    </div>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">No Printlog</label>
              <input type="text"  name="nomor_printlog" class="form-control" id="exampleInputEmail1" placeholder="masukan dasar nomor printlog"  required="">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Untuk</label>
              <input type="text" name="untuk" class="form-control" id="exampleInputEmail1" placeholder="printlog ini ditujukan untuk" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Asal Berita</label>
              <input type="text" name="asal_berita" class="form-control" id="exampleInputEmail1" placeholder="masukan asal berita acara" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Hal</label>
              <input type="text" name="hal" class="form-control" id="exampleInputEmail1" placeholder="tujuan printlog ini" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Jumlah Lembar</label>
              <input type="text"  name="jumlah_lembar" class="form-control" id="exampleInputEmail1" placeholder="Jumlah lembar printlog" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tambahan</label>
              <input type="text" name="tambahan" class="form-control" id="exampleInputEmail1" placeholder="ketikan tambahan lain jika ada" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kode Printlog</label>
              <input type="text" name="kode_printlog" class="form-control" id="exampleInputEmail1" placeholder="masukan kode printlog" required="">
            </div>
             <div class="form-group">
               <label for="exampleInputEmail1">Keterangan (jika ada)</label>
               <textarea class="form-control" rows="2" name="keterangan_1"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Pengirim</label>
              <input type="text" name="pengirim" class="form-control" id="exampleInputEmail1" placeholder="masukan nama pengirim" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Penerima</label>
              <input type="text" name="penerima" class="form-control" id="exampleInputEmail1" placeholder="masukan nama penerima" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kuantum</label>
              <input type="text" name="kuantum" class="form-control" id="exampleInputEmail1" placeholder="kuantum barang yang akan dikirim" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Barang</label>
              <input type="text" name="barang" class="form-control" id="exampleInputEmail1" placeholder="masukan nama barang" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Jenis Barang</label>
              <input type="text" name="jenis_barang" class="form-control" id="exampleInputEmail1" placeholder="masukan jenis barang" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Jumlah Barang</label>
              <input type="text" name="jumlah_barang" class="form-control" id="exampleInputEmail1" placeholder="masukan jenis barang" required="">
            </div>
            <div class="form-group">
               <label for="exampleInputEmail1">Keterangan (jika ada)</label>
               <textarea class="form-control" rows="2" name="keterangan_2"></textarea>
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Tembusan</label>
              <input type="text" name="tembusan" class="form-control" id="exampleInputEmail1" placeholder="tembusan dari" required="">
            </div>
            
            <div class="form-group">
                    <p>Printlog ini Berlaku Sampai:</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="datepicker-autoclose2" placeholder="tahun/bulan/hari" name="sampai_tanggal" required> <span class="input-group-addon"><i class="icon-calender"></i></span> 
                    </div>
            </div>

           
            <button type="submit" class="btn white m-b">Kirim</button>
           
          </form>
        </div>
        
      </div>
      <div class="col-sm-12">
         <a href="{{env('APP_URL')}}/sistem-pengajuan-barang/tu/input-print-log/lihat-printlog"><button class="btn btn-block danger">Lihat printlog</button></a>
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
<!-- Plugin JavaScript -->
<script src="{{env('APP_URL')}}/plugins/bower_components/moment/moment.js"></script>
<!-- Clock Plugin JavaScript -->
<script src="{{env('APP_URL')}}/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="{{env('APP_URL')}}/plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
<script src="{{env('APP_URL')}}/plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
<script src="{{env('APP_URL')}}/plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="{{env('APP_URL')}}/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- Date range Plugin JavaScript -->
<script src="{{env('APP_URL')}}/plugins/bower_components/timepicker/bootstrap-timepicker.min.js"></script>
<script src="{{env('APP_URL')}}/plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script>
        // Clock pickers
        $('#single-input').clockpicker({
            placement: 'bottom'
            , align: 'left'
            , autoclose: true
            , 'default': 'now'
        });
        $('.clockpicker').clockpicker({
            donetext: 'Done'
        , }).find('input').change(function () {
            console.log(this.value);
        });
        $('#check-minutes').click(function (e) {
            // Have to stop propagation here
            e.stopPropagation();
            input.clockpicker('show').clockpicker('toggleView', 'minutes');
        });
        if (/mobile/i.test(navigator.userAgent)) {
            $('input').prop('readOnly', false);
        }
        // Colorpicker
        $(".colorpicker").asColorPicker();
        $(".complex-colorpicker").asColorPicker({
            mode: 'complex'
        });
        $(".gradient-colorpicker").asColorPicker({
            mode: 'gradient'
        });
        // Date Picker
        jQuery('.mydatepicker, #datepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            format: 'yyyy/mm/dd'
            ,autoclose: true
            , todayHighlight: true
        });
        jQuery('#datepicker-autoclose2').datepicker({
            format: 'yyyy/mm/dd'
            ,autoclose: true
            , todayHighlight: true
        });
        jQuery('#date-range').datepicker({
            toggleActive: true
        });
        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true
        });
        // Daterange picker
        $('.input-daterange-datepicker').daterangepicker({
            buttonClasses: ['btn', 'btn-sm']
            , applyClass: 'btn-danger'
            , cancelClass: 'btn-inverse'
        });
        $('.input-daterange-timepicker').daterangepicker({
            timePicker: true
            , format: 'DD/MM/YYYY h:mm A'
            , timePickerIncrement: 30
            , timePicker12Hour: true
            , timePickerSeconds: false
            , buttonClasses: ['btn', 'btn-sm']
            , applyClass: 'btn-danger'
            , cancelClass: 'btn-inverse'
        });
        $('.input-limit-datepicker').daterangepicker({
            format: 'DD/MM/YYYY'
            , minDate: '01/06/2015'
            , maxDate: '30/06/2015'
            , buttonClasses: ['btn', 'btn-sm']
            , applyClass: 'btn-danger'
            , cancelClass: 'btn-inverse'
            , dateLimit: {
                days: 6
            }
        });
</script>
</body>
</html>
