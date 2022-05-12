<?php
 include_once ("../Controller/Resto_controller.php");
  $restaurant = new RestaurantController();
  if(isset($_POST['search'])){
    $listeRestaurants = $restaurant->rechercherByNomResto($_POST['search']);
    }
    else if(isset($_POST['all'])) {
  $listeRestaurants = $restaurant->afficheRestaurant();
    }else  $listeRestaurants = $restaurant->afficheRestaurant();

?>




<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Tooplate" />
    <link href="../css/tooplate-little-fashion.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet" />

    <title>Event Detail Page</title>

    <!-- Additional CSS Files -->
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
    <!-- ***** Header Area End ***** -->
    <div class="page-heading-rent-venue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Are You Looking For A Restaurant ?</h2>
                    <span>Check out our venues, pick your choice and fill the reservation application.</span>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">

                        <form method="post" action="afficherResto.php">
                            <input type="text" class="form-control" placeholder="Search" id="myInput" name="search">
                            <button class="btn btn-primary">
                                Search</button>
                            <button class="btn btn-primary" name="all">
                                All</button>

                        </form>
                        <section class="featured-product section-padding">
                            <div class="container">
                                <div class="row">
                                    <?php foreach($listeRestaurants as $row) {
  
                                  ?>

                                    <?php echo $row['ID']; ?>

                                    <td></td>
                                    <td><?php echo $row['description_resto']; ?></td>





                                    <div class="col-lg-4 col-12 mb-3">
                                        <div class="product-thumb">
                                            <a href="product-detail.html">
                                                <img src="../assets/images/breakfast/brett-jordan-8xt8-HIFqc8-unsplash.jpg"
                                                    class="img-fluid product-image" alt="">
                                            </a>
                                            <div class="product-info d-flex">
                                                <div>
                                                    <h5 class="product-title mb-0">
                                                        <a href="product-detail.html"
                                                            class="product-title-link"><?php echo $row['nom_restaurant']; ?></a>
                                                    </h5>
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> Monday-Thursday: 05:00 PM to
                                                            10:00 PM
                                                        </li>
                                                        <li><i class="fa fa-map-marker"></i>Landna</li>
                                                    </ul>
                                                    <div class="col-12 text-center">
                                                        <a href="./ajouterReservation.php" class="view-all">Book</a>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <?php } ?>



                                </div>
                            </div>
                        </section>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
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