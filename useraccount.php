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

</html>