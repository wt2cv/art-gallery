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
include 'header.php';
include 'database.php';

?>
<div style="padding-left: 15%; padding-top:2%">
    <a style="color: black " href="homepage.php">← Go Back</a>
</div> 
<div class="container" style="text-align: center"> 
    <h1> Add a piece: </h1> 
    <h3> <i> Please enter the appropriate information below </i> </h3>
</div> 
<div class="container"> 
    <body> 
        <form action="insertPiece.php" method="post">
            <p>Title: <input type="text" name="title" /></p>
            <p>Piece ID Number: <input type="text" name="pieceID" /></p>
            <p>Type: </p>
                <input type="radio" id="painting" name="type" value="Painting"/>
                <label for="painting"> Painting </label><br>
                <input type="radio" id="statue" name="type" value="Statue"/>
                <label for="statue"> Statue </label><br>
                <input type="radio" id="photo" name="type" value="Photograph"/>
                <label for="photo"> Photograph </label><br>
                <input type="radio" id="drawing" name="type" value="Drawing"/>
                <label for="drawing"> Drawing </label><br>
            <p>Artist ID: <input type="number" name="artist" /></p>
            <p>Date Created: <input type="date" name="dateCreated" /></p>
            <p>Image URL: <input type="url" name="url" /></p>
            <p>Height: <input type="number" name="height" /></p>
            <p>Length: <input type="number" name="length" /></p>
            <p>Width (if two dimensional, enter 0): <input type="number" name="width" /></p>
            <p>Description: <input type="text" name="descrip" /></p>
            <p>Colors: </p> 
                <input type="checkbox" name="blue" value="Blue"/> 
                <label for="blue"> Blue </label><br>
                <input type="checkbox" name="red" value="Red"/> 
                <label for="red"> Red </label><br>
                <input type="checkbox" name="green" value="Green"/> 
                <label for="green"> Green </label><br>
                <input type="checkbox" name="yellow" value="Yellow"/> 
                <label for="yellow"> Yellow </label><br>
                <input type="checkbox" name="black" value="Black"/> 
                <label for="black"> Black </label><br>
                <input type="checkbox" name="white" value="White"/>
                <label for="white"> White </label><br>
                <input type="checkbox" name="pink" value="Pink"/> 
                <label for="pink"> Pink </label><br>
                <input type="checkbox" name="purple" value="Purple"/>
                <label for="purple"> Purple </label><br>
             <p> Location ID: <input type="number" name="locID"/> </p>
            <p> Location Area: <input type="text" name="locArea"/> </p>
            <p><input type="submit" /></p>
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