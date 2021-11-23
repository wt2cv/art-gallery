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
<div class="container"> 
<h1> Make a delete request: </h1> 
<h3> <i> Select the appropriate category for your deletion request, then fill out the required information </i> </h3>
</div> 
<div class= "container"> 
<body> 
    <form action="deleteSQL2.php" method="post">
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

        <p><input type="submit" /></p>
    </form> 
</body> 
</div> 
</html>
