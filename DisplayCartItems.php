<?php
	include "EstablishConnection.php";
	
  if (session_status() == PHP_SESSION_NONE)	{
		session_start();
	}
  
  if (isset($_SESSION["userID"])) {
	  $UserID = $_SESSION["userID"];
	  $sql = "SELECT * FROM cart WHERE UserID=".$UserID."";
	  $result = mysqli_query($conn, $sql);
	  
    if($result->num_rows > 0) {
		  $totalPrice=0;
		  while ($row = mysqli_fetch_array($result)) {
  			$itemID = $row["ItemID"];
	  		$cartID = $row["CartID"];
		  	$sql = "SELECT items.Item_Name, items.Item_Price, cart.CartID FROM cart, items WHERE items.ItemID=".$itemID."";
			  $query = mysqli_query($conn, $sql);
			  $value = mysqli_fetch_object($query);
  			
			  $itemName = $value->Item_Name;
			  $itemPrice = $value->Item_Price;
  			
        echo '<div class="row" style="padding:15px; border-bottom: 1px solid lightgray">	<!-- ROW -->
				  	    <div class="col-md-8">	<!-- Image & Info (column)-->
					  	    <div style="width:20%; height:150px; background-color: white; float:left; padding:10px">	<!-- Image-->
						  	    <img src="images/'.$itemID.'.jpg" class="img-fluid">
						      </div>
						      <div style="float:left; width:80%; height:90%">	<!-- Info-->
  							    <div style="position:relative;width:100%;height:90%;font-weight:bold; color:#3366BB; background-color:white;font-size: 25px">	<!-- Words -->
	  							    <span style="vertical-align:middle">'.$itemName.'</span>
		  					    </div>
			  				    <div style="position:relative; width:100%;height:20%">	<!-- Actions (span)-->
				  				    <form method="post" action="RemoveFromCart.php">
					  				    <input type="submit" class="btn" style="color:#3366BB;" value="Delete">	<!-- delete function-->
						  			    <input type="hidden" name="deleteID" value="'.$cartID.'">
							  	    </form>
							      </div>
  						    </div>
	  				    </div>
		  			    <div class="col-md-3">	<!-- Price -->
			  			    <span>RM'.$itemPrice.'</span>
				  	    </div>
				      </div>';
              
			  $totalPrice = $totalPrice + $itemPrice;
		  }
  		
	  	//Display total on bottom
		  echo '<div class="row" style="background-color: #F8F9F9">
			  	    <div class="col-md-8" style="text-align: right">
				  	    Total:
				      </div>
				      <div class="col-md-3">
  					    <span style="font-weight:bold">RM'.$totalPrice.'<span>
	  			    </div>
		  	    </div>';
		  
		  //Display total and checkout function
		  echo '</div>
			      <div class="container" style="margin-right:0; margin-top:50px; width:23%; height:200px; background-color:#FCF3CF; float: right; text-align:center">
				      <div style="margin-top:30px">
					      <span style="font-weight: bold;font-size: 1.5em;">Subtotal:</span>
					      <span style="font-weight: bold;font-size: 1.5em;color: #A04000">RM'.$totalPrice.'</span>
				      </div>
				      <div style="margin-top:5px">
					      <span>Free international shipping from 2 July 2018 till 28 October 2018 (2-3 business days)</span>
				      </div>
				      <form method="post" action="Checkout.php">
  					    <input type="submit" class="btn btn-outline-danger" style="margin-top: 20px" value="Checkout"></button>	<!-- delete function-->
	  				    <input type="hidden" name="checkoutTotal" value="'.$totalPrice.'">
		  		    </form>
			      </div>';
	  }
  }
	else {
		echo '<h3>Oooops, your cart is empty! Go add some feet gloves in here!</h3>';
	}
?>