<?php
// Review Form loaded into product lightboxes for logged in users.
// Blame Sherry if this is super cray cray.
			
	// Check if user is !logged in
	session_start();
	if (isset($_SESSION['user']))	{
	
		$theuser = $_SESSION['user'];
		$productID = $results['id'];
	
		// Check if this user has already reviewed this product
		$reviewQuery = mysql_query("SELECT id FROM reviews WHERE user_id='$theuser' AND prod_id = '$productID'");
		$reviewed = mysql_num_rows($reviewQuery);
		
		// Otherwise, they're logged in and haven't reviewed, so show them the form:
		if ($reviewed == 0)	{
		
			echo '
			
			<form action="" method="post" id="review-form">
				<input type="text" id="productID" value="'.$results['id'].'" name="productID" style="display: none" />
				<input type="text" id="theuser" value="'.$_SESSION['user'].'" name="theuser" style="display: none;" />
					<ul class="radios" id="radios>
						<li><input type="radio" name="rating" id="rating" value="1" /></li>
						<li><input type="radio" name="rating" id="rating" value="2" /></li>
						<li><input type="radio" name="rating" id="rating" value="3" /></li>
						<li><input type="radio" name="rating" id="rating" value="4" /></li>
						<li><input type="radio" name="rating" id="rating" value="5" /></li>
					</ul>
				<textarea maxlength="255" placeholder="Write a review." name="review-text" id="review-text"></textarea>
				
				<input class="review-submit" id="rev-submit submit-'.$results['id'].'" type="submit" value="Submit" name="leave-review" />
			</form>';
		}
		
		else	{
			echo '<p>You have already reviewed this item.</p>';
		}
	}
	
	else {
		echo '<p>Log in to leave a review.</p>';
	}
	
	
	// Submit form
	if (isset($_SESSION['user']) && isset($_POST['rev-submit']))	{
		// Check if fields are empty
		if (!(empty($_POST['productID'])) && !(empty($_POST['theuser'])) && !(empty($_POST['radios'])))	{
			$productID = $_POST['productID'];
			$productID = stripslashes($productID);
			$productID = mysql_real_escape_string($productID);
			
			$theuser = $_POST['theuser'];
			$theuser = stripslashes($theuser);
			$theuser = mysql_real_escape_string($theuser);
			
			$reviewText = $_POST['review-text'];
			$reviewText = stripslashes($reviewText);
			$reviewText = mysql_real_escape_string($reviewText);
			
			$therating = $_POST['radios'];
			$therating = stripslashes($therating);
			$therating = mysql_real_escape_string($therating);
			
			// Make sure no funny business is going on with the rating.
			if ($therating < 0 && $therating > 5)	{
				echo '<p>Error.</p>';
			}
			// Otherwise, we're good!  Add this to the DB~
			else	{
			
				$addReview = "INSERT INTO reviews (prod_id, user_id, review_text, rating) VALUES ('".$productID."','".$theuser."','".$reviewText."','".$therating."')";
				$addQuery = mysql_query($addReview) or die(mysql_error());
				
				// And calculate the new overall rating for that product!
				
				if ($results['rating'] == 0)	{
					$updateRating = "UPDATE products SET rating='$therating' WHERE id='$productID'";
					$addUpdatedRating = mysql_query($updateRating) or die(mysql_error());
				}
				else	{
					$getReviews = "SELECT * FROM reviews WHERE prod_id='$productID'";
					$getReviewsQuery = mysql_query($getReviews) or die(mysql_error());
					
					$r_count = 1; // number of reviews
					$currr = 0; // total score
					
					// Figure out what the rating should be, giving each rating equal weight.
					while($theReview = mysql_fetch_array($getReviewsQuery))	{
						$r_count++;
						$currr += $theReview['rating'];
					}
					
					$currr = ($therating + $currr)/$r_count; //get final overall rating
					$updateRating = "UPDATE products SET rating='$currr' WHERE id='$productID'";
					$getReviewsQuery = mysql_query($getReviews) or die(mysql_error());
				}
				
				echo "<p>Thank you for your review.</p>";
				
			}	
		}
		else	{
			echo '<p>You left some fields blank.</p>';
		}
	}


?>