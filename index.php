<!-- https://www.simplilearn.com/tutorials/php-tutorial/php-login-form -->
<!DOCTYPE html>


<?php
/**
 * This is an example of a front controller for a flat file PHP site. Using a
 * Static list provides security against URL injection by default. See README.md
 * for more examples.
 */
# [START gae_simple_front_controller]
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'loginPage.php';
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
    case '/sortPieces.php':
        require 'sortPieces.php';
        break;
    case '/sortArtists.php':
        require 'sortArtists.php';
        break;
    case '/SearchResults.php':
        require 'SearchResults.php';
        break;
    case '/userLogin.php':
        require 'userLogin.php';
        break;
    case '/userLogout.php':
        require 'userLogout.php';
        break;
    case '/loginPage.php':
        require 'loginPage.php';
        break;
    case '/updateArtist.php':
        require 'updateArtist.php';
        break;
    case '/updateFormArtist.php':
        require 'updateFormArtist.php';
        break;
    case '/updateFormPiece.php':
        require 'updateFormPiece.php';
        break;
    case '/updatePiece.php':
        require 'updatePiece.php';
        break;
    case '/empuser.php':
        require 'empuser.php';
        break;
    case '/adminuser.php':
        require 'adminuser.php';
        break;
    default:
        http_response_code(404);
        exit('Not Found');
}
