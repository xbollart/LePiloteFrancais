  <?php
    if (isset($_POST["submit"])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $human = intval($_POST['human']);
      $from = 'Demo Contact Form'; 
      $to = 'contact@lepilotefrancais.fr'; 
      $subject = 'Message from Contact Demo ';
      
      $body ="From: $name\n E-Mail: $email\n Message:\n $message";

      // Check if name has been entered
      if (!$_POST['name']) {
        $errName = 'Please enter your name';
      }
      
      // Check if email has been entered and is valid
      if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
      }
      
      //Check if message has been entered
      if (!$_POST['message']) {
        $errMessage = 'Please enter your message';
      }

  // If there are no errors, send the email
  if (!$errName && !$errEmail && !$errMessage) {
    if (mail ($to, $subject, $body, $from)) {
      $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
      $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
    }
  }
    }
  ?>

  <!DOCTYPE html>
  <html lang="fr">
    <head>
      <title>Le Pilote Français</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="vol prive au dessus de la france">
      <meta name="author" content="Xavier Bollart">
      <link href="styles.css" rel="stylesheet" type="text/css">
      <link href="template.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#myPage">Le Pilote Français</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#presentation">PRESENTATION</a></li>
              <li><a href="#plane">L'AVION</a></li>
              <li><a href="#flights">VOLS</a></li>
              <li><a href="#contact">CONTACT</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Langue <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="index.php">Francais</a></li>
                  <li><a href="english.php">Anglais</a></li>
                  <li><a href="chinese.php">Chinois</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

  <!--Part 1 Carousel-->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="images/header/pic01_opt.jpg" alt="Falaise d'Etretat, Normandie" width="1200" height="700">
              <div class="carousel-caption">
                <h3>Falaise d'Etretat, Normandie</h3>
              </div>
            </div>
          
            <div class="item">
              <img src="images/header/pic04_opt.jpg" alt="Près du Havre, Normandie" width="1200" height="700">
              <div class="carousel-caption">
                <h3>Près du Havre, Normandie</h3>
              </div>
            </div>

            <div class="item">
              <img src="images/header/pic05_opt.jpg" alt="Les falaises de Normandie<" width="1200" height="700">
              <div class="carousel-caption">
                <h3>Les falaises de Normandie</h3>
              </div>
            </div>

            <div class="item">
              <img src="images/header/pic06_opt.jpg" alt="Coucher de soleil autour de Paris" width="1200" height="700">
              <div class="carousel-caption">
                <h3>Coucher de soleil autour de Paris</h3>
              </div>
            </div>

            <div class="item">
              <img src="images/header/pic07_opt.jpg" alt="La côte normande" width="1200" height="700">
              <div class="carousel-caption">
                <h3>La côte normande</h3>
              </div>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>

      <!-- Part 2 Presentation-->
      <div id="presentation" class="container text-center">
        <h3>La Compagnie</h3>
        <p>Après 10 ans d’aviation, Vincent lance Le Pilote Français. 
        Cette compagnie aérienne en cours de certi cation par la DGAC (Direction Générale de l’Aviation Civile) 
        et qui sera située sur l’aérodrome parisien du Plessis-Belleville vous permettra de découvrir 
        Paris et ses environs sous une autre dimension. </p>
      
        <div class="col-sm-12">
            <img src="images/presentation/pic08_opt.jpg" class="img-circle person"  alt="Dirigeant responsable et pilote" width="800" height="532">
        </div>
      </div>

      <div id="plane" class="container text-center">
        <h3>L'avion</h3>
        <p> Modèle: Diamond DA42 twin star </p>
        <div class="row">
          <div class="col-sm-12">
            <img src="images/plane/pic23_opt.jpg" class="img-thumbnail"  alt="DA 42" width="800" height="400"> 
          </div>
        </div>
      </div>
      <br>

      <!-- Part 3 flights -->
      <div id="flights" class="bg-1">

        <div class="container text-center">
        
          <h3 class="text-center">Déroulement d’un vol</h3>
          <br>
          <p class="text-left">•  Chauffeur privé depuis votre hôtel jusqu’à l’aéroport</p>
          <p class="text-left">•  Accueil à l’aéroport par le pilote</p>
          <p class="text-left">•  Briefing : présentation de l’avion, du vol et des consignes de sécurité</p>
          <p class="text-left">•  Départ en vol</p>
          <p class="text-left">•  Après le vol : Boisson offerte avec des gourmandises parisiennes</p>
          <p class="text-left">•  Retour à Paris avec un chaffeur privé</p>
          <br>
        
          <h3 class="text-center">Quatre destinations au départ de Paris:</h3>
          <br>

          <div class="row text-center">
          <div class="col-sm-6">
            <div class="thumbnail">
              <li data-toggle="modal" data-target="#flight1-modal">
                <a href="#flight1-gallery" data-slide-to="0">
                  <img src="images/flight1/pic09_opt.jpg" alt="Vol Etretat" width="400" height="300">
                </a>
              </li>
              <p class"text-left" ><strong>Etretat</strong></p>
              <p class"text-left">Venez découvrir la Normandie et ses majestueuses falaises</p>
              <p class"text-left">- Temps de vol A/R sans escale : 1h30</p>
              <p class"text-left">- Prix par personne : 690 <span class="glyphicon glyphicon-euro"></span> (cf Règlement)</p>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="thumbnail">
            <li data-toggle="modal" data-target="#flight2-modal">
                <a href="#flight2-gallery" data-slide-to="0">
                  <img src="images/flight2/pic13_opt.jpg" alt="Vol baie de Somme" width="400" height="300">
                </a>
              </li>
              <p class"text-left" ><strong>Baie de Somme</strong></p>
              <p class"text-left">Survolez une des plus belles réserves naturelles du monde</p>
              <p class"text-left">- Temps de vol A/R sans escale : 1h30</p>
              <p class"text-left">- Prix par personne : 690 <span class="glyphicon glyphicon-euro"></span> (cf Règlement)</p>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="thumbnail">
              <li data-toggle="modal" data-target="#flight3-modal">
                <a href="#flight3-gallery" data-slide-to="0">
                  <img src="images/flight3/pic24_opt.jpg" alt="Vol paris" width="400" height="300">
                </a>
              </li>
              <p class"text-left" ><strong>Paris de nuit</strong></p>
              <p class"text-left">Vivez un instant magique au dessus de la capitale  </p>
              <p class"text-left">- Temps de vol A/R sans escale : 1h</p>
              <p class"text-left">- Prix par personne : 850 <span class="glyphicon glyphicon-euro"></span> (cf Règlement)</p>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="thumbnail">
              <li data-toggle="modal" data-target="#flight4-modal">
                <a href="#flight4-gallery" data-slide-to="0">
                  <img src="images/flight4/pic25_opt.jpg" alt="Vol Reims" width="400" height="300">
                </a>
              </li>
              <p class"text-left" ><strong>Reims et Champagne</strong></p>
              <p class"text-left">Visite d’un château et dégustation de champagne </p>
              <p class"text-left">- Temps de vol A/R avec escale : 1h20</p>
              <p class"text-left">- Prix par personne : 1290 <span class="glyphicon glyphicon-euro"></span> (cf Règlement)</p>
            </div>
          </div>

          <h3 class="text-center" align="left">Remarques importantes :</h3>
          <p align="left">- Le Pilote Français est une compagnie aérienne respectant la réglementation en vigueur.</p>
          <p align="left">- Le prix comprend le transport aller/retour depuis votre hôtel parisien 
          jusqu’à l’aéroport et une assurance transport public couvrant les passagers et leurs a aires personnelles).</p>
          <p align="left">- Règlement : 50% à la réservation sur le site et 50% avant le vol à l’aéroport.</p>
          <p align="left">- Certaines conditions météorologiques peuvent impliquer l’annulation d’un 
          vol au der- nier moment. Le vol est reporté dans la mesure du possible sinon l’avance à 
          la réservation est remboursée.</p>
          <br>
        </div>
        
        <!-- flight1 Modal picture -->
        <div class="modal fade" id="flight1-modal">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4>Etretat</h4>
                  </div>
                    
                  <div class="modal-body">
                      <div id="flight1-gallery" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="item active"> 
                            <img src="images/flight1/pic09_opt.jpg">
                          </div>
                          <div class="item"> 
                            <img src="images/flight1/pic10_opt.jpg">
                          </div>
                          <div class="item"> 
                            <img src="images/flight1/pic11_opt.jpg">
                          </div>  
                          <div class="item"> 
                            <img src="images/flight1/pic12_opt.jpg">
                          </div>
                        </div><!--end carousel-inner-->

                        <!--Begin Previous and Next buttons-->
                        <a class="left carousel-control" href="#flight1-gallery" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> 
                        <a class="right carousel-control" href="#flight1-gallery" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
                      </div> <!--end carousel-->
                    </div><!--end modal-body-->
                    <div class="modal-footer">
                      <div class="pull-left">
                      
                      </div>
                      <button class="btn-sm close" type="button" data-dismiss="modal">Close</button>
                    </div><!--end modal-footer-->
                </div><!--end modal-content-->
            </div><!--end modal-dialoge-->
          </div><!--end myModal-->
        </div>

        <!-- flight2 Modal picture -->
        <div class="modal fade" id="flight2-modal">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4> Baie de Somme</h4>
                  </div>
                    
                  <div class="modal-body">
                      <div id="flight2-gallery" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="item active"> 
                            <img src="images/flight2/pic13_opt.jpg">
                          </div>
                          <div class="item"> 
                            <img src="images/flight2/pic14_opt.jpg">
                          </div>
                          <div class="item"> 
                            <img src="images/flight2/pic15_opt.jpg">
                          </div>  
                        </div><!--end carousel-inner-->

                        <!--Begin Previous and Next buttons-->
                        <a class="left carousel-control" href="#flight2-gallery" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> 
                        <a class="right carousel-control" href="#flight2-gallery" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
                      </div> <!--end carousel-->
                    </div><!--end modal-body-->
                    <div class="modal-footer">
                      <div class="pull-left">
                      
                      </div>
                      <button class="btn-sm close" type="button" data-dismiss="modal">Close</button>
                    </div><!--end modal-footer-->
                </div><!--end modal-content-->
            </div><!--end modal-dialoge-->
          </div><!--end myModal-->
        </div>

        <!-- flight3 Modal picture -->
        <div class="modal fade" id="flight3-modal">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4> Paris de nuit</h4>
                  </div>
                    
                  <div class="modal-body">
                      <div id="flight3-gallery" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="item active"> 
                            <img src="images/flight3/pic16_opt.jpg">
                          </div>
                          <div class="item"> 
                            <img src="images/flight3/pic17_opt.jpg">
                          </div>
                          <div class="item"> 
                            <img src="images/flight3/pic18_opt.jpg">
                          </div>  
                          <div class="item"> 
                            <img src="images/flight3/pic24_opt.jpg">
                          </div>
                        </div><!--end carousel-inner-->

                        <!--Begin Previous and Next buttons-->
                        <a class="left carousel-control" href="#flight3-gallery" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> 
                        <a class="right carousel-control" href="#flight3-gallery" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
                      </div> <!--end carousel-->
                    </div><!--end modal-body-->
                    <div class="modal-footer">
                      <div class="pull-left">
                      
                      </div>
                      <button class="btn-sm close" type="button" data-dismiss="modal">Close</button>
                    </div><!--end modal-footer-->
                </div><!--end modal-content-->
            </div><!--end modal-dialoge-->
          </div><!--end myModal-->
        </div>

         <!-- flight4 Modal picture -->
        <div class="modal fade" id="flight4-modal">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4> Reims Champagne</h4>
                  </div>
                    
                  <div class="modal-body">
                      <div id="flight4-gallery" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="item active"> 
                            <img src="images/flight4/pic19_opt.jpg">
                          </div>
                          <div class="item"> 
                            <img src="images/flight4/pic20_opt.jpg">
                          </div>
                          <div class="item"> 
                            <img src="images/flight4/pic25_opt.jpg">
                          </div>  
                          
                        </div><!--end carousel-inner-->

                        <!--Begin Previous and Next buttons-->
                        <a class="left carousel-control" href="#flight4-gallery" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> 
                        <a class="right carousel-control" href="#flight4-gallery" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
                      </div> <!--end carousel-->
                    </div><!--end modal-body-->
                    <div class="modal-footer">
                      <div class="pull-left">
                      
                      </div>
                      <button class="btn-sm close" type="button" data-dismiss="modal">Close</button>
                    </div><!--end modal-footer-->
                </div><!--end modal-content-->
            </div><!--end modal-dialoge-->
          </div><!--end myModal-->
        </div>

      </div>

      <!-- Container (Contact Section) -->
      <div id="contact" class="container">
        <h3 class="text-center">Contact</h3>
        <br>

        <div class="row">
          <p> Aérodrome du Plessis - Belleville, Ermenonville</p>
          <p> Phone: +33 (0) 6 18 32 03 12</p>
          <p> Email: contact@lepilotefrancais.com</p>
          <br>

          <form method="post" action="index.php">
            <div class="row">
              <div class="col-sm-6 form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                <?php echo "<p class='text-danger'>$errName</p>";?>
              </div>
              <div class="col-sm-6 form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                <?php echo "<p class='text-danger'>$errEmail</p>";?> 
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <textarea class="form-control" rows="12" name="message" placeholder="Message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                <?php echo "<p class='text-danger'>$errMessage</p>";?>
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col-md-12 form-group">
                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                <?php echo $result; ?>
              </div>
            </div>
          </form>
        </div>
        <br>
      </div>
    </body>
  </html>