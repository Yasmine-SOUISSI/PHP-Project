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
 include_once ("../Controller/Resto_controller.php");
  $restaurant = new RestaurantController();
  if(isset($_POST['search'])){
    $listeRestaurants = $restaurant->rechercherByNomRestaurant($_POST['search']);
    }
    else if(isset($_POST['all'])){
  $listeRestaurants = $restaurant->afficherReservation();
    }else  $listeRestaurants = $restaurant->afficherReservation();

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

                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">

                            <li>
                                <a href="afficherutilisateur.php">Dashbord</a>
                            </li>
                            <li><a href="afficherRestoRes.php">Afficher Resevation</a></li>
                            <li><a href="./AfficherSpecialite.php">Afficher Blocs</a></li>
                            <li><a href="./Displaystaff.php">Afficher Staff</a></li>
                            <li><a href="./Displayevent.php">Afficher Events</a></li>
                            <li><a href="./ajouterP.php">Ajouter Produit</a></li>
                            <li>
                                <a href="./ajouterRestaurant.php">Ajouter Restaurant</a>
                            </li>
                            <li>
                                <a href="./afficherPanier.php" class="active">Afficher Panier </a>
                            </li>

                            <li>
                                <a href="./afficherProduits.php">Afficher Produit </a>
                            </li>
                            <li>
                                <a href="./afficherRestaurant.php">Afficher Restaurant</a>
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
    <br>
    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>

    <!-- ***** Header Area End ***** -->

    <section class="ftco-section">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">

                        <form method="post" action="afficherRestoRes.php">
                            <input type="text" class="form-control" placeholder="Search" id="myInput" name="search">
                            <button class="btn btn-primary">
                                Search</button>
                            <button class="btn btn-primary" name="all">
                                All</button>

                        </form>
                        <table class=" table">
                            <thead class="thead-primary ">

                                <tr>
                                    <th class="form-label">ID</th>
                                    <th class="form-label">Nom Restaurant</th>
                                    <th class="form-label">Nombre de personnes</th>

                                    <th class="form-label">Nom Client</th>
                                    <th class="form-label">Telephone</th>

                                    <th class="form-label">Date</th>
                                    <th class="form-label">Supprimer</th>


                                </tr>
                            </thead>

                            <?php foreach($listeRestaurants as $row) {
  
                                  ?>
                            <tr>
                                <td>
                                    <?php echo $row['ID']; ?>
                                </td>

                                <td><?php echo $row['nom_restaurant'];?></td>
                                <td><?php echo $row['nb_personne']; ?></td>
                                <td><?php echo $row['nom_client']; ?></td>
                                <td><?php echo $row['tel']; ?></td>
                                <td><?php echo $row['dateR']; ?></td>

                                <td> <a class="btn" href="supprimerRestaurant.php?ID=<?php echo $row['ID']; ?>">
                                        x</a>
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
                                        <a href="../index.html">Home</a>
                                    </li>
                                    <li><a href="afficherRestoRes.php" class="active">Afficher Resevation</a></li>
                                    <li>
                                        <a href="./ajouterRestaurant.php">Ajouter Restaurant</a>
                                    </li>
                                    <li>
                                        <a href="./ajouterRestaurant.php">Afficher Resevation</a>
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

    <div id="google_translate_element"></div>
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