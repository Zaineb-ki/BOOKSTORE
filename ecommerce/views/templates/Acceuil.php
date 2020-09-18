<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>

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
                <a class="nav-link" href="#">Offres</a>
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
  <!-- Start Slides -->
  <div class="container">
    <div class="row">
      <div class="col">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="src\Images\img\slides.png" class="d-block w-100" alt="">
              <div class="carousel-caption d-none d-md-block">
                <button class="btn-slide1">Découvrire Plus</button>
              </div>
              
            </div>
            <div class="carousel-item">
              <img src="src\Images\img\slides2.png" class="d-block w-100" alt="">
              <div class="carousel-caption d-none d-md-block">
                <button class="btn-slide2">Découvrir Votre Ouvrage préféré</button>
              </div>
            </div>
            <div class="carousel-item">
              <img src="src\Images\img\slides3.png" class="d-block w-100" alt="">
              <div class="carousel-caption d-none d-md-block">
                <button class="btn-slide3">Voir Plus</button>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <br> <br>
  <!-- End Slides -->

  <!-- Parte 1 "Les meilleur ventes"-->

  <section class="part1">
    <div class="container">
      <div class="row">
        <div class="col">
         <center>
          <h1>
            Les meilleur ventes
          </h1>
         </center>
        </div>
      </div>
      <br> <br>
      <div class="row" id="Cards">
       
 
        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <br>
            
             <center>
              <img src="views\templates\src\Images\img\THE OUTSIDER.png" class="card-img-top" alt="" style="width : 150px ">
             </center>
            <br>
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <div class="col-6 col-lg-6 col-md-6">
                    <h5 class="card-title-price"> 70,00 dhs </h5>
                  </div>
                  <div class="col-6 col-lg-6 col-md-6">
                    <h5 class="card-title-olde-price"> <strike>107,00 dhs</strike> </h5>
                  </div>
                </div>
              </div>
             <div class="card-text">
              <p class="card-text-title">THE OUTSIDER</p>
              <p class="card-text-Author">De Stephen King</p>
             </div>
              <div class="container">
                <div class="row">
                  <div class="col-6 col-lg-6 col-md-6">
                    <button class="bt-Details">
                      <a style="color: white;"> 
                        <i class="fas fa-plus"></i>Details </a>
                      </button>
                  </div>
                  <div class="col-6 col-lg-6 col-md-6">
                    <button class="bt-Acheter"><a style="color:black;"> <i class="fas fa-shopping-cart"></i>Acheter </a></button>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>

        
        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <br>
            
             <center>
              <img src="views\templates\src\Images\Livres\frs\PèreRiche, Père pauvre.jpg" class="card-img-top" alt="" style="width : 150px ">
             </center>
            
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <div class="col-6 col-lg-6 col-md-6">
                    <h5 class="card-title-price"> 90,00 dhs </h5>
                  </div>
                  <div class="col-6 col-lg-6 col-md-6">
                    <h5 class="card-title-olde-price"> <strike>140,00 dhs</strike> </h5>
                  </div>
                </div>
              </div>
              <div class="card-text">
                <p class="card-text-title">Père riche, père pauvre</p>
                <p class="card-text-Author">de Robert T. Kiyosaki</p>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-6 col-lg-6 col-md-6">
                    <button class="bt-Details"><a style="color: white;"> <i class="fas fa-plus"></i>Details </a></button>
                  </div>
                  <div class="col-6 col-lg-6 col-md-6">
                    <button class="bt-Acheter"><a style="color:black;"> <i class="fas fa-shopping-cart"></i>Acheter </a></button>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>


        
        <div class="col-4">
          <div class="card" style="width: 18rem;">
            <br>
            
             <center>
              <img src="views\templates\src\Images\img\4.jpg" class="card-img-top" alt="" style="width : 150px ">
             </center>
            
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <div class="col-6 col-lg-6 col-md-6">
                    <h5 class="card-title-price"> 60,00 dhs </h5>
                  </div>
                  <div class="col-6 col-lg-6 col-md-6">
                    <h5 class="card-title-olde-price"> <strike>110,00 dhs</strike> </h5>
                  </div>
                </div>
              </div>
              
              <div class="card-text">
              <p class="card-text-title">Les misérables</p>
              <p class="card-text-Author">de Victor HUGO</p>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-6 col-lg-6 col-md-6">
                    <button class="bt-Details"><a style="color: white;"> <i class="fas fa-plus"></i>Details </a></button>
                  </div>
                  <div class="col-6 col-lg-6 col-md-6">
                    <button class="bt-Acheter"><a style="color:black;"> <i class="fas fa-shopping-cart"></i>Acheter </a></button>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>
        </div>
      </div>
      
     <div class="plus">
      <div class="row">
        <div class="col">
         <center>
          <p>
            <u>
              <a href="#">Voir Plus</a>
             </u>
          </p>
         </center>
        </div>
      </div>
     </div>
      
  </section>
  <br> <br>
  <!-- Parte 2 Les Accessoires -->
  <section class="part2">
    <div class="container">
      <div class="row">
        <div class="col">
          <center>
            <h1>
              #NosAccessoires
            </h1>
           </center>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <center>
            <div class="decouvrire-Acc">
              <h4>
                  Découvrir nos marques pages avec #Nos #Accessoires
              </h4>
            </div>
          </center>
        </div>
      </div>
      
      <div class="container" style="margin-top:30px;">
        <div class="row">
            <div class="col-md-12 col-lg-12 ">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="row">
                          <div class="col-md-3 col-lg-3 col-sm-3"><a href="#" ><img src="Images\MarquesPages\1.jpg" alt="Accessoires" style="max-width: 100%;"></a></div>
                          <div class="col-md-3 col-lg-3 col-sm-3"><a href="#" ><img src="Images\MarquesPages\4.jpg" alt="Accessoires" style="max-width: 100%;"></a></div>
                          <div class="col-md-3 col-lg-3 col-sm-3"><a href="#" ><img src="Images\MarquesPages\2.jpg" alt="Accessoires" style="max-width: 100%;"></a></div>
                          <div class="col-md-3 col-lg-3 col-sm-3"><a href="#" ><img src="Images\MarquesPages\6.jpg" alt="Accessoires" style="max-width: 100%;"></a></div>
                      </div>
                    </div>
                    <div class="carousel-item ">
                      <div class="row">
                          <div class="col-md-3 col-lg-3 col-sm-3"><a href="#" ><img src="Images\MarquesPages\1 pièces londres tour Eiffel Statue.jpg" alt="Accessoires" style="max-width: 100%;"></a></div>
                          <div class="col-md-3 col-lg-3 col-sm-3"><a href="#" ><img src="Images/MarquesPages/Aile Snitch méta.jpg" alt="Accessoires" style="max-width: 100%;"></a></div>
                          <div class="col-md-3 col-lg-3 col-sm-3"><a href="#" ><img src="Images/MarquesPages/Créatif Vintage métal.jpg" alt="Accessoires" style="max-width: 100%;"></a></div>
                          <div class="col-md-3 col-lg-3 col-sm-3"><a href="#" ><img src="Images/MarquesPages/Styles animaux mignons.jpg" alt="Accessoires" style="max-width: 100%;"></a></div>
                      </div>
                    </div>
                    <div class="carousel-item ">
                      <div class="row">
                          <div class="col-md-3 col-lg-3 col-sm-3"><a href="#" ><img src="Images/MarquesPages/trèfle à quatre feuilles lecture métal Clip.jpg" alt="Accessoires" style="max-width: 100%;"></a></div>
                          <div class="col-md-3 col-lg-3 col-sm-3"><a href="#" ><img src="Images/MarquesPages/Vintage en alliage.jpg" alt="Accessoires" style="max-width: 100%;"></a></div>
                          <div class="col-md-3 col-lg-3 col-sm-3"><a href="#" ><img src="Images/MarquesPages/Multi-fonction en plastique pouce livre.jpg" alt="Accessoires" style="max-width: 100%;"></a></div>
                          <div class="col-md-3 col-lg-3 col-sm-3"><a href="#" ><img src="Images/MarquesPages/8.jpg" alt="Accessoires" style="max-width: 100%;"></a></div>
                      </div>
                    </div>
                  </div>
                 
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only" >Next</span>
                  </a>
                </div>
            </div>
        </div>
    </div>
      <div class="plus">
        <div class="row">
          <div class="col">
           <center>
            <p>
              <u>
               <a href="#">Voir Plus</a>
              </u>
            </p>
           </center>
          </div>
        </div>
       </div>
    </div>
  </section>
 <br> <br>


<!-- part3 S'inscrire -->
<section class="part3">
    <div class="container">
      <div class="row">
        <div class="col">
          <center>
            <h1>
              #S'inscrire
            </h1>
           </center>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="inscri">
            <center>
              <img src="Images\img\Sans-titre---1.pngsd.png" alt="">
            </center>
            <p class="bt-inscri"><a href="">Inscription</a></p>
          </div>
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
              <a href="#"><i class="fab fa-facebook" style="color: #173D7A;"></i></a>
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