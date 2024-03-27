<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $dayofweek = date('w');
        
        switch ($dayofweek) {
            case 1:
                echo "it is monday";
                break;
            case 2:
                echo "it is tuesday";
                break;
            case 3:
                echo "it is wednesday";
                break;
            case 4:
                echo "it is thursday";
                break;
            case 5:
                echo "it is friday";
                break;
            case 6:
                echo "it is saturday";
                break;
            case 0:
                echo "it is sunday";
                break;
        }


    ?>

</body>
</html>