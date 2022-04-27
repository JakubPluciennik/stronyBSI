<?php
session_start();

if(!isset($_SESSION["zalogowany"]) || $_SESSION["zalogowany"] != true)
{
  header("location: login.php");
}

require "wyloguj.php" ;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" >
        <title>Jakub Płuciennik</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <h1>Jakub Płuciennik - Zadania</h1>
        <div class="zadania">
          <div id="zad2" class="active">
            Zadanie 2
            <a href="zadania/zadanie2/2a">Zadanie 2A</a>
            <a href="zadania/zadanie2/2b">Zadanie 2B</a>
            <a href="zadania/zadanie2/2c">Zadanie 2C</a>
          </div>
          <div id="zad3" class="active">
            Zadanie 3
            <a href="zadania/zadanie3/3a">Zadanie 3A</a>
            <a href="zadania/zadanie3/3b">Zadanie 3B</a>
            <a href="zadania/zadanie3/3c">Zadanie 3C</a>
          </div>
          <div id="zad4" class="active">
            Zadanie 4
            <a href="zadania/zadanie4">Zadanie 4</a>
          </div>
          <div id="zad5" class="active">
            Zadanie 5
            <a href="zadania/zadanie5">Zadanie 5</a>
          </div>
          <div id="zad6" class="active">
            Zadanie 6
            <a href="zadania/zadanie6">Zadanie 6</a>
          </div>
          <div id="zad7" class="active">
            Zadanie 7
            <a href="zadania/zadanie7">Zadanie 7</a>
          </div>
          <div id="zad8" class="active">
            Zadanie 8
            <a href="zadania/zadanie8">Zadanie 8</a>
          </div>
          <div id="zad9" class="active">
            Zadanie 9
            <a href="zadania/zadanie9">Zadanie 9</a>
          </div>
          </div>
        </div>
      </div>
        <footer><p>Jakub Płuciennik &copy 2021 </p></footer>
    </body>
</html>
