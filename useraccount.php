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
<div style="margin:auto; width:60%;">
<div class="container"> 
    <h1> <p style="text-align:center; font-weight:normal; font-size:1.2em">Administrator Account </p></h1> 
</div>  <div style=" border: 0.5px solid DimGray;">
<div style="width:50%; float: left; display: inline-block;
">
<p> Signed in as...</p>
<h2>
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
</h2>
</div>
<div style="width:43%; float: right; display: inline-block;">
<p>
<?php
   if ($result->num_rows > 0) {
  // output data of each row
    echo "<div style='padding-bottom:4%; padding-top:15%'><b>Email:</b> " . $_SESSION["email"]. "</div>";
    echo "<div style='padding-bottom:4%'><b>Employee ID:</b> " . $_SESSION["employeeID"]. "</div>";
    echo "<div style='padding-bottom:4%'><b>Begin Date: </b>" . $_SESSION["begin_date"]. "</div>";
    echo "<div style='padding-bottom:4%'><b>Address: </b>" . $_SESSION["address"]. "</div>";
   } else{
     echo "0 results";
   }
  ?>
</p>
</div>
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