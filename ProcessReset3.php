<?php
session_start();

include "EstablishConnection.php";

$answer = $_POST["answer"];
$email = $_SESSION["email"];

$sqlcommand = "SELECT secQueAnswer FROM customer WHERE email = \"" . $email . "\"";
$result = mysqli_query($conn, $sqlcommand);

if ($row = $result->fetch_assoc()) {
  if ($answer == $row["secQueAnswer"]) {
    header("Location: http://localhost/ispuma/ResetUser3.php");
  }
  else {
    header("Location: http://localhost/ispuma/");
  }
}
?>