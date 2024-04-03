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
        //VID 8
        echo 2+6 ;

        echo 10%4 ;

        echo 6**2 ;
    ?>

    <?php
        //VID 9
        $x = 226;
        $x+= 90;

        echo $x;
    ?>

    <?php
        //vid 10
        $w = 4;
        $y = 201;

        if ($w < $y) {
            echo "True";
        }
        else {
            echo "False";
        }
    ?>

    <?php
        //vid 11
        $q = 12;
        echo ++$q;

        echo --$q;
    ?>

    <?php
        //vid 12
        $x = 15;
        $y = 39;

        if ($x == $y xor 17== 17 ) {
            echo "true";
        }
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>