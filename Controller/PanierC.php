<?php
	require_once '../config.php';
	include_once '../Models/Panier.php';
	class PanierC {
		function afficherPanier(){
			$sql="SELECT * FROM commandes";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function afficherPanierParUser($id){
			$sql="SELECT * FROM commandes WHERE id=:id";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerPanier($Ida){
			$sql="DELETE FROM commandes WHERE Ida=:Ida";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':Ida', $Ida);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterPanier($panier){
			
			$sql="INSERT INTO `commandes` (`idp`, `prix`, `quantiteA`, `id`, `numT`, `total`) 
			VALUES (:idp, :prix, :quantiteA, :id, :numT, :total)";

			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
                    'idp' => $panier->getidp(),
					'prix' => $panier->getPrix(),
                    'quantiteA' => $panier->getQuantiteA(),
					'id' => $panier->getid(),
					'numT' => $panier->getNumT(),
                    'total' => $panier->getTotal(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
	
		function recupererPanier($Ida){
			$sql="SELECT * from commandes where Ida=$Ida";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$panier=$query->fetch();
				return $panier;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierPanier($panier){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE commandes SET 
                       Ida= :Ida,
                       idp= :idp,
						prix= :prix, 
                        quantiteA= :quantiteA,
						id= :id, 
						numT= :numT,
                        total = :total,
					WHERE Ida= :Ida'
				);
				$query->execute([
					'Ida' => $panier->getIda(),
                    'idp' => $panier->getidp(),
					'prix' => $panier->getPrix(),
                    'quantiteA' => $panier->getQuantiteA(),
					'id' => $panier->getid(),
					'numT' => $panier->getNumT(),
                    'total' => $panier->getTotal()
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		}

	}
?>