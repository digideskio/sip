<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta charset="utf-8" />
  
  
  <!-- Title -->
  <title><?=$title?> | <?=title()?> (<?=singkatan()?>)</title>

  <!-- Favicon -->
  <link rel="icon" href="<?=base_URL()?>_assets/favicon/<?=favicon()?>" sizes="32x32">

  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

  <!-- bootstrap & fontawesome -->
  <link rel="stylesheet" href="<?=base_URL()?>_backend/aceadmin/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?=base_URL()?>_assets/fonts/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- page specific plugin styles -->

  <!-- text fonts -->
  <link rel="stylesheet" href="<?=base_URL()?>_assets/fonts/font-google/sans-google.css" />

  <!-- ace styles -->
  <link rel="stylesheet" href="<?=base_URL()?>_backend/aceadmin/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?=base_URL()?>_backend/aceadmin/css/ace-part2.min.css" class="ace-main-stylesheet" />
  <![endif]-->
  <link rel="stylesheet" href="<?=base_URL()?>_backend/aceadmin/css/ace-skins.min.css" />
  <link rel="stylesheet" href="<?=base_URL()?>_backend/aceadmin/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?=base_URL()?>_backend/aceadmin/css/ace-ie.min.css" />
  <![endif]-->

  <!-- inline styles related to this page -->

  <!-- ace settings handler -->
  <script src="<?=base_URL()?>_backend/aceadmin/js/ace-extra.min.js"></script>

  <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="<?=base_URL()?>_backend/aceadmin/js/html5shiv.min.js"></script>
    <script src="<?=base_URL()?>_backend/aceadmin/js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="no-skin" onload="tampilkanwaktu(); setInterval('tampilkanwaktu()', 1000);">
  <div id="navbar" class="navbar responsive navbar-default ace-save-state">
      <?php include "main-header.php"; ?>
  </div>

  <div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
      try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <div id="sidebar" class="sidebar responsive ace-save-state">
      <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
      </script>

      <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <?php include "main-sidebar.php"; ?>
      </div><!-- /.sidebar-shortcuts -->

      <ul class="nav nav-list">
        <?php include "main-menu.php"; ?>
      </ul><!-- /.nav-list -->

      <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
      </div>
    </div>

    <div class="main-content">
      <div class="main-content-inner">
        <div class="breadcrumbs responsive ace-save-state" id="breadcrumbs">
          <ul class="breadcrumb">
           <?php include "main-title.php"; ?>
          </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
          <div class="ace-settings-container" id="ace-settings-container">
            <?php include "main-setting.php"; ?>
          </div><!-- /.ace-settings-container -->

          <div class="page-header">
            <?php include "main-breadcrumb.php"; ?>
          </div><!-- /.page-header -->

          <!-- notifikasi -->
          <?php
            if ($this->session->flashdata('simpan')) {
              echo '<div class="alert alert-block alert-success" id="al">
                      <strong><i class="ace-icon fa fa-check"></i>&nbsp; BERHASIL</strong><br> '.$this->session->flashdata('simpan').'
                  </div>';

            } else if ($this->session->flashdata('gagal')) {
              echo '<div class="alert alert-block alert-danger" id="al">
                      <strong><i class="ace-icon fa fa-ban"></i>&nbsp; GAGAL</strong><br> '.$this->session->flashdata('gagal').'
                  </div>';

            } else if ($this->session->flashdata('salah')) {
              echo '<div class="alert alert-block alert-warning" id="al">
                      <strong><i class="ace-icon fa fa-warning"></i>&nbsp; KESALAHAN</strong><br> '.$this->session->flashdata('salah').'
                  </div>';
            }
          ?>

          <div class="row">
            <div class="col-xs-12">
              <!-- PAGE CONTENT BEGINS -->
                <?=$contents?>
              <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.page-content -->
      </div>
    </div><!-- /.main-content -->

    <div class="footer">
      <?php include "main-footer.php"; ?>
    </div>

    <a href="javascript:void(0)" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
      <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
  </div><!-- /.main-container -->

  <!--[if !IE]> -->
  <script src="<?=base_URL()?>_backend/aceadmin/js/jquery-2.1.4.min.js"></script>

  <!-- <![endif]-->
  <!--[if IE]>
  <script src="<?=base_URL()?>_backend/aceadmin/js/jquery-1.11.3.min.js"></script>
  <![endif]-->
  <script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='<?=base_URL()?>_backend/aceadmin/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
  </script>
  <script src="<?=base_URL()?>_backend/aceadmin/js/bootstrap.min.js"></script>

  <!-- ace scripts -->
  <script src="<?=base_URL()?>_backend/aceadmin/js/ace-elements.min.js"></script>
  <script src="<?=base_URL()?>_backend/aceadmin/js/ace.min.js"></script>

  <!-- Jam -->
  <script type="text/javascript">        
  function tampilkanwaktu() {
      var waktu = new Date();
      var sh = waktu.getHours() + "";
      var sm = waktu.getMinutes() + "";
      var ss = waktu.getSeconds() + "";
      document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
  }
</script>

  <!-- Notifikasi -->
  <script>
      $("#al").fadeTo(3000, 500).slideUp(500, function() {
        $("#al").alert('close');
      });
  </script>

</body>
</html>
