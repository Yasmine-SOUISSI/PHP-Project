<?php
   include_once  '../Controller/ProduitC.php';
   require_once '../config.php';
$produitC = new ProduitC();
$listeProduits = $produitC->afficherproduits();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Products</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css" />

    <link rel="stylesheet" type="text/css" href="../assets/css/owl-carousel.css" />

    <link rel="stylesheet" href="../assets/css/tooplate-artxibition.css" />
    <link href="../css/tooplate-little-fashion.css" rel="stylesheet">

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
                            <ul class="nav">
                                <li>
                                    <a href="../index.html" class="active">Home</a>
                                </li>
                                <li><a href="./Bloc.php">Blocs</a></li>

                                <li>
                                    <a href="./EventFront.php">Events</a>
                                </li>
                                <li>
                                    <a href="afficheResto.php">Restaurants</a>
                                </li>
                                <li><a href="./ajouterUser.php">Sign Up</a></li>
                                <li><a href="./log.php">Sign In</a></li>
                            </ul>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="page-heading-rent-venue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Are You Looking For A Tickets?</h2>
                    <span>Check out our products, pick your choice and fill the shop form.</span>
                </div>
            </div>
        </div>
    </div>
    <section classs="section-padding">
        <div class="tickets-page section-padding">

            <div class="container d-flex ">
                <div class="row">
                    <?php 
                foreach ($listeProduits as $produit){?>
                    <div class="col-lg-4">

                        <div class=" ticket-item">
                            <div class="thumb">
                                <img src="<?php echo("../images/".$produit['imagep']) ?>">
                            </div>
                            <div class="down-content">

                                <h3><?php echo $produit['nom'] ?></h3>
                                <ul>
                                    <li>Quantité: <?php echo $produit ['quantite']?>
                                    </li>
                                    <li><i class="fa fa-map-marker"></i>Landna</li>
                                </ul>
                                <div class="main-dark-button">
                                    <a href="panier.php?ID=<?php echo $produit['idp']; ?>">Purchase Tickets</a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- *** Subscribe *** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>Subscribe Our Newsletter:</h4>
                </div>
                <div class="col-lg-8">
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                            <div class="col-lg-9">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your Email Address" required="" />
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-dark-button">
                                        Submit
                                    </button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- *** Footer *** -->
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