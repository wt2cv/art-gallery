<?php

/**
 * A list of links to display on the homepage. This is really only here to demonstrate
 * that PHP is being executed.
 */
$links = ['search.php'];
include 'database.php';

$stmt = $db->prepare("SELECT * FROM art_piece");
$stmt->execute();

?>
<?php
include('header.php');
?>
<h1>Welcome to the Homepage!</h1>
<h2>all paintings coming soon</h2>

<ul>
    <?php foreach ($links as $link): ?>
        <li>Go to <a href="/<?= $link ?>"><code><?= $link ?></code></a></li>
    <?php endforeach ?>
    <?php 
while($row = $stmt->fetch()){
    $title = $row['title'];
    $description = $row["description"];

    echo "<b><i>$title</b></i><br />-$description</p>";
}?>
   
</ul>
