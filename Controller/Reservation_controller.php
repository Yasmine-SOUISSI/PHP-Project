<?php
include_once( '../config.php');
include_once('../Models/Reservation_model.php');
include_once('../Views/connection.php');
class ReservationController
{
	function afficheReservation()
	{
		$sql = "SELECT * FROM reservation";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	 function ajouterReservation($reservation)
	{
		$sql = "INSERT into reservation (nom_client, dateR,nom_restaurant,nb_personne,tel) VALUES (:nom_client, :nom_restaurant, :dateR, :nb_personne,:tel)";
		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);
			$req->execute(
				[
					'nom_client' => $reservation->getNomClient(),
					'dateR' => $reservation->getdateR(),
					'nom_restaurant' =>$reservation->getNomRestaurant(),
					'nb_personne' => $reservation->getNb_Personne(),
					'tel'=>$reservation->getTel()
				]
			);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function supprimerReservation($ID)
	{
		$sql = "DELETE FROM reservation where ID= :ID";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':ID', $ID);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function recupererReservation($ID){
		$sql="SELECT * FROM reservation WHERE ID=".$ID."";
		$db = config::getConnexion();
		try {
			$req=$db->query($sql);
			

			return $req ;
		} catch (Exception $e) {
			die("Erreur:".$e->getMessage());
		}
	}
	function modifierReservation($reservation,$ID){
		$sql="UPDATE reservation SET nom_client=:nom_client,dateR=:dateR,nom_restaurant=:nom_restaurant,nb_personne=:nb_personne,tel=:tel 
		WHERE ID=".$ID."";
		$db= config::getConnexion();
		try{
			
			$req=$db->prepare($sql);
		    $req->execute(
			[
				'nom_client' => $reservation->getNomClient(),
				'dateR' => $reservation->getdateR(),
				'nom_restaurant' =>$reservation->getNomRestaurant(),
				'nb_personne' => $reservation->getNb_Personne(),
				'tel'=>$reservation->getTel()
			]
			);
			
	}catch(Exception $e)
	{
		die("Erreur:".$e->getMessage());
	}
}
function rechercherReservation(string $rech1,string $selon){
    $sql="SELECT * FROM reservation WHERE $selon like '".$rech1."%'";
    
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
}



?>