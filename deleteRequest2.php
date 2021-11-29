<?php
session_start();
//checks to make sure a user session is started, else takes back to login
if(isset($_SESSION['employeeID'])){ 
  ?>
<html> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
form {
 margin: 0;
 padding: 1em 15;
 border: 1px solid DimGray;
 border-radius: 5px; 
}
</style>
<?php 
if ($_SESSION['begin_date'] > "2021-01-01") {
    include 'empuser.php';
}
if ($_SESSION['begin_date'] <= "2021-01-01") {
    include 'adminuser.php';
}
?>
<style>
<?php include 'style.css'; ?>
</style>
<div class="container"> 
<h1 style="padding-top:1.5%; text-align: center"> Make a delete request: </h1> 
</div> 
<div class= "container"> 
<body> 
    <form action="deleteSQL2.php" method="post">
        <h3 style="padding:1%; text-align: center"> Select the appropriate category for your deletion request, then fill out the required information </h3>
          <hr size="8" width="100%" color="black"> 
        <p> Category of Deletion Request: </p> 
                <input type="radio" id="artist" name="type" value="artist"/>
                <label for="artist"> Artist </label><br>
                <p> Artist ID Number: <input type="number" name="artistID"> </p> 
                <input type="radio" id="piece" name="type" value="piece"/>
                <label for="piece"> Piece </label><br>
                <p> Piece ID Number: <input type="number" name="pieceID"> </p> 
                <input type="radio" id="phone" name="type" value="phone"/>
                <label for="phone"> Phone number </label><br>
                <p> Phone Number: <input type="text" name="phoneNum"/> </p> 
                <input type="radio" id="admin" name="type" value="admin"/>
                <label for="admin"> Admin </label><br>
                <p> Admin ID Number: <input type="number" name="adminID"/> </p> 
        <p><input style="background-color: #f2d2aa; border-radius: 5px" type="submit" /></p>
    </form> 
</body> 
</div> 
</html>
<?php
}
else {
  header("Location: loginPage.php");
  exit();
}
?> 
