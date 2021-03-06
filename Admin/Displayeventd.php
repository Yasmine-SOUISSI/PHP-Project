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
	include '../Controller/eventc.php';
	$eventC=new eventc();
	$listeEvent=$eventC->affichereventsbydate(); 
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
    <div id="background">
        <div id="page">
            <div id="header">
                <a href="index.html" class="logo">Land'na</a>
                <ul>
                    <li>
                        <a href="index.html">home</a>
                    </li>
                    <li>
                        <a href="blocs.php">Gestion blocs</a>
                    </li>
                    <li class="selected">
                        <a href="services.php">Gestion services</a>
                    </li>
                    <li>
                        <a href="../amusementparkwebsitetemplate/comptes.php">Gestion Comptess</a>
                    </li>
                    <li>
                        <a href="../amusementparkwebsitetemplate/produits.php">Produits</a>
                    </li>
                    <li>
                        <a href="../amusementparkwebsitetemplate/restauration.php">Restauration</a>
                    </li>
                </ul>
            </div>
            <link rel="stylesheet" href="css/table.css">
            <script src="../amusementparkwebsitetemplate/tablesort.js"></script>
            </head>


            <script src="../amusementparkwebsitetemplate/tablesort.js"></script>

            <!--for demo wrap-->
            <h1>Fixed Table header</h1>
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>ID event</th>
                            <th>Nom event</th>
                            <th><a href="Displayevent.php"
                                    style='background:#bd2536;color:#ffffff;font-size:15px;padding:8px 12px;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;text-decoration:none;'>Date</a>
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

                                    <input type="image" name="Modifier" id="Modifier"
                                        src="../amusementparkwebsitetemplate/images/iconmodifier.png" alt="" width="50"
                                        height="50">

                                    <input type="hidden" value=<?PHP echo $eventC['Id_event']; ?> name="Id_event">
                                </form>
                            </td>
                            <td>
                                <a href="supprimerEvent.php?Id_event=<?php echo $eventC['Id_event']; ?>"><img
                                        src="../amusementparkwebsitetemplate/images/supprimer (1).png" alt="" width="40"
                                        height="40"></a>
                            </td>
                        </tr>
                        <?php
		 		}
		 	?>
                    </tbody>
                </table>

            </div>
</body>