<html> 
     <?php
     
        include 'header.php';
        include 'database.php';
         ?>
    <h1> Results page: </h1>
    <body> 
    <!-- https://www.geeksforgeeks.org/how-to-insert-form-data-into-database-using-php/ -->
        <?php

        $delRequestType = $_REQUEST['type'];
        $sqlquery= ""; 
        if ($delRequestType == "artist") {
            $artistID = $_REQUEST['artistID']; 
            $sqlquery2 = "DELETE FROM contact_artist WHERE artistID = '$artistID'";
            $sqlquery3 = "DELETE FROM client_of WHERE artistID = '$artistID'";
            $sqlquery = "DELETE FROM artist WHERE artistID = '$artistID'"; 
            if (!mysqli_query($conn, $sqlquery2)) {
                die('Error: <br>' . mysqli_error($conn));
            }
            if (!mysqli_query($conn, $sqlquery3)) {
                die('Error: <br>' . mysqli_error($conn));
            }
        } if ($delRequestType == "piece") {
            $pieceID = $_REQUEST['pieceID']; 
            $sqlquery = "DELETE FROM art_piece WHERE pieceID = '$pieceID'";
            $sqlquery2 = "DELETE FROM location WHERE pieceID = '$pieceID'"; 
            if (!mysqli_query($conn, $sqlquery2)) {
                die('Error: <br>' . mysqli_error($conn));
            }
        } if ($delRequestType == "admin") {
            $adminID = $_REQUEST['adminID'];
            $sqlquery2 = "DELETE FROM contact_admin WHERE employeeID = '$adminID'";
            $sqlquery3 = "DELETE FROM client_of WHERE employeeID = '$adminID'";
            $sqlquery = "DELETE FROM admin WHERE employeeID = '$adminID'";
            if (!mysqli_query($conn, $sqlquery2)) {
                die('Error: <br>' . mysqli_error($conn));
            }
            if (!mysqli_query($conn, $sqlquery3)) {
                die('Error: <br>' . mysqli_error($conn));
            }
        } if ($delRequestType == "phone") {
            $phoneNum = $_REQUEST['phoneNum']; 
            $sqlquery = "DELETE FROM phone WHERE phone_number = '$phoneNum'";
        }
        if (!mysqli_query($conn, $sqlquery)) {
            die('Error: <br>' . mysqli_error($conn));
        }
        echo "<h1> Success! </h1>";
        echo "<h2> <i> Your deletion request has been successfully processed </i> </h2>";
        mysqli_close($conn);
        ?>
    </body> 
</html>