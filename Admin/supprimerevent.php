<?php
	include '../Controller/eventc.php';
	$eventC=new eventc();
	$eventC->supprimerEvent($_GET["Id_event"]);
	header('Location:Displayevent.php');
?>