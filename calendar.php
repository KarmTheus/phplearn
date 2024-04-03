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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>