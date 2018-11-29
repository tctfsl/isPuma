<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	
	include "EstablishConnection.php";
	
	$UserID = $_SESSION["userID"];
	$sql = "SELECT * FROM cart WHERE UserID=".$UserID."";
	$result = mysqli_query($conn, $sql);
	
	while ($row = mysqli_fetch_array($result))
	{
		$itemID = $row["ItemID"];
		if (!($sqlstmt = $conn->prepare("INSERT INTO transactions (ItemID, UserID, Address, State, City, Postcode, ReceiverName, ReceiverPhone, CardNumber, NameOnCard, ExpirationDate, CVV) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"))) {
			echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
		}
		
    if (!($sqlstmt->bind_param("iisssssiissi", $itemID, $UserID, $_POST["address"], $_POST["state"], $_POST["city"], $_POST["postcode"], $_POST["receiverName"], $_POST["phoneNumber"], $_POST["cardNumber"], $_POST["nameOnCard"], $_POST["expDate"], $_POST["cvv"]))) {
			echo "Binding parameters failed: (" . $sqlstmt->errno . ") " . $sqlstmt->error;
		}
		
		if (!($sqlstmt->execute())) {
			echo "Execute failed: (" . $sqlstmt->errno . ") " . $sqlstmt->error;
		}
	}
	
  date_default_timezone_set("Asia/Kuala_Lumpur");
  $currentTime = date('Y-m-d H:i:s');
    
  $sql = "INSERT INTO activity (userID, date, activity) VALUES (" . $UserID . ", \"" . $currentTime . "\", 'purchase')";
  $conn->query($sql);
  
	$sqlstmt = "DELETE FROM cart WHERE UserID=".$UserID."";
	if($result = mysqli_query($conn, $sqlstmt))
	{
		echo '<script language="javascript">alert("Thanks for shopping with us, your items will shipped soon.");</script>';
		include "index.php";
	}
	
?>