<?php
include "Carrito.php"; ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Expreso El Sol</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/logo.png"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/> 
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/> 
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    </head>
  <body>
  
  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header -->
  <header id="header">
    <!-- header top search -->
    <div class="header-top">
      <div class="container">
        <form action="">
          <div id="search">
          <input type="text" placeholder="Type your search keyword here and hit Enter..." name="s" id="m_search" style="display: inline-block;">
          <button type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
        </form>
      </div>
    </div>
    <!-- header bottom -->
    <div class="header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="header-contact">
              <ul>
                <li>
                  <div class="phone">
                    <i class="fa fa-phone"></i>
                    (0381)-4330 434/403
                  </div>
                </li>
                <li>
                  <div class="mail">
                    <i class="fa fa-envelope"></i>
                    info@expresoelsol.com.ar
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="header-login">
              <a class="login modal-form" data-target="#login-form" data-toggle="modal" href="#" style="background-color:#314384;">RUBROS COTIZADOS<span style="width: 18px;background-color: grey;border-radius: 60%;text-align: center;padding-top: 3px;padding-bottom: 3px;font-size: 12px;">   <?php  $carrito = new Carrito();echo $carrito->articulos_total();?>   </span>  </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header -->
  
  <!-- Start login modal window -->
  <div aria-hidden="false" role="dialog" tabindex="-1" id="login-form" class="modal leread-modal fade in">
    <div class="modal-dialog">
      <!-- Start login section -->
      <div id="login-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-unlock-alt"></i>RUBROS COTIZADOS </h4>
        </div>
        <div class="modal-body" style="color: black;">
            <table class="table table-striped projects">
                                        <thead>
                                            <tr>
                                                <th style="width: 10%">Codigo</th>
                                                <th style="width: 50%">Descripcion</th>
                                                <th style="width: 20%">Cantidad</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: black;">
                                        <?php  $carrito = new Carrito();
                                                $carro = $carrito->get_content();
                                           foreach($carro as $producto){?>    
                                            <tr> 
                                                <td>
                                                    <?php echo $producto["id"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $producto["nombre"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $producto["cantidad"]; ?>
                                                </td>
                                            </tr>
                                            <?php } ?>  
                                        </tbody>
                                    </table>
        </div>
        <div class="modal-footer footer-box">
          <a style="color:black;" href="cotizacion.php"><button class="btn signin-btn" type="button">COTIZAR</button></a>      
          <a style="color:grey;" href="cleanCart.php">Limpiar items</a>   
        </div>
      </div>
      <!-- Start signup section -->
      <div id="signup-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-lock"></i>Sign Up</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input placeholder="Name" class="form-control">
            </div>
            <div class="form-group">
              <input placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
              <input placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <div class="signupbox">
              <span>Already got account? <a id="login-btn" href="#">Sign In.</a></span>
            </div>
            <div class="loginbox">
              <label><input type="checkbox"><span>Remember me</span><i class="fa"></i></label>
              <button class="btn signin-btn" type="button">SIGN UP</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End login modal window -->

  <!-- BEGIN MENU -->
  <section id="menu-area" style="height: 60px;">      
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
           <a class="navbar-brand" href="index.html"><img src="assets/images/LOGO%20CON%20SOPORTE.png" style="width:10%;"></a>             
          <!-- IMG BASED LOGO  -->
           <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav" style="margin-top:-70px;">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="nosotros.php">Empresa</a></li>
            <li><a href="contacto.php">Contacto</a></li>               
            <li class="opene" id="cotiza"><a style="color:gold;font-size:20px;line-height:-10px;" href="cotizacion.php">COTIZACION</a></li>
          </ul>                     
        </div><!--/.nav-collapse -->
      </div>     
    </nav>
  </section>
  <!-- END MENU --> 
