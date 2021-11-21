<html> 
    <title> Results page: </title>
    <body> 
    <!-- https://www.geeksforgeeks.org/how-to-insert-form-data-into-database-using-php/ -->
        <?php
        // would do all the connection stuff 
        // require "dbutil.php";
	    // $db = DbUtil::loginConnection();
        session_start(); 
		$servername = "localhost"; 
		$username = "test"; 
		$password = "hat"; 
		$dbname = "artGallery2"; 
		$conn = new mysqli($servername, $username, $password, $dbname);
        
        $title = $_REQUEST['title'];
        $id = $_REQUEST['pieceID'];
        $artist = $_REQUEST['artist'];
        $dateCreated = $_REQUEST['dateCreated'];
        $url = $_REQUEST['url'];
        $height = $_REQUEST['height'];
        $width = $_REQUEST['width'];
        $length = $_REQUEST['length'];
        $type = $_REQUEST['type'];
        // if ($_POST['Blue'] == 'Blue') {
        //     $blue = $_REQUEST['Blue'];
        // } else {$blue = 'none';}
        // if ($_POST['Red'] == 'Red') {
        //     $red = $_REQUEST['Red'];
        // } else {$red = 'none';}
        // if ($_POST['Green'] == 'Green') {
        //     $green = $_REQUEST['Green'];
        // } else {$green = 'none';}
        // if ($_POST['Yellow'] == 'Yellow') {
        //     $yellow = $_REQUEST['Yellow'];
        // } else {$yellow = 'none';}
        // if ($_POST['Black'] == 'Black') {
        //     $black = $_REQUEST['Black'];
        // } else {$black = 'none';}
        // if ($_POST['White'] == 'White') {
        //     $white = $_REQUEST['White'];
        // } else {$white = 'none';}
        // if ($_POST['Pink'] == 'Pink') {
        //     $pink = $_REQUEST['Pink'];
        // } else {$pink = 'none';}
        // if ($_POST['Purple'] == 'Purple') {
        //     $purple = $_REQUEST['Purple'];
        // } else {$green = 'none';}
        $description = $_REQUEST['descrip'];
        $sqlquery1 = "INSERT INTO art_piece (pieceID, title, type, image_url, width, height, length, description) VALUES ('$id', '$title', '$type', '$url', '$width', '$height', '$length', '$description')"; 
        $sqlquery2 = "INSERT INTO created (artistID, pieceID, dateCreated) VALUES ('$artist', '$id', '$dateCreated')"; 

        if (!mysqli_query($conn, $sqlquery1)) {
            die('Error: ' . mysqli_error($conn));
        }
        if (!mysqli_query($con, $sqlquery2)) {
            die('Error: ' . mysqli_error($conn));
        }
        echo "piece successfully added. Click to return to main page" 

        mysqli_close($conn); 
        
        
        // $result = $conn->query($sqlquery1);
        // $result2 = $conn->query($sqlquery2);

        // $db->close();
        ?>
    </body> 
</html>