<?php
session_start();
//checks to make sure a user session is started, else takes back to login
if(isset($_SESSION['employeeID'])){ 
  ?>
<!DOCTYPE html>
<html>
<head>
<title>ART UNLIMITED</title>
<!-- https://www.geeksforgeeks.org/how-to-insert-form-data-into-database-using-php/ -->
<?php 

include 'header.php';
include 'database.php';

$sqlquery = "SELECT * FROM admin";
$result = $conn->query($sqlquery);
$row = mysqli_fetch_assoc($result);

?>
<body>
<div style="display:block; width:100%;">
<div style="width:50%; float: left; display: inline-block;">
<p> Signed in as...</p>
<h1>
    <?php
    if ($result->num_rows > 0) {
  // output data of each row
    echo "Name: " . $_SESSION["firstName"]. " " . $_SESSION["lastName"]. "<br>";
    $image = $_SESSION["image_url"];
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
    echo "Email: " . $_SESSION["email"]. "<br>";
    echo "Employee ID: " . $_SESSION["employeeID"]. "<br>";
    echo "Begin Date: " . $_SESSION["begin_date"]. "<br>";
    echo "Address: " . $_SESSION["address"]. "<br>";
   } else{
     echo "0 results";
   }
  ?>
</p>
</div>
</div>
</body>

</html>
<?php
}
else {
  header("Location: index.php");
  exit();
}
?>