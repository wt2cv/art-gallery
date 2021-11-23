<?php
try{
 $user = getenv('DB_USER');
 $password = getenv('DB_PASS');

$db = new PDO('mysql:host=mysql01.cs.virginia.edu;dbname=bs6sxv',$user, $password);
} catch (PDOException $e){
    die('Connection Error: '. $e->getMessage());
}

?>