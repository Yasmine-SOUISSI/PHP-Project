<?php
    session_start();
    if(empty($_SESSION['e'])){
    header('Location: ../Views/log.php');
   }
?>

<?php
 include_once '../Controller/Resto_controller.php';
 
 if(isset($_GET['ID'])){
   $restaurantC = new RestaurantController();
   $restaurantById = $restaurantC->recupererRestaurant($_GET['ID']);
 
 foreach($restaurantById as $res){
 ?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Update Restaurant</title>

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
                                <a href="./afficherutilisateur.php">Dashbord</a>
                            </li>
                            <li><a href="./afficherRestoRes.php">Afficher Resevation</a></li>
                            <li>
                                <a href="./ajouterRestaurant.php">Ajouter Restaurant</a>
                            </li>
                            <li>
                                <a href="afficherRestaurant.php">Afficher Restaurant</a>
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
        <div id="booking" class="section">
            <div class="section-center">
                <div class="container">
                    <div class="row">
                        <div class="booking-form">
                            <form method="POST" action="">
                                <div class="form-group">
                                    <span class="form-label">Nom Restaurant</span>
                                    <input class="form-control" name="nom_restaurant" type="text" id="nom_restaurant"
                                        value="<?php echo $res['nom_restaurant'];?>" />

                                </div>

                                <div class=" form-group">
                                    <span class="form-label">Nombre de place</span>
                                    <input class="form-control" name="nb_places" type="number" id="nb_places"
                                        value="<?php echo $res['nb_places'];?>" />
                                </div>
                                <div class=" form-group">
                                    <span class="form-label">Menu</span>
                                    <input class="form-control" name="menu" type="text" id="menu"
                                        value="<?php echo $res['menu'];?>" />
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Descripcion</span>
                                    <input class="form-control" name="description_resto" type=" text"
                                        id="description_resto" value="<?php echo $res['description_resto'];}?>" />

                                </div>



                                <div class=" form-btn">
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
include_once ('../Models/Resto_model.php');
include_once ('../Controller/Resto_controller.php');



    $error = "";

    $resto = null;
    $restaurantC = new RestaurantController();
    if (
		isset($_POST['nom_restaurant']) &&		
        isset($_POST['nb_places']) &&
        isset($_POST['menu']) &&
        isset($_POST['description_resto'])
    ) {
       
      if( !empty($_POST['nom_restaurant']) && !empty($_POST['nb_places']) &&
          !empty($_POST['menu']) &&!empty($_POST['description_resto'])) {  
            $resto = new restaurant(
                $_POST['nom_restaurant'],
                $_POST['nb_places'],
                $_POST['menu'],
                $_POST['description_resto']
            );
            $restaurantC->modifierRestaurant($resto,$_GET['ID']);
            header('Location: afficherRestaurant.php');
        } else {
            $error = "Veuillez remplir tous les champs";
           
        }
    }
}
 
 ?>