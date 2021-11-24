<?php
session_start();
//checks to make sure a user session is started, else takes back to login
if(isset($_SESSION['employeeID'])){ 
  ?>
<?php
include('header.php');
?>
<h1>Search</h1>

<h2>Hello, <?= $_GET['name'] ?? ' PHP user!'; ?></h2>
<p>Search Page coming soon</p>
<?php
}
else {
  header("Location: index.php");
  exit();
}
?>