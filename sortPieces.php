<!DOCTYPE html>
<html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<head>
<title>ART UNLIMITED</title>
<?php 
include 'header.php';
include 'database.php';
$piece = $_REQUEST['pieces'];
$sqlquery = "SELECT * FROM art_piece NATURAL JOIN artist  NATURAL JOIN created ORDER BY $piece ASC"; 
$result = $conn->query($sqlquery);

?>
<style>
<?php include 'style.css';
?>
</style>
<body>
<h1 style="text-align: center; padding-top: 1%"> All Pieces</h1>
<div style="text-align:center; padding-top:1%">
<div style="padding-bottom:1%">
<span style="padding-right:2%">
<button onclick="location.href='updateFormPiece.php';" style="background-color: #f2d2aa; border-radius: 5px; padding: .2%; padding-left:.8%;padding-right:.8%; font-weight:bold" > ✎ UPDATE PIECE </button></span>
<button onclick="location.href='addPiece.php';" style="background-color: #f2d2aa; border-radius: 5px; padding: .2%; padding-left:.8%;padding-right:.8%; font-weight:bold" > ⊕ ADD PIECE </button>
</div>
<form action="/sortPieces.php" method="post">
  <label for="pieces">SORT BY:</label>
  <select id="pieces" name="pieces">
    <option value="title">Title</option>
    <option value="type">Type</option>
    <option value="pieceID">Piece ID</option>
  </select>
  <input style="background-color: #f2d2aa" type="submit">
</form>
</div>
<b><div style="text-align:center">Sorted By: <?php echo $piece?></div></b>
<div style="padding-top:1%">
    <?php
    
    if ($result->num_rows > 0) {
        echo '<div class="row d-flex justify-content-center">';
        while ($row = mysqli_fetch_assoc($result)){

            echo '<div class="card text-center" style="width: 25rem; margin: 1.5rem; box-shadow: 0 2px 10px rgb(0 0 0 / 0.2); word-wrap: break-word;">';
            echo "<b><div class='card-title' style='padding-top:3%;padding-right:3%;padding-left:3%; font-size: 20px'>". $row["title"] ."</div></b>";
            echo ' <div style="padding: 2%; "> <img style="width: 52%; height:100%" src = "'. $row["image_url"]. '"></div>';
            echo "<div style='padding: 1%' >". $row["firstName"] . " " . $row["lastName"]. "</div>";
            echo '<div style="color: grey">'. $row["type"] . ', '. $row["width"]. ' W x ' . $row["length"]. ' H x ' .$row["height"]. ' D in ' .  '</div>';
            echo "<div style='padding: 1%' >". $row["description"] ."</div>";
            echo "<b><div style='padding: 1%' >". 'Piece ID: '. $row["pieceID"] ."</div></b>";
            echo '</div>';
    
        }
        echo '</div>';
} else {
  echo "0 results";
}
	?>
    </div>
</body>
</html>