<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
    //checks if the username is empty
    if (empty($_POST['username'])){
        echo "You did not type your name";
    }
    
    //checks if the wine is empty
    elseif (!empty($_POST['username']) && !empty($_POST['dish'])) {
        if(empty($_Post['color'])){
            echo "You did not select the color of your favorite wine";
        }
    }

    //checks if the dish is empty
    elseif (!empty($_POST['username']) && !empty($_POST['color'])){
        if(empty($_POST['dish'])){
            echo "You did not type your favorite dish";
        }
    }
    
    //if no information is missing, then it will display a statement   
    elseif(!empty($_POST['username']) && !empty($_POST['color']) && !empty($_POST['dish'])){
        //'username', 'wine', and 'dish' are placed in a variable to be displayed
        $name = $_POST['username'];
        $wine = $_POST['color'];
        $dish = $_POST['dish'];
        echo "Thanks for your selection $name <br>";
        echo "You really enjoyed $dish"."<br>"."-especially with a nice $wine wine";
    }
    ?>
</body>
</html>