<?php
	class user{
		private $id=null;
		private $username=null;
		private $email=null;
		private $pwd=null;
		private $confirmer=null;
		private $datee=null;
		private $typee=null;
		
		private $password=null;
		function __construct( $username, $email, $pwd, $confirmer, $datee){
			//$this->id=$id;
			$this->username=$username;
			$this->email=$email;
			$this->pwd=$pwd;
			$this->confirmer=$confirmer;
			$this->datee=$datee;
			

			//$this->typee=$typee;
		}
		function getid(){
			return $this->id;
		}
		function getusername(){
			return $this->username;
		}
		function getemail(){
			return $this->email;
		}
		function getpwd(){
			return $this->pwd;
		}
		function getconfirmer(){
			return $this->confirmer;
		}
		function getdatee(){
			return $this->datee;
		}
		function gettypee(){
			return $this->typee;
		}
		function setusername(string $username){
			$this->username=$username;
		}
		function setemail(string $email){
			$this->email=$email;
		}
		function setpwd(string $pwd){
			$this->pwd=$pwd;
		}
		function setconfirmer(string $confirmer){
			$this->confirmer=$confirmer;
		}
		function setdatee(string $datee){
			$this->datee=$datee;
		}
		function settypee(string $typee){
			$this->typee=$typee;
		}
		
	}


?>