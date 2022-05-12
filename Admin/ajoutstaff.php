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

include_once '../Models/staff.php';
include_once '../Controller/staffc.php';

$adherent=NULL;
if (isset($_POST['ID_Staff'])&&
    isset($_POST['nom_staff'])&&
    isset($_POST['salaire'])&&
    isset($_POST['categorie'])&&
    isset($_POST['horaire']) &&
    isset($_POST['etat']) )
{
    if (!empty($_POST['ID_Staff'])&&
        !empty($_POST['nom_staff'])&&
        !empty($_POST['salaire'])&&
        !empty($_POST['categorie'])&&
        !empty($_POST['horaire'])&&
        !empty($_POST['etat']))
    {
        $adherent= new staff($_POST['ID_Staff'],
                              $_POST['nom_staff'],
                              $_POST['salaire'],
                              $_POST['categorie'],
                              $_POST['horaire'],
                              $_POST['etat']);
        $adC=new staffc();
        $adC->Ajouters($adherent);
        header('Location:Displaystaff.php');
    }
    
}

?>



<head>
    <meta charset="UTF-8">
    <title>Rides and Attractions - Amusement Park Website Template</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
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
            <div id="body">

                <body>
                    <div class="testbox">
                        <form action="" method="post">
                            <div class="banner">
                                <h1>Gestion staff</h1>
                            </div>
                            <div class="item">
                                <p>ID staff </p>
                                <input type="text" name="ID_Staff" />

                                <p>Agent's Name</p>
                                <input type="text" name="nom_staff" />

                                <p>Salaire </p>
                                <input type="text" name="salaire" />
                                <p>Select Categorie</p>
                                <select name="categorie">
                                    <option value=""></option>
                                    <option value="Agent">*Please select*</option>
                                    <option value="Securite">Securite</option>
                                    <option value="Organisateur">Organisateur</option>
                                    <option value="DJ">DJ</option>
                                    <option value="Fournisseur">Fournisseur</option>
                                </select>


                                <p>Horraire de travail </p>
                                <input type="text" name="horaire" />

                                <select name="etat">
                                    <option value="">Etat</option>
                                    <option value="1">Working</option>
                                    <option value="2">Congé</option>
                                </select>
                            </div>




                            <div class="btn-block">
                                <input type="submit">
                            </div>
                        </form>
                    </div>
                </body>
            </div>