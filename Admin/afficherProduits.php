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

            include '../Controller/ProduitC.php';
            $produitC=new ProduitC();
            $listeProduits=$produitC->afficherproduits(); 
        if (isset($_GET['tri'])){
            $listeProduits = $produitC->affichertri();
        }else if (isset($_GET['prix'])){
            $listeProduits = $produitC->rechercheproduit($_GET['prix']); 
        }else {
                    $listeProduits = $produitC->afficherproduits();     
                }
?>

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
                            <li><a href="./afficherRestoRes.php">Afficher Resevation</a></li>
                            <li><a href="./AfficherSpecialite.php">Afficher Blocs</a></li>
                            <li><a href="./Displaystaff.php">Afficher Staff</a></li>
                            <li><a href="./Displayevent.php">Afficher Events</a></li>
                            <li>
                                <a href="./ajouterRestaurant.php">Ajouter Restaurant</a>
                            </li>
                            <li>
                                <a href="./afficherPanier.php" class="active">Afficher Panier </a>
                            </li>

                            <li>
                                <a href="afficherProduits.php">Afficher Produit </a>
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


    <section class=" ftco-section">
        <button> <a class="btn btn-primary btn-circle btn-lg" href="afficherproduits.php?tri=1"> trier
            </a>
            <button>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-wrap">
                                <a href="./ajouterP.php">Ajouter Produit</a>
                                <br>
                                <form action="" method="GET"
                                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                    <div class="input-group">
                                        <!--placeholder lhaja ily t7bha tbnleeekk  f l imput s -->
                                        <!--  name lazem aalkhtr najmooo nrecupiro byh l valeur -->
                                        <input type="text" name="prix" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"> search
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>

                                </form>

                                <table class="table">
                                    <thead class="thead-primary ">

                                        <tr>
                                            <th class="form-label">ID</th>
                                            <th class="form-label">Nom Restaurant</th>
                                            <th class="form-label">Nombre de places</th>
                                            <th class="form-label">Menu</th>
                                            <th class="form-label">Description</th>
                                            <th class="form-label">Supprimer</th>
                                            <th class="form-label">Modifier</th>



                                        </tr>
                                    </thead>

                                    <?php
				              foreach($listeProduits as $produit){
		                      	?>
                                    <tr>

                                        <td><?php echo $produit['idp']; ?></td>
                                        <td><?php echo $produit['nom']; ?></td>
                                        <td> <img src="<?php echo("../images/".$produit['imagep']) ?>" height="100"
                                                width="100">
                                        </td>
                                        <td><?php echo $produit['typep']; ?></td>
                                        <td><?php echo $produit['prix']; ?></td>
                                        <td><?php echo $produit['quantite']; ?></td>

                                        <td> <a class="btn"
                                                href="supprimerProduits.php?idp=<?php echo $produit['idp']; ?>">
                                                x</a>

                                        <td>
                                            <a class="btn"
                                                href="modifierProduits.php?idp=<?php echo $produit['idp']; ?>">Modifier</a>


                                            <input type="hidden" value=<?PHP echo $produit['idp']; ?>
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