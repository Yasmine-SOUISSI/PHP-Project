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
   
    include_once '../Controller\ProduitC.php';
    include_once '../Models\Produit.php';
    
    $error = "";

    // create adherent
    $produit= null;

    // create an instance of the controller
    $produitC = new ProduitC();
    if (
        isset($_POST["idp"]) &&
		isset($_POST["nom"]) &&		
        isset($_POST["imagep"]) &&
		isset($_POST["typep"]) && 
        isset($_POST["prix"]) && 
        isset($_POST["quantite"])
    ) {
        if (
            !empty($_POST["idp"]) && 
			!empty($_POST['nom']) &&
            !empty($_POST["imagep"]) && 
			!empty($_POST["typep"]) && 
            !empty($_POST["prix"]) && 
            !empty($_POST["quantite"])
        ) {
            $produit = new produit(
                $_POST['idp'],
				$_POST['nom'],
                $_POST['imagep'], 
				$_POST['typep'],
                $_POST['prix'],
                $_POST['quantite']
            );
            $produitC->ajouterP($produit);
            var_export($produit);
           // header('Location:afficherListeAdherents.php');
        }
        else
            $error = "Missing information";
    }

    //file image upload 

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
                            <li><a href="ajouterP.php">Ajouter Produit</a></li>
                            <li>
                                <a href="./ajouterRestaurant.php">Ajouter Restaurant</a>
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
    <br>
    <br>
    <br>
    <button><a href="afficherproduits.php">Retour à la liste des produits</a></button>


    <h1> Ajouter le produit </h1>
    <div class="testbox">
        <form method=post action="">
            <div class="banner">
                <p> ajouter les produits </p>
            </div>
            <div class="item">

                <td><label> Id_produit</label></td>
                <input type="text" name="idp" />

            </div>
            <div class="item">

                <td><label> NOM</label></td>
                <input type="text" name="nom" />

            </div>
            <div class="item">
                <td><label> image</label></td>
                <input type="file" name="imagep" />
            </div>

            <div class="item">
                <td><label> type</label></td>
                <input type="text" name="typep" />

            </div>
            <div class="item">
                <td><label> prix</label></td>
                <input type="text" name="prix" />

            </div>
            <div class="item">
                <td><label>quantite</label></td>
                <input type="text" name="quantite" />
            </div>



            <input type="submit" value="ajouter">
            <input type="reset" value="Annuler">
        </form>
    </div>
</body>

</html>