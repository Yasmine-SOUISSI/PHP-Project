<?php
include_once( '../config.php');
include_once('../Models/Resto_model.php');
include_once('../Views/connection.php');
class RestaurantController
{
	function afficheRestaurant()
	{
		$sql = "SELECT * FROM restaurant";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function afficherReservation()
	{
		$sql = "SELECT r.nom_restaurant ,r.ID,re.nom_client,re.nb_personne,re.dateR ,re.tel FROM restaurant r INNER JOIN reservation re ON r.nom_restaurant=re.nom_restaurant";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		}
		 catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}		
	}
	 function ajouterRestaurant($restaurant)
	{  
		$sql="INSERT INTO restaurant (nom_restaurant,nb_places,menu,description_resto) VALUES (:nom_restaurant,:nb_places,:menu,:description_resto)";
		$db = config::getConnexion();
			try {
				$req = $db->prepare($sql);
				$req->execute(
					[
						'nom_restaurant' => $restaurant->getNomRestaurant(),
						'nb_places' => $restaurant->getNbPlaces(),
						'menu' =>$restaurant->getMenu(),
						'description_resto' => $restaurant->getDescription()
					]
				);
			} catch (Exception $e) {
				echo 'Erreur: ' . $e->getMessage();
			}
	
	}

	function supprimerRestaurant($ID)
	{
		$sql = "DELETE FROM restaurant where ID= :ID";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':ID', $ID);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function recupererRestaurant($ID){
		$sql="SELECT * FROM restaurant WHERE ID=".$ID."";
		$db = config::getConnexion();
		try {
			$req=$db->query($sql);
			

			return $req ;
		} catch (Exception $e) {
			die("Erreur:".$e->getMessage());
		}
	}
	function modifierRestaurant($restaurant,$ID){
		$sql="UPDATE restaurant SET nom_restaurant=:nom_restaurant,nb_places=:nb_places,menu=:menu,description_resto=:description_resto
		WHERE ID=".$ID."";
			$db= config::getConnexion();
		try{
			$req=$db->prepare($sql);
		    $req->execute(
			[
				'nom_restaurant' => $restaurant->getNomrestaurant(),
				'nb_places' => $restaurant->getNbPlaces(),
				'menu' =>$restaurant->getMenu(),
				'description_resto' => $restaurant->getDescription(),
				
				
			]
			);
		
	}catch(Exception $e)
	{
		die("Erreur:".$e->getMessage());
	}
}
function rechercherByNomResto($nom_restaurant) {
	$sql = "SELECT * FROM restaurant WHERE nom_restaurant LIKE '%".$nom_restaurant."%'";
	$db = config::getConnexion();
	try {
		$liste = $db->query($sql);
		return $liste;
	} catch (Exception $e) {
		die('Erreur: ' . $e->getMessage());
	}
	
}
function rechercherByNomRestaurant($search) {
	$sql = "SELECT r.nom_restaurant ,r.ID,re.nom_client,re.nb_personne,re.dateR,re.tel FROM restaurant r INNER JOIN reservation re ON 
	r.nom_restaurant=re.nom_restaurant
	 WHERE r.nom_restaurant LIKE '%".$search."%' OR re.nom_client LIKE '%".$search."%' OR re.nb_personne LIKE '%".$search."%' OR re.dateR LIKE '%".$search."%' OR re.tel LIKE '%".$search."%'";
	$db = config::getConnexion();
	try {
		$liste = $db->query($sql);
		return $liste;
	} catch (Exception $e) {
		die('Erreur: ' . $e->getMessage());
	}
	
}
}


?>