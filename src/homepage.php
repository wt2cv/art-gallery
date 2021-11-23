<?php

/**
 * A list of links to display on the homepage. This is really only here to demonstrate
 * that PHP is being executed.
 */
$links = ['search.php'];
include 'database.php';

$stmt = $db->prepare("SELECT * FROM artist");
$stmt->execute();

?>
<style>
<?php include 'style.css'; ?>
</style>
<h1>Welcome to the Homepage!</h1>

<ul>
    <?php foreach ($links as $link): ?>
        <li>Go to <a href="/<?= $link ?>"><code><?= $link ?></code></a></li>
    <?php endforeach ?>
    <?php 
while($row = $stmt->fetch()){
    $firstName = $row['firstName'];
    $countryOfOrigin = $row["countryOfOrigin"];

    echo "<b><i>$firstName</b></i><br />-$countryOfOrigin</p>";
}?>
   
</ul>