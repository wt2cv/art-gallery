<?php
$servername = 'mysql01.cs.virginia.edu';
$username = 'bs6sxv_b';
$password = 'Fall2021!!';
$dbname = 'bs6sxv';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: "
        . $conn->connect_error);
}
?>
