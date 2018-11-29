<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

//Verify if user has logged in
//If true, redirect user to the main page
//If false, let user proceed with the current page
if (isset($_SESSION["userID"]))
  header("Location: http://localhost/ispuma/");
?>