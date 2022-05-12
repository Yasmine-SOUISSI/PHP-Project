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
	include '../Controller/staffc.php';
	$staffC=new staffc();
	$listeEvent=$staffC->afficherstaff(); 
?>


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
    <br>
    <div id="background">
        <div id="page">

            <link rel="stylesheet" href="css/table.css">
            <script src="../amusementparkwebsitetemplate/tablesort.js"></script>
            </head>


            <script src="../amusementparkwebsitetemplate/tablesort.js"></script>

            <!--for demo wrap-->
            <h1>Fixed Table header</h1>
            <div class="tbl-header">
                <table>
                    <thead>
                        <tr>
                            <th>ID staff</th>
                            <th>Nom staff</th>
                            <th>Salaire</th>
                            <th>Categorie</th>
                            <th>Horraire</th>
                            <th>Etat</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <?php
			foreach($listeEvent as $staffC){
			?>
                        <tr>
                        <tr>
                            <td class="lalign"><?php echo $staffC['ID_Staff']; ?></td>
                            <td><?php echo $staffC['nom_staff']; ?></td>
                            <td><?php echo $staffC['salaire']; ?></td>
                            <td><?php echo $staffC['categorie']; ?></td>
                            <td><?php echo $staffC['horaire']; ?></td>
                            <td><?php echo $staffC['etat']; ?></td>
                            <td>
                                <form method="POST" action="modifierstaff.php">
                                    <!-- <img src="../amusementparkwebsitetemplate/images/iconmodifier.png" alt="" width="50" height="50" > -->

                                    <input type="image" name="Modifier" id="Modifier" src="../images/iconmodifier.png"
                                        alt="" width="50" height="50">

                                    <input type="hidden" value=<?PHP echo $staffC['ID_Staff']; ?> name="ID_Staff">
                                </form>
                            </td>
                            <td>
                                <a href="supprimerEvent.php?ID_Staff=<?php echo $staffC['ID_Staff']; ?>"><img
                                        src="../images/supprimer (1).png" alt="" width="40" height="40"></a>
                            </td>
                        </tr>
                        <?php
		 		}
		 	?>
                    </tbody>
                </table>

            </div>
</body>