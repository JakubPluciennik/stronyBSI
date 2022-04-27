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
    <title>Zadanie 7</title>
    <script src="script.js" charset="utf-8"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <main>
        <h1>Formularz zadanie 7</h1>
        <form action="wynik.php" method="POST">
          <div class="pole">Imię:
            <input type="text" name="imie" id="imie" placeholder="Imię">
          </div>
          <div class="pole">Nazwisko:
            <input type="text" name="nazwisko" id="nazwisko" placeholder="Nazwisko">
          </div>
          <div class="pole">Ulica:
            <input type="text" name="ulica" id="ulica" placeholder="Ulica">
          </div>
          <div class="pole">Nr. Domu:
            <input type="number" name="nrdom" id="nrdom" placeholder="Nr. Domu">
          </div>
          <div class="pole">Nr. Mieszkania:
            <input type="number" name="nrmieszkania" id="nrmieszkania" placeholder="Nr. Mieszkania">
          </div>
          <div class="pole">Kod Pocztowy:
            <input type="text" name="kodp" id="kodp" placeholder="Kod Pocztowy">
          </div>
          <div class="pole">Miasto:
            <input type="text" name="miasto" id="miasto" placeholder="Miasto">
          </div>
          <div class="pole">Województwo
            <select name="wojewodztwo" id="wojewodztwo">
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
          </div>
          <div class="pole">Prawo Jazdy: <input type="checkbox" id="prawojazdy" name="prawojazdy" value="tak"></div>
          <div class="pole">Płeć:
            <div class="pole plec">Mężczyzna: <input type="radio" name="plec" value="M" checked></div>
            <div class="pole plec">Kobieta: <input type="radio" name="plec" value="K"></div>
            </div>
            <div class="pole"> Uwagi:</div>
            <textarea name="uwagi" id="uwagi" placeholder="Uwagi..."></textarea>

            <div class="pole">Telefon:
               <input type="text" id="telefon" name="telefon" placeholder="nr. Telefonu" >
            </div>
            <div class="pole">Data:
              <input type="date" name="data" id="data" value="1970-01-01">
            </div>
            <div class="pole">Hasło:
              <input type="password" name="haslo" id="haslo" placeholder="Hasło" >
            </div>
            <input type="submit" name="submit" id="submit" value="Wyślij">
            <input type="reset" name="reset" id="reset" value="Reset">
          </form>
    </main>
  </body>
</html>
