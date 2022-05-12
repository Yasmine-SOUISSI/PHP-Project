<?php
include_once '../Controller/DepartementC.php';
	$depC=new DepartementC();
	$depC->supprimerDepartement($_GET["ID_DEPART"]);
	header('Location:AfficherSpecialite.php');
?>