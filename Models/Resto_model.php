<?php

class restaurant {
  private $ID = null;
  private $nom_restaurant = null;
  private $nb_places = null;
  private $menu =null;
  private $description_resto = null;
  
   function __construct($nom_restaurant,$nb_places,$menu,$description_resto)
   {
         $this->nom_restaurant=$nom_restaurant;
         $this->nb_places=$nb_places;
         $this->menu=$menu;
         $this->description_resto=$description_resto;
   }
      
   function getNomRestaurant()
   {
	   return $this->nom_restaurant;
   }
   function getNbPlaces()
   {
      return $this->nb_places;
   }
   function getMenu()
   {
      return $this->menu;
   }
   function getDescription()
   {
      return $this->description_resto;
   }
   function setNomRestaurant($nom_restaurant)
   {
      $this->nom_restaurant=$nom_restaurant;
   }
   function setNbPlaces($nb_places)
   {
      $this->nb_places=$nb_places;
   }
   function setMenu($menu)
   {
      $this->menu=$menu;
   }
   function setDescription($description_resto)
   {
      $this->description_resto=$description_resto;
   }
   function getID()
   {
      return $this->ID;
   }
   
}  
?>