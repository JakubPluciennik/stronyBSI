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
    <title>Zadanie 3B</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<main>
  <div id="r1">
    <div class="obrazy">
      <div class="obraz">
          <img src="pictures/1.jpg" alt="Tekst alternatywny 1">
      </div>
      <div class="obraz">
          <img src="pictures/2.jpg" alt="Tekst alternatywny 2">
      </div>
      <div class="obraz">
          <img src="pictures/3.jpg" alt="Tekst alternatywny 3">
      </div>
      <div class="obraz">
          <img src="pictures/4.jpg" alt="Tekst alternatywny 4">
      </div>
      <div class="obraz">
          <img src="pictures/5.jpg" alt="Tekst alternatywny 5">
      </div>
    </div>

  <div class="opisy">
    <div class="opis">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar sapien elit, eget vulputate turpis lobortis nec. Vivamus convallis
    </div>
    <div class="opis">
      lectus ac ex aliquam, eu dignissim nulla mattis. Fusce enim nulla, consectetur sollicitudin tellus laoreet, sodales eleifend lectus.
    </div>
    <div class="opis">
      Suspendisse ut maximus felis, vitae bibendum urna. Fusce vel nisl non lacus facilisis placerat vel vitae nulla. Donec id est sit amet lacus
    </div>
    <div class="opis">
      Nam ut nulla dui. Morbi finibus, diam vel maximus euismod, mauris risus lobortis nunc, eu maximus mi sapien porttitor lorem. Etiam
    </div>
    <div class="opis">
       volutpat nibh ut ligula vulputate vulputate. Donec ac libero ultrices, auctor purus at, consequat nisl. Duis sit amet euismod dui, nec sagittis
    </div>
  </div>
</div>

<div id="r2">
  <div class="obrazy">
    <div class="obraz">
        <img src="pictures/6.jpg" alt="Tekst alternatywny 6">
    </div>
    <div class="obraz">
        <img src="pictures/7.jpg" alt="Tekst alternatywny 7">
    </div>
    <div class="obraz">
        <img src="pictures/8.png" alt="Tekst alternatywny 8">
    </div>
    <div class="obraz">
        <img src="pictures/9.jpg" alt="Tekst alternatywny 9">
    </div>
    <div class="obraz">
        <img src="pictures/10.jpg" alt="Tekst alternatywny 10">
    </div>
  </div>

  <div class="opisy">
    <div class="opis">
      lorem. Integer tincidunt eget velit varius congue. Nullam elementum eros tellus, ut dapibus ante ultrices bibendum. Donec commodo quis
    </div>
    <div class="opis">
      sapien in sollicitudin. Duis vitae ex consectetur, sodales neque accumsan, mollis diam. Nam egestas est at urna luctus bibendum. Praesent
    </div>
    <div class="opis">
      Sed est ex, scelerisque vitae malesuada et, vulputate vitae est. Sed enim eros, finibus a metus eu, porttitor bibendum odio. Vivamus
    </div>
    <div class="opis">
      aliquam nec enim id fringilla. Phasellus ut purus ullamcorper, posuere nunc eu, aliquam velit. Integer mollis ex est, quis viverra neque
    </div>
    <div class="opis">
      placerat nec. Nam ultrices risus sed sapien aliquet bibendum. Mauris luctus vel erat a mollis. Sed id posuere sem. Pellentesque ultrices
    </div>
  </div>
</div>

<div id="r3">
  <div class="obrazy">
    <div class="obraz">
        <img src="pictures/11.jpg" alt="Tekst alternatywny 11">
    </div>
    <div class="obraz">
        <img src="pictures/12.jpg" alt="Tekst alternatywny 12">
    </div>
    <div class="obraz">
        <img src="pictures/13.jpg" alt="Tekst alternatywny 13">
    </div>
    <div class="obraz">
        <img src="pictures/14.jpg" alt="Tekst alternatywny 14">
    </div>
    <div class="obraz">
        <img src="pictures/15.jpg" alt="Tekst alternatywny 15">
    </div>
  </div>

  <div class="opisy">
    <div class="opis">
       Vivamus a euismod turpis. Mauris vestibulum nisl nec massa semper dignissim. Mauris vitae nulla sit amet arcu laoreet rhoncus in at
    </div>
    <div class="opis">
      hendrerit maximus odio, eu lobortis quam venenatis sit amet. Praesent cursus turpis vitae justo bibendum, vitae mattis mi porttitor.
    </div>
    <div class="opis">
      ac iaculis velit diam vel lectus. Nullam facilisis fermentum tellus, eu ornare augue gravida eget. In hac habitasse platea dictumst. Nullam
    </div>
    <div class="opis">
      erat. Phasellus mattis quam posuere leo porta, ut pulvinar tellus sollicitudin. Aliquam sodales, nisl at fringilla congue, nisi lacus aliquet ex,
    </div>
    <div class="opis">
      Nullam condimentum libero vitae turpis tincidunt, sit amet eleifend nulla congue. Donec nibh nisi, rutrum at scelerisque ut, tempus at
    </div>
  </div>
</div>

    </main>
  </body>
</html>
