<?php
session_start();
include 'database.php';
include 'header.php';
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
// if(empty($empID)){
//     header ("Location: loginPage.php?error=User Name is required");
//     exit();
// }
// else if(empty($password)) {
//     header ("Location: loginPage.php?error=Password is required");
//     exit();
// }

$sqlquery = "SELECT * FROM admin WHERE employeeID = '$empID' AND password='$password'";
$result = $conn->query($sqlquery);
$row = mysqli_fetch_assoc($result);
//echo $row;
if(mysqli_num_rows($result) == 1){
    if($row['employeeID']==$empID && $row['password'] == $password){
        $_SESSION['employeeID'] = $row['employeeID'];
        $_SESSION['firstName'] = $row['firstName'];
        $_SESSION['lastName'] = $row['lastName'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['image_url'] = $row['image_url'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['begin_date'] = $row['begin_date'];
        if ($row['begin_date'] > "2021-01-01") {
            $createsql = "CREATE USER IF NOT EXISTS 'emp'@'us-cdbr-east-04.cleardb.com' IDENTIFIED BY 'Po319D'";
            mysqli_query($conn, $createsql);
            $grantsql = "GRANT SELECT, UPDATE, INSERT  ON heroku_61c36e5d3c76659.* TO 'emp'@'us-cdbr-east-04.cleardb.com';";
            mysqli_query($conn,$grantsql);

            /*
            session_unset();
            session_destroy();
            include 'empuser.php';
            $servername = 'us-cdbr-east-04.cleardb.com';
            $username = 'emp';
            $password = 'Po319D';
            $dbname = 'heroku_61c36e5d3c76659';

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error){
                die("Connection failed: "
                    . $conn->connect_error);
            }*/
        }
        
        if ($row['begin_date'] <= "2021-01-01") {
            $createsql1 = "CREATE USER IF NOT EXISTS 'admin'@'us-cdbr-east-04.cleardb.com' IDENTIFIED BY 'Ndp203'";
            mysqli_query($conn, $createsql1);
            $grantsql1 = "GRANT ALL PRIVILEGES ON heroku_61c36e5d3c76659.* TO 'emp'@'us-cdbr-east-04.cleardb.com';";
            mysqli_query($conn,$grantsql1);

            /*
            session_unset();
            session_destroy();
            include 'adminuser.php';
            $servername = 'us-cdbr-east-04.cleardb.com';
            $username = 'admin';
            $password = 'Ndp203';
            $dbname = 'heroku_61c36e5d3c76659';

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error){
                die("Connection failed: "
                    . $conn->connect_error);
            }*/
        }

       echo "<h1 style='text-align:center; padding-top:3%'>Logged In Successfully!</h1>
        <h1 style='text-align:center; padding:3%'> <div style='padding-bottom:1%'>Welcome to the administrative website </div> <div> for ARTS UNLIMITED, ".$_SESSION["firstName"] . "!</div> </h1>
        <h2 style='text-align:center'><a style='color: black ; text-decoration: none;' href='homepage.php'>← Proceed to Gallery</a></h2>
        <h2 style='text-align:center; padding-top:1%'><a style='color: black ; text-decoration: none;' href='useraccount.php'>Go to User Account → </a></h2>";
  //  header("Location: useraccount.php");
        exit();
    }
} else {
    echo "<h1 style='text-align:center; padding:3%'>Incorrect Username or Password</h1>
        <h2 style='text-align:center'><a style='color: black ; text-decoration: none;' href='loginPage.php'>Sign in Again →</a></h2>";
     // header("Location: userLogin.php");
}


?>
