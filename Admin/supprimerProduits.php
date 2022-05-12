<?php
	include '../Controller/ProduitC.php';
	$produitC=new ProduitC();
	$produitC->supprimerproduits($_GET["idp"]);
	header('Location:afficherProduits.php');
?>