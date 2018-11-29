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
    <title>Sign Up | isPuma</title>
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
          <li class = "nav-item active">
            <a class = "nav-link" href = "SignUp.php">Sign Up</a>
          </li>
        </ul>
      </div>
    </nav>
    
    <div class = "container"><br>
      <!-- Registration form | User -->
      
      <h3>Welcome to isPuma's webstore! Create your account.</h3><hr>
      
      <form method = "post" action = "ProcessSignUp.php">
        <!-- Username, name and password row -->
        <div class = "row">
          <div class = "col">
            <!-- Email -->
            <div class = "form-group">
              <label for = "username">Email</label>
              <input type = "email" class = "form-control" id = "username" name = "username" placeholder = "Email" aria-describedby = "usernameHelp" required autofocus>
              <small id = "usernameHelp" class = "form-text text-muted">Your email will be your username when you sign in.</small>
            </div>
          </div>
          
          <div class = "col">
            <!-- Name -->
            <div class = "form-group">
              <label for = "name">Name</label>
              <input type = "text" class = "form-control" id = "name" name = "name" placeholder = "Name" aria-describedby = "nameHelp" required>
              <small id = "nameHelp" class = "form-text text-muted">Please tell us how we should address you.</small>
            </div>
          </div>
          
          <div class = "col">
            <!-- Password -->
	          <div class = "form-group">
	            <label for = "password">Password</label>
              <input type = "password" pattern = ".{8,20}" class = "form-control" id = "password" name = "password" placeholder = "Password" aria-describedby = "passwordHelp" required>
              <small id = "passwordHelp" class = "form-text text-muted">Must be 8-20 characters long.</small>
            </div>
          </div>
        </div>
        
        <hr>
        
        <!-- Security Question row -->
        <div class = "row">
          <div class = "col">
              <h5>Security question will be used to change your password in case you have forgotten your password.</h5>
          </div>
        </div>
        
        <div class = "row">
          <div class = "col">
            <!-- Security Question -->
	          <div class = "form-group">
	            <label for = "securityQuestion">Security Question</label>
              <input type = "text" class = "form-control" id = "securityQuestion" name = "securityQuestion" placeholder = "Security Question" aria-describedby = "securityQuestionHelp" required>
              <small id = "securityQuestionHelp" class = "form-text text-muted">E.g what is your go-to comfort food?</small>
              
            </div>
          </div>
          
          <div class = "col">
            <!-- Security Question Answer-->
	          <div class = "form-group">
	            <label for = "securityQuestionAnswer">Answer</label>
              <input type = "text" class = "form-control" id = "securityQuestionAnswer" name = "securityQuestionAnswer" placeholder = "Answer" aria-describedby = "securityQuestionAnswerHelp" required>
              <small id = "securityQuestionAnswerHelp" class = "form-text text-muted">Your answer should be meaningful to yourself only.</small>
            </div>
          </div>
        </div>
        
        <hr>
        
        <div class = "row">
          <div class = "col">
            <!-- Agree to T&C -->
	  	      <div class = "form-check">
              <input type = "checkbox" class = "form-check-input" id = "TnCAcceptance" name = "TnCAcceptance" value = "T" required>
              <label class = "form-check-label" for = "TnCAcceptance">
                I acknowledge that I have read the <a class = "text-link" href = "TnC.php">terms and conditions</a>, and my continued use of the website is subject to these terms and conditions. <span class = "badge badge-warning">Important</span> 
              </label>
            </div>
          </div>
        </div>
        
        <div class = "row">
          <div class = "col">
            <!-- Submit button -->
	  	      <div class = "text-right"><br>
              <p>Already have an account? <a class = "text-link" href = "SignIn.php">Sign in</a></p>
		          <button type = "submit" class = "btn btn-primary">Sign Up</button>
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