<?php


	require_once '../config.php';
	
	

	{
		$config = config::getConnexion();
		
			$querry = $config->prepare('
			Select nom_client as Nom , dateR as Date from reservation');
			$querry->execute();
			$data = $querry->fetchAll();
	
			require_once 'xls.php';
		XLS::export($data,'Export fichier');
		}

	

	

	
?>