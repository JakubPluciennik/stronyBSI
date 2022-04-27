<?php
session_start();

if(!isset($_SESSION["zalogowany"]) || $_SESSION["zalogowany"] != true)
{
  header("location: ../../login.php");
}

require "../../wyloguj.php";

$imie = $_POST["imie"];
if($imie=="") $imie = "-";

$nazwisko = $_POST["nazwisko"];
if($nazwisko =="") $nazwisko = "-";

$ulica = $_POST["ulica"];
if($ulica=="") $ulica = "-";

$nrdom = $_POST["nrdom"];
if($nrdom=="") $nrdom = "-";

$nrmieszkania = $_POST["nrmieszkania"];
if($nrmieszkania=="") $nrmieszkania = "-";

$kodp = $_POST["kodp"];
if($kodp=="") $kodp = "-";

$miasto = $_POST["miasto"];
if($miasto=="") $miasto = "-";

switch ($_POST["wojewodztwo"]) {
  case 'dolnoslaskie':
    $wojewodztwo = "Dolnośląskie";
    break;
  case 'kujawsko-pomorskie':
    $wojewodztwo = "Kujawsko-Pomorskie";
    break;
  case 'lubelskie':
    $wojewodztwo = "Lubelskie";
    break;
  case 'lubuskie':
    $wojewodztwo = "Lubuskie";
    break;
  case 'lodzkie':
    $wojewodztwo = "Łódzkie";
    break;
  case 'malopolskie':
    $wojewodztwo = "Małopolskie";
    break;
  case 'mazowieckie':
    $wojewodztwo = "Mazowieckie";
    break;
  case 'opolskie':
    $wojewodztwo = "Opolskie";
    break;
  case 'podkarpackie':
    $wojewodztwo = "Podkarpackie";
    break;
  case 'podlaskie':
    $wojewodztwo = "Podlaskie";
    break;
  case 'pomorskie':
    $wojewodztwo = "Pomorskie";
    break;
  case 'slaskie':
    $wojewodztwo = "Śląskie";
    break;
  case 'swietokrzyskie':
    $wojewodztwo = "Świętokrzyskie";
    break;
  case 'warminsko-mazurskie':
    $wojewodztwo = "Warmińsko-Mazurskie";
    break;
  case 'wielkopolskie':
    $wojewodztwo = "Wielkopolskie";
    break;
  case 'zachodniopomorskie':
    $wojewodztwo = "Zachodniopomorskie";
    break;
  default:
    $wojewodztwo = "-";
    break;
}

if(isset($_POST["prawojazdy"])) $prawojazdy = "Tak";
else $prawojazdy = "Nie";

$plec = $_POST["plec"];
if($plec=="K") $plec = "Kobieta";
else $plec = "Mężczyzna";

$uwagi = $_POST["uwagi"];
if($uwagi=="") $uwagi = "-";

$telefon = $_POST["telefon"];
if($telefon=="") $telefon = "-";

$data = $_POST["data"];

$haslo = $_POST["haslo"];
if($haslo=="") $haslo = "-";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Zadanie 7</title>
    <script src="script.js" charset="utf-8"></script>
    <link rel="stylesheet" href="style.css">
    <style>
    div
    {
      margin:5px;
    }
    #link
    {
      padding-top:30px;
      text-align: center;
    }

    </style>
  </head>
  <body>
      <main>
        <h1>Dane z formularza zadanie 7</h1>
        <?php
        echo "
          <div class='pole'>Podane imie: $imie
          </div>

          <div class='pole'>Podane nazwisko: $nazwisko
          </div>

          <div class='pole'>Ulica: $ulica
          </div>

          <div class='pole'>Nr. Domu: $nrdom
          </div>

          <div class='pole'>Nr. Mieszkania: $nrmieszkania
          </div>

          <div class='pole'>Kod Pocztowy: $kodp
          </div>

          <div class='pole'>Miasto: $miasto
          </div>

          <div class='pole'>Wybrano województwo: $wojewodztwo
          </div>

          <div class='pole'>Czy jest prawo jazdy?: $prawojazdy
          </div>

          <div class='pole'>Płeć: $plec
          </div>

          <div class='pole'> Uwagi: \"$uwagi\"
          </div>

          <div class='pole'>Numer telefonu: $telefon
          </div>

          <div class='pole'>Data: $data
          </div>

          <div class='pole'>Podane hasło: $haslo
          </div>
          <div id='link'><a href='index.php' >Powrót do Formularza</a></div>
          "
          ?>
    </main>
  </body>
</html>
