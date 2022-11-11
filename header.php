<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Home </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-eduwell-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          <img src="http://skylabengineers.in/assets/img/150x50.png" alt="EduWell Template">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="home.php">Home</a></li>
                          <li><a href="about.php">About</a></li>
                          <li><a href="gallery.php">Gallery</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">My Account</a>
                              <?php
                              session_start();
                              $e1 = $_SESSION['mysession'];
                              if(!$e1)
                              {
                              ?>
                              <ul class="sub-menu">
                                  <li><a href="register.php">Registration</a></li>
                                  <li><a href="login.php">Login</a></li>
                              </ul>
                              <?php
                              }
                              else
                              {
                                 ?>
                                <ul class="sub-menu">
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                              <?php
                              }
                              ?>
                          </li>
                          <li><a href="payment.php">Online Payment</a></li> 
                          <li><a href="contact.php">Contact Us</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->


















