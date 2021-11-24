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

$sqlquery = "SELECT * FROM art_piece";
$result = $conn->query($sqlquery);
$row = mysqli_fetch_assoc($result);

?>


<body>
  <h1>Hello, <?php echo $_SESSION['firstName']; ?></h1>
<div style="display:block; width:100%;">
<div style="width:50%; float: left; display: inline-block;">
<h1>
    <?php
    if ($result->num_rows > 0) {
  // output data of each row
    echo $row["title"]. "<br>";
    $image = $row["image_url"];
    $imageData = base64_encode(file_get_contents($image));
    echo '<img src = "data:image/jpeg;base64,'. $imageData. '">';
} else {
  echo "0 results";
}
	?>
</h1>
<a href = addPiece.php target = "_self">
   <button>ADD PIECE</button>
</a>
</div>
<div style="width:30%; float: right; display: inline-block;">
<p>
<?php
   if ($result->num_rows > 0) {
  // output data of each row
    echo "Piece ID: " . $row["pieceID"]. "<br>";
    echo "Description: " . "<br>" . $row["description"]. "<br>";
   } else{
     echo "0 results";
   }
  ?>
</p>
</div>
</div>
</html>
<?php
}
else {
  header("Location: index.php");
  exit();
}
?>