<?php
$servername = "us-cdbr-east-04.cleardb.com";
$username = "b6021ad705af81";
$password = "62360869";
$dbname = "heroku_61c36e5d3c76659";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: "
        . $conn->connect_error);
}
?>