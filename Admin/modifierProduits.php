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
   }
 if(isset($_GET['idp'])){
   $produitC = new ProduitC();
   $produitById = $produitC->recupererproduits($_GET['idp']);
   
 foreach($produitById as $produit){
     
 ?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <meta charset="UTF-8">
    <title>gestion de produits</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <title>Gestion des produits </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
    html,
    body {
        min-height: 100%;
    }

    body,
    div,
    form,
    input,
    select,
    textarea,
    p {
        padding: 0;
        margin: 0;
        outline: none;
        font-family: Roboto, Arial, sans-serif;
        font-size: 14px;
        color: #666;
        line-height: 22px;
    }

    h1 {

        margin: 0;
        font-size: 32px;
        color: black;
        z-index: 2;
        text-align: center
    }

    .testbox {
        display: flex;
        justify-content: center;
        align-items: center;
        height: inherit;
        padding: 20px;


    }

    form {
        width: 100%;
        padding: 20px;
        border-radius: 6px;
        background: #fff;
        box-shadow: 0 0 20px 0 #a82877;
    }

    .banner {
        position: relative;
        height: 300px;
        background-image: url("produit1.JPG");
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .banner::after {
        content: "";
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        width: 100%;
        height: 100%;
    }

    input,
    textarea,
    select {
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    input {
        width: calc(100% - 10px);
        padding: 5px;
    }

    select {
        width: 100%;
        padding: 7px 0;
        background: transparent;
    }

    textarea {
        width: calc(100% - 12px);
        padding: 5px;
    }

    .item:hover p,
    .item:hover i,
    .question:hover p,
    .question label:hover,
    input:hover::placeholder {
        color: #a82877;
    }

    .item input:hover,
    .item select:hover,
    .item textarea:hover {
        border: 1px solid transparent;
        box-shadow: 0 0 6px 0 #a82877;
        color: #a82877;
    }

    .item {
        position: relative;
        margin: 10px 0;
    }

    input[type="date"]::-webkit-inner-spin-button {
        display: none;
    }

    .item i,
    input[type="date"]::-webkit-calendar-picker-indicator {
        position: absolute;
        font-size: 20px;
        color: #a9a9a9;
    }

    .item i {
        right: 1%;
        top: 30px;
        z-index: 1;
    }

    [type="date"]::-webkit-calendar-picker-indicator {
        right: 0;
        z-index: 2;
        opacity: 0;
        cursor: pointer;
    }

    input[type="time"]::-webkit-inner-spin-button {
        margin: 2px 22px 0 0;
    }

    input[type=radio],
    input.other {
        display: none;
    }

    label.radio {
        position: relative;
        display: inline-block;
        margin: 5px 20px 10px 0;
        cursor: pointer;
    }

    .question span {
        margin-left: 30px;
    }

    label.radio:before {
        content: "";
        position: absolute;
        top: 2px;
        left: 0;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        border: 2px solid #ccc;
    }

    #radio_5:checked~input.other {
        display: block;
    }

    input[type=radio]:checked+label.radio:before {
        border: 2px solid #a82877;
        background: #a82877;
    }

    label.radio:after {
        content: "";
        position: absolute;
        top: 7px;
        left: 5px;
        width: 7px;
        height: 4px;
        border: 3px solid #fff;
        border-top: none;
        border-right: none;
        transform: rotate(-45deg);
        opacity: 0;
    }

    input[type=radio]:checked+label:after {
        opacity: 1;
    }

    .btn-block {
        margin-top: 10px;
        text-align: center;
    }

    button {
        width: 150px;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background: #a82877;
        font-size: 16px;
        color: #fff;
        cursor: pointer;
    }

    button:hover {
        background: #bf1e81;
    }

    @media (min-width: 568px) {

        .name-item,
        .city-item {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .name-item input,
        .city-item input {
            width: calc(50% - 20px);
        }

        .city-item select {
            width: calc(50% - 8px);
        }
    }

    input[type=submit] {
        display: inline-block;
        background-color: #7b38d8;
        border-radius: 10px;
        border: 4px double #cccccc;
        color: #eeeeee;
        text-align: center;
        font-size: 28px;
        padding: 20px;
        width: 200px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
    }

    input[type=reset] {
        display: inline-block;
        background-color: #7b38d8;
        border-radius: 10px;
        border: 4px double #cccccc;
        color: #eeeeee;
        text-align: center;
        font-size: 28px;
        padding: 20px;
        width: 200px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
    }
    </style>
</head>

<body>




    <div class="testbox">
        <form action="" method="POST">
            <div class="banner">
                <p> modifier les produits </p>
            </div>
            <div class="item">
                <table>
                    <tr>
                        <td>
                            <label for="nom">Nom:
                            </label>
                        </td>
                        <td><input type="text" name="nom" id="nom" value="<?php echo $produit['nom']; ?>"></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="imagep">image:
                            </label>
                        </td>
                        <td><input type="file" name="imagep" id="imagep" value="<?php echo $produit['imagep']; ?>"></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="typep">type:
                            </label>
                        </td>
                        <td>
                            <input type="text" name="typep" id="typep" value="<?php echo $produit['typep']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="prix">Prix:
                            </label>
                        </td>
                        <td>
                            <input type="text" name="prix" id="prix" value="<?php echo $produit['prix']; ?>">
                        </td>
                    </tr>
                    <td>
                        <input hidden type="text" name="prix" id="prix" value="<?php echo $produit['idp']; ?>">
                    </td>
                    <tr>
                        <td>
                            <label for="quantite">Quantite:
                            </label>
                        </td>
                        <td>
                            <input type="text" name="quantite" id="quantite" value="<?php echo $produit['quantite'];  }
				 ?>">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Modifier">
                        </td>
                        <td>
                            <input type="reset" value="Annuler">
                        </td>
                    </tr>
                </table>

        </form>
    </div>
    <?php
    include_once '../Models/Produit.php';
    include_once '../Controller/ProduitC.php';

    $error = "";

    // create adherent
    $produit = null;

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
                $_POST["idp"],
				$_POST['nom'],
                $_POST['imagep'], 
				$_POST['typep'],
                $_POST['prix'],
                $_POST['quantite']
            );
            $produitC->modifierP($produit, $_GET["idp"]);
            header('Location:afficherProduits.php');
        }
        else
           echo  $error = "Missing information";
    }    
    }
?>
</body>

</html>