<?php
 include_once '../Controller/panierC.php';
 include_once '../Controller/ProduitC.php';
  // On prolonge la session
session_start();

//include_once "C://wamp64/www/solis/config.php";
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['id']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location: ../Views/log.php');
   }else
    {
        $id = $_SESSION['id'];
        echo $id;
    }
 if(isset($_GET['ID'])){
   $produitC = new produitC();
   $produitById = $produitC->recupererproduits($_GET['ID']);
   
 foreach($produitById as $panier){
     
 ?>


<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet" />

<!-- Bootstrap -->


<link type="text/css" rel="stylesheet" href="../css/style.css" />
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />

<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css" />

<link rel="stylesheet" type="text/css" href="../assets/css/owl-carousel.css" />

<link rel="stylesheet" href="../assets/css/tooplate-artxibition.css" />

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
                                <a href="../index.html" class="active">Home</a>
                            </li>
                            <li><a href="./Bloc.php">Blocs</a></li>

                            <li>
                                <a href="./EventFront.php">Events</a>
                            </li>
                            <li>
                                <a href="./afficheResto.php">Restaurants</a>
                            </li>
                            <li><a href="./ajouterUser.php">Sign Up</a></li>
                            <li><a href="./log.php">Sign In</a></li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <form method="POST" action="">
                            <div class="form-group">
                                <span class="form-label">ID produit</span>
                                <input class="form-control" name="idp" type="text" id="idp"
                                    value="<?php echo $panier['idp'];?>" />

                            </div>
                            <div class="form-group">
                                <span class="form-label">ID</span>
                                <input class="form-control" name="Ida" type="text" id="idp" />

                            </div>
                            <div class=" form-group">
                                <span class="form-label">Prix</span>
                                <input class="form-control" name="prix" type="text" id="idp"
                                    value="<?php echo $panier['prix'];?>" />

                            </div>
                            <div class="form-group">
                                <span class="form-label">Id user</span>
                                <input class="form-control" name="id" type="text" id="id" value="<?php echo $id ;}?>" />

                            </div>
                            <div class="form-group">
                                <span class="form-label">num tel</span>
                                <input class="form-control" name="numT" type="text" id="id" />

                            </div>
                            <div class="form-group">
                                <span class="form-label">qt</span>
                                <input class="form-control" name="quantiteA" type="text" id="id" />

                            </div>
                            <div class="form-group">
                                <span class="form-label">tot</span>
                                <input class="form-control" name="total" type="text" id="id" />

                            </div>
                            <div class="form-btn">
                                <input type="submit" value="Pursache" class="submit-btn" onclick="verif();" />
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

<?php



    $error = "";

    $panier = null;
    $panierC = new PanierC();
    if (
        	
        isset($_POST['idp']) &&
        isset($_POST['id']) &&
        isset($_POST['numT']) &&
        isset($_POST['prix']) &&
        isset($_POST['quantiteA']) &&
        isset($_POST['total'])
    ) {
       
      if(  !empty($_POST['numT']) &&
          !empty($_POST['idp']) && !empty($_POST['id']) && !empty($_POST['prix']) && !empty($_POST['quantiteA'])
          && !empty($_POST['total'])) {  
            $panier = new panier(
                $_POST['idp'] ,
                $_POST['prix'],
                $_POST['quantiteA'],
                $_POST['id'],        
                $_POST['numT'],
                $_POST['total']
            );
            $panierC->ajouterPanier($panier);
            header('Location: facture.php');
            
        } else {
            $error = "Veuillez remplir tous les champs";
            
           
        }
    }

}
 
 ?>