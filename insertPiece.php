<?php
session_start();
//checks to make sure a user session is started, else takes back to login
if(isset($_SESSION['employeeID'])){ 
  ?>
<html> 
    <h1> Results page: </h1>

    <body> 
    <!-- https://www.geeksforgeeks.org/how-to-insert-form-data-into-database-using-php/ -->
        <?php
        // would do all the connection stuff 
        // require "dbutil.php";
	    // $db = DbUtil::loginConnection();
        include 'header.php';
        include 'database.php';
        
        $title = $_REQUEST['title'];
        $id = $_REQUEST['pieceID'];
        $artist = $_REQUEST['artist'];
        $dateCreated = $_REQUEST['dateCreated'];
        $url = $_REQUEST['url'];
        $height = $_REQUEST['height'];
        $width = $_REQUEST['width'];
        $length = $_REQUEST['length'];
        $type = $_REQUEST['type'];
        $description = $_REQUEST['descrip'];
         $loc = $_REQUEST['loc']; 
        $locID = $_REQUEST['locID'];
        $locArea = $_REQUEST['locArea']; 
        $sqlquery1 = "INSERT INTO art_piece (pieceID, title, type, image_url, width, height, length, description) VALUES ('$id', '$title', '$type', '$url', '$width', '$height', '$length', '$description')"; 
        $sqlquery2 = "INSERT INTO created (artistID, pieceID, dateCreated) VALUES ('$artist', '$id', '$dateCreated')"; 
        $sqlquery3 = "INSERT INTO location (locationID, area, pieceID) VALUES ('$locID', '$locArea', '$id')"; 

        if (!mysqli_query($conn, $sqlquery1)) {
            die('Error: ' . mysqli_error($conn));
        }
        if (!mysqli_query($conn, $sqlquery2)) {
            die('Error: ' . mysqli_error($conn));
        }
        if (!mysqli_query($conn, $sqlquery3)) {
            die('Error: ' . mysqli_error($conn));
        }
        if (isset($_POST['blue'])) {
            $blue = $_REQUEST['blue'];
            $sqlColor = "INSERT INTO art_piece_colors (pieceID, color) VALUES ('$id', '$blue')"; 
            if (!mysqli_query($conn, $sqlColor)) {
            	die('Error: ' . mysqli_error($conn));
        	}
        } if (isset($_POST['red'])) {
            $red = $_REQUEST['red'];
            $sqlColor = "INSERT INTO art_piece_colors (pieceID, color) VALUES ('$id', '$red')"; 
            if (!mysqli_query($conn, $sqlColor)) {
            	die('Error: ' . mysqli_error($conn));
        	}
        } if (isset($_POST['green'])) {
            $green = $_REQUEST['green'];
            $sqlColor = "INSERT INTO art_piece_colors (pieceID, color) VALUES ('$id', '$green')"; 
            if (!mysqli_query($conn, $sqlColor)) {
            	die('Error: ' . mysqli_error($conn));
        	}
        } if (isset($_POST['yellow'])) {
            $yellow = $_REQUEST['yellow'];
            $sqlColor = "INSERT INTO art_piece_colors (pieceID, color) VALUES ('$id', '$yellow')"; 
            if (!mysqli_query($conn, $sqlColor)) {
            	die('Error: ' . mysqli_error($conn));
        	}
        } if (isset($_POST['black'])) {
            $black = $_REQUEST['black'];
            $sqlColor = "INSERT INTO art_piece_colors (pieceID, color) VALUES ('$id', '$black')"; 
            if (!mysqli_query($conn, $sqlColor)) {
            	die('Error: ' . mysqli_error($conn));
        	}
        } if (isset($_POST['white'])) {
            $white = $_REQUEST['white'];
            $sqlColor = "INSERT INTO art_piece_colors (pieceID, color) VALUES ('$id', '$white')"; 
            if (!mysqli_query($conn, $sqlColor)) {
            	die('Error: ' . mysqli_error($conn));
        	}
        } if (isset($_POST['pink'])) {
            $pink = $_REQUEST['pink'];
            $sqlColor = "INSERT INTO art_piece_colors (pieceID, color) VALUES ('$id', '$pink')"; 
            if (!mysqli_query($conn, $sqlColor)) {
            	die('Error: ' . mysqli_error($conn));
        	}
        } if (isset($_POST['purple'])) {
            $purple = $_REQUEST['purple'];
            $sqlColor = "INSERT INTO art_piece_colors (pieceID, color) VALUES ('$id', '$purple')"; 
            if (!mysqli_query($conn, $sqlColor)) {
            	die('Error: ' . mysqli_error($conn));
        	}
        }	
        echo "<h1> Success! </h1>";
        echo "<h2> <i> Your piece is now visible in the gallery archives! </i> </h2>";
        mysqli_close($conn);

        
        
        // $result = $conn->query($sqlquery1);
        // $result2 = $conn->query($sqlquery2);

        // $db->close();
        ?>
    </body> 
</html>
<?php
}
else {
  header("Location: index.php");
  exit();
}
?>