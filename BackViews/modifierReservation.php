<?php
// On prolonge la session
session_start();

//include_once "C://wamp64/www/solis/config.php";
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login

    header('Location: ../Views/log.php');
   }
?>

<?php
 include_once '../Controller/Reservation_controller.php';
 
 if(isset($_GET['ID'])){
   $resevationC = new ReservationController();
   $reservationById = $resevationC->recupererReservation($_GET['ID']);
 
 foreach($reservationById as $res){
 ?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Get Booking</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet" />

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="../css/style.css" />
    <link type="text/css" rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css" />

    <link rel="stylesheet" type="text/css" href="../assets/css/owl-carousel.css" />

    <link rel="stylesheet" href="../assets/css/tooplate-artxibition.css" />
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Land<em>Na</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li>
                                <a href="index.html" class="active">Home</a>
                            </li>
                            <li><a href="about.html">About Us</a></li>

                            <li>
                                <a href="shows-events.html">Shows & Events</a>
                            </li>
                            <li>
                                <a href="">Restaurants</a>
                            </li>
                            <li><a href="tickets.html">Tickets</a></li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <section class="ftco-section">
        <div id="booking" class="section">
            <div class="section-center">
                <div class="container">
                    <div class="row">
                        <div class="booking-form">
                            <form method="POST" action="">
                                <div class="form-group">
                                    <span class="form-label">Nom Client</span>
                                    <input class="form-control" name="nom_client" type="text" id="nom_client"
                                        value="<?php echo $res['nom_client']; ?>" required />
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Email</span>
                                    <input class="form-control" type="email" placeholder="Enter your email" />
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Phone</span>
                                    <input class="form-control" type="tel" id="tel" name="tel"
                                        placeholder="Enter your phone number" value="<?php echo $res['tel']; ?>" />
                                </div>
                                <div class="row no-margin">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Date</span>
                                            <input class="form-control" type="date" name="dateR" id="dateR"
                                                value="<?php echo $res['dateR']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Time</span>
                                            <input class="form-control" type="time" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Nom restaurant</span>
                                    <input class="form-control" name="nom_restaurant" type="text" id="nom_restaurant"
                                        value="<?php echo $res['nom_restaurant']; ?>" required />
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Nombre de personne</span>
                                    <input class="form-control" type="number" name="nb_personne" id="nb_personne"
                                        value="<?php echo $res['nb_personne'];} ?>" required />
                                    <span class="select-arrow"></span>
                                </div>
                                <div class="form-btn">
                                    <input type="submit" value="Update" class="submit-btn" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="col-lg-12">
                <div class="sub-footer">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <span>Land<em>Na</em></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu">
                                <ul class="nav">
                                    <li>
                                        <a href="index.html" class="active">Home</a>
                                    </li>
                                    <li>
                                        <a href="about.html">About Us</a>
                                    </li>

                                    <li>
                                        <a href="shows-events.html">Shows & Events</a>
                                    </li>
                                    <li>
                                        <a href="">Restaurants</a>
                                    </li>
                                    <li>
                                        <a href="tickets.html">Tickets</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="social-links">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-behance"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="../assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../assets/js/scrollreveal.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/imgfix.min.js"></script>
    <script src="../assets/js/mixitup.js"></script>
    <script src="../assets/js/accordions.js"></script>
    <script src="../assets/js/owl-carousel.js"></script>

    <!-- Global Init -->
    <script src="../assets/js/custom.js"></script>
</body>

</html>

<?php 
include_once ('../Models/Reservation_model.php');
include_once ('../Controller/Reservation_controller.php');
$error = "";
    // create reservation 
    $reservation1 = null;

    // create an instance of the controller
    $reservationC = new ReservationController();
    if (
        isset($_POST['nom_client']) &&
		isset($_POST['nom_restaurant']) &&		
        isset($_POST['dateR']) &&
		isset($_POST['nb_personne']) &&
        isset($_POST['tel'])

    ) {
        if (
            !empty($_POST['nom_client']) && 
			!empty($_POST['nom_restaurant']) &&
            !empty($_POST['dateR']) && 
			!empty($_POST['nb_personne']) &&
            !empty($_POST['tel'])
        ) {
            $reservation1 = new reservation(
                $_POST['nom_client'],
                $_POST['nom_restaurant'],
                $_POST['dateR'], 
				$_POST['nb_personne'],
                $_POST['tel'] );
            $reservationC->modifierReservation($reservation1,$_GET['ID']);
            header('Location: afficherReservation.php');
            
        }
        else{
            $error = "Missing information";
           
    }
}

 }
 ?>