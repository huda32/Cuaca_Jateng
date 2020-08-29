<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url();?>image/logo.png">
    <!--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    -->
    <link rel="stylesheet" href="<?= base_url();?>assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap-reboot.css">

    <style>
      /*body {
        padding-top: 55px;
      }*/
      .navbar li:hover {
        text-decoration: none;
        color: #fff;
        background: rgba(255,255,255,0.2);
      }
      .dropdown:hover>.dropdown-menu {
        display: block;
      }
    </style>
    <!-- <link rel="stylesheet" href="assets/css/scrolling-nav.css"> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> -->
    <title><?= $judul; ?></title>
  </head>
  <body id="page-top">

  
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style=" background-color:#28a745;">
  <div class="container">
  <a class="navbar-brand js-scroll-trigger" href="<?= base_url(); ?>#page-top"><strong>Stasiun Meteorologi Ahmad Yani</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Prakiraan Cuaca</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item js-scroll-trigger"  href="<?= base_url(); ?>#jawa">Jawa Tengah Hari Ini dan Hari Esok</a>
		  
		 <div class="dropdown-divider"></div>
          <a class="dropdown-item js-scroll-trigger" href="<?= base_url(); ?>#dini">Windrose Chart Services for Airport</a>
        </div> 
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>#apk">Android</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>#contact">Contact</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url(); ?>login">Login</a>
          </li>
    </ul>
  
  </div>
  </div>
  </nav>
  
<!-- 
<nav class="navbar navbar-expand-lg navbar-dark" style=" background-color:#28a745;">

    <div class="container">
      
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">Perkiraan</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#jawa">Jawa Tengah</a>
                <a class="dropdown-item" href="#kota">Kota Semarang</a>    
                </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-item nav-link " href="<?= base_url(); ?>#radar">Radar Cuaca</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-item nav-link " href="<?= base_url(); ?>#about">Berita</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-item nav-link " href="<?= base_url(); ?>#contact">Contact</a>
                </li>
                </ul>
        </div>
    </div>
</nav> -->