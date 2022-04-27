<?php
session_start();

if(!isset($_SESSION["zalogowany"]) || $_SESSION["zalogowany"] != true)
{
  header("location: ../../../login.php");
}

require "../../../wyloguj.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Zadanie 2C</title>
  </head>
  <body>
<form action="index.html" method="post">
  <p>Imię: <input type="text" name="imie" placeholder="Imię"></p>
  <p>Nazwisko: <input type="text" name="nazwisko" placeholder="Nazwisko"></p>
  <p>Ulica: <input type="text" name="ulica" placeholder="Ulica"></p>
  <p>Nr. Domu: <input type="number" name="nrdom" placeholder="Nr. Domu"></p>
  <p>Nr. Mieszkania: <input type="number" name="nrmieszkania" placeholder="Nr. Mieszkania"></p>
  <p>Kod Pocztowy: <input type="text" name="kodp" placeholder="Kod Pocztowy"></p>
  <p>Miasto: <input type="text" name="miasto" placeholder="Miasto"></p>
  <p>Województwo
    <select name="wojewodztwo">
    <option value="dolnoslaskie">Dolnośląskie</option>
    <option value="kujawsko-pomorskie">Kujawsko-Pomorskie</option>
    <option value="lubelskie">Lubelskie</option>
    <option value="lubuskie">Lubuskie</option>
    <option value="lodzkie">Łódzkie</option>
    <option value="malopolskie">Małopolskie</option>
    <option value="mazowieckie">Mazowieckie</option>
    <option value="opolskie">Opolskie</option>
    <option value="podkarpackie">Podkarpackie</option>
    <option value="podlaskie">Podlaskie</option>
    <option value="pomorskie">Pomorskie</option>
    <option value="slaskie">Śląskie</option>
    <option value="swietokrzyskie">Świętokrzyskie</option>
    <option value="warminsko-mazurskie">Warmińsko-Mazurskie</option>
    <option value="wielkopolskie">Wielkopolskie</option>
    <option value="zachodniopomorskie">Zachodniopomorskie</option>
  </select>
  </p>
  <p>Prawo Jazdy: <input type="checkbox" name="prawojazdy"></p>
  <p>Płeć:</p>
    <p>Mężczyzna: <input type="radio" name="plec" value="M"></p>
    <p>Kobieta: <input type="radio" name="plec" value="K"></p>
    <p>Uwagi </p>
    <textarea name="uwagi" rows="10" cols="80">Uwagi...</textarea>
    <p>Telefon: <input type="number" name="telefon" placeholder="nr. Telefonu"></p>
    <p>Data: <input type="date" name="data" value=""></p>
    <p>Hasło: <input type="password" name="haslo" placeholder="Hasło"></p>

    <button type="button" name="button">Przycisk</button>
    <button type="reset" name="button">Reset</button>
    <button type="submit" name="button">Wyślij</button>
</form>
  </body>
</html>
