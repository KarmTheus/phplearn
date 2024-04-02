<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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
</body>
</html>