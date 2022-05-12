<?php
	class reservation {
		private $ID=null;
		private $nom_client=null;
		private $nom_restaurant=null;
		private $dateR=null;
		private $nb_personne=null;
		private $tel=null;
		
	
		function __construct($nom_client,$nom_restaurant,$dateR,$nb_personne,$tel){
			
			$this->nom_client=$nom_client;
            $this->nom_restaurant=$nom_restaurant;
			$this->dateR=$dateR;
			$this->nb_personne=$nb_personne;
			$this->tel=$tel;
		}
		//Getters 
		function getTel(){
			return $this->tel;
		}
		
		function getStatusR(){
			return $this->statusR;
		}
		function getNb_personne(){
			return $this->nb_personne;
		}
		function getID(){
			return $this->ID;
		}
		function getNomClient(){
			return $this->nom_client;
		}
        function getNomRestaurant(){ 
			return $this->nom_restaurant;
		}
		function getdateR(){
			return $this->dateR;
		}
		//Setters
        function setID($ID){
            $this->ID=$ID;
        }
		function setStatusR($statusR){
			$this->statusR=$statusR;
		}
		function setNb_personne($nb_personne){
			$this->nb_personne=$nb_personne;
		}
		function setNomClient(string $nom_client){
			$this->nom_client=$nom_client;
		}
        function setNomRestaurant(string $nom_restaurant){
            $this->nom_restaurant=$nom_restaurant;
        }
		
		function setdateR(string $dateR){
			$this->dateR=$dateR;
		}
		function setTel(string $tel){
			$this->tel=$tel;
		}
		
	}


?>