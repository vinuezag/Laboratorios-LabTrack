 <?php 
if (strlen(session_id())<1) 
  session_start();

  ?>
 <!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LABORATORIOS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="../public/css/font-awesome.min.css">

  <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../public/css/_all-skins.min.css">
  <!-- Morris chart --><!-- Daterange picker -->

<!-- DATATABLES-->
<link rel="stylesheet" href="../public/datatables/jquery.dataTables.min.css">
<link rel="stylesheet" href="../public/datatables/buttons.dataTables.min.css">
<link rel="stylesheet" href="../public/datatables/responsive.dataTables.min.css">
<link rel="stylesheet" href="../public/css/bootstrap-select.min.css">
<link rel="stylesheet" href="../public/css/daterangepicker.css">
</head>
<body class="hold-transition skin-blue sidebar-mini " >

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="escritorio.php" class="logo" >
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><font size="4">=></font></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><font size="4">MENU</font></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span><font size="4" style="color:#FFF">LABORATORIOS</font></span>
        
      </a>
      
      <div class="navbar-custom-menu">
       
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="hidden-xs"><?php echo $_SESSION['usu_nombre']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
             
                <p>
                  IST17J
                  <small>Noviembre 2021</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
  
                </div>
                <div class="pull-right">
                  <a href="../ajax/usuario.php?op=salir" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
</header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
  
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
      <ul class="sidebar-menu" data-widget="tree">

<br>
               <?php 

if ($_SESSION['Actas']==0) {
  echo ' <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Encargado de Laboratorio</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Reservas</a></li>           
            <li><a href=""><i class="fa fa-circle-o"></i> Historial</a></li>
			 <li><a href=""><i class="fa fa-circle-o"></i> % Ocupación Aulas</a></li>
			<li><a href=""><i class="fa fa-circle-o"></i> Horarios Niveles</a></li>         
			<li><a href=""><i class="fa fa-circle-o"></i> Crono</a></li>         
          </ul>
        </li>';
}
        ?>
               
	<?php
//Menu de opciones para el usuario de Administrador
if ($_SESSION['Activos']==1) {
  echo ' <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Opciones de Docente xxxx</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="primera.php"><i class="fa fa-circle-o"></i> Solicitar Mantenimiento de Computador</a></li>  
		   <li><a href="primera.php"><i class="fa fa-circle-o"></i> Solicitar Instalación de Software</a></li>
		   <li><a href="primera.php"><i class="fa fa-circle-o"></i> Reservar Laboratorio</a></li>
		   <li><a href="primera.php"><i class="fa fa-circle-o"></i> Denunciar Incidente en Computador</a></li>
          </ul>
        </li>';
}
        ?>
        
               <?php 
if ($_SESSION['Generación']==2) {
  echo '<li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Estudiante</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="primera.php"><i class="fa fa-circle-o"></i> Registar Mantenimiento</a></li>
          </ul>
        </li>';
}
        ?>

                             <?php 
if ($_SESSION['Acceso']==6) {
  echo '  <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i> <span>Acceso</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="usuario.php"><i class="fa fa-circle-o"></i> Usuarios</a></li>
            <li><a href="permiso.php"><i class="fa fa-circle-o"></i> Permisos</a></li>
			 <li><a href="categoria.php"><i class="fa fa-circle-o"></i> Catálogos</a></li>
          </ul>
        </li>';
}
        ?>  
                                     <?php 
if ($_SESSION['Reportes']==6) {
  echo '     <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i> <span>Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          
          </ul>
        </li>';
}
        ?>  
              
                                  
        
      </ul>
    </section>
    <!-- /.sidebar -->
 
  </aside>