<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
date_default_timezone_set('Asia/Kuala_Lumpur'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="raixer">
    <link rel="shortcut icon" href="<?= base_url() ?>resource/img/favicon.png">
	<title><?= $title ?>Sistem Kasir</title>
    
    <!-- CSS -->
    <link href="<?= base_url() ?>resource/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="<?= base_url() ?>resource/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>resource/css/rxr_theme.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>	
 	<!-- rxr navbar -->
    <nav class="navbar navbar-fixed-top navbar-inverse noprint" role="navigation">
      <div class="container">
        <!-- logo -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#rxr-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand" href="<?= site_url() ?>"><?= img('resource/img/topaz_logo.png'); ?></a>-->
        </div>
    
        <!-- main menu -->
        <div class="collapse navbar-collapse" id="rxr-navbar-collapse">
          <ul class="nav navbar-nav">
            <li><?= anchor('sales',"<i class='fa fa-fw fa-shopping-cart'></i> Kasir") ?></li>
            <li><?= anchor('item',"<i class='fa fa-fw fa-archive'></i> Stok") ?></li>
            <li><?= anchor('sales/history',"<i class='fa fa-fw fa-shopping-bag'></i> Penjualan") ?></li>
            
            <?php if($this->session->userdata('login_level') >= 2 ) { ?>            
            <li><?= anchor('user',"<i class='fa fa-fw fa-users'></i> User") ?></li>
            <?php } ?>
            <?php if($this->session->userdata('login_level') >= 3 ) { ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class='fa fa-fw fa-copy'></i> Laporan <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><?= anchor('laporan/pembelian',"<i class='fa fa-fw fa-file'></i> Pembelian") ?></li>
                <li><?= anchor('laporan/laba',"<i class='fa fa-fw fa-file'></i> Laba") ?></li>
              </ul>
            </li>
            <li><?= anchor('setting',"<i class='fa fa-fw fa-wrench'></i> Setting") ?></li>
            <?php } ?>
          </ul>
          
          <!-- right menu -->
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $this->session->userdata('login_username') ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><?= anchor('profile',"<i class='fa fa-fw fa-user'></i> Profile") ?></li>
                <li class="divider"></li>
                <li><?= anchor('login/logout',"<i class='fa fa-fw fa-power-off'></i> Logout") ?></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav><!-- */navbar -->
    
    <div id="page-wrapper" class="container">
      <div class="container-fluid">         
        <!-- content -->
        <?php $this->load->view($load_view); ?>
        <!-- /.content -->          
      </div><!-- /.container-fluid -->            
    </div><!-- /#page-wrapper -->

<!-- JS -->
<?php $this->load->view('part/script_load'); ?>

</body>
</html>