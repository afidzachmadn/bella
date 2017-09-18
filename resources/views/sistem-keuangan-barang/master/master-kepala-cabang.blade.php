<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Sistem Pengiriman Barang - PT. Jasa Prima Logistics</title>
  <meta name="description" content="Responsive, Bootstrap, BS4" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-stakeuangans-barstyle" content="black-translucent">
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

  <!-- Dropzone css -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside fade nav-dropdown cyan-500">
    <!-- fluid app aside -->
    <div class="navside dk" data-layout="column">
      <div class="navbar no-radius">
        <!-- brand -->
        <a href="index.html" class="navbar-brand">
        	<div data-ui-include="'images/logo.svg'"></div>
        	<img src="images/logo.png" alt="." class="hide">
        	<span class="hidden-folded inline">SK</span>
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
                <a href="{{env('APP_URL')}}/sistem-keuangan-barang/kepala-cabang/dashboard" class="b-danger">
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
                  <span class="nav-text">Lihat data</span>
                </a>
                <ul class="nav-sub nav-mega nav-mega-3">
                  
                  <li>
                    <a href="{{env('APP_URL')}}/sistem-keuangan-barang/kepala-cabang/lihat-surat-penagihan" >
                      <span class="nav-text">Lihat Surat Penagihan</span>
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
  
  @yield('konten')
	
	

  
  

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
 <!--<script src="{{env('APP_URL')}}/scripts/app.js"></script> -->
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

<!-- Dropzone Plugin JavaScript -->
<script src="{{env('APP_URL')}}/plugins/bower_components/dropzone-master/dist/dropzone.js"></script>
    <!--Style Switcher -->

</body>
</html>
