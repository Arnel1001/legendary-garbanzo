<?php

// To check for syntax errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

// set cookies
// if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];

// to check if both username and password are not empty
if(!empty($username) && !empty($password)){
    setcookie("auth", "ok", time()+3600); // to set a cookie with the names "auth", "ok", and 1 hour as its end date (3600 seconds).
    header("Location: loggedin.php"); // to redirect the user to the loggedin.php page
    exit();
    } 


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>

    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="">
    Name: <input type="text" name="username">
    Password: <input type="text" name="password"><br/><br/>
    <input type="submit" value="Log Me In">
    </form>


    <?php
    echo "What function do we use to start a session?";
    echo "<br>";
    echo "=> We use the function session_start(); to start a session.";
    echo "<br>";
    echo "Where are these session variables stored?"; 
    echo "<br>";
    echo "=> Session variables stored and that are only saved on the server.";
   
    ?>
</body>
</html>