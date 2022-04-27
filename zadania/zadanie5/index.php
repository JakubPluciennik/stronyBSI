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
    <title>Zadanie 5</title>
    <script src="script.js" charset="utf-8"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <main>
        <form action="index.html" method="get">
          <div id="forminfo">Nazwy miast, ulic oraz imię i nazwisko zapisywać z dużej litery</div>
          <div class="pole">Imię: <span id="imieerr">&nbsp;</span> <span class="info" id="imiei">Maksymalna długość imienia 50 liter (Xxxxxx)</span>
            <input type="text" name="imie" id="imie" placeholder="Imię" onblur="sprawdzImie()">
          </div>
          <div class="pole">Nazwisko: <span id="nazwiskoerr">&nbsp;</span> <span class="info" id="nazwiskoi">Maksymalna długość nazwiska 150 liter (Xxxxxxxx lub Xxxxxx-Xxxxxx)</span>
            <input type="text" name="nazwisko" id="nazwisko" placeholder="Nazwisko" onblur="sprawdzNazwisko()">
          </div>
          <div class="pole">Ulica: <span id="ulicaerr">&nbsp;</span>
            <input type="text" name="ulica" id="ulica" placeholder="Ulica" onblur="sprawdz(this)">
          </div>
          <div class="pole">Nr. Domu: <span id="nrdomerr">&nbsp;</span>
            <input type="number" name="nrdom" id="nrdom" placeholder="Nr. Domu" onblur="nrDod(this)">
          </div>
          <div class="pole">Nr. Mieszkania:<span id="nrmieszkaniaerr">&nbsp;</span>
            <input type="number" name="nrmieszkania" id="nrmieszkania" placeholder="Nr. Mieszkania" onblur="nrDod(this)">
          </div>
          <div class="pole">Kod Pocztowy: <span id="kodperr">&nbsp;</span> <span class="info" id="kodpi">Format (XX-XXX)</span>
            <input type="text" name="kodp" id="kodp" placeholder="Kod Pocztowy" onblur="sprawdzKodP()">
          </div>
          <div class="pole">Miasto: <span id="miastoerr">&nbsp;</span>
            <input type="text" name="miasto" id="miasto" placeholder="Miasto" onblur="sprawdz(this)">
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
          <div class="pole">Prawo Jazdy: <input type="checkbox" id="prawojazdy" name="prawojazdy"></div>
          <div class="pole">Płeć:
            <div class="pole plec">Mężczyzna: <input type="radio" name="plec" value="M" checked></div>
            <div class="pole plec">Kobieta: <input type="radio" name="plec" value="K"></div>
            </div>
            <div class="pole"> Uwagi: <span id="uwagierr">&nbsp;</span> <span class="info" id="uwagii">Maksymalnie 1000 znaków</div>
            <textarea name="uwagi" id="uwagi" placeholder="Uwagi..." onblur="sprawdzUwagi()" onkeydown="sprawdzUwagi()"></textarea>
            <div class="pole">Telefon: <span id="telefonerr">&nbsp;</span> <span class="info" id="telefoni">Format (+XX xxx-xxx-xxx lub +XX xxxxxxxxx / +48 123-456-789 lub +48 123456789)</span>
               <input type="text" id="telefon" name="telefon" placeholder="nr. Telefonu" onblur="sprawdzTelefon()">
            </div>
            <div class="pole">Data:  <span id="dataerr">&nbsp;</span>
              <input type="date" name="data" id="data" value="1970-01-01">
            </div>
            <div class="pole">Hasło: <span id="hasloerr">&nbsp;</span> <span class="info" id="hasloi" >Minimum 8 znaków, max 100, co najmnniej jedna duża i mała litera, cyfra i znak specjalny</span>
              <input type="password" name="haslo" id="haslo" placeholder="Hasło" onblur="sprawdzHaslo()">
            </div>

            <button type="button" id="sprWsz" name="button" onclick="sprawdzWszystko(this)">Sprawdź</button>
            <button type="reset" name="button">Reset</button>
            <button type="button" id="sprWys" name="button" onclick="sprawdzWyslij()">Wyślij</button>
        </form>
    </main>
  </body>
</html>
