<?php
session_start();

$login = strtolower($_POST["login"]);
$password = $_POST["password"];


if($login == "login" && $password == "hasło")
{
  $_SESSION["zalogowany"] = 1;
  $_SESSION["login"] = $login;
  header("location: index.php");
}
else
{
  ?>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Złe dane</title>
      <style>
      h3
      {
        text-indent: 30px;
      }
      body
      {
        font-family: Verdana, Helvetica, Arial;
        background-color: #4f4f4f;
      }
      main
      {
        margin:auto;
        min-width:500px;
        width:40%;
        padding:20px;
        background-color:#d4d4d4;
        border:2px solid black;
        border-radius:10px;
      }
      </style>
    </head>
    <body>
      <main>
      <h1>Podano złe dane</h1>
      <h3><a href="login.php">Powrót na stronę logowania </a></h3>
    </main>
    </body>
  </html>
<?php
 }
?>
