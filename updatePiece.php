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
    <body> 
    <form>
    <!-- https://www.w3schools.com/php/php_mysql_update.asp -->
        <?php
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
        $description = $_REQUEST['descrip'];
        $locID = $_REQUEST['locID'];
        $locArea = $_REQUEST['locArea']; 
        
        $checksql = "SELECT pieceID FROM art_piece WHERE pieceID = '$id';";
        $checkresult = mysqli_query($conn,$checksql);
        $foundnum = mysqli_num_rows($checkresult);

        if(($id != '') && ($foundnum != 0)) {
            if ($title != '') {
                $sql = "UPDATE art_piece
                        SET title = '$title'
                        WHERE pieceID = '$id';";
                if (!mysqli_query($conn, $sql)) {
                    die('Error: ' . mysqli_error($conn));
                }
            }

            if ($description != '') {
                $sql1 = "UPDATE art_piece
                        SET description = '$description'
                        WHERE pieceID = '$id';";
                if (!mysqli_query($conn, $sql1)) {
                    die('Error: ' . mysqli_error($conn));
                }
            }

            if ($url != '') {
                $sql2 = "UPDATE art_piece
                        SET image_url = '$url'
                        WHERE pieceID = '$id';";
                if (!mysqli_query($conn, $sql2)) {
                    die('Error: ' . mysqli_error($conn));
                }
            }

            if ($length != '') {
                $sql3 = "UPDATE art_piece
                        SET length = '$length'
                        WHERE pieceID = '$id';";
                if (!mysqli_query($conn, $sql3)) {
                    die('Error: ' . mysqli_error($conn));
                }
            }

            if ($height != '') {
                $sql4 = "UPDATE art_piece
                        SET height = '$height'
                        WHERE pieceID = '$id';";
                if (!mysqli_query($conn, $sql4)) {
                    die('Error: ' . mysqli_error($conn));
                }
            }

            if ($width != '') {
                $sql5 = "UPDATE art_piece
                        SET width = '$width'
                        WHERE pieceID = '$id';";
                if (!mysqli_query($conn, $sql5)) {
                    die('Error: ' . mysqli_error($conn));
                }
            }

            if ($artist != '') {
                $sql8 = "UPDATE created
                        SET artistID = '$artist'
                        WHERE pieceID = '$id';";
                if (!mysqli_query($conn, $sql8)) {
                    die('Error: ' . mysqli_error($conn));
                }
            } 

            if ($dateCreated != '') {
                $sql9 = "UPDATE created
                        SET dateCreated = '$dateCreated'
                        WHERE pieceID = '$id';";
                if (!mysqli_query($conn, $sql9)) {
                    die('Error: ' . mysqli_error($conn));
                }
            }

            if(isset($_REQUEST['type'])) {
                $newType = $_REQUEST['type'];
                $sql10 = "UPDATE art_piece
                    SET type = '$newType'
                    WHERE pieceID = '$id';";
                if (!mysqli_query($conn, $sql10)) {
                    die('Error: ' . mysqli_error($conn));
                }
            }
                 

           /* if(isset($_REQUEST['color']) ) {
                if(($_REQUEST['color'] == "Blue")){
                    echo "yes";
                }
    
            }*/
            
            if(isset($_REQUEST['color'])) {
                $sqldelete = "DELETE from art_piece_colors where pieceID = $id;";
                if (!mysqli_query($conn, $sqldelete)) {
                    die('Error: ' . mysqli_error($conn));
                }
                 if(($_REQUEST['color'] == "Blue")) {
                    $blue = $_REQUEST['color'];
                    $sql11 = "INSERT INTO art_piece_colors (pieceID, color) VALUES ('$id', '$blue')"; 
                    if (!mysqli_query($conn, $sql11)) {
                        die('Error: ' . mysqli_error($conn));
                    }
                }  if(($_REQUEST['color'] == "Red")) {
                    $red = $_REQUEST['color'];
                    $sql12 = "INSERT INTO art_piece_colors (pieceID, color) VALUES ('$id', '$red')"; 
                    if (!mysqli_query($conn, $sql12)) {
                        die('Error: ' . mysqli_error($conn));
                    }
                }  if(($_REQUEST['color'] == "Green")) {
                    $green = $_REQUEST['color'];
                    $sql13 = "INSERT INTO art_piece_colors (pieceID, color) VALUES ('$id', '$green')"; 
                    if (!mysqli_query($conn, $sql13)) {
                        die('Error: ' . mysqli_error($conn));
                    }
                }  if(($_REQUEST['color'] == "Yellow")) {
                    $yellow = $_REQUEST['color'];
                    $sql14 = "INSERT INTO art_piece_colors (pieceID, color) VALUES ('$id', '$yellow')"; 
                    if (!mysqli_query($conn, $sql14)) {
                        die('Error: ' . mysqli_error($conn));
                    }
                }  if(($_REQUEST['color'] == "Black")) {
                    $black = $_REQUEST['color'];
                    $sql15 = "INSERT INTO art_piece_colors (pieceID, color) VALUES ('$id', '$black')"; 
                    if (!mysqli_query($conn, $sql15)) {
                        die('Error: ' . mysqli_error($conn));
                    }
                }  if(($_REQUEST['color'] == "White")){
                    $white = $_REQUEST['color'];
                    $sql16 = "INSERT INTO art_piece_colors (pieceID, color) VALUES ('$id', '$white')"; 
                    if (!mysqli_query($conn, $sql16)) {
                        die('Error: ' . mysqli_error($conn));
                    }
                }  if(($_REQUEST['color'] == "Pink")){
                    $pink = $_REQUEST['color'];
                    $sql17 = "INSERT INTO art_piece_colors (pieceID, color) VALUES ('$id', '$pink')"; 
                    if (!mysqli_query($conn, $sql17)) {
                        die('Error: ' . mysqli_error($conn));
                    }
                } if (($_REQUEST['color'] == "Purple")) {
                    $purple = $_REQUEST['color'];
                    $sql18 = "INSERT INTO art_piece_colors (pieceID, color) VALUES ('$id', '$purple')"; 
                    if (!mysqli_query($conn, $sql18)) {
                        die('Error: ' . mysqli_error($conn));
                    }
                }	
            }
            if ($locArea != '') {
                $sql7 = "UPDATE location
                        SET area = '$locArea'
                        WHERE pieceID = '$id';";
                if (!mysqli_query($conn, $sql7)) {
                    die('Error: ' . mysqli_error($conn));
                }
            }
            if ($locID != '') {
                $sql6 = "UPDATE location
                        SET locationID = '$locID'
                        WHERE pieceID = '$id';";
                if (!mysqli_query($conn, $sql6)) {
                    die('Error: ' . mysqli_error($conn));
                }
            }

            
        echo "<h1> Success! </h1>";
        echo "<h2> <i> Your piece has now been updated in the gallery archives! </i> </h2>";
        } else {
            echo "<h1>Your entries have NOT been updated. Please enter valid piece ID </h1>";
        }
        
        
        mysqli_close($conn);
        ?>
        </form>
    </body> 
</div>
</html>
