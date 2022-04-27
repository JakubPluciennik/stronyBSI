<?php
session_start();

if(!isset($_SESSION["zalogowany"]) || $_SESSION["zalogowany"] != true)
{
  header("location: ../../login.php");
}

require "../../wyloguj.php";

?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(function(){
      sideheight = $(".container").outerHeight();
      $(".side").css("height",`calc(${sideheight}px + 40px)`);

      $(".side").click(function(){
        spr = $(this).text();
        if(spr == "Ukryj kalkulator")
        {
          $(".container").removeClass("container-in");
           $(".container").addClass("container-out");
           $(".container").fadeOut(2000,"linear");
          $(this).text("Pokaż kalkulator");
        }
        else
        {
          $(".container").css("display","block");
          $(".container").removeClass("container-out");
          $(".container").addClass("container-in");
          $(".container").fadeIn(2000,"linear");
          $(this).text("Ukryj kalkulator");
        }
      });

      wynik = "";
      $(".btn").click(function(){
        current = $(this).attr("value");
        if(current == "=")
        {
          tmp = $("#wynik").val();
          if(tmp[0] == "*" || tmp[0] == "/")
          {
            wynik = "";
          }
          else
          {
            wynik = eval(tmp);
          }

          $("#wynik").val(wynik);
        }
        else if(current == "C")
        {
          wynik = "";
          $("#wynik").val(wynik);
        }
        else if (current == undefined) {

        }
        else
        {
          wynik+=current;
          $("#wynik").val(wynik);
        }
      })
    });
    </script>
    <style>
    body
    {
      background-color: #212529;
    }
    .container-out
    {

      animation-name:cont-out;
      animation-duration:2s;
      display:block;
    }
    @keyframes cont-out
    {
      from { left:0px;}
      to { left:calc(-50vw - 350px);}
    }
    .container
    {
      background-color:#6c757d;
      position:relative;
      margin-top:20px;
      padding-top:10px;
      width:60vw;
      max-width:700px;
      font-size:175%;
    }
    .container-in
    {
      animation-name:cont-in;
      animation-duration:2s;
      display:none;
    }
    @keyframes cont-in
    {
      from { left:calc(-50vw - 350px);}
      to { left:0px;}
    }

    .form-control-plaintext
    {
      background-color:white;
      text-align: right;
      font-size:3vmax;
      max-height:100px;
    }
    .btn-light, .btn-success
    {
      margin:2px;
      float:left;
      width:calc((100% / 3) - 4px);
      font-size:175%;
      height: calc((100% / 4) - 4px);
    }
    .klawiatura .btn:nth-child(3n)
    {
      float:none;
    }
    .klawiatura
    {
      width:80%;
      float:left;
    }
    .operacje
    {
      width:20%;
    }
    .operacje .btn:first-child
    {
      background-color:#f5756c;
      border-color:#f5756c;
    }
    .operacje .btn
    {
      margin-bottom:4px;
    }
    .side
    {
      writing-mode: vertical-lr;
      text-orientation:mixed;
      position:fixed;
      z-index:20;
      left:-5px;
      width:65px;
      height:500px;
    }
    </style>
    <title>Zadanie 9</title>
  </head>
  <body>
    <div class=" btn btn-success side">Pokaż kalkulator</div>
    <div class="container rounded container-in">
      <input type="text" readonly class="form-control-plaintext" name="wynik" id="wynik" value="">
      <div class="d-flex p-2 bd-highlight">
        <div class="klawiatura">
          <button type="button" class="btn btn-light" name="button" value="1">1</button>
          <button type="button" class="btn btn-light" name="button" value="2">2</button>
          <button type="button" class="btn btn-light" name="button" value="3">3</button>
          <button type="button" class="btn btn-light" name="button" value="4">4</button>
          <button type="button" class="btn btn-light" name="button" value="5">5</button>
          <button type="button" class="btn btn-light" name="button" value="6">6</button>
          <button type="button" class="btn btn-light" name="button" value="7">7</button>
          <button type="button" class="btn btn-light" name="button" value="8">8</button>
          <button type="button" class="btn btn-light" name="button" value="9">9</button>
          <button type="button" class="btn btn-light" name="button" value="0">0</button>
          <button type="button" class="btn btn-light" name="button" value=".">.</button>
          <button type="button" class="btn btn-success" name="button" value="=">=</button>
        </div>
        <div class="operacje btn-group-vertical">
          <button type="button" class="btn btn-light" name="button" value="C">C</button>
          <button type="button" class="btn btn-light" name="button" value="/">&div;</button>
          <button type="button" class="btn btn-light" name="button" value="*">*</button>
          <button type="button" class="btn btn-light" name="button" value="-">-</button>
          <button type="button" class="btn btn-light" name="button" value="+">+</button>
        </div>
      </div>
    </div>
  </body>
</html>
