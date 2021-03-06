<!DOCTYPE html>
<html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<head>
<title>ART UNLIMITED</title>
<?php 
include 'header.php';
include 'database.php';
$artist = $_REQUEST['artist'];
$sqlquery = "SELECT * FROM artist ORDER BY $artist ASC"; 
$result = $conn->query($sqlquery);

?>

<style>
<?php include 'style.css'; ?>
</style>
<body>
<h1 style="text-align: center; padding-top: 1%"> All Artists</h1>
<div style="text-align:center; padding-top:1%">
<div style="padding-bottom:1%">
<span style="padding-right:2%">
<button onclick="location.href='updateFormArtist.php';" style="background-color: #f2d2aa; border-radius: 5px; padding: .2%; padding-left:.8%;padding-right:.8%; font-weight:bold" > ✎ UPDATE ARTIST </button></span>
<button onclick="location.href='addArtist.php';" style="background-color: #f2d2aa; border-radius: 5px; padding: .2%; padding-left:.8%;padding-right:.8%; font-weight:bold" > ⊕ ADD ARTIST </button>
</div>
<form action="/sortArtists.php" method="post">
  <label for="artist">SORT BY:</label>
  <select id="artist" name="artist">
    <option value="artistID">Artist ID</option>
    <option value="firstName">First Name</option>
    <option value="lastName">Last Name</option>
    <option value="countryOfOrigin">Country</option>
  </select>
  <input style="background-color: #f2d2aa" type="submit">
</form>
</div>
<b><div style="text-align:center">Sorted By: <?php echo $artist?></div></b>
    <?php
    
    if ($result->num_rows > 0) {
        echo '<div class="row d-flex justify-content-center">';
        while ($row = mysqli_fetch_assoc($result)){

            echo '<div class="card text-left" style="width: 30rem; margin: 1.5rem; box-shadow: 0 2px 10px rgb(0 0 0 / 0.2); word-wrap: break-word; padding: 1.5%">';
            echo '<div style="font-weight: bold;">'. 'Artist ID: '. '<span style="font-weight: normal">' .$row["artistID"].'</span>' . '</div>';
            echo '<div style="font-weight: bold;">'. 'First Name: '. '<span style="font-weight: normal">' .$row["firstName"].'</span>' . '</div>';
            echo '<div style="font-weight: bold;">'. 'Last Name: '. '<span style="font-weight: normal">' .$row["lastName"].'</span>' . '</div>';
            echo '<div style="font-weight: bold;">'. 'Address: '. '<span style="font-weight: normal">' .$row["address"].'</span>' . '</div>';
            echo '<div style="font-weight: bold;">'. 'Country: '. '<span style="font-weight: normal">' .$row["countryOfOrigin"].'</span>' . '</div>';
            echo '</div>';
    
        }
        echo '</div>';
} else {
  echo "0 results";
}
	?>
</body>
</html>