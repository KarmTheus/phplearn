<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "phplessons";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);

?>


<?php
   $sql = "SELECT * FROM users WHERE id = 2;"; 
   $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['username'] . "<br>";
        }
    }
?>


