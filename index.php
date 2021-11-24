<!-- https://www.simplilearn.com/tutorials/php-tutorial/php-login-form -->
<!DOCTYPE html>
<html>
<head>
    <title> LOGIN </title>
</head>
<body>
    <form action="userLogin.php" method="post">
        <h2>LOGIN</h2>
        <?php
            if(isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>
        <label>Employee ID</label>
        <input type ="text" name="empID" placeholder="EmployeeID"><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>

<?php
/**
 * This is an example of a front controller for a flat file PHP site. Using a
 * Static list provides security against URL injection by default. See README.md
 * for more examples.
 */
# [START gae_simple_front_controller]
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'homepage.php';
        break;
    case '/homepage.php':
        require 'homepage.php';
        break;
    case '/search.php':
        require 'search.php';
        break;
    case '/pieceDisplay.php':
        require 'pieceDisplay.php';
        break;
    case '/addPiece.php':
        require 'addPiece.php';
        break;
    case '/useraccount.php':
        require 'useraccount.php';
        break;
    case '/insertArtist.php':
        require 'insertArtist.php';
        break;
    case '/addArtist.php':
        require 'addArtist.php';
        break;
    case '/deleteSQL2.php':
        require 'deleteSQL2.php';
        break;
    case '/deleteRequest2.php':
        require 'deleteRequest2.php';
        break;
    default:
        http_response_code(404);
        exit('Not Found');
}