<?php
	include  '../config.php';
	include_once '../Models/user.php';
	class userC {
		
		function afficheruser(){
			$sql="SELECT * FROM user";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}


		
		function supprimeruser($id){
			$sql="DELETE FROM user WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouteruser($user){
			$user->settypee( "client");
			$sql="INSERT INTO user ( username, email, pwd, confirmer, datee,typee) 
			VALUES (:username,:email, :pwd,:confirmer, :datee, :typee)";
			$db = config::getConnexion();

			try{
				$query = $db->prepare($sql);
				$query->execute([
					//'id' => $user->getid(),
					'username' => $user->getusername(),
					'email' => $user->getemail(),
					'pwd' => $user->getpwd(),
					'confirmer' => $user->getconfirmer(),
					'typee' => $user->gettypee(),
					'datee' => $user->getdatee()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}



		function recupereruser($id){
			$sql="SELECT * from user where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifieruser($user, $id)
		{
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE user SET 
						username= :username, 
						email= :email, 
						pwd= :pwd, 
						confirmer= :confirmer, 
						datee= :datee
					WHERE id= :id'
				);
				$query->execute([
					'username' => $user->getusername(),
					'email' => $user->getemail(),
					'pwd' => $user->getpwd(),
					'confirmer' => $user->getconfirmer(),
					'datee' => $user->getdatee(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}



		function connexionUser($email,$password)
		{
            $sql="SELECT * FROM user  WHERE email ='" . $email . "' and pwd = '". $password."'";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
                $count=$query->rowCount();
                if($count==0) {
                    $message = "pseudo ou le mot de passe est incorrect";
                } else {
                    $x=$query->fetch();
                    $message = $x['typee'];
                }
            }
            catch (Exception $e){
                    $message= " ".$e->getMessage();
            }
          return $message;
        }


		public function recupererUseremail($email)
        {
            $sql = "SELECT * from user where email='$email' ";
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute();
    
                $user = $query->fetch();
                return $user;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }


		public function recupererUserInfo($email)
        {
            $sql = "SELECT * from user where email= :email";
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute(['email' => $email ] );
    
                $user = $query->fetch();
                return $user;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }

		function getuserbyID($id)
        {
            $requete = "select * from user where id=:id";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'id'=>$id
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
		function triuser()
        {
            $requete = "select * from user ORDER BY datee";
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

		function rechercheuser($idv)
        {
            $requete = "select * from user where username like '%$idv%'";
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



		public function pagination($page, $perPage)
        {
            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            $sql = "SELECT * FROM user LIMIT {$start},{$perPage}";
            $db = config::getConnexion();
            try {
                $liste = $db->prepare($sql);
                $liste->execute();
                $liste = $liste->fetchAll(PDO::FETCH_ASSOC);
                return $liste;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }

        public function triCroissant($page, $perPage)
        {
            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            $sql = "SELECT * FROM user order by username LIMIT {$start},{$perPage}";
            $db = config::getConnexion();
            try {
                $liste = $db->prepare($sql);
                $liste->execute();
                $liste = $liste->fetchAll(PDO::FETCH_ASSOC);
                return $liste;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }

    
    
        public function calcTotalRows($perPage)
        {
            $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM user";
            $db = config::getConnexion();
            try {
    
                $liste = $db->query($sql);
                $total = $db->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
                $pages = ceil($total / $perPage);
                return $pages;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }


        





        function commandeBAS()
	{
		$sql="SELECT count(*)as nbr FROM user where 	datee<'01-01-2022'";
		$db = config::getConnexion();
		try
		{
			$liste=$db->query($sql);
			
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function commandeMOY()
	{
		$sql="SELECT count(*)as nbr FROM user where 	datee BETWEEN '01-01-2022' AND '07-05-2022'  ";
		$db = config::getConnexion();
		try
		{
			$liste=$db->query($sql);
			
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function commandeHAUT()
	{
		$sql="SELECT count(*)as nbr FROM user where 	datee> '01-01-2022' ";
		$db = config::getConnexion();
		try
		{
			$liste=$db->query($sql);
			
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	}
?>