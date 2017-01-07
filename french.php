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
<html lang="en">
  <head>
    <title>Le Pilote Francais</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="web site for private flight">
    <meta name="author" content="Xavier Bollart">
    <title>Bootstrap Contact Form With PHP Example</title>
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
          <a class="navbar-brand" href="#myPage">Le Pilote Francais</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#band">PRESENTATION</a></li>
            <li><a href="#tour">VOLS</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Langue <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="french.php">Francais</a></li>
                <li><a href="index.php">Anglais</a></li>
                <li><a href="chinese.php">Chinois</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/cost_opt.jpg" alt="Etretat" width="1200" height="700">
            <div class="carousel-caption">
              <h3>Falaises d'Etretat</h3>
              <p>impressionnant point de vue de la côte</p>
            </div>
          </div>

          <div class="item">
            <img src="images/ground_opt.jpg" alt="Baie de Somme" width="1200" height="700">
            <div class="carousel-caption">
              <h3>La Baie de Somme</h3>
              <p> point de vue des laques</p>
            </div>
          </div>
        
          <div class="item">
            <img src="images/cost2_opt.jpg" alt="Los Angeles" width="1200" height="700">
            <div class="carousel-caption">
              <h3>Les cotes Francaise</h3>
              <p>Survole de la cote par un jour de beaux temps</p>
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

    <!-- Container (The Band Section) -->
    <div id="band" class="container text-center">
      <h3>THE COMPANY</h3>
      <p><em>How did it started</em></p>
      <p>De formation ingénieur en Energie du Bâtiment et passionné d’aviation, Vincent travaille à Paris 
        depuis 2013 tout en continuant à voler en région parisienne. Après avoir obtenu sa licence 
        de pilote privé à Lyon en 2010, il poursuit en passant ses licences théoriques à Bristol (UK) en 
        2014 et ses licences professionnelles en 2016 à Kalmar en Suède. </p>
      <p>Après 10 ans d’aviation, Vincent lance Le Pilote Français. Cette structure en cours de certification 
        par la DGAC et qui sera située au Plessis-Belleville vous permettra de découvrir les joies du vol en avion 
        en allant parcourir les côtes normandes à partir d’Etretat jusqu’à la Baie de Somme. </p>
      <br>
      <div class="row">
        <div class="col-sm-12">
          <p class="text-center"><strong>The Pilot</strong></p><br>
          <a href="#demo" data-toggle="collapse">
            <img src="images/vincent_opt.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
          </a>
          <div id="demo" class="collapse">
            <p>Vincent Bollart</p>
            <p>Main pilot en CEO of the company</p>
            <!--p>Member since 1988</p-->
          </div>
        </div>
        <!--div class="col-sm-4">
          <p class="text-center"><strong>Name</strong></p><br>
          <a href="#demo2" data-toggle="collapse">
            <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
          </a>
          <div id="demo2" class="collapse">
            <p>Drummer</p>
            <p>Loves drummin'</p>
            <p>Member since 1988</p>
          </div>
        </div>
        <div class="col-sm-4">
          <p class="text-center"><strong>Name</strong></p><br>
          <a href="#demo3" data-toggle="collapse">
            <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
          </a>
          <div id="demo3" class="collapse">
            <p>Bass player</p>
            <p>Loves math</p>
            <p>Member since 2005</p>
          </div>
        </div-->
      </div>
    </div>

    <!-- Container (TOUR Section) -->
    <div id="tour" class="bg-1">
      <div class="container">
        <h3 class="text-center">Available flights</h3>
        <p class="text-center">Weater as to be checked before any flight<br> Please use the form below to book a flight</p>
        <!--ul class="list-group">
          <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
          <li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li>
          <li class="list-group-item">November <span class="badge">3</span></li>
        </ul-->
        
        <div class="row text-center">
          <div class="col-sm-6">
            <div class="thumbnail">
              <img src="images/Etretat.jpg" alt="Paris" width="600" height="450">
              <p><strong>Etretat's Cliff</strong></p>
              <p>450 euros</p>
              <button class="btn" data-toggle="modal" data-target="#myModal">Book it </button>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="thumbnail">
              <img src="images/ground.jpg" alt="New York" width="600" height="450">
              <p><strong>Somme Bay</strong></p>
              <p>450 euros</p>
              <button class="btn" data-toggle="modal" data-target="#myModal">Book it</button>
            </div>
          </div>
          <!--div class="col-sm-4">
            <div class="thumbnail">
              <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
              <p><strong>San Francisco</strong></p>
              <p>Sunday 29 November 2015</p>
              <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
            </div>
          </div-->
        </div>
      </div>
      
      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">×</button>
              <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
            </div>
            <div class="modal-body">
              <form role="form">
                <div class="form-group">
                  <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
                  <input type="number" class="form-control" id="psw" placeholder="How many?">
                </div>
                <div class="form-group">
                  <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
                  <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                </div>
                  <button type="submit" class="btn btn-block">Pay
                    <span class="glyphicon glyphicon-ok"></span>
                  </button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                <span class="glyphicon glyphicon-remove"></span> Cancel
              </button>
              <p>Need <a href="#">help?</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Container (Contact Section) -->
    <div id="contact" class="container">
      <h3 class="text-center">Contact</h3>
      <br>

      <div class="row">
        <p><span class="glyphicon glyphicon-map-marker"></span> Aérodrome du Plessis - Belleville, Ermenonville</p>
        <p><span class="glyphicon glyphicon-phone"></span> Phone: +33 (0) 6 18 32 03 12</p>
        <p><span class="glyphicon glyphicon-envelope"></span> Email: contact@lepilotefrancais.com</p>
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
              <textarea class="form-control" rows="5" name="message" placeholder="Message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
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
