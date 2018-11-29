<?php
session_start();

$password1 = $_POST["password"];
$password2 = $_POST["confirmpassword"];
$email = $_SESSION["email"];

if ($password1 == $password2) {
  include "EstablishConnection.php";
  $sqlcommand = "UPDATE customer SET password = \"" . $password1 . "\" WHERE email = \"" . $email . "\"";
  if ($result = mysqli_query($conn, $sqlcommand)) {
    header("Location: http://localhost/ispuma/");
  }
}
else {
  header("Location: http://localhost/ispuma/");
}
?>