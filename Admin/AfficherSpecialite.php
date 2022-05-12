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
        include_once '../Controller/SpecialiteC.php';
        include_once '../Controller/DepartementC.php';


        $depC=new DepartementC();
        $listD=$depC->affichageList();

        $spC=new SpecialiteC();

        if (isset($_GET['tri'])){
            $listC=$spC->triRessoyrce();
        }
        else {$listC=$spC->affichageList();}

        if(isset($_GET['recherche']))
            { 
                $listD=$depC->rechercherreclamation($_GET['recherche']);
        } 


?>
<html>
<!DOCTYPE html>
<!-- Website Template by freewebsitetemplates.com -->

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
                        <li><a href="AfficherSpecialite.php">Afficher Blocs</a></li>
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

<form action="" method="GET">
    <input type="text" name="tri" hidden>
    <input type="submit" value="trier">
</form>
</div>
<a href='AjouterSpecialite.php'>Ajouter specialite</a>
<table>
    <tr>
        <th>Identifiant Specialite</th>
        <th>Nom Specialite</th>
        <th>Type Specialite</th>
    </tr>
    <?php

foreach ($listC as $row)
{
    
    echo('<tr>');
    echo('<td>');
    echo($row['ID_SPEC']);
    echo('</td>');
    echo('<td>');
    echo($row['NOM_SPEC']);
    echo('</td>');
    echo('<td>');
    echo($row['TYPE_SPEC']);
    echo('</td>');
    ?>
    <td>
        <form method="POST" action="modifierSpecialite.php">
            <input type="submit" name="Modifier" value=" Modifier    ">
            <input type="hidden" value=<?PHP echo $row['ID_SPEC']; ?> name="ID_SPEC">
        </form>
    </td>
    <td>
        <a href="supprimerSpecialite.php?ID_SPEC=<?php echo $row['ID_SPEC']; ?>">Supprimer</a>
    </td>

    <?php
    echo('</tr>');
}

?>
</table>

<a href='AjouterDepartement.php'>Ajouter departement</a>


<table>
    <tr>
        <th>Identifiant Departement</th>
        <th>Nom Departement</th>
        <th> Nombre de places</th>
        <th>Identifiant Specialite </th>
        <th>Photo du département </th>
    </tr>
    <tr>
        <form action="" method="GET">

            <input type="research" placeholder="Rechercher" name="recherche">
            <input Type="submit" value="Rechercher">


        </form>
    </tr>

    <?php

foreach ($listD as $row)
{
    
    echo('<tr>');
    echo('<td>');
    echo($row['ID_DEPART']);
    echo('</td>');
    echo('<td>');
    echo($row['NOM_DEPART']);
    echo('</td>');
    echo('<td>');
    echo($row['NB_PLACES']);
    echo('</td>');
    echo('<td>');
    echo($row['ID_SPEC']);
    echo('</td>');
    echo('<td>');
    ?>
    <img src="../images/<?php echo $row['pict']?>" height="120" width="120">
    <?php
    echo('</td>');
    ?>

    <td>
        <a href="modifierDepartement.php?ID_DEPART=<?php echo $row['ID_DEPART']; ?>">Modifier</a>
    </td>
    <td>
        <a href="supprimerDepartement.php?ID_DEPART=<?php echo $row['ID_DEPART']; ?>">Supprimer</a>
    </td>

    <?php
    echo('</tr>');
}

?>
</table>

<button type="button" class="btn btn-sm btn-outline-secondary" onclick=" window.print();">Export</button>

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