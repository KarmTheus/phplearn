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
        //While
        $x = 1;
        while ($x < 3) {
            echo "hey<br>";
            $x++;
        }
       
        //do while
        $x = 2;
        do {
            echo "hello<br>";
            $x++;
        }
        while ($x < 4);

        //for

        for ($x = 1; $x <=5; $x++) {
            echo "yo<br>";
        }

        //foreach

        $array = array("Jimmy", "Johnny", "Frank", "Mikey");

        foreach ($array as $loopdt) {
            echo "My name is " .$loopdt. "<br>";
        }



    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>