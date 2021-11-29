<?php
$servername = 'mysql01.cs.virginia.edu';
$username = 'mx2gd_a';
$password = 'Fall2021!!';
$dbname = 'mx2gd';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: "
        . $conn->connect_error);
}
?>
