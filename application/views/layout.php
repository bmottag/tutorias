<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="baseurl" content="<?php echo base_url()?>" />
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css"); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/bower_components/font-awesome/css/font-awesome.min.css"); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/bower_components/Ionicons/css/ionicons.min.css"); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/dist/css/AdminLTE.min.css"); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/dist/css/skins/_all-skins.min.css"); ?>">

  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/bower_components/jvectormap/jquery-jvectormap.css"); ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/bower_components/bootstrap-daterangepicker/daterangepicker.css"); ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"); ?>">
  
<!-- jQuery 3 -->
<script src="<?php echo base_url("assets/bootstrap/bower_components/jquery/dist/jquery.min.js"); ?>"></script>

	<!-- jQuery validate-->
	<script type="text/javascript" src="<?php echo base_url("assets/js/general/general.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/general/jquery.validate.js"); ?>"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


			<?php $this->load->view("template/top_menu"); ?>
			
			<?php $this->load->view("template/left_menu"); ?>
  
			<!-- Start of content -->
			<?php
			if (isset($view) && ($view != '')) {
				$this->load->view($view);
			}
			?>
			<!-- End of content -->
  

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

	
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url("assets/bootstrap/bower_components/jquery-ui/jquery-ui.min.js"); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url("assets/bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"); ?>"></script>

<!-- Sparkline -->
<script src="<?php echo base_url("assets/bootstrap/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"); ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url("assets/bootstrap/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/bootstrap/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url("assets/bootstrap/bower_components/jquery-knob/dist/jquery.knob.min.js"); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url("assets/bootstrap/bower_components/moment/min/moment.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/bootstrap/bower_components/bootstrap-daterangepicker/daterangepicker.js"); ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url("assets/bootstrap/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"); ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url("assets/bootstrap/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"); ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url("assets/bootstrap/bower_components/datatables.net/js/jquery.dataTables.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/bootstrap/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"); ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url("assets/bootstrap/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url("assets/bootstrap/bower_components/fastclick/lib/fastclick.js"); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("assets/bootstrap/dist/js/adminlte.min.js"); ?>"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url("assets/bootstrap/dist/js/demo.js"); ?>"></script>

</body>
</html>