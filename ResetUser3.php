<?php
//Verify if user has logged in
//If true, redirect user to the main page
//If false, let user proceed with the current page
include "UserHasLoggedIn.php";
?>
<!DOCTYPE html>
<html lang = "en">
  <head>
    <!-- Required meta tags come first -->
    <meta charset = "utf-8">
    <meta name = "viewpoint" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">
    
    <!-- Bootstrap CSS -->
    <link rel = "stylesheet" href = "bootstrap/bootstrap.css">
    
    <!-- Browser tab title -->
    <title>Reset Password | isPuma</title>
  </head>
  <body>
    <!-- The navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <!-- Left side of the navigation bar -->
      <a class = "navbar-brand" href = "index.php">isPuma</a>
      <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarCollapse">
        <span class = "navbar-toggler-icon"></span>
      </button>
      
      <!-- Right side of the navigation bar -->
      <div class = "navbar-collapse collapse w-100" id = "navbarCollapse">
        <ul class = "navbar-nav ml-auto">
          <li class = "nav-item">
            <a class = "nav-link" href = "SignIn.php">Sign In</a>
          </li>
          <li class = "nav-item">
            <a class = "nav-link" href = "SignUp.php">Sign Up</a>
          </li>
        </ul>
      </div>
    </nav>
    
    <div class = "container"><br>    
      <h4>Update Password</h4>
      <hr>
      <p>You can now change your password. Ensure that both password match.
 
      <form method = "post" action = "ProcessReset4.php">
        <div class = "row">
          <div class = "col">
            <div class = "form-group">
              <label for = "password">New Password</label>
              <input type = "password" pattern = ".{8,20}" class = "form-control" id = "password" name = "password" placeholder = "New Password" aria-describedby = "passwordHelp" required autofocus>
              <small id = "passwordHelp" class = "form-text text-muted">Must be 8-20 characters long.</small>
            </div>
          </div>
        </div>
        
		    <div class = "row">
          <div class = "col">
            <div class = "form-group">
              <label for = "confirmpassword">Confirm Password</label>
              <input type = "password" pattern = ".{8,20}" class = "form-control" id = "confirmpassword" name = "confirmpassword" placeholder = "Confirm Password" aria-describedby = "confirmpasswordHelp" required>
              <small id = "confirmpasswordHelp" class = "form-text text-muted">Please match this password with the previous password you wrote just now.</small>
            </div>
          </div>
        </div>
        
		    <div class = "row">
          <div class = "col">
            <div class = "pagination justify-content-end">
		          <button type = "submit" class = "btn btn-primary">Continue</button>
		        </div>
          </div>
        </div>
      </form>
    </div>
    
	  <!-- jQuery first, Popper JS, and then Bootstrap JS -->
	  <script src = "bootstrap/jquery-3.3.1.slim.min.js"></script>
    <script src = "bootstrap/popper.js"></script>
    <script src = "bootstrap/bootstrap.js"></script>
  </body>
</html>