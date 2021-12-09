<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    $_SESSION['name']='Janusz';
    //echo session_id();
    echo session_id();
    session_destroy();
    //unset($_SESSION['name']);
    //session_destroy();
     ?>
     <br>
    <a href="2.php">2</a>
    <a href="3.php">3</a>
  </body>
</html>
