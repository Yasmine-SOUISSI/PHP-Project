<?php 
include '../config.php';
include_once '../Models/event.php';
class eventc{


function Ajouter($ser){
$sql= 'INSERT INTO evenements(Id_event,nom_event,date,categorie_E,ID_DEPART,Id_staff) VALUES (:Id_event,:nom_event, :date, :categorie_E, :ID_DEPART,:Id_staff)';
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
	$recipesStatement->execute(
					[ 'Id_event'=>$ser->getID(),
		            'nom_event' =>$ser->getnom_event(),
		            'date'=>$ser->getdate(),
		            'categorie_E'=>$ser->getcategorie(),
		            'ID_DEPART'=>$ser->getid_bloc(),
		             'Id_staff'=>$ser->getid_staff(),
		                   
		       
		


	]);
 }
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());

}

}
function afficherevents(){
	$sql="SELECT * FROM evenements";
	$db = config::getConnexion();
	try{
		$listeEvent = $db->query($sql);
		return $listeEvent;
	}
	catch(Exception $e){
		die('Erreur:'. $e->getMeesage());
	}
}

function supprimerEvent($Id_event){
	$sql="DELETE FROM evenements WHERE Id_event=:Id_event";
	$db = config::getConnexion();
	$req=$db->prepare($sql);
	$req->bindValue(':Id_event', $Id_event);
	try{
		$req->execute();
	}
	catch(Exception $e){
		die('Erreur:'. $e->getMeesage());
	}
}




function recupererEvent($Id_event){
	$sql="SELECT * from evenements where Id_event=$Id_event";
	$db = config::getConnexion();
	try{
		$query=$db->prepare($sql);
		$query->execute();

		$event=$query->fetch();
		return $event;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

	 
}
?>