
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
    include 'includes/header.php';
?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>