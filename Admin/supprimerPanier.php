<?php
	include '../Controller/PanierC.php';
	$panierC=new PanierC();
	$panierC->supprimerPanier($_GET["ida"]);
	header('Location:afficherPanier.php');
?>