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
    <title>Sign In | isPuma</title>
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
          <li class = "nav-item active">
            <a class = "nav-link" href = "SignIn.php">Sign In</a>
          </li>
          <li class = "nav-item">
            <a class = "nav-link" href = "SignUp.php">Sign Up</a>
          </li>
        </ul>
      </div>
    </nav>
    
    <div class = "container"><br>
      <!-- Login form | User -->
      
      <h3>Welcome to isPuma! Please sign in to proceed.</h3><hr>
      
      <form method = "post" action = "ProcessSignIn.php">
        <!-- Email -->
        <div class = "row">
          <div class = "col">
            <div class = "form-group">
              <label for = "username">Email</label>
              <input type = "email" class = "form-control" id = "username" name = "username" placeholder = "Email" aria-describedby = "usernameHelp" required autofocus>
              <small id = "usernameHelp" class = "form-text text-muted">It happens to be your email.</small>
            </div>
          </div>
          
          <div class = "col">
            <div class = "form-group">
              <label for = "userpassword">Password</label>
              <input type = "password" class = "form-control" id = "userpassword" name = "userpassword" placeholder = "Password" pattern = ".{8,20}" aria-describedby = "passwordHelp" required>
              <small id = "passwordHelp" class = "form-text text-muted">Must be 8-20 characters long.</small>
            </div>
          </div>
        </div>
        
        <!-- Submit button -->
        <div class = "row">
          <div class = "col">
            <div class = "text-right">
              <p>Forgot password? <a class = "text-link" href = "ResetUser1">Reset password</a></p>
              <p>First time here? <a class = "text-link" href = "SignUp.php">Sign Up</a></p>
              <button type = "submit" class = "btn btn-primary">Sign In</button>
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