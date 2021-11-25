<html>

<head>
    <title> LOGIN </title>
</head>
<body style="background-image: url('https://res.cloudinary.com/simpleview/image/upload/v1570745187/clients/wichita-redesign/Visit_Wichita_Kansas_Wichita_Art_Museum_ab2f81d5-0500-4ccd-af3a-20835143dc89.jpg');backdrop-filter: blur(5px);background-size: cover;">
    <style>
<?php include 'style.css'; ?>
</style>
    <?php
include 'header.php'; ?>
<div style="padding:3%"></div>
<div style="text-align:center; border: 1px solid #d6d6d6; padding: 1.5%; width: 38%; border-radius: 1%; background-color: #f8f8f8; margin: auto;">
    <form action="userLogin.php" method="post">
        <h1>LOGIN</h1>
        <?php
            if(isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>
        <label style="font-size:1.3em">Employee ID: </label>
        <input type ="text" name="empID" placeholder="EmployeeID" required><br>
        <div style="padding:0.5%"></div>
        <label style="font-size:1.3em">Password: </label>
        <input type="password" name="password" placeholder="Password" required><br>
        <div style="padding:1.3%"></div>
        <button style="background-color: #f2d2aa; border-radius: 5px; padding: .2%; padding-left:2%;padding-right:2%;font-weight:bold; font-size:1.2em"  type="submit">LOGIN</button>
    </form>
            </div>
</body>
</html>