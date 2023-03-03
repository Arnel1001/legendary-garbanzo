<?php

   // test cookies if is set, display if set
   if(isset($_COOKIE['auth']) && isset($_COOKIE['username']) && isset($_COOKIE['password'])){
    echo "Cookie has been set, ";
  
}elseif(!isset($_COOKIE['auth']) && !isset($_COOKIE['username']) && !isset($_COOKIE['password'])){
    header("Location: index.php"); 
    exit();
  } 

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
</head>
<body>
    You are logged in and can access all pages on this web site. <br> <a href="anotherpage.php">
    <br>Visit another page on this site?</a>
</body>
</html>