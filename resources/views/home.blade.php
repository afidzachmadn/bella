<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Selamat datang di Beranda Sistem PT. Jasa Prima Logistics</title>
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

 

  <!-- content -->
  <div id="content" class="app-content" role="main">
    <div class="app-body">

<!-- ############ PAGE START-->

<div class="row-col indigo h-v" style="background:#5f53f7;">
  <div class="padding">
  <div class="p-y-lg clearfix">
    <div class="text-center">
      <h2 class="_700 m-b">Selamat datang di Portal Sistem</h2>
      <h5 class="m-b-md">Pilih sistem untuk melanjutkan..</h5>
    </div>
  </div>
  <div class="p-x-lg">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="row no-gutter">

          <div class="col-sm-3">
            <div class="box">
              <div class="box-body text-center r-t primary">
                <h6 class="text-u-c p-v-sm m-a-0 m-t">Sistem Pengajuan Barang</h6>
                <h3 class="m-a-0 m-l m-v">
                  <span class="text-2x">SPB</span>
                </h3>
              </div>
              <div class="text-center p-a-md">
                <a href="{{env('APP_URL')}}/sistem-pengajuan-barang/login" class="btn btn-block btn-lg primary">Masuk</a>
              </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="box">
              <div class="box-body text-center r-t success">
                <h6 class="text-u-c m-a-0 m-t">Sistem Pengiriman Barang</h6>
                <h3 class="m-a-0 m-l m-v">
                  <span class="text-2x">SPIB</span>
                </h3>
              </div>
              <div class="text-center p-a-md">
                <a href="{{env('APP_URL')}}/sistem-pengiriman-barang/gudang/dashboard" class="btn btn-block btn-lg success">Masuk</a>
              </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="box">
              <div class="box-body text-center r-t danger">
                <h6 class="text-u-c m-a-0 m-t">Sistem Pelaporan</h6>
                <h3 class="m-a-0 m-l m-v">
                  <span class="text-2x">SP</span>
                </h3>
              </div>
              
              <div class="text-center p-a-md">
                <a href="{{env('APP_URL')}}/sistem-pelaporan-barang/korlap/dashboard" class="btn btn-block btn-lg danger">Masuk</a>
              </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="box">
              <div class="box-body text-center r-t warning">
                <h6 class="text-u-c m-a-0 m-t">Sistem Keuangan</h6>
                <h3 class="m-a-0 m-l m-v">
                  <span class="text-2x">SK</span>
                </h3>
              </div>
              <div class="text-center p-a-md">
                <a href="{{env('APP_URL')}}/sistem-keuangan-barang/keuangan/dashboard" class="btn btn-block btn-lg warning">Masuk</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
</div>



<!-- ############ PAGE END-->

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
