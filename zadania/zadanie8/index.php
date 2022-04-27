<?php
session_start();

if(!isset($_SESSION["zalogowany"]) || $_SESSION["zalogowany"] != true)
{
  header("location: ../../login.php");
}

require "../../wyloguj.php";

$username = "root";
$servername = "localhost";
$password="";
$dbname = "bazalocal";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno())
{
  echo "Nie połączono z bazą danych: ".mysqli_connect_errno();
  exit;
}

if(isset($_POST["submit"]))
{
  if($_POST["submit"] == 'Dodaj')
  {
    $imie = $_POST["Imie"];
    $nazwisko = $_POST["Nazwisko"];
    $wiek = $_POST["Wiek"];

    $query = "INSERT osoby(Imie,Nazwisko,Wiek) VALUES('$imie','$nazwisko',$wiek)";
    $result = mysqli_query($conn, $query);
  }
  elseif($_POST["submit"] == 'Usuń')
  {
    $id = $_POST["hidden"];
    $query = "DELETE FROM osoby WHERE Id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result) echo mysqli_error($conn);
  }
  elseif($_POST["submit"] == 'Zapisz')
  {
    $id = $_POST["hidden"];
    $imie = $_POST["Imie"];
    $nazwisko = $_POST["Nazwisko"];
    $wiek = $_POST["Wiek"];

    $query = "UPDATE osoby SET Imie = '$imie', Nazwisko = '$nazwisko', Wiek = $wiek WHERE Id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result) echo mysqli_error($conn);
  }
    elseif($_POST["submit"] == 'Anuluj')
    {
      header("Refresh:0");
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Zadanie 8</title>
  </head>
  <link rel="stylesheet" href="style.css">
  <body>
    <main>
      <div id="header">
        <span class="id">Id</span>
        <span class="imie">Imię</span>
        <span class="nazwisko">Nazwisko</span>
        <span class="wiek">Wiek</span>
      </div>


    <?php
    $query = "SELECT * FROM osoby";
    $result = mysqli_query($conn,$query);
      while($row = mysqli_fetch_row($result))
      {
        if(isset($_POST["submit"]) && $_POST["submit"] == "Edytuj" && $_POST["hidden"] == $row[0])
        {
          echo '
          <form action="" method="post">
            <span class="id"><input type="text" name="Id" value="'.$row[0].'" readonly></span>
            <span class="imie"><input type="text" name="Imie" value="'.$row[1].'"></span>
            <span class="nazwisko"><input type="text" name="Nazwisko" value="'.$row[2].'"></span>
            <span class="wiek"><input type="number" name="Wiek" value="'.$row[3].'"></span>
            <input type="hidden" name="hidden" value="'.$row[0].'">
            <input type="submit" name="submit" value="Zapisz">
            <input type="submit" name="submit" value="Anuluj">
          </form>
          ';
        }
        else
        {
          echo '
          <form action="" method="post">
            <span class="id">'.$row[0].'</span>
            <span class="imie">'.$row[1].'</span>
            <span class="nazwisko">'.$row[2].'</span>
            <span class="wiek">'.$row[3].'</span>
            <input type="hidden" name="hidden" value="'.$row[0].'">
            <input type="submit" name="submit" value="Usuń">
            <input type="submit" name="submit" value="Edytuj">
          </form>
          ';
        }
      }
      mysqli_close($conn);
    ?>
    <form action="" method="post">
      <span class="id"></span>
      <span class="imie"><input type="text" name="Imie" value=""></span>
      <span class="nazwisko"><input type="text" name="Nazwisko" value=""></span>
      <span class="wiek"><input type="number" name="Wiek" value=""></span>
      <input type="hidden" name="hidden" value="">
      <input type="submit" name="submit" value="Dodaj">
    </form>
  </main>
  </body>
</html>
