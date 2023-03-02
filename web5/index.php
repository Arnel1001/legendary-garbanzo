<?php
session_start();
if(isset($_SESSION['view'])){
    $_SESSION['view'] = $_SESSION['view'] + 1;
}else{
    $_SESSION['view'] = 1;
}

if($_SESSION['view'] == 10){
    header("Location: congratulations.php");
}
?>

<h1>Hello</h1>
<p>You have visited this page <?php $num_visits = $_SESSION['view'];
echo $num_visits?> times</p>
<p><a href="?reset=true">Reset</a></p>

<?php 
if($_SESSION['view'] == 5){
    echo "Thank you for visiting the page a lot.";
}
?>