<?php
$servername = "mysql01.cs.virginia.edu";
$username = "bs6sxv";
$password = "pCdqB7ewiSGc(ZY@";
$dbname = "bs6sxv";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: "
        . $conn->connect_error);
}
?>