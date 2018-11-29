<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="bootstrap/background.css">

    <!-- Grid -->
    <link rel="stylesheet" type="text/css" href="default.css" />
    <link rel="stylesheet" type="text/css" href="component.css" />

    <style>
	    @media (min-width: 1200px) {
        .container{
          max-width: 80%;
        }
      }
    </style>
    
    <!-- Browser tab title -->
    <title>Cart | isPuma</title>
  </head>
  <body>
    <div class = "jumbotron jumbotron-fluid bg-dark text-light">
	    <div class="container">
		    <h1 class="display-4">isPuma Shoe Store</h1>
 	    </div>
    </div>
    <div class="row-lg">
	    <nav class="navbar navbar-expand-lg navbar-warning bg-warning mt-0 pt-0 noTop noBack">
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarText">
		      <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
				      <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
			      </li>
		      </ul>
		      <?php include "DetermineNavBar.php"; ?>
		    </div>
	    </nav>
    </div>

    <div class="container-fluid" style="display:block">
	    <div class="container">
		    <h1>Shopping Cart</h1><br>
		    <div class="row" style="border-bottom: 1px solid lightgray">
			    <div class="col-md-8">Item</div>
			    <div class="col-md-3">Price</div>
		    </div>
		
        <?php include 'DisplayCartItems.php'; ?>
      </div>
    </div>
  </body>
</html>