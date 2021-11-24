<html>

<head>
    <title> LOGIN </title>
</head>
<body>
    <?php
include 'header.php'; ?>
<div style="text-align:center">
    <form action="userLogin.php" method="post">
        <h2>LOGIN</h2>
        <?php
            if(isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>
        <label>Employee ID: </label>
        <input type ="text" name="empID" placeholder="EmployeeID"><br>
        <label>Password: </label>
        <input type="password" name="password" placeholder="Password"><br>
        
        <button type="submit">Login</button>
    </form>
            </div>
</body>
</html>