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
 include_once ("../Controller/Reservation_controller.php");
  $reservation = new ReservationController();
  $listeReservation = $reservation->afficheReservation();

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
                            <li><a href="afficherReservation.php" class="active">Afficher Resevation</a></li>
                            <li>
                                <a href="./ajouterReservation.php">Ajouter Reservation</a>
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

    <section class="ftco-section">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <tfoot>
                            <tr>
                                <td><a class="btn btn-info" href="excel.php">Save as Excel</a></td>
                                <table class="table">
                                    <thead class="thead-primary ">

                                        <tr>
                                            <th class="form-label">ID</th>
                                            <th class=" form-label">Name</th>
                                            <th class="form-label">Nom Restaurant</th>
                                            <th class="form-label">Date</th>

                                            <th class="form-label">Nombre de place </th>
                                            <th class="form-label">Telephone</th>

                                            <th class="form-label">Supprimer</th>
                                            <th class="form-label">Modifier</th>



                                        </tr>
                                    </thead>

                                    <?php foreach($listeReservation as $row) {
  
                                  ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['ID']; ?>
                                        </td>
                                        <td><?php echo $row['nom_client'];?></td>
                                        <td><?php echo $row['nom_restaurant'];?></td>
                                        <td><?php echo $row['dateR'] ;?></td>
                                        <td><?php echo $row['nb_personne']; ?></td>
                                        <td><?php echo $row['tel']; ?></td>
                                        <td> <a class="btn"
                                                href="supprimerReservation.php?ID=<?php echo $row['ID']; ?>"> x</a>
                                        </td>

                                        <td>
                                            <a class="btn"
                                                href="modifierReservation.php?ID=<?php echo $row['ID']; ?>">Modifier</a>

                                            <input type="hidden" value=<?PHP echo $row['ID']; ?>
                                            name="ID">

                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
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