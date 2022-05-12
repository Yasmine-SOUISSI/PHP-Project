<?php
include "../Controller/Reservation_controller.php";
$reservation = new ReservationController();
    $reservation->supprimerReservation($_GET["ID"]);
    header("Location:afficherReservation.php");
?>