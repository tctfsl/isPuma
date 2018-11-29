<?php
	include "EstablishConnection.php";
		
	$sql = "SELECT * FROM items";
	$result = mysqli_query($conn, $sql);
	$items = 0;
  
  //If there is item, show
  //Else, say sorry
  if($result->num_rows > 0)
	{
		while ($row = mysqli_fetch_array($result))
		{
			$itemID = $row["ItemID"];
			$itemName = $row["Item_Name"];
			$itemDes = $row["Item_Description"];
			
      if(($items == 0) || ($items == 3))
			{
				echo '<div class="row">';
			}
      
			echo '<div class="col">
						  <div class="card" style="width: 18rem;">
							  <img class="card-img-top" src="images/'.$itemID.'.jpg" alt="Card image cap">
								  <div class="card-body">
								    <h5 class="card-title">'.$itemName.'</h5>
								    <p class="card-text">'.$itemDes.'</p>
								    <form method="post" action="AddToCart.php">
									    <input type="submit" class="btn btn-warning btn-block"  value="Add to Cart"></button>	<!-- delete function-->
									    <input type="hidden" name="addID" value="'.$itemID.'">
								    </form>
							    </div>
						    </div>
					    </div>';
			
      $items++;
			if(($items == 3) || ($items == 6))
			{
				echo '</div><br>';
			}
		}
	}
	else
	{
		echo '<h2>Sorry, we seem to be out of stock for everything! Check back next time for new incoming batches!<h2>';
	}
?>