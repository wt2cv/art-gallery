<html> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
form {
 margin: 0;
 padding: 50px;
 border: 1px solid DimGray;
 border-radius: 5px; 
}
</style>
<style>
<?php include 'style.css'; ?>
</style>
 <?php
        include 'header.php';
		include 'database.php'; 
  ?>
<div style="padding-left: 15%; padding-top:2%">
    <a style="color: black " href="allArtists.php">← Go Back</a>
</div> 
<div class="container"> 
    <h1> <p style="text-align:center"> Update an artist: </p></h1> 
</div> 
<div class="container"> 
    <body> 
        <form action="updateArtist.php" method="post">
            <h3><p style="text-align:center">To start off, which artist would you like to update?</h3></p>
            <p style="text-align:center"><b>Artist ID Number: </b><input type="number" name="artistID" /></p>
            <p><br></p>
            <hr size="8" width="100%" color="black">  
            <p><h6> Please <b>only</b> fill out the entries you would like to update for the ArtistID, and leave the others blank if you would like them to remain the same: </h6></p>
            <p>First name: <input type="text" name="fname" /></p>
            <p>Last name: <input type="text" name="lname" /></p>
            <p>Address: <input type="text" name="address" /> </p> 
            <p>Country of origin: <input type="text" name="countryOfOrigin" /> </p>
            <p>Employee ID of Artist's Manager: <input type="number" name="client" /> <p> 
            <p>Date Artist Signed with Gallery: <input type="date" name="dateSigned" /> <p> 
            <p>Phone numbers (1 minimum, up to 5): </p> 
            <p><i>If phone number is not in database yet: </i></p> 
            <p> Number: <input type="text" name="phnum"> <br> 
                Phone type: <br> 
                <input type="radio" name="phnumtype" value="Cell">
                    <label for="phnumtype"> Cell </label> 
                    <input type="radio" name="phnumtype" value="Home">
                    <label for="phnumtype"> Home </label> <br> 
                Is prefered number:  <br> 
                    <input type="radio" name="phnumpref" value="Y">
                    <label for="phnumpref"> Preferred </label> 
                    <input type="radio" name="phnumpref" value="N">
                    <label for="phnumpref"> Not preferred </label>
            </p>
            <p><i>If phone number is already in database: </i></p> 
            <p> Number: <input type="text" name="phnum1"> <br> 
                Phone type: <br> 
                <input type="radio" name="phnum1type" value="Cell">
                    <label for="phnum1type"> Cell </label> 
                    <input type="radio" name="phnum1type" value="Home">
                    <label for="phnum1type"> Home </label> <br> 
                Is prefered number:  <br> 
                    <input type="radio" name="phnum1pref" value="Y">
                    <label for="phnum1pref"> Preferred </label> 
                    <input type="radio" name="phnum1pref" value="N">
                    <label for="phnum1pref"> Not preferred </label>
            </p>
            <p> Number: <input type="text" name="phnum2"> <br> 
                Phone type: <br> 
                <input type="radio" name="phnum2type" value="Cell">
                    <label for="phnum2type"> Cell </label> 
                    <input type="radio" name="phnum2type" value="Home">
                    <label for="phnum2type"> Home </label> <br> 
                Is prefered number:  <br> 
                    <input type="radio" name="phnum2pref" value="Y">
                    <label for="phnum2pref"> Preferred </label> 
                    <input type="radio" name="phnum2pref" value="N">
                    <label for="phnum2pref"> Not preferred </label>
            </p>
            <p> Number: <input type="text" name="phnum3"> <br> 
                Phone type: <br> 
                <input type="radio" name="phnum3type" value="Cell">
                    <label for="phnum3type"> Cell </label> 
                    <input type="radio" name="phnum3type" value="Home">
                    <label for="phnum3type"> Home </label> <br> 
                Is prefered number:  <br> 
                    <input type="radio" name="phnum3pref" value="Y">
                    <label for="phnum3pref"> Preferred </label> 
                    <input type="radio" name="phnum3pref" value="N">
                    <label for="phnum3pref"> Not preferred </label>
            </p>
            <p> Number: <input type="text" name="phnum4"> <br> 
                Phone type: <br> 
                <input type="radio" name="phnum4type" value="Cell">
                    <label for="phnum4type"> Cell </label> 
                    <input type="radio" name="phnum4type" value="Home">
                    <label for="phnum4type"> Home </label> <br> 
                Is prefered number:  <br> 
                    <input type="radio" name="phnum4pref" value="Y">
                    <label for="phnum4pref"> Preferred </label> 
                    <input type="radio" name="phnum4pref" value="N">
                    <label for="phnum4pref"> Not preferred </label>
            </p>
            <p> Number: <input type="text" name="phnum5"> <br> 
                Phone type: <br> 
                <input type="radio" name="phnum5type" value="Cell">
                    <label for="phnum5type"> Cell </label> 
                    <input type="radio" name="phnum5type" value="Home">
                    <label for="phnum5type"> Home </label> <br> 
                Is prefered number:  <br> 
                    <input type="radio" name="phnum5pref" value="Y">
                    <label for="phnum5pref"> Preferred </label> 
                    <input type="radio" name="phnum5pref" value="N">
                    <label for="phnum5pref"> Not preferred </label>
            </p>
            <p><input style="background-color: #f2d2aa; border-radius: 5px" type="submit" /></p>
        </form> 
    </body> 
</div>
</html>
