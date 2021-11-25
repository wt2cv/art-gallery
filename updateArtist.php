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
    <!-- https://www.w3schools.com/php/php_mysql_update.asp  -->
        <?php
        include 'header.php';
		include 'database.php';
        
        $id = $_REQUEST['artistID'];
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $address = $_REQUEST['address'];
        $countryOfOrigin = $_REQUEST['countryOfOrigin'];
        $empClient = $_REQUEST['client']; 
        $dateSigned = $_REQUEST['dateSigned'];
        $phnum = $_REQUEST['phnum']; 
        $phnum1 = $_REQUEST['phnum1']; 
        $phnum2 = $_REQUEST['phnum2'];
        $phnum3 = $_REQUEST['phnum3'];
        $phnum4 = $_REQUEST['phnum4'];
        $phnum5 = $_REQUEST['phnum5'];
        
        $checksql = "SELECT artistID FROM artist WHERE artistID = '$id';";
        $checkresult = mysqli_query($conn,$checksql);
        $foundnum = mysqli_num_rows($checkresult);

        if(($id != '') && ($foundnum != 0)) {
            if ($fname != '') {
                $sql = "UPDATE artist
                        SET firstName = '$fname'
                        WHERE artistID = '$id';";
                if (!mysqli_query($conn, $sql)) {
                    die('Error: ' . mysqli_error($conn));
                }
            }

            if ($lname != '') {
                $sql1 = "UPDATE artist
                        SET lastName = '$lname'
                        WHERE artistID = '$id';";
                if (!mysqli_query($conn, $sql1)) {
                    die('Error: ' . mysqli_error($conn));
                }
            }

            if ($address != '') {
                $sql2 = "UPDATE artist
                        SET address = '$address'
                        WHERE artistID = '$id';";
                if (!mysqli_query($conn, $sql2)) {
                    die('Error: ' . mysqli_error($conn));
                }
            }

            if ($countryOfOrigin != '') {
                $sql3 = "UPDATE artist
                        SET address = '$countryOfOrigin'
                        WHERE artistID = '$id';";
                if (!mysqli_query($conn, $sql3)) {
                    die('Error: ' . mysqli_error($conn));
                }
            }

            if ($empClient != '') {
                $sql4 = "UPDATE client_of
                        SET employeeID = '$empClient'
                        WHERE artistID = '$id';";
                if (!mysqli_query($conn, $sql4)) {
                    die('Error: ' . mysqli_error($conn));
                }
            }

            if ($dateSigned != '') {
                $sql5 = "UPDATE client_of
                        SET dateSigned = '$dateSigned'
                        WHERE artistID = '$id';";
                if (!mysqli_query($conn, $sql5)) {
                    die('Error: ' . mysqli_error($conn));
                }
            }
    /*------------------PHONE NUMBERS -------------------*/
            if ($phnum1 != '') {
                $sql6 = "UPDATE contact_artist
                        SET phone_number = '$phnum1'
                        WHERE artistID = '$id';";
                if (!mysqli_query($conn, $sql6)) {
                    die('Error: ' . mysqli_error($conn));
                }
                if(isset($_REQUEST['phnum1type'])){
                    $phnum1pref = $_REQUEST['phnum1pref']; 
                    $phnum1type = $_REQUEST['phnum1type']; 
                    $sql7 = "UPDATE phone
                        SET phone_type = '$phnum1type'
                        WHERE phone_number = '$phnum1';";
                    if (!mysqli_query($conn, $sql7)) {
                        die('Error: ' . mysqli_error($conn));
                    }
                    $sql8 = "UPDATE phone
                            SET phone_type = '$phnum1pref'
                            WHERE phone_number = '$phnum1';";
                    if (!mysqli_query($conn, $sql8)) {
                        die('Error: ' . mysqli_error($conn));
                    }
                } else {
                    echo "Note: you did not select phone type and whether number is preferred or not, so default was saved";
                }
                
            }
            if ($phnum2 != '') {
                $sql9 = "UPDATE contact_artist
                        SET phone_number = '$phnum2'
                        WHERE artistID = '$id';";
                if (!mysqli_query($conn, $sql9)) {
                    die('Error: ' . mysqli_error($conn));
                }
                if(isset($_REQUEST['phnum2type'])){
                    $phnum2pref = $_REQUEST['phnum2pref']; 
                    $phnum2type = $_REQUEST['phnum2type'];
                    $sql10 = "UPDATE phone
                            SET phone_type = '$phnum2type'
                            WHERE phone_number = '$phnum2';";
                    if (!mysqli_query($conn, $sql10)) {
                        die('Error: ' . mysqli_error($conn));
                    }
                    $sql11 = "UPDATE phone
                            SET phone_type = '$phnum2pref'
                            WHERE phone_number = '$phnum2';";
                    if (!mysqli_query($conn, $sql11)) {
                        die('Error: ' . mysqli_error($conn));
                    }
                } else {
                    echo "Note: you did not select phone type and whether number is preferred or not, so default was saved";
                }
            }
            if ($phnum3 != '') {
                $sql12 = "UPDATE contact_artist
                        SET phone_number = '$phnum3'
                        WHERE artistID = '$id';";
                if (!mysqli_query($conn, $sql12)) {
                    die('Error: ' . mysqli_error($conn));
                }
                if(isset($_REQUEST['phnum2type'])){
                    $phnum3pref = $_REQUEST['phnum3pref']; 
                    $phnum3type = $_REQUEST['phnum3type'];
                    $sql13 = "UPDATE phone
                            SET phone_type = '$phnum3type'
                            WHERE phone_number = '$phnum3';";
                    if (!mysqli_query($conn, $sql13)) {
                        die('Error: ' . mysqli_error($conn));
                    }
                    $sql14 = "UPDATE phone
                            SET phone_type = '$phnum3pref'
                            WHERE phone_number = '$phnum3';";
                    if (!mysqli_query($conn, $sql14)) {
                        die('Error: ' . mysqli_error($conn));
                    }
                } else {
                    echo "Note: you did not select phone type and whether number is preferred or not, so default was saved";
                }
            }
            if ($phnum4 != '') {
                $sql15 = "UPDATE contact_artist
                        SET phone_number = '$phnum4'
                        WHERE artistID = '$id';";
                if (!mysqli_query($conn, $sql15)) {
                    die('Error: ' . mysqli_error($conn));
                }
                if(isset($_REQUEST['phnum4type'])){
                    $phnum3pref = $_REQUEST['phnum4pref']; 
                    $phnum3type = $_REQUEST['phnum4type'];
                    $sql16 = "UPDATE phone
                            SET phone_type = '$phnum4type'
                            WHERE phone_number = '$phnum4';";
                    if (!mysqli_query($conn, $sql16)) {
                        die('Error: ' . mysqli_error($conn));
                    }
                    $sql17 = "UPDATE phone
                            SET phone_type = '$phnum4pref'
                            WHERE phone_number = '$phnum4';";
                    if (!mysqli_query($conn, $sql17)) {
                        die('Error: ' . mysqli_error($conn));
                    }
                } else {
                    echo "Note: you did not select phone type and whether number is preferred or not, so default was saved";
                }
            }
            if ($phnum5 != '') {
                $sql18 = "UPDATE contact_artist
                        SET phone_number = '$phnum5'
                        WHERE artistID = '$id';";
                if (!mysqli_query($conn, $sql18)) {
                    die('Error: ' . mysqli_error($conn));
                }
                if(isset($_REQUEST['phnum4type'])){
                    $phnum5pref = $_REQUEST['phnum5pref']; 
                    $phnum5type = $_REQUEST['phnum5type'];
                    $sql19 = "UPDATE phone
                            SET phone_type = '$phnum5type'
                            WHERE phone_number = '$phnum5';";
                    if (!mysqli_query($conn, $sql19)) {
                        die('Error: ' . mysqli_error($conn));
                    }
                    $sql20 = "UPDATE phone
                            SET phone_type = '$phnum5pref'
                            WHERE phone_number = '$phnum5';";
                    if (!mysqli_query($conn, $sql20)) {
                        die('Error: ' . mysqli_error($conn));
                    }
                } else {
                    echo "Note: you did not select phone type and whether number is preferred or not, so default was saved";
                }
            }
            if ($phnum != '') {
                if(isset($_REQUEST['phnumtype'])&&isset($_REQUEST['phnumpref'])){
                    $phnumpref = $_REQUEST['phnumpref']; 
                    $phnumtype = $_REQUEST['phnumtype'];
                    $sql21 = "INSERT INTO phone (phone_number, phone_type, phone_preferred) VALUES ('$phnum', '$phnumtype', '$phnumpref');";
                    $sql22 = "UPDATE contact_artist
                        SET phone_number = '$phnum'
                        WHERE artistID = '$id';";
                        if (!mysqli_query($conn, $sql21)) {
                            die('Error: ' . mysqli_error($conn));
                        }
                        if (!mysqli_query($conn, $sql22)) {
                            die('Error: ' . mysqli_error($conn));
                        } 
                        echo "<h1>Success!</h1>";
                echo "<h1>Your entries have been updated</h1>"; 
                    } else {
                            echo "Phone number not updated, please specify phone type and whether number is preferred or not for new number.";   
                    }
                } 
            if ($phnum == '') {
                echo "<h1>Success!</h1>";
                echo "<h1>Your entries have been updated</h1>"; 
            }                             
        } else {
            echo "Your entries have NOT been updated. Please enter valid Artist ID.";
        } 

        mysqli_close($conn);
        ?>
        </form>
    </body> 
</div>
</html>

