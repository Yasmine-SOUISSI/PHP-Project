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
    require_once     '../Controller/userC.php';
  

    
 $userC = new userC();

   //pagination

   $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
   $perpage = isset($GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 3 ;
   $userS = $userC->pagination($page, $perpage);
   $totalP = $userC->calcTotalRows($perpage);
 
 if(isset($_POST['tri'])) {
    //$userS = $userC->triuser();
    $userS = $userC->triCroissant($page, $perpage);
 }
 else if (isset($_GET['idv']))
 {
    $userS = $userC->rechercheuser($_GET['idv']);

 }

 else  if(isset($_POST['afficher'])) {
    $userS = $userC->afficheruser();
 }
 //.....na77itha bch te5dem el pagination
/* else {
    $userS = $userC->afficheruser();
 }*/
    
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css" />

    <link rel="stylesheet" type="text/css" href="../assets/css/owl-carousel.css" />

    <link rel="stylesheet" href="../assets/css/tooplate-artxibition.css" />





</head>

<body>
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
                            <li><a href="./AfficherSpecialite.php">Afficher Blocs</a></li>
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
    <button><a href="logout.php"> log out</a> </button>

    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <div class="text-center">
                <form action="" method="POST">
                    <input type="text" name="tri" hidden>
                    <input type="submit" value="trier" class="btn btn-primary">
                    <br>
                    <br>

                </form>
            </div>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                <tfoot>
                    <tr>
                        <td><a class="btn btn-info" href="export_excel.php">Save as Excel</a></td>

                </tfoot>
                <tfoot>
                    <tr>
                        <td><a class="btn btn-info" href="exporttxt.php">Save as txt</a></td>

                </tfoot>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>username</th>
                                        <th>email</th>
                                        <th>date</th>
                                        <th>type</th>
                                    </tr>
                                </thead>
                                <?php foreach ($userS as $user) { ?>
                                <tr>
                                    <td><?php echo $user['id'] ; ?></td>
                                    <td><?php echo $user['username'] ; ?></td>
                                    <td><?php echo $user['email'] ; ?></td>
                                    <td><?php echo $user['datee'] ; ?></td>
                                    <td><?php echo $user['typee'] ; ?></td>


                                    <td><a href="supprimerutilisateur.php?id=<?php echo $user['id'] ; ?>"><img
                                                src="../Assets/Images/supp.png" witdh='25px' height='25px'></a>
                                    </td>
                                    <td><a href="modifierutilisateur.php?id=<?php echo $user['id'] ; ?>">modifier</a>
                                    </td>
                                </tr>

                                <?php }  ?>
                            </table>
                        </div>
                    </div>
                    <a href="imprimer.php">Imprimer</a>
                    <a href="statistique.php">statistiques</a>
                    <div class="row">
                        <nav>
                            <ul class="pagination">
                                <?php

                    for ($x = 1; $x <= $totalP; $x++) :?>

                                <li class="page-item">
                                    <a class="page-link"
                                        href="?page=<?php echo $x; ?>&per-page=<?php echo $perpage; ?>"><?php echo $x; ?></a><?php endfor; ?>
                                </li>

                            </ul>
                        </nav>
                    </div>

                    <!-- Logout Modal-->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Select "Logout" below if you are ready to end your current
                                    session.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="logout.php">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bootstrap core JavaScript-->
                    <script src="vendor/jquery/jquery.min.js"></script>
                    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                    <!-- Custom scripts for all pages-->
                    <script src="js/sb-admin-2.min.js"></script>

                    <!-- Page level plugins -->
                    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
                    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

                    <!-- Page level custom scripts -->
                    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>