<?php
//session_start();

//Establish connection with server and database.
include "EstablishConnection.php";

$sqlcommand = "SELECT secQuestion FROM customer WHERE email = \"" . $_SESSION["email"] . "\"";
$result = $conn->query($sqlcommand);

if ($row = $result->fetch_assoc()) {
  echo "<label for = \"answer\">";
  echo $row["secQuestion"];
  echo "</label>";
}
?>