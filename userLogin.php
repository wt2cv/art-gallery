<?php
session_start();
include 'database.php';

function validate($data){
    //remove unnecessary characters
    $data = trim($data);
    //removes backslash
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['empID']) && isset($_POST['password'])){
//validate data inputted and cleans it up
$empID = validate($_POST['empID']);
$password = validate($_POST['password']);
}

//checks if no employee ID is entered
if(empty($empID)){
    header ("Location: index.php?error=User Name is required");
    exit();
}
else if(empty($password)) {
    header ("Location: index.php?error=Password is required");
    exit();
}

$sqlquery = "SELECT * FROM admin WHERE employeeID = '$empID' AND password='$password'";
$result = $conn->query($sqlquery);
$row = mysqli_fetch_assoc($result);
//echo $row;
if(mysqli_num_rows($result) == 1){
    if($row['employeeID']==$empID && $row['password'] == $password){
        echo "Logged In!";
        $_SESSION['employeeID'] = $row['employeeID'];
        $_SESSION['firstName'] = $row['firstName'];
        $_SESSION['lastName'] = $row['lastName'];
        $_SESSION['email'] = $row['email'];
        header("Location: homepage.php");
        exit();
    }
}
else{
    header("Location: index.php?error=Incorrect Employee ID or Password");
    exit();
}
?>

