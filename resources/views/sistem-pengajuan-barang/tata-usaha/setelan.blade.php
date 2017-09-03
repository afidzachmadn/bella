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
			<li class="breadcrumb-item active">Setelan</li>
		</ol>
		
</div>
<!-- ------------------------------------------------------------- -->


<div class="row-col">
  
  <div class="col-sm-9 col-lg-10 light bg">
    <div class="tab-content pos-rlt">
      <div class="tab-pane active" id="tab-1">
        <div class="p-a-md b-b _600">Setelan Profile</div>
        <form role="form" class="p-a-md col-md-6">
          <div class="form-group">
            <label>Ganti foto profile</label>
            <div class="form-file">
              <input type="file">
              <button class="btn white">Upload foto baru</button>
            </div>
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>NIK</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>E-mail</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>No-HP</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Bagian</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Jabatan</label>
            <input type="text" class="form-control">
          </div>
          <button type="submit" class="btn btn-info m-t">Update</button>
        </form>
      </div>
      <div class="tab-pane" id="tab-2">
        <div class="p-a-md b-b _600">Account settings</div>
        <form role="form" class="p-a-md col-md-6">
          <div class="form-group">
            <label>Client ID</label>
            <input type="text" disabled class="form-control" value="d6386c0651d6380745846efe300b9869">
          </div>
          <div class="form-group">
            <label>Secret Key</label>
            <input type="text" disabled class="form-control" value="3f9573e88f65787d86d8a685aeb4bd13">
          </div>
          <div class="form-group">
            <label>App Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>App URL</label>
            <input type="text" class="form-control">
          </div>
          <button type="submit" class="btn btn-info m-t">Update</button>
        </form>
      </div>
      <div class="tab-pane" id="tab-3">
        <div class="p-a-md b-b _600">Emails</div>
        <form role="form" class="p-a-md col-md-6">
          <p>E-mail me whenever</p>
          <div class="checkbox">
            <label class="ui-check">
              <input type="checkbox"><i class="dark-white"></i> Anyone posts a comment
            </label>
          </div>
          <div class="checkbox">
            <label class="ui-check">
              <input type="checkbox"><i class="dark-white"></i> Anyone follow me
            </label>
          </div>
          <div class="checkbox">
            <label class="ui-check">
              <input type="checkbox"><i class="dark-white"></i> Anyone send me a message
            </label>
          </div>
          <div class="checkbox">
            <label class="ui-check">
              <input type="checkbox"><i class="dark-white"></i> Anyone invite me to group
            </label>
          </div>
          <button type="submit" class="btn btn-info m-t">Update</button>
        </form>
      </div>
      <div class="tab-pane" id="tab-4">
        <div class="p-a-md b-b _600">Notifications</div>
        <form role="form" class="p-a-md col-md-6">
          <p>Notice me whenever</p>
          <div class="checkbox">
            <label class="ui-check">
              <input type="checkbox"><i class="dark-white"></i> Anyone seeing my profile page
            </label>
          </div>
          <div class="checkbox">
            <label class="ui-check">
              <input type="checkbox"><i class="dark-white"></i> Anyone follow me
            </label>
          </div>
          <div class="checkbox">
            <label class="ui-check">
              <input type="checkbox"><i class="dark-white"></i> Anyone send me a message
            </label>
          </div>
          <div class="checkbox">
            <label class="ui-check">
              <input type="checkbox"><i class="dark-white"></i> Anyone invite me to group
            </label>
          </div>
          <button type="submit" class="btn btn-info m-t">Update</button>
        </form>
      </div>
      <div class="tab-pane" id="tab-5">
        <div class="p-a-md b-b _600">Security</div>
        <div class="p-a-md">
          <div class="clearfix m-b-lg">
            <form role="form" class="col-md-6 p-a-0">
              <div class="form-group">
                <label>Old Password</label>
                <input type="password" class="form-control">
              </div>
              <div class="form-group">
                <label>New Password</label>
                <input type="password" class="form-control">
              </div>
              <div class="form-group">
                <label>New Password Again</label>
                <input type="password" class="form-control">
              </div>
              <button type="submit" class="btn btn-info m-t">Update</button>
            </form>
          </div>

          <p><strong>Delete account?</strong></p>
          <button type="submit" class="btn btn-danger m-t" data-toggle="modal" data-target="#modal">Delete Account</button>

        </div>
      </div>
    </div>
  </div>
</div>


<!-- .modal -->
<div id="modal" class="modal fade animate black-overlay" data-backdrop="false">
  <div class="row-col h-v">
    <div class="row-cell v-m">
      <div class="modal-dialog modal-sm">
        <div class="modal-content flip-y">
          <div class="modal-body text-center">          
            <p class="p-y m-t"><i class="fa fa-remove text-warning fa-3x"></i></p>
            <p>Are you sure to delete your account?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn white p-x-md" data-dismiss="modal">No</button>
            <button type="button" class="btn btn-danger p-x-md" data-dismiss="modal">Yes</button>
          </div>
        </div><!-- /.modal-content -->
      </div>
    </div>
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
