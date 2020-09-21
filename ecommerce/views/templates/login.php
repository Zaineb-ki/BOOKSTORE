<?php
include('loginback.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" crossorigin="anonymous">
        
        <!-- Script Bootrtrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" crossorigin="anonymous"></script>

        <!-- Favicon -->
        <link rel="shortcut icon" href="src\Images\Logo.png" type="image/x-icon">

        <!-- Font awesome --> 
        <script src="https://kit.fontawesome.com/a6cfec0f45.js" crossorigin="anonymous"></script>

        <!-- Main style sheet -->
        <link href="src\css\style.css"rel="stylesheet">    

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>

</head>
<body>
      <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fas fa-envelope"></i>
                    <span>bookstorecompany1@gmail.com</span>
                  </div>
                  <div class="mu-top-phone">
                    <i class="fas fa-phone-alt"></i>
                    <span>+212524-634573</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                    
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
   <div class="container">
     <div class="row">
       <div class="col">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#"><img style="width: 170px;" src="src\Images\Logo.png" alt="BOOK STORE"> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="Acceuil.html" id="active">Acceuil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Livres</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="#">Accessoires</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="NousContacter.html">Contact Us</a>
              </li>
            </ul>
            
            <div class="fonts-nav">
                <a href="#"><i class="fas fa-search"></i></a>
                <a href="#"><i class="fas fa-user"></i></a>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
            </div>
          </div>
        </nav>
       </div>
     </div>
   </div>
  </section>
  <!-- End menu -->

<!-- Part 1--> 
<section class="part1-SC">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <center>
                    <div id="bar">
                        <p>Connectez vous</p>
                    </div>
                </center>
            </div>
        </div>
    </div>
</section>


 <br> <br>
 
<section class="part3-NousC">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <img src="src\Images\img\Sans-nkl,kl1.png" alt="" srcset="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <center>
              <p style="color: #0086C7; font-family:Josefin Sans, Regular Roman; font-size: 40px;">Welcome Back ! </p>
            <form action="" method="post" id="client-infos">
                
                <div class="form-group">
                    <i class="fas fa-envelope" id="forms"></i>
                    <input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" >
                   <br> <br>
                <div class="form-group" id="forms">
                    <i class="fas fa-unlock-alt" id="forms"></i>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <br> <br>
                <button name="login" type="submit" class="btn btn-primary">log in</button>
                </form>
                </center>
            </div>
        </div>
    </div>
</section>








































<hr>

<section class="part4">
  <div class="container">
    <div class="row">
      <div class="col-lg col-md col-sm">
          <center>
            <h3>
              #Suivez-nous
            </h3>
          </center>
      </div>
    </div>
    <div class="row">
      <div class="col">
          <center>
            <div class="fonts">
              <a href="#"><i class="fab fa-facebook" style="color:  #173D7A;"></i></a>
              <a href="#"><i class="fab fa-pinterest" style="color: #FF0000;"></i></a>
              <a href="#"><i class="fab fa-instagram" style="color: #F7C248;"></i></a>
            </div>
          </center>
      </div>
    </div>
  </div>
</section>
<br>
<!-- Start footer -->
<footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h5>QUI SOMMES-NOUS ?</h5>
                <ul>
                    <li><a href="QuiSommeNous.html">A propos de BOOK STORE</a></li>
                    
                  </ul>
              </div>
            </div>
            <br>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                
                  <h5>AIDE</h5>
                  <ul>
                    <li><a href="ServiceClient.html">Service Client</a></li>
                    <li><a href="NousContacter.html">Nous Contacter</a></li>
                    
                  </ul>
              
              </div>
            </div>
            <br>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                  <h5>DECOUVREZ</h5>
                  <ul>
                    <li><a href="#">Inscrivez-Vous</a></li>
                    <li><a href="#">Nos Livres</a></li>
                    <li><a href="#">Nos Accessoires</a></li>
                    
                  </ul>
              </div>
            </div>
           <br>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h5>COMMENT ACHETER 
                  DES PRODUITS</h5>
                
                  <p>Nos produits sont vendus 
                    exclusivement sur notre 
                    store en ligne.
                    <a href="#"><u>Inscrivez-vous</u></a> pour profiter 
                    plusieurs offres </p>
                     
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; Copyright 2020 |  BOOK STORE | Store en ligne  <a href="http://www.markups.io/" rel="nofollow"></a></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->
  
  
  
  </body>
  </html>