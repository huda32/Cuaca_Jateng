<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url();?>image/logo.png">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url();?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?= base_url();?>assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url();?>assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <style>
      /* #myTable{
        table-layout:fixed;
      } */
    </style>
    <!-- JavaScript -->
    <script src="<?= base_url();?>assets/js/jquery-1.10.2.js"></script>
    <script src="<?= base_url();?>assets/js/bootstrap.js"></script>
    <script src="<?= base_url();?>assets/js/script.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
          $(document).ready( function () {
              $('#myTable').DataTable();
          } );
          $(function(){
              $(".alert").delay(2000).slideUp(200, function() {
                $(".alert").alert('close');
            });
          });
          
        </script>
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="<?= base_url();?>admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?= base_url();?>admin/kabupaten"><i class="fa fa-table"></i> Input Nama Kabupaten</a></li>
            <li><a href="<?= base_url();?>admin/file"><i class="fa fa-bar-chart-o"></i> Input File Cuaca Hari Ini</a></li>
            <li><a href="<?= base_url();?>admin/file_besok"><i class="fa fa-cloud"></i> Input File Cuaca Esok Hari</a></li>
            <li><a href="<?= base_url();?>admin/dini"><i class="fa fa-calendar"></i> Windrose Chart Services for Airport</a></li>
            <li><a href="<?= base_url();?>admin/infografis"><i class="fa fa-info"></i> Buletin Stamet Ahmad Yani Semarang</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $this->session->userdata('nama');?><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <!-- <li><a href="#"><i class="fa fa-user"></i> Profile</a></li> -->
              
                <li><a href="<?= base_url();?>login/logout"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>