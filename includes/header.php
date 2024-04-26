<?php
  session_start();
?>


<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="datatypes.php">Datatypes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="functions.php">Functions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="operators.php">Operators</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="conditionals.php">Conditionals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calculator.php">Calculator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calendar.php">Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="loops.php">Loops</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="superglobals.php">Superglobals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>





      </ul>
    </div>
    <?php
        if(isset($_SESSION['userId'])) {
            echo '<p>You are signed in</p><form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">Logout</button>
        </form>';
        }
        else {
            echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php" class="header-signup">Sign up</a>';
        }
    ?>


    
  </div>
</nav>

/* <?php
  $_SESSION['username'] = "Yousir1450";
  echo $_SESSION['username'];

  if (!isset($_SESSION['username'])) {
    echo " You are not logged in <br>";
  } else {
    echo " You're Logged in! <br>";
  }
?> */ <br>





