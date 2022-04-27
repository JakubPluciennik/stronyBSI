<?php
session_start();
if(isset($_POST["logout"]))
{
  $_SESSION = array();
  session_destroy();

  header("location: http://localhost/login.php");
  exit;
}

?>

  <head>
    <meta charset="utf-8">
    <style>
    .wyloguj
    {
      position:fixed;
      right:5px;
      top:5px;
    }
    .wyloguj input
    {
      padding:10px;
      border:2px solid black;
      border-radius:5px;
    }
    </style>
  </head>
  <body>
      <form class="wyloguj" action="" method="post">
        <input type="submit" name="logout" value="Wyloguj">
      </form>
  </body>
