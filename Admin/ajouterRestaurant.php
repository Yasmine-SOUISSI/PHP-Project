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
include_once ('../Models/Resto_model.php');
include_once ('../Controller/Resto_controller.php');

    $error = "";
    // create reservation 
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
            if(!(strlen($_POST['nb_places'])<=0 || strlen($_POST['nom_restaurant'])>15 || strlen($_POST['menu'])>15))
            {   
            $resto = new restaurant(
                $_POST['nom_restaurant'],
                $_POST['nb_places'],
                $_POST['menu'],
                $_POST['description_resto']
            );
            $restaurantC->ajouterRestaurant($resto);
            header('Location: afficherRestaurant.php');
        }
     
    } else {
            $error = "Veuillez remplir tous les champs";
           
        }
    }
           
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                                <a href="./afficherutilisateur.php">Dashbord</a>
                            </li>
                            <li><a href="./afficherRestoRes.php">Afficher Resevation</a></li>
                            <li><a href="./AfficherSpecialite.php">Afficher Blocs</a></li>
                            <li><a href="./Displaystaff.php">Afficher Staff</a></li>
                            <li><a href="./Displayevent.php">Afficher Events</a></li>
                            <li>
                                <a href="ajouterRestaurant.php">Ajouter Restaurant</a>
                            </li>
                            <li>
                                <a href="afficherPanier.php" class="active">Afficher Panier </a>
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


    <!-- ***** Header Area End ***** -->

    <div id="booking" class="section">


        <div class="section-center">
            <div class="container">
                <div class="row">

                    <div class="booking-form">
                        <form method="POST" action="">
                            <div class="form-group">
                                <?php  echo $error  ?>
                                <span class="form-label">Nom Restaurant</span>
                                <input class="form-control" name="nom_restaurant" type="text" id="nom_restaurant" />
                            </div>

                            <div class="form-group">
                                <span class="form-label">Nombre de place</span>
                                <input class="form-control" name="nb_places" type="number" id="nb_places" />
                            </div>
                            <div class="form-group">
                                <span class="form-label">Menu</span>
                                <input class="form-control" name="menu" type="text" id="menu" />
                            </div>
                            <div class="form-group">
                                <span class="form-label">Descripcion</span>
                                <textarea class="form-control" name="description_resto" type=" text"
                                    id="description_resto">
                                </textarea>
                            </div>



                            <div class="form-btn">
                                <input type="submit" value="Add" class="submit-btn" onclick="verif();" />
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

<script>
function verif() {

    var menu = document.getElementById('menu').value;
    var nom_restaurant = document.getElementById('nom_restaurant').value;
    var nb_places = document.getElementById('nb_places').value;
    if (menu.length === 0 ||
        nom_restaurant.length === 0 || tel.length === 0) {
        alert("Vérifier vos donneés ");
    } else {
        if (nom_restaurant.length > 15) {
            alert(" Votre nom doit avoir une longueur inférieur à 15 caractères");
        } else {
            if (menu.length >
                15) {
                alert("Votre type doit avoir une longueur inférieur à 15 caractères");
            } else {

                if (nb_places.length <= 0) {
                    alert("nb_place is required");
                }


            }
        }
    }














}
</script>