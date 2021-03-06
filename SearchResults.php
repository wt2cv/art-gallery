<?php
session_start();
//checks to make sure a user session is started, else takes back to login
if(isset($_SESSION['employeeID'])){ 
  ?>
<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style type="text/css">
form {
 margin: 0;
 padding: 50px;
 border: 1px solid DimGray;
 border-radius: 5px;
}
</style>
<?php
		include 'header.php';
		include 'database.php'; 
	?>
<div class="container">
	<style>
<?php include 'style.css'; ?>
</style>

<head>
	<title>Home</title>
	<h1 style="padding-top: 2%"><p style="text-align:center">Search The Gallery </p></h1>
</head>
<body>

	<form name="form1" method="get" action="search.php">
	<p style="text-align:center"><input  type="text" size="70" placeholder="Search" name="search" aria-label="Search" required></p>
	<p style="text-align:center"><input style="background-color: #f2d2aa; border-radius: 5px" type="submit" value="Search" name="submit"></input>
	<h3><p style="text-align:center">Searching for: </p></h3>
		<p style="text-align:center"><input type="radio" name="searchtype" value="Artist">
			<label for="artisttype"> Artist </label> 
			<input type="radio" name="searchtype" value="Piece">
			<label for="piecetype"> Art Piece </label> 
			<input type="radio" name="searchtype" value="Location">
			<label for="locationtype"> Location </label> 
			<input type="radio" name="searchtype" value="Admin">
			<label for="admintype"> Admin </label> 
			<input type="radio" name="searchtype" value="Clients">
			<label for="clienttype"> Clients </label> 
			<input type="radio" name="searchtype" value="Entered">
			<label for="entertype"> Entered By </label> 
			</p>
	<p style="text-align:center"><i>Search for information for each respective category by using a string or substring of any of the listed following: </i><br>
	<b>Artist:</b> Artist ID, first name, last name, address, country of origin<br>
	<b>Art Piece</b>: Piece ID, title, type, description, image url, length, height, width<br>
	<b>Location</b>: Location ID, area, pieceID, art piece title <br>
	<b>Admin</b>: EmployeeID, first name, last name, address, begin date<br>
	<b>Clients</b>: Employee ID, Artist ID, employee name, artist name, date signed<br>
	<b>Entered by</b>: Employee ID, Piece ID, employee name, art piece title, date entered</p>
	</form>

</body>
</html>
<?php
}
else {
  header("Location: loginPage.php");
  exit();
}
?>