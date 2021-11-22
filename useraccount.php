<!DOCTYPE html>
<html>
<head>
<title>ART UNLIMITED</title>
<!-- https://www.geeksforgeeks.org/how-to-insert-form-data-into-database-using-php/ -->
<?php 
session_start();
$servername = "localhost";
$username = "wendy";
$password = "pw";
$dbname = "artgallery1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: "
        . $conn->connect_error);
}
$sqlquery = "SELECT * FROM admin";
$result = $conn->query($sqlquery);
$row = mysqli_fetch_assoc($result);

$conn->close();
?>
<div class="topnav">
  <a href="home.php">ARTS UNLIMITED </a>
  <div class='topnav-right'>
  <a href="#allpieces">All Pieces</a>
  <a href="#addpiece">Add Piece</a>
  <a href="#search">Search</a>
  <a class="active" href="useraccount.php">Account</a>
  </div>
</div>
<body>
<div style="display:block; width:100%;">
<div style="width:50%; float: left; display: inline-block;">
<p> Signed in as...</p>
<h1>
    <?php
    if ($result->num_rows > 0) {
  // output data of each row
    echo "Name: " . $row["firstName"]. " " . $row["lastName"]. "<br>";
    $image = $row["image_url"];
    $imageData = base64_encode(file_get_contents($image));
    echo '<img src = "data:image/jpeg;base64,'. $imageData. '">';
} else {
  echo "0 results";
}
	?>
</h1>
</div>
<div style="width:30%; float: right; display: inline-block;">
<p>
<?php
   if ($result->num_rows > 0) {
  // output data of each row
    echo "Email: " . $row["email"]. "<br>";
    echo "Employee ID: " . $row["employeeID"]. "<br>";
    echo "Begin Date: " . $row["begin_date"]. "<br>";
    echo "Address: " . $row["address"]. "<br>";
   } else{
     echo "0results";
   }
  ?>
</p>
</div>
</div>
</body>
<style>
/* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
  }
  
  /* Style the links inside the navigation bar */
  .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  
  /* Change the color of links on hover */
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  
  /* Add a color to the active/current link */
  .topnav a.active {
    background-color: #04AA6D;
    color: white;
  }

  .topnav-right{
    float: right;
   }

</style>

</html>