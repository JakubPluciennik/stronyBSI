<?php
session_start();

if(isset($_SESSION["zalogowany"]) && $_SESSION["zalogowany"] == true)
{
  header("location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <style>
    #dane
    {
      padding:20px;
    }
    h3
    {
      text-indent: 30px;
    }
    body
    {
      font-family: Verdana, Helvetica, Arial;
      background-color: #4f4f4f;
    }
    input
    {
      display:block;
      margin:5px;
      padding:5px;
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
    #submit
    {
      margin-top:40px;
      width:30%;
      height:40px;
    }
    </style>
  </head>
  <body>
    <main>
      <h1>Logowanie</h1>
      <h3>Podaj login i hasło</h3>
      <div id="dane">Dane do logowania: login - "login", hasło - "hasło"</div>
      <form class="form" action="check.php" method="post">
        <label>Login</label>
        <input type="text" name="login" value="login">
        <label>Hasło</label>
        <input type="password" name="password" value="hasło">
        <input id="submit" type="submit" name="submit" value="Zaloguj">
      </form>

    </main>
  </body>
</html>
