<html> 
    <h1> Add Artist Results page: </h1>
    <body> 
    <!-- https://www.geeksforgeeks.org/how-to-insert-form-data-into-database-using-php/ -->
        <?php
       include 'header.php';
        include 'database.php';
        
        $id = $_REQUEST['artistID'];
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $countryOfOrigin = $_REQUEST['countryOfOrigin'];
        $address = $_REQUEST['address'];
        $sqlquery1 = "INSERT INTO artist (artistID, firstName, lastName, address, countryOfOrigin) VALUES ('$id', '$fname', '$lname', '$address', '$countryOfOrigin')"; 
        $phnum1 = $_REQUEST['phnum1'];
        $phnum1pref = $_REQUEST['phnum1pref']; 
        $phnum1type = $_REQUEST['phnum1type']; 
        $sqlquery2 = "INSERT INTO phone (phone_number, phone_type, phone_preferred) VALUES ('$phnum1', '$phnum1type', '$phnum1pref')";
        $sqlquery3 = "INSERT INTO contact_artist (phone_number, artistID) VALUES ('$phnum1', '$id')"; 
        $empContact = $_REQUEST['contact']; 
        $dateSigned = $_REQUEST['dateSigned']; 
        $sqlquery4 = "INSERT INTO client_of (artistID, employeeID, dateSigned) VALUES ('$id', '$empContact', '$dateSigned')"; 


        if (!mysqli_query($conn, $sqlquery2)) {
            die('Error: ' . mysqli_error($conn));
        }
        if (!mysqli_query($conn, $sqlquery1)) {
            die('Error: ' . mysqli_error($conn));
        }
        if (!mysqli_query($conn, $sqlquery3)) {
            die('Error: ' . mysqli_error($conn));
        }
        if (!mysqli_query($conn, $sqlquery4)) {
            die('Error: ' . mysqli_error($conn));
        }
        if ($_REQUEST['phnum2'] != "") {
            $phnum2 = $_REQUEST['phnum2'];
            $phnum2pref = $_REQUEST['phnum2pref']; 
            $phnum2type = $_REQUEST['phnum2type']; 
            $sqlPhone = "INSERT INTO phone (phone_number, phone_type, phone_preferred) VALUES ('$phnum2', '$phnum2type', '$phnum2pref')";
            $sqlContact = "INSERT INTO contact_artist (phone_number, artistID) VALUES ('$phnum2', '$id')";
            if (!mysqli_query($conn, $sqlPhone)) {
                die('Error: ' . mysqli_error($conn));
            }
            if (!mysqli_query($conn, $sqlContact)) {
                die('Error: ' . mysqli_error($conn));
            }
        }
        if ($_REQUEST['phnum3'] != "") {
            $phnum3 = $_REQUEST['phnum3'];
            $phnum3pref = $_REQUEST['phnum3pref']; 
            $phnum3type = $_REQUEST['phnum3type']; 
            $sqlPhone = "INSERT INTO phone (phone_number, phone_type, phone_preferred) VALUES ('$phnum3', '$phnum3type', '$phnum3pref')";
            $sqlContact = "INSERT INTO contact_artist (phone_number, artistID) VALUES ('$phnum3', '$id')";
            if (!mysqli_query($conn, $sqlPhone)) {
                die('Error: ' . mysqli_error($conn));
            }
            if (!mysqli_query($conn, $sqlContact)) {
                die('Error: ' . mysqli_error($conn));
            }
        }
        if ($_REQUEST['phnum4'] != "") {
            $phnum4 = $_REQUEST['phnum4'];
            $phnum4pref = $_REQUEST['phnum4pref']; 
            $phnum4type = $_REQUEST['phnum4type']; 
            $sqlPhone = "INSERT INTO phone (phone_number, phone_type, phone_preferred) VALUES ('$phnum4', '$phnum4type', '$phnum4pref')";
            $sqlContact = "INSERT INTO contact_artist (phone_number, artistID) VALUES ('$phnum4', '$id')";
            if (!mysqli_query($conn, $sqlPhone)) {
                die('Error: ' . mysqli_error($conn));
            }
            if (!mysqli_query($conn, $sqlContact)) {
                die('Error: ' . mysqli_error($conn));
            }
        }
        if ($_REQUEST['phnum5'] != "") {
            $phnum5 = $_REQUEST['phnum5'];
            $phnum5pref = $_REQUEST['phnum5pref']; 
            $phnum5type = $_REQUEST['phnum5type']; 
            $sqlPhone = "INSERT INTO phone (phone_number, phone_type, phone_preferred) VALUES ('$phnum5', '$phnum5type', '$phnum5pref')";
            $sqlContact = "INSERT INTO contact_artist (phone_number, artistID) VALUES ('$phnum5', '$id')";
            if (!mysqli_query($conn, $sqlPhone)) {
                die('Error: ' . mysqli_error($conn));
            }
            if (!mysqli_query($conn, $sqlContact)) {
                die('Error: ' . mysqli_error($conn));
            }
        }
        echo "<h1> Success! </h1>";
        echo "<h2> <i> The artist and how to contact them is now visible in the system! </i> </h2>";
        ?>
    </body> 
</html>