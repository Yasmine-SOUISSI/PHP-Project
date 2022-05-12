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
?><?php
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
		isset($_POST['nb_personne'])&&isset($_POST['tel'] ) 
        )

     {
        if (
            !empty($_POST['nom_client']) && 
			!empty($_POST['nom_restaurant']) &&
            !empty($_POST['dateR']) && 
			!empty($_POST['nb_personne']) &&
            !empty($_POST['tel'])
        ) {
            if(!(strlen($_POST['tel'])!=8 || strlen($_POST['nom'])>15 || strlen($_POST['nom_restaurant'])>15))
            {
            $reservation1 = new reservation(
                $_POST['nom_client'],
                $_POST['dateR'], 
				$_POST['nom_restaurant'],
				$_POST['nb_personne'],
                $_POST['tel']
               
        
               
            );
            $reservationC->ajouterReservation($reservation1);
       
        } 
    }
        else
            $error = "Missing information";
           
    }
   

// ?>

<html lang="en">



<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Add Booking</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet" />

    <!-- Bootstrap -->


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
                                <a href="../index.html">Home</a>
                            </li>
                            <li>
                                <a href="../Views/Bloc.php">Blocs</a>
                            <li>
                            <li>
                                <a href="../Views/EventFront.php">Events </a>
                            <li>
                                <a href="./compte.php">Profile</a>
                            </li>
                            <li>
                                <a href="ajouterReservation.php">Ajouter Reservation</a>
                            </li>


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

    <div id="booking" class="section">

        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <form method="POST" action="">
                            <div class="form-group">
                                <span class="form-label">Nom Client</span>
                                <input class="form-control" name="nom_client" type="text" id="nom_client" />
                            </div>
                            <div class="form-group">
                                <span class="form-label">Email</span>
                                <input class="form-control" type="email" placeholder="Enter your email" />
                            </div>
                            <div class="form-group">
                                <span class="form-label">Phone</span>
                                <input class="form-control" type="tel" placeholder="Enter your phone number" name="tel"
                                    id="tel" />
                            </div>
                            <div class=" row no-margin">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Date</span>
                                        <input class="form-control" type="date" name="dateR" id="dateR" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Time</span>
                                        <input class="form-control" type="time" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Nom restaurant</span>
                                <input class="form-control" name="nom_restaurant" type="text" id="nom_restaurant" />
                            </div>
                            <div class="form-group">
                                <span class="form-label">Nombre de personne</span>
                                <input class="form-control" type="number" name="nb_personne" id="nb_personne" />
                                <span class="select-arrow"></span>
                            </div>





                            <div class="form-btn">
                                <input type="submit" value="book now" class="submit-btn" onclick="verif();" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Footer ***** -->
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
                        <div id="google_translate_element"></div>
                        <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({
                                pageLanguage: 'en'
                            }, 'google_translate_element');
                        }
                        </script>
                        <script type="text/javascript"
                            src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                        </script>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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


<script>
function verif() {

    var nom = document.getElementById('nom_client').value;
    var nom_restaurant = document.getElementById('nom_restaurant').value;
    var tel = document.getElementById('tel').value;
    if (nom.length === 0 ||
        nom_restaurant.length === 0 || tel.length === 0) {
        alert("Vérifier vos donneés ");
    } else {
        if (nom.length > 15) {
            alert(" Votre nom doit avoir une longueur inférieur à 15 caractères");
        } else {
            if (nom_restaurant.length >
                15) {
                alert("Votre type doit avoir une longueur inférieur à 15 caractères");
            } else {

                if (tel.length != 8) {
                    alert("Votre numtel dot s'ecrire sur 8 chiffres");
                }


            }
        }
    }














}
</script>