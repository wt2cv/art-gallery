<?php
session_start();


session_unset();
session_destroy();

header("Location: loginPage.php");
include 'header.php';
?> 