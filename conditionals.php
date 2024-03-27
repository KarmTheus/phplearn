<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //vid 13
        $x = 2;

        if ($x == 1) {
            echo "Ur super cool";
        } 
        
        elseif($x == 2) {
            echo "ur a little cool ig";
        }

        elseif($x == 3) {
            echo "ur losing it";
        }

        elseif($x == 10) {
            echo "only 1 speck of cool";
        }
        
        else {
            echo "u suck";
        }
    ?>
<br>
    <?php
        //vid 14
        $x = 10;

        switch ($x) {
            case 1: 
                echo "answer = 1";
            break;
            case "number": 
                echo "answer = number";
            break;
            case 10: 
                echo "answer = 10";
            break;
            case 3: 
                echo "answer = 3";
            break;
            default:
                echo "ur answer is wrong";
        }




    ?>

</body>
</html>