<style>
<?php include 'style.css'; ?>
</style>
<?php
//checks to make sure a user session is started, else takes back to login
if(isset($_SESSION['employeeID'])){ 
  ?>
<div class="topnav">
  <b><a href="homepage.php">ARTS UNLIMITED </a></b>
  <div class='topnav-center'>
  <a href="homepage.php">All Pieces</a>
  <!-- <a href="addPiece.php">Add Piece</a> -->
  <a href="allArtists.php">All Artists</a>
  <!-- <a href="addArtist.php">Add Artist</a> -->
  <a href="SearchResults.php">Search</a>
  <a href="deleteRequest2.php">Delete</a>
  <div class='topnav-right'>
      <a  href="useraccount.php">Account</a>
      <a href="userLogout.php">Logout</a>
</div>
  </div>
</div>
<?php
}
else {
  echo '<div class="topnav">
  <b><a href="homepage.php">ARTS UNLIMITED </a></b>
  <div class="topnav-center">
  <a href="homepage.php">All Pieces</a>
  <!-- <a href="addPiece.php">Add Piece</a> -->
  <a href="allArtists.php">All Artists</a>
  <!-- <a href="addArtist.php">Add Artist</a> -->
  <a href="SearchResults.php">Search</a>
  <a href="deleteRequest2.php">Delete</a>
  <div class="topnav-right">
      <a  href="useraccount.php">Account</a>
      <a href="userLogout.php">Login</a>
</div>
  </div>
</div>';

}
?> 