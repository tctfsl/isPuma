<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
  include "EstablishConnection.php";
	
  if (isset($_SESSION["userID"])) {
    $userID = $_SESSION["userID"];
    $addID = $_POST["addID"];
	  $stmt = $conn->prepare("INSERT INTO cart (UserID, ItemID) VALUES (?, ?)");
	  $stmt->bind_param("ii", $userID, $addID);
	  $stmt->execute();
  	
	  include 'index.php';
	  echo '<script language="javascript">alert("Item has been added to your cart! Click on your cart to review and checkout");</script>';
  }
  else {
    include 'signin.php';
	  echo '<script language="javascript">alert("Please sign in to add item into cart.");</script>';
  }
?>