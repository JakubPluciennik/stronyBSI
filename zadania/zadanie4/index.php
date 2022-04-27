<?php
session_start();

if(!isset($_SESSION["zalogowany"]) || $_SESSION["zalogowany"] != true)
{
  header("location: ../../login.php");
}

require "../../wyloguj.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="script.js" charset="utf-8"></script>
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 4</title>
  </head>
  <body>
    <main>
      <input type="text" id="rownanie" value="">
      <div id="klawiatura">
        <button type="button" name="val1" value="1" onclick="wpisz(this)">1</button>
        <button type="button" name="val2" value="2" onclick="wpisz(this)">2</button>
        <button type="button" name="val3" value="3" onclick="wpisz(this)">3</button>
        <button type="button" name="val4" value="4" onclick="wpisz(this)">4</button>
        <button type="button" name="val5" value="5" onclick="wpisz(this)">5</button>
        <button type="button" name="val6" value="6" onclick="wpisz(this)">6</button>
        <button type="button" name="val7" value="7" onclick="wpisz(this)">7</button>
        <button type="button" name="val8" value="8" onclick="wpisz(this)">8</button>
        <button type="button" name="val9" value="9" onclick="wpisz(this)">9</button>
        <button type="button" name="val0" value="0" onclick="wpisz(this)">0</button>
        <button type="button" name="dot" value="." onclick="wpisz(this)">.</button>
        <button type="button" name="plus" value="=" onclick="wykonaj()" id="rwn">=</button>
      </div>
      <div id="operacje">
        <button type="button" name="plus" value="C" onclick="czysc()" id="clear">C</button>
        <button type="button" name="plus" value="/" onclick="wpisz(this)">&div;</button>
        <button type="button" name="plus" value="*" onclick="wpisz(this)">*</button>
        <button type="button" name="plus" value="-" onclick="wpisz(this)">-</button>
        <button type="button" name="plus" value="+" onclick="wpisz(this)" id="plus">+</button>

      </div>
    </<main>
  </body>
</html>
