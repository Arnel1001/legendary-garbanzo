<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
        $value_1 = $_POST['val1'];
        $value_2 = $_POST['val2'];
        $operator = $_POST['calc'];
        # test if input is_numeric
        if(is_numeric($value_1) && is_numeric($value_2)){
            
            # test if calc is not null
            if(isset($operator)){
                # switch statement for value of calc
                switch($operator){
                    case "add":
                        $result = $value_1 + $value_2;
                        break;
                    case "sub":
                        $result = $value_1 - $value_2;
                        break;
                    case "mul":
                        $result = $value_1 * $value_2;
                        break;
                    case "div":
                        $result = $value_1 / $value_2;
                        break;
                }
                }
                echo "Calculation result: $result";
            }

        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>