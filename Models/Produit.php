<?php
	class produit{
		private $idp=null;
		private $nom=null;
		 private $imagep ;
		private $typep=null;
		private $prix=null;
		private $quantite=null;
		
		
		function __construct($idp, $nom, $imagep, $typep, $prix, $quantite){
			$this->idp=$idp;
			$this->nom=$nom;
			$this->imagep=$imagep;
			$this->typep=$typep;
			$this->prix=$prix;
			$this->quantite=$quantite;
		}
		public function getIdp(){
			return $this->idp;
		}
		public function getNom(){
			return $this->nom;
		}
		public function getImagep(){
			return $this->imagep;
		}
		public function getTypep(){
			return $this->typep;
		}
		public function getPrix(){
			return $this->prix;
		}
		public function getQuantite(){
			return $this->quantite;
		}
        public function setIdp( $idp){
			$this->idp=$idp;
			return $this;
		}
		public function setNom( $nom){
			$this->nom=$nom;
			return $this;
		}
		public function setImagep( $imagep){
			$this->imagep=$imagep;
			return $this;
		}
		public function setTypep( $typep){
			$this->typep=$typep;
			return $this;
		}
		public function setPrix( $prix){
			$this->prix=$prix;
			return $this;
		}
		public function setQuantite( $quantite){
			$this->quantite=$quantite;
			return $this;
		}
		
	}


?>