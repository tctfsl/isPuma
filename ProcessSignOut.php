<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

// Remove all session variables.
session_unset();
session_destroy();

// Return to the previous page.
header("Location: http://localhost/ispuma/");
?>