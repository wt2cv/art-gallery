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
<div class="container"> 
    <h1> <p style="text-align:center">Update a piece: </p></h1> 
</div> 
<div class="container"> 
    <body> 
        <form action="updatePiece.php" method="post">
            <h3><p style="text-align:center">To start off, which piece would you like to update?</h3></p>
            <p style="text-align:center"><b>Piece ID Number:</b> <input type="text" name="pieceID" /></p>
            <p><br></p>
            <hr size="8" width="100%" color="black">  
            <p><h6> Please <b>only</b> fill out the entries you would like to update for the Piece ID, and leave the others blank if you would like them to remain the same: </h6></p>
            <p>Title: <input type="text" name="title" /></p>
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
                <input type="checkbox" name="color" value="Blue"/> 
                <label for="blue"> Blue </label><br>
                <input type="checkbox" name="color" value="Red"/> 
                <label for="red"> Red </label><br>
                <input type="checkbox" name="color" value="Green"/> 
                <label for="green"> Green </label><br>
                <input type="checkbox" name="color" value="Yellow"/> 
                <label for="yellow"> Yellow </label><br>
                <input type="checkbox" name="color" value="Black"/> 
                <label for="black"> Black </label><br>
                <input type="checkbox" name="color" value="White"/>
                <label for="white"> White </label><br>
                <input type="checkbox" name="color" value="Pink"/> 
                <label for="pink"> Pink </label><br>
                <input type="checkbox" name="color" value="Purple"/>
                <label for="purple"> Purple </label><br>
            <p> Location ID: <input type="number" name="locID"/> </p>
            <p> Location Area: <input type="text" name="locArea"/> </p> 
            <p><input type="submit" /></p>
        </form>
    </body> 
</div>
</html>