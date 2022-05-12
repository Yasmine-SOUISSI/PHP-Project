<?php
include "../Controller/Resto_controller.php";
$restaurant = new RestaurantController();
    $restaurant->supprimerRestaurant($_GET["ID"]);
    header("Location:afficherRestaurant.php");
?>