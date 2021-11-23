<!DOCTYPE html>
<html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<head>
<title>ART UNLIMITED</title>
<?php 
include 'header.php';
include 'database.php';
$sqlquery = "SELECT * FROM artist";
$result = $conn->query($sqlquery);

?>

<style>
<?php include 'style.css'; ?>
</style>
<body>
<h2 style="text-align: center; padding-top: 1%"> All Artists</h2>
    <?php
    
    if ($result->num_rows > 0) {
        echo '<div class="row d-flex justify-content-center">';
        while ($row = mysqli_fetch_assoc($result)){

            echo '<div class="card text-left" style="width: 30rem; margin: 1.5rem; box-shadow: 0 2px 10px rgb(0 0 0 / 0.2); word-wrap: break-word; padding: 1.5%">';
            echo '<div style="color: grey">'. 'Artist ID: '. '<span style="color: black">' .$row["artistID"].'</span>' . '</div>';
            echo '<div style="color: grey">'. 'First Name: '. '<span style="color: black">' .$row["firstName"].'</span>' . '</div>';
            echo '<div style="color: grey">'. 'Last Name: '. '<span style="color: black">' .$row["lastName"].'</span>' . '</div>';
            echo '<div style="color: grey">'. 'Address: '. '<span style="color: black">' .$row["address"].'</span>' . '</div>';
            echo '<div style="color: grey">'. 'Country: '. '<span style="color: black">' .$row["countryOfOrigin"].'</span>' . '</div>';
            echo '</div>';
    
        }
        echo '</div>';
} else {
  echo "0 results";
}
	?>
</body>
</html>