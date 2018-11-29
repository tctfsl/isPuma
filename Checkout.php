<?php
include "UserHasntLoggedIn.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Checkout | isPuma</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="bootstrap/background.css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <style>
	    @media (min-width: 1200px) {
        .container{
          max-width: 80%;
        }
      }
    </style>
</head>
<body>
  <div class = "jumbotron jumbotron-fluid alert-info">
	  <div class="container">
		  <h1 class="display-4">isPuma Shoe Store</h1>
	  </div>
  </div>

  <div class="row-lg">
	  <nav class="navbar navbar-expand-lg navbar-light bg-info mt-0 pt-0 noTop noBack">
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
  
  <form method="post" action="PaymentDetails.php"><div class="container">
    <table class="table">
      <tr>
        <td colspan="2">
		      <h1>Enter Shipping Address</h1>
		    </td>
        <td>
          <h1>Payment Information</h1>
        </td>
      </tr>
      
      <tr>
        <td>
			    <div class="form-group">
            <label>Full Name</label>
				    <input class="form-control" type="text" name="receiverName" autofocus required/>
			    </div>
			    <div class="form-group">
            <label>Phone number</label>
	  			  <input class="form-control" type="number" name="phoneNumber" required/>
			    </div>
		    </td>
      
        <td>
			    <div class="form-group">
            <label>Address</label>
	  			  <input class="form-control" type="text" name="address" required/>
		  	  </div>
			    <div class="form-group">
            <label>State</label>
				    <input class="form-control" type="text" name="state" required/>
			    </div>
			    <div class="form-group">
            <label>City</label>
	  			  <input class="form-control" type="text" name="city" required/>
		  	  </div>
			    <div class="form-group">
            <label>Postcode</label>
  				  <input class="form-control" type="number" name="postcode" required/>
	  		  </div>
        </td>
      
        <td>  
          <div class="form-group">
            <label>Card number</label>
	  		    <input class="form-control"  type="text" name="cardNumber" pattern=".{16}" placeholder="Card number" required/>
  		    </div>
	  	    <div class="form-group">
            <label>Name on card</label>
			      <input class="form-control" type="text" name="nameOnCard" placeholder="Cardholder name" required/>
  		    </div>
	  	    <div class="form-group">
            <label>Expiration date</label>
			      <input class="form-control" type="text" name="expDate" pattern="(0[1-9]|1[012])/[0-9]{2}" placeholder="MM/YY" required/>
  		    </div>
	  	    <div class="form-group">
            <label>CVV</label>
	  	  	  <input class="form-control" type="text" name="cvv" pattern=".{3}" placeholder="CVV" required/>
  		    </div>
        </td>
      </tr>
      
      <tr class="text-right">
        <td colspan="2">
		      <?php
  			    $totalPrice = $_POST["checkoutTotal"];
	  		    echo '<span>Total: RM'.$totalPrice.'</span>';
		      ?>
        </td>
		    <td>
		      <input type="submit" class="btn alert-info" style="color:#3366BB; margin-left: 150px" value="Confirm Purchase">
        </td>
      </tr>
    </table>
  </div></form>
</body>
</html>