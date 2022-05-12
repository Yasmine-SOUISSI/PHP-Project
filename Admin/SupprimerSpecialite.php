<?php
include_once '../Controller/SpecialiteC.php';
	$spC=new SpecialiteC();
	$spC->supprimerSpecialite($_GET["ID_SPEC"]);
	header('Location:AfficherSpecialite.php');
?>