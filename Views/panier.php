<?php
 include_once '../Controller/ProduitC.php';
 session_start();

//include_once "C://wamp64/www/solis/config.php";
// On teste si la variable de session existe et contient une valeur

 if(isset($_GET['ID'])){
   $produitC = new ProduitC();
   $produitById = $produitC->recupererproduits($_GET['ID']);
 
 foreach($produitById as $produit){
     
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tooplate">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <title>Ticket Detail Page</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">


    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css" />

    <link rel="stylesheet" type="text/css" href="../assets/css/owl-carousel.css" />

    <link rel="stylesheet" href="../assets/css/tooplate-artxibition.css" />

</head>

<body>
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

    <!-- ***** About Us Page ***** -->
    <div class="page-heading-shows-events">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Tickets On Sale Now!</h2>
                    <span>Check out upcoming and past shows & events and grab your ticket right now.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="ticket-details-page">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    <div class="left-image">
                        <img src="../assets/images/ticket-details.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <h4><?php echo $produit["nom"];?></h4>
                        <span>240 Tickets still available</span>
                        <ul>
                            <li><i class="fa fa-clock-o"></i> Thursday 18:00 to 22:00</li>
                            <li><i class="fa fa-map-marker"></i>LandNa</li>
                        </ul>

                        <div class="total">
                            <h4>Prix :<?php echo $produit["prix"];?> $ </h4>
                            <div class="main-dark-button">
                                <a href="formulaireAchat.php?ID=<?php echo $produit['idp']; ?>">Purchase Tickets</a>
                            </div>
                        </div>
                        <div class="warn">
                            <p>*You Can Only Buy 1 Tickets For This Show</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php }}?>
    <div id="google_translate_element"></div>


</body>

</html>