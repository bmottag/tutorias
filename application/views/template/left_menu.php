  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url("assets/bootstrap/dist/img/user2-160x160.jpg"); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->firstname; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
		
		<li><a href="https://adminlte.io/docs"><i class="fa fa-dashboard"></i> <span>Tutorías</span></a></li>
		
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i> <span>Parámetros</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Periodos</a></li>
            <li><a href="<?php echo base_url("parametros/lugares"); ?>"><i class="fa fa-circle-o"></i> Lugares</a></li>
			<li><a href="<?php echo base_url("parametros/programas"); ?>"><i class="fa fa-circle-o"></i> Programas</a></li>
			<li><a href="<?php echo base_url("parametros/asignaturas"); ?>"><i class="fa fa-circle-o"></i> Asignaturas</a></li>
			<li><a href="<?php echo base_url("parametros/temas"); ?>"><i class="fa fa-circle-o"></i> Temas</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>