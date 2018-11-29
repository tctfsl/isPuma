<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_SESSION["userID"])) {
  echo "<a class=\"nav-link disabled\" href=\"#\">Welcome " . $_SESSION["name"] . "</a>" . " | ";
	echo "<a class=\"nav-link\" href=\"Cart.php\">Cart</a>";
  echo "<a class=\"nav-link\" href=\"ProcessSignOut.php\">Log Out</a>	";
}
else {
  echo "<a class=\"nav-link\" href=\"Cart.php\">Cart</a>	";
	echo "<a class=\"nav-link\" href=\"SignIn.php\">Sign In</a>";
	echo "<a class=\"nav-link\" href=\"SignUp.php\">Sign Up</a>";
}
?>