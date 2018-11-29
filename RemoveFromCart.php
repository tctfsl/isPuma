<?php
	include "EstablishConnection.php";
	
	$deleteID = filter_var($_POST["deleteID"], FILTER_SANITIZE_NUMBER_INT);
	$stmt = $conn->prepare("DELETE FROM cart WHERE CartID=?");
	$stmt->bind_param("i", $deleteID);
	$stmt->execute();
	
	include 'Cart.php';
?>