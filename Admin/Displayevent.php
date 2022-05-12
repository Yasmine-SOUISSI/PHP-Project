<?php
	include '../Controller/eventc.php';
	$eventC=new eventc();
	$listeEvent=$eventC->afficherevents(); 
	if(isset($_GET['recherche']))
    { 
        $listeEvent=$eventC->rechercherreclamation($_GET['recherche']);
}else
$listeEvent=$eventC->afficherevents();
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
                                <a href="./afficherProduit.php">Afficher Produit </a>
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

    <div id="background">
        <div id="page">

            <link rel="stylesheet" href="css/table.css">
            <script src="../amusementparkwebsitetemplate/tablesort.js"></script>
            </head>


            <script src="../amusementparkwebsitetemplate/tablesort.js"></script>

            <!--for demo wrap-->

            <h1>Evennemts</h1>

            <form action="" method="GET">
                <table style=" position:relative;top:70px;">
                    <tr>
                        <td><input type="research" placeholder="Rechercher" name="recherche"></td>
                        <td><input Type="submit" value="Rechercher"></td>
                    </tr>
                </table>
            </form>
            <br><br><br><br>
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>ID event</th>
                            <th>Nom event</th>
                            <th><a href="Displayeventd.php"
                                    style='color:#ffffff;font-size:15px;padding:8px 12px;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;text-decoration:none;'>Date</a>
                            </th>
                            <th>Categorie</th>
                            <th>Departement</th>
                            <th>Staff</th>
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
			foreach($listeEvent as $eventC){
			?>
                        <tr>
                        <tr>
                            <td class="lalign"><?php echo $eventC['Id_event']; ?></td>
                            <td><?php echo $eventC['nom_event']; ?></td>
                            <td><?php echo $eventC['date']; ?></td>
                            <td><?php echo $eventC['categorie_E']; ?></td>
                            <td><?php echo $eventC['ID_DEPART']; ?></td>
                            <td><?php echo $eventC['Id_staff']; ?></td>
                            <td>
                                <form method="POST" action="modifierevent.php">
                                    <!-- <img src="../amusementparkwebsitetemplate/images/iconmodifier.png" alt="" width="50" height="50" > -->

                                    <input type="image" name="Modifier" id="Modifier" src="../images/iconmodifier.png"
                                        alt="" width="50" height="50">

                                    <input type="hidden" value=<?PHP echo $eventC['Id_event']; ?> name="Id_event">
                                </form>
                            </td>
                            <td>
                                <a href="supprimerEvent.php?Id_event=<?php echo $eventC['Id_event']; ?>"><img
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