<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

//Get inputs from SignUp.php.
//i.e. email, name, password, security question, and its answer.
$email = $_POST["username"];
$name = $_POST["name"];
$password = $_POST["password"];
$securityQuestion = $_POST["securityQuestion"];
$securityQuestionAnswer = $_POST["securityQuestionAnswer"];

//Establish connection with server and database.
include "EstablishConnection.php";

if (!($sqlstmt = $conn->prepare("SELECT email, password FROM customer WHERE email = ?"))) {
  echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
}

if (!($sqlstmt->bind_param("i", $email))) {
  echo "Binding parameters failed: (" . $sqlstmt->errno . ") " . $sqlstmt->error;
}

if (!($sqlstmt->execute())) {
  echo "Execute failed: (" . $sqlstmt->errno . ") " . $sqlstmt->error; 
}

if (!($result = $sqlstmt->get_result())) {
  echo "Getting result failed: (" . $sqlstmt->errno . ") " . $sqlstmt->error;
}

if ($row = $result->fetch_assoc()) {
  if (!(isset($row["password"]))) {
    //This means that there is a registered user with this email (username).
    include 'index.php';
    echo '<script language="javascript">alert("That email is already taken!");</script>';
  }
  else {
    //This means that there is no registered user with this email.
    //Thus, allow the current user to proceed with the registration.
    if (!($sqlstmt = $conn->prepare("INSERT INTO customer(email, name, password, secQuestion, secQueAnswer) VALUES (?, ?, ?, ?, ?)"))) {
      echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
    }
    
    if (!($sqlstmt->bind_param("sssss", $email, $name, $password, $securityQuestion, $securityQuestionAnswer))) {
      echo "Binding parameters failed: (" . $sqlstmt->errno . ") " . $sqlstmt->error;
    }
    
    if (!($sqlstmt->execute())) {
      echo "Execute failed: (" . $sqlstmt->errno . ") " . $sqlstmt->error; 
    }  
    
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }

    // Remove all session variables.
    session_unset();
    session_destroy();
    
    include 'index.php';
    echo '<script language="javascript">alert("Registration successful! Welcome to the store.");</script>';
    
  }
}
else {
  include 'index.php';
  echo '<script language="javascript">alert("Registration error.");</script>';
}
?>