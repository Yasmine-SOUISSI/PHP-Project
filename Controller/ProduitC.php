<?php
	include_once '../config.php';
	include_once '../Models/Produit.php';
	class ProduitC {
		function afficherproduits(){
			$requete="SELECT * FROM produits";
			$config= config::getConnexion();
			try{
				$querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}


		function supprimerproduits($idp){
			$sql="DELETE FROM produits WHERE idp=:idp";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idp', $idp);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}


		function ajouterP($produit){
			$sql="INSERT INTO `produits` (`idp`, `nom`, `imagep`, `typep`, `prix`, `quantite`)
			 VALUES (:idp, :nom, :imagep , :typep, :prix, :quantite)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute(
					[
					'idp'=>$produit->getIdp(),
					'nom' => $produit->getNom(),
					'imagep' => $produit->getImagep(),
					'typep' =>$produit->getTypep(),
					'prix' => $produit->getPrix(),
					'quantite' =>$produit->getQuantite(),
				]
					);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererproduits($idp){
			$sql="SELECT * from `produits` where idp=".$idp."";
			$db = config::getConnexion();
			try{
				$query=$db->query($sql);
				return $query;
                
            } 
			
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function affichertri()
        {
            $requete = "select * from produits ORDER BY prix";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function rechercheproduit($idp)
        {
            $requete = "select * from produits where idp like '%$idp%'";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
	
		function modifierP($produit,$idp){
			$sql='UPDATE produits SET 
				nom= :nom,
				imagep= :imagep ,
				typep= :typep,
				prix= :prix,
				quantite= :quantite,
			WHERE idp= '.$idp.' ' ;
				$db = config::getConnexion();
			try {
				
				$req=$db->prepare($sql);
				
				$query->execute([
					'idp' =>$produit->getIdp(),
					'nom' => $produit->getNom(),
					'imagep' => $produit->getImagep(),
					'typep' =>$produit->getTypep(),
					'prix' => $produit->getPrix(),
					'quantite' =>$produit->getQuantite(),
				
				]);
			} catch (PDOException $e) {
				$e->getMessage();
				
			}
		}
	 }
?>