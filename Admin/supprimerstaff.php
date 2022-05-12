<?php
	include '../Controller/staffc.php';
	$staffC=new staffc();
	$staffC->supprimerStaff($_GET["ID_Staff"]);
	header('Location:Displayevent.php');
?>