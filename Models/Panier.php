<?php
	class panier{
        private $Ida=null;
		private $idp=null;
		private $prix=null;
		private $quantiteA=null;
        private $id=null;
        private $numT=null;
        private $total=null;

		
		
		function __construct($idp,$prix,$quantiteA,$id,$numT,$total){
		
            $this->idp=$idp;
			$this->prix=$prix;
			$this->quantiteA=$quantiteA;
            $this->id=$id;
            $this->numT=$numT;
            $this->total=$total;
            
		}
        public function getIda(){
			return $this->Ida;
		}
		public function getidp(){
			return $this->idp;
		}
		
		public function getPrix(){
			return $this->prix;
		}
		public function getQuantiteA(){
			return $this->quantiteA;
		}
        public function getid(){
			return $this->id;
		}
        public function getNumT(){
			return $this->numT;
		}
        public function getTotal(){
			return $this->total;
		}
        public function setIda( $Ida){
			$this->Ida=$Ida;
			return $this;
		}
        public function setidp( $idp){
			$this->idp=$idp;
			return $this;
		}
		
		public function setPrix( $prix){
			$this->prix=$prix;
			return $this;
		}
		public function setQuantiteA( $quantiteA){
			$this->quantiteA=$quantiteA;
			return $this;
		}
        public function setid( $id){
			$this->id=$id;
			return $this;
		}
        public function setNumT( $NumT){
			$this->numT=$NumT;
			return $this;
		}

        public function setTotal($Total){
			$this->total=$Total;
			return $this;
		}
		
	}


?>