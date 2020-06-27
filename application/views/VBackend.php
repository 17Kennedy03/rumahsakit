<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rumah sakit</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('temp/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('temp/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('temp/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('temp/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('temp/dist/css/skins/_all-skins.min.css'); ?>">

 
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>W</b>RS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Web </b>Rumah Sakit</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <!-- Sidebar toggle button-->
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url() ?>assets/images/RS.jpg" class="user-image" alt="Super Admin">
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url() ?>assets/images/RS.jpg" class="User-Image" alt="Super Admin">

                <p>
                  Rumah Sakit                 <!-- <small>Superadmin</small> -->
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="http://localhost/Rumah/index.php/Login" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
  
        </ul>
      </div>

    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

<section class="sidebar">

      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/images/RS.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>  <?php echo $this->session->userdata('username') ?></p>
          <a href="https://images.app.goo.gl/mLo3LnXcSsz2vDtDA"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
<!-- <========================================================================================> -->    
      <ul class="sidebar-menu" data-widget="tree">
       <li class="header">MENU UTAMA</li>
		<?php if ($this->session->userdata('level') == "superadmin"){?>
      
        <li><a href="<?php echo site_url('User/DataUser'); ?>"><i class="fa fa-user"></i> <span>User Login</span></a></li>

        <li><a href="<?php echo site_url('Dokter/DataDokter'); ?>"><i class="fa fa-id-card"></i> <span>Data Dokter</span></a></li>

        <li><a href="<?php echo site_url('Perawat/DataPerawat'); ?>"><i class="fa fa-id-card"></i> <span>Data Perawat</span></a></li>


    <?php }else ($this->session->userdata('level') == "admin") ?>

       <li><a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

       <li><a href="<?php echo site_url('Pasien/DataPasien'); ?>"><i class="fa fa-address-book-o"></i> <span>Data Pasien</span></a></li>

       <li><a href="<?php echo site_url('Kamar/DataKamar'); ?>"><i class="fa fa-bed"></i> <span>Data Ruang Rawat</span></a></li>

       <li><a href="<?php echo site_url('Obat/DataObat'); ?>"><i class="fa fa-book"></i> <span>Data Obat</span></a></li>

       <li><a href="<?php echo site_url('Jadwal/DataJadwal'); ?>"><i class="fa fa-clock-o"></i> <span>Jadwal</span></a></li>

       <li><a href="<?php echo site_url('Spesialis/DataSpesialis'); ?>"><i class="fa fa-list"></i> <span>Spesialis</span></a></li>

       <li><a href="<?php echo site_url('Uang/DataUang'); ?>"><i class="fa fa-money"></i> <span>Keuangan</span></a></li>

       <li><a href="<?php echo site_url('Welcome/Logout'); ?>"><i class="fa fa-arrow-left"></i> <span>Logout</span></a></li>
		<?php  ?>
	  
	  </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
    
    <section class="content">

<?php $this->load->view($content); ?>
     

    </section>
    
      </div>
  


<div class="control-sidebar-bg"></div>
</div> -->
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('temp/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('temp/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('temp/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('temp/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('temp/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('temp/dist/js/demo.js'); ?>"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
