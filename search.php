<html> 
<style type="text/css">
form {
 margin: 0;
 padding-left: 100px;
 padding-right: 100px;
 border: 3px solid DimGray;
 border-radius: 5px;
}
</style>
<div class="container">

<?php
		include 'header.php';
		include 'database.php'; ?>
<head>
	<h1><p style="text-align:center"> Results: </p></h1>
</head>
    <body> 
		<form>
        <?php
		/*---- https://riyoalo.medium.com/building-a-custom-search-engine-using-php-and-mysql-b9265a1693b2 ----*/
		$button = $_GET ['submit'];
		$search = $_GET ['search'];
		
		if(isset($_GET ['searchtype'])){
		} else {
			echo "need to select cateogry";
		}
		$checked = $_GET ['searchtype'];
			
		if ($checked == "Artist"){

			$sql ="SELECT * FROM artist WHERE artistID LIKE '$search' OR
			firstName LIKE '%$search%' OR
			lastName LIKE '%$search%' OR
			address LIKE '%$search%' OR
			countryOfOrigin LIKE '%$search%'";

			$run = mysqli_query($conn,$sql);
			$foundnum = mysqli_num_rows($run);
		
		
			if ($foundnum==0)
			{
			echo "We were unable to find a item with a search term of '<b>$search</b>'.";
			}
			else{
			echo "<h1><strong> $foundnum Results Found for \"" .$search."\" </strong></h1>";      
		
			// get num of results stored in database
			$sql = "SELECT * FROM artist WHERE artistID LIKE '%$search%' OR
			firstName LIKE '%$search%' OR
			lastName LIKE '%$search%' OR
			address LIKE '%$search%' OR
			countryOfOrigin LIKE '%$search%'";
			$getquery = mysqli_query($conn,$sql);
			
			echo "<h3 class='card-title'> Artist information </h3>";	
			while($runrows = mysqli_fetch_array($getquery))
			{
				echo"<b>ArtistID: </b>". $runrows["artistID"] ."<br>";
				echo"<b>Name (First, Last): </b>". $runrows["firstName"] ." " .$runrows["lastName"] ."<br>";
				echo"<b>Address: </b>". $runrows["address"] ."<br>";
				echo"<b>Country of Origin: </b>". $runrows["countryOfOrigin"] ."<br>";
				$sql1 = "SELECT a.artistID, a.firstName, a.lastName, p.title FROM art_piece p NATURAL JOIN created c NATURAL JOIN artist a WHERE p.pieceID in
				(SELECT c.pieceID FROM created c WHERE c.artistID in 
				(SELECT a.artistID FROM artist a WHERE a.artistID LIKE '%$search%' OR
				firstName LIKE '%$search%' OR
				lastName LIKE '%$search%' OR
				address LIKE '%$search%' OR
				countryOfOrigin LIKE '%$search%'))";
				$getquery1 = mysqli_query($conn,$sql1);
				$foundnum1 = mysqli_num_rows($getquery1);

				$sql2 = "SELECT artistID, phone_number from contact_artist 
				where artistID in 
				(select artistID from artist 
				 Where artistID LIKE '%$search%' OR
				firstName LIKE '%$search%' OR
				lastName LIKE '%$search%' OR
				address LIKE '%$search%' OR
				countryOfOrigin LIKE '%$search%');";
				$getquery2 = mysqli_query($conn,$sql2);
				$foundnum2 = mysqli_num_rows($getquery2);

				if ($foundnum1==0)
                {
                echo "No Artworks";
                }
                else{
					while($row = mysqli_fetch_array($getquery1))
						{
							if($runrows["artistID"]==$row["artistID"]){
							echo "<b>Artworks here: </b>". $row["title"] ."<br>";
							break;
							}
						}
					}

				if ($foundnum2==0)
				{
				echo "No Phone Number";
				}
				else{
					while($row2 = mysqli_fetch_array($getquery2))
						{
							if($runrows["artistID"]==$row2["artistID"]){
							echo "<b>Phone Number: </b>". $row2["phone_number"] ."<br>";;
							break;
							}
						}
					}
				echo "----------------------------------------------------------------------------------------------------<br>";
			}}
			
		}
		
		//----------------------------------------------------Piece----------------------------------------------------
		if ($checked == "Piece"){

			$psql ="SELECT * FROM art_piece WHERE pieceID LIKE '$search' OR
			title LIKE '%$search%' OR
			description LIKE '%$search%' OR
			type LIKE '%$search%' OR
			image_URL LIKE '%$search%' OR
			length LIKE '%$search%' OR
			width LIKE '%$search%' OR
			height LIKE '%$search%'";

			$prun = mysqli_query($conn,$psql);
			$pfoundnum = mysqli_num_rows($prun);
		
		
			if ($pfoundnum==0)
			{
			echo "We were unable to find a item with a search term of '<b>$search</b>'.";
			}
			else{
			echo "<h1><strong> $pfoundnum Results Found for \"" .$search."\" </strong></h1>";  
			}    
		
			// get num of results stored in database
			$psql ="SELECT * FROM art_piece WHERE pieceID LIKE '$search' OR
			title LIKE '%$search%' OR
			description LIKE '%$search%' OR
			type LIKE '%$search%' OR
			image_url LIKE '%$search%' OR
			length LIKE '%$search%' OR
			width LIKE '%$search%' OR
			height LIKE '%$search%'";
			$pgetquery = mysqli_query($conn,$psql);

			echo "<h3 class='card-title'> Art Piece information </h3>";	
			while($prunrows = mysqli_fetch_array($pgetquery))
			{
				$imageLink = $prunrows["image_url"];

				echo"<b>PieceID: </b>". $prunrows["pieceID"] ."<br>";
				echo"<b>Title: </b>". $prunrows["title"] ."<br>";
				echo"<b>Description: </b>". $prunrows["description"] ."<br>";
				echo"<b>Type: </b>". $prunrows["type"] ."<br>";
				echo"<b>Image: </b>". $prunrows["image_url"] ."<br>";
				echo"<b>Dimensions (LxWxH): </b>". $prunrows["length"] .", ". $prunrows["width"] .", ". $prunrows["height"] ."<br>";
				$psql1 = "SELECT a.firstName, a.lastName, p.pieceID, p.title from artist a NATURAL JOIN created c NATURAL JOIN art_piece p where a.artistID IN
				(Select c.artistID from created c where c.pieceID in 
				(select p.pieceID from art_piece p where p.pieceID LIKE '%impression%' OR
				p.title LIKE '%impression%'OR
                p.description LIKE '%impression%' OR
				p.type LIKE '%impression%' OR
				p.length LIKE '%impression%' OR 
				p.height LIKE '%impression%' OR
				p.width LIKE '%impression%'));";

				$pgetquery1 = mysqli_query($conn,$psql1);
				$pfoundnum1 = mysqli_num_rows($pgetquery1);
				if ($pfoundnum1==0)
                {
                echo "No Artist Found";
                }
                else{
					while($prow = mysqli_fetch_array($pgetquery1))
						{
							if($prunrows["pieceID"]==$prow["pieceID"]){
							echo "<b>Dimensions (LxWxH): </b>". $prow["firstName"] ." " .$prow["lastName"] ."<br>";
							break;
							}
						}
					}
				echo "----------------------------------------------------------------------------------------------------<br>";
			}
		
		}
		

		//----------------------------------------------------Location----------------------------------------------------
		if ($checked == "Location"){

			$lsql ="SELECT * FROM location WHERE locationID LIKE '$search' OR
			area LIKE '$search' OR
			pieceID LIKE '$search' OR
			pieceID IN
			(Select a.pieceID From art_piece a where a.title LIKE '%$search%');";

			$lrun = mysqli_query($conn,$lsql);
			$lfoundnum = mysqli_num_rows($lrun);
		
		
			if ($lfoundnum==0)
			{
				echo "We were unable to find a item with a search term of '<b>$search</b>'.";
			}
			else{
			echo "<h1><strong> $lfoundnum Results Found for \"" .$search."\" </strong></h1>";      
		
			// get num of results stored in database
			$lsql ="SELECT * FROM location WHERE locationID LIKE '$search' OR
			area LIKE '$search' OR
			pieceID LIKE '$search' OR
			pieceID IN
			(Select a.pieceID From art_piece a where a.title LIKE '%$search%');";

			$lgetquery = mysqli_query($conn,$lsql);

			echo "<h3 class='card-title'> Art Piece information </h3>";	
			while($lrunrows = mysqli_fetch_array($lgetquery))
			{
				echo"<b>LocationID: </b>". $lrunrows["locationID"] ."<br>";
				echo"<b>Area: </b>". $lrunrows["area"] ."<br>";
				echo"<b>PieceID: </b>". $lrunrows["pieceID"] ."<br>";
				$lsql1 = "SELECT p.title, l.locationID, l.area FROM location l NATURAL JOIN art_piece p 
				WHERE p.pieceID in
				(select pieceID
				 From location WHERE locationID LIKE '$search' OR
				 area LIKE '$search' OR
				 pieceID LIKE '$search' OR
				 pieceID IN
				 (Select a.pieceID From art_piece a where a.title LIKE '%$search%'));";
				$lgetquery1 = mysqli_query($conn,$lsql1);
				$lfoundnum1 = mysqli_num_rows($lgetquery1);

				
				if ($lfoundnum1==0)
                {
                echo "No Location Found";
                }
                else{
					while($lrow = mysqli_fetch_array($lgetquery1))
						{
							if($lrunrows["locationID"]==$lrow["locationID"]){
							echo $lrow["<b>title"] ." - </b>". $lrow["area"]. $lrow["locationID"] ."<br>";
							break;
							}
						}
					}
				echo "----------------------------------------------------------------------------------------------------<br>";
			}}
			
		}

		//----------------------------------------------------Admin----------------------------------------------------
		if ($checked == "Admin"){

			$asql ="SELECT * FROM admin WHERE employeeID LIKE '$search' OR
			firstName LIKE '%$search%' OR
			lastName LIKE '%$search%' OR
			email LIKE '%$search%' OR
			begin_date LIKE '%$search%' OR
			address LIKE '$search';";

			$arun = mysqli_query($conn,$asql);
			$afoundnum = mysqli_num_rows($arun);
		
		
			if ($afoundnum==0)
			{
				echo "We were unable to find a item with a search term of '<b>$search</b>'.";
			}
			else{
			echo "<h1><strong> $afoundnum Results Found for \"" .$search."\" </strong></h1>";      
		
			// get num of results stored in database
			$asql ="SELECT * FROM admin WHERE employeeID LIKE '$search' OR
			firstName LIKE '%$search%' OR
			lastName LIKE '%$search%' OR
			email LIKE '%$search%' OR
			begin_date LIKE '%$search%' OR
			address LIKE '%$search%';";

			$agetquery = mysqli_query($conn,$asql);

			echo "<h3 class='card-title'> Art Piece information </h3>";	
			while($arunrows = mysqli_fetch_array($agetquery))
			{
				echo"<b>Employee ID: </b>". $arunrows["employeeID"] ."<br>";
				echo"<b>First Name: </b>". $arunrows["firstName"] ."<br>";
				echo"<b>Last Name: </b>". $arunrows["lastName"] ."<br>";
				echo"<b>Email: </b>". $arunrows["email"] ."<br>";
				echo"<b>Begin Date: </b>". $arunrows["begin_date"] ."<br>";
				echo"<b>Address: </b>". $arunrows["address"] ."<br>";

				$asql2 = "SELECT employeeID, phone_number from contact_admin
				where employeeID in 
				(select employeeID from admin
				 Where employeeID LIKE '%$search%' OR
				firstName LIKE '%$search%' OR
				lastName LIKE '%$search%' OR
				email LIKE '%$search%' OR
				address LIKE '%$search%' OR
				begin_date LIKE '%$search%');";
				$agetquery2 = mysqli_query($conn,$asql2);
				$afoundnum2 = mysqli_num_rows($agetquery2);

				if ($afoundnum2==0)
				{
				echo "No Phone Number";
				}
				else{
					while($arow2 = mysqli_fetch_array($agetquery2))
						{
							if($arunrows["employeeID"]==$arow2["employeeID"]){
							echo "<b>Phone Number: </b>". $arow2["phone_number"] ."<br>";;
							break;
							}
						}
					}
				echo "----------------------------------------------------------------------------------------------------<br>";
			
			}}
			
		}
		
		//----------------------------------------------------Clients----------------------------------------------------
		if ($checked == "Clients"){

			$csql ="SELECT * FROM client_of WHERE artistID LIKE '$search' OR
			employeeID LIKE '$search' OR
			dateSigned LIKE '%$search%' OR
			employeeID in 
			(select employeeID from admin where firstName LIKE '%$search%' OR lastName LIKE '%$search%') OR
			artistID in 
			(select artistID from artist where firstName LIKE '%$search%'OR lastName LIKE '%$search%')";

			$crun = mysqli_query($conn,$csql);
			$cfoundnum = mysqli_num_rows($crun);
		
		
			if ($cfoundnum==0)
			{
				echo "We were unable to find a item with a search term of '<b>$search</b>'.";
			}
			else{
			echo "<h1><strong> $cfoundnum Results Found for \"" .$search."\" </strong></h1>";      
		
			// get num of results stored in database
			$csql ="SELECT * FROM client_of WHERE artistID LIKE '$search' OR
			employeeID LIKE '$search' OR
			dateSigned LIKE '%$search%' OR
			employeeID in 
			(select employeeID from admin where firstName LIKE '%$search%' OR lastName LIKE '%$search%') OR
			artistID in 
			(select artistID from artist where firstName LIKE '%$search%'OR lastName LIKE '%$search%')";

			$cgetquery = mysqli_query($conn,$csql);

			echo "<h3 class='card-title'> Art Piece information </h3>";	
			while($crunrows = mysqli_fetch_array($cgetquery))
			{
				echo"<b>Employee ID: </b>". $crunrows["employeeID"] ."<br>";
				$csql2 = "SELECT * from client_of NATURAL JOIN admin where employeeID in
				(select employeeID from admin where firstName LIKE '%$search%' OR lastName LIKE '%$search%')
				or artistID in 
				(select a.artistID from artist a where a.firstName LIKE '%$search%' OR a.lastName LIKE '%$search%');";
				$cgetquery2 = mysqli_query($conn,$csql2);
				$cfoundnum2 = mysqli_num_rows($cgetquery2);

				if ($cfoundnum2==0)
				{
					echo "No Person Found - try searching by name <br>";
				}
				else{
					while($crow2 = mysqli_fetch_array($cgetquery2))
						{
							if($crunrows["employeeID"]==$crow2["employeeID"]){
							echo "<b>Employee Name: </b>". $crow2["firstName"] . " " . $crow2["lastName"] ."<br>";
							break;
							}
						}
					}
				echo"<b>Artist ID: </b>". $crunrows["artistID"] ."<br>";
				$csql3 = "SELECT * from client_of NATURAL JOIN artist where artistID in
				(select a.artistID from artist a where a.firstName LIKE '%$search%' OR a.lastName LIKE '%$search%')
				or employeeID in 
				(select e.employeeID from admin e where e.firstName LIKE '%$search%' OR e.lastName LIKE '%$search%');";
				$cgetquery3 = mysqli_query($conn,$csql3);
				$cfoundnum3 = mysqli_num_rows($cgetquery3);
				if ($cfoundnum3==0)
				{
				echo "No Person Found - try searching by name <br>";
				}
				else{
					while($crow3 = mysqli_fetch_array($cgetquery3))
						{
							if($crunrows["artistID"]==$crow3["artistID"]){
							echo "<b>Artist Name: </b>". $crow3["firstName"] . " " . $crow3["lastName"] ."<br>";;
							break;
							}
						}
					}
				echo"<b>Date Signed: </b>". $crunrows["dateSigned"] ."<br>";

				
				echo "----------------------------------------------------------------------------------------------------<br>";
			
			}}
			
		}

		//----------------------------------------------------Clients----------------------------------------------------
		if ($checked == "Entered"){


			$esql ="SELECT * FROM entered_by WHERE employeeID LIKE '$search' OR
			pieceID LIKE '$search' OR
			dateEntered LIKE '%$search%' OR
			employeeID in 
			(select employeeID from admin where firstName LIKE '%$search%' OR lastName LIKE '%$search%') OR
			pieceID in 
			(select pieceID from art_piece where title LIKE '%adam');";

			$erun = mysqli_query($conn,$esql);
			$efoundnum = mysqli_num_rows($erun);
		
		
			if ($efoundnum==0)
			{
				echo "We were unable to find a item with a search term of '<b>$search</b>'.";
			}
			else{
			echo "<h1><strong> $efoundnum Results Found for \"" .$search."\" </strong></h1>";      
		
			// get num of results stored in database
			$esql ="SELECT * FROM entered_by WHERE employeeID LIKE '$search' OR
			pieceID LIKE '$search' OR
			dateEntered LIKE '%$search%' OR
			employeeID in 
			(select employeeID from admin where firstName LIKE '%$search%' OR lastName LIKE '%$search%') OR
			pieceID in 
			(select pieceID from art_piece where title LIKE '%adam');";

			$egetquery = mysqli_query($conn,$esql);

			echo "<h3 class='card-title'> Art Piece information </h3>";	
			while($erunrows = mysqli_fetch_array($egetquery))
			{
				echo"<b>Employee ID: </b>". $erunrows["employeeID"] ."<br>";
				$esql2 = "SELECT * from entered_by NATURAL JOIN admin where employeeID in
				(select employeeID from admin where firstName LIKE '%$search%' OR lastName LIKE '%$search%')
				or pieceID in 
				(select p.pieceID from art_piece p where p.title LIKE '%$search%');";
				$egetquery2 = mysqli_query($conn,$esql2);
				$efoundnum2 = mysqli_num_rows($egetquery2);

				if ($efoundnum2==0)
				{
					echo "No Person Found - try searching by name <br>";
				}
				else{
					while($erow2 = mysqli_fetch_array($egetquery2))
						{
							if($erunrows["employeeID"]==$erow2["employeeID"]){
							echo "<b>Employee Name: </b>". $erow2["firstName"] . " " . $erow2["lastName"] ."<br>";;
							break;
							}
						}
					}
				echo"<b>Piece ID: </b>". $erunrows["pieceID"] ."<br>";
				$esql3 = "SELECT * from client_of NATURAL JOIN art_piece where pieceID in
				(select p.pieceID from art_piece p where p.title LIKE '%$search%')
				or employeeID in 
				(select e.employeeID from admin e where e.firstName LIKE '%$search%' OR e.lastName LIKE '%$search%');";
				$egetquery3 = mysqli_query($conn,$esql3);
				$efoundnum3 = mysqli_num_rows($egetquery3);
				if ($efoundnum3==0)
				{
					echo "No Person Found - try searching by name <br>";
				}
				else{
					while($erow3 = mysqli_fetch_array($egetquery3))
						{
							if($erunrows["pieceID"]==$erow3["pieceID"]){
							echo "<b>Piece Title: </b>". $erow3["title"] ."<br>";
							break;
							}
						}
					}
				echo"<b>Date Entered: </b>". $erunrows["dateEntered"] ."<br>";

				
				echo "----------------------------------------------------------------------------------------------------<br>";
			
			}}
			
		}
	
		
			mysqli_close($conn);
		?>
	</form>
	</body>
	</html>