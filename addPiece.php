<html> 
<title> Add a piece: </title> 
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
        <p>Artist: <input type="text" name="artist" /></p>
        <p>Year Created: <input type="number" name="year" /></p>
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
        <p><input type="submit" /></p>
    </form>
    
</body> 
</html>

